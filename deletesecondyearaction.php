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
 $adyr = $_POST["adyr"]; 
// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM ant WHERE adyr='$adyr'";
$sqla = "DELETE FROM crm WHERE adyr='$adyr'";
$sqlb ="DELETE FROM mlta WHERE adyr='$adyr'";
$sqlc = "DELETE FROM mltb WHERE adyr='$adyr'";
$yr="2";
$result = $conn->query($sql);
$resulta = $conn->query($sqla);
$resultb = $conn->query($sqlb);
$resultc = $conn->query($sqlc);
$sqld="UPDATE ant SET year='$yr'";
$sqle="UPDATE crm SET year='$yr'";
$sqlf="UPDATE mlta SET year='$yr'";
$sqlg="UPDATE mltb SET year='$yr'";
$resultd = $conn->query($sqld);
$resulte = $conn->query($sqle);
$resultf = $conn->query($sqlf);
$resultg = $conn->query($sqlg);

if(($result ===  TRUE)&&($resulta=== TRUE)&&($resultb ===  TRUE)&&($resultc ===  TRUE)&&($resultd ===  TRUE)&&($resulte ===  TRUE)&&($resultf===  TRUE)&&($resultg ===  TRUE))
{
    header('Location:secureuser.php');
         exit();
}
$conn->close();


        // put your code here
        ?>
    </body>
</html>
