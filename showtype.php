<?php

$servername= "localhost";
$username= "root";
$password="";
$database="theobroma";
$show=$_POST['id'];
$show = trim($show);
//create connection
$conn = mysqli_connect($servername,$username,$password,$database);
$sqlquery="SELECT * FROM `tbl_allinfo` where type='{$show}'";
$res=mysqli_query($conn,$sqlquery);
while($rows=mysqli_fetch_assoc($res)){
?> 
 
<tr>
<td ><?php echo $rows['id'];?></td>
<td ><?php echo $rows['type'];?></td>
<td ><?php echo $rows['name'];?></td>
<td ><?php echo $rows['parent'];?></td>
<td ><?php echo $rows['shortcode'];?></td>

<td>
    <form action="" method="">
    <input type="hidden" name="btnedit" id="btnedit" value="<?= $rows['id'];?>">
        <button type="button" class="btn btn-primary btn-edit" id="btnedit"  name ="btnedit" onclick="editfunction('<?php echo $rows['id'];?>')">EDIT</button>
    </form> 
</td>


<td>
    <form action="" method="">
    <input type="hidden" name ="btndelete" id="btndelete"  value="<?= $rows['id'];?>">
        <button type="button" class="btn btn-danger btn-delete" id="btndelete" name ="btndelete" onclick="deletefunction('<?php echo $rows['id'];?>')">DELETE</button>
     </form>
</td>



<!--  <form action="" method="POST">
    <input type="hidden"  name="" value="<?//= $rows['id'];?>">
     <td><a href="delete.php?id=<?//= $rows['id'];?>">DELETE</a></td> 
</form> -->
<td></td>
<td></td>
</tr>
<head>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
      $(document).ready(function(){
        $(".btn-edit").click(function(){
          $(".btn-delete").hide();
        });
        $(".btn-edit").click(function(){
          $(".btninsert").hide();
        });
      });
</script>
</head>
<!-- <script type="text/javascript" src="dropdown.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
echo $sqlquery;
?>
<?php    



?>




