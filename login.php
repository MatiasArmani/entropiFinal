<?php
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
   header("location: inicio.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    ?>
	<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>FactorINN | Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
  <!-- CSS  -->
   <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link rel=icon href='img/favicon.png' sizes="32x32" type="image/png">
</head>
<body>
 <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
			<?php
				// show potential errors / feedback (from login object)
				if (isset($login)) {
					if ($login->errors) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						    <strong>Error!</strong> 
						
						<?php 
						foreach ($login->errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
					if ($login->messages) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
						    <strong>Aviso!</strong>
						<?php
						foreach ($login->messages as $message) {
							echo $message;
						}
						?>
						</div> 
						<?php 
					}
				}
				?>
                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" placeholder="Usuario / Correo" name="user_name" type="text" value="" autofocus="" required>
                <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>

	<?php
}





<!DOCTYPE html> 
<html class="html" lang="es-AR">
   <head>
      <meta charset="UTF-8">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <title>Registration &#8211; Entroπ</title>
      <meta name='robots' content='max-image-preview:large' />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="alternate" type="application/rss+xml" title="Entroπ &raquo; Feed" href="https://entropi.study/feed/" />
      <link rel="alternate" type="application/rss+xml" title="Entroπ &raquo; RSS de los comentarios" href="https://entropi.study/comments/feed/" />
            <link rel="stylesheet" type="text/css" href="css/forms.css">

      <script>
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/entropi.study\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"}};
         /*! This file is auto-generated */
         !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
      </script> 
      <style> img.wp-smiley, img.emoji { 	display: inline !important; 	border: none !important; 	box-shadow: none !important; 	height: 1em !important; 	width: 1em !important; 	margin: 0 0.07em !important; 	vertical-align: -0.1em !important; 	background: none !important; 	padding: 0 !important; } </style>
      <link rel='stylesheet' id='pie_notice_cs-css' href='./css/pie-register-assets-css-pie_notice.css' media='all' />
      <link rel='stylesheet' id='wp-block-library-css' href='./css/dist-block-library-style.min.css' media='all' />
      <style id='wp-block-library-theme-inline-css'> .wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-bottom:4px solid;border-top:4px solid;color:currentColor;margin-bottom:1.75em}.wp-block-pullquote cite,.wp-block-pullquote footer,.wp-block-pullquote__citation{color:currentColor;font-size:.8125em;font-style:normal;text-transform:uppercase}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;font-style:normal;position:relative}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:0 0 1em}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video{margin:0 0 1em}.wp-block-template-part.has-background{margin-bottom:0;margin-top:0;padding:1.25em 2.375em} </style>
      <style id='classic-theme-styles-inline-css'> /*! This file is auto-generated */ .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none} </style>
      <style id='global-styles-inline-css'> body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;} .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;} :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;} :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;} .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;} </style>
      <link rel='stylesheet' id='pie_front_css-css' href='./css/pie-register-assets-css-front.css' media='all' />
      <link rel='stylesheet' id='font-awesome-css' href='./css/oceanwp-assets-fonts-fontawesome-css-all.min.css' media='all' />
      <link rel='stylesheet' id='simple-line-icons-css' href='./css/oceanwp-assets-css-third-simple-line-icons.min.css' media='all' />
      <link rel='stylesheet' id='oceanwp-style-css' href='./css/oceanwp-assets-css-style.min.css' media='all' />
      <link rel='stylesheet' id='elementor-icons-css' href='./css/elementor-assets-lib-eicons-css-elementor-icons.min.css' media='all' />
      <link rel='stylesheet' id='elementor-frontend-css' href='./css/elementor-assets-css-frontend-lite.min.css' media='all' />
      <link rel='stylesheet' id='swiper-css' href='./css/elementor-assets-lib-swiper-v8-css-swiper.min.css' media='all' />
      <link rel='stylesheet' id='elementor-post-7-css' href='./css/elementor-css-post-7.css' media='all' />
      <link rel='stylesheet' id='elementor-pro-css' href='./css/pro-elements-assets-css-frontend-lite.min.css' media='all' />
      <link rel='stylesheet' id='elementor-global-css' href='./css/elementor-css-global.css' media='all' />
      <link rel='stylesheet' id='elementor-post-17-css' href='./css/elementor-css-post-17.css' media='all' />
      <link rel='stylesheet' id='eael-general-css' href='./css/essential-addons-for-elementor-lite-assets-front-end-css-view-general.min.css' media='all' />
      <link rel='stylesheet' id='oe-widgets-style-css' href='./css/ocean-extra-assets-css-widgets.css' media='all' />
      <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.1' media='all' />
      <link rel='stylesheet' id='elementor-icons-shared-0-css' href='./css/elementor-assets-lib-font-awesome-css-fontawesome.min.css' media='all' />
      <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='./css/elementor-assets-lib-font-awesome-css-solid.min.css' media='all' />
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <script>
         /* <![CDATA[ */
         var rcewpp = {
             "ajax_url":"https://entropi.study/wp-admin/admin-ajax.php",
             "nonce": "2cff51de36",
             "home_url": "https://entropi.study/",
             "settings_icon": 'https://entropi.study/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
             "settings_hover_icon": 'https://entropi.study/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
         };
         /* ]]\> */
      </script>         <script src='./js/jquery-jquery.min.js' id='jquery-core-js'></script> <script src='./js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script> <script id='pie_prVariablesDeclaration_script-js-extra'>
         var pie_pr_dec_vars = {"ajaxURL":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","dateY":"2023","piereg_startingDate":"1901","piereg_endingDate":"2023","pass_strength_indicator_label":"Strength Indicator","pass_very_weak_label":"Very Weak","pass_weak_label":"Weak","pass_medium_label":"Medium","pass_strong_label":"Strong","pass_mismatch_label":"Mismatch","ValidationMsgText1":"none","ValidationMsgText2":"* This field is required","ValidationMsgText3":"* Please select an option","ValidationMsgText4":"* This checkbox is required","ValidationMsgText5":"* Both date range fields are required","ValidationMsgText6":"* Field must equal test","ValidationMsgText7":"* Invalid ","ValidationMsgText8":"Date Range","ValidationMsgText9":"Date Time Range","ValidationMsgText10":"* Minimum ","ValidationMsgText11":" characters required","ValidationMsgText12":"* Maximum ","ValidationMsgText13":" characters allowed","ValidationMsgText14":"* You must fill-in one of the following fields","ValidationMsgText15":"* Minimum value is ","ValidationMsgText16":"* Date prior to ","ValidationMsgText17":"* Date past ","ValidationMsgText18":" options allowed","ValidationMsgText19":"* Please select ","ValidationMsgText20":" options","ValidationMsgText21":"* Fields do not match","ValidationMsgText22":"* Invalid credit card number","ValidationMsgText23":"* Invalid phone number","ValidationMsgText24":"* Invalid phone number. Allowed format: (xxx)xxx-xxxx","ValidationMsgText25":"* Minimum 10 digits starting with area code without the '+' sign.","ValidationMsgText26":"* Invalid email address","ValidationMsgText27":"* Not a valid integer","ValidationMsgText28":"* Invalid number","ValidationMsgText29":"* Invalid month","ValidationMsgText30":"* Invalid day","ValidationMsgText31":"* Invalid year","ValidationMsgText32":"* Invalid file extension","ValidationMsgText33":"* Invalid date, must be in YYYY-MM-DD format","ValidationMsgText34":"* Invalid IP address","ValidationMsgText35":"* Invalid URL","ValidationMsgText36":"* Numbers only","ValidationMsgText37":"* Letters only","ValidationMsgText38":"* No special characters allowed","ValidationMsgText39":"* This username is not available","ValidationMsgText40":"* Validating, please wait","ValidationMsgText41":"* This username is available","ValidationMsgText42":"* This username is not available","ValidationMsgText43":"* Validating, please wait","ValidationMsgText44":"* This name is not available","ValidationMsgText45":"* This name is available","ValidationMsgText46":"* Validating, please wait","ValidationMsgText47":"* This name is not available","ValidationMsgText48":"* Please enter HELLO","ValidationMsgText49":"* Invalid Date","ValidationMsgText50":"* Invalid Date or Date Format","ValidationMsgText51":"Expected Format: ","ValidationMsgText52":"mm\/dd\/yyyy hh:mm:ss AM|PM or ","ValidationMsgText53":"yyyy-mm-dd hh:mm:ss AM|PM","ValidationMsgText54":"* Invalid Username","ValidationMsgText55":"* Invalid File Type","ValidationMsgText56":"* Maximum value is ","ValidationMsgText57":"* Letters only","ValidationMsgText58":"* Only Alphanumeric characters are allowed","ValidationMsgText61":"* Invalid file size","ValidationMsgText59":"Delete","ValidationMsgText60":"Edit","piereg_recaptcha_type":"v2","reCaptcha_public_key":"","reCaptchaV3_public_key":"","reCaptcha_language":"en","prRegFormsIds":["reg_form_1"],"not_widgetTheme":"red","is_widgetTheme":"red","not_forgot_widgetTheme":"red","is_forgot_widgetTheme":[],"reg_forms_theme":{"form":{"type":"form","meta":"0","label":"Registration Form","desc":"Please fill in the form below to register.","css":"","label_alignment":"left","user_verification":"0"},"0":{"id":"0","type":"username","meta":"0","required":"1","label":"Username","validation_rule":"","desc":"","placeholder":"","validation_message":"","css":""},"1":{"remove":"0","id":"1","type":"email","meta":"0","required":"1","label":"Email","validation_rule":"email","label2":"Confirm Email","desc":"","placeholder":"","placeholder2":"","validation_message":"","css":""},"4":{"id":"4","label":"","desc":"","display":[""],"value":[""],"validation_message":"","css":"","list_type":"None","show_in_profile":"1","type":"dropdown"},"2":{"id":"2","type":"password","required":"1","validation_rule":"","meta":"0","label":"Password","label2":"Confirm Password","desc":"","placeholder":"","placeholder2":"","validation_message":"","css":"","show_meter":"1","pass_strength_indicator_label":"Strength Indicator","pass_very_weak_label":"Very Weak","pass_weak_label":"Weak","pass_medium_label":"Medium","pass_strong_label":"Strong","pass_mismatch_label":"Mismatch","restrict_strength":"1","strength_message":"Weak Password"},"submit":{"label":"Submit","type":"submit","remove":"0","meta":"0","text":"Submit","reset":"0","reset_text":"Reset","confirmation":"text","redirect_url":"","page":"15","message":"Thank you for registering"}},"matchCapResult1":"Mjk=","matchCapResult2":"ODAz","matchCapResult3":"MTI=","matchCapColors":["rgba(0, 0, 0, 0.6)","rgba(153, 31, 0, 0.9)","rgba(64, 171, 229,0.8)","rgba(0, 61, 21, 0.8)","rgba(0, 0, 204, 0.7)","rgba(0, 0, 0, 0.5)","rgba(198, 81, 209, 1.0)","rgba(0, 0, 999, 0.5)","rgba(0, 0, 0, 0.5)","rgba(0, 0, 0, 0.5)","rgba(255, 63, 143, 0.9)"],"matchCapImgColor":"rgba(0, 0, 204, 0.7)","matchCapImgURL":"https:\/\/entropi.study\/wp-content\/plugins\/pie-register\/assets\/images\/math_captcha\/4.png","matchCapHTML":"3 + 14 = ","is_socialLoginRedirect":"","socialLoginRedirectRenewAccount":"","isSocialLoginRedirectOnLogin":"","socialLoginRedirectOnLoginURL":"","pie_payment_methods_data":[],"prTimedFieldVal":"23-10-08 15:19:17","process_submission":"Processing..."};
      </script> <script src='./js/pie-register-assets-js-prVariablesDeclaration.js' id='pie_prVariablesDeclaration_script-js'></script> <script src='./js/pie-register-assets-js-datepicker.js' id='pie_datepicker_js-js'></script> <script src='./js/pie-register-assets-js-jquery.alphanum.js' id='pie_alphanum_js-js'></script> <script src='./js/pie-register-assets-js-piereg_validation.js' id='pie_validation_js-js'></script> <script id='zxcvbn-async-js-extra'>
         var _zxcvbnSettings = {"src":"https:\/\/entropi.study\/wp-includes\/js\/zxcvbn.min.js"};
      </script> <script src='./js/oqn-zxcvbn-async.min.js' id='zxcvbn-async-js'></script> 
      <link rel="https://api.w.org/" href="https://entropi.study/wp-json/" />
      <link rel="alternate" type="application/json" href="https://entropi.study/wp-json/wp/v2/pages/17" />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://entropi.study/xmlrpc.php?rsd" />
      <meta name="generator" content="WordPress 6.3.1" />
      <link rel="canonical" href="https://entropi.study/registration/" />
      <link rel='shortlink' href='https://entropi.study/?p=17' />
      <link rel="alternate" type="application/json+oembed" href="https://entropi.study/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fentropi.study%2Fregistration%2F" />
      <link rel="alternate" type="text/xml+oembed" href="https://entropi.study/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fentropi.study%2Fregistration%2F&#038;format=xml" />
      <meta name="generator" content="Elementor 3.16.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
      <!-- OceanWP CSS --> 
      <style type="text/css"> /* Header CSS */#site-header.has-header-media .overlay-header-media{background-color:rgba(0,0,0,0.5)} </style>
   </head>
   <body class="page-template-default page page-id-17 wp-custom-logo wp-embed-responsive oceanwp-theme dropdown-mobile default-breakpoint content-full-screen page-header-disabled no-margins elementor-default elementor-kit-7 elementor-page elementor-page-17" itemscope="itemscope" itemtype="https://schema.org/WebPage">
      <div id="outer-wrap" class="site clr">
         <a class="skip-link screen-reader-text" href="#main">Ir al contenido</a>  		 		
         <div id="wrap" class="clr">
            <main id="main" class="site-main clr"  role="main">
               <div id="content-wrap" class="container clr">
                  <div id="primary" class="content-area clr">
                     <div id="content" class="site-content clr">
                        <article class="single-page-article clr">
                           <div class="entry clr" itemprop="text">
                              <div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17" data-elementor-post-type="page">
                                 <div class="elementor-element elementor-element-3ce95ed1 e-con-full e-flex e-con e-parent" data-id="3ce95ed1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}" data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-57a81d5 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="57a81d5" data-element_type="widget" data-widget_type="image.default">
                                       <div class="elementor-widget-container">
                                          <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>
                                          <img decoding="async" width="355" height="80" src="./images/2023-10-ENTRO-7.png" class="attachment-medium_large size-medium_large wp-image-31" alt="" srcset="./images/2023-10-ENTRO-7.png 355w, ./images/2023-10-ENTRO-7-300x68.png 300w" sizes="(max-width: 355px) 100vw, 355px" />															
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-35ea19c8 elementor-nav-menu__align-right elementor-widget__width-initial elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="35ea19c8" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
                                       <div class="elementor-widget-container">
                                          <link rel="stylesheet" href="./css/pro-elements-assets-css-widget-nav-menu.min.css">
                                          <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-none">
                                             <ul id="menu-1-35ea19c8" class="elementor-nav-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="https://entropi.study/home/" class="elementor-item">Home</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="https://entropi.study/resources/" class="elementor-item">Resources</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="https://entropi.study/about-us/" class="elementor-item">About Us</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="https://entropi.study/login/" class="elementor-item">Login</a></li>
                                             </ul>
                                          </nav>
                                          <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false"> 			<i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>			<span class="elementor-screen-only">Menu</span> 		</div>
                                          <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                                             <ul id="menu-2-35ea19c8" class="elementor-nav-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="https://entropi.study/home/" class="elementor-item" tabindex="-1">Home</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="https://entropi.study/resources/" class="elementor-item" tabindex="-1">Resources</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="https://entropi.study/about-us/" class="elementor-item" tabindex="-1">About Us</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="https://entropi.study/login/" class="elementor-item" tabindex="-1">Login</a></li>
                                             </ul>
                                          </nav>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-60d18af e-flex e-con-boxed e-con e-parent" data-id="60d18af" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                                    <div class="e-con-inner">
                                       <div class="elementor-element elementor-element-fe2e444 elementor-widget elementor-widget-heading" data-id="fe2e444" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>

									<form class="mainform" action="process_register.php" method="post">
                              <h1 class="elementor-heading-title elementor-size-default">Login</h1><br>
									    Email: <input type="email" name="email" required><br><br>
									    Password: <input type="password" name="password" required><br><br>

									    <br><br>
									    <input type="submit" value="Register">
									</form>

                              </div>
                           </div>
                        </article>
                     </div>
                     <!-- #content -->  			 		
                  </div>
                  <!-- #primary -->  		 	
               </div>
               <!-- #content-wrap -->  	   	
            </main>
            <!-- #main -->    	  	  	  		  	  	  
         </div>
         <!-- #wrap -->      
      </div>
      <!-- #outer-wrap -->       <a aria-label="Hacer scroll a la parte superior de la página" href="#" id="scroll-top" class="scroll-top-right"><i class="fa fa-angle-up" aria-hidden="true" role="img"></i></a>         <script src='./js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script> <script src='./js/jquery-ui-progressbar.min.js' id='jquery-ui-progressbar-js'></script> <script src='./js/pie-register-assets-js-prVariablesDeclarationFooter.js' id='pie_prVariablesDeclaration_script_Footer-js'></script> <script src='./js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script> <script src='./js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script> <script src='./js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script> <script src='./js/dist-hooks.min.js' id='wp-hooks-js'></script> <script src='./js/dist-i18n.min.js' id='wp-i18n-js'></script> <script id="wp-i18n-js-after">
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script> <script id='password-strength-meter-js-extra'>
         var pwsL10n = {"unknown":"Fortaleza de contrase\u00f1a desconocida","short":"Muy d\u00e9bil","bad":"D\u00e9bil","good":"Medio","strong":"Fuerte","mismatch":"No coinciden"};
      </script> <script id='password-strength-meter-js-translations'>
         ( function( domain, translations ) {
         	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
         	localeData[""].domain = domain;
         	wp.i18n.setLocaleData( localeData, domain );
         } )( "default", {"translation-revision-date":"2023-08-31 02:13:04+0000","generator":"GlotPress\/4.0.0-alpha.7","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es_AR"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s  est\u00e1 en desuso desde la versi\u00f3n %2$s Us\u00e1 %3$s en su lugar. Por favor consider\u00e1 escribir un c\u00f3digo m\u00e1s inclusivo."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
      </script> <script src='./js/eqj-password-strength-meter.min.js' id='password-strength-meter-js'></script> <script src='./js/pie-register-assets-js-pie_password_checker.js' id='pie_password_checker-js'></script> <script src='./js/jquery-ui-datepicker.min.js' id='jquery-ui-datepicker-js'></script> <script id="jquery-ui-datepicker-js-after">
         jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Cerrar","currentText":"Hoy","monthNames":["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"monthNamesShort":["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],"nextText":"Siguiente","prevText":"Previo","dayNames":["domingo","lunes","martes","mi\u00e9rcoles","jueves","viernes","s\u00e1bado"],"dayNamesShort":["dom","lun","mar","mi\u00e9","jue","vie","s\u00e1b"],"dayNamesMin":["D","L","M","X","J","V","S"],"dateFormat":"d MM, yy","firstDay":1,"isRTL":false});});
      </script> <script src='./js/7g0-imagesloaded.min.js' id='imagesloaded-js'></script> <script id='oceanwp-main-js-extra'>
         var oceanwpLocalize = {"nonce":"45896e702f","isRTL":"","menuSearchStyle":"drop_down","mobileMenuSearchStyle":"disabled","sidrSource":null,"sidrDisplace":"1","sidrSide":"left","sidrDropdownTarget":"link","verticalHeaderTarget":"link","customScrollOffset":"0","customSelects":".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select","ajax_url":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","oe_mc_wpnonce":"2da8ec7f94"};
      </script> <script src='./js/oceanwp-assets-js-theme.min.js' id='oceanwp-main-js'></script> <script src='./js/oceanwp-assets-js-drop-down-mobile-menu.min.js' id='oceanwp-drop-down-mobile-menu-js'></script> <script src='./js/oceanwp-assets-js-drop-down-search.min.js' id='oceanwp-drop-down-search-js'></script> <script src='./js/oceanwp-assets-js-vendors-magnific-popup.min.js' id='ow-magnific-popup-js'></script> <script src='./js/oceanwp-assets-js-ow-lightbox.min.js' id='oceanwp-lightbox-js'></script> <script src='./js/oceanwp-assets-js-vendors-flickity.pkgd.min.js' id='ow-flickity-js'></script> <script src='./js/oceanwp-assets-js-ow-slider.min.js' id='oceanwp-slider-js'></script> <script src='./js/oceanwp-assets-js-scroll-effect.min.js' id='oceanwp-scroll-effect-js'></script> <script src='./js/oceanwp-assets-js-scroll-top.min.js' id='oceanwp-scroll-top-js'></script> <script src='./js/oceanwp-assets-js-select.min.js' id='oceanwp-select-js'></script> <script id='eael-general-js-extra'>
         var localize = {"ajaxurl":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","nonce":"3495bf5280","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/entropi.study\/registration\/","cart_redirectition":"","cart_page_url":"","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
      </script> <script src='./js/essential-addons-for-elementor-lite-assets-front-end-js-view-general.min.js' id='eael-general-js'></script> <script src='./js/pro-elements-assets-lib-smartmenus-jquery.smartmenus.min.js' id='smartmenus-js'></script> <script src='./js/pro-elements-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script> <script src='./js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script> <script src='./js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script> <script id="elementor-pro-frontend-js-before">
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","nonce":"bdab84966c","urls":{"assets":"https:\/\/entropi.study\/wp-content\/plugins\/pro-elements\/assets\/","rest":"https:\/\/entropi.study\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"es_AR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/entropi.study\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.json"}};
      </script> <script src='./js/pro-elements-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script> <script src='./js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script> <script id="elementor-frontend-js-before">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Fijarlo","download":"Descargar","downloadImage":"Descargar imagen","fullscreen":"Pantalla completa","zoom":"Zoom","share":"Compartir","playVideo":"Reproducir v\u00eddeo","previous":"Anterior","next":"Siguiente","close":"Cerrar","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"theme_builder_v2":true,"landing-pages":true,"e_global_styleguide":true,"page-transitions":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/entropi.study\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":17,"title":"Registration%20%E2%80%93%20Entro%CF%80","excerpt":"","featuredImage":false}};
      </script> <script src='./js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script> <script src='./js/pro-elements-assets-js-elements-handlers.min.js' id='pro-elements-handlers-js'></script> 
   </body>
</html>