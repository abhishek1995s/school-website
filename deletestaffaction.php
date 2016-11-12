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

   $sql=" DELETE FROM staff WHERE eid='$eid'";
if ($conn->query($sql) === TRUE) 
    {
    echo "New record created successfully";
     header('Location:deletestaff.php');
         exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   
        // put your code here
        ?>
    </body>
</html>
