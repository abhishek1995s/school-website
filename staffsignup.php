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
        
       $fname = $_POST["fname"]; 
       $lname = $_POST["lname"]; 
        $eid = $_POST["eid"]; 
         $mobileno = $_POST["mobileno"]; 
         $email = $_POST["email"];  
          $password = $_POST["password"]; 
          $cpassword = $_POST["cpassword"]; 
          $servername = "localhost";
          
          if($password !==$cpassword)
          {
              
             header('Location:staff.php');
             exit();
          }
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

   $sql= "UPDATE staff set fname='$fname',lname='$lname',mobileno='$mobileno',email='$email',password='$password' WHERE eid ='$eid'";
if ($conn->query($sql) === TRUE) 
    {
    echo "New record created successfully";
     
             header('Location:temp.php');
             exit();
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   
        
        
?>
     
    </body>
</html>
