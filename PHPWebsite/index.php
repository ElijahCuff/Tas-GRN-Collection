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
  <link rel="stylesheet" href="back.css">

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
<img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR0NNzRt8qmzMzb3kyVX5_5LqBTtd01krrDw&usqp=CAU" alt="cover">
          <img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR0NNzRt8qmzMzb3kyVX5_5LqBTtd01krrDw&usqp=CAU" alt="cover">
          <img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD5U0SPF0XPeMfC1RnGNbHdYVSJLaxb7q7LkMfZhhW&s" alt="cover">
          <img class="img slider__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD5U0SPF0XPeMfC1RnGNbHdYVSJLaxb7q7LkMfZhhW&s" alt="cover">

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
          
          <b class="player__song-name">State/South</b>
          <b style="font-size:10px;">Broadcastify</b>
        </p>

        <audio class="audio" src="https://broadcastify.cdnstream1.com/35239"></audio>

      </li>


      <li class="player__song">

        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR0NNzRt8qmzMzb3kyVX5_5LqBTtd01krrDw&usqp=CAU" alt="cover">

        <p class="player__context">

          <span class="flex">

            <span class="player__title">Fire</span>

          </span>

          <b class="player__song-name">North West</b>
<b style="font-size:10px;">Broadcastify</b>
        </p>

        <audio class="audio" src="https://broadcastify.cdnstream1.com/25485"></audio>

      </li>


      <li class="player__song">

        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR0NNzRt8qmzMzb3kyVX5_5LqBTtd01krrDw&usqp=CAU" alt="cover">

        <p class="player__context">

          <span class="flex">

            <span class="player__title">Fire</span>

          </span>
          
          <b class="player__song-name">South</b>
<b style="font-size:10px;">Broadcastify</b>
        </p>

        <audio class="audio" src="https://broadcastify.cdnstream1.com/38396"></audio>

      </li>
      <li class="player__song">

        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD5U0SPF0XPeMfC1RnGNbHdYVSJLaxb7q7LkMfZhhW&s" alt="cover">

        <p class="player__context ">

          
          <span class="flex">

            <span class="player__title">Airport <a href="https://www.flightradar24.com/-42.15,146.75/7" style="color: black; text-decoration: none;" target="_blank">🗺︄</a></span>
         

          </span>
<b class="player__song-name">North</b>
<b style="font-size:10px;">LiveATC</b>
        </p>

        <audio class="audio" src="https://s1-fmt2.liveatc.net/ymhb2.mp3?nocache=2022073007371612963"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD5U0SPF0XPeMfC1RnGNbHdYVSJLaxb7q7LkMfZhhW&s"  alt="cover">

        <p class="player__context">

          
          <span class="flex">

            <span class="player__title">Airport <a href="https://www.flightradar24.com/-42.15,146.75/7" style="color: black; text-decoration: none;" target="_blank">🗺︄</a></span>
          <!-- <span class="player__song-time"></span> -->

          </span>
<b class="player__song-name">South</b>
<b style="font-size:10px;">LiveATC</b>
        </p>

        <audio class="audio" src="https://s1-fmt2.liveatc.net/ymhb?nocache=2022073007371612963"></audio>

      </li>

      

    </ul>
<div align="center">
<p style="margin:0px;margin-top:8px;">Additional Scanners</p>
<div style="position: relative;height:70px;width:80%; border-radius:10px;border:2px solid black;">
<div id="container" align="center" style="width: 80px; border: 0px solid black; float:left;margin-bottom:10px;">
<p id="title" align="center" style="
    float: top;
    margin: 3px;
    margin-bottom:-10px;
    colour:black">Police<p style="font-size:10px; colour dark-grey;margin:0px;margin-top:5px;">North<br>CasterFM</p></p>
<div style="margin:1px auto; margin-top:-20px; border: 0px;  overflow: hidden;max-width: 58px;max-height: 58px;border-radius: 120px;">
<iframe scrolling="no" src="https://www.caster.fm/widgets/em_player.php?jsinit=true&uid=541413&t=green&c=&pop=true" style="width:400px; height: 200px; border: -1px none;margin-left: -278.2px; margin-top: -108.5px;">
</iframe>
</div>
</div>

<div id="container" align="center" style="width: 80px; border: 0px solid black; margin-bottom:-10px; position:absolute; margin-left:35%;margin-top:10px;">
<p id="title" align="center" style="
    float: top;
    margin: 3px;
    margin-bottom:-10px;
    colour:black">Police<p style="font-size:10px; colour dark-grey;margin:0px;margin-top:5px;">South<br>Peter-Jhonson</p></p>
<div style="margin:1px auto;margin-top:-20px; border: 0px;  overflow: hidden;max-width: 40px;max-height: 40px;border-radius: 120px;">
<iframe scrolling="no" src="http://scanner.peter-johnson.com.au/HTMLAudioPlayerstream" style="width:400px; height: 200px; border: -1px none;margin-left: -55.9px; margin-top: -128.6px;">
</iframe>
</div>
</div>

<div id="container" align="center" style="width: 80px; border: 0px solid black; float:right;margin-bottom:10px;">
<p id="title" align="center" style="
    float: top;
    margin: 3px;
    margin-bottom:-10px;
    colour:black">Police<p style="font-size:10px; colour dark-grey;margin:0px;margin-top:5px;">South<br>CasterFM</p></p>
<div style="margin:1px auto; margin-top:-20px; border: 0px;  overflow: hidden;max-width: 58px;max-height: 58px;border-radius: 120px;">
<iframe scrolling="no" src="https://www.caster.fm/widgets/em_player.php?jsinit=true&uid=549317&t=green&c=&pop=true" style="width:400px; height: 200px; border: -1px none;margin-left: -278.2px; margin-top: -108.5px;">
</iframe>
</div>
</div>

</div>
</div>

<div width="100%" align="center">
<textarea style="width:100%;border:0px;border-radius:10px; font-size:10px;margin-left:30px;margin-right:30px; height:100px;">Call sign	 Use
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
<p style="margin:10px;font-size:10px;margin-top:5px;">Scanning : <?php echo $now; ?><br>Some channels may be unavailable at times, this is not in our control as the streaming provider may have their scanner disconnected from time to time. - Unavailable scanners will refuse to play or pause.<br>These streams are scraped from the internet and some include 30 second advertising when starting a stream.<br><br>Powered by <a href="HTTPS://broadcastify.com" target="_blank">Broadcastify.com<a>, <a href ="HTTPS://caster.fm" target="_blank">Caster.fm</a>, <a href ="https://scanner.peter-johnson.com.au/" target="_blank">Peter-johnson.com.au</a>, and <a href="https://liveatc.net" target="_blank">LiveATC.net</a><br><br><a href="https://github.com/ElijahCuff/Tas-GRN-Collection" target="_blank">GitHub Project Page</a></p></div>
</div>
<!-- partial -->
  <script  src="back.js"></script>

</body> 
</html>
