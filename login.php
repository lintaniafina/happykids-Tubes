<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body style="background-image: url('./img/2.jpg');  background-size: cover;">
  <div class="cotn_principal">
    <div class="cont_centrar">
      <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">
              <h2>LOGIN</h2>
              <p>Silahkan Masuk</p>   
              <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
            </div>
          </div>
          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>SIGN UP</h2>
              <p>Belum Punya Akun ?, Silahkan Daftar</p>
              <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
            </div>
          </div>
          <!-- <a href="#" title="" target="_blank" class="guest">Click here as a Guest</a> -->
        </div>
        <div class="cont_back_info">
         <div class="cont_img_back_grey">
           <img src="./img/bg.jpg" alt="" />
         </div>
       </div>
       <div class="cont_forms" >
        <div class="cont_img_back_">
         <img src="./img/bg.jpg" alt="" />
       </div>
       <?php
       require('db.php');
       session_start();
// If form submitted, insert values into the database.
       if (isset($_POST['login'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `register` WHERE username='$username'
        and password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
          $_SESSION['username'] = $username;
            // Redirect user to index.php
          header("Location: index.php");
        }else{
          echo "<script>alert('username atau password salah!');</script>";
          header("Refresh:0");
        }
      }else{
        ?>
        <div class="cont_form_login">
         <!--  <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a> -->
         <h2>LOGIN</h2>
         <form action="" method="post" name="login">
          <input type="text" name="username" placeholder="Username" required />
          <input type="password" name="password" placeholder="Password" required />
          <input class="btn_login" name="login" type="submit" value="LOGIN" />
        </form>
      </div>
      <?php } ?>
      <?php
      require('db.php');
// If form submitted, insert values into the database.
      if (isset($_POST['register'])){
        // removes backslashes

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con,$username); 
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `register` (email, username, password)
        VALUES ( '$email', '$username', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
          echo "<script>alert('Registrasi berhasil');</script>";
          header("Refresh:0");
        }
      }else{
        ?>
        <div class="cont_form_sign_up">
          <h2>REGISTRATION</h2>
          <form name="registration" action="" method="post">
            <input type="email" name="email" placeholder="Email" required />
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input class="btn_sign_up" type="submit" name="register" value="REGISTER" />
          </form>
        </div>
        <?php } ?>
      </div>  
    </div>
  </div>
</div>
<script  src="js/index.js"></script>
</body>
</html>
