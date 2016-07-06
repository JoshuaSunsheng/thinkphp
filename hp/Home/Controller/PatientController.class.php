<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午11:41
 */

namespace Home\Controller;

use Home\Model\PatientModel;
use Think\Controller;

define("CONTROLLER", __CONTROLLER__);

class PatientController extends Controller{

    /*
     * 病人第一次注册登录
     * */

    function login(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $this -> display();
//        var_dump(get_defined_constants(true));
        \Think\Log::record('record测试日志信息');
        \Think\Log::write('write测试日志信息，这是警告级别，并且实时写入','WARN');

        //微信网页授权登录获取code
        $code = $_GET['code'];
        $get_code_url = OAURL_ACCESS_TOKEN.'?appid='.appId.'&secret='.appsecret.'&code='.$code.'&grant_type=authorization_code';
        $token_data = file_get_contents($get_code_url);

        $token = json_decode($token_data, TRUE);
        echo "<hr>";
        $token['appid'] = appId;
        //$param = file_get_contents(OAURL, false, stream_context_create($opts));
        session('token',$token); //保存授权信息
        var_dump(session('token'), true);

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
    function application()
    {
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $token = session('token');

        if (empty($token)) {
            //echo CONTROLLER.'/login';
            redirect(CONTROLLER.'/login', 2, '页面跳转中...');
        }


        if (!empty($_POST)) {
            $Patient = new \Home\Model\PatientModel(); // 实例化 Patient对象
            //$Patient->getByPhoneNumber();

            $Patient->create($_POST, 1);
            $z = $Patient->add();

            if ($z) {
                $this->success('提交成功', 'appointment');
            } else {
                echo '提交失败, 请重新提交!';
            }
        } else {
            $this->display();
        }
    }

    /*
     * 病人预约
     * 预约医生
     * */
    function appointment(){
        //获取系统常量, 并分组

        //$Appointment = new \Home\Model\AppointmentModel(); // 实例化 Appointment对象


        $token = session('token');

        if (empty($token)) {
            redirect(CONTROLLER . '/login', 2, '页面跳转中...');
        }


        if (!empty($_POST)) {
            $Appointment = new \Home\Model\AppointmentModel(); // 实例化 Patient对象
            //$Patient->getByPhoneNumber();
            $Appointment->create($_POST, 1);
            $z = $Appointment->add();
            if ($z) {
                $this->success('提交成功', 'appointment');
            } else {
                echo '提交失败, 请重新提交!';
            }
        } else {
            $this->display();
        }

    }

    /**
     * @param $options
     * @param $authnum
     * @throws \Org\Com\Exception
     */
    public function send(){
        //初始化必填
        $options['accountsid']='6c53057d22d325f222eb5d0188d38e89'; //填写自己的
        $options['token']='4f57071121447bf5af8182dc7a7c3db5'; //填写自己的
        //初始化 $options必填
        $ucpass = new \Org\Com\Ucpaas($options);

        //随机生成6位验证码
        srand((double)microtime()*1000000);//create a random number feed.
//        $ychar="0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
        $ychar="0,1,2,3,4,5,6,7,8,9";
        $list=explode(",",$ychar);
        $authnum = "";
        for($i=0;$i<6;$i++){
            $randnum=rand(0,9); // 0-9;
            //$randnum=rand(0,35); // 10+26;
            $authnum.=$list[$randnum];
        }


        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "dad0c81fddc140cb8566ea8f5e9b8252";  //填写自己的
        $to = $_POST['to'];
        $templateId = "25567";
        $param=$authnum;

        $MSGCODE = new \Home\Model\MsgcodeModel();

        //记录短信验证码至数据库
        $data['CODE'] = $authnum;
        $data['phoneNumber'] = $to;
        $data['SENDFLAG'] = 0;
        //        $data['VALIDTIME'] = Date('Y-m-d H:i:s') ;
        $data['VALIDTIME'] = date ( "Y-m-d H:i:s", mktime ( date ( "H" ), date ( "i" ) + 5, date ( "s" ), date ( "m" ), date ( "d" ), date ( "Y" ) ) );


        echo $authnum;
        //$arr=$ucpass->templateSMS($appId,$to,$templateId,$param);
        //if (substr($arr,21,6) == 000000) {
        if (true) {
            //如果成功就，这里只是测试样式，可根据自己的需求进行调节

            echo "短信验证码已发送成功，请注意查收短信";

                //$MSGCODE = M('MSGCODE');

        }else{
            //如果不成功
            echo "短信验证码发送失败，请联系客服";
            $data['SENDFLAG'] = 1;

        }

        $MSGCODE->data($data)->add();

    }


    /**
     * @param $options
     * @param $authnum
     * @throws \Org\Com\Exception
     */
    public function verifyCode(){


        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $phoneNumber = $_POST['to'];
        $code = $_POST['msgCode'];

        //echo $phoneNumber;
        //echo $code;

        $Msgcode = M("Msgcode");

        //echo $Msgcode;
        $data = $Msgcode->where('status=0 AND phoneNumber=%s', $phoneNumber)->order('CREATETIME desc')->limit(1)->find();

        //echo $data;
//        var_dump($data);
        $currentTime = date ( "Y-m-d H:i:s");

        $ret['rescode'] = "01";

        //验证码失效
        if(strtotime($currentTime)>strtotime($data['validtime'])){
            $ret['msg'] = "验证码失效";
        }
        else{
            if(trim($data[code]) == trim($code)){
                $ret['rescode'] = "00";
                $ret['msg'] = "验证通过";
            }
            else{
                $ret['msg'] = "验证码错误";
            }
        }

        $token = session('token'); //保存授权信息
        $token['phoneNumber'] = $phoneNumber;

        session('token', $token); //保存授权信息

        //print_r($token);
        //var_dump($token, true);

        $this->ajaxReturn($ret);

    }


}