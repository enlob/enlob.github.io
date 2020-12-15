<html lang="it">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55896106-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-55896106-4');
	</script>

	<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55896106-4"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-55896106-4');
		</script>
	<?php endif; ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog di Enrico Lobianco</title>
    <meta name="description" content="Benvenuti sul Blog di Enrico Lobianco." />
	<link rel="stylesheet" href="style/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>
	<div id="header" style="margin:0 auto; text-align:center; margin-top:30px; margin-bottom:30px;">
		<a href="https://enricolobianco.com/blog"><span class="headerItem">Home</span></a>
		<a href="https://enricolobianco.com/blog/en"><span style="margin:10px"><img style="vertical-align: middle; margin-right: 3px;" src="img/en-flag.png" />English</span></a>
	</div>
	
	<div id="latest-posts" style="overflow: hidden;">
		
        <div class="post">
			<span class="postDate">26 Novembre 2019</span>
			<a href="shared-folders.php">
				<h3>VMware Workstation Player: trasferire dati tra Windows e una macchina virtuale con Linux</h3>
			</a>
			<h4>Attivare le cartelle condivise (shared-folders)</h4>
		</div>
        
		<div class="post">
			<span class="postDate">26 Ottobre 2019</span>
			<a href="vmware-hyperv.php">
				<h3>VMware and Device/Credential Guard are not compatible</h3>
			</a>
			<h4>La soluzione è disattivare Hyper-V</h4>
		</div>
		
		<div class="post">
			<span class="postDate">28 Gennaio 2019</span>
			<a href="automatizzare-tapparelle-3.php">
				<h3>Automatizzare le tapparelle con Sonoff Dual</h3>
			</a>
			<h4>Terza Parte: Configurare la Dashboard</h4>
		</div>
		
		<div class="post">
			<span class="postDate">28 Gennaio 2019</span>
			<a href="automatizzare-tapparelle-2.php">
				<h3>Automatizzare le tapparelle con Sonoff Dual</h3>
			</a>
			<h4>Seconda Parte: Configurare il Sonoff</h4>
		</div>
		
		<div class="post">		
			<span class="postDate">27 Ottobre 2018</span>
			<a href="automatizzare-tapparelle.php">	
				<h3>Automatizzare le tapparelle con Sonoff Dual</h3>
			</a>
			<h4>Prima Parte: Installare il firmware Tasmota</h4>
		</div>
		
		

		
	</div>
	<h4 style="text-align:center; font-weight:lighter; margin-top:0;">
		<i>Scarica Smart Blinds</i>
		<br>
		<a href='https://play.google.com/store/apps/details?id=com.enricolobianco.smartblinds&hl=it&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Disponibile su Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/it_badge_web_generic.png' style="width:200px;"/></a>
	</h4>
	
</body>
</html>