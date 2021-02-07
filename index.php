<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>
    <!-- login for student  -->
    
    <section class="student-login-form">
        <div class="section-center clearfix">
          <div class="std-head">
            <img src="./Img/lock2.png" alt="Secure" />
            <h3>STUDENT PORTAL</h3>
          </div>
    
    
    
          <div class="account">
            <div class="login">
              <form action="" method="POST">
                <h2>Student Login</h2>
      
                <?php include('Database/errror.php'); ?>
      
                <input
                  type="text"
                  name="username"
                  placeholder="Student Username" "
                  required
                />
                <input
                  type="password"
                  name="password"
                  placeholder="Password "
                  required
                />
                <button type="submit" name="log"><b>LOGIN</b></button>
                <a href="./aut-login.php">Login As Authority</a>
               <p>or</p> 
                <a href="./stu-signup.php">Create New Account</a>
              </form>
            </div>
    
    
        </div>
    </section>
    
    <!-- for footer  -->
     
<?php
include("./include/foot.php")
?>