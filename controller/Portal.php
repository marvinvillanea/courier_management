<?php 

function registerParcel($db, $data){
    $getID = $db->Insert("INSERT INTO users (username,email,`password`,`status`,user_type) VALUES (?,?,?,?,?)", array($data["username"],$data["email"],$data["password"], 1,2) );
    if($getID){
        $_SESSION['user_id'] = $getID;
        $_SESSION["user_type"] =  2;
        $image = "https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg";
        $get_p_info_id = $db->Insert("INSERT INTO personal_info (`user_id`,`image`,`city`,`province`,`zip_code`,`barangay`,`zone`,`landmark`) VALUES (?,?,?,?,?,?,?,?)", [$getID,$image,"Anao","Tarlac","2310", $data["barangay"], $data["zone"], $data["landmark"]]);
        if($get_p_info_id){
            // if($db->Insert("INSERT INTO address_info (`p_info_id`) VALUES (?)", [$get_p_info_id])){
            //     return true;
            // }
            return true;
        }
    }
    return false;
}

function registerCourier($db, $data){
    $getID = $db->Insert("INSERT INTO users (username,email,`password`,`status`,user_type) VALUES (?,?,?,?,?)", array($data["username"],$data["email"],$data["password"], 0,3) );
    if($getID){
        $_SESSION['user_id'] = $getID;
        $_SESSION["user_type"] = 3;
        $image = "https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg";
        $get_p_info_id = $db->Insert("INSERT INTO personal_info (`user_id`,`image`,`city`,`province`,`zip_code`,`barangay`,`zone`,`landmark`) VALUES (?,?,?,?,?,?,?,?)", [$getID,$image,"Anao","Tarlac","2310", $data["barangay"], $data["zone"], $data["landmark"]]);
        if($get_p_info_id){
            if($db->Insert("INSERT INTO courier_details (`p_info_id`,`resume`,`description`) VALUES (?,?,?)", [$get_p_info_id,$data["resume"],$data["textarea-input"]])){
                return true;
            }
        }
    }
    return false;
}


function getMyUrl()
{
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
//   return $protocol.$server.$port;
    // return getenv('URL_HOST');
    return $protocol.$server;
}

function insertToken($db){
    $token = bin2hex(random_bytes(16));
    $db->Insert("INSERT INTO access_token (access_token,`user_id`) VALUES (?,?)", array($token, $_SESSION["user_id"]) );
    $_SESSION['access_token'] = $token;
}

function getDetailsUsers($db){
    $data = $db->Select("SELECT * FROM access_token
    inner join users using(user_id)
     where access_token = ?  order by token_id desc limit 1", array($_SESSION["access_token"]));
    if(count($data) > 0){
        return $data[0];
    } else {
        return false;
    }
    
}


function getDetailsUsersInformation($db){
    $data = $db->Select("SELECT * FROM users inner join personal_info using(user_id) where user_id = ? limit 1",array($_SESSION["user_id"]) );
    return $data[0];
}

function updateUSerProfile($db){
    extract($_POST);
    try {
        $folder = "images/profile";
        $temp = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)).'.'. end($temp);
        $db_path ="$folder".$newfilename ;
        // //remove the .
        // $listtype = array(
        // '.jpg'=>'application/jpeg',
        // '.png'=>'application/png'
        // ); 
        if ( is_uploaded_file( $_FILES['image']['tmp_name'] ) )
        {
            // if($key = array_search($_FILES['image']['type'],$listtype))
            // {
                if (move_uploaded_file($_FILES['image']  ['tmp_name'],"$folder".$newfilename))
                {
                    // $path =  $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/'.$db_path;
                    $link = getMyUrl().'/'.$db_path;
                    // $image = "https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg";
                    $data = $db->Update("update personal_info SET first_name = ?, last_name = ? , middle_name = ?, zone = ?, city = ?, province = ?, zip_code = ?, barangay = ?, house_no = ?, birthdate = ?, gender = ?, contact_no = ?, image = ?, landmark = ?  WHERE user_id = ? ", array(
                        $first_name,
                        $last_name,
                        $middle_name,
                        $zone,
                        $city,
                        $province,
                        $zip_code,
                        $barangay,
                        $house_no,
                        $birthdate,
                        $gender,
                        $contact_no,
                        $link,
                        $landmark,
                        $_SESSION["user_id"]));

                   
                    return true;

                    
                }
                return false;
            // }
            // else    
            // {
            //     // echo "File Type Should Be .Docx or .Pdf or .Rtf Or .Doc";
            //     return "1";
            // }
        } else {
            $data = $db->Update("update personal_info SET first_name = ?, last_name = ? , middle_name = ?, zone = ?, city = ?, province = ?, zip_code = ?, barangay = ?, house_no = ?, landmark = ? , birthdate = ?, gender = ?, contact_no = ?  WHERE user_id = ? ", array(
                $first_name,
                $last_name,
                $middle_name,
                $zone,
                $city,
                $province,
                $zip_code,
                $barangay,
                $house_no,
                $landmark,
                $birthdate,
                $gender,
                $contact_no,
                $_SESSION["user_id"]));
        }
        return false;
    } catch(\Exception $e) {
        // return $e->getMessage();
        return false;
    }
    
}
function getCourierDetails($db){
    $data = $db->Select("SELECT * FROM users 
    inner join personal_info using(user_id) 
    where status = 1 and user_type = 3 and first_name is not null and last_name is not null and middle_name is not null  ");
    return $data;
    // return $data[0];
}

function getAvailableCourier($db){
    $data = $db->Select("SELECT * FROM users 
    inner join personal_info using(user_id) 
    where status = 1 and user_type = 3 and first_name is not null and last_name is not null and middle_name is not null order by rand() limit 1 ");
    return $data;
    // return $data[0];
}

function getWeightAmount($db){
    $data = $db->Select("SELECT * FROM set_weight ");
    return $data;
}

function getaddressOptional($db){
    $data = $db->Select("select * from address_info where user_id = ? ", array($_SESSION["user_id"]));
    return $data;
}

function addParcelUsers($db){
    extract($_POST);
    try {

        $amount = 50;
        
        if(isset($selected_address) && $selected_address == "new"){
            // $address_sender = $address_sender;
            $address_sender = $zone. ' '.$barangay.', '."Anao City". ", Tarlac". " 2310 "; 
            $db->Insert("INSERT INTO address_info (`user_id`,`address`) VALUES (?,?)", [
                $_SESSION["user_id"],
                $address_sender
            ]);
        } else {
            $address_sender  = $selected_address;
        }
        $recepient_address = ' '.$receiver_zone.' '.$receiver_barangay.', '.$receiver_city. ', '.$receiver_province.' '.$receiver_zipcode.' ';
        $get_parcel = $db->SELECT("select * from parcel_details where parcel_number = ? ", [$parcel_number]);
        if(count($get_parcel) > 0){
            echo "FAILED";
        } else {
            $get_p_info_id = $db->Insert("INSERT INTO parcel_details (`user_id`,`idcourier_details`,`recepient_name`,`recepient_address`,`recepient_contact_no`,`parcel_number`,`type_delivery`,`weight_id`,`amount`,`address_sender`,`parcel_description`) VALUES (?,?,?,?,?,?,?,?,?,?,?)", [
                $_SESSION["user_id"],
                $idcourier_details,
                $recepient_name,
                $recepient_address,
                $recepient_contact_no,
                $parcel_number,
                $type_delivery,
                $weight_id,
                $amount,
                $address_sender,
                $parcel_description
            ]);
            $description = "You got New Order # ".$parcel_number." ".date('y-m-d h:m:s');
            $get_Details_courier = $db->SELECT("select * from personal_info where user_id = ? ", [$idcourier_details]);
            if(count($get_Details_courier) > 0){
                
                $db->Insert("INSERT INTO courier_notify (`user_id`,`description`) VALUES (?,?)", [
                    $idcourier_details,
                    $description
                ]);  
                $to = $get_Details_courier[0]->contact_no;
                sentMessage($to, $description, $db);
                
            }
        }
        
       
    } catch(\Exception $e) {
        return $e->getMessage();
        // return false;
    }
}

 function getBalance($db){
    try {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.movider.co/v1/balance', [
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'api_key' => '2H7GtWOeyWYMff0XzK7en5zEdy6',
                'api_secret' => 'l8KFeCstZZokPZFEW0n8ci8L21k9PQ',
            ]
        ]);
        savelog($response->getBody(), $db);
        $data = json_decode($response->getBody());
        if(isset($data->amount)){
            return $data->amount > 0.100 ? true : false;
         }
        return false;
    } catch(\Exception $e) {
        $data = $e->getMessage();
    }
    
}

 function sentMessage($to,$text,$db){

    if(getBalance($db)){

        $client = new \GuzzleHttp\Client();
        $form_params =[
            'api_key' => '2H7GtWOeyWYMff0XzK7en5zEdy6',
            'api_secret' => 'l8KFeCstZZokPZFEW0n8ci8L21k9PQ',
            'from' => 'MVDSMS',
            'to' => $to,
            'text' => $text,
        ];
        savelog(json_encode($form_params), $db);
        $response = $client->request('POST', 'https://api.movider.co/v1/sms', [
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => $form_params
        ]);
        savelog($response->getBody(), $db);
        $data = json_decode($response->getBody());
        if(isset($data->remaining_balance)){
            return true;
        }
        return false;
    }

    return false;
    
}

function savelog($data , $db){
    // $this->db->Insert()
   $db->Insert("INSERT INTO error_logs (descriptions) VALUES (?) ", array($data ));
}

?>