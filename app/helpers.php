<?php

/**
 * Generates file name as a hashed string transformed into alfa-numerical string 
 *
 * @param string $nameBase - original string to be converted
 * @param integer $nameLength - maximum $fileName length 
 *
 * @return string $fileName
 **/

function generateFileName($nameBase, $nameLength = 20) 
	{
		$chars = str_split(bcrypt($nameBase));
		$str = '';
		
		foreach($chars as $ch) {
			if (ctype_alnum ($ch)) {
				$str .= $ch;				
			}
			
			if (strlen($str) >= $nameLength) {
				break;
			}
		}		
		return $str;		
	}
	
	
/**
 * Upload user file to a server 
 *
 * @param Laravel File Object $file - file to be uploaded
 * @param string $path - new file location  
 * @param string $name - new file name 
 *
 * @return bool $status, true if success
 **/	
function fileUpload($file, $path, $name)
{
	$filePath = base_path() . $path;
	$fileName = $filePath . $name;
	
	if (file_exists($fileName)) {
		unlink($fileName);
	}
	
	return $file->move($filePath, $name);
}