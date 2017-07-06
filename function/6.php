<?php
$test =1;
function get_argumets(){
	global $test;
	$test =2;
}

echo get_argumets();
echo $test;
?>