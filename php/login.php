<?php
session_start();
include "../html/head.php";
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
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
   <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
    <form method="post" action="login.php">

        <div class="form-group">


            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">

        </div>
        
        <button type="submit" name="login" class="btn btn-primary">Login</button>

    </form>
    </div>

</div></div></div>
<?php


    if(isset($_POST['login']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
        echo "<script>window.open('login.php?Invalid= please fill blank fields','_self')</script>";
           
            
       }
       else
       {
        $sqlUser=   "SELECT * FROM `users` where email='".$_POST['email']."' AND password='".$_POST['password']."'";
            
        $sqlResult=mysqli_query($con,$sqlUser);

            if(mysqli_fetch_assoc($sqlResult))
            {
                $_SESSION['User']=$_POST['email'];
                echo "<script>window.open('view.php','_self')</script>";
            }
            else
            {
                echo "<script>window.open('login.php?Invalid= Please Enter Correct User Name and Password ','_self')</script>";
             
            }
       }
    }
   
?>