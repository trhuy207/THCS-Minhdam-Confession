<?php
require "../db_conn1.php";

if (isset($_POST['submit'])){
    $message=$_POST['message'];

    $sql="insert into `message` (message)
    value('$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../../?info_form=successfully#footer_part");
        exit();
    }else{
        die(mysqli_error($conn));
    }
}
?>