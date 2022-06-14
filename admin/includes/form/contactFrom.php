<?php
require "../db_conn1.php";

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $fbLink=$_POST['fbLink'];
    $message=$_POST['message'];

    $hinhanhpath=basename($_FILES['fileToUpload']['name']);

    //upload file
    $target_dir = "../../uploads/";
    $target_file = $target_dir.$hinhanhpath;
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
    
    $hinhanh = '';
    
    //check upload file
    if(!$hinhanhpath){
        $hinhanh = '[No Image]';
    }
    elseif($hinhanhpath){
        $hinhanh = 'uploads/'.$hinhanhpath.'';
    }


    $sql="INSERT INTO `contact_info`(`name`, `email`, `phone`, `fbLink`, `message`, `image`) VALUES ('$name', '$email', '$phone', '$fbLink', '$message', '$hinhanh')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../../../contact.php?info_form=successfully");
        exit();
    }else{
        die(mysqli_error($conn));
    }
}

if (isset($_GET['contact_info_checked'])){
    $id = $_GET['contact_info_checked'];

    $sql="SELECT `name`, `email`, `phone`, `fbLink`, `message`, `image` FROM `contact_info` WHERE id = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $contact_name = $row['name'];
        $contact_email = $row['email'];
        $contact_phone = $row['phone'];
        $contact_fbLink = $row['fbLink'];
        $contact_message = $row['message'];
        $contact_image = $row['image'];
        $sql1 = "INSERT INTO `contact_info_checked`(`name`, `email`, `phone`, `fbLink`, `message`, `image`) VALUES ('$contact_name', '$contact_email', '$contact_phone', '$contact_fbLink', '$contact_message', '$contact_image')";
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

// DELETE CONTACT INFO
if(isset($_GET['delete_contact_info'])){
    $id = $_GET['delete_contact_info'];

    $sql="DELETE from `contact_info_checked` WHERE id = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location: ../../contact_info_checked.php');
    }else{
        die(mysqli_error($conn));
    }
}elseif(isset($_GET['delete_contact_info_from_main_contact_page'])){
    $id = $_GET['delete_contact_info_from_main_contact_page'];

    $sql="DELETE from `contact_info` WHERE id = $id";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("location: ../../contact_info.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>