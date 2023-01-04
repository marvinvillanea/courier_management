<?php 

require  __DIR__.'/vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();
include('./pages/header.php'); 

include('./database/connection.php');
session_start();

if(isset($_SESSION['access_token']))
header("location:index.php?page=home");

$message = "";
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
    // collect value of input field
    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $password = $_POST["password"];
        $usernaem = $_POST["username"];
       
        if (empty($email) && empty($password) && empty($usernaem) ) {
            $message = "Please fill in the form!...";
        } elseif (empty($email)) {
            $message = "Email is empty";
        } elseif (empty($password)) {
            $message = "Password is empty";
        } elseif (empty($password)) {
            $message = "Username is empty";
        } 
        
        
        else {

            // type of register
            $type = 2; // 2 is parcel , 3 is driver
            if(isset($_POST["courier_register"])) {
                $type = 3;
            }
            include('./controller/Portal.php');
            $db = new DatabaseClass();
            $data = $db->Select("SELECT * FROM users where email = ?  ", [$email]);
            if(count($data) > 0) {
                $message = "Email Already Exist!..";
            }else {
                $barangay = isset($_POST["list-barangay"]) ? $_POST["list-barangay"] : '';
                $zone =  isset($_POST["zone_number"]) ? $_POST["zone_number"] : '';
                $landmark = isset($_POST["landmark"]) ? $_POST["landmark"] : '';
                if ($type == 2){
                    // $register = new Portal();
                    $data_post = [
                        "username" => $usernaem,
                        "email" => $email,
                        "password" => $password,
                        "barangay" => $barangay,
                        "zone" => $zone,
                        "landmark" => $landmark,
                        "type" => 2,
                    ];
                    if(registerParcel($db, $data_post)){
                        // $token = bin2hex(random_bytes(16));
                        // $_SESSION['access_token'] = $token;
                        insertToken($db);
                        header("location:index.php?page=user_home");
                    } else {
                        $message = "Something is wrong!...";
                    }
                } else {
                    $folder = "Resume/";
                    $temp = explode(".", $_FILES["file-input"]["name"]);
                    $newfilename = round(microtime(true)).'.'. end($temp);
                    $db_path ="$folder".$newfilename ;
                    // //remove the .
                    $listtype = array(
                    '.doc'=>'application/msword',
                    '.docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    '.rtf'=>'application/rtf',
                    '.pdf'=>'application/pdf'); 
                    if ( is_uploaded_file( $_FILES['file-input']['tmp_name'] ) )
                    {
                        if($key = array_search($_FILES['file-input']['type'],$listtype))
                        {
                            if (move_uploaded_file($_FILES['file-input']  ['tmp_name'],"$folder".$newfilename))
                            {
                                // $path =  $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/'.$db_path;
                                $link = getMyUrl().'/'.$db_path;
                                
                                $data_post = [
                                    "username" => $usernaem,
                                    "email" => $email,
                                    "password" => $password,
                                    "resume" => $link ,
                                    "textarea-input" => $_POST["textarea-input"],
                                    "barangay" => $barangay,
                                    "zone" => $zone,
                                    "landmark" => $landmark,
                                    "type" => 3,
                                ];
                                if(registerCourier($db, $data_post)){
                                    // $token = bin2hex(random_bytes(16));
                                    // $_SESSION['access_token'] = $token;
                                    insertToken($db);
                                    header("location:index.php?page=user_home");
                                } else {
                                    $message = "Something is wrong!...";
                                }
                                
                            }
                        }
                        else    
                        {
                           $message = "File Type Should Be .Docx or .Pdf or .Rtf Or .Doc";
                        }
                    } 
                }
                
            }
        }
    }
   
}
?>
    <div class="page-wrapper">
        <div class="page-content" style="height: 250vh;">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <!-- <img src="images/icon/logo.png" alt="CoolAdmin"> -->
                                <img src="images/icon/logo_courier.png" alt="pasuyo" style="height: 160px"/>
                            </a>
                        </div>
                        <div class="text-center title-3 p-5">
                            <span>Hi! Welcome to Pasuyo Delivery</span>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="au-input au-input--full" type="text" placeholder="Anao" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Province</label>
                                    <input class="au-input au-input--full" type="text" placeholder="Tarlac" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input class="au-input au-input--full" type="number" placeholder="2310" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Barangay</label>
                                    <select name="list-barangay" id="list-barangay" class="form-control">
                                        <?php 
                                         $db = new DatabaseClass();
                                         $data = $db->Select("SELECT * FROM barangay order by name asc  ");
                                         $option = '';
                                         if(count($data) > 0) {
                                            foreach ($data as $key => $value) {
                                                $option .= "<option value='".$value["name"]."'>".$value["name"]."</option>";
                                            }
                                            echo $option;
                                         } else {
                                            echo "<option>N/A</option>";
                                         }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Zone</label>
                                    <select name="zone_number" id="zone_number" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7"></option>
                                    </select>
                                    <!-- <input class="au-input au-input--full" type="text" name="zone_number" id="zone_number" placeholder="Zone #"> -->
                                </div>
                                <div class="form-group">
                                    <label>Landmark</label>
                                    <input class="au-input au-input--full" type="text" name="landmark" id="landmark" placeholder="Landmark(optional)">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="courier_register" id="apply_courier" onclick="app_CourierCheck()">Applying for Courier?
                                    </label>
                                </div>
                                <div id="for_applying_only" style="display:none;">
                                    <!-- <div class="form-group">
                                        <label>Upload Resume :</label>
                                        <input type="file" id="file-input" name="file-input" class="form-control-file" require>
                                    </div>
                                    <div class="form-group">
                                        <label>Tell me about yourself.</label>
                                        <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..."  class="au-input au-input--full" require></textarea>
                                    </div> -->
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                               
                                <!-- <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button> -->
                                <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit" value="register">
                                <center><?php echo $message; ?></center>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="index.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script>
function app_CourierCheck() {
    var checkBox = document.getElementById("apply_courier");
    var text = document.getElementById("for_applying_only");
    if (checkBox.checked == true){
        text.style.display = "block";
        $("#for_applying_only").append('<div id="removetest"><div class="form-group"><label>Upload Resume :</label><input type="file" id="file-input" name="file-input" class="form-control-file" require></div><div class="form-group"><label>Tell me about yourself.</label><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..."  require></textarea></div></div>');
    } else {
        text.style.display = "none";
        $("#removetest").remove();
    }
}
</script>
<?php include('./pages/footer.php') ?>