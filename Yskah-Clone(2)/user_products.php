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
    <link rel="stylesheet" href="css\products3.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div
            class="container-fluid ms-0 ms-md-3 d-flex align-items-center justify-content-center justify-content-md-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="width:15px"></span>
            </button>

            <a id="img" class="navbar-brand" href="#">
                <img src="img\LOGOO.png" alt="YsakaLogo" class="d-inline-block float-start" style="width: 110px">
            </a>

            <div class="d-flex align-items-center justify-content-center justify-content-md-end d-lg-none">
                <div class="d-none d-md-block">
                    <a href="login_form.php" class="">

                    </a>
                </div>
                <div class="d-none d-md-block">
                    <img src="img\default-profile.jpg" alt="profile" class="" style="width: 50px">
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-fill gap-2 p-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="user_landing_page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark active" aria-current="page" href="user_products.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="right_nav">

                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
    </nav>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4 d-flex flex-row m-1 mt-4 mb-4">
            <?php 
            $res = mysqli_query($conn, "SELECT * FROM products");
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <div class="col-sm-6 col-lg-4">
                <div class="card w-100">
                    <img src="product-images/<?php echo $row['image_file']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']?></h5>
                        <p class="card-text">
                        <p>Php <?php echo $row['price']?>.00</p>
                        </p>
                        <a href="user_product_preview.php" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <?php }?>
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
                    <a href="#">
                        <p><i class='bx bxl-facebook-circle'></i>Facebook</p>
                    </a>
                    <a href="#">
                        <p><i class='bx bxl-tiktok'></i>Tiktok</p>
                    </a>
                    <a href="#">
                        <p><i class='bx bxl-instagram-alt'></i>Instagram</p>
                    </a>
                </div>
                <div class="copyright">
                    <p><i class='bx bx-copyright'></i>2021 Jessa Mae O. Figueroa | All Rights Reserve</p>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>