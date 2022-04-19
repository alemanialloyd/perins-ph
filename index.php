<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include 'head.php';?>
</head>
<body class="onone">
  <img id="backdrop" src="./assets/img/landing_bg.jpg"/>
  <?php include 'header.php';?>

  <div class="container">
    <div class="fheight">
        <div class="valign">
          <div class="row">
            <div class="col s12 m6 l4 pnone">
              <h2>Schedule an Appointment</h2>
              <p class="tmedium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <br/><br/>
              <a href="schedule.php" class="tmedium waves-effect waves-light btn-large white-text amber darken-2">Proceed</a>
            </div>
          </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>
</body>

  <script type="text/javascript">
    M.AutoInit();
  </script>
</html> 