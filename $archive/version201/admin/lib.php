<?
// очистка данных (Str & Int) полученных с помощью $_GET или $_POST
function clearStr($data) {
	global $link;
	return mysqli_real_escape_string($link, trim(strip_tags($data)));	
}
function clearInt($data) {
	return abs((int)$data);	
}
// Прочитать все новости из базы данных и вернуть в виде ассоциативного массива 
function getRecords() {
	global $link;	
	$sql = "SELECT id, topic, img, text, url, UNIX_TIMESTAMP(datetime) as dt
					FROM news 
					ORDER BY dt DESC LIMIT 100";
	$result = mysqli_query($link, $sql) or die('ERROR #'.mysqli_errno($link).': '.mysqli_error($link));
	mysqli_close($link);
	//$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$items = array();
	while($row = mysqli_fetch_assoc($result))
		$items[] = $row;
	mysqli_free_result($result);
	return $items;	
}
// удалить новость из базы данных, в качестве параметра id записи базы данных
function deleteRecord($id) {
	global $link;	
	if($id) {
		$sql = "DELETE FROM news WHERE id = $id";
		mysqli_query($link, $sql) or die('ERROR #'.mysqli_errno($link).': '.mysqli_error($link));
	}
}
// создать запись (новость) в базе данных
function createRecord($topic, $img, $text, $url) {
	global $link;
	$sql = "INSERT 	INTO news (
						topic, 
						img, 
						text, 
						url) 
					VALUES (?, ?, ?, ?)";
	if(!$stmt = mysqli_prepare($link, $sql))
		return false;
	mysqli_stmt_bind_param($stmt, 'ssss', $topic, $img, $text, $url);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	return true;
}
?>