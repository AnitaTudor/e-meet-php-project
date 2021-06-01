<?php

include "../templates/header.php";
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../src/login.php");
    exit;
}
?>



<html>
<body>
<div class="w3-main" style="margin-left:340px;margin-right:40px">


    <!-- Get-Started-->
    <div class="w3-container" id="get-started" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Get Started</b></h1>

        <p>Create your first meeting today.</p>
        <form action="../src/create-meeting.php">
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Create-meeting</button>
        </form>


    </div>
    <!-- Edit my account -->
    <div class="w3-container" id="get-started" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Edit my account</b></h1>

        <p>Edit your account here</p>
        <form action="../src/my-account.php">
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Edit my account</button>
        </form>


    </div>

</div>
</body>
</html>


