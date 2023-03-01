<?php
if (isset($_POST['add'])){
$font=realpath('Arimo-SemiBold.ttf');
$image=imagecreatefromjpeg("hh11.jpg");
$color=imagecolorallocate($image,51,51,102);
imagettftext($image,45,0,650,650,$color,$font ,$_POST['name']);
imagettftext($image,45,0,545,1090,$color,$font ,$_POST['teacher']);
imagejpeg($image,"student/".$_POST['name'].".png");
imagedestroy($image);
}
echo '<center><h1>Successfuly Add Certificate</h1></center>';
?>