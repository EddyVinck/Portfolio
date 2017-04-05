<?php 
# includes
foreach (glob("inc/*.php") as $filename)
{
    include $filename;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Eddy Vinck</title>		
	<meta name="keywords" content="Portfolio Eddy Vinck "/>
	<meta name="description" content="Deze pagina is een index van de klassen 16AOA en 16AOB van het ICT-College ROC-ter-AA"/>
	<meta name="student" content="Eddy Vinck"/>
	<meta name="class" content="16AOB"/>
	<link rel="icon" href="img/icon.png">
	<?php // You need to use the viewport meta tag or else the browser will try to shrink your page 1:1?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php newHeader(); ?>
<div class="nav-bullets">
<ul>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
</ul>	
</div>
<div class="section1">
	<div class="section-greeting">
	<span>&nbsp</span><label>HALLO</label><span class="typed-cursor">|</span>
	</div>
	<div class="section-content close">
	<p>Mijn naam is <span class="highlight">Eddy Vinck</span>. Ik ben een software- en web-developer in opleiding, echter heb ik een voorkeur voor web. Voor school heb ik een aantal projecten uitgewerkt en deze zijn op deze pagina te bekijken.</p>
	</div>
</div>
<div class="section-projects IE">
	<div class="section-title small-title">
	<label>IRIDIUM ENTERTAINMENT</label>
	</div>
	<div class="section-content">
		<div class="section-text">
			<p>Dit project is een webwinkel en radio-website in een. Dit was de eerste keer dat we met een MySQL database hebben gewerkt.</p>
		</div>	
		<div class="img-showcase">
			<img src="img/IE-games.png">
			<img src="img/IE-radio.png">
		</div>
	</div>
</div>
<div class="section-projects pepe-vault">
	<div class="section-title">
	<label>PEPE VAULT</label>
	</div>
	<div class="section-content">			
		<div class="img-showcase">
			<img src="img/pepe-vault.png">
		</div>
		<div class="section-text">
			<p>Met dit project waarbij we een kluis maakten, raakten we voor het eerst in aanraking met wat meer 'echt' JavaScript. Het was meer dan simpele HTML elementen beïnvloeden.</p>
		</div>
	</div>
</div>
<div class="section-projects top2000">
	<div class="section-title">
	<label>TOP 2000</label>
	</div>
	<div class="section-content">
		<div class="section-text">
			<p>Voor de top 2000 moesten we een database gebruiken en MySQL queries aanpassen naar zoekopdrachten. Styling was niet zo belangrijk, want het ging puur om functionaliteit.</p>
		</div>			
		<div class="img-showcase">
			<img src="img/top2000.png">
		</div>
	</div>
</div>
<div class="section-projects GB">
	<div class="section-title">
	<label>GUESTBOOK</label>
	</div>
	<div class="section-content">			
		<div class="img-showcase">
			<img src="img/guestbook2.png">
		</div>
		<div class="section-text">
			<p>De opdracht was simpel: maak een gastenboek waarin berichten in een database komen te staan. Iets te simpel, vond ik, dus heb ik het mogelijk gemaakt om op posts te reageren en ik heb veel gefocused op de styling.</p>
		</div>
	</div>
</div>
<div class="section-projects csharp">
	<div class="section-title">
	<label>C# PROJECTEN</label>
	</div>
	<div class="section-content">
		<div class="section-text">
			<p>Met C# hebben we verschillende projecten uitgevoerd. Ik heb een twee spelletjes gemaakt: Raad Het Getal en Dragrace. Met Dragrace hebben we geleerd Object-Oriented te programmeren.</p>
		</div>			
		<div class="img-showcase">
			<img src="img/csharp-projects.jpg">
		</div>
	</div>
</div>
<div class="section-skills">
	<div class="section-title">
	<label>SKILLS</label>
	</div>
	<div class="section-content">
		<div>
		<p>Dit zijn de skills die ik gebruik voor mijn projecten. Voor deze pagina heb ik bijvoorbeeld het design in met Photoshop uitgewerkt en het design vervolgens tot leven gebracht.</p>
		</div>
		<div class="skills">			
			<img src="img/icons/html5/html5-original-wordmark.svg">
			<img src="img/icons/css3/css3-original-wordmark.svg">
			<img src="img/icons/javascript/javascript-original.svg">
			<img src="img/icons/php/php-original.svg">
			<img src="img/icons/mysql/mysql-original-wordmark.svg">
			<img src="img/icons/csharp/csharp-original.svg">
			<img src="img/icons/photoshop/photoshop-plain.svg">
		</div>	
	</div>
</div>
<script src="" type="text/javascript"></script>
</body>
<!--
Licence for programming language images: 
The MIT License (MIT)

Copyright (c) 2015 konpa

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
</html>