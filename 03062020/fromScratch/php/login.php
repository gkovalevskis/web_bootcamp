<?php
    session_start(); //continue session
   
    if (isset($_POST['submit']) && $_POST['submit'] == 'Login'){ //check if submit work
        //var_dump("Tiku te 1"); exit;
        if (isset($_POST['email']) && $_POST['email'] != "" && !empty($_POST['email'])){ //chek if e-mail inserted
            //var_dump("Tiku te 2"); exit;
            if (isset($_POST['password']) && $_POST['password'] != "" && !empty($_POST['password'])){ //chek if password inserted
                //var_dump("Tiku te 3"); exit;
                $email = $_POST['email'];
                $password = $_POST['password'];

                $servername = "localhost";
                $username = "root";
                $pass = "";
                $database = "fromscratch";
        
                $conn = new mysqli($servername, $username, $pass, $database);
        
                if($conn->connect_error){
                    die("Unable to connect to database!" . connect_error);
                }
                $sql = $conn->prepare("SELECT `email`, `password` FROM `user_info` WHERE `email` = ?");
                $sql->bind_param("s", $email);
                $sql->execute();
                $result = $sql->get_result();
                $user = $result->fetch_assoc();
                //var_dump($result);
                //echo "</br>";
                // var_dump($user);
                // echo "</br>";
                // var_dump($password);
                // echo "</br>";
                // var_dump($user['password']);
                // echo "</br>";
                // var_dump(password_hash($password, PASSWORD_DEFAULT));exit;
                if(password_verify($password, $user['password'])){
                    //var_dump("Tiku te 4"); exit;
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['id'] = session_id();
                $_SESSION['token'] = "frm115Scrch" . random_bytes(16);
                $_SESSION['login'] = TRUE;
                $_SESSION['form_complete'] = FALSE;
                
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=login_success");
                }
            }
            else{
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=login");
                
            }
        }
    }
?>