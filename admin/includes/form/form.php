<?php
require "../db_conn1.php";
require "../UserInfo.php";

if (isset($_POST['submit'])){

    $userInfoIp = UserInfo::get_ip();
    $userInfoOs = UserInfo::get_os();
    $userInfoBrowser = UserInfo::get_browser();
    $userInfoDevice = UserInfo::get_device();
    $message=$_POST['message'];
    
    
    $sql="insert into `message` (message, ip, os, browser, device)
    value('$message', '$userInfoIp', '$userInfoOs', '$userInfoBrowser', '$userInfoDevice')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../../?info_form=successfully#footer_part");
        exit();
    }else{
        die(mysqli_error($conn));
    }
}
?>