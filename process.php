<?php 

    if(isset($_POST['btn-send']))
    {
       $fname = $_POST['fname'];
	   $mname = $_POST['mname'];
	   $lname = $_POST['lname'];
	   $address = $_POST['address'];
	   $unit = $_POST['unit'];
	   $city = $_POST['city'];
	   $state = $_POST['state'];
	   $zcode = $_POST['zcode'];
	   $date = $_POST['date'];

	   
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $house = $_POST['house'];

       if(empty( $fname) || empty( $mname) || empty( $lname) || empty($address) || empty($unit) || empty($city) || empty($unit) || empty($state) || empty($unit) || empty($zcode) || empty($date) || empty($email) || empty($phone) || empty($house))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "admin@abc.com";

           if(mail($to, $fname,$mname, $lname, $address,$city, $state, $unit, $zcode, $date, $email, $phone,  $house ))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>