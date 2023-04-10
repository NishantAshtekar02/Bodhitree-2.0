<?php

$con = mysqli_connect('localhost','root','','bodhitree');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'bodhitree');

$Username = $_POST['Username'];
$EmailID = $_POST['EmailID'];
$PhoneNo = $_POST['PhoneNo'];
// $Comments = $_POST['Comments'];

$sql= " INSERT INTO `userinfodata` (`Username`, `EmailID`, `PhoneNo`) values ( '$Username', '$EmailID', '$PhoneNo' )";

// insert in database 
 $rs=mysqli_query($con, $sql);
//  die(mysqli_error());

if($rs)
{
	echo "Contact Records Inserted <br> <br>";
	
}
// $sql = 'SELECT * FROM registration';
   
//    $retval = mysqli_query($con, $sql);




?>