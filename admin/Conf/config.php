<?php
return array(
	//'閰嶇疆椤�=>'閰嶇疆鍊�
		'APP_AUTOLOAD_PATH'=>'@.TagLib',
		'SESSION_AUTO_START'=>true,
		'USER_AUTH_ON'              =>true,
		'USER_AUTH_TYPE'			=>1,		// 默认认证类型 1 登录认证 2 实时认证
		'USER_AUTH_KEY'             =>'authId',	// 用户认证SESSION标记
		'ADMIN_AUTH_KEY'			=>'administrator',
		'USER_AUTH_MODEL'           =>'User',	// 默认验证数据表模型
		'AUTH_PWD_ENCODER'          =>'md5',	// 用户认证密码加密方式
		'USER_AUTH_GATEWAY'         =>'/Public/login',// 默认认证网关
		'TMPL_ACTION_ERROR'     => 'Public:error', // 默认错误跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'   => 'Public:success', // 默认成功跳转对应的模板文件		
		'NOT_AUTH_MODULE'           =>'Public',	// 默认无需认证模块	
		'REQUIRE_AUTH_MODULE'       =>'',		// 默认需要认证模块
		'NOT_AUTH_ACTION'           =>'',		// 默认无需认证操作
		'REQUIRE_AUTH_ACTION'       =>'',		// 默认需要认证操作
		'GUEST_AUTH_ON'             =>false,    // 是否开启游客授权访问
		'GUEST_AUTH_ID'             =>0,        // 游客的用户ID
		'DB_TYPE'   => 'mysql', // 鏁版嵁搴撶被鍨�		
		'DB_HOST'   => 'localhost', // 鏈嶅姟鍣ㄥ湴鍧�		
		'DB_NAME'   => 'web', // 鏁版嵁搴撳悕
		'DB_USER'   => 'root', // 鐢ㄦ埛鍚�		
		'DB_PWD'    => '123', // 瀵嗙爜
		'DB_PORT'   => 3306, // 绔彛
		'DB_PREFIX' => 'web_', // 鏁版嵁搴撹〃鍓嶇紑
		'SHOW_PAGE_TRACE'=>1,//鏄剧ず璋冭瘯淇℃伅
);
?>