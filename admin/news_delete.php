<?
require_once 	'../admin/data.php';
require_once 	'../admin/lib.php';
	
$id = clearInt($_GET['id']);

if($id) {
	deleteRecord($id);
	header('Location: ../news.php');
	exit;
}
?>