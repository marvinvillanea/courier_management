<?php
// echo "<pre>";
//     var_dump($_POST);
// echo "</pre>";

require '../vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, '../');
$dotenv->load();

if(isset($_GET["action"]) ){
    $action = $_GET['action'];
} elseif (isset($_POST["action"])) {
   
    $action = $_POST['action'];
    if($action == "courier_approval"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->ApprovalCourierRegister();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if($action == "getDetailsCourier"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->getDetailsCourier();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if($action == "getDetailsDisapprovedCourier"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->getDetailsDisApprovedCourier();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if($action == "get_details_courier"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->viewDetailsCourierStatus();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if($action == "get_details_users"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->get_details_users();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if($action == "get_details_blacklist_courier"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->viewDetailsCourierBlacklist();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if($action == "blacklist_courier"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $blacklisting = $crud->blacklist_courier();
        if($blacklisting)
            echo $blacklisting;
    }

    if(isset($_POST["type"])){
        if($_POST["type"] == "users"){
            include('controller/UsersControllerClass.php');
            if($action == "get_details_parcel"){
                $crud = new UsersControllerClass();
                $details = $crud->getDetailsParcel();
                if($details)
                    echo $details;
            }
            if($action == "get_details_parcel_delivered"){
                $crud = new UsersControllerClass();
                $details = $crud->getDetailsParcelDelivered();
                if($details)
                    echo $details;
            }

            if($action == "get_details_parcel_defective"){
                $crud = new UsersControllerClass();
                $details = $crud->getDetailsParceldefective();
                if($details)
                    echo $details;
            }

            if($action == "rate_courier") {
                $crud = new UsersControllerClass();
                $details = $crud->rate_courier();
                if($details)
                    echo $details;
            }

            if($action == "stor_defective_items"){
                $crud = new UsersControllerClass();
                $details = $crud->stor_defective_items();
                if($details)
                    echo $details;
            }
            if($action == "get_details_parcel_defectives"){
                $crud = new UsersControllerClass();
                $details = $crud->get_details_parcel_defectives();
                if($details)
                    echo $details;
            }

           
        }

        if($_POST["type"] == "courier"){
            include('controller/CourierControllerClass.php');
            if($action == "get_details_parcel"){
                $crud = new CourierControllerClass();
                $details = $crud->getDetailsParcel();
                if($details)
                    echo $details;
            }

            if($action == "get_details_parcel_updates"){
                $crud = new CourierControllerClass();
                $details = $crud->getDetailParcelUpdates();
                if($details)
                    echo $details;
            }
            
            if($action == "update_parcel"){
                $crud = new CourierControllerClass();
                $details = $crud->update_parcel();
                if($details)
                    echo $details;
            }

            if($action == "on_going_transaction"){
                $crud = new CourierControllerClass();
                $details = $crud->on_going_transaction();
                if($details)
                    echo $details;
            }
            
            if($action == "update_notify_courier"){
                $crud = new CourierControllerClass();
                $details = $crud->update_notify_courier();
                if($details)
                    echo $details;
            }
        }

        if($_POST["type"] == "review"){
            if($action == "get_review_courier"){
                require '../database/connection.php';
                include('controller/ReviewCourier.php');
            }
        }
        
    }
  
}
?>