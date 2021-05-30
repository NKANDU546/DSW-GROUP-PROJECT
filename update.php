 <!-- APPLICATION RESULT, CHECK IF THE USER HAS ALREADY APPLIED,
DELETE, UPDATE AND CHECK STATUS -->
 
 <!-- show result -->
 <?php require_once("headerpage.php");
    $surname = $_GET['surname'];
    $name = $_GET['Name'];
    $age = $_GET['age'];
    $idnumber = $_GET['idnumber'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
    $phone = $_GET['phone'];

 #CHECK IF THE BUTTON IS CLICKED
if(isset($_GET['name'])){
    $surname = $_GET['surname'];
    $name = $_GET['Name'];
    $age = $_GET['age'];
    $idnumber = $_GET['idnumber'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
    $phone = $_GET['phone'];
   
    #CONNECT TO THE DATABASE
    $dbServername = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName=  "caresavers";
    $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
    $count = 1234;
    $fail = "Please Fill up the Entire Application form!";
    $succes = "Successful Application!<br/>";
    
    #CHECK IF FIELS ARE NOT EMPTY
    if(!empty($surname) && !empty($name) && !empty($age) && !empty($email) && !empty($phone)
    && !empty($gender)){

        #CHECK IF THE USER HAS ALREADY APPLIED USING HIS ID NUMBER
        $q = "SELECT * FROM monde WHERE IDnumber='$idnumber'";
        $sqldata = mysqli_query($conn, $q) or die("error getting");

        $rs = mysqli_query($conn,$q);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
        if($data > '1') {
            echo "ID number Already Applied!<br/>";
        }
        else {
            #IF NOT, AND THEN INPUT DATA INTO THE DATABASE
            $query = "INSERT INTO monde(Surname, Name, Age, Idnumber, Email, Phone, Gender )
            values('$surname', '$name', '$age', '$idnumber', '$email', '$phone', '$gender')";
            $run = mysqli_query($conn, $query);
            if($run==TRUE){
                
                echo $succes;
                $q = "SELECT * FROM monde WHERE Idnumber='$idnumber'";
                $sqldata = mysqli_query($conn, $q) or die("error getting");
                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                
                #PRINT THE ID APPLICATION
                echo "ID Application :", $row['ID'];}
        
            }
        }
        
           

            
        
    
    } else {
        echo $fail;
     
         
     } 
}

#CHECK IF TH DELETE BUTTON IS CLICKED.
if(isset($_GET['Delete'])){
    $surname = $_GET['surname'];
    $name = $_GET['Name'];
    $age = $_GET['age'];
    $idnumber = $_GET['idnumber'];
    $email = $_GET['email'];
    $gender=$_GET['gender'];
   
    
    #CONNECT TO THE DATABASE
    $dbServername = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName=  "caresavers";
    $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
    

    #INSERT DATA INTO THE DATABASE
    $query = "INSERT INTO monde(Surname, Name, Age, IDnumber, Email, Phone, Gender )
            values('$surname', '$name', '$age', '$idnumber', '$email', '$phone', '$gender')";
            $run = mysqli_query($conn, $query);

    #DELETE DATA USING THE ID NUMBER OF THE USER
    if(!empty($surname) && !empty($name) && !empty($age) && !empty($email) && !empty($phone) 
    && !empty($gender)){
        $query = "DELETE FROM monde WHERE Idnumber='$idnumber'";
        $result = mysqli_query($conn, $query);
        if($result){
       echo "Deleted";
    }
    else{
        echo "no deleted";
    }
}
    
}

#CHECK IF UPDATE BUTTON IS CLICKED
if(isset($_GET['update'])){

    $surname = $_GET['surname'];
    $name = $_GET['Name'];
    $age = $_GET['age'];
    $idnumber = $_GET['idnumber'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
   
    $phone = $_GET['phone'];

    #INSERT DATA INTO THE DATABASE
    $dbServername = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName=  "caresavers";
    $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);

    #UPDATE DATA INTO THE DATABASE
    if(!empty($surname) && !empty($name) && !empty($age) && !empty($email) && !empty($phone) 
     && !empty($gender)){
        $update = "UPDATE monde SET Surname='$surname', Name='$name', Age='$age', Idnumber='$idnumber', 
        Email='$email', Gender='$gender', Phone='$phone' WHERE Idnumber='$idnumber'";
        if($conn->query($update)===TRUE){
        echo "updated!";

    }

    }
    else{
        echo "Fill up the entire update form";
    
    }
    
}
#END!!!!!!!!!!!!!!!!!####################################
?>

 <!--UPDATE AND DELETE FORM  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="careSavers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script> 
</head>
<body>

 <!-- INCLUDE CSS-->
<style>
    <?php include "careSavers.css" ?>
</style>

 <!-- CREATE BUTTON TO SHOW AND HIDE RESULT -->
    <section class="view">
    <h2>Result</h2>
    <div class="button-display">
        <button id="update-button" type="submit" onclick="update()">Update & <br> Delete</button>
        <button id="display-button" type="submit" onclick="view()">Hide/Show Result</button>  
    </div>
    </section>

 <!-- JAVASCRIPT CODE TO HIDE AND SHOW THE RESULT AND TO HIDE AND 
SHOW THE UPDATE AND DELETE FORM -->
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
   function view(){
       var x = document.getElementById("tableau");
       if(x.style.display=="flex"){
           x.style.display="";
       }
       else{
           x.style.display="flex";
       }

   }

   function update(){
       var x = document.getElementById("form");
       if(x.style.display=="flex"){
           x.style.display="";
       }
       else{
           x.style.display="flex";
       }

   }

   function deleted(){
       var x = document.getElementById("delete");
       if(x.style.display=="none"){
           x.style.display="";
       }
       else{
           x.style.display="none";
       }

   }

   function deleted(){
       var x = document.getElementById("delete");
       if(x.style.display=="none"){
           x.style.display="";
       }
       else{
           x.style.display="none";
       }

   }
   </script>

 <!-- TABLE RESULT -->
    <table id="tableau">
        <tr>
        
            <th>Surname</th>
                <th>Name</th>
                <th>Age</th>
                <th>ID Number</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
            </tr>
            <tr>
            
               <td><?php 
                
                echo $surname;?></td>
               <td><?php echo $name; ?></td>
               <td><?php echo $age; ?></td>
               <td><?php echo $idnumber; ?></td>
               <td><?php 

                echo $email;
            
                ?></td>
               <td><?php echo $phone; ?></td>
               <td><?php echo $gender;?></td>
            </tr>
    </table>

 <!--UPATE AND DELETE FORM-->
    <div id="update">
    <div class="delnete-update">
    <section class="mise-a-jour">
        <div class="form" id="form">
        <form class="format" action="update.php" method="GET">
                <h3>Update  & Delete <br> Application!</h3>
                <p>Surname: </p>
                <input type="text" name="surname" value="<?php
                echo $surname;
                ?>">
                <p>Name :</p>
                <input type="text" name="Name" id="Name"
                value="<?php
                echo $name;
                ?>">
                <p>Age :</p>
                <input type="text" name="age" id="age" value="<?php
                echo $age;
                ?>">
                <p>ID Number:</p>
                <input type="text" name="idnumber" id="idnumber"value="<?php
                echo $idnumber;
                ?>">
                <p>Email-Address : </p>
                <input type="email" name="email" id="email"value="<?php
                echo $email;
                ?>">
                <p> Phone Number :</p>
                <input type="text" name="phone" id="phone"value="<?php
                echo $phone;
                ?>">
                <p>Gender</p>
                <select name="gender" id="gender">
                    <option name="male" value="male">Male</option>
                    <option female="female" value="female">Female</option>
                </select><br><br>
               <div class="button-update-delete">
               <input type="submit" name="Delete" value="Delete" id="delete"onclick="submit()"><br>
                <input type="submit" name="update" value="Update" id="delete">
               </div>
            </form>
        </div>
    </section>
    </div>

 <!-- CHECK APPLICATION FORM -->
    <section class="view">
   <div class="app">
   <h2>check Application</h2>
   </div>
    
    </section>
    <section class="comment">
    <div class="temoignage">
        <div class="commentaire">
            <form action="check-status.php" method="GET">
            <input type="text" name="surname" id="name"
                placeholder="Surname"><br><br><br>
               <input type="text" name="idN" id="name"
                placeholder="ID Number"><br>
                <br>
                <input type="submit" name="check" value="Check Status" id="status">
            </form>
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
</html>
</body>
</html>
 <!--END!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
