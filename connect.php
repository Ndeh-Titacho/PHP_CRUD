<?php
$server="localhost";
$username="root";
$password="";
$dbName="crud";

//create connection
$conn= new mysqli($server,$username,$password,$dbName);
//heck connection
if(!$conn){
//     echo "Connection was Successful";
// }
// else{
    echo("Connection failed: " . $conn->connect_error);
}
?>
