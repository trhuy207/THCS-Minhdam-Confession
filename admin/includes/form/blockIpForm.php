<?php
require "../db_conn1.php";

if (isset($_POST['submit'])){
    $ip=$_POST['InputIp'];
    $date= date('Y-m-d');

    $sql="INSERT INTO `blockip`(`ip`, `date`) VALUES ('$ip', '$date')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../blockIP.php");
        exit();
    }else{
        die(mysqli_error($conn));
    }
}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];

    $sql="delete from `blockip` where id =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location: ../../blockIP.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>
