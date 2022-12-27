<div class="page-wrapper">

     <!-- SIDE BAR MOBILE AND DESKTOP -->
     <?php include('./admin/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
            <?php include('./pages/header_account.php') ?>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                  
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">List of Blacklisted Courier</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="table_list">
                                        <thead>
                                            <tr>
                                                <th>email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $user_to_verify = $db->select("SELECT * FROM users 
                                                INNER JOIN personal_info using(user_id)
                                                INNER JOIN courier_details using(p_info_id)
                                                where status = 4 and user_type = 3");
                                                if(count($user_to_verify) > 0){
                                                    foreach ($user_to_verify as $key => $value) {
                                                        ?>
                                                        <tr class="tr-shadow">
                                                            <td>
                                                                <span class="block-email"><?php echo $value["email"]; ?></span>
                                                            </td>
                                                            <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View" type="button"  id="<?php echo $value["user_id"]; ?>" onclick="showModal(this.id)">
                                                                    <i class="zmdi zmdi-eye" style="color:green"></i>
                                                                </button>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="spacer"></tr>
                                                        <?php
                                                    }
                                                    
                                                } else {
                                                    ?>
                                                    <tr class="tr-shadow">
                                                        <td colspan="7">
                                                            No data found!
                                                        </td>
                                                    </tr>
                                                    <tr class="spacer"></tr>
                                                    <?php
                                                }
                                            ?>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <!-- <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- modal scroll -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel" >
                    <div id="pacel_no">
                         <span id="parcel_no_value"></span>
                    </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="parcel_modal_body">
                <div id="parcel_details"></div>
            </div>
            
        </div>
    </div>
</div>

<script>

    function showModal(user_id){
    //    $('#scrollmodal').toggle();
    //    alert('dafdaf');
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Courier Details</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/routes.php",
            {user_id: user_id,action:"get_details_blacklist_courier"},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append(data);
            }
        );
    }
    function blacklist(user_id){
        // alert(user_id)
        $.post(
            "api/routes.php",
            {user_id: user_id,act:"whitelist",action:"blacklist_courier"},
            function(data){ 
                if(data == 'SUCCESS'){
                    location.reload(true);
                }
            }
        );
    }
</script>