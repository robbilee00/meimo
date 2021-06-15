<?php

define("ADMIN",'IanBBB');
define("ADMIN_PWD",'p4ssw0rd');



session_start();
// User should only get here if a logIO button is clicked
  if (isset($_POST["logIO"])) {
// If user is currently logged in, log them out
    if (isset($_SESSION["user"])) {
      unset($_SESSION["user"]);
// User not logged in, make sure fname field is not blank.
    } else if ((!empty($_POST["fname"] )) && (!empty($_POST["password"]))){
// Log the user in, make sure fname is clean.
      $_SESSION["user"]["fname"] = htmlentities($_POST["fname"], ENT_QUOTES);
      $_SESSION["user"]["password"] = htmlentities($_POST["password"], ENT_QUOTES);
        
    }
// Transfer user back to the referring page
    header("Location: ".$_SERVER["HTTP_REFERER"]);
} else {
// User got here by not clicking a logIO button, forward them "silently" to the home page.
header("Location:index.php");
}?>