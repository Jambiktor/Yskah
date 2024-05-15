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
    <link rel="stylesheet" href="css\admin-product.css" />
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
                        <a class="nav-link text-dark " href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark active" aria-current="page" href="admin-products.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="right_nav">
                <!-- for Notifications -->
                <!-- <button button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications"> -->
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Notifications">
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

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Notifications</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        ...
                    </div>
                </div>

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
        <div class="row row-cols-1 row-cols-md-4 d-flex flex-row m-1 mt-4 mb-4 gy-2">
            <?php 
                $res = mysqli_query($conn, "SELECT * FROM products");
                while($row = mysqli_fetch_assoc($res)){
            ?>
            <div class="col-sm-6 col-lg-3">
                <div class="card w-100">
                    <img src="product-images/<?php echo $row['image_file']?>" class="card-img-top" alt="..." />
                    <div class="remove_button">
                        <form action="delete-product.php" method="POST"
                            onsubmit="return confirm('Are you sure you want to remove this product?');">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="remove">Remove</button>
                        </form>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']?></h5>
                        <p class="card-text">
                        <p>Php <?php echo $row['price']?>.00</p>
                        </p>
                        <a href="admin_product_preview.php" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>

            <?php }?>
            <div class="col-sm-6 col-lg-3">
                <div class="card w-100">
                    <div class="add_button">
                        <a href="admin-adding-products-form.php">
                            <img src="img\Add_Button.png" class="card-img-top" alt="..." />
                            <h3>Add Product</h3>
                        </a>
                    </div>
                </div>
            </div>
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