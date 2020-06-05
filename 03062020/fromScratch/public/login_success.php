    <?php 
    
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "fromscratch";

    $conn = new mysqli($servername, $username, $pass, $database);

    if($conn->connect_error){
        die("Unable to connect to database!" . connect_error);
    }
    $result = mysqli_query($conn, "SELECT * FROM `user_info` WHERE `email` = '{$_SESSION['email']}'");
    $row = mysqli_fetch_assoc($result);

    $conn->close();
    ?>
</div>
<div class=main>
<header>
        <h1>Greetings, <?php echo $row['uname']; ?>!</h1>
      </header>
      <div class="container">
        <table>
          <thead>
            <tr>
              <th colspan="3">
                <h1>Please check your data and update if it is necessary!</h1>
              </th>
            </tr>
            <tr>
              <th>
                <h2>Title</h2>
              </th>
              <th> 
                <h2>Value of title</h2>
              </th>
              <th> 
                <h2>Action</h2>
              </th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td class="left">
                <h3>e-mail</h3>
              </td>
              <td><h3><?php echo $row['email'] ?></h3></td>
              <td></td>    
            </tr>
            <tr>
            <tr>
              <td class="left">
                <h3>Name</h3>
              </td>
              <td><form name="name" onsubmit="#" action="php/change_name.php" method="POST">
                <input class="width80" type="text" name="uname" required value="<?php echo $row['uname'] ?>"></td>
              <td><input type="submit" name="submit" value="SAVE"></form></td>
            </tr>
            <tr>
              <td class="left">
                <h3>Surname</h3>
              </td>
              <td><form name="surname" onsubmit="#" action="php/change_surname.php" method="POST">
                <input class="width80" type="text" name="surname" required value="<?php echo $row['surname'] ?>"></td>
              <td><input type="submit" name="submit" value="SAVE"></form></td>     
            </tr>

              <!-- <td class="left">
                <h3>Password</h3>
              </td>
              <td><input class="width80" type="password" name="password" required value="<?php echo $row['password'] ?>"></td>
              <td><button type="button" onsubmit="">SAVE</button></td>       
            </tr>
            <tr> -->
              <td class="left">
                <h3>Age</h3>
              </td>
              <td><form name="age" onsubmit="#" action="php/change_age.php" method="POST">
                <input class="width80" type="number" name="age" required value="<?php echo $row['age'] ?>"></td>
              <td><input type="submit" name="submit" value="SAVE"></form></td>              
            </tr>
            <!-- <tr>
              <td class="left">
                <h3>Phone</h3>
              </td>
              <td><input class="width80" type="number" name="phone" required value="<?php echo $row['phone'] ?>"></td> 
              <td><button type="button" onsubmit="">SAVE</button></td>         
            </tr> -->
          </tbody>
        </table>
</div>        