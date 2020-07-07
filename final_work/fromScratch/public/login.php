<div class=main>
    <div>
    <form name="login" onsubmit="return validateLogin()" action="php/login.php" method="POST">
    <h1>Login form!</h1>
        <input id="email" name="email" type="email" oninput="setCustomValidity('')" placeholder="E-mail .. " required>
        <br>
        <input id="password" name="password" type="password" oninput="setCustomValidity('')" placeholder="Password .. " required>
        <br>
        <input name="submit" type="submit" value="Login">
    </form>
    </div>
</div>

