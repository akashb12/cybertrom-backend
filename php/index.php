<?php
include "../html/head.php";
include "../html/body.php";
include "../html/down.php";
include "../db/db.php";
?>

<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>ADD USER DETAILS</h2>
   <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
   
   </div>
   
    <form action="index.php" enctype="multipart/form-data" method="post">

        <div class="form-group">


        <input type="text" name="firstName" class="form-control" id="title" placeholder="firstName">

        </div>

        <div class="form-group">

        <input type="text" name="lastName" class="form-control" id="lastName"  placeholder="lastName">
        </div>
        <div class="form-group">

        <input type="text" name="age" class="form-control" id="age"  placeholder="age">
        </div>
        <div class="form-group">

        <input type="text" name="description" class="form-control" id="description"  placeholder="description">
        </div>
        <div class="form-group">

        <input type="file" name="image" class="form-control" id="image">
</div>

        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>

    </form>
    </div>

</div></div></div>
 

    <?php
if(isSet($_POST['submit'])){
    if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['age']) || empty($_POST['description'])) 
    {
     echo "<script>window.open('index.php?Empty= please fill blank fields','_self')</script>";
        
         
    }
    else{
  $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $age=$_POST['age'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $imagetmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($imagetmp,"../image/$image");
    $sql=   "INSERT INTO `profile`(`firstName`, `lastName`, `age`, `description`, `image`, `date`) VALUES (' $firstName', ' $lastName','$age','$description', '$image',current_timestamp());";
   $run =mysqli_query($con,$sql);
   if($run){
       echo "upload successful";
       echo "<script>window.open('view.php','_self')</script>";
   }
   else{
    echo "upload unsuccessful";
    echo "<script>window.open('index.php','_self')</script>";
   }
}
}
?>
 




 