<?php
return array(
	//'閰嶇疆椤�=>'閰嶇疆鍊�
		'DB_TYPE'   => 'mysql', // 鏁版嵁搴撶被鍨�		
		'DB_HOST'   => 'localhost', // 鏈嶅姟鍣ㄥ湴鍧�	
	    'DB_NAME'   => 'web', // 鏁版嵁搴撳悕
		'DB_USER'   => 'root', // 鐢ㄦ埛鍚�		
		'DB_PWD'    => '', // 瀵嗙爜
		'DB_PORT'   => 3306, // 绔彛
		'DB_PREFIX' => 'web_', // 鏁版嵁搴撹〃鍓嶇紑
		'SHOW_PAGE_TRACE'=>1,//鏄剧ず璋冭瘯淇℃伅
		'URL_ROUTE_RULES' => array(				
				'/^Index\/(\d+)$/is'       => 'Index/show?id=:1',				
		),
);
?>