<?php
include 'connection.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-info my-5"><a href="student.php" class="text-light"> Add user</a></button>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql="select * from `user`";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['Name'];
        $email=$row['Email'];
        $address=$row['Address'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>
    <button class="btn btn-primary"><a href="Update.php?update_id='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="Delete.php?delete_id='.$id.'" class="text-light">Delete</a></button></td>
      </tr>';
    }
    


}
?>

  </tbody>
</table>
    </div>
</body>
</html>