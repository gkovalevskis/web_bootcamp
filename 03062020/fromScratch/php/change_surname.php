<?php
session_start();
if(isset($_POST['submit']) && $_POST['submit'] == "SAVE"){
    $surname = $_POST['surname'];

    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "fromscratch";

    $conn = new mysqli($servername, $username, $pass, $database);

    if($conn->connect_error){
    die("Unable to connect to database!" . connect_error);
    }
    
    $sql = $conn->prepare("UPDATE `user_info` SET `surname` = ? WHERE email = '{$_SESSION['email']}'");
    $sql->bind_param("s", $surname);
    $sql->execute();
    
    $sql->close();
    $conn->close();
    header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=login_success");
}
?>