<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午11:41
 */

namespace Mobile\Controller;

use Think\Controller;

define(CONTROLLER, __CONTROLLER__);

class  CoreController extends CommonController{




    function core(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));

        $this -> display();
    }

}