<?php require_once('headerpage.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="careSavers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>  
</head>
<style>
    <?php include "careSavers.css" ?>
</style>
<body>
    <section class="about">
    <h2>About Us</h2>
        <div class="flex">
            <div class="sentence">
                <h2>Vision</h2>
               <p>World vision intergrates gender equality into every aspect of its programming to address and prevent Gender- based violence. For development work to succeed , all members of a community must become equal partners in transforming discriminatory beliefs and practices.</p>
            </div>
            <div class="photo1">

            </div>
            <div class="sentence">
                <h2>Values</h2>
                Violence against women is pervasive in south Africa where, as in many other countries ,cultural values and noms serve to condone and reinforce abuse practices against women.primary health care nurses,who are widely distributed throughtout the rural areas may appear to be an ideal network addressing this issues in resource-poor settings.
            </div>
        </div>
        <div class="display">
        <div class="photo">
        </div>
            <div class="sentence">
                <h2>Mission</h2>
               <p>States should domesticate the violence against personal prohibitions(VAPP)Act,which was signed by the president Goodluck into law on the 25th may 2015 to protect the right of women and victims, and ensure the enforcement of laws. Parents should also educate their children on the various type of GBV teaching them not to let anyone one touch their private parts .</p>
            </div>
            
            <div class="photo2">

            </div>
    </section>
    <!-- Feedback Page-->
    <section class="feedback" id="feed">
    <section class="comment">
    <div class="assis">
        <div class="sal">
            <h4>Help Us To Improve Our Assistance</h4>
            <form id="assis" action="careSaverss.php" method="GET">
               <input class="hey" type="email" name="email" id="name"
                placeholder="Enter Your Email"><br><br><br>
                <textarea placeholder="FeedBack" class="hey" name="feedback" id="textarea" cols="20" rows="50"></textarea><br><br>
                <input class="hey" id="hey-button" type="submit" name="send" value="Send" >
            </form>
        </div>
        </div>
    </section>  
        </section>

    <!-- Footer page -->
    <footer class="footer">
        <div class="footer-menu">
            <ul>
                <a href="https://twitter.com/NkanduAkim" target="blank"><li><i class="fab fa-twitter-square"></i></li></a>
                <a href="https://www.facebook.com/profile.php?id=100009176320053" target="blank"><li><i class="fab fa-facebook"></i></li></a>
                <a href="#" target="blank"><li><i class="fab fa-instagram" ></i></li></a>
              
            </ul>
        </div>
        <div class="disp">
            <div class="mobile">
                <i class="fas fa-mobile-alt">+27659196922</i>
                <a href="#">Terms <br>& Conditions</a>
                
            </div>
            <div class="gmaill">
                <i class="fas fa-envelope">CareSavers5@gmail.com</i>
                <p>Give A Feedback</p>
                <div class="donn">
                    
              <i id="donn" class="fas fa-comment-alt" onclick="feedback()"></i>
              </div>
            </div>
        </div>
        </div>
        <div class="address">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229169.6049564896!2d27.899938918124985!3d-26.17145371154092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c68f0406a51%3A0x238ac9d9b1d34041!2sJohannesburg!5e0!3m2!1sen!2sza!4v1619801893572!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
        </div>
       <div class="scrollup">
           <a href=""><i class="fas fa-angle-double-up"></i></a>
       </div>
        <div class="copyright">
            <i class="far fa-copyright">2021 by CareSavers| Proudly Created with Html, Php, Css & Javascript.</i>
            
            </div>
        </div>
        
 <!-- JAVASCRIPT CODE TO HIDE AND SHOW THE FEEDBACK PAGE -->       
<script>
function feedback(){
    var x = document.getElementById("feed");
    if(x.style.display=="flex"){
           x.style.display="";
       }
       else{
           x.style.display="flex";
       }

   }
</script>
        </div>
        </div>
    </section>

    </footer>
</body>
</html>