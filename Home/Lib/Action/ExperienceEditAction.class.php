<?php
class ExperienceEditAction extends Action{
	public function index(){
		
		//echo $_SERVER['DOCUMENT_ROOT'];

		$isLogin = $_SESSION['isLogin'];
		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
	//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
		$experience = M('Production')->where(array('id'=>$_GET['id']))->find();

		$str0 = $experience[title];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str0 = stripslashes($str0);
		$experience[title] = $str0;

		$str1 = $experience[summary];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str1 = stripslashes($str1);
		$experience[summary] = $str1;
		
		$str2 = $experience[content];	
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str2 = stripslashes($str2);
		$experience[content] = $str2;

		$this->assign('myself', $myself);

		if( $isLogin == 1){
			$this->assign('current_page', 'home_page');
			$this->assign('exp', $experience);
			$this->display();
		}
		else{
			$this->error('登录后才能发表文章哦，快点去登录吧！', './Login/index');
		}
	}

	public function experienceEdit(){
		


			$updateTime = date("Y-m-d H:m:s");
			$_POST['addtime'] = $updateTime;

			$_POST['author'] = $_SESSION['username'];

			if($_POST['title'] != null && $_POST['title'] != ''){
				$save = M('Production')->where(array('type'=>'experience', 'id'=>$_GET['id']))->save($_POST);
			}
			

			if($save){
				$this->success('经历 "'.$_POST['title'].'" 修改成功！', '__APP__/Experience?id='.$_GET['id']);
			}
			else{
				$this->error('经历 "'.$_POST['title'].'" 修改失败！', 'index?id='.$_GET['id']);
			}
		

		
	
	}

	public function ExperienceDelete(){
		
		$delete = M('Production')->where(array('id'=>$_GET['id']))->delete();
		$delete2 = M('Comment')->where(array('id'=>$_GET['id']))->delete();

		if($delete){
			$this->success('经历 "'.$_GET['title'].'" 删除成功！', '__APP__/Profile?member='.$_SESSION['username']);
		}
		else{
			$this->error('经历 "'.$_POST['title'].'" 删除失败！', '__APP__/Experience?id='.$_GET['id']);
		}
	}
}