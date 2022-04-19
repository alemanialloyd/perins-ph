<?php
if (!empty($_GET["signout"]) && $_GET["signout"] == "true") {
  session_destroy();
  echo "<style>.loader {display:block!important}</style>
  <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function(){ 
      window.open('index.php', '_self');
  }, false);</script>";
}
?>
<nav>
    <div class="container">
    <div class="nav-wrapper">
      <a href="index.php">Hospital Appointment System</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <?php if (!empty($_SESSION["email"])){ echo "<a href='?signout=true' class='waves-effect waves-light btn white-text amber darken-2'>Sign Out</a>";} else {echo "<a href='#login' class='waves-effect waves-light btn white-text amber darken-2 modal-trigger'>Sign In</a>";}?>
      </ul>
    </div>
</div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><?php if (!empty($_SESSION["email"])){ echo "<a href='?signout=true'>Sign Out</a>";} else {echo "<a href='#login' class='modal-trigger sidenav-close'>Sign In</a>";}?></li>
  </ul>