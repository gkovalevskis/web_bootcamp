<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){?>
    <?php if(isset($_SESSION['form_complete']) && $_SESSION['form_complete'] == FALSE){?>
    <div class=main>
        <div>
        <form name="signup" action="php/validateSignUp.php" method="POST">
            <input type="text" name="uname" placeholder="Your name .." ><br>
            <input type="text" name="surname" placeholder="Your surname .." ><br>
            <input type="email" name="email" placeholder="Your e-mail .." ><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>  
    </div>    
    <?php }else {?>
        <h1>Form can only be complited once per login!</h1>
        <h1>Tank you, <?php echo $_SESSION['username']; ?>!</h1>
    <?php }?>
<?php }?>
    