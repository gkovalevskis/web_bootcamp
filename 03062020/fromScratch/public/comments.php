<div class=main>
    <img width="600px" src="../images/cropped-DSC2659-1.jpg" alt="photo">
    <form name="myform" method="POST" action="php/comments.php" onsubmit="return validateComments(this)"> 
        <h1>Please left your comment about our new product!</h1>
        <input type="text" name="uname" oninput="setCustomValidity('')" placeholder="Your name .." required><br>
        <input type="text" name="surname" oninput="setCustomValidity('')" placeholder="Your surname .." required><br>
        <input type="email" name="email" oninput="setCustomValidity('')" placeholder="Your e-mail .." required><br>
        <textarea name="comments" id="comments" cols="50" rows="5" oninput="setCustomValidity('')" placeholder="Your comment .." required></textarea><br>
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
    if(mysqli_num_rows($result ) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='displayed-comment'><strong>Name: </strong>" . $row['uname'] . "</br><strong>Comment: </strong>" . $row['comments'] . "</br></div>";
        }
    }
    else{
        echo "No comments yet!";
    }
    $conn->close();
?>