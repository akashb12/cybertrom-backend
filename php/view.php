<?php
include "../html/head.php";
session_start();

if(isset($_SESSION['User']))
{
  
  echo "welcome<br>" . $_SESSION['User'];
    echo '<a href="view.php?logout"><button class="btn btn-danger">Logout</button></a>';
}
else
{
  echo "<script>window.open('login.php?Invalid= Please Login First To View And Download User','_self')</script>";
}


?>
<?php 
    
    if(isset($_GET['logout']))
    {
        session_destroy();
        echo "<script>window.open('login.php?Invalid=logout successful','_self')</script>";
    }

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">cybertrom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       
        
       
       
       
      </ul>
     
    </div>
  </nav>
  
<?php
include "../html/down.php";
include "../db/db.php";
?>
<div class="row">
  <div class="col-lg-12">
  <table class="table table-bordered table-strped">
  <thead>
  <th class="text-left">FIRST NAME</th>
   <th class="text-left">LAST NAME</th>
    <th class="text-left">IMAGE</th>
    
   <th class="text-left">EDIT DATA</th>
  
   

</thead>

  <?php
 $limit =5;
 
 if(isSet($_GET['page'])){
   $page=$_GET['page'];
  }
  else{
    $page=1;
  }
 $offset =($page-1)*$limit;

$sql="SELECT * FROM `profile` LIMIT {$offset},{$limit}";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    ?>
  
  <tbody >
 <tr class="text-left">

 <td><?php echo "".$row['firstName']."";?></td>
  <td><?php echo "".$row['lastName']."";?></td>
  <td><?php echo "<img src='../image/".$row['image']."'>";?></td>
 
  
 
   
   <td><a class="btn btn-info" href="pdf.php?id=<?php echo "".$row['id']."";?>" onclick="return confirm('Download Pdf')">DOWNLOAD</button></td>
   
 
 </tr>
 </tbody>
 <?php
    }
?>
  </table>
  </div>
  </div>
   
  <?php
    $paggination="SELECT * FROM `profile`";
    $pagginationResult=mysqli_query($con,$paggination);

    if(mysqli_num_rows($pagginationResult)>0){
      $totalRecords = mysqli_num_rows($pagginationResult);

      $totalPages =ceil($totalRecords /$limit);
      echo "<nav class='navb' aria-label='Page navigation example'>";
      echo "<ul class='pagination'>";

      for($i=1;$i<=$totalPages;$i++){
        echo "<li class='page-item'><a class='page-link' href='view.php?page={$i}'>$i</a></li>";

      }
      echo "</ul>";
      echo "</nav>";

    }
    ?>
