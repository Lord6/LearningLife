<?php

//設定瀏覽器輸出表頭
header('Content-type: image/png');
/*
//載入圖片
$img=@imagecreatefromjpeg("wei.jpg");
//輸出JPEG影像到瀏覽器
imagejpeg($img);

*/
//110 width 100 height
$img=@imagecreate(110,100) or die("無法建立");
//255 255 0 RGB值 60透明度  0~127 0完全不透明 127完全透明 
$backgroundColor=imagecolorallocatealpha($img,255,255,0,60);
$color=imagecolorallocate($img,255,0,0);
$x1=10;
$y1=0;
$x2=10;
$y2=50;
//(x1,y1)第1點座標,(x2,y2)第2點座標
imageline($img,$x1,$y1,$x2,$y2,$color);
//矩形(10,50)左上角座標,(40,80)右下角座標
imagerectangle($img,10,50,40,80,$color);
imagestringup($img,5,40,40,'hello',$color);
imagepng($img);
//釋放記憶體
imagedestroy($img);
?>