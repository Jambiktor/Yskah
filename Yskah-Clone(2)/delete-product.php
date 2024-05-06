<?php
    include("sessionchecker.php");
    include("connection.php");

    if(isset($_POST['remove'])) {
        $id = $_POST['id'];
        
        $query = "DELETE FROM products WHERE id = '$id'";
        
        $query = "SELECT image_file FROM products WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $imageFileName = $row['image_file'];
    
        $imageFilePath = "product-images/" . $imageFileName;
    

        if(file_exists($imageFilePath)) {
            if(unlink($imageFilePath)) {
                $deleteQuery = "DELETE FROM products WHERE id = '$id'";
                if(mysqli_query($conn, $deleteQuery)) {
                    header("Location: admin-products.php");
                    exit();
                } else {
                    echo "Error deleting record from the database";
                }
            } else {
                echo "Error deleting image file";
            }
        } else {
            echo "Image file not found";
        }
    }
?>

