<?php
include_once "connection.php";
  if(count($_POST) > 0) {
      $city = $_POST['city'];

      // $result = mysqli_query($conn, "SELECT * FROM user_table WHERE id='" . $_POST['id'] . "'");
      // $row = $result->fetch_assoc();
      // $hashed_password = $row['password'];

      // $password = !empty($_POST['password']) ? $_POST['password'] : $hashed_password;

    mysqli_query($conn, "UPDATE user_table SET city='$city' WHERE city='" . $_POST['city'] . "'");
    echo "<script>
    alert('Record Successfully modified');
    window.location='user_setting.php';
    </script>";
  }

  $result = mysqli_query($conn, "SELECT * FROM user_table WHERE id='" . $_GET['id'] . "'");
  $row = mysqli_fetch_array($result);
 ?>