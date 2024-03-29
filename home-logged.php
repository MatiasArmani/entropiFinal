<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
?>


<!DOCTYPE html> 
<html lang="es-AR">
   <head>
      <meta charset="UTF-8">
      <title>Home logged &#8211; Entroπ</title>
      <meta name='robots' content='max-image-preview:large' />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="alternate" type="application/rss+xml" title="Entroπ &raquo; Feed" href="https://entropi.study/feed/" />
      <link rel="alternate" type="application/rss+xml" title="Entroπ &raquo; RSS de los comentarios" href="https://entropi.study/comments/feed/" />
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
      <link rel='stylesheet' id='hfe-style-css' href='./css/header-footer-elementor-assets-css-header-footer-elementor.css' media='all' />
      <link rel='stylesheet' id='elementor-icons-css' href='./css/elementor-assets-lib-eicons-css-elementor-icons.min.css' media='all' />
      <link rel='stylesheet' id='elementor-frontend-css' href='./css/elementor-assets-css-frontend-lite.min.css' media='all' />
      <link rel='stylesheet' id='swiper-css' href='./css/elementor-assets-lib-swiper-v8-css-swiper.min.css' media='all' />
      <link rel='stylesheet' id='elementor-post-7-css' href='./css/elementor-css-post-7.css' media='all' />
      <link rel='stylesheet' id='elementor-pro-css' href='./css/pro-elements-assets-css-frontend-lite.min.css' media='all' />
      <link rel='stylesheet' id='elementor-global-css' href='./css/elementor-css-global.css' media='all' />
      <link rel='stylesheet' id='elementor-post-14-css' href='./css/elementor-css-post-14.css' media='all' />
      <link rel='stylesheet' id='hfe-widgets-style-css' href='./css/header-footer-elementor-inc-widgets-css-frontend.css' media='all' />
      <link rel='stylesheet' id='font-awesome-css' href='./css/oceanwp-assets-fonts-fontawesome-css-all.min.css' media='all' />
      <link rel='stylesheet' id='simple-line-icons-css' href='./css/oceanwp-assets-css-third-simple-line-icons.min.css' media='all' />
      <link rel='stylesheet' id='oceanwp-style-css' href='./css/oceanwp-assets-css-style.min.css' media='all' />
      <link rel='stylesheet' id='eael-general-css' href='./css/essential-addons-for-elementor-lite-assets-front-end-css-view-general.min.css' media='all' />
      <link rel='stylesheet' id='oe-widgets-style-css' href='./css/ocean-extra-assets-css-widgets.css' media='all' />
      <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.1' media='all' />
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
      </script>         <script src='./js/jquery-jquery.min.js' id='jquery-core-js'></script> <script src='./js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script> 
      <link rel="https://api.w.org/" href="https://entropi.study/wp-json/" />
      <link rel="alternate" type="application/json" href="https://entropi.study/wp-json/wp/v2/pages/14" />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://entropi.study/xmlrpc.php?rsd" />
      <meta name="generator" content="WordPress 6.3.1" />
      <link rel="canonical" href="https://entropi.study/home-logged/" />
      <link rel='shortlink' href='https://entropi.study/?p=14' />
      <link rel="alternate" type="application/json+oembed" href="https://entropi.study/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fentropi.study%2Fhome-logged%2F" />
      <link rel="alternate" type="text/xml+oembed" href="https://entropi.study/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fentropi.study%2Fhome-logged%2F&#038;format=xml" />
      <meta name="generator" content="Elementor 3.16.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
      <link rel="icon" href="./images/cropped-favicon-32x32.jpeg" sizes="32x32" />
      <link rel="icon" href="./images/cropped-favicon-192x192.jpeg" sizes="192x192" />
      <link rel="apple-touch-icon" href="./images/cropped-favicon-180x180.jpeg" />
      <meta name="msapplication-TileImage" content="https://entropi.study/wp-content/uploads/2023/10/cropped-favicon-270x270.jpeg" />
      <!-- OceanWP CSS --> 
      <style type="text/css"> /* Header CSS */#site-header.has-header-media .overlay-header-media{background-color:rgba(0,0,0,0.5)} </style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
   </head>
   <body class="page-template page-template-elementor_canvas page page-id-14 wp-custom-logo wp-embed-responsive ehf-template-oceanwp ehf-stylesheet-oceanwp oceanwp-theme dropdown-mobile default-breakpoint has-sidebar content-right-sidebar has-topbar has-breadcrumbs elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-14">
      <div data-elementor-type="wp-page" data-elementor-id="14" class="elementor elementor-14" data-elementor-post-type="page">
         <div class="elementor-element elementor-element-5ace81b9 e-con-full e-flex e-con e-parent" data-id="5ace81b9" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}" data-core-v316-plus="true">
            <div class="elementor-element elementor-element-6630b232 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="6630b232" data-element_type="widget" data-widget_type="image.default">
               <div class="elementor-widget-container">
                  <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>
                  <img decoding="async" width="355" height="80" src="./images/2023-10-ENTRO-7.png" class="attachment-medium_large size-medium_large wp-image-31" alt="" srcset="./images/2023-10-ENTRO-7.png 355w, ./images/2023-10-ENTRO-7-300x68.png 300w" sizes="(max-width: 355px) 100vw, 355px" />															
               </div>
            </div>
            <div class="elementor-element elementor-element-7bfebe9d elementor-nav-menu__align-right elementor-widget__width-initial elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="7bfebe9d" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
               <div class="elementor-widget-container">
                  <link rel="stylesheet" href="./css/pro-elements-assets-css-widget-nav-menu.min.css">
                  <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-none">
                     <ul id="menu-1-7bfebe9d" class="elementor-nav-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-283"><a href="https://entropi.study/projects.html" class="elementor-item">Projects</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282"><a href="https://entropi.study/investigadores.html" class="elementor-item">Researchers</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a href="./resources.html" class="elementor-item">Resources</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a href="https://entropi.study/mis-proyectos.html" class="elementor-item">My projects</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284"><a href="https://entropi.study/solicitudes.html" class="elementor-item">Applications</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-363"><a href="https://entropi.study/profile.html" class="elementor-item">Profile</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-376"><a href="./login.php?logout" class="elementor-item">Log Out</a></li>
                     </ul>
                  </nav>
                  <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false"> 			<i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>			<span class="elementor-screen-only">Menu</span> 		</div>
                  <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                     <ul id="menu-2-7bfebe9d" class="elementor-nav-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-283"><a href="https://entropi.study/projects.html" class="elementor-item" tabindex="-1">Projects</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282"><a href="https://entropi.study/investigadores.html" class="elementor-item" tabindex="-1">Researchers</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a href="./resources.html" class="elementor-item" tabindex="-1">Resources</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a href="https://entropi.study/mis-proyectos.html" class="elementor-item" tabindex="-1">My projects</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284"><a href="https://entropi.study/solicitudes.html" class="elementor-item" tabindex="-1">Applications</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-363"><a href="https://entropi.study/profile.html" class="elementor-item" tabindex="-1">Profile</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-376"><a href="./login.php?logout" class="elementor-item" tabindex="-1">Log Out</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="elementor-element elementor-element-341685fe elementor-widget elementor-widget-button" data-id="341685fe" data-element_type="widget" data-widget_type="button.default">
               <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper"> 			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://entropi.study/crear-proyecto/"> 						<span class="elementor-button-content-wrapper"> 						<span class="elementor-button-text">Create Project</span> 		</span> 					</a> 		</div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-8785ef0 e-flex e-con-boxed e-con e-parent" data-id="8785ef0" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-258f755 e-con-full e-flex e-con e-child" data-id="258f755" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-d875726 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d875726" data-element_type="widget" data-widget_type="divider.default">
                     <div class="elementor-widget-container">
                        <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}</style>
                        <div class="elementor-divider"> 			<span class="elementor-divider-separator"> 						</span> 		</div>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-6d6f06f elementor-widget elementor-widget-text-editor" data-id="6d6f06f" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>
                        <p>This open science project was possible thanks to Entropi.</p>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-ee07626 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="ee07626" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style>
                        <h2 class="elementor-heading-title elementor-size-xl">Cloudspotting on Mars </h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-411a47e elementor-widget elementor-widget-text-editor" data-id="411a47e" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        <p>Imagine lying on the surface of Mars in your astronaut suit, staring up at the Martian clouds, which are often thin, wispy, and occasionally reminiscent of familiar shapes. While no humans have had this opportunity, we&#8217;ve observed Martian clouds through telescopes, orbiters, and rovers. These clouds play a pivotal role in Mars&#8217; climate, reflecting incoming sunlight to cool the planet and absorbing outgoing infrared radiation to warm it. They might have been instrumental in sustaining a warm atmosphere on early Mars, enabling liquid water to carve out the geological features we see today. Unlike Earth&#8217;s liquid water clouds, Mars&#8217; cold temperatures allow for water-ice and carbon-dioxide ice clouds. The Mars Climate Sounder on the Mars Reconnaissance Orbiter helps us study these high-altitude Martian clouds to better understand their composition and formation, a task that benefits from global collaboration.</p>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-df33116 elementor-widget elementor-widget-button" data-id="df33116" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> 			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://www.zooniverse.org/projects.htmlmarek-slipski/cloudspotting-on-mars"> 						<span class="elementor-button-content-wrapper"> 						<span class="elementor-button-text">Research Project</span> 		</span> 					</a> 		</div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-0d68a28 e-con-full e-flex e-con e-child" data-id="0d68a28" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-a097bfe elementor-widget elementor-widget-spacer" data-id="a097bfe" data-element_type="widget" data-widget_type="spacer.default">
                     <div class="elementor-widget-container">
                        <style>/*! elementor - v3.16.0 - 20-09-2023 */ .elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container{height:100%;width:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty,.e-con>.elementor-widget-spacer.elementor-widget-empty{position:relative;min-height:22px;min-width:22px}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,.e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon{position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;padding:0;width:22px;height:22px}</style>
                        <div class="elementor-spacer">
                           <div class="elementor-spacer-inner"></div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-20a5047 elementor-widget elementor-widget-image" data-id="20a5047" data-element_type="widget" data-widget_type="image.default">
                     <div class="elementor-widget-container"> 															<img decoding="async" fetchpriority="high" width="1024" height="1024" src="./images/2023-10-dalle-image224.png" class="attachment-large size-large wp-image-410" alt="" srcset="./images/2023-10-dalle-image224.png 1024w, ./images/2023-10-dalle-image224-300x300.png 300w, ./images/2023-10-dalle-image224-150x150.png 150w, ./images/2023-10-dalle-image224-768x768.png 768w, ./images/2023-10-dalle-image224-600x600.png 600w" sizes="(max-width: 1024px) 100vw, 1024px" />															</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-9146561 e-flex e-con-boxed e-con e-parent" data-id="9146561" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-55c0871 elementor-invisible elementor-widget elementor-widget-heading" data-id="55c0871" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Projects you might like...</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-8f54141 e-flex e-con-boxed e-con e-parent" data-id="8f54141" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-0a9c2b0 e-con-full e-flex e-con e-child" data-id="0a9c2b0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-917d02b elementor-invisible elementor-widget elementor-widget-image" data-id="917d02b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounce&quot;}" data-widget_type="image.default">
                     <div class="elementor-widget-container"> 															<img decoding="async" width="300" height="300" src="./images/2023-10-Designer-removebg-preview-300x300.png" class="attachment-medium size-medium wp-image-104" alt="" srcset="./images/2023-10-Designer-removebg-preview-300x300.png 300w, ./images/2023-10-Designer-removebg-preview-150x150.png 150w, ./images/2023-10-Designer-removebg-preview.png 500w" sizes="(max-width: 300px) 100vw, 300px" />															</div>
                  </div>
                  <div class="elementor-element elementor-element-b330ced elementor-widget elementor-widget-heading" data-id="b330ced" data-element_type="widget" id="proyectos_titulo" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Añade aquí tu texto de cabecera</h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-ec6adb4 elementor-widget elementor-widget-text-editor" data-id="ec6adb4" data-element_type="widget" id="proyecto_descripcion" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        <p>Mas ande otro criollo pasa Martín Fierro ha de pasar, Nada la hace recular Ni las fantasmas lo espantan; Y dende que todos cantan Yo también quiero cantar.</p>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-9f11ea3 elementor-widget elementor-widget-button" data-id="9f11ea3" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> 			<a class="elementor-button elementor-button-link elementor-size-sm" href="#"> 						<span class="elementor-button-content-wrapper"> 						<span class="elementor-button-text">Ver mas</span> 		</span> 					</a> 		</div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-eef06a2 e-con-full e-flex e-con e-child" data-id="eef06a2" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-7d709b7 elementor-invisible elementor-widget elementor-widget-image" data-id="7d709b7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounce&quot;}" data-widget_type="image.default">
                     <div class="elementor-widget-container"> 															<img decoding="async" loading="lazy" width="300" height="300" src="./images/2023-10-dalle-image1075-removebg-preview-300x300.png" class="attachment-medium size-medium wp-image-109" alt="" srcset="./images/2023-10-dalle-image1075-removebg-preview-300x300.png 300w, ./images/2023-10-dalle-image1075-removebg-preview-150x150.png 150w, ./images/2023-10-dalle-image1075-removebg-preview.png 500w" sizes="(max-width: 300px) 100vw, 300px" />															</div>
                  </div>
                  <div class="elementor-element elementor-element-a690e46 elementor-widget elementor-widget-heading" data-id="a690e46" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Añade aquí tu texto de cabecera</h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-cd54a02 elementor-widget elementor-widget-text-editor" data-id="cd54a02" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        <p>Mas ande otro criollo pasa Martín Fierro ha de pasar, Nada la hace recular Ni las fantasmas lo espantan; Y dende que todos cantan Yo también quiero cantar.</p>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-e34c38f elementor-widget elementor-widget-button" data-id="e34c38f" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> 			<a class="elementor-button elementor-button-link elementor-size-sm" href="#"> 						<span class="elementor-button-content-wrapper"> 						<span class="elementor-button-text">Ver mas</span> 		</span> 					</a> 		</div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-508697f e-con-full e-flex e-con e-child" data-id="508697f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-7072e88 elementor-invisible elementor-widget elementor-widget-image" data-id="7072e88" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounce&quot;}" data-widget_type="image.default">
                     <div class="elementor-widget-container"> 															<img decoding="async" loading="lazy" width="300" height="300" src="./images/2023-10-Designer__1_-removebg-preview-300x300.png" class="attachment-medium size-medium wp-image-117" alt="" srcset="./images/2023-10-Designer__1_-removebg-preview-300x300.png 300w, ./images/2023-10-Designer__1_-removebg-preview-150x150.png 150w, ./images/2023-10-Designer__1_-removebg-preview.png 500w" sizes="(max-width: 300px) 100vw, 300px" />															</div>
                  </div>
                  <div class="elementor-element elementor-element-8fdf335 elementor-widget elementor-widget-heading" data-id="8fdf335" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Añade aquí tu texto de cabecera</h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-17449ca elementor-widget elementor-widget-text-editor" data-id="17449ca" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        <p>Mas ande otro criollo pasa Martín Fierro ha de pasar, Nada la hace recular Ni las fantasmas lo espantan; Y dende que todos cantan Yo también quiero cantar.</p>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-508cc7e elementor-widget elementor-widget-button" data-id="508cc7e" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> 			<a class="elementor-button elementor-button-link elementor-size-sm" href="#"> 						<span class="elementor-button-content-wrapper"> 						<span class="elementor-button-text">Ver mas</span> 		</span> 					</a> 		</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-60d2452 e-flex e-con-boxed e-con e-parent" data-id="60d2452" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-1f70f43 elementor-widget elementor-widget-spacer" data-id="1f70f43" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-f9fc5d4 elementor-invisible elementor-widget elementor-widget-heading" data-id="f9fc5d4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">What is your project needing?</h2>
                  </div>
               </div>
               <div class="elementor-element elementor-element-cbb567b elementor-widget elementor-widget-spacer" data-id="cbb567b" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-a8c2599 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="a8c2599" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
                  <div class="elementor-widget-container">
                     <style>/*! pro-elements - v3.15.0 - 09-08-2023 */ .elementor-slides .swiper-slide-bg{background-size:cover;background-position:50%;background-repeat:no-repeat;min-width:100%;min-height:100%}.elementor-slides .swiper-slide-inner{background-repeat:no-repeat;background-position:50%;position:absolute;top:0;left:0;bottom:0;right:0;padding:50px;margin:auto}.elementor-slides .swiper-slide-inner,.elementor-slides .swiper-slide-inner:hover{color:#fff;display:flex}.elementor-slides .swiper-slide-inner .elementor-background-overlay{position:absolute;z-index:0;top:0;bottom:0;left:0;right:0}.elementor-slides .swiper-slide-inner .elementor-slide-content{position:relative;z-index:1;width:100%}.elementor-slides .swiper-slide-inner .elementor-slide-heading{font-size:35px;font-weight:700;line-height:1}.elementor-slides .swiper-slide-inner .elementor-slide-description{font-size:17px;line-height:1.4}.elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),.elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child){margin-bottom:30px}.elementor-slides .swiper-slide-inner .elementor-slide-button{border:2px solid #fff;color:#fff;background:transparent;display:inline-block}.elementor-slides .swiper-slide-inner .elementor-slide-button,.elementor-slides .swiper-slide-inner .elementor-slide-button:hover{background:transparent;color:inherit;text-decoration:none}.elementor--v-position-top .swiper-slide-inner{align-items:flex-start}.elementor--v-position-bottom .swiper-slide-inner{align-items:flex-end}.elementor--v-position-middle .swiper-slide-inner{align-items:center}.elementor--h-position-left .swiper-slide-inner{justify-content:flex-start}.elementor--h-position-right .swiper-slide-inner{justify-content:flex-end}.elementor--h-position-center .swiper-slide-inner{justify-content:center}body.rtl .elementor-widget-slides .elementor-swiper-button-next{left:10px;right:auto}body.rtl .elementor-widget-slides .elementor-swiper-button-prev{right:10px;left:auto}.elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner{display:none}@media (max-width:767px){.elementor-slides .swiper-slide-inner{padding:30px}.elementor-slides .swiper-slide-inner .elementor-slide-heading{font-size:23px;line-height:1;margin-bottom:15px}.elementor-slides .swiper-slide-inner .elementor-slide-description{font-size:13px;line-height:1.4;margin-bottom:15px}}</style>
                     <div class="elementor-swiper">
                        <div class="elementor-slides-wrapper elementor-main-swiper swiper" dir="ltr" data-animation="fadeInUp">
                           <div class="swiper-wrapper elementor-slides">
                              <div class="elementor-repeater-item-11df213 swiper-slide">
                                 <div class="swiper-slide-bg elementor-ken-burns elementor-ken-burns--in" role="img"></div>
                                 <a class="swiper-slide-inner" href="https://entropi.study/investigadores.html">
                                    <div class="swiper-slide-contents">
                                       <div class="elementor-slide-heading">Researchers</div>
                                       <div class="elementor-slide-description">Recruit highly skilled and thoroughly vetted professionals to become valuable additions to your team.</div>
                                       <div  class="elementor-button elementor-slide-button elementor-size-sm">Search Researchers </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="elementor-repeater-item-c2b83ef swiper-slide">
                                 <div class="swiper-slide-bg" role="img"></div>
                                 <a class="swiper-slide-inner" href="https://entropi.study/projects.html">
                                    <div class="swiper-slide-contents">
                                       <div class="elementor-slide-heading">Projects</div>
                                       <div class="elementor-slide-description">Search projects align with your values and your skills </div>
                                       <div  class="elementor-button elementor-slide-button elementor-size-sm">Search projects</div>
                                    </div>
                                 </a>
                              </div>
                              <div class="elementor-repeater-item-b2a248c swiper-slide">
                                 <div class="swiper-slide-bg" role="img"></div>
                                 <a class="swiper-slide-inner" href="./resources.html">
                                    <div class="swiper-slide-contents">
                                       <div class="elementor-slide-heading">Resources</div>
                                       <div class="elementor-slide-description">Are you in need of technology, equipment, or machinery for your project? Use the resources of the best company </div>
                                       <div  class="elementor-button elementor-slide-button elementor-size-sm">Search Resourses</div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="swiper-pagination"></div>
                           <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0"> 							<i aria-hidden="true" class="eicon-chevron-left"></i>							<span class="elementor-screen-only">Previous slide</span> 						</div>
                           <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0"> 							<i aria-hidden="true" class="eicon-chevron-right"></i>							<span class="elementor-screen-only">Next slide</span> 						</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-e834497 elementor-widget elementor-widget-spacer" data-id="e834497" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-f5b8038 e-flex e-con-boxed e-con e-parent" data-id="f5b8038" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-5924593 e-con-full e-flex e-con e-child" data-id="5924593" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-f91b5d6 e-con-full e-flex e-con e-child" data-id="f91b5d6" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                     <div class="elementor-element elementor-element-4b0cfa1 elementor-widget elementor-widget-image" data-id="4b0cfa1" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container"> 															<img decoding="async" loading="lazy" width="355" height="80" src="./images/2023-10-ENTRO-7.png" class="attachment-large size-large wp-image-31" alt="" srcset="./images/2023-10-ENTRO-7.png 355w, ./images/2023-10-ENTRO-7-300x68.png 300w" sizes="(max-width: 355px) 100vw, 355px" />															</div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-a6607c1 e-con-full e-flex e-con e-child" data-id="a6607c1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-630165b e-con-full e-flex e-con e-child" data-id="630165b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                     <div class="elementor-element elementor-element-800ca02 elementor-nav-menu__align-left elementor-nav-menu--dropdown-none elementor-widget elementor-widget-nav-menu" data-id="800ca02" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}" data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                           <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                              <ul id="menu-1-800ca02" class="elementor-nav-menu sm-vertical">
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-29"><a href="./index.html" class="elementor-item">Home</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="./resources.html" class="elementor-item">Resources</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="https://entropi.study/login.php" class="elementor-item">Login</a></li>
                              </ul>
                           </nav>
                           <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                              <ul id="menu-2-800ca02" class="elementor-nav-menu sm-vertical">
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-29"><a href="./index.html" class="elementor-item" tabindex="-1">Home</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="./resources.html" class="elementor-item" tabindex="-1">Resources</a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="https://entropi.study/login.php" class="elementor-item" tabindex="-1">Login</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-248199b e-con-full e-flex e-con e-child" data-id="248199b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"> 				</div>
               <div class="elementor-element elementor-element-1909d0a e-con-full e-flex e-con e-child" data-id="1909d0a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"> 				</div>
            </div>
         </div>
      </div>
      <link rel='stylesheet' id='e-animations-css' href='./css/elementor-assets-lib-animations-animations.min.css' media='all' />
      <script src='./js/12f-imagesloaded.min.js' id='imagesloaded-js'></script> <script id='oceanwp-main-js-extra'>
         var oceanwpLocalize = {"nonce":"45896e702f","isRTL":"","menuSearchStyle":"drop_down","mobileMenuSearchStyle":"disabled","sidrSource":null,"sidrDisplace":"1","sidrSide":"left","sidrDropdownTarget":"link","verticalHeaderTarget":"link","customScrollOffset":"0","customSelects":".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select","ajax_url":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","oe_mc_wpnonce":"2da8ec7f94"};
      </script> <script src='./js/oceanwp-assets-js-theme.min.js' id='oceanwp-main-js'></script> <script src='./js/oceanwp-assets-js-drop-down-mobile-menu.min.js' id='oceanwp-drop-down-mobile-menu-js'></script> <script src='./js/oceanwp-assets-js-drop-down-search.min.js' id='oceanwp-drop-down-search-js'></script> <script src='./js/oceanwp-assets-js-vendors-magnific-popup.min.js' id='ow-magnific-popup-js'></script> <script src='./js/oceanwp-assets-js-ow-lightbox.min.js' id='oceanwp-lightbox-js'></script> <script src='./js/oceanwp-assets-js-vendors-flickity.pkgd.min.js' id='ow-flickity-js'></script> <script src='./js/oceanwp-assets-js-ow-slider.min.js' id='oceanwp-slider-js'></script> <script src='./js/oceanwp-assets-js-scroll-effect.min.js' id='oceanwp-scroll-effect-js'></script> <script src='./js/oceanwp-assets-js-scroll-top.min.js' id='oceanwp-scroll-top-js'></script> <script src='./js/oceanwp-assets-js-select.min.js' id='oceanwp-select-js'></script> <script id='eael-general-js-extra'>
         var localize = {"ajaxurl":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","nonce":"3495bf5280","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/entropi.study\/home-logged\/","cart_redirectition":"","cart_page_url":"","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
      </script> <script src='./js/essential-addons-for-elementor-lite-assets-front-end-js-view-general.min.js' id='eael-general-js'></script> <script src='./js/pro-elements-assets-lib-smartmenus-jquery.smartmenus.min.js' id='smartmenus-js'></script> <script src='./js/pro-elements-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script> <script src='./js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script> <script src='./js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script> <script src='./js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script> <script src='./js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script> <script src='./js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script> <script src='./js/dist-hooks.min.js' id='wp-hooks-js'></script> <script src='./js/dist-i18n.min.js' id='wp-i18n-js'></script> <script id="wp-i18n-js-after">
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script> <script id="elementor-pro-frontend-js-before">
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/entropi.study\/wp-admin\/admin-ajax.php","nonce":"bdab84966c","urls":{"assets":"https:\/\/entropi.study\/wp-content\/plugins\/pro-elements\/assets\/","rest":"https:\/\/entropi.study\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"es_AR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/entropi.study\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.json"}};
      </script> <script src='./js/pro-elements-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script> <script src='./js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script> <script src='./js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script> <script id="elementor-frontend-js-before">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Fijarlo","download":"Descargar","downloadImage":"Descargar imagen","fullscreen":"Pantalla completa","zoom":"Zoom","share":"Compartir","playVideo":"Reproducir v\u00eddeo","previous":"Anterior","next":"Siguiente","close":"Cerrar","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"theme_builder_v2":true,"landing-pages":true,"e_global_styleguide":true,"page-transitions":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/entropi.study\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":14,"title":"Home%20logged%20%E2%80%93%20Entro%CF%80","excerpt":"","featuredImage":false}};
      </script> <script src='./js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script> <script src='./js/pro-elements-assets-js-elements-handlers.min.js' id='pro-elements-handlers-js'></script> 	
   </body>
</html>