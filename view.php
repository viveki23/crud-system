<?php

require 'dbconnect.php' ;
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <title>view</title>
</head>
<body>
   <!-- header -->
<?php include 'include/header.php' ?>

    
<div class="container">

<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">
             
                  <a class="btn btn-sm btn-outline-success" href="index.php">Back to Home </a>
                </h2>
                <h2 class="text-center">View Employee Profile </h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Update</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">History</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button> -->

        </div>
      </div>
      
     
      <div class="table-responsive">
      <div class="container">
        <small id="emailHelpId" class="form-text text-muted"></small>
        <!-- <h4 class="text-center">Create</h4> -->

      

        <small id="emailHelpId" class="form-text text-muted"></small>

        <?php 
        if(isset($_GET['id']))
        {
          $cc_id = mysqli_real_escape_string($conn, $_GET['id']);
          $sql = "SELECT * FROM cc WHERE id='$cc_id'";
          $sql_run = mysqli_query($conn,$sql);

          if(mysqli_num_rows($sql_run)>0)
          {
            $cc = mysqli_fetch_array($sql_run);
            ?>

    

            <input type="hidden" name="cc_id" value="<?= $cc['id']; ?>">

            <div class="mb-3">
          <label for="" class="form-label">Emp Id</label>
          <input type="text" name="emp_id" value="<?= $cc['emp_id'];?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Emp Name</label>
          <input type="text" name="emp_name" value="<?= $cc['emp_name'];?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Emp Email</label>
          <input type="email" class="form-control" value="<?= $cc['emp_email'];?>" name="emp_email" id="" aria-describedby="emailHelpId" placeholder="">
          
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Designation</label>
          <input type="designation" class="form-control" value="<?= $cc['designation'];?>" name="designation" id="" placeholder="">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Contact</label>
          <input type="contact" class="form-control" value="<?= $cc['contact'];?>" name="contact" id="" placeholder="">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Address</label>
          <input type="address" class="form-control" value="<?= $cc['address'];?>" name="address" id="" placeholder="">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Gender</label>
          <input type="gender" class="form-control" value="<?= $cc['gender'];?>" name="gender" id="" placeholder="">
        </div>
          <small id="emailHelpId" class="form-text text-muted"></small>
       
    
      <?php
          }
          else
          {
            echo "No Profile";
          }

        }
        ?>

    </main>

    </div>
    
    
<!-- footer -->
    <?php include 'include/footer.php' ?>
  

    <!-- js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>