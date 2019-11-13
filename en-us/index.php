<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="email=no" />
    <title>Tencent 腾讯</title>
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
        <link rel="stylesheet" type="text/css" href="../css_e/index20181111.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body>
    <div class="wrap head_wrap_index">
<?php
require('./header.php');

?>

<div class="banner_wrap">
    <div class="flexslider"> 
        <ul class="slides"> 
            <li class="slide-video">
                <video src="../video/bannerbg1.mp4" loop autoplay preload muted></video>
                <h3 class="text text3">connecting people for a creater future</h3>
            </li>
            <li class="slide-video">
                <video src="../video/bannerbg2.mp4" loop autoplay preload muted></video>
                <div class="mask"></div>
                <div class="logo"></div>
                <h3 class="text text4">"I long to be a river"</h3>
                <div class="btn-play"></div>
            </li> 
        </ul> 
    </div>
    <div class="custom-navigation">
        <div class="custom-controls-container"></div>
    </div>
</div>
<div class="banner-video">
    <div class="mask"></div>
    <div class="video">
        <div id="video18"></div>
        <div class="close">×</div>
    </div>
</div>
<div class="fullmask"></div>
<div class="about-wrap">
    <h3 class="title">an internet-based technology and cultural enterprise</h3>
    <p>Tencent is an internet-based technology and cultural enterprise headquartered in Shenzhen, China. Founded in 1998, Tencent’s</p>
    <p>mission is to “improve the quality of life through Internet value-added services”. This will be done via the delivery of integrated</p>
    <p>internet solutions to billions of netizens through its “user oriented” business philosophy.</p>
    <a href="./abouttencent.php" class="more">Learn more</a>
</div>
<div class="news-wrap">
    <div class="news-item news-item-1">
        <a href="./technology_news.php" class="news-hd">
            <div class="bg"></div>
            <h4 class="tit">New Innovative Technology</h4>
            <p class="des">Creating a Smart Future</p>
            <span class="more">Learn more</span>
        </a>
        <div class="news-bd">
                        <div class="news-list first">
                                <a href="./articles/2000009.html" class="news-tit">
                                    Tencent Embraces Global Digitalization Opportunities  with Its Industrial Internet Strategies 
                </a>
                <div class="news-date">2019/05/22</div>
            </div>
                        <div class="news-list ">
                                <a href="./articles/2000001.html" class="news-tit">
                                    Tencent Launches Four Smart Transportation Products at the First China Smart Transportation Conference in Beijing
                </a>
                <div class="news-date">2018/10/23</div>
            </div>
                    </div>
    </div>
    <div class="news-item news-item-2">
        <a href="./cultural_news.php" class="news-hd">
            <div class="bg"></div>
            <h4 class="tit">New Cultural Experience</h4>
            <p class="des">Enriching Life</p>
            <span class="more">Learn more</span>
        </a>
        <div class="news-bd">
                        <div class="news-list first">
                                <a href="./articles/2100012.html" class="news-tit">
                                    Tencent Games and Qualcomm Announce Strategic Cooperation
                </a>
                <div class="news-date">2019/07/30</div>
            </div>
                        <div class="news-list ">
                                <a href="./articles/2100010.html" class="news-tit">
                                    “Global Digital Museums for National Treasures” Strategic Cooperation Initiated by Tencent and RMN
                </a>
                <div class="news-date">2019/01/31</div>
            </div>
                    </div>
    </div>
    <div class="news-item news-item-3">
        <a href="./community_news.php" class="news-hd">
            <div class="bg"></div>
            <h4 class="tit">Corporate Social Responsibility (CSR)</h4>
            <p class="des">Upholding the Company Mission</p>
            <span class="more">Learn more</span>
        </a>
        <div class="news-bd">
                        <div class="news-list first">
                <a href="./articles/2200008.html" class="news-tit">Tencent Holds the First Youth Science Festival and Releases Science Focus List Jointly with SCIENCE</a>
                <div class="news-date">2019/01/22</div>
            </div>
                        <div class="news-list ">
                <a href="./articles/2200007.html" class="news-tit">Tencent, the First Company Winner of the UNESCO Emir Jaber Al Ahmad Al Jaber Al Sabah Prize for Digital Empowerment of Persons with Disabilities</a>
                <div class="news-date">2018/12/04</div>
            </div>
                    </div>
    </div>
</div>
<div class="moreproj-wrap">
    <a href="system.php" class="moreproj-box">
        <div class="bg"></div>
        <h3 class="tit">Enhancing the Digital Assistant to build a Digital China</h3>
        <p class="des">Rooted in Consumer-Based Internet, Tencent embraces the Industrial Internet.</p>
        <span class="more">Learn more Products and Services</span>
    </a>
</div>
    <?php
    require('./footer.php')
    ?>