<?php

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}

?>

<html>

<head>

  <title>signin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> 

</head>

<body>
  
  <div>
  
      <form id="callform" action="signin.php" method="post" onsubmit= "checkdata();return false;" >
      
        <div class="container">
          
          <h1 style="color:blue;">signin</h1>
            
          <label for="email">email</label>
          <input type="email" placeholder="email" id="email" name="email"><br>
          <br><br>
          
          <label for="password">password</label>
          <input type="password" placeholder="password" id="password" name="password"><br>
          
          <input type="submit" value="submit" id="submit" name="submit">
          
        </div>
    
      </form>
  
  </div>
  
<script src="src.js"></script>
  
<script>

  function checkdata() {
              var data = $("#callform").serialize();
              console.log(data);
              $.ajax({
                  url: "bsignin.php",
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
