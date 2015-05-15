<?php
	class PostExistedAction extends Action{
		public function index(){
			define('APP_DEBUG',false);	
			$names = M('Post')->Distinct(true)->field('postname')->select();
			echo json_encode($names);
		}
	}