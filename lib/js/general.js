///// NAVIGATE
$(function(){
	if(window.location.hash){
		var hash = window.location.hash.slice(1);
		var hashSplit = (hash.indexOf("/") < 0)?hash:(hash.split('/')[2]);
		
		if(hashSplit)
		$('#content')
		.fadeOut(function(){
			$(this)
			.load('cloud_'+hashSplit+'.php').fadeIn(1000);
		});
		
	}else{
		$('#content')
		.fadeOut(function(){
			$(this)
			.load('cloud_main.php').fadeIn(1000);
		});
		$('#body')
		.css({
			background: "url(files/imgs/fnd-body-top-right.png) no-repeat top right,url(files/imgs/fnd-body-center-left.png) no-repeat bottom left",
		});
	}

	$(window).bind('hashchange', function () {
		if(window.location.hash){
			var hash = window.location.hash.slice(1);
			var hashSplit = (hash.indexOf("/") < 0)?hash:(hash.split('/')[2]);
			
		$('#content')
			.fadeOut(function(){
				$(this)
				.load('cloud_'+hashSplit+'.php').fadeIn(1000);
			});
		}else{
		$('#content')
			.fadeOut(function(){
				$(this)
				.load('cloud_main.php').fadeIn(1000);
			});
		}
	});
});

///// IP
var getIP = function() {
    if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
    else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.open("GET","http://api.hostip.info/get_html.php",false);
    xmlhttp.send();

    hostipInfo = xmlhttp.responseText.split("\n");

    for (i=0; hostipInfo.length >= i; i++) {
        ipAddress = hostipInfo[i].split(":");
        if ( ipAddress[0] == "IP" ) return ipAddress[1];
    }

    return false;
}
///// DIMENSIONES DEL NAVEGADOR
var scnWid,scnHei;

if(self.innerHeight){// all except Explorer
	scnWid = self.innerWidth;
	scnHei = self.innerHeight;
}else if(document.documentElement && document.documentElement.clientHeight){//Explorer 6 Strict Mode
	scnWid = document.documentElement.clientWidth;
	scnHei = document.documentElement.clientHeight;
}
else if(document.body){// other Explorers
	scnWid = document.body.clientWidth;
	scnHei = document.body.clientHeight;
}

///// JSON2STRING
//JSON.stringify({"a":[1,2]}) >>>> result: "{"a":[1,2]}"
JSON.stringify = JSON.stringify || function (obj) {
	alert("asd")
    var t = typeof (obj);
    if (t != "object" || obj === null) {
        // simple data type
        if (t == "string") obj = '"'+obj+'"';
        return String(obj);
    }
    else {
        // recurse array or object
        var n, v, json = [], arr = (obj && obj.constructor == Array);
        for (n in obj) {
            v = obj[n]; t = typeof(v);
            if (t == "string") v = '"'+v+'"';
            else if (t == "object" && v !== null) v = JSON.stringify(v);
            json.push((arr ? "" : '"' + n + '":') + String(v));
        }
        return (arr ? "[" : "{") + String(json) + (arr ? "]" : "}");
    }
};
///// ADD A AUDIT
var addAudit = function(opt){
	var entityId = (opt.entity)?opt.entity:(sessionStorage.idSess)?sessionStorage.idSess:0;
	var description = "{";
		description += (opt.message)?'message: "'+opt.message+'",':'';
		description += (opt.query)?'query: "'+opt.query+'",':'';
	description += "}";
	
	//alert("INSERT INTO audits_2h (ip, entity_fk, file, description, date_admission)VALUES('"+getIP()+"', '"+entityId+"', '"+opt.file+"', '"+Base64.encode(description)+"', NOW());")
	cnx.exec("INSERT INTO audits_2h (ip, entity_fk, file, description, date_admission)VALUES('"+getIP()+"', '"+entityId+"', '"+opt.file+"', '"+Base64.encode(description)+"', NOW());");
}