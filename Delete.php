<?php
include 'connection.php' ;
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];

    $sql="delete from `user` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:table.php');
    }
    else{
        die(die(mysqli_error($conn)));
    }
}

?>