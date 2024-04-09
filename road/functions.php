<?php

require 'I18N/Arabic.php';
$Arabic = new \ArPHP\I18N\Arabic();
function textPrint($Arabic,$text,$index_image,$fontsize,$font_path,$xa,$ya,$color)
{
  $text = $Arabic->utf8Glyphs($text);
  $image_width = imagesx($index_image);
  $text_box = imagettfbbox($fontsize, 0, $font_path, $text);
  $x = ceil(($xa - $text_box[2]) / 2);
  $y = $ya;
  imagettftext($index_image, $fontsize, 0, $x, $y, $color, $font_path, $text);

}

function textPrintRTL($Arabic,$text,$index_image,$fontsize,$font_path,$xa,$ya,$color)
{
  $text = $Arabic->utf8Glyphs($text);
  $dimensions = imagettfbbox($fontsize, 0, $font_path, $text);
  $textWidth = abs($dimensions[4] - $dimensions[0]);
  $x = $xa - $textWidth;
  $y = $ya;
  imagettftext($index_image, $fontsize, 0, $x, $y, $color, $font_path, $text);
}

function countMoment()
{
  $use = file_get_contents('use.txt');
  $use++;
  $fp = fopen('use.txt', 'w');
  fwrite($fp, $use);
  fclose($fp);
}


// header('Content-Type: image/png');
