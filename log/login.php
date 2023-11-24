<?php
session_start();
include('connect.php');
// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location:dashboard.php");
    exit;
}

// check if the login form is submitted
if (isset($_POST['submit'])) {
    // retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    // retrieve user data from the database
    $sql = "SELECT * FROM links WHERE username = '$username'AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    // check if user exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        $error_msg = "YOU HAVE BEEN LOGGED IN SUCCESSFULLY.";
        echo "<script type='text/javascript'>alert('$error_msg');</script>";
        
        echo '<script type="text/javascript">
                    location.replace("dashboard.php");
                </script>';
        exit;
    } else {
        // display error message
        $error_msg = "Invalid username or password.\\nTry again.";
        echo "<script type='text/javascript'>alert('$error_msg');</script>";
        echo '<script type="text/javascript">
                    location.replace("../");
                </script>';        
    }
}
?>