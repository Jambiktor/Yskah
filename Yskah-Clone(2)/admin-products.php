<?php
    include("sessionchecker.php");
    include("connection.php");
    include("head.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css\admin-product1.css" />
  </head>
  <body>
    <div class="navi-bar">
      <div class="navi-items">
        <div class="logo_search">
          <div class="logo">
            <a href="admin.php"><img src="LOGO.png" /></a>
          </div>
        </div>
        <div class="navi-btn">
          <div class="buttons">
            <i class="bx bx-home-alt"></i><a href="admin.php">Home</a>
          </div>
          <div class="buttons active">
            <i class="bx bx-shopping-bag"></i
            ><a href="admin-products.php">Products</a>
          </div>
          <div class="buttons">
            <i class='bx bx-cart' ></i><a href="user_table.php">Users</a>
          </div>
        </div>
        <div class="right_nav">
              <!-- for Notifications -->
          <!-- <button button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications"> -->
          <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications">
            <div class="orders">
                <div class="notif">
                    <p>9+</p>
                </div>
                <div class="order_button">
                  <i class='bx bxs-bell'></i>
                </div>
            </div>
          </button>    
          <!-- </button> -->

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Notifications</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
          </div>
          <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="user">

                <div class="name">
                <p>A - <?php echo $_SESSION['username'] ?></p>
                </div>

                <div class="photo">
                <img src="img\default-profile.jpg" alt="">
                </div>

              </div>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <div class="drop_items">
                    <a href="admin-user-setting.php">Account</a>
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
    <div class="productlist">
      <?php 
        $res = mysqli_query($conn, "SELECT * FROM products");
        while($row = mysqli_fetch_assoc($res)){
    ?>
      <div class="card" style="width: 16.5rem">
        <img
          src="product-images/<?php echo $row['image_file']?>"
          class="card-img-top"
          alt="..."
        />
        <div class="remove_button">
        <form action="delete-product.php" method="POST" onsubmit="return confirm('Are you sure you want to remove this product?');" >
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <button type="submit" name="remove">Remove</button>
        </form>
        

        </div>

        <div class="card-body">
          <h5 class="card-title"><?php echo $row['product_name']?></h5>
          <p class="card-text"><p>Php <?php echo $row['price']?>.00</p></p>
          <a href="admin_product_preview.php" class="btn btn-primary">View Product</a>
        </div>
      </div>
      <?php }?>
      
      <div class="card" style="width: 16.5rem">
      <div class="add_button">
      <a href="admin-adding-products-form.php"><img src="img\Add_Button.png" class="card-img-top" alt="..." />
      <h3>Add Product</h3></a>
      
      </div>
      </div>
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
