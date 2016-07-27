<?
if($_SERVER[REQUEST_METHOD] == 'POST') {
	$text = trim(strip_tags($_POST['text']));
	mail('admin@sw-adventure.xyz', 'Message from sw-adventure.xyz', $text);
	header("Location: contacts.html");
}
$text = ($text) ? $text : 'no message';
?>