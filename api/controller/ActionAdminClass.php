<?php 
   
class ActionAdminClass {
    private $db;
    public function __construct() {
		ob_start();
        include("./../database/connection.php");
		
        $this->db = new DatabaseClass();
	}


	public function ApprovalCourierRegister(){
		try {
			extract($_POST);
			$status = $name == "reject" ? 3 : 1;
			$data = $this->db->Update("update users SET status = ? WHERE user_id = ? ", array($status,$user_id));
			echo "SUCCESS";


			$description = $name == "reject" ? "Account Has been Rejected or Denied by Admin. Please Update your Profile." : "Account Has been Verify/Confirmed by Admin";
       		$this->db->Insert("INSERT INTO courier_notify (`user_id`,`description`) VALUES (?,?)", [
                $user_id,
                $description
            ]);

		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}
	public function blacklist_courier(){
		try {
			extract($_POST);
			if($act == 'blacklist'){
			  $data = $this->db->Update("update users SET status = 4 WHERE user_id = ? ", array($user_id));
			  return "SUCCESS";
			}
			if($act == 'whitelist'){
			  $data = $this->db->Update("update users SET status = 1 WHERE user_id = ? ", array($user_id));
			  return "SUCCESS";
			}

		} catch(\Exception $e) {
			echo "FAILED";
		}
	}
	public function getDetailsCourier(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select 
				pd.user_id,
				pd.username,
				pd.email,
				pd.`status`,
				`pi`.city,
				`pi`.province,
				`pi`.zip_code,
				`pi`.`zone`,
				`pi`.landmark,
				`pi`.`barangay`,
				cd.`resume`,
				cd.`description`,
				pd.created_at
				from users pd
				inner join personal_info pi using (user_id)
				inner join courier_details cd using(p_info_id) 
				WHERE user_id = ? limit 1 ", array($user_id));

            $status_color = [
                1 => 'green',
                5 => 'green',
                2 => 'red',
                3 => 'red',
                0 => 'green',
            ];
            $status_color = array_key_exists($data[0]["status"], $status_color ) ? $status_color[$data[0]["status"]] : 'blue';
            // $json_encode = json_encode($data[0]);
            $div2 = ' Date Time Created: '.$data[0]["created_at"].'<br><hr>
            Email: '.$data[0]["email"].'<br><hr>
            Province: '.ucwords($data[0]["province"]).'<br><hr>
            City: '.ucwords($data[0]["city"]).'<br><hr>
            Barangay: '.ucwords($data[0]["barangay"]).'<br><hr>
            Zone: '.ucwords($data[0]["zone"]).'<br><hr>
            Landmark: '.ucwords($data[0]["landmark"]).'<br><hr>
            Resume: <a href="'.$data[0]["resume"].'"  target="_blank">'.$data[0]["resume"].'</a><br><hr>
            Description: '.$data[0]["description"].'<br><hr>
            ';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="'.$data[0]["user_id"].'" name="reject" onclick="updateStatus(this.id,this.name)">Decline</button>
            <button type="button" class="btn btn-primary" id="'.$data[0]["user_id"].'" name="approved" onclick="updateStatus(this.id,this.name)">Confirm</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

	public function getDetailsDisApprovedCourier(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select 
				pd.user_id,
				pd.username,
				pd.email,
				pd.`status`,
				`pi`.city,
				`pi`.province,
				`pi`.zip_code,
				`pi`.`zone`,
				`pi`.landmark,
				`pi`.`barangay`,
				cd.`resume`,
				cd.`description`,
				pd.created_at
				from users pd
				inner join personal_info pi using (user_id)
				inner join courier_details cd using(p_info_id) 
				WHERE user_id = ? limit 1 ", array($user_id));

            $status_color = [
                1 => 'green',
                5 => 'green',
                2 => 'red',
                3 => 'red',
                0 => 'green',
            ];
            $status_color = array_key_exists($data[0]["status"], $status_color ) ? $status_color[$data[0]["status"]] : 'blue';
            // $json_encode = json_encode($data[0]);
            $div2 = ' Date Time Created: '.$data[0]["created_at"].'<br><hr>
            Email: '.$data[0]["email"].'<br><hr>
            Province: '.ucwords($data[0]["province"]).'<br><hr>
            City: '.ucwords($data[0]["city"]).'<br><hr>
            Barangay: '.ucwords($data[0]["barangay"]).'<br><hr>
            Zone: '.ucwords($data[0]["zone"]).'<br><hr>
            Landmark: '.ucwords($data[0]["landmark"]).'<br><hr>
            Resume: <a href="'.$data[0]["resume"].'"  target="_blank">'.$data[0]["resume"].'</a><br><hr>
            Description: '.$data[0]["description"].'<br><hr>
            ';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

	public function viewDetailsCourierBlacklist(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select 
				pd.user_id,
				pd.username,
				pd.email,
				pd.`status`,
				`pi`.city,
				`pi`.province,
				`pi`.zip_code,
				`pi`.`zone`,
				`pi`.landmark,
				`pi`.`barangay`,
				cd.`resume`,
				cd.`description`,
				pd.created_at
				from users pd
				inner join personal_info pi using (user_id)
				inner join courier_details cd using(p_info_id) 
				WHERE pd.user_id = ? limit 1 ", array($user_id));
			
            $status_color = [
                1 => 'green',
                5 => 'green',
                2 => 'red',
                3 => 'red',
                0 => 'green',
            ];
            $status_color = array_key_exists($data[0]["status"], $status_color ) ? $status_color[$data[0]["status"]] : 'blue';
            $status_description = $data[0]["status"] == 1 ? "Active" : "Inactive";
            // $json_encode = json_encode($data[0]);
            $div2 = 'Date Time Created: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color: '.$status_color.' ">'.$status_description.'</span><br><hr>
            Email: '.$data[0]["email"].'<br><hr>
            Province: '.ucwords($data[0]["province"]).'<br><hr>
            City: '.ucwords($data[0]["city"]).'<br><hr>
            Barangay: '.ucwords($data[0]["barangay"]).'<br><hr>
            Zone: '.ucwords($data[0]["zone"]).'<br><hr>
            Landmark: '.ucwords($data[0]["landmark"]).'<br><hr>
            Resume: <a href="'.$data[0]["resume"].'"  target="_blank">'.$data[0]["resume"].'</a><br><hr>
            Description: '.$data[0]["description"].'
            
            ';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button class="btn btn-primary" onclick="blacklist('.$user_id.')">whitelist</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

	public function viewDetailsCourierStatus(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select 
				pd.user_id,
				pd.username,
				pd.email,
				pd.`status`,
				`pi`.city,
				`pi`.province,
				`pi`.zip_code,
				`pi`.`zone`,
				`pi`.landmark,
				`pi`.`barangay`,
				cd.`resume`,
				cd.`description`,
				pd.created_at
				from users pd
				inner join personal_info pi using (user_id)
				inner join courier_details cd using(p_info_id) 
				WHERE pd.user_id = ? limit 1 ", array($user_id));
			$get_rate = $this->db->select("select CAST(sum(rate_type)/count(*) AS DECIMAL(5,1)) as rate_average from rate_courier where courier_id = ? ", array($user_id));
			
            $status_color = [
                1 => 'green',
                5 => 'green',
                2 => 'red',
                3 => 'red',
                0 => 'green',
            ];
            $status_color = array_key_exists($data[0]["status"], $status_color ) ? $status_color[$data[0]["status"]] : 'blue';
            $status_description = $data[0]["status"] == 1 ? "Active" : "Inactive";
            $rating = ucwords($get_rate[0]["rate_average"]) != null ? ucwords($get_rate[0]["rate_average"]) : "NO RATINGS YET!";
            // $json_encode = json_encode($data[0]);
            $div2 = 'Ratings: <h2>'.$rating.'</h2><br><hr>
            Date Time Created: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color: '.$status_color.' ">'.$status_description.'</span><br><hr>
            Email: '.$data[0]["email"].'<br><hr>
            Province: '.ucwords($data[0]["province"]).'<br><hr>
            City: '.ucwords($data[0]["city"]).'<br><hr>
            Barangay: '.ucwords($data[0]["barangay"]).'<br><hr>
            Zone: '.ucwords($data[0]["zone"]).'<br><hr>
            Landmark: '.ucwords($data[0]["landmark"]).'<br><hr>
            Resume: <a href="'.$data[0]["resume"].'"  target="_blank">'.$data[0]["resume"].'</a><br><hr>
            Description: '.$data[0]["description"].'
            
            ';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button class="btn btn-warning" onclick="blacklist('.$user_id.')">Blacklist</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}
/*
	public function viewDeliveries(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select 
				idparcel_details,
				user_id ,
				idcourier_details ,
				recepient_name,
				recepient_address,
				recepient_contact_no,
				parcel_number,
				parcel_description,
				type_delivery,
				weight_id,
				created_at,
				status,
				amount,
				address_sender,
				recipient_image
				from parcel_details pd
				WHERE status = ? limit 1 ", array($statusid));

            $status_color = [
                1 => 'green',
                5 => 'green',
                2 => 'red',
                3 => 'red',
                0 => 'green',
            ];
            $status_color = array_key_exists($data[0]["status"], $status_color ) ? $status_color[$data[0]["status"]] : 'blue';
            $status_description = $data[0]["status"] == 1 ? "Active" : "Inactive";
            // $json_encode = json_encode($data[0]);
            $div2 = 'Date Time Created: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color: '.$status_color.' ">'.$status_description.'</span><br><hr>
            Email: '.$data[0]["email"].'<br><hr>
            Province: '.ucwords($data[0]["province"]).'<br><hr>
            City: '.ucwords($data[0]["city"]).'<br><hr>
            Barangay: '.ucwords($data[0]["barangay"]).'<br><hr>
            Zone: '.ucwords($data[0]["zone"]).'<br><hr>
            Landmark: '.ucwords($data[0]["landmark"]).'<br><hr>
            Resume: <a href="'.$data[0]["resume"].'"  target="_blank">'.$data[0]["resume"].'</a><br><hr>
            Description: '.$data[0]["description"].'
            
            ';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}
*/
	public function get_details_users(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select 
				pd.user_id,
				pd.username,
				pd.email,
				pd.`status`,
				`pi`.city,
				`pi`.province,
				`pi`.zip_code,
				`pi`.`zone`,
				`pi`.landmark,
				`pi`.`barangay`,
				pd.created_at
				from users pd
				inner join personal_info pi using (user_id)
				WHERE user_id = ? limit 1 ", array($user_id));

            $status_color = [
                1 => 'green',
                5 => 'green',
                2 => 'red',
                3 => 'red',
                0 => 'green',
            ];
            $status_color = array_key_exists($data[0]["status"], $status_color ) ? $status_color[$data[0]["status"]] : 'blue';
            $status_description = $data[0]["status"] == 1 ? "Active" : "Inactive";
            // $json_encode = json_encode($data[0]);
            $div2 = 'Date Time Created: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color: '.$status_color.' ">'.$status_description.'</span><br><hr>
            Email: '.$data[0]["email"].'<br><hr>
            Province: '.ucwords($data[0]["province"]).'<br><hr>
            City: '.ucwords($data[0]["city"]).'<br><hr>
            Barangay: '.ucwords($data[0]["barangay"]).'<br><hr>
            Zone: '.ucwords($data[0]["zone"]).'<br><hr>
            Landmark: '.ucwords($data[0]["landmark"]).'
            ';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
	}
}


?>