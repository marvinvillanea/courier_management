
<?php 
require  __DIR__.'/vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();

include('./database/connection.php');
include('./controller/security.php');
include('./controller/Portal.php');

?>

<?php include('./pages/header.php') ?>
<?php $db = new DatabaseClass(); // initialize db?>
<?php $users_details = getDetailsUsers($db); 
    if(!$users_details){
        header("location:logout.php");
    }
?>
    <?php 
        $level = [
            "admin" => [
                "home",
                "list_courier",
                "tracking_parcel",
                "report",
                "set_weight",
                "disapproved_courier",
                "inventory",
                "users",
                "blacklisted_courier",
            ],
            "users" =>[
                "user_home",
                "parcel",
                "all_list",
                "parcel_status",
                "rate_courier",
                "pending",
                "on_process",
                "denied",
                "delivered",
                "unsccesfull_deliver",
                "list_nofity",
            ],
            "courier" => [
                "user_home",
                "new_parcel",
                "all_list",
                "parcel_status",
                "denied",
                "delivered",
                "unsccesfull_deliver",
                "list_nofity",
            ]
        ];
        $accessable = ["logout"];
        $home_page = $_SESSION["user_type"] == 1 ? 'home' : 'user_home';
        $home_page = $_SESSION["user_type"] == 3 ? 'user_home' : $home_page;
        $page = isset($_GET['page']) ? $_GET['page'] : $home_page;
        if(!isset($_GET["page"])) {
            header('Location: index.php?page='.$page);//go home
        }
        $folder_type = $_SESSION["user_type"] == 1 ? 'admin/' : 'users/';
        $folder_type = $_SESSION["user_type"] == 3 ? 'courier/' : $folder_type;
        if(!file_exists($folder_type.$page.".php")){
            if(in_array($page, $accessable)){
                include $page.'.php';
            } else {
                include '404.html';
            }
        } else {
            if($_SESSION["user_type"] == 1){
                if(in_array($page, $accessable)){
                    include $page.'.php';
                } elseif (in_array($page, $level["admin"])) {
                    include('./admin/'.$page.'.php');
                } else {
                    include '404.html';
                }
                
            }elseif($_SESSION["user_type"] == 3) {
                $information = getDetailsUsersInformation($db);
                if(in_array($page, $accessable)){
                    include $page.'.php';
                } elseif (in_array($page, $level["courier"])) {
                    // include $page.'.php';
                    include('./courier/'.$page.'.php');
                } else {
                    include '404.html';
                }
            }else {
                $information = getDetailsUsersInformation($db);
                if(in_array($page, $accessable)){
                    include $page.'.php';
                } elseif (in_array($page, $level["users"])) {
                    // include $page.'.php';
                    include('./users/'.$page.'.php');
                } else {
                    include '404.html';
                }
            }
        }
       
    ?>

    
<?php include('./pages/footer.php') ?>