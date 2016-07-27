<?php 
include 'header.php'; 
$page = strtolower(trim(strip_tags($_GET['page'])));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Site Info: Travel USA South-West Nevada Uta Arizona California</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/sw-a.css">
	<link rel="stylesheet" href="../css/location.css">
</head>

<body>
<!------------------------- Facebook Plugin -------------------------------->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!------------------------- end of Facebook Plugin ------------------------->

<div id='root'> <!-- root container определяющий размер зоны просмотра-->
	<?php showHeader("Главная", $menu);?>
<!-------------------- Content Area ------------------------------------>	
	<?php
		switch ($page) {
		case 'bryce': 			include 'locations/bryce.html'; 		break;
		case 'grandcanyon': 	include 'locations/grandcanyon.html'; 	break;
		default:				include 'under_construction.html'; 		break;
	}
	?>
<!------------------------- Facebook Buttons -------------------------------->
	<br>
		<div class="fb-like" data-href="http://sw-adventure.xyz/gk.php" data-width="50" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
	</div>	
<!-------------------- End of Content Area ------------------------------------>
<?php include 'footer.php'; ?>
</body>
</html>