<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Добродошли</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div id="main">
<div id="login">
<h2>Пријава</h2>
<form action="" method="post">
<label>Корисничко име :</label>
<input id="name" name="username" placeholder="корисничко име" type="text">
<label>Лозинка :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</div>
</body>
</html>