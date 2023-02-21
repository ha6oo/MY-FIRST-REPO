<?php  

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/*
if ($SERVER["REQUEST_METHOD"]=== "POST"){
  $mysqli = require __DIR__. "/connection.php"
  
  $sql = sprintf("SELECT * FROM users
          WHERE email=''",
          $mysqli->real_escape_string($_POST["email"]));
          
          $result=$mysqli->query($sql);
          
          $user=$result->fetch_assoc();
          
          var_dump($user);
          exit;

}
                                              
*/                                                         //connection code
include("connection.php");

                                                       
$email = isset($_POST['email']) ? $_POST['email'] : "";  
$password = $_POST['password'];
                                                        //email validation
if( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
   die ("valid email is required");
}

if( strlen($password) < 8){
    die ("must contain min 8 values");
}
  
if( ! preg_match( "/[a-z]/",$password)){
    die ("must contain a lowercase");
}

if( ! preg_match( "/[A-Z]/",$password)){
    die ("must contain a capital letter");
}

if( ! preg_match("/[0-9]/",$password)){
    die ("must include a number");
}
                                                
$sql = "SELECT * FROM users WHERE email = '$email'and password='$password'";  
$result =mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);                                                                                                                 
if($num > 0){
       echo'("email already exist")';
       header("location:welcome.php");
}else{
       echo "not registered";die;
} 

?>

  




