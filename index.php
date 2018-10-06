<?php

  require "sql.php";
  
  $count_query="select count(count) from submission";
  $user_query="select count(Er_no) from users";
  $query_result=mysqli_query($con,$count_query);
  $user_query_result=mysqli_query($con,$user_query);
  $users = mysqli_fetch_array($user_query_result);
  $submission = mysqli_fetch_array($query_result);
  if(isset($_REQUEST["err_messg"]))
  {
    $err_messg = $_REQUEST["err_messg"];
    $err_messg_sign=NULL;
  }
  else if(isset($_REQUEST["err_messg_sign"]))
  {
    $err_messg=null;
    $err_messg_sign = $_REQUEST["err_messg_sign"];
  }
  else
  {
    $err_messg_sign = null;
    $err_messg = null;
  }
    
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Treasure Hunt</title>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
            <link rel="shortcut icon" sizes="144x144" type="image/x-icon" href="favicon/14184564_955885404557001_7795093475134835546_n.ico">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" defer="defer"></script>
        <script  src="assets/js/index.js"></script>
        

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!-- particles.js container --> <div id="particles-js"></div> <!-- stats - count particles --> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -- <script src="http://threejs.org/examples/js/libs/stats.min.js"></script-->
  
 <script  src="js/index.js"></script> 
<b class="heading">Treasure hunt</b>
    
<div id="main" class="f1">

            <!-- Intro -->
              <article id="intro">
                <h2 class="major"><img src="images/loginmenu.png" alt="avengers-font" border="0"></h2>
                <p>
                  <form action="login.php" method ="POST">
                        <div class="form-group">
                          <label for="disabledTextInput"><img src="images/enroll.png" alt="avengers-font" border="0"></label>
                          <input type="text" id="disabledTextInput" class="form-control" placeholder="Enrollment Number" name="er_no" required>
                        </div>
                        <br>
                    <div class="form-group">
                    <label for="disabledSelect"><img src="images/pass.png" alt="avengers-font" border="0"></label>
                    <input type="password" id="disabledTextInput" class="form-control" placeholder="your Password here" name="psswd" required>
                    </div>
                    <br>
                    <p><?php echo $err_messg ;?></p>
                    <div class="modal-footer">
                      <button type="submit" class="hunt btn btn-default btn-lg btn-block"><img class="animated  tada" src="images/hunt.png" alt="avengers-font" border="0"></button>
                    </div>
                  </form>
                </p>      
              </article>

            <!-- Work -->
              <article id="work">
                <h2 class="major"><img src="images/regmenu.png" alt="avengers-font" border="0"></h2>
                <p>
                
                 <form action="Registration.php" method = "POST">
                 
                  <div class="form-group">
                  <label for="disabledTextInput"><img src="images/Fname.png" alt="avengers-font" border="0"></label>
                  <input type="text" id="fname" class="form-control" placeholder="First Name" name="f_name" required>
                  </div>
                  <br>
                  <div class="form-group">
                  <label for="disabledSelect"><img src="images/lname.png" alt="avengers-font" border="0"></label>
                  <input type="text" id="lname" class="form-control" placeholder="Last name" name="l_name" required>
                  </div>
                  <br>
                  <div class="form-group">
                  <label for="disabledSelect"><img src="images/enro.png" alt="avengers-font" border="0"></label>
                  <input type="text" id="erno" class="form-control" placeholder="Enroll No." name="er_no" required>
                  </div>
                  <br>
                  <div class="form-group">
                  <label for="disabledSelect"><img src="images/email.png" alt="avengers-font" border="0"></label>
                  <input type="Email" id="email" class="form-control" placeholder="Email id" name="e_mail" required>
                  </div>
                  <br>
                  <div class="form-group">
                  <label for="disabledSelect"><img src="images/phone.png" alt="avengers-font" border="0"></label>
                  <input type="text" id="phno" class="form-control" placeholder="Phone no." name="ph_no" required>
                  </div>
                  <br>
                  <div class="form-group">
                  <label for="disabledSelect"><img src="images/pass.png" alt="avengers-font" border="0"></label>
                  <input type="password" id="pass" class="form-control" placeholder="Your Password here" name="psswd" required>
                  </div>
                  <br>
                  <p><?php echo $err_messg_sign; ?></p>
                  <div class="modal-footer">
                    <button type="submit" class="hunt btn btn-default btn-lg btn-block"><img class="animated tada"src="images/hunt.png" alt="avengers-font" border="0"></button>
                  </div>
                   </form>  
                
                </p>
            </article>

          </div>
          <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="right_click_disable.js"></script>
</body>

</html>
