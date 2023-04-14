<?php
$servername= "localhost";
$username= "root";
$password="";
$database="theobroma";
//create connection
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
     if(isset($_POST['submit'])){    
        if(isset($_POST['id'])){

                $id=$_POST['id'];
                $type=$_POST['type'];
                $name=$_POST['name'];
                $parent=$_POST['parent'];
                $shortcode=$_POST['shortcode'];
                $insertquery= "INSERT INTO `tbl_allinfo`(`id`, `type`, `name`, `parent`, `shortcode`) VALUES ('$id','$type','$name','$parent','$shortcode')";
                $insertqueryresult=mysqli_query($conn,$insertquery);
                }
                else{
                     echo " failed to insert";
                }
           
    }
    else{
        echo "failed to submit";
    }
}

?>