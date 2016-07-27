<?php include_once '../header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Grand Canyon, Arizona, USA, Большой Каньон, Гранд Каньон, Аризона, США</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/sw-a.css">
	<link rel="stylesheet" href="../css/location.css">
	<link rel="stylesheet" href="../lightbox/dist/css/lightbox.min.css">
	<meta property="og:url"         content="http://sw-adventure.xyz/locations/grandcanyon.php" />
	<meta property="og:type"        content="website" />
	<meta property="og:title"  		content="Hiking Grand Canyon, Arizona, USA" />
	<meta property="og:description"	content="Небольшая прогулка по Большому Каньону. Дневной поход к реке Колорадо и обратно. Фотоотчет." />
	<meta property="og:image"		content="http://i.imgur.com/WEhei0u.jpg" />
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
	<?php include 'grandcanyon.html';?>
<!------------------------- Facebook Buttons -------------------------------->
	<br>
	<div class="fb-like" 
		data-href="http://sw-adventure.xyz/locations/grandcanyon.php" 
		data-width="400px" 
		data-layout="standard" 
		data-action="like" 
		data-show-faces="false" 
		data-share="true">
	</div>
</div>	
<hr>
<?php include '../footer.php'; ?>
<script src="../lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>