<?php
class SearchAction extends Action{
	public function index(){
		
		$keyword = $_POST['keyword'];
		

		//通过关键词与标签匹配，查询除结果
		$model=new Model();
        
		$map['tag.tagdetail'] = array('like',"%".$keyword."%"); 

		$model2=$model->table('kor_tagrelation rela, kor_tag tag,kor_production p')
			  ->field('p.*, tag.tagdetail')
              ->where('rela.pid=p.id and rela.tagid = tag.tagid');
		$results=$model2->where($map)->select();

		$this->assign('results', $results);
		$this->assign('current_page', 'home_page');
		$this->display();
	}

}