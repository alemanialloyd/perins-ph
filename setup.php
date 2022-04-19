<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materialize.css" />
    <title>Setup</title>
</head>
<style>
    .center > table, h1, h2, hr, .hide {
        display: none;
    }
    .center > table:nth-child(1), .center > table:nth-child(2) {
        display: table;
    }
    table h1 {
        display: block;
    }

    table {
        max-width: 100%;
    }

    .col {
        float: none!important;
        margin: 0 auto!important;
    }

    ul li {
        padding: 0.5rem 0!important;
        font-size: 18px!important;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m8">
            <?php phpinfo();?>
            <ul>
                <li>1. Go to <a href="https://pecl.php.net/package/gRPC" target="_blank">PECL</a></li>
                <li>2. Select latest version</li>
                <li>3. Click on DLL</li>
                <li id="s3">4. Select from</li>
                <li id="s4">5. Download</li>
                <li>6. Extract zip to <b>C:\xampp\php\ext</b></li>
                <li>7. Edit <b>php.ini</b> found in <b>C:\xampp\php</b></li>
                <li>8. Find <b>;extension=shmop</b></li>
                <li>9. Add <b>extension=grpc</b> after</li>
                </ul>
            </div>
        </div>
    </div>
</body>


<script type="text/javascript" src="./assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript">
    //<![CDATA[
        $(document).ready(function(){
            $arc = "";
            $('table:not(:first-child) tbody tr').filter(function(){
                $text = $(this).find("td:not(:last-child)").text();
                $hide = true;
                if ($text.indexOf("Thread Safety") != -1) {
                    $hide = false;
                    $wat = $(this).find("td:last-child").text();
                    
                    $t = "<b> Non Thread Safe ";
                    if ($wat == "enabled") {
                        $t = " Thread Safe ";
                    }
                    $("#s4").append($t + $arc + "</b>");
                } else if ($text.indexOf("Architecture") != -1) {
                    $hide = false;
                    $arc = $(this).find("td:last-child").text();
                }
                return $hide;
            }).addClass('hide');

            $ver = $('table:first-child > tbody > tr > td > h1').text();
            $("#s3").append(" <b>" + $ver + "</b>");
            
        });
    //]]>
  </script>
</html> 