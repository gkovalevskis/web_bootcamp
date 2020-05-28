<div>
    <div>
        <form name="myform" method="POST" onsubmit="return checkForm()" action="php/validateForm.php"> 
            <h1>Please fill this form!</h1>
            <input id="fullName" type="text" name="fullName" oninput="setCustomValidity('')" placeholder="Your name and surname .." required><br>
            <input id="age" type="number" name="age" oninput="setCustomValidity('')" placeholder="Your age .." required><br>
            <input id="email" type="email" name="email" oninput="setCustomValidity('')" placeholder="Your e-mail .." required><br>
            <input type="submit" name="submit" value="SUBMIT!">
        </form>
    </div>
</div>    