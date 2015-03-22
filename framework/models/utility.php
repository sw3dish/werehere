<?php
namespace slimlocal\models;

class utility {

	public static function include_all_files_in_directory($dir,$recursive=false){
		if(is_dir($dir)){
			if ($handle = opendir($dir)) {
			    while (false !== ($entry = readdir($handle))) {
			    	$file_type = filetype($dir . "/" . $entry);
			        if ($entry != "." && $entry != "..") {
			        	if($file_type == "file"){
			        		require_once $dir . "/" . $entry;
			        	}elseif($file_type == "dir"){
			        		if($recursive){
				        		self::include_all_files_in_directory($dir . "/" . $entry,true);
				        	}
			        	}
			        }
			    }
			    closedir($handle);
			}
		}
	}

	

}
?>