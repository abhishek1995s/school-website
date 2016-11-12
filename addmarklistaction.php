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
         $subject = $_POST["subject"];    
         $exam = $_POST["exam"];    
    $year = $_POST["year"];   
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
 if($subject==="ENGLISH")
          {
              $subdata="english";
              
          }
          
                                  
 
          else   if($subject==="AT(PRATICAL)")
          {
              $subdata="atp";
              
          }else if($subject==="AT(THEORY)")
          {
              $subdata="accountancy";
              
          }else if($subject==="BIOLOGY")
          {
              $subdata="biology";
              
          }else if($subject==="BIOLOGY(PRATICAL)")
          {
              $subdata="bp";
              
          }else if($subject==="CRM(PRATICAL)")
          {
              $subdata="crmp";
              
          }else if($subject==="C ACCOUNTANCY")
          {
              $subdata="accountancy";
              
          }else if($subject==="CHEMISTRY")
          {
             $subdata="chemistry";
              
          }else if($subject==="CHEMISTRY(PRATICAL)")
          {
              $subdata="cp";
              
          }else if($subject==="CRM(THEORY)")
          {
              $subdata="crmt";
              
          }else if($subject==="CRM(PRATICAL)")
          {
              $subdata="crmp";
              
          }else if($subject==="ED")
          {
              $subdata="ed";
              
          }else if($subject==="MANAGEMENT")
          {
              $subdata="management";
              
          }
          else if($subject==="BUSINESS STUDIES")
          {
              $subdata="BS";
              
          }
          
          
          else if($subject==="MLT(PRATICAL)")
          {
              $subdata="mltp";
              
          }
          else if($subject==="MLT(THEORY)")
          {
              $subdata="mlt";
              
          }
          else if($subject==="PHYSICS")
          {
              $subdata="physics";
              
          }
          else if($subject==="PHYSICS(PRATICAL)")
          {
              $subdata="pp";
              
          }
             else
          {
              $subdata="dsf";
          }
                          
               if($exam==="quaterly(1)")
               {
                   $r="1";
                   
               }
               else if($exam==="quaterly(2)")
               {
                   $r="4";
                   
               }
               else if($exam==="halfyearly(1)")
               {
                   $r="2";
                   
               }
               else if($exam==="halfyearly(2)")
               {
                   $r="5";
                   
               }
               else if($exam==="model(1)")
               {
                   $r="3";
                   
               }
               else if($exam==="model(2)")
               {
                   $r="6";
                   
               }
               else
               {
                   $r="ee";
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
        $rolln=$i;
        $mark=$rollno[$i]; 
        
        $temp=" '$mark' WHERE year ='$year'  AND rollno = '$rolln'"; 
            $w="update".(" ").$branch.(" ")."set".(" ").$subdata.$r.(" ").("=").(" ").$temp ; 
      
        $sql=$w;
        
        if ($conn->query($sql) === TRUE) 
    {
           
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
     }}
       header('Location:addmarklist.php');
         exit();

$conn->close();
      
      
        
      
     


        // put your code here
        ?>
    </body>
</html>
