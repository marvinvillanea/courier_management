
<div class="page-wrapper" >
    
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./courier/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2" style="height:150vh">
       
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
                                            <a href="#">Orders</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Defectives</li>
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
        
     
        <div class="section__content section__content--p30 mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Order #</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $parcel = $db->select("SELECT * FROM parcel_details  pd inner join defective_items di using(idparcel_details) where idcourier_details = ? order by pd.created_at desc ", array($_SESSION["user_id"]));
                                    if(count($parcel) > 0){
                                        foreach ($parcel as $key => $value) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $value["created_at"]; ?></td>
                                                <td><?php echo ucfirst($value["parcel_number"]); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View" type="button"  id="<?php echo $value["parcel_number"]; ?>" onclick="showModal(this.id)">
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
            <div id="modal-footer_cancel">
                <div id="parcel_details2">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     function showModal(parcel_ID){
    //    $('#scrollmodal').toggle();
    //    alert('dafdaf');
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();
        $('#parcel_details2').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Order #: '+ parcel_ID +'</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/routes.php",
            {parcel_ID: parcel_ID,action:"get_details_parcel",type:"courier"},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append(data);
                $('.modal-footer').remove();
                $('#modal-footer_cancel').append('<div id="parcel_details2"><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></div></div>');
            }
        );
    }

</script>