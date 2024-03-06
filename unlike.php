<?php
session_start();
include "koneksi.php";

if (isset($_SESSION['userid']) && isset($_GET['fotoid'])) {
    $userid = $_SESSION['userid'];
    $fotoid = $_GET['fotoid'];

    // Check if the user has already liked the photo
    $sqlCheckLike = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
    
    if (mysqli_num_rows($sqlCheckLike) > 0) {
        // User has liked the photo, remove the like
        $sqlUnlike = mysqli_query($conn, "DELETE FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
        
        if ($sqlUnlike) {
            // Unlike successful
            header("Location: galeri.php"); // Redirect to home or wherever you want
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "You haven't liked this photo.";
    }
} else {
    echo "Invalid request.";
}
?>