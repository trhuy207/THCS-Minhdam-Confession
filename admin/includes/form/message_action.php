<?php

require "../db_conn1.php";

if(isset($_GET['messageid_canceldashboard'])){
    $id = $_GET['messageid_canceldashboard'];

    $sql = "SELECT `message`, `ip`, `os`, `browser`, `device` FROM `message` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_cancel = $row['message'];
        $userInfoIp = $row['ip'];
        $userInfoOs = $row['os'];
        $userInfoBrowser = $row['browser'];
        $userInfoDevice = $row['device'];

        $sql1 = "INSERT INTO `message_cancel` (`message`, `ip`, `os`, `browser`, `device`) VALUES ('$message_cancel', '$userInfoIp', '$userInfoOs', '$userInfoBrowser', '$userInfoDevice')";
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

    $sql = "SELECT `message`, `ip`, `os`, `browser`, `device` FROM `message_cancel` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_cancelchecked = $row['message'];
        $userInfoIp = $row['ip'];
        $userInfoOs = $row['os'];
        $userInfoBrowser = $row['browser'];
        $userInfoDevice = $row['device'];

        $sql1 = "INSERT INTO `message_checked` (`message`, `ip`, `os`, `browser`, `device`) VALUES ('$message_cancelchecked', '$userInfoIp', '$userInfoOs', '$userInfoBrowser', '$userInfoDevice')";
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

    $sql = "SELECT `message`, `ip`, `os`, `browser`, `device` FROM `message` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_checked = $row['message'];
        $userInfoIp = $row['ip'];
        $userInfoOs = $row['os'];
        $userInfoBrowser = $row['browser'];
        $userInfoDevice = $row['device'];

        $sql1 = "INSERT INTO `message_checked` (`message`, `ip`, `os`, `browser`, `device`) VALUES ('$message_checked', '$userInfoIp', '$userInfoOs', '$userInfoBrowser', '$userInfoDevice')";
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

    $sql = "SELECT `message`, `ip`, `os`, `browser`, `device` FROM `message_checked` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);

        $message_checkedcancel = $row['message'];
        $userInfoIp = $row['ip'];
        $userInfoOs = $row['os'];
        $userInfoBrowser = $row['browser'];
        $userInfoDevice = $row['device'];

        $sql1 = "INSERT INTO `message_cancel` (`message`, `ip`, `os`, `browser`, `device`) VALUES ('$message_checkedcancel', '$userInfoIp', '$userInfoOs', '$userInfoBrowser', '$userInfoDevice')";
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