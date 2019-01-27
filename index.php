<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Presidential, Senatorial, Congressional, Guberntorial and Democratic Primary political map simulator.">
	<meta name="keywords" content="Maps,Political,Simulator,Election,President,Governor,Senator,Congress,Primary,Interactive">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta property="og:title" content="YAPms - Yet another political map simulator">
	<meta property="og:description" content="Interactive political maps">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:site_name" content="yapms.com">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="yapms.com">
	<meta name="twitter:description" content="Interactive political maps">

	<?php 
		echo '<meta property="og:image" content="http://www.yapms.com/app/uploads/' . $_GET["i"] . '.png">';
		echo '<meta property="og:image:secure_url" content="https://www.yapms.com/app/uploads/' . $_GET["i"] . '.png">';
		echo '<meta name="twitter:image" content="https://www.yapms.com/app/uploads/' . $_GET["i"] . '.png">';
	?>

	<title>YAPms - Yet Another Political Map Simulator</title>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132710089-1"></script>
	<script>
		var host = window.location.hostname;
		if(host !== 'localhost') {
			console.log(host);
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-132710089-1');
		}
	</script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<div id="info">
		<div id="topbar">
			<h2> YAPms - Yet Another Political Map Simulator </h2>
		</div>


		<div id="welcome" class="infobox">
			<p>
				This software is currently in alpha, please bear with us as we continue to add features and eliminate bugs. Thank you!
			</p>
		</div>

		<div id="support" class="infobox">
			<p>
				<b>Supported Browsers:</b>
				Chrome, Firefox and Opera
			</p>
		</div>

		<div id="whatsnew" class="infobox">
			<b>New Stuff:</b>
			Share your maps with friends! Click share and copy the image or link!<br>
		</div>

		<div class="infobox">
			<br>If you would like to submit ideas, or report bugs, please send an email to <a style="color:blue;" href="mailto:bugreport@yapms.com">bugreport@yapms.com</a>
		</div>
	</div>
	
	<a href="./app">
		<div id="desktop" class="start">
			Desktop
		</div>
	</a>

	<br>

	<a href="./app?m=true">
		<div id="mobile" class="start">
			Mobile Beta
		</div>
	</a>

	<div id="bottombar">
		<a href="https://privacypolicies.com/privacy/view/5e9b5eee7febd2d29c0ec896e1ac90ef">Privacy</a>
	</div>

</body>

</html>
