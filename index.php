<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>Habview: Welcome!</title><link rel="stylesheet" type="text/css" href="app/tpl/skins/Mango/styles/disconnected.css"/><link rel="stylesheet" type="text/css" href="app/tpl/skins/Mango/styles/global.css"/><link rel="stylesheet" type="text/css" href="app/tpl/skins/Mango/styles/login.css"/><link rel="stylesheet" type="text/css" href="app/tpl/skins/Mango/styles/register.css"/><script src="app/tpl/skins/Mango/js/jq.js" type="text/javascript"></script><script src="app/tpl/skins/Mango/js/jquery.js" type="text/javascript"></script><script src="app/tpl/skins/Mango/js/mango.js" type="text/javascript"></script></head><body>	<script type="text/javascript"> 
		var habboName = "Mextur";
		var habboReqPath = "http://www.habview.com";
		var habboStaticFilePath = "http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery";
		var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "http://www.habview.com/client";
		window.name = "ClientWndw";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
	</script> 

<link rel="alternate" type="application/rss+xml" title="Habbo Hotel - RSS" href="http://www.habbo.com/articles/rss.xml" /> 
<script src="http://www.habview.com/app/tpl/skins/Mango/client/libs2.js" type="text/javascript"></script> 
<script src="http://www.habview.com/app/tpl/skins/Mango/client/visual.js" type="text/javascript"></script> 
<script src="http://www.habview.com/app/tpl/skins/Mango/client/libs.js" type="text/javascript"></script> 
<script src="http://www.habview.com/app/tpl/skins/Mango/client/common.js" type="text/javascript"></script> 
 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/static/styles/common.css" type="text/css" /> 
 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/static/styles/habboflashclient.css" type="text/css" /> 
 
 
<noscript> 
    <meta http-equiv="refresh" content="0;url=/client/nojs" />
</noscript> 
 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/static/styles/habboflashclient.css" type="text/css" /> 
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/static/js/habboflashclient.js" type="text/javascript"></script>

<script type="text/javascript"> 
    FlashExternalInterface.loginLogEnabled = false;
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }
    var flashvars = {
            "client.allow.cross.domain" : "0", 
            "client.notify.cross.domain" : "0", 
            "connection.info.host" : "192.168.2.2", 
            "connection.info.port" : "30000", 
            "site.url" : "http://www.habview.com/", 
            "url.prefix" : "http://www.habview.com/", 
            "client.reload.url" : "http://www.habview.com/client", 
            "client.fatal.error.url" : "http://www.habview.com/disconnected", 
            "client.connection.failed.url" : "http://www.habview.com/disconnected", 
            "external.variables.txt" : "http://habbokhost.com/texts/external_variables63.txt", 
            "external.texts.txt" : "http://habbokhost.com/texts/external_texts6.txt", 
            "productdata.load.url" : "http://habbokhost.com/gamedata/productdata1.txt", 
            "furnidata.load.url" : "http://habbokhost.com/gamedata/furnidata22.txt", 
            "use.sso.ticket" : "1",
            "sso.ticket" : "Trebuchet-EXPERIMENTAL-SSO_TICKET", 
            "processlog.enabled" : "0", 
            "account_id" : "1", 
            "client.starting" : "Please wait! Habview is starting up", 
            "flash.client.url" : "http://habbokhost.com/SWF10/", 
            "user.hash" : "31385693ae558a03d28fc720be6b41cb1ccfec02", 
            "has.identity" : "0", 
            "flash.client.origin" : "popup",
            "token" : "RevCMS-715/118b93634ef276b6623c337169114cc90"
    };
    var params = {
        "base" : "http://habbokhost.com/SWF10/",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }
    
    var clientUrl = "http://habbokhost.com/SWF10/Habbo8.swf";

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/flash/expressInstall.swf", flashvars, params);
 
    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
</script>

<body id="client" class="flashclient">
<div id="overlay"></div>
<img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">

<div class="cbb clearfix">
    <h2 class="title">Please update your Flash Player to the latest version.</h2>
    <div class="box-content">
            <p>You can install and download Adobe Flash Player here: <a href="http://get.adobe.com/flashplayer/">Install flash player</a>. More instructions for installation can be found here: <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">More information</a></p>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1150/web-gallery/v2/images/client/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
</div>

        </div>
        <script type="text/javascript">
            $('content').show();
        </script>
        <noscript>
            <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                <p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p>
            </div>
        </noscript>
    </div>
    </div>
         
</div>
    <div style="display: none">

<div id="habboCountUpdateTarget">
1
</div>
	<script language="JavaScript" type="text/javascript">
		setTimeout(function() {
			HabboCounter.init(600);
		}, 20000);
	</script>
    </div>
    <script type="text/javascript">
        RightClick.init("flash-wrapper", "flash-container");
        if (window.opener && window.opener != window && typeof window.opener.location.href != "undefined") {
            window.opener.location.replace(window.opener.location.href);
        }
        $(document.body).addClassName("js");
       	HabboClient.startPingListener();
    </script>

<script type="text/javascript">
    HabboView.run();
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15697942-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></body></html>