<?php

define('DOCTOR_SUBMIT', 0);
define('DOCTOR_FAIL', 1);
define('DOCTOR_PASS', 2);


define('PATIENT_SUBMIT', 0);
define('PATIENT_FAIL', 1);
define('PATIENT_PASS', 2);

define('APPOINTMENT_SUBMIT', 0);
define('APPOINTMENT_FAIL', 1);
define('APPOINTMENT_PASS', 2);

/*
 * http request tool
 */
/*
 * get method
 */
function get($url, $param = array())
{
    if (!is_array($param)) {
        throw new Exception("参数必须为array");
    }
    $p = '';
    foreach ($param as $key => $value) {
        $p = $p . $key . '=' . $value . '&';
    }
    if (preg_match('/\?[\d\D]+/', $url)) {//matched ?c
        $p = '&' . $p;
    } else if (preg_match('/\?$/', $url)) {//matched ?$
        $p = $p;
    } else {
        $p = '?' . $p;
    }
    $p = preg_replace('/&$/', '', $p);
    $url = $url . $p;
    //echo $url;
    $httph = curl_init($url);
    curl_setopt($httph, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($httph, CURLOPT_SSL_VERIFYHOST, 1);
    curl_setopt($httph, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($httph, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");
    curl_setopt($httph, CURLOPT_HEADER, 1);
    // header:1 返回头部信息, 0: 致返回数据结构

    //curl_multi_getcontent( resource $httph );

    $rst = curl_exec($httph);
    curl_close($httph);

    return $rst;
}

/*
 * post method
 */
function post($url, $param = array())
{
    if (!is_array($param)) {
        throw new Exception("参数必须为array");
    }
    $httph = curl_init($url);
    curl_setopt($httph, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($httph, CURLOPT_SSL_VERIFYHOST, 1);
    curl_setopt($httph, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($httph, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");
    curl_setopt($httph, CURLOPT_POST, 1);//设置为POST方式
    curl_setopt($httph, CURLOPT_POSTFIELDS, $param);
    curl_setopt($httph, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($httph, CURLOPT_HEADER, 1);
    $rst = curl_exec($httph);
    curl_close($httph);
    return $rst;
}


//微信认证链接
function wxurl()
{
    //import('MyClass.Wechatauth',APP_PATH);
    $Wechat = new wechatauth();
    $token = session('token'); //查看是否已经授权
    if (!empty($token)) {
        print_r($token);
        $state = $Wechat->check_access_token($token['access_token'], $token['openid']); //检验token是否可用(成功的信息："errcode":0,"errmsg":"ok")
        print_r($state);
    }
    $url = $Wechat->get_authorize_url('http://twx.vjiankang.org/wsite/test/wxrurl', '1'); //此处链接授权后，会跳转到下方处理
    echo '<a href=' . $url . '>授权</a>';
}

//微信返回字符串
function wxrurl()
{
    //import('MyClass.Wechatauth',APP_PATH);
    $Wechat = new wechatauth();
    print_r($_GET); //授权成功后跳转到此页面获取的信息
    $token = $Wechat->get_access_token('', '', $_GET['code']); //确认授权后会，根据返回的code获取token
    print_r($token);
    session('token', $token); //保存授权信息
    $user_info = $Wechat->get_user_info($token['access_token'], $token['openid']); //获取用户信息
    print_r($user_info);
}


//计算年龄
function birthday($birthday)
{
    $age = strtotime($birthday);
    if ($age === false) {
        return false;
    }
    list($y1, $m1, $d1) = explode("-", date("Y-m-d", $age));
    $now = strtotime("now");
    list($y2, $m2, $d2) = explode("-", date("Y-m-d", $now));
    $age = $y2 - $y1;
    if ((int)($m2 . $d2) < (int)($m1 . $d1))
        $age -= 1;
    return $age;
}


function build_order_no(){
    return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
}