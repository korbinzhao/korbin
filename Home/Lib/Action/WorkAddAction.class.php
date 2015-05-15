<?php
class WorkaddAction extends Action{
	public function index(){
		//debug();
	

		
		$isLogin = $_SESSION['isLogin'];
		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();

//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);

		$this->assign('myself', $myself);

		if( $isLogin == 1){
			$this->assign('current_page', 'home_page');
			$this->display();
		}
		else{
			$this->error('登录后才能添加个人作品哦，快点去登录吧！', './Login/index');
		}
	}

	public function workAdd(){
				
				$_POST['type'] = 'Work';//此处一定要开头大写，因为在myWorks页面中超链接路径里要用到
				
				$_POST['addtime'] = date("Y-m-d H:m:s");

				$_POST['author'] = $_SESSION['username'];

				if($_POST['title'] != null && $_POST['title'] != ''){
					$add1 = M('Production')->add($_POST);
				}
				
				//将文章标题添加为一个标签
				$production = M('Production')->where(array('title'=>$_POST['title']))->find();
				
				$Tag = M("Tag"); // 实例化User对象
				$data['tagdetail'] = $_POST['title'];
				$add2 = $Tag->add($data);

				//在tagrelation表中添加标签(标题)和文章的关系
				$currentTag = M('Tag')->where(array('tagdetail'=>$_POST['title']))->find();
				if($currentTag){
					$Tagrelation = M('Tagrelation');
					$data['pid'] = $production['id'];
					$data['tagid'] = $currentTag['tagid'];
					$add3 = $Tagrelation->add($data);
				}

				//在tagrelation表中添加标签(作者)和文章的关系
				$currentTag = M('Tag')->where(array('tagdetail'=>$_POST['author']))->find();
				if($currentTag){
					$Tagrelation = M('Tagrelation');
					$data['pid'] = $production['id'];
					$data['tagid'] = $currentTag['tagid'];
					$add4 = $Tagrelation->add($data);
				}

				//在tagrelation表中添加标签(行业)和文章的关系
				$currentTag = M('Tag')->where(array('tagdetail'=>$_POST['industry']))->find();
				if($currentTag){
					$Tagrelation = M('Tagrelation');
					$data['pid'] = $production['id'];
					$data['tagid'] = $currentTag['tagid'];
					$add5 = $Tagrelation->add($data);
				}

				//在tagrelation表中添加标签(岗位)和文章的关系
				$currentTag = M('Tag')->where(array('tagdetail'=>$_POST['post']))->find();
				if($currentTag){
					$Tagrelation = M('Tagrelation');
					$data['pid'] = $production['id'];
					$data['tagid'] = $currentTag['tagid'];
					$add6 = $Tagrelation->add($data);
				}
						
				if($add1 && $add2){
					$this->success('个人作品 '.$_POST['title'].' 添加成功！', '__APP__/Profile/myWorks?member='.$_SESSION['username']);
				}
				else{
					$this->error('个人作品 '.$_POST['title'].' 添加失败！', 'index');
				}
			

	}

}