
<!DOCTYPE html>
<html lang="en">

<?php
include "../templates/header.php";
include "config.php";
?>
<body>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="motivation">
    <h1 class="w3-jumbo"><b>E-Meet</b></h1>
      <h1 class="w3-jumbo"><b> Pandemic inspired solution</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Motivation</b></h1>

      <p>During pandemic and going forward, the social dynamic forced companies and individuals to start online meetings instead of the usual face-to-face meetings. </p>
      <p>With that in mind, it sometimes can be confusing for users to organize the meeting/event because of the vast number of platforms avaible and each of them has a different interface. </p>
      <p>This is why our platform can offer a clear solution to this confusing perspective users might have, because you can simply just create a meeting on your preffered platform and link it directly to your users, without going through the trouble of
      getting your invited users set up in all the different platforms. Basically, you the user trivialize the link-up with your other users.</p>
  </div>





  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services</b></h1>

    <p>With our service users can easly connect with other users registered via e-mail to organize meetings on different platforms.</p>

  </div>
    <!-- Start Today -->
    <div class="w3-container" id="start-today" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Start Today</b></h1>

        <p>Get Started today after creating an account in our sign up section.</p>

    </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact</b></h1>


    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>
  </div>

<!-- End page content -->
</div>

<?php
include "../templates/footer.php";

?>

<?php
//phpinfo();
//testing server con
//include "config.php";
/*
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
while($user_data = mysqli_fetch_array($result)) {

    echo $user_data['name'];
    echo $user_data['email'];
    echo $user_data['password'];

}
*/


?>


</body>
</html>

