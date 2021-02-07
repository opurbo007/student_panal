<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>
    <!-- login for student  -->
    
    <section class="aut-login-form">
        <div class="section-center clearfix">
          <div class="std-head">
            <img src="./Img/lock2.png" alt="Secure" />
            <h3>AUTHORITY PORTAL</h3>
          </div>
    
    
    
        <!-----Login & Reg form---->

        <div class="account">


            <div class="login">


                <form action="" method="POST">
                    <h2>Authority Login</h2>

                    <input type="text" name="username" placeholder=" Username "required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="admin_log"><b>LOGIN </b></button>
                    <a href="./index.php">Login As Student</a>
                    <p>or</p> 
                    <a href="./jud-login.php">Login As Judge</a>
                </form>
            </div>
        </div>
    
        </div>
    </section>
    
    <!-- for footer  -->
    
    <?php
include("./include/foot.php")
?>