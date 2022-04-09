<?php

require "../db_conn1.php";

if(isset($_GET['messageid_canceldashboard'])){
    $id = $_GET['messageid_canceldashboard'];

    $sql = "SELECT message FROM `message` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_cancel = $row['message'];
        $sql1 = "INSERT INTO `message_cancel` (message) VALUES ('$message_cancel')";
        $result1 = mysqli_query($conn, $sql1);

        if($result1){
            $sql2="delete from `message` where id =$id";

            $result2=mysqli_query($conn,$sql2);
            if($result2){
                header("Location: ../../home.php");
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

if(isset($_GET['messageid_cancelchecked'])){
    $id = $_GET['messageid_cancelchecked'];

    $sql = "SELECT message FROM `message_cancel` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_cancelchecked = $row['message'];
        $sql1 = "INSERT INTO `message_checked` (message) VALUES ('$message_cancelchecked')";
        $result1 = mysqli_query($conn, $sql1);

        if($result1){
            $sql2="delete from `message_cancel` where id =$id";

            $result2 = mysqli_query($conn,$sql2);
            if($result2){
                header("Location: ../../message_cancel.php");
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

if(isset($_GET['messageid_checked'])){
    $id = $_GET['messageid_checked'];

    $sql = "SELECT message FROM `message` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_checked = $row['message'];
        $sql1 = "INSERT INTO `message_checked` (message) VALUES ('$message_checked')";
        $result1 = mysqli_query($conn, $sql1);

        if($result1){
            $sql2="delete from `message` where id =$id";

            $result2=mysqli_query($conn,$sql2);
            if($result2){
                header("Location: ../../home.php");
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

if(isset($_GET['messageid_checkedcancel'])){
    $id = $_GET['messageid_checkedcancel'];

    $sql = "SELECT message FROM `message_checked` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_checkedcancel = $row['message'];
        $sql1 = "INSERT INTO `message_cancel` (message) VALUES ('$message_checkedcancel')";
        $result1 = mysqli_query($conn, $sql1);

        if($result1){
            $sql2="delete from `message_checked` where id =$id";

            $result2=mysqli_query($conn,$sql2);
            if($result2){
                header("Location: ../../message_checked.php");
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