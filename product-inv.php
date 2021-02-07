<?php
include("./Database/config.php");

?>



<?php
include("./include/head.php")
?>


<?php

$id=$_GET["id"];

?>
        <!------ to add more product--->

        <?php
$res =mysqli_query($db,"SELECT *from product_inv WHERE Product_ID=$id");
while($row=mysqli_fetch_array($res))
{
?>
<div class="name ">
    <h5><?php echo $row["Product_NAME"];?> </h5>
</div>
<div class="single-product clearfix">

<div class="productpage-1 clearfix">
    <img src="./<?php echo $row["Product_Image"];?>">

</div>

<div>
    <div class="productpage-2 clearfix">
     <h3>Time: <?php echo $row["Product_Price"];?> Hours</h3>

        <div class="card-footer">
            <form action="" class="form  " data-pure-form>
            
                <!-- <input type="number" value="1"> -->
                <!-- <div class="form-group"> -->
               
                <!-- </div> -->

                <div class="button">
                    <!-- <a href="../cart.php" class="btn">Add To Cart</a> -->
                    
                  
                    
               
                    <input type="hidden" value="<?php echo $row["Product_Image"];?>" data-pure-item-id >

             


            <h4> Question</h4>
            &ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;
            <br>
            <p class="p-dis"><?php echo $row["Product_DEC"];?></p>
       <br>
   
          <h2 class=""> Your Ans </h2>

          <textarea cols="50"rows="10" name="" type="text" placeholder=" whrite your ans here "></textarea> <br>
          <input type="submit" class="btn btn-primary" value=" Submit answer ">
                </div>
        </form>
 
          
        </div>
    </div>
</div>
</div>

<?php
}
?>


        <!---------footer--->
        <?php
include("./include/foot.php")
?>
<!-- js for cart  & single product -->
 <script src="./js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jStorage/0.4.12/jstorage.min.js"></script>
<script src="./js/main.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $.Purefashion({
            debug: false,
            onItemAdded: function(item) {
                console.log(item);
            },
            onItemUpdated: function(item) {
                console.log(item);
            }
        });
    });
</script>
