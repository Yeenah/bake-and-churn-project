<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'email already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert_user->execute([$name, $email, $cpass]);
         $message[] = 'registered successfully, login now please!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login and signup.css">

</head>
<body>

<section class="form-container">
<div class="container-signup">
      <div class="signup">
            <!--Signup Form-->
            <form action="" method="post" class="sign-up-form">
               <a href="home.php" class="close-icon">
                  <i class="fas fa-times"></i>
               </a>
               <h2 class="title">Signup</h2>

               <?php
               if(isset($error)){
                  foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
               <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name" required placeholder="Username" maxlength="20"  class="box">
               </div>
               <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" required placeholder="Email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               </div>
               <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="pass" required placeholder="Password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
                  
               </div>
               <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="cpass" required placeholder="Confirm Password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
                  
               </div>
               <input type="submit" value="Signup" class="btn" name="submit">
               

               <p class="account-text">Already have an account? <a href="user_login.php" id="sign-in-btn2">Login</a></p>   
            </form>
      </div>
      <div class="panels-container">
            <div class="panel left-panel">
               <img src="images/bake&churn logo.png" alt="" class="images">
               <div class="content">
                  <h3>Already have an account?</h3>
                  <p>To keep connected with us please login with your personal info</p> 
                  <button class="btn" id="sign-in-btn">Login</button>
               </div>
            </div>
      </div>
   </div>

   <script>
   document.getElementById('sign-in-btn').addEventListener('click', function() {
      window.location.href = 'user_login.php';
   });
   </script>


</section> 
<script src="js/script.js"></script>

</body>
</html>


