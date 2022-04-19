<?php
use Google\Cloud\Core\Timestamp;

session_start();
date_default_timezone_set("Asia/Manila");
require_once './Firestore.php';

if (isset($_POST["appointment"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $cnumber = $_POST["cnumber"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $appointment = $_POST["appointment"];
    $time = $_POST["time"];
    $history = $_POST["history"];
    
    $doctor = "-";
    $email = "guest";
    if (!empty($_SESSION["email"])){
        $doctor = $_POST["doctor"];
        $email = $_SESSION["email"];
    }
    $remarks = $_POST["remarks"];

    if ($remarks == "") {
        $remarks = "-";
    }
    if ($history == "") {
        $history = "-";
    }

    $stamp = new Timestamp(new DateTime());
    $d = new DateTime();
    $hour = substr($time, 0, 2);
    $min = substr($time, 3, 2);
    if (substr($time, 6,2) == "PM") {
        $hour = $hour + 12;
    }
    $date = new Timestamp($d->createFromFormat('F d\, Y', date('F d\, Y', strtotime($appointment)))->setTime($hour,$min));

    $document = [
        'fname' => $fname,
        'lname' => $lname,
        'cnumber' => $cnumber,
        'address' => $address,
        'gender' => $gender,
        'birthdate' => $birthdate,
        'appointment' => $appointment,
        'history' => $history,
        'doctor' => $doctor,
        'remarks' => $remarks,
        'created' => $stamp,
        'date' => $date,
        'attended' => 0,
        'email' => $email
    ];

    $firestore = new Firestore('Appointments');
    $registrationResponse = $firestore->newDocument((string) time(), $document, "You have successfully scheduled an appointment.");

    callback($registrationResponse, $firestore, $document);
}

function callback(array $res, Firestore $fir, array $doc) {
    if (!empty($res["status"])) {
        if ($res["status"] == "error") {
            if ($res["message"] == "Document exists.") {
                $res = $fir->newDocument((string) time(), $doc, "You have successfully scheduled an appointment.");
                callback($res, $fir, $doc);
            } else {
                $message = $res["message"];
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else if ($res["status"] == "success") {
            echo "<style>#loader {display:block!important}</style>
                <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function(){ 
                    setTimeout(function() { window.open('success.php', '_self'); }, 2000);
                }, false);</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Schedule</title>
    <?php include 'head.php';?>
</head>
<body>
  <?php include 'header.php';?>

  <img src="./assets/img/schedule_bg.jpg"/>
  
  <div class="container mtop mbottom">
    <form class="row" id="form" method="post" enctype="multipart/form-data" action="#" onsubmit="return check()">
        <div class="input-field col s12 m6">
            <input id="fname" name="fname" type="text" class="validate" value="<?php if (!empty($_SESSION["fname"])){ echo $_SESSION["fname"];}?>">
            <label for="fname">First Name</label>
        </div>
        
        <div class="input-field col s12 m6">
            <input id="lname" name="lname" type="text" class="validate" value="<?php if (!empty($_SESSION["lname"])){ echo $_SESSION["lname"];}?>">
            <label for="lname">Last Name</label>
        </div>

        <div class="input-field col s12 m6">
            <input id="cnumber" name="cnumber" type="number" class="validate">
            <label for="cnumber">Contact Number</label>
        </div>

        <div class="input-field col s12 m6">
            <input id="address" name="address" type="text" class="validate">
            <label for="address">Address</label>
        </div>

        <div class="input-field col s12 m6">
            <select name="gender" id="gender">
                <option value="" disabled selected>Choose</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
            <label for="gender">Gender</label>
         </div>

         <div class="input-field col s12 m6">
            <input type="text" name="birthdate" id="birthdate" class="datepicker">
            <label for="birthdate">Birthdate</label>
         </div>
         
         <div class="input-field col s12 m6">
            <input type="text" name="appointment" id="appointment" class="datepicker">
            <label for="appointment">Date of Appointment</label>
         </div>

         <div class="input-field col s12 m6">
            <input type="text" class="timepicker" id="time" name="time">
            <label for="time">Time of Appointment</label>
         </div>

         <div class="input-field col s12 m6">
            <input id="history" name="history" type="text" class="validate">
            <label for="history">Patient History Medication</label>
        </div>

        <div class="input-field col s12 m6 <?php if (empty($_SESSION["email"])){ echo 'hide';}?>">
            <select name="doctor" id="doctor">
                <option value="" disabled selected>Choose</option>
                <option value="Dra Mia Khalifa">Dr aMia Khalifa</option>
                <option value="Dr Jordi El Niño">Dr Jordi El Niño</option>
                <option value="Dra Lana Rhodes">Dra Lana Rhodes</option>
                <option value="Dr Johnny Sins">Dr Johnny Sins</option>
            </select>
            <label for="doctor">Doctor</label>
         </div>

         <div class="input-field col s12 m6">
            <input id="remarks" name="remarks" type="text" class="validate">
            <label for="remarks">Remarks</label>
        </div>
    </form>
    <div class="row">
        <button type="submit" form="form" class="waves-effect waves-light btn-large white-text amber darken-2 right">Submit</button>
    </div>
  </div>

  <?php include 'footer.php';?>
</body>

<script type="text/javascript">
    //<![CDATA[
        M.AutoInit();

        var elem = document.getElementById('birthdate');
        var options = {
            setDefaultDate: true,
            yearRange: [1920, 2022],
            format: "mmm dd\, yyyy"
        }
        var instance = M.Datepicker.init(elem, options);
        elem.addEventListener("focusin", function () {
            instance.open();
        })
        
        var fname = $("#fname");
        var lname = $("#lname");
        var cnumber = $("#cnumber");
        var address = $("#address");
        var gender = $("#gender");
        var birthdate = $("#birthdate");
        var appointment = $("#appointment");
        var appointment = $("#time");
        var history = $("#history");
        var doctor = $("#doctor");
        var remarks = $("#remarks");

        function check() {
            var submit = true;
            if (fname.val() == "") {
                M.toast({html: 'First Name is required'})
                submit = false;
            }

            if (submit && lname.val() == "") {
                M.toast({html: 'Last Name is required'})
                submit = false;
            }
            
            if (submit && cnumber.val() == "") {
                M.toast({html: 'Contact Number is required'})
                submit = false;
            }

            if (submit && address.val() == "") {
                M.toast({html: 'Address is required'})
                submit = false;
            }
            
            if (submit && gender.val() == null) {
                M.toast({html: 'Gender is required'})
                submit = false;
            }
            
            if (submit && birthdate.val() == "") {
                M.toast({html: 'Birthdate is required'})
                submit = false;
            }
            
            if (submit && appointment.val() == "") {
                M.toast({html: 'Appointment Date is required'})
                submit = false;
            }
            
            if (submit && time.val() == "") {
                M.toast({html: 'Appointment Time is required'})
                submit = false;
            }
            
            if (submit && !doctor.hasClass() && doctor.val() == null) {
                M.toast({html: 'Doctor is required'})
                submit = false;
            }

            return submit;
        }
    //]]>
  </script>
</html>