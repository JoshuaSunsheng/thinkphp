<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午11:41
 */

namespace Home\Controller;

use Think\Controller;
use Home\Model\AppointmentModel;
use Home\Model\DoctorModel;


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


            $this->data = "";
            $this->studyNo = build_order_no();
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

    function myPatient($queryStr = '', $page = 1, $pagesize = 5){
        \Think\Log::write('myPatient appointment:', "INFO");

        $DoctorController = new \Admin\Controller\DoctorController();
//        $queryStr = "tablelist";
        if($queryStr == "tablelist") {
            $status=0 ;
        }
        else if($queryStr == "tablepasslist"){
            $status=2;
        }
        else{
            $status="";
            \Think\Log::write('myPatient appointment 这里不显示内容', "INFO");
        }
        \Think\Log::write('myPatient appointment:'.$queryStr, "INFO");
        \Think\Log::write('myPatient appointment:'.$status, "INFO");

        if($queryStr){
            list($data, $recordnum, $pagenum) = $DoctorController->innerAppointment($status, $page, $pagesize);
        }
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


    //审核通过预约
    function passAppointment($id)
    {
        \Think\Log::write('passAppointment record:'.$id, "INFO");
        $db = new AppointmentModel();
        $map['id']=array('in',$id);
//        $db->where('id=' . $id)->delete();
        $db->where($map)->setField('status',APPOINTMENT_PASS);
        \Think\Log::write('passAppointment record end', "INFO");
    }

    //审核失败预约
    function cancelAppointment($id)
    {
        \Think\Log::write('cancelAppointment record:'.$id, "INFO");
        $db = new AppointmentModel();
        $map['id']=array('in',$id);

//        $db->where('id=' . $id)->delete();
        $db->where($map['id'])->setField('status',APPOINTMENT_FAIL);
        \Think\Log::write('cancelAppointment record end', "INFO");
    }
}