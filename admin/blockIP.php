<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>THCS Minh Đạm - Chặn IP </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/248068027_112816467881817_758946115097250792_n.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <br>
    </center>
    <br>
    <center>
        <h1>Chặn IP</h1>
    </center>
    <div class="container">
        <form method="POST" action="includes/form/blockIpForm.php">
            <div class="form-group">
                <label>IP người cần chặn</label>
                <input id="InputIp" name="InputIp" type="text" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
         </form>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col" style="color:red">Id</th>
            <th scope="col" style="color:red">IP</th>
            </tr>
            </thead>

            <script type="text/javascript">
                function copyBtn(){
                        swal({
                            title: "Cảnh Báo!",
                            text: "Tính năng đang trong quá trình phát triển, vui lòng sao chép ảnh theo cách thủ công! \nXin Thông Cảm!",
                            icon: "warning",
                        })
                }
            </script>

            <tbody>
            <?php
            require "includes/db_conn1.php";
            $sql="Select * from `blockip`";
            $result=mysqli_query($conn,$sql);
            if($result){
            while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $ip=$row['ip'];

            echo ' 
            <tr>
                <th scope="row" style="color:blue">'.$id.'</th>
                <th scope="row" class="col">'.$ip.'</th>
                <td>
                    <button class="btn btn-warning"><a href="includes/form/?delete_ip='.$id.'" class="text-light">Xóa</a></button>
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