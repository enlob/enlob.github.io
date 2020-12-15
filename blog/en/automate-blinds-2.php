<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55896106-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-55896106-4');
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enable Interlock on Sonoff Dual</title>
    <meta name="description" content="Tutorial to enable Interlock on Sonoff Dual. Interlock is crucial to avoid turning on both switches at the same time." />
	<link rel="stylesheet" href="../style/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-3570140930678126",
		enable_page_level_ads: true
	  });
	</script>
	
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', init, false);

		function init(){
		  adsBlocked(function(blocked){
			if(blocked){
			  document.getElementById('adsMsg').style.display = 'block';
			} else {
			  document.getElementById('adsMsg').style.display = 'none';
			}
		  })
		}

		function adsBlocked(callback){
		  var testURL = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'

		  var myInit = {
			method: 'HEAD',
			mode: 'no-cors'
		  };

		  var myRequest = new Request(testURL, myInit);

		  fetch(myRequest).then(function(response) {
			return response;
		  }).then(function(response) {
			console.log(response);
			callback(false)
		  }).catch(function(e){
			console.log(e)
			callback(true)
		  });
		}
	</script>
</head>
<body>
	<div id="adsMsg">
		This website survives on ads.<br>
		Please disable your Ad Blocker and refresh the page.
	</div>
	
	<div id="header" style="margin:0 auto; text-align:center; padding-top:30px;">
		<a href="https://enricolobianco.com/en"><span style="margin:10px">Home</span></a>
		<!--<span style="margin:10px">English</span>-->
	</div>
	<div id="post-content">
		<h1 style="font-weight:lighter;">Automate blinds with Sonoff Dual</h1>
		<h2 style="text-align:center; font-weight:lighter; margin-top:10px; margin-bottom:40px;">Part two: Sonoff Configuration</h2>
		<p><i>Last edited: 28/01/2019</i></p>
		<div id="warning">
			<b>ELECTROCUTION HAZARD</b>
			<br>
			The Sonoff is an electrical device that uses high voltage. If you are unsure of the operation and connection of the Sonoff, ask an expert electrician for help. I take no responsibility for the installation of electrical materials and for the suggestions provided on this page.
		</div>
		<h3>Interlock</h3>
		<p>By default the two Sonoff Dual outputs can be activated simultaneously. This behavior can damage the motor. Therefore it is necessary to activate the interlock on the two outputs so that only one is active at a given instant.
		<br>
		The Sonoff Dual does not have a hardware iterlock. However the Tasmota firmware adds the possibility to activate a software interlock.
		<br>
		To activate it just go to the Sonoff Dual web page and write this command at the end of the ip address:
		<br><br>
		<span class="code">/cm?cmnd=SetOption14%201</span>
		<br><br>
		For example if the IP address of Sonoff is 192.168.1.5, the full url will look like this:
		<br><br>
		<span class="code">http://192.168.1.5/cm?cmnd=SetOption14%201</span>
		<br><br>
		<b>WARNING:</b> Starting from Tasmota version 6.4.1.11 the <span class="code">SetOption14</span> command is deprecated. In this case use the <span class="code">Interlock</span> command:
		<br><br>
		<span class="code">http://192.168.1.5/cm?cmnd=Interlock%201</span>
		<br><br>
		For more information on the available commands, visit <a target="_blank" href="https://github.com/arendst/Sonoff-Tasmota/wiki/Commands">the official page</a>.
		<br><br>
		After typing the command, just press <span class="code">Enter</span>. Then go back to the main Sonoff web page and check that the two outputs do not activate simultaneously.</p>
		<br>		
	</div>
</body>
</html>