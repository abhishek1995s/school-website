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
         $eid = $_POST["eid"]; 
       $username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";
$servername="localhost";
// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $sql="INSERT INTO staff (eid)
VALUES ('$eid')";
if ($conn->query($sql) === TRUE) 
    {
    echo "New record created successfully";
     header('Location:addstaff.php');
         exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   
        
         
        ?>
    </body>
</html>
