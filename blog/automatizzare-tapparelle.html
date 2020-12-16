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
	<title>Installare Tasmota tramite WiFi - Cambiare il firmware di Sonoff Dual</title>
    <meta name="description" content="Scopri come installare il firmware Tasmota sul tuo Sonoff Dual utilizzando SonOTA tramite WiFi. Impara a usare il Sonoff Dual per automatizzare le tapparelle di casa." />
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
		<h2 style="text-align:center; font-weight:lighter; margin-top:10px; margin-bottom:40px;">Prima Parte: Installare il firmware Tasmota</h2>
		<p><i>Ultima modifica: 27/10/2018</i></p>
		<div id="warning">
			<b>PERICOLO DI ELETTROCUZIONE</b>
			<br>
			Il Sonoff è un dispositivo elettrico che usa alta tensione. Se siete incerti sul funzionamento e sul collegamento del Sonoff chiedete aiuto ad un elettricista esperto. Non mi assumo alcuna responsabilità per l'installazione dei materiali elettrici e per i suggerimenti forniti in questa pagina.
		</div>
		<h3>Cos'è Sonoff Dual?</h3>
		<p>Sonoff Dual è un <b>interruttore WiFi</b> in grado di controllare due dispositivi elettrici dal proprio smartphone. Ha due morsetti di ingresso che accettano i cavi di fase e neutro della linea elettrica e quattro morsetti di uscita: una fase e un neutro per ogni dispositivo.
		<br>
		Ad esempio potremmo collegare due luci alle uscite del Sonoff in modo da controllarle separatamente. Tuttavia la doppia uscita ci permette di adottare il Sonoff Dual per controllare la salita e la discesa di un motore tubolare per tapparelle. Ecco un esempio di collegamento con due carichi generici:</p>
		<img src="img/schema di collegamento.jpg" alt="schema di collegamento" class="single-img"/>
		<h3>Perché Sonoff Dual?</h3>
		<h4>Ho già le tapparelle elttriche. Voglio controllarle da smartphone.</h4>
		<p>Ho già le tapparelle elettriche ma sono pilotate tramite pulsanti fisici. L'installazione del Sonoff permette un controllo smart tramite smartphone e offre la possibilità di creare scenari intelligenti di apertura e chiusura: apertura continua per <i>n</i> secondi, chiusura automatica al tramonto ecc. Tuttavia, come vedremo in seguito, sarà necessario configurare un software di home automation come <a href="https://www.home-assistant.io/" target="_blank">Home Assistant</a> per creare delle automazioni.</p>
		<h4>Non ho le tapparelle elettriche. Voglio aggiungere i motori e controllare le tapparelle da smartphone.</h4>
		<p>
		Se il vostro impianto elettrico è predisposto per l'installazione delle tapparelle elettriche, allora siete in grado di stendere i cavi necessari senza alcun problema. In questo modo potete usare i pulsanti fisici e potete decidere di aggiungere il Sonoff Dual per un controllo smart.
		<br>
		Nel caso peggiore il vostro impianto prevede solamente una linea di allarme o una qualsiasi linea che attraversa tutte le porte e dalla quale è possibile recuperare i cavi di alimentazione per i motori. In questo caso la migliore opzione è di usare dei relay Wifi per comandare le tapparelle. <b>Attenzione</b>: è sconsigliato (e non a norma di legge) utilizzare lo stesso tubo per cavi dati (allarme) e cavi a 220V (motori). Ciò significa che un uso preclude l'altro.
		</p>
		<h3>Installare il firmware Tasmota</h3>
		<p>Il firmware originale permette un utilizzo immediato del Sonoff tramite l'app eWeLink. Tuttavia non è adatto per l'utilizzo con le tapparelle. Il firmware Tasmota, infatti, consente di abilitare un <b>interlock software</b> ossia impedisce l'accensione contemporanea delle due uscite. Questo è necessario per non rischiare di friggere il motore. Inoltre Tasmota facilita l'integrazione con sistemi di home automation come <a href="https://www.home-assistant.io/" target="_blank">Home Assistant</a>.
		</p>
		<p>Il metodo più semplice per installare Tasmota è mediante il tool <b>SonOTA</b>. L'installazione avviene tramite WiFi e non è necessario accedere ai pin seriali del Sonoff. Tuttavia questo metodo funziona solo se il Sonoff ha una determinata versione del firmware originale. <b>E' richiesta una versione >= 1.6!</b> Per conoscere la versione bisogna configurare il Sonoff sull'app eWeLink e visualizzare le informazioni del dispositivo. Il mio consiglio è di seguire la procedura di installazione di Tasmota. Se il firmware del Sonoff non è adatto la procedura fallirà ma sarà comunque possibile usare il Sonoff con il firmware originale sull'app eWeLink. 
		<br>
		Ecco come procedere su un sistema Windows:
		</p>
		<ol>
		<li><p>Scaricare sonota.exe dalla pagina delle <a href="https://github.com/mirko/SonOTA/releases" target="_blank">release</a>.</p></li>
		<li><p>Disabilitare tutti i firewall attivi sul pc.</p></li>
		<li><p>Alimentare il Sonoff come mostrato in figura. Il mio consiglio è di procurarsi un cavo e aprirlo da una estremità in modo da eseguire le operazioni iniziali sul banco da lavoro piuttosto che nel cassonetto della tapparella.</p>
		<img src="img/sonoff presa.jpg" alt="sonoff con presa" class="double-img" />
		<img src="img/sonoff morsetti.jpg" alt="collegamento dell'alimentazione al sonoff" class="double-img" /></li>
		<li><p>Collegare la presa. Il led lampeggia lentamente. Tenere premuto il pulsante sul Sonoff per 8 secondi finchè il led lampeggia per tre volte consecutivamente. Quindi premere di nuovo il pulsante per 8 secondi finchè il led lampeggia velocemente. Questa procedura serve per far comparire la rete WiFi del Sonoff.</p></li>
		<li><p>Aprire sonota.exe <b>come amministratore</b>. Si avvia la procedura guidata.</p></li>
		<li><p>Selezionare l'indirizzo IP del computer. Attenzione a scegliere l'indirizzo della rete locale. Per averne la certezza è sufficiente aprire il prompt dei comandi e digitare il comando "ipconfig". <br>Nel mio caso l'indirizzo è 192.168.1.6 quindi digito 0 (che è la scelta di default).</p>
		<img src="img/sonota primo screen.png" alt="sonota primo passo" class="single-img" /></li>
		<li><p>Inserire il SSID della rete WiFi alla quale dovrà collegarsi il Sonoff. Probabilmente è lo stesso SSID al quale è connesso il pc. Premere invio e inserire anche la password della rete WiFi. Questi dati verranno comunicati al Sonoff nelle fasi successive.</p></li>
		<li><p>A questo punto sarà richiesta la connessione alla rete WiFi del Sonoff che sarà del tipo <b>ITEAD-100001XXXX</b>. La password di default è <b>12345678</b>. A connessione avvenuta, il pc trasmette le informazioni del WiFi al Sonoff.</p></li>
		<li><p>Connettersi nuovamente alla rete locale. Ora il Sonoff (ormai connesso alla rete locale) scaricherà il firmware Tasmota dal pc (server).</p></li>
		<li><p>Questo messaggio indicherà la fine del download. Seguire le istruzioni e connettere il pc alla rete libera <b>FinalStage</b>.</p>
		<img src="img/sonota secondo screen.png" alt="sonota secondo screen" class="single-img" /></li>
		<li><p>L'installazione si conclude con un messaggio che consiglia di connettersi alla rete del Sonoff per configurare il WiFi. Appena connessi alla rete, si verrà reindirizzati alla pagina di configurazione del WiFi. Basta inserire SSID e password (è sufficiente AP1) del proprio router per completare l'installazione di Tasmota.</p>
		<img src="img/tasmota configurazione wifi.png" alt="tasmota configurazione wifi" class="single-img" border="1" /></li>
		</ol>
		<h3>Installare Tasmota in italiano e cambiare il tipo del modulo</h3>
		<p>Vi sarete chiesti perchè c'è scritto <b>Sonoff Basic Module</b> e non <b>Sonoff Dual</b>. Il Sonoff Basic è un altro interruttore WiFi che ha una sola uscita. Dobbiamo quindi cambiare il <b>Module Type</b> in modo da ottenere il controllo di due uscite. Prima però installiamo la versione italiana e più recente del firmware Tasmota:</p>
		<ol>
		<li><p>Scaricare <i>sonoff-IT.bin</i> dalla pagina delle <a href="https://github.com/arendst/Sonoff-Tasmota/releases" target="_blank">release di Tasmota</a>.</p></li>
		<li><p>Accedere alla pagina di controllo del Sonoff digitando il suo indirizzo IP nel browser. Cliccare su <i>Firmware Upgrade</i> quindi selezionare il file bin appena scaricato cliccando sotto la voce <i>Upgrade by file upload</i>. Quindi cliccare su <i>Start upgrade</i> e attendere qualche minuto mentre il Sonoff si riavvia.</p></li>
		<li><p>Se le voci del menu sono in lingua italiana significa che l'aggiornamento è andato a buon fine. Ora rimane da cambiare il tipo del modulo. Cliccare su <i>Configurazione</i> quindi su <i>Configurazione Modulo</i>. Dal menu a tendina abbiamo due alternative: <i>05 Sonoff Dual</i> oppure <b>39 Sonoff Dual R2</b>. Scegliere la seconda e cliccare su <i>Salva</i>.</p></li>
		</ol>
		<p>Abbiamo completato l'installazione dell'ultima versione del firmware Tasmota in lingua italiana.</p>
		<br>
        <p>
        <b>Continua a leggere:</b>
        <ul>
            <li><a href="https://enricolobianco.com/blog/automatizzare-tapparelle-2.php">Seconda Parte: Configurare il Sonoff</a></li>
            <li><a href="https://enricolobianco.com/blog/automatizzare-tapparelle-3.php">Terza Parte: Configurare la Dashboard</a></li>
        </ul>
        </p>
		<br>		
	</div>
</body>
</html>