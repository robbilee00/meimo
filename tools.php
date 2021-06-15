<?php

define("ADMIN",'IanBBB');
define("ADMIN_PWD",'p4ssw0rd');

  session_start();

function top_module($pageTitle) {
  $html = <<<"OUTPUT"
  <!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$pageTitle</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <script src='../wireframe.js'></script>
    
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css")>
</head>
<body>
   <!-- Header with CSS only animation Code apdated from and background images by Landrik in 'Parralax animation Hero Demo' https://bashooka.com/coding/pure-css-parallax-scrolling-examples -->
    <!-- Tank image from https://www.freeiconspng.com/images/tank-icons -->
    <header>
        <div class="hero" id="hero">
            <div class="trees3"></div>
            <div class="trees2"></div>
            <div class="trees1"></div>
            <div class="tank-1"></div>
            <div class="tank-2"></div>
            <div class="ground2"></div>
            <div class="ground1"></div>
        </div>
        <h1>MeiMo</h1>
    </header>
  
OUTPUT;
  echo $html;
}
 function admin_menu() {
     if (isset($_SESSION["user"])){
        if (($_SESSION["user"]["fname"] == ADMIN) && ($_SESSION["user"]["password"] == ADMIN_PWD)) {
                    $html = <<<"OUTPUT"
 
              <div class="topnav">
            <a href="https://titan.csit.rmit.edu.au/~s3683022/wp/a3/edit-letters.php">Edit Letters</a>

        </div>

OUTPUT;
                        echo $html;}
     
    }  
 }
 function login_module() {
             
          if (isset($_SESSION["user"])) {
              $user = $_SESSION["user"]["fname"];
              $html = <<<"OUTPUT"
 
     <form  method= "post" action="logIO.php">
                
              <button style= "color:black; margin-right: 5px; margin-left: 5px; float: right" name=logIO>Log Out</button>
              <label style= "color:white; float: right" >Signed in as: $user  </label>

OUTPUT;
    echo $html;
              
          } else {
              $html = <<<"OUTPUT"
 
     <form method= "post" action="logIO.php">
              <button style= "color:black; margin-right: 5px; float: right;" name=logIO>Log In</button>
              <input type=text style="float: right; width: 10%; margin-left: 5px; margin-right: 5px"; name="password" placeholder = "Password">
              <input type=text style="float: right; width: 10%"; name="fname" placeholder = "Username">
              
              
OUTPUT;
   echo $html;       }
 }
      
function bottom_module() {
  $html = <<<"OUTPUT"
 
    <footer>
        <div>
                
             Rob Lee </div><div>robbil_ee@yahoo.com.au</div>
       
    </footer>

</body>

OUTPUT;
    echo $html;
}


    
function get_letterinfo($getnumber){
     $letters = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", "r");
flock($letters, LOCK_SH);
$headings = fgetcsv($letters);
   $letternumber = 0;
while ($aLineOfCells = fgetcsv($letters, 0, "\t")) {
    $records[$letternumber]['datestart'] = $aLineOfCells[0];
    $records[$letternumber]['dateend'] = $aLineOfCells[1];
    $records[$letternumber]['type'] = $aLineOfCells[2];
    $records[$letternumber]['town'] = $aLineOfCells[3];
    $records[$letternumber]['country'] = $aLineOfCells[4];
    $records[$letternumber]['transport'] = $aLineOfCells[5];
    $records[$letternumber]['battle'] = $aLineOfCells[6];
    $records[$letternumber]['content'] = $aLineOfCells[7];
    $letternumber = $letternumber+1;
}
flock($letters, LOCK_UN);
fclose($letters);
$friendlydate = friendlyDate($records[$getnumber]['datestart']);

echo "<p style= 'font-size: 2em'>{$friendlydate}</p>";
echo "<p style= 'font-size: 2em'>{$records[$getnumber]['town']} {$records[$getnumber]['country']} {$records[$getnumber]['transport']} {$records[$getnumber]['battle'] }</p>";
}



function friendlyDate($inputdate) {

    $date=date_create((string)$inputdate);
    echo date_format($date,"dS F Y");

}
function get_letters($getnumber) {
    
    $letters = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", "r");
flock($letters, LOCK_SH);
    $letternumber = 0;
    $headings = fgetcsv($letters);
    
            
   
            while ($aLineOfCells = fgetcsv($letters, 0, "\t")) {
                    $records[$letternumber]['datestart'] = $aLineOfCells[0];
                    $records[$letternumber]['dateend'] = $aLineOfCells[1];
                    $records[$letternumber]['type'] = $aLineOfCells[2];
                    $records[$letternumber]['town'] = $aLineOfCells[3];
                    $records[$letternumber]['country'] = $aLineOfCells[4];
                    $records[$letternumber]['transport'] = $aLineOfCells[5];
                    $records[$letternumber]['battle'] = $aLineOfCells[6];
                    $records[$letternumber]['content'] = $aLineOfCells[7];
                    $letternumber = $letternumber+1;
                    }
    
flock($letters, LOCK_UN);
fclose($letters);
$friendlydate = friendlyDate($records[$getnumber]['datestart']);

echo "<p style= 'font-size: 2em'>{$friendlydate}</p>";
echo "<p style= 'font-size: 2em'>{$records[$getnumber]['town']} {$records[$getnumber]['country']} {$records[$getnumber]['transport']} {$records[$getnumber]['battle'] }</p>";
echo "<p class= 'handwriting'; style= 'font-size: 1.8em';>{$records[$getnumber]['content']}</p>";
}
?>