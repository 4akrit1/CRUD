<?php
include 'connection.php' ;//connecing to db
$id=$_GET['update_id'];

$sql="select * from `user` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$address=$row['Address'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
//update query
  $sql="update `user` set id='$id', Name='$name', Email='$email', Address='$address' where id=$id";
  // executing query
  $result=mysqli_query($conn,$sql);
  if($result){
    // redirecting to table
    header('location:table.php');
  }
  else{
    die(mysqli_error($conn));
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
  </head>
  <body>
  <div class="container my-4">
    <form method="post">
    <div>
    <label>Name:</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="name" autocomplete="off" value=<?= $name;?> >
  </div>
    <div>
    <label> Email:</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email"autocomplete="off" value=<?= $email;?>>
  </div>
  <div>
    <label> Address</label>
    <input type="text" class="form-control"  placeholder="Enter address" name="address"autocomplete="off" value=<?= $address;?>>
  </div>
<br>
  <button type="submit" class="btn btn-info" name="submit">Update</button>
</form>

  </body>
</html>