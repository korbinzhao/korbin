<?php
class PraiseAddAction extends Action{
	
	
	public function likeAdd(){
			//define('APP_DEBUG', true);
			 
			$_POST['addtime'] = date("Y-m-d H:m:s");

			//$essay = M('Essay')->find($_GET['essayno']);
			$data['praisetype'] = $_POST['praisetype'];
			$data['targetno'] = $_POST['targetno'];
			$data['author'] = $_SESSION['username'];
			$data['targetauthor'] = $_POST['targetauthor'];
			$data['addtime'] = $_POST['addtime'];
			$data['positive'] = $_POST['positive'];
			
			//echo $data;
			$praise = M('Praise');
			$add = $praise->add($data);

			$likecount =  M('Praise') ->where(array('praisttype'=>$_POST['praisetype'] ,'targetno'=>$_POST['targetno'], 'positive'=> $_POST['positive']))->count();
		
			//$dislikecount = $praise ->where(array('praisttype'=>'essaypraise' ,'targetno'=>$_GET['essayno'], 'positive'=>'false'))->count();
		
			
			echo $likecount;
			
					
	}

	public function dislikeAdd(){
			//define('APP_DEBUG', true);
			 
			$_POST['addtime'] = date("Y-m-d H:m:s");

			//$essay = M('Essay')->find($_GET['essayno']);
			$data['praisetype'] = $_POST['praisetype'];
			$data['targetno'] = $_POST['targetno'];
			$data['author'] = $_SESSION['username'];
			$data['targetauthor'] = $_POST['targetauthor'];
			$data['addtime'] = $_POST['addtime'];
			$data['positive'] = $_POST['positive'];
			
			//echo $data;
			$praise = M('Praise');
			$add = $praise->add($data);

			//$likecount = $praise ->where(array('praisttype'=>'essaypraise' ,'targetno'=>$_GET['essayno'], 'positive'=>'true'))->count();
			$dislikecount = M('Praise') ->where(array('praisttype'=>$_POST['praisetype'] ,'targetno'=>$_POST['targetno'], 'positive'=> $_POST['positive']))->count();
		
			
			echo $dislikecount;
			
					
	}

	
	/*
	
	public function praiseAdd(){
			//define('APP_DEBUG', true);
			 
			$_POST['addtime'] = date("Y-m-d H:m:s");

			//$essay = M('Essay')->find($_GET['essayno']);
			$data['praisetype'] = $_POST['praisetype'];
			$data['targetno'] = $_POST['targetno'];
			$data['author'] = $_SESSION['username'];
			$data['targetauthor'] = $_POST['targetauthor'];
			$data['addtime'] = $_POST['addtime'];
			$data['positive'] = $_POST['positive'];
			
			//echo $data;
			$praise = M('Praise');
			$add = $praise->add($data);

			$likecount = $praise ->where(array('praisttype'=>'essaypraise' ,'targetno'=>$_GET['essayno'], 'positive'=>'true'))->count();
			$dislikecount = $praise ->where(array('praisttype'=>'essaypraise' ,'targetno'=>$_GET['essayno'], 'positive'=>'false'))->count();
		
			if('true' == $_POST['positive']){
				echo $likecount;
			}
			else if('false' == $_POST['positive']){
				echo $dislikecount;
			}
					
	}
	*/

}