<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>THCS Minh Đạm - Đã Huỷ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/248068027_112816467881817_758946115097250792_n.jpg">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
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
        <br>
    </center>
    <br>
    <center>
        <h1>Bài Viết Đã Huỷ</h1>
    </center>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col" style="color:red">Id</th>
            <th scope="col" style="color:red">Tin nhắn</th>
            <th scope="col" style="color:red">Ảnh</th>
            <th scope="col" style="color:red">Ghi Chú</th>
            <th scope="col" style="color:red">Thời gian</th>
            <th scope="col" style="color:red">Hành Động</th>
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
                function checkedBtn(){
                    swal({
                        title: "Cảnh Báo!",
                        text: "Hiện tính năng này đang bị lỗi, vui lòng xóa những cfs đã hủy trước đó để đánh dấu lại, chúng tôi sẽ sớm fix lỗi này! \nXin Cám Ơn!",
                        icon: "info",
                    })
                }
            </script>

            <tbody>
            <?php
            require "includes/db_conn1.php";
            $sql="Select * from `message_cancel`";
            $result=mysqli_query($conn,$sql);
            if($result){
            while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $message=$row['message'];
            $image=$row['image'];
            $ip=$row['ip'];
            $os=$row['os'];
            $browser=$row['browser'];
            $device=$row['device'];
            $time=$row['time'];

            $hinhanh = '';

            if($image == "[No Image]"){
                $hinhanh = $image;
            }
            elseif($image == null){
                $hinhanh == '[No Image]';
            }
            else{
                $hinhanh = '
                    <img 
                            src="'.$image.'" 
                            width=300
                    >
                    <button onClick="copyBtn()">
                            <i 
                                class="fa fa-clone" 
                                aria-hidden="true"
                            ></i>
                    </button>
                ';
            }

            echo ' 
            <tr>
                <th scope="row" style="color:blue">'.$id.'</th>
                <td id="message"><h5><b>'.$message.'</b></h5></td>
                <td class="col-5">'.$hinhanh.'</td>
                <td id="myInput1" style="font-size: 1.17em; font-weight: bold;">'.$ip.'<br>'.$os.'<br>'.$browser.'<br>'.$device.'</td>
                <td><h5><b>'.$time.'</b></h5></td>
                <td>
                <button class="btn btn-danger"><a href="includes/form/delete_message_info.php?deleteid='.$id.'" class="text-light">Xóa</a></button>
                <button class="btn btn-success" onClick="checkedBtn()">Duyệt</button>
                <!--<button class="btn btn-success"><a href="includes/form/message_action.php?messageid_cancelchecked='.$id.'" class="text-light">Duyệt</a></button>-->
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