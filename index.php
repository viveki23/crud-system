<?php
session_start();
require 'dbconnect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <title>Home</title>
</head>
<body>
   <!-- header -->
<?php include 'include/header.php' ?>

    
<div class="container">

<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> 
          <a class="btn btn-sm btn-outline-success" href="create.php">Create Profile</a>
      </h1>
      <h2 class="text-center p-1">Employee Lists </h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Create</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">History</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button> -->
        </div>
      </div>
      <!-- <?php include('message.php'); ?> -->
     
      <div class="table-responsive">
        <table class="table table-striped table-sm   
        table-hover	
        
        align-middle ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Emp Id</th>
              <th scope="col">Emp Name</th>
              <th scope="col">Email</th>
              <th scope="col">Gender</th>
              <th scope="col">Designation </th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php
          $sql = "SELECT * FROM cc";
          $sql_run = mysqli_query($conn, $sql);

          if(mysqli_num_rows($sql_run)>0)

          {
            foreach ($sql_run as $cc)
             {  ?>

              <tr>
              <td><?= $cc['id'];?></td>
              <td><?= $cc['emp_id'];?></td>
              <td><?= $cc['emp_name'];?></td>
              <td><?= $cc['emp_email'];?></td>
              <td><?= $cc['gender'];?></td>
              <td><?= $cc['designation'];?></td>
              <td><?= $cc['contact'];?></td>
              <td><?= $cc['address'];?></td>
              <td>
                <p> 
                  <a class="btn btn-sm btn-outline-info" href="View.php?id=<?= $cc['id']; ?>">View</a>
                  <a class="btn btn-sm btn-outline-success" href="Update.php?id=<?= $cc['id']; ?>">Update</a>
                 <form action="dbcrd.php" method="post" class="d-inline">
                 <button class="btn btn-sm btn-outline-danger" name="delete" value="<?= $cc['id']; ?>">Delete </button>
             </form>
                  
               </p>
              </td>
            </tr>

            <?php }
          }
        else
        {
          echo "<h1 >Employees Profile Not Created</h1>";
        }
          ?>

           
           
           
           
           
          </tbody>
        </table>
      </div>
    </main>

    </div>
    
    
<!-- footer -->
    <?php include 'include/footer.php' ?>
  

    <!-- js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>