<?php
//connect to the user account class
include("../classes/general_class.php");

//sanitize data

// function add_user_ctr($a,$b,$c,$d,$e,$f,$g){
// 	$adduser=new customer_class();
// 	return $adduser->add_user($a,$b,$c,$d,$e,$f,$g);
// }


//--INSERT--//
function add_user_ctr($full_name,$email,$password,$country,$city,$contact_num,$user_role){
    $user=new general_class();
    return $user->add_user_cls($full_name,$email,$password,$country,$city,$contact_num,$user_role);
}
//--SELECT--//

//--UPDATE--//

//--DELETE--//




?>