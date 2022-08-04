<?php 
    require_once('logics/dbconnection.php');
    $sqlDeleteStudent = mysqli_query($conn, 
        "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
    if($sqlDeleteStudent)
    {
        echo "User deleted successfully";
        header('location:students.php');
    }
    else
    {
        echo "Error occured. Please try again!";
    }
?>