<?php
	$category_root_url='.';
	$handle = opendir($category_root_url);
	$category_array = array();

	$image_extensions = Array('jpg', 'png', 'gif', 'bmp');

	while($category = readdir($handle)){
		if(is_file($category_root_url.'/'.$category) && ($category != '.' && $category != '..' && array_search(strtolower(pathinfo($category, PATHINFO_EXTENSION)), $image_extensions) !== false))
			$category_array[] = strtolower($category);
	}

	closedir($handle);

	sort($category_array);

	if (count($category_array)>0){
		echo '<ul>';
		foreach ($category_array as $category){
			echo '<li>'.pathinfo($category, PATHINFO_EXTENSION).'</li>';
		}
		echo '</ul>';
	}
?>
