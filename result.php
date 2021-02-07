<?php
include("./Database/config.php");

?>

<?php
include("./include/head.php");
?>

<div>
      <h2 class="name">Result Shit </h2>
  </div>
  
  <?php
  
  $res = mysqli_query($db, "SELECT *from product_case");
  while ($row = mysqli_fetch_array($res)) {
  
  ?>
      <div class="row-sub clearfix">
  

  </div>
  <?php
  }
  ?>
  

<!-- foot  -->
<?php
include("./include/foot.php")
?>