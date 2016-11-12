<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
 $message = $_POST["message"];  
 $dest="2";
// Create connection
 
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO message (message,dest) VALUES ('$message','$dest')" ;
$result = $conn->query($sql);


if ($result) {
    // output data of each row
   
        
         header('Location:addstudentmessage.php');
         exit();
    
 
}
if($result !== TRUE) {
   
    header('Location:staff.php');
         exit();
}
$conn->close();
        ?>
    </body>
</html>
