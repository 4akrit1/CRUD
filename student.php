
<?php
include 'connection.php' ;//connecing to db
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
//inser query
  $sql="insert into `user`(name,email,address)values('$name','$email','$address')";
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
    <input type="text" class="form-control"  placeholder="Enter name" name="name" autocomplete="off">
  </div>
    <div>
    <label> Email:</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email"autocomplete="off">
  </div>
  <div>
    <label> Address</label>
    <input type="text" class="form-control"  placeholder="Enter address" name="address"autocomplete="off">
  </div>
<br>
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form>

  </body>
</html>