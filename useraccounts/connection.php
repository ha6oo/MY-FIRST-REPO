<?php
                                                 
 //connection code
$servername = "localhost";

$username = "admin";
$cpassword = "admin";
$db = "usersdata";

$conn = mysqli_connect( $servername, $username, $cpassword, $db);
if( !$conn){
	echo ("connection prob");
}
//echo "hai";

?>
