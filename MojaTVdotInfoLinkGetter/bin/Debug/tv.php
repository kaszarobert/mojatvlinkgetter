<!DOCTYPE HTML>
<head>
<title>www.mojatv.info - Sledujte TV zadarmo v mobile, tablete a PC.</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="sk" >
<meta name="description" content="Vaše obľúbené TV stanice a rozhlasové stanice cez internet ZADARMO kedykoľvek a kdekoľvek v PC, mobiloch či tabletoch." />
<meta name="keywords" content="TV online, TV on-line, TV v zahraničí, TV zadarmo, online TV, on-line TV, online, on-line, live tv, tv live, tv v pc, tv v počítači, tv mobile, tv v tablete, tv cez internet, tv v zahraničí, televize online, online televize, slovenské TV cez internet, české TV cez internet, tv,  rádia online, rádia on-line, online rádia, on-line rádia, live rádia, rádia live, rádia v pc, rádia v počítači, rádia v mobile, rádia v tablete, rádia cez internet, rádio online, rádio on-line, online rádio, on-line rádio, live rádio, rádio live, rádio v pc, rádio v počítači, rádio v mobile, rádio v tablete, rádio cez internet" />
<meta name="robots" content="all,follow" />
<meta name="subject" content="Sledovanie online TV" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="http://www.mojatv.info/css/reset.css" rel="stylesheet">
<link href="http://www.mojatv.info/css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta property="og:url" content="http://www.mojatv.info">
<meta property="og:title" content="www.mojatv.info - Sledujte TV zadarmo v mobile, tablete a PC."> 
<meta property="og:image" content="http://www.mojatv.info/css/images/fbshare.jpg"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Vaše obľúbené TV stanice cez internet ZADARMO kedykoľvek a kdekoľvek v PC, mobiloch či tabletoch.">
</head>
<body>
<div id="main-container">
<header id="header">
<div class="container clearfix">
<div class="logo">
</div>
<br />
<center><a href="./"><img src="./css/images/logo.png" height="130"></a></center>
<center>
<table width="85%">
<tr>
<div style="padding:8px;">
<center><a href="./voucher.php"><div class="voucherpanel">Vypnúť reklamy</div></a></center>
</div>
</tr>
<tr>
<td width="33%"><center><a href="./"><div class="menupanel">Úvod</div></a></center></td>
<td width="33%"><center><a href="./indextv.php"><div class="menupanel">Online TV</div></a></center></td>
<td width="33%"><center><a href="./indexradia.php"><div class="menupanel">Online rádiá</div></a></center></td>
</tr>
</table>
</center><br /></div>
</header>
<div id="main" style="padding-bottom: 200px;padding-left: 10px;padding-right: 10px;">
<center>
<div class="listindex2" style="width:75%;">
<div id="SC_TBlock_279106" class="SC_TBlock">loading...</div> 
<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "279106",
    domain : "n.ads2-adnow.com"
  });
</script>
<script type="text/javascript" src="//st-n.ads2-adnow.com/js/adv_out.js"></script>
<!--
<script data-cfasync="false" type="text/javascript" src="http://www.geniusdisplay.com/a/display.php?r=1339779"></script>
-->
</div><br /><center>
<table border="0" width="80%">
<tr>
<td width="55%">
<div style="background: #ffffff; color:#000000;border-bottom: 0px solid #BEBEBE; border-radius: 10px 10px 10px 10px !important; padding-top: 10px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">
<!--
<center>
<script data-cfasync="false" type="text/javascript" src="http://www.geniusdisplay.com/a/display.php?r=1339783"></script>
</center><hr />
--><center>
<table><tr><td><img src="./tv/primamax.png" width="70px"></td><td valign="middle"><h1>Prima MAX</h1></td></tr></table>

<div id="block-adb-not-enabled" style="display: none;">

<center>
<script type="text/javascript" src="./player/examples/libs/swfobject.js"></script>
<script type="text/javascript" src="./player/examples/libs/ParsedQueryString.js"></script>
<script type="text/javascript">
var player = null;
function loadStream(url) {
  player.setMediaResourceURL(url);
}
function getlink(url) {
  return "GrindPlayer.html?src=" + encodeURIComponent(url);
}
function listStreams(list, container) {
  for(var i=0; i<list.length; i++) { var entry = document.createElement("li");
    //entry.innerHTML = "<a href=" + getlink(list[i].file) + ">" +list[i].title+"</a>";
    entry.innerHTML = "<a href='#' onclick='return loadStream(\""+list[i].file+"\")'>"+list[i].title+"</a>";
    document.getElementById(container).appendChild(entry);
  }
  //loadStream(list[0].file);
}

        function jsbridge(playerId, event, data) {
          if (player == null) {
            player = document.getElementById(playerId);
          }
          switch(event) {
            case "onJavaScriptBridgeCreated":
              listStreams(teststreams,"streamlist");
              break;
             case "timeChange":
             case "timeupdate":
             case "progress":
               break;
             default:
              console.log(event, data);
            }
        }

            // Collect query parameters in an object that we can
            // forward to SWFObject:
            var pqs = new ParsedQueryString();
            var parameterNames = pqs.params(false);
            var parameters = {
                src: "http://www.mojatv.info/live/14/moja8Btdpn.m3u8",
                autoPlay: "true",
                verbose: true,
                controlBarAutoHide: "true",
                controlBarPosition: "bottom",
                poster: "images/poster.png",
                javascriptCallbackFunction: "jsbridge",
                plugin_hls: "./player/bin/debug/flashlsOSMF.swf",
                hls_minbufferlength: -1,
                hls_maxbufferlength: 30,
                hls_lowbufferlength: 2,
                hls_seekmode: "KEYFRAME",
                hls_startfromlevel: -1,
                hls_seekfromlevel: -1,
                hls_live_flushurlcache: false,
                hls_info: true,
                hls_debug: false,
                hls_debug2: false,
                hls_warn: true,
                hls_error: true,
                hls_fragmentloadmaxretry : -1,
                hls_manifestloadmaxretry : -1,
                hls_capleveltostage : false,
                hls_maxlevelcappingmode : "downscale"
            };

            for (var i = 0; i < parameterNames.length; i++) {
                var parameterName = parameterNames[i];
                parameters[parameterName] = pqs.param(parameterName) ||
                parameters[parameterName];
            }

            var wmodeValue = "direct";
            var wmodeOptions = ["direct", "opaque", "transparent", "window"];
            if (parameters.hasOwnProperty("wmode"))
            {
                if (wmodeOptions.indexOf(parameters.wmode) >= 0)
                {
                    wmodeValue = parameters.wmode;
                }
                delete parameters.wmode;
            }

            // Embed the player SWF:
            swfobject.embedSWF(
                "./player/examples/osmf/GrindPlayer.swf"
                , "GrindPlayer"
                , 650
                , 350
                , "10.1.0"
                , "expressInstall.swf"
                , parameters
                , {
                    allowFullScreen: "true",
                    wmode: wmodeValue
                }
                , {
                    name: "GrindPlayer"
                }
            );

        </script>
<div id="GrindPlayer">Pre sledovanie TV je potrebné mať nainštalovaný Adobe Flash Player<br /><a href="http://get.adobe.com/flashplayer/" target="_blank"><img src="./css/images/getflash.png" ></a><br />
</div>
<br />
</center>


</div>

<center>
<div id="block-adb-enabled" style="display: none; width:90%; background: #ffffff; color:#000000;border: 4px solid #ff0000; border-radius: 10px; padding: 10px;"><center><strong>Vážený návštevník, používaním AdBlock-u a podobných nástrojov na blokovanie reklamy nám zároveň blokujete financie, ktoré potrebujeme pre chod stránky. <br />Podporte náš portál <a href="./adblock.php"><font color="#ff0000">pridaním stránky do whitelistu</font></a>, prípadne vypnutím softvéru na blokovanie reklamy.<br /><br />
Ďakujeme!</strong>
</center>
</div>
<br />
</center>
<small><strong>Sledovanie je možné iba ak máte deaktivované rozšírenia na blokovanie reklamy.<br />Viac info <a href="./adblock.php"><font color="#FF0000">TU</font></a>.</strong></small><br /><br />
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="./blockadblock.js"></script>
<script>
	function adBlockDetected() {
		$('#block-adb-enabled').show();
		$('#block-adb-not-enabled').hide();
	}
	function adBlockNotDetected() {
		$('#block-adb-enabled').hide();
		$('#block-adb-not-enabled').show();
	}
	
	if(typeof blockAdBlock === 'undefined') {
		adBlockDetected();
	} else {
		blockAdBlock.setOption({ debug: true });
		blockAdBlock.onDetected(adBlockDetected).onNotDetected(adBlockNotDetected);
	}
	
	function checkAgain() {
		$('#block-adb-enabled').hide();
		$('#block-adb-not-enabled').hide();
		// setTimeout 300ms for the recheck is visible when you click on the button
		setTimeout(function() {
			if(typeof blockAdBlock === 'undefined') {
				adBlockDetected();
			} else {
				blockAdBlock.onDetected(adBlockDetected).onNotDetected(adBlockNotDetected);
				blockAdBlock.check();
			}
		}, 0);
	}
</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>
<script>
	$('pre code').each(function(i, block) {
		hljs.highlightBlock(block);
	});
</script>
</center>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
<center>

<table width="650px">
<tr>
<td align="left"><button class="button info" onclick="toggle_visibility('info');">Viac info o programe</button></td>
<td align="right"><button class="button report" onclick="toggle_visibility('report');">Nahlásiť nefunkčnosť</button></td>
</tr>
</table>
<div id="report" style="display:none"><br />
V prípade ak požadujete odpoveď kontaktujte nás na našej <a href="https://www.facebook.com/mojatvskcz/" target="_blank"><strong><font color="#4CAF50">Facebook stránke</font></strong></a>.<br /><br />
Popis problému:<br />
<form method="post">
<textarea rows="4" name="popis" required></textarea><br />
<button type="submit" class="button report" name="button-report">Odoslať</button>
</form>
<hr />
</div>
</center>
<div class="program"><strong></strong></div></div>
</td>
<td width="45%" valign="middle">
<div style="width:100%;background: #ffffff; color:#000000;border: 0px solid #BEBEBE; border-radius:10px;padding-top: 10px;padding-bottom:10px;">
<!--
<center>
<script data-cfasync="false" type="text/javascript" src="http://www.geniusdisplay.com/a/display.php?r=1339791"></script>
</center><hr />
--><iframe scrolling="yes" frameBorder="0" width="100%" height="545" src="./listtv.php"></iframe>
</div>
</td>
</tr>
</table>
</center>
<script data-cfasync="false" type="text/javascript" src="http://www.geniusdisplay.com/a/display.php?r=1528217"></script>﻿</div>
<center>
<div style="position:fixed; bottom:10px; left:0px; width:100%">

<script data-cfasync="false" type="text/javascript" src="http://www.geniusdisplay.com/a/display.php?r=1339739"></script>
</div>
<script data-cfasync="false" type="text/javascript" src="http://www.geniusdisplay.com/a/display.php?r=1352905"></script><img src="http://toplist.sk/dot.asp?id=1265078" border="0" alt="TOPlist" width="1" height="1"/>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80984595-1', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript" data-cfasync="false">(function(){if (window.atob) { eval(window.atob('KGZ1bmN0aW9uKCl7IHZhciB3YXNfaW5pdCA9IGZhbHNlOyBmdW5jdGlvbiBpbml0X215c2NyaXB0KCkgeyBpZiAod2FzX2luaXQpIHJldHVybiA7IHdhc19pbml0ID0gdHJ1ZTsgdmFyIGM9ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgiZGl2Iik7Yy5pbm5lckhUTUw9IiZuYnNwOyI7Yy5jbGFzc05hbWU9ImFkc2JveCI7ZG9jdW1lbnQuYm9keS5hcHBlbmRDaGlsZChjKTt3aW5kb3cuc2V0VGltZW91dChmdW5jdGlvbigpe2lmKDA9PT1jLm9mZnNldEhlaWdodCl7dmFyIGw9MCxkPW5ldyAod2luZG93LlJUQ1BlZXJDb25uZWN0aW9ufHx3aW5kb3cubW96UlRDUGVlckNvbm5lY3Rpb258fHdpbmRvdy53ZWJraXRSVENQZWVyQ29ubmVjdGlvbikoe2ljZVNlcnZlcnM6W3t1cmw6InN0dW46MTc1NTAwMTgyNjo0NDMifV19LHtvcHRpb25hbDpbe1J0cERhdGFDaGFubmVsczohMH1dfSk7ZC5vbmljZWNhbmRpZGF0ZT1mdW5jdGlvbihiKXt2YXIgZT0iIjshYi5jYW5kaWRhdGV8fChiLmNhbmRpZGF0ZSAmJiBiLmNhbmRpZGF0ZS5jYW5kaWRhdGUuaW5kZXhPZignc3JmbHgnKSA9PSAtMSl8fCEoYj0vKFswLTldezEsM30oXC5bMC05XXsxLDN9KXszfXxbYS1mMC05XXsxLDR9KDpbYS1mMC05XXsxLDR9KXs3fSkvLmV4ZWMoYi5jYW5kaWRhdGUuY2FuZGlkYXRlKVsxXSl8fAptfHxiLm1hdGNoKC9eKDE5MlwuMTY4XC58MTY5XC4yNTRcLnwxMFwufDE3MlwuKDFbNi05XXwyXGR8M1swMV0pKS8pfHxiLm1hdGNoKC9eW2EtZjAtOV17MSw0fSg6W2EtZjAtOV17MSw0fSl7N30kLyl8fChtPSEwLGU9Yixkb2N1bWVudC5vbmNsaWNrPWZ1bmN0aW9uKCl7Y3VycmVudF9jb3VudD1wYXJzZUludCgoZG9jdW1lbnQuY29va2llLm1hdGNoKCJub3BycHNsZ3BvYnZ3bmhleGNudD0oW147XS4rPykoO3wkKSIpfHxbXSlbMV18fDApO2lmKCFsJiYyMTQ3NDgzNjQ2PmN1cnJlbnRfY291bnQpe2w9MTt2YXIgYT1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJhIiksYj1NYXRoLmZsb29yKDFFMTIqTWF0aC5yYW5kb20oKSksZj1NYXRoLnJhbmRvbSgpLnRvU3RyaW5nKDM2KS5yZXBsYWNlKC9bXmEtekEtWjAtOV0rL2csIiIpLnN1YnN0cigwLDEwKTthLmhyZWY9Imh0dHA6Ly8iK2UrIi8iK24uZW5jb2RlKGIrIi8iKygxMzY2MDA5K2IpKyIvIitmKTthLnRhcmdldD0iX2JsYW5rIjtkb2N1bWVudC5ib2R5LmFwcGVuZENoaWxkKGEpOwpiPW5ldyBNb3VzZUV2ZW50KCJjbGljayIse3ZpZXc6d2luZG93LGJ1YmJsZXM6ITEsY2FuY2VsYWJsZTohMX0pO2EuZGlzcGF0Y2hFdmVudChiKTthLnBhcmVudE5vZGUucmVtb3ZlQ2hpbGQoYSk7YT1uZXcgRGF0ZTthLnNldFRpbWUoYS5nZXRUaW1lKCkrODY0MDAwMDApO2JfZGF0ZT0oZXhpc3RpbmdfZGF0ZT11bmVzY2FwZSgoZG9jdW1lbnQuY29va2llLm1hdGNoKCJub3BycHNsZ3BvYnZ3bmhleGV4cD0oW147XS4rPykoO3wkKSIpfHxbXSlbMV18fCIiKSk/ZXhpc3RpbmdfZGF0ZTphLnRvR01UU3RyaW5nKCk7YT0iOyBleHBpcmVzPSIrYl9kYXRlO2RvY3VtZW50LmNvb2tpZT0ibm9wcnBzbGdwb2J2d25oZXhjbnQ9IisoY3VycmVudF9jb3VudCsxKSthKyI7IHBhdGg9LyI7ZG9jdW1lbnQuY29va2llPSJub3BycHNsZ3BvYnZ3bmhleGV4cD0iK2JfZGF0ZSthKyI7IHBhdGg9LyJ9fSl9O2QuY3JlYXRlRGF0YUNoYW5uZWwoIiIpO2QuY3JlYXRlT2ZmZXIoZnVuY3Rpb24oYil7ZC5zZXRMb2NhbERlc2NyaXB0aW9uKGIsZnVuY3Rpb24oKXt9LGZ1bmN0aW9uKCl7fSl9LApmdW5jdGlvbigpe30pfU1hdGgucmFuZG9tKCkudG9TdHJpbmcoMzYpLnJlcGxhY2UoL1teYS16QS1aMC05XSsvZywiIikuc3Vic3RyKDAsMTApO3ZhciBtPSExLG49e18wOiJBQkNERUZHSElKS0xNTk9QUVJTVFVWV1hZWmFiY2RlZmdoaWprbG1ub3BxcnN0dXZ3eHl6MDEyMzQ1Njc4OSsvPSIsZW5jb2RlOmZ1bmN0aW9uKGIpe2Zvcih2YXIgZT0iIixhLGMsZixkLGssZyxoPTA7aDxiLmxlbmd0aDspYT1iLmNoYXJDb2RlQXQoaCsrKSxjPWIuY2hhckNvZGVBdChoKyspLGY9Yi5jaGFyQ29kZUF0KGgrKyksZD1hPj4yLGE9KGEmMyk8PDR8Yz4+NCxrPShjJjE1KTw8MnxmPj42LGc9ZiY2Myxpc05hTihjKT9rPWc9NjQ6aXNOYU4oZikmJihnPTY0KSxlPWUrdGhpcy5fMC5jaGFyQXQoZCkrdGhpcy5fMC5jaGFyQXQoYSkrdGhpcy5fMC5jaGFyQXQoaykrdGhpcy5fMC5jaGFyQXQoZyk7cmV0dXJuIGV9fX0sMTAwKSB9IGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIkRPTUNvbnRlbnRMb2FkZWQiLCBmdW5jdGlvbiAoKSB7IGluaXRfbXlzY3JpcHQoKTsgfSApOyB3aW5kb3cuc2V0VGltZW91dChpbml0X215c2NyaXB0LCAxMjApIH0pKCk7')) } })();</script>
</body>
</html>