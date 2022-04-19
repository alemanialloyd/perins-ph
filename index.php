<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <?php include 'head.php';?>
</head>
<body class="onone">
  <img id="bg" src="./assets/img/success_bg.jpg"/>

    <div class="fheight">
        <div class="valign">
          <div class="row">
            <div class="col s12 m6 l3 pnone fnone hcenter">
            <div class="card">
                <div class="card-content">
                    <h4>Sign In</h4>
                    <form class="col s12" method="post" action="appointments.php" onsubmit="return check()" id="form">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" id="email" type="email" class="validate">
                                <label for="email">Email Address</label>
                            </div>
                            
                            <div class="input-field col s12">
                                <input name="password" id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </form>
                    <button type="submit" form="form" class="waves-effect waves-light btn-large white-text amber darken-2 dblock fnone fwidth">Sign In</button>
                    <div style='clear: both;'></div>
                    <br/>
                    <p class="center-align mnone"><a href="index.php" class="modal-close modal-trigger blue-text text-darken-2">Return to Homepage</a></p>
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