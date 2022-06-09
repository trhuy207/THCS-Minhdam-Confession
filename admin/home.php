<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>THCS Minh Đạm - DASHBOARD</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="js/script.js"></script>
     <link rel="icon" href="images/248068027_112816467881817_758946115097250792_n.jpg">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/style.css">
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
          .btn-warning {
               color: white;
               background-color: rgb(150, 112, 0);
               border-color: rgb(176, 132, 0);
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
          <a href="logout.php" class="btn btn-danger">Đăng Xuất!</a>
          <a href="contact_info.php" class="btn btn-primary">Thông Tin Hỗ Trợ</a>
          <a href="message_checked.php" class="btn btn-success">Đã Duyệt</a>
          <a href="message_cancel.php" class="btn btn-warning">Đã Huỷ</a>
     <br>
     </center>
     <br>
     <div class="container">
          <table class="table table-bordered" id="table">
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
               <tbody>
               <?php
                    require "includes/db_conn1.php";
                    $sql="Select * from `message`";
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
                              echo ' 
                                   <tr>
                                        <th 
                                             scope="row" 
                                             style="color:blue"
                                        >
                                             '.$id.'
                                        </th>
                                        <td 
                                             id="myInput" 
                                             class="col-5 tdElement"
                                             style="
                                                  font-size: 1.17em; 
                                                  font-weight: bold;
                                             " 
                                             data-type="text"
                                        >
                                             '.$message.'
                                             <button data-type="copy" onclick="copyText()">
                                                  <i 
                                                       class="fa fa-clone" 
                                                       aria-hidden="true"
                                                  ></i>
                                             </button>
                                        </td>
                                        <td 
                                             id="myInput" 
                                             class="col-5">
                                             <img 
                                                  src="'.$image.'" 
                                                  width=300
                                             >
                                             <button>
                                                  <i 
                                                       class="fa fa-clone" 
                                                       aria-hidden="true"
                                                  ></i>
                                             </button>
                                        </td>
                                        <td 
                                             id="myInput1" 
                                             style="font-size: 1.17em; font-weight: bold;"
                                        >
                                             '.$ip.'
                                             <br>
                                             '.$os.'
                                             <br>
                                             '.$browser.'
                                             <br>
                                             '.$device.'
                                        </td>
                                        <td 
                                             style="font-size: 1.17em; font-weight: bold;"
                                        >
                                             '.$time.'
                                        </td>
                                        <td>
                                             <button class="btn btn-success"><a href="includes/form/message_action.php?messageid_checked='.$id.'" class="text-light">Duyệt</a></button>
                                             <button class="btn btn-danger"><a href="includes/form/message_action.php?messageid_canceldashboard='.$id.'" class="text-light">Huỷ</a></button>
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