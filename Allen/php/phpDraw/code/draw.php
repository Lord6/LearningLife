<?php

//�]�w�s������X���Y
header('Content-type: image/png');
/*
//���J�Ϥ�
$img=@imagecreatefromjpeg("wei.jpg");
//��XJPEG�v�����s����
imagejpeg($img);

*/
//110 width 100 height
$img=@imagecreate(110,100) or die("�L�k�إ�");
//255 255 0 RGB�� 60�z����  0~127 0�������z�� 127�����z�� 
$backgroundColor=imagecolorallocatealpha($img,255,255,0,60);
$color=imagecolorallocate($img,255,0,0);
$x1=10;
$y1=0;
$x2=10;
$y2=50;
//(x1,y1)��1�I�y��,(x2,y2)��2�I�y��
imageline($img,$x1,$y1,$x2,$y2,$color);
//�x��(10,50)���W���y��,(40,80)�k�U���y��
imagerectangle($img,10,50,40,80,$color);
imagestringup($img,5,40,40,'hello',$color);
imagepng($img);
//����O����
imagedestroy($img);
?>