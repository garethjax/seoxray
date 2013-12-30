<?php

// replace the following variable with your email
$youremail ="test@example.com";

$visitor = "\n referrer:".$_SERVER['HTTP_REFERER'];

$visitor = $visitor. "\n - user agent:".$_SERVER['HTTP_USER_AGENT'];

$visitor = $visitor. "\n - remote add:".$_SERVER['REMOTE_ADDR'];

$visitor = $visitor. "\n - remote host:".$_SERVER['REMOTE_HOST'];

//useless for google, but may still give you some insights for other search engines
$visitor .= "\n"."query string".$_SERVER['QUERY_STRING'] ;

//in order to resolve the IP address i've installed the Maxmid GeoIP module for apache
// http://dev.maxmind.com/geoip/legacy/mod_geoip2/

$visitor .= "\n"."country: ".$_SERVER['GEOIP_COUNTRY_NAME'] ;


$headers .= 'To: '. $youremail  . "\r\n";
$headers .= 'From: '. $youremail . "\r\n";

//i was interested in monitoring users from italy and googlebot
//if you want to check other user agents, check this url 
// http://www.useragentstring.com/pages/useragentstring.php

if ($_SERVER['GEOIP_COUNTRY_NAME'] !="Italy" &
(strpos($_SERVER['HTTP_USER_AGENT'],"google")==0)) {

$subject= 'user is not italian and is not google';

} else
{
$subject= 'user is google or italian';
}

//you may change the subject  [Seoxray] as you prefer


mail ($youremail ,'[Seoxray]'.$subject,'Visitor:'.$visitor, $headers);




?>
