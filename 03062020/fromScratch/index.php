<?php session_start(); ?>
<!-- iekš php taga -  var_dump(session_id()); beigas php tags-->
<!-- iekš php taga -  var_dump($_SESSION); beigas php tags-->
<!DOCTYPE html>
<html lang="en">
<?php require_once("public/header.php"); ?>
<!-- Files linking -->
<!-- include - give error message if we don't have file -->
<!-- include_once -->
<!-- require not working if we don't have file-->
<!-- require_once -->
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
            case "comment_success":
                require_once("public/comment_success.php");
            break;
            case "about":
                require_once("public/about.php");
            break;
            case "gallery":
                require_once("public/gallery.php");
            break;
            case "contact":
                require_once("public/contact.php");
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
            default:
                require_once("public/home.php");
        }
    ?>
    <?php require_once("public/footer.php") ?>
</body>
</html>