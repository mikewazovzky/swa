<?php
require_once 	'../admin/data.php';
require_once 	'../admin/lib.php';

$topic 	= clearStr($_POST['topic']);
$img = clearStr($_POST['img']);
$text = clearStr($_POST['text']);
$url 	= clearStr($_POST['url']);
	
if(!createRecord($topic, $img, $text, $url)) {
	echo "ERROR: can'not create Record!";
} else {
	header("Location: ../news.php");
	exit;
}		
?>