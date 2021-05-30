
<?php
#the php code to store feedback information##############
if(isset($_GET['send'])){
    $email = $_GET['email'];
   $feedback = $_GET['feedback'];

    if(!empty($email) && !empty($feedback)){
        $dbServername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName=  "caresavers";
        $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
        $query = "INSERT INTO feedback(Email, Feedback)
            values('$email', '$feedback')";
            $run = mysqli_query($conn, $query);
            if($run==TRUE){
                echo "Thank You For Your Feedback!";
            }
            else{
                echo "Oups! something went wrong";
            }       
    }
    else{
        echo "Fields are empty";
    }
}
?>

<!--HTML AND JAVSCRIPT CODE FOR THE MAIN PAGE -->
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
<!-- print css file so that it can be readible in php -->
<style>
  <?php include "careSavers.css" ?>
</style>

<!-- Javascript code to open and close the mobile menu -->
<script type="text/javascript">
    function ouvrir(){
    document.getElementById("phone").style.marginLeft="100%";
     document.getElementById("mobile").style.width="100%";
     document.getElementById("phone");
    }
  
   function fermer(){
    document.getElementById("mobile").style.width="0px";
    document.getElementById("phone").style.marginLeft="0px";
    document.getElementById("phone");
   }
   </script>

<!-- Home page code-->
<body>

<!-- header page, logo, navigation menu, mobile menu and donation -->
<header>
        <div class="bar">
            <span class="header"><h2>Care<sub>servers</sub><br></span></h2></span>
            <nav>
            <ul>
                <div class="nav1">
                    <a href="donate.php" title="Donate Now" class="donate"><strong>Donation</strong></a>
                </div>
                <div id="phone" class="open" onclick="ouvrir()"><i class="fas fa-bars"></i></div>
                <div id="mobile" class="barre">
                <a class="active" href="careSaverss.php">Home</a>
                  
                  <a href="Aboutus.php">About</a>
                  <a href="contactuss.php">Contact</a>
                  <a href="status.php">Status</a>
               <a href="#" class="close" onclick="fermer()"><i class="fas fa-times"></i></a>
             </div>
            </ul>
        </nav>
        </div> 
    </header> 
    </section>

    <!-- Get assistance part, the button and social media -->
    <section id="#section1">
        <div class="section-top">
           
            <h1>Get Assistance</h1>
            <div class="click">
                <a href="#section2" Get Assistance" class="button"><strong><i class="fas fa-angle-double-down"></i></strong></a>
                <div class="footer-menu">
            <ul id="media">
                <a href="https://twitter.com/NkanduAkim" target="blank"><li><i class="fab fa-twitter-square"></i></li></a>
                <a href="https://www.facebook.com/profile.php?id=100009176320053" target="blank"><li><i class="fab fa-facebook"></i></li></a>
                <a href="#" target="blank"><li><i class="fab fa-instagram" ></i></li></a>
            </ul>
        </div>
                </div>
                <div class="social">
                
                </div>
            </div>
        </div>
    </section>

    <!-- How we assiste -->
    <section id="section2">
        <div class="helping">
            <h1 id="h">How We Assist</h1>
            <p class="assist">As we all know South Africa as well as the entire world has been dealing with very high rates of GBV, this organization helps victims find refuge and safety during such instances. We provide shelter to those who seek shelter, food packages for those in need. Medical and lawful assistance. We also have emergency contact numbers during the cases of emergencies. We work closely with Namola and the SAPS to help protect GBV victims.</p>
        </div>
    </section>
    <section class="service">
        <div class="amb">
            <h1>Emergency Contacts</h1>                         
            <img src="violence80.jpg" alt="">
            <div class="emergency">
                <p>SAPS : 10111</p>
                <p>GBV Line : 080 042 8428</p>
                <p>Please call : *120* 7867#</p>
                <p>Crime stop :  086 00 10111.</p>
                <a href="contactuss.php"><button>Contact US</button></a>
            </div>
        </div>
        <div class="justice">
            <h1>Lawful Assistance</h1>
            <img src="violence55.jpg" alt="">
            <div class="law"> 
                <p>Lawful assistance is for the user to apply for legal action incase they need it. </p>
               <a href="applicationforme.php"><button>Apply Today</button></a>
            </div>
        </div>
        <div class="chelt">
            <h1>Shelter Assistance</h1>
            <img src="violence56.jpg" alt="">
            <div class="food">
                <p>Food packages provided in any of our shelters in all 9 Provinces.

                    Where to find shelter
                    </p>
                <a href="shelter.php"><button>Show More</button></a>
            </div>
        </div>
    </section>
    <!-- Who We are -->
    <div class="area">
        <h1>Who We Are</h1>
    </div>
    <section class="nous">
        <div class="violence36">
        </div>
        <div class="concernant">
            <h1>About Us</h1>
            <p>name of organization) is anon-benefit association which helps casualties of GBV.</p>
            <p>We have confidence in the soul of Ubuntu and aiding our kindred siblings</p>
            <p>and sisters as we accept nobody has the right to be mishandled in any structure or Our association was set up in 2018 and it is driven by the high GBV rates in the country. Our primary duty is to help reduce the high levels of GBV and give wellbeing to those out of luck. We have built up a public activity plan that will guarantee a more grounded, communitarian and more engaged reaction to brutality against women and children.</p>
            
            <a href="Aboutus.php"><button>More Infos</button></a>
        </div>
    </section>

    <!-- Statistics -->
    <section class="purpose">
        <h1>Latest Gender Based-Violence <br> Statistics in South Africa.</h1>
        <i class="fas fa-exclamation-circle"></i>
        
        <div class="sentence-ramaphosa">
            
        </div>
        <div class="statistic">
            <div class="speech">
               
                <p>Gender-based violence is a persistent issue in South Africa that results in the deaths of thousands of women every year. Below is the speech by President Cyril Ramaphosa on the Gender Based Statistics in South Africa</p>
            
                <p class="fellow">
                    My Fellow South Africans,
                    Our nation is in mourning and pain. Over the past few days, our country has been deeply traumatised by acts of extreme violence perpetrated by men against women and children. These acts of violence have made us doubt the very foundation of our democratic society, our commitment to human rights and human dignity, to equality, to peace and to justice. As we have done before in times of great difficulty and strife, this is the time to come together as a nation to confront our problems directly.
                    The nation is mourning the deaths of several women and girls who were murdered by men. We know the names of Uyinene Mrwetyana, Leighandre Jegels, Janika Mallo, Ayakha Jiyane and her three little siblings, but we also grieve for many others who have died at the hands of men. These killings have caused great pain and outrage because acts of such brutality have become all too common in our communities. Violence against women has become more than a national crisis. It is a crime against our common humanity...
                </p>
                <h2>President Ramaphosa</h2>
            </div>
            <div class="video">
                
            </div>
        </div>
    </section>

    <!-- News -->
    <section class="brutal">
        <div>
            <p>South Africa maintained its spot as the rape capital in the world, with about 132 incidents per 100,000 people.</p>
        </div>
        <div>
            <h3>BRUTAL MURDERS</h3>
            <p><span class="pule">Tshegofatso Pule, Naledi Phangindawo, Alexia Nyamadzawo,</span>Nolundi Dondolo and many others were victims of gender-based violence and were brutally killed at the hands of abusers in 2020. <br>
            The murder of an 8-month pregnant Pule shocked the world after her body was found lynched to a tree in Florida. <br>
            Her funeral service was heart wrenching and her family distraught.</p>
            <p><em>WATCH: Tshegofatso Pule laid to rest</em></p>
            <p>SOURCE: <a href="ewn.co.za">ewn.co.za</a> </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lCYJhi6k1WM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Frequently Asked Question -->
    <section class="gender-based-violence">
        <div class="asked">
            <h1>Frequently Asked Questions</h1>
        <div class="question-mark">
            <i class="far fa-question-circle"></i>
            <div class="faq">
               
                <div class="background">
                    <div class="questions">
                       <details class="details">
                          <summary>What is Gender Based-violence?</summary>
                          <p class="text">Gender-based violence is violence directed against a person because of their gender it is a grave human rights violation that can cause long-term and life-threatening injury and trauma to victims/survivors.</p>
                       </details>
                       <details class="details">
                          <summary>Why Do We talk About GBV?</summary>
                          <p class="text">In places where conflict and violence are common, it is important to promote education on gender-based violence to reduce the stigma of victimization within the community, to take collective action against harmful gender and social norms, and to empower youth to recognize, address and prevent acts of gender-based violence.</p>
                       </details>
                       <details class="details">
                        <summary>What Can Be An Example of GBV?</summary>
                          <p class="text">GBV can be physical, sexual, emotional, financial or structural, and can be perpetrated by intimate partners, acquaintances, strangers and institutions. Most acts of interpersonal gender-based violence are committed by men against women, and the man perpetrating the violence is often known by the woman, such as a partner or family member.

                            <br> Examples include:
                            <ul>
                                <li>Child Marriage</li>
                                <li>Female genital mutilation</li>
                                <li>Honour Killings</li>
                                <li>Trafficking for sex or slavery</li>
                                <li>Physical Punishment</li>
                                <li>Sexual, emotional or physical violence</li>
                            </ul>
                           </p>
                       </details>
                    </div>
                 </div>
                 
            </div>
        </div>
    </section>

    <!--Feedback Page -->
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
    
        <!-- footer Page -->
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
    
        

    <!-- Javasript code to hide and show the feedback Page -->
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
<!--End!!!!!!!!!-->
