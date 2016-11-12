<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
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
 if(($email==="subash@gmail.com")&&($password==="chandrabose"))
{ 
     $_SESSION["staff"]="qqqq";
     header('Location:secureuser.php');
         exit();
    
}
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM staff WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);


if ($result) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        $_SESSION["staffs"]="rrrr";
        
         header('Location:staffloginaction.php');
         exit();
    }
 
}
if($result !== TRUE) {
    echo "fdghresfdhgdfgfhults";
    header('Location:temp.php');
         exit();
}
$conn->close();
?>
        
        
        
        
        
        
        
    </body>
</html>
