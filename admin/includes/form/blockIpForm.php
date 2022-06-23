<?php
require "../db_conn1.php";

if (isset($_POST['submit'])){
    $ip=$_POST['InputIp'];

    $sql="INSERT INTO `blockip`(`ip`) VALUES ('$ip')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../blockIP.php");
        exit();
    }else{
        die(mysqli_error($conn));
    }
}
?>
