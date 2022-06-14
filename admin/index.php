<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="https://www.thcsminhdam.ga/images/278028755_106243695388538_8023480144971372750_n.png">
	<title>THCS Minh Đạm - ADMIN</title>
  <link rel="icon" href="images/248068027_112816467881817_758946115097250792_n.jpg">
  <link rel="stylesheet" href="css/style6.css">
</head>
<body>
  <form class="box" action="includes/form/login.php" method="post">
    <h1>Đăng nhập!</h1>
    <input type="text" name="uname" placeholder="Tên đăng nhập">
    <input type="password" name="password" placeholder="Mật khẩu">
    <?php if (isset($_GET['error'])) { ?>
			<p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
		<?php } ?>
    <input type="submit" name="" value="Đăng Nhập">
  </form>
</body>
</html>
