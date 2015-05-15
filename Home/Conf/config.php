<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_L_DELIM'=>'<{',//修改左定界符
	'TMPL_R_DELIM'=>'}>',//修改右定界符
	 //数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'korbin', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '123', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'kor_', // 数据库表前缀 
	'SHOW_PAGE_TRACE'=>true,//开启页面trace
	'TMPL_TEMPLATE_SUFFIX'=>'.html',//更改模板文件后缀名
	'DEFAULT_THEME'=>'Default',//设置默认模板主题
	'TMPL_PARSE_STRING'=>array(//添加自己的模板变量规则
		'__RES__'=>__ACTION__.'../resource',
		'__CSS__'=>__ACTION__.'../resource/css',
		'__JS__'=>__ACTION__.'../resource/js',
		'__IMAGES__'=>__ACTION__.'../resource/images'

	),
	'VAR_PAGE'=>'page',//将分页变量设为page



);
?>