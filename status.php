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



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="careSavers.ccs">
</head>
<body>
<section class="comment">
    <div class="temoignage">
        <div class="commentaire">
            <form action="check-status.php" method="GET">
            <input type="text" name="surname" id="name"
                placeholder="ID Application "><br><br><br>
               <input type="text" name="idN" id="name"
                placeholder="ID Number"><br>
                
                
                <br>
                <input type="submit" name="check" value="Check Status" id="status">
                
            </form>
           
           
        </div>
        </div>
    </section>
    <section class="formulaire">
        <div class="form">
            <h3>Application Form</h3>
            <form action="update.php" method="GET">
            <p>Surname: </p>
                <input type="text" name="surname">
                <p>Name :</p>
                <input type="text" name="Name" id="Name">
                <p>Age :</p>
                <input type="text" name="age" id="age">
                <p>ID Number:</p>
                <input type="text" name="idnumber" id="idnumber">
                <p>Town:</p>
                <input type="text" name="town" id="town">
                <p>Email-Address : </p>
                <input type="email" name="email" id="email">
                <p> Phone Number :</p>
                <input type="text" name="phone" id="phone">
                <p>Gender</p>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <div class="post">
                <input type="submit" name="name" id="submit"value="Submit"><br>
               
                </div>
            </form>
        </div>
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
                <i class="fas fa-envelope">CareSavers5@gmail.com</i>
                <p>Give A Feedback</p>
                <div class="donn">
                    
              <i id="donn" class="fas fa-comment-alt" onclick="fee()"></i>
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
        
        
            <script>
                function fee(){
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



