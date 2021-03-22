<?php
header('content-type:image/jpeg');
$font=realpath('BRUSHSCI.TTF');
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$date=date('d F,Y');
$name="Faizan Ansari";
imagettftext($image,40,0,400,420,$color,$font,$name);
imagettftext($image,20,0,450,600,$color,$font,$date);
imagejpeg($image);

imagedestroy($image);


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="">
	<h1>WelCome To Engineerng Institute Raipur(C.G)</h1>
	
	
	</form>
</body>
</html>