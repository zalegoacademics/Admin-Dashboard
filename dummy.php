<?php
$server ='localhost';
$username ="root";
$password ="";
$database ="zalego";

$conn = mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT * FROM contactus");


while ($fetchRecords = mysqli_fetch_array($sql)) {
    # code...
    echo  $fetchRecords['firstname'].$fetchRecords['lastname'].$fetchRecords['email']. '<br>';
}


?>