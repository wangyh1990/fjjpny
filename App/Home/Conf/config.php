<?php

return array(

	'USER_AUTH_KEY'   => 'uid',			//用户认证识别号
	'URL_MODEL'            => 3, //URL模式
	//加载自定义标签
	'TAGLIB_PRE_LOAD'=>'Common\\LibTag\\Yang,Common\\LibTag\\Other',//预加载的tag
	'TAGLIB_BUILD_IN' => 'cx', //内置标签

	'VIEW_PATH'=>'./Public/'.MODULE_NAME .'/',

);


?>