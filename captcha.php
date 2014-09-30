<?php
session_start(); 
$_SESSION["simpankata"]="";
//if (!extension_loaded('gd')) dl('gd.so');
if (!extension_loaded('gd')) die('no GD');
//if (!isset($captcha_word) || !$captcha_word)
	//$ee = rand(10,99);
	$uu = rand(111111,999999);
	$captcha_word=$uu;
  
// fungsi
//$FONT_PATH = getcwd();
function make_captcha($word) {
  global $FONT_PATH;
  
  // parameter untuk teks
  $angle = rand(1,1);
  $size = rand(14,15);
  $fontfile = "arial.ttf";
  $coords = imagettfbbox($size, $angle, $fontfile, $word);
  
  // ukuran image
  $width = abs($coords[4]-$coords[0])+40;
  $height = abs($coords[5]-$coords[1])+10;

  // parameter distorsi
  $amplitude = rand(1,1);
  $period_factor = rand(1,10)/10;
  $offset = rand(1,1);
  
  // buat gambar
  $im = ImageCreate($width, $height);
  $im2 = ImageCreate($width, $height+$amplitude*2);
  //$rand1 = rand(150,255);
  $bg_color = imagecolorallocate($im, 51, 51, 51);
  //$rand2 = rand(0,128);
  $text_color = imagecolorallocate($im, 255, 255, 255);
  imagecopy($im2,$im,0,0,0,0,1,1);
  imagettftext($im, $size, $angle, $size, $size*1.5, 
               $text_color, $fontfile, $word);
  
  // distorsikan teks
  for ($i=0; $i<$width; $i++) {
    $y = sin(deg2rad($offset + $i*$period_factor))*$amplitude;
    imagecopy($im2, $im, $i, $y, $i, 0, 1, $height);
  }
  
  return $im2;
}

if (isset($_GET["action"]) && $_GET["action"] == 'captcha') {

  header("Content-Type: image/png");
  imagepng(make_captcha($captcha_word));
	$_SESSION["simpankata"]=$captcha_word;
}
?>