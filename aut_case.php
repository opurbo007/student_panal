<?php
include("./Database/config.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&family=Grand+Hotel&display=swap"
      rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
  />
    <link rel="stylesheet" href="style.css" />
    <title>SIU || Student Portal</title>



      
      </head>
      <body>
        <!-- navbar  -->
        <span class="nav-btn" id="nav-btn">
          <i class="fas fa-bars"></i>
        </span>
        <nav class="navbar" id="navbar">
          <div class="nav-header">
            <span class="nav-close" id="nav-close">
              <i class="fas fa-times"></i>
            </span>
          </div>
          <ul class="nav-items">
          <li><a href="./index.php" class="nav-link">STUDENT PORTAL </a></li>
            <li><a href="./aut-login.php" class="nav-link">Authority </a></li>
            <li><a href="./jud-login.php" class="nav-link">Judge </a></li>
            <li><a href="./result.php" class="nav-link">Result</a></li>
            <li><a href="./contract.php" class="nav-link">Cotract Us </a></li>
            <li><a href="./jud-signup.php" class="nav-link"> Create Judge Account </a></li>
            <!-- <li>
              <a
                class="nav-link cart-item-count"
                href="./Cart.php"
                data-pure-items-count
                > ক্রেতা ঝুড়ি <i class="fa fa-shopping-cart"></i
              ></a>
            </li> -->
          </ul>
        </nav>
    <!-- headder section  -->
    <section class="nav-stu">
      <div class="container">
        <img src="./Img/logo.png" class="img-logo" alt="SIU" />
        <h3 class="logo-name">Sylhet International University</h3>
        <p class="header_line">
          Acquire a good degree accepted all over the world
        </p>
      </div>
    </section>

<div class="admin">

  
    <div class="block">

        <form action="" method="post" enctype="multipart/form-data">
<h2 class="name">Case Study Contest</h2>
            <table>

                <tr>
                    <td>Contest Name: </td>
                    <td><input type="text" name="pnm"></td>
                </tr>
                <tr>
                    <td>Contest Time: </td>
                    <td><input type="text" name="ppr"></td>
                </tr>
                <tr>
                    <td>Total Marks :  </td>
                    <td><input type="text" name="pqty"></td>
                </tr>
                <tr>
                    <td>Banner  : </td>
                    <td><input type="file" name="pimg"></td>
                </tr>
                <tr>
                    <td> Contest Time: </td>
                    <td><input type="text" name="pcat"></td>
                </tr>
                <tr>
                    <td>Contest Qus: </td>
                    <td><textarea cols="15"rows="1" name="pdes"></textarea></td>
                </tr>
                <tr>
                    
                    <td><button type="submit"  name="case_admin"><b>Submit</b></button></td>
                </tr>
            </table>


        </form>

     
        <div class="switch">
        <a href="aut-panal.php">Ideathone </a>
        <a href="aut_case.php">Case contest</a>
        <a href="aut_inv.php"> Investigation</a>
    </div>
    </div>
</div>
<?php
include("./include/foot.php")
?>