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
	<title>Get Smart Blinds with this Android app</title>
    <meta name="description" content="Control all your motorised blinds within a single Dashboard. This is possible with this Android App and Sonoff Dual smart switch." />
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
		<h2 style="text-align:center; font-weight:lighter; margin-top:10px; margin-bottom:40px;">Part Three: Dashboard Configuration</h2>
		<p><i>Last edited: 01/09/2019</i></p>
		<div id="warning">
			<b>ELECTROCUTION HAZARD</b>
			<br>
			The Sonoff is an electrical device that uses high voltage. If you are unsure of the operation and connection of the Sonoff, ask an expert electrician for help. I take no responsibility for the installation of electrical materials and for the suggestions provided on this page.
		</div>
		<h3>Android App</h3>
		<p>
		Download the Android App <a target="_blank" href="https://play.google.com/store/apps/details?id=com.enricolobianco.smartblinds&hl=en">Smart Blinds for Sonoff Dual</a><b> only available for tablets</b>.
		<br>
		<div style="margin:auto">
		<a 	target="_blank"
			href='https://play.google.com/store/apps/details?id=com.enricolobianco.smartblinds&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
				<img 
					alt='Available on Google Play' 
					src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' 
					style="width:200px;"/>
		</a>
		</div>
		<br>
		This application implements the two main systems needed to control the Sonoffs:
		<ol>
			<li>An MQTT broker that acts as a server and receives all messages from clients (Sonoff switches);</li>
			<li>A Dashboard that allows the user to interact with the Sonoffs to control the blinds.</li>
		</ol>
		This means that it is not necessary to have another device (eg RaspberryPi) as a MQTT broker because the app already implements one. 
		<br><br>
		The app is only available for tablets because the bigger screen allows for more devices being shown in the dashboard. Plus, the tablet can be wall mounted to resemble a realistic smart dashboard. 
		<br><br>
		<b>The tablet and the Sonoffs must be connected to the same WiFi network!</b>
		</p>
		<br><h3>MQTT configuration on the Sonoff Dual</h3>
		<p>
		MQTT is a publish-subscribe messaging protocol which is widely used in the Internet of Things. If you want to learn more about it, look for MQTT on Google. 
		<br><br>
		To prepare the Sonoff for the connection, go to its web page and navigate to <span class="code">Configuration</span>, then <span class="code">MQTT Configuration</span>.
		</p>
		<img src="../img/tasmota_mqtt.png" class="single-img"/>
		<p>
		<ul>
			<li><b>Host:</b> Enter the<b>ip address of the tablet</b> on which the app has been installed.</li>
			<br><li><b>Porta:</b> Leave the default port <b>1883</b>.</li>
			<br><li><b>Topic:</b> Enter a string that will identify this particular Sonoff within the app.
			<br>
			<b>WARNING:</b> In order to work with the app, the Topic must contain lowercase letters only! Each Sonoff must have a different topic.
			<br><br><li><b>Full Topic:</b> It is important that this field remains as it is by default.</li>
		</ul>
		Once configuration is complete, click on <span class="code">Save</span> to apply the changes.
		</p>
		<br><h3>Adding a new device in the app</h3>
		<p>
		First thing is to add all the Sonoff devices you wish to control. To start, simply click on the <span class="code">+</span> button at the bottom left. This screen will appear: 
		<br><br>
		<img src="../img/new_device.gif" class="single-img"/>
		<ul>
			<li><b>Name:</b> Enter any name to identify the blind.</li>
			<br><li><b>MQTT Topic:</b> Enter the string that was chosen in the previous step as Topic in Sonoff's MQTT Configuration.</li>
			<br><li><b>Type:</b> The app supports two types of blinds: the rolling shutters with holes and the American style blinds. Choose the one that best fits your needs.</li>
			<br><li><b>Times:</b> These are the opening and closing times of the blind. Animation helps to understand what each time refers to. Starting from left to right and from top to bottom the times are: 
			<br><br>
			<b>Rolling shutter with holes</b>
				<ul>
					<li>From open to closed with visible holes (when the shutter touches the ground)</li>
					<li>Since it touches the ground to completely closed</li>
					<li>From completely closed to when it touches the ground (visible holes)</li>
					<li>From when it touches to the ground to completely open</li>
				</ul>
			<br><b>American style blind</b> (not visible in the image)
				<ul>
					<li>From completely open to completely closed</li>
					<li>From completely closed to completely open</li>
				</ul>
			<br>
			Times are important to determine the position of the shutter. In fact, the app builds a shutter animation so that the user knows his current status simply by looking at the tablet. 
			<br><br>
			Measure the times with a stopwatch then enter the values ​​in the corresponding boxes. Approximate the time measured in excess. For example, if you measure 10.35 seconds, enter 11.
			</li>
		</ul>
		After entering all the data, click on the check mark at the bottom right to confirm. If everything is successful, the new device will appear in the list on the left.
		</p>
		<br><h3>Starting the Dashboard</h3>
		<p>
		After adding all the devices (one at least) we will find ourselves with this screen: 
		<br><br>
		<img src="../img/home.png" class="single-img"/>
		<br>
		Before starting the Dashboard we can choose some settings:
		<ul>
			<li><b>Keep the screen active:</b> Prevents the tablet from entering sleep mode.</li>
			<br><li><b>Restore the previous state:</b> The position of the shutters is memorized in order to restore it when the app is closed and opened again.</li>
			<br><li><b>Enable dark theme:</b> Change the colors of the Dashboard.</li>
		</ul>
		Eventually click <span class="code">Start the Dashboard</span> to load the Dashboard in full-screen mode:
		<br><br>
		<img src="../img/dash.png" class="single-img"/>
		<br>
		When the dashboard starts there is a short period of loading during which the tablet tries to establish the connection with the Sonoffs. In the image above the <span class="code">test</span> device is connected. This can be seen by the color of the buttons. 
		<br>
		The second device (entered for demonstration only) did not successfully connect and the buttons are gray until connection is made.
		</p>
		<p>The configuration is finished. The app currently allows the addition of up to 11 devices. Probably this limit will be cut down with future updates.</p>
		<br>
		<h3>Recommended scenario</h3>
		<p>I personally installed the application on a tablet and mounted the tablet to the wall. 
		<br>
		To simulate a real dashboard I activated the <i>screensaver</i> from the Android settings. <a href="https://support.google.com/nexus/answer/2818748?hl=en" target="_blank">Here is a guide on how to activate the screensaver on Android devices.</a>
		<br>
		In the application it is essential that the <i>Keep the screen active</i> setting <b>is unchecked</b>. The other two settings can be checked or not depending on your needs. 
		<br>
		In this way we allow the tablet to activate the screensaver after a few seconds of inactivity. This way you can reactivate the tablet with just a single touch. Plus, the tablet will reactivate directly in the application. 
		<br>
		I tried different combinations and I think this is the best so far.
		</p>
	</div>
</body>
</html>