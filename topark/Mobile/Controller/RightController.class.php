<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午10:51
 */

namespace Mobile\Controller;

use Think\Controller;

class RightController extends CommonController
{
    function right(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));

        $this -> display();
    }

}