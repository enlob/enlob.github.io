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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abilitare la funzione di Interlock sul Sonoff Dual</title>
    <meta name="description" content="Ecco come attivare l'Interlock su Sonoff Dual. L'Interlock è necessario per evitare che le due uscite possano essere accese insieme." />
	<link rel="stylesheet" href="style/style.css"/>
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
		La visualizzazione di annunci pubblicitari rende possibile lo sviluppo di questo sito.<br>
		Disabilita il tuo ad blocker e ricarica la pagina per continuare.
	</div>
	
	<div id="header" style="margin:0 auto; text-align:center; padding-top:30px;">
		<a href="https://enricolobianco.com/blog"><span style="margin:10px">Home</span></a>
		<!--<span style="margin:10px">English</span>-->
	</div>
	<div id="post-content">
		<h1 style="font-weight:lighter;">Automatizzare le tapparelle con Sonoff Dual</h1>
		<h2 style="text-align:center; font-weight:lighter; margin-top:10px; margin-bottom:40px;">Seconda Parte: Configurare il Sonoff</h2>
		<p><i>Ultima modifica: 28/01/2019</i></p>
		<div id="warning">
			<b>PERICOLO DI ELETTROCUZIONE</b>
			<br>
			Il Sonoff è un dispositivo elettrico che usa alta tensione. Se siete incerti sul funzionamento e sul collegamento del Sonoff chiedete aiuto ad un elettricista esperto. Non mi assumo alcuna responsabilità per l'installazione dei materiali elettrici e per i suggerimenti forniti in questa pagina.
		</div>
		<h3>Interlock</h3>
		<p>Di default le due uscite del Sonoff Dual sono attivabili contemporaneamente. Questo comportamento può danneggiare il motore. Perciò bisogna attivare l'interlock tra le due uscite in modo che solo una sia attiva in un determinato istante.
		<br>
		Il Sonoff Dual non permette di attivare un iterlock hardware. Tuttavia il firmware Tasmota dà la possibilità di attivare un interlock software.
		<br>
		Per attivarlo basta collegarsi al Sonoff Dual tramite il browser web e inviare questo comando in coda all'indirizzo ip:
		<br><br>
		<span class="code">/cm?cmnd=SetOption14%201</span>
		<br><br>
		Ad esempio se l'indirizzo ip del Sonoff è 192.168.1.5, l'url completo sarà così:
		<br><br>
		<span class="code">http://192.168.1.5/cm?cmnd=SetOption14%201</span>
		<br><br>
		<b>ATTENZIONE:</b> A partire da Tasmota versione 6.4.1.11 il comando <span class="code">SetOption14</span> è deprecato. In questo caso usare il comando <span class="code">Interlock</span>:
		<br><br>
		<span class="code">http://192.168.1.5/cm?cmnd=Interlock%201</span>
		<br><br>
		Per maggiori informazioni sui comandi disponibili visitare <a target="_blank" href="https://github.com/arendst/Sonoff-Tasmota/wiki/Commands">la pagina ufficiale</a>.
		<br><br>
		Dopo aver digitato il comando basta premere <span class="code">Invio</span>. Quindi tornate alla pagina principale del Sonoff e verificate che le due uscite non si attivino contemporaneamente.</p>
		<br>
        <p>
        <b>Continua a leggere:</b>
        <ul>
            <li><a href="https://enricolobianco.com/blog/automatizzare-tapparelle.php">Prima Parte: Installare il firmware Tasmota</a></li>
            <li><a href="https://enricolobianco.com/blog/automatizzare-tapparelle-3.php">Terza Parte: Configurare la Dashboard</a></li>
        </ul>
        </p>
	</div>
</body>
</html>