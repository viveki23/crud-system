<?php
session_start();
require 'dbconnect.php';

//delete
if(isset($_POST['delete']))
{
    $cc_id = mysqli_real_escape_string($conn, $_POST['delete']);

    $sql = "DELETE FROM cc WHERE id='$cc_id' ";
    $sql_run = mysqli_query($conn,$sql);

    if($sql_run)
    {
        $_SESSION['message'] = "Employee profile Deleted successfully";
        header("Location:index.php");
        exit(0);
    }     
    else
    {
        $_SESSION['message'] = "Employee Profile Not Deleted";
        header("Location:index.php");
        exit(0);
    }
}

//update section
if(isset($_POST['update']))
{
    $cc_id = mysqli_real_escape_string($conn, $_POST['cc_id']);
    $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);
    $emp_name = mysqli_real_escape_string($conn, $_POST['emp_name']);
    $emp_email = mysqli_real_escape_string($conn, $_POST['emp_email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "UPDATE cc SET  emp_id='$emp_id',emp_name='$emp_name',emp_email='$emp_email',
    gender='$gender',designation='$designation',contact='$contact',address='$address' WHERE id='$cc_id' ";

    $sql_run = mysqli_query($conn,$sql);

    if($sql_run)
    {
        $_SESSION['message'] = "Employee profile updated successfully";
        header("Location:index.php");
        exit(0);
    }     
    else
    {
        $_SESSION['message'] = "Employee Profile Not Updated";
        header("Location:index.php");
        exit(0);
    }
}

//create/insert section
if(isset($_POST['submit']))
{
    $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);
    $emp_name = mysqli_real_escape_string($conn, $_POST['emp_name']);
    $emp_email = mysqli_real_escape_string($conn, $_POST['emp_email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "INSERT INTO cc (emp_id,emp_name,emp_email,gender,designation,contact,address) 
            VALUES('$emp_id','$emp_name','$emp_email','$gender','$designation','$contact','$address')";

    $sql_run = mysqli_query($conn,$sql);   
    if($sql_run)
    {
        $_SESSION['message'] = "Employee profile created successfully";
        header("Location:create.php");
        exit(0);
    }     
    else
    {
        $_SESSION['message'] = "Employee Profile Not Created";
        header("Location:create.php");
        exit(0);
    }
}

?>