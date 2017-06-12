<?php

	class Load {
		function view( $file_name, $data = null ) 
		{
			if( is_array($data) ) {
				extract($data);
			}
			if (!is_file(APP_ROOT.'/app/views/' . $file_name))
				return false;
			
			include APP_ROOT.'/app/views/' . $file_name;
			return true;
		}
	}
