<?php
$personality_config = array(
    'APP_NAME'        => 'LBSContacts',  //项目名称
    'APP_TITLENAME'   => 'LBS通讯录',  //项目标题名称
	//'配置项'=>'配置值'
    //'URL_MODEL'=>0, //URL路径规则
    //'URL_PATHINFO_MODEL'=>2, //
    //'URL_PATHINFO_DEPR'=>'-', // 更改PATHINFO参数分隔符

    'APP_DEBUG'       => true,  //开启调试模式

    /*
    'SHOW_RUN_TIME'=>true,  //运行时间显示
    'SHOW_ADV_TIME'=>true,//显示详细的运行时间
    'SHOW_DB_TIMES'=>true,//显示数据库的操作次数
    'SHOW_CACHE_TIMES'=>true,//显示缓存操作次数
    'SHOW_USE_MEM'=>true,//显示内存开销
    */

//    'LOG_RECORD'=>true,//开启了日志记录
//    'LOG_RECORD_LEVEL'=>array('EMERG','ALERT','ERR'),
);
$global_config = include './config.inc.php';
return array_merge($personality_config,$global_config);
?>