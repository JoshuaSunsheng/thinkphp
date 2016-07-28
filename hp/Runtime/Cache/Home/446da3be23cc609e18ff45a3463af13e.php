<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page | hp</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
    <!--<link rel="stylesheet" href="<?php echo (CSS_URL); ?>amazeui.min.css"/>-->
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>app.css">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>amazeui.flat.min.css">

    <style>
        .header {
            text-align: center;
        }

        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }

        .header p {
            font-size: 14px;
        }

        html, body {
            background-color: #EBEBEB;
        }

        .header .am-g{
            height: 50px;line-height: 50px;
                background-color: #0e90d2;
            color: #FFFFFF;
            font-size: 1.8rem;
        }

        .am-icon-ul li{
            border-bottom: solid 5px #fff;
            height: 48px;
        }

        .header {
            text-align: left;
        }

        .pCenter{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        label, input, select {
            vertical-align: middle;
        }

        .am-checkbox input[type=checkbox], .am-checkbox-inline input[type=checkbox], .am-radio input[type=radio], .am-radio-inline input[type=radio] {
            /* float: left; */
            margin-left: -20px;
            outline: 0;
            clear: both;
            border-radius: 2000px;
        }

        input[type=checkbox], input[type=radio] {
            margin: 0;
            margin-top: 1px\9;
            line-height: normal;
        }

        input.mui-checkbox {
            position: relative;
            width: 25px;
            height: 25px;
            margin-right: 10px;
            background-color: #FFFFFF;
            border: solid 1px #d9d9d9;
            background-clip: padding-box;
            display: inline-block;
            -webkit-appearance: none;
        }

        .mui-checkbox:focus {
            outline: 0 none;
            outline-offset: -2px;
        }

        .mui-checkbox:checked {
            background-color: #BDC3D7;
            border: solid 1px #FFFFFF;
        }

        .mui-checkbox:disabled {
            background-color: #d9d9d9;
            border: solid 1px #d9d9d9;
        }

        .mui-checkbox:disabled:before {
            display: inline-block;
            margin-top: 1px;
            margin-left: 2px;
            font-family: iconfont;
            content: "\e667";
            color: #FFFFFF;
            font-size: 18px;
        }

        .mui-checkbox.checkbox-green:checked {
            background-color: #5cb85c;
        }

        .mui-checkbox.checkbox-orange:checked {
            background-color: #f0ad4e;
        }

        .mui-checkbox.checkbox-s {
            width: 19px;
            height: 19px;
        }

        .mui-checkbox.checkbox-s:before {
            display: inline-block;
            margin-top: 1px;
            margin-left: 2px;
            font-family: iconfont;
            content: "\e667";
            color: #FFFFFF;
            font-size: 13px;
        }

        .mui-checkbox-anim {
            -webkit-transition: background-color ease 0.2s;
            transition: background-color ease 0.2s;
        }

        .mui-checkbox-con {
            margin-top: 10px;
            font-size: 16px;
        }

        .mui-checkbox-con label {
            display: block;
        }



    </style>
</head>
<body>
<div class="header">
    <div class="am-g" >
        <ul class="am-icon-ul">
            <li>知情同意</li>
        </ul>
    </div>
    <hr/>
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <div class="pCenter">
            <p>项目背景, 目的, 内容, 过程, 期限, 参加所需要做
                的工作, 收益, 风险, 不适, 保密, 自愿申明, 研究团
                队申明, 电子签名(签名照片)</p>
        </div>
        <hr>
        <br>

        <form method="post" class="am-form">
            <fieldset>

                <div class="am-checkbox">
                    <label style="font-size: 16px;">
                        <input class="mui-checkbox" type="checkbox"> 知情同意
                    </label>
                </div>
                <hr>
                <hr>

                <div class="am-g">
                    <div class="am-u-sm-6 am-u-sm-centered">
                        <input type="submit" name="" value="下一步" class="am-btn am-btn-primary am-btn-sm am-fl" onclick="agreement();return false;"
                               style="width: 100%;">

                    </div>
                </div>

            </fieldset>

        </form>
        <hr>

    </div>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php echo (JS_URL); ?>jquery.min.js"></script>

<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="<?php echo (JS_URL); ?>amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="<?php echo (JS_URL); ?>amazeui.min.js"></script>
<script src="<?php echo (JS_URL); ?>amazeui.datetimepicker.js"></script>
<script>

    function agreement(){
        if($('input[type="checkbox"]').is(":checked")){
            window.location.href = "<?php echo (CONTROLLER); ?>/application";
        }
        else{
            alert(" 请勾选知情同意");

        }
    }
</script>
</body>
</html>