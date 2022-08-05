<?php
// Get Stream URL Desired by website 
date_default_timezone_set("Australia/Brisbane");
$now = date("Y-m-d h:i:sa");
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$agent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];


$url = urldecode($_GET["stream"]);


// Stream Provider Overrides 
// Caster FM
if(strpos($url, "caster.fm") !== null)
{
 // Caster Widget URL Found, Getting Auth Token as Client
 $data = extractAuthSimple($url);
 $port = $data[0];
 $token = $data[1];
 $gen= "http://shaincast.caster.fm:".$port."/listen.mp3?".$token;

 $url = $gen;
}

// Broadcastify
if(strpos($url, "broadcastify") !== null)
{
// URL is Direct stream
$url = $url;
}

// Other Providers Assumed Direct Stream
// Feed Stream Back to Client as Desired Mime Type


stream($url);


function stream($url, $mime = "audio/mpeg", $bufferSize = 1024*1024)
{
    header('Content-type: '.$mime);
    header('Cache-Control: no-cache');
header('Connection: keep-alive');
header('Keep-Alive: timeout='.(60*24).', max='.(60*48));
    $handle = fopen($url, 'rb');

    ob_start();
    $bytes = '';
     $stream = true;
    while ($stream) {
        $bytesLive = fread($handle, $bufferSize);

              $bytes = $bytesLive;

echo $bytes;
flush_buffers();

}
 $status = fclose($handle);
  ob_end_flush(); 
}


function flush_buffers(){

    ob_flush();
    flush();

}

function extractAuthSimple($url)
{
   $html = getPage($url);
   $keyToken = "&port=";
   $keyEndChar = "&type";
   $keyStart = strpos($html, $keyToken)+strlen($keyToken);
   $keyEnd = strpos($html, $keyEndChar, $keyStart);
   $keyLength = $keyEnd-$keyStart;
   $keyExtract = substr($html,$keyStart,$keyLength);
   return explode("&auth=",$keyExtract);
}

function getPage($url, $asClient = true)
{
  $ch = curl_init();
if($asClient)
{
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $ip", "HTTP_X_FORWARDED_FOR: $ip"));
    curl_setopt ($ch, CURLOPT_USERAGENT, $agent);
}
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec ($ch);
     curl_close ($ch);
   return $data;
}
?>