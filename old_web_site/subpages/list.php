<?php
	$directory='../' . $_GET['path'];
	$handle = opendir($directory);
	$file_array = array();

	$image_extensions = Array('jpg', 'png', 'gif', 'bmp');

	while($file = readdir($handle)){
		if(is_file($directory.'/'.$file) && ($file != '.' && $file != '..' && array_search(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $image_extensions) !== false))
			$file_array[] = strtolower($file);
	}

	closedir($handle);

	sort($file_array);

	echo '[ ';
	if (count($file_array)>0)
		echo '"' . implode('", "', $file_array) . '"';
	echo ']';

?>
