<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<meta charset="UTF-8" />
<!--
//////////////////////////////////////////////////////
// 													//
// 	Copyright Petter karlsson PK-Multimedia 2004	//
//													//
// 	www.pkm.nu										//
//													//
//	webmaster@tokigamasar.st						//
//													//
//////////////////////////////////////////////////////
-->
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK rel="StyleSheet" type="text/css" href="../css/default.css">
<style>
body,table,tr,td,div,span{
	font:10px verdana;
}
a{font-weight:bold;}
.text{border:1px solid #666666; font:10px verdana;background:#eeeeee; width:120px;}
.knapp{border:1px solid #666666; font:10px verdana;background:#ffffff}
</style>
<script>
function avbryt(){
	return false
}
document.oncontextmenu = avbryt
function spelarinfo(namn,lag,speed,skott,image,info){
	this.namn = namn
	this.lag = lag
	this.speed = speed
	this.skott = skott
	this.image = image
	this.info = info
}
var lag = new Array()
lag[0] = "lif"
lag[1] = "tms"
lag[2] = "oldies"
lag[3] = "judas"
var ospelarinfo
var player = new Array()
function init(){
	ospelarinfo = document.getElementById("spelarinfo")
}
function valjSpelare(index){
	if(index == -1) return false
	else {
		ospelarinfo.style.visibility = "visible"
		ospelarinfo.innerHTML = "<b>Spelarinfo:</b><br>" + player[index].namn + "<br><b>Lag:</b> " + player[index].lag + "<br><b>Snabbhet:</b> " + player[index].speed + "<br><b>Skjuter:</b> " + player[index].skott + "<br><img src='" + player[index].image + "' width=60 height=84><br>" + player[index].info
		
		document.valform.hidden1.value = index
		document.valform.hidden2.value = player[index].image
	}
}
function valjLag(index){
	document.valform.valspelare.selectedIndex = 0
	ospelarinfo.style.visibility = "hidden"
	if(index == -1) return false
	if(lag[index] == "lif"){
		player[0] = new spelarinfo(null,null,null,null,null,null)
		player[0].namn = "Niklas Persson" 
		player[0].lag = "Leksand" 
		player[0].speed = "Normal" 
		player[0].skott = "Normal"
		player[0].image = "nik.gif" 
		player[0].info = "Har både snabbhet och ett bra skott!"  
		
		player[1] = new spelarinfo(null,null,null,null,null,null)
		player[1].namn = "Jens Nielsen" 
		player[1].lag = "Leksand" 
		player[1].speed = "Snabb" 
		player[1].skott = "Löst" 
		player[1].image = "jensa.gif" 
		player[1].info = "Väldigt teknisk spelare som inte är känd för att ha elitens hårdaste skott"  
		
		player[2] = new spelarinfo(null,null,null,null,null,null)
		player[2].namn = "Hans Lodin" 
		player[2].lag = "Leksand" 
		player[2].speed = "Långsam" 
		player[2].skott = "Hårt" 
		player[2].image = "lodin.gif" 
		player[2].info = "Back som inte dribblar bäst i eliten, men har ett fruktat skott!" 
		 
		document.valform.valspelare.options[1].text = player[0].namn
		document.valform.valspelare.options[2].text = player[1].namn
		document.valform.valspelare.options[3].text = player[2].namn
		document.getElementById("valspelare").style.visibility = "visible"
	}
	else if(lag[index] == "tms"){
		player[0] = new spelarinfo(null,null,null,null,null,null)
		player[0].namn = "Knug Olaf" 
		player[0].lag = "TMS" 
		player[0].speed = "Normal" 
		player[0].skott = "Normal"
		player[0].image = "knugen.gif" 
		player[0].info = "Sekreterare"  
		
		player[1] = new spelarinfo(null,null,null,null,null,null)
		player[1].namn = "Betto" 
		player[1].lag = "TMS" 
		player[1].speed = "Snabb" 
		player[1].skott = "Löst" 
		player[1].image = "betto.gif" 
		player[1].info = "V-Ordförande"  
		
		player[2] = new spelarinfo(null,null,null,null,null,null)
		player[2].namn = "Matematikern" 
		player[2].lag = "TMS" 
		player[2].speed = "Långsam" 
		player[2].skott = "Hårt" 
		player[2].image = "matematikern.gif" 
		player[2].info = "Ordförande" 
		 
		document.valform.valspelare.options[1].text = player[0].namn
		document.valform.valspelare.options[2].text = player[1].namn
		document.valform.valspelare.options[3].text = player[2].namn
		document.getElementById("valspelare").style.visibility = "visible"
	}
	else if(lag[index] == "oldies"){
		player[0] = new spelarinfo(null,null,null,null,null,null)
		player[0].namn = "Tomas Forslund" 
		player[0].lag = "Oldies but goldies" 
		player[0].speed = "Normal" 
		player[0].skott = "Normal"
		player[0].image = "tomas_forslund.gif" 
		player[0].info = "Har både snabbhet och ett bra skott!"  
		
		player[1] = new spelarinfo(null,null,null,null,null,null)
		player[1].namn = "Magnus Svensson" 
		player[1].lag = "Oldies but goldies" 
		player[1].speed = "Snabb" 
		player[1].skott = "Löst" 
		player[1].image = "sigge.gif" 
		player[1].info = "Namnet säger allt!"  
		
		player[2] = new spelarinfo(null,null,null,null,null,null)
		player[2].namn = "Tomas Jonsson" 
		player[2].lag = "Oldies but goldies" 
		player[2].speed = "Långsam" 
		player[2].skott = "Hårt" 
		player[2].image = "tomas_jonson.gif" 
		player[2].info = "Kommentarer överflödiga..." 
		 
		document.valform.valspelare.options[1].text = player[0].namn
		document.valform.valspelare.options[2].text = player[1].namn
		document.valform.valspelare.options[3].text = player[2].namn
		document.getElementById("valspelare").style.visibility = "visible"
	}
	else if(lag[index] == "judas"){
		player[0] = new spelarinfo(null,null,null,null,null,null)
		player[0].namn = "Robert Burakowsky" 
		player[0].lag = "Judas" 
		player[0].speed = "Normal" 
		player[0].skott = "Normal"
		player[0].image = "robert_burra.gif" 
		player[0].info = "Med snabbhet och ett bra skott."  
		
		player[1] = new spelarinfo(null,null,null,null,null,null)
		player[1].namn = "Robert Nilsson" 
		player[1].lag = "Judas" 
		player[1].speed = "Snabb" 
		player[1].skott = "Löst" 
		player[1].image = "robert_nilsson.gif" 
		player[1].info = "Snabb och teknisk" 
		
		player[2] = new spelarinfo(null,null,null,null,null,null)
		player[2].namn = "Janne Houkko" 
		player[2].lag = "Judas" 
		player[2].speed = "Långsam" 
		player[2].skott = "Hårt" 
		player[2].image = "jan_huuk.gif" 
		player[2].info = "Hårt skott" 
		 
		document.valform.valspelare.options[1].text = player[0].namn
		document.valform.valspelare.options[2].text = player[1].namn
		document.valform.valspelare.options[3].text = player[2].namn
		document.getElementById("valspelare").style.visibility = "visible"
	}
}
function reggaInfo(obj){
	if(document.valform.hidden1.value == "" || document.valform.hidden2.value == "" || document.valform.valnamn.value == ""){
		alert("Du måste välja namn, lag och spelare innan du kan spela")
		return false
	}
	else {
		parent.frames[0].location = "points.html"
		return true
	}
}
function info(visa){
	if(visa){
		document.getElementById("info").style.visibility = "visible"
		document.getElementById("vallag").style.visibility = "hidden"
		document.getElementById("valspelare").style.visibility = "hidden"
	}
	else {
		document.getElementById("info").style.visibility = "hidden"
		document.getElementById("vallag").style.visibility = "visible"
		document.getElementById("valspelare").style.visibility = "hidden"
	}
}
</script>
</head>

<body onLoad="init()">
<div id="info" style="position:absolute; background:white; left:8px; top:0px;padding:8px;visibility:hidden;width:400px;border:1px solid #C2C2D0; z-index:8;">
	<h3>Välkommen till TMS Penalty Challenge</h3>
	Var med och tävla med våra andra besökare i att sätta straffar på Sveriges bästa målvakter.<br>
	Kommer du att hamna på vår ärade <a href="visa_resultat.php" target="_parent">10 i topp - lista?</a><br><br>
	Spelet fungerar bäst i Internet Explorer 6+ och Mozilla 1.0+
	 <h3>Instruktioner.</h3>
	1 Skriv ditt namn<br>
	2 Välj lag<br>
	4 Välj spelare (olika spelare har olika egenskaper)<br>
	5 Tryck på "Spela!"<br>
	6 Vänta tills spelet laddas klart<br>
	7 Starta en omgång med "space"<br>
	8 Dribbla med musen, eller skjut med vänster musknapp.<br>
	Du har tre försök på dig per omgång.<br>
	<b>! Ny poängräkning !</b><br>
	Du får 30p för mål på första straffen/omgång, -5 för stolpträff och -10 för miss.<br>
	De 10 bästa poängplockarna finns att beskåda <a href="visa_resultat.php" target="_parent">här</a><br><br>
	<a href="javascript://" onClick="info(false)">Göm info</a>
</div>
<a href="javascript://" onClick="info(true)">Visa info</a>
<form action="motor3.php?level=1&grad=1" method="get" name="valform" id="valform" onSubmit="return reggaInfo(this)">
<input type="hidden" value="1" name="level">
<input type="hidden" value="1" name="grad">
<input type="hidden" value="" name="hidden1">
<input type="hidden" value="" name="hidden2">
  Ditt namn:<br>
	<input name="valnamn" type="text" id="valnamn" class="text">
	<br>
	
	<br>
	<select name="vallag" id="vallag" onChange="valjLag(this.form.vallag.selectedIndex-1)" style="visibility:visible;" class="text">
		<option>Lag </option>
	  <option>Leksand</option>
	  <option>TMS</option>
	  <option>Oldies but goldies</option>
	  <option>Judas</option>
	</select>
	<br><br>
	<select name="valspelare" id="valspelare" onChange="valjSpelare(this.form.valspelare.selectedIndex-1)" style="visibility:hidden;" class="text">
		<option>Spelare</option>
		<option></option>
		<option></option>
		<option></option>
	</select>
  <br><br>
  <input type="submit" value="Spela!" class="knapp">
  </form>
  
  <div id="spelarinfo" style="position:absolute; background:url(bg1.gif); left:170px; top:10px;padding:8px;visibility:hidden;width:300px; height:150px;border:1px solid #C2C2D0">&nbsp;</div>  <br><br>  <br><br><br><br><br><br><br><br><br><br><br>
<div align="right"><a href="mailto:webmaster@tokigamasar.st">&copy; Petter karlsson PK-Multimedia</a></div>
</body>
</html>
