<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>

<div>
      <h2 class="name">All Contest </h2>
  </div>
  
  <?php
  
  $res = mysqli_query($db, "SELECT *from product_case");
  while ($row = mysqli_fetch_array($res)) {
  
  ?>
      <div class="row-sub clearfix">
  
      <div class="write-2">
              <a href="./product-case.php?id=<?php echo $row["Product_ID"];?>">
                  <img src="<?php echo $row["Product_Image"];?>" >
                  <h2><?php echo $row["Product_NAME"];?></h2>
                  <p>Total Time: <?php echo $row["Product_Price"];?> Hours</p>
                  <p>Total marks : <?php echo $row["product-qty"];?> </p>
                  <p>Contest Time: <?php echo $row["Product_Catagory"];?> </p>
              </a>
              <!-- <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>-->
          </div>
  </div>
  <?php
  }
  ?>
  

<!-- foot  -->
<?php
include("./include/foot.php")
?>