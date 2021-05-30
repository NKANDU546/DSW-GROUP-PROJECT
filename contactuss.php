
<?php require_once("headerpage.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="try.css">
    
</head>
<body>
<style>
    <?php include "try.css" ?>
</style>
    
    <div class="fullscreen-bg" >
        <video loop muted autoplay poster="poster.png" class="video">
            <source src="video.webm" type="video/webm">
            <source src="video.mp4" type="video/mp4">
            <source src="video.ogv" type="video/ogg">
        </video>
    </div>
        <div class="conta">
            <h1>
                CONTACT US
            </h1>
        </div>
        
    <form class="form-contact" method="post" action="nousC.php">
        <label for="fname"></label><br>
        <input type="text" placeholder="Name" class="name" name="name" ><br>

        <label for="fname"></label><br>
        <input type="text" placeholder="Email" class="name" name="email" ><br>

        <label for="messege"></label><br>
        <input type="text" id="subject" class="subject" placeholder="Subject" name="subject" ><br>

        <label for="messege"></label><br>
        <textarea class="messege" name="msg" rows="4" cols="50" placeholder="Messege"></textarea><br>
        <input type="submit" value="Submit" class="submit">
    </form> 
</body>
</html>

