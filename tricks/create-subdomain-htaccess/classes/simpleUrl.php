<?php
	class simpleUrl{
		var $site_path;
		function __construct($site_path){
			$this->site_path = $this->removeSlash($site_path);
		}
		function __toString(){
			return $this->site_path;
		}
		/*private function addSlash($string){
			if ($string[strlen($string) - 1] != '/') {
				$string .= '/';
			}
			return $string;
		}*/
		private function removeSlash($string){
			if ($string[strlen($string) - 1] == '/') {
				$string = rtrim($string, '/');
			}
			return $string;
		}
		function segment($segment){
			$url = str_replace($this->site_path, '', $_SERVER['REQUEST_URI']);
			$url = explode('/', $url);
			if (isset($url[$segment])) {
				return $url[$segment];
			}else{
				return false;
			}
		}
	}
?>