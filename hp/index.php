<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

//定义css、img、js常量
//define("SITE_URL","http://prttrtnwtc.proxy.qqbrowser.cc/thinkphp/");
//define("SITE_URL","http://localhost:8888/thinkphp/");
define("SITE_URL","http://www.thinkphp.su:8888/thinkphp/");
//define("SITE_URL","http://localhost:80/thinkphp/");
//define("SITE_URL","http://www.hatbrand.cn/thinkphp/");
define("CSS_URL",SITE_URL."hp/Public/css/"); //css
define("IMG_URL",SITE_URL."hp/Public/img/"); //img
define("JS_URL",SITE_URL."hp/Public/js/"); //js
define("I_URL",SITE_URL."hp/Public/i/"); //i
define("DATA_URL",SITE_URL."hp/Public/data/"); //data

//define("ADMIN_CSS_URL",SITE_URL."shop/public/Admin/css/"); //css
//define("ADMIN_IMG_URL",SITE_URL."shop/public/Admin/img/"); //css
//define("ADMIN_JS_URL",SITE_URL."shop/public/Admin/js/"); //css

// 微信使用
define("OAURL_CODE", "https://api.weixin.qq.com/sns/oauth2/access_token");
define("OAURL_ACCESS_TOKEN", "https://api.weixin.qq.com/sns/oauth2/access_token");
define("appId", "wxfb93bd95a58c1079");
define("appsecret", "d4624c36b6795d1d99dcf0547af5443d");
define("REDIRECT_URI", "d4624c36b6795d1d99dcf0547af5443d");

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','../hp/');

// 引入ThinkPHP入口文件
require '../ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单