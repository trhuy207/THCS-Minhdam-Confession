<?php
require "../db_conn1.php";
require "../UserInfo.php";

if (isset($_POST['submit'])){

    $userInfoIp = UserInfo::get_ip();
    $userInfoOs = UserInfo::get_os();
    $userInfoBrowser = UserInfo::get_browser();
    $userInfoDevice = UserInfo::get_device();
    $message=$_POST['message'];

    $hinhanhpath=basename($_FILES['fileToUpload']['name']);

    //upload file
    $target_dir = "../../uploads/";
    $target_file = $target_dir.$hinhanhpath;
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
    
    
    $sql="insert into `message` (message, image, ip, os, browser, device)
    value('$message', 'uploads/$hinhanhpath', '$userInfoIp', '$userInfoOs', '$userInfoBrowser', '$userInfoDevice')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../../?info_form=successfully#footer_part");
        exit();
    }else{
        die(mysqli_error($conn));
    }

}

?>