



//for selecting dropdown type

function selectype(){
    let dataid  = document.getElementById("type").value;
    $.ajax({
        url:"showtype.php",
        method:"POST",
        data:{
            id : dataid
        },
        success:function(data){
           $("#ans") .html(data)
           $("#ans").html().preventDefault();
        },
    });
}

//for inserting data

$("#insert").click(function(e){
    e.preventDefault();
    let action='insert';
    let type=$("#type").val();
    let name=$("#name").val();
    let parent=$("#parent").val();
    let shortcode=$("#shortcode").val();
    insertdata={
        type:type,name:name,parent:parent,shortcode:shortcode,action:action
    }
    $.ajax({
        url:"CRUD.php",
        method:"POST",
        data:insertdata,
        // dataid:{
        //     id : dataid
        // },
        success :function(data){
            msg="<div class ='alert alert-dark mt-3'>"+data+"</div>";
            $("#msg").html(msg)
            console.log(data);
            $("#adduser")[0].reset();
            $("#tr").html();
            $("#ans").html().preventDefault();
        },
    });
});    

//for deleting data

function deletefunction(id){
    let action='btndelete';
    $.ajax({
        url:"CRUD.php",
        method:"POST",
        data:{
            id:id,action:action
        },
        // dataid:{
        //     id : dataid
        // },
        success:function(data){
            msg="<div class ='alert alert-dark mt-3'>"+data+"</div>";
            $("#msg").html(msg)
            console.log(data);
            $("#adduser")[0].reset();
            $("#tr").html();
            $("#ans").html().preventDefault();
            
        },

    });
 }

//for editing data

function editfunction(id){
    let action='edit';
   $.ajax({
    url:"CRUD.php",
    method:"POST",
    datatype:"json",
    data:{
        id:id,action:action
    },
    // dataid:{
    //     id : dataid
    // },
    success:function(data){
        data=JSON.parse(data);
        console.log(data.type);
        $("#id").val(data.id);
        $("#data-type").val(data.type);
        $("#name").val(data.name);
        $("#parent").val(data.parent);
        $("#shortcode").val(data.shortcode);
        $("#tr").html();
        $("#ans").html().preventDefault();
    },
   }); 
}

//for updating data
function updatefunction(){
    let action='update';
    let id=$("#id").val();
    let type=$("#type").val();
    let name=$("#name").val();
    let parent=$("#parent").val();
    let shortcode=$("#shortcode").val();
        $.ajax({
        url:"CRUD.php",
        method:"POST",
        datatype:"json",
        data:{
            id:id,type:type,name:name,parent:parent,shortcode:shortcode,action:action
        },
        // dataid:{
        //     id : dataid
        // },
        success:function(data){
            data=JSON.stringify(data),
            console.log(data.id);
            msg="<div class ='alert alert-dark mt-3'>"+data+"</div>";
            $("#msg").html(msg)
            $("#adduser")[0].reset();
            $("#tr").html();
            $("#ans").html().preventDefault();
        },
    });
 }













































