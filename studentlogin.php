<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
         <title> Gvhss Cherpulassery</title>
    </head>
    <body>
        
        
        <?php
        $servername = "localhost";
$username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";
 $email = $_POST["email"];  
 $password = $_POST["password"]; 
// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ant WHERE email='$email' AND password='$password'";
$sqla = "SELECT * FROM crm WHERE email='$email' AND password='$password'";
$sqlb = "SELECT * FROM mlta WHERE email='$email' AND password='$password'";
$sqlc = "SELECT * FROM mltb WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
$resulta = $conn->query($sqla);
$resultb = $conn->query($sqlb);
$resultc = $conn->query($sqlc);


if ($result) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        $_SESSION["sbranch"] ="ant";
        $_SESSION["semail"] =$email;
        $_SESSION["spassword"] =$password;
        
         header('Location:studentloginactionant.php');
         exit();
    }
 
}

 

if ($resulta) {
    // output data of each row
    if($row = $resulta->fetch_assoc()) {
        $_SESSION["sbranch"] ="crm";
        $_SESSION["semail"] =$email;
        $_SESSION["spassword"] =$password;
        
         header('Location:studentloginactioncrm.php');
         exit();
    }
 
}
if ($resultb) {
    // output data of each row
    if($row = $resultb->fetch_assoc()) {
        $_SESSION["sbranch"] ="mlta";
        $_SESSION["semail"] =$email;
        $_SESSION["spassword"] =$password;
        
         header('Location:studentloginactionmlta.php');
         exit();
    }
 
}
if ($resultc) {
    // output data of each row
    if($row = $resultc->fetch_assoc()) {
        $_SESSION["sbranch"] ="mltb";
        $_SESSION["semail"] =$email;
        $_SESSION["spassword"] =$password;
        
         header('Location:studentloginactionmltb.php');
         exit();
    }
 
}
if(($result !== TRUE)||($resulta !== TRUE)||($resultb !== TRUE)||($resultc !== TRUE)) {
    echo "fdghresfdhgdfgfhults";
    header('Location:temp2.php');
         exit();
}
$conn->close();
        // put your code here
        ?>
    </body>
</html>
