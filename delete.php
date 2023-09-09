<?php
include 'connect.php';
if(isset($_GET['deleteId'])){
    $id=$_GET['deleteId'];

    $sql="DELETE FROM students WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');}
        else{
            echo("Connection failed: " . $conn->connect_error);
}
        }
    

?>