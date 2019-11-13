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
        <link rel="stylesheet" type="text/css" href="../css_e/whistleblowing.css">
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
                    <a href="javascript:;" class="path_item current">Whistleblowing</a>
                </div>
                <div class="content_title">
                    <h2 class="title">Whistleblowing</h2>
                </div>
                <div class="whistle_item whistle_board">
                    <p class="txt">
                        Integrity is the most basic requirement for all employees of Tencent. We will not tolerate any violation of the laws and regulations or improper behaviors in commercial activities. If you notice any such issues in relation to Tencent employees, please don't hesitate to let us know through the following channels:
                    </p>
                </div>
                <div class="shareholder_box">
                    <ol class="shareholder_list">
                        <li class="shareholder_item">
                            These channels are designated only for lodging complaints in relation to suspected violations of laws and regulations or improper behaviors of Tencent employees in commercial activities. Please do choose the right channel so that your complaints will be followed up.
                        </li>
                        <li class="shareholder_item">
                            Voice mail hotline: +86-755-86013470
                        </li>
                        <li class="shareholder_item">
                            Email: <a href="mailto:jubao@tencent.com">jubao@tencent.com</a>
                        </li>
                        <li class="shareholder_item">
                            Internal Audit Department, Tencent Building, Kejizhongyi Avenue, Hi-tech Park, Nanshan District, Shenzhen, Guangdong, PRC
                        </li>
                    </ol>
                </div>
                <div class="whistle_item whistle_board">
                    <p class="txt">
                        You are free to choose any whistleblowing channels, and you have the right to report anonymously while making the whistleblowing report. We suggest you provide complete information. Any information included in the whistleblowing report and your personal information shall be kept in a strictest confidence in Tencent. Tencent have taken relevant measures to ensure the security and confidentiality of such information.
                    </p>
                    <p class="txt">
                        Tencent will, to the extent permitted by law and policies of Tencent, investigate and collect the evidences based on the information provided by you. If you would like to leave your valid contact information, Tencent will give you feedback within 10 business days after receipt of the whistleblowing report.
                    </p>
                    <p class="txt">
                        Tencent reserves the rights to pursue any relevant legal actions against the whistleblowers providing knowingly false information or fabricated evident, or making any offensive or defamatory statement maliciously about any employee of Tencent. In addition, retaliation against whistleblower, witness and investigator is strictly prohibited in Tencent, Tencent will take the strictest action against those have conducted the retaliation.
                    </p>
                </div>
                <div class="whistle_item whistle_board whistle_notice">
                    <p class="txt">
                        Notice: If you are to make complaints about our products or services, or internet illegal information, please refer to our <a href="./service.html">customer service website</a> .
                    </p>
                </div>
            </div>
        </div>
        <div class="back_to_top">
            <a href="javascript:;"><i></i></a>
        </div>
        <?php
    require('./footer.php')
    ?>