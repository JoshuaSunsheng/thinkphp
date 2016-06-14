<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午11:41
 */

namespace Home\Controller;

use Think\Controller;

define(CONTROLLER, __CONTROLLER__);

class PatientController extends Controller{

    /*
     * 病人第一次注册登录
     * */
    function login(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $this -> display();
    }

    /*
     * 病人第一次注册登录
     * 知情同意书
     * */
    function agreement(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $this -> display();
    }

    /*
     * 病人第一次注册登录
     * 填写表格
     * */
    function application(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $this -> display();
    }

    /*
     * 病人第一次注册登录
     * 预约医生
     * */
    function appointment(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $this -> display();
    }



}