<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Amaze UI Examples</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="assets/i/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>amazeui.min.css">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>app.css">
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

        .am-breadcrumb > li + li:before {
            content: "|";
            padding: 0 8px;
            color: #ccc;
        }

        .am-header-li-a-active {
            color: #0e8181;
        }

        .am-header-li-a-no-active {
            color: #c4dad8;
        }

        .am-am-g-myStudy-h5 {
            border-left: solid 5px #0D8083;
            padding-left: 1rem;
            color: #5f5f5f;
            font-size: 1.035em;
        }
    </style>
</head>
<body>

<header>

    <div class="am-g">
        <div class="am-u-sm-12">
            <ol class="am-breadcrumb" style="margin: 0;   font-size: 1.08em;  font-weight: 600;">
                <li><a href="myStudy.html" class="am-header-li-a-active">我的研究</a></li>
                <li><a href="myPatient.html" class="am-header-li-a-no-active">我的患者</a></li>
                <li><a href="dataImport.html" class="am-header-li-a-no-active">数据录入</a></li>
            </ol>
        </div>
        <div class="am-u-sm-9" style="border:solid 5px #0d6b6d;">
        </div>
        <div class="am-u-sm-3" style="border:solid 5px #86b5b5;">
        </div>
    </div>

</header>
<!-- 页面内容 开发时删除 -->
<div class="am-g am-g-fixed am-margin-top">
    <h5 class="am-am-g-myStudy-h5">所在地以地区（市）、时间周期为每年的病例数计算，计算单药、多药耐药率、耐药趋势。</h5>
    <div class="am-u-sm-12 am-center">
        <button type="button" class="am-btn am-btn-primary am-round"
                style="width: 150px;height: 150px;background: #0f8184;font-size: 20px;opacity: 1;" disabled="disabled">
            图表显示
        </button>
    </div>
</div>

<div class="am-g am-g-fixed am-margin-top">
    <h5 class="am-am-g-myStudy-h5">附件同行HP治疗根除率情况</h5>
    <div class="am-u-sm-12">
        <p>“附近”的定义为所在地以地区（市）为单位，
            显示个体化根除方案和经验治疗的根除率（含病例数）。</p>
    </div>
</div>


<div class="am-g am-g-fixed am-margin-top">
    <h5 class="am-am-g-myStudy-h5">我已进行XXliHP根除治疗的研究病例，
        其中XXli已完成全部研究内容。</h5>
    <div class="am-u-sm-12">
        <p>我参与管理研究的病例总根除率为XX%。
            其中个体化三联方案根除率为XX，个体化四联方案根除率为XX%
            经验三联方案根除率为XX%，经验四联方案根除率为XX%，其它根除方案根除率为XX%。</p>
        <button type="button" class="am-btn am-btn-primary am-round"
                style="width: 150px;height: 150px;background: #0f8184;font-size: 20px;opacity: 1;" disabled="disabled">
            图表显示
        </button>
    </div>
</div>


<div class="am-g am-g-fixed am-margin-top">
    <h5 class="am-am-g-myStudy-h5">研究病例数据查询</h5>
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <form method="post" class="am-form am-form-horizontal">
            <fieldset>
                <div class="am-form-group">
                    <div class="am-u-sm-8">

                        <select id="doc-select-1" style="font-size: 1.4rem;">
                            <option value="option1">所有</option>
                            <option value="option2">未完成</option>
                            <option value="option3">已完成</option>
                        </select>
                        <span class="am-form-caret"></span>

                    </div>

                    <div class="am-u-sm-2">
                        <button type="button" class="am-btn am-btn-default am-radius">查询</button>

                    </div>
                    <div class="am-u-sm-2">

                    </div>
                </div>

                <div class="am-u-sm-12" style="    font-size: 1.4rem;">
                    <p>所有 未完成 姓名 查询</p>

                    <table class="am-table">
                        <thead>
                        <tr>
                            <th>研究编号</th>
                            <th>姓名</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>已完成</td>

                        </tr>

                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>已检查未治疗</td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>已治疗未随访</td>
                        </tr>

                        </tbody>
                    </table>

                </div>

                <div class="am-form-group">

                    <div class="am-u-sm-2">
                        <button type="button" class="am-btn am-btn-default am-radius"
                                style="background: #0f8184; color: white">数据导出
                        </button>

                    </div>
                    <div class="am-u-sm-8">
                        <select id="doc-select-1" style="font-size: 1.4rem;">
                            <option value="option1">所有</option>
                            <option value="option2">未完成</option>
                            <option value="option3">已完成</option>
                        </select>
                    </div>

                </div>

            </fieldset>
        </form>
    </div>
</div>
<!-- 以上页面内容 开发时删除 -->

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>


</body>
</html>