<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/9/19
 * Time: 下午11:41
 */

namespace Admin\Controller;

use Think\Controller;

define(CONTROLLER, __CONTROLLER__);

class  IndexController extends Controller
{
    function index()
    {
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        if (empty($_POST)) {
            $loginName = session('loginName'); //授权信息
            if ($loginName) {
                var_dump($loginName);
                $this->display();
            } else {
                redirect(CONTROLLER . '/../Login/login', 2, '您已经登出, 请重新登录');
            }
            return;
        }
    }


    function logout()
    {
        session('loginName', null); //保存授权信息
        $loginName = session('loginName'); //授权信息

        $ret['rescode'] = "00";
        $ret['msg'] = "登出成功".$loginName;
        $this->ajaxReturn($ret);
    }

}