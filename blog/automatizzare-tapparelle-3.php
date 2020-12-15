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
	<title>Tapparelle elettriche gestite da un'unica Dashboard</title>
    <meta name="description" content="Un'app Android per Tablet permette di gestire tutte le tapparelle elettriche di casa. Le tapparelle devono essere collegate a un Sonoff Dual." />
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
		<h2 style="text-align:center; font-weight:lighter; margin-top:10px; margin-bottom:40px;">Terza Parte: Configurare la Dashboard</h2>
		<p><i>Ultima modifica: 28/01/2019</i></p>
		<div id="warning">
			<b>PERICOLO DI ELETTROCUZIONE</b>
			<br>
			Il Sonoff è un dispositivo elettrico che usa alta tensione. Se siete incerti sul funzionamento e sul collegamento del Sonoff chiedete aiuto ad un elettricista esperto. Non mi assumo alcuna responsabilità per l'installazione dei materiali elettrici e per i suggerimenti forniti in questa pagina.
		</div>
		<h3>App Android</h3>
		<p>
		Scaricare l'app Android <a target="_blank" href="https://play.google.com/store/apps/details?id=com.enricolobianco.smartblinds&hl=it">Smart Blinds per Sonoff Dual</a> disponibile <b>solo per tablet</b>.
		<br>
		<div style="margin:auto">
		<a 	target="_blank"
			href='https://play.google.com/store/apps/details?id=com.enricolobianco.smartblinds&hl=it&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
				<img 
					alt='Disponibile su Google Play' 
					src='https://play.google.com/intl/en_us/badges/images/generic/it_badge_web_generic.png' 
					style="width:200px;"/>
		</a>
		</div>
		<br>
		Questa applicazione implementa i due sistemi principali necessari al controllo dei Sonoff:
		<ol>
			<li>Un broker MQTT che si comporta da server e riceve tutti i messaggi dai client (interruttori Sonoff);</li>
			<li>Una Dashboard che permette all'utente di interagire con i Sonoff per controllare le tapparelle.</li>
		</ol>
		Ciò significa che non è necessario avere un altro dispositivo (es. RaspberryPi) con il ruolo di broker MQTT perché l'app ne implementa già uno.
		<br><br>
		L'app è pensata per dispositivi tablet perché la grandezza dello schermo è fondamentale per costruire una dashboard con più dispositivi collegati. Inoltre il tablet può essere sistemato a muro in modo da rendere più funzionale il suo utilizzo. 
		<br><br>
		<b>Il tablet e i Sonoff devono essere collegati alla stessa rete WiFi!</b>
		</p>
		<br><h3>Configurazione MQTT sul Sonoff Dual</h3>
		<p>
		MQTT è un protocollo di messaggistica di tipo publish-subscribe di grande utilizzo nell'Internet of Things. Se volete approfondire il suo funzionamento cercate MQTT su Google.
		<br><br>
		Per preparare il Sonoff alla connessione accedete alla sua pagina web e navigate in <span class="code">Configurazione</span>, quindi <span class="code">Configurazione MQTT</span>.
		</p>
		<img src="img/tasmota_mqtt.png" class="single-img"/>
		<p>
		<ul>
			<li><b>Host:</b> Inserire l'<b>indirizzo ip del tablet</b> sul quale è stata installata l'app.</li>
			<br><li><b>Porta:</b> Lasciare la porta di default <b>1883</b>.</li>
			<br><li><b>Topic:</b> Inserire una stringa che andrà a identificare questo particolare Sonoff all'interno dell'app.
			<br>
			<b>ATTENZIONE:</b> Per funzionare con l'app, il Topic deve essere composto da sole lettere minuscole! Ogni Sonoff deve avere un Topic differente.
			<br><br><li><b>Full Topic:</b> E' importante che questo campo rimanga com'è di default.</li>
		</ul>
		A configurazione ultimata fare click sul <span class="code">Salva</span> per applicare le modifiche.
		</p>
		<br><h3>Aggiunta di un nuovo dispositivo nell'app</h3>
		<p>
		Al primo avvio bisogna inserire i dispositivi Sonoff da controllare. Per iniziare è sufficiente cliccare sul tasto <span class="code">+</span> in basso a sinistra. Ci apparirà questa schermata:
		<br><br>
		<img src="img/new_device.gif" class="single-img"/>
		<ul>
			<li><b>Nome:</b> Inserire un nome a piacere per identificare la tapparella.</li>
			<br><li><b>Topic MQTT:</b> Inserire la stringa che è stata scelta nel passaggio precedente come Topic nella Configurazione MQTT del Sonoff.</li>
			<br><li><b>Tipo:</b> L'app supporta due tipi di avvolgibili: le tapparelle con i fori e gli avvolgibili stile americano. Scegliere quello desiderato.</li>
			<br><li><b>Tempi:</b> Questi sono i tempi di apertura e chiusura della tapparella. L'animazione aiuta a capire di quale tempo si tratta. A partire da sinistra verso destra e dall'alto verso il basso i tempi sono:
			<br><br>
			<b>Tapparella con fori</b>
				<ul>
					<li>Da aperta a chiusa con fori visibili (quando la tapparella tocca a terra)</li>
					<li>Da quando tocca a terra a completamente chiusa</li>
					<li>Da completamente chiusa a quando tocca a terra (fori visibili)</li>
					<li>Da quando tocca a terra a completamente aperta</li>
				</ul>
			<br><b>Avvolgibile stile americano</b> (non visibile nell'immagine)
				<ul>
					<li>Da completamente aperta a completamente chiusa</li>
					<li>Da completamente chiusa a completamente aperta</li>
				</ul>
			<br>
			I tempi sono importanti per determinare la posizione della tapparella. Infatti l'app costruisce un'animazione della tapparella in modo che l'utente conosca il suo stato attuale semplicemente dando uno sguardo al tablet.
			<br><br>
			Misurare i tempi con un cronometro quindi inserire i valori nelle caselle corrispondenti. Approssimare il tempo misurato per eccesso. Ad esempio se misuro 10.35 secondi inserisco 11.
			</li>
		</ul>
		Dopo aver completato l'inserimento di tutti i dati, cliccare sulla spunta in basso a destra per confermare. Se tutto è andato a buon fine, il nuovo dispositivo apparirà nella lista sulla sinistra.
		</p>
		<br><h3>Avvio della Dashboard</h3>
		<p>
		Dopo aver aggiunto tutti i dispositivi ci ritroveremo con questa schermata:
		<br><br>
		<img src="img/home.png" class="single-img"/>
		<br>
		Prima di avviare la Dashboard possiamo scegliere alcune impostazioni:
		<ul>
			<li><b>Mantieni lo schermo attivo:</b> Impedisce al tablet di entrare in modalità sospensione.</li>
			<br><li><b>Ripristina lo stato precedente:</b> Viene memorizzata la posizione delle tapparelle in modo da ripristinarla in caso di chiusura e riapertura dell'app.</li>
			<br><li><b>Attiva tema dark:</b> Cambia i colori della Dashboard.</li>
		</ul>
		Cliccando su <span class="code">Avvia la Dashboard</span> viene caricata la Dashboard a tutto schermo:
		<br><br>
		<img src="img/dash.png" class="single-img"/>
		<br>
		All'avvio della dashboard c'è un breve periodo di caricamento durante il quale il tablet tenta di stabilire la connessione con i Sonoff. Nell'immagine sopra il dispositivo <span class="code">test</span> si è connesso. Lo si nota dal colore dei pulsanti. 
		<br>
		Il secondo dispositivo (inserito solo per dimostrazione) non si è connesso e i pulsanti rimarranno grigi fino a connessione avvenuta.  
		</p>
		<p>La configurazione è terminata. Al momento l'app consente l'aggiunta di massimo 11 dispositivi. Probabilmente questo limite verrà abbattuto con futuri aggiornamenti.</p>
		<br>
		<h3>Scenario consigliato</h3>
		<p>Personalmente ho installato l'applicazione su un tablet e ho montato il tablet a muro.
		<br>
		Per simulare una vera e prorpia dashboard ho attivato lo <i>screensaver</i> dalle impostazioni di Android. <a href="https://support.google.com/nexus/answer/2818748?hl=it" target="_blank">Ecco una guida su come attivare lo screensaver sui dispositivi Android.</a>
		<br>
		Nell'applicazione é fondamentale che l'impostazione <i>Mantieni lo schermo attivo</i> <b>non sia spuntata</b>. Le altre due impostazioni le potete spuntare o meno a seconda delle vostre esigenze.
		<br>
		In questo modo permettiamo al tablet di attivare lo screensaver dopo alcuni secondi di inattività. E per riattivare il tablet basterà un singolo tocco. Inoltre il tablet si riattiverà direttamente nell'applicazione.
		<br>
		Ho provato diverse combinazioni e ritengo che questa sia la più ottimale.
		</p>
        <br>
        <p>
        <b>Continua a leggere:</b>
        <ul>
            <li><a href="https://enricolobianco.com/blog/automatizzare-tapparelle.php">Prima Parte: Installare il firmware Tasmota</a></li>
            <li><a href="https://enricolobianco.com/blog/automatizzare-tapparelle-2.php">Seconda Parte: Configurare il Sonoff</a></li>
        </ul>
        </p>
	</div>
</body>
</html>