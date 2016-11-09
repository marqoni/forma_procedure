<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div class="row" id="profile">

<b id="welcome">Добродошли: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</div>
<div>
	<?php include('Forma_Procedure.php'); ?>
</div>
</body>
</html>

