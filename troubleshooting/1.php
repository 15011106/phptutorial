<?php
$filename = './writeme.txt';
if (is_writable($filename)){
	echo $filename . ' is writable';
}
else {
	echo $filename . ' is not writable';
}
?>