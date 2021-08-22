<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" href="img/dejalu.gif" type="image/gif">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <form method="POST" action="proses_login.php">
	<h2>SELAMAT DATANG, SILAHKAN LOGIN</h2>
	<br>
      <label>
        <span>Email Address</span>
        <input type="text" id="email" name="email" required maxlength="50">
      </label>
      <label>
        <span>Password</span>
        <input type="password" id="pass" name="pass" required>
      </label>
      <button class="submit" type="submit"><a style="color:white">Log In</a></button>
    </form>
 

      <div class="social-media">
        <ul>
          <li><img src="img/facebook.png"></li>
          <li><img src="img/twitter.png"></li>
          <li><img src="img/linkedin.png"></li>
          <li><img src="img/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Belum punya akun?</h2>
          <p style="color:white">Daftar kan akun anda untuk menjadi anggota Perpustakaan Terpadu</p>
        </div>
        <div class="img-text m-in">
          <h2>Sudah punya akun ?</h2>
          <p>Yuk Login sekarang!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Register</span>
          <span class="m-in">Log In</span>
        </div>
      </div>
      <div class="form sign-up">
        <form method="POST" action="proses_regitrasi.php">
        <h2>REGISTER</h2>
        <br>
        <label>
          <span>Name</span>
          <input type="text" name="nama" required>
        </label>
        <label>
          <span>Email</span>
          <input type="text" id="email" name="email" required maxlength="50">
        </label>
        <label>
          <span>Password</span>
          <input type="password" id="pass" name="pass" required>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="konfirmasi_pass" required>
        </label>
        <button type="submit" class="submit">Register Now</button>
      </form>
      </div>
    </div>
  </div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>