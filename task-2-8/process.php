<?php
session_start();

$valid_username = 'Anfal';
$valid_email ='anfal@gmail.com' ;
$valid_password = 'password123';




if (isset($_GET['username']) && isset($_GET['password'])&& isset($_GET['email'])) {
    $submitted_username = $_GET['username'];
    $submitted_password = $_GET['password'];
    $submitted_email= $_GET['email'];

    if ($submitted_username === $valid_username && $submitted_password === $valid_password &&  $submitted_email === $valid_email) {

        $_SESSION['is_logged_in'] = true;
       

        header('Location: calculater.php');
    
    } else {
        
        echo "Invalid username or password. ";
    }
}
?>
