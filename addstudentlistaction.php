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
    $branch = $_POST["branch"];      
    $year = $_POST["year"];   
     $adyr = $_POST["adyr"];  
    $rollno[1] = $_POST["rollno1"];  
    $rollno[2] = $_POST["rollno2"];  
    $rollno[3] = $_POST["rollno3"];  
    $rollno[4] = $_POST["rollno4"];  
    $rollno[5] = $_POST["rollno5"];  
    $rollno[6] = $_POST["rollno6"];      
    $rollno[7] = $_POST["rollno7"];  
    $rollno[8] = $_POST["rollno8"];  
    $rollno[9] = $_POST["rollno9"];  
    $rollno[10] = $_POST["rollno10"];  
    $rollno[11] = $_POST["rollno11"];  
    $rollno[12] = $_POST["rollno12"];  
    $rollno[13] = $_POST["rollno13"];  
    $rollno[14] = $_POST["rollno14"];  
     $rollno[15]= $_POST["rollno15"];   
    $rollno[16] = $_POST["rollno16"];  
    $rollno[17] = $_POST["rollno17"];  
    $rollno[18] = $_POST["rollno18"];  
    $rollno[19] = $_POST["rollno19"];  
    $rollno[20]= $_POST["rollno20"];  
    $rollno[21]= $_POST["rollno21"];  
    $rollno[22]= $_POST["rollno22"];  
    $rollno[23]= $_POST["rollno23"];  
    $rollno[24]= $_POST["rollno24"];  
    $rollno[25]= $_POST["rollno25"];  
    $rollno[26]= $_POST["rollno26"];  
    $rollno[27]= $_POST["rollno27"];  
    $rollno[28]= $_POST["rollno28"];  
    $rollno[29]= $_POST["rollno29"];  
    $rollno[30]= $_POST["rollno30"];  
    $rollno[31]= $_POST["rollno32"];  
    $rollno[32]= $_POST["rollno32"];  
  if($branch==="A&T")
  {
      $branch="ant";
  }
   if($branch==="CRM")
  {
      $branch="crm";
  }
   if($branch==="MLT(A)")
  {
      $branch="mlta";
  }
   if($branch==="MLT(B)")
  {
      $branch="mltb";
  }

 $servername="localhost";  
 $username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";

// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

for($i=1;$i<=32;$i++)
{
 $roll=$i;

  $insert="insert into";
  $insert=$insert.(" ");
  $insert=$insert.$branch;
  $insert=$insert.(" ");
  $temp=$rollno[$i];
  print "$temp";
  $insert=$insert.("(name,rollno,year,adyr) VALUES ('$temp','$roll','$year','$adyr')");
   $sql=$insert;
if ($conn->query($sql) === TRUE) 
    {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}
  header('Location:addstudentlist.php');
         exit();

$conn->close();
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        // put your code here
        ?>
    </body>
</html>
