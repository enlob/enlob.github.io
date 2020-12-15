<html lang="en">
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
    
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Title and Description -->
	<title>The Simplest Binary Converter - Binary to Decimal Converter</title>
    <meta name="description" content="Try The Simplest Binary to Decimal Converter. Convert integer and fractional binary numbers to decimal numbers in seconds. Super fast REAL TIME conversion: try it now!" />
    
    <!-- Font and jQuery -->
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
        // Restricts input for the given textbox to the given inputFilter function.
        function setInputFilter(textbox, inputFilter) {
          ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
              if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
              } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
              } else {
                this.value = "";
              }
            });
          });
        }
    
        $(document).ready(function(){
            
            setInputFilter(document.getElementById("binaryInput"), function(value) {
                return /^[0-1]*\.?[0-1]*$/.test(value); // Allow 0s and 1s and '.' (once only), using a RegExp
            });
            
            $('#binaryInput').on('input', function(){
                var binary = $('#binaryInput').val();
                var binaryInteger = binary.split(".")[0];
                var binaryFractional = binary.split(".")[1];
                
                var decimalInteger = 0;
                if(binaryInteger != null) {
                    binaryIntegerBits = binaryInteger.split("");
                    var i;
                    for(i = binaryIntegerBits.length-1; i >= 0; i--) {
                        decimalInteger += binaryIntegerBits[i] * Math.pow(2, binaryIntegerBits.length-(i+1));
                    }
                }
                
                var decimalFractional = 0;
                if(binaryFractional != null) {
                    binaryFractionalBits = binaryFractional.split("");
                    for(i = 0; i < binaryFractionalBits.length; i++) {
                        decimalFractional += binaryFractionalBits[i] * Math.pow(2, -(i+1));
                    }
                }
                
                var decimal = decimalInteger + decimalFractional;
                var output = decimal == 0 ? "" : decimal;
                $('#decimalOutput').val(output);
            });
            
        });
    </script>
    
</head>
<body style="background-color:#282e38; font-family:'Karla', sans-serif; box-sizing:border-box; text-align:center;">
    
    <h1 style="color:#F7F7F7; margin-top:2.5rem;">The <i>simplest</i> binary converter</h1>
    
    <div style="width:50%; margin:auto; text-align:left;">
        <div style="background-color: #323a46; margin-top:3rem; margin-bottom:5.5rem; border-radius:.25rem; padding:1.5rem;">
            <h4 style="color:#F7F7F7; font-size:1rem; margin-bottom: 2.25rem; font-weight:600; display:block; margin-top:0!important;">Binary Number</h4>
            <textarea id="binaryInput" rows="5" placeholder="Here type the binary number" style="width:100%; resize:none; background-color:#282e38; border:none; color:#FBBD4A; outline:none;"></textarea>
            
            <h4 style="color:#F7F7F7; font-size:1rem; margin-bottom: 2.25rem; font-weight:600; display:block; margin-top:2.25rem;">Decimal Number</h4>
            <textarea id="decimalOutput" rows="5" placeholder="Here the decimal number will automatically appear" style="width:100%; resize:none; background-color:#282e38; border:none; color:#FBBD4A; outline:none;"></textarea>
        </div>
    </div>
    
</body>
</html>