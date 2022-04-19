<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Success</title>
    <?php include 'head.php';?>
</head>
<body class="onone">
  <img id="bg" src="./assets/img/success_bg.jpg"/>

    <div class="fheight">
        <div class="valign">
          <div class="row">
            <div class="col s12 m6 l4 pnone fnone hcenter">
            <div class="card">
                <div class="card-image">
                    <img src="./assets/img/success.jpg">
                </div>
                <div class="card-content center-align">
                    <h4>Appointment successfully scheduled</h4>
                    <br/>
                    <a href="index.php" class="waves-effect waves-light btn-large white-text amber darken-2 fnone hcenter">Return to Homepage</a>
                    <div style='clear: both;'></div>
                </div>
            </div>
            </div>
          </div>
      </div>
    </div>
</body>

  <script type="text/javascript">
    //<![CDATA[
        M.AutoInit();
        var email = $("#email");
        var password = $("#password");

        function check() {
            var submit = false;
            if (email.val() == "") {
                M.toast({html: 'Email Address is required'})
                return submit;
            }
            
            if (password.val() == "") {
                M.toast({html: 'Password is required'})
                return submit;
            }

            if (email.val() == "admin@hospital.com" && password.val() == "admin123") {
                submit = true;
                return submit;
            } else {
                M.toast({html: 'Incorrect credentials'})
                return submit;
            }
        }
    //]]>
  </script>
</html> 