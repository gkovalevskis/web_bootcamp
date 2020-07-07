<div class=main>
    <div>
        <form name="signup" onsubmit="return validateSignUp()" action="php/register.php" method="POST">
            <h1>Registration form!</h1>
                <input id="fullName" name="fullName" type="text" oninput="setCustomValidity('')" placeholder="Your full name .." required>
                <br>
                <input id="email" name="email" type="email" oninput="setCustomValidity('')" placeholder="Your e-mail .." required>
                <br>
                <input id="password" name="password" type="password" oninput="setCustomValidity('')" placeholder="Your password .." required>
                <br>
                <input type="submit" name="submit" value="Sign Up">
        </form>
    </div>  
</div>   
