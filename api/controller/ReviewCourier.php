
<?php 
    $db = new DatabaseClass();
    extract($_POST)
?>

<style>

.height-100{
}

.ratings{
    /* margin-right:10px; */
}

.ratings i{
    
    color:#cecece;
    font-size:16px;
}

.rating-color{
    color:green !important;
}

.review-count{
    font-weight:400;
    margin-bottom:2px;
    font-size:16px !important;
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
<div id="details_review_courier">
    <div class="form-group">
        <div class="col-md-3" style="border: none!important;">
            <div >
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="ratings">
                        <?php $data_rate = $db->Select("select * from rate_courier where courier_id = ? ", array($id_courier)) ;
                            if(count($data_rate)>0){
                            $stars = round(count($data_rate) / 5);
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
                        <h5 class="review-count"><?php echo count($data_rate);?> Reviews</h5>
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
                        <h5 class="review-stat">Excellent</h5>
                        <div class="small-ratings">
                            <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($id_courier)) ;
                            if(count($data_rate_5)>0){
                                
                                $stars = round(count($data_rate_5) / 5);
                                $stars = $stars == 0 ? $stars + 1 : $stars;
                                for ($i=0; $i < 5; $i++) { 
                                    if($i < $stars){
                                        echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                    } else {
                                        echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                    }
                                
                                }
                                ?>
                            <?php
                            } else {
                                for ($i=0; $i < 5; $i++) { 
                                    echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                }
                            }       
                            ?>
                        </div>
                    </div>
                    
                    <div class="mt-1 d-flex justify-content-between align-items-center">
                        <h5 class="review-stat">Very Good</h5>
                        <div class="small-ratings">
                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($id_courier)) ;
                            if(count($data_rate_5)>0){
                                
                                $stars = round(count($data_rate_5) / 5);
                                $stars = $stars == 0 ? $stars + 1 : $stars;
                                for ($i=0; $i < 5; $i++) { 
                                    if($i < $stars){
                                        echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                    } else {
                                        echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                    }
                                
                                }
                                ?>
                            <?php
                            } else {
                                for ($i=0; $i < 5; $i++) { 
                                    echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                }
                            }       
                        ?>
                        </div>
                    </div>
                    
                    
                    <div class="mt-1 d-flex justify-content-between align-items-center">
                        <h5 class="review-stat">Good</h5>
                        <div class="small-ratings">
                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($id_courier)) ;
                            if(count($data_rate_5)>0){
                                
                                $stars = round(count($data_rate_5) / 5);
                                $stars = $stars == 0 ? $stars + 1 : $stars;
                                for ($i=0; $i < 5; $i++) { 
                                    if($i < $stars){
                                        echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                    } else {
                                        echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                    }
                                
                                }
                                ?>
                            <?php
                            } else {
                                for ($i=0; $i < 5; $i++) { 
                                    echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                }
                            }       
                        ?>
                        </div>
                    </div>
                    
                    
                    <div class="mt-1 d-flex justify-content-between align-items-center">
                        <h5 class="review-stat">Poor</h5>
                        <div class="small-ratings">
                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($id_courier)) ;
                            if(count($data_rate_5)>0){
                                
                                $stars = round(count($data_rate_5) / 5);
                                $stars = $stars == 0 ? $stars + 1 : $stars;
                                for ($i=0; $i < 5; $i++) { 
                                    if($i < $stars){
                                        echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                    } else {
                                        echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                    }
                                
                                }
                                ?>
                            <?php
                            } else {
                                for ($i=0; $i < 5; $i++) { 
                                    echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                }
                            }       
                        ?>
                        </div>
                    </div>
                    
                    
                    <div class="mt-1 d-flex justify-content-between align-items-center">
                        <h5 class="review-stat">Very bad</h5>
                        <div class="small-ratings">
                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($id_courier)) ;
                            if(count($data_rate_5)>0){
                                
                                $stars = round(count($data_rate_5) / 5);
                                $stars = $stars == 0 ? $stars + 1 : $stars;
                                for ($i=0; $i < 5; $i++) { 
                                    if($i < $stars){
                                        echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                    } else {
                                        echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                    }
                                
                                }
                                ?>
                            <?php
                            } else {
                                for ($i=0; $i < 5; $i++) { 
                                    echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                }
                            }       
                        ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

