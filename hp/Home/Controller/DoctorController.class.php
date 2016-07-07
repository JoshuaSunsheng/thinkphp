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




    function myPatient(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));

        $this -> display();
    }

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

        \Think\Log::record('register--------------record测试日志信息');
        \Think\Log::write('register---------------write测试日志信息，这是警告级别，并且实时写入','WARN');

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
    }
}