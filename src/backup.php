<?php
include "../templates/header.php";

?>
<html>
<body>
<div class="w3-main" style="margin-left:340px;margin-right:40px">


    <!-- Sign up -->
    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Sign Up</b></h1>

        <form action="../src/signup.php" method="post">
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="name" required>
            </div>
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="email" required>
            </div>
            <div class="w3-section">
                <label>Password</label>
                <input class="w3-input w3-border" type="text" name="password" required>
            </div>
            <input type="submit" name ="submit" class=" w3-button w3-block w3-padding-large w3-red w3-margin-bottom">
        </form>
        <?php



        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // include database connection file
            include_once("config.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

            // Show message when user added
            echo "You have been added succesfully";
        }
        ?>

    </div>

</div>
</body>
</html>




