<?php666
header("content-type:application/json; charset=utf-8");
error_reporting(0);//关闭所有PHP错误报告
/*$url = $_REQUEST['url'];*///需要解析的链接
$url = "https://sharechain.qq.com/b02b99a4f7ce5de2dfff10d2cc7ff38c";
if (empty($url)) {
	exit(json_encode(['code' => -1, 'msg' => '分享链接为空'],320));
}
$data=file_get_contents($url);
preg_match_all("/window.syncData =(.*?);<\/script>/",$data,$text);
$array = json_decode($text[1][0],true);
$value = array(
   
        'title' => $array['shareData']['collection']['summary']['rich_media_summary']['title'],//标题
        'brief' => $array['shareData']['collection']['summary']['rich_media_summary']['brief']
       
        
        );//内容
echo json_encode($value,320);
function curl($url){ //Curl GET
    $ch = curl_init();     // Curl 初始化  
    $timeout = 30;     // 超时时间：30s  
    $ua='Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36';// 伪造抓取 UA  
    $ip = mt_rand(11, 191) . "." . mt_rand(0, 240) . "." . mt_rand(1, 240) . "." . mt_rand(1, 240);
    curl_setopt($ch, CURLOPT_URL, $url);// 设置 Curl 目标  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// Curl 请求有返回的值  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);// 设置抓取超时时间  
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// 跟踪重定向  
    curl_setopt($ch, CURLOPT_REFERER, 'https://www.baidu.com/');//模拟来路
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:'.$ip, 'CLIENT-IP:'.$ip));  //伪造IP  
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);// 伪造ua   
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// https请求 不验证证书和hosts  
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);//强制协议为1.0
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );//强制使用IPV4协议解析域名
    $content = curl_exec($ch);   
    curl_close($ch);// 结束 Curl  
    return $content;// 函数返回内容  
}
