<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
   $email = $_POST['femail'];       
           
 $servername = "localhost";
$username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";
 $conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
        
        
        
        
        
        
        
        
       
      
        $sql = "SELECT * FROM ant WHERE email='$email'";
$sqla = "SELECT * FROM crm WHERE email='$email'";
$sqlb ="SELECT *FROM mlta WHERE email='$email'";
$sqlc = "SELECT * FROM mltb WHERE email='$email'";
$sqld = "SELECT * FROM staff WHERE email='$email'";


$result = $conn->query($sql);
$resulta = $conn->query($sqla);
$resultb = $conn->query($sqlb);
$resultc = $conn->query($sqlc);
$resultd = $conn->query($sqld);
$pas="2";

if ($result) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        
             $ttt=$row["password"];
    }
 
}
if ($resulta) {
    // output data of each row
    if($row = $resulta->fetch_assoc()) {
        
             $ttt=$row["password"];
    }
 
}
if ($resultb) {
    // output data of each row
    if($row = $resultb->fetch_assoc()) {
        
             $ttt=$row["password"];
    }
 
}
if ($resultc) {
    // output data of each row
    if($row = $resultc->fetch_assoc()) {
        
             $ttt=$row["password"];
    }
 
}
if ($resultd) {
    // output data of each row
    if($row = $resultd->fetch_assoc()) {
        
             $ttt=$row["password"];
     $pass="3";
    }
 
}

        $to = $email;
$subject = "your password";
$txt = "your password=".$ttt;
echo ("your password has been send to your account please check");
$headers = "From: retrievepassword@gvhsscherpulassery.in " . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

if($pass==="3")
{

header('Location:temp.php');
         exit();
   }
else
{
   header('Location:temp2.php');
         exit();
}  
       
        
        ?>
    </body>
</html>
