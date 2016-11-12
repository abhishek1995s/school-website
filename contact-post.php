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
        
       $name = $_POST["name"]; 
       
         $mobileno = $_POST["mobileno"]; 
         $email = $_POST["email"];  
          $usermsg= $_POST["usermsg"]; 
         
          $servername = "localhost";
$username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";

// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $sql="INSERT INTO contact (name,mobileno,email,usermsg)
VALUES ('$name','$mobileno','$email','$usermsg')";
if ($conn->query($sql) === TRUE) 
    {
   header('Location:contact.php');
         exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
        // put your code here
        ?>
    </body>
</html>
