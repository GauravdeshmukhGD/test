<?php
$servername= "localhost";
$username= "root";
$password="";
$database="theobroma";
//create connection
$conn = mysqli_connect($servername,$username,$password,$database);
$query="SELECT DISTINCT(type) FROM `tbl_allinfo`";
$res=mysqli_query($conn,$query);


?>
