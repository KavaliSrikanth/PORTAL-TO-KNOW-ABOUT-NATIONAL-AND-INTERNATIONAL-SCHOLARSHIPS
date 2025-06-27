<?php  include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form....</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="form-container">

   <form  method="POST">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <select name="category" placeholder="enter your category" >
         <option value="SC">SC</option>
         <option value="ST">ST</option>
         <option value="BC">BC</option>
         <option value="OC">OC</option>
      </select>
      <input type="text" name="income" required placeholder="enter your income">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <!-- <button type="submit" name="Reg">Register Now</button> -->
      <input type="submit" name="Reg" value="Register Now" class="form-btn">
      <p>Already have an account? <a href="Log.php">login Now</a></p>
   </form>

</div>

</body>
</html>
