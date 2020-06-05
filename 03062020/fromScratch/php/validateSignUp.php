<?php
    session_start();
    if (isset($_POST['submit']) && $_POST['submit'] == "Submit"){
        $uname = test_input($_POST['uname']);
        $surname = test_input($_POST['surname']);
        $email = test_input($_POST['email']);
        if(empty($uname) || empty($surname) || empty($email)){
            header("Location: http://".$_SERVER['HTTP_HOST']."/newproject/fromScratch"); 
        }
        else{
            $file_data = "Name: " . $uname . ", Surname: " . $surname . ", E-mail: " . $email;
            $database_file = fopen("sign_up_data.txt", "a");
            fwrite($database_file, $file_data . "\n");
            fclose($$database_file);
            $_SESSION['form_complete'] = TRUE;
            header("Location: http://".$_SERVER['HTTP_HOST']."/newproject/fromScratch?nav=comment_success"); 
        }
    }
    function test_input($data){
        $data = trim($data);//remove empty spaces
        $data = stripcslashes($data);//remove symbol /
        $data = htmlspecialchars($data);//change special characters to codes
        return $data;
    }
?>