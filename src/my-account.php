<?php
include "../templates/header.php";
include "config.php";
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../src/login.php");
    exit;
}
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

$email = "";
$email_err = "";
$current_email= "";


//console_log($_SESSION["email"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($_POST["email"]))){
        $email_err = "Email can only contain letters, numbers, and underscores as in: example_1234@email.com.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($mysqli, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            //console_log("Test");
            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "There is an account with this email already";
                } else{
                    $email= trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        $sql = "SELECT email FROM users WHERE id = ?";
       // console_log( $_SESSION["id"]);
        if ($stmt = mysqli_prepare($mysqli, $sql)) {

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            //console_log("Test");
            // Set parameters
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $result=mysqli_fetch_array($stmt);
                    $current_email=$result["email"];
                   // console_log($current_email);
                    $email_err = "This account already has an email.";

                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }


        }

    }




    // Check input errors before inserting in database
    if(empty($email_err)&&empty($current_email)){

        // Prepare an insert statement
        $sql = "UPDATE users SET email = ? WHERE id = ?";
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters

            mysqli_stmt_bind_param($stmt, "si", $param_email,$param_id);

            // Set parameters
            $param_email = $email;
            $param_id = $_SESSION["id"];
            // Attempt to execute the prepared statement

            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page

                header("location: get-started.php");
            } else{
                echo "Oops! Something went wrong. Please try again later";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($mysqli);
}

?>
<html>
<body>
<div class="w3-main" style="margin-left:340px;margin-right:40px">


    <!-- Sign up -->
    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Add Your email.</b></h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="w3-section">
                <label>E-Mail</label>
                <input type="email" name="email" class="w3-input w3-border <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>

            <input type="submit" name ="submit" class=" w3-button w3-block w3-padding-large w3-red w3-margin-bottom">

        </form>


    </div>

</div>
</body>
</html>



