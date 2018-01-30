<html><head>
	<title>Optimise me</title>
	<style>
			* {
		  box-sizing: border-box; 
		}
		body,html{
		margin: 0;
		padding: 0;
		}
		
		nav{
			position: absolute;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			background-color: #2c3e50;
			overflow: hidden;
			font-family: Montserrat, sans-serif;
			font-weight: 700;
			color: #fff;
		}
		nav #logo{
			display: inline-block;
			height: 60px;
			margin-left: 20px;
			line-height: 60px;
		}
		nav ul{
			display: inline-block;
			position: absolute;
			right: 0px;
			top: 0;
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		nav ul li{
			display: inline-block;
			margin: 0;
			padding: 0;
		}
		nav ul li a {
			display: block;
			margin-right: 15px;
			text-decoration: none;
			background-color: transparent;
			letter-spacing: .0625rem;
			height: 60px;
			line-height: 60px;
			color: #fff;
			
		}
		nav ul li a:hover{
			background-color: transparent;
			color: #a89d5e;
		}
		section{
			padding: 15px;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
			min-height: 400px;
		}
		.first{
			margin-top: 60px;
		}
		.dark{
			text-align: center;
			padding-top: 50px;
			padding-bottom: 50px;
			background-color: #dbb626;
			color: #fff;
		}
		.footer{
			padding-top: 50px;
			padding-bottom: 50px;
			background-color: #a89d5e;
			color: #fff;
		}	

		.stripe{
			display: inline-block;
			height: 5px;
			width: 150px;
			background-color: #fff;
			 vertical-align:middle;
		}
		.star{
			vertical-align:middle;
			display: inline-block;
			width: 35px;
			height: 35px;
			margin: 15px;
			overflow: hidden;
		}
		svg{
			display: inline-block;
			vertical-align:middle;
		}
		.portrait{
			height: 30vh;
		}
		.blue{
		  background-color: #2c3e50;
		}
		.centered{
		text-align: center;
		}
		h1{
			color: #2c3e50;
			 text-transform: uppercase;
		}
		.footer h1,.dark h1{color: #fff;}
		.gallery ul {
			list-style: none;
		  margin: 0rem;
		  padding: 1rem;
		  display: grid;
		  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
		  grid-gap: 1rem; 
		}
		.gallery a{
			color: inherit;
			text-decoration: none;
			 color: #2c3e50;
		}
		.gallery img {
		  display: block;
		  width: 100%; 
		  border: 6px solid lightsteelblue;
		}

		.gallery li {
		  background: rgba(255,255,255,0.6);
		  padding: 1rem;
		  color: #2c3e50;
		}
		
		input, textarea {
			width: 100%; /* Full width */
			padding: 12px; /* Some padding */  
		}
		label{
			display: block;
			font-size: 0.7em;
			width: 100%;
			text-align: left;
			color: #a8873e;
		}
		
		input[type=submit] {
			background-color: #a8873e;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #6e5829;
		}	
		.columns{
		 -webkit-columns: 100px 1; /* Chrome, Safari, Opera */
			-moz-columns: 100px 1; /* Firefox */
			columns: 100px 1;
		}
		.client{
			color: lightsteelblue;
			font-weight: 500;
		}
		.client a{
			color: steelblue;
		}
		.more{
			margin-top: 1em;
			background-color: lightsteelblue;
			display: block;
			text-align: center;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-decoration: none;
			letter-spacing: .0625rem;
			color: #fff;
			font-family: Montserrat, sans-serif;
			font-weight: 700;
		}
		@media screen and (max-width: 390px) {
			nav{
				height: 30px;
			}
			nav #logo{
				height: 30px;
				font-size: 13px;
				line-height: 30px;
			}
			.first{
				margin-top: 30px;
			}
			.portrait{
				height: 20vh;
			}
			h3{
				font-size: 13px;
			}
			nav ul li a 
			{
				display: block;
				margin-right: 5px;
				text-decoration: none;
				background-color: transparent;
				height: 30px;
				font-size: 13px;
				line-height: 30px;
				color: #fff;
			}
		}			
		@media screen and (max-width: 420px) {
			.stripe {
				width: 25px;
			}
		}		
		@media screen and (min-width: 800px) {
			section {
				padding-left: 10%;
				padding-right: 10%;
			}
			.columns{
			 -webkit-columns: 100px 2; /* Chrome, Safari, Opera */
				-moz-columns: 100px 2; /* Firefox */
				columns: 100px 2;
			}
		}		
		@media screen and (min-width: 1200px) {
			section {
				padding-left: 15%;
				padding-right: 15%;
			}
			.columns{
			 -webkit-columns: 100px 3; /* Chrome, Safari, Opera */
				-moz-columns: 100px 3; /* Firefox */
				columns: 100px 3;
			}			
		}		
		@media screen and (min-width: 1600px) {
			section {
				padding-left: 20%;
				padding-right: 20%;
			}			
		}		
	</style>
</head>
<body>
	<!-- Start of inline multiple SVG shapes library -->
	<svg style="display: none;">
	<defs>
		<path id="shape-star" d="m48.86 22.73c.983-.958 1.33-2.364.906-3.671-.425-1.307-1.532-2.24-2.892-2.438l-12.09-1.757c-.515-.075-.96-.398-1.19-.865l-5.406-10.96c-.607-1.231-1.839-1.996-3.212-1.996-1.372 0-2.604.765-3.211 1.996l-5.407 10.96c-.23.467-.676.79-1.191.865l-12.09 1.757c-1.359.197-2.467 1.131-2.892 2.438-.424 1.307-.077 2.713.906 3.671l8.749 8.528c.373.364.544.888.456 1.4l-2.064 12.04c-.183 1.06.095 2.091.781 2.904 1.066 1.267 2.927 1.653 4.415.871l10.81-5.686c.452-.237 1.021-.235 1.472 0l10.82 5.686c.526.277 1.087.417 1.666.417 1.057 0 2.059-.47 2.748-1.288.687-.813.964-1.846.781-2.904l-2.065-12.04c-.088-.513.083-1.036.456-1.4l8.749-8.529z"/>
	</defs>
	</svg>
	<!-- End of inline multiple SVG shapes library -->
	<section class="dark first">
		<svg class="portrait" version="1.1" viewBox="0 0 508 508" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><circle cx="2.5e2" cy="2.5e2" r="2.5e2" fill="#2c3e50"/><g fill="#84DBFF"><path d="m2.6e2 3.6e2c-.4 0-.8.4-1.2.4s-.8-.4-1.2-.4h2.4z"/><path d="m4.5e2 4.1e2c-46 57-1.2e2 94-2e2 94s-1.5e2-37-2e2-94c33-44 84-66 1.3e2-77-3.2 26 10 62 11 61 14-32 61-35 61-35s47 2.8 60 35c.4.8 14-34 11-61 42 11 93 33 1.3e2 77z"/></g><path d="m3.1e2 3.1e2v.4c0 4-2 30-56 50h-2.4c-54-20-56-46-56-50v-.4c0-5.2 1.2-10 2.4-16 16 20 34 33 55 33s39-13 55-33c1.2 5.2 2.4 10 2.4 16z" fill="#e9c29c"/><g fill="#dfc29c"><path d="m3.4e2 2.1e2c-3.6 25-14 48-32 66-3.6 3.6-6.8 6.4-11 9.2l-6.4-20h-69l-6.4 20c-13-9.6-40-36-40-62-11-1.4e2 99-1.1e2 99-1.1e2 74-5.2 72 60 66 1e2z"/><path d="m3.5e2 2.4e2c-5.6 9.2-13 16-20 18 2.8-6.4 5.2-13 7.2-20v-.4l4.8-18h-.4c1.6-6 3.2-12 4.4-18 1.6 0 3.2.8 4.8 1.6 8.8 5.6 8.4 22-.4 37z"/><path d="m1.8e2 2.5e2c-7.2-2.4-15-8.8-20-18-9.2-15-9.2-31-.4-36 .8-.4 1.2-.8 2-.8 4.8 19 10 33 12 36 2 6.4 4.4 13 7.2 20z"/></g><path d="m3e2 71c3.2-37-55-34-55-34-88 13-98 95-98 95l12-14c-19 41 12 1.1e2 14 1.2e2 15 49 46 94 84 94s71-45 86-94l-2-.4c1.6-6 5.2-12 6.4-18h-.4c8-32 17-64 17-64 23-1.1e2-63-81-63-81zm38 1.4e2c-3.6 25-12 48-30 66-3.6 3.6-7.2 6.4-11 9.2l-6.4-20h-69l-6.4 20c-13-9.6-24-23-32-38-4-8-4.4-16-5.6-24-11-1.4e2 97-1.1e2 97-1.1e2 74-5.6 70 60 64 1e2z" fill="#dab546"/><path d="m2.3e2 2.8e2c6.8 7.6 17 13 28 13s21-4.8 28-13h-56z" fill="#fff"/><g transform="translate(1.2,-4.8)" fill="#54c0eb"><path d="m3.1e2 3.1e2s2.8 29-57 51c0 0 47 2.8 60 35 .8.8 28-69-3.2-86z"/><path d="m2e2 3.1e2c-31 17-4 87-3.2 86 14-32 60-35 60-35-60-22-57-51-57-51z"/></g></svg>

		<h1>Herman Onderlijn</h1>
		<h3>Web Developer - User Experience Designer</h3>
		<div class="stripe"></div>
			<!-- Use svg and 'use' command to put inline SVG shapes here as image -->
			<svg width="32" height="32" viewBox="0 0 50 50">
				<use fill="#fff" xlink:href="#shape-star"></use>
			</svg>
		<div class="stripe"></div>
	</section>
	
	<section id="portfolio" class="gallery">
		<div class="centered"><h1>Portfolio</h1>
		<div class="stripe blue"></div>
			<svg width="32" height="32" viewBox="0 0 50 50">
				<use fill="#2c3e50" xlink:href="#shape-star"></use>
			</svg>
		<div class="stripe blue"></div>
		</div>
	  <ul class="grid-container">
	  
	   <li> <a href="https://www.voellerei.at/"><img src="https://assets.awwwards.com/awards/media/cache/thumb_417_299/submissions/2017/11/5a1d7c1567fd8.png">
		  <h3>VÖLLEREI - Restaurant & Bar</h3></a>
		  <p>In the real world, you don't know how long the content will be. Writers will write what they need. Photos will be cropped to the shape that they should be. That's good. Make a system that allows this. You want it to be flexible and robust. 
		  <div class="client">Client: <a href="https://blun.nl/">Buro Blûn</a></div>
	    <a href="https://www.voellerei.at/" class="more">View more.</a></p>
		</li>
		<li>
		   <a href="http://taotajima.jp/"><img src="https://assets.awwwards.com/awards/media/cache/thumb_417_299/submissions/2017/12/5a27aeadf0fbd.jpg">
		  <h3>TAO TAJIMA - Filmmaker</h3></a>
		  <p>In the real world, you don't know how long the content will be. Writers will write what they need. Photos will be cropped to the shape that they should be. 
  		  <div class="client">Client: <a href="https://www.universalstudioshollywood.com/">universal Studio's</a></div>
		  <a href="http://taotajima.jp/" class="more">View more.</a></p>
		</li>
	   <li>
		  <a href="https://supercrowds.co/who" ><img src="https://assets.awwwards.com/awards/media/cache/thumb_417_299/submissions/2017/11/5a1fc1ec29816.jpg">
		  <h3>Super Crowds inc.</h3></a>
		  <p>WIE WIJ ZIJN
Super Crowds is een creatieve boerderij die monozukuri aanpakt in een groep met verschillende persoonlijkheden en vaardigheden
om outputs te maken die verder gaan dan de verbeelding van individuen door verschillende mensen, verschillende gedachten, verschillende middelen te vermenigvuldigen, gebruikmakend van de persoonlijkheid en vaardigheden van elke persoon.
		  <div class="client">Client: <a href="https://supercrowds.co/who">Super Crowds</a></div>
		  <a href="https://supercrowds.co/who" class="more">View more.</a></p>
		</li>
	  <li>
		  <a href="http://www.swissgemshop.ch/"><img src="https://assets.awwwards.com/awards/media/cache/thumb_417_299/submissions/2017/11/5a197c98a05b8.jpg">
		  <h3>Some gem site I made</h3></a>
		  <p>This gem site sports a nice column based grid gallery, that I'm really proud of. Also it's kind a clean.
		  <div class="client">Client: <a href="http://www.swissgemshop.ch/">the gem-store</a></div>
		  <a href="http://www.swissgemshop.ch/" class="more">View more.</a></p>
		</li>
		  </ul>
	</section>	
	<section id="about" class="footer">
		<div class="centered"><h1>About</h1>
		<div class="stripe"></div>
			<svg width="32" height="32" viewBox="0 0 50 50">
				<use fill="#fff" xlink:href="#shape-star"></use>
			</svg>
		<div class="stripe"></div>
		</div>
		<p class="columns">
		I’m Herman, one of the luckiest few whose day job is their hobby. I specialize in designing apps, websites and brand identities. Occasionally I also code websites. I’ve been freelancing since 2011 and the products I designed are being used by millions of people throughout the world.	
		</p>
	</section>	
	
	<section id="contact" class="dark">
		<div class="centered"><h1>CONTACT ME</h1>
		<div class="stripe"></div>
			<svg width="32" height="32" viewBox="0 0 50 50">
				<use fill="#fff" xlink:href="#shape-star"></use>
			</svg>
		<div class="stripe"></div>
		</div>
		<form action="/action_page.php">

		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Your name..">

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

		<input type="submit" value="Submit">

	  </form>
	
	</section>	


	<nav>
		<div id="logo">ASK KEN!</div>
		<ul>
			<li><a href="#portfolio">portfolio</a></li>
			<li><a href="#about">about</a></li>
			<li><a href="#contact">contact</a></li>
		</ul>
	</nav>

</body></html>