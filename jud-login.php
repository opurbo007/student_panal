
<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>
    <!-- login for student  -->
    
    <section class="jud-login-form">
        <div class="section-center clearfix">
          <div class="std-head">
            <img src="./Img/lock2.png" alt="Secure" />
            <h3>JUDGE PORTAL</h3>
          </div>
    
        <!-----Login & Reg form---->

        <div class="account">


            <div class="login">


                <form action="" method="POST">
                    <h2>Judge Login</h2>

                    <input type="text" name="username" placeholder=" Username "required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="jud_log"><b>LOGIN </b></button>
                    <a href="./aut-login.php">Login As Authority</a>
                    <p>or</p> 
                    <a href="./index.php">Login As Student</a>
                </form>
            </div>
        </div>
    
        </div>
    </section>
    
    <?php
include("./include/foot.php")
?>