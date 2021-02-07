<?php 
include("include/head.php");
?>
        <!------ to add more product--->
        <div class="contract">
      <div class="login">
        <form action="signin.php" method="POST">
          <h2>Contract With Us </h2>

          <input
            type="text"
            name="username"
            placeholder="User Name"
            required
          />
          <input
            type="email"
            name=""
            placeholder=" Your Email "
            required
          />
          <textarea cols="20"rows="5" name="" type="text" placeholder="Write your Messege "></textarea>
          <button type="submit" name="log"><b> Send</b></button>
        </form>
      </div>
    </div>
          
 
        

</div>

        <!---------footer--->
        <?php 
include("include/foot.php")
?>