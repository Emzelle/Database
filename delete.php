<?php
include 'db.php';
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql="delete from `crudact` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:cruddisplay.php');
    }else{
        die(mysqli_error($con));
}
}
?>