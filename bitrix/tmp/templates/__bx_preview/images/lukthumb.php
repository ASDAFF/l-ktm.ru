<?php
header("Content-type: image/png");

$_GET['mode']="ins";
if(file_exists("../../../".$_GET['img']) && $_GET['img'])
  {
  if(strtolower(substr($_GET['img'],strlen($_GET['img'])-4,4)==".jpg") || strtolower(substr($_GET['img'],strlen($_GET['img'])-4,4)=="jpeg"))
    $img = imagecreatefromjpeg("../../../".$_GET['img']);
  else if(strtolower(substr($_GET['img'],strlen($_GET['img'])-4,4)==".gif"))
    $img = imagecreatefromgif("../../../".$_GET['img']);
  else if(strtolower(substr($_GET['img'],strlen($_GET['img'])-4,4)==".png"))
    {    $img = imagecreatefrompng("../../../".$_GET['img']);
//    imagealphablending($img, true);
    imagesavealpha($img, true);
    }
  }
else
  {
  $img = imagecreatefrompng("../../../images/noimg.png");
//  imagealphablending($img, true);
  imagesavealpha($img, true);
  }

$frame=imagecreatefrompng("thumbframe_".$_GET['color'].".png");

$sx=imagesx($frame);
$sy=imagesy($frame);


$ratiodst=$sx/$sy;
$ratiosrc=imagesx($img)/imagesy($img);

if($ratiosrc>$ratiodst)//height
  {
  if($_GET['mode']=="crop")
    {
    $newsy=$sy;
    $newsx=$ratiosrc*$sy;
    }
  else
    {
    $newsx=$sx;
    $newsy=$sx/$ratiosrc;
    }
  }
else
  {
  if($_GET['mode']=="crop")
    {
    $newsx=$sx;
    $newsy=$sx/$ratiosrc;
    }
  else
    {
    $newsy=$sy;
    $newsx=$ratiosrc*$sy;
    }
  }


$res = imagecreatetruecolor($sx,$sy);
    imagealphablending($res, true);
//    imagesavealpha($res, true);
//$color=imagecolorallocate($res,255,0,255);
//imagefilledrectangle($res,0,0,$sx,$sy,$color );

imagesavealpha($res, true);
$transPng=imagecolorallocatealpha($res,0,0,0,127);
imagefill($res, 0, 0, $transPng);


imagecopyresampled($res,$img,($sx-$newsx)/2,($sy-$newsy)/2,0,0,$newsx,$newsy,imagesx($img),imagesy($img));
imagecopy($res,$frame,0,0,0,0,$sx,$sy);

//imagecolortransparent($res,$color);
imagepng($res);
?>