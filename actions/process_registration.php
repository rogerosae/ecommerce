<?php
include("../controllers/general_controller.php");
if (isset($_POST["Submit"])){
    $full_name=$_POST["fullName"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $country=$_POST["country"];
    $city=$_POST["city"];
    $contact_num=$_POST["contactNumber"];
    $user_role=$_POST["userRole"];

    $result=add_user_ctr($full_name,$email,$password,$country,$city,$contact_num,$user_role);

    if($result){
        echo "user created"; 
    }
    else{
        echo "failed to add user";
    }


    
}