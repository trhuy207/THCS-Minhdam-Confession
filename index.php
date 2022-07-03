<!-- BẢN QUYỀN THUỐC VỀ Quốc Huy | CODED BY QUỐC HUY -->
<?php 
    include('admin/includes/db_conn1.php');
    include('admin/includes/UserInfo.php');

    $sql = "SELECT * FROM `blockip`";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://www.thcsminhdam.ga/images/278028755_106243695388538_8023480144971372750_n.png">
    <link rel="icon" href="images/icon.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" crossorigin="anonymous">
    <title>THCS Minh Đạm</title>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "106242122055362");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v13.0'
        });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">THCS Minh Đạm Confession</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Trang Chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Hỗ Trợ</a>
                </li>
            </ul>
        </div>
    </nav>

    <br />

    <!-- PHẦN ĐẦU TRANG / GIỚI THIỆU -->
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #0593a1; color: whitesmoke">
                <h1>THCS Minh Đạm Confession</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">Chào mừng các bạn đã đến với THCS Minh Đạm confession!! </h5>
                <p class="card-text">
                    Tại đây bản hãy gửi những tâm tư, tình cảm, ... của bản thân mà không lo bị lộ danh tính nè :> <br>Chúc Các Bạn Một Ngày Vui Vẻ!
                    <br><br>
                    LƯU Ý :<br>
                    - AD sẽ không duyệt những cfs mang tính gây war, xúc phạm nhau hay có những từ ngữ thô tục đâu nhé!
                    Có thể confession sẽ bị trễ vì con ad lười hoặc bận 
                    <br>
                    - khi gửi ảnh kèm theo vui lòng chỉ gửi ảnh minh họa vui vẻ, tuyệt đối không gửi ảnh các bạn hoặc người nào đó lên, 
                    có chuyện gì ad sẽ không chịu trách nhiệm đâu đấy!  
                    <br>
                    Hết rùi hihi, cảm ơn mọi người đã đọc :33
                    <br>
                    <i>Do server web ở Châu Âu nên việc gửi cfs sẽ chậm một chút các bạn hãy kiên nhẫn nhé! Đừng bấm gửi quá nhiều lần ạ! Xin Cám Ơn!</i>
                </p>
            </div>
        </div>
    </div>
    <br>

    <!-- PHẦN NHẬP THÔNG TIN -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mọi người có tâm sự gì nè</h5>
                <?php if($result){?>
                    <?php while($row=mysqli_fetch_assoc($result)){
                        $ip = $row['ip'];

                        $userInfoIp = UserInfo::get_ip();?>
                        <?php if($ip == $userInfoIp){?>
                            <script type="text/javascript"> 
                                swal({
                                    title: "Cảnh Báo!",
                                    text: "Bạn đã có một số câu từ không chuẩn mực trong lời văn, bạn đã bị chặn ip trên trang web, vui lòng chờ khoảng 72h tiếp theo để được gỡ chặn! Bạn có thể truy cập và gửi báo cáo bên trang hỗ trợ để được xem xét sớm hơn! \n\nXin Cám Ơn!",
                                    icon: "warning",
                                    buttons: true,
                                    buttons: ["Tới Trang Hỗ Trợ!", "Oke!"],
                                })
                                .then((willDelete) => {
                                    if (!willDelete) {
                                        window.location.href = "/contact.php";
                                    } 
                                });
                            </script>
                        <?php }?>

                    <?php }?>
                <?php }else{
                    echo 'Có lỗi đã xảy ra!';
                }?>
                <?php if(isset($_REQUEST['info_form'])){ ?>
                    <?php if($_REQUEST['info_form'] == "successfully"){?>
                        <script type="text/javascript"> 
                            swal({
                                title: "Thành Công!",
                                text: "Chúng tôi đã nhận được confession của bạn rùi, chúng tôi sẽ kiểm duyệt sớm thôi, nếu bạn không thấy confession của mình thì hãy liên hệ với chúng tôi bên trang hỗ trợ! \n\nXin Cám Ơn Rất Nhiều!",
                                icon: "success",
                            })
                            .then((value) => {
                                window.location.href = "/";
                            });
                        </script>
                    <?php }?>
                <?php } ?>
                <form action="admin/includes/form/form.php" method="POST" enctype="multipart/form-data">  
                    <?php if($ip == $userInfoIp){ ?>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Xin mời để lại tâm sự" rows="2" required disabled></textarea>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpeg, .jpg, .png" disabled> 
                        </div>
                        <button class="btn btn-primary me-2" type="submit" name="submit" disabled>Gửi nè :></button>
                        <button class="btn btn-danger" type="reset" disabled>Xóa Thông Tin Nhập!</button>
                    <?php }else{ ?>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Xin mời để lại tâm sự" rows="2" required></textarea>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpeg, .jpg, .png"> 
                        </div>
                        <button class="btn btn-primary me-2" type="submit" name="submit">Gửi nè :></button>
                        <button class="btn btn-danger" type="reset">Xóa Thông Tin Nhập!</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

    <!-- PHẦN CHÂN TRANG -->
    <footer class="text-center text-lg-start">
        <div class="text-center p-3">
            © 2022 Copyright:
            <a class="text-dark" href="https://www.thcsminhdam.ga">thcsminhdam.ga</a> 
            | Coded By:
            <a class="text-dark" href="https://www.tranquochuy.ga">William Tran</a>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>