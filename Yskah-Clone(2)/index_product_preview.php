<?php
    // include("sessionchecker.php");
    include("connection.php");
    include("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\index_product_preview.css" />
    
</head>
<body>

<div class="navi-bar">

    <div class="navi-items">
        <div class="logo_search">
            <div class="logo"><a href="index.php"><img src="LOGO.png"></a></div>

        </div>

        <div class="navi-btn">

            <div class="buttons "><i class='bx bx-home-alt'></i><a href="index.php">Home</a></div>
            <div class="buttons active"><i class='bx bx-shopping-bag' ></i><a href="index_products.php">Products</a></div>
            <div class="buttons"><i class='bx bx-phone'></i><a href="#">About Us</a></div>
            
        </div>
        <div class="user">
                <div class="name">
                <a href="login_form.php"><p>Log in</p></a>
                </div>

                <div class="photo">
                  <img src="img\default-profile.jpg" alt="">
                </div>

              </div> 
    </div>
</div>

<div class="main_body">
    <div class="product_samples">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="product_details">
        <div class="product_name_price">
            <h1>Product Name</h1>
            <h3>Php 000 - 000</h3>
        </div>
        <div class="product_description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit est commodi architecto labore natus perspiciatis hic iure odio ut! Quos maiores vero laudantium ex, quasi repellat cum voluptatum veritatis.      
        </div>
        <div class="variation_ordernow">
            <div class="product_variation">
            <!-- Button trigger modal -->
            <div class="variation">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Variation
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="variation">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    variation
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="variation">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    variation
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>

            </div>
            <div class="product_ordernow_addtocart">
                <div class="add_to_cart"><h4>Add to Cart</h4></div>
                <div class="order_now"><h4>Order Now</h4></div>
            </div>
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