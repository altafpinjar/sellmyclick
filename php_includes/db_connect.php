<?php 
/*
Author name: Tejas;

*/

$connect_db = mysqli_connect("localhost","root","","sellmyclick");

if(mysqli_connect_errno()) {
	// echo mysqli_connect_errno();
	exit();
} else {
	// echo "Successful Connection.";
}



$user_ok = "";
$siteName = "sellmyclick";
$siteAddress = "http://localhost/sellmyclick";




// //mysqli_close($connect_db);
// $mysqli_que = new mysqli("localhost", "root", "", "dcentmass");
// if (mysqli_connect_error())
// {
//     //echo mysqli_connect_error(); 
//     exit();
// }


?>