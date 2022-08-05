<?PHP
date_default_timezone_set("Australia/Brisbane");
$now = date("Y-m-d h:i:sa");
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$agent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];


$unique = true;
$firstAccessDate = $now;
$logData = file_get_contents("logs.txt");
$logLines = explode("\n",$logData);
foreach($logLines as $entry)
{
  $segs =  explode("||",$entry);
  $dateTime = $segs[0];
  $loggedIP = $segs[1];
  $loggedAgent = $segs[2];
  $testStr = $loggedIP.$loggedAgent;
  if ($ip.$agent == $testStr)
    {
     $unique = false;
     $firstAccessDate = $dateTime;
    }
}
if($unique)
{
$myfile = fopen("logs.txt", "a") or die("Unable to open user logs file!");
$txt = $now."||".$ip."||".$agent;
fwrite($myfile, "\n". $txt);
fclose($myfile);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  <meta name="description" content="Scanner aims to collect live sources of the Tasmania Government Radio Network and make them available in one easy to use website, available on Android, Windows, MAC and iPhone device's.">
 
  <title>Tas GRN Scanner Project</title>
  <link rel="stylesheet" href="playertheme2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="player">
    <div class="player__header">

      <div class="player__img player__img--absolute slider">

        <button class="player__button player__button--absolute--nw playlist">

          <img src="http://physical-authority.surge.sh/imgs/icon/playlist.svg" alt="playlist-icon">

        </button>

        <button class="player__button player__button--absolute--center play">

          <img src="http://physical-authority.surge.sh/imgs/icon/play.svg" alt="play-icon">
          <img src="http://physical-authority.surge.sh/imgs/icon/pause.svg" alt="pause-icon">

        </button>

        <div class="slider__content">
          <img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIsBoQjH5eWAD4ziTMLReO8EEPKf0-ZRdXA&usqp=CAU" alt="cover">
<img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIsBoQjH5eWAD4ziTMLReO8EEPKf0-ZRdXA&usqp=CAU" alt="cover">
          <img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIsBoQjH5eWAD4ziTMLReO8EEPKf0-ZRdXA&usqp=CAU" alt="cover">
        
        </div>

      </div>

      <div class="player__controls">

        <button class="player__button back">

          <img class="img" src="http://physical-authority.surge.sh/imgs/icon/back.svg" alt="back-icon">

        </button>
        
         
        <p class="player__context slider__context">

          <strong class="slider__name"></strong>
          <span class="player__title slider__title"></span>

        </p>

        <button class="player__button next">

          <img class="img" src="http://physical-authority.surge.sh/imgs/icon/next.svg" alt="next-icon">

        </button>

        <div class="progres" style="display: none">

           <div class="progres__filled"></div> 

        </div>
      </div>

    </div>

    <ul class="player__playlist list">
      <li class="player__song">

        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIsBoQjH5eWAD4ziTMLReO8EEPKf0-ZRdXA&usqp=CAU" alt="cover">

        <p class="player__context">

          <span class="flex">

            <span class="player__title">Police</span>

          </span>
          
          <b class="player__song-name">South Side</b>
          <b style="font-size:10px;">Broadcastify (Active)</b>
        </p>

        <audio class="audio" src="https://broadcastify.cdnstream1.com/35239"></audio>

      </li>


      <li class="player__song">

        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIsBoQjH5eWAD4ziTMLReO8EEPKf0-ZRdXA&usqp=CAU" alt="cover">

        <p class="player__context">

          <span class="flex">

            <span class="player__title">Police</span>

          </span>

          <b class="player__song-name">North Side</b>
<b style="font-size:10px;">CasterFM (Active)</b>
        </p>

        <audio class="audio" src="/stream.php?stream=<?php echo urlencode("https://www.caster.fm/widgets/em_player.php?jsinit=true&uid=541413&t=green&c=&pop=true"); ?>"></audio>

      </Li>
      <li class="player__song">
        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIsBoQjH5eWAD4ziTMLReO8EEPKf0-ZRdXA&usqp=CAU" alt="cover">

        <p class="player__context">

          <span class="flex">

            <span class="player__title">Police</span>

          </span>

          <b class="player__song-name">South Side 2</b>
<b style="font-size:10px;">CasterFM (maybe offline)</b>
        </p>

        <audio class="audio" src="/stream.php?stream=<?php echo urlencode("https://www.caster.fm/widgets/em_player.php?jsinit=true&uid=549317&t=green&c=&pop=true"); ?>"></audio>

      </Li>
    </ul>

<div width="100%" align="center">
<textarea style="width:100%;border:1px;border-radius:10px; font-size:10px;margin-left:30px;margin-right:30px; height:50px;">Call sign	 Use
Alpha	 Administration
Bravo	 Burnie General Duties
Charlie	 CIB Detectives
Delta	 Devonport General Duties
Echo	 Eastern Shore General Duties
Foxtrot	 Georgetown General Duties
Gulf	 Glenorchy General Duties
Hotel	 Hobart General Duties
India	 Northern Midlands
Juliet	 Domestic Violence Unit
Kilo	 Kingston General Duties
Lima	 Launceston General Duties
Mike	 Motorcycle Officer
November	 New Norfolk General Duties
Oscar	 Southern & East Coast Country
Papa	 Road and Public Order Squad
Qubec	 Queenstown & Surrounding Areas
Romeo	 Pushbikes
Sierra	 Forensics
Tango	 Traffic/Crash Investigations
Uniform	 Ulverstone General Duties
Victor	 Technicians
Whisky	 Crime Management Units
X-Ray	 CBD Foot Patrols
Yankee	 Search & Rescue/Helicopter
Zulu	 Misc/Drugs/Special Operations</textarea>
<p style="margin:10px;font-size:10px;margin-top:5px;">Notes,<br>Unavailable scanners will refuse to play or pause, streams may include 30s advertising.<br>Powered by free streaming providers, <a href="HTTPS://broadcastify.com" target="_blank">Broadcastify.com<a> and <a href ="HTTPS://caster.fm" target="_blank">Caster.fm</a><br><br><a href="https://github.com/ElijahCuff/Tas-GRN-Collection" target="_blank">GitHub Project Page</a></p></div>
</div>
<!-- partial -->
  <script  src="playertheme2.js"></script>

</body> 
</html>
