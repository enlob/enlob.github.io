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
	<title>Install Tasmota over WiFi - Change Sonoff Dual firmware</title>
    <meta name="description" content="Here's how to install Tasmota firmware on your Sonoff Dual. The simple installation process is done over WiFi. This is the first step to automate your house blinds." />
	<link rel="stylesheet" href="../style/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-3570140930678126",
		enable_page_level_ads: true
	  });
	</script>
	
	<script>
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
		<h2 style="text-align:center; font-weight:lighter; margin-top:10px; margin-bottom:40px;">Part one: Install Tasmota Firmware</h2>
		<p><i>Last edited: 08/22/2018</i></p>
		<div id="warning">
			<b>ELECTROCUTION HAZARD</b>
			<br>
			The Sonoff is an electrical device that uses high voltage. If you are unsure of the operation and connection of the Sonoff, ask an expert electrician for help. I take no responsibility for the installation of electrical materials and for the suggestions provided on this page.
		</div>
		<h3>What is Sonoff Dual?</h3>
		<p>Sonoff Dual is a <b>WiFi switch</b> that can control two electrical devices from your smartphone. It has two input terminals that accept the line and neutral cables of the power line and four output terminals: one phase and one neutral for each device. 
		<br>
		For example, we could connect two lights to the Sonoff outputs in order to control them separately. However the double output allows us to adopt the Sonoff Dual to control the ascent and descent of a tubular motor for shutters. Here is an example of a connection with two generic loads:</p>
		<img src="../img/schema di collegamento.jpg" alt="schema di collegamento" class="single-img"/>
		<h3>Why Sonoff Dual?</h3>
		<h4>I already have electric shutters. I want to control them from my smartphone.</h4>
		<p>I already have electric shutters but they are driven by physical buttons. The Sonoff installation allows smart control via smartphone and offers the possibility of creating intelligent opening and closing scenarios: continuous opening for <i>n</i> seconds, automatic closing at sunset, etc. However we will later need to configure a home automation software such as <a href="https://www.home-assistant.io/" target="_blank">Home Assistant</a> to create automations.</p>
		<h4>I do not have electric shutters. I want to add the motors and control the shutters from my smartphone.</h4>
		<p>
		If your electrical system is set up for the installation of electric shutters, then you are able to roll out the necessary cables without any problem. This way you can use the physical buttons and you can decide to add the Sonoff Dual for a smart control. 
		<br>
		Worst case: your system only has an alarm line or any line that passes through all the doors and from which it is possible to recover the power cables for the motors. In this case the best option is to use Wifi relays to control the shutters. <b>Be careful</b>: it is not recommended (and not legal) to use the same pipe for data cables (alarm) and 220V cables (motors). This means that one use precludes the other.
		</p>
		<h3>Install the Tasmota firmware</h3>
		<p>The original firmware allows immediate use of the Sonoff via the eWeLink app. However it is not suitable for use with roller shutters. The Tasmota firmware, in fact, allows to enable a <b>software interlock</b> that prevents the two outputs from turning on simultaneously. This is necessary to avoid damage to the engine. In addition, Tasmota facilitates integration with home automation systems such as <a href="https://www.home-assistant.io/" target="_blank">Home Assistant</a>.
		</p>
		<p>The easiest way to install Tasmota is by using <b>SonOTA</b>. The installation happens through WiFi and it does not require access to the Sonoff serial pins. However this method only works if the Sonoff has a certain version of the original firmware. <b>A version >= 1.6 is required!</b> In order to know the version, you should configure the Sonoff on the eWeLink app and search for the device information. Aside from that, my advice is to follow the Tasmota installation procedure. If the Sonoff firmware is not suitable, the procedure will fail but you can still enjoy the Sonoff with the original firmware via the eWeLink app.  
		<br>
		Here's how to proceed on a Windows based system:
		</p>
		<ol>
		<li><p>Download sonota.exe from the <a href="https://github.com/mirko/SonOTA/releases" target="_blank">release</a> page.</p></li>
		<li><p>Disable all firewalls on the PC.</p></li>
		<li><p>Power the Sonoff as shown in the figure. My advice is to get a cable and open it at one end so as to perform the initial operations on the workbench rather than in the shutter box.</p>
		<img src="../img/sonoff presa.jpg" alt="sonoff con presa" class="double-img" />
		<img src="../img/sonoff morsetti.jpg" alt="collegamento dell'alimentazione al sonoff" class="double-img" /></li>
		<li><p>Connect the socket. The LED flashes slowly. Hold the button on the Sonoff for 8 seconds until the LED flashes three times consecutively. Then press the button again for 8 seconds until the LED flashes quickly. This procedure is necessary to make the Sonoff WiFi network appear.</p></li>
		<li><p>Open sonota.exe <b>as administrator</b>. The wizard starts.</p></li>
		<li><p>Select the IP address of the computer. Be careful to choose its address on the local network. To be sure, just open the command prompt and type the command "ipconfig".<br>In my case the address is 192.168.1.6 so I enter 0 (which is the default choice).</p>
		<img src="../img/sonota primo screen.png" alt="sonota primo passo" class="single-img" /></li>
		<li><p>Enter the SSID of the WiFi network to which the Sonoff will connect. It probably is the same SSID to which the PC is connected. Press enter and type the WiFi network password. These data will be communicated to Sonoff in the following phases.</p></li>
		<li><p>Now you need to connect to the Sonoff WiFi network which will look like <b>ITEAD-100001XXXX</b>. The default password is <b>12345678</b>. Once connected, the PC sends the WiFi information to the Sonoff.</p></li>
		<li><p>Connect back to the local network. The Sonoff (now connected to the local network) will download the Tasmota firmware from the PC (server).</p></li>
		<li><p>This message will indicate the end of the download. Follow the instructions and connect the PC to the open <b>FinalStage</b> network.</p>
		<img src="../img/sonota secondo screen.png" alt="sonota secondo screen" class="single-img" /></li>
		<li><p>The installation concludes with a message that advises you to connect to the Sonoff network to configure WiFi. As soon as you connect to it, you will be redirected to the WiFi configuration page. Just enter the SSID and password (AP1 is sufficient) of your router to complete the Tasmota installation.</p>
		<img src="../img/tasmota configurazione wifi.png" alt="tasmota configurazione wifi" class="single-img" border="1" /></li>
		</ol>
		<h3>Change module type</h3>
		<p>Don't be surpirsed to read <b>Sonoff Basic Module</b> instead of <b>Sonoff Dual</b>. The Sonoff Basic is another WiFi switch that has only one output. We must therefore change the <b>Module Type</b> in order to obtain control of both outputs. But first you'd better update the Tasmota firmware to the latest version:</p>
		<ol>
		<li><p>Download <i>sonoff.bin</i> from the Tasmota <a href="https://github.com/arendst/Sonoff-Tasmota/releases" target="_blank">release page</a>.</p></li>
		<li><p>Access the Sonoff control page by typing its IP address in the browser. Click on <i>Firmware Upgrade</i> then select the bin file you just downloaded by clicking on <i>Upgrade by file upload</i>. Then click on <i>Start upgrade</i> and wait a few minutes while the Sonoff restarts.</p></li>
		<li><p>The only think left is to change the Module Type. Click on <i>Configure</i> then <i>Configure Module</i>. From the drop-down menu we have two alternatives: <i>05 Sonoff Dual</i> or <b>39 Sonoff Dual R2</b>. Choose the second and click on <i>Save</i>.</p></li>
		</ol>
		<p>We have completed the installation of the latest version of the Tasmota firmware.</p>
		<p>Part one ends here. In part two we will see how to install <a href="https://www.home-assistant.io/" target="_blank">Home Assistant</a> on a Raspberry Pi and how to integrate the Sonoff into the home automation system.</p>
	</div>
</body>
</html>