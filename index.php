<html>
<head>
	
</head>
<body>
	<?php 
	include "HTML/header.html"
	?>
<meta name="viewport"
content="width=device-width,
initial-scale=1.0" >
<div class= "col-4" style = "align-content:center; border:0px solid black; background-color: white;font-family:serif;font-size:13px"> <h1 style="font-size:13px; color: black">Hello.. Welcome to our official website, <a href="index.php">Kanairo Cloud</a></h1>
<div class="time" style="background: skyblue; border-radius:0.5em;font-weight:bold;">
<script type = "text/JavaScript" src="JS/time.js">
		</script>
		</div>
	<p style= "font-size:13px"><b>We have a variety of services our members can benefit from:</b></p><br>
		<a href="biashara.php"><div id ='biashara' style='background-color: silver; color: black;border:3px solid black;border-radius:0.5em;'>
			<li><b>BIASHARA<i>(Blooming businesses)</i></b></li>
			<img src ="biashara.jpg" style="height:95px; width:100%"><p>See our top rated business within Nairobi and their location.<p>
			</div>
			</a>
			<br>
				<a href="shop.php"><div id ='shop' style='background-color: silver; color: black;border:3px solid black;border-radius:0.5em;'>
			<li><b>CHINA NDOGO 2nd HAND SHOP<i></i></b></li>
			<img src ="shop.jpg" style="height:95px; width:100%"><p>Buy/sell used items</p>
			</div>
			</a>
			<br>
				<hr><br><hr>
			<a href = "udaku.php"><div id ='udaku' style='background-color: silver;color: black;border:3px solid black;border-radius:0.5em;font-style:bold'>
			<li><b><u>UDAKU CORNER/TRENDING NEWS</u><i> </i></b></li>
			<img src ="udaku.jpg" >
				<p>see the current news from machakos and other parts of the world</p>
			</div>
</a>
<br>
				<a href="ent.php"><div id ='entertainment' style='background-color: silver; color: black;border:3px solid black;border-radius:0.5em;'>
			<li><b>ENTERTAINMENT<i>(movies/music)</i></b></li>
			<img src ="ent.jpg"></img>
			</div>
			</a><br>
			<a href="events.php"><div id ='events' style='background-color: silver; border:3px solid black;border-radius:0.5em;'>
			<li><b><u>EVENTS.</u>See upcoming important events in Machakos</b></li>
				<img src ="events.jpg">
			</div></a>
	<br>
		<center>
<button type="button" on click="signup.php" value="sign up" >Sign Up</button>
<button type="button" on click="login.php" value="login" >login</button></center>
<hr>
	<?php
include "HTML/footer.html";
?>
</div>
</body>
</html>

