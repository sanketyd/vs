<?php

class Model {
	private function dir_list($path){
		$handle = opendir($path);
		$list = array();

		while($entity = readdir($handle)){
			if($entity != '.' && $entity != '..')
				$list[] = $entity;
		}

		closedir($handle);

		//natsort($list);
		return $list;
	}

	public function get_announcements()
	{
		return array_slice(Spyc::YAMLLoad(APP_ROOT . '/app/db/announcements.yaml'), 0, NUM_ANNOUNCEMENTS);
	}
	
	public function get_menu()
	{
		$file = file(APP_ROOT . '/app/db/menu.yaml');
		$file = implode("\n", $file);	//Convert to string

		$file = strtr($file, array(
				'%APP_URL%'=> APP_URL
				));

		return Spyc::YAMLLoad($file);
	}

	public function get_SwamiVivekananda_pics(){
		return $this->dir_list(APP_ROOT . '/res/images/swami_vivekananda');
	}

	public function get_SwamiVivekananda_quotations(){
		return Spyc::YAMLLoad(APP_ROOT . '/app/db/gallery_quotations.yaml');
	}
}
