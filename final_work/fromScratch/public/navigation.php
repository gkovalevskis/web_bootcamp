<nav>
    <ul>
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "game") {echo "class=\"active\""; }?> href="?nav=game">GAME</a></li>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "login_success") {echo "class=\"active\""; }?> href="?nav=login_success">YOUR DATA</a></li>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "logout") {echo "class=\"active\""; }?> href="?nav=logout">LOGOUT</a></li>
        <?php }else{ ?>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "home") {echo "class=\"active\""; }?> href="?nav=home">HOME</a></li>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "comments") {echo "class=\"active\""; }?> href="?nav=comments">COMMENTS</a></li>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "registration") {echo "class=\"active\""; }?> href="?nav=registration">SIGNUP</a></li>
            <li ><a <?php if(isset($_GET['nav'])&&$_GET["nav"] == "login") {echo "class=\"active\""; }?> href="?nav=login">LOGIN</a></li>
        <?php } ?> 
    </ul>
</nav>

