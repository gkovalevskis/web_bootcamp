        <form name="myform" method="POST" action="php/validateForm.php" onsubmit="return validateComments(this)"> 
            <h1>Please left your comment about our page!</h1>
            Name: <input type="text" name="uname" placeholder="Your name .." required><br>
            Surname: <input type="text" name="surname" placeholder="Your surname .." required><br>
            E-mail: <input type="email" name="email" placeholder="Your e-mail .." required><br>
            Comments: <textarea name="comments" id="comments" cols="50" rows="5" required></textarea><br>
            <input type="submit" name="submit" value="SUBMIT!">
        </form>