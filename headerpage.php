
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
<style>
    <?php include "careSavers.css" ?>
</style>
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

</body>
</html>