<?php
	$baseUrl = 'http://' . $_SERVER['SERVER_NAME'];
	$url = $baseUrl . $_SERVER['REQUEST_URI'];
	$clip = "";

	$url = str_replace("oldschoolmtgleague","",$url);

	if (strpos($url,'league') !== false) {
		$clip = "league";
	} else if (strpos($url,'rules') !== false){
		$clip = "rules";
	} else {
		$clip = "home";
	}
?>

<div class="logo">
	<img src=<?php $baseUrl ?>"/assets/homer-old-school.png">
</div>
<p>Old School MTG League</p>
<nav class="main-navigation">
	<ul>
		<li>
			<a <?php if($clip == "home"){ echo 'class="active"';} ?> href="/" class="home">Home</a>
		</li>
		<li>
			<a <?php if($clip == "league"){ echo 'class="active"';} ?> href="/league">League</a>
		</li>
		<li>
			<a <?php if($clip == "rules"){ echo 'class="active"';} ?> href="/rules">Rules</a>
		</li>
	</ul>
</nav>
<p>Join the community on: <a href="https://www.facebook.com/groups/1010196932351257/" target="_blank">Facebook</a></p>
<!--
<p>get in touch:<br/>
tlrc<a href="http://www.google.com/recaptcha/mailhide/d?k=01unsBDT1fStITMfuFdtKfwQ==&amp;c=kaLI-4tUctDsHBqXkUWftBnZfnApVBRlagcT-ups0lU=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501unsBDT1fStITMfuFdtKfwQ\75\75\46c\75kaLI-4tUctDsHBqXkUWftBnZfnApVBRlagcT-ups0lU\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">...</a>@gmail.com<br/>
+45 3156 4666</p> -->

