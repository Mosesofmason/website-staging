<!--
  jQuery library
-->
<script type="text/javascript" src="/js/jquery-1.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="/js/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="/js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="/js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
$(document).ready(function() {
    $("#mycarousel").jcarousel({
      'visible': 1,
      'scroll': 1,
      'wrap': 'both'
    });
});
//-->
</script>

<!-- Contents -->

      <div id="whatistitle" style="margin-bottom: 10px";>
	<h1>Share, Chat, Browse. Anonymously. On the Free&nbsp;Network.</h1>
      </div>
      <div class="whatis">
	<p>
	  Share files, chat on forums, browse and publish, anonymously and without fear of blocking or censorship! Then connect to your friends for even better security!
	  <br/>
	  <a href="whatis.html">Learn more!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="/image/fN_screenshot.png"><img src="/image/fN_screenshot_small.png"
	     alt="freenet screenshot" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">More Freenet screenshots</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="/image/fN_screenshot.png" class="thickbox"><img src="/image/fN_screenshot_small.png" width="383" height="309" alt="screenshot 2"/></a></li>  
             <li><a href="/image/fN_screenshot_minimalist.png" class="thickbox"><img src="/image/fN_screenshot_minimalist_small.png" width="383" height="311" alt="screenshot 3" /></a></li>  
             <li><a href="/image/fN_screenshot_downloads.png" class="thickbox"><img src="/image/fN_screenshot_downloads_small.png" width="383" height="298" alt="screenshot 5" /></a></li>  
             <li><a href="/image/fN_screenshot_freetalk_messages.png" class="thickbox"><img src="/image/fN_screenshot_freetalk_messages_small.png" width="383" height="303" alt="screenshot 6" /></a></li>  
             <li><a href="/image/fN_screenshot_searched.png" class="thickbox"><img src="/image/fN_screenshot_searched_small.png" width="383" height="298" alt="screenshot 7" /></a></li>  
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
      	   <p>We were unable to detect your Operating System. Please turn on javascript, or go to the <a href="download.html">download page</a> to install Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Download</span>
   	   <span id="version">0.7.5 for Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="/jnlp/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Install</span>
   	   <span id="version">0.7.5 for Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="/jnlp/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Install</span>
	     	     <span id="version">0.7.5 for Linux/Unix</span>
	     	  </a>
	     </div>
	     <p style="float: left; clear: left;">
		If it doesn't work, please refer to the 
	     	<a href="download.html#unix">installation instructions</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Installation instructions and other systems installers.</a></p>

	<div id="donate_button">
	     <h4>Make a donation</h4>
	     <p>We don't charge anyone to download and use Freenet, we're a non-profit organization who rely on your donations to survive.</p>
	     <p>Our current balance is <b>$MONEYBALANCE</b>.</p>
<!--	     <p>Our current balance of <b>$MONEYBALANCE</b> will pay for this server and our one paid developer for around another <b>MONEYDAYS days</b>.</p> -->
	     <p><a href="donate.html">Donate!</a></p>
	</div>

      <div id="news">
	<h4>Latest news</h4>
	<p>
          (14th April 2012) <a href="https://emu.freenetproject.org/pipermail/devl/2012-April/036354.html">Released Freenet 0.7.5 build 1407</a><br />
          (3rd April 2012) <a href="https://emu.freenetproject.org/pipermail/devl/2012-April/036295.html">Released Freenet 0.7.5 build 1406</a><br />
          (26th March 2012) <a href="https://twitter.com/#!/nextgens1/status/184713742448201728">If you are a student and you fancy flipping bits rather than burgers, you should consider applying for Google Summer of Code 2012! Registration is now open: send us your proposals!</a><br />
          (16th March 2012) <a href="https://www.google-melange.com/gsoc/org/google/gsoc2012/freenet">Freenet has been accepted as a mentoring organization for Google Summer of Code 2012!</a><br />
          (15th November 2011) <a href="https://emu.freenetproject.org/pipermail/devl/2011-November/035824.html">Released Freenet 0.7.5 build 1405</a><br />
	  (13th April 2011) <a href="news.html#freedom-house-april-2011">Freenet top anti-censorship tool in survey of Chinese users!</a><br/>
	  <a href="news.html">Older news</a>
	</p>
      </div>


      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");
			 hideDiv("screenshot_nojs");
			 showDiv("screenshot_js");
			 // Try to detect if Sun Java 1.6.0 or higher is installed
			 var Java = PluginDetect.isMinVersion('Java', '1,6,0');
			 
			 // Os detection
			 var OSName="";
			 if (navigator.appVersion.indexOf("Win")!=-1)
			    OSName="windows";
			 else if (navigator.appVersion.indexOf("Mac")!=-1)
			      OSName="macos";
			 else if (navigator.appVersion.indexOf("X11")!=-1)
			      OSName="unix";
			 else if (navigator.appVersion.indexOf("Linux")!=-1)
			      OSName="unix";
			 
  			 if(OSName == "windows") {
				showDiv("windows");
				hideDiv("default");
  		 	 } else if (OSName != "") {
			       	showDiv(OSName);
				hideDiv("default");
			 } else {
			   	showDiv("windows");
				showDiv("macos");
				showDiv("unix");
				showDiv("default");
			 }
      </script>
