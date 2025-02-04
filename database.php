<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mamrolejo_756";

$conn = new mysqli($servername,$username,$password,$database);

if ($conn -> connect_error){
    die("co" .$conn->connection_error);
}
?>