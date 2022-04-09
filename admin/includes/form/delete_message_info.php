<?php
require "../db_conn1.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `message_cancel` where id =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location: ../../message_cancel.php');
    }else{
        die(mysqli_error($conn));
    }
}elseif(isset($_GET['deleteid1'])){
    $id1=$_GET['deleteid1'];

    $sql1="delete from `message_checked` where id =$id1";
    $result1=mysqli_query($conn,$sql1);
    if($result1){
        //echo "Deleted successfully";
        header('location: ../../message_checked.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>