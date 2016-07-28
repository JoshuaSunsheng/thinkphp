<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>医生注册</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>amazeui.min.css"/>

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

        .am-u-lg-12 input.am-form-field {
            background-color: #4CB0E6;
            color: #BCE1F6;
        }

        html, body {
            background-color: #EBEBEB;
        }

        .am-form input[type=number]::-webkit-input-placeholder, .am-form input[type=search]::-webkit-input-placeholder, .am-form input[type=text]::-webkit-input-placeholder, .am-form input[type=password]::-webkit-input-placeholder, .am-form input[type=datetime]::-webkit-input-placeholder, .am-form input[type=datetime-local]::-webkit-input-placeholder, .am-form input[type=date]::-webkit-input-placeholder, .am-form input[type=month]::-webkit-input-placeholder, .am-form input[type=time]::-webkit-input-placeholder, .am-form input[type=week]::-webkit-input-placeholder, .am-form input[type=email]::-webkit-input-placeholder, .am-form input[type=url]::-webkit-input-placeholder, .am-form input[type=tel]::-webkit-input-placeholder, .am-form input[type=color]::-webkit-input-placeholder, .am-form select::-webkit-input-placeholder, .am-form textarea::-webkit-input-placeholder, .am-form-field::-webkit-input-placeholder {
             color: #BCE1F6;
         }

        .am-form input[type=number]:focus, .am-form input[type=search]:focus, .am-form input[type=text]:focus, .am-form input[type=password]:focus, .am-form input[type=datetime]:focus, .am-form input[type=datetime-local]:focus, .am-form input[type=date]:focus, .am-form input[type=month]:focus, .am-form input[type=time]:focus, .am-form input[type=week]:focus, .am-form input[type=email]:focus, .am-form input[type=url]:focus, .am-form input[type=tel]:focus, .am-form input[type=color]:focus, .am-form select:focus, .am-form textarea:focus, .am-form-field:focus {
            background-color: #4CB0E6;
            border-color: #3bb4f2;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 5px rgba(59, 180, 242, .3);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 5px rgba(59, 180, 242, .3)
        }

        #birthday.am-bluecolor, #address.am-bluecolor {
            background-color: #4CB0E6;
            color: #BCE1F6;
        }

        .am-form input[type=number], .am-form input[type=search], .am-form input[type=text], .am-form input[type=password], .am-form input[type=datetime], .am-form input[type=datetime-local], .am-form input[type=date], .am-form input[type=month], .am-form input[type=time], .am-form input[type=week], .am-form input[type=email], .am-form input[type=url], .am-form input[type=tel], .am-form input[type=color], .am-form select, .am-form textarea, .am-form-field {
            background-color: #4CB0E6;
            border-color: #3bb4f2;
            color: #BCE1F6;
        }

        #birthday, #cureDate{
            color: #555;
        }

    </style>
</head>
<body style="font-size: 14px;">


<div style="margin: 0;">
    <div class="header">
        <br/>
        <br/>
        <div class="am-g">
            <h1>医生注册</h1>
            <!--<p>Integrated Development Environment<br/>代码编辑，代码生成，界面设计，调试，编译</p>-->
        </div>
        <hr>
    </div>

    <div class="am-g">
        <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
            <form method="post" id="register" name="register" class="am-form am-form-horizontal">
                <fieldset>

                    <div class="am-form-group">
                        <div class="am-u-lg-12">
                            <div class="am-input-group">
                                <span class="am-input-group-label"><i class="am-icon-phone am-icon-fw"></i></span>
                                <input type="text" class="am-form-field" id="phoneNumber" name="phoneNumber" maxlength="11" placeholder="手机号">
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <div class="am-u-lg-12">
                            <div class="am-input-group">
                                <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" class="am-form-field" id="realName" name="realName" placeholder="输入您的姓名">
                            </div>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <div class="am-u-lg-12">
                            <div class="am-input-group">
                                <span class="am-input-group-label"><i class="am-icon-comment am-icon-fw"></i></span>
                                <input type="text" class="am-form-field" name="msgCode" id="msgCode" placeholder="验证码">
                <span class="am-input-group-btn">
                  <button id="submit" class="am-btn am-btn-default" type="button">获取验证码</button>
                </span>
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">性别</label>

                        <div class="am-u-sm-7">
                            <label class="am-radio-inline">
                                <input type="radio" name="sex" checked="true" value="0"> 男
                                <i class="am-icon-male am-icon-fw"></i>
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" name="sex" value="1"> 女
                                <i class="am-icon-female am-icon-fw"></i>
                            </label>
                        </div>
                        <div class="am-u-sm-5">

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="birthday" class="am-u-sm-4 am-form-label">出生日期:</label>
                        <div class="am-u-sm-8">
                            <input id="birthday" name="birthday" type="text" class="am-form-field" placeholder="yyyy-mm-dd" data-am-datepicker required  readonly/>
                        </div>

                    </div>

                    <div class="am-form-group">
                        <label for="doc-ipt-birthday-1" class="am-u-sm-12 am-form-label">所在医院:</label>
                        <div id="address">
                            <div class="am-u-sm-4">
                                <select class="prov" id="province" name="province"></select><span class="am-form-caret"></span>
                            </div>
                            <div class="am-u-sm-4">
                                <select class="city" id="city" name="city" disabled="disabled"></select><span class="am-form-caret"></span>
                            </div>
                            <div class="am-u-sm-4">
                                <select class="dist" id="district" name="district" disabled="disabled"></select><span class="am-form-caret"></span>
                            </div>

                        </div>
                        <div class="am-u-sm-12" style="padding-top: 5px;">
                            <input type="text" id="hospital" name="hospital" class="am-form-field" placeholder="请输入医院名称">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="title" class="am-u-sm-3 am-form-label">职称</label>
                        <div class="am-u-sm-6">
                            <select id="title" name="title">
                                <option value="">请选择</option>
                                <option value="0">主任医师</option>
                                <option value="1">副主任医师</option>
                                <option value="2">主治医师</option>
                                <option value="3">住院医师</option>
                            </select>
                            <span class="am-form-caret"></span>
                        </div>
                        <div class="am-u-sm-6">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="mail" class="am-u-sm-3 am-form-label">邮箱:</label>
                        <div class="am-u-sm-9">
                            <input type="text" class="" id="mail" name="mail" placeholder="请输入邮箱">
                        </div>


                    </div>

                    <div class="am-form-group">
                        <div class="am-u-sm-12">
                            <label for="description">个人简介</label>
                        </div>
                        <div class="am-u-sm-12">
                            <textarea class="" rows="5" id="description" name="description"></textarea>
                        </div>
                    </div>

                    <div class="am-form-group am-form-file">
                        <div class="am-form-group am-form-file am-u-sm-12">
                            <button type="button" class="am-btn am-btn-default am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 选择要上传的文件
                            </button>
                            <input id="docFile" name="docFile" type="file">
                        </div>
                        <div id="file-list"></div>
                    </div>


                    <div class="am-form-group">
                        <label for="cureTime" class="am-u-sm-4 am-form-label">门诊日期:</label>
                        <div class="am-u-sm-8">
                            <input id="cureTime" name="cureTime" type="text" class="am-form-field am-bluecolor"
                                   placeholder="yyyy-mm-dd" data-am-datepicker required readonly/>
                        </div>
                    </div>


                    <div class="am-g">
                        <div class="am-u-sm-6 am-u-sm-centered">
                            <input type="" name="" value="申请审核" class="am-btn am-btn-primary am-btn-sm am-fl"
                                   onclick="reg(); return false;"
                                   style="width: 100%;">

                        </div>


                    </div>

                </fieldset>
            </form>
            <hr>
        </div>
    </div>


</div>


<script>

    function reg() {

        var tourl = $("#register").attr("action");
        var application = $("#register").serialize();
        $.post("/thinkphp/hp/index.php/Home/Doctor/register", application,function(data,textStatus){
            alert(data);
            location.href = data.url;
        });


//        alert("您的申请已经提交审核,请耐心等待!");
//        var path = "<?php echo (CONTROLLER); ?>"
//        window.location.href = path + "/register";
    }



</script>


<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.cityselect.js"></script>
<script type="text/javascript">
    $(function () {
        $("#address").citySelect({
            nodata: "none",
            required: false
        });


    });

    $(function () {
        $('#doc-form-file').on('change', function () {
            var fileNames = '';
            $.each(this.files, function () {
                fileNames += '<span class="am-badge">' + this.name + '</span> ';
            });
            $('#file-list').html(fileNames);
        });
    });
</script>
<script src="<?php echo (JS_URL); ?>amazeui.min.js"></script>
<script src="<?php echo (JS_URL); ?>amazeui.datetimepicker.js"></script>

<script>
    $('#datetimepicker')
            .datetimepicker()
            .on('changeDate', function (ev) {
                alert(ev.date)
            });
</script>

</body>
</html>