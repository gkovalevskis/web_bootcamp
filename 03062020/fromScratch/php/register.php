<?php 

    if(isset($_POST['submit']) && $_POST['submit'] == "Submit"){
        $uname = $_POST['uname'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        //var_dump($password);
        //var_dump($encrypted_password);

        $servername = "localhost";
        $username = "root";
        $pass = "";
        $database = "fromscratch";

        $conn = new mysqli($servername, $username, $pass, $database);

        if($conn->connect_error){
            die("Unable to connect to database!" . connect_error);
        }
        $existingEmail = "SELECT * FROM `user_info` WHERE email = '$email'";
        $result = mysqli_query($conn, $existingEmail);
        $num = mysqli_num_rows($result);
        
        $sql = $conn->prepare("INSERT INTO `user_info` (`uname`, `surname`, `email`, `password`) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $uname, $surname, $email, $encrypted_password);
        $sql->execute();
        
        $sql->close();
        $conn->close();
        header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=registration_success");
    }
?>