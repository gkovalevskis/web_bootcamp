<?php

if(isset($_POST['submit']) && $_POST['submit'] == "SUBMIT!"){
    $uname = $_POST['uname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "01062020_database";
    $conn = new mysqli($servername, $username, $pass, $database);

    if($conn->connect_error){
        die("Unable to connect to database!" . connect_error);
        
    }
    if(!empty($uname) && !empty($surname) && !empty($email) && !empty($comments)){
        $sql = $conn->prepare("INSERT INTO `comments_table` (`uname`, `surname`, `email`, `comments`) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $uname, $surname, $email, $comments);
        $sql->execute();
        header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=comments");
        echo "<center>Message successfuly submited!</center>";
    }
    else{
        echo "<center>Some data were not provided!!</center>";
        die;
    }
    $sql->close();
    $conn->close();
}   

?>