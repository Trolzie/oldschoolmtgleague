<?php
	$baseUrl = 'http://' . $_SERVER['SERVER_NAME'];
	$url = $baseUrl . $_SERVER['REQUEST_URI'];
	$clip = '';

	if (strpos($url,'standings') !== false) {
		$clip = 'standings';
	} else if (strpos($url,'rounds') !== false){
		$clip = 'rounds';
	} else if (strpos($url,'archives') !== false){
		$clip = 'archives';
	} else {
		$clip = 'standings';
	}
?>

<article class="league">

<img class="banner" src="../assets/forceofnaturebanner.jpg">

<h1>Season 2: Force Of Nature</h1>

<nav class="league-navigation">
	<ul>
		<li><a <?php if($clip === "standings"){ echo 'class="active"';} ?> href="?standings">Standings</a></li>
		<li><a <?php if($clip === "rounds"){ echo 'class="active"';} ?> href="?rounds">Rounds</a></li>
		<li><a <?php if($clip === "archives"){ echo 'class="active"';} ?> href="?archives">Archives</a></li>
	</ul>
</nav>

	<?php
		if ($clip === 'standings') {
			include ('standings.php');
		} else if ($clip === 'rounds'){
			include ('rounds.php');
		} else if ($clip === 'archives'){
			include ('archives.php');
		} else {
			include ('standings.php');
		}
	?>


</article>