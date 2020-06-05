<?php
    session_start(); //continue session
   
    if (isset($_POST['submit']) && $_POST['submit'] == 'Login'){ //check if submit work
        //var_dump("Tiku te 1");
        if (isset($_POST['email']) && $_POST['email'] != "" && !empty($_POST['email'])){ //chek if username inserted
            //var_dump("Tiku te 2");
            if (isset($_POST['password']) && $_POST['password'] != "" && !empty($_POST['password'])){ //chek if password inserted
                //var_dump("Tiku te 3");
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['id'] = session_id();
                $_SESSION['token'] = "frm115Scrch" . random_bytes(16);
                $_SESSION['login'] = TRUE;
                $_SESSION['form_complete'] = FALSE;
                //var_dump("Tiku te 4");
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=login_success");
            }
            else{
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/newproject/fromScratch/?nav=login");
                
            }
        }
    }
?>