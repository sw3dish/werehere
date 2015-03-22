<?php
function dump($data = false,$die = true, $ip_address=false){
	if(!$ip_address || $ip_address == $_SERVER["REMOTE_ADDR"]){
		echo '<pre>';
		var_dump($data);
		echo '</pre>';

		if($die) die();
	}
}

?>