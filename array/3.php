<?php
function get_members(){
	return ['a','b','c'];
}

$members = get_members();

for ($i = 0; $i<count($members); $i++){
	echo ucfirst($members[$i]).'<br/>';
}
?>