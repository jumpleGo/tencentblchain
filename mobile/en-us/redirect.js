function removeXSS(s) {
	var pattern = new RegExp("[<>’”]")
	var rs = "";
	for (var i = 0; i < s.length; i++) {
		rs = rs+s.substr(i, 1).replace(pattern, '');
	}
	return rs;
}

if (location.protocol == 'http:'){
	location.protocol = 'https:';
}

if (!bowser.mobile) {
	var url = location.href.replace(/mobile\/(zh-cn|zh-hk|en-us)/,'$1');
	var hash = location.hash;
	if(hash){
		url = url.replace(hash, '');
		var hashNum = parseInt(hash.replace('#',''));
		var names = ['index', 'company', 'culture', 'system', 'investor'];
		url = url.replace(/index\.html/, names[hashNum] + '.html');
	}
	url = removeXSS(url)
	location.href = url;
}