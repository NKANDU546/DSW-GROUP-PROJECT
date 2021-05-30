<?php require_once('headerpage.php');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];


$conn =new mysqli('localhost','root','','contactus');
if($conn==TRUE){
   
}


if(empty($name)){
    echo "please fill up black spaces";

}
else if (empty($email)){
    echo "please fill up black spaces";

}
else if(empty($subject)){
    echo "please fill up black spaces";

}
else if(empty($msg)){
    echo "please fill up black spaces";

}

else{
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $details=$conn->prepare("insert into users(Name,Email,Subject,Message)
        values(?,?,?,?)");
        $details->bind_param("ssss",$name,$email,$subject,$msg);
        $details->execute();
        echo  "Thank You For Contacting Us, We Will be back to you Shortly!";
        
            
        }

        if($details=TRUE){
            
        }
    }
?>