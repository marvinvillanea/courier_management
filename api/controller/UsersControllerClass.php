<?php 
   
class UsersControllerClass {
    private $db;
    public function __construct() {
		ob_start();
        include("./../database/connection.php");
		
        $this->db = new DatabaseClass();
	}


	public function getDetailsParcel(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select recepient_name,recepient_address,recepient_contact_no,parcel_description,type_delivery, pd.created_at,pd.status, pd.amount, sw.description, ps.description as status_parcel, ps.id_status from parcel_details pd
            inner join users using (user_id)
            inner join set_weight sw using(weight_id) 
            inner join parcel_status ps ON pd.status = ps.id_status 
            WHERE parcel_number = ?  limit 1", array($parcel_ID));
            // $json_encode = json_encode($data[0]);
            $status_color = [
                1 => 'green',
                2 => 'green',
                3 => 'yellow',
                11 => 'red',
                7 => 'green',
                12 => 'red',
            ];
            $status_color = array_key_exists($data[0]["id_status"], $status_color ) ? $status_color[$data[0]["id_status"]] : 'yellow';

            $div = '<div id="parcel_details">Recipient Name: '.$data[0]["recepient_name"].'<br><hr>
            Recipient Address: '.$data[0]["recepient_address"].'<br><hr>
            Recipient Contact No: '.$data[0]["recepient_contact_no"].'<br><hr>
            Description: '.$data[0]["parcel_description"].'<br><hr>
            Delivery Type: '.$data[0]["type_delivery"].'<br><hr>
            Weight: '.$data[0]["description"].'<br><hr>
            Created at: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color:'.$status_color.'">'.$data[0]["status_parcel"].'</span><br><hr>
            Amount: '.$data[0]["amount"].'<br><hr>
            </div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

    public function getDetailsParcelDefective(){
        try {
            extract($_POST);
            // $status = $name == "reject" ? 3 : 1;
            $data = $this->db->select("select comment,recepient_name,recepient_address,recepient_contact_no,parcel_description,type_delivery, pd.created_at,pd.status, pd.amount, sw.description, ps.description as status_parcel, ps.id_status 
            ,pd.recipient_image, pd.idparcel_details
            from parcel_details pd
            inner join users using (user_id)
            inner join set_weight sw using(weight_id) 
            inner join parcel_status ps ON pd.status = ps.id_status 
            WHERE parcel_number = ?  limit 1", array($parcel_ID));
            // $json_encode = json_encode($data[0]);
            $status_color = [
                1 => 'green',
                2 => 'green',
                3 => 'yellow',
                11 => 'red',
                7 => 'green',
                12 => 'red',
            ];
            $status_color = array_key_exists($data[0]["id_status"], $status_color ) ? $status_color[$data[0]["id_status"]] : 'yellow';

            $details = '';
            $get_Rate = $this->db->select("select * from rate_courier where parcel_id = ? ", array($data[0]["idparcel_details"]));
            
            if(count($get_Rate) > 0){
                if(!empty($get_Rate[0]['comment']) || $get_Rate[0]['comment'] != null){
                    $comment = 'value="'.$get_Rate[0]['comment'].'" readonly';
                }else{
                    $comment = 'value="No review/feedback"';
                }
            } else {
                $comment = 'placeholder="Enter Feedback/Review" required';
            }
            if(count($get_Rate) > 0 ){
                switch ($get_Rate[0]['rate_type']){
                    case 1: 
                        $details = "Very Poor";
                    break;
                    case 2: 
                        $details = "Poor";
                    break;
                    case 3: 
                        $details = "Good";
                    break;
                    case 4: 
                        $details = "Very Good";
                    break;
                    case 5: 
                        $details = "Excellent";
                    break;
                }
            } else {
                $details = '<select name="rate_type" class="form-control">';
                $details .= '<option value ="select">--Plase select rate--</option>';
                $details .= '<option value ="1">Very Poor</option>';
                $details .= '<option value ="2">Poor</option>';
                $details .= '<option value ="3">Good</option>';
                $details .= '<option value ="4">Very Good</option>';
                $details .= '<option value ="5">Excellent</option>';
                $details .= '</select>';
            }
            $div2 = '<div id="parcel_details">Recipient Name: '.$data[0]["recepient_name"].'<br><hr>
            <input type="hidden" name="parcel_details_id" value="'.$data[0]["idparcel_details"].'" />
            Recipient Address: '.$data[0]["recepient_address"].'<br><hr>
            Recipient Contact No: '.$data[0]["recepient_contact_no"].'<br><hr>
            Description: '.$data[0]["parcel_description"].'<br><hr>
            Delivery Type: '.$data[0]["type_delivery"].'<br><hr>
            Weight: '.$data[0]["description"].'<br><hr>
            Created at: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color:'.$status_color.'">'.$data[0]["status_parcel"].'</span><br><br>
            Comment: <input type="text" name="user_comment" class="form-control" id="user_comment" value="'.$data[0]["comment"].'" disabled/><br><hr>
            Amount: '.$data[0]["amount"].'<br><hr>
            Recipient Image: <br><hr><center>
            <image src="'.$data[0]["recipient_image"].'" alt="recipient-image" width="180" height="160" ></center><br><hr>
            Validate Courier: '.$details.'<br><br>
            Comment: <input type="text" name="user_comment" class="form-control" id="user_comment" '.$comment.' /><br><hr>
            </div>';

            if(count($get_Rate) > 0 ){
                $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div></div>';
            } else {
                $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="parcel_updates" name="confirm">Confirm</button>
                </div></div>';
            }
            echo $div;
        } catch(\Exception $e) {
            echo "FAILED";
        }
        
    }
    public function getDetailsParcelDelivered(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select recepient_name,recepient_address,recepient_contact_no,parcel_description,type_delivery, pd.created_at,pd.status, pd.amount, sw.description, ps.description as status_parcel, ps.id_status 
            ,pd.recipient_image, pd.idparcel_details
            from parcel_details pd
            inner join users using (user_id)
            inner join set_weight sw using(weight_id) 
            inner join parcel_status ps ON pd.status = ps.id_status 
            WHERE parcel_number = ?  limit 1", array($parcel_ID));
            // $json_encode = json_encode($data[0]);
            $status_color = [
                1 => 'green',
                2 => 'green',
                3 => 'yellow',
                11 => 'red',
                7 => 'green',
                12 => 'red',
            ];
            $status_color = array_key_exists($data[0]["id_status"], $status_color ) ? $status_color[$data[0]["id_status"]] : 'yellow';

            $details = '';
            $get_Rate = $this->db->select("select * from rate_courier where parcel_id = ? ", array($data[0]["idparcel_details"]));
            
            if(count($get_Rate) > 0){
                if(!empty($get_Rate[0]['comment']) || $get_Rate[0]['comment'] != null){
                    $comment = 'value="'.$get_Rate[0]['comment'].'" readonly';
                }else{
                    $comment = 'value="No review/feedback"';
                }
            } else {
                $comment = 'placeholder="Enter Feedback/Review" required';
            }
            if(count($get_Rate) > 0 ){
                switch ($get_Rate[0]['rate_type']){
                    case 1: 
                        $details = "Very Poor";
                    break;
                    case 2: 
                        $details = "Poor";
                    break;
                    case 3: 
                        $details = "Good";
                    break;
                    case 4: 
                        $details = "Very Good";
                    break;
                    case 5: 
                        $details = "Excellent";
                    break;
                }
            } else {
                $details = '<select name="rate_type" class="form-control">';
                $details .= '<option value ="select">--Plase select rate--</option>';
                $details .= '<option value ="1">Very Poor</option>';
                $details .= '<option value ="2">Poor</option>';
                $details .= '<option value ="3">Good</option>';
                $details .= '<option value ="4">Very Good</option>';
                $details .= '<option value ="5">Excellent</option>';
                $details .= '</select>';
            }
            $div2 = '<div id="parcel_details">Recipient Name: '.$data[0]["recepient_name"].'<br><hr>
            <input type="hidden" name="parcel_details_id" value="'.$data[0]["idparcel_details"].'" />
            Recipient Address: '.$data[0]["recepient_address"].'<br><hr>
            Recipient Contact No: '.$data[0]["recepient_contact_no"].'<br><hr>
            Description: '.$data[0]["parcel_description"].'<br><hr>
            Delivery Type: '.$data[0]["type_delivery"].'<br><hr>
            Weight: '.$data[0]["description"].'<br><hr>
            Created at: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color:'.$status_color.'">'.$data[0]["status_parcel"].'</span><br><hr>
            Amount: '.$data[0]["amount"].'<br><hr>
            Recipient Image: <br><hr><center>
            <image src="'.$data[0]["recipient_image"].'" alt="recipient-image" width="180" height="160" ></center><br><hr>
            Validate Courier: '.$details.'<br><br>
            Comment: <input type="text" name="user_comment" class="form-control" id="user_comment" '.$comment.' /><br><hr>
            </div>';

            if(count($get_Rate) > 0 ){
                $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div></div>';
            } else {
                $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="parcel_updates" name="confirm">Confirm</button>
                </div></div>';
            }
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

    public function rate_courier(){
        try {
			extract($_POST);
            // echo "<pre>";
            //     var_dump($_POST);
            // echo "</pre>";
            if($rate_type == "select") {
                echo "select";
            }elseif(trim($user_comment) == ""){
                echo "select";
            } else {
                $get_details = $this->db->Select("select * from parcel_details where idparcel_details = ? limit 1", array($parcel_details_id));
                $this->db->Insert("INSERT INTO rate_courier (user_id,rate_type,courier_id,parcel_id,comment) VALUES (?,?,?,?,?) ", 
                array(
                $get_details[0]["user_id"], 
                $rate_type,
                $get_details[0]["idcourier_details"], 
                $get_details[0]["idparcel_details"],
                $user_comment,
                ));
                echo "SUCCESS";
            }
		} catch(\Exception $e) {
			echo "FAILED";
		}
    }

    
    private static function getMyUrl()
    {
      $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
      $server = $_SERVER['SERVER_NAME'];
      $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
    //   return $protocol.$server.$port;
      return getenv('URL_HOST');
    } 

    public function update_notify_courier(){
        extract($_POST);
        $data = $this->db->Update("update users_notify SET status = 1 WHERE id_notify = ? ", array($id));
        echo $this->getMyUrl().'/index.php?page=all_list'; 
    }
}


?>