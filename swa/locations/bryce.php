<?php include_once '../header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Bryce Canyon Uta USA Брайс Каньон Юта Сша</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/sw-a.css">
	<link rel="stylesheet" href="../css/location.css">
</head>

<body>
<!------------------------- Facebook Plugin (update IT for every page) ------>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id='root'> <!-- root container определяющий размер зоны просмотра-->
	<?php showHeader("Главная", $menu2);?>
	<?php include 'bryce.html';?>
<!------------------------- Facebook Buttons -------------------------------->
	<br>
	<div class="fb-like" data-href="http://sw-adventure.xyz/locations/bryce.php" data-width="400px" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
</div>	
<hr>
<?php include '../footer.php'; ?>

</body>
</html>