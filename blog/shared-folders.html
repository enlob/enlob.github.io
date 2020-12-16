<html lang="it">
<head>
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55896106-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-55896106-4');
	</script>
    
    <!-- Google Ads -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-3570140930678126",
		enable_page_level_ads: true
	  });
	</script>
    
    <!-- Ad Blocker Checker -->
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
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="style/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" />
    
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Title and Description -->
	<title>Trasferire dati tra Windows e la macchina virtuale - VMware Workstation Player</title>
    <meta name="description" content="Inviare files da Windows alla macchina virtuale con le cartelle condivise." />
	
	
</head>
<body>
	<div id="adsMsg">
		La visualizzazione di annunci pubblicitari rende possibile lo sviluppo di questo sito.<br>
		Disabilita il tuo ad blocker e ricarica la pagina per continuare.
	</div>

	<div id="header" style="margin:0 auto; text-align:center; padding-top:30px;">
		<a href="https://enricolobianco.com/blog/"><span style="margin:10px">Home</span></a>
	</div>
    
    
    
	
	<div id="post-content">
		<h1 style="font-weight:lighter;">VMware Workstation Player: trasferire dati tra Windows e una macchina virtuale con Linux</h1>
		<p><i>Ultima modifica: 25/11/2019</i></p>
		
		<p>
		Avete creato creato una nuova macchina virtuale e avete installato Ubuntu o un altro sistema operativo basato su Linux. Ora volete trasferire file e cartelle da Windows alla macchina virtuale appena creata.
		<br><br>
        Il metodo più semplice è quello di attivare le cartelle condivise (shared folders). Ecco come fare:
        <br>
        <ol>
        <li>
            Aprire le impostazioni della macchina virtuale.
            <br><br>
            <img src="img/vmware-home.png" style="width: 70%; border: 1px solid #000;" />
        </li>
        <br>
        <li>
            Aprire il tab <i>Options</i>.
            <br><br>
            <img src="img/vmware-settings.png" style="width: 70%; border: 1px solid #000;" />
        </li>
        <br>
        <li>
            Cliccare sull'opzione <i>Shared Folders</i>, quindi selezionare la voce <i>Always enabled</i> e cliccare su <i>Add</i>.
            <br><br>
            <img src="img/vmware-options.png" style="width: 70%; border: 1px solid #000;" />
        </li>
        <br>
        <li>
            Si apre una procedura guidata. <br>Come <i>Host path</i> scegliere il percorso della cartella condivisa tra le cartelle di Windows. Nell'immagine ho condiviso <i>Nuova Cartella</i> che ho creato sul <i>Desktop</i>.
            <br><br>
            <img src="img/vmware-wizard.png" style="width: 70%; border: 1px solid #000;" />
        </li>
        <br>
        <li>
            <b>Non modificare</b> gli attributi nella schermata successiva, a meno che non si voglia limitare alla sola lettura l'accesso della macchina virtuale alla cartella condivisa. In quel caso selezionare la voce <i>Read-only</i>. 
            <br><br>
            <img src="img/vmware-wizard2.png" style="width: 70%; border: 1px solid #000;" />
        </li>
        <br>
        <li>
            Cliccare su <i>Finish</i>. La procedura è terminata. Dovrebbe apparire una schermata come quella sotto. Per concludere cliccare <i>Ok</i>.
            <br><br>
            <img src="img/vmware-enabled.png" style="width: 70%; border: 1px solid #000;" />
        </li>
        <br>
        </ol>
        Non abbiamo ancora finito. L'ultimo passo consiste nell'abilitare la cartella condivisa su Ubuntu. Avviare la macchina virtuale e aprire il terminale. Quindi, digitare questo comando:
        <br><br>
        <span class="code">sudo vmhgfs-fuse .host:/ /mnt/hgfs/ -o allow_other -o uid=1000</span>
        <br><br>
        In questo modo, la cartella condivisa diventa accessibile al percorso <i>/mnt/hgfs/</i>. Nel mio caso il percorso è <i>"/mnt/hgfs/Nuova Cartella"</i>.  
		</p>
	</div>
</body>
</html>