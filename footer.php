<div id="login" class="modal">
    <div class="modal-content">
        <h4>Sign In</h4>
        <div class="row mnone">
            <form class="col s12" method="post" action="#" enctype="multipart/form-data" onsubmit="return signin()" id="sform">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate <?php if (!empty($_SESSION["missing"]) && $_SESSION["missing"] == "missing"){ echo "invalid";}?>" value="<?php if (!empty($_POST["email"])){ echo $_POST["email"];}?>">
                        <label for="email">Email Address</label>
                    </div>
                    
                    <div class="input-field col s12">
                        <input name="password" id="password" type="password" class="validate <?php if (!empty($_SESSION["incorrect"]) && $_SESSION["incorrect"] == "incorrect"){ echo "invalid";}?>" value="<?php if (!empty($_POST["password"])){ echo $_POST["password"];}?>">
                        <label for="password">Password</label>
                    </div>
                </div>
            </form>

            <button type="submit" form="sform" class="waves-effect waves-light btn-large white-text amber darken-2 dblock fnone fwidth">Sign In</button>
            <br/>
            <p class="center-align mnone">Don't have an Account? <a href="#signup" class="modal-close modal-trigger amber-text text-darken-2">Create</a></p>
        </div>
    </div>
</div>

<div id="signup" class="modal">
    <div class="modal-content">
        <h4>Create an Account</h4>
        <div class="row mnone">
            <form class="col s12" method="post" action="#" enctype="multipart/form-data" onsubmit="return signup()" id="cform">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="fname2" id="fname2" type="text" class="validate" value="<?php if (!empty($_POST["fname2"])){ echo $_POST["fname2"];}?>">
                        <label for="fname2">First Name</label>
                    </div>
                    
                    <div class="input-field col s12">
                        <input name="lname2" id="lname2" type="text" class="validate" value="<?php if (!empty($_POST["lname2"])){ echo $_POST["lname2"];}?>">
                        <label for="lname2">Last Name</label>
                    </div>

                    <div class="input-field col s12">
                        <input name="email2" id="email2" type="email" class="validate <?php if (!empty($_SESSION["exists"]) && $_SESSION["exists"] == "exists"){ echo "invalid";}?>" value="<?php if (!empty($_POST["email2"])){ echo $_POST["email2"];}?>">
                        <label for="email2">Email Address</label>
                    </div>
                    
                    <div class="input-field col s12">
                        <input name="password2" id="password2" type="password" class="validate" value="<?php if (!empty($_POST["password2"])){ echo $_POST["password"];}?>">
                        <label for="password2">Password</label>
                    </div>
                </div>
            </form>

            <button type="submit" form="cform" class="waves-effect waves-light btn-large white-text amber darken-2 dblock fnone fwidth">Sign Up</button>
            <br/>
            <p class="center-align mnone">Already have an Account? <a href="#login" class="modal-close modal-trigger amber-text text-darken-2">Sign In</a></p>
        </div>
    </div>
</div>


<div id="loader">
    <div class="valign hcenter">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    </div>
</div>
<script type="text/javascript">
    //<![CDATA[
        M.AutoInit();

        var email = $("#email");
        var password = $("#password");
        var email2 = $("#email2");
        var password2 = $("#password2");
        var fname = $("#fname2");
        var lname = $("#lname2");

        function signin() {
            var submit = true;
            if (email.val() == "") {
                M.toast({html: 'Email Address is required'})
                submit = false;
            }
            
            if (submit && password.val() == "") {
                M.toast({html: 'Password is required'})
                submit = false;
            }

            return submit;
        }

        function signup() {
            var submit = true;
            if (fname.val() == "") {
                M.toast({html: 'First Name is required'})
                submit = false;
            }
            
            if (submit && lname.val() == "") {
                M.toast({html: 'Last Name is required'})
                submit = false;
            }

            if (submit && email2.val() == "") {
                M.toast({html: 'Email Address is required'})
                submit = false;
            }
            
            if (submit && password2.val() == "") {
                M.toast({html: 'Password is required'})
                submit = false;
            }
            
            if (submit && password2.val().length < 6) {
                M.toast({html: 'Password must be at least 6 characters'})
                submit = false;
            }

            return submit;
        }
    //]]>
  </script>

<?php
require_once './Firestore.php';

if (isset($_POST["fname2"])) {
    $fname = $_POST["fname2"];
    $lname = $_POST["lname2"];
    $email = $_POST["email2"];
    $password = $_POST["password2"];

    $document = [
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'password' => $password,
    ];

    $firestore = new Firestore('Accounts');
    $registrationResponse = $firestore->newDocument($email, $document, "Account created successfully");

    check($registrationResponse, $firestore);
} else {
    if (isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $firestore = new Firestore('Accounts');
        $data = $firestore->getDocument($email);
    
        check($data, $firestore);
    }
}

function check(array $res, Firestore $fir) {
    if (!empty($res["status"])) {
        if ($res["status"] == "error") {
            if ($res["message"] == "Document exists.") {
                $_SESSION["exists"] = "exists";
                echo "<script type='text/javascript'>alert('Email already used.');
                    document.addEventListener('DOMContentLoaded', function () {
                        var elem = document.getElementById('signup');
                        var instance = M.Modal.init(elem);
                        instance.open();
                    });
                </script>";
            } else if ($res["message"] == "Account does not exist") {
                $_SESSION["missing"] = "missing";
                echo "<script type='text/javascript'>alert('Account does not exist.');
                    document.addEventListener('DOMContentLoaded', function () {
                        var elem = document.getElementById('login');
                        var instance = M.Modal.init(elem);
                        instance.open();
                    });
                </script>";
            } else {
                $message = $res["message"];
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else if ($res["status"] == "success") {
            if ($res["message"] == "Account created successfully") {
                $_SESSION["fname"] = $_POST["fname2"];
                $_SESSION["lname"] = $_POST["lname2"];
                $_SESSION["email"] = $_POST["email2"];
                echo "<style>#loader {display:block!important}</style>
                <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function(){ 
                    setTimeout(function() { window.open('schedule.php', '_self'); }, 2000);
                }, false);</script>";
            } else {
                if ($res["password"] == $_POST["password"]) {
                    $_SESSION["fname"] = $res["fname"];
                    $_SESSION["lname"] = $res["lname"];
                    $_SESSION["email"] = $res["email"];
                    
                    echo "<style>#loader {display:block!important}</style>
                    <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function(){ 
                        setTimeout(function() { window.open('schedule.php', '_self'); }, 2000);
                    }, false);</script>";
                } else {
                    $_SESSION["incorrect"] = "incorrect";
                    echo "<script type='text/javascript'>alert('Incorrect password.');
                        document.addEventListener('DOMContentLoaded', function () {
                            var elem = document.getElementById('login');
                            var instance = M.Modal.init(elem);
                            instance.open();
                        });
                    </script>";
                }
            }
        }
    }
}
?>