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

class  DoctorController extends Controller{


    function myStudy(){
        $this -> display();
    }


    function dataImport(){

        $token = session('token');
        if(empty($token)) {
            redirect(CONTROLLER.'/register', 2, '页面跳转中...');
        }


        if(!empty($_POST)){
            $Study = new \Home\Model\StudyModel(); // 实例化 Patient对象

            if(!$Study->create($_POST, 1)){
                //echo $Study->_sql();//最后一条执行的Sql
                echo $Study->getError();
            }
            else{
                $Study -> badResponse = implode(',', $_POST['badResponse']);
                $z = $Study->add();

                if($z){
                    $this->success('新增成功', 'myStudy');
                }
                else{
                    $this->error('新增成功', 'myStudy');
                }
            }

        }
        else{
            $this -> display();
        }
    }

    function register(){

        \Think\Log::write('register begin:', "INFO");

        //微信网页授权登录获取code
        $code = $_GET['code'];
        $get_code_url = OAURL_ACCESS_TOKEN.'?appid='.appId.'&secret='.appsecret.'&code='.$code.'&grant_type=authorization_code';
        $token_data = file_get_contents($get_code_url);

        $token = json_decode($token_data, TRUE);
        $token['appid'] = appId;
        //$param = file_get_contents(OAURL, false, stream_context_create($opts));
        session('token',$token); //保存授权信息
        //var_dump(session('token'), true);


        if(!empty($_POST)){

            $Doctor = new \Home\Model\DoctorModel(); // 实例化 Patient对象
            //$Patient->getByPhoneNumber();

            $Doctor->create($_POST, 1);
            $Doctor -> cureTime = implode(',', $_POST['cureTime']);

            $z = $Doctor->add();
            if($z){
                $this->success('新增成功', 'myStudy');
            }
            else{
                $this->error('新增成功', 'myStudy');
            }
        }
        else{
            $this -> display();
        }

        \Think\Log::write('register end.', "INFO");

    }



    function myPatient($queryStr = '', $page = 1, $pagesize = 10){
        \Think\Log::write('myPatient appointment:', "INFO");

        $DoctorController = new \Admin\Controller\DoctorController();

        list($data, $recordnum, $pagenum) = $DoctorController->innerAppointment($queryStr, $page, $pagesize);

//        var_dump($data, true);
        $this->data = $data;
        $this->pagenum = $pagenum;
        $this->page = $page;
        $this->pagesize = $pagesize;
        $this->recordnum = $recordnum;
        $this->title = "预约信息";

        $this->display();
        \Think\Log::write('myPatient end', "INFO");
    }
}