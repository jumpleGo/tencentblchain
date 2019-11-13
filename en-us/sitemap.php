<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="email=no" />
    <title>Tencent 腾讯 - Home</title>
    <script src="../js/bowser.min.js" type="text/javascript"></script>
        <script src="../js/redirect.js?201806271730" type="text/javascript"></script>
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
        <link rel="stylesheet" type="text/css" href="../css_e/sitemap.css">
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
                <a href="javascript:;" class="path_item current">Site Map</a>
            </div>
            <div class="content_title">
                <h2 class="title">Site Map</h2>
            </div>
            <div class="sitemap_item">
                <div class="item_box">
                    <h3><a href="./index.html">Home</a></h3>
                </div>
                <div class="item_box">
                    <h3><a href="">About</a></h3>
                    <ul>
                        <li><a href="./company.html#company_news">Press Releases</a></li>
                        <li><a href="./company.html#company_dev">Roadmap</a></li>
                        <li><a href="./company.html#company_board">Management Team</a></li>
                        <li><a href="./company.html#company_charity">Corporate Citizenship</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="item_box">
                    <h3><a href="./culture.html">Culture</a></h3>
                    <ul>
                        <li><a href="./culture.html#culture_idea">Core Values</a></li>
                        <li><a href="./culture.html#culture_dev">Talent Development</a></li>
                        <li><a href="./culture.html#culture_env">Work Environment</a></li>
                        <li><a href="./culture.html#culture_act">Employee Activities</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="item_box">
                    <h3><a href="./system.html">Products & Services</a></h3>
                    <ul>
                        <li><a href="./system.html#system_social">Socially</a></li>
                        <li><a href="./system.html#system_pay">Payment</a></li>
                        <li><a href="./system.html#system_entertain">Entertainment</a></li>
                        <li><a href="./system.html#system_news">Information</a></li>
                        <li><a href="./system.html#system_tools">Tools</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="item_box">
                    <h3><a href="./investor.html">Investor Relations</a></h3>
                    <ul>
                        <li><a href="./investor.html#info_dynamic">Announcements</a></li>
                        <li><a href="./investor.html#info_news">Financial Releases</a></li>
                        <li><a href="./investor.html#info_performance">Financial Reports</a></li>
                        <li><a href="./investor.html#info_investor">Event Calendar</a></li>
                        <li><a href="./investor.html#info_enterprice">Corporate Governance</a></li>
                        <li><a href="./investor.html#info_folder">Investor Kit</a></li>
                        <li><a href="./investor.html#info_holdings">Stock Information</a></li>
                        <li><a href="./investor.html#info_analyst">Analyst Coverage</a></li>
                        <li><a href="./investor.html#info_tel">Conference Calls</a></li>
                        <li><a href="./investor.html#info_contact">Contact Us</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="item_box">
                    <h3><a href="javascript:;">Contact Us</a></h3>
                    <ul>
                        <li><a href="./service.html">Customers Service</a></li>
                        <li><a href="./contactus.html">Partnership</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="item_box">
                    <h3><a href="javascript:;">Others</a></h3>
                    <ul>
                        <li><a href="./statement.html">Legal Statement</a></li>
                        <li><a href="./whistleblowing.html">Whistleblowing</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
        <div class="back_to_top">
            <a href="javascript:;"><i></i></a>
        </div>
        <?php
    require('./footer.php')
    ?>