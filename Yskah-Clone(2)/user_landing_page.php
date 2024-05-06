<?php
    include("sessionchecker.php");
    include("connection.php");
    include("head.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="css\landing_page.css">

</head>
<body>
<div class="navi-bar">

  <div class="navi-items">

      <div class="logo_search">
          <div class="logo"><a href="user_landing_page.php"><img src="LOGO.png"></a></div>

          <!-- <div class="search">

              <i class='bx bx-search-alt'></i>
              <input type="text" placeholder="Search">
          </div> -->
          

      </div>
    
      <div class="navi-btn">

          <div class="buttons active"><i class='bx bx-home-alt'></i><a href="user_landing_page.php">Home</a></div>
          <div class="buttons"><i class='bx bx-shopping-bag' ></i><a href="user_products.php">Products</a></div>
          <div class="buttons"><i class='bx bx-cart' ></i><a href="#">Cart</a></div>
          <div class="buttons"><i class='bx bx-phone'></i><a href="#">About Us</a></div>
      
      </div>
      <div class="right_nav">
    
        <div class="btn-group">
          <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user">

              <div class="name">
              <p><?php echo $_SESSION['username'] ?></p>
              </div>

              <div class="photo">
              <img src="img\default-profile.jpg" alt="">
              </div>

            </div>
          </button>
          <ul class="dropdown-menu">
              <li>
                  <div class="drop_items">
                  <a href="user_setting.php">Account</a>
                  </div>
              </li>
              <li> 
                  <div class="drop_items">
                      <form action="logout.php" method="post">
                          <button type="submit" name="logout" class="btn btn-danger">Log out</button>
                      </form>
                  </div>
              </li>
          </ul>
      </div>
    </div> 

  </div>
</div>
<div class="grade">
  <div class="intro">
    <h1>Introduction</h1>
    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus eveniet dolore excepturi incidunt, amet quasi fugit animi perspiciatis quisquam molestias.</h3>
  </div>
  <div class="btn">
    <button><a href="user_products.php">Order Now</a></button>
  </div>
  
</div>
<div class="main-body">
  <div class="home_photo">
   
    <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="img\homepic1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img\homepic2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img\homepic3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img\homepic4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="hot_product_title">
    <h3>Hot Products</h3>
  </div>
<div class="hot_product">

  

    <?php 
        $res = mysqli_query($conn, "SELECT * FROM products");
        while($row = mysqli_fetch_assoc($res)){
    ?>
    <div class="card" style="width: 14rem;">
        
        <img src="product-images/<?php echo $row['image_file']?>" class="card-img-top" alt="...">

        
        <div class="card-body ">
            <h5 class="card-title"><?php echo $row['product_name']?></h5>
            <p class="card-text"><p>Php <?php echo $row['price']?>.00</p></p>
            <a href="#" class="btn btn-primary">View more samples</a>
        </div>
    </div>
    <?php }?>
</div>

   

<footer>
          <div class="footer_content">

            <div class="footer_logo">
              <img src="img\LOGO.png" alt="">
            </div>
            <div class="footer_details">
              <h4>SOCIALS</h4>
              <div class="socials">
                <a href="#"> <p><i class='bx bxl-facebook-circle'></i>Facebook</p></a>
                <a href="#"><p><i class='bx bxl-tiktok' ></i>Tiktok</p> </a>
                <a href="#"><p><i class='bx bxl-instagram-alt' ></i>Instagram</p> </a>
              </div>
              <div class="copyright">
                <p><i class='bx bx-copyright' ></i>2021 Jessa Mae O. Figueroa | All Rights Reserve</p>
              </div>
            </div>
          </div>

</footer>
</body>
</html>