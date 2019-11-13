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
        <link rel="stylesheet" type="text/css" href="../css_e/permission.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body>
    <div class="wrap ">
        <?php
require('./header.php');

?>
        <div class="main">
            <img src="../images/permission/permission20170813.jpg" alt="permission" />
        </div>
        <div class="back_to_top">
            <a href="javascript:;"><i></i></a>
        </div>
        <?php
    require('./footer.php')
    ?>