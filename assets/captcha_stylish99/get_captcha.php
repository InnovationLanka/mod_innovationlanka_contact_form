<?php

define( '_JEXEC', 1 );
define( 'JPATH_BASE', realpath(dirname(__FILE__).'/../../../../' ));
require_once ( JPATH_BASE. '/includes/defines.php' );
require_once ( JPATH_BASE. '/includes/framework.php' );
$mainframe = JFactory::getApplication('site');
$mainframe->initialise();

$string = '';

for ($i = 0; $i < 5; $i++) {
	$string .= chr(rand(97, 122));
}

$session = JFactory::getSession();
$session->set('random_number', $string);

//$_SESSION['random_number'] = $string;

$dir = 'fonts/';

$image = imagecreatetruecolor(165, 50);

// random number 1 or 2
$num = rand(1,2);
if($num==1)
{
	$font = "Capture it 2.ttf"; // font style
}
else
{
	$font = "Molot.otf";// font style
}

// random number 1 or 2
$num2 = rand(1,2);
if($num2==1)
{
	$color = imagecolorallocate($image, 113, 193, 217);// color
}
else
{
	$color = imagecolorallocate($image, 163, 197, 82);// color
}

$white = imagecolorallocate($image, 255, 255, 255); // background color white
imagefilledrectangle($image,0,0,399,99,$white);

imagettftext ($image, 30, 0, 10, 40, $color, $dir.$font, $string);

header("Content-type: image/png");
imagepng($image);

?>