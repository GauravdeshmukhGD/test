<?php

$servername= "localhost";
$username= "root";
$password="";
$database="theobroma";
//create connection
$conn = mysqli_connect($servername,$username,$password,$database);


//if(!$_POST['action']==$edit && !$_POST['action']==$update && !$_POST['action']==$btndelete){
if(isset($_POST['action']) && $_POST['action']=='insert'){   
        $type=$_POST['type'];
        $name=$_POST['name'];
        $parent=$_POST['parent'];
        $shortcode=$_POST['shortcode']; 
        if(!empty($type) && !empty($name) && !empty($parent) && !empty($shortcode)){
        
            $insert= "INSERT INTO tbl_allinfo (`type`, `name`, `parent`, `shortcode`) VALUES ('$type','$name','$parent','$shortcode')";
            
            $query_run=mysqli_query($conn,$insert);
            if($query_run){
                echo "successfully inserted"; 
            }
            else
                {
                echo "not inserted"; 
                }
        }
        else{
            echo "fill all details";
        }
}   
    
 
//if(!$_POST['action']==$insert && !$_POST['action']==$update && !$_POST['action']==$btndelete){
if(isset($_POST['action']) && $_POST['action'] =='edit'){

    $id = $_POST['id'];
    $query= "SELECT * FROM tbl_allinfo WHERE id ='$id'";
    $query_run=mysqli_query($conn,$query);
    $rows= mysqli_fetch_assoc($query_run);
    echo json_encode($rows);
  
}
//}

if(isset($_POST['action']) && $_POST['action']=='btndelete') {
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $delete="DELETE FROM `tbl_allinfo` WHERE id='$id'";
        $query_run=mysqli_query($conn,$delete);
        if($query_run){
            echo "successfully deleted"; 
        }
        else
        {
            echo "not deleted"; 
        }
    }
    else{
            echo "enable to delete";
    }
}


//if(!$_POST['action']==$edit && !$_POST['action']==$insert && !$_POST['action']==$btndelete){
if(isset($_POST['action']) &&  $_POST['action']=='update') {
    if(isset($_POST['id']) && ($_POST['type']) && ($_POST['name']) && ($_POST['parent']) && ($_POST['shortcode'])){
        $id=$_POST['id'];
        $type=$_POST['type'];
        $name=$_POST['name'];
        $parent=$_POST['parent'];
        $shortcode=$_POST['shortcode'];
        $update="UPDATE `tbl_allinfo` SET id='$id', type='$type', name='$name', parent='$parent', shortcode='$shortcode' WHERE id='$id'";
        $query_run=mysqli_query($conn,$update);
        if($query_run){
            echo "successfully edited"; 
        }
        else
        {
        echo "not edited";             
        }
}
else{
    echo "enable to update";
    }

}




?>