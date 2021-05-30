<?php require_once('headerpage.php');


?>
<style>
    <?php include "careSavers.css" ?>
</style>
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
<body>

<section class="sponsor">
<span class="header"><p>Care<sub>servers</sub><br><span style="color:red">Lets support!</span></p></span>
        <div class="cont1"><p>Support us!
            <div class="phrase">
                <div class="paragraph1">
                    
                <p>Gender based violence is an action made against ones will, which violates the right of human beings. Todays Victims of gender-based violence are banishes and starve out of their homes leaving them stranded in the street thus we will offer more opportunity for their safety and health in different provinces this can only happen with the help of You!</p>
                </div>
                <div class="paragraph2">
                <p>Donation money will help in maintaining the shelters providing food and clothes to the victims. There will always be statistics on how the money is used. 
                Your Donation can safe one’s life. The button below will guide you to the donation details <br>Thank You</p>
                </div>
         </div>
         <div class="letsee">
         <div class="donat">
             <h3>WELCOME TO DONATION</h3>
         </div>
         <div class="account">
         <div class="support">
             <p>PayPal: +27 659196922</p>
             <button onclick="window.open(&#39;https://www.paypal.com/za/home&#39;)"> Donation </button>
         </div>
         <div class="bank">
             <p>BANK DETALS</p>
             <p>FNB Name :UJ</p>
            <p>FNB Account :62615873199</p>
            <p>Branch Code: 210 554</p>
         </div>
         </div>
         </div>
</section>

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