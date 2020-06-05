<?php
    if (isset($_POST['submit']) && $_POST['submit'] == "SUBMIT!"){
        $uname = test_input($_POST['uname']);
        $surname = test_input($_POST['surname']);
        $email = test_input($_POST['email']);
        $comments = test_input($_POST['comments']);
        if(empty($uname) || empty($surname) || empty($email) || empty($comments)){
            header("Location: http://".$_SERVER['HTTP_HOST']."/newproject/fromScratch"); 
        }
        else{
            $submitArray = [$uname, $surname, $email, $comments];
            $keys = ["Name", "Surname", "E-mail", "Comments"];
            $together[] = array_combine($keys, $submitArray);
            $createdFile = fopen("comments_data.txt", "a");
            foreach($together as $place){
                var_dump($place);
                foreach($place as $key => $value){
                    fwrite($createdFile, $key . ": " . $value . "\n"); 
                }
                fwrite($createdFile, "\n");
            }
            fclose($createdFile);
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