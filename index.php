<!DOCTYPE html>
<html>
   
    <?php
require_once("tools.php");


   top_module("MeiMo");  
   
    ?>
      <nav>
        <div class="topnav"> <a class="active">Home</a> </div>

        
        
        <div class="topnav">
            <a href="contact.php">Mailinglist</a>

        </div>
          <div class="topnav">
            <a href="mission.php">Meimo Mission</a>

        </div>
          <?php admin_menu();?>

        <!-- Header added to NavBar on Scrolling event -->
        <div class="topnav" id="slide">
            <a id="slidetext">meimo</a>
        </div>
    </nav>
    <div> <?php login_module();?></div>
   
    <!-- Background image from http://getwallpapers.com/wallpaper/full/e/6/2/156013.jpg -->
    <main class="parralax">
        
        <!-- Clear Floats -->
        <section class="row">
            
            <!-- Parralax Background section -->
            <section class="parralax"></section>
            
            
            <section class="leftcolumn">
                <article>
                    
                    <img class= "imgright" src="meimo.png" alt="Meimo" height="800"> 
                    <h2>Grow your own unique meimo, keep it healthy and level up through your real-world actions.</h2>

                    
                     
                    <p><img  src="health2.png" alt="Health" width="50" height="50"> Take more steps and spend less screen time on your phone to improve your health score. 
                    </p>
                    <p>
                       <img  src="money.png" alt="Money" width="50" height="50"> Save more money in your bank account than usual then your finiancial score will improve.
                    </p>
                    <p>
                       <img  src="friends.png" alt="Friends" width="50" height="50"> Get tagged in social media photos hanging with your friends to get a better social score. 
                    </p>   
                        
                    <p>
                        With high scores your meimo will stay happy. Fill the bars to level up and evolve into a bigger meimo or gain meimo accessories.
                    </p>
                    
                   <p> Watch your Animated meimo mimick your behaviour, if you are being active you meimo will be too. If you are spending money so is your meimo and if you can make friends so can your meimo</p>
                    
                    </article>
                    <article>
                        <img class= "imgleft" src="meimo3.png" alt="Meimo2" height="800" > 
                    <p>Level up quicker through quests offered daily: </p>   
                       <ul>
                       <li>Take 1000 steps in the next hour for bonus health points </li>
                       <li>Don't buy your usual 10am coffee today for bonus financial points </li>
                       <li> Get tagged in a friends social media photo this week for bonus social points</li>
                           
                           </ul>
                    
                    <p>
                    Set up your meimo in 2 simple steps. 1: Connect to your social media account. 2: Connect to your bank account. Data will also be gathered from the mobile phone you are using. </p>
                </article>


     
            </section>

            <section class="rightcolumn">
                <article>
                    
                    <h2>Meimo ...Nearly....</h2>
                    <h2>  <img src="apple4.jpg" alt="Download on App store"></h2>

                    
                </article>

               
            </section>


        </section>

        <div id="top-of-site-pixel-anchor"></div>
        <section class="parralax"></section>
    </main>
    <?php
bottom_module();
    ?>
 <script src='script.js'></script>
</html>