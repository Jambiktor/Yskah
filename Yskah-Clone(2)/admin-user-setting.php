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
    <title>Setting</title>
    <link rel="stylesheet" href="css\user_settings1.css" />
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
          <div class="buttons">
            <i class="bx bx-shopping-bag"></i><a href="admin-products.php">Products</a>
          </div>
          <div class="buttons"><i class='bx bx-cart' ></i><a href="user_table.php">Users</a></div>
        </div>

        <div class="user">
          <div class="name">
            <!-- <p></p>
          </div>

          <div class="photo">
            <img src="img\User.jpg" alt="" /> -->
          </div>
        </div>
      </div>
    </div>


    <?php
      $sql = "SELECT * FROM user_table WHERE username='" . $_SESSION['username'] . "'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) 
        {?>


      <div class="container p-4">
        <div class="row">
        <div class="col-4 m-1 border">
        <img src="img\default-profile.jpg" alt="">
        </div>
        <div class="col-7 m-1 border">
          <div class="user_id">
          <div class="user_details">
          <p>User ID: <?php echo $row['id']; ?> </p>
          </div>
          </div>
      
          <div class="user_details">
          <p>First Name: <br> <?php echo $row["first_name"]; ?>  
          </div>
          <div class="user_details">
          <p>Last Name: <br> <?php echo $row["last_name"]; ?> 
          </div>
          <div class="user_details">
          <p>Username: <br> <?php echo $row["username"]; ?>  
          </div>
          <div class="user_details">
          <p>Sex: <br> <?php echo $row["sex"]; ?>  
          </div>
          
          
          
          </div>
            
        <div class="col-12 m-1 border">
          <h3>User Address</h3>
          <div class="user_details">
          <p>House Number: </p> 
          </div>
          <div class="user_details">
          <p>Block: </p> 
          </div>
          <div class="user_details">
          <p>Lot: </p>
          </div>
          <div class="user_details">
          <p>Subdivision: </p>
          </div>
          <div class="user_details">
          <p>Barangay: </p>
          </div>
          <div class="user_details">
          <p>City: <?php echo $row["city"]; ?>  
          </div>
          <div class="user_details">
          <p>Province: <?php echo $row["province"]; ?> 
          </div>
          <div class="user_details">
          <p>Zip: <?php echo $row["zip"]  ; ?> 
          </div> 
        </div>
      
        </div>
        </div>

    <?php
    }
  }?>
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
