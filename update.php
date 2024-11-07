<?php
include 'db.php';
$id=$_GET['update'];
$sql="Select * from `crudact` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$password=$row['password'];
if(isset($_POST["submit"])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="update `crudact` set id=$id,username='$username',password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:cruddisplay.php');
    }else{
        die(mysqli_error($con));
    }
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label for="username1" class="form-label">username</label>
    <input type="username" class="form-control" id="username1" placeholder="Enter your username" name="username" autocomplete="off" value=<?php echo $username?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
</html>