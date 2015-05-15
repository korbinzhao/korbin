<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($title); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" / >

</head>
	
	<body>
	<div id="web">
			<div id="bghead">
				
				<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
				
				<div id="header">
					<div id="logo"><a href="__APP__"><img src="__TMPL__/resource/images/logo.png"></a></div>
					<div id="nav" class="nav">
						<ul>
							<li><a id="home_page" href="__APP__">首页</a></li>
							<li><a id="careerwiki_page" href="__APP__/CareerWiki">职场维基</a></li>
							<!--
							<li><a id="careerbaike_page" href="__APP__/CareerWiki">职场百科</a></li>
							-->
							<li><a id="member_page" href="__APP__/Members">追梦者</a></li>
							<li><a id="aboutus_page" href="__APP__/AboutUs">关于我们</a></li>
							
							
						</ul>
					</div>
					<div id="contribute">
						<ul>
							<li>
								<a href="">投稿</a>
								<ul>
									<li><a id="article-add" href="__APP__/ArticleAdd">发表文章</a></li>
									<li><a id="work-add" href="__APP__/WorkAdd">上传作品</a></li>
									<li><a id="experience-add" href="__APP__/ExperienceAdd">添加经历</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
					<div id="login">
						<ul>
							<div id="part-logout">
								<li><a href="__ROOT__/index.php/Profile"><?php echo ($myself["username"]); ?></a></li>
								<li><a href="__ROOT__/index.php/Login/logout">退出</a></li>
							</div>
							<div id="part-login">
								<li><a href="__ROOT__/index.php/Register">注册</a></li>
								<li><a href="__ROOT__/index.php/Login">登录</a></li>
							</div>
						</ul>
						<!--使用hidden标签来获取用户登录信息，用于js获取div #login中part-login和part-logout的显示与否-->
						<input type="hidden" id="myself" value="<?php echo ($myself["username"]); ?>"/>
					</div>
					
				</div>
			
			</div>
			<div id="container">
			
		
		<div id="container-wrap">
			<div id="aside-left">
	<div id="nav-aside">
		<ul id="mynav">
			<li><a href="">行业
				<span class="arrow">></span></a>
				
				<ul>
					<li><a href="__APP__/Category?industry=Internet">IT/互联网/通信/电子</a>
					</li>
					<li><a href="__APP__/Category?industry=FMCG">金融/投资/财会</a>
					</li>
					<li><a href="__APP__/Category?industry=SupplyChain">广告/媒体/出版/艺术</a>
					</li>
					<li><a href="__APP__/Category?industry=RetailAndLuxury">市场/销售/客服</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">人事/行政/管理</a>
					</li>
					<li><a href="__APP__/Category?industry=Internet">建筑/房产/物业</a>
					</li>
					<li><a href="__APP__/Category?industry=FMCG">消费品/贸易/物业</a>
					</li>
					<li><a href="__APP__/Category?industry=SupplyChain">咨询/法律/认证</a>
					</li>
					<li><a href="__APP__/Category?industry=RetailAndLuxury">生产/制造/营运/采购</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">生物/制药/医疗/护理</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">教育/培训/翻译</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">科研/环保/休闲/其他</a>
					</li>
				</ul>
			</li>
			<li><a href="">原创文章
				<span class="arrow">></span></a>
				
				<ul>
					<li><a href="__APP__/Category?industry=Internet">互联网</a>
					</li>
					<li><a href="__APP__/Category?industry=FMCG">快消</a>
					</li>
					<li><a href="__APP__/Category?industry=SupplyChain">供应链</a>
					</li>
					<li><a href="__APP__/Category?industry=RetailAndLuxury">零售+奢侈品</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">化工</a>
					</li>
				</ul>
			</li>
			<li><a href="">原创作品
			<span class="arrow">></span></a>
				<ul>
					<li><a href="__APP__/Category?industry=Internet">互联网</a>
					</li>
					<li><a href="__APP__/Category?industry=FMCG">快消</a>
					</li>
					<li><a href="__APP__/Category?industry=SupplyChain">供应链</a>
					</li>
					<li><a href="__APP__/Category?industry=RetailAndLuxury">零售+奢侈品</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">化工</a>
					</li>
				</ul>
			</li>
			<li><a href="">我的经历
				<span class="arrow">></span></a>
				
				<ul>
					<li><a href="__APP__/Category?industry=Internet">互联网</a>
					</li>
					<li><a href="__APP__/Category?industry=FMCG">快消</a>
					</li>
					<li><a href="__APP__/Category?industry=SupplyChain">供应链</a>
					</li>
					<li><a href="__APP__/Category?industry=RetailAndLuxury">零售+奢侈品</a>
					</li>
					<li><a href="__APP__/Category?industry=ChemicalIndustry">化工</a>
					</li>
				</ul>
			</li>
			<li><a href="">杂谈</a></li>
			<li><a href="">职业规划</a></li>
			<li><a href="">图书推荐</a></li>
			<li><a href="">酷站推荐</a></li>
			
		</ul>
	</div>
	
	<div id="books-recommended">
		<p class="content-title">
			学习用书
		</p>
		<ul class="content-list">
			<li>
				<a target="blank" href="http://book.douban.com/subject/10546125/">
					<div class="book-img"><img src="__TMPL__/resource/images/JavaScript高级程序设计.jpg"/></div>
					<dl class="book-info">
						<dt>JavaScript高级程序设计</dt>
						<dd>
							<strong>推荐：</strong>
							全能前端人员必读之经典
						</dd>
					</dl>
				</a>
				<!--line-->
				<li>
				<a target="blank" href="http://book.douban.com/subject/4736167/">
					<div class="book-img"><img src="__TMPL__/resource/images/精通CSS.jpg"/></div>
					<dl class="book-info">
						<dt>精通CSS：高级Web标准解决方案</dt>
						<dd>
							<strong>推荐：</strong>
							令人叫绝的CSS技术汇总
						</dd>
					</dl>
				</a>
			</li>
			<!--line-->
			<li>
				<a target="blank" href="http://book.douban.com/subject/5914587/">
					<div class="book-img"><img src="__TMPL__/resource/images/启示录.jpg"/></div>
					<dl class="book-info">
						<dt>启示录 : 打造用户喜爱的产品</dt>
						<dd>
							<strong>推荐：</strong>
							产品经理必读书籍
						</dd>
					</dl>
				</a>
			</li>
			<!--line-->
			<li>
				<a target="blank" href="http://book.douban.com/subject/6709783/">
					<div class="book-img"><img src="__TMPL__/resource/images/浪潮之巅.jpg"/></div>
					<dl class="book-info">
						<dt>浪潮之巅</dt>
						<dd>
							<strong>推荐：</strong>
							不仅讲述科技工业的历史，更重在揭示它的规律性
						</dd>
					</dl>
				</a>
			</li>
		</ul>
	</div>
</div>
			<div id="main">
				<div id="content-essay">
						<div class="essay">
							
							<div class="essay-header">
							<!--中间大标题下的小字 -->
								<h2 class="essay-title"><a href="__APP__/Essay?id=<?php echo ($essay["id"]); ?>"><?php echo ($essay["title"]); ?></a></h2>
								<div class="essay-metas">
								<span class="muted">
								<i class="icon-user icon12"></i>
								<a class="inline hovercolor"  href="__APP__/Profile?member=<?php echo ($essay["author"]); ?>">
									<?php echo ($essay["author"]); ?>&nbsp;&nbsp;
								</a>
								</span>
							
								<span class="muted">
									<i class="icon-time icon12"></i><?php echo ($essay["addtime"]); ?>&nbsp;&nbsp;
									</span>
									<span class="muted">
									<i class="icon-type icon12"></i><?php echo ($essay["type"]); ?>类型&nbsp;&nbsp;
									</span>
								
									<span class="muted">
									<i class="icon-eye-open icon12"></i><?php echo ($essay["visits"]); ?>&nbsp;浏览&nbsp;&nbsp;
									</span>
									<span class="muted">
									<i class="icon-comment icon12"></i>？评论&nbsp;&nbsp;
									</span>
									
									<div class="right" name="edit" id="edit">
										<a  href="__APP__/ArticleEdit?id=<?php echo ($essay["id"]); ?>">编辑</a>
										<a  href="__APP__/ArticleEdit/articleDelete?id=<?php echo ($essay["id"]); ?>">删除</a>
										<input type="hidden"  id="targetno" value="<?php echo ($essay["id"]); ?>"/>
										<input type="hidden" id="motto" value="<?php echo ($myself["motto"]); ?>"/>
										<input id="commenttype" type="hidden" value="essaycomment"/>
									</div>
								</div>
								
							</div>
							
							<!--
							<div class="essay-header">
								<h2 class="essay-title">
									<a href=""><?php echo ($essay["title"]); ?></a>
									
								</h2>
								<div class="essay-metas">
									<div class="left">
										作者：<?php echo ($essay["author"]); ?>&nbsp;&nbsp;类型：<?php echo ($essay["type"]); ?>&nbsp;&nbsp;时间：<?php echo ($essay["addtime"]); ?>
									</div>
									<div class="right" name="edit" id="edit">
										<a  href="__APP__/ArticleEdit?id=<?php echo ($essay["id"]); ?>">编辑</a>
										<a  href="__APP__/ArticleEdit/articleDelete?id=<?php echo ($essay["id"]); ?>">删除</a>
										<input type="hidden"  id="targetno" value="<?php echo ($essay["id"]); ?>"/>
										<input type="hidden" id="motto" value="<?php echo ($myself["motto"]); ?>"/>
										<input id="commenttype" type="hidden" value="essaycomment"/>
									</div>
								</div>
								
							</div>
							-->
							
							<div class="essay-summary">
								<p><?php echo ($essay["content"]); ?></p>
							</div>
							
							<div class="box">
								<input type="hidden" id="praisetype" value="essaypraise"/>
								<div class="pos-btn" id="like" onclick="addLike(this)">
									<p id="add1" class="pos-btn">+1</p>
									<i class="icon-like icon12" title="喜欢"></i>
									<p id="add1" class="pos-btn">+1</p>
									<span id="likecount"  class="praisecount"><?php echo ($likecount); ?></span>
								</div>		
								<div class="pos-btn" id="dislike" onclick="addDislike(this);">
								
									<i class="icon-dislike icon12" title="没劲"></i>
									<p id="add2" class="pos-btn">+1</p>
									<span id="dislikecount" class="praisecount"><?php echo ($dislikecount); ?></span>
								</div>
							</div>
						</div>
				</div>
				<div id="comment" >
	<form id="form-add-comment" >
		<div id="add-comment" >
			 <div >
				<img  src="__ROOT__/Home/Uploads/<?php echo ($myself["username"]); ?>_middle.png"/>
				<textarea id="commenttext" /></textarea>
				
				
			</div>
			<div  id="tishi">
				<label id="result" ></label>
			</div>
			<div  >
				<input id="commentBtn" type="button" value="评论"  onclick="addComment();" />
			</div>
			<br class="clear"/>
		</div >
	</form>	
		
	
		<div id="display-comment" >
			<br id="insert-new-comment"/>
			<div class="display-each-comment" id="one-comment-display">
					<div id="display-detail">
						<div class="potrait">
							<a href="__APP__/Profile?member=<?php echo ($comment["username"]); ?>"  
										id="commentauthor" value="<?php echo ($comment["username"]); ?>" title="进入个人主页">
										<img class="potrait-middlepic" src="__ROOT__/Home/Uploads/<?php echo ($comment["username"]); ?>_middle.png"/>
							</a>
							
							<div class="left">
								<div class="line-one">
								<p> 
									<a class="username inline" href="__APP__/Profile?member=<?php echo ($comment["username"]); ?>"  
										 value="<?php echo ($comment["username"]); ?>" title="进入个人主页"><?php echo ($comment["username"]); ?></a>
										<input id="commentauthor" type="hidden" value="<?php echo ($comment["username"]); ?>"/>
										
								</p>
							
								<p class="motto"><?php echo ($comment["authormotto"]); ?></p>
									
								</div>
								<div class="line-two">
									<?php echo ($comment["commenttext"]); ?>
									
								</div>
							</div>
						</div>	

						
					</div>
					<div id="display-comment-bottom" >
						 <p id="time" class="time left"><?php echo ($comment["addtime"]); ?> </p> 
						 <a class="praise inline" href="__APP__/Comment/commentDelete?commentno=<?php echo ($comment["commentno"]); ?>">删除</a> 
						<!--
						 <a href="#" class="left praise">顶 </a>
						 <a href="#" class="left share"> 分享</a>	
						 <a href="#comment" class="left share" onclick="recomment();"> 回复</a>	
						 -->
					
					</div>
					<br class="clear"/>
				</div>
			<?php if(is_array($comments)): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?><div class="display-each-comment">
					<div id="display-detail">
						<div class="potrait">
							<a href="__APP__/Profile?member=<?php echo ($comment["username"]); ?>"  
										id="commentauthor" value="<?php echo ($comment["username"]); ?>" title="进入个人主页">
										<img src="__ROOT__/Home/Uploads/<?php echo ($comment["username"]); ?>_middle.png"/>
							</a>
							
							<div class="line">
								<div class="line-one">
								<p> 
									<a class="username inline" href="__APP__/Profile?member=<?php echo ($comment["username"]); ?>"  
										 value="<?php echo ($comment["username"]); ?>" title="进入个人主页"><?php echo ($comment["username"]); ?></a>
										<input name="commentauthor" type="hidden" value="<?php echo ($comment["username"]); ?>"/>
								</p>
							
								<p class="motto"><?php echo ($comment["authormotto"]); ?></p>	
								</div>
								<div class="line-two"><?php echo ($comment["commenttext"]); ?></div>
							</div>
						</div>	

						
					</div>
					<div id="display-comment-bottom" >
						 <p id="time" class="time left"><?php echo ($comment["addtime"]); ?> </p> 
						  <a class="praise deleteLink inline" name="delete" href="__APP__/Comment/commentDelete?commentno=<?php echo ($comment["commentno"]); ?>">删除</a> 
						<!--
						 <a href="#" class="left praise">顶 </a>
						 <a href="#" class="left share"> 分享</a>	
						 <a href="#comment" class="left share" onclick="recomment();"> 回复</a>	
						 -->
					
					</div>
					<br class="clear"/>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
	   </div>
		
</div>
								
			</div>
							
		
			
			<input id="author" type="hidden" value="<?php echo ($essay["author"]); ?>"/>
			<br class="clear"/><!--因为浮动元素不占据空间，所以容器元素不包围他们。添加一个进行清理的空元素可以迫使容器元素包围浮动元素-->
		</div>
		

			

	<div class="footer">
				<div id="footer-bg">
					<div id="footer-inner">
						
							<div class="inner-block">
								<p>关于我们</p>
								<div class="footer-content">
								有待编辑。。。记录你的求职准备之路，分享你的成长经历！。。。
								</div>
							</div>
							<div class="inner-block">
								<p>我们的团队</p>
								<div class="footer-content">
									<a class="pic-link-small" href="__APP__/Profile?member=xiaowenjie"><img src="__ROOT__/Home/Uploads/xiaowenjie_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=zbin"><img src="__ROOT__/Home/Uploads/zbin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Doris"><img src="__ROOT__/Home/Uploads/Doris_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=korbin"><img src="__ROOT__/Home/Uploads/korbin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Baby"><img src="__ROOT__/Home/Uploads/Baby_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Pork.zhao"><img src="__ROOT__/Home/Uploads/Pork.zhao_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=shanshan"><img src="__ROOT__/Home/Uploads/shanshan_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=minmin"><img src="__ROOT__/Home/Uploads/minmin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=雨天"><img src="__ROOT__/Home/Uploads/雨天_large.png"/></a>
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								<div>
								    <div class="col">
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									</div>
								    <div class="col">
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									</div>
								
								</div>
								
								
							</div>
							<div class="inner-block">
								<p>Korbin Zhao</p>
								<div class="footer-content">
									<a class="pic-link-big" href="#"><img src="__TMPL__/resource/images/korbinzhao.png"/></a>
									<a class="right white" href="#">联系站长：Korbin Zhao</a>
								</div>
							</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="copyright">Copyright © 2013 “以梦为马 Dream Catcher”团队</p>
				</div>
				
				<div id="back2top">
					<a href="#"></a>
				</div>
				
	</div>
	
</div>


	<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
	
</body>
</html>