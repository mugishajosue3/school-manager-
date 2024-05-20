<?php
require_once "conn.php";

if(isset($_POST['submit'])){

    $un = $_POST['un'];
    $pw = $_POST['pw'];

    if($un == "admin" &&  $pw == "admin"){
        header('location: admin.php');
        exit;
    }

    elseif($un == "sec" && $pw == "sec"){
        header('location: sec.php');
        exit;
    }
    else{
        echo "Invalid username or password";
    }
}
?>
