<?php
	$id="404";
	if(isset($_REQUEST["id"]))
	{
		$id=preg_replace("/[^A-Za-z0-9?!]/",'',$_REQUEST["id"]);
	}
	
	$all_data=array();
	
	// ------create a new page
	$page=array();
	$page["title"]="We konden uw pagina niet vinden";
	$page["sub"]="Pagina met id ".$id." niet gevonden";
	$page["body"]="Pagina met id ".$id." niet gevonden";
	$all_data["404"]=$page;
	
	$page=array();
	$page["title"]="V&Ouml;LLEREI";
	$page["sub"]="Restaurant & Bar";
	$page["body"]="In the real world, you don't know how long the content will be. Writers will write what they need. Photos will be cropped to the shape that they should be. That's good. Make a system that allows this. You want it to be flexible and robust.";
	$page["url"]="https://www.voellerei.at/";
	$page["client"]="Buro Bl&ucirc;n";
	$all_data["voellerei"]=$page;
	
	$page=array();
	$page["title"]="TAO TAJIMA";
	$page["sub"]="Filmmaker";
	$page["body"]="In the real world, you don't know how long the content will be. Writers will write what they need. Photos will be cropped to the shape that they should be.";
	$page["url"]="http://taotajima.jp/";
	$page["client"]="Universal Studios";
	$all_data["taotajima"]=$page;	
	 
	$page=array();
	$page["title"]="Super Crowds inc.";
	$page["sub"]="Creatieve Boerderij";
	$page["body"]="Super Crowds is een creatieve boerderij die monozukuri aanpakt in een groep met verschillende persoonlijkheden en vaardigheden om outputs te maken die verder gaan dan de verbeelding van individuen door verschillende mensen, verschillende gedachten, verschillende middelen te vermenigvuldigen, gebruikmakend van de persoonlijkheid en vaardigheden van elke persoon.";
	$page["url"]="https://supercrowds.co/";
	$page["client"]="Supercrowds";
	$all_data["supercrowds"]=$page;	
	
	$page=array();
	$page["title"]="http://www.swissgemshop.ch/";
	$page["sub"]="Some gem site I made";
	$page["body"]="Not my best work... Aah, we need the filling in the portfolio. Does it help if I say it took me 2 hours? And was done in 1984?.";
	$page["url"]="http://www.swissgemshop.ch/";
	$page["client"]="swissgemshop";
	$all_data["swissgemshop"]=$page;		




	
	// select a page based on id
	if(isset($all_data[$id]))
	{
		$page=$all_data[$id];
	}else
	{
		$page=$all_data["404"];
	}
	
?>
<html><head>
	<title><?php echo $page["title"];?></title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <script src="js/stretch_frame.js"></script>
</head>
<body>
	<section class="dark first">
		<h1><?php echo $page["title"];?></h1>
		<h3><?php echo $page["sub"];?></h3>
		<div class="stripe"></div>
		<p class="columns">
		<?php echo $page["body"];?>
		<?php 
		if(isset($page["client"]))
		{
			echo '<div class="client">Client: ';
			echo $page["client"];
			echo '</div>';
		}
		?>
		</p>
	</section>
		<a href="index.html#portfolio" class="more">Back</a>
	<?php 
	if(isset($page["url"]))
	{
		echo '<iframe src="';
		echo $page["url"];
		echo '"></iframe>';
	}
	?>
	<nav>
		<div id="logo">ASK KEN!</div>
		<ul>
			<li><a href="index.html#portfolio">portfolio</a></li>
			<li><a href="index.html#about">about</a></li>
			<li><a href="index.html#contact">contact</a></li>
		</ul>
	</nav>

</body></html>