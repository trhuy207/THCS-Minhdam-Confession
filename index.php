<!-- BẢN QUYỀN THUỐC VỀ Quốc Huy | CODED BY QUỐC HUY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
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
                    LƯU Ý :
                    AD sẽ không duyệt những cfs mang tính gây war, xúc phạm nhau hay có những từ ngữ thô tục đâu nhé!
                    Có thể confession sẽ bị trễ vì con ad lười hoặc bận 
                    Hết rùi hihi, cảm ơn mọi người đã đọc :33
                    <br>
                    <i>Giờ duyệt: 5h30 - 12h - 14h - 19h (có thể sẽ trễ một chút do ad khá bận ạ)</i>
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
                <?php if(isset($_REQUEST['info_form'])){ ?>
                    <?php if($_REQUEST['info_form'] == "successfully"){?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thành Công!</strong> Chúng tôi đã nhận được confession của bạn rùi, chúng tôi sẽ kiểm duyệt sớm thôi, nếu bạn không thấy confession của mình thì hãy liên hệ với chúng tôi với đường link <a href="https://www.tranquochuy.ga" target="_blank">sau</a>! Xin Cám Ơn Rất Nhiều.
                        </div>
                    <?php }?>
                <?php } ?>
                <form action="admin/includes/form/form.php" method="POST">  
                    <div class="form-group">
                        <textarea id="message" name="message" class="form-control" placeholder="Xin mời để lại tâm sự" rows="2" required></textarea>
                    </div>   
                    <button class="btn btn-primary me-2" type="submit" name="submit">Gửi nè :></button>
                    <button class="btn btn-danger" type="reset">Xóa Thông Tin Nhập!</button>
                </form>
            </div>
        </div>
    </div>

    <!-- PHẦN CHÂN TRANG -->
    <footer>
        <div class="container">
            <p>Copyright &copy; Quoc Huy. All Rights Reserved. Coded by<a href="https://www.tranquochuy.ga" target="_blank"> Quoc Huy</a></Ơ>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>