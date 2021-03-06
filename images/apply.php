<?php include './php/appMailer.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KZRBB5K');</script>
  <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conner Rental Mgmt.</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="script.js"></script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZRBB5K"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <header>
        <img src="/images/logo.jpg">
        <input type="checkbox" id="nav-button" class="nav-button">
        <nav>
            <ul>
                <li><a href="/index.html">Home</a></li>
                <li><a href="/pages/about.html">About</a></li>
                <li><a href="#">Apply</a></li>
                <li><a href="/pages/quicklinks.html">Quick Links</a></li> 
                <li><a href="/pages/contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <label for="nav-button" class="nav-button-label">
            <span></span>
        </label>
    </header>

    

    <div class="content">
        <div class="container">  
            <form id="contact" action="../php/appMailer.php" method="post">
              <h3>Rental Application</h3>
              <h4>Fill in all information possible</h4>
         
              <fieldset>
                <input placeholder="Your Name" name="name" type="text" tabindex="1" autofocus>
              </fieldset>              
              <fieldset>
                <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="2" >
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address (check for confirmation after submitting)" name="email" type="email" tabindex="3">
              </fieldset>
              <fieldset>
                <input placeholder="Number of Bedrooms | Bathrooms Needed" type="text" name="rooms" tabindex="4">
              </fieldset>
              <fieldset>
                <input placeholder="Price Range" type="text" name="prange" tabindex="5">
              </fieldset>
              <fieldset>
                <input placeholder="Current Address" type="text" name="curradd" tabindex="6">
              </fieldset>
              <fieldset>
                <input placeholder="Who are you currently renting from?" type="text" name="currpm" tabindex="7">
              </fieldset>
              <fieldset>
                <input placeholder="Phone Number of Your Current Property Manager" name="pmphone" type="tel" tabindex="8" >
              </fieldset>
              <fieldset>
                <input placeholder="How Long at Your Current Address?" type="text" name="hlcurr" tabindex="9">
              </fieldset>
              <fieldset>
                <input placeholder="Name of Everyone to Live With You" type="text" name="nameall" tabindex="10">
              </fieldset>
              <fieldset>
                <input placeholder="Any Pets? If so please describe..." type="text" name="pets" tabindex="11">
              </fieldset>
              <fieldset>
                <input placeholder="Have you ever been evicted? If so, please state why..." type="text" name="evict" tabindex="12">
              </fieldset>
              <fieldset>
                <input placeholder="Current Occupation | How Long with Employer" type="text" name="occu" tabindex="13">
              </fieldset>
              <fieldset>
                <input placeholder="Spouse Current Occupation | How Long with Employer" type="text" name="spoccu" tabindex="14">
              </fieldset>
              <fieldset>
                <input placeholder="Other Source of Income" type="text" name="othinc" tabindex="15">
              </fieldset>
              <fieldset>
                <input placeholder="Personal Reference - Name" type="text" name="perref" tabindex="16">
              </fieldset>              
              <fieldset>
                <input placeholder="Personal Reference - Phone Number" name="refphone" type="tel" tabindex="17">
              </fieldset>
              <div>
                <p class="success"> <?php echo $success;  ?></p>
                <p class="failed"> <?php echo $failed;  ?></p>
             </div>
              <fieldset>                
                <button type="submit" name="submit" id="contact-submit" tabindex="18" data-submit="...Sending">Submit Now</button>
              </fieldset>
            </form>
        </div>
      </div>
      <footer class="footer">c 2022 Conner Mgmt</footer>

    
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>