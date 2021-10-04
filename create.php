<?php
	include 'json_util.php';
	
	$var = read_content('class.json');
	$duplicate = $var [rand(0, count($var)-1)];
	array_push($var,$duplicate);
	write_json('class.json', $var);
?>
<h2><?php echo ("Look, now there is a duplicate of this user!");?></h2>
<br>
<a href = "index.php">Home</a> 
	