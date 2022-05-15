<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>THCS Minh Đạm - Đã Duyệt</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/248068027_112816467881817_758946115097250792_n.jpg">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous"
    />
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://www.google.com/recaptcha/api.js?render=6Ldzc3kcAAAAABc73qEkQREOJVnGknAxx-Ahusi9"></script>
    <style>
        .btn-danger{
            background-color:red;
        }
        .btn-primary{
            background-color:#007bff;
        }
        body {
            background: url('images/anh-nen-cho-website-35.jpg')
        }
    </style>
</head>
<body>
    <br>
    <center>
        <button onClick="window.location.href=window.location.href" class="btn btn-outline-dark btn-back">Làm mới</button>
        <a href="home.php" class="btn btn-success">Quay Lại</a>
        <a href="contact_info_checked.php" class="btn btn-primary">Đã Xong!</a>
        <br>
    </center>
    <br>
    <center>
        <h1>Thông Tin Hỗ Trợ</h1>
    </center>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col" style="color:red">Id</th>
            <th scope="col" style="color:red">Tên</th>
            <th scope="col" style="color:red">Email</th>
            <th scope="col" style="color:red">SĐT</th>
            <th scope="col" style="color:red">Link FB</th>
            <th scope="col" style="color:red">Tin Nhắn</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require "includes/db_conn1.php";
            $sql="Select * from `contact_info`";
            $result=mysqli_query($conn,$sql);
            if($result){
            while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $fbLink=$row['fbLink'];
            $message=$row['message'];
            echo ' 
            <tr>
                <th scope="row" style="color:blue">'.$id.'</th>
                <th scope="row">'.$name.'</th>
                <th scope="row">'.$email.'</th>
                <th scope="row">'.$phone.'</th>
                <th scope="row" href="'.$fbLink.'">'.$fbLink.'</th>
                <td id="message"><h5><b>'.$message.'</b></h5></td>
                <td>
                    <button class="btn btn-primary"><a href="includes/form/contactFrom.php?contact_info_checked='.$id.'" class="text-light">Xong</a></button>
                </td>
            </tr>
            ';
            }
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php 
}else{
    header("Location: index.php");
    exit();
}
?>