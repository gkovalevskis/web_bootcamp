<?php

if(isset($_POST['submit']) && $_POST['submit'] == "SUBMIT!"){
    $testedUname = test_input($_POST['uname']);
    $testedSurname = test_input($_POST['surname']);
    $email = test_input($_POST['email']);
    $comments = $_POST['comments'];
    $uname = creatRightWord($testedUname);
    $surname = creatRightWord($testedSurname);

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
                
        header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=success_message");


    }
    else{
        header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=error");
        die;
    }
    $sql->close();
    $conn->close();
} 
function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function creatRightWord($word){
    $wordFirstLetter = strtoupper(substr($word, 0, 1));
    $wordOtherLetters = strtolower(substr($word, 1, strlen($word)));
    return $wordFirstLetter . $wordOtherLetters;
}  
?>