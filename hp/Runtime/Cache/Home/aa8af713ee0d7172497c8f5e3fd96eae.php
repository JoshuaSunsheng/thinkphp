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
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>amazeui.min.css"/>
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

        .am-icon-ul li.on{
            border-bottom: solid 5px #fff;
            height: 48px;
        }

        .am-icon-ul li.off{
            height: 36px;
            font-size: 1.5rem;
        }

        .header {
            text-align: left;
        }

        .pCenter{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .am-modal-hd-h1{
            color: #126F6F;
        }

        .am-modal-bd-p{
            color: #126F6F;
            margin-left: 20px;
            margin-right: 20px;
            text-align: left;
        }

        .am-breadcrumb > li + li:before {
            content: "»\00a0";
            padding: 0 4px;
            color: #ccc;
        }

        .am-breadcrumb-slash > li + li:before {
            content: "|";
            color: #000;
        }

        .am-breadcrumb{
            padding: 0px;
        }

        .am-btn {
            color: #444;
            /* background-color: #e6e6e6; */
            /* border-color: #e6e6e6; */
        }

        button.am-btn{
            background-color: #0e90d2;
            color: #fff;
            box-shadow: 0 0 25px #0bb59b;
            border-width: 0px;
        }

        .am-g div.am-g-div-div{
            padding-left: 2.14285714em;
            /*margin-left: 2.14285714em;*/
        }

        .am-g-ul-li{
            list-style: none;
        }

        .am-list > li {
            background-color: #EBEBEB;
        }

        .center-vertical {
            height: 150px;
            line-height: 150px;
        }

        .am-sm-4-center{
            margin-left: 35%;
            width:80px;
            height:80px;
        }

        .am-footer-default {
            background-color: #0e90d2;
        }

        .am-footer-miscs button.am-btn{
            box-shadow: 0 0 25px #00ADEF;
        }

        .am-g .am-g {
            /* margin-left: -1rem; */
            /* margin-right: -1rem; */
            margin-left:0;
            margin-right:0;
            width: auto;
        }

        .am-g .am-list li button{
            background-color: #c2c2c2;
        }
        .am-button-white{
            background-color: #c2c2c2;
        }

        .am-active .am-btn-default.am-dropdown-toggle, .am-btn-default.am-active, .am-btn-default:active {
            background-image: none;
            background-color: #0e90d2;
        }

        .am-g .am-list li button:focus{
            background-color: #0e90d2;
        }

        .am-g .am-list li button:active{
            background-color: #0e90d2;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g" >
        <ul class="am-icon-ul am-nav-pills">
            <li class="on">就诊预约</li>
            <li class="off">预约专家</li>
        </ul>
    </div>
    <hr/>
</div>

<div class="am-g">

    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered am-g-div-div">
        <button type="button" class="am-btn am-btn-default am-radius" id="search">立即查询</button>
    </div>

    <!--<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered am-g-div-div">-->
    <!--<ol class="am-breadcrumb am-breadcrumb-slash" style="margin-bottom: 0rem; ">-->
    <!--<li><a href="#" class="am-btn am-radius">离你最近</a></li>-->
    <!--<li><a href="#" class="am-btn am-radius">区域查询</a></li>-->
    <!--</ol>-->
    <!--</div>-->

</div>

<div data-am-widget="tabs"
     class="am-tabs am-tabs-d2">
    <ul class="am-tabs-nav am-cf">
        <li class="am-active" style="background-color: transparent;"><a href="[data-tab-panel-0]">区域查询</a></li>
        <li class="" style="background-color: transparent;"><a href="[data-tab-panel-1]">离你最近</a></li>
    </ul>
    <div class="am-tabs-bd">
        <div data-tab-panel-0 class="am-tab-panel am-active">
            <div id="address" class="am-u-lg-6 am-u-md-8 am-u-sm-centered am-g-div-div">
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
        </div>
        <div data-tab-panel-1 class="am-tab-panel ">
            根据您所在的位置查找
        </div>
    </div>
</div>



<div class="am-g" style="padding: 10px;">



        <ul class="am-list" id="doctorList">
            <!--<li id="1">-->
                <!--<div class="am-g">-->

                <!--<div class="am-u-sm-4 center-vertical">-->
                    <!--<button type="button" class="am-btn am-btn-default am-round am-sm-4-center"></button>-->
                <!--</div>-->
                <!--<div class="am-u-sm-8">-->
                    <!--<h1 style="margin-top: 15px;">医生介绍</h1>-->
                    <!--<span>医院名称 科室 职称</span><br />-->
                    <!--<span>门诊时间 医生介绍</span>-->
                <!--</div>-->
                <!--</div>-->
            <!--</li>-->
            <!--<li id="2">-->
                <!--<div class="am-g">-->

                <!--<div class="am-u-sm-4 center-vertical">-->
                    <!--<button type="button" class="am-btn am-btn-default am-round am-sm-4-center" ></button>-->
                <!--</div>-->
                <!--<div class="am-u-sm-8">-->
                    <!--<h1 style="margin-top: 15px;">医生介绍</h1>-->
                    <!--<span>医院名称 科室 职称</span><br />-->
                    <!--<span>门诊时间 医生介绍</span>-->
                <!--</div>-->
                <!--</div>-->
            <!--</li>-->
            <!--<li id="3">-->
                <!--<div class="am-g">-->

                <!--<div class="am-u-sm-4 center-vertical">-->
                    <!--<button type="button" class="am-btn am-btn-default am-round am-sm-4-center" ></button>-->
                <!--</div>-->
                <!--<div class="am-u-sm-8">-->
                    <!--<h1 style="margin-top: 15px;">医生介绍</h1>-->
                    <!--<span>医院名称 科室 职称</span><br />-->
                    <!--<span>门诊时间 医生介绍</span>-->
                <!--</div>-->
                <!--</div>-->
            <!--</li>-->
        </ul>

    <ul data-am-widget="pagination" class="am-pagination am-pagination-select">
        <li class="am-pagination-prev ">
            <a href="#" class="" id="pre">上一页</a>
        </li>

        <!--<li class="am-pagination-select">-->
            <!--<select>-->
                <!--<option value="#" class="">1-->
                    <!--/-->
                <!--</option>-->
            <!--</select>-->
        <!--</li>-->

        <li class="am-pagination-next ">
            <a href="#" class="" id="next">下一页</a>
        </li>

    </ul>

</div>

<footer data-am-widget="footer"
        class="am-footer am-footer-default"
        data-am-footer="{  }">
    <div class="am-footer-switch">
    <span class="am-footer-ysp" data-rel="mobile"
          data-am-modal="{target: '#am-switch-mode'}" style="color: #fff;;">
          就诊预约
    </span>
    </div>
    <div class="am-footer-miscs ">

        <p style="color: #fff;;">希望就诊时间范围为:  </p>
        <div class="am-g">
            <div class="am-u-sm-6">
                <p><input type="text" class="am-form-field" id="beginDate" name="beginDate" placeholder="yyyy-mm-dd"/></p>
            </div>
            <div class="am-u-sm-6">
                <p><input type="text" class="am-form-field" id="endDate" name="endDate" placeholder="yyyy-mm-dd" /></p>
            </div>
        </div>
        <button
                type="button"
                class="am-btn am-btn-default am-radius"
                id="doc-confirm-toggle">
            预约提交
        </button>

    </div>
</footer>


<div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">恭喜您!</div>
        <div class="am-modal-bd">
            <p class="am-modal-bd-p">您的预约申请即将提交, 若成功提交,将发送信息给您, 请注意查收</p>
             <!--"已经发送给XX医院的XXX医师,-->
            <!--他/她将于近期通过短信的形式答复您的预约"-->
        </div>
        <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
        </div>
    </div>
</div>


<!--在这里编写你的代码-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php echo (JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.cityselect.js"></script>

<!--<![endif]-->
<script src="<?php echo (JS_URL); ?>amazeui.min.js"></script>
<script src="<?php echo (JS_URL); ?>amazeui.datetimepicker.js"></script>

<script>
    $('#datetimepicker')
            .datetimepicker()
            .on('changeDate', function(ev){
                alert(ev.date)
            });


    $(function () {
        $("#address").citySelect({
            nodata: "none",
            required: false
        });
    });
</script>

<script>
    $(function() {
        var nowTemp = new Date();
        var nowDay = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0).valueOf();
        var nowMoth = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), 1, 0, 0, 0, 0).valueOf();
        var nowYear = new Date(nowTemp.getFullYear(), 0, 1, 0, 0, 0, 0).valueOf();
        var $myStart2 = $('#beginDate');

        var checkin = $myStart2.datepicker({
            onRender: function(date, viewMode) {
                // 默认 days 视图，与当前日期比较
                var viewDate = nowDay;

                switch (viewMode) {
                    // moths 视图，与当前月份比较
                    case 1:
                        viewDate = nowMoth;
                        break;
                    // years 视图，与当前年份比较
                    case 2:
                        viewDate = nowYear;
                        break;
                }

                return date.valueOf() < viewDate ? 'am-disabled' : '';
            }
        }).on('changeDate.datepicker.amui', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.close();
            $('#endDate')[0].focus();
        }).data('amui.datepicker');

        var checkout = $('#endDate').datepicker({
            onRender: function(date, viewMode) {
                var inTime = checkin.date;
                var inDay = inTime.valueOf();
                var inMoth = new Date(inTime.getFullYear(), inTime.getMonth(), 1, 0, 0, 0, 0).valueOf();
                var inYear = new Date(inTime.getFullYear(), 0, 1, 0, 0, 0, 0).valueOf();

                // 默认 days 视图，与当前日期比较
                var viewDate = inDay;

                switch (viewMode) {
                    // moths 视图，与当前月份比较
                    case 1:
                        viewDate = inMoth;
                        break;
                    // years 视图，与当前年份比较
                    case 2:
                        viewDate = inYear;
                        break;
                }

                return date.valueOf() <= viewDate ? 'am-disabled' : '';
            }
        }).on('changeDate.datepicker.amui', function(ev) {
            checkout.close();
        }).data('amui.datepicker');



        $("#doctorList").on('click', 'li', function(){
            liObj = this;
            jQuery(this).find('button').css('background-color', '#0e90d2');
            jQuery(this).prevAll().find('button').css('background-color', '#c2c2c2');
            jQuery(this).nextAll().find('button').css('background-color', '#c2c2c2');

        })


        function checkAppoint(){
            if(typeof(liObj) == "undefined"){
                alert("请选择医生");
                return false;
            }

            if(!$("#beginDate").val()){
                alert("请选择开始时间");
                return false;
            }

            if(!$("#endDate").val()){
                alert("请选择结束时间");
                return false;
            }

            return true;

        }


        $('#doc-confirm-toggle').on('click', function () {

            if(!checkAppoint()){
                return;
            }

            $('#my-confirm').modal({
                relatedTarget: this,
                onConfirm: function (options) {
                    var $link = $(this.relatedTarget).prev('a');
                    var msg = '已经发送, 请等待';

                    var tourl = $("#appointment").attr("action");
                    var doctor_id = liObj.id;
                    var patient_id = '2';
                    var beginDate = $("#beginDate").val();
                    var endDate = $("#endDate").val();
                    $.post("/thinkphp/hp/index.php/Home/Patient/appointment", { doctor_id: doctor_id, patient_id: patient_id, beginDate: beginDate, endDate: endDate},function(data,textStatus){
                        //alert(textStatus);
                        console.log(liObj.id)
                        //alert(liObj.id)

                        location.href = data.url;
                    });

                    alert(msg);

                },
                // closeOnConfirm: false,
                onCancel: function () {
                    //alert('算求，不弄了');
                }
            });
        });



        pageNo = 1;
        maxResult = 1;
        postAjax();

        jQuery("#search").on('click', function(){
            pageNo = 1;
            postAjax();

        })

//pre page: doctor list
        $("#pre").on('click', function(){
            pageNo = pageNo - 1;
            postAjax();
        })

        //next page: doctor list
        $("#next").on('click', function(){
            pageNo = pageNo + 1;
            postAjax();

        })

        //翻页后台请求数据
        function postAjax(){

            var province = jQuery('#province').val();
            var city = jQuery('#city').val();
            var district = jQuery('#district').val();

            $.ajax({
                type:"post", //请求的方式
                dataType:"json", //数据的格式 建议大家使用json格式
                data:{'command':'next','pageNo':pageNo,'province':province,'city':city,'district':district,'isNearBy':false}, //请求的数据
                url:"/thinkphp/hp/index.php/Home/Patient/fanye", //请求的url地址
                success:function(data){ //请求成功时，处理返回来的数据
                    maxResult = data.maxResult;
                    displayDoctor(data.list);

                }
            })
        }

        //显示翻页内容
        function displayDoctor(list){
            var str = '';
            list.forEach(function(e){
                str = str + "<li id=\"" + e.id + "\">";
                str = str + "<div class=\"am-g\">";
                str = str + "<div class=\"am-u-sm-4 center-vertical\">";
                str = str + "<button type=\"button\" class=\"am-btn am-btn-default am-round am-sm-4-center\"></button>";
                str = str + "</div>";
                str = str + "<div class=\"am-u-sm-8\">";
                str = str + "<h1 style=\"margin-top: 15px;\">医生:" + e.realname +  "</h1>";
                str = str + "<span>医院名称:"+ e.hospital +" 科室 职称</span><br />";
                str = str + "<span>门诊时间 医生介绍</span>";
                str = str + "</div>";
                str = str + "</div>";
                str = str + "</li>";
            })
            $("#doctorList").html(str);

            if(pageNo == 1){
                $('#pre').css('display', 'none');
            }
            else{
                $('#pre').css('display', '');
            }

            if(parseInt((parseInt(maxResult)+2)/3) == pageNo){
                $('#next').css('display', 'none');
            }
            else{
                $('#next').css('display', '');
            }
        }
    });

//
//    $(function(){
//
//
//    })



</script>
</body>
</html>