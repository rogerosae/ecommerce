<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

//  public function add_brand($a,$b)
// 	{
// 		$ndb = new db_connection();	
// 		$name =  mysqli_real_escape_string($ndb->db_conn(), $a);
// 		$desc =  mysqli_real_escape_string($ndb->db_conn(), $b);
// 		$sql="INSERT INTO `brands`(`brand_name`, `brand_description`) VALUES ('$name','$desc')";
// 		return $this->db_query($sql);
// 	}
class general_class extends db_connection
{
	//--INSERT--//
	function add_user_cls($full_name,$email,$password,$country,$city,$contact_num,$user_role){
		$sql="INSERT INTO customer(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,user_role) VALUES('$full_name','$email','$password','$country','$city','$contact_num','$user_role')";
		return $this->db_query($sql);
	}
	

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--//
	

}

?>