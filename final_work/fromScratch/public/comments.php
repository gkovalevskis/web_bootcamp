<div class=main>
    <img width="400px" src="../images/cropped-DSC2659-1.jpeg" alt="photo">
    <form name="comments" onsubmit="return validateLogin()" action="php/comments.php" method="POST" > 
        <h1>Please left your comment about our new product!</h1>
            <input id="uname" type="text" name="uname" oninput="setCustomValidity('')" placeholder="Your name .." required>
            <br>
            <input id="surname" type="text" name="surname" oninput="setCustomValidity('')" placeholder="Your surname .." required>
            <br>
            <input id="email" type="email" name="email" oninput="setCustomValidity('')" placeholder="Your e-mail .." required>
            <br>
            <textarea id="comments" name="comments" cols="50" rows="10" oninput="setCustomValidity('')" placeholder="Your comment .." required></textarea>
            <br>
            <input type="submit" name="submit" value="SUBMIT!">
    </form>
</div>
<?php

    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "01062020_database";
    $conn = new mysqli($servername, $username, $pass, $database);

    if($conn->connect_error){
        die("Unable to connect to database!" . connect_error);   
    }
    $result = mysqli_query($conn, "SELECT * FROM `comments_table` ORDER BY id desc");
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='displayed-comment'><strong>Name: </strong>" . $row['uname'] . "</br>
            <strong>Comment: </strong>" . $row['comments'] . "</br></div>";
        }
    }
    else{
        echo "No comments yet!";
    }
    $conn->close();
?>