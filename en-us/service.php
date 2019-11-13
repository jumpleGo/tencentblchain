<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="email=no" />
    <title>Tencent 腾讯 - Home</title>
    <script src="../js/bowser.min.js" type="text/javascript"></script>
        <script src="../js/redirect.js" type="text/javascript"></script>
        <script>
    	var isPad = bowser.tablet;
		if(isPad){
			var meta = document.createElement("meta");
			var head = document.getElementsByTagName("head")[0];
			head.insertBefore(meta,head.childNodes[0]);
			meta.setAttribute("name","viewport");
			meta.setAttribute("content","width=device-width, initial-scale=0.6, user-scalable=0, minimum-scale=0.6, maximum-scale=0.6");
		}
    </script>  
    <link rel="stylesheet" type="text/css" href="../css_e/global.css">
        <link rel="stylesheet" type="text/css" href="../css_e/service.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body>
    <div class="wrap ">
        <?php
require('./header.php');

?>
        <div class="main">
            <div class="article_content">
                <div class="path_area">
                    <a href="./index.html" class="path_item">Home</a>
                    <span class="arrow">&gt;</span>
                    <a href="javascript:;" class="path_item current">Tencent Customer Service Centre</a>
                </div>
                <div class="content_title">
                    <h2 class="title">Tencent Customer Service Centre </h2>
                </div>
                <div class="service_item service_shareholder">
                    <div class="shareholder_box">
                        <ol class="shareholder_list">
                            <li class="shareholder_item">
                                <table>
                                    <tbody>
	                                    <tr>
	                                        <td>Tencent Customer Service Hotline:</td>
	                                        <td>0755-83765566</td>
	                                    </tr>
	                                    <tr>
	                                        <td>Tenpay Service Hotline:</td>
	                                        <td>0755-86013860</td>
	                                    </tr>
	                                    <tr>
	                                        <td>Weixin Payment Service Hotline:</td>
	                                        <td>95017</td>
	                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="shareholder_item">
                        		For more customer service help: <a href="http://kf.qq.com" target="_blank">http://kf.qq.com</a>, or scan the following QR code to follow Tencent customer service for help.<br><img src="../images/service/qrcode.jpg" class="qrcode-pic">
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="service_item service_board">
                    <p class="txt">
                        Tencent Customer Service Center is the main service window for all Tencent products, responsible for answering client enquiries and providing service support. We are dedicated to perfecting our customer service operations and to providing timely and thoughtful service for all our clients, including hotline services, online support and online product safety verification. We strive to provide our business partners with carrier-level service support. Our management team and professional customer service representatives are committed to offering comprehensive, friendly and high quality service to our clients.
                    </p>
                    <p class="txt">
                        Dedicated to customer service excellence, no matter where you are.
                    </p>
                </div>
                <div class="shareholder_box">
                    <ol class="shareholder_list">
                        <li class="shareholder_item">
                            For more information:<a href="http://kf.qq.com/">http://kf.qq.com/</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="back_to_top">
            <a href="javascript:;"><i></i></a>
        </div>
        <?php
    require('./footer.php')
    ?>