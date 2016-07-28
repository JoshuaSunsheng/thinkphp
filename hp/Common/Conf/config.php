<?php
return array(
	//'配置项'=>'配置值'

    //数据库连接配置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'qdm224606487.my3w.com', // 服务器地址
    'DB_NAME'               =>  'qdm224606487_db',          // 数据库名
    'DB_USER'               =>  'qdm224606487',      // 用户名
    'DB_PWD'                =>  'abc12345678',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    //以下字段缓存没有其作用
    //① 如果是调试模式就不起作用
    //② false  也是不起作用
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8


    //日志记录
    'LOG_RECORD'            =>  true,   // 默认不记录日志
    'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误

);