<link rel="stylesheet" href="assets/css/popup_style.css"> 
           <style>
.footer1 {
  position: fixed;
  bottom: 0;
  width: 100%;
  color: #5c4ac7;
  text-align: center;
}

</style>
   <?php
   
include('./constant/layout/head.php');
  include('./constant/connect.php');
session_start();

if(isset($_SESSION['userId'])) {
 //header('location:'.$store_url.'login.php');   
}

$errors = array();

if($_POST) {    

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) || empty($password)) {
    if($username == "") {
      $errors[] = "Username is required";
    } 

    if($password == "") {
      $errors[] = "Password is required";
    }
  } else {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connect->query($sql);

    if($result->num_rows == 1) {
      $password = md5($password);
      // exists
      $mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $mainResult = $connect->query($mainSql);

      if($mainResult->num_rows == 1) {
        $value = $mainResult->fetch_assoc();
        $user_id = $value['user_id'];

        // set session
        $_SESSION['userId'] = $user_id;?>

      

         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p>Login Successfully</p>
    <p>
     
     <?php echo "<script>setTimeout(\"location.href = 'dashboard.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
     <?php  }  
      else{
        ?>


        <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Incorrect username/password combination</p>
    <p>
      <a href="login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
       
      <?php } // /else
    } else { ?> 
        <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Username doesnot exists</p>
    <p>
      <a href="login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>  
         
    <?php } // /else
  } // /else not empty username // password
  
} // /if $_POST

?>
    
    <div id="main-wrapper">
        <div class="unix-login">

            <div class="container-fluid" style="background-image: url('./assets/uploadImage/Logo/banner.jpg');
 background-color: #cccccc;">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="login-content card">
                            <div class="login-form">
                                <center><img src="./assets/uploadImage/Logo/coffee_logo.jpg" style="width: 80%;"></center><br>
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
                                    <div class="form-group">
                                        <label lass="col-sm-3 control-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">
     
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                   
                                   
                                    <button type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30" >Sign in</button>
                                    
                                <div class="forgot-phone text-right f-right">
<a href="#" class="text-right f-w-600" style="color:black;"> Forgot Password?</a>
</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div ><center>
 <footer class="footer1" style="color:white;"><b>Designed by : <a href="https://www.linkedin.com/in/nidhi-dhinoja-258312222/" target="_blank">@Nidhi Dhinoja </a> 
 <a href="https://www.linkedin.com/in/deep-bhalsod-609ba9222/" target="_blank">@Deep Bhalsod </a>
 <a href="https://www.linkedin.com/in/mansiba-gohil-8aba67221/" target="_blank">@Mansiba Gohil</a></b>
            
            </footer> </center>
    </div>
    
    
    
    
    <script src="./assets/js/lib/jquery/jquery.min.js"></script>
    
    <script src="./assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="./assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="./assets/js/jquery.slimscroll.js"></script>
    
    <script src="./assets/js/sidebarmenu.js"></script>
    
    <script src="./assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <script src="./assets/js/custom.min.js"></script>
</body>

</html>