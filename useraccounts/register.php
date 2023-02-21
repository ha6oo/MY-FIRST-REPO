<?php                                                
                                                         //connection code
include("connection.php");
                                                        
$name = $_POST['name'];
$email = $_POST['email'];  
$date = $_POST['dob'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
                                                    
                                                 //validations name 
if( strlen( $name ) > 55 ){
    die ("maximum name limit 55");
}

                                                    //email validation
if( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
   die ("valid email is required");
}
                                                  
                                                  //checking password and confirm password are equal
if( $password !== $confirmpassword){
    die ("password and confirm password must match");
}

                                                  //password validation
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

$ssql = "SELECT * FROM users WHERE email = '$email'"; 
//var_dump($ssql);
                                                       
$result =mysqli_query($conn,$ssql);
$num = mysqli_num_rows($result);                                                                                                                 
if($num > 0){
      echo'("email already exist")';die;
} 

$pass=md5($password);
 
$sql = "INSERT INTO users(name,email,dob,password) VALUES ('$name', '$email','$date','$pass')"; 
 
var_dump($sql);  
                                         
if(mysqli_query($conn, $sql)){ 
  die ("successfully stored in the database");
}else {
      echo "<p><fontcolor=red>didnt stored in database</font></p>";
      }
                                    
?>

  




