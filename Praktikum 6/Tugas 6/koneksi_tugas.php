<?php 

$host = 'localhost' ;
$username = 'root' ;
$password = '' ;
$database = 'tugas_6';

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("Coneection failed: " . $conn->connect_error );
}