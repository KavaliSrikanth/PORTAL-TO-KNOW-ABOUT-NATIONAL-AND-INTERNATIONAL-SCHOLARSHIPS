<?php  include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form....</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet"  href="./css/style.css">
</head>
<body>
   
<div class="form-container">

   <form method="POST">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <!-- <button type="submit" name="Log">login Now></button> -->
      <input type="submit" name="Log" value="login now" class="form-btn">
      <p>don't have an account? <a href="Reg.php">Register Now</a></p>
   </form>

</div>

</body>
</html>