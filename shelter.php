<?php require_once('headerpage.php');

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
    
}

    
    $count = 1234;
    $fail = "Please Fill up the Entire Application form!";
    $succes = "Successful Application!<br/>";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHELTER</title>
    <link rel="stylesheet" href="careSavers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<style>
  <?php include "careSavers.css" ?>
</style>
<body>
<section class="helpline">
<h1>HELPLINES</h1>
    <table>
    
        <tr  class="province">
          <th>Province</th>
          <th>Contact</th>
          <th>Number</th>
        </tr>
        <tr>
          <td class="distric">Gauteng</td>
          <td>POLOKEGO Shelter for abused women and children</td>
          <td>  011 665 1725</td>
        </tr>
        <tr>
          <td>Limpopo</td>
          <td>Ekuphumleni Restoration Home(Thy Rest)</td>
          <td>+27 73 174 9185</td>
        </tr>
        <tr>
          <td>Eastern Cape</td>
          <td>Bet Sheekoom (House of Restoration for Women in Crisis)</td>
          <td> +27 84 570 1185</td>
        </tr>
        <tr>
          <td>Free State</td>
          <td>Bloem Shelter</td>
          <td>+27 82 463 5916</td>
        </tr>
        <tr>
          <td>KwaZulu-Natal</td>
          <td>The Open Door Crisis Center</td>
          <td> +27 31 709 2679</td>
        </tr>
        <tr>
          <td>North West</td>
          <td>The White Door centre</td>
          <td> 0800 428 428 </td>
        </tr>
        <tr>
            <td>Western Cape</td>
            <td>St Anne's Homes</td>
            <td>+27 21 448 6792 / +27 21 488 8513</td>
          </tr>
          <tr>
            <td>Mpumalanga</td>
            <td>Standerton victim empowerment shelter&Advice office</td>
            <td> 083 697 6705</td>
          </tr>
          <tr>
            <td>Northern Cape</td>
            <td> Saartjie Baartman Centre for Women and Children</td>
            <td>021 633 5287</td>
          </tr>
      </table>
</section>
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
                <i class="fas fa-envelope">Gbviolence.gmail.com</i>
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
            <i class="far fa-copyright">2021 by Akim| Proudly Created with Html, Php, Css & Javascript.</i>
            
            </div>
        </div>
        
        
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
