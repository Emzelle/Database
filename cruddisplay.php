<?php
include 'db.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>where the magic happens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Update and Delete</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
$sql="Select * from `crudact`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
      <td>'.$username.'</td>
      <td>'.$password.'</td>
    <td>
        <button class="btn btn-primary"><a href="update.php?update='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?delete='.$id.'" class="text-light">Delete</a></button>
    </td>
    </tr>';
        

    }
}

    ?>

  </tbody>
</table>
    </div>
</body>
</html>