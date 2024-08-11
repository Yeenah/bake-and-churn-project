<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login and signup.css">

</head>
<body>

<section class="form-container">
<div class="container-signin">
      <div class="signin-signup">
            <form action="" method="post" class="sign-in-form">
               <a href="home.php" class="close-icon transition" onclick="togglePanel(event)">
                  <i class="fas fa-times"></i>
               </a>
               <h2 class="title">Login</h2>
            
            
               <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" required placeholder="Email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               </div>
               <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="pass" required placeholder="Password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               </div>
               <div class="remember">
                  <input type="checkbox" class="check" name="remember_me">
                  <label for="remember">Remember me</label>
                  <span><a href="update_user.php" style="margin-left: 70px;">Forgot password</a></span>
               </div> 
               <input type="submit" name="submit" value="Login" class="btn">
      

               <p class="account-text">Don't have an account? <a href="user_register.php" id="sign-up-btn2">Signup</a></p>   
            </form> 
   

      </div>
            <div class="panel right-panel">
               <img src="images/bake&churn logo.png" alt="" class="images">
               <div class="content">
                  <h3>Don't have an account?</h3>
                  <p>Enter your personal details and start journey with us</p>
                  <button class="btn" id="sign-up-btn">Signup</button> 
               </div>
            </div>
      </div>
   </div>

   <script>
   document.getElementById('sign-up-btn').addEventListener('click', function() {
      window.location.href = 'user_register.php';
   });
   </script>

</section>

<script src="js/script.js"></script>

</body>
</html>

