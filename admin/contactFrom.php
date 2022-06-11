<?php
require "../db_conn1.php";

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $fbLink=$_POST['fbLink'];
    $message=$_POST['message'];

    $sql="INSERT INTO `contact_info`(`name`, `email`, `phone`, `fbLink`, `message`) VALUES ('$name', '$email', '$phone', '$fbLink', '$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../../contact.php?info_form=successfully#footer_part");
        exit();
    }else{
        die(mysqli_error($conn));
    }
}
if (isset($_GET['contact_info_checked'])){
    $id = $_GET['contact_info_checked'];

    $sql="SELECT `name`, `email`, `phone`, `fbLink`, `message` FROM `contact_info` WHERE id = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $contact_name = $row['name'];
        $contact_email = $row['email'];
        $contact_phone = $row['phone'];
        $contact_fbLink = $row['fbLink'];
        $contact_message = $row['message'];
        $sql1 = "INSERT INTO `contact_info_checked`(`name`, `email`, `phone`, `fbLink`, `message`) VALUES ('$contact_name', '$contact_email', '$contact_phone', '$contact_fbLink', '$contact_message')";
        $result1 = mysqli_query($conn, $sql1);

        if($result1){
            $sql2="delete from `contact_info` where id = $id";

            $result2=mysqli_query($conn,$sql2);
            if($result2){
                header("Location: ../../contact_info.php");
                exit();
            }else{
                die(mysqli_error($conn));
            }  
        }
        else{
            die(mysqli_error($conn));
        }
    }
}


?>