<!DOCTYPE html>
<html>
<script src='script.js'></script>
<?php
    $name = "";
    $email = "";
    $emailError = "";
    $nameError = "";
    $errorsFound = false;
    $mobile = "";
    $mobileError = "";
    $message ="";
    $subject = "";
    require_once("post-validation.php");
    require_once("tools.php");
  
    ?>

<?php
   top_module("Contact - Meimo");
    ?>
  <nav>
        <div class="topnav"> <a href="index.php">Home</a> </div>

        
        
        <div class="topnav">
            <a href="contact.php">Mailinglist</a>

        </div>
          <div class="topnav">
            <a class="active">Meimo Mission</a>

        </div>
          <?php admin_menu();?>

        <!-- Header added to NavBar on Scrolling event -->
        <div class="topnav" id="slide">
            <a id="slidetext">meimo</a>
        </div>
    </nav>
<div> <?php login_module();?></div>



<section class="parralax"></section>
<section class="parralax"></section>
<main class="parralax">
    <article  style="margin-top: 0px padding: 10px">

        <p> There is so much data about ourselves being shared with advertising companies that they end up knowing more about ourselves than we do. It is time to use this data for ourselves to help us become a better version of us. We can be healthier, stop spending so much time addicted to our phone, be more social, finacially secure and more all through the fun challenge of trying to keep your meimo healthy.</p>
                    <p>
    </article>
</main>
<section class="parralax">
</section>
<pre><?= print_r($_POST) ?></pre>
<?php
bottom_module();
    ?>
<script src='script.js'></script>

</html>