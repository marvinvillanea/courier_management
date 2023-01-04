
<div class="page-wrapper">
    
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./users/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
       
        <?php include('./users/header.php');?>

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Orders</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Add Order</li>
                                    </ul>
                                </div>
                                <!-- <button class="au-btn au-btn-icon au-btn--green">
                                    <i class="zmdi zmdi-plus"></i>add item</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->
        
        <div class="col-lg-12" style="margin-top:20px;">
            <div class="card">
                <div class="card-header">Add Order</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Sender Information</h3>
                    </div>
                    <hr>
                    <?php 

                    $message = "";
                    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
                    //    updateUSerProfile($db);
                       if(addParcelUsers($db)){
                            $message = "Successfuly Update";
                            header('location:index.php?page=parcel');
                       }
                        // echo "<pre>";
                        //     var_dump($_POST);    
                        // echo "</pre>";
                    }
                    ?>
                    <!-- <form action="" method="post" novalidate="novalidate"> -->
                    <form  action="<?php echo $_SERVER['PHP_SELF'];?>?page=parcel" id="add_parcel"  method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="cc-first_name" class="control-label mb-1">Name:</label>
                            <input id="cc-first_name"  type="text" class="form-control"  value="<?php echo ucfirst($information["first_name"])." ".ucfirst(substr($information["middle_name"],0,1)). ". ".ucfirst($information["last_name"]) ;  ?>" disabled>
                        </div>
                        <!-- <div class="form-group has-success">
                            <label for="cc-address" class="control-label mb-1">Address</label>
                            <input id="cc-address" name="cc-address" type="text" class="form-control cc-address valid" value="<?php echo ucfirst($information["street"]).", ".ucfirst($information["barangay"]). ", ".ucfirst($information["city"]). ", ".ucfirst($information["province"]). ", ".ucfirst($information["zip_code"]) ;  ?>" disabled>
                        </div> -->
                        <div class="form-group">
                            <label class=" form-control-label">Address:</label>
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label " >
                                            <input type="radio" id="radio1" name="selected_address" value="<?php echo ucfirst($information["street"]).", ".ucfirst($information["barangay"]). ", ".ucfirst($information["city"]). ", ".ucfirst($information["province"]). ", ".ucfirst($information["zip_code"]) ;  ?>" checked class="form-check-input"><?php echo ucfirst($information["street"]).", ".ucfirst($information["barangay"]). ", ".ucfirst($information["city"]). ", ".ucfirst($information["province"]). ", ".ucfirst($information["zip_code"]) ;  ?>
                                        </label>
                                    </div>
                                    <?php
                                        $list_optional_address = getaddressOptional($db);
                                        if(count($list_optional_address) > 0){
                                            foreach ($list_optional_address as $key => $value) {
                                                ?>
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label">
                                                        <input type="radio" id="radio2" name="selected_address" value="<?php echo ucfirst($value["address"]) ;  ?>"  class="form-check-input"><?php echo ucfirst($value["address"]) ;  ?>
                                                        </label>
                                                    </div>
                                                <?php
                                            }
                                            
                                        } 
                                    ?>
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label" style="width:100%" >
                                            <input type="radio" id="radio3" name="selected_address" value="new"  class="form-check-input"> 
                                            <input id="cc-other_address" name="address_sender" type="text" class="form-control " value="" placeholder="Other address">
                                        </label>
                                    </div>
                                    
                                </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="parcel_number" class="control-label mb-1">Order number</label>
                            <input id="parcel_number" name="parcel_number" type="tel" class="form-control " value="" >
                            <!-- <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span> -->
                        </div>
                        <div class="form-group">
                            <label for="parcel_description" class="control-label mb-1">Order Description</label>
                            <input id="parcel_description" name="parcel_description" type="tel" class="form-control " value="">
                            <!-- <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span> -->
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Contact NO.</label>
                            <input id="cc-number" type="tel" class="form-control " value="<?php echo $information["contact_no"] ?>" disabled>
                            <!-- <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span> -->
                        </div>
                       
                        <div>
                        <div class="card-title">
                            <h3 class="text-center title-2">Receiver Information</h3>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="recepient_name" class="control-label mb-1">Name:</label>
                            <input id="recepient_name" name="recepient_name" type="text" class="form-control"  value="" >
                        </div>
                        <div class="form-group">
                            <label for="recepient_contact_no" class="control-label mb-1">Contact NO.</label>
                            <input id="recepient_contact_no" name="recepient_contact_no" type="tel" class="form-control " value="" >
                            <!-- <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span> -->
                        </div>
                       
                        <div class="form-group has-success">
                            <label for="recepient_address" class="control-label mb-1">Address</label>
                            <input id="recepient_address" name="recepient_address" type="text" class="form-control cc-name valid"  >
                            <!-- <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span> -->
                        </div>
                        <div class="card-title">
                            <h3 class="text-center title-2">Delivery Information</h3>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Name:</label>
                            <!-- <input id="cc-pament" name="cc-payment" type="text" class="form-control"  value="" > -->
                            <select name="idcourier_details" id="idcourier_details" class="form-control">
                                <?php 
                                    $list_courier = getCourierDetails($db);
                                    if(count($list_courier) > 0){
                                        foreach ($list_courier as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value["user_id"] ?>"><?php echo ucfirst($value["first_name"])." ".ucfirst(substr($value["middle_name"],0,1)). ". ".ucfirst($value["last_name"]);  ?></option>
                                            <?php
                                        }
                                        
                                    } else {
                                        ?>
                                        <option>No courier Available!..</option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Type</label>
                            <!-- <input id="cc-number" name="cc-number" type="tel" class="form-control " value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number"> -->
                            <select name="type_delivery" id="type_delivery" class="form-control ">
                                <option value="Pickup">Pick-up</option>
                                <option value="Delivery">Delivery</option>
                            </select>
                            <!-- <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span> -->
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Weight</label>
                            <!-- <input id="cc-number" name="cc-number" type="tel" class="form-control " value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number"> -->
                            <select name="weight_id" id="weight_id" class="form-control ">
                                <?php 
                                    $list_weight = getWeightAmount($db);
                                    if(count($list_weight) > 0){
                                        foreach ($list_weight as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value["weight_id"] ?>"><?php echo ucfirst($value["description"])." - ".ucfirst($value["amount"]);  ?></option>
                                            <?php
                                        }
                                        
                                    } else {
                                        ?>
                                        <option>No data Available!..</option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                            <!-- <button id="payment-button" type="submit" class="btn btn-primary profile-button"> -->
                                <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                <!-- <span id="payment-button-amount">Submit</span>
                                <span id="payment-button-sending" >Sending…</span> -->
                            <!-- </button> -->
                        </div>
                        <div class="mt-5 text-center">
                            <input  class="btn btn-primary profile-button" type="submit" name="submit" value="submit">
                            <center><?php // echo $message; ?></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <!-- <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PAGE CONTAINER-->
    </div>

</div>

