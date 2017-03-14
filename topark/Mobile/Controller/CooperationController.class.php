<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午11:41
 */

namespace Mobile\Controller;

use Think\Controller;
use Home\Model\AppointmentModel;
use Home\Model\DoctorModel;


define(CONTROLLER, __CONTROLLER__);

class  CooperationController extends CommonController{


    function partners(){
        $this -> display();
    }



}