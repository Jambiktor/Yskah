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
    <link rel="stylesheet" href="css\landing_page1.css">
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
                        <a class="nav-link text-dark active" aria-current="page" href="user_landing_page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="user_products.php">Product</a>
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

    <div class="container-fluid d-flex align-items-end justify-content-center flex-column position-absolute pe-2 gap-3 pb-0 pe-lg-5 "
        id="Intro">
        <div class="d-flex flex-column align-items-end text-end">
            <h1>Introduction</h1>
            <h5 id="introText" class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus eveniet dolore
                excepturi
                incidunt,
                amet
                quasi fugit animi perspiciatis quisquam molestias.</h5>
        </div>
        <a href="index-products.php"><button type="button" class="btn btn-lg btn-light p-3 w-100">Order Now</button></a>
    </div>

    <div class="overflow-hidden d-flex justify-content-center" style=" height: 60dvh">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="3000">
                    <img src="img\homepic1.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img\homepic2.jpg" class="d-block w-100  img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img\homepic3.jpg" class="d-block w-100  img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img\homepic4.jpg" class="d-block w-100  img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-lg-4 ms-lg-5 mb-lg-5  mt-3 mb-1">

        <h3>Hot Products</h3>

        <div class="d-flex flex-row align-items-center gap-3">
            <?php 
        $res = mysqli_query($conn, "SELECT * FROM products");
        while($row = mysqli_fetch_assoc($res)){
    ?>
            <div class="card" style="width: 14rem;">
                <img src="product-images/<?php echo $row['image_file']?>" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title "><?php echo $row['product_name']?></h5>
                    <p class="card-text">
                    <p>Php <?php echo $row['price']?>.00</p>
                    </p>
                    <a href="#" class="btn btn-primary text-wrap w-100">View more samples</a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <footer>
        <div class="footer_content flex-wrap">
            <div class="footer_logo">
                <img id="footer-logo" src="img\LOGO.png" alt="">
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