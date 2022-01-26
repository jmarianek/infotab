<!DOCTYPE html>
<?php
include_once "panel/show_panel.php"
?>

<html lang="cs-cz">
<head>
<meta charset="utf-8"/>
<title>Informační tabule</title>
<style>
* {
  margin:0;
  padding:0;
  border:0;
}


.grid-container {
    display: grid; /* 2x2 */
    grid-template-areas:
    'main panel'
    'scroll scroll'
}

/* vsichni potomci .grid-container */
.grid-container > div
{
    padding: 20px;
    margin: 10px;
    background-color: aqua;
}

.menu {
    grid-area: menu;
}

.main {
    grid-area: main;
}

.scroll {
    grid-area: scroll;
}

/* pri 600px a mensim displeji skryjeme reklamu */
@media only screen and (max-width: 600px) {
  /* vypnuti reklamy */
  .panel {
    display: none;
  }

  /* obsah pres celou sirku */
  /*.main {
      width: 100vw;
  }*/

  .grid-container {
    grid-template-areas:
        'main'
        'scroll'
  }
}




@keyframes slide {
  from { left: 100%;}
  to { left: -100%;}
}
@-webkit-keyframes slide {
  from { left: 100%;}
  to { left: -100%;}
}

.scroll { 
  color:red; 
  background:#f0f0f0;
  width:100%;
  height:120px;
  line-height:120px;
  overflow:hidden;
  position:relative;
}

#text {
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:120px;
  font-size:30px;
  animation-name: slide;
  animation-duration: 10s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-name: slide;
  -webkit-animation-duration: 10s;
  -webkit-animation-timing-function:linear;
  -webkit-animation-iteration-count: infinite;
}
</style>
<script>
// TODO: javascript code
</script>
</head>
<body>

<div class="grid-container">
  <div class="main">
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
      Zde hlavni obsah<br/>
  </div>
  <div class="panel"><?php show_panel(); ?></div>
  <div class="scroll">
	    <div id="text">Aplikace je v přípravě...</div>
  </div>
</div>
      

</body>
</html> 
