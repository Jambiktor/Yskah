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
                    <a href="user_landing_page.php"><img src="LOGO.png" /></a>
                </div>
            </div>

            <div class="navi-btn">
                <div class="buttons">
                    <i class="bx bx-home-alt"></i><a href="user_landing_page.php">Home</a>
                </div>
                <div class="buttons">
                    <i class="bx bx-shopping-bag"></i><a href="user_products.php">Products</a>
                </div>
                <div class="buttons">
                    <i class="bx bx-cart"></i><a href="#">Cart</a>
                </div>
                <div class="buttons">
                    <i class="bx bx-phone"></i><a href="#">About Us</a>
                </div>
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


    <div class="container">
        <div class="profile-pic">
            <img src="img\default-profile.jpg" alt="">
        </div>
        <div class="user-info ps-3">
            <p>ID: <?php echo $row['id']; ?> </p>
            <p>First Name: <?php echo $row["first_name"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#firstname">
                    Edit
                </button>
            <div class="modal fade" id="firstname" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE FIRST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateFirstName.php" method="POST">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first" name="first_name"
                                    value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </p>
            <p>Last Name: <?php echo $row["last_name"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lastname">
                    Edit
                </button>
            <div class="modal fade" id="lastname" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE LAST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateLastName.php" method="POST">
                                <label for="lastname">Last Name:</label>
                                <input type="text" id="lastname" name="last_name"
                                    value="<?php echo $row['last_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <p>Username: <?php echo $row["username"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#username">
                    Edit
                </button>
            <div class="modal fade" id="username" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE USER NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateUsername.php" method="POST">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username"
                                    value="<?php echo $row['username']; ?>">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <p>Sex: <?php echo $row["sex"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sex">
                    Edit
                </button>
            <div class="modal fade" id="sex" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE FIRST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateFirstName.php" method="POST">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first" name="first_name"
                                    value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
        <div class="customer-address ps-3 pt-3">
            <p>Address: <?php echo $row["address"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#address">
                    Edit
                </button>
            <div class="modal fade" id="address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE FIRST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateFirstName.php" method="POST">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first" name="first_name"
                                    value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <p>City: <?php echo $row["city"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#city">
                    Edit
                </button>
            <div class="modal fade" id="city" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE FIRST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateFirstName.php" method="POST">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first" name="first_name"
                                    value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <p>Province: <?php echo $row["province"]; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#province">
                    Edit
                </button>
            <div class="modal fade" id="province" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE FIRST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateFirstName.php" method="POST">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first" name="first_name"
                                    value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <p>Zip: <?php echo $row["zip"]  ; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#zip">
                    Edit
                </button>
            <div class="modal fade" id="zip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CHANGE FIRST NAME</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="updateFirstName.php" method="POST">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first" name="first_name"
                                    value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>

    <?php
    }
  }?>
</body>

</html>