<?php
session_start();
use Google\Cloud\Core\Timestamp;
date_default_timezone_set('Asia/Manila');
require_once './Firestore.php';

if (!empty($_POST["password"])) {
  $_SESSION["password"] = $_POST["password"];
} else if (!empty($_SESSION["password"])) {
  // do nothing
} else {
  echo "<script type='text/javascript'>window.open('admin.php', '_self');</script>";
}

if (!empty($_GET["signout"]) && $_GET["signout"] == "true") {
  session_destroy();
  echo "<style>.loader {display:block!important}</style>
  <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function(){ 
      window.open('admin.php', '_self');
  }, false);</script>";
}

$firestore = new Firestore('Appointments');
$now = new DateTime();
$date = new Timestamp($now);

if (!empty($_GET["update"])) {
  $value = 1;
  if ($_GET["status"] == "completed") {
    $value = 2;
  }
  $document = [
      'path' => 'attended', 'value' => $value
  ];
  $firestore->update($_GET["update"], $document);
}

if (!empty($_GET["delete"])) {
  $firestore->delete($_GET["delete"]);
}

$show = "";

if (!empty($_GET["show"]) && $_GET["show"] == "active") {
  $data = $firestore->active($date);
  $show = "?show=active";
} else if (!empty($_GET["show"]) && $_GET["show"] == "missed") {
  $data = $firestore->inactive($date);
  $show = "?show=missed";
} else if (!empty($_GET["show"]) && $_GET["show"] == "completed") {
  $data = $firestore->completed();
  $show = "?show=completed";
} else {
  $data = $firestore->all();
  $show = "?show=all";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointments</title>
    <?php include 'head.php';?>
</head>
<body>
    
<ul class="sidenav sidenav-fixed" id="mobile-demo">
    <li><div class="user-view">
      <div class="background">
        <img src="./assets/img/appointments_bg.jpg">
      </div>
      <img class="circle" src="./assets/img/avatar.jpg">
      <span class="black-text name">Admin</span>
      <span class="black-text email">admin@hospital.com</span>
    </div></li>
    <li><span class="stitle">Appointments</span></li>
    <li><a href="?show=all" class="active"><i class="material-icons">people</i>All</a></li>
    <li><a href="?show=active"><i class="material-icons">people</i>Active</a></li>
    <li><a href="?show=missed"><i class="material-icons">people</i>Missed</a></li>
    <li><a href="?show=completed"><i class="material-icons">people</i>Completed</a></li>
    <li><div class="divider"></div></li>
    <li><a href="?signout=true"><i class="material-icons">logout</i>Sign Out</a></li>
  </ul>


<div id="main">
<div class="row">
  <div class="col s12 hpadding">
  <nav>
  <div class="nav-wrapper">
    <a href="appointments.php">Hospital Appointment System</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>

<br/>

  <?php  
            echo "<h5>Result : " . sizeof($data) . "</h5>"
    ?>
                <table class="responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Gender</th>
              <th>Birthdate</th>
              <th>Appointment Date</th>
              <th>History</th>
              <th>Doctor</th>
              <th>Remarks</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
    <?php  foreach($data as $key=>$value): ?>
        <tr>
            <td><?=$key + 1;?></td>
            <td><?=$value['fname'] . " " . $value['lname'];?></td>
            <td><?=$value['cnumber'];?></td>
            <td><?=$value['address'];?></td>
            <td><?=$value['gender'];?></td>
            <td><?=$value['birthdate'];?></td>
            <td><?=$value['appointment'];?></td>
            <td><?=$value['history'];?></td>
            <td><?=$value['doctor'];?></td>
            <td><?=$value['remarks'];?></td>
            
            <?php if (!empty($_GET["show"]) && $_GET["show"] == "missed") { ?>
              <td><?php echo "Missed";?></td>
            <?php } else { ?>
            <td>
              <?php
              if (!empty($value['attended']) && $value['attended'] == 1){
                echo "Missed";
              } else if (!empty($value['attended']) && $value['attended'] == 2){
                echo "Completed";
              } else {
                  $dat = new DateTime($value['date']);
                  $difference = $dat->getTimestamp() - $now->getTimestamp();
                  if ($difference > 0) {
                    $min = floor($difference/60);
                    if ($min >= 360) {
                      $min = floor($min/60);
                      if ($min >= 24) {
                        echo floor($min/24) ." days remaining";
                      } else {
                        echo $min ." hours remaining";
                      }
                    } else {
                      echo $min ." minutes remaining";
                    }
                  } else {
                    echo "Missed";
                  }
                }
              ?>
            </td>
            <?php } ?>
            
            <td>
              <a class="waves-effect waves-light btn dropdown-trigger" data-target='<?=$value['id'];?>'><i class="material-icons left mnone">more_horiz</i></a>
              <ul id='<?=$value['id'];?>' class='dropdown-content wauto'>
                <li><a href="<?=$show."&update=".$value["id"]."&status=completed";?>"><i class="material-icons">check</i> Completed</a></li>
                <li><a href="<?=$show."&update=".$value["id"]."&status=missed";?>"><i class="material-icons">close</i> Missed</a></li>
                <li><a href="<?=$show."&delete=".$value["id"];?>"><i class="material-icons">delete</i> Delete</a></li>
              </ul>
          </td>
        </tr>
    <?php endforeach;?>
        </tbody>
      </table>
</div>
</div>
</div>
</body>

  <script type="text/javascript">
    //<![CDATA[
      M.AutoInit();

      
      $loc = location.href;
      if ($loc !== "http://localhost/hospital/appointments.php") {
        $('.sidenav li a').removeClass('active');
        $('.sidenav li:not(:last-child) a').filter(function(){
          $href = this.href;
          return $loc.indexOf($href) != -1;
        }).addClass('active');
      }
    //]]>
  </script>
</html> 