<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("public/header.php"); ?>
<body>
    <?php require_once("public/navigation.php") ?>
    <?php 
        if (isset($_GET["nav"]) && !empty($_GET["nav"])){
            $pageName = $_GET["nav"];
        }
        else{
            $pageName = "home";
        };
        switch($pageName){
            case "home":
                require_once("public/home.php");
            break;
            case "game":
                require_once("public/game.php");
            break;
            case "comments":
                require_once("public/comments.php");
            break;
            case "login_success":
                require_once("public/login_success.php");
            break;
            case "login":
                require_once("public/login.php");
            break;
            case "logout":
                require_once("public/logout.php");
            break;
            case "registration":
                require_once("public/registration.php");
            break;
            case "registration_success":
                require_once("public/registration_success.php");
            break;
            case "error":
                require_once("public/error_message.php");
            break;
            case "success_message":
                require_once("public/success_message.php");
            break;
            case "not_success_login":
                require_once("public/not_success_login.php");
            break;
            case "for_registered_users":
                require_once("public/for_registered_users.php");
            break;
            default:
                require_once("public/home.php");
        }
    ?>
    <?php require_once("public/footer.php") ?>
</body>
</html>