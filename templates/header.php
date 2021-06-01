<?php

?>

<title>E-Meet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
    .w3-half img:hover{opacity:1}
</style>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><b>E-Meet</b></h3>
    </div>
    <div class="w3-bar-block">
        <a href="../src/index.php#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
        <a href="../src/index.php#motivation" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Motivation</a>
        <a href="../src/index.php#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
        <a href="../src/index.php#start-today" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Start Today</a>
        <a href="../src/index.php#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
        <?php
        // Initialize the session
        session_start();
        // Check if the user is logged in, if not then redirect him to login page
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        ?>
        <a href="../src/signup.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Signup</a>
        <a href="../src/login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a>
        <?php }else{ ?>
        <a href="../src/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
            <a href="../src/get-started.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Get Started</a>
            <a href="../src/my-account.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Edit My Account</a>
        <?php } ?>

    </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>E-Meet</span>
</header>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }


</script>
