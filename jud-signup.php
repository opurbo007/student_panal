<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>

    <!-- this is for body  -->
    <section class="student-login-form">
      <div class="section-center clearfix">
        <div class="std-head">
          <img src="./Img/lock2.png" alt="Secure" />
          <h3>JUDGE PORTAL</h3>
        </div>
        <div class="account">
          <div class="login">
            <form action=" " method="post">
              <?php include('Database/errror.php'); ?>

              <h2>Register New Account</h2>
              <input
                type="text"
                name="username"
                placeholder="Username "
                required
              />
              <input type="email" name="email" placeholder="Email" />
              <input
                type="number"
                name="phone"
                placeholder=" Phone Number "
                required
              />
              <input
                type="text"
                name="address"
                placeholder="Address"
                required
              />
              <input
                type="password"
                name="password_1"
                placeholder=" New Password "
                required
              />
              <input
                type="password"
                name="password_2"
                placeholder=" Confirm Password  "
                required
              />
              <button type="submit" name="jud_reg" value="submit">
                <b> Register </b>
              </button>


            </form>
          </div>
        </div>
      </div>
    </section>
<!-- footer section  -->
     
<?php
include("./include/foot.php")
?>