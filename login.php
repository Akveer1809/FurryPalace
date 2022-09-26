<?php
session_start();
include('config.php');


if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];


  $sql = "Select * from `user` where Email='$email'";

  $result = mysqli_query($con,$sql);

  if (mysqli_num_rows($result) > 0) 
  {
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($password,$row['Password']);
    
    if($verify==1)
    {
     
      $_SESSION['name'] = $row['Name'];
      header('Location:index.php');
    }
    else 
    {
      echo "Enter Correct Password";
    }

  } 
  else
  {
    echo "User Not Exists ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.codehim.com/demo/login-page-with-username-and-password/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 03:06:03 GMT -->

<head>
  <meta charset="UTF-8">
  <title>Login Page with Username and Password Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="style-login.css">
</head>

<body>

  <body class="align">
    <div class="grid">
      <img src="images/gallery-5.jpg" style="height: 75px;width: 80px;border-radius: 46px;    margin: 20px 110px 0px 110px;" class="img-fluid" alt="dog-img"/>
      <h1 class="contact__form-title" style="color: #fff;text-align: center;margin: 30px 0px;"> Furry Palace</h1>
      <form  method="post" class="form login">
        <div class="form__field">
          <label for="login__username"><svg class="icon">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
            </svg><span class="hidden">Username</span></label>
          <input id="login__username" type="text" name="email" class="form__input" placeholder="Email" required>
        </div>
        <div class="form__field">
          <label for="login__password"><svg class="icon">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
            </svg><span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
        </div>
        <div class="form__field">
          <input type="submit" value="Sign In">
        </div>
      </form>
      <p class="text--center">Not a member? <a href="registration.php">Sign up now</a> <svg class="icon">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.html#arrow-right"></use>
        </svg></p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
      <symbol id="arrow-right" viewBox="0 0 1792 1792">
        <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
      </symbol>
      <symbol id="lock" viewBox="0 0 1792 1792">
        <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
      </symbol>
      <symbol id="user" viewBox="0 0 1792 1792">
        <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
      </symbol>
    </svg>
  </body>


  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80520768-2" type="c1e68f0bb9bea4d941d6a859-text/javascript"></script>
  <script type="c1e68f0bb9bea4d941d6a859-text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-80520768-2');
  </script>
  <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c1e68f0bb9bea4d941d6a859-|49" defer=""></script>
</body>

<!-- Mirrored from www.codehim.com/demo/login-page-with-username-and-password/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 03:06:04 GMT -->

</html>