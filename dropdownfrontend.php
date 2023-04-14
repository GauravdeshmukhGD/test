<?php

require_once('dropdownbackend.php');
//require_once('showtype.php');

?>
<!doctype html>
<html lang="en">
  <head>

  <!-- https://www.youtube.com/watch?v=OQEBBXSTRfk -->
  <!-- https://www.youtube.com/watch?v=72U5Af8KUpA -->
  <!-- https://www.youtube.com/watch?v=-B0rZxlrFZE -->
  <!-- https://www.youtube.com/watch?v=5Hf2tLyo-hM -->
  <!-- https://www.youtube.com/watch?v=y3GIgsRUYsU -->
  <!-- https://www.youtube.com/watch?v=gRh7z5x2xTE -->
  <!-- https://www.youtube.com/watch?v=nbSxc-W_jtg -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dropdown Button</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
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

    $(document).ready(function() {
   function RefreshTable() {
    $( "#table" ).load( "dropdownfrontend.php #table" );
   }

    $("#update").on("click", RefreshTable);
  });
   // OR CAN THIS WAY
   //
   // $("#refresh-btn").on("click", function() {
   //    $( "#mytable" ).load( "your-current-page.html #mytable" );
   // });



</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script type="text/javascript" src="bootstrap.js"></script>
  </head>
  <div class="h1 my-3">
      <h1>Data fetching using Dropdown</h1>
    </div>
  <body>
    <hr>
                          <div class="dataclass" id="dataid">
                          <select id ="type" onchange="selectype()">
                            <?php while($row= mysqli_fetch_assoc($res)){?>
                              <option value="<?php echo $row['type'];?>"><?php echo $row['type'];}?></option> 
                            </select>
                          </div>
   <div class="table mt-5">                      
 <table class="table table-success table-striped-columns" id="table" >
  <thead>
    <tr>
                      <th scope="table table-bordered" >Id</th>
                      <th scope="table table-bordered">Type</th>
                      <th scope="table table-bordered">Name</th>
                      <th scope="table table-bordered">Parent</th>          
                      <th scope="table table-bordered">Shortcode</th>          
                      <th scope="table table-bordered">Edit</th>
                      <th scope="table table-bordered">Delete</th>
                    
                      <!-- <button class="btn btn-success"><a href="form.php" style="text-decoration:none;color:white;float:right;">New User</a></button> -->
                      <!-- <th scope="table table-bordered"><button type="submit"  idinsert=" $rows['id'];?>" class="btn btn-grey">new</button></th> -->
    </tr>
  </thead>
  <tbody id ="ans">
    <tr >
                              <th scope="row"></th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              
    </tr>
  </tbody>
</table>
</div> 
<!-- <div class="forms"> -->
    <div class="h1">
        <h1 style="text-align:center">ADD Data </div>
    </div>
    <div id="msg"></div>
  
  <div class="container">
    <form action="" method="" id="adduser">
    <div class="mb-3">
          <label for="number" class="form-label">id</label>
          <input type="number" class="form-control" id="id"  name="id" value="" readonly required>
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">type</label>
          <input type="text" class="form-control" id="data-type"  name="type" value="" readonly required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">name</label>
            <input type="text" class="form-control"  id="name" name="name"  value=""  required>
          </div>
          <div class="mb-3">
            <label for="text" class="form-label">parent</label>
            <input type="text" class="form-control" id="parent"  name="parent" value=""   required>
          </div>
          <div class="mb-3">
            <label for="text" class="form-label">shortcode</label>
            <input type="text" class="form-control"  id="shortcode"  name="shortcode" value=""  required>
          </div>
        
        <button type="button" name="insert"  id="insert" class="btn btn-primary btninsert">Submit</button>
        <button type="button" name="update"  id="update" class="btn btn-success btnupdate" onclick="updatefunction()">update</button>
        <!-- <button class="btn btn-danger" id="cancel" ><a href="dropdownfrontend.php" style="text-decoration:none; color:white;" >Cancel</a></button> -->
      </form>
    <!-- </div> -->


    

    <script type="text/javascript" src="dropdown.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  

  </body>
</html>