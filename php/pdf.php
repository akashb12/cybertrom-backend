<?php
error_reporting(0);
include "../vendor/mpdf/mpdf.php";
include "../html/head.php";
include "../db/db.php";
$id=$_GET['id'];

$sql1="SELECT * FROM `profile` where id=$id";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);
echo $row;
$mpdf= new mPDF('c');
$mpdf->AddPage('L');
$html= '<!DOCTYPE html>  
<html>  
     <head>  
          
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   
           
     </head>  
     <body>  
          <br />
          <div class="container">  
               <h4 align="center"> USERS</h4><br />  
  
         
	<div class="row">
		
        
        <div class="searchable-container">
          
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                   
                    <div class="square-box pull-left"><img src="../image/'.$row['image'].'"></div>
                    <h4>firstname:'.$row["firstName"].'</h4>
                    <h4>lastname:'.$row['lastName'].'</h5>
                    <h4>age:'.$row['age'].'</h4>
                    <p>description:'.$row['description'].'</p>
                    <h4>profile created at:'.$row['date'].'</h4>
                   
                </div>
            </div>
            
            
        </div>
	</div>
</div>
     </body>  
</html>';
$stylesheet=file_get_contents('../css/style.css');
$mpdf->WriteHTML($stylesheet,1);
;$mpdf->WriteHTML($html,2);
$mpdf ->Output(rand(1111,9999).'web.pdf','D');
exit;

?>