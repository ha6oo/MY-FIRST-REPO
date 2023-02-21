<?php
include("connection.php");
?>

<html>

<head>

<title>formfilling</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> 

</head>

<body>

	<div>

		<form id="callform"  method = "post" onsubmit= "checkdata();return false;" >
	
			<div class ="container">

				<h1 style="color:green;">form</h1>
				
				<label for ="name">name</label>
				<input type = "text"  placeholder="name" id = "name" name = "name" ><br>
				<br><br>

				<label for ="email">email</label>
				<input type = "email" placeholder = "enter email"  id = "email" name = "email"><br>
				<br><br>

				<label for ="dob">DOB:</label>
				<input type = "date" placeholder = "enter date of birth"  id = "dob" name = "dob" ><br>
				<br><br>

				<label for ="password">password</label>
				<input type = "password"  placeholder = "password"  id = "password" name = "password" ><br>
				<input type = "password"  placeholder = "confirmpassword"  id = "confirmpassword" name = "confirmpassword" ><br>
				<br><br>
				
				<br><br><br>
				
				<input type="submit" value="register" id="submit" name="submit">
	
			</div>
		
		</form>
	
	</div>
   <div><p> HEY!</p></div> 
<script src="src.js"></script>
 
<script>

  function checkdata() {
              var data = $("#callform").serialize();
              console.log(data);
              $.ajax({
                  url: "register.php",
                  data: data,
                  type: "POST",
                  success: function (result) {
                      alert(result);
                  }
              });
          }

</script>      
 
</body>

</html>


