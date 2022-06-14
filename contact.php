<!-- BẢN QUYỀN THUỐC VỀ Quốc Huy | CODED BY QUỐC HUY -->
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
                <li class="nav-item">
                    <a class="nav-link" href="/">Trang Chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
                <h1>THCS Minh Đạm Confession - Hỗ Trợ</h1>
            </div>
        </div>
    </div>
    <br>

    <!-- PHẦN NHẬP THÔNG TIN -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php if(isset($_REQUEST['info_form'])){ ?>
                    <?php if($_REQUEST['info_form'] == "successfully"){?>
                        <script type="text/javascript"> 
                            swal({
                                title: "Thành Công!",
                                text: "Chúng tôi đã nhận được thông tin của bạn rùi, chúng tôi sẽ kiểm tra sớm thôi! \n\nXin Cám Ơn Rất Nhiều!",
                                icon: "success",
                            })
                            .then((value) => {
                                window.location.href = "/contact.php";
                            });
                        </script>
                    <?php }?>
                <?php } ?>
                <form action="admin/includes/form/contactFrom.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Họ Và Tên*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập Tên Của Bạn..." required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập Email Của Bạn..." />
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập Số Điện Thoại Của Bạn..." />
                    </div>
                    <div class="form-group">
                        <label>Link Facebook*</label>
                        <input type="text" class="form-control" id="fbLink" name="fbLink" placeholder="Nhập Link Facebook Của Bạn..."required />
                        <small id="fbLinkSmall" class="form-text text-muted">Vui lòng nhập link facebook hoặc user id facebook của bạn để chúng tôi có thể hồi đáp!</small>
                    </div>
                    <div class="form-group">
                        <label>Đặt Câu Hỏi*</label>
                        <textarea id="message" class="form-control" name="message" placeholder="Xin mời để lại câu hỏi" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình Ảnh Minh Họa</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpeg, .jpg, .png" class="form-control"> 
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
                    <button class="btn btn-danger" type="reset">Xóa Thông Tin Nhập!</button>
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