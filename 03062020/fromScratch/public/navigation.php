<nav>
    <ul>
        <li ><a href="?nav=home">HOME</a></li>
        <li ><a href="?nav=about">ABOUT</a></li>
        <li><a href="?nav=gallery">GALLERY</a></li>
        <li ><a href="?nav=contact">CONTACT</a></li>
        <li ><a href="?nav=comments">COMMENTS</a></li>
        <li ><a href="?nav=registration">SIGNUP</a></li>
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
            <li ><a href="?nav=logout">LOGOUT</a></li>
        <?php }else{ ?>
            <li ><a href="?nav=login">LOGIN</a></li>
        <?php } ?>
    </ul>
</nav>