<!DOCTYPE html>

<html lang="cs-cz">
<head>
<meta charset="utf-8"/>
<title>Informační tabule</title>
<link rel="stylesheet" href="style-001.css">
<link rel="stylesheet" href="panel/style.css">
<script src="panel/show_panel-001.js" defer></script>
<script src="panel/showTime-001.js" defer></script>
<script src="panel/showDate-001.js" defer></script>
<script src="panel/showWeather-001.js" defer></script>
</head>

<body class="noselect">
<div class="grid-container">
  <div class="main">
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
  </div>
  <div class="panel">    
    <div id="clock">00:00:00</div>
    <div id="date">dd.mm.yy</div>
    <div id="weather">
    <p> <img id= image src=""></img> <span id=stav></span> </p>
    <p> Teplota:<span id=teplota>20</span>° Tlak:<span id=tlak>1000</span>hPa Vlhkost:<span id=vlhkost>53</span>% </p>
    </div>
    <div id="udalosti"></div>
  </div>
    <!--</div><script> show_panel(); </script>-->
  <div class="scroll">
	    <div id="text">Aplikace je v přípravě...</div>
  </div>
</div>

</body>
</html> 
