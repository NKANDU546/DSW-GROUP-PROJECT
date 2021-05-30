<!-- APPLICATION TABLE AFTER CHECKING-->

<?php require_once('headerpage.php');

if(isset($_GET['check'])){
    $dbServername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName=  "caresavers";
        $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
        $app=$_GET['surname'];
        $idN=$_GET['idN'];
    
    #CHECK IF THE SURNAME AND ID NUMBER ARE NOT EMPTY
    if($app && $idN){

        $q = "SELECT * FROM monde WHERE Surname='$app' AND IDnumber='$idN'";
        $sqldata = mysqli_query($conn, $q) or die("error getting");
        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
            
        if($app==$row['Surname']&& $idN==$row['IDnumber']){
            echo "Application Table!";
            break;
        }
        else{
            echo "Incorrect Surname or ID number";
        }
            
        
    
    }   
    
}
else{
    echo "Fields are empty!";    
   
}
}  
?>


<!-- RESULT FOR THE APPLICATION FORM-->
<table class="result">
        <tr>
            <th>Application</th>
                <th>User ID</th>
                
                <th>ID Number</th>
                <th>Surname</th>

                <th>Status</th>
                <th>Date</th>
            </tr>
            <tr>
               <td>2021</td>
               <td><?php
               $dbServername = "localhost";
               $dbUserName = "root";
               $dbPassword = "";
               $dbName=  "caresavers";
               $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
               
               $app=$_GET['surname'];
               $idN=$_GET['idN'];
               $q = "SELECT * FROM monde WHERE Surname='$app'AND IDnumber='$idN'";
               $sqldata = mysqli_query($conn, $q) or die("error getting");
               while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                if(!empty($app) && !empty($idN)){
                    if($app==$row['Surname'] && $idN == $row['IDnumber']){
                        echo $row['ID'];
                    }
                    else {
                       echo"....";
                       break;
                    }
                }
                else{
                    echo "...";
                    break;
                }  
            }
              ?></td>


               <td><?php
               $dbServername = "localhost";
               $dbUserName = "root";
               $dbPassword = "";
               $dbName=  "caresavers";
               $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
               
               $app=$_GET['surname'];
               $idN=$_GET['idN'];
               $q = "SELECT * FROM monde WHERE Surname='$app'AND IDnumber='$idN'";
               $sqldata = mysqli_query($conn, $q) or die("error getting");
               while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                if(!empty($app) && !empty($idN)){
                    if($app == $row['Surname'] && $idN == $row['IDnumber']){
                        echo $row['IDnumber'];
                    }
                    else {
                       echo"...";
                    }
                }
                else{
                    echo "...";
                    break;
                }  
            }
               
            ?></td>
               <td><?php 
             
             $dbServername = "localhost";
             $dbUserName = "root";
             $dbPassword = "";
             $dbName=  "caresavers";
             $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
             
             $app=$_GET['surname'];
             $idN=$_GET['idN'];
             $q = "SELECT * FROM monde WHERE Surname='$app'AND IDnumber='$idN'";
             $sqldata = mysqli_query($conn, $q) or die("error getting");
             while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
              if(!empty($app) && !empty($idN)){
                  if($app == $row['Surname'] && $idN == $row['IDnumber']){
                      echo $row['Surname'];
                      echo "helll";
                  }
                  else {
                     echo'inco';
                  }
              }
            }
                
              ?>
               
               
               
               
               
               </td>
               <td><?php
               $dbServername = "localhost";
               $dbUserName = "root";
               $dbPassword = "";
               $dbName=  "caresavers";
               $conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
               
               $app=$_GET['surname'];
               $idN=$_GET['idN'];
               $sqldata = mysqli_query($conn, $q) or die("error getting");
               while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                $q = "SELECT * FROM monde WHere Surname='$app'";
                
                   if(empty($row['status'])){
                       echo "pending";
                      
                       break;
                   }
                   else{
                       echo $row['status'];
                       break;
                   }
               }
               ?>
               </td>
               <td><?php echo date("d-m-Y"."<br/>");
              
               
              ?>
               
               </td>
            </tr>
    </table>


             