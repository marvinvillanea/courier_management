<?php 

$message = "";
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
//    updateUSerProfile($db);
   if(updateUSerProfile($db)){
        $message = "Successfuly Update";
        header('location:index.php?page=user_home');
   }
}
?>
<style>

.height-100{
}

.ratings{
    /* margin-right:10px; */
}

.ratings i{
    
    color:#cecece;
    font-size:24px;
}

.rating-color{
    color:green !important;
}

.review-count{
    font-weight:400;
    margin-bottom:2px;
    font-size:24px !important;
}

.small-ratings i{
  color:#cecece;   
}

.review-stat{
    font-weight:300;
    font-size:12px;
    margin-bottom:2px;
}
</style>
<div class="page-wrapper" >
    
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./courier/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2" >
       
        <?php include('./courier/header.php');?>

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
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">My Profile</li>
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
        
        <form  action="<?php echo $_SERVER['PHP_SELF'];?>?page=user_home" id="manage_user"  method="post" enctype="multipart/form-data">
        <div class="col-lg-12" style="margin-top:20px;">
            <div class="card">
                <div class="rounded bg-white">
                    <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="rounded-circle mt-5" width="150px" src="<?php echo $information["image"];  ?>">
                                    <span class="font-weight-bold"><?php echo $users_details["username"];  ?></span>
                                    <span class="text-black-50"><?php echo $users_details["email"];  ?></span><span></span>
                                <span class="text-black-50">
                                <label class="btn btn-default btn-sm center-block btn-file">
                                        <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                                        <input type="file" name="image" style="display: NONE;">
                                    </label>
                                </span>
                                </div>
                            </div>
                            <div class="col-md-6 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Manage Profile</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4"><label class="labels">Last Name</label><input type="text" class="form-control" placeholder="last name" name="last_name" value="<?php echo $information["last_name"];  ?>"></div>
                                        <div class="col-md-4"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" name="first_name"  value="<?php echo $information["first_name"];  ?>" ></div>
                                        <div class="col-md-4"><label class="labels">Middle Name</label><input type="text" class="form-control" placeholder="middle name" name="middle_name"  value="<?php echo $information["middle_name"];  ?>"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6"><label class="labels">Birhdate</label><input type="date" class="form-control" placeholder="birthdate" value="<?php echo $information["birthdate"];  ?>" name="birthdate"></div>
                                        <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="M/F" value="<?php echo $information["gender"];  ?>" name="gender"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $information["contact_no"];  ?>" name="contact_no"></div>
                                        <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $information["email"];  ?>" name="email" disabled></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4"><label class="labels">Province</label><input type="text" class="form-control" placeholder="Province" value="<?php echo $information["province"];  ?>" name="province"></div>
                                        <div class="col-md-4"><label class="labels">Zip Code</label><input type="text" class="form-control" placeholder="Zip Code" value="<?php echo $information["zip_code"];  ?>" name="zip_code"></div>
                                        <div class="col-md-4"><label class="labels">City</label><input type="text" class="form-control" placeholder="City" value="<?php echo $information["city"];  ?>" name="city"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4"><label class="labels">Zone</label><input type="text" class="form-control" placeholder="Zone #" value="<?php echo $information["zone"];  ?>" name="zone"></div>
                                        <div class="col-md-4"><label class="labels">Barangay</label><input type="text" class="form-control" placeholder="Barangay" value="<?php echo $information["barangay"];  ?>" name="barangay"></div>
                                        <div class="col-md-4"><label class="labels">House #</label><input type="text" class="form-control" placeholder="House #" value="<?php echo $information["house_no"];  ?>" name="house_no"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12"><label class="labels">Landmark</label><input type="text" class="form-control" placeholder="Landmark" value="<?php echo $information["landmark"];  ?>" name="landmark"></div>
                                    </div>
                                    <div class="mt-5 text-center">
                                        <input  class="btn btn-primary profile-button" type="submit" name="submit" value="Save Profile">
                                        <center><?php echo $message; ?></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="border: none!important;">
                                <div >
    
                                    <div class="card p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="ratings">
                                            <?php $data_rate = $db->Select("select  count(*) total_count,  CAST(sum(rate_type)/count(*) AS DECIMAL(5,1)) as rate_average from rate_courier where courier_id = ? ", array($_SESSION["user_id"])) ;
                                             if(count($data_rate)>0){
                                                $stars = $data_rate[0]['rate_average'];
                                                $stars = $stars == 0 ? $stars + 1 : $stars;
                                                for ($i=0; $i < 5; $i++) { 
                                                    if($i < $stars){
                                                        echo '<i class="fa fa-star rating-color"></i>&nbsp;';
                                                    } else {
                                                        echo '<i class="fa fa-star"></i>';
                                                    }
                                                  
                                                }
                                                ?>
                                            </div>
                                            <h5 class="review-count">(<?php echo $data_rate[0]['rate_average'] ?>) <?php echo $data_rate[0]['total_count'];?> Reviews</h5>
                                            <?php
                                             } else {
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5 class="review-count">0 Reviews</h5>
                                                <?php
                                             }       
                                            ?>
                                        </div>
                                        
                                        
                                        <div class="mt-5 d-flex justify-content-between align-items-center">
                                            <h5 class="review-stat">Excellent (<?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($_SESSION["user_id"])) ;
                                                    if(count($data_rate_5) != 0){
                                                        echo count($data_rate_5);
                                                    }else{
                                                        echo 0;
                                                    }
                                            ?>)</h5>
                                            <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        
                                        <div class="mt-1 d-flex justify-content-between align-items-center">
                                            <h5 class="review-stat">Very Good (<?php $data_rate_4 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($_SESSION["user_id"])) ;
                                                    if(count($data_rate_4) != 0){
                                                        echo count($data_rate_4);
                                                    }else{
                                                        echo 0;
                                                    }
                                            ?>)</h5>
                                            <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star "></i>&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="mt-1 d-flex justify-content-between align-items-center">
                                            <h5 class="review-stat">Good (<?php $data_rate_3 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($_SESSION["user_id"])) ;
                                                    if(count($data_rate_3) != 0){
                                                        echo count($data_rate_3);
                                                    }else{
                                                        echo 0;
                                                    }
                                            ?>)</h5>
                                            <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="mt-1 d-flex justify-content-between align-items-center">
                                            <h5 class="review-stat">Poor (<?php $data_rate_2 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($_SESSION["user_id"])) ;
                                                    if(count($data_rate_2) != 0){
                                                        echo count($data_rate_2);
                                                    }else{
                                                        echo 0;
                                                    }
                                            ?>)</h5>
                                            <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="mt-1 d-flex justify-content-between align-items-center">
                                            <h5 class="review-stat">Very bad (<?php $data_rate_1 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($_SESSION["user_id"])) ;
                                                    if(count($data_rate_1) != 0){
                                                        echo count($data_rate_1);
                                                    }else{
                                                        echo 0;
                                                    }
                                            ?>)</h5>
                                            <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>


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
