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
   top_module("Contact - MeMo");
    ?>
<nav>
    <div class="topnav"> <a href="index.php">Home</a> </div>

    
    <div class="topnav">
        <a class="active">Mailing List</a>

    </div>
    <div class="topnav">
            <a href="mission.php">Meimo Mission</a>

        </div>
    <?php admin_menu();?>
    <!-- Header added to NavBar on Scrolling event -->
    <div class="topnav" id="slide">
        <a id="slidetext">Meimo</a>
    </div>
</nav>
<div> <?php login_module();?></div>



<section class="parralax"></section>
<section class="parralax"></section>
<main class="parralax">
    <article id="formarticle" style="margin-top: 0px">
        <p>Join the mailing list so we can let you know when Meimo is available.</p>
        <form id="form" method="post" onsubmit="setstorage()" action="contact.php">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.."  value='<?= $name ?>'>
            <p class="validationtext"></p>
            <p class="validationtext" id="namevalidationtext"><?= $nameError ?></p>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Your E-mail address.." required title="Please enter a valid e-mail address" value='<?= $email ?>'>
            <p class="validationtext"></p>
            <p class="validationtext" id="emailvalidationtext"><?= $emailError ?></p>
           
            
           
            
            <div></div>
            <input type="submit" value="Submit">

        </form>

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