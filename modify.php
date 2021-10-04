<?php 
	require_once('json_util.php');
	modify_json('class.json', $_GET['index'], $_GET['name']);
?>
<h2><?php echo ("Modification Complete");?></h2>
<a href = "index.php">Home</a>