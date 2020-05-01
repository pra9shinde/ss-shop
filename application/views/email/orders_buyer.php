<style>
    /* ================================================================================================
 	File Name: vendors.scss
 	Description: Common vendors file to includ all theme specific common vendors.
 	----------------------------------------------------------------------------------------------
 	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
 	Version: 3.0
 	Author: PIXINVENT
 	Author URL: http://www.themeforest.net/user/pixinvent
    ================================================================================================ */


    /* Feather icons */
    @font-face{font-family:feather;src:url(../fonts/feather.eot?t=1525787366991);src:url(../fonts/feather.eot?t=1525787366991#iefix) format('embedded-opentype'),url(../../fonts/feather/fonts/feather.woff?9xfrq8) format('woff'),url(../../fonts/feather.ttf?t=1525787366991) format('truetype'),url(../../fonts/feather.svg?t=1525787366991#feather) format('svg')}[class*=" ft-"],[class^=ft-]{font-family:feather!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ft-alert-octagon:before{content:"\e81b"}.ft-alert-circle:before{content:"\e81c"}.ft-activity:before{content:"\e81d"}.ft-alert-triangle:before{content:"\e81e"}.ft-align-center:before{content:"\e81f"}.ft-airplay:before{content:"\e820"}.ft-align-justify:before{content:"\e821"}.ft-align-left:before{content:"\e822"}.ft-align-right:before{content:"\e823"}.ft-arrow-down-left:before{content:"\e824"}.ft-arrow-down-right:before{content:"\e825"}.ft-anchor:before{content:"\e826"}.ft-aperture:before{content:"\e827"}.ft-arrow-left:before{content:"\e828"}.ft-arrow-right:before{content:"\e829"}.ft-arrow-down:before{content:"\e82a"}.ft-arrow-up-left:before{content:"\e82b"}.ft-arrow-up-right:before{content:"\e82c"}.ft-arrow-up:before{content:"\e82d"}.ft-award:before{content:"\e82e"}.ft-bar-chart:before{content:"\e82f"}.ft-at-sign:before{content:"\e830"}.ft-bar-chart-2:before{content:"\e831"}.ft-battery-charging:before{content:"\e832"}.ft-bell-off:before{content:"\e833"}.ft-battery:before{content:"\e834"}.ft-bluetooth:before{content:"\e835"}.ft-bell:before{content:"\e836"}.ft-book:before{content:"\e837"}.ft-briefcase:before{content:"\e838"}.ft-camera-off:before{content:"\e839"}.ft-calendar:before{content:"\e83a"}.ft-bookmark:before{content:"\e83b"}.ft-box:before{content:"\e83c"}.ft-camera:before{content:"\e83d"}.ft-check-circle:before{content:"\e83e"}.ft-check:before{content:"\e83f"}.ft-check-square:before{content:"\e840"}.ft-cast:before{content:"\e841"}.ft-chevron-down:before{content:"\e842"}.ft-chevron-left:before{content:"\e843"}.ft-chevron-right:before{content:"\e844"}.ft-chevron-up:before{content:"\e845"}.ft-chevrons-down:before{content:"\e846"}.ft-chevrons-right:before{content:"\e847"}.ft-chevrons-up:before{content:"\e848"}.ft-chevrons-left:before{content:"\e849"}.ft-circle:before{content:"\e84a"}.ft-clipboard:before{content:"\e84b"}.ft-chrome:before{content:"\e84c"}.ft-clock:before{content:"\e84d"}.ft-cloud-lightning:before{content:"\e84e"}.ft-cloud-drizzle:before{content:"\e84f"}.ft-cloud-rain:before{content:"\e850"}.ft-cloud-off:before{content:"\e851"}.ft-codepen:before{content:"\e852"}.ft-cloud-snow:before{content:"\e853"}.ft-compass:before{content:"\e854"}.ft-copy:before{content:"\e855"}.ft-corner-down-right:before{content:"\e856"}.ft-corner-down-left:before{content:"\e857"}.ft-corner-left-down:before{content:"\e858"}.ft-corner-left-up:before{content:"\e859"}.ft-corner-up-left:before{content:"\e85a"}.ft-corner-up-right:before{content:"\e85b"}.ft-corner-right-down:before{content:"\e85c"}.ft-corner-right-up:before{content:"\e85d"}.ft-cpu:before{content:"\e85e"}.ft-credit-card:before{content:"\e85f"}.ft-crosshair:before{content:"\e860"}.ft-disc:before{content:"\e861"}.ft-delete:before{content:"\e862"}.ft-download-cloud:before{content:"\e863"}.ft-download:before{content:"\e864"}.ft-droplet:before{content:"\e865"}.ft-edit-2:before{content:"\e866"}.ft-edit:before{content:"\e867"}.ft-edit-1:before{content:"\e868"}.ft-external-link:before{content:"\e869"}.ft-eye:before{content:"\e86a"}.ft-feather:before{content:"\e86b"}.ft-facebook:before{content:"\e86c"}.ft-file-minus:before{content:"\e86d"}.ft-eye-off:before{content:"\e86e"}.ft-fast-forward:before{content:"\e86f"}.ft-file-text:before{content:"\e870"}.ft-film:before{content:"\e871"}.ft-file:before{content:"\e872"}.ft-file-plus:before{content:"\e873"}.ft-folder:before{content:"\e874"}.ft-filter:before{content:"\e875"}.ft-flag:before{content:"\e876"}.ft-globe:before{content:"\e877"}.ft-grid:before{content:"\e878"}.ft-heart:before{content:"\e879"}.ft-home:before{content:"\e87a"}.ft-github:before{content:"\e87b"}.ft-image:before{content:"\e87c"}.ft-inbox:before{content:"\e87d"}.ft-layers:before{content:"\e87e"}.ft-info:before{content:"\e87f"}.ft-instagram:before{content:"\e880"}.ft-layout:before{content:"\e881"}.ft-link-2:before{content:"\e882"}.ft-life-buoy:before{content:"\e883"}.ft-link:before{content:"\e884"}.ft-log-in:before{content:"\e885"}.ft-list:before{content:"\e886"}.ft-lock:before{content:"\e887"}.ft-log-out:before{content:"\e888"}.ft-loader:before{content:"\e889"}.ft-mail:before{content:"\e88a"}.ft-maximize-2:before{content:"\e88b"}.ft-map:before{content:"\e88c"}.ft-map-pin:before{content:"\e88e"}.ft-menu:before{content:"\e88f"}.ft-message-circle:before{content:"\e890"}.ft-message-square:before{content:"\e891"}.ft-minimize-2:before{content:"\e892"}.ft-mic-off:before{content:"\e893"}.ft-minus-circle:before{content:"\e894"}.ft-mic:before{content:"\e895"}.ft-minus-square:before{content:"\e896"}.ft-minus:before{content:"\e897"}.ft-moon:before{content:"\e898"}.ft-monitor:before{content:"\e899"}.ft-more-vertical:before{content:"\e89a"}.ft-more-horizontal:before{content:"\e89b"}.ft-move:before{content:"\e89c"}.ft-music:before{content:"\e89d"}.ft-navigation-2:before{content:"\e89e"}.ft-navigation:before{content:"\e89f"}.ft-octagon:before{content:"\e8a0"}.ft-package:before{content:"\e8a1"}.ft-pause-circle:before{content:"\e8a2"}.ft-pause:before{content:"\e8a3"}.ft-percent:before{content:"\e8a4"}.ft-phone-call:before{content:"\e8a5"}.ft-phone-forwarded:before{content:"\e8a6"}.ft-phone-missed:before{content:"\e8a7"}.ft-phone-off:before{content:"\e8a8"}.ft-phone-incoming:before{content:"\e8a9"}.ft-phone:before{content:"\e8aa"}.ft-phone-outgoing:before{content:"\e8ab"}.ft-pie-chart:before{content:"\e8ac"}.ft-play-circle:before{content:"\e8ad"}.ft-play:before{content:"\e8ae"}.ft-plus-square:before{content:"\e8af"}.ft-plus-circle:before{content:"\e8b0"}.ft-plus:before{content:"\e8b1"}.ft-pocket:before{content:"\e8b2"}.ft-printer:before{content:"\e8b3"}.ft-power:before{content:"\e8b4"}.ft-radio:before{content:"\e8b5"}.ft-repeat:before{content:"\e8b6"}.ft-refresh-ccw:before{content:"\e8b7"}.ft-rewind:before{content:"\e8b8"}.ft-rotate-ccw:before{content:"\e8b9"}.ft-refresh-cw:before{content:"\e8ba"}.ft-rotate-cw:before{content:"\e8bb"}.ft-save:before{content:"\e8bc"}.ft-search:before{content:"\e8bd"}.ft-server:before{content:"\e8be"}.ft-scissors:before{content:"\e8bf"}.ft-share-2:before{content:"\e8c0"}.ft-share:before{content:"\e8c1"}.ft-shield:before{content:"\e8c2"}.ft-settings:before{content:"\e8c3"}.ft-skip-back:before{content:"\e8c4"}.ft-shuffle:before{content:"\e8c5"}.ft-sidebar:before{content:"\e8c6"}.ft-skip-forward:before{content:"\e8c7"}.ft-slack:before{content:"\e8c8"}.ft-slash:before{content:"\e8c9"}.ft-smartphone:before{content:"\e8ca"}.ft-square:before{content:"\e8cb"}.ft-speaker:before{content:"\e8cc"}.ft-star:before{content:"\e8cd"}.ft-stop-circle:before{content:"\e8ce"}.ft-sun:before{content:"\e8cf"}.ft-sunrise:before{content:"\e8d0"}.ft-tablet:before{content:"\e8d1"}.ft-tag:before{content:"\e8d2"}.ft-sunset:before{content:"\e8d3"}.ft-target:before{content:"\e8d4"}.ft-thermometer:before{content:"\e8d5"}.ft-thumbs-up:before{content:"\e8d6"}.ft-thumbs-down:before{content:"\e8d7"}.ft-toggle-left:before{content:"\e8d8"}.ft-toggle-right:before{content:"\e8d9"}.ft-trash-2:before{content:"\e8da"}.ft-trash:before{content:"\e8db"}.ft-trending-up:before{content:"\e8dc"}.ft-trending-down:before{content:"\e8dd"}.ft-triangle:before{content:"\e8de"}.ft-type:before{content:"\e8df"}.ft-twitter:before{content:"\e8e0"}.ft-upload:before{content:"\e8e1"}.ft-umbrella:before{content:"\e8e2"}.ft-upload-cloud:before{content:"\e8e3"}.ft-unlock:before{content:"\e8e4"}.ft-user-check:before{content:"\e8e5"}.ft-user-minus:before{content:"\e8e6"}.ft-user-plus:before{content:"\e8e7"}.ft-user-x:before{content:"\e8e8"}.ft-user:before{content:"\e8e9"}.ft-users:before{content:"\e8ea"}.ft-video-off:before{content:"\e8eb"}.ft-video:before{content:"\e8ec"}.ft-voicemail:before{content:"\e8ed"}.ft-volume-x:before{content:"\e8ee"}.ft-volume-2:before{content:"\e8ef"}.ft-volume-1:before{content:"\e8f0"}.ft-volume:before{content:"\e8f1"}.ft-watch:before{content:"\e8f2"}.ft-wifi:before{content:"\e8f3"}.ft-x-square:before{content:"\e8f4"}.ft-wind:before{content:"\e8f5"}.ft-x:before{content:"\e8f6"}.ft-x-circle:before{content:"\e8f7"}.ft-zap:before{content:"\e8f8"}.ft-zoom-in:before{content:"\e8f9"}.ft-zoom-out:before{content:"\e8fa"}.ft-command:before{content:"\e8fb"}.ft-cloud:before{content:"\e8fc"}.ft-hash:before{content:"\e8fd"}.ft-headphones:before{content:"\e8fe"}.ft-underline:before{content:"\e8ff"}.ft-italic:before{content:"\e900"}.ft-bold:before{content:"\e901"}.ft-crop:before{content:"\e902"}.ft-help-circle:before{content:"\e903"}.ft-paperclip:before{content:"\e904"}.ft-shopping-cart:before{content:"\e905"}.ft-tv:before{content:"\e906"}.ft-wifi-off:before{content:"\e907"}.ft-minimize:before{content:"\e88d"}.ft-maximize:before{content:"\e908"}.ft-gitlab:before{content:"\e909"}.ft-sliders:before{content:"\e90a"}.ft-star-on:before{content:"\e90b"}.ft-heart-on:before{content:"\e90c"}.ft-archive:before{content:"\e90d"}.ft-arrow-down-circle:before{content:"\e90e"}.ft-arrow-up-circle:before{content:"\e90f"}.ft-arrow-left-circle:before{content:"\e910"}.ft-arrow-right-circle:before{content:"\e911"}.ft-bar-chart-line-:before{content:"\e912"}.ft-bar-chart-line:before{content:"\e913"}.ft-book-open:before{content:"\e914"}.ft-code:before{content:"\e915"}.ft-database:before{content:"\e916"}.ft-dollar-sign:before{content:"\e917"}.ft-folder-plus:before{content:"\e918"}.ft-gift:before{content:"\e919"}.ft-folder-minus:before{content:"\e91a"}.ft-git-commit:before{content:"\e91b"}.ft-git-branch:before{content:"\e91c"}.ft-git-pull-request:before{content:"\e91d"}.ft-git-merge:before{content:"\e91e"}.ft-linkedin:before{content:"\e91f"}.ft-hard-drive:before{content:"\e920"}.ft-more-vertical-:before{content:"\e921"}.ft-more-horizontal-:before{content:"\e922"}.ft-rss:before{content:"\e923"}.ft-send:before{content:"\e924"}.ft-shield-off:before{content:"\e925"}.ft-shopping-bag:before{content:"\e926"}.ft-terminal:before{content:"\e927"}.ft-truck:before{content:"\e928"}.ft-zap-off:before{content:"\e929"}.ft-youtube:before{content:"\e92a"}

    /*!
    * Line Awesome 1.1.0 by @icons_8 - https://icons8.com/line-awesome
    * License - https://icons8.com/good-boy-license/ (Font: SIL OFL 1.1, CSS: MIT License)
    *
    * Made with love by Icons8 [ https://icons8.com/ ] using FontCustom [ https://github.com/FontCustom/fontcustom ]
    */
    .la,.la-stack{display:inline-block}.la-fw,.la-li{text-align:center}@font-face{font-family:LineAwesome;src:url(../../fonts/line-awesome/fonts/line-awesome.eot?v=1.1.);src:url(../../fonts/line-awesome/fonts/line-awesome.eot??v=1.1.#iefix) format("embedded-opentype"),url(../../fonts/line-awesome/fonts/line-awesome.woff2?v=1.1.) format("woff2"),url(../../fonts/line-awesome/fonts/line-awesome.woff?v=1.1.) format("woff"),url(../../fonts/line-awesome/fonts/line-awesome.ttf?v=1.1.) format("truetype"),url(../../fonts/line-awesome/fonts/line-awesome.svg?v=1.1.#fa) format("svg");font-weight:400;font-style:normal}@media screen and (-webkit-min-device-pixel-ratio:0){@font-face{font-family:LineAwesome;src:url(../../fonts/line-awesome/fonts/line-awesome.svg?v=1.1.#fa) format("svg")}}.la{font:normal normal normal 16px/1 LineAwesome;font-size:inherit;text-decoration:inherit;text-rendering:optimizeLegibility;text-transform:none;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font-smoothing:antialiased}.la-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.la-2x{font-size:2em}.la-3x{font-size:3em}.la-4x{font-size:4em}.la-5x{font-size:5em}.la-fw{width:1.28571429em}.la-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.la-ul>li{position:relative}.la-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em}.la-li.la-lg{left:-1.85714286em}.la-border{padding:.2em .25em .15em;border:.08em solid #eee;border-radius:.1em}.pull-right{float:right}.pull-left{float:left}.li.pull-left{margin-right:.3em}.li.pull-right{margin-left:.3em}.la-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.la-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.la-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.la-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.la-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);-webkit-transform:scale(-1,1);-ms-transform:scale(-1,1);transform:scale(-1,1)}.la-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);-webkit-transform:scale(1,-1);-ms-transform:scale(1,-1);transform:scale(1,-1)}:root .la-flip-horizontal,:root .la-flip-vertical,:root .la-rotate-180,:root .la-rotate-270,:root .la-rotate-90{filter:none}.la-stack{position:relative;width:2em;height:2em;line-height:2em;vertical-align:middle}.la-stack-1x,.la-stack-2x{position:absolute;left:0;width:100%;text-align:center}.la-stack-1x{line-height:inherit}.la-stack-2x{font-size:2em}.la-inverse{color:#fff}.la-500px:before{content:"\f100"}.la-adjust:before{content:"\f101"}.la-adn:before{content:"\f102"}.la-align-center:before{content:"\f103"}.la-align-justify:before{content:"\f104"}.la-align-left:before{content:"\f105"}.la-align-right:before{content:"\f106"}.la-amazon:before{content:"\f107"}.la-ambulance:before{content:"\f108"}.la-anchor:before{content:"\f109"}.la-android:before{content:"\f10a"}.la-angellist:before{content:"\f10b"}.la-angle-double-down:before{content:"\f10c"}.la-angle-double-left:before{content:"\f10d"}.la-angle-double-right:before{content:"\f10e"}.la-angle-double-up:before{content:"\f10f"}.la-angle-down:before{content:"\f110"}.la-angle-left:before{content:"\f111"}.la-angle-right:before{content:"\f112"}.la-angle-up:before{content:"\f113"}.la-apple:before{content:"\f114"}.la-archive:before{content:"\f115"}.la-area-chart:before{content:"\f116"}.la-arrow-circle-down:before{content:"\f117"}.la-arrow-circle-left:before{content:"\f118"}.la-arrow-circle-o-down:before{content:"\f119"}.la-arrow-circle-o-left:before{content:"\f11a"}.la-arrow-circle-o-right:before{content:"\f11b"}.la-arrow-circle-o-up:before{content:"\f11c"}.la-arrow-circle-right:before{content:"\f11d"}.la-arrow-circle-up:before{content:"\f11e"}.la-arrow-down:before{content:"\f11f"}.la-arrow-left:before{content:"\f120"}.la-arrow-right:before{content:"\f121"}.la-arrow-up:before{content:"\f122"}.la-arrows:before{content:"\f123"}.la-arrows-alt:before{content:"\f124"}.la-arrows-h:before{content:"\f125"}.la-arrows-v:before{content:"\f126"}.la-asterisk:before{content:"\f127"}.la-at:before{content:"\f128"}.la-automobile:before{content:"\f129"}.la-backward:before{content:"\f12a"}.la-balance-scale:before{content:"\f12b"}.la-ban:before{content:"\f12c"}.la-bank:before{content:"\f12d"}.la-bar-chart:before{content:"\f12e"}.la-bar-chart-o:before{content:"\f12f"}.la-barcode:before{content:"\f130"}.la-bars:before{content:"\f131"}.la-battery-0:before{content:"\f132"}.la-battery-1:before{content:"\f133"}.la-battery-2:before{content:"\f134"}.la-battery-3:before{content:"\f135"}.la-battery-4:before{content:"\f136"}.la-battery-empty:before{content:"\f137"}.la-battery-full:before{content:"\f138"}.la-battery-half:before{content:"\f139"}.la-battery-quarter:before{content:"\f13a"}.la-battery-three-quarters:before{content:"\f13b"}.la-bed:before{content:"\f13c"}.la-beer:before{content:"\f13d"}.la-behance:before{content:"\f13e"}.la-behance-square:before{content:"\f13f"}.la-bell:before{content:"\f140"}.la-bell-o:before{content:"\f141"}.la-bell-slash:before{content:"\f142"}.la-bell-slash-o:before{content:"\f143"}.la-bicycle:before{content:"\f144"}.la-binoculars:before{content:"\f145"}.la-birthday-cake:before{content:"\f146"}.la-bitbucket:before{content:"\f147"}.la-bitbucket-square:before{content:"\f148"}.la-bitcoin:before{content:"\f149"}.la-black-tie:before{content:"\f14a"}.la-bold:before{content:"\f14b"}.la-bolt:before{content:"\f14c"}.la-bomb:before{content:"\f14d"}.la-book:before{content:"\f14e"}.la-bookmark:before{content:"\f14f"}.la-bookmark-o:before{content:"\f150"}.la-briefcase:before{content:"\f151"}.la-btc:before{content:"\f152"}.la-bug:before{content:"\f153"}.la-building:before{content:"\f154"}.la-building-o:before{content:"\f155"}.la-bullhorn:before{content:"\f156"}.la-bullseye:before{content:"\f157"}.la-bus:before{content:"\f158"}.la-buysellads:before{content:"\f159"}.la-cab:before{content:"\f15a"}.la-calculator:before{content:"\f15b"}.la-calendar:before{content:"\f15c"}.la-calendar-check-o:before{content:"\f15d"}.la-calendar-minus-o:before{content:"\f15e"}.la-calendar-o:before{content:"\f15f"}.la-calendar-plus-o:before{content:"\f160"}.la-calendar-times-o:before{content:"\f161"}.la-camera:before{content:"\f162"}.la-camera-retro:before{content:"\f163"}.la-car:before{content:"\f164"}.la-caret-down:before{content:"\f165"}.la-caret-left:before{content:"\f166"}.la-caret-right:before{content:"\f167"}.la-caret-square-o-down:before,.la-toggle-down:before{content:"\f168"}.la-caret-square-o-left:before,.la-toggle-left:before{content:"\f169"}.la-caret-square-o-right:before,.la-toggle-right:before{content:"\f16a"}.la-caret-square-o-up:before,.la-toggle-up:before{content:"\f16b"}.la-caret-up:before{content:"\f16c"}.la-cart-arrow-down:before{content:"\f16d"}.la-cart-plus:before{content:"\f16e"}.la-cc:before{content:"\f16f"}.la-cc-amex:before{content:"\f170"}.la-cc-diners-club:before{content:"\f171"}.la-cc-discover:before{content:"\f172"}.la-cc-jcb:before{content:"\f173"}.la-cc-mastercard:before{content:"\f174"}.la-cc-paypal:before{content:"\f175"}.la-cc-stripe:before{content:"\f176"}.la-cc-visa:before{content:"\f177"}.la-certificate:before{content:"\f178"}.la-chain:before{content:"\f179"}.la-chain-broken:before{content:"\f17a"}.la-check:before{content:"\f17b"}.la-check-circle:before{content:"\f17c"}.la-check-circle-o:before{content:"\f17d"}.la-check-square:before{content:"\f17e"}.la-check-square-o:before{content:"\f17f"}.la-chevron-circle-down:before{content:"\f180"}.la-chevron-circle-left:before{content:"\f181"}.la-chevron-circle-right:before{content:"\f182"}.la-chevron-circle-up:before{content:"\f183"}.la-chevron-down:before{content:"\f184"}.la-chevron-left:before{content:"\f185"}.la-chevron-right:before{content:"\f186"}.la-chevron-up:before{content:"\f187"}.la-child:before{content:"\f188"}.la-chrome:before{content:"\f189"}.la-circle:before{content:"\f18a"}.la-circle-o:before{content:"\f18b"}.la-circle-o-notch:before{content:"\f18c"}.la-circle-thin:before{content:"\f18d"}.la-clipboard:before{content:"\f18e"}.la-clock-o:before{content:"\f18f"}.la-clone:before{content:"\f190"}.la-close:before{content:"\f191"}.la-cloud:before{content:"\f192"}.la-cloud-download:before{content:"\f193"}.la-cloud-upload:before{content:"\f194"}.la-cny:before{content:"\f195"}.la-code:before{content:"\f196"}.la-code-fork:before{content:"\f197"}.la-codepen:before{content:"\f198"}.la-coffee:before{content:"\f199"}.la-cog:before{content:"\f19a"}.la-cogs:before{content:"\f19b"}.la-columns:before{content:"\f19c"}.la-comment:before{content:"\f19d"}.la-comment-o:before{content:"\f19e"}.la-commenting:before{content:"\f19f"}.la-commenting-o:before{content:"\f1a0"}.la-comments:before{content:"\f1a1"}.la-comments-o:before{content:"\f1a2"}.la-compass:before{content:"\f1a3"}.la-compress:before{content:"\f1a4"}.la-connectdevelop:before{content:"\f1a5"}.la-contao:before{content:"\f1a6"}.la-copy:before{content:"\f1a7"}.la-copyright:before{content:"\f1a8"}.la-creative-commons:before{content:"\f1a9"}.la-credit-card:before{content:"\f1aa"}.la-crop:before{content:"\f1ab"}.la-crosshairs:before{content:"\f1ac"}.la-css3:before{content:"\f1ad"}.la-cube:before{content:"\f1ae"}.la-cubes:before{content:"\f1af"}.la-cut:before{content:"\f1b0"}.la-cutlery:before{content:"\f1b1"}.la-dashboard:before{content:"\f1b2"}.la-dashcube:before{content:"\f1b3"}.la-database:before{content:"\f1b4"}.la-dedent:before{content:"\f1b5"}.la-delicious:before{content:"\f1b6"}.la-desktop:before{content:"\f1b7"}.la-deviantart:before{content:"\f1b8"}.la-diamond:before{content:"\f1b9"}.la-digg:before{content:"\f1ba"}.la-dollar:before{content:"\f1bb"}.la-dot-circle-o:before{content:"\f1bc"}.la-download:before{content:"\f1bd"}.la-dribbble:before{content:"\f1be"}.la-dropbox:before{content:"\f1bf"}.la-drupal:before{content:"\f1c0"}.la-edit:before{content:"\f1c1"}.la-eject:before{content:"\f1c2"}.la-ellipsis-h:before{content:"\f1c3"}.la-ellipsis-v:before{content:"\f1c4"}.la-empire:before,.la-ge:before{content:"\f1c5"}.la-envelope:before{content:"\f1c6"}.la-envelope-o:before{content:"\f1c7"}.la-envelope-square:before{content:"\f1c8"}.la-eraser:before{content:"\f1c9"}.la-eur:before{content:"\f1ca"}.la-euro:before{content:"\f1cb"}.la-exchange:before{content:"\f1cc"}.la-exclamation:before{content:"\f1cd"}.la-exclamation-circle:before{content:"\f1ce"}.la-exclamation-triangle:before{content:"\f1cf"}.la-expand:before{content:"\f1d0"}.la-expeditedssl:before{content:"\f1d1"}.la-external-link:before{content:"\f1d2"}.la-external-link-square:before{content:"\f1d3"}.la-eye:before{content:"\f1d4"}.la-eye-slash:before{content:"\f1d5"}.la-eyedropper:before{content:"\f1d6"}.la-facebook-f:before,.la-facebook:before{content:"\f1d7"}.la-facebook-official:before{content:"\f1d8"}.la-facebook-square:before{content:"\f1d9"}.la-fast-backward:before{content:"\f1da"}.la-fast-forward:before{content:"\f1db"}.la-fax:before{content:"\f1dc"}.la-female:before{content:"\f1dd"}.la-fighter-jet:before{content:"\f1de"}.la-file:before{content:"\f1df"}.la-file-archive-o:before{content:"\f1e0"}.la-file-audio-o:before{content:"\f1e1"}.la-file-code-o:before{content:"\f1e2"}.la-file-excel-o:before{content:"\f1e3"}.la-file-image-o:before{content:"\f1e4"}.la-file-movie-o:before{content:"\f1e5"}.la-file-o:before{content:"\f1e6"}.la-file-pdf-o:before{content:"\f1e7"}.la-file-photo-o:before{content:"\f1e8"}.la-file-picture-o:before{content:"\f1e9"}.la-file-powerpoint-o:before{content:"\f1ea"}.la-file-sound-o:before{content:"\f1eb"}.la-file-text:before{content:"\f1ec"}.la-file-text-o:before{content:"\f1ed"}.la-file-video-o:before{content:"\f1ee"}.la-file-word-o:before{content:"\f1ef"}.la-file-zip-o:before{content:"\f1f0"}.la-files-o:before{content:"\f1f1"}.la-film:before{content:"\f1f2"}.la-filter:before{content:"\f1f3"}.la-fire:before{content:"\f1f4"}.la-fire-extinguisher:before{content:"\f1f5"}.la-firefox:before{content:"\f1f6"}.la-flag:before{content:"\f1f7"}.la-flag-checkered:before{content:"\f1f8"}.la-flag-o:before{content:"\f1f9"}.la-flash:before{content:"\f1fa"}.la-flask:before{content:"\f1fb"}.la-flickr:before{content:"\f1fc"}.la-floppy-o:before{content:"\f1fd"}.la-folder:before{content:"\f1fe"}.la-folder-o:before{content:"\f1ff"}.la-folder-open:before{content:"\f200"}.la-folder-open-o:before{content:"\f201"}.la-font:before{content:"\f202"}.la-fonticons:before{content:"\f203"}.la-forumbee:before{content:"\f204"}.la-forward:before{content:"\f205"}.la-foursquare:before{content:"\f206"}.la-frown-o:before{content:"\f207"}.la-futbol-o:before,.la-soccer-ball-o:before{content:"\f208"}.la-gamepad:before{content:"\f209"}.la-gavel:before{content:"\f20a"}.la-gbp:before{content:"\f20b"}.la-gear:before{content:"\f20c"}.la-gears:before{content:"\f20d"}.la-genderless:before{content:"\f20e"}.la-get-pocket:before{content:"\f20f"}.la-gg:before{content:"\f210"}.la-gg-circle:before{content:"\f211"}.la-gift:before{content:"\f212"}.la-git:before{content:"\f213"}.la-git-square:before{content:"\f214"}.la-github:before{content:"\f215"}.la-github-alt:before{content:"\f216"}.la-github-square:before{content:"\f217"}.la-glass:before{content:"\f218"}.la-globe:before{content:"\f219"}.la-google:before{content:"\f21a"}.la-google-plus:before{content:"\f21b"}.la-google-plus-square:before{content:"\f21c"}.la-google-wallet:before{content:"\f21d"}.la-graduation-cap:before{content:"\f21e"}.la-gittip:before,.la-gratipay:before{content:"\f21f"}.la-group:before{content:"\f220"}.la-h-square:before{content:"\f221"}.la-hacker-news:before{content:"\f222"}.la-hand-grab-o:before{content:"\f223"}.la-hand-lizard-o:before{content:"\f224"}.la-hand-o-down:before{content:"\f225"}.la-hand-o-left:before{content:"\f226"}.la-hand-o-right:before{content:"\f227"}.la-hand-o-up:before{content:"\f228"}.la-hand-paper-o:before{content:"\f229"}.la-hand-peace-o:before{content:"\f22a"}.la-hand-pointer-o:before{content:"\f22b"}.la-hand-rock-o:before{content:"\f22c"}.la-hand-scissors-o:before{content:"\f22d"}.la-hand-spock-o:before{content:"\f22e"}.la-hand-stop-o:before{content:"\f22f"}.la-hdd-o:before{content:"\f230"}.la-header:before{content:"\f231"}.la-headphones:before{content:"\f232"}.la-heart:before{content:"\f233"}.la-heart-o:before{content:"\f234"}.la-heartbeat:before{content:"\f235"}.la-history:before{content:"\f236"}.la-home:before{content:"\f237"}.la-hospital-o:before{content:"\f238"}.la-hotel:before{content:"\f239"}.la-hourglass:before{content:"\f23a"}.la-hourglass-1:before{content:"\f23b"}.la-hourglass-2:before{content:"\f23c"}.la-hourglass-3:before{content:"\f23d"}.la-hourglass-end:before{content:"\f23e"}.la-hourglass-half:before{content:"\f23f"}.la-hourglass-o:before{content:"\f240"}.la-hourglass-start:before{content:"\f241"}.la-houzz:before{content:"\f242"}.la-html5:before{content:"\f243"}.la-i-cursor:before{content:"\f244"}.la-ils:before{content:"\f245"}.la-image:before{content:"\f246"}.la-inbox:before{content:"\f247"}.la-indent:before{content:"\f248"}.la-industry:before{content:"\f249"}.la-info:before{content:"\f24a"}.la-info-circle:before{content:"\f24b"}.la-inr:before{content:"\f24c"}.la-instagram:before{content:"\f24d"}.la-institution:before{content:"\f24e"}.la-internet-explorer:before{content:"\f24f"}.la-ioxhost:before{content:"\f250"}.la-italic:before{content:"\f251"}.la-joomla:before{content:"\f252"}.la-jpy:before{content:"\f253"}.la-jsfiddle:before{content:"\f254"}.la-key:before{content:"\f255"}.la-keyboard-o:before{content:"\f256"}.la-krw:before{content:"\f257"}.la-language:before{content:"\f258"}.la-laptop:before{content:"\f259"}.la-lastfm:before{content:"\f25a"}.la-lastfm-square:before{content:"\f25b"}.la-leaf:before{content:"\f25c"}.la-leanpub:before{content:"\f25d"}.la-legal:before{content:"\f25e"}.la-lemon-o:before{content:"\f25f"}.la-level-down:before{content:"\f260"}.la-level-up:before{content:"\f261"}.la-life-bouy:before{content:"\f262"}.la-life-buoy:before{content:"\f263"}.la-life-ring:before,.la-support:before{content:"\f264"}.la-life-saver:before{content:"\f265"}.la-lightbulb-o:before{content:"\f266"}.la-line-chart:before{content:"\f267"}.la-link:before{content:"\f268"}.la-linkedin:before{content:"\f269"}.la-linkedin-square:before{content:"\f26a"}.la-linux:before{content:"\f26b"}.la-list:before{content:"\f26c"}.la-list-alt:before{content:"\f26d"}.la-list-ol:before{content:"\f26e"}.la-list-ul:before{content:"\f26f"}.la-location-arrow:before{content:"\f270"}.la-lock:before{content:"\f271"}.la-long-arrow-down:before{content:"\f272"}.la-long-arrow-left:before{content:"\f273"}.la-long-arrow-right:before{content:"\f274"}.la-long-arrow-up:before{content:"\f275"}.la-magic:before{content:"\f276"}.la-magnet:before{content:"\f277"}.la-mail-forward:before{content:"\f278"}.la-mail-reply:before{content:"\f279"}.la-mail-reply-all:before{content:"\f27a"}.la-male:before{content:"\f27b"}.la-map:before{content:"\f27c"}.la-map-marker:before{content:"\f27d"}.la-map-o:before{content:"\f27e"}.la-map-pin:before{content:"\f27f"}.la-map-signs:before{content:"\f280"}.la-mars:before{content:"\f281"}.la-mars-double:before{content:"\f282"}.la-mars-stroke:before{content:"\f283"}.la-mars-stroke-h:before{content:"\f284"}.la-mars-stroke-v:before{content:"\f285"}.la-maxcdn:before{content:"\f286"}.la-meanpath:before{content:"\f287"}.la-medium:before{content:"\f288"}.la-medkit:before{content:"\f289"}.la-meh-o:before{content:"\f28a"}.la-mercury:before{content:"\f28b"}.la-microphone:before{content:"\f28c"}.la-microphone-slash:before{content:"\f28d"}.la-minus:before{content:"\f28e"}.la-minus-circle:before{content:"\f28f"}.la-minus-square:before{content:"\f290"}.la-minus-square-o:before{content:"\f291"}.la-mobile:before{content:"\f292"}.la-mobile-phone:before{content:"\f293"}.la-money:before{content:"\f294"}.la-moon-o:before{content:"\f295"}.la-mortar-board:before{content:"\f296"}.la-motorcycle:before{content:"\f297"}.la-mouse-pointer:before{content:"\f298"}.la-music:before{content:"\f299"}.la-navicon:before{content:"\f29a"}.la-neuter:before{content:"\f29b"}.la-newspaper-o:before{content:"\f29c"}.la-object-group:before{content:"\f29d"}.la-object-ungroup:before{content:"\f29e"}.la-odnoklassniki:before{content:"\f29f"}.la-odnoklassniki-square:before{content:"\f2a0"}.la-opencart:before{content:"\f2a1"}.la-openid:before{content:"\f2a2"}.la-opera:before{content:"\f2a3"}.la-optin-monster:before{content:"\f2a4"}.la-outdent:before{content:"\f2a5"}.la-pagelines:before{content:"\f2a6"}.la-paint-brush:before{content:"\f2a7"}.la-paper-plane:before,.la-send:before{content:"\f2a8"}.la-paper-plane-o:before,.la-send-o:before{content:"\f2a9"}.la-paperclip:before{content:"\f2aa"}.la-paragraph:before{content:"\f2ab"}.la-paste:before{content:"\f2ac"}.la-pause:before{content:"\f2ad"}.la-paw:before{content:"\f2ae"}.la-paypal:before{content:"\f2af"}.la-pencil:before{content:"\f2b0"}.la-pencil-square:before{content:"\f2b1"}.la-pencil-square-o:before{content:"\f2b2"}.la-phone:before{content:"\f2b3"}.la-phone-square:before{content:"\f2b4"}.la-photo:before{content:"\f2b5"}.la-picture-o:before{content:"\f2b6"}.la-pie-chart:before{content:"\f2b7"}.la-pied-piper:before{content:"\f2b8"}.la-pied-piper-alt:before{content:"\f2b9"}.la-pinterest:before{content:"\f2ba"}.la-pinterest-p:before{content:"\f2bb"}.la-pinterest-square:before{content:"\f2bc"}.la-plane:before{content:"\f2bd"}.la-play:before{content:"\f2be"}.la-play-circle:before{content:"\f2bf"}.la-play-circle-o:before{content:"\f2c0"}.la-plug:before{content:"\f2c1"}.la-plus:before{content:"\f2c2"}.la-plus-circle:before{content:"\f2c3"}.la-plus-square:before{content:"\f2c4"}.la-plus-square-o:before{content:"\f2c5"}.la-power-off:before{content:"\f2c6"}.la-print:before{content:"\f2c7"}.la-puzzle-piece:before{content:"\f2c8"}.la-qq:before{content:"\f2c9"}.la-qrcode:before{content:"\f2ca"}.la-question:before{content:"\f2cb"}.la-question-circle:before{content:"\f2cc"}.la-quote-left:before{content:"\f2cd"}.la-quote-right:before{content:"\f2ce"}.la-ra:before{content:"\f2cf"}.la-random:before{content:"\f2d0"}.la-rebel:before{content:"\f2d1"}.la-recycle:before{content:"\f2d2"}.la-reddit:before{content:"\f2d3"}.la-reddit-square:before{content:"\f2d4"}.la-refresh:before{content:"\f2d5"}.la-registered:before{content:"\f2d6"}.la-renren:before{content:"\f2d7"}.la-reorder:before{content:"\f2d8"}.la-repeat:before{content:"\f2d9"}.la-reply:before{content:"\f2da"}.la-reply-all:before{content:"\f2db"}.la-retweet:before{content:"\f2dc"}.la-rmb:before{content:"\f2dd"}.la-road:before{content:"\f2de"}.la-rocket:before{content:"\f2df"}.la-rotate-left:before{content:"\f2e0"}.la-rotate-right:before{content:"\f2e1"}.la-rouble:before{content:"\f2e2"}.la-feed:before,.la-rss:before{content:"\f2e3"}.la-rss-square:before{content:"\f2e4"}.la-rub:before{content:"\f2e5"}.la-ruble:before{content:"\f2e6"}.la-rupee:before{content:"\f2e7"}.la-safari:before{content:"\f2e8"}.la-save:before{content:"\f2e9"}.la-scissors:before{content:"\f2ea"}.la-search:before{content:"\f2eb"}.la-search-minus:before{content:"\f2ec"}.la-search-plus:before{content:"\f2ed"}.la-sellsy:before{content:"\f2ee"}.la-server:before{content:"\f2ef"}.la-share:before{content:"\f2f0"}.la-share-alt:before{content:"\f2f1"}.la-share-alt-square:before{content:"\f2f2"}.la-share-square:before{content:"\f2f3"}.la-share-square-o:before{content:"\f2f4"}.la-shekel:before{content:"\f2f5"}.la-sheqel:before{content:"\f2f6"}.la-shield:before{content:"\f2f7"}.la-ship:before{content:"\f2f8"}.la-shirtsinbulk:before{content:"\f2f9"}.la-shopping-cart:before{content:"\f2fa"}.la-sign-in:before{content:"\f2fb"}.la-sign-out:before{content:"\f2fc"}.la-signal:before{content:"\f2fd"}.la-simplybuilt:before{content:"\f2fe"}.la-sitemap:before{content:"\f2ff"}.la-skyatlas:before{content:"\f300"}.la-skype:before{content:"\f301"}.la-slack:before{content:"\f302"}.la-sliders:before{content:"\f303"}.la-slideshare:before{content:"\f304"}.la-smile-o:before{content:"\f305"}.la-sort:before,.la-unsorted:before{content:"\f306"}.la-sort-alpha-asc:before{content:"\f307"}.la-sort-alpha-desc:before{content:"\f308"}.la-sort-amount-asc:before{content:"\f309"}.la-sort-amount-desc:before{content:"\f30a"}.la-sort-asc:before,.la-sort-up:before{content:"\f30b"}.la-sort-desc:before,.la-sort-down:before{content:"\f30c"}.la-sort-numeric-asc:before{content:"\f30d"}.la-sort-numeric-desc:before{content:"\f30e"}.la-soundcloud:before{content:"\f30f"}.la-space-shuttle:before{content:"\f310"}.la-spinner:before{content:"\f311"}.la-spoon:before{content:"\f312"}.la-spotify:before{content:"\f313"}.la-square:before{content:"\f314"}.la-square-o:before{content:"\f315"}.la-stack-exchange:before{content:"\f316"}.la-stack-overflow:before{content:"\f317"}.la-star:before{content:"\f318"}.la-star-half:before{content:"\f319"}.la-star-half-empty:before,.la-star-half-full:before,.la-star-half-o:before{content:"\f31a"}.la-star-o:before{content:"\f31b"}.la-steam:before{content:"\f31c"}.la-steam-square:before{content:"\f31d"}.la-step-backward:before{content:"\f31e"}.la-step-forward:before{content:"\f31f"}.la-stethoscope:before{content:"\f320"}.la-sticky-note:before{content:"\f321"}.la-sticky-note-o:before{content:"\f322"}.la-stop:before{content:"\f323"}.la-street-view:before{content:"\f324"}.la-strikethrough:before{content:"\f325"}.la-stumbleupon:before{content:"\f326"}.la-stumbleupon-circle:before{content:"\f327"}.la-subscript:before{content:"\f328"}.la-subway:before{content:"\f329"}.la-suitcase:before{content:"\f32a"}.la-sun-o:before{content:"\f32b"}.la-superscript:before{content:"\f32c"}.la-table:before{content:"\f32d"}.la-tablet:before{content:"\f32e"}.la-tachometer:before{content:"\f32f"}.la-tag:before{content:"\f330"}.la-tags:before{content:"\f331"}.la-tasks:before{content:"\f332"}.la-taxi:before{content:"\f333"}.la-television:before,.la-tv:before{content:"\f334"}.la-tencent-weibo:before{content:"\f335"}.la-terminal:before{content:"\f336"}.la-text-height:before{content:"\f337"}.la-text-width:before{content:"\f338"}.la-th:before{content:"\f339"}.la-th-large:before{content:"\f33a"}.la-th-list:before{content:"\f33b"}.la-thumb-tack:before{content:"\f33c"}.la-thumbs-down:before{content:"\f33d"}.la-thumbs-o-down:before{content:"\f33e"}.la-thumbs-o-up:before{content:"\f33f"}.la-thumbs-up:before{content:"\f340"}.la-ticket:before{content:"\f341"}.la-remove:before,.la-times:before{content:"\f342"}.la-times-circle:before{content:"\f343"}.la-times-circle-o:before{content:"\f344"}.la-tint:before{content:"\f345"}.la-toggle-off:before{content:"\f346"}.la-toggle-on:before{content:"\f347"}.la-trademark:before{content:"\f348"}.la-train:before{content:"\f349"}.la-intersex:before,.la-transgender:before{content:"\f34a"}.la-transgender-alt:before{content:"\f34b"}.la-trash:before{content:"\f34c"}.la-trash-o:before{content:"\f34d"}.la-tree:before{content:"\f34e"}.la-trello:before{content:"\f34f"}.la-tripadvisor:before{content:"\f350"}.la-trophy:before{content:"\f351"}.la-truck:before{content:"\f352"}.la-try:before{content:"\f353"}.la-tty:before{content:"\f354"}.la-tumblr:before{content:"\f355"}.la-tumblr-square:before{content:"\f356"}.la-turkish-lira:before{content:"\f357"}.la-twitch:before{content:"\f358"}.la-twitter:before{content:"\f359"}.la-twitter-square:before{content:"\f35a"}.la-umbrella:before{content:"\f35b"}.la-underline:before{content:"\f35c"}.la-undo:before{content:"\f35d"}.la-university:before{content:"\f35e"}.la-unlink:before{content:"\f35f"}.la-unlock:before{content:"\f360"}.la-unlock-alt:before{content:"\f361"}.la-upload:before{content:"\f362"}.la-usd:before{content:"\f363"}.la-user:before{content:"\f364"}.la-user-md:before{content:"\f365"}.la-user-plus:before{content:"\f366"}.la-user-secret:before{content:"\f367"}.la-user-times:before{content:"\f368"}.la-users:before{content:"\f369"}.la-venus:before{content:"\f36a"}.la-venus-double:before{content:"\f36b"}.la-venus-mars:before{content:"\f36c"}.la-viacoin:before{content:"\f36d"}.la-video-camera:before{content:"\f36e"}.la-vimeo:before{content:"\f36f"}.la-vimeo-square:before{content:"\f370"}.la-vine:before{content:"\f371"}.la-vk:before{content:"\f372"}.la-volume-down:before{content:"\f373"}.la-volume-off:before{content:"\f374"}.la-volume-up:before{content:"\f375"}.la-warning:before{content:"\f376"}.la-wechat:before{content:"\f377"}.la-weibo:before{content:"\f378"}.la-weixin:before{content:"\f379"}.la-whatsapp:before{content:"\f37a"}.la-wheelchair:before{content:"\f37b"}.la-wifi:before{content:"\f37c"}.la-wikipedia-w:before{content:"\f37d"}.la-windows:before{content:"\f37e"}.la-won:before{content:"\f37f"}.la-wordpress:before{content:"\f380"}.la-wrench:before{content:"\f381"}.la-xing:before{content:"\f382"}.la-xing-square:before{content:"\f383"}.la-y-combinator:before{content:"\f384"}.la-y-combinator-square:before{content:"\f385"}.la-yahoo:before{content:"\f386"}.la-yc:before{content:"\f387"}.la-yc-square:before{content:"\f388"}.la-yelp:before{content:"\f389"}.la-yen:before{content:"\f38a"}.la-youtube:before{content:"\f38b"}.la-youtube-play:before{content:"\f38c"}.la-youtube-square:before{content:"\f38d"}

    /* Flag icons*/
    .flag-icon-background{background-size:contain;background-position:50%;background-repeat:no-repeat}.flag-icon{background-size:contain;background-position:50%;background-repeat:no-repeat;position:relative;display:inline-block;width:1.33333333em;line-height:1em}.flag-icon:before{content:'\00a0'}.flag-icon.flag-icon-squared{width:1em}.flag-icon-ad{background-image:url(../../fonts/flag-icon-css/flags/4x3/ad.svg)}.flag-icon-ad.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ad.svg)}.flag-icon-ae{background-image:url(../../fonts/flag-icon-css/flags/4x3/ae.svg)}.flag-icon-ae.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ae.svg)}.flag-icon-af{background-image:url(../../fonts/flag-icon-css/flags/4x3/af.svg)}.flag-icon-af.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/af.svg)}.flag-icon-ag{background-image:url(../../fonts/flag-icon-css/flags/4x3/ag.svg)}.flag-icon-ag.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ag.svg)}.flag-icon-ai{background-image:url(../../fonts/flag-icon-css/flags/4x3/ai.svg)}.flag-icon-ai.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ai.svg)}.flag-icon-al{background-image:url(../../fonts/flag-icon-css/flags/4x3/al.svg)}.flag-icon-al.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/al.svg)}.flag-icon-am{background-image:url(../../fonts/flag-icon-css/flags/4x3/am.svg)}.flag-icon-am.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/am.svg)}.flag-icon-ao{background-image:url(../../fonts/flag-icon-css/flags/4x3/ao.svg)}.flag-icon-ao.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ao.svg)}.flag-icon-aq{background-image:url(../../fonts/flag-icon-css/flags/4x3/aq.svg)}.flag-icon-aq.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/aq.svg)}.flag-icon-ar{background-image:url(../../fonts/flag-icon-css/flags/4x3/ar.svg)}.flag-icon-ar.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ar.svg)}.flag-icon-as{background-image:url(../../fonts/flag-icon-css/flags/4x3/as.svg)}.flag-icon-as.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/as.svg)}.flag-icon-at{background-image:url(../../fonts/flag-icon-css/flags/4x3/at.svg)}.flag-icon-at.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/at.svg)}.flag-icon-au{background-image:url(../../fonts/flag-icon-css/flags/4x3/au.svg)}.flag-icon-au.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/au.svg)}.flag-icon-aw{background-image:url(../../fonts/flag-icon-css/flags/4x3/aw.svg)}.flag-icon-aw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/aw.svg)}.flag-icon-ax{background-image:url(../../fonts/flag-icon-css/flags/4x3/ax.svg)}.flag-icon-ax.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ax.svg)}.flag-icon-az{background-image:url(../../fonts/flag-icon-css/flags/4x3/az.svg)}.flag-icon-az.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/az.svg)}.flag-icon-ba{background-image:url(../../fonts/flag-icon-css/flags/4x3/ba.svg)}.flag-icon-ba.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ba.svg)}.flag-icon-bb{background-image:url(../../fonts/flag-icon-css/flags/4x3/bb.svg)}.flag-icon-bb.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bb.svg)}.flag-icon-bd{background-image:url(../../fonts/flag-icon-css/flags/4x3/bd.svg)}.flag-icon-bd.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bd.svg)}.flag-icon-be{background-image:url(../../fonts/flag-icon-css/flags/4x3/be.svg)}.flag-icon-be.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/be.svg)}.flag-icon-bf{background-image:url(../../fonts/flag-icon-css/flags/4x3/bf.svg)}.flag-icon-bf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bf.svg)}.flag-icon-bg{background-image:url(../../fonts/flag-icon-css/flags/4x3/bg.svg)}.flag-icon-bg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bg.svg)}.flag-icon-bh{background-image:url(../../fonts/flag-icon-css/flags/4x3/bh.svg)}.flag-icon-bh.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bh.svg)}.flag-icon-bi{background-image:url(../../fonts/flag-icon-css/flags/4x3/bi.svg)}.flag-icon-bi.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bi.svg)}.flag-icon-bj{background-image:url(../../fonts/flag-icon-css/flags/4x3/bj.svg)}.flag-icon-bj.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bj.svg)}.flag-icon-bl{background-image:url(../../fonts/flag-icon-css/flags/4x3/bl.svg)}.flag-icon-bl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bl.svg)}.flag-icon-bm{background-image:url(../../fonts/flag-icon-css/flags/4x3/bm.svg)}.flag-icon-bm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bm.svg)}.flag-icon-bn{background-image:url(../../fonts/flag-icon-css/flags/4x3/bn.svg)}.flag-icon-bn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bn.svg)}.flag-icon-bo{background-image:url(../../fonts/flag-icon-css/flags/4x3/bo.svg)}.flag-icon-bo.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bo.svg)}.flag-icon-bq{background-image:url(../../fonts/flag-icon-css/flags/4x3/bq.svg)}.flag-icon-bq.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bq.svg)}.flag-icon-br{background-image:url(../../fonts/flag-icon-css/flags/4x3/br.svg)}.flag-icon-br.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/br.svg)}.flag-icon-bs{background-image:url(../../fonts/flag-icon-css/flags/4x3/bs.svg)}.flag-icon-bs.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bs.svg)}.flag-icon-bt{background-image:url(../../fonts/flag-icon-css/flags/4x3/bt.svg)}.flag-icon-bt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bt.svg)}.flag-icon-bv{background-image:url(../../fonts/flag-icon-css/flags/4x3/bv.svg)}.flag-icon-bv.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bv.svg)}.flag-icon-bw{background-image:url(../../fonts/flag-icon-css/flags/4x3/bw.svg)}.flag-icon-bw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bw.svg)}.flag-icon-by{background-image:url(../../fonts/flag-icon-css/flags/4x3/by.svg)}.flag-icon-by.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/by.svg)}.flag-icon-bz{background-image:url(../../fonts/flag-icon-css/flags/4x3/bz.svg)}.flag-icon-bz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/bz.svg)}.flag-icon-ca{background-image:url(../../fonts/flag-icon-css/flags/4x3/ca.svg)}.flag-icon-ca.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ca.svg)}.flag-icon-cc{background-image:url(../../fonts/flag-icon-css/flags/4x3/cc.svg)}.flag-icon-cc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cc.svg)}.flag-icon-cd{background-image:url(../../fonts/flag-icon-css/flags/4x3/cd.svg)}.flag-icon-cd.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cd.svg)}.flag-icon-cf{background-image:url(../../fonts/flag-icon-css/flags/4x3/cf.svg)}.flag-icon-cf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cf.svg)}.flag-icon-cg{background-image:url(../../fonts/flag-icon-css/flags/4x3/cg.svg)}.flag-icon-cg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cg.svg)}.flag-icon-ch{background-image:url(../../fonts/flag-icon-css/flags/4x3/ch.svg)}.flag-icon-ch.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ch.svg)}.flag-icon-ci{background-image:url(../../fonts/flag-icon-css/flags/4x3/ci.svg)}.flag-icon-ci.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ci.svg)}.flag-icon-ck{background-image:url(../../fonts/flag-icon-css/flags/4x3/ck.svg)}.flag-icon-ck.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ck.svg)}.flag-icon-cl{background-image:url(../../fonts/flag-icon-css/flags/4x3/cl.svg)}.flag-icon-cl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cl.svg)}.flag-icon-cm{background-image:url(../../fonts/flag-icon-css/flags/4x3/cm.svg)}.flag-icon-cm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cm.svg)}.flag-icon-cn{background-image:url(../../fonts/flag-icon-css/flags/4x3/cn.svg)}.flag-icon-cn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cn.svg)}.flag-icon-co{background-image:url(../../fonts/flag-icon-css/flags/4x3/co.svg)}.flag-icon-co.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/co.svg)}.flag-icon-cr{background-image:url(../../fonts/flag-icon-css/flags/4x3/cr.svg)}.flag-icon-cr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cr.svg)}.flag-icon-cu{background-image:url(../../fonts/flag-icon-css/flags/4x3/cu.svg)}.flag-icon-cu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cu.svg)}.flag-icon-cv{background-image:url(../../fonts/flag-icon-css/flags/4x3/cv.svg)}.flag-icon-cv.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cv.svg)}.flag-icon-cw{background-image:url(../../fonts/flag-icon-css/flags/4x3/cw.svg)}.flag-icon-cw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cw.svg)}.flag-icon-cx{background-image:url(../../fonts/flag-icon-css/flags/4x3/cx.svg)}.flag-icon-cx.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cx.svg)}.flag-icon-cy{background-image:url(../../fonts/flag-icon-css/flags/4x3/cy.svg)}.flag-icon-cy.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cy.svg)}.flag-icon-cz{background-image:url(../../fonts/flag-icon-css/flags/4x3/cz.svg)}.flag-icon-cz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/cz.svg)}.flag-icon-de{background-image:url(../../fonts/flag-icon-css/flags/4x3/de.svg)}.flag-icon-de.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/de.svg)}.flag-icon-dj{background-image:url(../../fonts/flag-icon-css/flags/4x3/dj.svg)}.flag-icon-dj.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/dj.svg)}.flag-icon-dk{background-image:url(../../fonts/flag-icon-css/flags/4x3/dk.svg)}.flag-icon-dk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/dk.svg)}.flag-icon-dm{background-image:url(../../fonts/flag-icon-css/flags/4x3/dm.svg)}.flag-icon-dm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/dm.svg)}.flag-icon-do{background-image:url(../../fonts/flag-icon-css/flags/4x3/do.svg)}.flag-icon-do.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/do.svg)}.flag-icon-dz{background-image:url(../../fonts/flag-icon-css/flags/4x3/dz.svg)}.flag-icon-dz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/dz.svg)}.flag-icon-ec{background-image:url(../../fonts/flag-icon-css/flags/4x3/ec.svg)}.flag-icon-ec.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ec.svg)}.flag-icon-ee{background-image:url(../../fonts/flag-icon-css/flags/4x3/ee.svg)}.flag-icon-ee.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ee.svg)}.flag-icon-eg{background-image:url(../../fonts/flag-icon-css/flags/4x3/eg.svg)}.flag-icon-eg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/eg.svg)}.flag-icon-eh{background-image:url(../../fonts/flag-icon-css/flags/4x3/eh.svg)}.flag-icon-eh.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/eh.svg)}.flag-icon-er{background-image:url(../../fonts/flag-icon-css/flags/4x3/er.svg)}.flag-icon-er.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/er.svg)}.flag-icon-es{background-image:url(../../fonts/flag-icon-css/flags/4x3/es.svg)}.flag-icon-es.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/es.svg)}.flag-icon-et{background-image:url(../../fonts/flag-icon-css/flags/4x3/et.svg)}.flag-icon-et.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/et.svg)}.flag-icon-fi{background-image:url(../../fonts/flag-icon-css/flags/4x3/fi.svg)}.flag-icon-fi.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/fi.svg)}.flag-icon-fj{background-image:url(../../fonts/flag-icon-css/flags/4x3/fj.svg)}.flag-icon-fj.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/fj.svg)}.flag-icon-fk{background-image:url(../../fonts/flag-icon-css/flags/4x3/fk.svg)}.flag-icon-fk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/fk.svg)}.flag-icon-fm{background-image:url(../../fonts/flag-icon-css/flags/4x3/fm.svg)}.flag-icon-fm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/fm.svg)}.flag-icon-fo{background-image:url(../../fonts/flag-icon-css/flags/4x3/fo.svg)}.flag-icon-fo.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/fo.svg)}.flag-icon-fr{background-image:url(../../fonts/flag-icon-css/flags/4x3/fr.svg)}.flag-icon-fr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/fr.svg)}.flag-icon-ga{background-image:url(../../fonts/flag-icon-css/flags/4x3/ga.svg)}.flag-icon-ga.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ga.svg)}.flag-icon-gb{background-image:url(../../fonts/flag-icon-css/flags/4x3/gb.svg)}.flag-icon-gb.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gb.svg)}.flag-icon-gd{background-image:url(../../fonts/flag-icon-css/flags/4x3/gd.svg)}.flag-icon-gd.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gd.svg)}.flag-icon-ge{background-image:url(../../fonts/flag-icon-css/flags/4x3/ge.svg)}.flag-icon-ge.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ge.svg)}.flag-icon-gf{background-image:url(../../fonts/flag-icon-css/flags/4x3/gf.svg)}.flag-icon-gf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gf.svg)}.flag-icon-gg{background-image:url(../../fonts/flag-icon-css/flags/4x3/gg.svg)}.flag-icon-gg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gg.svg)}.flag-icon-gh{background-image:url(../../fonts/flag-icon-css/flags/4x3/gh.svg)}.flag-icon-gh.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gh.svg)}.flag-icon-gi{background-image:url(../../fonts/flag-icon-css/flags/4x3/gi.svg)}.flag-icon-gi.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gi.svg)}.flag-icon-gl{background-image:url(../../fonts/flag-icon-css/flags/4x3/gl.svg)}.flag-icon-gl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gl.svg)}.flag-icon-gm{background-image:url(../../fonts/flag-icon-css/flags/4x3/gm.svg)}.flag-icon-gm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gm.svg)}.flag-icon-gn{background-image:url(../../fonts/flag-icon-css/flags/4x3/gn.svg)}.flag-icon-gn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gn.svg)}.flag-icon-gp{background-image:url(../../fonts/flag-icon-css/flags/4x3/gp.svg)}.flag-icon-gp.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gp.svg)}.flag-icon-gq{background-image:url(../../fonts/flag-icon-css/flags/4x3/gq.svg)}.flag-icon-gq.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gq.svg)}.flag-icon-gr{background-image:url(../../fonts/flag-icon-css/flags/4x3/gr.svg)}.flag-icon-gr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gr.svg)}.flag-icon-gs{background-image:url(../../fonts/flag-icon-css/flags/4x3/gs.svg)}.flag-icon-gs.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gs.svg)}.flag-icon-gt{background-image:url(../../fonts/flag-icon-css/flags/4x3/gt.svg)}.flag-icon-gt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gt.svg)}.flag-icon-gu{background-image:url(../../fonts/flag-icon-css/flags/4x3/gu.svg)}.flag-icon-gu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gu.svg)}.flag-icon-gw{background-image:url(../../fonts/flag-icon-css/flags/4x3/gw.svg)}.flag-icon-gw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gw.svg)}.flag-icon-gy{background-image:url(../../fonts/flag-icon-css/flags/4x3/gy.svg)}.flag-icon-gy.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gy.svg)}.flag-icon-hk{background-image:url(../../fonts/flag-icon-css/flags/4x3/hk.svg)}.flag-icon-hk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/hk.svg)}.flag-icon-hm{background-image:url(../../fonts/flag-icon-css/flags/4x3/hm.svg)}.flag-icon-hm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/hm.svg)}.flag-icon-hn{background-image:url(../../fonts/flag-icon-css/flags/4x3/hn.svg)}.flag-icon-hn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/hn.svg)}.flag-icon-hr{background-image:url(../../fonts/flag-icon-css/flags/4x3/hr.svg)}.flag-icon-hr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/hr.svg)}.flag-icon-ht{background-image:url(../../fonts/flag-icon-css/flags/4x3/ht.svg)}.flag-icon-ht.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ht.svg)}.flag-icon-hu{background-image:url(../../fonts/flag-icon-css/flags/4x3/hu.svg)}.flag-icon-hu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/hu.svg)}.flag-icon-id{background-image:url(../../fonts/flag-icon-css/flags/4x3/id.svg)}.flag-icon-id.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/id.svg)}.flag-icon-ie{background-image:url(../../fonts/flag-icon-css/flags/4x3/ie.svg)}.flag-icon-ie.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ie.svg)}.flag-icon-il{background-image:url(../../fonts/flag-icon-css/flags/4x3/il.svg)}.flag-icon-il.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/il.svg)}.flag-icon-im{background-image:url(../../fonts/flag-icon-css/flags/4x3/im.svg)}.flag-icon-im.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/im.svg)}.flag-icon-in{background-image:url(../../fonts/flag-icon-css/flags/4x3/in.svg)}.flag-icon-in.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/in.svg)}.flag-icon-io{background-image:url(../../fonts/flag-icon-css/flags/4x3/io.svg)}.flag-icon-io.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/io.svg)}.flag-icon-iq{background-image:url(../../fonts/flag-icon-css/flags/4x3/iq.svg)}.flag-icon-iq.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/iq.svg)}.flag-icon-ir{background-image:url(../../fonts/flag-icon-css/flags/4x3/ir.svg)}.flag-icon-ir.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ir.svg)}.flag-icon-is{background-image:url(../../fonts/flag-icon-css/flags/4x3/is.svg)}.flag-icon-is.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/is.svg)}.flag-icon-it{background-image:url(../../fonts/flag-icon-css/flags/4x3/it.svg)}.flag-icon-it.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/it.svg)}.flag-icon-je{background-image:url(../../fonts/flag-icon-css/flags/4x3/je.svg)}.flag-icon-je.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/je.svg)}.flag-icon-jm{background-image:url(../../fonts/flag-icon-css/flags/4x3/jm.svg)}.flag-icon-jm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/jm.svg)}.flag-icon-jo{background-image:url(../../fonts/flag-icon-css/flags/4x3/jo.svg)}.flag-icon-jo.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/jo.svg)}.flag-icon-jp{background-image:url(../../fonts/flag-icon-css/flags/4x3/jp.svg)}.flag-icon-jp.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/jp.svg)}.flag-icon-ke{background-image:url(../../fonts/flag-icon-css/flags/4x3/ke.svg)}.flag-icon-ke.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ke.svg)}.flag-icon-kg{background-image:url(../../fonts/flag-icon-css/flags/4x3/kg.svg)}.flag-icon-kg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kg.svg)}.flag-icon-kh{background-image:url(../../fonts/flag-icon-css/flags/4x3/kh.svg)}.flag-icon-kh.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kh.svg)}.flag-icon-ki{background-image:url(../../fonts/flag-icon-css/flags/4x3/ki.svg)}.flag-icon-ki.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ki.svg)}.flag-icon-km{background-image:url(../../fonts/flag-icon-css/flags/4x3/km.svg)}.flag-icon-km.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/km.svg)}.flag-icon-kn{background-image:url(../../fonts/flag-icon-css/flags/4x3/kn.svg)}.flag-icon-kn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kn.svg)}.flag-icon-kp{background-image:url(../../fonts/flag-icon-css/flags/4x3/kp.svg)}.flag-icon-kp.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kp.svg)}.flag-icon-kr{background-image:url(../../fonts/flag-icon-css/flags/4x3/kr.svg)}.flag-icon-kr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kr.svg)}.flag-icon-kw{background-image:url(../../fonts/flag-icon-css/flags/4x3/kw.svg)}.flag-icon-kw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kw.svg)}.flag-icon-ky{background-image:url(../../fonts/flag-icon-css/flags/4x3/ky.svg)}.flag-icon-ky.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ky.svg)}.flag-icon-kz{background-image:url(../../fonts/flag-icon-css/flags/4x3/kz.svg)}.flag-icon-kz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/kz.svg)}.flag-icon-la{background-image:url(../../fonts/flag-icon-css/flags/4x3/la.svg)}.flag-icon-la.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/la.svg)}.flag-icon-lb{background-image:url(../../fonts/flag-icon-css/flags/4x3/lb.svg)}.flag-icon-lb.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lb.svg)}.flag-icon-lc{background-image:url(../../fonts/flag-icon-css/flags/4x3/lc.svg)}.flag-icon-lc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lc.svg)}.flag-icon-li{background-image:url(../../fonts/flag-icon-css/flags/4x3/li.svg)}.flag-icon-li.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/li.svg)}.flag-icon-lk{background-image:url(../../fonts/flag-icon-css/flags/4x3/lk.svg)}.flag-icon-lk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lk.svg)}.flag-icon-lr{background-image:url(../../fonts/flag-icon-css/flags/4x3/lr.svg)}.flag-icon-lr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lr.svg)}.flag-icon-ls{background-image:url(../../fonts/flag-icon-css/flags/4x3/ls.svg)}.flag-icon-ls.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ls.svg)}.flag-icon-lt{background-image:url(../../fonts/flag-icon-css/flags/4x3/lt.svg)}.flag-icon-lt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lt.svg)}.flag-icon-lu{background-image:url(../../fonts/flag-icon-css/flags/4x3/lu.svg)}.flag-icon-lu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lu.svg)}.flag-icon-lv{background-image:url(../../fonts/flag-icon-css/flags/4x3/lv.svg)}.flag-icon-lv.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/lv.svg)}.flag-icon-ly{background-image:url(../../fonts/flag-icon-css/flags/4x3/ly.svg)}.flag-icon-ly.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ly.svg)}.flag-icon-ma{background-image:url(../../fonts/flag-icon-css/flags/4x3/ma.svg)}.flag-icon-ma.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ma.svg)}.flag-icon-mc{background-image:url(../../fonts/flag-icon-css/flags/4x3/mc.svg)}.flag-icon-mc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mc.svg)}.flag-icon-md{background-image:url(../../fonts/flag-icon-css/flags/4x3/md.svg)}.flag-icon-md.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/md.svg)}.flag-icon-me{background-image:url(../../fonts/flag-icon-css/flags/4x3/me.svg)}.flag-icon-me.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/me.svg)}.flag-icon-mf{background-image:url(../../fonts/flag-icon-css/flags/4x3/mf.svg)}.flag-icon-mf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mf.svg)}.flag-icon-mg{background-image:url(../../fonts/flag-icon-css/flags/4x3/mg.svg)}.flag-icon-mg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mg.svg)}.flag-icon-mh{background-image:url(../../fonts/flag-icon-css/flags/4x3/mh.svg)}.flag-icon-mh.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mh.svg)}.flag-icon-mk{background-image:url(../../fonts/flag-icon-css/flags/4x3/mk.svg)}.flag-icon-mk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mk.svg)}.flag-icon-ml{background-image:url(../../fonts/flag-icon-css/flags/4x3/ml.svg)}.flag-icon-ml.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ml.svg)}.flag-icon-mm{background-image:url(../../fonts/flag-icon-css/flags/4x3/mm.svg)}.flag-icon-mm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mm.svg)}.flag-icon-mn{background-image:url(../../fonts/flag-icon-css/flags/4x3/mn.svg)}.flag-icon-mn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mn.svg)}.flag-icon-mo{background-image:url(../../fonts/flag-icon-css/flags/4x3/mo.svg)}.flag-icon-mo.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mo.svg)}.flag-icon-mp{background-image:url(../../fonts/flag-icon-css/flags/4x3/mp.svg)}.flag-icon-mp.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mp.svg)}.flag-icon-mq{background-image:url(../../fonts/flag-icon-css/flags/4x3/mq.svg)}.flag-icon-mq.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mq.svg)}.flag-icon-mr{background-image:url(../../fonts/flag-icon-css/flags/4x3/mr.svg)}.flag-icon-mr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mr.svg)}.flag-icon-ms{background-image:url(../../fonts/flag-icon-css/flags/4x3/ms.svg)}.flag-icon-ms.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ms.svg)}.flag-icon-mt{background-image:url(../../fonts/flag-icon-css/flags/4x3/mt.svg)}.flag-icon-mt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mt.svg)}.flag-icon-mu{background-image:url(../../fonts/flag-icon-css/flags/4x3/mu.svg)}.flag-icon-mu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mu.svg)}.flag-icon-mv{background-image:url(../../fonts/flag-icon-css/flags/4x3/mv.svg)}.flag-icon-mv.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mv.svg)}.flag-icon-mw{background-image:url(../../fonts/flag-icon-css/flags/4x3/mw.svg)}.flag-icon-mw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mw.svg)}.flag-icon-mx{background-image:url(../../fonts/flag-icon-css/flags/4x3/mx.svg)}.flag-icon-mx.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mx.svg)}.flag-icon-my{background-image:url(../../fonts/flag-icon-css/flags/4x3/my.svg)}.flag-icon-my.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/my.svg)}.flag-icon-mz{background-image:url(../../fonts/flag-icon-css/flags/4x3/mz.svg)}.flag-icon-mz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/mz.svg)}.flag-icon-na{background-image:url(../../fonts/flag-icon-css/flags/4x3/na.svg)}.flag-icon-na.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/na.svg)}.flag-icon-nc{background-image:url(../../fonts/flag-icon-css/flags/4x3/nc.svg)}.flag-icon-nc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/nc.svg)}.flag-icon-ne{background-image:url(../../fonts/flag-icon-css/flags/4x3/ne.svg)}.flag-icon-ne.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ne.svg)}.flag-icon-nf{background-image:url(../../fonts/flag-icon-css/flags/4x3/nf.svg)}.flag-icon-nf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/nf.svg)}.flag-icon-ng{background-image:url(../../fonts/flag-icon-css/flags/4x3/ng.svg)}.flag-icon-ng.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ng.svg)}.flag-icon-ni{background-image:url(../../fonts/flag-icon-css/flags/4x3/ni.svg)}.flag-icon-ni.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ni.svg)}.flag-icon-nl{background-image:url(../../fonts/flag-icon-css/flags/4x3/nl.svg)}.flag-icon-nl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/nl.svg)}.flag-icon-no{background-image:url(../../fonts/flag-icon-css/flags/4x3/no.svg)}.flag-icon-no.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/no.svg)}.flag-icon-np{background-image:url(../../fonts/flag-icon-css/flags/4x3/np.svg)}.flag-icon-np.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/np.svg)}.flag-icon-nr{background-image:url(../../fonts/flag-icon-css/flags/4x3/nr.svg)}.flag-icon-nr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/nr.svg)}.flag-icon-nu{background-image:url(../../fonts/flag-icon-css/flags/4x3/nu.svg)}.flag-icon-nu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/nu.svg)}.flag-icon-nz{background-image:url(../../fonts/flag-icon-css/flags/4x3/nz.svg)}.flag-icon-nz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/nz.svg)}.flag-icon-om{background-image:url(../../fonts/flag-icon-css/flags/4x3/om.svg)}.flag-icon-om.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/om.svg)}.flag-icon-pa{background-image:url(../../fonts/flag-icon-css/flags/4x3/pa.svg)}.flag-icon-pa.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pa.svg)}.flag-icon-pe{background-image:url(../../fonts/flag-icon-css/flags/4x3/pe.svg)}.flag-icon-pe.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pe.svg)}.flag-icon-pf{background-image:url(../../fonts/flag-icon-css/flags/4x3/pf.svg)}.flag-icon-pf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pf.svg)}.flag-icon-pg{background-image:url(../../fonts/flag-icon-css/flags/4x3/pg.svg)}.flag-icon-pg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pg.svg)}.flag-icon-ph{background-image:url(../../fonts/flag-icon-css/flags/4x3/ph.svg)}.flag-icon-ph.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ph.svg)}.flag-icon-pk{background-image:url(../../fonts/flag-icon-css/flags/4x3/pk.svg)}.flag-icon-pk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pk.svg)}.flag-icon-pl{background-image:url(../../fonts/flag-icon-css/flags/4x3/pl.svg)}.flag-icon-pl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pl.svg)}.flag-icon-pm{background-image:url(../../fonts/flag-icon-css/flags/4x3/pm.svg)}.flag-icon-pm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pm.svg)}.flag-icon-pn{background-image:url(../../fonts/flag-icon-css/flags/4x3/pn.svg)}.flag-icon-pn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pn.svg)}.flag-icon-pr{background-image:url(../../fonts/flag-icon-css/flags/4x3/pr.svg)}.flag-icon-pr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pr.svg)}.flag-icon-ps{background-image:url(../../fonts/flag-icon-css/flags/4x3/ps.svg)}.flag-icon-ps.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ps.svg)}.flag-icon-pt{background-image:url(../../fonts/flag-icon-css/flags/4x3/pt.svg)}.flag-icon-pt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pt.svg)}.flag-icon-pw{background-image:url(../../fonts/flag-icon-css/flags/4x3/pw.svg)}.flag-icon-pw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/pw.svg)}.flag-icon-py{background-image:url(../../fonts/flag-icon-css/flags/4x3/py.svg)}.flag-icon-py.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/py.svg)}.flag-icon-qa{background-image:url(../../fonts/flag-icon-css/flags/4x3/qa.svg)}.flag-icon-qa.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/qa.svg)}.flag-icon-re{background-image:url(../../fonts/flag-icon-css/flags/4x3/re.svg)}.flag-icon-re.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/re.svg)}.flag-icon-ro{background-image:url(../../fonts/flag-icon-css/flags/4x3/ro.svg)}.flag-icon-ro.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ro.svg)}.flag-icon-rs{background-image:url(../../fonts/flag-icon-css/flags/4x3/rs.svg)}.flag-icon-rs.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/rs.svg)}.flag-icon-ru{background-image:url(../../fonts/flag-icon-css/flags/4x3/ru.svg)}.flag-icon-ru.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ru.svg)}.flag-icon-rw{background-image:url(../../fonts/flag-icon-css/flags/4x3/rw.svg)}.flag-icon-rw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/rw.svg)}.flag-icon-sa{background-image:url(../../fonts/flag-icon-css/flags/4x3/sa.svg)}.flag-icon-sa.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sa.svg)}.flag-icon-sb{background-image:url(../../fonts/flag-icon-css/flags/4x3/sb.svg)}.flag-icon-sb.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sb.svg)}.flag-icon-sc{background-image:url(../../fonts/flag-icon-css/flags/4x3/sc.svg)}.flag-icon-sc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sc.svg)}.flag-icon-sd{background-image:url(../../fonts/flag-icon-css/flags/4x3/sd.svg)}.flag-icon-sd.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sd.svg)}.flag-icon-se{background-image:url(../../fonts/flag-icon-css/flags/4x3/se.svg)}.flag-icon-se.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/se.svg)}.flag-icon-sg{background-image:url(../../fonts/flag-icon-css/flags/4x3/sg.svg)}.flag-icon-sg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sg.svg)}.flag-icon-sh{background-image:url(../../fonts/flag-icon-css/flags/4x3/sh.svg)}.flag-icon-sh.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sh.svg)}.flag-icon-si{background-image:url(../../fonts/flag-icon-css/flags/4x3/si.svg)}.flag-icon-si.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/si.svg)}.flag-icon-sj{background-image:url(../../fonts/flag-icon-css/flags/4x3/sj.svg)}.flag-icon-sj.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sj.svg)}.flag-icon-sk{background-image:url(../../fonts/flag-icon-css/flags/4x3/sk.svg)}.flag-icon-sk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sk.svg)}.flag-icon-sl{background-image:url(../../fonts/flag-icon-css/flags/4x3/sl.svg)}.flag-icon-sl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sl.svg)}.flag-icon-sm{background-image:url(../../fonts/flag-icon-css/flags/4x3/sm.svg)}.flag-icon-sm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sm.svg)}.flag-icon-sn{background-image:url(../../fonts/flag-icon-css/flags/4x3/sn.svg)}.flag-icon-sn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sn.svg)}.flag-icon-so{background-image:url(../../fonts/flag-icon-css/flags/4x3/so.svg)}.flag-icon-so.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/so.svg)}.flag-icon-sr{background-image:url(../../fonts/flag-icon-css/flags/4x3/sr.svg)}.flag-icon-sr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sr.svg)}.flag-icon-ss{background-image:url(../../fonts/flag-icon-css/flags/4x3/ss.svg)}.flag-icon-ss.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ss.svg)}.flag-icon-st{background-image:url(../../fonts/flag-icon-css/flags/4x3/st.svg)}.flag-icon-st.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/st.svg)}.flag-icon-sv{background-image:url(../../fonts/flag-icon-css/flags/4x3/sv.svg)}.flag-icon-sv.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sv.svg)}.flag-icon-sx{background-image:url(../../fonts/flag-icon-css/flags/4x3/sx.svg)}.flag-icon-sx.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sx.svg)}.flag-icon-sy{background-image:url(../../fonts/flag-icon-css/flags/4x3/sy.svg)}.flag-icon-sy.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sy.svg)}.flag-icon-sz{background-image:url(../../fonts/flag-icon-css/flags/4x3/sz.svg)}.flag-icon-sz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/sz.svg)}.flag-icon-tc{background-image:url(../../fonts/flag-icon-css/flags/4x3/tc.svg)}.flag-icon-tc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tc.svg)}.flag-icon-td{background-image:url(../../fonts/flag-icon-css/flags/4x3/td.svg)}.flag-icon-td.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/td.svg)}.flag-icon-tf{background-image:url(../../fonts/flag-icon-css/flags/4x3/tf.svg)}.flag-icon-tf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tf.svg)}.flag-icon-tg{background-image:url(../../fonts/flag-icon-css/flags/4x3/tg.svg)}.flag-icon-tg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tg.svg)}.flag-icon-th{background-image:url(../../fonts/flag-icon-css/flags/4x3/th.svg)}.flag-icon-th.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/th.svg)}.flag-icon-tj{background-image:url(../../fonts/flag-icon-css/flags/4x3/tj.svg)}.flag-icon-tj.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tj.svg)}.flag-icon-tk{background-image:url(../../fonts/flag-icon-css/flags/4x3/tk.svg)}.flag-icon-tk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tk.svg)}.flag-icon-tl{background-image:url(../../fonts/flag-icon-css/flags/4x3/tl.svg)}.flag-icon-tl.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tl.svg)}.flag-icon-tm{background-image:url(../../fonts/flag-icon-css/flags/4x3/tm.svg)}.flag-icon-tm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tm.svg)}.flag-icon-tn{background-image:url(../../fonts/flag-icon-css/flags/4x3/tn.svg)}.flag-icon-tn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tn.svg)}.flag-icon-to{background-image:url(../../fonts/flag-icon-css/flags/4x3/to.svg)}.flag-icon-to.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/to.svg)}.flag-icon-tr{background-image:url(../../fonts/flag-icon-css/flags/4x3/tr.svg)}.flag-icon-tr.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tr.svg)}.flag-icon-tt{background-image:url(../../fonts/flag-icon-css/flags/4x3/tt.svg)}.flag-icon-tt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tt.svg)}.flag-icon-tv{background-image:url(../../fonts/flag-icon-css/flags/4x3/tv.svg)}.flag-icon-tv.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tv.svg)}.flag-icon-tw{background-image:url(../../fonts/flag-icon-css/flags/4x3/tw.svg)}.flag-icon-tw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tw.svg)}.flag-icon-tz{background-image:url(../../fonts/flag-icon-css/flags/4x3/tz.svg)}.flag-icon-tz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/tz.svg)}.flag-icon-ua{background-image:url(../../fonts/flag-icon-css/flags/4x3/ua.svg)}.flag-icon-ua.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ua.svg)}.flag-icon-ug{background-image:url(../../fonts/flag-icon-css/flags/4x3/ug.svg)}.flag-icon-ug.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ug.svg)}.flag-icon-um{background-image:url(../../fonts/flag-icon-css/flags/4x3/um.svg)}.flag-icon-um.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/um.svg)}.flag-icon-us{background-image:url(../../fonts/flag-icon-css/flags/4x3/us.svg)}.flag-icon-us.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/us.svg)}.flag-icon-uy{background-image:url(../../fonts/flag-icon-css/flags/4x3/uy.svg)}.flag-icon-uy.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/uy.svg)}.flag-icon-uz{background-image:url(../../fonts/flag-icon-css/flags/4x3/uz.svg)}.flag-icon-uz.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/uz.svg)}.flag-icon-va{background-image:url(../../fonts/flag-icon-css/flags/4x3/va.svg)}.flag-icon-va.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/va.svg)}.flag-icon-vc{background-image:url(../../fonts/flag-icon-css/flags/4x3/vc.svg)}.flag-icon-vc.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/vc.svg)}.flag-icon-ve{background-image:url(../../fonts/flag-icon-css/flags/4x3/ve.svg)}.flag-icon-ve.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ve.svg)}.flag-icon-vg{background-image:url(../../fonts/flag-icon-css/flags/4x3/vg.svg)}.flag-icon-vg.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/vg.svg)}.flag-icon-vi{background-image:url(../../fonts/flag-icon-css/flags/4x3/vi.svg)}.flag-icon-vi.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/vi.svg)}.flag-icon-vn{background-image:url(../../fonts/flag-icon-css/flags/4x3/vn.svg)}.flag-icon-vn.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/vn.svg)}.flag-icon-vu{background-image:url(../../fonts/flag-icon-css/flags/4x3/vu.svg)}.flag-icon-vu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/vu.svg)}.flag-icon-wf{background-image:url(../../fonts/flag-icon-css/flags/4x3/wf.svg)}.flag-icon-wf.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/wf.svg)}.flag-icon-ws{background-image:url(../../fonts/flag-icon-css/flags/4x3/ws.svg)}.flag-icon-ws.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ws.svg)}.flag-icon-ye{background-image:url(../../fonts/flag-icon-css/flags/4x3/ye.svg)}.flag-icon-ye.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/ye.svg)}.flag-icon-yt{background-image:url(../../fonts/flag-icon-css/flags/4x3/yt.svg)}.flag-icon-yt.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/yt.svg)}.flag-icon-za{background-image:url(../../fonts/flag-icon-css/flags/4x3/za.svg)}.flag-icon-za.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/za.svg)}.flag-icon-zm{background-image:url(../../fonts/flag-icon-css/flags/4x3/zm.svg)}.flag-icon-zm.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/zm.svg)}.flag-icon-zw{background-image:url(../../fonts/flag-icon-css/flags/4x3/zw.svg)}.flag-icon-zw.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/zw.svg)}.flag-icon-es-ca{background-image:url(../../fonts/flag-icon-css/flags/4x3/es-ca.svg)}.flag-icon-es-ca.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/es-ca.svg)}.flag-icon-eu{background-image:url(../../fonts/flag-icon-css/flags/4x3/eu.svg)}.flag-icon-eu.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/eu.svg)}.flag-icon-gb-eng{background-image:url(../../fonts/flag-icon-css/flags/4x3/gb-eng.svg)}.flag-icon-gb-eng.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gb-eng.svg)}.flag-icon-gb-nir{background-image:url(../../fonts/flag-icon-css/flags/4x3/gb-nir.svg)}.flag-icon-gb-nir.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gb-nir.svg)}.flag-icon-gb-sct{background-image:url(../../fonts/flag-icon-css/flags/4x3/gb-sct.svg)}.flag-icon-gb-sct.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gb-sct.svg)}.flag-icon-gb-wls{background-image:url(../../fonts/flag-icon-css/flags/4x3/gb-wls.svg)}.flag-icon-gb-wls.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/gb-wls.svg)}.flag-icon-un{background-image:url(../../fonts/flag-icon-css/flags/4x3/un.svg)}.flag-icon-un.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/un.svg)}.flag-icon-xk{background-image:url(../../fonts/flag-icon-css/flags/4x3/xk.svg)}.flag-icon-xk.flag-icon-squared{background-image:url(../../fonts/flag-icon-css/flags/1x1/xk.svg)}

    /* Pace Loader */
    .pace{-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}.pace-inactive{display:none}.pace .pace-progress{background:#ff6275;position:fixed;z-index:2000;top:0;right:100%;width:100%;height:3px}

    /*!
    * perfect-scrollbar v1.4.0
    * (c) 2018 Hyunje Jun
    * @license MIT
    */
    .ps__rail-x,.ps__rail-y{display:none;opacity:0;position:absolute}.ps{overflow:hidden!important;overflow-anchor:none;-ms-overflow-style:none;touch-action:auto;-ms-touch-action:auto}.ps__rail-x{transition:background-color .2s linear,opacity .2s linear;-webkit-transition:background-color .2s linear,opacity .2s linear;height:15px;bottom:0}.ps__rail-y{transition:background-color .2s linear,opacity .2s linear;-webkit-transition:background-color .2s linear,opacity .2s linear;width:15px;right:0}.ps--active-x>.ps__rail-x,.ps--active-y>.ps__rail-y{display:block;background-color:transparent}.ps--focus>.ps__rail-x,.ps--focus>.ps__rail-y,.ps--scrolling-x>.ps__rail-x,.ps--scrolling-y>.ps__rail-y,.ps:hover>.ps__rail-x,.ps:hover>.ps__rail-y{opacity:.6}.ps .ps__rail-x.ps--clicking,.ps .ps__rail-x:focus,.ps .ps__rail-x:hover,.ps .ps__rail-y.ps--clicking,.ps .ps__rail-y:focus,.ps .ps__rail-y:hover{background-color:#eee;opacity:.9}.ps__thumb-x,.ps__thumb-y{background-color:#aaa;border-radius:6px;position:absolute}.ps__thumb-x{transition:background-color .2s linear,height .2s ease-in-out;-webkit-transition:background-color .2s linear,height .2s ease-in-out;height:6px;bottom:2px}.ps__thumb-y{transition:background-color .2s linear,width .2s ease-in-out;-webkit-transition:background-color .2s linear,width .2s ease-in-out;width:6px;right:2px}.ps__rail-x.ps--clicking .ps__thumb-x,.ps__rail-x:focus>.ps__thumb-x,.ps__rail-x:hover>.ps__thumb-x{background-color:#999;height:11px}.ps__rail-y.ps--clicking .ps__thumb-y,.ps__rail-y:focus>.ps__thumb-y,.ps__rail-y:hover>.ps__thumb-y{background-color:#999;width:11px}@supports (-ms-overflow-style:none){.ps{overflow:auto!important}}@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none){.ps{overflow:auto!important}}

</style>

<style>
    /*!
    * Bootstrap v4.2.1 (https://getbootstrap.com/)
    * Copyright 2011-2018 The Bootstrap Authors
    * Copyright 2011-2018 Twitter, Inc.
    * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
    */
    /*!
    * Bootstrap v4.3.1 (https://getbootstrap.com/)
    * Copyright 2011-2019 The Bootstrap Authors
    * Copyright 2011-2019 Twitter, Inc.
    * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
    */
    :root {
    --blue: #1e9ff2;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #ff4961;
    --orange: #ff9149;
    --yellow: #ffc107;
    --green: #28d094;
    --teal: #20c997;
    --cyan: #666ee8;
    --white: #fff;
    --gray: #6b6f82;
    --gray-dark: #464855;
    --primary: #666ee8;
    --secondary: #6b6f82;
    --success: #28d094;
    --info: #1e9ff2;
    --warning: #ff9149;
    --danger: #ff4961;
    --light: #babfc7;
    --dark: #464855;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    --font-family-monospace: "Quicksand", Georgia, "Times New Roman", Times, serif; }

    *,
    *::before,
    *::after {
    box-sizing: border-box; }

    html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

    article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block; }

    body {
    margin: 0;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.45;
    color: #6b6f82;
    text-align: left;
    background-color: #f4f5fa; }

    [tabindex="-1"]:focus {
    outline: 0 !important; }

    hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible; }

    h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem; }

    p {
    margin-top: 0;
    margin-bottom: 1rem; }

    abbr[title],
    abbr[data-original-title] {
    text-decoration: underline;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    text-decoration-skip-ink: none; }

    address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit; }

    ol,
    ul,
    dl {
    margin-top: 0;
    margin-bottom: 1rem; }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
    margin-bottom: 0; }

    dt {
    font-weight: 700; }

    dd {
    margin-bottom: .5rem;
    margin-left: 0; }

    blockquote {
    margin: 0 0 1rem; }

    b,
    strong {
    font-weight: bolder; }

    small {
    font-size: 80%; }

    sub,
    sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline; }

    sub {
    bottom: -.25em; }

    sup {
    top: -.5em; }

    a {
    color: #5059e5;
    text-decoration: none;
    background-color: transparent; }
    a:hover {
        color: #1e29ca;
        text-decoration: underline; }

    a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none; }
    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):focus {
        outline: 0; }

    pre,
    code,
    kbd,
    samp {
    font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
    font-size: 1em; }

    pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto; }

    figure {
    margin: 0 0 1rem; }

    img {
    vertical-align: middle;
    border-style: none; }

    svg {
    overflow: hidden;
    vertical-align: middle; }

    table {
    border-collapse: collapse; }

    caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #6b6f82;
    text-align: left;
    caption-side: bottom; }

    th {
    text-align: inherit; }

    label {
    display: inline-block;
    margin-bottom: 0.5rem; }

    button {
    border-radius: 0; }

    button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color; }

    input,
    button,
    select,
    optgroup,
    textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit; }

    button,
    input {
    overflow: visible; }

    button,
    select {
    text-transform: none; }

    select {
    word-wrap: normal; }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
    -webkit-appearance: button; }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
    cursor: pointer; }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none; }

    input[type="radio"],
    input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0; }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
    -webkit-appearance: listbox; }

    textarea {
    overflow: auto;
    resize: vertical; }

    fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0; }

    legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal; }

    progress {
    vertical-align: baseline; }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
    height: auto; }

    [type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none; }

    [type="search"]::-webkit-search-decoration {
    -webkit-appearance: none; }

    ::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button; }

    output {
    display: inline-block; }

    summary {
    display: list-item;
    cursor: pointer; }

    template {
    display: none; }

    [hidden] {
    display: none !important; }

    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
    font-weight: 400;
    line-height: 1.2;
    color: #464855; }

    h1, .h1 {
    font-size: 2rem; }

    h2, .h2 {
    font-size: 1.74rem; }

    h3, .h3 {
    font-size: 1.51rem; }

    h4, .h4 {
    font-size: 1.32rem; }

    h5, .h5 {
    font-size: 1.14rem; }

    h6, .h6 {
    font-size: 1rem; }

    .lead {
    font-size: 1.25rem;
    font-weight: 400; }

    .display-1 {
    font-size: 6rem;
    font-weight: 400;
    line-height: 1.2; }

    .display-2 {
    font-size: 5.5rem;
    font-weight: 400;
    line-height: 1.2; }

    .display-3 {
    font-size: 4.5rem;
    font-weight: 400;
    line-height: 1.2; }

    .display-4 {
    font-size: 3.5rem;
    font-weight: 400;
    line-height: 1.2; }

    hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1); }

    small,
    .small {
    font-size: 80%;
    font-weight: 400; }

    mark,
    .mark {
    padding: 0.2em;
    background-color: #fcf8e3; }

    .list-unstyled {
    padding-left: 0;
    list-style: none; }

    .list-inline {
    padding-left: 0;
    list-style: none; }

    .list-inline-item {
    display: inline-block; }
    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem; }

    .initialism {
    font-size: 90%;
    text-transform: uppercase; }

    .blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem; }

    .blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6b6f82; }
    .blockquote-footer::before {
        content: "\2014\00A0"; }

    .img-fluid {
    max-width: 100%;
    height: auto; }

    .img-thumbnail {
    padding: 0.25rem;
    background-color: #f4f5fa;
    border: 1px solid #626e82;
    border-radius: 0.25rem;
    max-width: 100%;
    height: auto; }

    .figure {
    display: inline-block; }

    .figure-img {
    margin-bottom: 0.5rem;
    line-height: 1; }

    .figure-caption {
    font-size: 90%;
    color: #6b6f82; }

    code {
    font-size: 87.5%;
    color: #f74b5c;
    word-break: break-word; }
    a > code {
        color: inherit; }

    kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #f2f3f5;
    border-radius: 0.21rem; }
    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700; }

    pre {
    display: block;
    font-size: 87.5%;
    color: #6b6f82; }
    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal; }

    .pre-scrollable {
    max-height: 340px;
    overflow-y: scroll; }

    .container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto; }
    @media (min-width: 576px) {
        .container {
        max-width: 540px; } }
    @media (min-width: 768px) {
        .container {
        max-width: 720px; } }
    @media (min-width: 992px) {
        .container {
        max-width: 960px; } }
    @media (min-width: 1200px) {
        .container {
        max-width: 1140px; } }

    .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto; }

    .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px; }

    .no-gutters {
    margin-right: 0;
    margin-left: 0; }
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
        padding-right: 0;
        padding-left: 0; }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; }

    .col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }

    .col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }

    .col-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }

    .col-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }

    .col-3 {
    flex: 0 0 25%;
    max-width: 25%; }

    .col-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }

    .col-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }

    .col-6 {
    flex: 0 0 50%;
    max-width: 50%; }

    .col-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }

    .col-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }

    .col-9 {
    flex: 0 0 75%;
    max-width: 75%; }

    .col-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }

    .col-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }

    .col-12 {
    flex: 0 0 100%;
    max-width: 100%; }

    .order-first {
    order: -1; }

    .order-last {
    order: 13; }

    .order-0 {
    order: 0; }

    .order-1 {
    order: 1; }

    .order-2 {
    order: 2; }

    .order-3 {
    order: 3; }

    .order-4 {
    order: 4; }

    .order-5 {
    order: 5; }

    .order-6 {
    order: 6; }

    .order-7 {
    order: 7; }

    .order-8 {
    order: 8; }

    .order-9 {
    order: 9; }

    .order-10 {
    order: 10; }

    .order-11 {
    order: 11; }

    .order-12 {
    order: 12; }

    .offset-1 {
    margin-left: 8.33333%; }

    .offset-2 {
    margin-left: 16.66667%; }

    .offset-3 {
    margin-left: 25%; }

    .offset-4 {
    margin-left: 33.33333%; }

    .offset-5 {
    margin-left: 41.66667%; }

    .offset-6 {
    margin-left: 50%; }

    .offset-7 {
    margin-left: 58.33333%; }

    .offset-8 {
    margin-left: 66.66667%; }

    .offset-9 {
    margin-left: 75%; }

    .offset-10 {
    margin-left: 83.33333%; }

    .offset-11 {
    margin-left: 91.66667%; }

    @media (min-width: 576px) {
    .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%; }
    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%; }
    .col-sm-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }
    .col-sm-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }
    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%; }
    .col-sm-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }
    .col-sm-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }
    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%; }
    .col-sm-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }
    .col-sm-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }
    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%; }
    .col-sm-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }
    .col-sm-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }
    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%; }
    .order-sm-first {
        order: -1; }
    .order-sm-last {
        order: 13; }
    .order-sm-0 {
        order: 0; }
    .order-sm-1 {
        order: 1; }
    .order-sm-2 {
        order: 2; }
    .order-sm-3 {
        order: 3; }
    .order-sm-4 {
        order: 4; }
    .order-sm-5 {
        order: 5; }
    .order-sm-6 {
        order: 6; }
    .order-sm-7 {
        order: 7; }
    .order-sm-8 {
        order: 8; }
    .order-sm-9 {
        order: 9; }
    .order-sm-10 {
        order: 10; }
    .order-sm-11 {
        order: 11; }
    .order-sm-12 {
        order: 12; }
    .offset-sm-0 {
        margin-left: 0; }
    .offset-sm-1 {
        margin-left: 8.33333%; }
    .offset-sm-2 {
        margin-left: 16.66667%; }
    .offset-sm-3 {
        margin-left: 25%; }
    .offset-sm-4 {
        margin-left: 33.33333%; }
    .offset-sm-5 {
        margin-left: 41.66667%; }
    .offset-sm-6 {
        margin-left: 50%; }
    .offset-sm-7 {
        margin-left: 58.33333%; }
    .offset-sm-8 {
        margin-left: 66.66667%; }
    .offset-sm-9 {
        margin-left: 75%; }
    .offset-sm-10 {
        margin-left: 83.33333%; }
    .offset-sm-11 {
        margin-left: 91.66667%; } }

    @media (min-width: 768px) {
    .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%; }
    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%; }
    .col-md-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }
    .col-md-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }
    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%; }
    .col-md-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }
    .col-md-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%; }
    .col-md-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }
    .col-md-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }
    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%; }
    .col-md-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }
    .col-md-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }
    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%; }
    .order-md-first {
        order: -1; }
    .order-md-last {
        order: 13; }
    .order-md-0 {
        order: 0; }
    .order-md-1 {
        order: 1; }
    .order-md-2 {
        order: 2; }
    .order-md-3 {
        order: 3; }
    .order-md-4 {
        order: 4; }
    .order-md-5 {
        order: 5; }
    .order-md-6 {
        order: 6; }
    .order-md-7 {
        order: 7; }
    .order-md-8 {
        order: 8; }
    .order-md-9 {
        order: 9; }
    .order-md-10 {
        order: 10; }
    .order-md-11 {
        order: 11; }
    .order-md-12 {
        order: 12; }
    .offset-md-0 {
        margin-left: 0; }
    .offset-md-1 {
        margin-left: 8.33333%; }
    .offset-md-2 {
        margin-left: 16.66667%; }
    .offset-md-3 {
        margin-left: 25%; }
    .offset-md-4 {
        margin-left: 33.33333%; }
    .offset-md-5 {
        margin-left: 41.66667%; }
    .offset-md-6 {
        margin-left: 50%; }
    .offset-md-7 {
        margin-left: 58.33333%; }
    .offset-md-8 {
        margin-left: 66.66667%; }
    .offset-md-9 {
        margin-left: 75%; }
    .offset-md-10 {
        margin-left: 83.33333%; }
    .offset-md-11 {
        margin-left: 91.66667%; } }

    @media (min-width: 992px) {
    .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%; }
    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%; }
    .col-lg-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }
    .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }
    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%; }
    .col-lg-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }
    .col-lg-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }
    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%; }
    .col-lg-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }
    .col-lg-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }
    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%; }
    .col-lg-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }
    .col-lg-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }
    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%; }
    .order-lg-first {
        order: -1; }
    .order-lg-last {
        order: 13; }
    .order-lg-0 {
        order: 0; }
    .order-lg-1 {
        order: 1; }
    .order-lg-2 {
        order: 2; }
    .order-lg-3 {
        order: 3; }
    .order-lg-4 {
        order: 4; }
    .order-lg-5 {
        order: 5; }
    .order-lg-6 {
        order: 6; }
    .order-lg-7 {
        order: 7; }
    .order-lg-8 {
        order: 8; }
    .order-lg-9 {
        order: 9; }
    .order-lg-10 {
        order: 10; }
    .order-lg-11 {
        order: 11; }
    .order-lg-12 {
        order: 12; }
    .offset-lg-0 {
        margin-left: 0; }
    .offset-lg-1 {
        margin-left: 8.33333%; }
    .offset-lg-2 {
        margin-left: 16.66667%; }
    .offset-lg-3 {
        margin-left: 25%; }
    .offset-lg-4 {
        margin-left: 33.33333%; }
    .offset-lg-5 {
        margin-left: 41.66667%; }
    .offset-lg-6 {
        margin-left: 50%; }
    .offset-lg-7 {
        margin-left: 58.33333%; }
    .offset-lg-8 {
        margin-left: 66.66667%; }
    .offset-lg-9 {
        margin-left: 75%; }
    .offset-lg-10 {
        margin-left: 83.33333%; }
    .offset-lg-11 {
        margin-left: 91.66667%; } }

    @media (min-width: 1200px) {
    .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%; }
    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%; }
    .col-xl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }
    .col-xl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }
    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%; }
    .col-xl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }
    .col-xl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }
    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%; }
    .col-xl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }
    .col-xl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }
    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%; }
    .col-xl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }
    .col-xl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }
    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%; }
    .order-xl-first {
        order: -1; }
    .order-xl-last {
        order: 13; }
    .order-xl-0 {
        order: 0; }
    .order-xl-1 {
        order: 1; }
    .order-xl-2 {
        order: 2; }
    .order-xl-3 {
        order: 3; }
    .order-xl-4 {
        order: 4; }
    .order-xl-5 {
        order: 5; }
    .order-xl-6 {
        order: 6; }
    .order-xl-7 {
        order: 7; }
    .order-xl-8 {
        order: 8; }
    .order-xl-9 {
        order: 9; }
    .order-xl-10 {
        order: 10; }
    .order-xl-11 {
        order: 11; }
    .order-xl-12 {
        order: 12; }
    .offset-xl-0 {
        margin-left: 0; }
    .offset-xl-1 {
        margin-left: 8.33333%; }
    .offset-xl-2 {
        margin-left: 16.66667%; }
    .offset-xl-3 {
        margin-left: 25%; }
    .offset-xl-4 {
        margin-left: 33.33333%; }
    .offset-xl-5 {
        margin-left: 41.66667%; }
    .offset-xl-6 {
        margin-left: 50%; }
    .offset-xl-7 {
        margin-left: 58.33333%; }
    .offset-xl-8 {
        margin-left: 66.66667%; }
    .offset-xl-9 {
        margin-left: 75%; }
    .offset-xl-10 {
        margin-left: 83.33333%; }
    .offset-xl-11 {
        margin-left: 91.66667%; } }

    .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #6b6f82; }
    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #626e82; }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #626e82; }
    .table tbody + tbody {
        border-top: 2px solid #626e82; }

    .table-sm th,
    .table-sm td {
    padding: 0.3rem; }

    .table-bordered {
    border: 1px solid #626e82; }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #626e82; }
    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px; }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
    border: 0; }

    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(245, 247, 250, 0.5); }

    .table-hover tbody tr:hover {
    color: #6b6f82;
    background-color: rgba(245, 247, 250, 0.5); }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
    background-color: #d4d6f9; }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody + tbody {
    border-color: #afb4f3; }

    .table-hover .table-primary:hover {
    background-color: #bec1f6; }
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
        background-color: #bec1f6; }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
    background-color: #d6d7dc; }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody + tbody {
    border-color: #b2b4be; }

    .table-hover .table-secondary:hover {
    background-color: #c8cad0; }
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
        background-color: #c8cad0; }

    .table-success,
    .table-success > th,
    .table-success > td {
    background-color: #c3f2e1; }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody + tbody {
    border-color: #8fe7c7; }

    .table-hover .table-success:hover {
    background-color: #aeedd7; }
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
        background-color: #aeedd7; }

    .table-info,
    .table-info > th,
    .table-info > td {
    background-color: #c0e4fb; }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody + tbody {
    border-color: #8acdf8; }

    .table-hover .table-info:hover {
    background-color: #a8daf9; }
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
        background-color: #a8daf9; }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
    background-color: #ffe0cc; }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody + tbody {
    border-color: #ffc6a0; }

    .table-hover .table-warning:hover {
    background-color: #ffd1b3; }
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
        background-color: #ffd1b3; }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
    background-color: #ffccd3; }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody + tbody {
    border-color: #ffa0ad; }

    .table-hover .table-danger:hover {
    background-color: #ffb3bd; }
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
        background-color: #ffb3bd; }

    .table-light,
    .table-light > th,
    .table-light > td {
    background-color: #ecedef; }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody + tbody {
    border-color: #dbdee2; }

    .table-hover .table-light:hover {
    background-color: #dee0e3; }
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
        background-color: #dee0e3; }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
    background-color: #cbcccf; }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
    border-color: #9fa0a7; }

    .table-hover .table-dark:hover {
    background-color: #bebfc3; }
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
        background-color: #bebfc3; }

    .table-active,
    .table-active > th,
    .table-active > td {
    background-color: rgba(245, 247, 250, 0.5); }

    .table-hover .table-active:hover {
    background-color: rgba(228, 233, 242, 0.5); }
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
        background-color: rgba(228, 233, 242, 0.5); }

    .table .thead-dark th {
    color: #fff;
    background-color: #464855;
    border-color: #575a6a; }

    .table .thead-light th {
    color: #4e5154;
    background-color: #98a4b8;
    border-color: #626e82; }

    .table-dark {
    color: #fff;
    background-color: #464855; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #575a6a; }
    .table-dark.table-bordered {
        border: 0; }
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05); }
    .table-dark.table-hover tbody tr:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.075); }

    @media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; }
        .table-responsive-sm > .table-bordered {
        border: 0; } }

    @media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; }
        .table-responsive-md > .table-bordered {
        border: 0; } }

    @media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; }
        .table-responsive-lg > .table-bordered {
        border: 0; } }

    @media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; }
        .table-responsive-xl > .table-bordered {
        border: 0; } }

    .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive > .table-bordered {
        border: 0; }

    .form-control {
    display: block;
    width: 100%;
    height: calc(1.25em + 1.5rem + 2px);
    padding: 0.75rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #4e5154;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #babfc7;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .form-control {
        transition: none; } }
    .form-control::-ms-expand {
        background-color: transparent;
        border: 0; }
    .form-control:focus {
        color: #4e5154;
        background-color: #fff;
        border-color: #1e9ff2;
        outline: 0;
        box-shadow: none; }
    .form-control::placeholder {
        color: #babfc7;
        opacity: 1; }
    .form-control:disabled, .form-control[readonly] {
        background-color: #98a4b8;
        opacity: 1; }

    select.form-control:focus::-ms-value {
    color: #4e5154;
    background-color: #fff; }

    .form-control-file,
    .form-control-range {
    display: block;
    width: 100%; }

    .col-form-label {
    padding-top: calc(0.75rem + 1px);
    padding-bottom: calc(0.75rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.25; }

    .col-form-label-lg {
    padding-top: calc(1rem + 1px);
    padding-bottom: calc(1rem + 1px);
    font-size: 1.25rem;
    line-height: 1.25; }

    .col-form-label-sm {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 0.875rem;
    line-height: 1; }

    .form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    margin-bottom: 0;
    line-height: 1.25;
    color: #6b6f82;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0; }
    .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0; }

    .form-control-sm {
    height: calc(1.875rem + 2px);
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
    line-height: 1;
    border-radius: 0.21rem; }

    .form-control-lg {
    height: calc(1.25em + 2rem + 2px);
    padding: 1rem 1.25rem;
    font-size: 1.25rem;
    line-height: 1.25;
    border-radius: 0.35rem; }

    select.form-control[size], select.form-control[multiple] {
    height: auto; }

    textarea.form-control {
    height: auto; }

    .form-group {
    margin-bottom: 1rem; }

    .form-text {
    display: block;
    margin-top: 0.25rem; }

    .form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px; }
    .form-row > .col,
    .form-row > [class*="col-"] {
        padding-right: 5px;
        padding-left: 5px; }

    .form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem; }

    .form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem; }
    .form-check-input:disabled ~ .form-check-label {
        color: #6b6f82; }

    .form-check-label {
    margin-bottom: 0; }

    .form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem; }
    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0; }

    .valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #28d094; }

    .valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.875rem;
    line-height: 1.45;
    color: #2a2e30;
    background-color: rgba(40, 208, 148, 0.9);
    border-radius: 0.25rem; }

    .was-validated .form-control:valid, .form-control.is-valid {
    border-color: #28d094;
    padding-right: calc(1.25em + 1.5rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328d094' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center right calc(0.3125em + 0.375rem);
    background-size: calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
    .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
        border-color: #28d094;
        box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.25); }
    .was-validated .form-control:valid ~ .valid-feedback,
    .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
    .form-control.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
    padding-right: calc(1.25em + 1.5rem);
    background-position: top calc(0.3125em + 0.375rem) right calc(0.3125em + 0.375rem); }

    .was-validated .custom-select:valid, .custom-select.is-valid {
    border-color: #28d094;
    padding-right: calc((1em + 1.5rem) * 3 / 4 + 2rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23464855' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328d094' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 2rem/calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
    .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
        border-color: #28d094;
        box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.25); }
    .was-validated .custom-select:valid ~ .valid-feedback,
    .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
    .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .form-control-file:valid ~ .valid-feedback,
    .was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
    .form-control-file.is-valid ~ .valid-tooltip {
    display: block; }

    .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
    color: #28d094; }

    .was-validated .form-check-input:valid ~ .valid-feedback,
    .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
    .form-check-input.is-valid ~ .valid-tooltip {
    display: block; }

    .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
    color: #28d094; }
    .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
        border-color: #28d094; }

    .was-validated .custom-control-input:valid ~ .valid-feedback,
    .was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
    .custom-control-input.is-valid ~ .valid-tooltip {
    display: block; }

    .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
    border-color: #4eddaa;
    background-color: #4eddaa; }

    .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.25); }

    .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #28d094; }

    .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
    border-color: #28d094; }

    .was-validated .custom-file-input:valid ~ .valid-feedback,
    .was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
    .custom-file-input.is-valid ~ .valid-tooltip {
    display: block; }

    .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
    border-color: #28d094;
    box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.25); }

    .invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #ff4961; }

    .invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.875rem;
    line-height: 1.45;
    color: #fff;
    background-color: rgba(255, 73, 97, 0.9);
    border-radius: 0.25rem; }

    .was-validated .form-control:invalid, .form-control.is-invalid {
    border-color: #ff4961;
    padding-right: calc(1.25em + 1.5rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff4961' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23ff4961' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: center right calc(0.3125em + 0.375rem);
    background-size: calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
        border-color: #ff4961;
        box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.25); }
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
    padding-right: calc(1.25em + 1.5rem);
    background-position: top calc(0.3125em + 0.375rem) right calc(0.3125em + 0.375rem); }

    .was-validated .custom-select:invalid, .custom-select.is-invalid {
    border-color: #ff4961;
    padding-right: calc((1em + 1.5rem) * 3 / 4 + 2rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23464855' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff4961' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23ff4961' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 2rem/calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
    .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
        border-color: #ff4961;
        box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.25); }
    .was-validated .custom-select:invalid ~ .invalid-feedback,
    .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
    .custom-select.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .form-control-file:invalid ~ .invalid-feedback,
    .was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
    .form-control-file.is-invalid ~ .invalid-tooltip {
    display: block; }

    .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
    color: #ff4961; }

    .was-validated .form-check-input:invalid ~ .invalid-feedback,
    .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
    .form-check-input.is-invalid ~ .invalid-tooltip {
    display: block; }

    .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
    color: #ff4961; }
    .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
        border-color: #ff4961; }

    .was-validated .custom-control-input:invalid ~ .invalid-feedback,
    .was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
    .custom-control-input.is-invalid ~ .invalid-tooltip {
    display: block; }

    .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
    border-color: #ff7c8d;
    background-color: #ff7c8d; }

    .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.25); }

    .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #ff4961; }

    .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
    border-color: #ff4961; }

    .was-validated .custom-file-input:invalid ~ .invalid-feedback,
    .was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
    .custom-file-input.is-invalid ~ .invalid-tooltip {
    display: block; }

    .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
    border-color: #ff4961;
    box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.25); }

    .form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center; }
    .form-inline .form-check {
        width: 100%; }
    @media (min-width: 576px) {
        .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0; }
        .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0; }
        .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle; }
        .form-inline .form-control-plaintext {
        display: inline-block; }
        .form-inline .input-group,
        .form-inline .custom-select {
        width: auto; }
        .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0; }
        .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0; }
        .form-inline .custom-control {
        align-items: center;
        justify-content: center; }
        .form-inline .custom-control-label {
        margin-bottom: 0; } }

    .btn {
    display: inline-block;
    font-weight: 400;
    color: #6b6f82;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.75rem 1rem;
    font-size: 1rem;
    line-height: 1.25;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .btn {
        transition: none; } }
    .btn:hover {
        color: #6b6f82;
        text-decoration: none; }
    .btn:focus, .btn.focus {
        outline: 0;
        box-shadow: none; }
    .btn.disabled, .btn:disabled {
        opacity: 0.65; }

    a.btn.disabled,
    fieldset:disabled a.btn {
    pointer-events: none; }

    .btn-primary {
    color: #fff;
    background-color: #666ee8;
    border-color: #666ee8; }
    .btn-primary:hover {
        color: #fff;
        background-color: #454ee3;
        border-color: #3a44e1; }
    .btn-primary:focus, .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(125, 132, 235, 0.5); }
    .btn-primary.disabled, .btn-primary:disabled {
        color: #fff;
        background-color: #666ee8;
        border-color: #666ee8; }
    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #3a44e1;
        border-color: #2f39e0; }
        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(125, 132, 235, 0.5); }

    .btn-secondary {
    color: #fff;
    background-color: #6b6f82;
    border-color: #6b6f82; }
    .btn-secondary:hover {
        color: #fff;
        background-color: #5a5d6d;
        border-color: #545766; }
    .btn-secondary:focus, .btn-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(129, 133, 149, 0.5); }
    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #fff;
        background-color: #6b6f82;
        border-color: #6b6f82; }
    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545766;
        border-color: #4e515f; }
        .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(129, 133, 149, 0.5); }

    .btn-success {
    color: #2a2e30;
    background-color: #28d094;
    border-color: #28d094; }
    .btn-success:hover {
        color: #fff;
        background-color: #22b07d;
        border-color: #20a576; }
    .btn-success:focus, .btn-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 184, 133, 0.5); }
    .btn-success.disabled, .btn-success:disabled {
        color: #2a2e30;
        background-color: #28d094;
        border-color: #28d094; }
    .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
    .show > .btn-success.dropdown-toggle {
        color: #fff;
        background-color: #20a576;
        border-color: #1e9b6e; }
        .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
        .show > .btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 184, 133, 0.5); }

    .btn-info {
    color: #fff;
    background-color: #1e9ff2;
    border-color: #1e9ff2; }
    .btn-info:hover {
        color: #fff;
        background-color: #0d8bdd;
        border-color: #0c84d1; }
    .btn-info:focus, .btn-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(64, 173, 244, 0.5); }
    .btn-info.disabled, .btn-info:disabled {
        color: #fff;
        background-color: #1e9ff2;
        border-color: #1e9ff2; }
    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
    .show > .btn-info.dropdown-toggle {
        color: #fff;
        background-color: #0c84d1;
        border-color: #0b7cc5; }
        .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(64, 173, 244, 0.5); }

    .btn-warning {
    color: #2a2e30;
    background-color: #ff9149;
    border-color: #ff9149; }
    .btn-warning:hover {
        color: #2a2e30;
        background-color: #ff7a23;
        border-color: #ff7216; }
    .btn-warning:focus, .btn-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 130, 69, 0.5); }
    .btn-warning.disabled, .btn-warning:disabled {
        color: #2a2e30;
        background-color: #ff9149;
        border-color: #ff9149; }
    .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
    .show > .btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #ff7216;
        border-color: #ff6a09; }
        .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 130, 69, 0.5); }

    .btn-danger {
    color: #fff;
    background-color: #ff4961;
    border-color: #ff4961; }
    .btn-danger:hover {
        color: #fff;
        background-color: #ff2340;
        border-color: #ff1635; }
    .btn-danger:focus, .btn-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 100, 121, 0.5); }
    .btn-danger.disabled, .btn-danger:disabled {
        color: #fff;
        background-color: #ff4961;
        border-color: #ff4961; }
    .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
    .show > .btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #ff1635;
        border-color: #ff092a; }
        .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 100, 121, 0.5); }

    .btn-light {
    color: #2a2e30;
    background-color: #babfc7;
    border-color: #babfc7; }
    .btn-light:hover {
        color: #2a2e30;
        background-color: #a5abb6;
        border-color: #9ea5b0; }
    .btn-light:focus, .btn-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(164, 169, 176, 0.5); }
    .btn-light.disabled, .btn-light:disabled {
        color: #2a2e30;
        background-color: #babfc7;
        border-color: #babfc7; }
    .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
    .show > .btn-light.dropdown-toggle {
        color: #2a2e30;
        background-color: #9ea5b0;
        border-color: #979eaa; }
        .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
        .show > .btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(164, 169, 176, 0.5); }

    .btn-dark {
    color: #fff;
    background-color: #464855;
    border-color: #464855; }
    .btn-dark:hover {
        color: #fff;
        background-color: #353640;
        border-color: #2f3039; }
    .btn-dark:focus, .btn-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(98, 99, 111, 0.5); }
    .btn-dark.disabled, .btn-dark:disabled {
        color: #fff;
        background-color: #464855;
        border-color: #464855; }
    .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
    .show > .btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #2f3039;
        border-color: #292a32; }
        .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
        .show > .btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(98, 99, 111, 0.5); }

    .btn-outline-primary {
    color: #666ee8;
    border-color: #666ee8; }
    .btn-outline-primary:hover {
        color: #fff;
        background-color: #666ee8;
        border-color: #666ee8; }
    .btn-outline-primary:focus, .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5); }
    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #666ee8;
        background-color: transparent; }
    .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #666ee8;
        border-color: #666ee8; }
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5); }

    .btn-outline-secondary {
    color: #6b6f82;
    border-color: #6b6f82; }
    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6b6f82;
        border-color: #6b6f82; }
    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5); }
    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #6b6f82;
        background-color: transparent; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6b6f82;
        border-color: #6b6f82; }
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5); }

    .btn-outline-success {
    color: #28d094;
    border-color: #28d094; }
    .btn-outline-success:hover {
        color: #2a2e30;
        background-color: #28d094;
        border-color: #28d094; }
    .btn-outline-success:focus, .btn-outline-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5); }
    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #28d094;
        background-color: transparent; }
    .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
    .show > .btn-outline-success.dropdown-toggle {
        color: #2a2e30;
        background-color: #28d094;
        border-color: #28d094; }
        .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5); }

    .btn-outline-info {
    color: #1e9ff2;
    border-color: #1e9ff2; }
    .btn-outline-info:hover {
        color: #fff;
        background-color: #1e9ff2;
        border-color: #1e9ff2; }
    .btn-outline-info:focus, .btn-outline-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5); }
    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #1e9ff2;
        background-color: transparent; }
    .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
    .show > .btn-outline-info.dropdown-toggle {
        color: #fff;
        background-color: #1e9ff2;
        border-color: #1e9ff2; }
        .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5); }

    .btn-outline-warning {
    color: #ff9149;
    border-color: #ff9149; }
    .btn-outline-warning:hover {
        color: #2a2e30;
        background-color: #ff9149;
        border-color: #ff9149; }
    .btn-outline-warning:focus, .btn-outline-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5); }
    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #ff9149;
        background-color: transparent; }
    .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show > .btn-outline-warning.dropdown-toggle {
        color: #2a2e30;
        background-color: #ff9149;
        border-color: #ff9149; }
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5); }

    .btn-outline-danger {
    color: #ff4961;
    border-color: #ff4961; }
    .btn-outline-danger:hover {
        color: #fff;
        background-color: #ff4961;
        border-color: #ff4961; }
    .btn-outline-danger:focus, .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5); }
    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #ff4961;
        background-color: transparent; }
    .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show > .btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #ff4961;
        border-color: #ff4961; }
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5); }

    .btn-outline-light {
    color: #babfc7;
    border-color: #babfc7; }
    .btn-outline-light:hover {
        color: #2a2e30;
        background-color: #babfc7;
        border-color: #babfc7; }
    .btn-outline-light:focus, .btn-outline-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }
    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #babfc7;
        background-color: transparent; }
    .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
    .show > .btn-outline-light.dropdown-toggle {
        color: #2a2e30;
        background-color: #babfc7;
        border-color: #babfc7; }
        .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }

    .btn-outline-dark {
    color: #464855;
    border-color: #464855; }
    .btn-outline-dark:hover {
        color: #fff;
        background-color: #464855;
        border-color: #464855; }
    .btn-outline-dark:focus, .btn-outline-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5); }
    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #464855;
        background-color: transparent; }
    .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show > .btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #464855;
        border-color: #464855; }
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5); }

    .btn-link {
    font-weight: 400;
    color: #5059e5;
    text-decoration: none; }
    .btn-link:hover {
        color: #1e29ca;
        text-decoration: underline; }
    .btn-link:focus, .btn-link.focus {
        text-decoration: underline;
        box-shadow: none; }
    .btn-link:disabled, .btn-link.disabled {
        color: #6b6f82;
        pointer-events: none; }

    .btn-lg, .btn-group-lg > .btn {
    padding: 1rem 1.25rem;
    font-size: 1.25rem;
    line-height: 1.25;
    border-radius: 0.35rem; }

    .btn-sm, .btn-group-sm > .btn {
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
    line-height: 1;
    border-radius: 0.21rem; }

    .btn-block {
    display: block;
    width: 100%; }
    .btn-block + .btn-block {
        margin-top: 0.5rem; }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
    width: 100%; }

    .fade {
    transition: opacity 0.15s linear; }
    @media (prefers-reduced-motion: reduce) {
        .fade {
        transition: none; } }
    .fade:not(.show) {
        opacity: 0; }

    .collapse:not(.show) {
    display: none; }

    .collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease; }
    @media (prefers-reduced-motion: reduce) {
        .collapsing {
        transition: none; } }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
    position: relative; }

    .dropdown-toggle {
    white-space: nowrap; }
    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent; }
    .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #6b6f82;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem; }

    .dropdown-menu-left {
    right: auto;
    left: 0; }

    .dropdown-menu-right {
    right: 0;
    left: auto; }

    @media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0; }
    .dropdown-menu-sm-right {
        right: 0;
        left: auto; } }

    @media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0; }
    .dropdown-menu-md-right {
        right: 0;
        left: auto; } }

    @media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0; }
    .dropdown-menu-lg-right {
        right: 0;
        left: auto; } }

    @media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0; }
    .dropdown-menu-xl-right {
        right: 0;
        left: auto; } }

    .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem; }

    .dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent; }

    .dropup .dropdown-toggle:empty::after {
    margin-left: 0; }

    .dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem; }

    .dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid; }

    .dropright .dropdown-toggle:empty::after {
    margin-left: 0; }

    .dropright .dropdown-toggle::after {
    vertical-align: 0; }

    .dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem; }

    .dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: ""; }

    .dropleft .dropdown-toggle::after {
    display: none; }

    .dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent; }

    .dropleft .dropdown-toggle:empty::after {
    margin-left: 0; }

    .dropleft .dropdown-toggle::before {
    vertical-align: 0; }

    .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto; }

    .dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #98a4b8; }

    .dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #2a2e30;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0; }
    .dropdown-item:hover, .dropdown-item:focus {
        color: #1e2122;
        text-decoration: none;
        background-color: #f4f5fa; }
    .dropdown-item.active, .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #1e9ff2; }
    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #6b6f82;
        pointer-events: none;
        background-color: transparent; }

    .dropdown-menu.show {
    display: block; }

    .dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #6b6f82;
    white-space: nowrap; }

    .dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #2a2e30; }

    .btn-group,
    .btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle; }
    .btn-group > .btn,
    .btn-group-vertical > .btn {
        position: relative;
        flex: 1 1 auto; }
        .btn-group > .btn:hover,
        .btn-group-vertical > .btn:hover {
        z-index: 1; }
        .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
        .btn-group-vertical > .btn:focus,
        .btn-group-vertical > .btn:active,
        .btn-group-vertical > .btn.active {
        z-index: 1; }

    .btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start; }
    .btn-toolbar .input-group {
        width: auto; }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) {
    margin-left: -1px; }

    .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }

    .dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem; }
    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after {
        margin-left: 0; }
    .dropleft .dropdown-toggle-split::before {
        margin-right: 0; }

    .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem; }

    .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem; }

    .btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center; }
    .btn-group-vertical > .btn,
    .btn-group-vertical > .btn-group {
        width: 100%; }
    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) {
        margin-top: -1px; }
    .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical > .btn-group:not(:last-child) > .btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0; }
    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .btn-group-toggle > .btn,
    .btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0; }
    .btn-group-toggle > .btn input[type="radio"],
    .btn-group-toggle > .btn input[type="checkbox"],
    .btn-group-toggle > .btn-group > .btn input[type="radio"],
    .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none; }

    .input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%; }
    .input-group > .form-control,
    .input-group > .form-control-plaintext,
    .input-group > .custom-select,
    .input-group > .custom-file {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0; }
        .input-group > .form-control + .form-control,
        .input-group > .form-control + .custom-select,
        .input-group > .form-control + .custom-file,
        .input-group > .form-control-plaintext + .form-control,
        .input-group > .form-control-plaintext + .custom-select,
        .input-group > .form-control-plaintext + .custom-file,
        .input-group > .custom-select + .form-control,
        .input-group > .custom-select + .custom-select,
        .input-group > .custom-select + .custom-file,
        .input-group > .custom-file + .form-control,
        .input-group > .custom-file + .custom-select,
        .input-group > .custom-file + .custom-file {
        margin-left: -1px; }
    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
        z-index: 3; }
    .input-group > .custom-file .custom-file-input:focus {
        z-index: 4; }
    .input-group > .form-control:not(:last-child),
    .input-group > .custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
    .input-group > .form-control:not(:first-child),
    .input-group > .custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
    .input-group > .custom-file {
        display: flex;
        align-items: center; }
        .input-group > .custom-file:not(:last-child) .custom-file-label,
        .input-group > .custom-file:not(:last-child) .custom-file-label::after {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
        .input-group > .custom-file:not(:first-child) .custom-file-label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .input-group-prepend,
    .input-group-append {
    display: flex; }
    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2; }
        .input-group-prepend .btn:focus,
        .input-group-append .btn:focus {
        z-index: 3; }
    .input-group-prepend .btn + .btn,
    .input-group-prepend .btn + .input-group-text,
    .input-group-prepend .input-group-text + .input-group-text,
    .input-group-prepend .input-group-text + .btn,
    .input-group-append .btn + .btn,
    .input-group-append .btn + .input-group-text,
    .input-group-append .input-group-text + .input-group-text,
    .input-group-append .input-group-text + .btn {
        margin-left: -1px; }

    .input-group-prepend {
    margin-right: -1px; }

    .input-group-append {
    margin-left: -1px; }

    .input-group-text {
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #4e5154;
    text-align: center;
    white-space: nowrap;
    background-color: #f4f5fa;
    border: 1px solid #babfc7;
    border-radius: 0.25rem; }
    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
        margin-top: 0; }

    .input-group-lg > .form-control:not(textarea),
    .input-group-lg > .custom-select {
    height: calc(1.25em + 2rem + 2px); }

    .input-group-lg > .form-control,
    .input-group-lg > .custom-select,
    .input-group-lg > .input-group-prepend > .input-group-text,
    .input-group-lg > .input-group-append > .input-group-text,
    .input-group-lg > .input-group-prepend > .btn,
    .input-group-lg > .input-group-append > .btn {
    padding: 1rem 1.25rem;
    font-size: 1.25rem;
    line-height: 1.25;
    border-radius: 0.35rem; }

    .input-group-sm > .form-control:not(textarea),
    .input-group-sm > .custom-select {
    height: calc(1.875rem + 2px); }

    .input-group-sm > .form-control,
    .input-group-sm > .custom-select,
    .input-group-sm > .input-group-prepend > .input-group-text,
    .input-group-sm > .input-group-append > .input-group-text,
    .input-group-sm > .input-group-prepend > .btn,
    .input-group-sm > .input-group-append > .btn {
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
    line-height: 1;
    border-radius: 0.21rem; }

    .input-group-lg > .custom-select,
    .input-group-sm > .custom-select {
    padding-right: 2rem; }

    .input-group > .input-group-prepend > .btn,
    .input-group > .input-group-prepend > .input-group-text,
    .input-group > .input-group-append:not(:last-child) > .btn,
    .input-group > .input-group-append:not(:last-child) > .input-group-text,
    .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
    .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }

    .input-group > .input-group-append > .btn,
    .input-group > .input-group-append > .input-group-text,
    .input-group > .input-group-prepend:not(:first-child) > .btn,
    .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
    .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
    .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }

    .custom-control {
    position: relative;
    display: block;
    min-height: 1.45rem;
    padding-left: 1.5rem; }

    .custom-control-inline {
    display: inline-flex;
    margin-right: 1rem; }

    .custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0; }
    .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        border-color: #1e9ff2;
        background-color: #1e9ff2; }
    .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: none; }
    .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #1e9ff2; }
    .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
        color: #fff;
        background-color: #c7e7fc;
        border-color: #c7e7fc; }
    .custom-control-input:disabled ~ .custom-control-label {
        color: #6b6f82; }
        .custom-control-input:disabled ~ .custom-control-label::before {
        background-color: #98a4b8; }

    .custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top; }
    .custom-control-label::before {
        position: absolute;
        top: 0.225rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: #adb5bd solid 1px; }
    .custom-control-label::after {
        position: absolute;
        top: 0.225rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%; }

    .custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem; }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e"); }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
    border-color: #1e9ff2;
    background-color: #1e9ff2; }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

    .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(102, 110, 232, 0.5); }

    .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
    background-color: rgba(102, 110, 232, 0.5); }

    .custom-radio .custom-control-label::before {
    border-radius: 50%; }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

    .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(102, 110, 232, 0.5); }

    .custom-switch {
    padding-left: 2.25rem; }
    .custom-switch .custom-control-label::before {
        left: -2.25rem;
        width: 1.75rem;
        pointer-events: all;
        border-radius: 0.5rem; }
    .custom-switch .custom-control-label::after {
        top: calc(0.225rem + 2px);
        left: calc(-2.25rem + 2px);
        width: calc(1rem - 4px);
        height: calc(1rem - 4px);
        background-color: #adb5bd;
        border-radius: 0.5rem;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
        .custom-switch .custom-control-label::after {
            transition: none; } }
    .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #fff;
        transform: translateX(0.75rem); }
    .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(102, 110, 232, 0.5); }

    .custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.25em + 1.5rem + 2px);
    padding: 0.75rem 2rem 0.75rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #4e5154;
    vertical-align: middle;
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23464855' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1rem center/8px 10px;
    background-color: #fff;
    border: 1px solid #babfc7;
    border-radius: 0.25rem;
    appearance: none; }
    .custom-select:focus {
        border-color: #1e9ff2;
        outline: 0;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(30, 159, 242, 0.5); }
        .custom-select:focus::-ms-value {
        color: #4e5154;
        background-color: #fff; }
    .custom-select[multiple], .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 1rem;
        background-image: none; }
    .custom-select:disabled {
        color: #6b6f82;
        background-color: #98a4b8; }
    .custom-select::-ms-expand {
        display: none; }

    .custom-select-sm {
    height: calc(1.875rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0.75rem;
    font-size: 0.875rem; }

    .custom-select-lg {
    height: calc(1.25em + 2rem + 2px);
    padding-top: 1rem;
    padding-bottom: 1rem;
    padding-left: 1.25rem;
    font-size: 1.25rem; }

    .custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.25em + 1.5rem + 2px);
    margin-bottom: 0; }

    .custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.25em + 1.5rem + 2px);
    margin: 0;
    opacity: 0; }
    .custom-file-input:focus ~ .custom-file-label {
        border-color: #1e9ff2;
        box-shadow: none; }
    .custom-file-input:disabled ~ .custom-file-label {
        background-color: #98a4b8; }
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse"; }
    .custom-file-input ~ .custom-file-label[data-browse]::after {
        content: attr(data-browse); }

    .custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.25em + 1.5rem + 2px);
    padding: 0.75rem 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #4e5154;
    background-color: #fff;
    border: 1px solid #babfc7;
    border-radius: 0.25rem; }
    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.25em + 1.5rem);
        padding: 0.75rem 1rem;
        line-height: 1.25;
        color: #4e5154;
        content: "Browse";
        background-color: #f4f5fa;
        border-left: inherit;
        border-radius: 0 0.25rem 0.25rem 0; }

    .custom-range {
    width: 100%;
    height: calc(1rem + 0.4rem);
    padding: 0;
    background-color: transparent;
    appearance: none; }
    .custom-range:focus {
        outline: none; }
        .custom-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #f4f5fa, none; }
        .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #f4f5fa, none; }
        .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #f4f5fa, none; }
    .custom-range::-moz-focus-outer {
        border: 0; }
    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #1e9ff2;
        border: 0;
        border-radius: 1rem;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none; }
        @media (prefers-reduced-motion: reduce) {
        .custom-range::-webkit-slider-thumb {
            transition: none; } }
        .custom-range::-webkit-slider-thumb:active {
        background-color: #c7e7fc; }
    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #626e82;
        border-color: transparent;
        border-radius: 1rem; }
    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #1e9ff2;
        border: 0;
        border-radius: 1rem;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none; }
        @media (prefers-reduced-motion: reduce) {
        .custom-range::-moz-range-thumb {
            transition: none; } }
        .custom-range::-moz-range-thumb:active {
        background-color: #c7e7fc; }
    .custom-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #626e82;
        border-color: transparent;
        border-radius: 1rem; }
    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: 0.2rem;
        margin-left: 0.2rem;
        background-color: #1e9ff2;
        border: 0;
        border-radius: 1rem;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none; }
        @media (prefers-reduced-motion: reduce) {
        .custom-range::-ms-thumb {
            transition: none; } }
        .custom-range::-ms-thumb:active {
        background-color: #c7e7fc; }
    .custom-range::-ms-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: 0.5rem; }
    .custom-range::-ms-fill-lower {
        background-color: #626e82;
        border-radius: 1rem; }
    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #626e82;
        border-radius: 1rem; }
    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #adb5bd; }
    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default; }
    .custom-range:disabled::-moz-range-thumb {
        background-color: #adb5bd; }
    .custom-range:disabled::-moz-range-track {
        cursor: default; }
    .custom-range:disabled::-ms-thumb {
        background-color: #adb5bd; }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
        transition: none; } }

    .nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none; }

    .nav-link {
    display: block;
    padding: 0.5rem 1rem; }
    .nav-link:hover, .nav-link:focus {
        text-decoration: none; }
    .nav-link.disabled {
        color: #6b6f82;
        pointer-events: none;
        cursor: default; }

    .nav-tabs {
    border-bottom: 1px solid #babfc7; }
    .nav-tabs .nav-item {
        margin-bottom: -1px; }
    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
        border-color: #98a4b8 #98a4b8 #babfc7; }
        .nav-tabs .nav-link.disabled {
        color: #6b6f82;
        background-color: transparent;
        border-color: transparent; }
    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #4e5154;
        background-color: #f4f5fa;
        border-color: #626e82 #626e82 #f4f5fa; }
    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .nav-pills .nav-link {
    border-radius: 0.25rem; }

    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #1e9ff2; }

    .nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center; }

    .nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center; }

    .tab-content > .tab-pane {
    display: none; }

    .tab-content > .active {
    display: block; }

    .navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem; }
    .navbar > .container,
    .navbar > .container-fluid {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between; }

    .navbar-brand {
    display: inline-block;
    padding-top: 0.31875rem;
    padding-bottom: 0.31875rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap; }
    .navbar-brand:hover, .navbar-brand:focus {
        text-decoration: none; }

    .navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none; }
    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0; }
    .navbar-nav .dropdown-menu {
        position: static;
        float: none; }

    .navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem; }

    .navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center; }

    .navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem; }
    .navbar-toggler:hover, .navbar-toggler:focus {
        text-decoration: none; }

    .navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%; }

    @media (max-width: 575.98px) {
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
        padding-right: 0;
        padding-left: 0; } }

    @media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start; }
        .navbar-expand-sm .navbar-nav {
        flex-direction: row; }
        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
        flex-wrap: nowrap; }
        .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto; }
        .navbar-expand-sm .navbar-toggler {
        display: none; } }

    @media (max-width: 767.98px) {
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
        padding-right: 0;
        padding-left: 0; } }

    @media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start; }
        .navbar-expand-md .navbar-nav {
        flex-direction: row; }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
        flex-wrap: nowrap; }
        .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto; }
        .navbar-expand-md .navbar-toggler {
        display: none; } }

    @media (max-width: 991.98px) {
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
        padding-right: 0;
        padding-left: 0; } }

    @media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start; }
        .navbar-expand-lg .navbar-nav {
        flex-direction: row; }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
        flex-wrap: nowrap; }
        .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto; }
        .navbar-expand-lg .navbar-toggler {
        display: none; } }

    @media (max-width: 1199.98px) {
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
        padding-right: 0;
        padding-left: 0; } }

    @media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start; }
        .navbar-expand-xl .navbar-nav {
        flex-direction: row; }
        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
        flex-wrap: nowrap; }
        .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto; }
        .navbar-expand-xl .navbar-toggler {
        display: none; } }

    .navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0; }
    .navbar-expand .navbar-nav {
        flex-direction: row; }
        .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute; }
        .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        flex-wrap: nowrap; }
    .navbar-expand .navbar-collapse {
        display: flex !important;
        flex-basis: auto; }
    .navbar-expand .navbar-toggler {
        display: none; }

    .navbar-light .navbar-brand {
    color: #464855; }
    .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
        color: #464855; }

    .navbar-light .navbar-nav .nav-link {
    color: #6b6f82; }
    .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
        color: #626e82; }
    .navbar-light .navbar-nav .nav-link.disabled {
        color: #f4f5fa; }

    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .active > .nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
    color: #464855; }

    .navbar-light .navbar-toggler {
    color: #6b6f82;
    border-color: rgba(0, 0, 0, 0.1); }

    .navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='%236b6f82' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

    .navbar-light .navbar-text {
    color: #6b6f82; }
    .navbar-light .navbar-text a {
        color: #464855; }
        .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
        color: #464855; }

    .navbar-dark .navbar-brand {
    color: #fff; }
    .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
        color: #fff; }

    .navbar-dark .navbar-nav .nav-link {
    color: white; }
    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.9); }
    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.5); }

    .navbar-dark .navbar-nav .show > .nav-link,
    .navbar-dark .navbar-nav .active > .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
    color: #fff; }

    .navbar-dark .navbar-toggler {
    color: white;
    border-color: rgba(255, 255, 255, 0.1); }

    .navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

    .navbar-dark .navbar-text {
    color: white; }
    .navbar-dark .navbar-text a {
        color: #fff; }
        .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
        color: #fff; }

    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.06);
    border-radius: 0.35rem; }
    .card > hr {
        margin-right: 0;
        margin-left: 0; }
    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0.35rem;
        border-top-right-radius: 0.35rem; }
    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0.35rem;
        border-bottom-left-radius: 0.35rem; }

    .card-body {
    flex: 1 1 auto;
    padding: 1.5rem; }

    .card-title {
    margin-bottom: 1.5rem; }

    .card-subtitle {
    margin-top: -0.75rem;
    margin-bottom: 0; }

    .card-text:last-child {
    margin-bottom: 0; }

    .card-link:hover {
    text-decoration: none; }

    .card-link + .card-link {
    margin-left: 1.5rem; }

    .card-header {
    padding: 1.5rem 1.5rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.06); }
    .card-header:first-child {
        border-radius: calc(0.35rem - 1px) calc(0.35rem - 1px) 0 0; }
    .card-header + .list-group .list-group-item:first-child {
        border-top: 0; }

    .card-footer {
    padding: 1.5rem 1.5rem;
    background-color: #fff;
    border-top: 1px solid rgba(0, 0, 0, 0.06); }
    .card-footer:last-child {
        border-radius: 0 0 calc(0.35rem - 1px) calc(0.35rem - 1px); }

    .card-header-tabs {
    margin-right: -0.75rem;
    margin-bottom: -1.5rem;
    margin-left: -0.75rem;
    border-bottom: 0; }

    .card-header-pills {
    margin-right: -0.75rem;
    margin-left: -0.75rem; }

    .card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem; }

    .card-img {
    width: 100%;
    border-radius: calc(0.35rem - 1px); }

    .card-img-top {
    width: 100%;
    border-top-left-radius: calc(0.35rem - 1px);
    border-top-right-radius: calc(0.35rem - 1px); }

    .card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(0.35rem - 1px);
    border-bottom-left-radius: calc(0.35rem - 1px); }

    .card-deck {
    display: flex;
    flex-direction: column; }
    .card-deck .card {
        margin-bottom: 15px; }
    @media (min-width: 576px) {
        .card-deck {
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px; }
        .card-deck .card {
            display: flex;
            flex: 1 0 0%;
            flex-direction: column;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px; } }

    .card-group {
    display: flex;
    flex-direction: column; }
    .card-group > .card {
        margin-bottom: 15px; }
    @media (min-width: 576px) {
        .card-group {
        flex-flow: row wrap; }
        .card-group > .card {
            flex: 1 0 0%;
            margin-bottom: 0; }
            .card-group > .card + .card {
            margin-left: 0;
            border-left: 0; }
            .card-group > .card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
            .card-group > .card:not(:last-child) .card-img-top,
            .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0; }
            .card-group > .card:not(:last-child) .card-img-bottom,
            .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0; }
            .card-group > .card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }
            .card-group > .card:not(:first-child) .card-img-top,
            .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0; }
            .card-group > .card:not(:first-child) .card-img-bottom,
            .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0; } }

    .card-columns .card {
    margin-bottom: 1.5rem; }

    @media (min-width: 576px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1; }
        .card-columns .card {
        display: inline-block;
        width: 100%; } }

    .accordion > .card {
    overflow: hidden; }
    .accordion > .card:not(:first-of-type) .card-header:first-child {
        border-radius: 0; }
    .accordion > .card:not(:first-of-type):not(:last-of-type) {
        border-bottom: 0;
        border-radius: 0; }
    .accordion > .card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0; }
    .accordion > .card:last-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }
    .accordion > .card .card-header {
        margin-bottom: -1px; }

    .breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 0rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #98a4b8;
    border-radius: 0.25rem; }

    .breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem; }
    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.5rem;
        color: #6b6f82;
        content: "/"; }

    .breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline; }

    .breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none; }

    .breadcrumb-item.active {
    color: #6b6f82; }

    .pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem; }

    .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #5059e5;
    background-color: #fff;
    border: 1px solid #626e82; }
    .page-link:hover {
        z-index: 2;
        color: #1e29ca;
        text-decoration: none;
        background-color: #f4f5fa;
        border-color: #626e82; }
    .page-link:focus {
        z-index: 2;
        outline: 0;
        box-shadow: none; }

    .page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }

    .page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem; }

    .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #1e9ff2;
    border-color: #1e9ff2; }

    .page-item.disabled .page-link {
    color: #6b6f82;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #626e82; }

    .pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.25; }

    .pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.35rem;
    border-bottom-left-radius: 0.35rem; }

    .pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.35rem;
    border-bottom-right-radius: 0.35rem; }

    .pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1; }

    .pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.21rem;
    border-bottom-left-radius: 0.21rem; }

    .pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.21rem;
    border-bottom-right-radius: 0.21rem; }

    .badge {
    display: inline-block;
    padding: 0.35em 0.4em;
    font-size: 80%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .badge {
        transition: none; } }
    a.badge:hover, a.badge:focus {
        text-decoration: none; }
    .badge:empty {
        display: none; }

    .btn .badge {
    position: relative;
    top: -1px; }

    .badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem; }

    .badge-primary {
    color: #fff;
    background-color: #666ee8; }
    a.badge-primary:hover, a.badge-primary:focus {
        color: #fff;
        background-color: #3a44e1; }
    a.badge-primary:focus, a.badge-primary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5); }

    .badge-secondary {
    color: #fff;
    background-color: #6b6f82; }
    a.badge-secondary:hover, a.badge-secondary:focus {
        color: #fff;
        background-color: #545766; }
    a.badge-secondary:focus, a.badge-secondary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5); }

    .badge-success {
    color: #2a2e30;
    background-color: #28d094; }
    a.badge-success:hover, a.badge-success:focus {
        color: #2a2e30;
        background-color: #20a576; }
    a.badge-success:focus, a.badge-success.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5); }

    .badge-info {
    color: #fff;
    background-color: #1e9ff2; }
    a.badge-info:hover, a.badge-info:focus {
        color: #fff;
        background-color: #0c84d1; }
    a.badge-info:focus, a.badge-info.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5); }

    .badge-warning {
    color: #2a2e30;
    background-color: #ff9149; }
    a.badge-warning:hover, a.badge-warning:focus {
        color: #2a2e30;
        background-color: #ff7216; }
    a.badge-warning:focus, a.badge-warning.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5); }

    .badge-danger {
    color: #fff;
    background-color: #ff4961; }
    a.badge-danger:hover, a.badge-danger:focus {
        color: #fff;
        background-color: #ff1635; }
    a.badge-danger:focus, a.badge-danger.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5); }

    .badge-light {
    color: #2a2e30;
    background-color: #babfc7; }
    a.badge-light:hover, a.badge-light:focus {
        color: #2a2e30;
        background-color: #9ea5b0; }
    a.badge-light:focus, a.badge-light.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }

    .badge-dark {
    color: #fff;
    background-color: #464855; }
    a.badge-dark:hover, a.badge-dark:focus {
        color: #fff;
        background-color: #2f3039; }
    a.badge-dark:focus, a.badge-dark.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5); }

    .jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #98a4b8;
    border-radius: 0.35rem; }
    @media (min-width: 576px) {
        .jumbotron {
        padding: 4rem 2rem; } }

    .jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0; }

    .alert {
    position: relative;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem; }

    .alert-heading {
    color: inherit; }

    .alert-link {
    font-weight: 700; }

    .alert-dismissible {
    padding-right: 3.5rem; }
    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.75rem 1rem;
        color: inherit; }

    .alert-primary {
    color: #353979;
    background-color: #e0e2fa;
    border-color: #d4d6f9; }
    .alert-primary hr {
        border-top-color: #bec1f6; }
    .alert-primary .alert-link {
        color: #252856; }

    .alert-secondary {
    color: #383a44;
    background-color: #e1e2e6;
    border-color: #d6d7dc; }
    .alert-secondary hr {
        border-top-color: #c8cad0; }
    .alert-secondary .alert-link {
        color: #212228; }

    .alert-success {
    color: #156c4d;
    background-color: #d4f6ea;
    border-color: #c3f2e1; }
    .alert-success hr {
        border-top-color: #aeedd7; }
    .alert-success .alert-link {
        color: #0d412f; }

    .alert-info {
    color: #10537e;
    background-color: #d2ecfc;
    border-color: #c0e4fb; }
    .alert-info hr {
        border-top-color: #a8daf9; }
    .alert-info .alert-link {
        color: #0a3551; }

    .alert-warning {
    color: #854b26;
    background-color: #ffe9db;
    border-color: #ffe0cc; }
    .alert-warning hr {
        border-top-color: #ffd1b3; }
    .alert-warning .alert-link {
        color: #5d351b; }

    .alert-danger {
    color: #852632;
    background-color: #ffdbdf;
    border-color: #ffccd3; }
    .alert-danger hr {
        border-top-color: #ffb3bd; }
    .alert-danger .alert-link {
        color: #5d1b23; }

    .alert-light {
    color: #616367;
    background-color: #f1f2f4;
    border-color: #ecedef; }
    .alert-light hr {
        border-top-color: #dee0e3; }
    .alert-light .alert-link {
        color: #484a4d; }

    .alert-dark {
    color: #24252c;
    background-color: #dadadd;
    border-color: #cbcccf; }
    .alert-dark hr {
        border-top-color: #bebfc3; }
    .alert-dark .alert-link {
        color: #0d0d10; }

    @keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0; }
    to {
        background-position: 0 0; } }

    .progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #eee;
    border-radius: 0.25rem; }

    .progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #666ee8;
    transition: width 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
        transition: none; } }

    .progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem; }

    .progress-bar-animated {
    animation: progress-bar-stripes 1s linear infinite; }
    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
        animation: none; } }

    .media {
    display: flex;
    align-items: flex-start; }

    .media-body {
    flex: 1; }

    .list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0; }

    .list-group-item-action {
    width: 100%;
    color: #4e5154;
    text-align: inherit; }
    .list-group-item-action:hover, .list-group-item-action:focus {
        z-index: 1;
        color: #4e5154;
        text-decoration: none;
        background-color: #f4f5fa; }
    .list-group-item-action:active {
        color: #6b6f82;
        background-color: #98a4b8; }

    .list-group-item {
    position: relative;
    display: block;
    padding: 1.25rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #e4e7ed; }
    .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem; }
    .list-group-item.disabled, .list-group-item:disabled {
        color: #6b6f82;
        pointer-events: none;
        background-color: #fff; }
    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #1e9ff2;
        border-color: #1e9ff2; }

    .list-group-horizontal {
    flex-direction: row; }
    .list-group-horizontal .list-group-item {
        margin-right: -1px;
        margin-bottom: 0; }
        .list-group-horizontal .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
        .list-group-horizontal .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; }

    @media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row; }
        .list-group-horizontal-sm .list-group-item {
        margin-right: -1px;
        margin-bottom: 0; }
        .list-group-horizontal-sm .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-sm .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    @media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row; }
        .list-group-horizontal-md .list-group-item {
        margin-right: -1px;
        margin-bottom: 0; }
        .list-group-horizontal-md .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-md .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    @media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row; }
        .list-group-horizontal-lg .list-group-item {
        margin-right: -1px;
        margin-bottom: 0; }
        .list-group-horizontal-lg .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-lg .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    @media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row; }
        .list-group-horizontal-xl .list-group-item {
        margin-right: -1px;
        margin-bottom: 0; }
        .list-group-horizontal-xl .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-xl .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    .list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0; }
    .list-group-flush .list-group-item:last-child {
        margin-bottom: -1px; }

    .list-group-flush:first-child .list-group-item:first-child {
    border-top: 0; }

    .list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0; }

    .list-group-item-primary {
    color: #353979;
    background-color: #d4d6f9; }
    .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
        color: #353979;
        background-color: #bec1f6; }
    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #353979;
        border-color: #353979; }

    .list-group-item-secondary {
    color: #383a44;
    background-color: #d6d7dc; }
    .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
        color: #383a44;
        background-color: #c8cad0; }
    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383a44;
        border-color: #383a44; }

    .list-group-item-success {
    color: #156c4d;
    background-color: #c3f2e1; }
    .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
        color: #156c4d;
        background-color: #aeedd7; }
    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #156c4d;
        border-color: #156c4d; }

    .list-group-item-info {
    color: #10537e;
    background-color: #c0e4fb; }
    .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
        color: #10537e;
        background-color: #a8daf9; }
    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #10537e;
        border-color: #10537e; }

    .list-group-item-warning {
    color: #854b26;
    background-color: #ffe0cc; }
    .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
        color: #854b26;
        background-color: #ffd1b3; }
    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #854b26;
        border-color: #854b26; }

    .list-group-item-danger {
    color: #852632;
    background-color: #ffccd3; }
    .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
        color: #852632;
        background-color: #ffb3bd; }
    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #852632;
        border-color: #852632; }

    .list-group-item-light {
    color: #616367;
    background-color: #ecedef; }
    .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
        color: #616367;
        background-color: #dee0e3; }
    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #616367;
        border-color: #616367; }

    .list-group-item-dark {
    color: #24252c;
    background-color: #cbcccf; }
    .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
        color: #24252c;
        background-color: #bebfc3; }
    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #24252c;
        border-color: #24252c; }

    .close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5; }
    .close:hover {
        color: #000;
        text-decoration: none; }
    .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
        opacity: .75; }

    button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    appearance: none; }

    a.close.disabled {
    pointer-events: none; }

    .toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem; }
    .toast:not(:last-child) {
        margin-bottom: 0.75rem; }
    .toast.showing {
        opacity: 1; }
    .toast.show {
        display: block;
        opacity: 1; }
    .toast.hide {
        display: none; }

    .toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6b6f82;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05); }

    .toast-body {
    padding: 0.75rem; }

    .modal-open {
    overflow: hidden; }
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto; }

    .modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0; }

    .modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none; }
    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
        transform: translate(0, -50px); }
        @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            transition: none; } }
    .modal.show .modal-dialog {
        transform: none; }

    .modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem); }
    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden; }
    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
        flex-shrink: 0; }
    .modal-dialog-scrollable .modal-body {
        overflow-y: auto; }

    .modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem); }
    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: ""; }
    .modal-dialog-centered.modal-dialog-scrollable {
        flex-direction: column;
        justify-content: center;
        height: 100%; }
        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none; }
        .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none; }

    .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.35rem;
    outline: 0; }

    .modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000; }
    .modal-backdrop.fade {
        opacity: 0; }
    .modal-backdrop.show {
        opacity: 0.5; }

    .modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #626e82;
    border-top-left-radius: 0.35rem;
    border-top-right-radius: 0.35rem; }
    .modal-header .close {
        padding: 1rem 1rem;
        margin: -1rem -1rem -1rem auto; }

    .modal-title {
    margin-bottom: 0;
    line-height: 1.45; }

    .modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem; }

    .modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #626e82;
    border-bottom-right-radius: 0.35rem;
    border-bottom-left-radius: 0.35rem; }
    .modal-footer > :not(:first-child) {
        margin-left: .25rem; }
    .modal-footer > :not(:last-child) {
        margin-right: .25rem; }

    .modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll; }

    @media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto; }
    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem); }
        .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem); }
    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem); }
        .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem); }
    .modal-sm {
        max-width: 300px; } }

    @media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        max-width: 800px; } }

    @media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px; } }

    .tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.45;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0; }
    .tooltip.show {
        opacity: 0.9; }
    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 0.8rem;
        height: 0.4rem; }
        .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid; }

    .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0; }
    .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
        bottom: 0; }
        .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
        top: 0;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000; }

    .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem; }
    .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem; }
        .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
        right: 0;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000; }

    .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0; }
    .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
        top: 0; }
        .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        bottom: 0;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000; }

    .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem; }
    .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem; }
        .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
        left: 0;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000; }

    .tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem; }

    .popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.45;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.35rem; }
    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.35rem; }
        .popover .arrow::before, .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid; }

    .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem; }
    .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
        bottom: calc((0.5rem + 1px) * -1); }
        .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: rgba(0, 0, 0, 0.25); }
        .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #fff; }

    .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem; }
    .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
        left: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.35rem 0; }
        .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: rgba(0, 0, 0, 0.25); }
        .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #fff; }

    .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem; }
    .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
        top: calc((0.5rem + 1px) * -1); }
        .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: rgba(0, 0, 0, 0.25); }
        .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #fff; }
    .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7; }

    .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem; }
    .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
        right: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.35rem 0; }
        .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: rgba(0, 0, 0, 0.25); }
        .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #fff; }

    .popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    color: #464855;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(0.35rem - 1px);
    border-top-right-radius: calc(0.35rem - 1px); }
    .popover-header:empty {
        display: none; }

    .popover-body {
    padding: 0.5rem 0.75rem;
    color: #6b6f82; }

    .carousel {
    position: relative; }

    .carousel.pointer-event {
    touch-action: pan-y; }

    .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden; }
    .carousel-inner::after {
        display: block;
        clear: both;
        content: ""; }

    .carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
        transition: none; } }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
    display: block; }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
    transform: translateX(100%); }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
    transform: translateX(-100%); }

    .carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none; }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1; }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: 0s 0.6s opacity; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
        transition: none; } }

    .carousel-control-prev,
    .carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-control-prev,
        .carousel-control-next {
        transition: none; } }
    .carousel-control-prev:hover, .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: 0.9; }

    .carousel-control-prev {
    left: 0; }

    .carousel-control-next {
    right: 0; }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%; }

    .carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e"); }

    .carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e"); }

    .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none; }
    .carousel-indicators li {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        transition: opacity 0.6s ease; }
        @media (prefers-reduced-motion: reduce) {
        .carousel-indicators li {
            transition: none; } }
    .carousel-indicators .active {
        opacity: 1; }

    .carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center; }

    @keyframes spinner-border {
    to {
        transform: rotate(360deg); } }

    .spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    animation: spinner-border .75s linear infinite; }

    .spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em; }

    @keyframes spinner-grow {
    0% {
        transform: scale(0); }
    50% {
        opacity: 1; } }

    .spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    animation: spinner-grow .75s linear infinite; }

    .spinner-grow-sm {
    width: 1rem;
    height: 1rem; }

    .align-baseline {
    vertical-align: baseline !important; }

    .align-top {
    vertical-align: top !important; }

    .align-middle {
    vertical-align: middle !important; }

    .align-bottom {
    vertical-align: bottom !important; }

    .align-text-bottom {
    vertical-align: text-bottom !important; }

    .align-text-top {
    vertical-align: text-top !important; }

    .bg-primary {
    background-color: #666ee8 !important; }

    a.bg-primary:hover, a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
    background-color: #3a44e1 !important; }

    .bg-secondary {
    background-color: #6b6f82 !important; }

    a.bg-secondary:hover, a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
    background-color: #545766 !important; }

    .bg-success {
    background-color: #28d094 !important; }

    a.bg-success:hover, a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
    background-color: #20a576 !important; }

    .bg-info {
    background-color: #1e9ff2 !important; }

    a.bg-info:hover, a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
    background-color: #0c84d1 !important; }

    .bg-warning {
    background-color: #ff9149 !important; }

    a.bg-warning:hover, a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
    background-color: #ff7216 !important; }

    .bg-danger {
    background-color: #ff4961 !important; }

    a.bg-danger:hover, a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
    background-color: #ff1635 !important; }

    .bg-light {
    background-color: #babfc7 !important; }

    a.bg-light:hover, a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
    background-color: #9ea5b0 !important; }

    .bg-dark {
    background-color: #464855 !important; }

    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
    background-color: #2f3039 !important; }

    .bg-white {
    background-color: #fff !important; }

    .bg-transparent {
    background-color: transparent !important; }

    .border {
    border: 1px solid #626e82 !important; }

    .border-top {
    border-top: 1px solid #626e82 !important; }

    .border-right {
    border-right: 1px solid #626e82 !important; }

    .border-bottom {
    border-bottom: 1px solid #626e82 !important; }

    .border-left {
    border-left: 1px solid #626e82 !important; }

    .border-0 {
    border: 0 !important; }

    .border-top-0 {
    border-top: 0 !important; }

    .border-right-0 {
    border-right: 0 !important; }

    .border-bottom-0 {
    border-bottom: 0 !important; }

    .border-left-0 {
    border-left: 0 !important; }

    .border-primary {
    border-color: #666ee8 !important; }

    .border-secondary {
    border-color: #6b6f82 !important; }

    .border-success {
    border-color: #28d094 !important; }

    .border-info {
    border-color: #1e9ff2 !important; }

    .border-warning {
    border-color: #ff9149 !important; }

    .border-danger {
    border-color: #ff4961 !important; }

    .border-light {
    border-color: #babfc7 !important; }

    .border-dark {
    border-color: #464855 !important; }

    .border-white {
    border-color: #fff !important; }

    .rounded-sm {
    border-radius: 0.21rem !important; }

    .rounded {
    border-radius: 0.25rem !important; }

    .rounded-top {
    border-top-left-radius: 0.25rem !important;
    border-top-right-radius: 0.25rem !important; }

    .rounded-right {
    border-top-right-radius: 0.25rem !important;
    border-bottom-right-radius: 0.25rem !important; }

    .rounded-bottom {
    border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important; }

    .rounded-left {
    border-top-left-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important; }

    .rounded-lg {
    border-radius: 0.35rem !important; }

    .rounded-circle {
    border-radius: 50% !important; }

    .rounded-pill {
    border-radius: 50rem !important; }

    .rounded-0 {
    border-radius: 0 !important; }

    .clearfix::after {
    display: block;
    clear: both;
    content: ""; }

    .d-none {
    display: none !important; }

    .d-inline {
    display: inline !important; }

    .d-inline-block {
    display: inline-block !important; }

    .d-block {
    display: block !important; }

    .d-table {
    display: table !important; }

    .d-table-row {
    display: table-row !important; }

    .d-table-cell {
    display: table-cell !important; }

    .d-flex {
    display: flex !important; }

    .d-inline-flex {
    display: inline-flex !important; }

    @media (min-width: 576px) {
    .d-sm-none {
        display: none !important; }
    .d-sm-inline {
        display: inline !important; }
    .d-sm-inline-block {
        display: inline-block !important; }
    .d-sm-block {
        display: block !important; }
    .d-sm-table {
        display: table !important; }
    .d-sm-table-row {
        display: table-row !important; }
    .d-sm-table-cell {
        display: table-cell !important; }
    .d-sm-flex {
        display: flex !important; }
    .d-sm-inline-flex {
        display: inline-flex !important; } }

    @media (min-width: 768px) {
    .d-md-none {
        display: none !important; }
    .d-md-inline {
        display: inline !important; }
    .d-md-inline-block {
        display: inline-block !important; }
    .d-md-block {
        display: block !important; }
    .d-md-table {
        display: table !important; }
    .d-md-table-row {
        display: table-row !important; }
    .d-md-table-cell {
        display: table-cell !important; }
    .d-md-flex {
        display: flex !important; }
    .d-md-inline-flex {
        display: inline-flex !important; } }

    @media (min-width: 992px) {
    .d-lg-none {
        display: none !important; }
    .d-lg-inline {
        display: inline !important; }
    .d-lg-inline-block {
        display: inline-block !important; }
    .d-lg-block {
        display: block !important; }
    .d-lg-table {
        display: table !important; }
    .d-lg-table-row {
        display: table-row !important; }
    .d-lg-table-cell {
        display: table-cell !important; }
    .d-lg-flex {
        display: flex !important; }
    .d-lg-inline-flex {
        display: inline-flex !important; } }

    @media (min-width: 1200px) {
    .d-xl-none {
        display: none !important; }
    .d-xl-inline {
        display: inline !important; }
    .d-xl-inline-block {
        display: inline-block !important; }
    .d-xl-block {
        display: block !important; }
    .d-xl-table {
        display: table !important; }
    .d-xl-table-row {
        display: table-row !important; }
    .d-xl-table-cell {
        display: table-cell !important; }
    .d-xl-flex {
        display: flex !important; }
    .d-xl-inline-flex {
        display: inline-flex !important; } }

    @media print {
    .d-print-none {
        display: none !important; }
    .d-print-inline {
        display: inline !important; }
    .d-print-inline-block {
        display: inline-block !important; }
    .d-print-block {
        display: block !important; }
    .d-print-table {
        display: table !important; }
    .d-print-table-row {
        display: table-row !important; }
    .d-print-table-cell {
        display: table-cell !important; }
    .d-print-flex {
        display: flex !important; }
    .d-print-inline-flex {
        display: inline-flex !important; } }

    .embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden; }
    .embed-responsive::before {
        display: block;
        content: ""; }
    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0; }

    .embed-responsive-21by9::before {
    padding-top: 42.85714%; }

    .embed-responsive-16by9::before {
    padding-top: 56.25%; }

    .embed-responsive-4by3::before {
    padding-top: 75%; }

    .embed-responsive-1by1::before {
    padding-top: 100%; }

    .embed-responsive-21by9::before {
    padding-top: 42.85714%; }

    .embed-responsive-16by9::before {
    padding-top: 56.25%; }

    .embed-responsive-4by3::before {
    padding-top: 75%; }

    .embed-responsive-1by1::before {
    padding-top: 100%; }

    .flex-row {
    flex-direction: row !important; }

    .flex-column {
    flex-direction: column !important; }

    .flex-row-reverse {
    flex-direction: row-reverse !important; }

    .flex-column-reverse {
    flex-direction: column-reverse !important; }

    .flex-wrap {
    flex-wrap: wrap !important; }

    .flex-nowrap {
    flex-wrap: nowrap !important; }

    .flex-wrap-reverse {
    flex-wrap: wrap-reverse !important; }

    .flex-fill {
    flex: 1 1 auto !important; }

    .flex-grow-0 {
    flex-grow: 0 !important; }

    .flex-grow-1 {
    flex-grow: 1 !important; }

    .flex-shrink-0 {
    flex-shrink: 0 !important; }

    .flex-shrink-1 {
    flex-shrink: 1 !important; }

    .justify-content-start {
    justify-content: flex-start !important; }

    .justify-content-end {
    justify-content: flex-end !important; }

    .justify-content-center {
    justify-content: center !important; }

    .justify-content-between {
    justify-content: space-between !important; }

    .justify-content-around {
    justify-content: space-around !important; }

    .align-items-start {
    align-items: flex-start !important; }

    .align-items-end {
    align-items: flex-end !important; }

    .align-items-center {
    align-items: center !important; }

    .align-items-baseline {
    align-items: baseline !important; }

    .align-items-stretch {
    align-items: stretch !important; }

    .align-content-start {
    align-content: flex-start !important; }

    .align-content-end {
    align-content: flex-end !important; }

    .align-content-center {
    align-content: center !important; }

    .align-content-between {
    align-content: space-between !important; }

    .align-content-around {
    align-content: space-around !important; }

    .align-content-stretch {
    align-content: stretch !important; }

    .align-self-auto {
    align-self: auto !important; }

    .align-self-start {
    align-self: flex-start !important; }

    .align-self-end {
    align-self: flex-end !important; }

    .align-self-center {
    align-self: center !important; }

    .align-self-baseline {
    align-self: baseline !important; }

    .align-self-stretch {
    align-self: stretch !important; }

    @media (min-width: 576px) {
    .flex-sm-row {
        flex-direction: row !important; }
    .flex-sm-column {
        flex-direction: column !important; }
    .flex-sm-row-reverse {
        flex-direction: row-reverse !important; }
    .flex-sm-column-reverse {
        flex-direction: column-reverse !important; }
    .flex-sm-wrap {
        flex-wrap: wrap !important; }
    .flex-sm-nowrap {
        flex-wrap: nowrap !important; }
    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important; }
    .flex-sm-fill {
        flex: 1 1 auto !important; }
    .flex-sm-grow-0 {
        flex-grow: 0 !important; }
    .flex-sm-grow-1 {
        flex-grow: 1 !important; }
    .flex-sm-shrink-0 {
        flex-shrink: 0 !important; }
    .flex-sm-shrink-1 {
        flex-shrink: 1 !important; }
    .justify-content-sm-start {
        justify-content: flex-start !important; }
    .justify-content-sm-end {
        justify-content: flex-end !important; }
    .justify-content-sm-center {
        justify-content: center !important; }
    .justify-content-sm-between {
        justify-content: space-between !important; }
    .justify-content-sm-around {
        justify-content: space-around !important; }
    .align-items-sm-start {
        align-items: flex-start !important; }
    .align-items-sm-end {
        align-items: flex-end !important; }
    .align-items-sm-center {
        align-items: center !important; }
    .align-items-sm-baseline {
        align-items: baseline !important; }
    .align-items-sm-stretch {
        align-items: stretch !important; }
    .align-content-sm-start {
        align-content: flex-start !important; }
    .align-content-sm-end {
        align-content: flex-end !important; }
    .align-content-sm-center {
        align-content: center !important; }
    .align-content-sm-between {
        align-content: space-between !important; }
    .align-content-sm-around {
        align-content: space-around !important; }
    .align-content-sm-stretch {
        align-content: stretch !important; }
    .align-self-sm-auto {
        align-self: auto !important; }
    .align-self-sm-start {
        align-self: flex-start !important; }
    .align-self-sm-end {
        align-self: flex-end !important; }
    .align-self-sm-center {
        align-self: center !important; }
    .align-self-sm-baseline {
        align-self: baseline !important; }
    .align-self-sm-stretch {
        align-self: stretch !important; } }

    @media (min-width: 768px) {
    .flex-md-row {
        flex-direction: row !important; }
    .flex-md-column {
        flex-direction: column !important; }
    .flex-md-row-reverse {
        flex-direction: row-reverse !important; }
    .flex-md-column-reverse {
        flex-direction: column-reverse !important; }
    .flex-md-wrap {
        flex-wrap: wrap !important; }
    .flex-md-nowrap {
        flex-wrap: nowrap !important; }
    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important; }
    .flex-md-fill {
        flex: 1 1 auto !important; }
    .flex-md-grow-0 {
        flex-grow: 0 !important; }
    .flex-md-grow-1 {
        flex-grow: 1 !important; }
    .flex-md-shrink-0 {
        flex-shrink: 0 !important; }
    .flex-md-shrink-1 {
        flex-shrink: 1 !important; }
    .justify-content-md-start {
        justify-content: flex-start !important; }
    .justify-content-md-end {
        justify-content: flex-end !important; }
    .justify-content-md-center {
        justify-content: center !important; }
    .justify-content-md-between {
        justify-content: space-between !important; }
    .justify-content-md-around {
        justify-content: space-around !important; }
    .align-items-md-start {
        align-items: flex-start !important; }
    .align-items-md-end {
        align-items: flex-end !important; }
    .align-items-md-center {
        align-items: center !important; }
    .align-items-md-baseline {
        align-items: baseline !important; }
    .align-items-md-stretch {
        align-items: stretch !important; }
    .align-content-md-start {
        align-content: flex-start !important; }
    .align-content-md-end {
        align-content: flex-end !important; }
    .align-content-md-center {
        align-content: center !important; }
    .align-content-md-between {
        align-content: space-between !important; }
    .align-content-md-around {
        align-content: space-around !important; }
    .align-content-md-stretch {
        align-content: stretch !important; }
    .align-self-md-auto {
        align-self: auto !important; }
    .align-self-md-start {
        align-self: flex-start !important; }
    .align-self-md-end {
        align-self: flex-end !important; }
    .align-self-md-center {
        align-self: center !important; }
    .align-self-md-baseline {
        align-self: baseline !important; }
    .align-self-md-stretch {
        align-self: stretch !important; } }

    @media (min-width: 992px) {
    .flex-lg-row {
        flex-direction: row !important; }
    .flex-lg-column {
        flex-direction: column !important; }
    .flex-lg-row-reverse {
        flex-direction: row-reverse !important; }
    .flex-lg-column-reverse {
        flex-direction: column-reverse !important; }
    .flex-lg-wrap {
        flex-wrap: wrap !important; }
    .flex-lg-nowrap {
        flex-wrap: nowrap !important; }
    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important; }
    .flex-lg-fill {
        flex: 1 1 auto !important; }
    .flex-lg-grow-0 {
        flex-grow: 0 !important; }
    .flex-lg-grow-1 {
        flex-grow: 1 !important; }
    .flex-lg-shrink-0 {
        flex-shrink: 0 !important; }
    .flex-lg-shrink-1 {
        flex-shrink: 1 !important; }
    .justify-content-lg-start {
        justify-content: flex-start !important; }
    .justify-content-lg-end {
        justify-content: flex-end !important; }
    .justify-content-lg-center {
        justify-content: center !important; }
    .justify-content-lg-between {
        justify-content: space-between !important; }
    .justify-content-lg-around {
        justify-content: space-around !important; }
    .align-items-lg-start {
        align-items: flex-start !important; }
    .align-items-lg-end {
        align-items: flex-end !important; }
    .align-items-lg-center {
        align-items: center !important; }
    .align-items-lg-baseline {
        align-items: baseline !important; }
    .align-items-lg-stretch {
        align-items: stretch !important; }
    .align-content-lg-start {
        align-content: flex-start !important; }
    .align-content-lg-end {
        align-content: flex-end !important; }
    .align-content-lg-center {
        align-content: center !important; }
    .align-content-lg-between {
        align-content: space-between !important; }
    .align-content-lg-around {
        align-content: space-around !important; }
    .align-content-lg-stretch {
        align-content: stretch !important; }
    .align-self-lg-auto {
        align-self: auto !important; }
    .align-self-lg-start {
        align-self: flex-start !important; }
    .align-self-lg-end {
        align-self: flex-end !important; }
    .align-self-lg-center {
        align-self: center !important; }
    .align-self-lg-baseline {
        align-self: baseline !important; }
    .align-self-lg-stretch {
        align-self: stretch !important; } }

    @media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction: row !important; }
    .flex-xl-column {
        flex-direction: column !important; }
    .flex-xl-row-reverse {
        flex-direction: row-reverse !important; }
    .flex-xl-column-reverse {
        flex-direction: column-reverse !important; }
    .flex-xl-wrap {
        flex-wrap: wrap !important; }
    .flex-xl-nowrap {
        flex-wrap: nowrap !important; }
    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important; }
    .flex-xl-fill {
        flex: 1 1 auto !important; }
    .flex-xl-grow-0 {
        flex-grow: 0 !important; }
    .flex-xl-grow-1 {
        flex-grow: 1 !important; }
    .flex-xl-shrink-0 {
        flex-shrink: 0 !important; }
    .flex-xl-shrink-1 {
        flex-shrink: 1 !important; }
    .justify-content-xl-start {
        justify-content: flex-start !important; }
    .justify-content-xl-end {
        justify-content: flex-end !important; }
    .justify-content-xl-center {
        justify-content: center !important; }
    .justify-content-xl-between {
        justify-content: space-between !important; }
    .justify-content-xl-around {
        justify-content: space-around !important; }
    .align-items-xl-start {
        align-items: flex-start !important; }
    .align-items-xl-end {
        align-items: flex-end !important; }
    .align-items-xl-center {
        align-items: center !important; }
    .align-items-xl-baseline {
        align-items: baseline !important; }
    .align-items-xl-stretch {
        align-items: stretch !important; }
    .align-content-xl-start {
        align-content: flex-start !important; }
    .align-content-xl-end {
        align-content: flex-end !important; }
    .align-content-xl-center {
        align-content: center !important; }
    .align-content-xl-between {
        align-content: space-between !important; }
    .align-content-xl-around {
        align-content: space-around !important; }
    .align-content-xl-stretch {
        align-content: stretch !important; }
    .align-self-xl-auto {
        align-self: auto !important; }
    .align-self-xl-start {
        align-self: flex-start !important; }
    .align-self-xl-end {
        align-self: flex-end !important; }
    .align-self-xl-center {
        align-self: center !important; }
    .align-self-xl-baseline {
        align-self: baseline !important; }
    .align-self-xl-stretch {
        align-self: stretch !important; } }

    .float-left {
    float: left !important; }

    .float-right {
    float: right !important; }

    .float-none {
    float: none !important; }

    @media (min-width: 576px) {
    .float-sm-left {
        float: left !important; }
    .float-sm-right {
        float: right !important; }
    .float-sm-none {
        float: none !important; } }

    @media (min-width: 768px) {
    .float-md-left {
        float: left !important; }
    .float-md-right {
        float: right !important; }
    .float-md-none {
        float: none !important; } }

    @media (min-width: 992px) {
    .float-lg-left {
        float: left !important; }
    .float-lg-right {
        float: right !important; }
    .float-lg-none {
        float: none !important; } }

    @media (min-width: 1200px) {
    .float-xl-left {
        float: left !important; }
    .float-xl-right {
        float: right !important; }
    .float-xl-none {
        float: none !important; } }

    .overflow-auto {
    overflow: auto !important; }

    .overflow-hidden {
    overflow: hidden !important; }

    .position-static {
    position: static !important; }

    .position-relative {
    position: relative !important; }

    .position-absolute {
    position: absolute !important; }

    .position-fixed {
    position: fixed !important; }

    .position-sticky {
    position: sticky !important; }

    .fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1038; }

    .fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1038; }

    @supports (position: sticky) {
    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1020; } }

    .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0; }

    .sr-only-focusable:active, .sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal; }

    .shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

    .shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

    .shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

    .shadow-none {
    box-shadow: none !important; }

    .w-25 {
    width: 25% !important; }

    .w-50 {
    width: 50% !important; }

    .w-75 {
    width: 75% !important; }

    .w-100 {
    width: 100% !important; }

    .w-auto {
    width: auto !important; }

    .h-25 {
    height: 25% !important; }

    .h-50 {
    height: 50% !important; }

    .h-75 {
    height: 75% !important; }

    .h-100 {
    height: 100% !important; }

    .h-auto {
    height: auto !important; }

    .mw-100 {
    max-width: 100% !important; }

    .mh-100 {
    max-height: 100% !important; }

    .min-vw-100 {
    min-width: 100vw !important; }

    .min-vh-100 {
    min-height: 100vh !important; }

    .vw-100 {
    width: 100vw !important; }

    .vh-100 {
    height: 100vh !important; }

    .stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0); }

    .m-0 {
    margin: 0 !important; }

    .mt-0,
    .my-0 {
    margin-top: 0 !important; }

    .mr-0,
    .mx-0 {
    margin-right: 0 !important; }

    .mb-0,
    .my-0 {
    margin-bottom: 0 !important; }

    .ml-0,
    .mx-0 {
    margin-left: 0 !important; }

    .m-1 {
    margin: 1rem !important; }

    .mt-1,
    .my-1 {
    margin-top: 1rem !important; }

    .mr-1,
    .mx-1 {
    margin-right: 1rem !important; }

    .mb-1,
    .my-1 {
    margin-bottom: 1rem !important; }

    .ml-1,
    .mx-1 {
    margin-left: 1rem !important; }

    .m-2 {
    margin: 1.5rem !important; }

    .mt-2,
    .my-2 {
    margin-top: 1.5rem !important; }

    .mr-2,
    .mx-2 {
    margin-right: 1.5rem !important; }

    .mb-2,
    .my-2 {
    margin-bottom: 1.5rem !important; }

    .ml-2,
    .mx-2 {
    margin-left: 1.5rem !important; }

    .m-3 {
    margin: 3rem !important; }

    .mt-3,
    .my-3 {
    margin-top: 3rem !important; }

    .mr-3,
    .mx-3 {
    margin-right: 3rem !important; }

    .mb-3,
    .my-3 {
    margin-bottom: 3rem !important; }

    .ml-3,
    .mx-3 {
    margin-left: 3rem !important; }

    .m-4 {
    margin: 3.5rem !important; }

    .mt-4,
    .my-4 {
    margin-top: 3.5rem !important; }

    .mr-4,
    .mx-4 {
    margin-right: 3.5rem !important; }

    .mb-4,
    .my-4 {
    margin-bottom: 3.5rem !important; }

    .ml-4,
    .mx-4 {
    margin-left: 3.5rem !important; }

    .m-5 {
    margin: 4rem !important; }

    .mt-5,
    .my-5 {
    margin-top: 4rem !important; }

    .mr-5,
    .mx-5 {
    margin-right: 4rem !important; }

    .mb-5,
    .my-5 {
    margin-bottom: 4rem !important; }

    .ml-5,
    .mx-5 {
    margin-left: 4rem !important; }

    .m-25 {
    margin: 0.25rem !important; }

    .mt-25,
    .my-25 {
    margin-top: 0.25rem !important; }

    .mr-25,
    .mx-25 {
    margin-right: 0.25rem !important; }

    .mb-25,
    .my-25 {
    margin-bottom: 0.25rem !important; }

    .ml-25,
    .mx-25 {
    margin-left: 0.25rem !important; }

    .m-50 {
    margin: 0.5rem !important; }

    .mt-50,
    .my-50 {
    margin-top: 0.5rem !important; }

    .mr-50,
    .mx-50 {
    margin-right: 0.5rem !important; }

    .mb-50,
    .my-50 {
    margin-bottom: 0.5rem !important; }

    .ml-50,
    .mx-50 {
    margin-left: 0.5rem !important; }

    .m-75 {
    margin: 0.75rem !important; }

    .mt-75,
    .my-75 {
    margin-top: 0.75rem !important; }

    .mr-75,
    .mx-75 {
    margin-right: 0.75rem !important; }

    .mb-75,
    .my-75 {
    margin-bottom: 0.75rem !important; }

    .ml-75,
    .mx-75 {
    margin-left: 0.75rem !important; }

    .p-0 {
    padding: 0 !important; }

    .pt-0,
    .py-0 {
    padding-top: 0 !important; }

    .pr-0,
    .px-0 {
    padding-right: 0 !important; }

    .pb-0,
    .py-0 {
    padding-bottom: 0 !important; }

    .pl-0,
    .px-0 {
    padding-left: 0 !important; }

    .p-1 {
    padding: 1rem !important; }

    .pt-1,
    .py-1 {
    padding-top: 1rem !important; }

    .pr-1,
    .px-1 {
    padding-right: 1rem !important; }

    .pb-1,
    .py-1 {
    padding-bottom: 1rem !important; }

    .pl-1,
    .px-1 {
    padding-left: 1rem !important; }

    .p-2 {
    padding: 1.5rem !important; }

    .pt-2,
    .py-2 {
    padding-top: 1.5rem !important; }

    .pr-2,
    .px-2 {
    padding-right: 1.5rem !important; }

    .pb-2,
    .py-2 {
    padding-bottom: 1.5rem !important; }

    .pl-2,
    .px-2 {
    padding-left: 1.5rem !important; }

    .p-3 {
    padding: 3rem !important; }

    .pt-3,
    .py-3 {
    padding-top: 3rem !important; }

    .pr-3,
    .px-3 {
    padding-right: 3rem !important; }

    .pb-3,
    .py-3 {
    padding-bottom: 3rem !important; }

    .pl-3,
    .px-3 {
    padding-left: 3rem !important; }

    .p-4 {
    padding: 3.5rem !important; }

    .pt-4,
    .py-4 {
    padding-top: 3.5rem !important; }

    .pr-4,
    .px-4 {
    padding-right: 3.5rem !important; }

    .pb-4,
    .py-4 {
    padding-bottom: 3.5rem !important; }

    .pl-4,
    .px-4 {
    padding-left: 3.5rem !important; }

    .p-5 {
    padding: 4rem !important; }

    .pt-5,
    .py-5 {
    padding-top: 4rem !important; }

    .pr-5,
    .px-5 {
    padding-right: 4rem !important; }

    .pb-5,
    .py-5 {
    padding-bottom: 4rem !important; }

    .pl-5,
    .px-5 {
    padding-left: 4rem !important; }

    .p-25 {
    padding: 0.25rem !important; }

    .pt-25,
    .py-25 {
    padding-top: 0.25rem !important; }

    .pr-25,
    .px-25 {
    padding-right: 0.25rem !important; }

    .pb-25,
    .py-25 {
    padding-bottom: 0.25rem !important; }

    .pl-25,
    .px-25 {
    padding-left: 0.25rem !important; }

    .p-50 {
    padding: 0.5rem !important; }

    .pt-50,
    .py-50 {
    padding-top: 0.5rem !important; }

    .pr-50,
    .px-50 {
    padding-right: 0.5rem !important; }

    .pb-50,
    .py-50 {
    padding-bottom: 0.5rem !important; }

    .pl-50,
    .px-50 {
    padding-left: 0.5rem !important; }

    .p-75 {
    padding: 0.75rem !important; }

    .pt-75,
    .py-75 {
    padding-top: 0.75rem !important; }

    .pr-75,
    .px-75 {
    padding-right: 0.75rem !important; }

    .pb-75,
    .py-75 {
    padding-bottom: 0.75rem !important; }

    .pl-75,
    .px-75 {
    padding-left: 0.75rem !important; }

    .m-n1 {
    margin: -1rem !important; }

    .mt-n1,
    .my-n1 {
    margin-top: -1rem !important; }

    .mr-n1,
    .mx-n1 {
    margin-right: -1rem !important; }

    .mb-n1,
    .my-n1 {
    margin-bottom: -1rem !important; }

    .ml-n1,
    .mx-n1 {
    margin-left: -1rem !important; }

    .m-n2 {
    margin: -1.5rem !important; }

    .mt-n2,
    .my-n2 {
    margin-top: -1.5rem !important; }

    .mr-n2,
    .mx-n2 {
    margin-right: -1.5rem !important; }

    .mb-n2,
    .my-n2 {
    margin-bottom: -1.5rem !important; }

    .ml-n2,
    .mx-n2 {
    margin-left: -1.5rem !important; }

    .m-n3 {
    margin: -3rem !important; }

    .mt-n3,
    .my-n3 {
    margin-top: -3rem !important; }

    .mr-n3,
    .mx-n3 {
    margin-right: -3rem !important; }

    .mb-n3,
    .my-n3 {
    margin-bottom: -3rem !important; }

    .ml-n3,
    .mx-n3 {
    margin-left: -3rem !important; }

    .m-n4 {
    margin: -3.5rem !important; }

    .mt-n4,
    .my-n4 {
    margin-top: -3.5rem !important; }

    .mr-n4,
    .mx-n4 {
    margin-right: -3.5rem !important; }

    .mb-n4,
    .my-n4 {
    margin-bottom: -3.5rem !important; }

    .ml-n4,
    .mx-n4 {
    margin-left: -3.5rem !important; }

    .m-n5 {
    margin: -4rem !important; }

    .mt-n5,
    .my-n5 {
    margin-top: -4rem !important; }

    .mr-n5,
    .mx-n5 {
    margin-right: -4rem !important; }

    .mb-n5,
    .my-n5 {
    margin-bottom: -4rem !important; }

    .ml-n5,
    .mx-n5 {
    margin-left: -4rem !important; }

    .m-n25 {
    margin: -0.25rem !important; }

    .mt-n25,
    .my-n25 {
    margin-top: -0.25rem !important; }

    .mr-n25,
    .mx-n25 {
    margin-right: -0.25rem !important; }

    .mb-n25,
    .my-n25 {
    margin-bottom: -0.25rem !important; }

    .ml-n25,
    .mx-n25 {
    margin-left: -0.25rem !important; }

    .m-n50 {
    margin: -0.5rem !important; }

    .mt-n50,
    .my-n50 {
    margin-top: -0.5rem !important; }

    .mr-n50,
    .mx-n50 {
    margin-right: -0.5rem !important; }

    .mb-n50,
    .my-n50 {
    margin-bottom: -0.5rem !important; }

    .ml-n50,
    .mx-n50 {
    margin-left: -0.5rem !important; }

    .m-n75 {
    margin: -0.75rem !important; }

    .mt-n75,
    .my-n75 {
    margin-top: -0.75rem !important; }

    .mr-n75,
    .mx-n75 {
    margin-right: -0.75rem !important; }

    .mb-n75,
    .my-n75 {
    margin-bottom: -0.75rem !important; }

    .ml-n75,
    .mx-n75 {
    margin-left: -0.75rem !important; }

    .m-auto {
    margin: auto !important; }

    .mt-auto,
    .my-auto {
    margin-top: auto !important; }

    .mr-auto,
    .mx-auto {
    margin-right: auto !important; }

    .mb-auto,
    .my-auto {
    margin-bottom: auto !important; }

    .ml-auto,
    .mx-auto {
    margin-left: auto !important; }

    @media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important; }
    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important; }
    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important; }
    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important; }
    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important; }
    .m-sm-1 {
        margin: 1rem !important; }
    .mt-sm-1,
    .my-sm-1 {
        margin-top: 1rem !important; }
    .mr-sm-1,
    .mx-sm-1 {
        margin-right: 1rem !important; }
    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: 1rem !important; }
    .ml-sm-1,
    .mx-sm-1 {
        margin-left: 1rem !important; }
    .m-sm-2 {
        margin: 1.5rem !important; }
    .mt-sm-2,
    .my-sm-2 {
        margin-top: 1.5rem !important; }
    .mr-sm-2,
    .mx-sm-2 {
        margin-right: 1.5rem !important; }
    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: 1.5rem !important; }
    .ml-sm-2,
    .mx-sm-2 {
        margin-left: 1.5rem !important; }
    .m-sm-3 {
        margin: 3rem !important; }
    .mt-sm-3,
    .my-sm-3 {
        margin-top: 3rem !important; }
    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 3rem !important; }
    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 3rem !important; }
    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 3rem !important; }
    .m-sm-4 {
        margin: 3.5rem !important; }
    .mt-sm-4,
    .my-sm-4 {
        margin-top: 3.5rem !important; }
    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 3.5rem !important; }
    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 3.5rem !important; }
    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 3.5rem !important; }
    .m-sm-5 {
        margin: 4rem !important; }
    .mt-sm-5,
    .my-sm-5 {
        margin-top: 4rem !important; }
    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 4rem !important; }
    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 4rem !important; }
    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 4rem !important; }
    .m-sm-25 {
        margin: 0.25rem !important; }
    .mt-sm-25,
    .my-sm-25 {
        margin-top: 0.25rem !important; }
    .mr-sm-25,
    .mx-sm-25 {
        margin-right: 0.25rem !important; }
    .mb-sm-25,
    .my-sm-25 {
        margin-bottom: 0.25rem !important; }
    .ml-sm-25,
    .mx-sm-25 {
        margin-left: 0.25rem !important; }
    .m-sm-50 {
        margin: 0.5rem !important; }
    .mt-sm-50,
    .my-sm-50 {
        margin-top: 0.5rem !important; }
    .mr-sm-50,
    .mx-sm-50 {
        margin-right: 0.5rem !important; }
    .mb-sm-50,
    .my-sm-50 {
        margin-bottom: 0.5rem !important; }
    .ml-sm-50,
    .mx-sm-50 {
        margin-left: 0.5rem !important; }
    .m-sm-75 {
        margin: 0.75rem !important; }
    .mt-sm-75,
    .my-sm-75 {
        margin-top: 0.75rem !important; }
    .mr-sm-75,
    .mx-sm-75 {
        margin-right: 0.75rem !important; }
    .mb-sm-75,
    .my-sm-75 {
        margin-bottom: 0.75rem !important; }
    .ml-sm-75,
    .mx-sm-75 {
        margin-left: 0.75rem !important; }
    .p-sm-0 {
        padding: 0 !important; }
    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important; }
    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important; }
    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important; }
    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important; }
    .p-sm-1 {
        padding: 1rem !important; }
    .pt-sm-1,
    .py-sm-1 {
        padding-top: 1rem !important; }
    .pr-sm-1,
    .px-sm-1 {
        padding-right: 1rem !important; }
    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 1rem !important; }
    .pl-sm-1,
    .px-sm-1 {
        padding-left: 1rem !important; }
    .p-sm-2 {
        padding: 1.5rem !important; }
    .pt-sm-2,
    .py-sm-2 {
        padding-top: 1.5rem !important; }
    .pr-sm-2,
    .px-sm-2 {
        padding-right: 1.5rem !important; }
    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 1.5rem !important; }
    .pl-sm-2,
    .px-sm-2 {
        padding-left: 1.5rem !important; }
    .p-sm-3 {
        padding: 3rem !important; }
    .pt-sm-3,
    .py-sm-3 {
        padding-top: 3rem !important; }
    .pr-sm-3,
    .px-sm-3 {
        padding-right: 3rem !important; }
    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 3rem !important; }
    .pl-sm-3,
    .px-sm-3 {
        padding-left: 3rem !important; }
    .p-sm-4 {
        padding: 3.5rem !important; }
    .pt-sm-4,
    .py-sm-4 {
        padding-top: 3.5rem !important; }
    .pr-sm-4,
    .px-sm-4 {
        padding-right: 3.5rem !important; }
    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 3.5rem !important; }
    .pl-sm-4,
    .px-sm-4 {
        padding-left: 3.5rem !important; }
    .p-sm-5 {
        padding: 4rem !important; }
    .pt-sm-5,
    .py-sm-5 {
        padding-top: 4rem !important; }
    .pr-sm-5,
    .px-sm-5 {
        padding-right: 4rem !important; }
    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 4rem !important; }
    .pl-sm-5,
    .px-sm-5 {
        padding-left: 4rem !important; }
    .p-sm-25 {
        padding: 0.25rem !important; }
    .pt-sm-25,
    .py-sm-25 {
        padding-top: 0.25rem !important; }
    .pr-sm-25,
    .px-sm-25 {
        padding-right: 0.25rem !important; }
    .pb-sm-25,
    .py-sm-25 {
        padding-bottom: 0.25rem !important; }
    .pl-sm-25,
    .px-sm-25 {
        padding-left: 0.25rem !important; }
    .p-sm-50 {
        padding: 0.5rem !important; }
    .pt-sm-50,
    .py-sm-50 {
        padding-top: 0.5rem !important; }
    .pr-sm-50,
    .px-sm-50 {
        padding-right: 0.5rem !important; }
    .pb-sm-50,
    .py-sm-50 {
        padding-bottom: 0.5rem !important; }
    .pl-sm-50,
    .px-sm-50 {
        padding-left: 0.5rem !important; }
    .p-sm-75 {
        padding: 0.75rem !important; }
    .pt-sm-75,
    .py-sm-75 {
        padding-top: 0.75rem !important; }
    .pr-sm-75,
    .px-sm-75 {
        padding-right: 0.75rem !important; }
    .pb-sm-75,
    .py-sm-75 {
        padding-bottom: 0.75rem !important; }
    .pl-sm-75,
    .px-sm-75 {
        padding-left: 0.75rem !important; }
    .m-sm-n1 {
        margin: -1rem !important; }
    .mt-sm-n1,
    .my-sm-n1 {
        margin-top: -1rem !important; }
    .mr-sm-n1,
    .mx-sm-n1 {
        margin-right: -1rem !important; }
    .mb-sm-n1,
    .my-sm-n1 {
        margin-bottom: -1rem !important; }
    .ml-sm-n1,
    .mx-sm-n1 {
        margin-left: -1rem !important; }
    .m-sm-n2 {
        margin: -1.5rem !important; }
    .mt-sm-n2,
    .my-sm-n2 {
        margin-top: -1.5rem !important; }
    .mr-sm-n2,
    .mx-sm-n2 {
        margin-right: -1.5rem !important; }
    .mb-sm-n2,
    .my-sm-n2 {
        margin-bottom: -1.5rem !important; }
    .ml-sm-n2,
    .mx-sm-n2 {
        margin-left: -1.5rem !important; }
    .m-sm-n3 {
        margin: -3rem !important; }
    .mt-sm-n3,
    .my-sm-n3 {
        margin-top: -3rem !important; }
    .mr-sm-n3,
    .mx-sm-n3 {
        margin-right: -3rem !important; }
    .mb-sm-n3,
    .my-sm-n3 {
        margin-bottom: -3rem !important; }
    .ml-sm-n3,
    .mx-sm-n3 {
        margin-left: -3rem !important; }
    .m-sm-n4 {
        margin: -3.5rem !important; }
    .mt-sm-n4,
    .my-sm-n4 {
        margin-top: -3.5rem !important; }
    .mr-sm-n4,
    .mx-sm-n4 {
        margin-right: -3.5rem !important; }
    .mb-sm-n4,
    .my-sm-n4 {
        margin-bottom: -3.5rem !important; }
    .ml-sm-n4,
    .mx-sm-n4 {
        margin-left: -3.5rem !important; }
    .m-sm-n5 {
        margin: -4rem !important; }
    .mt-sm-n5,
    .my-sm-n5 {
        margin-top: -4rem !important; }
    .mr-sm-n5,
    .mx-sm-n5 {
        margin-right: -4rem !important; }
    .mb-sm-n5,
    .my-sm-n5 {
        margin-bottom: -4rem !important; }
    .ml-sm-n5,
    .mx-sm-n5 {
        margin-left: -4rem !important; }
    .m-sm-n25 {
        margin: -0.25rem !important; }
    .mt-sm-n25,
    .my-sm-n25 {
        margin-top: -0.25rem !important; }
    .mr-sm-n25,
    .mx-sm-n25 {
        margin-right: -0.25rem !important; }
    .mb-sm-n25,
    .my-sm-n25 {
        margin-bottom: -0.25rem !important; }
    .ml-sm-n25,
    .mx-sm-n25 {
        margin-left: -0.25rem !important; }
    .m-sm-n50 {
        margin: -0.5rem !important; }
    .mt-sm-n50,
    .my-sm-n50 {
        margin-top: -0.5rem !important; }
    .mr-sm-n50,
    .mx-sm-n50 {
        margin-right: -0.5rem !important; }
    .mb-sm-n50,
    .my-sm-n50 {
        margin-bottom: -0.5rem !important; }
    .ml-sm-n50,
    .mx-sm-n50 {
        margin-left: -0.5rem !important; }
    .m-sm-n75 {
        margin: -0.75rem !important; }
    .mt-sm-n75,
    .my-sm-n75 {
        margin-top: -0.75rem !important; }
    .mr-sm-n75,
    .mx-sm-n75 {
        margin-right: -0.75rem !important; }
    .mb-sm-n75,
    .my-sm-n75 {
        margin-bottom: -0.75rem !important; }
    .ml-sm-n75,
    .mx-sm-n75 {
        margin-left: -0.75rem !important; }
    .m-sm-auto {
        margin: auto !important; }
    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important; }
    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important; }
    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important; }
    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important; } }

    @media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important; }
    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important; }
    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important; }
    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important; }
    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important; }
    .m-md-1 {
        margin: 1rem !important; }
    .mt-md-1,
    .my-md-1 {
        margin-top: 1rem !important; }
    .mr-md-1,
    .mx-md-1 {
        margin-right: 1rem !important; }
    .mb-md-1,
    .my-md-1 {
        margin-bottom: 1rem !important; }
    .ml-md-1,
    .mx-md-1 {
        margin-left: 1rem !important; }
    .m-md-2 {
        margin: 1.5rem !important; }
    .mt-md-2,
    .my-md-2 {
        margin-top: 1.5rem !important; }
    .mr-md-2,
    .mx-md-2 {
        margin-right: 1.5rem !important; }
    .mb-md-2,
    .my-md-2 {
        margin-bottom: 1.5rem !important; }
    .ml-md-2,
    .mx-md-2 {
        margin-left: 1.5rem !important; }
    .m-md-3 {
        margin: 3rem !important; }
    .mt-md-3,
    .my-md-3 {
        margin-top: 3rem !important; }
    .mr-md-3,
    .mx-md-3 {
        margin-right: 3rem !important; }
    .mb-md-3,
    .my-md-3 {
        margin-bottom: 3rem !important; }
    .ml-md-3,
    .mx-md-3 {
        margin-left: 3rem !important; }
    .m-md-4 {
        margin: 3.5rem !important; }
    .mt-md-4,
    .my-md-4 {
        margin-top: 3.5rem !important; }
    .mr-md-4,
    .mx-md-4 {
        margin-right: 3.5rem !important; }
    .mb-md-4,
    .my-md-4 {
        margin-bottom: 3.5rem !important; }
    .ml-md-4,
    .mx-md-4 {
        margin-left: 3.5rem !important; }
    .m-md-5 {
        margin: 4rem !important; }
    .mt-md-5,
    .my-md-5 {
        margin-top: 4rem !important; }
    .mr-md-5,
    .mx-md-5 {
        margin-right: 4rem !important; }
    .mb-md-5,
    .my-md-5 {
        margin-bottom: 4rem !important; }
    .ml-md-5,
    .mx-md-5 {
        margin-left: 4rem !important; }
    .m-md-25 {
        margin: 0.25rem !important; }
    .mt-md-25,
    .my-md-25 {
        margin-top: 0.25rem !important; }
    .mr-md-25,
    .mx-md-25 {
        margin-right: 0.25rem !important; }
    .mb-md-25,
    .my-md-25 {
        margin-bottom: 0.25rem !important; }
    .ml-md-25,
    .mx-md-25 {
        margin-left: 0.25rem !important; }
    .m-md-50 {
        margin: 0.5rem !important; }
    .mt-md-50,
    .my-md-50 {
        margin-top: 0.5rem !important; }
    .mr-md-50,
    .mx-md-50 {
        margin-right: 0.5rem !important; }
    .mb-md-50,
    .my-md-50 {
        margin-bottom: 0.5rem !important; }
    .ml-md-50,
    .mx-md-50 {
        margin-left: 0.5rem !important; }
    .m-md-75 {
        margin: 0.75rem !important; }
    .mt-md-75,
    .my-md-75 {
        margin-top: 0.75rem !important; }
    .mr-md-75,
    .mx-md-75 {
        margin-right: 0.75rem !important; }
    .mb-md-75,
    .my-md-75 {
        margin-bottom: 0.75rem !important; }
    .ml-md-75,
    .mx-md-75 {
        margin-left: 0.75rem !important; }
    .p-md-0 {
        padding: 0 !important; }
    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important; }
    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important; }
    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important; }
    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important; }
    .p-md-1 {
        padding: 1rem !important; }
    .pt-md-1,
    .py-md-1 {
        padding-top: 1rem !important; }
    .pr-md-1,
    .px-md-1 {
        padding-right: 1rem !important; }
    .pb-md-1,
    .py-md-1 {
        padding-bottom: 1rem !important; }
    .pl-md-1,
    .px-md-1 {
        padding-left: 1rem !important; }
    .p-md-2 {
        padding: 1.5rem !important; }
    .pt-md-2,
    .py-md-2 {
        padding-top: 1.5rem !important; }
    .pr-md-2,
    .px-md-2 {
        padding-right: 1.5rem !important; }
    .pb-md-2,
    .py-md-2 {
        padding-bottom: 1.5rem !important; }
    .pl-md-2,
    .px-md-2 {
        padding-left: 1.5rem !important; }
    .p-md-3 {
        padding: 3rem !important; }
    .pt-md-3,
    .py-md-3 {
        padding-top: 3rem !important; }
    .pr-md-3,
    .px-md-3 {
        padding-right: 3rem !important; }
    .pb-md-3,
    .py-md-3 {
        padding-bottom: 3rem !important; }
    .pl-md-3,
    .px-md-3 {
        padding-left: 3rem !important; }
    .p-md-4 {
        padding: 3.5rem !important; }
    .pt-md-4,
    .py-md-4 {
        padding-top: 3.5rem !important; }
    .pr-md-4,
    .px-md-4 {
        padding-right: 3.5rem !important; }
    .pb-md-4,
    .py-md-4 {
        padding-bottom: 3.5rem !important; }
    .pl-md-4,
    .px-md-4 {
        padding-left: 3.5rem !important; }
    .p-md-5 {
        padding: 4rem !important; }
    .pt-md-5,
    .py-md-5 {
        padding-top: 4rem !important; }
    .pr-md-5,
    .px-md-5 {
        padding-right: 4rem !important; }
    .pb-md-5,
    .py-md-5 {
        padding-bottom: 4rem !important; }
    .pl-md-5,
    .px-md-5 {
        padding-left: 4rem !important; }
    .p-md-25 {
        padding: 0.25rem !important; }
    .pt-md-25,
    .py-md-25 {
        padding-top: 0.25rem !important; }
    .pr-md-25,
    .px-md-25 {
        padding-right: 0.25rem !important; }
    .pb-md-25,
    .py-md-25 {
        padding-bottom: 0.25rem !important; }
    .pl-md-25,
    .px-md-25 {
        padding-left: 0.25rem !important; }
    .p-md-50 {
        padding: 0.5rem !important; }
    .pt-md-50,
    .py-md-50 {
        padding-top: 0.5rem !important; }
    .pr-md-50,
    .px-md-50 {
        padding-right: 0.5rem !important; }
    .pb-md-50,
    .py-md-50 {
        padding-bottom: 0.5rem !important; }
    .pl-md-50,
    .px-md-50 {
        padding-left: 0.5rem !important; }
    .p-md-75 {
        padding: 0.75rem !important; }
    .pt-md-75,
    .py-md-75 {
        padding-top: 0.75rem !important; }
    .pr-md-75,
    .px-md-75 {
        padding-right: 0.75rem !important; }
    .pb-md-75,
    .py-md-75 {
        padding-bottom: 0.75rem !important; }
    .pl-md-75,
    .px-md-75 {
        padding-left: 0.75rem !important; }
    .m-md-n1 {
        margin: -1rem !important; }
    .mt-md-n1,
    .my-md-n1 {
        margin-top: -1rem !important; }
    .mr-md-n1,
    .mx-md-n1 {
        margin-right: -1rem !important; }
    .mb-md-n1,
    .my-md-n1 {
        margin-bottom: -1rem !important; }
    .ml-md-n1,
    .mx-md-n1 {
        margin-left: -1rem !important; }
    .m-md-n2 {
        margin: -1.5rem !important; }
    .mt-md-n2,
    .my-md-n2 {
        margin-top: -1.5rem !important; }
    .mr-md-n2,
    .mx-md-n2 {
        margin-right: -1.5rem !important; }
    .mb-md-n2,
    .my-md-n2 {
        margin-bottom: -1.5rem !important; }
    .ml-md-n2,
    .mx-md-n2 {
        margin-left: -1.5rem !important; }
    .m-md-n3 {
        margin: -3rem !important; }
    .mt-md-n3,
    .my-md-n3 {
        margin-top: -3rem !important; }
    .mr-md-n3,
    .mx-md-n3 {
        margin-right: -3rem !important; }
    .mb-md-n3,
    .my-md-n3 {
        margin-bottom: -3rem !important; }
    .ml-md-n3,
    .mx-md-n3 {
        margin-left: -3rem !important; }
    .m-md-n4 {
        margin: -3.5rem !important; }
    .mt-md-n4,
    .my-md-n4 {
        margin-top: -3.5rem !important; }
    .mr-md-n4,
    .mx-md-n4 {
        margin-right: -3.5rem !important; }
    .mb-md-n4,
    .my-md-n4 {
        margin-bottom: -3.5rem !important; }
    .ml-md-n4,
    .mx-md-n4 {
        margin-left: -3.5rem !important; }
    .m-md-n5 {
        margin: -4rem !important; }
    .mt-md-n5,
    .my-md-n5 {
        margin-top: -4rem !important; }
    .mr-md-n5,
    .mx-md-n5 {
        margin-right: -4rem !important; }
    .mb-md-n5,
    .my-md-n5 {
        margin-bottom: -4rem !important; }
    .ml-md-n5,
    .mx-md-n5 {
        margin-left: -4rem !important; }
    .m-md-n25 {
        margin: -0.25rem !important; }
    .mt-md-n25,
    .my-md-n25 {
        margin-top: -0.25rem !important; }
    .mr-md-n25,
    .mx-md-n25 {
        margin-right: -0.25rem !important; }
    .mb-md-n25,
    .my-md-n25 {
        margin-bottom: -0.25rem !important; }
    .ml-md-n25,
    .mx-md-n25 {
        margin-left: -0.25rem !important; }
    .m-md-n50 {
        margin: -0.5rem !important; }
    .mt-md-n50,
    .my-md-n50 {
        margin-top: -0.5rem !important; }
    .mr-md-n50,
    .mx-md-n50 {
        margin-right: -0.5rem !important; }
    .mb-md-n50,
    .my-md-n50 {
        margin-bottom: -0.5rem !important; }
    .ml-md-n50,
    .mx-md-n50 {
        margin-left: -0.5rem !important; }
    .m-md-n75 {
        margin: -0.75rem !important; }
    .mt-md-n75,
    .my-md-n75 {
        margin-top: -0.75rem !important; }
    .mr-md-n75,
    .mx-md-n75 {
        margin-right: -0.75rem !important; }
    .mb-md-n75,
    .my-md-n75 {
        margin-bottom: -0.75rem !important; }
    .ml-md-n75,
    .mx-md-n75 {
        margin-left: -0.75rem !important; }
    .m-md-auto {
        margin: auto !important; }
    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important; }
    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important; }
    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important; }
    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important; } }

    @media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important; }
    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important; }
    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important; }
    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important; }
    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important; }
    .m-lg-1 {
        margin: 1rem !important; }
    .mt-lg-1,
    .my-lg-1 {
        margin-top: 1rem !important; }
    .mr-lg-1,
    .mx-lg-1 {
        margin-right: 1rem !important; }
    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: 1rem !important; }
    .ml-lg-1,
    .mx-lg-1 {
        margin-left: 1rem !important; }
    .m-lg-2 {
        margin: 1.5rem !important; }
    .mt-lg-2,
    .my-lg-2 {
        margin-top: 1.5rem !important; }
    .mr-lg-2,
    .mx-lg-2 {
        margin-right: 1.5rem !important; }
    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: 1.5rem !important; }
    .ml-lg-2,
    .mx-lg-2 {
        margin-left: 1.5rem !important; }
    .m-lg-3 {
        margin: 3rem !important; }
    .mt-lg-3,
    .my-lg-3 {
        margin-top: 3rem !important; }
    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 3rem !important; }
    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 3rem !important; }
    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 3rem !important; }
    .m-lg-4 {
        margin: 3.5rem !important; }
    .mt-lg-4,
    .my-lg-4 {
        margin-top: 3.5rem !important; }
    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 3.5rem !important; }
    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 3.5rem !important; }
    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 3.5rem !important; }
    .m-lg-5 {
        margin: 4rem !important; }
    .mt-lg-5,
    .my-lg-5 {
        margin-top: 4rem !important; }
    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 4rem !important; }
    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 4rem !important; }
    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 4rem !important; }
    .m-lg-25 {
        margin: 0.25rem !important; }
    .mt-lg-25,
    .my-lg-25 {
        margin-top: 0.25rem !important; }
    .mr-lg-25,
    .mx-lg-25 {
        margin-right: 0.25rem !important; }
    .mb-lg-25,
    .my-lg-25 {
        margin-bottom: 0.25rem !important; }
    .ml-lg-25,
    .mx-lg-25 {
        margin-left: 0.25rem !important; }
    .m-lg-50 {
        margin: 0.5rem !important; }
    .mt-lg-50,
    .my-lg-50 {
        margin-top: 0.5rem !important; }
    .mr-lg-50,
    .mx-lg-50 {
        margin-right: 0.5rem !important; }
    .mb-lg-50,
    .my-lg-50 {
        margin-bottom: 0.5rem !important; }
    .ml-lg-50,
    .mx-lg-50 {
        margin-left: 0.5rem !important; }
    .m-lg-75 {
        margin: 0.75rem !important; }
    .mt-lg-75,
    .my-lg-75 {
        margin-top: 0.75rem !important; }
    .mr-lg-75,
    .mx-lg-75 {
        margin-right: 0.75rem !important; }
    .mb-lg-75,
    .my-lg-75 {
        margin-bottom: 0.75rem !important; }
    .ml-lg-75,
    .mx-lg-75 {
        margin-left: 0.75rem !important; }
    .p-lg-0 {
        padding: 0 !important; }
    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important; }
    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important; }
    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important; }
    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important; }
    .p-lg-1 {
        padding: 1rem !important; }
    .pt-lg-1,
    .py-lg-1 {
        padding-top: 1rem !important; }
    .pr-lg-1,
    .px-lg-1 {
        padding-right: 1rem !important; }
    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: 1rem !important; }
    .pl-lg-1,
    .px-lg-1 {
        padding-left: 1rem !important; }
    .p-lg-2 {
        padding: 1.5rem !important; }
    .pt-lg-2,
    .py-lg-2 {
        padding-top: 1.5rem !important; }
    .pr-lg-2,
    .px-lg-2 {
        padding-right: 1.5rem !important; }
    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: 1.5rem !important; }
    .pl-lg-2,
    .px-lg-2 {
        padding-left: 1.5rem !important; }
    .p-lg-3 {
        padding: 3rem !important; }
    .pt-lg-3,
    .py-lg-3 {
        padding-top: 3rem !important; }
    .pr-lg-3,
    .px-lg-3 {
        padding-right: 3rem !important; }
    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 3rem !important; }
    .pl-lg-3,
    .px-lg-3 {
        padding-left: 3rem !important; }
    .p-lg-4 {
        padding: 3.5rem !important; }
    .pt-lg-4,
    .py-lg-4 {
        padding-top: 3.5rem !important; }
    .pr-lg-4,
    .px-lg-4 {
        padding-right: 3.5rem !important; }
    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 3.5rem !important; }
    .pl-lg-4,
    .px-lg-4 {
        padding-left: 3.5rem !important; }
    .p-lg-5 {
        padding: 4rem !important; }
    .pt-lg-5,
    .py-lg-5 {
        padding-top: 4rem !important; }
    .pr-lg-5,
    .px-lg-5 {
        padding-right: 4rem !important; }
    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 4rem !important; }
    .pl-lg-5,
    .px-lg-5 {
        padding-left: 4rem !important; }
    .p-lg-25 {
        padding: 0.25rem !important; }
    .pt-lg-25,
    .py-lg-25 {
        padding-top: 0.25rem !important; }
    .pr-lg-25,
    .px-lg-25 {
        padding-right: 0.25rem !important; }
    .pb-lg-25,
    .py-lg-25 {
        padding-bottom: 0.25rem !important; }
    .pl-lg-25,
    .px-lg-25 {
        padding-left: 0.25rem !important; }
    .p-lg-50 {
        padding: 0.5rem !important; }
    .pt-lg-50,
    .py-lg-50 {
        padding-top: 0.5rem !important; }
    .pr-lg-50,
    .px-lg-50 {
        padding-right: 0.5rem !important; }
    .pb-lg-50,
    .py-lg-50 {
        padding-bottom: 0.5rem !important; }
    .pl-lg-50,
    .px-lg-50 {
        padding-left: 0.5rem !important; }
    .p-lg-75 {
        padding: 0.75rem !important; }
    .pt-lg-75,
    .py-lg-75 {
        padding-top: 0.75rem !important; }
    .pr-lg-75,
    .px-lg-75 {
        padding-right: 0.75rem !important; }
    .pb-lg-75,
    .py-lg-75 {
        padding-bottom: 0.75rem !important; }
    .pl-lg-75,
    .px-lg-75 {
        padding-left: 0.75rem !important; }
    .m-lg-n1 {
        margin: -1rem !important; }
    .mt-lg-n1,
    .my-lg-n1 {
        margin-top: -1rem !important; }
    .mr-lg-n1,
    .mx-lg-n1 {
        margin-right: -1rem !important; }
    .mb-lg-n1,
    .my-lg-n1 {
        margin-bottom: -1rem !important; }
    .ml-lg-n1,
    .mx-lg-n1 {
        margin-left: -1rem !important; }
    .m-lg-n2 {
        margin: -1.5rem !important; }
    .mt-lg-n2,
    .my-lg-n2 {
        margin-top: -1.5rem !important; }
    .mr-lg-n2,
    .mx-lg-n2 {
        margin-right: -1.5rem !important; }
    .mb-lg-n2,
    .my-lg-n2 {
        margin-bottom: -1.5rem !important; }
    .ml-lg-n2,
    .mx-lg-n2 {
        margin-left: -1.5rem !important; }
    .m-lg-n3 {
        margin: -3rem !important; }
    .mt-lg-n3,
    .my-lg-n3 {
        margin-top: -3rem !important; }
    .mr-lg-n3,
    .mx-lg-n3 {
        margin-right: -3rem !important; }
    .mb-lg-n3,
    .my-lg-n3 {
        margin-bottom: -3rem !important; }
    .ml-lg-n3,
    .mx-lg-n3 {
        margin-left: -3rem !important; }
    .m-lg-n4 {
        margin: -3.5rem !important; }
    .mt-lg-n4,
    .my-lg-n4 {
        margin-top: -3.5rem !important; }
    .mr-lg-n4,
    .mx-lg-n4 {
        margin-right: -3.5rem !important; }
    .mb-lg-n4,
    .my-lg-n4 {
        margin-bottom: -3.5rem !important; }
    .ml-lg-n4,
    .mx-lg-n4 {
        margin-left: -3.5rem !important; }
    .m-lg-n5 {
        margin: -4rem !important; }
    .mt-lg-n5,
    .my-lg-n5 {
        margin-top: -4rem !important; }
    .mr-lg-n5,
    .mx-lg-n5 {
        margin-right: -4rem !important; }
    .mb-lg-n5,
    .my-lg-n5 {
        margin-bottom: -4rem !important; }
    .ml-lg-n5,
    .mx-lg-n5 {
        margin-left: -4rem !important; }
    .m-lg-n25 {
        margin: -0.25rem !important; }
    .mt-lg-n25,
    .my-lg-n25 {
        margin-top: -0.25rem !important; }
    .mr-lg-n25,
    .mx-lg-n25 {
        margin-right: -0.25rem !important; }
    .mb-lg-n25,
    .my-lg-n25 {
        margin-bottom: -0.25rem !important; }
    .ml-lg-n25,
    .mx-lg-n25 {
        margin-left: -0.25rem !important; }
    .m-lg-n50 {
        margin: -0.5rem !important; }
    .mt-lg-n50,
    .my-lg-n50 {
        margin-top: -0.5rem !important; }
    .mr-lg-n50,
    .mx-lg-n50 {
        margin-right: -0.5rem !important; }
    .mb-lg-n50,
    .my-lg-n50 {
        margin-bottom: -0.5rem !important; }
    .ml-lg-n50,
    .mx-lg-n50 {
        margin-left: -0.5rem !important; }
    .m-lg-n75 {
        margin: -0.75rem !important; }
    .mt-lg-n75,
    .my-lg-n75 {
        margin-top: -0.75rem !important; }
    .mr-lg-n75,
    .mx-lg-n75 {
        margin-right: -0.75rem !important; }
    .mb-lg-n75,
    .my-lg-n75 {
        margin-bottom: -0.75rem !important; }
    .ml-lg-n75,
    .mx-lg-n75 {
        margin-left: -0.75rem !important; }
    .m-lg-auto {
        margin: auto !important; }
    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important; }
    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important; }
    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important; }
    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important; } }

    @media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important; }
    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important; }
    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important; }
    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important; }
    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important; }
    .m-xl-1 {
        margin: 1rem !important; }
    .mt-xl-1,
    .my-xl-1 {
        margin-top: 1rem !important; }
    .mr-xl-1,
    .mx-xl-1 {
        margin-right: 1rem !important; }
    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: 1rem !important; }
    .ml-xl-1,
    .mx-xl-1 {
        margin-left: 1rem !important; }
    .m-xl-2 {
        margin: 1.5rem !important; }
    .mt-xl-2,
    .my-xl-2 {
        margin-top: 1.5rem !important; }
    .mr-xl-2,
    .mx-xl-2 {
        margin-right: 1.5rem !important; }
    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: 1.5rem !important; }
    .ml-xl-2,
    .mx-xl-2 {
        margin-left: 1.5rem !important; }
    .m-xl-3 {
        margin: 3rem !important; }
    .mt-xl-3,
    .my-xl-3 {
        margin-top: 3rem !important; }
    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 3rem !important; }
    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 3rem !important; }
    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 3rem !important; }
    .m-xl-4 {
        margin: 3.5rem !important; }
    .mt-xl-4,
    .my-xl-4 {
        margin-top: 3.5rem !important; }
    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 3.5rem !important; }
    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 3.5rem !important; }
    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 3.5rem !important; }
    .m-xl-5 {
        margin: 4rem !important; }
    .mt-xl-5,
    .my-xl-5 {
        margin-top: 4rem !important; }
    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 4rem !important; }
    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 4rem !important; }
    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 4rem !important; }
    .m-xl-25 {
        margin: 0.25rem !important; }
    .mt-xl-25,
    .my-xl-25 {
        margin-top: 0.25rem !important; }
    .mr-xl-25,
    .mx-xl-25 {
        margin-right: 0.25rem !important; }
    .mb-xl-25,
    .my-xl-25 {
        margin-bottom: 0.25rem !important; }
    .ml-xl-25,
    .mx-xl-25 {
        margin-left: 0.25rem !important; }
    .m-xl-50 {
        margin: 0.5rem !important; }
    .mt-xl-50,
    .my-xl-50 {
        margin-top: 0.5rem !important; }
    .mr-xl-50,
    .mx-xl-50 {
        margin-right: 0.5rem !important; }
    .mb-xl-50,
    .my-xl-50 {
        margin-bottom: 0.5rem !important; }
    .ml-xl-50,
    .mx-xl-50 {
        margin-left: 0.5rem !important; }
    .m-xl-75 {
        margin: 0.75rem !important; }
    .mt-xl-75,
    .my-xl-75 {
        margin-top: 0.75rem !important; }
    .mr-xl-75,
    .mx-xl-75 {
        margin-right: 0.75rem !important; }
    .mb-xl-75,
    .my-xl-75 {
        margin-bottom: 0.75rem !important; }
    .ml-xl-75,
    .mx-xl-75 {
        margin-left: 0.75rem !important; }
    .p-xl-0 {
        padding: 0 !important; }
    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important; }
    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important; }
    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important; }
    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important; }
    .p-xl-1 {
        padding: 1rem !important; }
    .pt-xl-1,
    .py-xl-1 {
        padding-top: 1rem !important; }
    .pr-xl-1,
    .px-xl-1 {
        padding-right: 1rem !important; }
    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: 1rem !important; }
    .pl-xl-1,
    .px-xl-1 {
        padding-left: 1rem !important; }
    .p-xl-2 {
        padding: 1.5rem !important; }
    .pt-xl-2,
    .py-xl-2 {
        padding-top: 1.5rem !important; }
    .pr-xl-2,
    .px-xl-2 {
        padding-right: 1.5rem !important; }
    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: 1.5rem !important; }
    .pl-xl-2,
    .px-xl-2 {
        padding-left: 1.5rem !important; }
    .p-xl-3 {
        padding: 3rem !important; }
    .pt-xl-3,
    .py-xl-3 {
        padding-top: 3rem !important; }
    .pr-xl-3,
    .px-xl-3 {
        padding-right: 3rem !important; }
    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 3rem !important; }
    .pl-xl-3,
    .px-xl-3 {
        padding-left: 3rem !important; }
    .p-xl-4 {
        padding: 3.5rem !important; }
    .pt-xl-4,
    .py-xl-4 {
        padding-top: 3.5rem !important; }
    .pr-xl-4,
    .px-xl-4 {
        padding-right: 3.5rem !important; }
    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 3.5rem !important; }
    .pl-xl-4,
    .px-xl-4 {
        padding-left: 3.5rem !important; }
    .p-xl-5 {
        padding: 4rem !important; }
    .pt-xl-5,
    .py-xl-5 {
        padding-top: 4rem !important; }
    .pr-xl-5,
    .px-xl-5 {
        padding-right: 4rem !important; }
    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 4rem !important; }
    .pl-xl-5,
    .px-xl-5 {
        padding-left: 4rem !important; }
    .p-xl-25 {
        padding: 0.25rem !important; }
    .pt-xl-25,
    .py-xl-25 {
        padding-top: 0.25rem !important; }
    .pr-xl-25,
    .px-xl-25 {
        padding-right: 0.25rem !important; }
    .pb-xl-25,
    .py-xl-25 {
        padding-bottom: 0.25rem !important; }
    .pl-xl-25,
    .px-xl-25 {
        padding-left: 0.25rem !important; }
    .p-xl-50 {
        padding: 0.5rem !important; }
    .pt-xl-50,
    .py-xl-50 {
        padding-top: 0.5rem !important; }
    .pr-xl-50,
    .px-xl-50 {
        padding-right: 0.5rem !important; }
    .pb-xl-50,
    .py-xl-50 {
        padding-bottom: 0.5rem !important; }
    .pl-xl-50,
    .px-xl-50 {
        padding-left: 0.5rem !important; }
    .p-xl-75 {
        padding: 0.75rem !important; }
    .pt-xl-75,
    .py-xl-75 {
        padding-top: 0.75rem !important; }
    .pr-xl-75,
    .px-xl-75 {
        padding-right: 0.75rem !important; }
    .pb-xl-75,
    .py-xl-75 {
        padding-bottom: 0.75rem !important; }
    .pl-xl-75,
    .px-xl-75 {
        padding-left: 0.75rem !important; }
    .m-xl-n1 {
        margin: -1rem !important; }
    .mt-xl-n1,
    .my-xl-n1 {
        margin-top: -1rem !important; }
    .mr-xl-n1,
    .mx-xl-n1 {
        margin-right: -1rem !important; }
    .mb-xl-n1,
    .my-xl-n1 {
        margin-bottom: -1rem !important; }
    .ml-xl-n1,
    .mx-xl-n1 {
        margin-left: -1rem !important; }
    .m-xl-n2 {
        margin: -1.5rem !important; }
    .mt-xl-n2,
    .my-xl-n2 {
        margin-top: -1.5rem !important; }
    .mr-xl-n2,
    .mx-xl-n2 {
        margin-right: -1.5rem !important; }
    .mb-xl-n2,
    .my-xl-n2 {
        margin-bottom: -1.5rem !important; }
    .ml-xl-n2,
    .mx-xl-n2 {
        margin-left: -1.5rem !important; }
    .m-xl-n3 {
        margin: -3rem !important; }
    .mt-xl-n3,
    .my-xl-n3 {
        margin-top: -3rem !important; }
    .mr-xl-n3,
    .mx-xl-n3 {
        margin-right: -3rem !important; }
    .mb-xl-n3,
    .my-xl-n3 {
        margin-bottom: -3rem !important; }
    .ml-xl-n3,
    .mx-xl-n3 {
        margin-left: -3rem !important; }
    .m-xl-n4 {
        margin: -3.5rem !important; }
    .mt-xl-n4,
    .my-xl-n4 {
        margin-top: -3.5rem !important; }
    .mr-xl-n4,
    .mx-xl-n4 {
        margin-right: -3.5rem !important; }
    .mb-xl-n4,
    .my-xl-n4 {
        margin-bottom: -3.5rem !important; }
    .ml-xl-n4,
    .mx-xl-n4 {
        margin-left: -3.5rem !important; }
    .m-xl-n5 {
        margin: -4rem !important; }
    .mt-xl-n5,
    .my-xl-n5 {
        margin-top: -4rem !important; }
    .mr-xl-n5,
    .mx-xl-n5 {
        margin-right: -4rem !important; }
    .mb-xl-n5,
    .my-xl-n5 {
        margin-bottom: -4rem !important; }
    .ml-xl-n5,
    .mx-xl-n5 {
        margin-left: -4rem !important; }
    .m-xl-n25 {
        margin: -0.25rem !important; }
    .mt-xl-n25,
    .my-xl-n25 {
        margin-top: -0.25rem !important; }
    .mr-xl-n25,
    .mx-xl-n25 {
        margin-right: -0.25rem !important; }
    .mb-xl-n25,
    .my-xl-n25 {
        margin-bottom: -0.25rem !important; }
    .ml-xl-n25,
    .mx-xl-n25 {
        margin-left: -0.25rem !important; }
    .m-xl-n50 {
        margin: -0.5rem !important; }
    .mt-xl-n50,
    .my-xl-n50 {
        margin-top: -0.5rem !important; }
    .mr-xl-n50,
    .mx-xl-n50 {
        margin-right: -0.5rem !important; }
    .mb-xl-n50,
    .my-xl-n50 {
        margin-bottom: -0.5rem !important; }
    .ml-xl-n50,
    .mx-xl-n50 {
        margin-left: -0.5rem !important; }
    .m-xl-n75 {
        margin: -0.75rem !important; }
    .mt-xl-n75,
    .my-xl-n75 {
        margin-top: -0.75rem !important; }
    .mr-xl-n75,
    .mx-xl-n75 {
        margin-right: -0.75rem !important; }
    .mb-xl-n75,
    .my-xl-n75 {
        margin-bottom: -0.75rem !important; }
    .ml-xl-n75,
    .mx-xl-n75 {
        margin-left: -0.75rem !important; }
    .m-xl-auto {
        margin: auto !important; }
    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important; }
    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important; }
    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important; }
    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important; } }

    .text-monospace {
    font-family: "Quicksand", Georgia, "Times New Roman", Times, serif !important; }

    .text-justify {
    text-align: justify !important; }

    .text-wrap {
    white-space: normal !important; }

    .text-nowrap {
    white-space: nowrap !important; }

    .text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap; }

    .text-left {
    text-align: left !important; }

    .text-right {
    text-align: right !important; }

    .text-center {
    text-align: center !important; }

    @media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important; }
    .text-sm-right {
        text-align: right !important; }
    .text-sm-center {
        text-align: center !important; } }

    @media (min-width: 768px) {
    .text-md-left {
        text-align: left !important; }
    .text-md-right {
        text-align: right !important; }
    .text-md-center {
        text-align: center !important; } }

    @media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important; }
    .text-lg-right {
        text-align: right !important; }
    .text-lg-center {
        text-align: center !important; } }

    @media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important; }
    .text-xl-right {
        text-align: right !important; }
    .text-xl-center {
        text-align: center !important; } }

    .text-lowercase {
    text-transform: lowercase !important; }

    .text-uppercase {
    text-transform: uppercase !important; }

    .text-capitalize {
    text-transform: capitalize !important; }

    .font-weight-light {
    font-weight: 300 !important; }

    .font-weight-lighter {
    font-weight: lighter !important; }

    .font-weight-normal {
    font-weight: 400 !important; }

    .font-weight-bold {
    font-weight: 700 !important; }

    .font-weight-bolder {
    font-weight: bolder !important; }

    .font-italic {
    font-style: italic !important; }

    .text-white {
    color: #fff !important; }

    .text-primary {
    color: #666ee8 !important; }

    a.text-primary:hover, a.text-primary:focus {
    color: #232fde !important; }

    .text-secondary {
    color: #6b6f82 !important; }

    a.text-secondary:hover, a.text-secondary:focus {
    color: #484b58 !important; }

    .text-success {
    color: #28d094 !important; }

    a.text-success:hover, a.text-success:focus {
    color: #1c9066 !important; }

    .text-info {
    color: #1e9ff2 !important; }

    a.text-info:hover, a.text-info:focus {
    color: #0b75b9 !important; }

    .text-warning {
    color: #ff9149 !important; }

    a.text-warning:hover, a.text-warning:focus {
    color: #fc6300 !important; }

    .text-danger {
    color: #ff4961 !important; }

    a.text-danger:hover, a.text-danger:focus {
    color: #fc0021 !important; }

    .text-light {
    color: #babfc7 !important; }

    a.text-light:hover, a.text-light:focus {
    color: #9098a5 !important; }

    .text-dark {
    color: #464855 !important; }

    a.text-dark:hover, a.text-dark:focus {
    color: #23242b !important; }

    .text-body {
    color: #6b6f82 !important; }

    .text-muted {
    color: #6b6f82 !important; }

    .text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important; }

    .text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important; }

    .text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0; }

    .text-decoration-none {
    text-decoration: none !important; }

    .text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important; }

    .text-reset {
    color: inherit !important; }

    .visible {
    visibility: visible !important; }

    .invisible {
    visibility: hidden !important; }

    @media print {
    *,
    *::before,
    *::after {
        text-shadow: none !important;
        box-shadow: none !important; }
    a:not(.btn) {
        text-decoration: underline; }
    abbr[title]::after {
        content: " (" attr(title) ")"; }
    pre {
        white-space: pre-wrap !important; }
    pre,
    blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid; }
    thead {
        display: table-header-group; }
    tr,
    img {
        page-break-inside: avoid; }
    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3; }
    h2,
    h3 {
        page-break-after: avoid; }
    @page {
        size: a3; }
    body {
        min-width: 992px !important; }
    .container {
        min-width: 992px !important; }
    .navbar {
        display: none; }
    .badge {
        border: 1px solid #000; }
    .table {
        border-collapse: collapse !important; }
        .table td,
        .table th {
        background-color: #fff !important; }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #626e82 !important; }
    .table-dark {
        color: inherit; }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
        border-color: #626e82; }
    .table .thead-dark th {
        color: inherit;
        border-color: #626e82; } }

</style>

<style>
    a:focus {
  outline: none; }

    .font-small-1 {
    font-size: 0.7rem !important; }

    .font-small-2 {
    font-size: 0.8rem !important; }

    .font-small-3 {
    font-size: 0.9rem !important; }

    .font-medium-1 {
    font-size: 1.1rem !important; }

    .font-medium-2 {
    font-size: 1.2rem !important; }

    .font-medium-3 {
    font-size: 1.3rem !important; }

    .font-medium-4 {
    font-size: 1.4rem !important; }

    .font-medium-5 {
    font-size: 1.5rem !important; }

    .font-large-1 {
    font-size: 2rem !important; }

    .font-large-2 {
    font-size: 3rem !important; }

    .font-large-3 {
    font-size: 4rem !important; }

    .font-large-4 {
    font-size: 5rem !important; }

    .font-large-5 {
    font-size: 6rem !important; }

    .text-bold-300 {
    font-weight: 300; }

    .text-bold-400 {
    font-weight: 400; }

    .text-bold-500 {
    font-weight: 500; }

    .text-bold-600 {
    font-weight: 600; }

    .text-bold-700 {
    font-weight: 700; }

    .text-italic {
    font-style: italic; }

    .text-highlight {
    padding: 4px 6px; }

    ol li,
    ul li,
    dl li {
    line-height: 1.8; }

    p {
    letter-spacing: .5px; }

    code {
    padding: .2rem .4rem;
    font-size: 90%;
    color: #f74b5c;
    background-color: #f2f3f5;
    border-radius: 0.25rem; }

    pre {
    background-color: #f7f7f9; }
    pre code {
        background-color: transparent !important; }

    .bd-example-row .row + .row {
    margin-top: 1rem; }

    .bd-example-row .row > .col,
    .bd-example-row .row > [class^="col-"] {
    padding-top: .75rem;
    padding-bottom: .75rem;
    background-color: rgba(86, 61, 124, 0.15);
    border: 1px solid rgba(86, 61, 124, 0.2); }

    .bd-example-row .flex-items-top,
    .bd-example-row .flex-items-middle,
    .bd-example-row .flex-items-bottom {
    min-height: 6rem;
    background-color: rgba(255, 0, 0, 0.1); }

    .bd-example-row-flex-cols .row {
    min-height: 10rem;
    background-color: rgba(255, 0, 0, 0.1); }

    .bd-highlight {
    background-color: rgba(86, 61, 124, 0.15);
    border: 1px solid rgba(86, 61, 124, 0.15); }

    .example-container {
    width: 800px;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto; }

    .example-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px; }

    .example-content-main {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; }
    @media (min-width: 576px) {
        .example-content-main {
        flex: 0 0 50%;
        max-width: 50%; } }
    @media (min-width: 992px) {
        .example-content-main {
        flex: 0 0 66.66667%;
        max-width: 66.66667%; } }

    .example-content-secondary {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; }
    @media (min-width: 576px) {
        .example-content-secondary {
        flex: 0 0 50%;
        max-width: 50%; } }
    @media (min-width: 992px) {
        .example-content-secondary {
        flex: 0 0 33.33333%;
        max-width: 33.33333%; } }

    .table-white-space th, .table-white-space td {
    white-space: nowrap; }

    .table-borderless td, .table-borderless th {
    border: none; }

    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e3ebf3;
    border-top: 1px solid #e3ebf3; }

    .table-bordered th, .table-bordered td {
    border: 1px solid #e3ebf3; }

    .table th, .table td {
    border-bottom: 1px solid #e3ebf3; }

    .table-bordered {
    border: 1px solid #e3ebf3; }

    .table-inverse {
    color: #eceeef;
    background-color: #00A5A8; }

    .table.table-column th, .table.table-column td {
    border: none;
    border-left: 1px solid #e3ebf3; }

    .table.table-column th:first-child, .table.table-column td:first-child {
    border-left: none; }

    .table th, .table td {
    padding: 0.75rem 2rem; }

    .table.table-xl th, .table.table-xl td {
    padding: 1.25rem 2rem; }

    .table.table-lg th, .table.table-lg td {
    padding: 0.9rem 2rem; }

    .table.table-de th, .table.table-de td {
    padding: 0.75rem 2rem; }

    .table.table-sm th, .table.table-sm td {
    padding: 0.6rem 2rem; }

    .table.table-xs th, .table.table-xs td {
    padding: 0.4rem 2rem; }

    /*
    * Table sizing
    */
    .table-borderless thead th {
    border-top: 1px solid #e3ebf3; }

    .table-borderless > tbody > tr > td, .table-borderless > tbody > tr > th {
    border: 0; }

    .table > thead > tr.border-solid > th {
    border-bottom-width: 2px; }

    .table > thead > tr.border-double > th {
    border-bottom-width: 4px;
    border-bottom-style: double; }

    .table > tbody > tr.border-dashed > td {
    border-top-style: dashed; }

    .border-custom-color td {
    border-top: inherit;
    border-bottom: inherit; }

    form {
    /* .form-body{
            overflow: hidden;
        } */ }
    form label {
        color: #2b335e; }
    form .form-group {
        margin-bottom: 1.5rem; }
    form .form-control {
        border: 1px solid #cacfe7;
        color: #3b4781; }
        form .form-control::-webkit-input-placeholder {
        color: #aeb5da; }
        form .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: #aeb5da; }
        form .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: #aeb5da; }
        form .form-control:-ms-input-placeholder {
        color: #aeb5da; }
    form .form-section {
        color: #2c343b;
        line-height: 3rem;
        margin-bottom: 20px;
        border-bottom: 1px solid #E4E5EC; }
        form .form-section i {
        font-size: 20px;
        margin-left: 5px;
        margin-right: 10px; }
    form .form-actions {
        border-top: 1px solid #d1d5ea;
        padding: 20px 0;
        margin-top: 20px; }
        form .form-actions.filled {
        background-color: #f4f5fa; }
        form .form-actions.center {
        text-align: center; }
        form .form-actions.right {
        text-align: right; }
        form .form-actions.top {
        border-top: 0;
        border-bottom: 1px solid #d1d5ea;
        margin-top: 0;
        margin-bottom: 20px; }
        @media (max-width: 767.98px) {
        form .form-actions .buttons-group {
            float: left !important;
            margin-bottom: 10px; } }
    @media (min-width: 576px) {
        form.form-horizontal .form-group .label-control {
        text-align: right; } }
    form.row-separator .form-group {
        margin: 0;
        border-bottom: 1px solid #e9ebf5; }
        form.row-separator .form-group .label-control {
        padding-top: 1.5rem; }
        form.row-separator .form-group > div {
        padding: 1.2rem;
        padding-right: 0; }
        form.row-separator .form-group.last {
        border-bottom: 0; }
    form.form-bordered .form-group {
        margin: 0;
        border-bottom: 1px solid #e9ebf5; }
        form.form-bordered .form-group .label-control {
        padding-top: 1.5rem; }
        form.form-bordered .form-group > div {
        padding: 1.2rem;
        padding-right: 0;
        border-left: 1px solid #e9ebf5; }
        form.form-bordered .form-group.last {
        border-bottom: 0; }
    form.striped-rows .form-group {
        margin: 0; }
        form.striped-rows .form-group .label-control {
        padding-top: 1.5rem; }
        form.striped-rows .form-group > div {
        padding: 1.2rem;
        padding-right: 0; }
        form.striped-rows .form-group:nth-child(even) {
        background-color: #f4f5fa; }
    form.striped-labels .form-group {
        margin: 0; }
        form.striped-labels .form-group .label-control {
        padding-top: 1.5rem; }
        form.striped-labels .form-group > div {
        padding: 1.2rem;
        padding-right: 0;
        background-color: white; }
        form.striped-labels .form-group:nth-child(even) {
        background-color: #f4f5fa; }
    form .custom-control-indicator {
        width: 1.1rem;
        height: 1.075rem;
        line-height: 1.05rem;
        top: 0.15rem;
        left: 0; }
        form .custom-control-indicator + .custom-control-description {
        margin-left: 1rem; }

    .form-control.tagging {
    height: auto;
    padding: 0px 5px 5px; }

    select.form-control {
    padding-top: 0;
    padding-bottom: 0; }

    /*Bootstrap Enhance */
    .custom-checkbox {
    margin-bottom: 0; }
    .custom-checkbox .custom-control-input:focus {
        outline: -webkit-focus-ring-color auto 5px; }

    .custom-checkbox input:disabled:checked ~ .custom-control-indicator {
    opacity: 0.5; }

    .custom-checkbox input:disabled ~ .custom-control-indicator {
    cursor: not-allowed; }

    .custom-control-input > input:focus ~ .custom-control-indicator {
    padding: 0.51rem; }

    .custom-control-indicator {
    width: 1.1rem;
    height: 1.075rem;
    line-height: 1.05rem;
    top: 0.15rem; }
    .custom-control-indicator + .custom-control-description {
        margin-left: 1rem; }

    .form-control:disabled, .form-control[readonly] {
    background-color: #ECEFF1; }

    .input-group-addon {
    background-color: #ECEFF1;
    border-color: #BABFC7; }

    .input-group-text {
    padding: 0.4rem 1rem; }

    .custom-control {
    min-height: auto; }

    .checkbox-input-group .input-group .skin.skin-square, .checkbox-input-group .input-group .skin-polaris.skin, .radio-input-group .input-group .skin.skin-square, .radio-input-group .input-group .skin-polaris.skin {
    height: 16px;
    width: 22px; }
    .checkbox-input-group .input-group .skin.skin-square .icheckbox_square-red, .checkbox-input-group .input-group .skin-polaris.skin .icheckbox_square-red, .radio-input-group .input-group .skin.skin-square .icheckbox_square-red, .radio-input-group .input-group .skin-polaris.skin .icheckbox_square-red {
        top: -3px; }
    .checkbox-input-group .input-group .skin.skin-square .iradio_polaris, .checkbox-input-group .input-group .skin-polaris.skin .iradio_polaris, .radio-input-group .input-group .skin.skin-square .iradio_polaris, .radio-input-group .input-group .skin-polaris.skin .iradio_polaris {
        top: -7px; }

    .switchery-input-group .input-group .input-group-text {
    padding: 0.2rem 1rem; }

    .custom-control-label::before {
    width: 1.1rem;
    height: 1.1rem; }

    .custom-control-label::after {
    width: 1.1rem; }

    .btn.btn-square {
    border-radius: 0; }

    .btn.btn-round {
    border-radius: 2rem; }

    .btn:focus, .btn.focus, .btn:active, .btn.active {
    outline: none;
    box-shadow: none !important; }

    .btn.btn-icon i {
    font-size: 1.1rem; }

    .btn.btn-icon.btn-pure {
    background-color: transparent;
    border-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none; }
    .btn.btn-icon.btn-pure i {
        font-size: 1.25rem; }

    .btn.btn-social {
    padding: 0.7rem 0.75rem 0.85rem 3.75rem; }

    .btn.btn-outline-white:hover {
    color: #6b6f82 !important; }

    .btn-toolbar > i {
    font-size: 1.5rem !important; }

    .btn-min-width {
    min-width: 8.5rem; }

    .color-box {
    width: 100%;
    height: 2.75rem;
    border-radius: 0.25rem; }

    .btn-float {
    padding: 15px;
    white-space: normal;
    -webkit-box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); }
    .btn-float.btn-link {
        padding: 10px; }
    .btn-float i {
        display: block;
        margin: 0;
        top: 0; }
    .btn-float.btn-float-lg i,
    .btn-float.btn-float-lg span {
        font-size: 2rem; }
    .btn-float.btn-float-lg i + span {
        font-size: 1.1rem; }
    .btn-float > i + span {
        display: block;
        padding-top: 10px;
        margin-bottom: -6px; }

    .collapse-icon .card-header {
    position: relative; }
    .collapse-icon .card-header[class*=bg-]:after, .collapse-icon .card-header[class*=bg-]:before {
        color: #fff; }

    .collapse-icon [data-toggle="collapse"]:after {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e897";
    transition: all 300ms linear 0s; }

    .collapse-icon [data-toggle="collapse"]:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e8b1";
    transition: all 300ms linear 0s; }

    .collapse-icon.left a {
    padding-left: 45px; }

    .collapse-icon.left [data-toggle="collapse"]:before, .collapse-icon.left [data-toggle="collapse"]:after {
    left: 20px;
    right: auto; }

    .collapse-icon [aria-expanded="true"]:before {
    opacity: 0; }

    .collapse-icon [aria-expanded="false"]:after {
    opacity: 0; }

    .collapse-icon.accordion-icon-rotate [aria-expanded="true"]:before {
    transform: rotate(180deg); }

    .collapse-icon.accordion-icon-rotate [aria-expanded="false"]:after {
    transform: rotate(-180deg); }

    .header-navbar .navbar-container .mega-dropdown-menu .collapse-icon [data-toggle="collapse"]:after {
    margin-top: -16px; }

    .header-navbar .navbar-container .mega-dropdown-menu .collapse-icon [data-toggle="collapse"]:before {
    margin-top: -16px; }

    .dropdown.dropdown-demo {
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem; }

    .dropdown .dropdown-menu {
    border: 1px solid #e4e5ec;
    border-radius: 0.35rem;
    transform-origin: top;
    animation-fill-mode: forwards;
    transform: scale(1, 0);
    transition: all 0.2s linear;
    margin: -0.1rem 0 0;
    box-shadow: 0px 5px 75px 2px rgba(64, 70, 74, 0.2);
    min-width: 11rem;
    animation: 0.25s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadein; }
    .dropdown .dropdown-menu .dropdown-header {
        padding: 10px 20px;
        margin-top: 10px;
        text-transform: uppercase;
        color: #626e82; }
    .dropdown .dropdown-menu .dropdown-item {
        padding: 10px 17px;
        width: 100%; }
        .dropdown .dropdown-menu .dropdown-item:active a, .dropdown .dropdown-menu .dropdown-item.active a {
        color: #fff; }

    .dropdown .dropdown-divider {
    border: 1px solid #e4e5ec; }

    .dropdown i {
    margin-right: 0.5rem; }

    .show > .dropdown-menu {
    transform: scale(1, 1);
    opacity: 1;
    display: block; }

    .dropdown-toggle::after {
    font-size: 0.8rem;
    font-family: "LineAwesome";
    content: "\f110" !important;
    border: none !important;
    position: relative;
    top: 0px;
    right: 0px;
    padding: 0 2px 0 6px;
    margin: 0 0.3em 0 0;
    vertical-align: 0; }

    .dropdown-toggle.nav-hide-arrow::after {
    display: none; }

    .dropdown-toggle:focus {
    outline: 0; }

    .navbar-horizontal .dropdown-menu .dropdown-submenu > a:after,
    .navbar-horizontal .dropdown-menu .dropdown-submenu > button:after {
    font-size: 0.85rem;
    right: 10px;
    top: 17px !important; }

    .navbar-horizontal .dropdown-toggle.nav-link:after {
    top: -3px !important; }

    .navbar-horizontal .dropdown-menu .dropdown-submenu .dropdown-submenu > a:after {
    top: 11px !important; }

    .material-horizontal-layout .navbar-horizontal .dropdown-menu .dropdown-submenu > a:after,
    .material-horizontal-layout .navbar-horizontal .dropdown-menu .dropdown-submenu > button:after {
    top: 15px !important; }

    .material-horizontal-layout .navbar-horizontal .dropdown-menu .dropdown-submenu .dropdown-submenu > a:after {
    top: 15px !important; }

    .dropdown-menu-right {
    right: 0; }

    .dropdown-menu {
    box-shadow: none; }
    .dropdown-menu .dropdown-submenu {
        position: relative; }
        .dropdown-menu .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px; }
        .dropdown-menu .dropdown-submenu > .dropdown-menu::before {
            box-shadow: none; }
        .dropdown-menu .dropdown-submenu > .dropdown-menu.open-left {
            left: auto;
            right: 100%; }
        .dropdown-menu .dropdown-submenu > a:after,
        .dropdown-menu .dropdown-submenu > button:after {
        font-family: "LineAwesome";
        content: "\f112" !important;
        right: 15px;
        font-size: 1rem;
        float: right;
        border: none;
        position: absolute; }
        .dropdown-menu .dropdown-submenu :hover > a:after,
        .dropdown-menu .dropdown-submenu :hover > button:after {
        border-left-color: #555; }
        .dropdown-menu .dropdown-submenu .pull-left {
        float: none; }
        .dropdown-menu .dropdown-submenu .pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px; }

    .dropdown-header {
    text-transform: uppercase; }
    .dropdown-header.highlight {
        color: #2b2d2f;
        text-decoration: none;
        background-color: #f5f5f5; }

    .btn-secondary ~ .dropdown-menu .dropdown-item.active {
    background-color: #cccccc; }

    .btn-primary ~ .dropdown-menu .dropdown-item.active {
    background-color: #666ee8; }

    .btn-success ~ .dropdown-menu .dropdown-item.active {
    background-color: #28d094; }

    .btn-danger ~ .dropdown-menu .dropdown-item.active {
    background-color: #ff4961; }

    .btn-info ~ .dropdown-menu .dropdown-item.active {
    background-color: #1e9ff2; }

    .btn-warning ~ .dropdown-menu .dropdown-item.active {
    background-color: #ff9149; }

    .dropdown-menu.arrow {
    margin-top: 12px; }
    .dropdown-menu.arrow:after, .dropdown-menu.arrow:before {
        position: absolute;
        left: 10px;
        display: inline-block;
        width: 0;
        height: 0;
        content: "";
        border: 7px solid transparent;
        border-top-width: 0; }
    .dropdown-menu.arrow:before {
        top: -7px;
        border-bottom-color: #b3b3b3; }
    .dropdown-menu.arrow:after {
        top: -6px;
        border-bottom-color: #fff; }

    .dropdown-menu .arrow-left {
    margin-left: 7px !important; }
    .dropdown-menu .arrow-left:after, .dropdown-menu .arrow-left:before {
        position: absolute;
        top: 10px;
        display: inline-block;
        width: 0;
        height: 0;
        content: "";
        border: 7px solid transparent;
        border-left-width: 0; }
    .dropdown-menu .arrow-left:before {
        left: -8px;
        border-right-color: #b3b3b3; }
    .dropdown-menu .arrow-left:after {
        left: -7px;
        border-right-color: #fff; }

    .dropdown-menu .arrow-right {
    margin-right: 7px !important; }
    .dropdown-menu .arrow-right:after, .dropdown-menu .arrow-right:before {
        position: absolute;
        top: 10px;
        display: inline-block;
        width: 0;
        height: 0;
        content: "";
        border: 7px solid transparent;
        border-right-width: 0; }
    .dropdown-menu .arrow-right:before {
        right: -7px;
        border-left-color: #b3b3b3; }
    .dropdown-menu .arrow-right:after {
        right: -6px;
        border-left-color: #fff; }

    .dropup .dropdown-toggle::after {
    content: "\f113" !important; }

    .dropup .dropdown-menu {
    top: auto; }
    .dropup .dropdown-menu.arrow {
        margin-bottom: 12px; }
        .dropup .dropdown-menu.arrow:after, .dropup .dropdown-menu.arrow:before {
        top: auto;
        border-top-width: 7px;
        border-bottom-width: 0; }
        .dropup .dropdown-menu.arrow:before {
        bottom: -8px;
        border-top-color: #b3b3b3; }
        .dropup .dropdown-menu.arrow:after {
        bottom: -6px;
        border-top-color: #fff; }

    .dropup .dropdown-submenu .dropdown-menu {
    bottom: auto;
    top: 0; }

    .dropdown-menu-xl a,
    .dropdown-menu-xl button {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
    font-size: 1.2rem;
    line-height: 1.43; }

    .dropdown-menu-lg a,
    .dropdown-menu-lg button {
    padding-top: 6px !important;
    padding-bottom: 6px !important; }

    .dropdown-menu-sm a,
    .dropdown-menu-sm button {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
    font-size: 0.86rem;
    line-height: 1.67; }

    .dropdown-item.buttons-columnVisibility.active {
    color: #000; }

    .selectBox-arrow-light .selectboxit-default-arrow {
    border-top-color: #fff; }

    /* ===============================================================================================
        File Name: navbar.scss
        Description: Contain header navigation bar, vertical main navigation bar and
        horiznotal main navigation bar related SCSS.
        ----------------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ================================================================================================*/
    .navbar-dark .hamburger-inner,
    .navbar-dark .hamburger-inner::before,
    .navbar-dark .hamburger-inner::after {
    background-color: #fff; }

    .header-navbar {
    padding: 0px;
    min-height: 5rem;
    font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
    transition: 300ms ease all;
    /* For sm screen*/ }
    .header-navbar.navbar-static-top {
        z-index: 1038; }
    .header-navbar .navbar-wrapper {
        width: 100%; }
    .header-navbar.navbar-border {
        border-bottom: 1px solid #e4e7ed; }
    .header-navbar.navbar-dark.navbar-border {
        border-bottom: 1px solid #8596b5; }
    .header-navbar.navbar-shadow {
        box-shadow: 0px 2px 30px 2px rgba(0, 0, 0, 0.1); }
    .header-navbar.navbar-brand-center .navbar-header {
        width: 192px;
        position: absolute;
        top: 0;
        left: 50%;
        padding: 0;
        margin: 0;
        transform: translate(-50%, 0);
        z-index: 999; }
        .header-navbar.navbar-brand-center .navbar-header .brand-text {
        visibility: visible !important; }
    .header-navbar .navbar-collapse-brand-center.navbar-collapse.show {
        display: flex; }
    .header-navbar .navbar-header {
        height: 100%;
        width: 260px;
        height: 5.15rem;
        float: left;
        position: relative;
        padding: 0rem 0.85rem 0 1.2rem;
        transition: 300ms ease all; }
        .header-navbar .navbar-header .navbar-brand {
        padding: 18px 0px;
        margin-right: 0; }
        .header-navbar .navbar-header .navbar-brand .brand-logo {
            width: 36px; }
        .header-navbar .navbar-header .navbar-brand .brand-text {
            display: inline;
            padding-left: 6px;
            font-weight: 500;
            vertical-align: middle; }
    .header-navbar .navbar-container {
        padding: 0rem 18px;
        height: 5rem;
        transition: 300ms ease all;
        background: inherit; }
        .header-navbar .navbar-container ul.nav li > a.nav-link {
        padding: 1.8rem 1rem;
        font-size: 1.15rem; }
        .header-navbar .navbar-container ul.nav li > a.nav-link i.flag-icon {
            margin-right: 0.5rem; }
        .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
        padding: 1.2rem 1rem;
        line-height: 23px; }
        .header-navbar .navbar-container ul.nav li a.dropdown-user-link .user-name {
            display: inline-block;
            margin-bottom: 0.4rem;
            margin-left: 0.2rem; }
        .header-navbar .navbar-container ul.nav li a.menu-toggle {
        padding: 1.7rem 1rem 1.6rem 1rem; }
        .header-navbar .navbar-container ul.nav li a.menu-toggle i {
            font-size: 1.6rem; }
        .header-navbar .navbar-container ul.nav li a.nav-link-label {
        padding: 1.7rem 1rem 1.6rem 1rem;
        height: 100%; }
        .header-navbar .navbar-container ul.nav li a.dropdown-user-link .avatar {
        margin-right: 0.5rem;
        width: 36px; }
        .header-navbar .navbar-container ul.nav li a.nav-link-search,
        .header-navbar .navbar-container ul.nav li a.nav-link-expand {
        padding: 1.7rem 1rem 1.7rem 1rem; }
        .header-navbar .navbar-container ul.nav li div.input-group {
        padding: 0.7rem 1rem; }
        .header-navbar .navbar-container ul.nav li i.ficon {
        font-size: 1.5rem; }
        .header-navbar .navbar-container ul.nav li .media-list {
        max-height: 18.2rem;
        top: -20px; }
        .header-navbar .navbar-container ul.nav li .scrollable-container {
        position: relative; }
        .header-navbar .navbar-container .dropdown-menu-media {
        width: 24rem; }
        .header-navbar .navbar-container .dropdown-menu-media .media-list .media {
            padding: 1rem;
            border: none;
            border-bottom: 1px solid #E4E5EC; }
        .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-header {
            border-bottom: 1px solid #E4E5EC; }
        .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-footer {
            position: relative;
            top: -20px; }
            .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-footer a {
            padding: 0.3rem;
            border-top: 1px solid #E4E5EC;
            margin-bottom: -20px; }
    .header-navbar.navbar-without-menu .navbar-container {
        margin-left: 0; }
    .header-navbar .nav-item + .nav-item {
        margin-left: 0rem; }
    .header-navbar.navbar-without-dd-arrow .nav-link.dropdown-toggle:after {
        display: none !important; }
    @media (max-width: 767.98px) {
        .header-navbar .navbar-header {
        width: 100% !important;
        padding: 0.5rem 1rem;
        position: relative; }
        .header-navbar .navbar-header .menu-toggle {
            top: 2px;
            position: relative; }
        .header-navbar .navbar-header .open-navbar-container i {
            font-size: 1.8rem; }
        .header-navbar .navbar-header .navbar-brand {
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, 0); }
        .header-navbar.navbar-with-menu .navbar-container {
        width: 100%;
        display: table;
        background: #fff;
        padding: 0rem 1rem;
        margin: 0;
        height: auto; } }

    /* Modern menu For md screen*/
    @media (max-width: 991.98px) {
    [data-menu="vertical-menu-modern"] .header-navbar .navbar-header {
        width: 100% !important;
        padding: 0.5rem 1rem;
        position: relative; }
        [data-menu="vertical-menu-modern"] .header-navbar .navbar-header .menu-toggle {
        top: 2px;
        position: relative; }
        [data-menu="vertical-menu-modern"] .header-navbar .navbar-header .open-navbar-container i {
        font-size: 1.8rem; }
        [data-menu="vertical-menu-modern"] .header-navbar .navbar-header .navbar-brand {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0); }
    [data-menu="vertical-menu-modern"] .header-navbar.navbar-with-menu .navbar-container {
        width: 100%;
        display: table;
        background: #fff;
        padding: 0rem 1rem;
        margin: 0;
        height: auto; }
    [data-menu="vertical-menu-modern"] .navbar-dark .navbar-header .navbar-nav .nav-link,
    [data-menu="vertical-menu-modern"] .navbar-semi-dark .navbar-header .navbar-nav .nav-link {
        color: #fff; }
    [data-menu="vertical-menu-modern"] .navbar-dark .navbar-container .navbar-nav .nav-link,
    [data-menu="vertical-menu-modern"] .navbar-semi-dark .navbar-container .navbar-nav .nav-link {
        color: #2c343b; }
    [data-menu="vertical-menu-modern"] .navbar-light .navbar-header .navbar-nav .nav-link {
        color: #2c343b; }
    [data-menu="vertical-menu-modern"] .navbar-header .navbar-nav .open-navbar-container,
    [data-menu="vertical-menu-modern"] .navbar-header .navbar-nav .nav-menu-main {
        padding: 1rem; } }

    .navbar-light {
    background: #fff; }
    .navbar-light.navbar-horizontal {
        background: #fff; }
    .navbar-light .navbar-nav li {
        line-height: 1; }
    .navbar-light .navbar-nav .active.nav-link {
        background-color: rgba(0, 0, 0, 0.03); }
    .navbar-light .navbar-nav .disabled.nav-link {
        color: #6b6f82; }

    .navbar-dark {
    background: #2c343b; }
    .navbar-dark .navbar-brand {
        color: #fff !important; }
        .navbar-dark .navbar-brand .brand-text {
        color: #fff !important; }
    .navbar-dark.navbar-horizontal {
        background: #2c343b; }
    .navbar-dark .nav-search .btn-secondary {
        color: #fff;
        background: #2c343b; }
    .navbar-dark .nav-search .form-control {
        color: #fff; }
    .navbar-dark .navbar-nav li {
        line-height: 1; }
    .navbar-dark .navbar-nav .active.nav-link {
        background-color: rgba(255, 255, 255, 0.05); }
    .navbar-dark .navbar-nav .disabled.nav-link {
        color: #98a4b8; }

    .navbar-semi-dark {
    background: #fff; }
    .navbar-semi-dark .navbar-header {
        background: #2c343b; }
        .navbar-semi-dark .navbar-header .brand-text {
        color: #fff; }
    .navbar-semi-dark .navbar-nav li {
        line-height: 1; }
    .navbar-semi-dark .navbar-nav .nav-link {
        color: #6b6f82; }
    .navbar-semi-dark .navbar-nav .active.nav-link {
        background-color: rgba(0, 0, 0, 0.03); }
    .navbar-semi-dark .navbar-nav .disabled.nav-link {
        color: #6b6f82; }

    .navbar-semi-light {
    background: #6b6f82; }
    .navbar-semi-light .navbar-header {
        background: #fff; }
        .navbar-semi-light .navbar-header .brand-text {
        color: #464855; }
    .navbar-semi-light .navbar-nav li {
        line-height: 1; }
    .navbar-semi-light .navbar-nav .nav-link {
        color: #fff; }
    .navbar-semi-light .navbar-nav .active.nav-link {
        background-color: rgba(0, 0, 0, 0.03); }
    .navbar-semi-light .navbar-nav .disabled.nav-link {
        color: #6b6f82; }

    .mega-dropdown.show {
    position: static !important; }
    .mega-dropdown.show .dropdown-menu {
        display: flex; }

    .bg-mega {
    background: linear-gradient(to right, #2b32b2, #1488cc);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    border-radius: 0.5rem; }

    .navigation-main .mega-dropdown-menu,
    .navbar-nav .mega-dropdown-menu {
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    width: calc(100% - 50px);
    /* fallback if needed */
    margin: 0px 25px;
    box-shadow: none;
    box-shadow: 0px 5px 75px 2px rgba(64, 70, 74, 0.2);
    z-index: 9999; }
    .navigation-main .mega-dropdown-menu ul,
    .navbar-nav .mega-dropdown-menu ul {
        padding: 0;
        margin: 0; }
        .navigation-main .mega-dropdown-menu ul li,
        .navbar-nav .mega-dropdown-menu ul li {
        list-style: none; }
        .navigation-main .mega-dropdown-menu ul li a,
        .navbar-nav .mega-dropdown-menu ul li a {
            display: block;
            color: #464855; }
            .navigation-main .mega-dropdown-menu ul li a.dropdown-item:active,
            .navbar-nav .mega-dropdown-menu ul li a.dropdown-item:active {
            color: #fff; }
            .navigation-main .mega-dropdown-menu ul li a .children-in,
            .navbar-nav .mega-dropdown-menu ul li a .children-in {
            float: right; }
            .navigation-main .mega-dropdown-menu ul li a:hover,
            .navbar-nav .mega-dropdown-menu ul li a:hover {
            text-decoration: none;
            color: #1e9ff2; }
            .navigation-main .mega-dropdown-menu ul li a:focus,
            .navbar-nav .mega-dropdown-menu ul li a:focus {
            text-decoration: none;
            color: #6b6f82; }
        .navigation-main .mega-dropdown-menu ul a.dropdown-item,
        .navbar-nav .mega-dropdown-menu ul a.dropdown-item {
        padding: 10px; }
    .navigation-main .mega-dropdown-menu p.accordion-text,
    .navbar-nav .mega-dropdown-menu p.accordion-text {
        line-height: 1.45; }
    .navigation-main .mega-dropdown-menu .dropdown-menu-header,
    .navbar-nav .mega-dropdown-menu .dropdown-menu-header {
        padding: 0.5rem 0;
        border-bottom: 1px solid #E4E5EC; }
    .navigation-main .mega-dropdown-menu h6 i.la,
    .navbar-nav .mega-dropdown-menu h6 i.la {
        font-size: 1.1rem; }

    .horizontal-top-icon-menu .mega-dropdown-menu {
    margin: 0px 25px !important; }

    @media (min-width: 576px) {
    .container .mega-dropdown-menu {
        max-width: 540px;
        margin: 0 calc((100% - 540px)/2); } }

    @media (min-width: 768px) {
    .container .mega-dropdown-menu {
        max-width: 720px;
        margin: 0 calc((100% - 720px)/2); } }

    @media (min-width: 992px) {
    .container .mega-dropdown-menu {
        max-width: 960px;
        margin: 0 calc((100% - 960px)/2); } }

    @media (min-width: 1200px) {
    .container .mega-dropdown-menu {
        max-width: 1140px;
        margin: 0 calc((100% - 1140px)/2); } }

    @-moz-document url-prefix() {
    ul li a .children-in {
        position: relative;
        right: 3px;
        top: -14px; } }

    .menu-list {
    list-style: none;
    padding: 0;
    overflow: hidden; }

    .menu-panel {
    padding: 0; }

    .sliding-menu {
    overflow: hidden;
    position: relative; }
    .sliding-menu ul {
        float: left;
        margin: 0;
        padding: 0; }
        .sliding-menu ul li {
        list-style: none;
        margin: 0; }

    .navbar-menu-icon {
    width: 24px;
    margin: 16px 2px !important;
    position: relative;
    margin: 0px auto;
    transform: rotate(0deg);
    transition: 0.5s ease-in-out;
    cursor: pointer; }

    .navbar-menu-icon span {
    display: block;
    position: absolute;
    height: 2px;
    width: 100%;
    background: #6b6f82;
    border-radius: 9px;
    opacity: 1;
    left: 0;
    transform: rotate(0deg);
    transition: 0.25s ease-in-out; }

    .navbar-menu-icon span:nth-child(1) {
    top: 0px; }

    .navbar-menu-icon span:nth-child(2) {
    top: 10px; }

    .navbar-menu-icon span:nth-child(3) {
    top: 20px; }

    .navbar-menu-icon.show span:nth-child(1) {
    top: 10px;
    transform: rotate(135deg); }

    .navbar-menu-icon.show span:nth-child(2) {
    opacity: 0;
    left: -60px; }

    .navbar-menu-icon.show span:nth-child(3) {
    top: 10px;
    transform: rotate(-135deg); }

    @media (max-width: 767.98px) {
    .header-navbar #navbar-mobile .search-input.open .input {
        width: 100%; }
        .header-navbar #navbar-mobile .search-input.open .input::placeholder {
        color: #babfc7; }
    .header-navbar .navbar-nav .show {
        position: static; }
    .header-navbar .navbar-nav .open-navbar-container {
        padding-top: 1.1rem; }
    .header-navbar .navbar-container .show .dropdown-menu {
        right: 1rem;
        left: 1rem !important;
        float: none;
        width: auto;
        margin-top: 0;
        max-height: 400px;
        overflow-x: hidden;
        overflow-y: hidden; }
    .header-navbar .navbar-container ul.nav li.nav-item i {
        margin-right: 0.2rem; }
    .header-navbar .navbar-container ul.nav li > a.nav-link {
        padding: 1.5rem 0.4rem; }
        .header-navbar .navbar-container ul.nav li > a.nav-link i.flag-icon {
        margin-right: 0.2rem; }
    .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
        padding: 0.8rem 0.6rem !important; }
    .header-navbar .navbar-container ul.nav li a.nav-link-label {
        padding: 1.4rem 0.4rem; }
        .header-navbar .navbar-container ul.nav li a.nav-link-label i.ft-bell {
        position: relative;
        left: 8px; }
    .header-navbar .navbar-container ul.nav li a.nav-link-search,
    .header-navbar .navbar-container ul.nav li a.nav-link-expand {
        padding: 1.4rem 1rem 1rem 1rem; }
    .header-navbar .navbar-container ul.nav li .dropdown-toggle::after {
        margin-right: 0;
        margin-left: -2px; }
    .navbar-dark .hamburger-inner,
    .navbar-dark .hamburger-inner::before,
    .navbar-dark .hamburger-inner::after,
    .navbar-semi-dark .hamburger-inner,
    .navbar-semi-dark .hamburger-inner::before,
    .navbar-semi-dark .hamburger-inner::after {
        background-color: #fff; }
    .navbar-dark .navbar-header .navbar-nav .nav-link,
    .navbar-semi-dark .navbar-header .navbar-nav .nav-link {
        color: #fff; }
    .navbar-dark .navbar-container .navbar-nav .nav-link,
    .navbar-semi-dark .navbar-container .navbar-nav .nav-link {
        color: #6b6f82; }
    .navbar-light .navbar-header .navbar-nav .nav-link,
    .navbar-semi-light .navbar-header .navbar-nav .nav-link {
        color: #2c343b; }
    .navbar-light .navbar-container .navbar-nav .nav-link,
    .navbar-semi-light .navbar-container .navbar-nav .nav-link {
        color: #6b6f82; } }

    .headroom {
    will-change: transform;
    transition: transform 200ms linear; }

    .headroom--pinned-top {
    transform: translateY(0%); }

    .headroom--unpinned-top {
    transform: translateY(-100%); }

    .headroom--pinned-bottom {
    transform: translateY(0%); }

    .headroom--unpinned-bottom {
    transform: translateY(100%); }

    @media (max-width: 1199.98px) {
    .header-navbar .navbar-container ul.nav li > a.nav-link i.flag-icon {
        margin-right: 0.2rem; }
    .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
        padding: 1.2rem 0.6rem; }
    .header-navbar .navbar-container ul.nav li .dropdown-toggle::after {
        margin-right: 0;
        margin-left: -2px; }
    .header-navbar .navbar-container ul.nav li .selected-language {
        display: none; }
    .header-navbar .navbar-container ul.nav li a.dropdown-user-link .user-name {
        display: none; } }

    @media (max-width: 767px) {
    #navbar-mobile.navbar-collapse .navbar-nav {
        margin: 0;
        flex-flow: row wrap; }
        #navbar-mobile.navbar-collapse .navbar-nav .dropdown-menu {
        position: absolute; }
        #navbar-mobile.navbar-collapse .navbar-nav .nav-item {
        float: left; } }

    @media (max-width: 991.98px) {
    #navbar-mobile.navbar-collapse .navbar-nav {
        margin: 0;
        flex-flow: row wrap; }
        #navbar-mobile.navbar-collapse .navbar-nav .dropdown-menu {
        position: absolute; }
        #navbar-mobile.navbar-collapse .navbar-nav .nav-item {
        float: left; } }

    /* ----------- iPhone 5, 5S  iPhone 6----------- */
    /* Landscape */
    @media only screen and (min-device-width: 26.78em) and (max-device-width: 47.64em) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
    .header-navbar .navbar-container .show .dropdown-menu {
        max-height: 180px; } }

    /* ----------- iPhone 6+ ----------- */
    /* Landscape */
    @media only screen and (min-device-width: 29.57em) and (max-device-width: 52.57em) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {
    .header-navbar .navbar-container .show .dropdown-menu {
        max-height: 280px; } }

    @media screen and (max-width: 1024px) {
    #navbar-demo .header-navbar .navbar-header {
        width: auto; }
        #navbar-demo .header-navbar .navbar-header .menu-toggle.ft-menu {
        position: relative; }
        #navbar-demo .header-navbar .navbar-header .nav-link.open-navbar-container .la.la-ellipsis-v {
        position: relative; }
    #navbar-demo .navbar-container {
        margin-left: auto; }
        #navbar-demo .navbar-container .navbar-btn .nav-link.btn {
        padding: 0.5rem 1rem; }
    .internationalization .card .card-body .header-navbar .navbar-wrapper .navbar-header {
        width: auto; }
        .internationalization .card .card-body .header-navbar .navbar-wrapper .navbar-header .menu-toggle.ft-menu {
        position: relative; }
        .internationalization .card .card-body .header-navbar .navbar-wrapper .navbar-header .nav-link.open-navbar-container .la.la-ellipsis-v {
        position: relative;
        top: 0.5rem; } }

    @media screen and (max-width: 768px) {
    #navbar-demo .header-navbar.navbar-semi-dark .navbar-header,
    #navbar-demo .header-navbar.navbar-brand-center .navbar-header {
        width: 60px; }
    #navbar-demo .navbar-container .nav-form-inline .input-group .form-control {
        width: 95px; } }

    @media screen and (max-width: 540px) {
    #navbar-demo .navbar-container #navbar-mobile5.navbar-badges .badge-up {
        position: absolute;
        top: 1px;
        right: 16rem; }
    #navbar-demo .navbar-container .add-on-right {
        margin-top: 5rem !important;
        margin-bottom: 1rem; }
    #navbar-demo .navbar-container .nav-form-select {
        margin-bottom: 1rem;
        float: left !important; }
    #navbar-demo .navbar-container .nav-radio label,
    #navbar-demo .navbar-container .nav-checkbox label {
        color: #000 !important; }
    #navbar-demo .navbar-container .nav-checkbox {
        float: left !important; }
    .internationalization .card .card-body .header-navbar .navbar-wrapper .navbar-header {
        width: 100%; }
        .internationalization .card .card-body .header-navbar .navbar-wrapper .navbar-header .menu-toggle.ft-menu {
        position: relative;
        top: 0.6rem !important; }
        .internationalization .card .card-body .header-navbar .navbar-wrapper .navbar-header .nav-link.open-navbar-container .la.la-ellipsis-v {
        position: relative; } }

    @media screen and (max-width: 576px) {
    .header-navbar.navbar-expand-sm.navbar-with-menu .navbar-nav {
        flex-direction: row; } }

    body.vertical-layout.menu-open .main-menu .navigation .navigation-header .la-ellipsis-h,
    body.vertical-layout.menu-open .main-menu .navigation .navigation-header .nav-menu-icon {
    display: none; }

    .card-group,
    .card-deck {
    margin-bottom: 0.75rem; }

    .card {
    margin-bottom: 1.875rem;
    border: none;
    box-shadow: 0 2px 18px 1px rgba(49, 53, 72, 0.1);
    border-radius: .45rem; }
    .card .card {
        box-shadow: none !important; }
    .card .card-title {
        font-weight: 500;
        letter-spacing: 0.05rem;
        font-size: 1.12rem; }
    .card .card-bordered {
        border: 1px solid rgba(0, 0, 0, 0.06); }
    .card.card-fullscreen {
        display: block;
        z-index: 9999;
        position: fixed;
        width: 100% !important;
        height: 100% !important;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        overflow: auto; }
    .card .card-body[class*='border-bottom-'] {
        border-bottom-width: 2px !important; }
    .card .card-img-overlay.bg-overlay {
        background: rgba(0, 0, 0, 0.45); }
    .card .card-img-overlay .text-muted {
        color: #464855 !important; }
    .card.card-minimal {
        border: none;
        box-shadow: none; }
    .card.crypto-card-3 .card-body:before {
        font-family: "cryptocoins";
        font-size: 10rem;
        color: rgba(255, 255, 255, 0.15);
        position: absolute;
        bottom: -32px;
        right: 0px; }

    .card-moved .card,
    .card-moved .card-header {
    background-color: #ff9149;
    color: #fff; }

    .handle,
    .titleArea {
    cursor: move; }

    .card-header {
    border-bottom: none; }
    .card-header:first-child {
        border-radius: .45rem .45rem 0 0; }
    .card-header .card-title {
        margin-bottom: 0; }
    .card-header .heading-elements,
    .card-header .heading-elements-toggle {
        background-color: inherit;
        position: absolute;
        top: 20px;
        right: 20px; }
        .card-header .heading-elements.heading-top-elements .page-item,
        .card-header .heading-elements-toggle.heading-top-elements .page-item {
        display: inline-block; }
        .card-header .heading-elements a,
        .card-header .heading-elements-toggle a {
        padding: 0 8px; }
        .card-header .heading-elements a.btn,
        .card-header .heading-elements-toggle a.btn {
            padding-top: 6px;
            padding-bottom: 6px; }

    .card-footer {
    border-top: 1px solid #EEEEEE; }

    .text-white .card-text {
    color: white; }

    .text-white .card-img-overlay .text-muted {
    color: #FFF !important; }

    .text-white code {
    background-color: white; }

    .text-white .heading-elements i {
    color: #FFF; }

    .card-head-inverse {
    color: #FFF; }
    .card-head-inverse .heading-elements i {
        color: #FFF; }

    .card-transparent {
    background-color: transparent; }

    .card-image-position-right {
    margin-left: 50px;
    position: absolute;
    top: -27px; }

    .card-image-position-right-mid {
    position: absolute;
    top: auto;
    right: 0px;
    width: 250px; }

    .card-font-style-black {
    font-size: 90px;
    font-weight: 900;
    color: #ffffff52;
    margin-top: -12px; }

    .card-font-style-white {
    font-size: 72px;
    font-weight: 900;
    margin-top: -10px; }

    .background-round {
    background-color: rgba(0, 0, 0, 0.18);
    padding: 8px;
    border-radius: 50%; }

    @media (max-width: 991.98px) {
    .heading-elements .list-inline {
        display: none; }
    .heading-elements.visible {
        display: block;
        margin-top: 0;
        top: 100%;
        top: 37px;
        height: auto;
        left: 0px;
        padding: 10px;
        text-align: right;
        z-index: 997;
        position: absolute;
        width: 100%; }
        .heading-elements.visible .list-inline {
        display: block; } }

    @media (min-width: 992px) {
    .heading-elements-toggle {
        display: none; } }

    .accordion .card-header, .default-collapse .card-header {
    cursor: pointer;
    border-radius: 0 !important; }

    .breadcrumb {
    font-size: 1rem;
    font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
    background-color: transparent;
    padding: 0 0 0.75rem 0rem; }
    .breadcrumb > li + li::before {
        padding-right: .6rem;
        padding-left: .6rem; }
    .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
        content: "-"; }

    /* Custom scss for page headers style */
    .breadcrumbs-right .breadcrumb {
    float: right; }

    .breadcrumbs-top .breadcrumb {
    margin: 0;
    padding: 0; }

    .breadcrumb-new .content-header-title {
    padding: 6px 24px 8px 0;
    margin: 0 24px 0 0;
    border-right: 1px solid #E4E5EC; }

    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .breadcrumb {
        min-height: auto; } }

    .pagination {
    margin-top: 1rem; }
    .pagination .page-link {
        color: #1e9ff2;
        border: 1px solid #babfc7; }

    .pager {
    padding-left: 0;
    margin: 1.45 0;
    list-style: none;
    text-align: center; }
    .pager li {
        display: inline; }
        .pager li > a,
        .pager li > span {
        display: inline-block;
        padding: 5px 14px;
        background-color: #fff;
        border: 1px solid #626e82;
        border-radius: 0.25rem; }
        .pager li > a:hover,
        .pager li > a:focus {
        text-decoration: none;
        background-color: #f4f5fa; }
    .pager.pager-square li a {
        border-radius: 0; }
    .pager.pager-round li a {
        border-radius: 2rem; }
    .pager.pager-flat li a {
        border: 0; }
    .pager .next > a,
    .pager .next > span {
        float: right; }
    .pager .previous > a,
    .pager .previous > span {
        float: left; }
    .pager .disabled > a,
    .pager .disabled > a:hover,
    .pager .disabled > a:focus,
    .pager .disabled > span {
        color: #6b6f82;
        background-color: #fff; }
    .pager [class*="text-"] .pager {
        text-align: inherit; }

    .badge {
    color: #fff;
    font-weight: 400;
    background-color: #666ee8; }
    .badge[class*='badge-'] [class*='icon-'] {
        line-height: 1; }
        .badge[class*='badge-'] [class*='icon-'] ~ span {
        position: relative;
        bottom: 2px;
        padding: 0 5px; }
    .badge[class*='badge-'] span {
        position: relative;
        bottom: 2px;
        padding: 0 5px; }
    .badge[class*='badge-'] a {
        color: #fff; }
    .badge[class*='badge-'] .dropdown-toggle::after, .badge[class*='badge-'].dropdown-toggle::after {
        position: relative;
        font-size: 1rem; }
    .badge[class*='badge-'] .dropdown-menu a {
        color: #555; }
    .badge.badge-square {
        border-radius: 0; }
    .badge.badge-border {
        background-color: transparent;
        border-width: 3px !important;
        font-size: 85%; }
    .badge.badge-striped {
        background-color: #dadada;
        border-width: 3px !important;
        font-size: 0.85rem;
        color: #555; }
        .badge.badge-striped a {
        color: #555; }
    .badge.badge.float-right {
        margin-left: 0.5rem;
        margin-top: 0.15rem; }

    .badge-xl {
    font-size: 1.8rem; }

    .badge-lg {
    font-size: 1.2rem; }

    .badge-md {
    font-size: 1rem; }

    .badge-sm {
    font-size: 0.8rem; }

    .badge-secondary {
    background-color: #6b6f82; }
    .badge-secondary.badge-glow {
        box-shadow: 0px 0px 10px #6b6f82; }
    .badge-secondary[href]:hover, .badge-secondary[href]:focus {
        background-color: #545766; }

    .badge-primary {
    background-color: #666ee8; }
    .badge-primary.badge-glow {
        box-shadow: 0px 0px 10px #666ee8; }
    .badge-primary[href]:hover, .badge-primary[href]:focus {
        background-color: #3a44e1; }

    .badge-success {
    background-color: #28d094; }
    .badge-success.badge-glow {
        box-shadow: 0px 0px 10px #28d094; }
    .badge-success[href]:hover, .badge-success[href]:focus {
        background-color: #20a576; }

    .badge-info {
    background-color: #1e9ff2; }
    .badge-info.badge-glow {
        box-shadow: 0px 0px 10px #1e9ff2; }
    .badge-info[href]:hover, .badge-info[href]:focus {
        background-color: #0c84d1; }

    .badge-warning {
    background-color: #ff9149; }
    .badge-warning.badge-glow {
        box-shadow: 0px 0px 10px #ff9149; }
    .badge-warning[href]:hover, .badge-warning[href]:focus {
        background-color: #ff7216; }

    .badge-danger {
    background-color: #ff4961; }
    .badge-danger.badge-glow {
        box-shadow: 0px 0px 10px #ff4961; }
    .badge-danger[href]:hover, .badge-danger[href]:focus {
        background-color: #ff1635; }

    .badge-up {
    position: absolute;
    top: 10px;
    right: 11px; }

    .badge-icon i {
    font-size: 100%;
    margin-right: 5px; }

    .form-control + .block-tag {
    display: block; }

    .block-tag {
    margin-top: 0.5rem; }

    .block-area {
    padding: 0.24rem 0.3rem; }

    .token.property,
    .token.tag,
    .token.boolean,
    .token.number,
    .token.constant,
    .token.symbol,
    .token.deleted {
    color: #905;
    font-size: 100%;
    font-weight: 400;
    padding: 0; }

    @media only screen and (max-width: 767px) {
    .header-navbar .navbar-container .dropdown-notification .badge-up {
        position: relative;
        right: 6px;
        top: -17px; } }

    .nav {
    border-radius: 0.25rem; }
    .nav.wrap-border {
        border: 1px solid #ddd; }
        .nav.wrap-border li.nav-header {
        margin: 0 0.5rem; }
    .nav.no-hover-bg .nav-item:hover {
        background-color: transparent; }
    .nav .dropdown .dropdown-item.active {
        background-color: transparent;
        color: #55595c; }
        .nav .dropdown .dropdown-item.active:focus {
        background-color: transparent;
        color: #55595c; }
    .nav.square-border {
        border-radius: 0; }
        .nav.square-border .nav-item .nav-link.active {
        border-radius: 0; }
    .nav .nav-item .nav-link {
        display: inline-flex; }
    .nav .nav-item i {
        align-self: center; }
    .nav .dropdown-divider {
        margin: 0.5rem 0; }
    .nav .modern-nav-toggle {
        padding: 25px 0px; }
    .nav.nav-pills .nav-item .nav-link i.float-right:before {
        position: relative;
        top: 7px;
        left: 7px; }
    .nav.nav-pills .nav-item .nav-link .badge.float-right {
        position: relative;
        top: 1px;
        left: 3px; }
    .nav.nav-pills .nav-item .nav-link.dropdown-toggle::after {
        top: -1px; }
    .nav.nav-pills.nav-justified {
        width: 100%; }
        .nav.nav-pills.nav-justified .nav-item {
        float: none; }
        .nav.nav-pills.nav-justified .nav-link {
        text-align: center;
        margin-bottom: 5px; }
        .nav.nav-pills.nav-justified > .dropdown .dropdown-menu {
        top: auto;
        left: auto; }
        @media (min-width: 576px) {
        .nav.nav-pills.nav-justified .nav-item {
            display: table-cell;
            width: 1%; }
        .nav.nav-pills.nav-justified .nav-link {
            margin-bottom: 0; } }
        .nav.nav-pills.nav-justified .nav-link {
        margin-right: 0;
        border-radius: 0.25rem; }
        @media (min-width: 576px) {
        .nav.nav-pills.nav-justified .nav-link.active,
        .nav.nav-pills.nav-justified .nav-link.active:hover,
        .nav.nav-pills.nav-justified .nav-link.active:focus {
            border-bottom-color: transparent; } }
        .nav.nav-pills.nav-justified .nav-link {
        display: block; }
        .nav.nav-pills.nav-justified .nav-link.active {
            border: none; }
            .nav.nav-pills.nav-justified .nav-link.active:hover, .nav.nav-pills.nav-justified .nav-link.active:focus {
            border: none; }
    .nav.nav-pills.nav-pill-bordered .nav-item {
        border: 1px solid #d3d3d3;
        border-radius: 0.25rem; }
    .nav.nav-pills.nav-pill-with-active-bordered .nav-item a.nav-link {
        border: 1px solid #d3d3d3;
        border-radius: 0.25rem;
        background-color: #ffffff;
        color: #55595c; }
        .nav.nav-pills.nav-pill-with-active-bordered .nav-item a.nav-link.active {
        border: 1px solid #666ee8;
        color: #666ee8; }
    .nav.nav-pills.nav-active-bordered-pill .nav-item a.nav-link {
        color: #55595c; }
        .nav.nav-pills.nav-active-bordered-pill .nav-item a.nav-link.active {
        border: 1px solid #666ee8;
        border-radius: 0.25rem;
        color: #666ee8;
        background-color: #ffffff; }
    .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item ~ .nav-item a.nav-link {
        border-left: 1px solid #d3d3d3;
        border-top: 0; }
    .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item:first-child a.nav-link {
        border-radius: 0.25rem 0.25rem 0 0; }
    .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item:last-child a.nav-link {
        border-radius: 0 0 0.25rem 0.25rem; }
    .nav.nav-pills.nav-pill-toolbar .nav-item {
        margin-top: 0;
        margin-left: 0; }
        .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link {
        border: 1px solid #d3d3d3;
        border-radius: 0; }
        .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link.active, .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link:active {
            border-color: #1e9ff2; }
    .nav.nav-tabs .nav-item .nav-link {
        padding: 0.5rem 0.7rem;
        display: inline-flex; }
        .nav.nav-tabs .nav-item .nav-link:hover:not(.active) {
        border-color: transparent; }
        .nav.nav-tabs .nav-item .nav-link.active {
        background-color: #fff;
        border-radius: 0.25rem 0.25rem 0 0;
        border-color: #babfc7 #babfc7 #fff; }
        .nav.nav-tabs .nav-item .nav-link i.float-right {
        margin-left: 0.5rem; }
        .nav.nav-tabs .nav-item .nav-link.dropdown-toggle::after {
        top: -1px; }
    .nav.nav-tabs .nav-item:hover {
        color: #333; }
    .nav.nav-tabs.wrap-border {
        border: 1px solid #ddd; }
    .nav.nav-tabs.no-hover-bg .nav-item:hover {
        background-color: transparent; }
    .nav.nav-tabs .dropdown .dropdown-item.active {
        background-color: transparent;
        color: #55595c; }
        .nav.nav-tabs .dropdown .dropdown-item.active:focus {
        background-color: transparent;
        color: #55595c; }
    .nav.nav-tabs.square-border {
        border-radius: 0; }
        .nav.nav-tabs.square-border .nav-item .nav-link.active {
        border-radius: 0; }
    .nav.nav-tabs.nav-justified {
        width: 100%; }
        .nav.nav-tabs.nav-justified .nav-item {
        float: none; }
        .nav.nav-tabs.nav-justified .nav-link {
        text-align: center;
        margin-bottom: 5px; }
        .nav.nav-tabs.nav-justified > .dropdown .dropdown-menu {
        top: auto;
        left: auto; }
        @media (min-width: 576px) {
        .nav.nav-tabs.nav-justified .nav-item {
            display: table-cell;
            width: 1%; }
        .nav.nav-tabs.nav-justified .nav-link {
            margin-bottom: 0; } }
        .nav.nav-tabs.nav-justified .nav-link {
        margin-right: 0;
        border-radius: 0.25rem; }
        @media (min-width: 576px) {
        .nav.nav-tabs.nav-justified .nav-link.active,
        .nav.nav-tabs.nav-justified .nav-link.active:hover,
        .nav.nav-tabs.nav-justified .nav-link.active:focus {
            border-bottom-color: transparent; } }
        .nav.nav-tabs.nav-justified .nav-item a.nav-link {
        display: block; }
        .nav.nav-tabs.nav-justified .nav-item a.nav-link .active {
            background-color: #fff; }
    .nav.nav-tabs.nav-top-border .nav-item a {
        color: #28d094; }
        .nav.nav-tabs.nav-top-border .nav-item a.nav-link.active {
        border-top: 3px solid #28d094;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        color: #555; }
        .nav.nav-tabs.nav-top-border .nav-item a:hover {
        color: #0f5039; }
        .nav.nav-tabs.nav-top-border .nav-item a:hover:not(.active) {
            border-color: transparent; }
    .nav.nav-tabs.nav-topline {
        border-bottom: none; }
        .nav.nav-tabs.nav-topline .nav-item:hover {
        background-color: transparent; }
        .nav.nav-tabs.nav-topline .nav-item:not(:last-child) {
        border-right: none; }
        .nav.nav-tabs.nav-topline .nav-item a {
        border: 1px solid rgba(40, 44, 42, 0.1);
        border-bottom: none; }
        .nav.nav-tabs.nav-topline .nav-item a.nav-link {
            padding: 0.8rem 0.5rem;
            background: rgba(40, 44, 42, 0.05);
            color: #74777b;
            line-height: 1;
            -webkit-transition: color 0.2s;
            transition: color 0.2s; }
            .nav.nav-tabs.nav-topline .nav-item a.nav-link.active {
            background: none;
            box-shadow: inset 0 3px 0 #ff4961;
            color: #ff4961;
            border-radius: 0;
            border-top-color: #ff4961;
            border-bottom: none; }
            .nav.nav-tabs.nav-topline .nav-item a.nav-link:hover, .nav.nav-tabs.nav-topline .nav-item a.nav-link:focus {
            color: #ff4961; }
            .nav.nav-tabs.nav-topline .nav-item a.nav-link.dropdown-toggle::after {
            top: -1px; }
    .nav.nav-tabs.nav-underline {
        background: #fff;
        position: relative;
        border-bottom: 1px solid #1e9ff2;
        border-radius: 0; }
        .nav.nav-tabs.nav-underline .nav-item {
        position: relative;
        z-index: 1;
        display: block;
        text-align: center;
        -webkit-flex: 1;
        -moz-flex: 1;
        -ms-flex: 1;
        flex: 1;
        margin-left: 0; }
        .nav.nav-tabs.nav-underline .nav-item.open a .nav-link {
            background-color: transparent; }
            .nav.nav-tabs.nav-underline .nav-item.open a .nav-link:focus, .nav.nav-tabs.nav-underline .nav-item.open a .nav-link:hover {
            background-color: transparent;
            color: #1e9ff2; }
        .nav.nav-tabs.nav-underline .nav-item a.nav-link {
            position: relative;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 2rem;
            padding: 0.5rem 1rem;
            -webkit-transition: color 0.2s;
            transition: color 0.2s;
            color: #1e9ff2;
            border: none; }
            .nav.nav-tabs.nav-underline .nav-item a.nav-link.dropdown-toggle::after {
            margin-top: -1rem; }
            .nav.nav-tabs.nav-underline .nav-item a.nav-link.active {
            border: none;
            background-color: transparent; }
            .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:focus, .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:hover {
                color: #55595c;
                background-color: transparent; }
            .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:before {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0); }
            .nav.nav-tabs.nav-underline .nav-item a.nav-link:hover, .nav.nav-tabs.nav-underline .nav-item a.nav-link:focus {
            color: #1e9ff2; }
            .nav.nav-tabs.nav-underline .nav-item a.nav-link:before {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 4px;
            background: #1e9ff2;
            content: '';
            -webkit-transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            -webkit-transform: translate3d(0, 150%, 0);
            transform: translate3d(0, 150%, 0); }
    .nav.nav-tabs.nav-linetriangle {
        border-bottom-color: #ff9149; }
        .nav.nav-tabs.nav-linetriangle .nav-item {
        position: relative;
        z-index: 1;
        display: block;
        text-align: center;
        -webkit-flex: 1;
        -moz-flex: 1;
        -ms-flex: 1;
        flex: 1; }
        .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link {
            position: relative;
            display: block;
            overflow: visible;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 2.5;
            border: none;
            color: #55595c; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom-color: #ff9149;
            color: #ff9149; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:after, .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:before {
                position: absolute;
                top: 100%;
                left: 50%;
                width: 0;
                height: 0;
                border: solid transparent;
                content: '';
                pointer-events: none; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:before {
                margin-left: -11px;
                border-width: 12px;
                border-top-color: #ff9149; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:after {
                margin-left: -10px;
                border-width: 10px;
                border-top-color: #fff; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:focus {
                color: #ff9149; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.dropdown-toggle:after {
            margin-top: -1rem; }
            .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.dropdown-toggle.active:after {
            margin-top: 0; }
        .nav.nav-tabs.nav-linetriangle.nav-justified {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        border-bottom-color: #ff9149; }
        .nav.nav-tabs.nav-linetriangle.nav-justified .nav-item a.nav-link.active {
            top: 0px; }
    .nav.nav-tabs.nav-iconfall {
        overflow: visible;
        border-bottom: none; }
        .nav.nav-tabs.nav-iconfall .nav-item {
        position: relative;
        z-index: 1;
        display: block;
        text-align: center;
        -webkit-flex: 1;
        -moz-flex: 1;
        -ms-flex: 1;
        flex: 1;
        margin: 0.5rem 0.7rem 0; }
        .nav.nav-tabs.nav-iconfall .nav-item:hover, .nav.nav-tabs.nav-iconfall .nav-item:focus {
            background-color: transparent; }
        .nav.nav-tabs.nav-iconfall .nav-item a.nav-link {
            display: inline-block;
            padding: 1em 0 2em;
            color: #74777b;
            position: relative;
            line-height: 2.5;
            width: 100%;
            border: none;
            -webkit-transition: color 0.3s cubic-bezier(0.7, 0, 0.3, 1);
            transition: color 0.3s cubic-bezier(0.7, 0, 0.3, 1); }
        .nav.nav-tabs.nav-iconfall .nav-item a:hover, .nav.nav-tabs.nav-iconfall .nav-item a:focus {
            color: #2CC185;
            border: none; }
        .nav.nav-tabs.nav-iconfall .nav-item a.active {
            color: #2CC185;
            border: none;
            background-color: transparent; }
            .nav.nav-tabs.nav-iconfall .nav-item a.active i:after {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1); }
            .nav.nav-tabs.nav-iconfall .nav-item a.active i:before {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0); }
        .nav.nav-tabs.nav-iconfall .nav-item a i {
            display: block;
            margin-right: 0; }
            .nav.nav-tabs.nav-iconfall .nav-item a i:after {
            position: absolute;
            bottom: 1em;
            left: 50%;
            margin-left: -20px;
            width: 40px;
            height: 4px;
            background: #2CC185;
            content: '';
            opacity: 0;
            -webkit-transition: -webkit-transform 0.2s ease-in;
            transition: transform 0.2s ease-in;
            -webkit-transform: scale3d(0, 1, 1);
            transform: scale3d(0, 1, 1); }
            .nav.nav-tabs.nav-iconfall .nav-item a i:before {
            display: block;
            margin: 0 0 0.35em;
            opacity: 0;
            -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
            transition: transform 0.2s, opacity 0.2s;
            -webkit-transform: translate3d(0, -100px, 0);
            transform: translate3d(0, -100px, 0);
            pointer-events: none; }
        .nav.nav-tabs.nav-iconfall .nav-item a.dropdown-toggle:after {
            margin-top: -1rem; }
    .nav .nav-item .nav-link {
        display: block; }
    .nav .dropdown-divider {
        margin: 0.5rem 0; }

    @media (min-width: 576px) {
    .nav.nav-tabs.nav-linetriangle.nav-justified .nav-item,
    .nav.nav-tabs.nav-iconfall.nav-justified .nav-item,
    .nav.nav-tabs.nav-underline.nav-justified .nav-item {
        display: table-cell !important; } }

    .nav-vertical {
    overflow: hidden; }
    .nav-vertical .nav-left.nav-tabs {
        float: left;
        border-bottom: 0;
        border-radius: 0;
        display: table; }
        .nav-vertical .nav-left.nav-tabs li.nav-item {
        float: none;
        margin: 0;
        margin-right: -1px; }
        .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link {
            min-width: 6.5rem;
            border-right: 1px solid #ddd; }
            .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link.active {
            border: 1px solid #ddd;
            border-right: 0;
            border-radius: 0.25rem 0 0 0.25rem; }
            .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link:hover:not(.active) {
            border-color: transparent;
            border-right: 1px solid #ddd; }
        .nav-vertical .nav-left.nav-tabs.nav-border-left li.nav-item a.nav-link {
        color: #ff4961; }
        .nav-vertical .nav-left.nav-tabs.nav-border-left li.nav-item a.nav-link.active {
            border-left: 3px solid #ff4961;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            color: #555; }
    .nav-vertical .nav-left ~ .tab-content {
        margin-left: 45px; }
        .nav-vertical .nav-left ~ .tab-content .tab-pane {
        display: none;
        background-color: #fff;
        padding: 0 0 0.6rem 1rem;
        overflow-y: auto; }
        .nav-vertical .nav-left ~ .tab-content .tab-pane.active {
            display: block; }
    .nav-vertical .nav-right.nav-tabs {
        float: right;
        border-bottom: 0;
        border-radius: 0;
        display: table; }
        .nav-vertical .nav-right.nav-tabs li.nav-item {
        float: none;
        margin: 0;
        margin-left: -1px; }
        .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link {
            min-width: 6.5rem;
            border-left: 1px solid #ddd; }
            .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link.active {
            border: 1px solid #ddd;
            border-left: 0;
            border-radius: 0 0.25rem 0.25rem 0; }
            .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link:hover:not(.active) {
            border-color: transparent;
            border-left: 1px solid #ddd; }
        .nav-vertical .nav-right.nav-tabs.nav-border-right li.nav-item a.nav-link {
        color: #ff4961; }
        .nav-vertical .nav-right.nav-tabs.nav-border-right li.nav-item a.nav-link.active {
            border-right: 3px solid #ff4961;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            color: #555; }
    .nav-vertical .nav-right ~ .tab-content .tab-pane {
        display: none;
        background-color: #fff;
        padding: 0 0 0.6rem 1rem;
        overflow-y: auto; }
        .nav-vertical .nav-right ~ .tab-content .tab-pane.active {
        display: block; }

    .nav.nav-tabs.nav-only-icon .nav-item .nav-link {
    font-size: 1.25rem; }
    .nav.nav-tabs.nav-only-icon .nav-item .nav-link i {
        margin-left: 0.5rem; }

    .nav.nav-tabs .nav-item.show .nav-link,
    .nav.nav-tabs .nav-item.show .nav-link:focus {
    background-color: transparent; }

    .alert {
    position: relative; }
    .alert .alert-link:hover {
        text-decoration: underline; }
    .alert.alert-icon-left {
        border-left-width: 4rem; }
    .alert.alert-icon-right {
        border-right-width: 4rem; }
    .alert.alert-icon-left[class*=bg-] {
        border-left-color: rgba(0, 0, 0, 0.15) !important; }
    .alert.alert-icon-right[class*=bg-] {
        border-right-color: rgba(0, 0, 0, 0.15) !important; }
    .alert[class*=alert-icon-] .alert-icon {
        content: '\f2b2';
        font-family: LineAwesome;
        color: #fff;
        width: 4rem;
        left: -4rem;
        text-align: center;
        position: absolute;
        top: 50%;
        margin-top: -8px;
        font-size: 1.25rem;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale; }
    .alert .close {
        font-size: 2rem;
        line-height: 1rem; }
    .alert[class*=bg-] {
        color: #fff; }
        .alert[class*=bg-] .alert-link {
        color: #fff; }
        .alert[class*=bg-] .close {
        color: #fff;
        opacity: 1;
        text-shadow: none; }
    .alert.alert-icon-right .alert-icon {
        left: auto;
        right: -4rem; }
    .alert[class*=alert-arrow-]:before {
        content: "";
        display: inline-block;
        position: absolute;
        top: 50%;
        left: 0;
        border-left: 8px solid;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        border-left-color: inherit;
        margin-top: -8px; }
    .alert.alert-arrow-right:before {
        left: auto;
        right: 0;
        border-left: 0;
        border-right: 8px solid;
        border-right-color: inherit; }

    .media-list .media {
    padding: 1.5rem;
    margin-top: 0; }
    .media-list .media .media-left {
        padding-right: 1rem;
        float: left; }
    .media-list .media .media-right {
        padding-left: 1rem;
        float: right; }

    .media-list a.media {
    color: #6b6f82 !important; }

    .media [class*="avatar-"] {
    position: relative;
    padding-right: 0 !important;
    margin-right: 0; }
    .media [class*="avatar-"] i {
        position: absolute;
        right: -4px;
        bottom: -1px;
        width: 10px;
        height: 10px;
        border: 2px solid white;
        border-radius: 100%; }

    .media-bordered .media {
    border-top: 1px solid #E4E7ED; }
    .media-bordered .media:first-child {
        border-top: 0; }

    .media-notation a {
    margin-right: 0.5rem; }

    .media-body {
    flex: 1; }

    /* IE10 & IE11 specific CSS */
    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .media-body {
        flex: 1 0 auto; } }

    /*=========================================================================================
    File Name: progress.scss
    Description: Extended bootstrap progress bar scss.
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
    ----------------------------------------------------------------------------------------

    Modifiers:       `progress-lg`
                    `progress-md`
                    `progress-sm`
                    `progress-xs`

    ==========================================================================================*/
    .progress {
    margin-bottom: 3rem; }
    .progress:last-child {
        margin-bottom: 1rem; }
    .progress.progress-xl {
        height: 2rem !important; }
    .progress.progress-lg {
        height: 1.5rem !important; }
    .progress.progress-md {
        height: 1rem !important; }
    .progress.progress-sm {
        height: 0.5rem !important; }
    .progress.progress-xs {
        height: 0.25rem !important; }
    .progress.box-shadow {
        box-shadow: 0px 10px 15px 0px rgba(107, 111, 130, 0.3); }

    /* ===============================================================================================
        File Name: list-group.scss
        Description: Contain list item, list group related extended SCSS.
        ----------------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ================================================================================================*/
    ul.list-inline li {
    display: inline-block; }

    ul.list-inline.list-inline-pipe > li + li:before {
    content: ' | ';
    color: #626e82; }

    .list-group .list-group-item.active {
    color: #fff !important; }

    .list-group .list-group-item-action:active {
    color: #fff;
    background-color: #1e9ff2; }
    .list-group .list-group-item-action:active a {
        color: #fff; }

    .users-list li + li {
    margin-left: -10px; }

    .users-list li img {
    border: 2px solid #fff;
    box-shadow: 0px 2px 10px 0px rgba(107, 111, 130, 0.3); }

    .users-list li .badge {
    background: rgba(255, 255, 255, 0.8);
    color: #6b6f82;
    margin-bottom: 2px;
    z-index: 2; }

    .material-layout .users-list li .badge {
    margin-bottom: 1px;
    margin-left: 22px; }

    .toast-bs-container {
    z-index: 1040;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; }
    .toast-bs-container .toast-position {
        position: relative;
        top: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap-reverse; }
        .toast-bs-container .toast-position .toast.show {
        opacity: 1;
        z-index: 1030; }

    .toast-placement {
    position: static;
    top: 0; }
    .toast-placement .toast {
        position: absolute;
        top: 0;
        z-index: 1030; }

    .toast {
    display: none;
    background-color: white;
    margin-top: 0.75rem; }

    .toast-body {
    background-color: #f4f5fa; }

    .toast.show.toast-wrapper {
    position: static; }

    .toast.toast-translucent {
    opacity: 1;
    display: block; }

    .toast-header img {
    width: 20px;
    height: 20px; }

    .apexcharts-tooltip, .apexcharts-xaxistooltip, .apexcharts-menu-item, .apexcharts-yaxistooltip {
    color: #000 !important; }
    .apexcharts-tooltip.light, .apexcharts-xaxistooltip.light, .apexcharts-menu-item.light, .apexcharts-yaxistooltip.light {
        color: #000 !important; }

    .modal-sm {
    max-width: 400px; }

    .modal-xs {
    max-width: 300px; }

    .modal-xl {
    max-width: 94%;
    margin-left: 3%;
    margin-right: 3%; }

    .icon-align {
    margin-top: 0.6rem;
    margin-left: 0.5rem; }

    .popover {
    z-index: 999; }
    .popover.popover-top:after, .popover.popover-top:before, .popover.bs-tether-element-attached-top:after, .popover.bs-tether-element-attached-top:before {
        margin-left: -10px; }
    .popover.popover-right:after, .popover.popover-right:before, .popover.bs-tether-element-attached-right:after, .popover.bs-tether-element-attached-right:before {
        margin-top: -10px; }
    .popover.popover-bottom:after, .popover.popover-bottom:before, .popover.bs-tether-element-attached-bottom:after, .popover.bs-tether-element-attached-bottom:before {
        margin-left: -10px; }
    .popover.popover-left:after, .popover.popover-left:before, .popover.bs-tether-element-attached-left:after, .popover.bs-tether-element-attached-left:before {
        margin-top: -10px; }

    .selectboxit-container .selectboxit-options {
    z-index: 998; }

    .icon-bg-circle {
    color: #fff;
    padding: 0.5rem;
    border-radius: 50%; }

    .icon-left {
    margin-right: 0.5rem; }

    .icon-right {
    margin-right: 0.5rem; }

    .icon-spin {
    display: inline-block;
    animation: spin 1s infinite linear; }

    .blockOverlay {
    z-index: 1050 !important; }

    .blockElement, .blockPage {
    z-index: 1051 !important; }

    .embed-responsive:before {
    padding-top: 57%; }

    @-moz-keyframes spin {
    from {
        -moz-transform: rotate(0deg); }
    to {
        -moz-transform: rotate(360deg); } }

    @-webkit-keyframes spin {
    from {
        -webkit-transform: rotate(0deg); }
    to {
        -webkit-transform: rotate(360deg); } }

    @keyframes spin {
    from {
        transform: rotate(0deg); }
    to {
        transform: rotate(360deg); } }

    .hidden {
    display: none;
    visibility: hidden; }

    a:hover {
    cursor: pointer;
    text-decoration: none; }

    .round {
    border-radius: 1.5rem; }

    .square {
    border-radius: 0; }

    .mega-dropdown-menu p.accordion-text {
    line-height: 1.45; }

    .mega-dropdown-menu a[aria-expanded="true"] {
    padding-bottom: 1rem; }

    .line-on-side {
    border-bottom: 1px solid #dadada;
    line-height: 0.1em;
    margin: 10px 0 20px; }

    .line-on-side span {
    background: #fff;
    padding: 0 10px; }

    .icon-line-height {
    line-height: 1.5rem !important; }

    .table-middle td {
    vertical-align: middle; }

    /* drag n drop - bullets none on drag - as default */
    /*------------------------------------------------*/
    .gu-mirror {
    list-style-type: none !important; }

    .spinner {
    display: inline-block;
    -webkit-animation: spin 1s linear infinite;
    -o-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite; }

    @keyframes spin {
    0% {
        transform: rotate(0deg); }
    100% {
        transform: rotate(360deg); } }

    @media only screen and (max-width: 576px) {
    .line-on-side {
        border-bottom: none;
        line-height: 1.25rem; } }

</style>


<style>
    .white {
  color: #ffffff !important; }

    .bg-white {
    background-color: #ffffff !important; }
    .bg-white .card-header,
    .bg-white .card-footer {
        background-color: transparent; }
    .bg-white.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 255, 0.6); }

    .selectboxit.selectboxit-btn.bg-white {
    background-color: #ffffff !important; }

    .alert-white {
    border-color: #ffffff !important;
    background-color: white !important;
    color: #a6a6a6 !important; }
    .alert-white .alert-link {
        color: #919191 !important; }

    .border-white {
    border-color: #ffffff; }

    .overlay-white {
    background: #ffffff;
    /* The Fallback */
    background: rgba(255, 255, 255, 0.8); }

    .color-info.white {
    background-color: #ffffff !important; }

    .btn-white {
    border-color: #ffffff !important;
    background-color: #ffffff !important;
    color: #FFFFFF; }
    .btn-white:hover {
        border-color: !important;
        background-color: !important;
        color: #FFF !important; }
    .btn-white:focus, .btn-white:active {
        border-color: !important;
        background-color: !important;
        color: #FFF !important; }
    .btn-white.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 255, 0.6); }

    .btn-outline-white {
    border-color: #ffffff;
    background-color: transparent;
    color: #ffffff; }
    .btn-outline-white:hover {
        background-color: #ffffff;
        color: #FFF !important; }
    .btn-outline-white.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 255, 0.6); }

    input[type="checkbox"].bg-white + .custom-control-label:before, input[type="radio"].bg-white + .custom-control-label:before {
    background-color: #ffffff !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-white {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffffff !important; }

    .border-white {
    border: 1px solid #ffffff !important; }

    .border-top-white {
    border-top: 1px solid #ffffff; }

    .border-bottom-white {
    border-bottom: 1px solid #ffffff; }

    .border-left-white {
    border-left: 1px solid #ffffff; }

    .border-right-white {
    border-right: 1px solid #ffffff; }

    /* Bullet white */
    .bullet.bullet-white {
    background-color: #ffffff; }

    .black {
    color: #000000 !important; }

    .bg-black {
    background-color: #000000 !important; }
    .bg-black .card-header,
    .bg-black .card-footer {
        background-color: transparent; }
    .bg-black.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    .selectboxit.selectboxit-btn.bg-black {
    background-color: #000000 !important; }

    .alert-black {
    border-color: #000000 !important;
    background-color: #242424 !important;
    color: black !important; }
    .alert-black .alert-link {
        color: black !important; }

    .border-black {
    border-color: #000000; }

    .overlay-black {
    background: #000000;
    /* The Fallback */
    background: rgba(0, 0, 0, 0.8); }

    .color-info.black {
    background-color: #000000 !important; }

    .btn-black {
    border-color: #000000 !important;
    background-color: #000000 !important;
    color: #FFFFFF; }
    .btn-black:hover {
        border-color: !important;
        background-color: !important;
        color: #FFF !important; }
    .btn-black:focus, .btn-black:active {
        border-color: !important;
        background-color: !important;
        color: #FFF !important; }
    .btn-black.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    .btn-outline-black {
    border-color: #000000;
    background-color: transparent;
    color: #000000; }
    .btn-outline-black:hover {
        background-color: #000000;
        color: #FFF !important; }
    .btn-outline-black.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    input[type="checkbox"].bg-black + .custom-control-label:before, input[type="radio"].bg-black + .custom-control-label:before {
    background-color: #000000 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-black {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #000000 !important; }

    .border-black {
    border: 1px solid #000000 !important; }

    .border-top-black {
    border-top: 1px solid #000000; }

    .border-bottom-black {
    border-bottom: 1px solid #000000; }

    .border-left-black {
    border-left: 1px solid #000000; }

    .border-right-black {
    border-right: 1px solid #000000; }

    /* Bullet black */
    .bullet.bullet-black {
    background-color: #000000; }

    .primary.lighten-5 {
    color: #d5d7f9 !important; }

    .bg-primary.bg-lighten-5 {
    background-color: #d5d7f9 !important; }
    .bg-primary.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(213, 215, 249, 0.6); }

    .btn-primary.btn-lighten-5 {
    border-color: #3a44e1 !important;
    background-color: #d5d7f9 !important; }
    .btn-primary.btn-lighten-5:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-lighten-5:focus, .btn-primary.btn-lighten-5:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-lighten-5 {
    border-color: #d5d7f9 !important;
    color: #d5d7f9 !important; }
    .btn-outline-primary.btn-outline-lighten-5:hover {
        background-color: #d5d7f9 !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #d5d7f9 !important; }

    .border-primary.border-lighten-5 {
    border: 1px solid #d5d7f9 !important; }

    .border-top-primary.border-top-lighten-5 {
    border-top: 1px solid #d5d7f9 !important; }

    .border-bottom-primary.border-bottom-lighten-5 {
    border-bottom: 1px solid #d5d7f9 !important; }

    .border-left-primary.border-left-lighten-5 {
    border-left: 1px solid #d5d7f9 !important; }

    .border-right-primary.border-right-lighten-5 {
    border-right: 1px solid #d5d7f9 !important; }

    .overlay-primary.overlay-lighten-5 {
    background: #d5d7f9;
    /* The Fallback */
    background: rgba(213, 215, 249, 0.8); }

    .primary.lighten-4 {
    color: #bfc2f5 !important; }

    .bg-primary.bg-lighten-4 {
    background-color: #bfc2f5 !important; }
    .bg-primary.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(191, 194, 245, 0.6); }

    .btn-primary.btn-lighten-4 {
    border-color: #3a44e1 !important;
    background-color: #bfc2f5 !important; }
    .btn-primary.btn-lighten-4:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-lighten-4:focus, .btn-primary.btn-lighten-4:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-lighten-4 {
    border-color: #bfc2f5 !important;
    color: #bfc2f5 !important; }
    .btn-outline-primary.btn-outline-lighten-4:hover {
        background-color: #bfc2f5 !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #bfc2f5 !important; }

    .border-primary.border-lighten-4 {
    border: 1px solid #bfc2f5 !important; }

    .border-top-primary.border-top-lighten-4 {
    border-top: 1px solid #bfc2f5 !important; }

    .border-bottom-primary.border-bottom-lighten-4 {
    border-bottom: 1px solid #bfc2f5 !important; }

    .border-left-primary.border-left-lighten-4 {
    border-left: 1px solid #bfc2f5 !important; }

    .border-right-primary.border-right-lighten-4 {
    border-right: 1px solid #bfc2f5 !important; }

    .overlay-primary.overlay-lighten-4 {
    background: #bfc2f5;
    /* The Fallback */
    background: rgba(191, 194, 245, 0.8); }

    .primary.lighten-3 {
    color: #a9adf2 !important; }

    .bg-primary.bg-lighten-3 {
    background-color: #a9adf2 !important; }
    .bg-primary.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(169, 173, 242, 0.6); }

    .btn-primary.btn-lighten-3 {
    border-color: #3a44e1 !important;
    background-color: #a9adf2 !important; }
    .btn-primary.btn-lighten-3:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-lighten-3:focus, .btn-primary.btn-lighten-3:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-lighten-3 {
    border-color: #a9adf2 !important;
    color: #a9adf2 !important; }
    .btn-outline-primary.btn-outline-lighten-3:hover {
        background-color: #a9adf2 !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #a9adf2 !important; }

    .border-primary.border-lighten-3 {
    border: 1px solid #a9adf2 !important; }

    .border-top-primary.border-top-lighten-3 {
    border-top: 1px solid #a9adf2 !important; }

    .border-bottom-primary.border-bottom-lighten-3 {
    border-bottom: 1px solid #a9adf2 !important; }

    .border-left-primary.border-left-lighten-3 {
    border-left: 1px solid #a9adf2 !important; }

    .border-right-primary.border-right-lighten-3 {
    border-right: 1px solid #a9adf2 !important; }

    .overlay-primary.overlay-lighten-3 {
    background: #a9adf2;
    /* The Fallback */
    background: rgba(169, 173, 242, 0.8); }

    .primary.lighten-2 {
    color: #9298ef !important; }

    .bg-primary.bg-lighten-2 {
    background-color: #9298ef !important; }
    .bg-primary.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(146, 152, 239, 0.6); }

    .btn-primary.btn-lighten-2 {
    border-color: #3a44e1 !important;
    background-color: #9298ef !important; }
    .btn-primary.btn-lighten-2:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-lighten-2:focus, .btn-primary.btn-lighten-2:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-lighten-2 {
    border-color: #9298ef !important;
    color: #9298ef !important; }
    .btn-outline-primary.btn-outline-lighten-2:hover {
        background-color: #9298ef !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9298ef !important; }

    .border-primary.border-lighten-2 {
    border: 1px solid #9298ef !important; }

    .border-top-primary.border-top-lighten-2 {
    border-top: 1px solid #9298ef !important; }

    .border-bottom-primary.border-bottom-lighten-2 {
    border-bottom: 1px solid #9298ef !important; }

    .border-left-primary.border-left-lighten-2 {
    border-left: 1px solid #9298ef !important; }

    .border-right-primary.border-right-lighten-2 {
    border-right: 1px solid #9298ef !important; }

    .overlay-primary.overlay-lighten-2 {
    background: #9298ef;
    /* The Fallback */
    background: rgba(146, 152, 239, 0.8); }

    .primary.lighten-1 {
    color: #7c83eb !important; }

    .bg-primary.bg-lighten-1 {
    background-color: #7c83eb !important; }
    .bg-primary.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(124, 131, 235, 0.6); }

    .btn-primary.btn-lighten-1 {
    border-color: #3a44e1 !important;
    background-color: #7c83eb !important; }
    .btn-primary.btn-lighten-1:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-lighten-1:focus, .btn-primary.btn-lighten-1:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-lighten-1 {
    border-color: #7c83eb !important;
    color: #7c83eb !important; }
    .btn-outline-primary.btn-outline-lighten-1:hover {
        background-color: #7c83eb !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7c83eb !important; }

    .border-primary.border-lighten-1 {
    border: 1px solid #7c83eb !important; }

    .border-top-primary.border-top-lighten-1 {
    border-top: 1px solid #7c83eb !important; }

    .border-bottom-primary.border-bottom-lighten-1 {
    border-bottom: 1px solid #7c83eb !important; }

    .border-left-primary.border-left-lighten-1 {
    border-left: 1px solid #7c83eb !important; }

    .border-right-primary.border-right-lighten-1 {
    border-right: 1px solid #7c83eb !important; }

    .overlay-primary.overlay-lighten-1 {
    background: #7c83eb;
    /* The Fallback */
    background: rgba(124, 131, 235, 0.8); }

    .primary {
    color: #666ee8 !important; }

    .bg-primary {
    background-color: #666ee8 !important; }
    .bg-primary .card-header,
    .bg-primary .card-footer {
        background-color: transparent; }
    .bg-primary.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(102, 110, 232, 0.6); }

    .selectboxit.selectboxit-btn.bg-primary {
    background-color: #666ee8 !important; }

    .alert-primary {
    border-color: #666ee8 !important;
    background-color: #a4a9f1 !important;
    color: #141b87 !important; }
    .alert-primary .alert-link {
        color: #0f1464 !important; }

    .border-primary {
    border-color: #666ee8; }

    .overlay-primary {
    background: #666ee8;
    /* The Fallback */
    background: rgba(102, 110, 232, 0.8); }

    .color-info.primary {
    background-color: #666ee8 !important; }

    .btn-primary {
    border-color: #666ee8 !important;
    background-color: #666ee8 !important;
    color: #FFFFFF; }
    .btn-primary:hover {
        border-color: #7c83eb !important;
        background-color: #7c83eb !important;
        color: #FFF !important; }
    .btn-primary:focus, .btn-primary:active {
        border-color: #232fde !important;
        background-color: #232fde !important;
        color: #FFF !important; }
    .btn-primary.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(102, 110, 232, 0.6); }

    .btn-outline-primary {
    border-color: #666ee8;
    background-color: transparent;
    color: #666ee8; }
    .btn-outline-primary:hover {
        background-color: #666ee8;
        color: #FFF !important; }
    .btn-outline-primary.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(102, 110, 232, 0.6); }

    input[type="checkbox"].bg-primary + .custom-control-label:before, input[type="radio"].bg-primary + .custom-control-label:before {
    background-color: #666ee8 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #666ee8 !important; }

    .border-primary {
    border: 1px solid #666ee8 !important; }

    .border-top-primary {
    border-top: 1px solid #666ee8; }

    .border-bottom-primary {
    border-bottom: 1px solid #666ee8; }

    .border-left-primary {
    border-left: 1px solid #666ee8; }

    .border-right-primary {
    border-right: 1px solid #666ee8; }

    /* Bullet primary */
    .bullet.bullet-primary {
    background-color: #666ee8; }

    .primary.darken-1 {
    color: #5059e5 !important; }

    .bg-primary.bg-darken-1 {
    background-color: #5059e5 !important; }
    .bg-primary.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(80, 89, 229, 0.6); }

    .btn-primary.btn-darken-1 {
    border-color: #3a44e1 !important;
    background-color: #5059e5 !important; }
    .btn-primary.btn-darken-1:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-darken-1:focus, .btn-primary.btn-darken-1:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-darken-1 {
    border-color: #5059e5 !important;
    color: #5059e5 !important; }
    .btn-outline-primary.btn-outline-darken-1:hover {
        background-color: #5059e5 !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #5059e5 !important; }

    .border-primary.border-darken-1 {
    border: 1px solid #5059e5 !important; }

    .border-top-primary.border-top-darken-1 {
    border-top: 1px solid #5059e5 !important; }

    .border-bottom-primary.border-bottom-darken-1 {
    border-bottom: 1px solid #5059e5 !important; }

    .border-left-primary.border-left-darken-1 {
    border-left: 1px solid #5059e5 !important; }

    .border-right-primary.border-right-darken-1 {
    border-right: 1px solid #5059e5 !important; }

    .overlay-primary.overlay-darken-1 {
    background: #5059e5;
    /* The Fallback */
    background: rgba(80, 89, 229, 0.8); }

    .primary.darken-2 {
    color: #3a44e1 !important; }

    .bg-primary.bg-darken-2 {
    background-color: #3a44e1 !important; }
    .bg-primary.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(58, 68, 225, 0.6); }

    .btn-primary.btn-darken-2 {
    border-color: #3a44e1 !important;
    background-color: #3a44e1 !important; }
    .btn-primary.btn-darken-2:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-darken-2:focus, .btn-primary.btn-darken-2:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-darken-2 {
    border-color: #3a44e1 !important;
    color: #3a44e1 !important; }
    .btn-outline-primary.btn-outline-darken-2:hover {
        background-color: #3a44e1 !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #3a44e1 !important; }

    .border-primary.border-darken-2 {
    border: 1px solid #3a44e1 !important; }

    .border-top-primary.border-top-darken-2 {
    border-top: 1px solid #3a44e1 !important; }

    .border-bottom-primary.border-bottom-darken-2 {
    border-bottom: 1px solid #3a44e1 !important; }

    .border-left-primary.border-left-darken-2 {
    border-left: 1px solid #3a44e1 !important; }

    .border-right-primary.border-right-darken-2 {
    border-right: 1px solid #3a44e1 !important; }

    .overlay-primary.overlay-darken-2 {
    background: #3a44e1;
    /* The Fallback */
    background: rgba(58, 68, 225, 0.8); }

    .primary.darken-3 {
    color: #232fde !important; }

    .bg-primary.bg-darken-3 {
    background-color: #232fde !important; }
    .bg-primary.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(35, 47, 222, 0.6); }

    .btn-primary.btn-darken-3 {
    border-color: #3a44e1 !important;
    background-color: #232fde !important; }
    .btn-primary.btn-darken-3:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-darken-3:focus, .btn-primary.btn-darken-3:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-darken-3 {
    border-color: #232fde !important;
    color: #232fde !important; }
    .btn-outline-primary.btn-outline-darken-3:hover {
        background-color: #232fde !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #232fde !important; }

    .border-primary.border-darken-3 {
    border: 1px solid #232fde !important; }

    .border-top-primary.border-top-darken-3 {
    border-top: 1px solid #232fde !important; }

    .border-bottom-primary.border-bottom-darken-3 {
    border-bottom: 1px solid #232fde !important; }

    .border-left-primary.border-left-darken-3 {
    border-left: 1px solid #232fde !important; }

    .border-right-primary.border-right-darken-3 {
    border-right: 1px solid #232fde !important; }

    .overlay-primary.overlay-darken-3 {
    background: #232fde;
    /* The Fallback */
    background: rgba(35, 47, 222, 0.8); }

    .primary.darken-4 {
    color: #1e29ca !important; }

    .bg-primary.bg-darken-4 {
    background-color: #1e29ca !important; }
    .bg-primary.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(30, 41, 202, 0.6); }

    .btn-primary.btn-darken-4 {
    border-color: #3a44e1 !important;
    background-color: #1e29ca !important; }
    .btn-primary.btn-darken-4:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-darken-4:focus, .btn-primary.btn-darken-4:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-darken-4 {
    border-color: #1e29ca !important;
    color: #1e29ca !important; }
    .btn-outline-primary.btn-outline-darken-4:hover {
        background-color: #1e29ca !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1e29ca !important; }

    .border-primary.border-darken-4 {
    border: 1px solid #1e29ca !important; }

    .border-top-primary.border-top-darken-4 {
    border-top: 1px solid #1e29ca !important; }

    .border-bottom-primary.border-bottom-darken-4 {
    border-bottom: 1px solid #1e29ca !important; }

    .border-left-primary.border-left-darken-4 {
    border-left: 1px solid #1e29ca !important; }

    .border-right-primary.border-right-darken-4 {
    border-right: 1px solid #1e29ca !important; }

    .overlay-primary.overlay-darken-4 {
    background: #1e29ca;
    /* The Fallback */
    background: rgba(30, 41, 202, 0.8); }

    .primary.accent-1 {
    color: #efefff !important; }

    .bg-primary.bg-accent-1 {
    background-color: #efefff !important; }
    .bg-primary.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(239, 239, 255, 0.6); }

    .btn-primary.btn-accent-1 {
    border-color: #3a44e1 !important;
    background-color: #efefff !important; }
    .btn-primary.btn-accent-1:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-accent-1:focus, .btn-primary.btn-accent-1:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-accent-1 {
    border-color: #efefff !important;
    color: #efefff !important; }
    .btn-outline-primary.btn-outline-accent-1:hover {
        background-color: #efefff !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #efefff !important; }

    .border-primary.border-accent-1 {
    border: 1px solid #efefff !important; }

    .border-top-primary.border-top-accent-1 {
    border-top: 1px solid #efefff !important; }

    .border-bottom-primary.border-bottom-accent-1 {
    border-bottom: 1px solid #efefff !important; }

    .border-left-primary.border-left-accent-1 {
    border-left: 1px solid #efefff !important; }

    .border-right-primary.border-right-accent-1 {
    border-right: 1px solid #efefff !important; }

    .overlay-primary.overlay-accent-1 {
    background: #efefff;
    /* The Fallback */
    background: rgba(239, 239, 255, 0.8); }

    .primary.accent-2 {
    color: #dbdbff !important; }

    .bg-primary.bg-accent-2 {
    background-color: #dbdbff !important; }
    .bg-primary.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(219, 219, 255, 0.6); }

    .btn-primary.btn-accent-2 {
    border-color: #3a44e1 !important;
    background-color: #dbdbff !important; }
    .btn-primary.btn-accent-2:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-accent-2:focus, .btn-primary.btn-accent-2:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-accent-2 {
    border-color: #dbdbff !important;
    color: #dbdbff !important; }
    .btn-outline-primary.btn-outline-accent-2:hover {
        background-color: #dbdbff !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #dbdbff !important; }

    .border-primary.border-accent-2 {
    border: 1px solid #dbdbff !important; }

    .border-top-primary.border-top-accent-2 {
    border-top: 1px solid #dbdbff !important; }

    .border-bottom-primary.border-bottom-accent-2 {
    border-bottom: 1px solid #dbdbff !important; }

    .border-left-primary.border-left-accent-2 {
    border-left: 1px solid #dbdbff !important; }

    .border-right-primary.border-right-accent-2 {
    border-right: 1px solid #dbdbff !important; }

    .overlay-primary.overlay-accent-2 {
    background: #dbdbff;
    /* The Fallback */
    background: rgba(219, 219, 255, 0.8); }

    .primary.accent-3 {
    color: #bcbfff !important; }

    .bg-primary.bg-accent-3 {
    background-color: #bcbfff !important; }
    .bg-primary.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(188, 191, 255, 0.6); }

    .btn-primary.btn-accent-3 {
    border-color: #3a44e1 !important;
    background-color: #bcbfff !important; }
    .btn-primary.btn-accent-3:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-accent-3:focus, .btn-primary.btn-accent-3:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-accent-3 {
    border-color: #bcbfff !important;
    color: #bcbfff !important; }
    .btn-outline-primary.btn-outline-accent-3:hover {
        background-color: #bcbfff !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #bcbfff !important; }

    .border-primary.border-accent-3 {
    border: 1px solid #bcbfff !important; }

    .border-top-primary.border-top-accent-3 {
    border-top: 1px solid #bcbfff !important; }

    .border-bottom-primary.border-bottom-accent-3 {
    border-bottom: 1px solid #bcbfff !important; }

    .border-left-primary.border-left-accent-3 {
    border-left: 1px solid #bcbfff !important; }

    .border-right-primary.border-right-accent-3 {
    border-right: 1px solid #bcbfff !important; }

    .overlay-primary.overlay-accent-3 {
    background: #bcbfff;
    /* The Fallback */
    background: rgba(188, 191, 255, 0.8); }

    .primary.accent-4 {
    color: #a2a6ff !important; }

    .bg-primary.bg-accent-4 {
    background-color: #a2a6ff !important; }
    .bg-primary.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(162, 166, 255, 0.6); }

    .btn-primary.btn-accent-4 {
    border-color: #3a44e1 !important;
    background-color: #a2a6ff !important; }
    .btn-primary.btn-accent-4:hover {
        border-color: #3a44e1 !important;
        background-color: #232fde !important; }
    .btn-primary.btn-accent-4:focus, .btn-primary.btn-accent-4:active {
        border-color: #232fde !important;
        background-color: #1e29ca !important; }

    .btn-outline-primary.btn-outline-accent-4 {
    border-color: #a2a6ff !important;
    color: #a2a6ff !important; }
    .btn-outline-primary.btn-outline-accent-4:hover {
        background-color: #a2a6ff !important; }

    input:focus ~ .bg-primary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #a2a6ff !important; }

    .border-primary.border-accent-4 {
    border: 1px solid #a2a6ff !important; }

    .border-top-primary.border-top-accent-4 {
    border-top: 1px solid #a2a6ff !important; }

    .border-bottom-primary.border-bottom-accent-4 {
    border-bottom: 1px solid #a2a6ff !important; }

    .border-left-primary.border-left-accent-4 {
    border-left: 1px solid #a2a6ff !important; }

    .border-right-primary.border-right-accent-4 {
    border-right: 1px solid #a2a6ff !important; }

    .overlay-primary.overlay-accent-4 {
    background: #a2a6ff;
    /* The Fallback */
    background: rgba(162, 166, 255, 0.8); }

    .secondary.lighten-5 {
    color: #afb2bd !important; }

    .bg-secondary.bg-lighten-5 {
    background-color: #afb2bd !important; }
    .bg-secondary.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(175, 178, 189, 0.6); }

    .btn-secondary.btn-lighten-5 {
    border-color: #545766 !important;
    background-color: #afb2bd !important; }
    .btn-secondary.btn-lighten-5:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-lighten-5:focus, .btn-secondary.btn-lighten-5:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-lighten-5 {
    border-color: #afb2bd !important;
    color: #afb2bd !important; }
    .btn-outline-secondary.btn-outline-lighten-5:hover {
        background-color: #afb2bd !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #afb2bd !important; }

    .border-secondary.border-lighten-5 {
    border: 1px solid #afb2bd !important; }

    .border-top-secondary.border-top-lighten-5 {
    border-top: 1px solid #afb2bd !important; }

    .border-bottom-secondary.border-bottom-lighten-5 {
    border-bottom: 1px solid #afb2bd !important; }

    .border-left-secondary.border-left-lighten-5 {
    border-left: 1px solid #afb2bd !important; }

    .border-right-secondary.border-right-lighten-5 {
    border-right: 1px solid #afb2bd !important; }

    .overlay-secondary.overlay-lighten-5 {
    background: #afb2bd;
    /* The Fallback */
    background: rgba(175, 178, 189, 0.8); }

    .secondary.lighten-4 {
    color: #a1a4b2 !important; }

    .bg-secondary.bg-lighten-4 {
    background-color: #a1a4b2 !important; }
    .bg-secondary.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(161, 164, 178, 0.6); }

    .btn-secondary.btn-lighten-4 {
    border-color: #545766 !important;
    background-color: #a1a4b2 !important; }
    .btn-secondary.btn-lighten-4:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-lighten-4:focus, .btn-secondary.btn-lighten-4:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-lighten-4 {
    border-color: #a1a4b2 !important;
    color: #a1a4b2 !important; }
    .btn-outline-secondary.btn-outline-lighten-4:hover {
        background-color: #a1a4b2 !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #a1a4b2 !important; }

    .border-secondary.border-lighten-4 {
    border: 1px solid #a1a4b2 !important; }

    .border-top-secondary.border-top-lighten-4 {
    border-top: 1px solid #a1a4b2 !important; }

    .border-bottom-secondary.border-bottom-lighten-4 {
    border-bottom: 1px solid #a1a4b2 !important; }

    .border-left-secondary.border-left-lighten-4 {
    border-left: 1px solid #a1a4b2 !important; }

    .border-right-secondary.border-right-lighten-4 {
    border-right: 1px solid #a1a4b2 !important; }

    .overlay-secondary.overlay-lighten-4 {
    background: #a1a4b2;
    /* The Fallback */
    background: rgba(161, 164, 178, 0.8); }

    .secondary.lighten-3 {
    color: #9397a6 !important; }

    .bg-secondary.bg-lighten-3 {
    background-color: #9397a6 !important; }
    .bg-secondary.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(147, 151, 166, 0.6); }

    .btn-secondary.btn-lighten-3 {
    border-color: #545766 !important;
    background-color: #9397a6 !important; }
    .btn-secondary.btn-lighten-3:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-lighten-3:focus, .btn-secondary.btn-lighten-3:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-lighten-3 {
    border-color: #9397a6 !important;
    color: #9397a6 !important; }
    .btn-outline-secondary.btn-outline-lighten-3:hover {
        background-color: #9397a6 !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9397a6 !important; }

    .border-secondary.border-lighten-3 {
    border: 1px solid #9397a6 !important; }

    .border-top-secondary.border-top-lighten-3 {
    border-top: 1px solid #9397a6 !important; }

    .border-bottom-secondary.border-bottom-lighten-3 {
    border-bottom: 1px solid #9397a6 !important; }

    .border-left-secondary.border-left-lighten-3 {
    border-left: 1px solid #9397a6 !important; }

    .border-right-secondary.border-right-lighten-3 {
    border-right: 1px solid #9397a6 !important; }

    .overlay-secondary.overlay-lighten-3 {
    background: #9397a6;
    /* The Fallback */
    background: rgba(147, 151, 166, 0.8); }

    .secondary.lighten-2 {
    color: #85899b !important; }

    .bg-secondary.bg-lighten-2 {
    background-color: #85899b !important; }
    .bg-secondary.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(133, 137, 155, 0.6); }

    .btn-secondary.btn-lighten-2 {
    border-color: #545766 !important;
    background-color: #85899b !important; }
    .btn-secondary.btn-lighten-2:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-lighten-2:focus, .btn-secondary.btn-lighten-2:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-lighten-2 {
    border-color: #85899b !important;
    color: #85899b !important; }
    .btn-outline-secondary.btn-outline-lighten-2:hover {
        background-color: #85899b !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #85899b !important; }

    .border-secondary.border-lighten-2 {
    border: 1px solid #85899b !important; }

    .border-top-secondary.border-top-lighten-2 {
    border-top: 1px solid #85899b !important; }

    .border-bottom-secondary.border-bottom-lighten-2 {
    border-bottom: 1px solid #85899b !important; }

    .border-left-secondary.border-left-lighten-2 {
    border-left: 1px solid #85899b !important; }

    .border-right-secondary.border-right-lighten-2 {
    border-right: 1px solid #85899b !important; }

    .overlay-secondary.overlay-lighten-2 {
    background: #85899b;
    /* The Fallback */
    background: rgba(133, 137, 155, 0.8); }

    .secondary.lighten-1 {
    color: #777b8f !important; }

    .bg-secondary.bg-lighten-1 {
    background-color: #777b8f !important; }
    .bg-secondary.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(119, 123, 143, 0.6); }

    .btn-secondary.btn-lighten-1 {
    border-color: #545766 !important;
    background-color: #777b8f !important; }
    .btn-secondary.btn-lighten-1:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-lighten-1:focus, .btn-secondary.btn-lighten-1:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-lighten-1 {
    border-color: #777b8f !important;
    color: #777b8f !important; }
    .btn-outline-secondary.btn-outline-lighten-1:hover {
        background-color: #777b8f !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #777b8f !important; }

    .border-secondary.border-lighten-1 {
    border: 1px solid #777b8f !important; }

    .border-top-secondary.border-top-lighten-1 {
    border-top: 1px solid #777b8f !important; }

    .border-bottom-secondary.border-bottom-lighten-1 {
    border-bottom: 1px solid #777b8f !important; }

    .border-left-secondary.border-left-lighten-1 {
    border-left: 1px solid #777b8f !important; }

    .border-right-secondary.border-right-lighten-1 {
    border-right: 1px solid #777b8f !important; }

    .overlay-secondary.overlay-lighten-1 {
    background: #777b8f;
    /* The Fallback */
    background: rgba(119, 123, 143, 0.8); }

    .secondary {
    color: #6b6f82 !important; }

    .bg-secondary {
    background-color: #6b6f82 !important; }
    .bg-secondary .card-header,
    .bg-secondary .card-footer {
        background-color: transparent; }
    .bg-secondary.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(107, 111, 130, 0.6); }

    .selectboxit.selectboxit-btn.bg-secondary {
    background-color: #6b6f82 !important; }

    .alert-secondary {
    border-color: #6b6f82 !important;
    background-color: #9094a4 !important;
    color: #1a1b20 !important; }
    .alert-secondary .alert-link {
        color: #08080a !important; }

    .border-secondary {
    border-color: #6b6f82; }

    .overlay-secondary {
    background: #6b6f82;
    /* The Fallback */
    background: rgba(107, 111, 130, 0.8); }

    .color-info.secondary {
    background-color: #6b6f82 !important; }

    .btn-secondary {
    border-color: #6b6f82 !important;
    background-color: #6b6f82 !important;
    color: #FFFFFF; }
    .btn-secondary:hover {
        border-color: #777b8f !important;
        background-color: #777b8f !important;
        color: #FFF !important; }
    .btn-secondary:focus, .btn-secondary:active {
        border-color: #484b58 !important;
        background-color: #484b58 !important;
        color: #FFF !important; }
    .btn-secondary.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(107, 111, 130, 0.6); }

    .btn-outline-secondary {
    border-color: #6b6f82;
    background-color: transparent;
    color: #6b6f82; }
    .btn-outline-secondary:hover {
        background-color: #6b6f82;
        color: #FFF !important; }
    .btn-outline-secondary.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(107, 111, 130, 0.6); }

    input[type="checkbox"].bg-secondary + .custom-control-label:before, input[type="radio"].bg-secondary + .custom-control-label:before {
    background-color: #6b6f82 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6b6f82 !important; }

    .border-secondary {
    border: 1px solid #6b6f82 !important; }

    .border-top-secondary {
    border-top: 1px solid #6b6f82; }

    .border-bottom-secondary {
    border-bottom: 1px solid #6b6f82; }

    .border-left-secondary {
    border-left: 1px solid #6b6f82; }

    .border-right-secondary {
    border-right: 1px solid #6b6f82; }

    /* Bullet secondary */
    .bullet.bullet-secondary {
    background-color: #6b6f82; }

    .secondary.darken-1 {
    color: #5f6374 !important; }

    .bg-secondary.bg-darken-1 {
    background-color: #5f6374 !important; }
    .bg-secondary.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(95, 99, 116, 0.6); }

    .btn-secondary.btn-darken-1 {
    border-color: #545766 !important;
    background-color: #5f6374 !important; }
    .btn-secondary.btn-darken-1:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-darken-1:focus, .btn-secondary.btn-darken-1:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-darken-1 {
    border-color: #5f6374 !important;
    color: #5f6374 !important; }
    .btn-outline-secondary.btn-outline-darken-1:hover {
        background-color: #5f6374 !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #5f6374 !important; }

    .border-secondary.border-darken-1 {
    border: 1px solid #5f6374 !important; }

    .border-top-secondary.border-top-darken-1 {
    border-top: 1px solid #5f6374 !important; }

    .border-bottom-secondary.border-bottom-darken-1 {
    border-bottom: 1px solid #5f6374 !important; }

    .border-left-secondary.border-left-darken-1 {
    border-left: 1px solid #5f6374 !important; }

    .border-right-secondary.border-right-darken-1 {
    border-right: 1px solid #5f6374 !important; }

    .overlay-secondary.overlay-darken-1 {
    background: #5f6374;
    /* The Fallback */
    background: rgba(95, 99, 116, 0.8); }

    .secondary.darken-2 {
    color: #545766 !important; }

    .bg-secondary.bg-darken-2 {
    background-color: #545766 !important; }
    .bg-secondary.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(84, 87, 102, 0.6); }

    .btn-secondary.btn-darken-2 {
    border-color: #545766 !important;
    background-color: #545766 !important; }
    .btn-secondary.btn-darken-2:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-darken-2:focus, .btn-secondary.btn-darken-2:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-darken-2 {
    border-color: #545766 !important;
    color: #545766 !important; }
    .btn-outline-secondary.btn-outline-darken-2:hover {
        background-color: #545766 !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #545766 !important; }

    .border-secondary.border-darken-2 {
    border: 1px solid #545766 !important; }

    .border-top-secondary.border-top-darken-2 {
    border-top: 1px solid #545766 !important; }

    .border-bottom-secondary.border-bottom-darken-2 {
    border-bottom: 1px solid #545766 !important; }

    .border-left-secondary.border-left-darken-2 {
    border-left: 1px solid #545766 !important; }

    .border-right-secondary.border-right-darken-2 {
    border-right: 1px solid #545766 !important; }

    .overlay-secondary.overlay-darken-2 {
    background: #545766;
    /* The Fallback */
    background: rgba(84, 87, 102, 0.8); }

    .secondary.darken-3 {
    color: #484b58 !important; }

    .bg-secondary.bg-darken-3 {
    background-color: #484b58 !important; }
    .bg-secondary.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(72, 75, 88, 0.6); }

    .btn-secondary.btn-darken-3 {
    border-color: #545766 !important;
    background-color: #484b58 !important; }
    .btn-secondary.btn-darken-3:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-darken-3:focus, .btn-secondary.btn-darken-3:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-darken-3 {
    border-color: #484b58 !important;
    color: #484b58 !important; }
    .btn-outline-secondary.btn-outline-darken-3:hover {
        background-color: #484b58 !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #484b58 !important; }

    .border-secondary.border-darken-3 {
    border: 1px solid #484b58 !important; }

    .border-top-secondary.border-top-darken-3 {
    border-top: 1px solid #484b58 !important; }

    .border-bottom-secondary.border-bottom-darken-3 {
    border-bottom: 1px solid #484b58 !important; }

    .border-left-secondary.border-left-darken-3 {
    border-left: 1px solid #484b58 !important; }

    .border-right-secondary.border-right-darken-3 {
    border-right: 1px solid #484b58 !important; }

    .overlay-secondary.overlay-darken-3 {
    background: #484b58;
    /* The Fallback */
    background: rgba(72, 75, 88, 0.8); }

    .secondary.darken-4 {
    color: #3d3f4a !important; }

    .bg-secondary.bg-darken-4 {
    background-color: #3d3f4a !important; }
    .bg-secondary.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(61, 63, 74, 0.6); }

    .btn-secondary.btn-darken-4 {
    border-color: #545766 !important;
    background-color: #3d3f4a !important; }
    .btn-secondary.btn-darken-4:hover {
        border-color: #545766 !important;
        background-color: #484b58 !important; }
    .btn-secondary.btn-darken-4:focus, .btn-secondary.btn-darken-4:active {
        border-color: #484b58 !important;
        background-color: #3d3f4a !important; }

    .btn-outline-secondary.btn-outline-darken-4 {
    border-color: #3d3f4a !important;
    color: #3d3f4a !important; }
    .btn-outline-secondary.btn-outline-darken-4:hover {
        background-color: #3d3f4a !important; }

    input:focus ~ .bg-secondary {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #3d3f4a !important; }

    .border-secondary.border-darken-4 {
    border: 1px solid #3d3f4a !important; }

    .border-top-secondary.border-top-darken-4 {
    border-top: 1px solid #3d3f4a !important; }

    .border-bottom-secondary.border-bottom-darken-4 {
    border-bottom: 1px solid #3d3f4a !important; }

    .border-left-secondary.border-left-darken-4 {
    border-left: 1px solid #3d3f4a !important; }

    .border-right-secondary.border-right-darken-4 {
    border-right: 1px solid #3d3f4a !important; }

    .overlay-secondary.overlay-darken-4 {
    background: #3d3f4a;
    /* The Fallback */
    background: rgba(61, 63, 74, 0.8); }

    .success.lighten-5 {
    color: #8ee9c9 !important; }

    .bg-success.bg-lighten-5 {
    background-color: #8ee9c9 !important; }
    .bg-success.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(142, 233, 201, 0.6); }

    .btn-success.btn-lighten-5 {
    border-color: #20a576 !important;
    background-color: #8ee9c9 !important; }
    .btn-success.btn-lighten-5:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-lighten-5:focus, .btn-success.btn-lighten-5:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-lighten-5 {
    border-color: #8ee9c9 !important;
    color: #8ee9c9 !important; }
    .btn-outline-success.btn-outline-lighten-5:hover {
        background-color: #8ee9c9 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #8ee9c9 !important; }

    .border-success.border-lighten-5 {
    border: 1px solid #8ee9c9 !important; }

    .border-top-success.border-top-lighten-5 {
    border-top: 1px solid #8ee9c9 !important; }

    .border-bottom-success.border-bottom-lighten-5 {
    border-bottom: 1px solid #8ee9c9 !important; }

    .border-left-success.border-left-lighten-5 {
    border-left: 1px solid #8ee9c9 !important; }

    .border-right-success.border-right-lighten-5 {
    border-right: 1px solid #8ee9c9 !important; }

    .overlay-success.overlay-lighten-5 {
    background: #8ee9c9;
    /* The Fallback */
    background: rgba(142, 233, 201, 0.8); }

    .success.lighten-4 {
    color: #79e5be !important; }

    .bg-success.bg-lighten-4 {
    background-color: #79e5be !important; }
    .bg-success.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(121, 229, 190, 0.6); }

    .btn-success.btn-lighten-4 {
    border-color: #20a576 !important;
    background-color: #79e5be !important; }
    .btn-success.btn-lighten-4:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-lighten-4:focus, .btn-success.btn-lighten-4:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-lighten-4 {
    border-color: #79e5be !important;
    color: #79e5be !important; }
    .btn-outline-success.btn-outline-lighten-4:hover {
        background-color: #79e5be !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #79e5be !important; }

    .border-success.border-lighten-4 {
    border: 1px solid #79e5be !important; }

    .border-top-success.border-top-lighten-4 {
    border-top: 1px solid #79e5be !important; }

    .border-bottom-success.border-bottom-lighten-4 {
    border-bottom: 1px solid #79e5be !important; }

    .border-left-success.border-left-lighten-4 {
    border-left: 1px solid #79e5be !important; }

    .border-right-success.border-right-lighten-4 {
    border-right: 1px solid #79e5be !important; }

    .overlay-success.overlay-lighten-4 {
    background: #79e5be;
    /* The Fallback */
    background: rgba(121, 229, 190, 0.8); }

    .success.lighten-3 {
    color: #63e1b4 !important; }

    .bg-success.bg-lighten-3 {
    background-color: #63e1b4 !important; }
    .bg-success.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(99, 225, 180, 0.6); }

    .btn-success.btn-lighten-3 {
    border-color: #20a576 !important;
    background-color: #63e1b4 !important; }
    .btn-success.btn-lighten-3:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-lighten-3:focus, .btn-success.btn-lighten-3:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-lighten-3 {
    border-color: #63e1b4 !important;
    color: #63e1b4 !important; }
    .btn-outline-success.btn-outline-lighten-3:hover {
        background-color: #63e1b4 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #63e1b4 !important; }

    .border-success.border-lighten-3 {
    border: 1px solid #63e1b4 !important; }

    .border-top-success.border-top-lighten-3 {
    border-top: 1px solid #63e1b4 !important; }

    .border-bottom-success.border-bottom-lighten-3 {
    border-bottom: 1px solid #63e1b4 !important; }

    .border-left-success.border-left-lighten-3 {
    border-left: 1px solid #63e1b4 !important; }

    .border-right-success.border-right-lighten-3 {
    border-right: 1px solid #63e1b4 !important; }

    .overlay-success.overlay-lighten-3 {
    background: #63e1b4;
    /* The Fallback */
    background: rgba(99, 225, 180, 0.8); }

    .success.lighten-2 {
    color: #4eddaa !important; }

    .bg-success.bg-lighten-2 {
    background-color: #4eddaa !important; }
    .bg-success.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(78, 221, 170, 0.6); }

    .btn-success.btn-lighten-2 {
    border-color: #20a576 !important;
    background-color: #4eddaa !important; }
    .btn-success.btn-lighten-2:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-lighten-2:focus, .btn-success.btn-lighten-2:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-lighten-2 {
    border-color: #4eddaa !important;
    color: #4eddaa !important; }
    .btn-outline-success.btn-outline-lighten-2:hover {
        background-color: #4eddaa !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4eddaa !important; }

    .border-success.border-lighten-2 {
    border: 1px solid #4eddaa !important; }

    .border-top-success.border-top-lighten-2 {
    border-top: 1px solid #4eddaa !important; }

    .border-bottom-success.border-bottom-lighten-2 {
    border-bottom: 1px solid #4eddaa !important; }

    .border-left-success.border-left-lighten-2 {
    border-left: 1px solid #4eddaa !important; }

    .border-right-success.border-right-lighten-2 {
    border-right: 1px solid #4eddaa !important; }

    .overlay-success.overlay-lighten-2 {
    background: #4eddaa;
    /* The Fallback */
    background: rgba(78, 221, 170, 0.8); }

    .success.lighten-1 {
    color: #39d9a0 !important; }

    .bg-success.bg-lighten-1 {
    background-color: #39d9a0 !important; }
    .bg-success.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(57, 217, 160, 0.6); }

    .btn-success.btn-lighten-1 {
    border-color: #20a576 !important;
    background-color: #39d9a0 !important; }
    .btn-success.btn-lighten-1:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-lighten-1:focus, .btn-success.btn-lighten-1:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-lighten-1 {
    border-color: #39d9a0 !important;
    color: #39d9a0 !important; }
    .btn-outline-success.btn-outline-lighten-1:hover {
        background-color: #39d9a0 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #39d9a0 !important; }

    .border-success.border-lighten-1 {
    border: 1px solid #39d9a0 !important; }

    .border-top-success.border-top-lighten-1 {
    border-top: 1px solid #39d9a0 !important; }

    .border-bottom-success.border-bottom-lighten-1 {
    border-bottom: 1px solid #39d9a0 !important; }

    .border-left-success.border-left-lighten-1 {
    border-left: 1px solid #39d9a0 !important; }

    .border-right-success.border-right-lighten-1 {
    border-right: 1px solid #39d9a0 !important; }

    .overlay-success.overlay-lighten-1 {
    background: #39d9a0;
    /* The Fallback */
    background: rgba(57, 217, 160, 0.8); }

    .success {
    color: #28d094 !important; }

    .bg-success {
    background-color: #28d094 !important; }
    .bg-success .card-header,
    .bg-success .card-footer {
        background-color: transparent; }
    .bg-success.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(40, 208, 148, 0.6); }

    .selectboxit.selectboxit-btn.bg-success {
    background-color: #28d094 !important; }

    .alert-success {
    border-color: #28d094 !important;
    background-color: #5fe0b2 !important;
    color: #0b3a29 !important; }
    .alert-success .alert-link {
        color: #051811 !important; }

    .border-success {
    border-color: #28d094; }

    .overlay-success {
    background: #28d094;
    /* The Fallback */
    background: rgba(40, 208, 148, 0.8); }

    .color-info.success {
    background-color: #28d094 !important; }

    .btn-success {
    border-color: #28d094 !important;
    background-color: #28d094 !important;
    color: #FFFFFF; }
    .btn-success:hover {
        border-color: #39d9a0 !important;
        background-color: #39d9a0 !important;
        color: #FFF !important; }
    .btn-success:focus, .btn-success:active {
        border-color: #1c9066 !important;
        background-color: #1c9066 !important;
        color: #FFF !important; }
    .btn-success.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(40, 208, 148, 0.6); }

    .btn-outline-success {
    border-color: #28d094;
    background-color: transparent;
    color: #28d094; }
    .btn-outline-success:hover {
        background-color: #28d094;
        color: #FFF !important; }
    .btn-outline-success.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(40, 208, 148, 0.6); }

    input[type="checkbox"].bg-success + .custom-control-label:before, input[type="radio"].bg-success + .custom-control-label:before {
    background-color: #28d094 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #28d094 !important; }

    .border-success {
    border: 1px solid #28d094 !important; }

    .border-top-success {
    border-top: 1px solid #28d094; }

    .border-bottom-success {
    border-bottom: 1px solid #28d094; }

    .border-left-success {
    border-left: 1px solid #28d094; }

    .border-right-success {
    border-right: 1px solid #28d094; }

    /* Bullet success */
    .bullet.bullet-success {
    background-color: #28d094; }

    .success.darken-1 {
    color: #24bb85 !important; }

    .bg-success.bg-darken-1 {
    background-color: #24bb85 !important; }
    .bg-success.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(36, 187, 133, 0.6); }

    .btn-success.btn-darken-1 {
    border-color: #20a576 !important;
    background-color: #24bb85 !important; }
    .btn-success.btn-darken-1:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-darken-1:focus, .btn-success.btn-darken-1:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-darken-1 {
    border-color: #24bb85 !important;
    color: #24bb85 !important; }
    .btn-outline-success.btn-outline-darken-1:hover {
        background-color: #24bb85 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #24bb85 !important; }

    .border-success.border-darken-1 {
    border: 1px solid #24bb85 !important; }

    .border-top-success.border-top-darken-1 {
    border-top: 1px solid #24bb85 !important; }

    .border-bottom-success.border-bottom-darken-1 {
    border-bottom: 1px solid #24bb85 !important; }

    .border-left-success.border-left-darken-1 {
    border-left: 1px solid #24bb85 !important; }

    .border-right-success.border-right-darken-1 {
    border-right: 1px solid #24bb85 !important; }

    .overlay-success.overlay-darken-1 {
    background: #24bb85;
    /* The Fallback */
    background: rgba(36, 187, 133, 0.8); }

    .success.darken-2 {
    color: #20a576 !important; }

    .bg-success.bg-darken-2 {
    background-color: #20a576 !important; }
    .bg-success.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(32, 165, 118, 0.6); }

    .btn-success.btn-darken-2 {
    border-color: #20a576 !important;
    background-color: #20a576 !important; }
    .btn-success.btn-darken-2:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-darken-2:focus, .btn-success.btn-darken-2:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-darken-2 {
    border-color: #20a576 !important;
    color: #20a576 !important; }
    .btn-outline-success.btn-outline-darken-2:hover {
        background-color: #20a576 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #20a576 !important; }

    .border-success.border-darken-2 {
    border: 1px solid #20a576 !important; }

    .border-top-success.border-top-darken-2 {
    border-top: 1px solid #20a576 !important; }

    .border-bottom-success.border-bottom-darken-2 {
    border-bottom: 1px solid #20a576 !important; }

    .border-left-success.border-left-darken-2 {
    border-left: 1px solid #20a576 !important; }

    .border-right-success.border-right-darken-2 {
    border-right: 1px solid #20a576 !important; }

    .overlay-success.overlay-darken-2 {
    background: #20a576;
    /* The Fallback */
    background: rgba(32, 165, 118, 0.8); }

    .success.darken-3 {
    color: #1c9066 !important; }

    .bg-success.bg-darken-3 {
    background-color: #1c9066 !important; }
    .bg-success.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(28, 144, 102, 0.6); }

    .btn-success.btn-darken-3 {
    border-color: #20a576 !important;
    background-color: #1c9066 !important; }
    .btn-success.btn-darken-3:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-darken-3:focus, .btn-success.btn-darken-3:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-darken-3 {
    border-color: #1c9066 !important;
    color: #1c9066 !important; }
    .btn-outline-success.btn-outline-darken-3:hover {
        background-color: #1c9066 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1c9066 !important; }

    .border-success.border-darken-3 {
    border: 1px solid #1c9066 !important; }

    .border-top-success.border-top-darken-3 {
    border-top: 1px solid #1c9066 !important; }

    .border-bottom-success.border-bottom-darken-3 {
    border-bottom: 1px solid #1c9066 !important; }

    .border-left-success.border-left-darken-3 {
    border-left: 1px solid #1c9066 !important; }

    .border-right-success.border-right-darken-3 {
    border-right: 1px solid #1c9066 !important; }

    .overlay-success.overlay-darken-3 {
    background: #1c9066;
    /* The Fallback */
    background: rgba(28, 144, 102, 0.8); }

    .success.darken-4 {
    color: #187a57 !important; }

    .bg-success.bg-darken-4 {
    background-color: #187a57 !important; }
    .bg-success.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(24, 122, 87, 0.6); }

    .btn-success.btn-darken-4 {
    border-color: #20a576 !important;
    background-color: #187a57 !important; }
    .btn-success.btn-darken-4:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-darken-4:focus, .btn-success.btn-darken-4:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-darken-4 {
    border-color: #187a57 !important;
    color: #187a57 !important; }
    .btn-outline-success.btn-outline-darken-4:hover {
        background-color: #187a57 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #187a57 !important; }

    .border-success.border-darken-4 {
    border: 1px solid #187a57 !important; }

    .border-top-success.border-top-darken-4 {
    border-top: 1px solid #187a57 !important; }

    .border-bottom-success.border-bottom-darken-4 {
    border-bottom: 1px solid #187a57 !important; }

    .border-left-success.border-left-darken-4 {
    border-left: 1px solid #187a57 !important; }

    .border-right-success.border-right-darken-4 {
    border-right: 1px solid #187a57 !important; }

    .overlay-success.overlay-darken-4 {
    background: #187a57;
    /* The Fallback */
    background: rgba(24, 122, 87, 0.8); }

    .success.accent-1 {
    color: #e1fff0 !important; }

    .bg-success.bg-accent-1 {
    background-color: #e1fff0 !important; }
    .bg-success.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(225, 255, 240, 0.6); }

    .btn-success.btn-accent-1 {
    border-color: #20a576 !important;
    background-color: #e1fff0 !important; }
    .btn-success.btn-accent-1:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-accent-1:focus, .btn-success.btn-accent-1:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-accent-1 {
    border-color: #e1fff0 !important;
    color: #e1fff0 !important; }
    .btn-outline-success.btn-outline-accent-1:hover {
        background-color: #e1fff0 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e1fff0 !important; }

    .border-success.border-accent-1 {
    border: 1px solid #e1fff0 !important; }

    .border-top-success.border-top-accent-1 {
    border-top: 1px solid #e1fff0 !important; }

    .border-bottom-success.border-bottom-accent-1 {
    border-bottom: 1px solid #e1fff0 !important; }

    .border-left-success.border-left-accent-1 {
    border-left: 1px solid #e1fff0 !important; }

    .border-right-success.border-right-accent-1 {
    border-right: 1px solid #e1fff0 !important; }

    .overlay-success.overlay-accent-1 {
    background: #e1fff0;
    /* The Fallback */
    background: rgba(225, 255, 240, 0.8); }

    .success.accent-2 {
    color: #aeffd5 !important; }

    .bg-success.bg-accent-2 {
    background-color: #aeffd5 !important; }
    .bg-success.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(174, 255, 213, 0.6); }

    .btn-success.btn-accent-2 {
    border-color: #20a576 !important;
    background-color: #aeffd5 !important; }
    .btn-success.btn-accent-2:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-accent-2:focus, .btn-success.btn-accent-2:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-accent-2 {
    border-color: #aeffd5 !important;
    color: #aeffd5 !important; }
    .btn-outline-success.btn-outline-accent-2:hover {
        background-color: #aeffd5 !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #aeffd5 !important; }

    .border-success.border-accent-2 {
    border: 1px solid #aeffd5 !important; }

    .border-top-success.border-top-accent-2 {
    border-top: 1px solid #aeffd5 !important; }

    .border-bottom-success.border-bottom-accent-2 {
    border-bottom: 1px solid #aeffd5 !important; }

    .border-left-success.border-left-accent-2 {
    border-left: 1px solid #aeffd5 !important; }

    .border-right-success.border-right-accent-2 {
    border-right: 1px solid #aeffd5 !important; }

    .overlay-success.overlay-accent-2 {
    background: #aeffd5;
    /* The Fallback */
    background: rgba(174, 255, 213, 0.8); }

    .success.accent-3 {
    color: #7bffbb !important; }

    .bg-success.bg-accent-3 {
    background-color: #7bffbb !important; }
    .bg-success.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(123, 255, 187, 0.6); }

    .btn-success.btn-accent-3 {
    border-color: #20a576 !important;
    background-color: #7bffbb !important; }
    .btn-success.btn-accent-3:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-accent-3:focus, .btn-success.btn-accent-3:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-accent-3 {
    border-color: #7bffbb !important;
    color: #7bffbb !important; }
    .btn-outline-success.btn-outline-accent-3:hover {
        background-color: #7bffbb !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7bffbb !important; }

    .border-success.border-accent-3 {
    border: 1px solid #7bffbb !important; }

    .border-top-success.border-top-accent-3 {
    border-top: 1px solid #7bffbb !important; }

    .border-bottom-success.border-bottom-accent-3 {
    border-bottom: 1px solid #7bffbb !important; }

    .border-left-success.border-left-accent-3 {
    border-left: 1px solid #7bffbb !important; }

    .border-right-success.border-right-accent-3 {
    border-right: 1px solid #7bffbb !important; }

    .overlay-success.overlay-accent-3 {
    background: #7bffbb;
    /* The Fallback */
    background: rgba(123, 255, 187, 0.8); }

    .success.accent-4 {
    color: #62ffae !important; }

    .bg-success.bg-accent-4 {
    background-color: #62ffae !important; }
    .bg-success.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(98, 255, 174, 0.6); }

    .btn-success.btn-accent-4 {
    border-color: #20a576 !important;
    background-color: #62ffae !important; }
    .btn-success.btn-accent-4:hover {
        border-color: #20a576 !important;
        background-color: #1c9066 !important; }
    .btn-success.btn-accent-4:focus, .btn-success.btn-accent-4:active {
        border-color: #1c9066 !important;
        background-color: #187a57 !important; }

    .btn-outline-success.btn-outline-accent-4 {
    border-color: #62ffae !important;
    color: #62ffae !important; }
    .btn-outline-success.btn-outline-accent-4:hover {
        background-color: #62ffae !important; }

    input:focus ~ .bg-success {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #62ffae !important; }

    .border-success.border-accent-4 {
    border: 1px solid #62ffae !important; }

    .border-top-success.border-top-accent-4 {
    border-top: 1px solid #62ffae !important; }

    .border-bottom-success.border-bottom-accent-4 {
    border-bottom: 1px solid #62ffae !important; }

    .border-left-success.border-left-accent-4 {
    border-left: 1px solid #62ffae !important; }

    .border-right-success.border-right-accent-4 {
    border-right: 1px solid #62ffae !important; }

    .overlay-success.overlay-accent-4 {
    background: #62ffae;
    /* The Fallback */
    background: rgba(98, 255, 174, 0.8); }

    .info.lighten-5 {
    color: #97d2f9 !important; }

    .bg-info.bg-lighten-5 {
    background-color: #97d2f9 !important; }
    .bg-info.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(151, 210, 249, 0.6); }

    .btn-info.btn-lighten-5 {
    border-color: #0c84d1 !important;
    background-color: #97d2f9 !important; }
    .btn-info.btn-lighten-5:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-lighten-5:focus, .btn-info.btn-lighten-5:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-lighten-5 {
    border-color: #97d2f9 !important;
    color: #97d2f9 !important; }
    .btn-outline-info.btn-outline-lighten-5:hover {
        background-color: #97d2f9 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #97d2f9 !important; }

    .border-info.border-lighten-5 {
    border: 1px solid #97d2f9 !important; }

    .border-top-info.border-top-lighten-5 {
    border-top: 1px solid #97d2f9 !important; }

    .border-bottom-info.border-bottom-lighten-5 {
    border-bottom: 1px solid #97d2f9 !important; }

    .border-left-info.border-left-lighten-5 {
    border-left: 1px solid #97d2f9 !important; }

    .border-right-info.border-right-lighten-5 {
    border-right: 1px solid #97d2f9 !important; }

    .overlay-info.overlay-lighten-5 {
    background: #97d2f9;
    /* The Fallback */
    background: rgba(151, 210, 249, 0.8); }

    .info.lighten-4 {
    color: #7ec8f8 !important; }

    .bg-info.bg-lighten-4 {
    background-color: #7ec8f8 !important; }
    .bg-info.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(126, 200, 248, 0.6); }

    .btn-info.btn-lighten-4 {
    border-color: #0c84d1 !important;
    background-color: #7ec8f8 !important; }
    .btn-info.btn-lighten-4:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-lighten-4:focus, .btn-info.btn-lighten-4:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-lighten-4 {
    border-color: #7ec8f8 !important;
    color: #7ec8f8 !important; }
    .btn-outline-info.btn-outline-lighten-4:hover {
        background-color: #7ec8f8 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7ec8f8 !important; }

    .border-info.border-lighten-4 {
    border: 1px solid #7ec8f8 !important; }

    .border-top-info.border-top-lighten-4 {
    border-top: 1px solid #7ec8f8 !important; }

    .border-bottom-info.border-bottom-lighten-4 {
    border-bottom: 1px solid #7ec8f8 !important; }

    .border-left-info.border-left-lighten-4 {
    border-left: 1px solid #7ec8f8 !important; }

    .border-right-info.border-right-lighten-4 {
    border-right: 1px solid #7ec8f8 !important; }

    .overlay-info.overlay-lighten-4 {
    background: #7ec8f8;
    /* The Fallback */
    background: rgba(126, 200, 248, 0.8); }

    .info.lighten-3 {
    color: #66bef6 !important; }

    .bg-info.bg-lighten-3 {
    background-color: #66bef6 !important; }
    .bg-info.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(102, 190, 246, 0.6); }

    .btn-info.btn-lighten-3 {
    border-color: #0c84d1 !important;
    background-color: #66bef6 !important; }
    .btn-info.btn-lighten-3:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-lighten-3:focus, .btn-info.btn-lighten-3:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-lighten-3 {
    border-color: #66bef6 !important;
    color: #66bef6 !important; }
    .btn-outline-info.btn-outline-lighten-3:hover {
        background-color: #66bef6 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #66bef6 !important; }

    .border-info.border-lighten-3 {
    border: 1px solid #66bef6 !important; }

    .border-top-info.border-top-lighten-3 {
    border-top: 1px solid #66bef6 !important; }

    .border-bottom-info.border-bottom-lighten-3 {
    border-bottom: 1px solid #66bef6 !important; }

    .border-left-info.border-left-lighten-3 {
    border-left: 1px solid #66bef6 !important; }

    .border-right-info.border-right-lighten-3 {
    border-right: 1px solid #66bef6 !important; }

    .overlay-info.overlay-lighten-3 {
    background: #66bef6;
    /* The Fallback */
    background: rgba(102, 190, 246, 0.8); }

    .info.lighten-2 {
    color: #4eb4f5 !important; }

    .bg-info.bg-lighten-2 {
    background-color: #4eb4f5 !important; }
    .bg-info.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(78, 180, 245, 0.6); }

    .btn-info.btn-lighten-2 {
    border-color: #0c84d1 !important;
    background-color: #4eb4f5 !important; }
    .btn-info.btn-lighten-2:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-lighten-2:focus, .btn-info.btn-lighten-2:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-lighten-2 {
    border-color: #4eb4f5 !important;
    color: #4eb4f5 !important; }
    .btn-outline-info.btn-outline-lighten-2:hover {
        background-color: #4eb4f5 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4eb4f5 !important; }

    .border-info.border-lighten-2 {
    border: 1px solid #4eb4f5 !important; }

    .border-top-info.border-top-lighten-2 {
    border-top: 1px solid #4eb4f5 !important; }

    .border-bottom-info.border-bottom-lighten-2 {
    border-bottom: 1px solid #4eb4f5 !important; }

    .border-left-info.border-left-lighten-2 {
    border-left: 1px solid #4eb4f5 !important; }

    .border-right-info.border-right-lighten-2 {
    border-right: 1px solid #4eb4f5 !important; }

    .overlay-info.overlay-lighten-2 {
    background: #4eb4f5;
    /* The Fallback */
    background: rgba(78, 180, 245, 0.8); }

    .info.lighten-1 {
    color: #36a9f3 !important; }

    .bg-info.bg-lighten-1 {
    background-color: #36a9f3 !important; }
    .bg-info.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(54, 169, 243, 0.6); }

    .btn-info.btn-lighten-1 {
    border-color: #0c84d1 !important;
    background-color: #36a9f3 !important; }
    .btn-info.btn-lighten-1:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-lighten-1:focus, .btn-info.btn-lighten-1:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-lighten-1 {
    border-color: #36a9f3 !important;
    color: #36a9f3 !important; }
    .btn-outline-info.btn-outline-lighten-1:hover {
        background-color: #36a9f3 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #36a9f3 !important; }

    .border-info.border-lighten-1 {
    border: 1px solid #36a9f3 !important; }

    .border-top-info.border-top-lighten-1 {
    border-top: 1px solid #36a9f3 !important; }

    .border-bottom-info.border-bottom-lighten-1 {
    border-bottom: 1px solid #36a9f3 !important; }

    .border-left-info.border-left-lighten-1 {
    border-left: 1px solid #36a9f3 !important; }

    .border-right-info.border-right-lighten-1 {
    border-right: 1px solid #36a9f3 !important; }

    .overlay-info.overlay-lighten-1 {
    background: #36a9f3;
    /* The Fallback */
    background: rgba(54, 169, 243, 0.8); }

    .info {
    color: #1e9ff2 !important; }

    .bg-info {
    background-color: #1e9ff2 !important; }
    .bg-info .card-header,
    .bg-info .card-footer {
        background-color: transparent; }
    .bg-info.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(30, 159, 242, 0.6); }

    .selectboxit.selectboxit-btn.bg-info {
    background-color: #1e9ff2 !important; }

    .alert-info {
    border-color: #1e9ff2 !important;
    background-color: #62bcf6 !important;
    color: #053858 !important; }
    .alert-info .alert-link {
        color: #031f32 !important; }

    .border-info {
    border-color: #1e9ff2; }

    .overlay-info {
    background: #1e9ff2;
    /* The Fallback */
    background: rgba(30, 159, 242, 0.8); }

    .color-info.info {
    background-color: #1e9ff2 !important; }

    .btn-info {
    border-color: #1e9ff2 !important;
    background-color: #1e9ff2 !important;
    color: #FFFFFF; }
    .btn-info:hover {
        border-color: #36a9f3 !important;
        background-color: #36a9f3 !important;
        color: #FFF !important; }
    .btn-info:focus, .btn-info:active {
        border-color: #0b75b9 !important;
        background-color: #0b75b9 !important;
        color: #FFF !important; }
    .btn-info.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(30, 159, 242, 0.6); }

    .btn-outline-info {
    border-color: #1e9ff2;
    background-color: transparent;
    color: #1e9ff2; }
    .btn-outline-info:hover {
        background-color: #1e9ff2;
        color: #FFF !important; }
    .btn-outline-info.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(30, 159, 242, 0.6); }

    input[type="checkbox"].bg-info + .custom-control-label:before, input[type="radio"].bg-info + .custom-control-label:before {
    background-color: #1e9ff2 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1e9ff2 !important; }

    .border-info {
    border: 1px solid #1e9ff2 !important; }

    .border-top-info {
    border-top: 1px solid #1e9ff2; }

    .border-bottom-info {
    border-bottom: 1px solid #1e9ff2; }

    .border-left-info {
    border-left: 1px solid #1e9ff2; }

    .border-right-info {
    border-right: 1px solid #1e9ff2; }

    /* Bullet info */
    .bullet.bullet-info {
    background-color: #1e9ff2; }

    .info.darken-1 {
    color: #0d93e9 !important; }

    .bg-info.bg-darken-1 {
    background-color: #0d93e9 !important; }
    .bg-info.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(13, 147, 233, 0.6); }

    .btn-info.btn-darken-1 {
    border-color: #0c84d1 !important;
    background-color: #0d93e9 !important; }
    .btn-info.btn-darken-1:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-darken-1:focus, .btn-info.btn-darken-1:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-darken-1 {
    border-color: #0d93e9 !important;
    color: #0d93e9 !important; }
    .btn-outline-info.btn-outline-darken-1:hover {
        background-color: #0d93e9 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0d93e9 !important; }

    .border-info.border-darken-1 {
    border: 1px solid #0d93e9 !important; }

    .border-top-info.border-top-darken-1 {
    border-top: 1px solid #0d93e9 !important; }

    .border-bottom-info.border-bottom-darken-1 {
    border-bottom: 1px solid #0d93e9 !important; }

    .border-left-info.border-left-darken-1 {
    border-left: 1px solid #0d93e9 !important; }

    .border-right-info.border-right-darken-1 {
    border-right: 1px solid #0d93e9 !important; }

    .overlay-info.overlay-darken-1 {
    background: #0d93e9;
    /* The Fallback */
    background: rgba(13, 147, 233, 0.8); }

    .info.darken-2 {
    color: #0c84d1 !important; }

    .bg-info.bg-darken-2 {
    background-color: #0c84d1 !important; }
    .bg-info.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(12, 132, 209, 0.6); }

    .btn-info.btn-darken-2 {
    border-color: #0c84d1 !important;
    background-color: #0c84d1 !important; }
    .btn-info.btn-darken-2:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-darken-2:focus, .btn-info.btn-darken-2:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-darken-2 {
    border-color: #0c84d1 !important;
    color: #0c84d1 !important; }
    .btn-outline-info.btn-outline-darken-2:hover {
        background-color: #0c84d1 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0c84d1 !important; }

    .border-info.border-darken-2 {
    border: 1px solid #0c84d1 !important; }

    .border-top-info.border-top-darken-2 {
    border-top: 1px solid #0c84d1 !important; }

    .border-bottom-info.border-bottom-darken-2 {
    border-bottom: 1px solid #0c84d1 !important; }

    .border-left-info.border-left-darken-2 {
    border-left: 1px solid #0c84d1 !important; }

    .border-right-info.border-right-darken-2 {
    border-right: 1px solid #0c84d1 !important; }

    .overlay-info.overlay-darken-2 {
    background: #0c84d1;
    /* The Fallback */
    background: rgba(12, 132, 209, 0.8); }

    .info.darken-3 {
    color: #0b75b9 !important; }

    .bg-info.bg-darken-3 {
    background-color: #0b75b9 !important; }
    .bg-info.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(11, 117, 185, 0.6); }

    .btn-info.btn-darken-3 {
    border-color: #0c84d1 !important;
    background-color: #0b75b9 !important; }
    .btn-info.btn-darken-3:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-darken-3:focus, .btn-info.btn-darken-3:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-darken-3 {
    border-color: #0b75b9 !important;
    color: #0b75b9 !important; }
    .btn-outline-info.btn-outline-darken-3:hover {
        background-color: #0b75b9 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0b75b9 !important; }

    .border-info.border-darken-3 {
    border: 1px solid #0b75b9 !important; }

    .border-top-info.border-top-darken-3 {
    border-top: 1px solid #0b75b9 !important; }

    .border-bottom-info.border-bottom-darken-3 {
    border-bottom: 1px solid #0b75b9 !important; }

    .border-left-info.border-left-darken-3 {
    border-left: 1px solid #0b75b9 !important; }

    .border-right-info.border-right-darken-3 {
    border-right: 1px solid #0b75b9 !important; }

    .overlay-info.overlay-darken-3 {
    background: #0b75b9;
    /* The Fallback */
    background: rgba(11, 117, 185, 0.8); }

    .info.darken-4 {
    color: #0965a1 !important; }

    .bg-info.bg-darken-4 {
    background-color: #0965a1 !important; }
    .bg-info.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(9, 101, 161, 0.6); }

    .btn-info.btn-darken-4 {
    border-color: #0c84d1 !important;
    background-color: #0965a1 !important; }
    .btn-info.btn-darken-4:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-darken-4:focus, .btn-info.btn-darken-4:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-darken-4 {
    border-color: #0965a1 !important;
    color: #0965a1 !important; }
    .btn-outline-info.btn-outline-darken-4:hover {
        background-color: #0965a1 !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0965a1 !important; }

    .border-info.border-darken-4 {
    border: 1px solid #0965a1 !important; }

    .border-top-info.border-top-darken-4 {
    border-top: 1px solid #0965a1 !important; }

    .border-bottom-info.border-bottom-darken-4 {
    border-bottom: 1px solid #0965a1 !important; }

    .border-left-info.border-left-darken-4 {
    border-left: 1px solid #0965a1 !important; }

    .border-right-info.border-right-darken-4 {
    border-right: 1px solid #0965a1 !important; }

    .overlay-info.overlay-darken-4 {
    background: #0965a1;
    /* The Fallback */
    background: rgba(9, 101, 161, 0.8); }

    .info.accent-1 {
    color: #eff5ff !important; }

    .bg-info.bg-accent-1 {
    background-color: #eff5ff !important; }
    .bg-info.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(239, 245, 255, 0.6); }

    .btn-info.btn-accent-1 {
    border-color: #0c84d1 !important;
    background-color: #eff5ff !important; }
    .btn-info.btn-accent-1:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-accent-1:focus, .btn-info.btn-accent-1:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-accent-1 {
    border-color: #eff5ff !important;
    color: #eff5ff !important; }
    .btn-outline-info.btn-outline-accent-1:hover {
        background-color: #eff5ff !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #eff5ff !important; }

    .border-info.border-accent-1 {
    border: 1px solid #eff5ff !important; }

    .border-top-info.border-top-accent-1 {
    border-top: 1px solid #eff5ff !important; }

    .border-bottom-info.border-bottom-accent-1 {
    border-bottom: 1px solid #eff5ff !important; }

    .border-left-info.border-left-accent-1 {
    border-left: 1px solid #eff5ff !important; }

    .border-right-info.border-right-accent-1 {
    border-right: 1px solid #eff5ff !important; }

    .overlay-info.overlay-accent-1 {
    background: #eff5ff;
    /* The Fallback */
    background: rgba(239, 245, 255, 0.8); }

    .info.accent-2 {
    color: #dfecff !important; }

    .bg-info.bg-accent-2 {
    background-color: #dfecff !important; }
    .bg-info.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(223, 236, 255, 0.6); }

    .btn-info.btn-accent-2 {
    border-color: #0c84d1 !important;
    background-color: #dfecff !important; }
    .btn-info.btn-accent-2:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-accent-2:focus, .btn-info.btn-accent-2:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-accent-2 {
    border-color: #dfecff !important;
    color: #dfecff !important; }
    .btn-outline-info.btn-outline-accent-2:hover {
        background-color: #dfecff !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #dfecff !important; }

    .border-info.border-accent-2 {
    border: 1px solid #dfecff !important; }

    .border-top-info.border-top-accent-2 {
    border-top: 1px solid #dfecff !important; }

    .border-bottom-info.border-bottom-accent-2 {
    border-bottom: 1px solid #dfecff !important; }

    .border-left-info.border-left-accent-2 {
    border-left: 1px solid #dfecff !important; }

    .border-right-info.border-right-accent-2 {
    border-right: 1px solid #dfecff !important; }

    .overlay-info.overlay-accent-2 {
    background: #dfecff;
    /* The Fallback */
    background: rgba(223, 236, 255, 0.8); }

    .info.accent-3 {
    color: #accfff !important; }

    .bg-info.bg-accent-3 {
    background-color: #accfff !important; }
    .bg-info.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(172, 207, 255, 0.6); }

    .btn-info.btn-accent-3 {
    border-color: #0c84d1 !important;
    background-color: #accfff !important; }
    .btn-info.btn-accent-3:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-accent-3:focus, .btn-info.btn-accent-3:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-accent-3 {
    border-color: #accfff !important;
    color: #accfff !important; }
    .btn-outline-info.btn-outline-accent-3:hover {
        background-color: #accfff !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #accfff !important; }

    .border-info.border-accent-3 {
    border: 1px solid #accfff !important; }

    .border-top-info.border-top-accent-3 {
    border-top: 1px solid #accfff !important; }

    .border-bottom-info.border-bottom-accent-3 {
    border-bottom: 1px solid #accfff !important; }

    .border-left-info.border-left-accent-3 {
    border-left: 1px solid #accfff !important; }

    .border-right-info.border-right-accent-3 {
    border-right: 1px solid #accfff !important; }

    .overlay-info.overlay-accent-3 {
    background: #accfff;
    /* The Fallback */
    background: rgba(172, 207, 255, 0.8); }

    .info.accent-4 {
    color: #92c0ff !important; }

    .bg-info.bg-accent-4 {
    background-color: #92c0ff !important; }
    .bg-info.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(146, 192, 255, 0.6); }

    .btn-info.btn-accent-4 {
    border-color: #0c84d1 !important;
    background-color: #92c0ff !important; }
    .btn-info.btn-accent-4:hover {
        border-color: #0c84d1 !important;
        background-color: #0b75b9 !important; }
    .btn-info.btn-accent-4:focus, .btn-info.btn-accent-4:active {
        border-color: #0b75b9 !important;
        background-color: #0965a1 !important; }

    .btn-outline-info.btn-outline-accent-4 {
    border-color: #92c0ff !important;
    color: #92c0ff !important; }
    .btn-outline-info.btn-outline-accent-4:hover {
        background-color: #92c0ff !important; }

    input:focus ~ .bg-info {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #92c0ff !important; }

    .border-info.border-accent-4 {
    border: 1px solid #92c0ff !important; }

    .border-top-info.border-top-accent-4 {
    border-top: 1px solid #92c0ff !important; }

    .border-bottom-info.border-bottom-accent-4 {
    border-bottom: 1px solid #92c0ff !important; }

    .border-left-info.border-left-accent-4 {
    border-left: 1px solid #92c0ff !important; }

    .border-right-info.border-right-accent-4 {
    border-right: 1px solid #92c0ff !important; }

    .overlay-info.overlay-accent-4 {
    background: #92c0ff;
    /* The Fallback */
    background: rgba(146, 192, 255, 0.8); }

    .warning.lighten-5 {
    color: #ffdec9 !important; }

    .bg-warning.bg-lighten-5 {
    background-color: #ffdec9 !important; }
    .bg-warning.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 222, 201, 0.6); }

    .btn-warning.btn-lighten-5 {
    border-color: #ff7216 !important;
    background-color: #ffdec9 !important; }
    .btn-warning.btn-lighten-5:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-lighten-5:focus, .btn-warning.btn-lighten-5:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-lighten-5 {
    border-color: #ffdec9 !important;
    color: #ffdec9 !important; }
    .btn-outline-warning.btn-outline-lighten-5:hover {
        background-color: #ffdec9 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffdec9 !important; }

    .border-warning.border-lighten-5 {
    border: 1px solid #ffdec9 !important; }

    .border-top-warning.border-top-lighten-5 {
    border-top: 1px solid #ffdec9 !important; }

    .border-bottom-warning.border-bottom-lighten-5 {
    border-bottom: 1px solid #ffdec9 !important; }

    .border-left-warning.border-left-lighten-5 {
    border-left: 1px solid #ffdec9 !important; }

    .border-right-warning.border-right-lighten-5 {
    border-right: 1px solid #ffdec9 !important; }

    .overlay-warning.overlay-lighten-5 {
    background: #ffdec9;
    /* The Fallback */
    background: rgba(255, 222, 201, 0.8); }

    .warning.lighten-4 {
    color: #ffcfaf !important; }

    .bg-warning.bg-lighten-4 {
    background-color: #ffcfaf !important; }
    .bg-warning.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 207, 175, 0.6); }

    .btn-warning.btn-lighten-4 {
    border-color: #ff7216 !important;
    background-color: #ffcfaf !important; }
    .btn-warning.btn-lighten-4:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-lighten-4:focus, .btn-warning.btn-lighten-4:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-lighten-4 {
    border-color: #ffcfaf !important;
    color: #ffcfaf !important; }
    .btn-outline-warning.btn-outline-lighten-4:hover {
        background-color: #ffcfaf !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffcfaf !important; }

    .border-warning.border-lighten-4 {
    border: 1px solid #ffcfaf !important; }

    .border-top-warning.border-top-lighten-4 {
    border-top: 1px solid #ffcfaf !important; }

    .border-bottom-warning.border-bottom-lighten-4 {
    border-bottom: 1px solid #ffcfaf !important; }

    .border-left-warning.border-left-lighten-4 {
    border-left: 1px solid #ffcfaf !important; }

    .border-right-warning.border-right-lighten-4 {
    border-right: 1px solid #ffcfaf !important; }

    .overlay-warning.overlay-lighten-4 {
    background: #ffcfaf;
    /* The Fallback */
    background: rgba(255, 207, 175, 0.8); }

    .warning.lighten-3 {
    color: #ffbf96 !important; }

    .bg-warning.bg-lighten-3 {
    background-color: #ffbf96 !important; }
    .bg-warning.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 191, 150, 0.6); }

    .btn-warning.btn-lighten-3 {
    border-color: #ff7216 !important;
    background-color: #ffbf96 !important; }
    .btn-warning.btn-lighten-3:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-lighten-3:focus, .btn-warning.btn-lighten-3:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-lighten-3 {
    border-color: #ffbf96 !important;
    color: #ffbf96 !important; }
    .btn-outline-warning.btn-outline-lighten-3:hover {
        background-color: #ffbf96 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffbf96 !important; }

    .border-warning.border-lighten-3 {
    border: 1px solid #ffbf96 !important; }

    .border-top-warning.border-top-lighten-3 {
    border-top: 1px solid #ffbf96 !important; }

    .border-bottom-warning.border-bottom-lighten-3 {
    border-bottom: 1px solid #ffbf96 !important; }

    .border-left-warning.border-left-lighten-3 {
    border-left: 1px solid #ffbf96 !important; }

    .border-right-warning.border-right-lighten-3 {
    border-right: 1px solid #ffbf96 !important; }

    .overlay-warning.overlay-lighten-3 {
    background: #ffbf96;
    /* The Fallback */
    background: rgba(255, 191, 150, 0.8); }

    .warning.lighten-2 {
    color: #ffb07c !important; }

    .bg-warning.bg-lighten-2 {
    background-color: #ffb07c !important; }
    .bg-warning.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 176, 124, 0.6); }

    .btn-warning.btn-lighten-2 {
    border-color: #ff7216 !important;
    background-color: #ffb07c !important; }
    .btn-warning.btn-lighten-2:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-lighten-2:focus, .btn-warning.btn-lighten-2:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-lighten-2 {
    border-color: #ffb07c !important;
    color: #ffb07c !important; }
    .btn-outline-warning.btn-outline-lighten-2:hover {
        background-color: #ffb07c !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffb07c !important; }

    .border-warning.border-lighten-2 {
    border: 1px solid #ffb07c !important; }

    .border-top-warning.border-top-lighten-2 {
    border-top: 1px solid #ffb07c !important; }

    .border-bottom-warning.border-bottom-lighten-2 {
    border-bottom: 1px solid #ffb07c !important; }

    .border-left-warning.border-left-lighten-2 {
    border-left: 1px solid #ffb07c !important; }

    .border-right-warning.border-right-lighten-2 {
    border-right: 1px solid #ffb07c !important; }

    .overlay-warning.overlay-lighten-2 {
    background: #ffb07c;
    /* The Fallback */
    background: rgba(255, 176, 124, 0.8); }

    .warning.lighten-1 {
    color: #ffa063 !important; }

    .bg-warning.bg-lighten-1 {
    background-color: #ffa063 !important; }
    .bg-warning.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 160, 99, 0.6); }

    .btn-warning.btn-lighten-1 {
    border-color: #ff7216 !important;
    background-color: #ffa063 !important; }
    .btn-warning.btn-lighten-1:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-lighten-1:focus, .btn-warning.btn-lighten-1:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-lighten-1 {
    border-color: #ffa063 !important;
    color: #ffa063 !important; }
    .btn-outline-warning.btn-outline-lighten-1:hover {
        background-color: #ffa063 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffa063 !important; }

    .border-warning.border-lighten-1 {
    border: 1px solid #ffa063 !important; }

    .border-top-warning.border-top-lighten-1 {
    border-top: 1px solid #ffa063 !important; }

    .border-bottom-warning.border-bottom-lighten-1 {
    border-bottom: 1px solid #ffa063 !important; }

    .border-left-warning.border-left-lighten-1 {
    border-left: 1px solid #ffa063 !important; }

    .border-right-warning.border-right-lighten-1 {
    border-right: 1px solid #ffa063 !important; }

    .overlay-warning.overlay-lighten-1 {
    background: #ffa063;
    /* The Fallback */
    background: rgba(255, 160, 99, 0.8); }

    .warning {
    color: #ff9149 !important; }

    .bg-warning {
    background-color: #ff9149 !important; }
    .bg-warning .card-header,
    .bg-warning .card-footer {
        background-color: transparent; }
    .bg-warning.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 145, 73, 0.6); }

    .selectboxit.selectboxit-btn.bg-warning {
    background-color: #ff9149 !important; }

    .alert-warning {
    border-color: #ff9149 !important;
    background-color: #ffbc90 !important;
    color: #963b00 !important; }
    .alert-warning .alert-link {
        color: #6d2b00 !important; }

    .border-warning {
    border-color: #ff9149; }

    .overlay-warning {
    background: #ff9149;
    /* The Fallback */
    background: rgba(255, 145, 73, 0.8); }

    .color-info.warning {
    background-color: #ff9149 !important; }

    .btn-warning {
    border-color: #ff9149 !important;
    background-color: #ff9149 !important;
    color: #FFFFFF; }
    .btn-warning:hover {
        border-color: #ffa063 !important;
        background-color: #ffa063 !important;
        color: #FFF !important; }
    .btn-warning:focus, .btn-warning:active {
        border-color: #fc6300 !important;
        background-color: #fc6300 !important;
        color: #FFF !important; }
    .btn-warning.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 145, 73, 0.6); }

    .btn-outline-warning {
    border-color: #ff9149;
    background-color: transparent;
    color: #ff9149; }
    .btn-outline-warning:hover {
        background-color: #ff9149;
        color: #FFF !important; }
    .btn-outline-warning.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 145, 73, 0.6); }

    input[type="checkbox"].bg-warning + .custom-control-label:before, input[type="radio"].bg-warning + .custom-control-label:before {
    background-color: #ff9149 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff9149 !important; }

    .border-warning {
    border: 1px solid #ff9149 !important; }

    .border-top-warning {
    border-top: 1px solid #ff9149; }

    .border-bottom-warning {
    border-bottom: 1px solid #ff9149; }

    .border-left-warning {
    border-left: 1px solid #ff9149; }

    .border-right-warning {
    border-right: 1px solid #ff9149; }

    /* Bullet warning */
    .bullet.bullet-warning {
    background-color: #ff9149; }

    .warning.darken-1 {
    color: #ff8230 !important; }

    .bg-warning.bg-darken-1 {
    background-color: #ff8230 !important; }
    .bg-warning.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 130, 48, 0.6); }

    .btn-warning.btn-darken-1 {
    border-color: #ff7216 !important;
    background-color: #ff8230 !important; }
    .btn-warning.btn-darken-1:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-darken-1:focus, .btn-warning.btn-darken-1:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-darken-1 {
    border-color: #ff8230 !important;
    color: #ff8230 !important; }
    .btn-outline-warning.btn-outline-darken-1:hover {
        background-color: #ff8230 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff8230 !important; }

    .border-warning.border-darken-1 {
    border: 1px solid #ff8230 !important; }

    .border-top-warning.border-top-darken-1 {
    border-top: 1px solid #ff8230 !important; }

    .border-bottom-warning.border-bottom-darken-1 {
    border-bottom: 1px solid #ff8230 !important; }

    .border-left-warning.border-left-darken-1 {
    border-left: 1px solid #ff8230 !important; }

    .border-right-warning.border-right-darken-1 {
    border-right: 1px solid #ff8230 !important; }

    .overlay-warning.overlay-darken-1 {
    background: #ff8230;
    /* The Fallback */
    background: rgba(255, 130, 48, 0.8); }

    .warning.darken-2 {
    color: #ff7216 !important; }

    .bg-warning.bg-darken-2 {
    background-color: #ff7216 !important; }
    .bg-warning.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 114, 22, 0.6); }

    .btn-warning.btn-darken-2 {
    border-color: #ff7216 !important;
    background-color: #ff7216 !important; }
    .btn-warning.btn-darken-2:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-darken-2:focus, .btn-warning.btn-darken-2:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-darken-2 {
    border-color: #ff7216 !important;
    color: #ff7216 !important; }
    .btn-outline-warning.btn-outline-darken-2:hover {
        background-color: #ff7216 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff7216 !important; }

    .border-warning.border-darken-2 {
    border: 1px solid #ff7216 !important; }

    .border-top-warning.border-top-darken-2 {
    border-top: 1px solid #ff7216 !important; }

    .border-bottom-warning.border-bottom-darken-2 {
    border-bottom: 1px solid #ff7216 !important; }

    .border-left-warning.border-left-darken-2 {
    border-left: 1px solid #ff7216 !important; }

    .border-right-warning.border-right-darken-2 {
    border-right: 1px solid #ff7216 !important; }

    .overlay-warning.overlay-darken-2 {
    background: #ff7216;
    /* The Fallback */
    background: rgba(255, 114, 22, 0.8); }

    .warning.darken-3 {
    color: #fc6300 !important; }

    .bg-warning.bg-darken-3 {
    background-color: #fc6300 !important; }
    .bg-warning.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(252, 99, 0, 0.6); }

    .btn-warning.btn-darken-3 {
    border-color: #ff7216 !important;
    background-color: #fc6300 !important; }
    .btn-warning.btn-darken-3:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-darken-3:focus, .btn-warning.btn-darken-3:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-darken-3 {
    border-color: #fc6300 !important;
    color: #fc6300 !important; }
    .btn-outline-warning.btn-outline-darken-3:hover {
        background-color: #fc6300 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fc6300 !important; }

    .border-warning.border-darken-3 {
    border: 1px solid #fc6300 !important; }

    .border-top-warning.border-top-darken-3 {
    border-top: 1px solid #fc6300 !important; }

    .border-bottom-warning.border-bottom-darken-3 {
    border-bottom: 1px solid #fc6300 !important; }

    .border-left-warning.border-left-darken-3 {
    border-left: 1px solid #fc6300 !important; }

    .border-right-warning.border-right-darken-3 {
    border-right: 1px solid #fc6300 !important; }

    .overlay-warning.overlay-darken-3 {
    background: #fc6300;
    /* The Fallback */
    background: rgba(252, 99, 0, 0.8); }

    .warning.darken-4 {
    color: #e25900 !important; }

    .bg-warning.bg-darken-4 {
    background-color: #e25900 !important; }
    .bg-warning.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(226, 89, 0, 0.6); }

    .btn-warning.btn-darken-4 {
    border-color: #ff7216 !important;
    background-color: #e25900 !important; }
    .btn-warning.btn-darken-4:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-darken-4:focus, .btn-warning.btn-darken-4:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-darken-4 {
    border-color: #e25900 !important;
    color: #e25900 !important; }
    .btn-outline-warning.btn-outline-darken-4:hover {
        background-color: #e25900 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e25900 !important; }

    .border-warning.border-darken-4 {
    border: 1px solid #e25900 !important; }

    .border-top-warning.border-top-darken-4 {
    border-top: 1px solid #e25900 !important; }

    .border-bottom-warning.border-bottom-darken-4 {
    border-bottom: 1px solid #e25900 !important; }

    .border-left-warning.border-left-darken-4 {
    border-left: 1px solid #e25900 !important; }

    .border-right-warning.border-right-darken-4 {
    border-right: 1px solid #e25900 !important; }

    .overlay-warning.overlay-darken-4 {
    background: #e25900;
    /* The Fallback */
    background: rgba(226, 89, 0, 0.8); }

    .warning.accent-1 {
    color: #fff5ef !important; }

    .bg-warning.bg-accent-1 {
    background-color: #fff5ef !important; }
    .bg-warning.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 245, 239, 0.6); }

    .btn-warning.btn-accent-1 {
    border-color: #ff7216 !important;
    background-color: #fff5ef !important; }
    .btn-warning.btn-accent-1:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-accent-1:focus, .btn-warning.btn-accent-1:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-accent-1 {
    border-color: #fff5ef !important;
    color: #fff5ef !important; }
    .btn-outline-warning.btn-outline-accent-1:hover {
        background-color: #fff5ef !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fff5ef !important; }

    .border-warning.border-accent-1 {
    border: 1px solid #fff5ef !important; }

    .border-top-warning.border-top-accent-1 {
    border-top: 1px solid #fff5ef !important; }

    .border-bottom-warning.border-bottom-accent-1 {
    border-bottom: 1px solid #fff5ef !important; }

    .border-left-warning.border-left-accent-1 {
    border-left: 1px solid #fff5ef !important; }

    .border-right-warning.border-right-accent-1 {
    border-right: 1px solid #fff5ef !important; }

    .overlay-warning.overlay-accent-1 {
    background: #fff5ef;
    /* The Fallback */
    background: rgba(255, 245, 239, 0.8); }

    .warning.accent-2 {
    color: #ffe5d8 !important; }

    .bg-warning.bg-accent-2 {
    background-color: #ffe5d8 !important; }
    .bg-warning.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 229, 216, 0.6); }

    .btn-warning.btn-accent-2 {
    border-color: #ff7216 !important;
    background-color: #ffe5d8 !important; }
    .btn-warning.btn-accent-2:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-accent-2:focus, .btn-warning.btn-accent-2:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-accent-2 {
    border-color: #ffe5d8 !important;
    color: #ffe5d8 !important; }
    .btn-outline-warning.btn-outline-accent-2:hover {
        background-color: #ffe5d8 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffe5d8 !important; }

    .border-warning.border-accent-2 {
    border: 1px solid #ffe5d8 !important; }

    .border-top-warning.border-top-accent-2 {
    border-top: 1px solid #ffe5d8 !important; }

    .border-bottom-warning.border-bottom-accent-2 {
    border-bottom: 1px solid #ffe5d8 !important; }

    .border-left-warning.border-left-accent-2 {
    border-left: 1px solid #ffe5d8 !important; }

    .border-right-warning.border-right-accent-2 {
    border-right: 1px solid #ffe5d8 !important; }

    .overlay-warning.overlay-accent-2 {
    background: #ffe5d8;
    /* The Fallback */
    background: rgba(255, 229, 216, 0.8); }

    .warning.accent-3 {
    color: #ffddd0 !important; }

    .bg-warning.bg-accent-3 {
    background-color: #ffddd0 !important; }
    .bg-warning.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 221, 208, 0.6); }

    .btn-warning.btn-accent-3 {
    border-color: #ff7216 !important;
    background-color: #ffddd0 !important; }
    .btn-warning.btn-accent-3:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-accent-3:focus, .btn-warning.btn-accent-3:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-accent-3 {
    border-color: #ffddd0 !important;
    color: #ffddd0 !important; }
    .btn-outline-warning.btn-outline-accent-3:hover {
        background-color: #ffddd0 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffddd0 !important; }

    .border-warning.border-accent-3 {
    border: 1px solid #ffddd0 !important; }

    .border-top-warning.border-top-accent-3 {
    border-top: 1px solid #ffddd0 !important; }

    .border-bottom-warning.border-bottom-accent-3 {
    border-bottom: 1px solid #ffddd0 !important; }

    .border-left-warning.border-left-accent-3 {
    border-left: 1px solid #ffddd0 !important; }

    .border-right-warning.border-right-accent-3 {
    border-right: 1px solid #ffddd0 !important; }

    .overlay-warning.overlay-accent-3 {
    background: #ffddd0;
    /* The Fallback */
    background: rgba(255, 221, 208, 0.8); }

    .warning.accent-4 {
    color: #ffcab7 !important; }

    .bg-warning.bg-accent-4 {
    background-color: #ffcab7 !important; }
    .bg-warning.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 202, 183, 0.6); }

    .btn-warning.btn-accent-4 {
    border-color: #ff7216 !important;
    background-color: #ffcab7 !important; }
    .btn-warning.btn-accent-4:hover {
        border-color: #ff7216 !important;
        background-color: #fc6300 !important; }
    .btn-warning.btn-accent-4:focus, .btn-warning.btn-accent-4:active {
        border-color: #fc6300 !important;
        background-color: #e25900 !important; }

    .btn-outline-warning.btn-outline-accent-4 {
    border-color: #ffcab7 !important;
    color: #ffcab7 !important; }
    .btn-outline-warning.btn-outline-accent-4:hover {
        background-color: #ffcab7 !important; }

    input:focus ~ .bg-warning {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffcab7 !important; }

    .border-warning.border-accent-4 {
    border: 1px solid #ffcab7 !important; }

    .border-top-warning.border-top-accent-4 {
    border-top: 1px solid #ffcab7 !important; }

    .border-bottom-warning.border-bottom-accent-4 {
    border-bottom: 1px solid #ffcab7 !important; }

    .border-left-warning.border-left-accent-4 {
    border-left: 1px solid #ffcab7 !important; }

    .border-right-warning.border-right-accent-4 {
    border-right: 1px solid #ffcab7 !important; }

    .overlay-warning.overlay-accent-4 {
    background: #ffcab7;
    /* The Fallback */
    background: rgba(255, 202, 183, 0.8); }

    .danger.lighten-5 {
    color: #ffc9d0 !important; }

    .bg-danger.bg-lighten-5 {
    background-color: #ffc9d0 !important; }
    .bg-danger.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 201, 208, 0.6); }

    .btn-danger.btn-lighten-5 {
    border-color: #ff1635 !important;
    background-color: #ffc9d0 !important; }
    .btn-danger.btn-lighten-5:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-lighten-5:focus, .btn-danger.btn-lighten-5:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-lighten-5 {
    border-color: #ffc9d0 !important;
    color: #ffc9d0 !important; }
    .btn-outline-danger.btn-outline-lighten-5:hover {
        background-color: #ffc9d0 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffc9d0 !important; }

    .border-danger.border-lighten-5 {
    border: 1px solid #ffc9d0 !important; }

    .border-top-danger.border-top-lighten-5 {
    border-top: 1px solid #ffc9d0 !important; }

    .border-bottom-danger.border-bottom-lighten-5 {
    border-bottom: 1px solid #ffc9d0 !important; }

    .border-left-danger.border-left-lighten-5 {
    border-left: 1px solid #ffc9d0 !important; }

    .border-right-danger.border-right-lighten-5 {
    border-right: 1px solid #ffc9d0 !important; }

    .overlay-danger.overlay-lighten-5 {
    background: #ffc9d0;
    /* The Fallback */
    background: rgba(255, 201, 208, 0.8); }

    .danger.lighten-4 {
    color: #ffafba !important; }

    .bg-danger.bg-lighten-4 {
    background-color: #ffafba !important; }
    .bg-danger.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 175, 186, 0.6); }

    .btn-danger.btn-lighten-4 {
    border-color: #ff1635 !important;
    background-color: #ffafba !important; }
    .btn-danger.btn-lighten-4:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-lighten-4:focus, .btn-danger.btn-lighten-4:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-lighten-4 {
    border-color: #ffafba !important;
    color: #ffafba !important; }
    .btn-outline-danger.btn-outline-lighten-4:hover {
        background-color: #ffafba !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffafba !important; }

    .border-danger.border-lighten-4 {
    border: 1px solid #ffafba !important; }

    .border-top-danger.border-top-lighten-4 {
    border-top: 1px solid #ffafba !important; }

    .border-bottom-danger.border-bottom-lighten-4 {
    border-bottom: 1px solid #ffafba !important; }

    .border-left-danger.border-left-lighten-4 {
    border-left: 1px solid #ffafba !important; }

    .border-right-danger.border-right-lighten-4 {
    border-right: 1px solid #ffafba !important; }

    .overlay-danger.overlay-lighten-4 {
    background: #ffafba;
    /* The Fallback */
    background: rgba(255, 175, 186, 0.8); }

    .danger.lighten-3 {
    color: #ff96a3 !important; }

    .bg-danger.bg-lighten-3 {
    background-color: #ff96a3 !important; }
    .bg-danger.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 150, 163, 0.6); }

    .btn-danger.btn-lighten-3 {
    border-color: #ff1635 !important;
    background-color: #ff96a3 !important; }
    .btn-danger.btn-lighten-3:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-lighten-3:focus, .btn-danger.btn-lighten-3:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-lighten-3 {
    border-color: #ff96a3 !important;
    color: #ff96a3 !important; }
    .btn-outline-danger.btn-outline-lighten-3:hover {
        background-color: #ff96a3 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff96a3 !important; }

    .border-danger.border-lighten-3 {
    border: 1px solid #ff96a3 !important; }

    .border-top-danger.border-top-lighten-3 {
    border-top: 1px solid #ff96a3 !important; }

    .border-bottom-danger.border-bottom-lighten-3 {
    border-bottom: 1px solid #ff96a3 !important; }

    .border-left-danger.border-left-lighten-3 {
    border-left: 1px solid #ff96a3 !important; }

    .border-right-danger.border-right-lighten-3 {
    border-right: 1px solid #ff96a3 !important; }

    .overlay-danger.overlay-lighten-3 {
    background: #ff96a3;
    /* The Fallback */
    background: rgba(255, 150, 163, 0.8); }

    .danger.lighten-2 {
    color: #ff7c8d !important; }

    .bg-danger.bg-lighten-2 {
    background-color: #ff7c8d !important; }
    .bg-danger.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 124, 141, 0.6); }

    .btn-danger.btn-lighten-2 {
    border-color: #ff1635 !important;
    background-color: #ff7c8d !important; }
    .btn-danger.btn-lighten-2:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-lighten-2:focus, .btn-danger.btn-lighten-2:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-lighten-2 {
    border-color: #ff7c8d !important;
    color: #ff7c8d !important; }
    .btn-outline-danger.btn-outline-lighten-2:hover {
        background-color: #ff7c8d !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff7c8d !important; }

    .border-danger.border-lighten-2 {
    border: 1px solid #ff7c8d !important; }

    .border-top-danger.border-top-lighten-2 {
    border-top: 1px solid #ff7c8d !important; }

    .border-bottom-danger.border-bottom-lighten-2 {
    border-bottom: 1px solid #ff7c8d !important; }

    .border-left-danger.border-left-lighten-2 {
    border-left: 1px solid #ff7c8d !important; }

    .border-right-danger.border-right-lighten-2 {
    border-right: 1px solid #ff7c8d !important; }

    .overlay-danger.overlay-lighten-2 {
    background: #ff7c8d;
    /* The Fallback */
    background: rgba(255, 124, 141, 0.8); }

    .danger.lighten-1 {
    color: #ff6377 !important; }

    .bg-danger.bg-lighten-1 {
    background-color: #ff6377 !important; }
    .bg-danger.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 99, 119, 0.6); }

    .btn-danger.btn-lighten-1 {
    border-color: #ff1635 !important;
    background-color: #ff6377 !important; }
    .btn-danger.btn-lighten-1:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-lighten-1:focus, .btn-danger.btn-lighten-1:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-lighten-1 {
    border-color: #ff6377 !important;
    color: #ff6377 !important; }
    .btn-outline-danger.btn-outline-lighten-1:hover {
        background-color: #ff6377 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff6377 !important; }

    .border-danger.border-lighten-1 {
    border: 1px solid #ff6377 !important; }

    .border-top-danger.border-top-lighten-1 {
    border-top: 1px solid #ff6377 !important; }

    .border-bottom-danger.border-bottom-lighten-1 {
    border-bottom: 1px solid #ff6377 !important; }

    .border-left-danger.border-left-lighten-1 {
    border-left: 1px solid #ff6377 !important; }

    .border-right-danger.border-right-lighten-1 {
    border-right: 1px solid #ff6377 !important; }

    .overlay-danger.overlay-lighten-1 {
    background: #ff6377;
    /* The Fallback */
    background: rgba(255, 99, 119, 0.8); }

    .danger {
    color: #ff4961 !important; }

    .bg-danger {
    background-color: #ff4961 !important; }
    .bg-danger .card-header,
    .bg-danger .card-footer {
        background-color: transparent; }
    .bg-danger.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 73, 97, 0.6); }

    .selectboxit.selectboxit-btn.bg-danger {
    background-color: #ff4961 !important; }

    .alert-danger {
    border-color: #ff4961 !important;
    background-color: #ff909f !important;
    color: #960014 !important; }
    .alert-danger .alert-link {
        color: #6d000e !important; }

    .border-danger {
    border-color: #ff4961; }

    .overlay-danger {
    background: #ff4961;
    /* The Fallback */
    background: rgba(255, 73, 97, 0.8); }

    .color-info.danger {
    background-color: #ff4961 !important; }

    .btn-danger {
    border-color: #ff4961 !important;
    background-color: #ff4961 !important;
    color: #FFFFFF; }
    .btn-danger:hover {
        border-color: #ff6377 !important;
        background-color: #ff6377 !important;
        color: #FFF !important; }
    .btn-danger:focus, .btn-danger:active {
        border-color: #fc0021 !important;
        background-color: #fc0021 !important;
        color: #FFF !important; }
    .btn-danger.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 73, 97, 0.6); }

    .btn-outline-danger {
    border-color: #ff4961;
    background-color: transparent;
    color: #ff4961; }
    .btn-outline-danger:hover {
        background-color: #ff4961;
        color: #FFF !important; }
    .btn-outline-danger.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 73, 97, 0.6); }

    input[type="checkbox"].bg-danger + .custom-control-label:before, input[type="radio"].bg-danger + .custom-control-label:before {
    background-color: #ff4961 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff4961 !important; }

    .border-danger {
    border: 1px solid #ff4961 !important; }

    .border-top-danger {
    border-top: 1px solid #ff4961; }

    .border-bottom-danger {
    border-bottom: 1px solid #ff4961; }

    .border-left-danger {
    border-left: 1px solid #ff4961; }

    .border-right-danger {
    border-right: 1px solid #ff4961; }

    /* Bullet danger */
    .bullet.bullet-danger {
    background-color: #ff4961; }

    .danger.darken-1 {
    color: #ff304b !important; }

    .bg-danger.bg-darken-1 {
    background-color: #ff304b !important; }
    .bg-danger.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 48, 75, 0.6); }

    .btn-danger.btn-darken-1 {
    border-color: #ff1635 !important;
    background-color: #ff304b !important; }
    .btn-danger.btn-darken-1:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-darken-1:focus, .btn-danger.btn-darken-1:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-darken-1 {
    border-color: #ff304b !important;
    color: #ff304b !important; }
    .btn-outline-danger.btn-outline-darken-1:hover {
        background-color: #ff304b !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff304b !important; }

    .border-danger.border-darken-1 {
    border: 1px solid #ff304b !important; }

    .border-top-danger.border-top-darken-1 {
    border-top: 1px solid #ff304b !important; }

    .border-bottom-danger.border-bottom-darken-1 {
    border-bottom: 1px solid #ff304b !important; }

    .border-left-danger.border-left-darken-1 {
    border-left: 1px solid #ff304b !important; }

    .border-right-danger.border-right-darken-1 {
    border-right: 1px solid #ff304b !important; }

    .overlay-danger.overlay-darken-1 {
    background: #ff304b;
    /* The Fallback */
    background: rgba(255, 48, 75, 0.8); }

    .danger.darken-2 {
    color: #ff1635 !important; }

    .bg-danger.bg-darken-2 {
    background-color: #ff1635 !important; }
    .bg-danger.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 22, 53, 0.6); }

    .btn-danger.btn-darken-2 {
    border-color: #ff1635 !important;
    background-color: #ff1635 !important; }
    .btn-danger.btn-darken-2:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-darken-2:focus, .btn-danger.btn-darken-2:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-darken-2 {
    border-color: #ff1635 !important;
    color: #ff1635 !important; }
    .btn-outline-danger.btn-outline-darken-2:hover {
        background-color: #ff1635 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff1635 !important; }

    .border-danger.border-darken-2 {
    border: 1px solid #ff1635 !important; }

    .border-top-danger.border-top-darken-2 {
    border-top: 1px solid #ff1635 !important; }

    .border-bottom-danger.border-bottom-darken-2 {
    border-bottom: 1px solid #ff1635 !important; }

    .border-left-danger.border-left-darken-2 {
    border-left: 1px solid #ff1635 !important; }

    .border-right-danger.border-right-darken-2 {
    border-right: 1px solid #ff1635 !important; }

    .overlay-danger.overlay-darken-2 {
    background: #ff1635;
    /* The Fallback */
    background: rgba(255, 22, 53, 0.8); }

    .danger.darken-3 {
    color: #fc0021 !important; }

    .bg-danger.bg-darken-3 {
    background-color: #fc0021 !important; }
    .bg-danger.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(252, 0, 33, 0.6); }

    .btn-danger.btn-darken-3 {
    border-color: #ff1635 !important;
    background-color: #fc0021 !important; }
    .btn-danger.btn-darken-3:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-darken-3:focus, .btn-danger.btn-darken-3:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-darken-3 {
    border-color: #fc0021 !important;
    color: #fc0021 !important; }
    .btn-outline-danger.btn-outline-darken-3:hover {
        background-color: #fc0021 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fc0021 !important; }

    .border-danger.border-darken-3 {
    border: 1px solid #fc0021 !important; }

    .border-top-danger.border-top-darken-3 {
    border-top: 1px solid #fc0021 !important; }

    .border-bottom-danger.border-bottom-darken-3 {
    border-bottom: 1px solid #fc0021 !important; }

    .border-left-danger.border-left-darken-3 {
    border-left: 1px solid #fc0021 !important; }

    .border-right-danger.border-right-darken-3 {
    border-right: 1px solid #fc0021 !important; }

    .overlay-danger.overlay-darken-3 {
    background: #fc0021;
    /* The Fallback */
    background: rgba(252, 0, 33, 0.8); }

    .danger.darken-4 {
    color: #e2001e !important; }

    .bg-danger.bg-darken-4 {
    background-color: #e2001e !important; }
    .bg-danger.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(226, 0, 30, 0.6); }

    .btn-danger.btn-darken-4 {
    border-color: #ff1635 !important;
    background-color: #e2001e !important; }
    .btn-danger.btn-darken-4:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-darken-4:focus, .btn-danger.btn-darken-4:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-darken-4 {
    border-color: #e2001e !important;
    color: #e2001e !important; }
    .btn-outline-danger.btn-outline-darken-4:hover {
        background-color: #e2001e !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e2001e !important; }

    .border-danger.border-darken-4 {
    border: 1px solid #e2001e !important; }

    .border-top-danger.border-top-darken-4 {
    border-top: 1px solid #e2001e !important; }

    .border-bottom-danger.border-bottom-darken-4 {
    border-bottom: 1px solid #e2001e !important; }

    .border-left-danger.border-left-darken-4 {
    border-left: 1px solid #e2001e !important; }

    .border-right-danger.border-right-darken-4 {
    border-right: 1px solid #e2001e !important; }

    .overlay-danger.overlay-darken-4 {
    background: #e2001e;
    /* The Fallback */
    background: rgba(226, 0, 30, 0.8); }

    .danger.accent-1 {
    color: #ffeef1 !important; }

    .bg-danger.bg-accent-1 {
    background-color: #ffeef1 !important; }
    .bg-danger.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 238, 241, 0.6); }

    .btn-danger.btn-accent-1 {
    border-color: #ff1635 !important;
    background-color: #ffeef1 !important; }
    .btn-danger.btn-accent-1:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-accent-1:focus, .btn-danger.btn-accent-1:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-accent-1 {
    border-color: #ffeef1 !important;
    color: #ffeef1 !important; }
    .btn-outline-danger.btn-outline-accent-1:hover {
        background-color: #ffeef1 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffeef1 !important; }

    .border-danger.border-accent-1 {
    border: 1px solid #ffeef1 !important; }

    .border-top-danger.border-top-accent-1 {
    border-top: 1px solid #ffeef1 !important; }

    .border-bottom-danger.border-bottom-accent-1 {
    border-bottom: 1px solid #ffeef1 !important; }

    .border-left-danger.border-left-accent-1 {
    border-left: 1px solid #ffeef1 !important; }

    .border-right-danger.border-right-accent-1 {
    border-right: 1px solid #ffeef1 !important; }

    .overlay-danger.overlay-accent-1 {
    background: #ffeef1;
    /* The Fallback */
    background: rgba(255, 238, 241, 0.8); }

    .danger.accent-2 {
    color: #ffd6db !important; }

    .bg-danger.bg-accent-2 {
    background-color: #ffd6db !important; }
    .bg-danger.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 214, 219, 0.6); }

    .btn-danger.btn-accent-2 {
    border-color: #ff1635 !important;
    background-color: #ffd6db !important; }
    .btn-danger.btn-accent-2:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-accent-2:focus, .btn-danger.btn-accent-2:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-accent-2 {
    border-color: #ffd6db !important;
    color: #ffd6db !important; }
    .btn-outline-danger.btn-outline-accent-2:hover {
        background-color: #ffd6db !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffd6db !important; }

    .border-danger.border-accent-2 {
    border: 1px solid #ffd6db !important; }

    .border-top-danger.border-top-accent-2 {
    border-top: 1px solid #ffd6db !important; }

    .border-bottom-danger.border-bottom-accent-2 {
    border-bottom: 1px solid #ffd6db !important; }

    .border-left-danger.border-left-accent-2 {
    border-left: 1px solid #ffd6db !important; }

    .border-right-danger.border-right-accent-2 {
    border-right: 1px solid #ffd6db !important; }

    .overlay-danger.overlay-accent-2 {
    background: #ffd6db;
    /* The Fallback */
    background: rgba(255, 214, 219, 0.8); }

    .danger.accent-3 {
    color: #ffd0d3 !important; }

    .bg-danger.bg-accent-3 {
    background-color: #ffd0d3 !important; }
    .bg-danger.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 208, 211, 0.6); }

    .btn-danger.btn-accent-3 {
    border-color: #ff1635 !important;
    background-color: #ffd0d3 !important; }
    .btn-danger.btn-accent-3:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-accent-3:focus, .btn-danger.btn-accent-3:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-accent-3 {
    border-color: #ffd0d3 !important;
    color: #ffd0d3 !important; }
    .btn-outline-danger.btn-outline-accent-3:hover {
        background-color: #ffd0d3 !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffd0d3 !important; }

    .border-danger.border-accent-3 {
    border: 1px solid #ffd0d3 !important; }

    .border-top-danger.border-top-accent-3 {
    border-top: 1px solid #ffd0d3 !important; }

    .border-bottom-danger.border-bottom-accent-3 {
    border-bottom: 1px solid #ffd0d3 !important; }

    .border-left-danger.border-left-accent-3 {
    border-left: 1px solid #ffd0d3 !important; }

    .border-right-danger.border-right-accent-3 {
    border-right: 1px solid #ffd0d3 !important; }

    .overlay-danger.overlay-accent-3 {
    background: #ffd0d3;
    /* The Fallback */
    background: rgba(255, 208, 211, 0.8); }

    .danger.accent-4 {
    color: #ffb7bc !important; }

    .bg-danger.bg-accent-4 {
    background-color: #ffb7bc !important; }
    .bg-danger.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 183, 188, 0.6); }

    .btn-danger.btn-accent-4 {
    border-color: #ff1635 !important;
    background-color: #ffb7bc !important; }
    .btn-danger.btn-accent-4:hover {
        border-color: #ff1635 !important;
        background-color: #fc0021 !important; }
    .btn-danger.btn-accent-4:focus, .btn-danger.btn-accent-4:active {
        border-color: #fc0021 !important;
        background-color: #e2001e !important; }

    .btn-outline-danger.btn-outline-accent-4 {
    border-color: #ffb7bc !important;
    color: #ffb7bc !important; }
    .btn-outline-danger.btn-outline-accent-4:hover {
        background-color: #ffb7bc !important; }

    input:focus ~ .bg-danger {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffb7bc !important; }

    .border-danger.border-accent-4 {
    border: 1px solid #ffb7bc !important; }

    .border-top-danger.border-top-accent-4 {
    border-top: 1px solid #ffb7bc !important; }

    .border-bottom-danger.border-bottom-accent-4 {
    border-bottom: 1px solid #ffb7bc !important; }

    .border-left-danger.border-left-accent-4 {
    border-left: 1px solid #ffb7bc !important; }

    .border-right-danger.border-right-accent-4 {
    border-right: 1px solid #ffb7bc !important; }

    .overlay-danger.overlay-accent-4 {
    background: #ffb7bc;
    /* The Fallback */
    background: rgba(255, 183, 188, 0.8); }

    .light {
    color: #e0e0e0 !important; }

    .bg-light {
    background-color: #e0e0e0 !important; }
    .bg-light .card-header,
    .bg-light .card-footer {
        background-color: transparent; }
    .bg-light.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(224, 224, 224, 0.6); }

    .selectboxit.selectboxit-btn.bg-light {
    background-color: #e0e0e0 !important; }

    .alert-light {
    border-color: #e0e0e0 !important;
    background-color: white !important;
    color: #878787 !important; }
    .alert-light .alert-link {
        color: #727272 !important; }

    .border-light {
    border-color: #e0e0e0; }

    .overlay-light {
    background: #e0e0e0;
    /* The Fallback */
    background: rgba(224, 224, 224, 0.8); }

    .color-info.light {
    background-color: #e0e0e0 !important; }

    .btn-light {
    border-color: #e0e0e0 !important;
    background-color: #e0e0e0 !important;
    color: #FFFFFF; }
    .btn-light:hover {
        border-color: #bdbdbd !important;
        background-color: #bdbdbd !important;
        color: #FFF !important; }
    .btn-light:focus, .btn-light:active {
        border-color: !important;
        background-color: !important;
        color: #FFF !important; }
    .btn-light.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(224, 224, 224, 0.6); }

    .btn-outline-light {
    border-color: #e0e0e0;
    background-color: transparent;
    color: #e0e0e0; }
    .btn-outline-light:hover {
        background-color: #e0e0e0;
        color: #FFF !important; }
    .btn-outline-light.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(224, 224, 224, 0.6); }

    input[type="checkbox"].bg-light + .custom-control-label:before, input[type="radio"].bg-light + .custom-control-label:before {
    background-color: #e0e0e0 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-light {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e0e0e0 !important; }

    .border-light {
    border: 1px solid #e0e0e0 !important; }

    .border-top-light {
    border-top: 1px solid #e0e0e0; }

    .border-bottom-light {
    border-bottom: 1px solid #e0e0e0; }

    .border-left-light {
    border-left: 1px solid #e0e0e0; }

    .border-right-light {
    border-right: 1px solid #e0e0e0; }

    /* Bullet light */
    .bullet.bullet-light {
    background-color: #e0e0e0; }

    .light.lighten-1 {
    color: #bdbdbd !important; }

    .bg-light.bg-lighten-1 {
    background-color: #bdbdbd !important; }
    .bg-light.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(189, 189, 189, 0.6); }

    .btn-light.btn-lighten-1 {
    border-color: !important;
    background-color: #bdbdbd !important; }
    .btn-light.btn-lighten-1:hover {
        border-color: !important;
        background-color: !important; }
    .btn-light.btn-lighten-1:focus, .btn-light.btn-lighten-1:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-light.btn-outline-lighten-1 {
    border-color: #bdbdbd !important;
    color: #bdbdbd !important; }
    .btn-outline-light.btn-outline-lighten-1:hover {
        background-color: #bdbdbd !important; }

    input:focus ~ .bg-light {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #bdbdbd !important; }

    .border-light.border-lighten-1 {
    border: 1px solid #bdbdbd !important; }

    .border-top-light.border-top-lighten-1 {
    border-top: 1px solid #bdbdbd !important; }

    .border-bottom-light.border-bottom-lighten-1 {
    border-bottom: 1px solid #bdbdbd !important; }

    .border-left-light.border-left-lighten-1 {
    border-left: 1px solid #bdbdbd !important; }

    .border-right-light.border-right-lighten-1 {
    border-right: 1px solid #bdbdbd !important; }

    .overlay-light.overlay-lighten-1 {
    background: #bdbdbd;
    /* The Fallback */
    background: rgba(189, 189, 189, 0.8); }

    .light.darken-1 {
    color: #9e9e9e !important; }

    .bg-light.bg-darken-1 {
    background-color: #9e9e9e !important; }
    .bg-light.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(158, 158, 158, 0.6); }

    .btn-light.btn-darken-1 {
    border-color: !important;
    background-color: #9e9e9e !important; }
    .btn-light.btn-darken-1:hover {
        border-color: !important;
        background-color: !important; }
    .btn-light.btn-darken-1:focus, .btn-light.btn-darken-1:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-light.btn-outline-darken-1 {
    border-color: #9e9e9e !important;
    color: #9e9e9e !important; }
    .btn-outline-light.btn-outline-darken-1:hover {
        background-color: #9e9e9e !important; }

    input:focus ~ .bg-light {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9e9e9e !important; }

    .border-light.border-darken-1 {
    border: 1px solid #9e9e9e !important; }

    .border-top-light.border-top-darken-1 {
    border-top: 1px solid #9e9e9e !important; }

    .border-bottom-light.border-bottom-darken-1 {
    border-bottom: 1px solid #9e9e9e !important; }

    .border-left-light.border-left-darken-1 {
    border-left: 1px solid #9e9e9e !important; }

    .border-right-light.border-right-darken-1 {
    border-right: 1px solid #9e9e9e !important; }

    .overlay-light.overlay-darken-1 {
    background: #9e9e9e;
    /* The Fallback */
    background: rgba(158, 158, 158, 0.8); }

    .dark {
    color: #424242 !important; }

    .bg-dark {
    background-color: #424242 !important; }
    .bg-dark .card-header,
    .bg-dark .card-footer {
        background-color: transparent; }
    .bg-dark.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(66, 66, 66, 0.6); }

    .selectboxit.selectboxit-btn.bg-dark {
    background-color: #424242 !important; }

    .alert-dark {
    border-color: #424242 !important;
    background-color: #666666 !important;
    color: black !important; }
    .alert-dark .alert-link {
        color: black !important; }

    .border-dark {
    border-color: #424242; }

    .overlay-dark {
    background: #424242;
    /* The Fallback */
    background: rgba(66, 66, 66, 0.8); }

    .color-info.dark {
    background-color: #424242 !important; }

    .btn-dark {
    border-color: #424242 !important;
    background-color: #424242 !important;
    color: #FFFFFF; }
    .btn-dark:hover {
        border-color: #616161 !important;
        background-color: #616161 !important;
        color: #FFF !important; }
    .btn-dark:focus, .btn-dark:active {
        border-color: !important;
        background-color: !important;
        color: #FFF !important; }
    .btn-dark.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(66, 66, 66, 0.6); }

    .btn-outline-dark {
    border-color: #424242;
    background-color: transparent;
    color: #424242; }
    .btn-outline-dark:hover {
        background-color: #424242;
        color: #FFF !important; }
    .btn-outline-dark.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(66, 66, 66, 0.6); }

    input[type="checkbox"].bg-dark + .custom-control-label:before, input[type="radio"].bg-dark + .custom-control-label:before {
    background-color: #424242 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-dark {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #424242 !important; }

    .border-dark {
    border: 1px solid #424242 !important; }

    .border-top-dark {
    border-top: 1px solid #424242; }

    .border-bottom-dark {
    border-bottom: 1px solid #424242; }

    .border-left-dark {
    border-left: 1px solid #424242; }

    .border-right-dark {
    border-right: 1px solid #424242; }

    /* Bullet dark */
    .bullet.bullet-dark {
    background-color: #424242; }

    .dark.lighten-1 {
    color: #616161 !important; }

    .bg-dark.bg-lighten-1 {
    background-color: #616161 !important; }
    .bg-dark.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(97, 97, 97, 0.6); }

    .btn-dark.btn-lighten-1 {
    border-color: !important;
    background-color: #616161 !important; }
    .btn-dark.btn-lighten-1:hover {
        border-color: !important;
        background-color: !important; }
    .btn-dark.btn-lighten-1:focus, .btn-dark.btn-lighten-1:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-dark.btn-outline-lighten-1 {
    border-color: #616161 !important;
    color: #616161 !important; }
    .btn-outline-dark.btn-outline-lighten-1:hover {
        background-color: #616161 !important; }

    input:focus ~ .bg-dark {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #616161 !important; }

    .border-dark.border-lighten-1 {
    border: 1px solid #616161 !important; }

    .border-top-dark.border-top-lighten-1 {
    border-top: 1px solid #616161 !important; }

    .border-bottom-dark.border-bottom-lighten-1 {
    border-bottom: 1px solid #616161 !important; }

    .border-left-dark.border-left-lighten-1 {
    border-left: 1px solid #616161 !important; }

    .border-right-dark.border-right-lighten-1 {
    border-right: 1px solid #616161 !important; }

    .overlay-dark.overlay-lighten-1 {
    background: #616161;
    /* The Fallback */
    background: rgba(97, 97, 97, 0.8); }

    .dark.darken-1 {
    color: #212121 !important; }

    .bg-dark.bg-darken-1 {
    background-color: #212121 !important; }
    .bg-dark.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(33, 33, 33, 0.6); }

    .btn-dark.btn-darken-1 {
    border-color: !important;
    background-color: #212121 !important; }
    .btn-dark.btn-darken-1:hover {
        border-color: !important;
        background-color: !important; }
    .btn-dark.btn-darken-1:focus, .btn-dark.btn-darken-1:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-dark.btn-outline-darken-1 {
    border-color: #212121 !important;
    color: #212121 !important; }
    .btn-outline-dark.btn-outline-darken-1:hover {
        background-color: #212121 !important; }

    input:focus ~ .bg-dark {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #212121 !important; }

    .border-dark.border-darken-1 {
    border: 1px solid #212121 !important; }

    .border-top-dark.border-top-darken-1 {
    border-top: 1px solid #212121 !important; }

    .border-bottom-dark.border-bottom-darken-1 {
    border-bottom: 1px solid #212121 !important; }

    .border-left-dark.border-left-darken-1 {
    border-left: 1px solid #212121 !important; }

    .border-right-dark.border-right-darken-1 {
    border-right: 1px solid #212121 !important; }

    .overlay-dark.overlay-darken-1 {
    background: #212121;
    /* The Fallback */
    background: rgba(33, 33, 33, 0.8); }

    .red.lighten-5 {
    color: #ffebee !important; }

    .bg-red.bg-lighten-5 {
    background-color: #ffebee !important; }
    .bg-red.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 235, 238, 0.6); }

    .btn-red.btn-lighten-5 {
    border-color: #d32f2f !important;
    background-color: #ffebee !important; }
    .btn-red.btn-lighten-5:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-lighten-5:focus, .btn-red.btn-lighten-5:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-lighten-5 {
    border-color: #ffebee !important;
    color: #ffebee !important; }
    .btn-outline-red.btn-outline-lighten-5:hover {
        background-color: #ffebee !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffebee !important; }

    .border-red.border-lighten-5 {
    border: 1px solid #ffebee !important; }

    .border-top-red.border-top-lighten-5 {
    border-top: 1px solid #ffebee !important; }

    .border-bottom-red.border-bottom-lighten-5 {
    border-bottom: 1px solid #ffebee !important; }

    .border-left-red.border-left-lighten-5 {
    border-left: 1px solid #ffebee !important; }

    .border-right-red.border-right-lighten-5 {
    border-right: 1px solid #ffebee !important; }

    .overlay-red.overlay-lighten-5 {
    background: #ffebee;
    /* The Fallback */
    background: rgba(255, 235, 238, 0.8); }

    .red.lighten-4 {
    color: #ffcdd2 !important; }

    .bg-red.bg-lighten-4 {
    background-color: #ffcdd2 !important; }
    .bg-red.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 205, 210, 0.6); }

    .btn-red.btn-lighten-4 {
    border-color: #d32f2f !important;
    background-color: #ffcdd2 !important; }
    .btn-red.btn-lighten-4:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-lighten-4:focus, .btn-red.btn-lighten-4:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-lighten-4 {
    border-color: #ffcdd2 !important;
    color: #ffcdd2 !important; }
    .btn-outline-red.btn-outline-lighten-4:hover {
        background-color: #ffcdd2 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffcdd2 !important; }

    .border-red.border-lighten-4 {
    border: 1px solid #ffcdd2 !important; }

    .border-top-red.border-top-lighten-4 {
    border-top: 1px solid #ffcdd2 !important; }

    .border-bottom-red.border-bottom-lighten-4 {
    border-bottom: 1px solid #ffcdd2 !important; }

    .border-left-red.border-left-lighten-4 {
    border-left: 1px solid #ffcdd2 !important; }

    .border-right-red.border-right-lighten-4 {
    border-right: 1px solid #ffcdd2 !important; }

    .overlay-red.overlay-lighten-4 {
    background: #ffcdd2;
    /* The Fallback */
    background: rgba(255, 205, 210, 0.8); }

    .red.lighten-3 {
    color: #ef9a9a !important; }

    .bg-red.bg-lighten-3 {
    background-color: #ef9a9a !important; }
    .bg-red.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(239, 154, 154, 0.6); }

    .btn-red.btn-lighten-3 {
    border-color: #d32f2f !important;
    background-color: #ef9a9a !important; }
    .btn-red.btn-lighten-3:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-lighten-3:focus, .btn-red.btn-lighten-3:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-lighten-3 {
    border-color: #ef9a9a !important;
    color: #ef9a9a !important; }
    .btn-outline-red.btn-outline-lighten-3:hover {
        background-color: #ef9a9a !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ef9a9a !important; }

    .border-red.border-lighten-3 {
    border: 1px solid #ef9a9a !important; }

    .border-top-red.border-top-lighten-3 {
    border-top: 1px solid #ef9a9a !important; }

    .border-bottom-red.border-bottom-lighten-3 {
    border-bottom: 1px solid #ef9a9a !important; }

    .border-left-red.border-left-lighten-3 {
    border-left: 1px solid #ef9a9a !important; }

    .border-right-red.border-right-lighten-3 {
    border-right: 1px solid #ef9a9a !important; }

    .overlay-red.overlay-lighten-3 {
    background: #ef9a9a;
    /* The Fallback */
    background: rgba(239, 154, 154, 0.8); }

    .red.lighten-2 {
    color: #e57373 !important; }

    .bg-red.bg-lighten-2 {
    background-color: #e57373 !important; }
    .bg-red.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(229, 115, 115, 0.6); }

    .btn-red.btn-lighten-2 {
    border-color: #d32f2f !important;
    background-color: #e57373 !important; }
    .btn-red.btn-lighten-2:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-lighten-2:focus, .btn-red.btn-lighten-2:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-lighten-2 {
    border-color: #e57373 !important;
    color: #e57373 !important; }
    .btn-outline-red.btn-outline-lighten-2:hover {
        background-color: #e57373 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e57373 !important; }

    .border-red.border-lighten-2 {
    border: 1px solid #e57373 !important; }

    .border-top-red.border-top-lighten-2 {
    border-top: 1px solid #e57373 !important; }

    .border-bottom-red.border-bottom-lighten-2 {
    border-bottom: 1px solid #e57373 !important; }

    .border-left-red.border-left-lighten-2 {
    border-left: 1px solid #e57373 !important; }

    .border-right-red.border-right-lighten-2 {
    border-right: 1px solid #e57373 !important; }

    .overlay-red.overlay-lighten-2 {
    background: #e57373;
    /* The Fallback */
    background: rgba(229, 115, 115, 0.8); }

    .red.lighten-1 {
    color: #ef5350 !important; }

    .bg-red.bg-lighten-1 {
    background-color: #ef5350 !important; }
    .bg-red.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(239, 83, 80, 0.6); }

    .btn-red.btn-lighten-1 {
    border-color: #d32f2f !important;
    background-color: #ef5350 !important; }
    .btn-red.btn-lighten-1:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-lighten-1:focus, .btn-red.btn-lighten-1:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-lighten-1 {
    border-color: #ef5350 !important;
    color: #ef5350 !important; }
    .btn-outline-red.btn-outline-lighten-1:hover {
        background-color: #ef5350 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ef5350 !important; }

    .border-red.border-lighten-1 {
    border: 1px solid #ef5350 !important; }

    .border-top-red.border-top-lighten-1 {
    border-top: 1px solid #ef5350 !important; }

    .border-bottom-red.border-bottom-lighten-1 {
    border-bottom: 1px solid #ef5350 !important; }

    .border-left-red.border-left-lighten-1 {
    border-left: 1px solid #ef5350 !important; }

    .border-right-red.border-right-lighten-1 {
    border-right: 1px solid #ef5350 !important; }

    .overlay-red.overlay-lighten-1 {
    background: #ef5350;
    /* The Fallback */
    background: rgba(239, 83, 80, 0.8); }

    .red {
    color: #f44336 !important; }

    .bg-red {
    background-color: #f44336 !important; }
    .bg-red .card-header,
    .bg-red .card-footer {
        background-color: transparent; }
    .bg-red.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(244, 67, 54, 0.6); }

    .selectboxit.selectboxit-btn.bg-red {
    background-color: #f44336 !important; }

    .alert-red {
    border-color: #f44336 !important;
    background-color: #f8827a !important;
    color: #710e06 !important; }
    .alert-red .alert-link {
        color: #4b0904 !important; }

    .border-red {
    border-color: #f44336; }

    .overlay-red {
    background: #f44336;
    /* The Fallback */
    background: rgba(244, 67, 54, 0.8); }

    .color-info.red {
    background-color: #f44336 !important; }

    .btn-red {
    border-color: #f44336 !important;
    background-color: #f44336 !important;
    color: #FFFFFF; }
    .btn-red:hover {
        border-color: #ef5350 !important;
        background-color: #ef5350 !important;
        color: #FFF !important; }
    .btn-red:focus, .btn-red:active {
        border-color: #c62828 !important;
        background-color: #c62828 !important;
        color: #FFF !important; }
    .btn-red.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(244, 67, 54, 0.6); }

    .btn-outline-red {
    border-color: #f44336;
    background-color: transparent;
    color: #f44336; }
    .btn-outline-red:hover {
        background-color: #f44336;
        color: #FFF !important; }
    .btn-outline-red.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(244, 67, 54, 0.6); }

    input[type="checkbox"].bg-red + .custom-control-label:before, input[type="radio"].bg-red + .custom-control-label:before {
    background-color: #f44336 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f44336 !important; }

    .border-red {
    border: 1px solid #f44336 !important; }

    .border-top-red {
    border-top: 1px solid #f44336; }

    .border-bottom-red {
    border-bottom: 1px solid #f44336; }

    .border-left-red {
    border-left: 1px solid #f44336; }

    .border-right-red {
    border-right: 1px solid #f44336; }

    /* Bullet red */
    .bullet.bullet-red {
    background-color: #f44336; }

    .red.darken-1 {
    color: #e53935 !important; }

    .bg-red.bg-darken-1 {
    background-color: #e53935 !important; }
    .bg-red.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(229, 57, 53, 0.6); }

    .btn-red.btn-darken-1 {
    border-color: #d32f2f !important;
    background-color: #e53935 !important; }
    .btn-red.btn-darken-1:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-darken-1:focus, .btn-red.btn-darken-1:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-darken-1 {
    border-color: #e53935 !important;
    color: #e53935 !important; }
    .btn-outline-red.btn-outline-darken-1:hover {
        background-color: #e53935 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e53935 !important; }

    .border-red.border-darken-1 {
    border: 1px solid #e53935 !important; }

    .border-top-red.border-top-darken-1 {
    border-top: 1px solid #e53935 !important; }

    .border-bottom-red.border-bottom-darken-1 {
    border-bottom: 1px solid #e53935 !important; }

    .border-left-red.border-left-darken-1 {
    border-left: 1px solid #e53935 !important; }

    .border-right-red.border-right-darken-1 {
    border-right: 1px solid #e53935 !important; }

    .overlay-red.overlay-darken-1 {
    background: #e53935;
    /* The Fallback */
    background: rgba(229, 57, 53, 0.8); }

    .red.darken-2 {
    color: #d32f2f !important; }

    .bg-red.bg-darken-2 {
    background-color: #d32f2f !important; }
    .bg-red.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(211, 47, 47, 0.6); }

    .btn-red.btn-darken-2 {
    border-color: #d32f2f !important;
    background-color: #d32f2f !important; }
    .btn-red.btn-darken-2:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-darken-2:focus, .btn-red.btn-darken-2:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-darken-2 {
    border-color: #d32f2f !important;
    color: #d32f2f !important; }
    .btn-outline-red.btn-outline-darken-2:hover {
        background-color: #d32f2f !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #d32f2f !important; }

    .border-red.border-darken-2 {
    border: 1px solid #d32f2f !important; }

    .border-top-red.border-top-darken-2 {
    border-top: 1px solid #d32f2f !important; }

    .border-bottom-red.border-bottom-darken-2 {
    border-bottom: 1px solid #d32f2f !important; }

    .border-left-red.border-left-darken-2 {
    border-left: 1px solid #d32f2f !important; }

    .border-right-red.border-right-darken-2 {
    border-right: 1px solid #d32f2f !important; }

    .overlay-red.overlay-darken-2 {
    background: #d32f2f;
    /* The Fallback */
    background: rgba(211, 47, 47, 0.8); }

    .red.darken-3 {
    color: #c62828 !important; }

    .bg-red.bg-darken-3 {
    background-color: #c62828 !important; }
    .bg-red.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(198, 40, 40, 0.6); }

    .btn-red.btn-darken-3 {
    border-color: #d32f2f !important;
    background-color: #c62828 !important; }
    .btn-red.btn-darken-3:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-darken-3:focus, .btn-red.btn-darken-3:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-darken-3 {
    border-color: #c62828 !important;
    color: #c62828 !important; }
    .btn-outline-red.btn-outline-darken-3:hover {
        background-color: #c62828 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #c62828 !important; }

    .border-red.border-darken-3 {
    border: 1px solid #c62828 !important; }

    .border-top-red.border-top-darken-3 {
    border-top: 1px solid #c62828 !important; }

    .border-bottom-red.border-bottom-darken-3 {
    border-bottom: 1px solid #c62828 !important; }

    .border-left-red.border-left-darken-3 {
    border-left: 1px solid #c62828 !important; }

    .border-right-red.border-right-darken-3 {
    border-right: 1px solid #c62828 !important; }

    .overlay-red.overlay-darken-3 {
    background: #c62828;
    /* The Fallback */
    background: rgba(198, 40, 40, 0.8); }

    .red.darken-4 {
    color: #b71c1c !important; }

    .bg-red.bg-darken-4 {
    background-color: #b71c1c !important; }
    .bg-red.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(183, 28, 28, 0.6); }

    .btn-red.btn-darken-4 {
    border-color: #d32f2f !important;
    background-color: #b71c1c !important; }
    .btn-red.btn-darken-4:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-darken-4:focus, .btn-red.btn-darken-4:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-darken-4 {
    border-color: #b71c1c !important;
    color: #b71c1c !important; }
    .btn-outline-red.btn-outline-darken-4:hover {
        background-color: #b71c1c !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #b71c1c !important; }

    .border-red.border-darken-4 {
    border: 1px solid #b71c1c !important; }

    .border-top-red.border-top-darken-4 {
    border-top: 1px solid #b71c1c !important; }

    .border-bottom-red.border-bottom-darken-4 {
    border-bottom: 1px solid #b71c1c !important; }

    .border-left-red.border-left-darken-4 {
    border-left: 1px solid #b71c1c !important; }

    .border-right-red.border-right-darken-4 {
    border-right: 1px solid #b71c1c !important; }

    .overlay-red.overlay-darken-4 {
    background: #b71c1c;
    /* The Fallback */
    background: rgba(183, 28, 28, 0.8); }

    .red.accent-1 {
    color: #ff8a80 !important; }

    .bg-red.bg-accent-1 {
    background-color: #ff8a80 !important; }
    .bg-red.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 138, 128, 0.6); }

    .btn-red.btn-accent-1 {
    border-color: #d32f2f !important;
    background-color: #ff8a80 !important; }
    .btn-red.btn-accent-1:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-accent-1:focus, .btn-red.btn-accent-1:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-accent-1 {
    border-color: #ff8a80 !important;
    color: #ff8a80 !important; }
    .btn-outline-red.btn-outline-accent-1:hover {
        background-color: #ff8a80 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff8a80 !important; }

    .border-red.border-accent-1 {
    border: 1px solid #ff8a80 !important; }

    .border-top-red.border-top-accent-1 {
    border-top: 1px solid #ff8a80 !important; }

    .border-bottom-red.border-bottom-accent-1 {
    border-bottom: 1px solid #ff8a80 !important; }

    .border-left-red.border-left-accent-1 {
    border-left: 1px solid #ff8a80 !important; }

    .border-right-red.border-right-accent-1 {
    border-right: 1px solid #ff8a80 !important; }

    .overlay-red.overlay-accent-1 {
    background: #ff8a80;
    /* The Fallback */
    background: rgba(255, 138, 128, 0.8); }

    .red.accent-2 {
    color: #ff5252 !important; }

    .bg-red.bg-accent-2 {
    background-color: #ff5252 !important; }
    .bg-red.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 82, 82, 0.6); }

    .btn-red.btn-accent-2 {
    border-color: #d32f2f !important;
    background-color: #ff5252 !important; }
    .btn-red.btn-accent-2:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-accent-2:focus, .btn-red.btn-accent-2:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-accent-2 {
    border-color: #ff5252 !important;
    color: #ff5252 !important; }
    .btn-outline-red.btn-outline-accent-2:hover {
        background-color: #ff5252 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff5252 !important; }

    .border-red.border-accent-2 {
    border: 1px solid #ff5252 !important; }

    .border-top-red.border-top-accent-2 {
    border-top: 1px solid #ff5252 !important; }

    .border-bottom-red.border-bottom-accent-2 {
    border-bottom: 1px solid #ff5252 !important; }

    .border-left-red.border-left-accent-2 {
    border-left: 1px solid #ff5252 !important; }

    .border-right-red.border-right-accent-2 {
    border-right: 1px solid #ff5252 !important; }

    .overlay-red.overlay-accent-2 {
    background: #ff5252;
    /* The Fallback */
    background: rgba(255, 82, 82, 0.8); }

    .red.accent-3 {
    color: #ff1744 !important; }

    .bg-red.bg-accent-3 {
    background-color: #ff1744 !important; }
    .bg-red.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 23, 68, 0.6); }

    .btn-red.btn-accent-3 {
    border-color: #d32f2f !important;
    background-color: #ff1744 !important; }
    .btn-red.btn-accent-3:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-accent-3:focus, .btn-red.btn-accent-3:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-accent-3 {
    border-color: #ff1744 !important;
    color: #ff1744 !important; }
    .btn-outline-red.btn-outline-accent-3:hover {
        background-color: #ff1744 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff1744 !important; }

    .border-red.border-accent-3 {
    border: 1px solid #ff1744 !important; }

    .border-top-red.border-top-accent-3 {
    border-top: 1px solid #ff1744 !important; }

    .border-bottom-red.border-bottom-accent-3 {
    border-bottom: 1px solid #ff1744 !important; }

    .border-left-red.border-left-accent-3 {
    border-left: 1px solid #ff1744 !important; }

    .border-right-red.border-right-accent-3 {
    border-right: 1px solid #ff1744 !important; }

    .overlay-red.overlay-accent-3 {
    background: #ff1744;
    /* The Fallback */
    background: rgba(255, 23, 68, 0.8); }

    .red.accent-4 {
    color: #d50000 !important; }

    .bg-red.bg-accent-4 {
    background-color: #d50000 !important; }
    .bg-red.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(213, 0, 0, 0.6); }

    .btn-red.btn-accent-4 {
    border-color: #d32f2f !important;
    background-color: #d50000 !important; }
    .btn-red.btn-accent-4:hover {
        border-color: #d32f2f !important;
        background-color: #c62828 !important; }
    .btn-red.btn-accent-4:focus, .btn-red.btn-accent-4:active {
        border-color: #c62828 !important;
        background-color: #b71c1c !important; }

    .btn-outline-red.btn-outline-accent-4 {
    border-color: #d50000 !important;
    color: #d50000 !important; }
    .btn-outline-red.btn-outline-accent-4:hover {
        background-color: #d50000 !important; }

    input:focus ~ .bg-red {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #d50000 !important; }

    .border-red.border-accent-4 {
    border: 1px solid #d50000 !important; }

    .border-top-red.border-top-accent-4 {
    border-top: 1px solid #d50000 !important; }

    .border-bottom-red.border-bottom-accent-4 {
    border-bottom: 1px solid #d50000 !important; }

    .border-left-red.border-left-accent-4 {
    border-left: 1px solid #d50000 !important; }

    .border-right-red.border-right-accent-4 {
    border-right: 1px solid #d50000 !important; }

    .overlay-red.overlay-accent-4 {
    background: #d50000;
    /* The Fallback */
    background: rgba(213, 0, 0, 0.8); }

    .pink.lighten-5 {
    color: #fce4ec !important; }

    .bg-pink.bg-lighten-5 {
    background-color: #fce4ec !important; }
    .bg-pink.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(252, 228, 236, 0.6); }

    .btn-pink.btn-lighten-5 {
    border-color: #c2185b !important;
    background-color: #fce4ec !important; }
    .btn-pink.btn-lighten-5:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-lighten-5:focus, .btn-pink.btn-lighten-5:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-lighten-5 {
    border-color: #fce4ec !important;
    color: #fce4ec !important; }
    .btn-outline-pink.btn-outline-lighten-5:hover {
        background-color: #fce4ec !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fce4ec !important; }

    .border-pink.border-lighten-5 {
    border: 1px solid #fce4ec !important; }

    .border-top-pink.border-top-lighten-5 {
    border-top: 1px solid #fce4ec !important; }

    .border-bottom-pink.border-bottom-lighten-5 {
    border-bottom: 1px solid #fce4ec !important; }

    .border-left-pink.border-left-lighten-5 {
    border-left: 1px solid #fce4ec !important; }

    .border-right-pink.border-right-lighten-5 {
    border-right: 1px solid #fce4ec !important; }

    .overlay-pink.overlay-lighten-5 {
    background: #fce4ec;
    /* The Fallback */
    background: rgba(252, 228, 236, 0.8); }

    .pink.lighten-4 {
    color: #f8bbd0 !important; }

    .bg-pink.bg-lighten-4 {
    background-color: #f8bbd0 !important; }
    .bg-pink.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(248, 187, 208, 0.6); }

    .btn-pink.btn-lighten-4 {
    border-color: #c2185b !important;
    background-color: #f8bbd0 !important; }
    .btn-pink.btn-lighten-4:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-lighten-4:focus, .btn-pink.btn-lighten-4:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-lighten-4 {
    border-color: #f8bbd0 !important;
    color: #f8bbd0 !important; }
    .btn-outline-pink.btn-outline-lighten-4:hover {
        background-color: #f8bbd0 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f8bbd0 !important; }

    .border-pink.border-lighten-4 {
    border: 1px solid #f8bbd0 !important; }

    .border-top-pink.border-top-lighten-4 {
    border-top: 1px solid #f8bbd0 !important; }

    .border-bottom-pink.border-bottom-lighten-4 {
    border-bottom: 1px solid #f8bbd0 !important; }

    .border-left-pink.border-left-lighten-4 {
    border-left: 1px solid #f8bbd0 !important; }

    .border-right-pink.border-right-lighten-4 {
    border-right: 1px solid #f8bbd0 !important; }

    .overlay-pink.overlay-lighten-4 {
    background: #f8bbd0;
    /* The Fallback */
    background: rgba(248, 187, 208, 0.8); }

    .pink.lighten-3 {
    color: #f48fb1 !important; }

    .bg-pink.bg-lighten-3 {
    background-color: #f48fb1 !important; }
    .bg-pink.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(244, 143, 177, 0.6); }

    .btn-pink.btn-lighten-3 {
    border-color: #c2185b !important;
    background-color: #f48fb1 !important; }
    .btn-pink.btn-lighten-3:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-lighten-3:focus, .btn-pink.btn-lighten-3:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-lighten-3 {
    border-color: #f48fb1 !important;
    color: #f48fb1 !important; }
    .btn-outline-pink.btn-outline-lighten-3:hover {
        background-color: #f48fb1 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f48fb1 !important; }

    .border-pink.border-lighten-3 {
    border: 1px solid #f48fb1 !important; }

    .border-top-pink.border-top-lighten-3 {
    border-top: 1px solid #f48fb1 !important; }

    .border-bottom-pink.border-bottom-lighten-3 {
    border-bottom: 1px solid #f48fb1 !important; }

    .border-left-pink.border-left-lighten-3 {
    border-left: 1px solid #f48fb1 !important; }

    .border-right-pink.border-right-lighten-3 {
    border-right: 1px solid #f48fb1 !important; }

    .overlay-pink.overlay-lighten-3 {
    background: #f48fb1;
    /* The Fallback */
    background: rgba(244, 143, 177, 0.8); }

    .pink.lighten-2 {
    color: #f06292 !important; }

    .bg-pink.bg-lighten-2 {
    background-color: #f06292 !important; }
    .bg-pink.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(240, 98, 146, 0.6); }

    .btn-pink.btn-lighten-2 {
    border-color: #c2185b !important;
    background-color: #f06292 !important; }
    .btn-pink.btn-lighten-2:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-lighten-2:focus, .btn-pink.btn-lighten-2:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-lighten-2 {
    border-color: #f06292 !important;
    color: #f06292 !important; }
    .btn-outline-pink.btn-outline-lighten-2:hover {
        background-color: #f06292 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f06292 !important; }

    .border-pink.border-lighten-2 {
    border: 1px solid #f06292 !important; }

    .border-top-pink.border-top-lighten-2 {
    border-top: 1px solid #f06292 !important; }

    .border-bottom-pink.border-bottom-lighten-2 {
    border-bottom: 1px solid #f06292 !important; }

    .border-left-pink.border-left-lighten-2 {
    border-left: 1px solid #f06292 !important; }

    .border-right-pink.border-right-lighten-2 {
    border-right: 1px solid #f06292 !important; }

    .overlay-pink.overlay-lighten-2 {
    background: #f06292;
    /* The Fallback */
    background: rgba(240, 98, 146, 0.8); }

    .pink.lighten-1 {
    color: #ec407a !important; }

    .bg-pink.bg-lighten-1 {
    background-color: #ec407a !important; }
    .bg-pink.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(236, 64, 122, 0.6); }

    .btn-pink.btn-lighten-1 {
    border-color: #c2185b !important;
    background-color: #ec407a !important; }
    .btn-pink.btn-lighten-1:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-lighten-1:focus, .btn-pink.btn-lighten-1:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-lighten-1 {
    border-color: #ec407a !important;
    color: #ec407a !important; }
    .btn-outline-pink.btn-outline-lighten-1:hover {
        background-color: #ec407a !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ec407a !important; }

    .border-pink.border-lighten-1 {
    border: 1px solid #ec407a !important; }

    .border-top-pink.border-top-lighten-1 {
    border-top: 1px solid #ec407a !important; }

    .border-bottom-pink.border-bottom-lighten-1 {
    border-bottom: 1px solid #ec407a !important; }

    .border-left-pink.border-left-lighten-1 {
    border-left: 1px solid #ec407a !important; }

    .border-right-pink.border-right-lighten-1 {
    border-right: 1px solid #ec407a !important; }

    .overlay-pink.overlay-lighten-1 {
    background: #ec407a;
    /* The Fallback */
    background: rgba(236, 64, 122, 0.8); }

    .pink {
    color: #e91e63 !important; }

    .bg-pink {
    background-color: #e91e63 !important; }
    .bg-pink .card-header,
    .bg-pink .card-footer {
        background-color: transparent; }
    .bg-pink.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(233, 30, 99, 0.6); }

    .selectboxit.selectboxit-btn.bg-pink {
    background-color: #e91e63 !important; }

    .alert-pink {
    border-color: #e91e63 !important;
    background-color: #ef5f90 !important;
    color: #4d081f !important; }
    .alert-pink .alert-link {
        color: #280410 !important; }

    .border-pink {
    border-color: #e91e63; }

    .overlay-pink {
    background: #e91e63;
    /* The Fallback */
    background: rgba(233, 30, 99, 0.8); }

    .color-info.pink {
    background-color: #e91e63 !important; }

    .btn-pink {
    border-color: #e91e63 !important;
    background-color: #e91e63 !important;
    color: #FFFFFF; }
    .btn-pink:hover {
        border-color: #ec407a !important;
        background-color: #ec407a !important;
        color: #FFF !important; }
    .btn-pink:focus, .btn-pink:active {
        border-color: #ad1457 !important;
        background-color: #ad1457 !important;
        color: #FFF !important; }
    .btn-pink.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(233, 30, 99, 0.6); }

    .btn-outline-pink {
    border-color: #e91e63;
    background-color: transparent;
    color: #e91e63; }
    .btn-outline-pink:hover {
        background-color: #e91e63;
        color: #FFF !important; }
    .btn-outline-pink.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(233, 30, 99, 0.6); }

    input[type="checkbox"].bg-pink + .custom-control-label:before, input[type="radio"].bg-pink + .custom-control-label:before {
    background-color: #e91e63 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e91e63 !important; }

    .border-pink {
    border: 1px solid #e91e63 !important; }

    .border-top-pink {
    border-top: 1px solid #e91e63; }

    .border-bottom-pink {
    border-bottom: 1px solid #e91e63; }

    .border-left-pink {
    border-left: 1px solid #e91e63; }

    .border-right-pink {
    border-right: 1px solid #e91e63; }

    /* Bullet pink */
    .bullet.bullet-pink {
    background-color: #e91e63; }

    .pink.darken-1 {
    color: #d81b60 !important; }

    .bg-pink.bg-darken-1 {
    background-color: #d81b60 !important; }
    .bg-pink.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(216, 27, 96, 0.6); }

    .btn-pink.btn-darken-1 {
    border-color: #c2185b !important;
    background-color: #d81b60 !important; }
    .btn-pink.btn-darken-1:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-darken-1:focus, .btn-pink.btn-darken-1:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-darken-1 {
    border-color: #d81b60 !important;
    color: #d81b60 !important; }
    .btn-outline-pink.btn-outline-darken-1:hover {
        background-color: #d81b60 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #d81b60 !important; }

    .border-pink.border-darken-1 {
    border: 1px solid #d81b60 !important; }

    .border-top-pink.border-top-darken-1 {
    border-top: 1px solid #d81b60 !important; }

    .border-bottom-pink.border-bottom-darken-1 {
    border-bottom: 1px solid #d81b60 !important; }

    .border-left-pink.border-left-darken-1 {
    border-left: 1px solid #d81b60 !important; }

    .border-right-pink.border-right-darken-1 {
    border-right: 1px solid #d81b60 !important; }

    .overlay-pink.overlay-darken-1 {
    background: #d81b60;
    /* The Fallback */
    background: rgba(216, 27, 96, 0.8); }

    .pink.darken-2 {
    color: #c2185b !important; }

    .bg-pink.bg-darken-2 {
    background-color: #c2185b !important; }
    .bg-pink.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(194, 24, 91, 0.6); }

    .btn-pink.btn-darken-2 {
    border-color: #c2185b !important;
    background-color: #c2185b !important; }
    .btn-pink.btn-darken-2:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-darken-2:focus, .btn-pink.btn-darken-2:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-darken-2 {
    border-color: #c2185b !important;
    color: #c2185b !important; }
    .btn-outline-pink.btn-outline-darken-2:hover {
        background-color: #c2185b !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #c2185b !important; }

    .border-pink.border-darken-2 {
    border: 1px solid #c2185b !important; }

    .border-top-pink.border-top-darken-2 {
    border-top: 1px solid #c2185b !important; }

    .border-bottom-pink.border-bottom-darken-2 {
    border-bottom: 1px solid #c2185b !important; }

    .border-left-pink.border-left-darken-2 {
    border-left: 1px solid #c2185b !important; }

    .border-right-pink.border-right-darken-2 {
    border-right: 1px solid #c2185b !important; }

    .overlay-pink.overlay-darken-2 {
    background: #c2185b;
    /* The Fallback */
    background: rgba(194, 24, 91, 0.8); }

    .pink.darken-3 {
    color: #ad1457 !important; }

    .bg-pink.bg-darken-3 {
    background-color: #ad1457 !important; }
    .bg-pink.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(173, 20, 87, 0.6); }

    .btn-pink.btn-darken-3 {
    border-color: #c2185b !important;
    background-color: #ad1457 !important; }
    .btn-pink.btn-darken-3:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-darken-3:focus, .btn-pink.btn-darken-3:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-darken-3 {
    border-color: #ad1457 !important;
    color: #ad1457 !important; }
    .btn-outline-pink.btn-outline-darken-3:hover {
        background-color: #ad1457 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ad1457 !important; }

    .border-pink.border-darken-3 {
    border: 1px solid #ad1457 !important; }

    .border-top-pink.border-top-darken-3 {
    border-top: 1px solid #ad1457 !important; }

    .border-bottom-pink.border-bottom-darken-3 {
    border-bottom: 1px solid #ad1457 !important; }

    .border-left-pink.border-left-darken-3 {
    border-left: 1px solid #ad1457 !important; }

    .border-right-pink.border-right-darken-3 {
    border-right: 1px solid #ad1457 !important; }

    .overlay-pink.overlay-darken-3 {
    background: #ad1457;
    /* The Fallback */
    background: rgba(173, 20, 87, 0.8); }

    .pink.darken-4 {
    color: #880e4f !important; }

    .bg-pink.bg-darken-4 {
    background-color: #880e4f !important; }
    .bg-pink.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(136, 14, 79, 0.6); }

    .btn-pink.btn-darken-4 {
    border-color: #c2185b !important;
    background-color: #880e4f !important; }
    .btn-pink.btn-darken-4:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-darken-4:focus, .btn-pink.btn-darken-4:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-darken-4 {
    border-color: #880e4f !important;
    color: #880e4f !important; }
    .btn-outline-pink.btn-outline-darken-4:hover {
        background-color: #880e4f !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #880e4f !important; }

    .border-pink.border-darken-4 {
    border: 1px solid #880e4f !important; }

    .border-top-pink.border-top-darken-4 {
    border-top: 1px solid #880e4f !important; }

    .border-bottom-pink.border-bottom-darken-4 {
    border-bottom: 1px solid #880e4f !important; }

    .border-left-pink.border-left-darken-4 {
    border-left: 1px solid #880e4f !important; }

    .border-right-pink.border-right-darken-4 {
    border-right: 1px solid #880e4f !important; }

    .overlay-pink.overlay-darken-4 {
    background: #880e4f;
    /* The Fallback */
    background: rgba(136, 14, 79, 0.8); }

    .pink.accent-1 {
    color: #ff80ab !important; }

    .bg-pink.bg-accent-1 {
    background-color: #ff80ab !important; }
    .bg-pink.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 128, 171, 0.6); }

    .btn-pink.btn-accent-1 {
    border-color: #c2185b !important;
    background-color: #ff80ab !important; }
    .btn-pink.btn-accent-1:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-accent-1:focus, .btn-pink.btn-accent-1:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-accent-1 {
    border-color: #ff80ab !important;
    color: #ff80ab !important; }
    .btn-outline-pink.btn-outline-accent-1:hover {
        background-color: #ff80ab !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff80ab !important; }

    .border-pink.border-accent-1 {
    border: 1px solid #ff80ab !important; }

    .border-top-pink.border-top-accent-1 {
    border-top: 1px solid #ff80ab !important; }

    .border-bottom-pink.border-bottom-accent-1 {
    border-bottom: 1px solid #ff80ab !important; }

    .border-left-pink.border-left-accent-1 {
    border-left: 1px solid #ff80ab !important; }

    .border-right-pink.border-right-accent-1 {
    border-right: 1px solid #ff80ab !important; }

    .overlay-pink.overlay-accent-1 {
    background: #ff80ab;
    /* The Fallback */
    background: rgba(255, 128, 171, 0.8); }

    .pink.accent-2 {
    color: #ff4081 !important; }

    .bg-pink.bg-accent-2 {
    background-color: #ff4081 !important; }
    .bg-pink.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 64, 129, 0.6); }

    .btn-pink.btn-accent-2 {
    border-color: #c2185b !important;
    background-color: #ff4081 !important; }
    .btn-pink.btn-accent-2:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-accent-2:focus, .btn-pink.btn-accent-2:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-accent-2 {
    border-color: #ff4081 !important;
    color: #ff4081 !important; }
    .btn-outline-pink.btn-outline-accent-2:hover {
        background-color: #ff4081 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff4081 !important; }

    .border-pink.border-accent-2 {
    border: 1px solid #ff4081 !important; }

    .border-top-pink.border-top-accent-2 {
    border-top: 1px solid #ff4081 !important; }

    .border-bottom-pink.border-bottom-accent-2 {
    border-bottom: 1px solid #ff4081 !important; }

    .border-left-pink.border-left-accent-2 {
    border-left: 1px solid #ff4081 !important; }

    .border-right-pink.border-right-accent-2 {
    border-right: 1px solid #ff4081 !important; }

    .overlay-pink.overlay-accent-2 {
    background: #ff4081;
    /* The Fallback */
    background: rgba(255, 64, 129, 0.8); }

    .pink.accent-3 {
    color: #f50057 !important; }

    .bg-pink.bg-accent-3 {
    background-color: #f50057 !important; }
    .bg-pink.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(245, 0, 87, 0.6); }

    .btn-pink.btn-accent-3 {
    border-color: #c2185b !important;
    background-color: #f50057 !important; }
    .btn-pink.btn-accent-3:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-accent-3:focus, .btn-pink.btn-accent-3:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-accent-3 {
    border-color: #f50057 !important;
    color: #f50057 !important; }
    .btn-outline-pink.btn-outline-accent-3:hover {
        background-color: #f50057 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f50057 !important; }

    .border-pink.border-accent-3 {
    border: 1px solid #f50057 !important; }

    .border-top-pink.border-top-accent-3 {
    border-top: 1px solid #f50057 !important; }

    .border-bottom-pink.border-bottom-accent-3 {
    border-bottom: 1px solid #f50057 !important; }

    .border-left-pink.border-left-accent-3 {
    border-left: 1px solid #f50057 !important; }

    .border-right-pink.border-right-accent-3 {
    border-right: 1px solid #f50057 !important; }

    .overlay-pink.overlay-accent-3 {
    background: #f50057;
    /* The Fallback */
    background: rgba(245, 0, 87, 0.8); }

    .pink.accent-4 {
    color: #c51162 !important; }

    .bg-pink.bg-accent-4 {
    background-color: #c51162 !important; }
    .bg-pink.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(197, 17, 98, 0.6); }

    .btn-pink.btn-accent-4 {
    border-color: #c2185b !important;
    background-color: #c51162 !important; }
    .btn-pink.btn-accent-4:hover {
        border-color: #c2185b !important;
        background-color: #ad1457 !important; }
    .btn-pink.btn-accent-4:focus, .btn-pink.btn-accent-4:active {
        border-color: #ad1457 !important;
        background-color: #880e4f !important; }

    .btn-outline-pink.btn-outline-accent-4 {
    border-color: #c51162 !important;
    color: #c51162 !important; }
    .btn-outline-pink.btn-outline-accent-4:hover {
        background-color: #c51162 !important; }

    input:focus ~ .bg-pink {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #c51162 !important; }

    .border-pink.border-accent-4 {
    border: 1px solid #c51162 !important; }

    .border-top-pink.border-top-accent-4 {
    border-top: 1px solid #c51162 !important; }

    .border-bottom-pink.border-bottom-accent-4 {
    border-bottom: 1px solid #c51162 !important; }

    .border-left-pink.border-left-accent-4 {
    border-left: 1px solid #c51162 !important; }

    .border-right-pink.border-right-accent-4 {
    border-right: 1px solid #c51162 !important; }

    .overlay-pink.overlay-accent-4 {
    background: #c51162;
    /* The Fallback */
    background: rgba(197, 17, 98, 0.8); }

    .purple.lighten-5 {
    color: #f3e5f5 !important; }

    .bg-purple.bg-lighten-5 {
    background-color: #f3e5f5 !important; }
    .bg-purple.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(243, 229, 245, 0.6); }

    .btn-purple.btn-lighten-5 {
    border-color: #7b1fa2 !important;
    background-color: #f3e5f5 !important; }
    .btn-purple.btn-lighten-5:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-lighten-5:focus, .btn-purple.btn-lighten-5:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-lighten-5 {
    border-color: #f3e5f5 !important;
    color: #f3e5f5 !important; }
    .btn-outline-purple.btn-outline-lighten-5:hover {
        background-color: #f3e5f5 !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f3e5f5 !important; }

    .border-purple.border-lighten-5 {
    border: 1px solid #f3e5f5 !important; }

    .border-top-purple.border-top-lighten-5 {
    border-top: 1px solid #f3e5f5 !important; }

    .border-bottom-purple.border-bottom-lighten-5 {
    border-bottom: 1px solid #f3e5f5 !important; }

    .border-left-purple.border-left-lighten-5 {
    border-left: 1px solid #f3e5f5 !important; }

    .border-right-purple.border-right-lighten-5 {
    border-right: 1px solid #f3e5f5 !important; }

    .overlay-purple.overlay-lighten-5 {
    background: #f3e5f5;
    /* The Fallback */
    background: rgba(243, 229, 245, 0.8); }

    .purple.lighten-4 {
    color: #e1bee7 !important; }

    .bg-purple.bg-lighten-4 {
    background-color: #e1bee7 !important; }
    .bg-purple.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(225, 190, 231, 0.6); }

    .btn-purple.btn-lighten-4 {
    border-color: #7b1fa2 !important;
    background-color: #e1bee7 !important; }
    .btn-purple.btn-lighten-4:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-lighten-4:focus, .btn-purple.btn-lighten-4:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-lighten-4 {
    border-color: #e1bee7 !important;
    color: #e1bee7 !important; }
    .btn-outline-purple.btn-outline-lighten-4:hover {
        background-color: #e1bee7 !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e1bee7 !important; }

    .border-purple.border-lighten-4 {
    border: 1px solid #e1bee7 !important; }

    .border-top-purple.border-top-lighten-4 {
    border-top: 1px solid #e1bee7 !important; }

    .border-bottom-purple.border-bottom-lighten-4 {
    border-bottom: 1px solid #e1bee7 !important; }

    .border-left-purple.border-left-lighten-4 {
    border-left: 1px solid #e1bee7 !important; }

    .border-right-purple.border-right-lighten-4 {
    border-right: 1px solid #e1bee7 !important; }

    .overlay-purple.overlay-lighten-4 {
    background: #e1bee7;
    /* The Fallback */
    background: rgba(225, 190, 231, 0.8); }

    .purple.lighten-3 {
    color: #ce93d8 !important; }

    .bg-purple.bg-lighten-3 {
    background-color: #ce93d8 !important; }
    .bg-purple.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(206, 147, 216, 0.6); }

    .btn-purple.btn-lighten-3 {
    border-color: #7b1fa2 !important;
    background-color: #ce93d8 !important; }
    .btn-purple.btn-lighten-3:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-lighten-3:focus, .btn-purple.btn-lighten-3:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-lighten-3 {
    border-color: #ce93d8 !important;
    color: #ce93d8 !important; }
    .btn-outline-purple.btn-outline-lighten-3:hover {
        background-color: #ce93d8 !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ce93d8 !important; }

    .border-purple.border-lighten-3 {
    border: 1px solid #ce93d8 !important; }

    .border-top-purple.border-top-lighten-3 {
    border-top: 1px solid #ce93d8 !important; }

    .border-bottom-purple.border-bottom-lighten-3 {
    border-bottom: 1px solid #ce93d8 !important; }

    .border-left-purple.border-left-lighten-3 {
    border-left: 1px solid #ce93d8 !important; }

    .border-right-purple.border-right-lighten-3 {
    border-right: 1px solid #ce93d8 !important; }

    .overlay-purple.overlay-lighten-3 {
    background: #ce93d8;
    /* The Fallback */
    background: rgba(206, 147, 216, 0.8); }

    .purple.lighten-2 {
    color: #ba68c8 !important; }

    .bg-purple.bg-lighten-2 {
    background-color: #ba68c8 !important; }
    .bg-purple.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(186, 104, 200, 0.6); }

    .btn-purple.btn-lighten-2 {
    border-color: #7b1fa2 !important;
    background-color: #ba68c8 !important; }
    .btn-purple.btn-lighten-2:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-lighten-2:focus, .btn-purple.btn-lighten-2:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-lighten-2 {
    border-color: #ba68c8 !important;
    color: #ba68c8 !important; }
    .btn-outline-purple.btn-outline-lighten-2:hover {
        background-color: #ba68c8 !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ba68c8 !important; }

    .border-purple.border-lighten-2 {
    border: 1px solid #ba68c8 !important; }

    .border-top-purple.border-top-lighten-2 {
    border-top: 1px solid #ba68c8 !important; }

    .border-bottom-purple.border-bottom-lighten-2 {
    border-bottom: 1px solid #ba68c8 !important; }

    .border-left-purple.border-left-lighten-2 {
    border-left: 1px solid #ba68c8 !important; }

    .border-right-purple.border-right-lighten-2 {
    border-right: 1px solid #ba68c8 !important; }

    .overlay-purple.overlay-lighten-2 {
    background: #ba68c8;
    /* The Fallback */
    background: rgba(186, 104, 200, 0.8); }

    .purple.lighten-1 {
    color: #ab47bc !important; }

    .bg-purple.bg-lighten-1 {
    background-color: #ab47bc !important; }
    .bg-purple.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(171, 71, 188, 0.6); }

    .btn-purple.btn-lighten-1 {
    border-color: #7b1fa2 !important;
    background-color: #ab47bc !important; }
    .btn-purple.btn-lighten-1:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-lighten-1:focus, .btn-purple.btn-lighten-1:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-lighten-1 {
    border-color: #ab47bc !important;
    color: #ab47bc !important; }
    .btn-outline-purple.btn-outline-lighten-1:hover {
        background-color: #ab47bc !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ab47bc !important; }

    .border-purple.border-lighten-1 {
    border: 1px solid #ab47bc !important; }

    .border-top-purple.border-top-lighten-1 {
    border-top: 1px solid #ab47bc !important; }

    .border-bottom-purple.border-bottom-lighten-1 {
    border-bottom: 1px solid #ab47bc !important; }

    .border-left-purple.border-left-lighten-1 {
    border-left: 1px solid #ab47bc !important; }

    .border-right-purple.border-right-lighten-1 {
    border-right: 1px solid #ab47bc !important; }

    .overlay-purple.overlay-lighten-1 {
    background: #ab47bc;
    /* The Fallback */
    background: rgba(171, 71, 188, 0.8); }

    .purple {
    color: #9c27b0 !important; }

    .bg-purple {
    background-color: #9c27b0 !important; }
    .bg-purple .card-header,
    .bg-purple .card-footer {
        background-color: transparent; }
    .bg-purple.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(156, 39, 176, 0.6); }

    .selectboxit.selectboxit-btn.bg-purple {
    background-color: #9c27b0 !important; }

    .alert-purple {
    border-color: #9c27b0 !important;
    background-color: #c248d6 !important;
    color: #1a071e !important; }
    .alert-purple .alert-link {
        color: black !important; }

    .border-purple {
    border-color: #9c27b0; }

    .overlay-purple {
    background: #9c27b0;
    /* The Fallback */
    background: rgba(156, 39, 176, 0.8); }

    .color-info.purple {
    background-color: #9c27b0 !important; }

    .btn-purple {
    border-color: #9c27b0 !important;
    background-color: #9c27b0 !important;
    color: #FFFFFF; }
    .btn-purple:hover {
        border-color: #ab47bc !important;
        background-color: #ab47bc !important;
        color: #FFF !important; }
    .btn-purple:focus, .btn-purple:active {
        border-color: #6a1b9a !important;
        background-color: #6a1b9a !important;
        color: #FFF !important; }
    .btn-purple.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(156, 39, 176, 0.6); }

    .btn-outline-purple {
    border-color: #9c27b0;
    background-color: transparent;
    color: #9c27b0; }
    .btn-outline-purple:hover {
        background-color: #9c27b0;
        color: #FFF !important; }
    .btn-outline-purple.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(156, 39, 176, 0.6); }

    input[type="checkbox"].bg-purple + .custom-control-label:before, input[type="radio"].bg-purple + .custom-control-label:before {
    background-color: #9c27b0 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9c27b0 !important; }

    .border-purple {
    border: 1px solid #9c27b0 !important; }

    .border-top-purple {
    border-top: 1px solid #9c27b0; }

    .border-bottom-purple {
    border-bottom: 1px solid #9c27b0; }

    .border-left-purple {
    border-left: 1px solid #9c27b0; }

    .border-right-purple {
    border-right: 1px solid #9c27b0; }

    /* Bullet purple */
    .bullet.bullet-purple {
    background-color: #9c27b0; }

    .purple.darken-1 {
    color: #8e24aa !important; }

    .bg-purple.bg-darken-1 {
    background-color: #8e24aa !important; }
    .bg-purple.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(142, 36, 170, 0.6); }

    .btn-purple.btn-darken-1 {
    border-color: #7b1fa2 !important;
    background-color: #8e24aa !important; }
    .btn-purple.btn-darken-1:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-darken-1:focus, .btn-purple.btn-darken-1:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-darken-1 {
    border-color: #8e24aa !important;
    color: #8e24aa !important; }
    .btn-outline-purple.btn-outline-darken-1:hover {
        background-color: #8e24aa !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #8e24aa !important; }

    .border-purple.border-darken-1 {
    border: 1px solid #8e24aa !important; }

    .border-top-purple.border-top-darken-1 {
    border-top: 1px solid #8e24aa !important; }

    .border-bottom-purple.border-bottom-darken-1 {
    border-bottom: 1px solid #8e24aa !important; }

    .border-left-purple.border-left-darken-1 {
    border-left: 1px solid #8e24aa !important; }

    .border-right-purple.border-right-darken-1 {
    border-right: 1px solid #8e24aa !important; }

    .overlay-purple.overlay-darken-1 {
    background: #8e24aa;
    /* The Fallback */
    background: rgba(142, 36, 170, 0.8); }

    .purple.darken-2 {
    color: #7b1fa2 !important; }

    .bg-purple.bg-darken-2 {
    background-color: #7b1fa2 !important; }
    .bg-purple.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(123, 31, 162, 0.6); }

    .btn-purple.btn-darken-2 {
    border-color: #7b1fa2 !important;
    background-color: #7b1fa2 !important; }
    .btn-purple.btn-darken-2:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-darken-2:focus, .btn-purple.btn-darken-2:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-darken-2 {
    border-color: #7b1fa2 !important;
    color: #7b1fa2 !important; }
    .btn-outline-purple.btn-outline-darken-2:hover {
        background-color: #7b1fa2 !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7b1fa2 !important; }

    .border-purple.border-darken-2 {
    border: 1px solid #7b1fa2 !important; }

    .border-top-purple.border-top-darken-2 {
    border-top: 1px solid #7b1fa2 !important; }

    .border-bottom-purple.border-bottom-darken-2 {
    border-bottom: 1px solid #7b1fa2 !important; }

    .border-left-purple.border-left-darken-2 {
    border-left: 1px solid #7b1fa2 !important; }

    .border-right-purple.border-right-darken-2 {
    border-right: 1px solid #7b1fa2 !important; }

    .overlay-purple.overlay-darken-2 {
    background: #7b1fa2;
    /* The Fallback */
    background: rgba(123, 31, 162, 0.8); }

    .purple.darken-3 {
    color: #6a1b9a !important; }

    .bg-purple.bg-darken-3 {
    background-color: #6a1b9a !important; }
    .bg-purple.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(106, 27, 154, 0.6); }

    .btn-purple.btn-darken-3 {
    border-color: #7b1fa2 !important;
    background-color: #6a1b9a !important; }
    .btn-purple.btn-darken-3:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-darken-3:focus, .btn-purple.btn-darken-3:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-darken-3 {
    border-color: #6a1b9a !important;
    color: #6a1b9a !important; }
    .btn-outline-purple.btn-outline-darken-3:hover {
        background-color: #6a1b9a !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6a1b9a !important; }

    .border-purple.border-darken-3 {
    border: 1px solid #6a1b9a !important; }

    .border-top-purple.border-top-darken-3 {
    border-top: 1px solid #6a1b9a !important; }

    .border-bottom-purple.border-bottom-darken-3 {
    border-bottom: 1px solid #6a1b9a !important; }

    .border-left-purple.border-left-darken-3 {
    border-left: 1px solid #6a1b9a !important; }

    .border-right-purple.border-right-darken-3 {
    border-right: 1px solid #6a1b9a !important; }

    .overlay-purple.overlay-darken-3 {
    background: #6a1b9a;
    /* The Fallback */
    background: rgba(106, 27, 154, 0.8); }

    .purple.darken-4 {
    color: #4a148c !important; }

    .bg-purple.bg-darken-4 {
    background-color: #4a148c !important; }
    .bg-purple.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(74, 20, 140, 0.6); }

    .btn-purple.btn-darken-4 {
    border-color: #7b1fa2 !important;
    background-color: #4a148c !important; }
    .btn-purple.btn-darken-4:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-darken-4:focus, .btn-purple.btn-darken-4:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-darken-4 {
    border-color: #4a148c !important;
    color: #4a148c !important; }
    .btn-outline-purple.btn-outline-darken-4:hover {
        background-color: #4a148c !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4a148c !important; }

    .border-purple.border-darken-4 {
    border: 1px solid #4a148c !important; }

    .border-top-purple.border-top-darken-4 {
    border-top: 1px solid #4a148c !important; }

    .border-bottom-purple.border-bottom-darken-4 {
    border-bottom: 1px solid #4a148c !important; }

    .border-left-purple.border-left-darken-4 {
    border-left: 1px solid #4a148c !important; }

    .border-right-purple.border-right-darken-4 {
    border-right: 1px solid #4a148c !important; }

    .overlay-purple.overlay-darken-4 {
    background: #4a148c;
    /* The Fallback */
    background: rgba(74, 20, 140, 0.8); }

    .purple.accent-1 {
    color: #ea80fc !important; }

    .bg-purple.bg-accent-1 {
    background-color: #ea80fc !important; }
    .bg-purple.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(234, 128, 252, 0.6); }

    .btn-purple.btn-accent-1 {
    border-color: #7b1fa2 !important;
    background-color: #ea80fc !important; }
    .btn-purple.btn-accent-1:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-accent-1:focus, .btn-purple.btn-accent-1:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-accent-1 {
    border-color: #ea80fc !important;
    color: #ea80fc !important; }
    .btn-outline-purple.btn-outline-accent-1:hover {
        background-color: #ea80fc !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ea80fc !important; }

    .border-purple.border-accent-1 {
    border: 1px solid #ea80fc !important; }

    .border-top-purple.border-top-accent-1 {
    border-top: 1px solid #ea80fc !important; }

    .border-bottom-purple.border-bottom-accent-1 {
    border-bottom: 1px solid #ea80fc !important; }

    .border-left-purple.border-left-accent-1 {
    border-left: 1px solid #ea80fc !important; }

    .border-right-purple.border-right-accent-1 {
    border-right: 1px solid #ea80fc !important; }

    .overlay-purple.overlay-accent-1 {
    background: #ea80fc;
    /* The Fallback */
    background: rgba(234, 128, 252, 0.8); }

    .purple.accent-2 {
    color: #e040fb !important; }

    .bg-purple.bg-accent-2 {
    background-color: #e040fb !important; }
    .bg-purple.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(224, 64, 251, 0.6); }

    .btn-purple.btn-accent-2 {
    border-color: #7b1fa2 !important;
    background-color: #e040fb !important; }
    .btn-purple.btn-accent-2:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-accent-2:focus, .btn-purple.btn-accent-2:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-accent-2 {
    border-color: #e040fb !important;
    color: #e040fb !important; }
    .btn-outline-purple.btn-outline-accent-2:hover {
        background-color: #e040fb !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e040fb !important; }

    .border-purple.border-accent-2 {
    border: 1px solid #e040fb !important; }

    .border-top-purple.border-top-accent-2 {
    border-top: 1px solid #e040fb !important; }

    .border-bottom-purple.border-bottom-accent-2 {
    border-bottom: 1px solid #e040fb !important; }

    .border-left-purple.border-left-accent-2 {
    border-left: 1px solid #e040fb !important; }

    .border-right-purple.border-right-accent-2 {
    border-right: 1px solid #e040fb !important; }

    .overlay-purple.overlay-accent-2 {
    background: #e040fb;
    /* The Fallback */
    background: rgba(224, 64, 251, 0.8); }

    .purple.accent-3 {
    color: #d500f9 !important; }

    .bg-purple.bg-accent-3 {
    background-color: #d500f9 !important; }
    .bg-purple.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(213, 0, 249, 0.6); }

    .btn-purple.btn-accent-3 {
    border-color: #7b1fa2 !important;
    background-color: #d500f9 !important; }
    .btn-purple.btn-accent-3:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-accent-3:focus, .btn-purple.btn-accent-3:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-accent-3 {
    border-color: #d500f9 !important;
    color: #d500f9 !important; }
    .btn-outline-purple.btn-outline-accent-3:hover {
        background-color: #d500f9 !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #d500f9 !important; }

    .border-purple.border-accent-3 {
    border: 1px solid #d500f9 !important; }

    .border-top-purple.border-top-accent-3 {
    border-top: 1px solid #d500f9 !important; }

    .border-bottom-purple.border-bottom-accent-3 {
    border-bottom: 1px solid #d500f9 !important; }

    .border-left-purple.border-left-accent-3 {
    border-left: 1px solid #d500f9 !important; }

    .border-right-purple.border-right-accent-3 {
    border-right: 1px solid #d500f9 !important; }

    .overlay-purple.overlay-accent-3 {
    background: #d500f9;
    /* The Fallback */
    background: rgba(213, 0, 249, 0.8); }

    .purple.accent-4 {
    color: #dd00ff !important; }

    .bg-purple.bg-accent-4 {
    background-color: #dd00ff !important; }
    .bg-purple.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(221, 0, 255, 0.6); }

    .btn-purple.btn-accent-4 {
    border-color: #7b1fa2 !important;
    background-color: #dd00ff !important; }
    .btn-purple.btn-accent-4:hover {
        border-color: #7b1fa2 !important;
        background-color: #6a1b9a !important; }
    .btn-purple.btn-accent-4:focus, .btn-purple.btn-accent-4:active {
        border-color: #6a1b9a !important;
        background-color: #4a148c !important; }

    .btn-outline-purple.btn-outline-accent-4 {
    border-color: #dd00ff !important;
    color: #dd00ff !important; }
    .btn-outline-purple.btn-outline-accent-4:hover {
        background-color: #dd00ff !important; }

    input:focus ~ .bg-purple {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #dd00ff !important; }

    .border-purple.border-accent-4 {
    border: 1px solid #dd00ff !important; }

    .border-top-purple.border-top-accent-4 {
    border-top: 1px solid #dd00ff !important; }

    .border-bottom-purple.border-bottom-accent-4 {
    border-bottom: 1px solid #dd00ff !important; }

    .border-left-purple.border-left-accent-4 {
    border-left: 1px solid #dd00ff !important; }

    .border-right-purple.border-right-accent-4 {
    border-right: 1px solid #dd00ff !important; }

    .overlay-purple.overlay-accent-4 {
    background: #dd00ff;
    /* The Fallback */
    background: rgba(221, 0, 255, 0.8); }

    .blue.lighten-5 {
    color: #e3f2fd !important; }

    .bg-blue.bg-lighten-5 {
    background-color: #e3f2fd !important; }
    .bg-blue.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(227, 242, 253, 0.6); }

    .btn-blue.btn-lighten-5 {
    border-color: #1976d2 !important;
    background-color: #e3f2fd !important; }
    .btn-blue.btn-lighten-5:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-lighten-5:focus, .btn-blue.btn-lighten-5:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-lighten-5 {
    border-color: #e3f2fd !important;
    color: #e3f2fd !important; }
    .btn-outline-blue.btn-outline-lighten-5:hover {
        background-color: #e3f2fd !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e3f2fd !important; }

    .border-blue.border-lighten-5 {
    border: 1px solid #e3f2fd !important; }

    .border-top-blue.border-top-lighten-5 {
    border-top: 1px solid #e3f2fd !important; }

    .border-bottom-blue.border-bottom-lighten-5 {
    border-bottom: 1px solid #e3f2fd !important; }

    .border-left-blue.border-left-lighten-5 {
    border-left: 1px solid #e3f2fd !important; }

    .border-right-blue.border-right-lighten-5 {
    border-right: 1px solid #e3f2fd !important; }

    .overlay-blue.overlay-lighten-5 {
    background: #e3f2fd;
    /* The Fallback */
    background: rgba(227, 242, 253, 0.8); }

    .blue.lighten-4 {
    color: #bbdefb !important; }

    .bg-blue.bg-lighten-4 {
    background-color: #bbdefb !important; }
    .bg-blue.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(187, 222, 251, 0.6); }

    .btn-blue.btn-lighten-4 {
    border-color: #1976d2 !important;
    background-color: #bbdefb !important; }
    .btn-blue.btn-lighten-4:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-lighten-4:focus, .btn-blue.btn-lighten-4:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-lighten-4 {
    border-color: #bbdefb !important;
    color: #bbdefb !important; }
    .btn-outline-blue.btn-outline-lighten-4:hover {
        background-color: #bbdefb !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #bbdefb !important; }

    .border-blue.border-lighten-4 {
    border: 1px solid #bbdefb !important; }

    .border-top-blue.border-top-lighten-4 {
    border-top: 1px solid #bbdefb !important; }

    .border-bottom-blue.border-bottom-lighten-4 {
    border-bottom: 1px solid #bbdefb !important; }

    .border-left-blue.border-left-lighten-4 {
    border-left: 1px solid #bbdefb !important; }

    .border-right-blue.border-right-lighten-4 {
    border-right: 1px solid #bbdefb !important; }

    .overlay-blue.overlay-lighten-4 {
    background: #bbdefb;
    /* The Fallback */
    background: rgba(187, 222, 251, 0.8); }

    .blue.lighten-3 {
    color: #90caf9 !important; }

    .bg-blue.bg-lighten-3 {
    background-color: #90caf9 !important; }
    .bg-blue.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(144, 202, 249, 0.6); }

    .btn-blue.btn-lighten-3 {
    border-color: #1976d2 !important;
    background-color: #90caf9 !important; }
    .btn-blue.btn-lighten-3:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-lighten-3:focus, .btn-blue.btn-lighten-3:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-lighten-3 {
    border-color: #90caf9 !important;
    color: #90caf9 !important; }
    .btn-outline-blue.btn-outline-lighten-3:hover {
        background-color: #90caf9 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #90caf9 !important; }

    .border-blue.border-lighten-3 {
    border: 1px solid #90caf9 !important; }

    .border-top-blue.border-top-lighten-3 {
    border-top: 1px solid #90caf9 !important; }

    .border-bottom-blue.border-bottom-lighten-3 {
    border-bottom: 1px solid #90caf9 !important; }

    .border-left-blue.border-left-lighten-3 {
    border-left: 1px solid #90caf9 !important; }

    .border-right-blue.border-right-lighten-3 {
    border-right: 1px solid #90caf9 !important; }

    .overlay-blue.overlay-lighten-3 {
    background: #90caf9;
    /* The Fallback */
    background: rgba(144, 202, 249, 0.8); }

    .blue.lighten-2 {
    color: #64b5f6 !important; }

    .bg-blue.bg-lighten-2 {
    background-color: #64b5f6 !important; }
    .bg-blue.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(100, 181, 246, 0.6); }

    .btn-blue.btn-lighten-2 {
    border-color: #1976d2 !important;
    background-color: #64b5f6 !important; }
    .btn-blue.btn-lighten-2:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-lighten-2:focus, .btn-blue.btn-lighten-2:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-lighten-2 {
    border-color: #64b5f6 !important;
    color: #64b5f6 !important; }
    .btn-outline-blue.btn-outline-lighten-2:hover {
        background-color: #64b5f6 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #64b5f6 !important; }

    .border-blue.border-lighten-2 {
    border: 1px solid #64b5f6 !important; }

    .border-top-blue.border-top-lighten-2 {
    border-top: 1px solid #64b5f6 !important; }

    .border-bottom-blue.border-bottom-lighten-2 {
    border-bottom: 1px solid #64b5f6 !important; }

    .border-left-blue.border-left-lighten-2 {
    border-left: 1px solid #64b5f6 !important; }

    .border-right-blue.border-right-lighten-2 {
    border-right: 1px solid #64b5f6 !important; }

    .overlay-blue.overlay-lighten-2 {
    background: #64b5f6;
    /* The Fallback */
    background: rgba(100, 181, 246, 0.8); }

    .blue.lighten-1 {
    color: #42a5f5 !important; }

    .bg-blue.bg-lighten-1 {
    background-color: #42a5f5 !important; }
    .bg-blue.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(66, 165, 245, 0.6); }

    .btn-blue.btn-lighten-1 {
    border-color: #1976d2 !important;
    background-color: #42a5f5 !important; }
    .btn-blue.btn-lighten-1:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-lighten-1:focus, .btn-blue.btn-lighten-1:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-lighten-1 {
    border-color: #42a5f5 !important;
    color: #42a5f5 !important; }
    .btn-outline-blue.btn-outline-lighten-1:hover {
        background-color: #42a5f5 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #42a5f5 !important; }

    .border-blue.border-lighten-1 {
    border: 1px solid #42a5f5 !important; }

    .border-top-blue.border-top-lighten-1 {
    border-top: 1px solid #42a5f5 !important; }

    .border-bottom-blue.border-bottom-lighten-1 {
    border-bottom: 1px solid #42a5f5 !important; }

    .border-left-blue.border-left-lighten-1 {
    border-left: 1px solid #42a5f5 !important; }

    .border-right-blue.border-right-lighten-1 {
    border-right: 1px solid #42a5f5 !important; }

    .overlay-blue.overlay-lighten-1 {
    background: #42a5f5;
    /* The Fallback */
    background: rgba(66, 165, 245, 0.8); }

    .blue {
    color: #2196f3 !important; }

    .bg-blue {
    background-color: #2196f3 !important; }
    .bg-blue .card-header,
    .bg-blue .card-footer {
        background-color: transparent; }
    .bg-blue.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(33, 150, 243, 0.6); }

    .selectboxit.selectboxit-btn.bg-blue {
    background-color: #2196f3 !important; }

    .alert-blue {
    border-color: #2196f3 !important;
    background-color: #65b6f7 !important;
    color: #05365d !important; }
    .alert-blue .alert-link {
        color: #031f36 !important; }

    .border-blue {
    border-color: #2196f3; }

    .overlay-blue {
    background: #2196f3;
    /* The Fallback */
    background: rgba(33, 150, 243, 0.8); }

    .color-info.blue {
    background-color: #2196f3 !important; }

    .btn-blue {
    border-color: #2196f3 !important;
    background-color: #2196f3 !important;
    color: #FFFFFF; }
    .btn-blue:hover {
        border-color: #42a5f5 !important;
        background-color: #42a5f5 !important;
        color: #FFF !important; }
    .btn-blue:focus, .btn-blue:active {
        border-color: #1565c0 !important;
        background-color: #1565c0 !important;
        color: #FFF !important; }
    .btn-blue.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(33, 150, 243, 0.6); }

    .btn-outline-blue {
    border-color: #2196f3;
    background-color: transparent;
    color: #2196f3; }
    .btn-outline-blue:hover {
        background-color: #2196f3;
        color: #FFF !important; }
    .btn-outline-blue.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(33, 150, 243, 0.6); }

    input[type="checkbox"].bg-blue + .custom-control-label:before, input[type="radio"].bg-blue + .custom-control-label:before {
    background-color: #2196f3 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2196f3 !important; }

    .border-blue {
    border: 1px solid #2196f3 !important; }

    .border-top-blue {
    border-top: 1px solid #2196f3; }

    .border-bottom-blue {
    border-bottom: 1px solid #2196f3; }

    .border-left-blue {
    border-left: 1px solid #2196f3; }

    .border-right-blue {
    border-right: 1px solid #2196f3; }

    /* Bullet blue */
    .bullet.bullet-blue {
    background-color: #2196f3; }

    .blue.darken-1 {
    color: #1e88e5 !important; }

    .bg-blue.bg-darken-1 {
    background-color: #1e88e5 !important; }
    .bg-blue.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(30, 136, 229, 0.6); }

    .btn-blue.btn-darken-1 {
    border-color: #1976d2 !important;
    background-color: #1e88e5 !important; }
    .btn-blue.btn-darken-1:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-darken-1:focus, .btn-blue.btn-darken-1:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-darken-1 {
    border-color: #1e88e5 !important;
    color: #1e88e5 !important; }
    .btn-outline-blue.btn-outline-darken-1:hover {
        background-color: #1e88e5 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1e88e5 !important; }

    .border-blue.border-darken-1 {
    border: 1px solid #1e88e5 !important; }

    .border-top-blue.border-top-darken-1 {
    border-top: 1px solid #1e88e5 !important; }

    .border-bottom-blue.border-bottom-darken-1 {
    border-bottom: 1px solid #1e88e5 !important; }

    .border-left-blue.border-left-darken-1 {
    border-left: 1px solid #1e88e5 !important; }

    .border-right-blue.border-right-darken-1 {
    border-right: 1px solid #1e88e5 !important; }

    .overlay-blue.overlay-darken-1 {
    background: #1e88e5;
    /* The Fallback */
    background: rgba(30, 136, 229, 0.8); }

    .blue.darken-2 {
    color: #1976d2 !important; }

    .bg-blue.bg-darken-2 {
    background-color: #1976d2 !important; }
    .bg-blue.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(25, 118, 210, 0.6); }

    .btn-blue.btn-darken-2 {
    border-color: #1976d2 !important;
    background-color: #1976d2 !important; }
    .btn-blue.btn-darken-2:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-darken-2:focus, .btn-blue.btn-darken-2:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-darken-2 {
    border-color: #1976d2 !important;
    color: #1976d2 !important; }
    .btn-outline-blue.btn-outline-darken-2:hover {
        background-color: #1976d2 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1976d2 !important; }

    .border-blue.border-darken-2 {
    border: 1px solid #1976d2 !important; }

    .border-top-blue.border-top-darken-2 {
    border-top: 1px solid #1976d2 !important; }

    .border-bottom-blue.border-bottom-darken-2 {
    border-bottom: 1px solid #1976d2 !important; }

    .border-left-blue.border-left-darken-2 {
    border-left: 1px solid #1976d2 !important; }

    .border-right-blue.border-right-darken-2 {
    border-right: 1px solid #1976d2 !important; }

    .overlay-blue.overlay-darken-2 {
    background: #1976d2;
    /* The Fallback */
    background: rgba(25, 118, 210, 0.8); }

    .blue.darken-3 {
    color: #1565c0 !important; }

    .bg-blue.bg-darken-3 {
    background-color: #1565c0 !important; }
    .bg-blue.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(21, 101, 192, 0.6); }

    .btn-blue.btn-darken-3 {
    border-color: #1976d2 !important;
    background-color: #1565c0 !important; }
    .btn-blue.btn-darken-3:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-darken-3:focus, .btn-blue.btn-darken-3:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-darken-3 {
    border-color: #1565c0 !important;
    color: #1565c0 !important; }
    .btn-outline-blue.btn-outline-darken-3:hover {
        background-color: #1565c0 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1565c0 !important; }

    .border-blue.border-darken-3 {
    border: 1px solid #1565c0 !important; }

    .border-top-blue.border-top-darken-3 {
    border-top: 1px solid #1565c0 !important; }

    .border-bottom-blue.border-bottom-darken-3 {
    border-bottom: 1px solid #1565c0 !important; }

    .border-left-blue.border-left-darken-3 {
    border-left: 1px solid #1565c0 !important; }

    .border-right-blue.border-right-darken-3 {
    border-right: 1px solid #1565c0 !important; }

    .overlay-blue.overlay-darken-3 {
    background: #1565c0;
    /* The Fallback */
    background: rgba(21, 101, 192, 0.8); }

    .blue.darken-4 {
    color: #0d47a1 !important; }

    .bg-blue.bg-darken-4 {
    background-color: #0d47a1 !important; }
    .bg-blue.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(13, 71, 161, 0.6); }

    .btn-blue.btn-darken-4 {
    border-color: #1976d2 !important;
    background-color: #0d47a1 !important; }
    .btn-blue.btn-darken-4:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-darken-4:focus, .btn-blue.btn-darken-4:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-darken-4 {
    border-color: #0d47a1 !important;
    color: #0d47a1 !important; }
    .btn-outline-blue.btn-outline-darken-4:hover {
        background-color: #0d47a1 !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0d47a1 !important; }

    .border-blue.border-darken-4 {
    border: 1px solid #0d47a1 !important; }

    .border-top-blue.border-top-darken-4 {
    border-top: 1px solid #0d47a1 !important; }

    .border-bottom-blue.border-bottom-darken-4 {
    border-bottom: 1px solid #0d47a1 !important; }

    .border-left-blue.border-left-darken-4 {
    border-left: 1px solid #0d47a1 !important; }

    .border-right-blue.border-right-darken-4 {
    border-right: 1px solid #0d47a1 !important; }

    .overlay-blue.overlay-darken-4 {
    background: #0d47a1;
    /* The Fallback */
    background: rgba(13, 71, 161, 0.8); }

    .blue.accent-1 {
    color: #82b1ff !important; }

    .bg-blue.bg-accent-1 {
    background-color: #82b1ff !important; }
    .bg-blue.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(130, 177, 255, 0.6); }

    .btn-blue.btn-accent-1 {
    border-color: #1976d2 !important;
    background-color: #82b1ff !important; }
    .btn-blue.btn-accent-1:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-accent-1:focus, .btn-blue.btn-accent-1:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-accent-1 {
    border-color: #82b1ff !important;
    color: #82b1ff !important; }
    .btn-outline-blue.btn-outline-accent-1:hover {
        background-color: #82b1ff !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #82b1ff !important; }

    .border-blue.border-accent-1 {
    border: 1px solid #82b1ff !important; }

    .border-top-blue.border-top-accent-1 {
    border-top: 1px solid #82b1ff !important; }

    .border-bottom-blue.border-bottom-accent-1 {
    border-bottom: 1px solid #82b1ff !important; }

    .border-left-blue.border-left-accent-1 {
    border-left: 1px solid #82b1ff !important; }

    .border-right-blue.border-right-accent-1 {
    border-right: 1px solid #82b1ff !important; }

    .overlay-blue.overlay-accent-1 {
    background: #82b1ff;
    /* The Fallback */
    background: rgba(130, 177, 255, 0.8); }

    .blue.accent-2 {
    color: #448aff !important; }

    .bg-blue.bg-accent-2 {
    background-color: #448aff !important; }
    .bg-blue.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(68, 138, 255, 0.6); }

    .btn-blue.btn-accent-2 {
    border-color: #1976d2 !important;
    background-color: #448aff !important; }
    .btn-blue.btn-accent-2:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-accent-2:focus, .btn-blue.btn-accent-2:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-accent-2 {
    border-color: #448aff !important;
    color: #448aff !important; }
    .btn-outline-blue.btn-outline-accent-2:hover {
        background-color: #448aff !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #448aff !important; }

    .border-blue.border-accent-2 {
    border: 1px solid #448aff !important; }

    .border-top-blue.border-top-accent-2 {
    border-top: 1px solid #448aff !important; }

    .border-bottom-blue.border-bottom-accent-2 {
    border-bottom: 1px solid #448aff !important; }

    .border-left-blue.border-left-accent-2 {
    border-left: 1px solid #448aff !important; }

    .border-right-blue.border-right-accent-2 {
    border-right: 1px solid #448aff !important; }

    .overlay-blue.overlay-accent-2 {
    background: #448aff;
    /* The Fallback */
    background: rgba(68, 138, 255, 0.8); }

    .blue.accent-3 {
    color: #2979ff !important; }

    .bg-blue.bg-accent-3 {
    background-color: #2979ff !important; }
    .bg-blue.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(41, 121, 255, 0.6); }

    .btn-blue.btn-accent-3 {
    border-color: #1976d2 !important;
    background-color: #2979ff !important; }
    .btn-blue.btn-accent-3:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-accent-3:focus, .btn-blue.btn-accent-3:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-accent-3 {
    border-color: #2979ff !important;
    color: #2979ff !important; }
    .btn-outline-blue.btn-outline-accent-3:hover {
        background-color: #2979ff !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2979ff !important; }

    .border-blue.border-accent-3 {
    border: 1px solid #2979ff !important; }

    .border-top-blue.border-top-accent-3 {
    border-top: 1px solid #2979ff !important; }

    .border-bottom-blue.border-bottom-accent-3 {
    border-bottom: 1px solid #2979ff !important; }

    .border-left-blue.border-left-accent-3 {
    border-left: 1px solid #2979ff !important; }

    .border-right-blue.border-right-accent-3 {
    border-right: 1px solid #2979ff !important; }

    .overlay-blue.overlay-accent-3 {
    background: #2979ff;
    /* The Fallback */
    background: rgba(41, 121, 255, 0.8); }

    .blue.accent-4 {
    color: #2962ff !important; }

    .bg-blue.bg-accent-4 {
    background-color: #2962ff !important; }
    .bg-blue.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(41, 98, 255, 0.6); }

    .btn-blue.btn-accent-4 {
    border-color: #1976d2 !important;
    background-color: #2962ff !important; }
    .btn-blue.btn-accent-4:hover {
        border-color: #1976d2 !important;
        background-color: #1565c0 !important; }
    .btn-blue.btn-accent-4:focus, .btn-blue.btn-accent-4:active {
        border-color: #1565c0 !important;
        background-color: #0d47a1 !important; }

    .btn-outline-blue.btn-outline-accent-4 {
    border-color: #2962ff !important;
    color: #2962ff !important; }
    .btn-outline-blue.btn-outline-accent-4:hover {
        background-color: #2962ff !important; }

    input:focus ~ .bg-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2962ff !important; }

    .border-blue.border-accent-4 {
    border: 1px solid #2962ff !important; }

    .border-top-blue.border-top-accent-4 {
    border-top: 1px solid #2962ff !important; }

    .border-bottom-blue.border-bottom-accent-4 {
    border-bottom: 1px solid #2962ff !important; }

    .border-left-blue.border-left-accent-4 {
    border-left: 1px solid #2962ff !important; }

    .border-right-blue.border-right-accent-4 {
    border-right: 1px solid #2962ff !important; }

    .overlay-blue.overlay-accent-4 {
    background: #2962ff;
    /* The Fallback */
    background: rgba(41, 98, 255, 0.8); }

    .cyan.lighten-5 {
    color: #e0f7fa !important; }

    .bg-cyan.bg-lighten-5 {
    background-color: #e0f7fa !important; }
    .bg-cyan.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(224, 247, 250, 0.6); }

    .btn-cyan.btn-lighten-5 {
    border-color: #0097a7 !important;
    background-color: #e0f7fa !important; }
    .btn-cyan.btn-lighten-5:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-lighten-5:focus, .btn-cyan.btn-lighten-5:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-lighten-5 {
    border-color: #e0f7fa !important;
    color: #e0f7fa !important; }
    .btn-outline-cyan.btn-outline-lighten-5:hover {
        background-color: #e0f7fa !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e0f7fa !important; }

    .border-cyan.border-lighten-5 {
    border: 1px solid #e0f7fa !important; }

    .border-top-cyan.border-top-lighten-5 {
    border-top: 1px solid #e0f7fa !important; }

    .border-bottom-cyan.border-bottom-lighten-5 {
    border-bottom: 1px solid #e0f7fa !important; }

    .border-left-cyan.border-left-lighten-5 {
    border-left: 1px solid #e0f7fa !important; }

    .border-right-cyan.border-right-lighten-5 {
    border-right: 1px solid #e0f7fa !important; }

    .overlay-cyan.overlay-lighten-5 {
    background: #e0f7fa;
    /* The Fallback */
    background: rgba(224, 247, 250, 0.8); }

    .cyan.lighten-4 {
    color: #b2ebf2 !important; }

    .bg-cyan.bg-lighten-4 {
    background-color: #b2ebf2 !important; }
    .bg-cyan.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(178, 235, 242, 0.6); }

    .btn-cyan.btn-lighten-4 {
    border-color: #0097a7 !important;
    background-color: #b2ebf2 !important; }
    .btn-cyan.btn-lighten-4:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-lighten-4:focus, .btn-cyan.btn-lighten-4:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-lighten-4 {
    border-color: #b2ebf2 !important;
    color: #b2ebf2 !important; }
    .btn-outline-cyan.btn-outline-lighten-4:hover {
        background-color: #b2ebf2 !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #b2ebf2 !important; }

    .border-cyan.border-lighten-4 {
    border: 1px solid #b2ebf2 !important; }

    .border-top-cyan.border-top-lighten-4 {
    border-top: 1px solid #b2ebf2 !important; }

    .border-bottom-cyan.border-bottom-lighten-4 {
    border-bottom: 1px solid #b2ebf2 !important; }

    .border-left-cyan.border-left-lighten-4 {
    border-left: 1px solid #b2ebf2 !important; }

    .border-right-cyan.border-right-lighten-4 {
    border-right: 1px solid #b2ebf2 !important; }

    .overlay-cyan.overlay-lighten-4 {
    background: #b2ebf2;
    /* The Fallback */
    background: rgba(178, 235, 242, 0.8); }

    .cyan.lighten-3 {
    color: #80deea !important; }

    .bg-cyan.bg-lighten-3 {
    background-color: #80deea !important; }
    .bg-cyan.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(128, 222, 234, 0.6); }

    .btn-cyan.btn-lighten-3 {
    border-color: #0097a7 !important;
    background-color: #80deea !important; }
    .btn-cyan.btn-lighten-3:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-lighten-3:focus, .btn-cyan.btn-lighten-3:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-lighten-3 {
    border-color: #80deea !important;
    color: #80deea !important; }
    .btn-outline-cyan.btn-outline-lighten-3:hover {
        background-color: #80deea !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #80deea !important; }

    .border-cyan.border-lighten-3 {
    border: 1px solid #80deea !important; }

    .border-top-cyan.border-top-lighten-3 {
    border-top: 1px solid #80deea !important; }

    .border-bottom-cyan.border-bottom-lighten-3 {
    border-bottom: 1px solid #80deea !important; }

    .border-left-cyan.border-left-lighten-3 {
    border-left: 1px solid #80deea !important; }

    .border-right-cyan.border-right-lighten-3 {
    border-right: 1px solid #80deea !important; }

    .overlay-cyan.overlay-lighten-3 {
    background: #80deea;
    /* The Fallback */
    background: rgba(128, 222, 234, 0.8); }

    .cyan.lighten-2 {
    color: #4dd0e1 !important; }

    .bg-cyan.bg-lighten-2 {
    background-color: #4dd0e1 !important; }
    .bg-cyan.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(77, 208, 225, 0.6); }

    .btn-cyan.btn-lighten-2 {
    border-color: #0097a7 !important;
    background-color: #4dd0e1 !important; }
    .btn-cyan.btn-lighten-2:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-lighten-2:focus, .btn-cyan.btn-lighten-2:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-lighten-2 {
    border-color: #4dd0e1 !important;
    color: #4dd0e1 !important; }
    .btn-outline-cyan.btn-outline-lighten-2:hover {
        background-color: #4dd0e1 !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4dd0e1 !important; }

    .border-cyan.border-lighten-2 {
    border: 1px solid #4dd0e1 !important; }

    .border-top-cyan.border-top-lighten-2 {
    border-top: 1px solid #4dd0e1 !important; }

    .border-bottom-cyan.border-bottom-lighten-2 {
    border-bottom: 1px solid #4dd0e1 !important; }

    .border-left-cyan.border-left-lighten-2 {
    border-left: 1px solid #4dd0e1 !important; }

    .border-right-cyan.border-right-lighten-2 {
    border-right: 1px solid #4dd0e1 !important; }

    .overlay-cyan.overlay-lighten-2 {
    background: #4dd0e1;
    /* The Fallback */
    background: rgba(77, 208, 225, 0.8); }

    .cyan.lighten-1 {
    color: #26c6da !important; }

    .bg-cyan.bg-lighten-1 {
    background-color: #26c6da !important; }
    .bg-cyan.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(38, 198, 218, 0.6); }

    .btn-cyan.btn-lighten-1 {
    border-color: #0097a7 !important;
    background-color: #26c6da !important; }
    .btn-cyan.btn-lighten-1:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-lighten-1:focus, .btn-cyan.btn-lighten-1:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-lighten-1 {
    border-color: #26c6da !important;
    color: #26c6da !important; }
    .btn-outline-cyan.btn-outline-lighten-1:hover {
        background-color: #26c6da !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #26c6da !important; }

    .border-cyan.border-lighten-1 {
    border: 1px solid #26c6da !important; }

    .border-top-cyan.border-top-lighten-1 {
    border-top: 1px solid #26c6da !important; }

    .border-bottom-cyan.border-bottom-lighten-1 {
    border-bottom: 1px solid #26c6da !important; }

    .border-left-cyan.border-left-lighten-1 {
    border-left: 1px solid #26c6da !important; }

    .border-right-cyan.border-right-lighten-1 {
    border-right: 1px solid #26c6da !important; }

    .overlay-cyan.overlay-lighten-1 {
    background: #26c6da;
    /* The Fallback */
    background: rgba(38, 198, 218, 0.8); }

    .cyan {
    color: #00bcd4 !important; }

    .bg-cyan {
    background-color: #00bcd4 !important; }
    .bg-cyan .card-header,
    .bg-cyan .card-footer {
        background-color: transparent; }
    .bg-cyan.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 188, 212, 0.6); }

    .selectboxit.selectboxit-btn.bg-cyan {
    background-color: #00bcd4 !important; }

    .alert-cyan {
    border-color: #00bcd4 !important;
    background-color: #1ce5ff !important;
    color: #001e22 !important; }
    .alert-cyan .alert-link {
        color: black !important; }

    .border-cyan {
    border-color: #00bcd4; }

    .overlay-cyan {
    background: #00bcd4;
    /* The Fallback */
    background: rgba(0, 188, 212, 0.8); }

    .color-info.cyan {
    background-color: #00bcd4 !important; }

    .btn-cyan {
    border-color: #00bcd4 !important;
    background-color: #00bcd4 !important;
    color: #FFFFFF; }
    .btn-cyan:hover {
        border-color: #26c6da !important;
        background-color: #26c6da !important;
        color: #FFF !important; }
    .btn-cyan:focus, .btn-cyan:active {
        border-color: #00838f !important;
        background-color: #00838f !important;
        color: #FFF !important; }
    .btn-cyan.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 188, 212, 0.6); }

    .btn-outline-cyan {
    border-color: #00bcd4;
    background-color: transparent;
    color: #00bcd4; }
    .btn-outline-cyan:hover {
        background-color: #00bcd4;
        color: #FFF !important; }
    .btn-outline-cyan.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 188, 212, 0.6); }

    input[type="checkbox"].bg-cyan + .custom-control-label:before, input[type="radio"].bg-cyan + .custom-control-label:before {
    background-color: #00bcd4 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00bcd4 !important; }

    .border-cyan {
    border: 1px solid #00bcd4 !important; }

    .border-top-cyan {
    border-top: 1px solid #00bcd4; }

    .border-bottom-cyan {
    border-bottom: 1px solid #00bcd4; }

    .border-left-cyan {
    border-left: 1px solid #00bcd4; }

    .border-right-cyan {
    border-right: 1px solid #00bcd4; }

    /* Bullet cyan */
    .bullet.bullet-cyan {
    background-color: #00bcd4; }

    .cyan.darken-1 {
    color: #00acc1 !important; }

    .bg-cyan.bg-darken-1 {
    background-color: #00acc1 !important; }
    .bg-cyan.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 172, 193, 0.6); }

    .btn-cyan.btn-darken-1 {
    border-color: #0097a7 !important;
    background-color: #00acc1 !important; }
    .btn-cyan.btn-darken-1:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-darken-1:focus, .btn-cyan.btn-darken-1:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-darken-1 {
    border-color: #00acc1 !important;
    color: #00acc1 !important; }
    .btn-outline-cyan.btn-outline-darken-1:hover {
        background-color: #00acc1 !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00acc1 !important; }

    .border-cyan.border-darken-1 {
    border: 1px solid #00acc1 !important; }

    .border-top-cyan.border-top-darken-1 {
    border-top: 1px solid #00acc1 !important; }

    .border-bottom-cyan.border-bottom-darken-1 {
    border-bottom: 1px solid #00acc1 !important; }

    .border-left-cyan.border-left-darken-1 {
    border-left: 1px solid #00acc1 !important; }

    .border-right-cyan.border-right-darken-1 {
    border-right: 1px solid #00acc1 !important; }

    .overlay-cyan.overlay-darken-1 {
    background: #00acc1;
    /* The Fallback */
    background: rgba(0, 172, 193, 0.8); }

    .cyan.darken-2 {
    color: #0097a7 !important; }

    .bg-cyan.bg-darken-2 {
    background-color: #0097a7 !important; }
    .bg-cyan.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 151, 167, 0.6); }

    .btn-cyan.btn-darken-2 {
    border-color: #0097a7 !important;
    background-color: #0097a7 !important; }
    .btn-cyan.btn-darken-2:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-darken-2:focus, .btn-cyan.btn-darken-2:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-darken-2 {
    border-color: #0097a7 !important;
    color: #0097a7 !important; }
    .btn-outline-cyan.btn-outline-darken-2:hover {
        background-color: #0097a7 !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0097a7 !important; }

    .border-cyan.border-darken-2 {
    border: 1px solid #0097a7 !important; }

    .border-top-cyan.border-top-darken-2 {
    border-top: 1px solid #0097a7 !important; }

    .border-bottom-cyan.border-bottom-darken-2 {
    border-bottom: 1px solid #0097a7 !important; }

    .border-left-cyan.border-left-darken-2 {
    border-left: 1px solid #0097a7 !important; }

    .border-right-cyan.border-right-darken-2 {
    border-right: 1px solid #0097a7 !important; }

    .overlay-cyan.overlay-darken-2 {
    background: #0097a7;
    /* The Fallback */
    background: rgba(0, 151, 167, 0.8); }

    .cyan.darken-3 {
    color: #00838f !important; }

    .bg-cyan.bg-darken-3 {
    background-color: #00838f !important; }
    .bg-cyan.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 131, 143, 0.6); }

    .btn-cyan.btn-darken-3 {
    border-color: #0097a7 !important;
    background-color: #00838f !important; }
    .btn-cyan.btn-darken-3:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-darken-3:focus, .btn-cyan.btn-darken-3:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-darken-3 {
    border-color: #00838f !important;
    color: #00838f !important; }
    .btn-outline-cyan.btn-outline-darken-3:hover {
        background-color: #00838f !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00838f !important; }

    .border-cyan.border-darken-3 {
    border: 1px solid #00838f !important; }

    .border-top-cyan.border-top-darken-3 {
    border-top: 1px solid #00838f !important; }

    .border-bottom-cyan.border-bottom-darken-3 {
    border-bottom: 1px solid #00838f !important; }

    .border-left-cyan.border-left-darken-3 {
    border-left: 1px solid #00838f !important; }

    .border-right-cyan.border-right-darken-3 {
    border-right: 1px solid #00838f !important; }

    .overlay-cyan.overlay-darken-3 {
    background: #00838f;
    /* The Fallback */
    background: rgba(0, 131, 143, 0.8); }

    .cyan.darken-4 {
    color: #006064 !important; }

    .bg-cyan.bg-darken-4 {
    background-color: #006064 !important; }
    .bg-cyan.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 96, 100, 0.6); }

    .btn-cyan.btn-darken-4 {
    border-color: #0097a7 !important;
    background-color: #006064 !important; }
    .btn-cyan.btn-darken-4:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-darken-4:focus, .btn-cyan.btn-darken-4:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-darken-4 {
    border-color: #006064 !important;
    color: #006064 !important; }
    .btn-outline-cyan.btn-outline-darken-4:hover {
        background-color: #006064 !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #006064 !important; }

    .border-cyan.border-darken-4 {
    border: 1px solid #006064 !important; }

    .border-top-cyan.border-top-darken-4 {
    border-top: 1px solid #006064 !important; }

    .border-bottom-cyan.border-bottom-darken-4 {
    border-bottom: 1px solid #006064 !important; }

    .border-left-cyan.border-left-darken-4 {
    border-left: 1px solid #006064 !important; }

    .border-right-cyan.border-right-darken-4 {
    border-right: 1px solid #006064 !important; }

    .overlay-cyan.overlay-darken-4 {
    background: #006064;
    /* The Fallback */
    background: rgba(0, 96, 100, 0.8); }

    .cyan.accent-1 {
    color: #84ffff !important; }

    .bg-cyan.bg-accent-1 {
    background-color: #84ffff !important; }
    .bg-cyan.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(132, 255, 255, 0.6); }

    .btn-cyan.btn-accent-1 {
    border-color: #0097a7 !important;
    background-color: #84ffff !important; }
    .btn-cyan.btn-accent-1:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-accent-1:focus, .btn-cyan.btn-accent-1:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-accent-1 {
    border-color: #84ffff !important;
    color: #84ffff !important; }
    .btn-outline-cyan.btn-outline-accent-1:hover {
        background-color: #84ffff !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #84ffff !important; }

    .border-cyan.border-accent-1 {
    border: 1px solid #84ffff !important; }

    .border-top-cyan.border-top-accent-1 {
    border-top: 1px solid #84ffff !important; }

    .border-bottom-cyan.border-bottom-accent-1 {
    border-bottom: 1px solid #84ffff !important; }

    .border-left-cyan.border-left-accent-1 {
    border-left: 1px solid #84ffff !important; }

    .border-right-cyan.border-right-accent-1 {
    border-right: 1px solid #84ffff !important; }

    .overlay-cyan.overlay-accent-1 {
    background: #84ffff;
    /* The Fallback */
    background: rgba(132, 255, 255, 0.8); }

    .cyan.accent-2 {
    color: #18ffff !important; }

    .bg-cyan.bg-accent-2 {
    background-color: #18ffff !important; }
    .bg-cyan.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(24, 255, 255, 0.6); }

    .btn-cyan.btn-accent-2 {
    border-color: #0097a7 !important;
    background-color: #18ffff !important; }
    .btn-cyan.btn-accent-2:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-accent-2:focus, .btn-cyan.btn-accent-2:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-accent-2 {
    border-color: #18ffff !important;
    color: #18ffff !important; }
    .btn-outline-cyan.btn-outline-accent-2:hover {
        background-color: #18ffff !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #18ffff !important; }

    .border-cyan.border-accent-2 {
    border: 1px solid #18ffff !important; }

    .border-top-cyan.border-top-accent-2 {
    border-top: 1px solid #18ffff !important; }

    .border-bottom-cyan.border-bottom-accent-2 {
    border-bottom: 1px solid #18ffff !important; }

    .border-left-cyan.border-left-accent-2 {
    border-left: 1px solid #18ffff !important; }

    .border-right-cyan.border-right-accent-2 {
    border-right: 1px solid #18ffff !important; }

    .overlay-cyan.overlay-accent-2 {
    background: #18ffff;
    /* The Fallback */
    background: rgba(24, 255, 255, 0.8); }

    .cyan.accent-3 {
    color: #00e5ff !important; }

    .bg-cyan.bg-accent-3 {
    background-color: #00e5ff !important; }
    .bg-cyan.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 229, 255, 0.6); }

    .btn-cyan.btn-accent-3 {
    border-color: #0097a7 !important;
    background-color: #00e5ff !important; }
    .btn-cyan.btn-accent-3:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-accent-3:focus, .btn-cyan.btn-accent-3:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-accent-3 {
    border-color: #00e5ff !important;
    color: #00e5ff !important; }
    .btn-outline-cyan.btn-outline-accent-3:hover {
        background-color: #00e5ff !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00e5ff !important; }

    .border-cyan.border-accent-3 {
    border: 1px solid #00e5ff !important; }

    .border-top-cyan.border-top-accent-3 {
    border-top: 1px solid #00e5ff !important; }

    .border-bottom-cyan.border-bottom-accent-3 {
    border-bottom: 1px solid #00e5ff !important; }

    .border-left-cyan.border-left-accent-3 {
    border-left: 1px solid #00e5ff !important; }

    .border-right-cyan.border-right-accent-3 {
    border-right: 1px solid #00e5ff !important; }

    .overlay-cyan.overlay-accent-3 {
    background: #00e5ff;
    /* The Fallback */
    background: rgba(0, 229, 255, 0.8); }

    .cyan.accent-4 {
    color: #00b8d4 !important; }

    .bg-cyan.bg-accent-4 {
    background-color: #00b8d4 !important; }
    .bg-cyan.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 184, 212, 0.6); }

    .btn-cyan.btn-accent-4 {
    border-color: #0097a7 !important;
    background-color: #00b8d4 !important; }
    .btn-cyan.btn-accent-4:hover {
        border-color: #0097a7 !important;
        background-color: #00838f !important; }
    .btn-cyan.btn-accent-4:focus, .btn-cyan.btn-accent-4:active {
        border-color: #00838f !important;
        background-color: #006064 !important; }

    .btn-outline-cyan.btn-outline-accent-4 {
    border-color: #00b8d4 !important;
    color: #00b8d4 !important; }
    .btn-outline-cyan.btn-outline-accent-4:hover {
        background-color: #00b8d4 !important; }

    input:focus ~ .bg-cyan {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00b8d4 !important; }

    .border-cyan.border-accent-4 {
    border: 1px solid #00b8d4 !important; }

    .border-top-cyan.border-top-accent-4 {
    border-top: 1px solid #00b8d4 !important; }

    .border-bottom-cyan.border-bottom-accent-4 {
    border-bottom: 1px solid #00b8d4 !important; }

    .border-left-cyan.border-left-accent-4 {
    border-left: 1px solid #00b8d4 !important; }

    .border-right-cyan.border-right-accent-4 {
    border-right: 1px solid #00b8d4 !important; }

    .overlay-cyan.overlay-accent-4 {
    background: #00b8d4;
    /* The Fallback */
    background: rgba(0, 184, 212, 0.8); }

    .teal.lighten-5 {
    color: #e0f2f1 !important; }

    .bg-teal.bg-lighten-5 {
    background-color: #e0f2f1 !important; }
    .bg-teal.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(224, 242, 241, 0.6); }

    .btn-teal.btn-lighten-5 {
    border-color: #00796b !important;
    background-color: #e0f2f1 !important; }
    .btn-teal.btn-lighten-5:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-lighten-5:focus, .btn-teal.btn-lighten-5:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-lighten-5 {
    border-color: #e0f2f1 !important;
    color: #e0f2f1 !important; }
    .btn-outline-teal.btn-outline-lighten-5:hover {
        background-color: #e0f2f1 !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #e0f2f1 !important; }

    .border-teal.border-lighten-5 {
    border: 1px solid #e0f2f1 !important; }

    .border-top-teal.border-top-lighten-5 {
    border-top: 1px solid #e0f2f1 !important; }

    .border-bottom-teal.border-bottom-lighten-5 {
    border-bottom: 1px solid #e0f2f1 !important; }

    .border-left-teal.border-left-lighten-5 {
    border-left: 1px solid #e0f2f1 !important; }

    .border-right-teal.border-right-lighten-5 {
    border-right: 1px solid #e0f2f1 !important; }

    .overlay-teal.overlay-lighten-5 {
    background: #e0f2f1;
    /* The Fallback */
    background: rgba(224, 242, 241, 0.8); }

    .teal.lighten-4 {
    color: #b2dfdb !important; }

    .bg-teal.bg-lighten-4 {
    background-color: #b2dfdb !important; }
    .bg-teal.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(178, 223, 219, 0.6); }

    .btn-teal.btn-lighten-4 {
    border-color: #00796b !important;
    background-color: #b2dfdb !important; }
    .btn-teal.btn-lighten-4:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-lighten-4:focus, .btn-teal.btn-lighten-4:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-lighten-4 {
    border-color: #b2dfdb !important;
    color: #b2dfdb !important; }
    .btn-outline-teal.btn-outline-lighten-4:hover {
        background-color: #b2dfdb !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #b2dfdb !important; }

    .border-teal.border-lighten-4 {
    border: 1px solid #b2dfdb !important; }

    .border-top-teal.border-top-lighten-4 {
    border-top: 1px solid #b2dfdb !important; }

    .border-bottom-teal.border-bottom-lighten-4 {
    border-bottom: 1px solid #b2dfdb !important; }

    .border-left-teal.border-left-lighten-4 {
    border-left: 1px solid #b2dfdb !important; }

    .border-right-teal.border-right-lighten-4 {
    border-right: 1px solid #b2dfdb !important; }

    .overlay-teal.overlay-lighten-4 {
    background: #b2dfdb;
    /* The Fallback */
    background: rgba(178, 223, 219, 0.8); }

    .teal.lighten-3 {
    color: #80cbc4 !important; }

    .bg-teal.bg-lighten-3 {
    background-color: #80cbc4 !important; }
    .bg-teal.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(128, 203, 196, 0.6); }

    .btn-teal.btn-lighten-3 {
    border-color: #00796b !important;
    background-color: #80cbc4 !important; }
    .btn-teal.btn-lighten-3:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-lighten-3:focus, .btn-teal.btn-lighten-3:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-lighten-3 {
    border-color: #80cbc4 !important;
    color: #80cbc4 !important; }
    .btn-outline-teal.btn-outline-lighten-3:hover {
        background-color: #80cbc4 !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #80cbc4 !important; }

    .border-teal.border-lighten-3 {
    border: 1px solid #80cbc4 !important; }

    .border-top-teal.border-top-lighten-3 {
    border-top: 1px solid #80cbc4 !important; }

    .border-bottom-teal.border-bottom-lighten-3 {
    border-bottom: 1px solid #80cbc4 !important; }

    .border-left-teal.border-left-lighten-3 {
    border-left: 1px solid #80cbc4 !important; }

    .border-right-teal.border-right-lighten-3 {
    border-right: 1px solid #80cbc4 !important; }

    .overlay-teal.overlay-lighten-3 {
    background: #80cbc4;
    /* The Fallback */
    background: rgba(128, 203, 196, 0.8); }

    .teal.lighten-2 {
    color: #4db6ac !important; }

    .bg-teal.bg-lighten-2 {
    background-color: #4db6ac !important; }
    .bg-teal.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(77, 182, 172, 0.6); }

    .btn-teal.btn-lighten-2 {
    border-color: #00796b !important;
    background-color: #4db6ac !important; }
    .btn-teal.btn-lighten-2:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-lighten-2:focus, .btn-teal.btn-lighten-2:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-lighten-2 {
    border-color: #4db6ac !important;
    color: #4db6ac !important; }
    .btn-outline-teal.btn-outline-lighten-2:hover {
        background-color: #4db6ac !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4db6ac !important; }

    .border-teal.border-lighten-2 {
    border: 1px solid #4db6ac !important; }

    .border-top-teal.border-top-lighten-2 {
    border-top: 1px solid #4db6ac !important; }

    .border-bottom-teal.border-bottom-lighten-2 {
    border-bottom: 1px solid #4db6ac !important; }

    .border-left-teal.border-left-lighten-2 {
    border-left: 1px solid #4db6ac !important; }

    .border-right-teal.border-right-lighten-2 {
    border-right: 1px solid #4db6ac !important; }

    .overlay-teal.overlay-lighten-2 {
    background: #4db6ac;
    /* The Fallback */
    background: rgba(77, 182, 172, 0.8); }

    .teal.lighten-1 {
    color: #26a69a !important; }

    .bg-teal.bg-lighten-1 {
    background-color: #26a69a !important; }
    .bg-teal.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(38, 166, 154, 0.6); }

    .btn-teal.btn-lighten-1 {
    border-color: #00796b !important;
    background-color: #26a69a !important; }
    .btn-teal.btn-lighten-1:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-lighten-1:focus, .btn-teal.btn-lighten-1:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-lighten-1 {
    border-color: #26a69a !important;
    color: #26a69a !important; }
    .btn-outline-teal.btn-outline-lighten-1:hover {
        background-color: #26a69a !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #26a69a !important; }

    .border-teal.border-lighten-1 {
    border: 1px solid #26a69a !important; }

    .border-top-teal.border-top-lighten-1 {
    border-top: 1px solid #26a69a !important; }

    .border-bottom-teal.border-bottom-lighten-1 {
    border-bottom: 1px solid #26a69a !important; }

    .border-left-teal.border-left-lighten-1 {
    border-left: 1px solid #26a69a !important; }

    .border-right-teal.border-right-lighten-1 {
    border-right: 1px solid #26a69a !important; }

    .overlay-teal.overlay-lighten-1 {
    background: #26a69a;
    /* The Fallback */
    background: rgba(38, 166, 154, 0.8); }

    .teal {
    color: #009688 !important; }

    .bg-teal {
    background-color: #009688 !important; }
    .bg-teal .card-header,
    .bg-teal .card-footer {
        background-color: transparent; }
    .bg-teal.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 150, 136, 0.6); }

    .selectboxit.selectboxit-btn.bg-teal {
    background-color: #009688 !important; }

    .alert-teal {
    border-color: #009688 !important;
    background-color: #00ddc9 !important;
    color: black !important; }
    .alert-teal .alert-link {
        color: black !important; }

    .border-teal {
    border-color: #009688; }

    .overlay-teal {
    background: #009688;
    /* The Fallback */
    background: rgba(0, 150, 136, 0.8); }

    .color-info.teal {
    background-color: #009688 !important; }

    .btn-teal {
    border-color: #009688 !important;
    background-color: #009688 !important;
    color: #FFFFFF; }
    .btn-teal:hover {
        border-color: #26a69a !important;
        background-color: #26a69a !important;
        color: #FFF !important; }
    .btn-teal:focus, .btn-teal:active {
        border-color: #00695c !important;
        background-color: #00695c !important;
        color: #FFF !important; }
    .btn-teal.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 150, 136, 0.6); }

    .btn-outline-teal {
    border-color: #009688;
    background-color: transparent;
    color: #009688; }
    .btn-outline-teal:hover {
        background-color: #009688;
        color: #FFF !important; }
    .btn-outline-teal.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 150, 136, 0.6); }

    input[type="checkbox"].bg-teal + .custom-control-label:before, input[type="radio"].bg-teal + .custom-control-label:before {
    background-color: #009688 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #009688 !important; }

    .border-teal {
    border: 1px solid #009688 !important; }

    .border-top-teal {
    border-top: 1px solid #009688; }

    .border-bottom-teal {
    border-bottom: 1px solid #009688; }

    .border-left-teal {
    border-left: 1px solid #009688; }

    .border-right-teal {
    border-right: 1px solid #009688; }

    /* Bullet teal */
    .bullet.bullet-teal {
    background-color: #009688; }

    .teal.darken-1 {
    color: #00897b !important; }

    .bg-teal.bg-darken-1 {
    background-color: #00897b !important; }
    .bg-teal.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 137, 123, 0.6); }

    .btn-teal.btn-darken-1 {
    border-color: #00796b !important;
    background-color: #00897b !important; }
    .btn-teal.btn-darken-1:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-darken-1:focus, .btn-teal.btn-darken-1:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-darken-1 {
    border-color: #00897b !important;
    color: #00897b !important; }
    .btn-outline-teal.btn-outline-darken-1:hover {
        background-color: #00897b !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00897b !important; }

    .border-teal.border-darken-1 {
    border: 1px solid #00897b !important; }

    .border-top-teal.border-top-darken-1 {
    border-top: 1px solid #00897b !important; }

    .border-bottom-teal.border-bottom-darken-1 {
    border-bottom: 1px solid #00897b !important; }

    .border-left-teal.border-left-darken-1 {
    border-left: 1px solid #00897b !important; }

    .border-right-teal.border-right-darken-1 {
    border-right: 1px solid #00897b !important; }

    .overlay-teal.overlay-darken-1 {
    background: #00897b;
    /* The Fallback */
    background: rgba(0, 137, 123, 0.8); }

    .teal.darken-2 {
    color: #00796b !important; }

    .bg-teal.bg-darken-2 {
    background-color: #00796b !important; }
    .bg-teal.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 121, 107, 0.6); }

    .btn-teal.btn-darken-2 {
    border-color: #00796b !important;
    background-color: #00796b !important; }
    .btn-teal.btn-darken-2:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-darken-2:focus, .btn-teal.btn-darken-2:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-darken-2 {
    border-color: #00796b !important;
    color: #00796b !important; }
    .btn-outline-teal.btn-outline-darken-2:hover {
        background-color: #00796b !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00796b !important; }

    .border-teal.border-darken-2 {
    border: 1px solid #00796b !important; }

    .border-top-teal.border-top-darken-2 {
    border-top: 1px solid #00796b !important; }

    .border-bottom-teal.border-bottom-darken-2 {
    border-bottom: 1px solid #00796b !important; }

    .border-left-teal.border-left-darken-2 {
    border-left: 1px solid #00796b !important; }

    .border-right-teal.border-right-darken-2 {
    border-right: 1px solid #00796b !important; }

    .overlay-teal.overlay-darken-2 {
    background: #00796b;
    /* The Fallback */
    background: rgba(0, 121, 107, 0.8); }

    .teal.darken-3 {
    color: #00695c !important; }

    .bg-teal.bg-darken-3 {
    background-color: #00695c !important; }
    .bg-teal.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 105, 92, 0.6); }

    .btn-teal.btn-darken-3 {
    border-color: #00796b !important;
    background-color: #00695c !important; }
    .btn-teal.btn-darken-3:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-darken-3:focus, .btn-teal.btn-darken-3:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-darken-3 {
    border-color: #00695c !important;
    color: #00695c !important; }
    .btn-outline-teal.btn-outline-darken-3:hover {
        background-color: #00695c !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00695c !important; }

    .border-teal.border-darken-3 {
    border: 1px solid #00695c !important; }

    .border-top-teal.border-top-darken-3 {
    border-top: 1px solid #00695c !important; }

    .border-bottom-teal.border-bottom-darken-3 {
    border-bottom: 1px solid #00695c !important; }

    .border-left-teal.border-left-darken-3 {
    border-left: 1px solid #00695c !important; }

    .border-right-teal.border-right-darken-3 {
    border-right: 1px solid #00695c !important; }

    .overlay-teal.overlay-darken-3 {
    background: #00695c;
    /* The Fallback */
    background: rgba(0, 105, 92, 0.8); }

    .teal.darken-4 {
    color: #004d40 !important; }

    .bg-teal.bg-darken-4 {
    background-color: #004d40 !important; }
    .bg-teal.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 77, 64, 0.6); }

    .btn-teal.btn-darken-4 {
    border-color: #00796b !important;
    background-color: #004d40 !important; }
    .btn-teal.btn-darken-4:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-darken-4:focus, .btn-teal.btn-darken-4:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-darken-4 {
    border-color: #004d40 !important;
    color: #004d40 !important; }
    .btn-outline-teal.btn-outline-darken-4:hover {
        background-color: #004d40 !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #004d40 !important; }

    .border-teal.border-darken-4 {
    border: 1px solid #004d40 !important; }

    .border-top-teal.border-top-darken-4 {
    border-top: 1px solid #004d40 !important; }

    .border-bottom-teal.border-bottom-darken-4 {
    border-bottom: 1px solid #004d40 !important; }

    .border-left-teal.border-left-darken-4 {
    border-left: 1px solid #004d40 !important; }

    .border-right-teal.border-right-darken-4 {
    border-right: 1px solid #004d40 !important; }

    .overlay-teal.overlay-darken-4 {
    background: #004d40;
    /* The Fallback */
    background: rgba(0, 77, 64, 0.8); }

    .teal.accent-1 {
    color: #a7ffeb !important; }

    .bg-teal.bg-accent-1 {
    background-color: #a7ffeb !important; }
    .bg-teal.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(167, 255, 235, 0.6); }

    .btn-teal.btn-accent-1 {
    border-color: #00796b !important;
    background-color: #a7ffeb !important; }
    .btn-teal.btn-accent-1:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-accent-1:focus, .btn-teal.btn-accent-1:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-accent-1 {
    border-color: #a7ffeb !important;
    color: #a7ffeb !important; }
    .btn-outline-teal.btn-outline-accent-1:hover {
        background-color: #a7ffeb !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #a7ffeb !important; }

    .border-teal.border-accent-1 {
    border: 1px solid #a7ffeb !important; }

    .border-top-teal.border-top-accent-1 {
    border-top: 1px solid #a7ffeb !important; }

    .border-bottom-teal.border-bottom-accent-1 {
    border-bottom: 1px solid #a7ffeb !important; }

    .border-left-teal.border-left-accent-1 {
    border-left: 1px solid #a7ffeb !important; }

    .border-right-teal.border-right-accent-1 {
    border-right: 1px solid #a7ffeb !important; }

    .overlay-teal.overlay-accent-1 {
    background: #a7ffeb;
    /* The Fallback */
    background: rgba(167, 255, 235, 0.8); }

    .teal.accent-2 {
    color: #64ffda !important; }

    .bg-teal.bg-accent-2 {
    background-color: #64ffda !important; }
    .bg-teal.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(100, 255, 218, 0.6); }

    .btn-teal.btn-accent-2 {
    border-color: #00796b !important;
    background-color: #64ffda !important; }
    .btn-teal.btn-accent-2:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-accent-2:focus, .btn-teal.btn-accent-2:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-accent-2 {
    border-color: #64ffda !important;
    color: #64ffda !important; }
    .btn-outline-teal.btn-outline-accent-2:hover {
        background-color: #64ffda !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #64ffda !important; }

    .border-teal.border-accent-2 {
    border: 1px solid #64ffda !important; }

    .border-top-teal.border-top-accent-2 {
    border-top: 1px solid #64ffda !important; }

    .border-bottom-teal.border-bottom-accent-2 {
    border-bottom: 1px solid #64ffda !important; }

    .border-left-teal.border-left-accent-2 {
    border-left: 1px solid #64ffda !important; }

    .border-right-teal.border-right-accent-2 {
    border-right: 1px solid #64ffda !important; }

    .overlay-teal.overlay-accent-2 {
    background: #64ffda;
    /* The Fallback */
    background: rgba(100, 255, 218, 0.8); }

    .teal.accent-3 {
    color: #1de9b6 !important; }

    .bg-teal.bg-accent-3 {
    background-color: #1de9b6 !important; }
    .bg-teal.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(29, 233, 182, 0.6); }

    .btn-teal.btn-accent-3 {
    border-color: #00796b !important;
    background-color: #1de9b6 !important; }
    .btn-teal.btn-accent-3:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-accent-3:focus, .btn-teal.btn-accent-3:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-accent-3 {
    border-color: #1de9b6 !important;
    color: #1de9b6 !important; }
    .btn-outline-teal.btn-outline-accent-3:hover {
        background-color: #1de9b6 !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1de9b6 !important; }

    .border-teal.border-accent-3 {
    border: 1px solid #1de9b6 !important; }

    .border-top-teal.border-top-accent-3 {
    border-top: 1px solid #1de9b6 !important; }

    .border-bottom-teal.border-bottom-accent-3 {
    border-bottom: 1px solid #1de9b6 !important; }

    .border-left-teal.border-left-accent-3 {
    border-left: 1px solid #1de9b6 !important; }

    .border-right-teal.border-right-accent-3 {
    border-right: 1px solid #1de9b6 !important; }

    .overlay-teal.overlay-accent-3 {
    background: #1de9b6;
    /* The Fallback */
    background: rgba(29, 233, 182, 0.8); }

    .teal.accent-4 {
    color: #00bfa5 !important; }

    .bg-teal.bg-accent-4 {
    background-color: #00bfa5 !important; }
    .bg-teal.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 191, 165, 0.6); }

    .btn-teal.btn-accent-4 {
    border-color: #00796b !important;
    background-color: #00bfa5 !important; }
    .btn-teal.btn-accent-4:hover {
        border-color: #00796b !important;
        background-color: #00695c !important; }
    .btn-teal.btn-accent-4:focus, .btn-teal.btn-accent-4:active {
        border-color: #00695c !important;
        background-color: #004d40 !important; }

    .btn-outline-teal.btn-outline-accent-4 {
    border-color: #00bfa5 !important;
    color: #00bfa5 !important; }
    .btn-outline-teal.btn-outline-accent-4:hover {
        background-color: #00bfa5 !important; }

    input:focus ~ .bg-teal {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00bfa5 !important; }

    .border-teal.border-accent-4 {
    border: 1px solid #00bfa5 !important; }

    .border-top-teal.border-top-accent-4 {
    border-top: 1px solid #00bfa5 !important; }

    .border-bottom-teal.border-bottom-accent-4 {
    border-bottom: 1px solid #00bfa5 !important; }

    .border-left-teal.border-left-accent-4 {
    border-left: 1px solid #00bfa5 !important; }

    .border-right-teal.border-right-accent-4 {
    border-right: 1px solid #00bfa5 !important; }

    .overlay-teal.overlay-accent-4 {
    background: #00bfa5;
    /* The Fallback */
    background: rgba(0, 191, 165, 0.8); }

    .yellow.lighten-5 {
    color: #fffde7 !important; }

    .bg-yellow.bg-lighten-5 {
    background-color: #fffde7 !important; }
    .bg-yellow.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 253, 231, 0.6); }

    .btn-yellow.btn-lighten-5 {
    border-color: #fbc02d !important;
    background-color: #fffde7 !important; }
    .btn-yellow.btn-lighten-5:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-lighten-5:focus, .btn-yellow.btn-lighten-5:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-lighten-5 {
    border-color: #fffde7 !important;
    color: #fffde7 !important; }
    .btn-outline-yellow.btn-outline-lighten-5:hover {
        background-color: #fffde7 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fffde7 !important; }

    .border-yellow.border-lighten-5 {
    border: 1px solid #fffde7 !important; }

    .border-top-yellow.border-top-lighten-5 {
    border-top: 1px solid #fffde7 !important; }

    .border-bottom-yellow.border-bottom-lighten-5 {
    border-bottom: 1px solid #fffde7 !important; }

    .border-left-yellow.border-left-lighten-5 {
    border-left: 1px solid #fffde7 !important; }

    .border-right-yellow.border-right-lighten-5 {
    border-right: 1px solid #fffde7 !important; }

    .overlay-yellow.overlay-lighten-5 {
    background: #fffde7;
    /* The Fallback */
    background: rgba(255, 253, 231, 0.8); }

    .yellow.lighten-4 {
    color: #fff9c4 !important; }

    .bg-yellow.bg-lighten-4 {
    background-color: #fff9c4 !important; }
    .bg-yellow.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 249, 196, 0.6); }

    .btn-yellow.btn-lighten-4 {
    border-color: #fbc02d !important;
    background-color: #fff9c4 !important; }
    .btn-yellow.btn-lighten-4:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-lighten-4:focus, .btn-yellow.btn-lighten-4:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-lighten-4 {
    border-color: #fff9c4 !important;
    color: #fff9c4 !important; }
    .btn-outline-yellow.btn-outline-lighten-4:hover {
        background-color: #fff9c4 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fff9c4 !important; }

    .border-yellow.border-lighten-4 {
    border: 1px solid #fff9c4 !important; }

    .border-top-yellow.border-top-lighten-4 {
    border-top: 1px solid #fff9c4 !important; }

    .border-bottom-yellow.border-bottom-lighten-4 {
    border-bottom: 1px solid #fff9c4 !important; }

    .border-left-yellow.border-left-lighten-4 {
    border-left: 1px solid #fff9c4 !important; }

    .border-right-yellow.border-right-lighten-4 {
    border-right: 1px solid #fff9c4 !important; }

    .overlay-yellow.overlay-lighten-4 {
    background: #fff9c4;
    /* The Fallback */
    background: rgba(255, 249, 196, 0.8); }

    .yellow.lighten-3 {
    color: #fff59d !important; }

    .bg-yellow.bg-lighten-3 {
    background-color: #fff59d !important; }
    .bg-yellow.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 245, 157, 0.6); }

    .btn-yellow.btn-lighten-3 {
    border-color: #fbc02d !important;
    background-color: #fff59d !important; }
    .btn-yellow.btn-lighten-3:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-lighten-3:focus, .btn-yellow.btn-lighten-3:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-lighten-3 {
    border-color: #fff59d !important;
    color: #fff59d !important; }
    .btn-outline-yellow.btn-outline-lighten-3:hover {
        background-color: #fff59d !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fff59d !important; }

    .border-yellow.border-lighten-3 {
    border: 1px solid #fff59d !important; }

    .border-top-yellow.border-top-lighten-3 {
    border-top: 1px solid #fff59d !important; }

    .border-bottom-yellow.border-bottom-lighten-3 {
    border-bottom: 1px solid #fff59d !important; }

    .border-left-yellow.border-left-lighten-3 {
    border-left: 1px solid #fff59d !important; }

    .border-right-yellow.border-right-lighten-3 {
    border-right: 1px solid #fff59d !important; }

    .overlay-yellow.overlay-lighten-3 {
    background: #fff59d;
    /* The Fallback */
    background: rgba(255, 245, 157, 0.8); }

    .yellow.lighten-2 {
    color: #fff176 !important; }

    .bg-yellow.bg-lighten-2 {
    background-color: #fff176 !important; }
    .bg-yellow.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 241, 118, 0.6); }

    .btn-yellow.btn-lighten-2 {
    border-color: #fbc02d !important;
    background-color: #fff176 !important; }
    .btn-yellow.btn-lighten-2:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-lighten-2:focus, .btn-yellow.btn-lighten-2:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-lighten-2 {
    border-color: #fff176 !important;
    color: #fff176 !important; }
    .btn-outline-yellow.btn-outline-lighten-2:hover {
        background-color: #fff176 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fff176 !important; }

    .border-yellow.border-lighten-2 {
    border: 1px solid #fff176 !important; }

    .border-top-yellow.border-top-lighten-2 {
    border-top: 1px solid #fff176 !important; }

    .border-bottom-yellow.border-bottom-lighten-2 {
    border-bottom: 1px solid #fff176 !important; }

    .border-left-yellow.border-left-lighten-2 {
    border-left: 1px solid #fff176 !important; }

    .border-right-yellow.border-right-lighten-2 {
    border-right: 1px solid #fff176 !important; }

    .overlay-yellow.overlay-lighten-2 {
    background: #fff176;
    /* The Fallback */
    background: rgba(255, 241, 118, 0.8); }

    .yellow.lighten-1 {
    color: #ffee58 !important; }

    .bg-yellow.bg-lighten-1 {
    background-color: #ffee58 !important; }
    .bg-yellow.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 238, 88, 0.6); }

    .btn-yellow.btn-lighten-1 {
    border-color: #fbc02d !important;
    background-color: #ffee58 !important; }
    .btn-yellow.btn-lighten-1:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-lighten-1:focus, .btn-yellow.btn-lighten-1:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-lighten-1 {
    border-color: #ffee58 !important;
    color: #ffee58 !important; }
    .btn-outline-yellow.btn-outline-lighten-1:hover {
        background-color: #ffee58 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffee58 !important; }

    .border-yellow.border-lighten-1 {
    border: 1px solid #ffee58 !important; }

    .border-top-yellow.border-top-lighten-1 {
    border-top: 1px solid #ffee58 !important; }

    .border-bottom-yellow.border-bottom-lighten-1 {
    border-bottom: 1px solid #ffee58 !important; }

    .border-left-yellow.border-left-lighten-1 {
    border-left: 1px solid #ffee58 !important; }

    .border-right-yellow.border-right-lighten-1 {
    border-right: 1px solid #ffee58 !important; }

    .overlay-yellow.overlay-lighten-1 {
    background: #ffee58;
    /* The Fallback */
    background: rgba(255, 238, 88, 0.8); }

    .yellow {
    color: #ffeb3b !important; }

    .bg-yellow {
    background-color: #ffeb3b !important; }
    .bg-yellow .card-header,
    .bg-yellow .card-footer {
        background-color: transparent; }
    .bg-yellow.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 235, 59, 0.6); }

    .selectboxit.selectboxit-btn.bg-yellow {
    background-color: #ffeb3b !important; }

    .alert-yellow {
    border-color: #ffeb3b !important;
    background-color: #fff282 !important;
    color: #887a00 !important; }
    .alert-yellow .alert-link {
        color: #5f5500 !important; }

    .border-yellow {
    border-color: #ffeb3b; }

    .overlay-yellow {
    background: #ffeb3b;
    /* The Fallback */
    background: rgba(255, 235, 59, 0.8); }

    .color-info.yellow {
    background-color: #ffeb3b !important; }

    .btn-yellow {
    border-color: #ffeb3b !important;
    background-color: #ffeb3b !important;
    color: #FFFFFF; }
    .btn-yellow:hover {
        border-color: #ffee58 !important;
        background-color: #ffee58 !important;
        color: #FFF !important; }
    .btn-yellow:focus, .btn-yellow:active {
        border-color: #f9a825 !important;
        background-color: #f9a825 !important;
        color: #FFF !important; }
    .btn-yellow.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 235, 59, 0.6); }

    .btn-outline-yellow {
    border-color: #ffeb3b;
    background-color: transparent;
    color: #ffeb3b; }
    .btn-outline-yellow:hover {
        background-color: #ffeb3b;
        color: #FFF !important; }
    .btn-outline-yellow.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 235, 59, 0.6); }

    input[type="checkbox"].bg-yellow + .custom-control-label:before, input[type="radio"].bg-yellow + .custom-control-label:before {
    background-color: #ffeb3b !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffeb3b !important; }

    .border-yellow {
    border: 1px solid #ffeb3b !important; }

    .border-top-yellow {
    border-top: 1px solid #ffeb3b; }

    .border-bottom-yellow {
    border-bottom: 1px solid #ffeb3b; }

    .border-left-yellow {
    border-left: 1px solid #ffeb3b; }

    .border-right-yellow {
    border-right: 1px solid #ffeb3b; }

    /* Bullet yellow */
    .bullet.bullet-yellow {
    background-color: #ffeb3b; }

    .yellow.darken-1 {
    color: #fdd835 !important; }

    .bg-yellow.bg-darken-1 {
    background-color: #fdd835 !important; }
    .bg-yellow.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(253, 216, 53, 0.6); }

    .btn-yellow.btn-darken-1 {
    border-color: #fbc02d !important;
    background-color: #fdd835 !important; }
    .btn-yellow.btn-darken-1:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-darken-1:focus, .btn-yellow.btn-darken-1:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-darken-1 {
    border-color: #fdd835 !important;
    color: #fdd835 !important; }
    .btn-outline-yellow.btn-outline-darken-1:hover {
        background-color: #fdd835 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fdd835 !important; }

    .border-yellow.border-darken-1 {
    border: 1px solid #fdd835 !important; }

    .border-top-yellow.border-top-darken-1 {
    border-top: 1px solid #fdd835 !important; }

    .border-bottom-yellow.border-bottom-darken-1 {
    border-bottom: 1px solid #fdd835 !important; }

    .border-left-yellow.border-left-darken-1 {
    border-left: 1px solid #fdd835 !important; }

    .border-right-yellow.border-right-darken-1 {
    border-right: 1px solid #fdd835 !important; }

    .overlay-yellow.overlay-darken-1 {
    background: #fdd835;
    /* The Fallback */
    background: rgba(253, 216, 53, 0.8); }

    .yellow.darken-2 {
    color: #fbc02d !important; }

    .bg-yellow.bg-darken-2 {
    background-color: #fbc02d !important; }
    .bg-yellow.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(251, 192, 45, 0.6); }

    .btn-yellow.btn-darken-2 {
    border-color: #fbc02d !important;
    background-color: #fbc02d !important; }
    .btn-yellow.btn-darken-2:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-darken-2:focus, .btn-yellow.btn-darken-2:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-darken-2 {
    border-color: #fbc02d !important;
    color: #fbc02d !important; }
    .btn-outline-yellow.btn-outline-darken-2:hover {
        background-color: #fbc02d !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fbc02d !important; }

    .border-yellow.border-darken-2 {
    border: 1px solid #fbc02d !important; }

    .border-top-yellow.border-top-darken-2 {
    border-top: 1px solid #fbc02d !important; }

    .border-bottom-yellow.border-bottom-darken-2 {
    border-bottom: 1px solid #fbc02d !important; }

    .border-left-yellow.border-left-darken-2 {
    border-left: 1px solid #fbc02d !important; }

    .border-right-yellow.border-right-darken-2 {
    border-right: 1px solid #fbc02d !important; }

    .overlay-yellow.overlay-darken-2 {
    background: #fbc02d;
    /* The Fallback */
    background: rgba(251, 192, 45, 0.8); }

    .yellow.darken-3 {
    color: #f9a825 !important; }

    .bg-yellow.bg-darken-3 {
    background-color: #f9a825 !important; }
    .bg-yellow.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(249, 168, 37, 0.6); }

    .btn-yellow.btn-darken-3 {
    border-color: #fbc02d !important;
    background-color: #f9a825 !important; }
    .btn-yellow.btn-darken-3:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-darken-3:focus, .btn-yellow.btn-darken-3:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-darken-3 {
    border-color: #f9a825 !important;
    color: #f9a825 !important; }
    .btn-outline-yellow.btn-outline-darken-3:hover {
        background-color: #f9a825 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f9a825 !important; }

    .border-yellow.border-darken-3 {
    border: 1px solid #f9a825 !important; }

    .border-top-yellow.border-top-darken-3 {
    border-top: 1px solid #f9a825 !important; }

    .border-bottom-yellow.border-bottom-darken-3 {
    border-bottom: 1px solid #f9a825 !important; }

    .border-left-yellow.border-left-darken-3 {
    border-left: 1px solid #f9a825 !important; }

    .border-right-yellow.border-right-darken-3 {
    border-right: 1px solid #f9a825 !important; }

    .overlay-yellow.overlay-darken-3 {
    background: #f9a825;
    /* The Fallback */
    background: rgba(249, 168, 37, 0.8); }

    .yellow.darken-4 {
    color: #f57f17 !important; }

    .bg-yellow.bg-darken-4 {
    background-color: #f57f17 !important; }
    .bg-yellow.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(245, 127, 23, 0.6); }

    .btn-yellow.btn-darken-4 {
    border-color: #fbc02d !important;
    background-color: #f57f17 !important; }
    .btn-yellow.btn-darken-4:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-darken-4:focus, .btn-yellow.btn-darken-4:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-darken-4 {
    border-color: #f57f17 !important;
    color: #f57f17 !important; }
    .btn-outline-yellow.btn-outline-darken-4:hover {
        background-color: #f57f17 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f57f17 !important; }

    .border-yellow.border-darken-4 {
    border: 1px solid #f57f17 !important; }

    .border-top-yellow.border-top-darken-4 {
    border-top: 1px solid #f57f17 !important; }

    .border-bottom-yellow.border-bottom-darken-4 {
    border-bottom: 1px solid #f57f17 !important; }

    .border-left-yellow.border-left-darken-4 {
    border-left: 1px solid #f57f17 !important; }

    .border-right-yellow.border-right-darken-4 {
    border-right: 1px solid #f57f17 !important; }

    .overlay-yellow.overlay-darken-4 {
    background: #f57f17;
    /* The Fallback */
    background: rgba(245, 127, 23, 0.8); }

    .yellow.accent-1 {
    color: #ffff8d !important; }

    .bg-yellow.bg-accent-1 {
    background-color: #ffff8d !important; }
    .bg-yellow.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 141, 0.6); }

    .btn-yellow.btn-accent-1 {
    border-color: #fbc02d !important;
    background-color: #ffff8d !important; }
    .btn-yellow.btn-accent-1:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-accent-1:focus, .btn-yellow.btn-accent-1:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-accent-1 {
    border-color: #ffff8d !important;
    color: #ffff8d !important; }
    .btn-outline-yellow.btn-outline-accent-1:hover {
        background-color: #ffff8d !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffff8d !important; }

    .border-yellow.border-accent-1 {
    border: 1px solid #ffff8d !important; }

    .border-top-yellow.border-top-accent-1 {
    border-top: 1px solid #ffff8d !important; }

    .border-bottom-yellow.border-bottom-accent-1 {
    border-bottom: 1px solid #ffff8d !important; }

    .border-left-yellow.border-left-accent-1 {
    border-left: 1px solid #ffff8d !important; }

    .border-right-yellow.border-right-accent-1 {
    border-right: 1px solid #ffff8d !important; }

    .overlay-yellow.overlay-accent-1 {
    background: #ffff8d;
    /* The Fallback */
    background: rgba(255, 255, 141, 0.8); }

    .yellow.accent-2 {
    color: #ffff00 !important; }

    .bg-yellow.bg-accent-2 {
    background-color: #ffff00 !important; }
    .bg-yellow.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 0, 0.6); }

    .btn-yellow.btn-accent-2 {
    border-color: #fbc02d !important;
    background-color: #ffff00 !important; }
    .btn-yellow.btn-accent-2:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-accent-2:focus, .btn-yellow.btn-accent-2:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-accent-2 {
    border-color: #ffff00 !important;
    color: #ffff00 !important; }
    .btn-outline-yellow.btn-outline-accent-2:hover {
        background-color: #ffff00 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffff00 !important; }

    .border-yellow.border-accent-2 {
    border: 1px solid #ffff00 !important; }

    .border-top-yellow.border-top-accent-2 {
    border-top: 1px solid #ffff00 !important; }

    .border-bottom-yellow.border-bottom-accent-2 {
    border-bottom: 1px solid #ffff00 !important; }

    .border-left-yellow.border-left-accent-2 {
    border-left: 1px solid #ffff00 !important; }

    .border-right-yellow.border-right-accent-2 {
    border-right: 1px solid #ffff00 !important; }

    .overlay-yellow.overlay-accent-2 {
    background: #ffff00;
    /* The Fallback */
    background: rgba(255, 255, 0, 0.8); }

    .yellow.accent-3 {
    color: #ffea00 !important; }

    .bg-yellow.bg-accent-3 {
    background-color: #ffea00 !important; }
    .bg-yellow.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 234, 0, 0.6); }

    .btn-yellow.btn-accent-3 {
    border-color: #fbc02d !important;
    background-color: #ffea00 !important; }
    .btn-yellow.btn-accent-3:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-accent-3:focus, .btn-yellow.btn-accent-3:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-accent-3 {
    border-color: #ffea00 !important;
    color: #ffea00 !important; }
    .btn-outline-yellow.btn-outline-accent-3:hover {
        background-color: #ffea00 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffea00 !important; }

    .border-yellow.border-accent-3 {
    border: 1px solid #ffea00 !important; }

    .border-top-yellow.border-top-accent-3 {
    border-top: 1px solid #ffea00 !important; }

    .border-bottom-yellow.border-bottom-accent-3 {
    border-bottom: 1px solid #ffea00 !important; }

    .border-left-yellow.border-left-accent-3 {
    border-left: 1px solid #ffea00 !important; }

    .border-right-yellow.border-right-accent-3 {
    border-right: 1px solid #ffea00 !important; }

    .overlay-yellow.overlay-accent-3 {
    background: #ffea00;
    /* The Fallback */
    background: rgba(255, 234, 0, 0.8); }

    .yellow.accent-4 {
    color: #ffd600 !important; }

    .bg-yellow.bg-accent-4 {
    background-color: #ffd600 !important; }
    .bg-yellow.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 214, 0, 0.6); }

    .btn-yellow.btn-accent-4 {
    border-color: #fbc02d !important;
    background-color: #ffd600 !important; }
    .btn-yellow.btn-accent-4:hover {
        border-color: #fbc02d !important;
        background-color: #f9a825 !important; }
    .btn-yellow.btn-accent-4:focus, .btn-yellow.btn-accent-4:active {
        border-color: #f9a825 !important;
        background-color: #f57f17 !important; }

    .btn-outline-yellow.btn-outline-accent-4 {
    border-color: #ffd600 !important;
    color: #ffd600 !important; }
    .btn-outline-yellow.btn-outline-accent-4:hover {
        background-color: #ffd600 !important; }

    input:focus ~ .bg-yellow {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffd600 !important; }

    .border-yellow.border-accent-4 {
    border: 1px solid #ffd600 !important; }

    .border-top-yellow.border-top-accent-4 {
    border-top: 1px solid #ffd600 !important; }

    .border-bottom-yellow.border-bottom-accent-4 {
    border-bottom: 1px solid #ffd600 !important; }

    .border-left-yellow.border-left-accent-4 {
    border-left: 1px solid #ffd600 !important; }

    .border-right-yellow.border-right-accent-4 {
    border-right: 1px solid #ffd600 !important; }

    .overlay-yellow.overlay-accent-4 {
    background: #ffd600;
    /* The Fallback */
    background: rgba(255, 214, 0, 0.8); }

    .amber.lighten-5 {
    color: #fff8e1 !important; }

    .bg-amber.bg-lighten-5 {
    background-color: #fff8e1 !important; }
    .bg-amber.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 248, 225, 0.6); }

    .btn-amber.btn-lighten-5 {
    border-color: #ffa000 !important;
    background-color: #fff8e1 !important; }
    .btn-amber.btn-lighten-5:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-lighten-5:focus, .btn-amber.btn-lighten-5:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-lighten-5 {
    border-color: #fff8e1 !important;
    color: #fff8e1 !important; }
    .btn-outline-amber.btn-outline-lighten-5:hover {
        background-color: #fff8e1 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fff8e1 !important; }

    .border-amber.border-lighten-5 {
    border: 1px solid #fff8e1 !important; }

    .border-top-amber.border-top-lighten-5 {
    border-top: 1px solid #fff8e1 !important; }

    .border-bottom-amber.border-bottom-lighten-5 {
    border-bottom: 1px solid #fff8e1 !important; }

    .border-left-amber.border-left-lighten-5 {
    border-left: 1px solid #fff8e1 !important; }

    .border-right-amber.border-right-lighten-5 {
    border-right: 1px solid #fff8e1 !important; }

    .overlay-amber.overlay-lighten-5 {
    background: #fff8e1;
    /* The Fallback */
    background: rgba(255, 248, 225, 0.8); }

    .amber.lighten-4 {
    color: #ffecb3 !important; }

    .bg-amber.bg-lighten-4 {
    background-color: #ffecb3 !important; }
    .bg-amber.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 236, 179, 0.6); }

    .btn-amber.btn-lighten-4 {
    border-color: #ffa000 !important;
    background-color: #ffecb3 !important; }
    .btn-amber.btn-lighten-4:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-lighten-4:focus, .btn-amber.btn-lighten-4:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-lighten-4 {
    border-color: #ffecb3 !important;
    color: #ffecb3 !important; }
    .btn-outline-amber.btn-outline-lighten-4:hover {
        background-color: #ffecb3 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffecb3 !important; }

    .border-amber.border-lighten-4 {
    border: 1px solid #ffecb3 !important; }

    .border-top-amber.border-top-lighten-4 {
    border-top: 1px solid #ffecb3 !important; }

    .border-bottom-amber.border-bottom-lighten-4 {
    border-bottom: 1px solid #ffecb3 !important; }

    .border-left-amber.border-left-lighten-4 {
    border-left: 1px solid #ffecb3 !important; }

    .border-right-amber.border-right-lighten-4 {
    border-right: 1px solid #ffecb3 !important; }

    .overlay-amber.overlay-lighten-4 {
    background: #ffecb3;
    /* The Fallback */
    background: rgba(255, 236, 179, 0.8); }

    .amber.lighten-3 {
    color: #ffe082 !important; }

    .bg-amber.bg-lighten-3 {
    background-color: #ffe082 !important; }
    .bg-amber.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 224, 130, 0.6); }

    .btn-amber.btn-lighten-3 {
    border-color: #ffa000 !important;
    background-color: #ffe082 !important; }
    .btn-amber.btn-lighten-3:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-lighten-3:focus, .btn-amber.btn-lighten-3:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-lighten-3 {
    border-color: #ffe082 !important;
    color: #ffe082 !important; }
    .btn-outline-amber.btn-outline-lighten-3:hover {
        background-color: #ffe082 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffe082 !important; }

    .border-amber.border-lighten-3 {
    border: 1px solid #ffe082 !important; }

    .border-top-amber.border-top-lighten-3 {
    border-top: 1px solid #ffe082 !important; }

    .border-bottom-amber.border-bottom-lighten-3 {
    border-bottom: 1px solid #ffe082 !important; }

    .border-left-amber.border-left-lighten-3 {
    border-left: 1px solid #ffe082 !important; }

    .border-right-amber.border-right-lighten-3 {
    border-right: 1px solid #ffe082 !important; }

    .overlay-amber.overlay-lighten-3 {
    background: #ffe082;
    /* The Fallback */
    background: rgba(255, 224, 130, 0.8); }

    .amber.lighten-2 {
    color: #ffd54f !important; }

    .bg-amber.bg-lighten-2 {
    background-color: #ffd54f !important; }
    .bg-amber.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 213, 79, 0.6); }

    .btn-amber.btn-lighten-2 {
    border-color: #ffa000 !important;
    background-color: #ffd54f !important; }
    .btn-amber.btn-lighten-2:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-lighten-2:focus, .btn-amber.btn-lighten-2:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-lighten-2 {
    border-color: #ffd54f !important;
    color: #ffd54f !important; }
    .btn-outline-amber.btn-outline-lighten-2:hover {
        background-color: #ffd54f !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffd54f !important; }

    .border-amber.border-lighten-2 {
    border: 1px solid #ffd54f !important; }

    .border-top-amber.border-top-lighten-2 {
    border-top: 1px solid #ffd54f !important; }

    .border-bottom-amber.border-bottom-lighten-2 {
    border-bottom: 1px solid #ffd54f !important; }

    .border-left-amber.border-left-lighten-2 {
    border-left: 1px solid #ffd54f !important; }

    .border-right-amber.border-right-lighten-2 {
    border-right: 1px solid #ffd54f !important; }

    .overlay-amber.overlay-lighten-2 {
    background: #ffd54f;
    /* The Fallback */
    background: rgba(255, 213, 79, 0.8); }

    .amber.lighten-1 {
    color: #ffca28 !important; }

    .bg-amber.bg-lighten-1 {
    background-color: #ffca28 !important; }
    .bg-amber.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 202, 40, 0.6); }

    .btn-amber.btn-lighten-1 {
    border-color: #ffa000 !important;
    background-color: #ffca28 !important; }
    .btn-amber.btn-lighten-1:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-lighten-1:focus, .btn-amber.btn-lighten-1:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-lighten-1 {
    border-color: #ffca28 !important;
    color: #ffca28 !important; }
    .btn-outline-amber.btn-outline-lighten-1:hover {
        background-color: #ffca28 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffca28 !important; }

    .border-amber.border-lighten-1 {
    border: 1px solid #ffca28 !important; }

    .border-top-amber.border-top-lighten-1 {
    border-top: 1px solid #ffca28 !important; }

    .border-bottom-amber.border-bottom-lighten-1 {
    border-bottom: 1px solid #ffca28 !important; }

    .border-left-amber.border-left-lighten-1 {
    border-left: 1px solid #ffca28 !important; }

    .border-right-amber.border-right-lighten-1 {
    border-right: 1px solid #ffca28 !important; }

    .overlay-amber.overlay-lighten-1 {
    background: #ffca28;
    /* The Fallback */
    background: rgba(255, 202, 40, 0.8); }

    .amber {
    color: #ffc107 !important; }

    .bg-amber {
    background-color: #ffc107 !important; }
    .bg-amber .card-header,
    .bg-amber .card-footer {
        background-color: transparent; }
    .bg-amber.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 193, 7, 0.6); }

    .selectboxit.selectboxit-btn.bg-amber {
    background-color: #ffc107 !important; }

    .alert-amber {
    border-color: #ffc107 !important;
    background-color: #ffd34e !important;
    color: #543f00 !important; }
    .alert-amber .alert-link {
        color: #2b2000 !important; }

    .border-amber {
    border-color: #ffc107; }

    .overlay-amber {
    background: #ffc107;
    /* The Fallback */
    background: rgba(255, 193, 7, 0.8); }

    .color-info.amber {
    background-color: #ffc107 !important; }

    .btn-amber {
    border-color: #ffc107 !important;
    background-color: #ffc107 !important;
    color: #FFFFFF; }
    .btn-amber:hover {
        border-color: #ffca28 !important;
        background-color: #ffca28 !important;
        color: #FFF !important; }
    .btn-amber:focus, .btn-amber:active {
        border-color: #ff8f00 !important;
        background-color: #ff8f00 !important;
        color: #FFF !important; }
    .btn-amber.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 193, 7, 0.6); }

    .btn-outline-amber {
    border-color: #ffc107;
    background-color: transparent;
    color: #ffc107; }
    .btn-outline-amber:hover {
        background-color: #ffc107;
        color: #FFF !important; }
    .btn-outline-amber.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 193, 7, 0.6); }

    input[type="checkbox"].bg-amber + .custom-control-label:before, input[type="radio"].bg-amber + .custom-control-label:before {
    background-color: #ffc107 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffc107 !important; }

    .border-amber {
    border: 1px solid #ffc107 !important; }

    .border-top-amber {
    border-top: 1px solid #ffc107; }

    .border-bottom-amber {
    border-bottom: 1px solid #ffc107; }

    .border-left-amber {
    border-left: 1px solid #ffc107; }

    .border-right-amber {
    border-right: 1px solid #ffc107; }

    /* Bullet amber */
    .bullet.bullet-amber {
    background-color: #ffc107; }

    .amber.darken-1 {
    color: #ffb300 !important; }

    .bg-amber.bg-darken-1 {
    background-color: #ffb300 !important; }
    .bg-amber.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 179, 0, 0.6); }

    .btn-amber.btn-darken-1 {
    border-color: #ffa000 !important;
    background-color: #ffb300 !important; }
    .btn-amber.btn-darken-1:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-darken-1:focus, .btn-amber.btn-darken-1:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-darken-1 {
    border-color: #ffb300 !important;
    color: #ffb300 !important; }
    .btn-outline-amber.btn-outline-darken-1:hover {
        background-color: #ffb300 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffb300 !important; }

    .border-amber.border-darken-1 {
    border: 1px solid #ffb300 !important; }

    .border-top-amber.border-top-darken-1 {
    border-top: 1px solid #ffb300 !important; }

    .border-bottom-amber.border-bottom-darken-1 {
    border-bottom: 1px solid #ffb300 !important; }

    .border-left-amber.border-left-darken-1 {
    border-left: 1px solid #ffb300 !important; }

    .border-right-amber.border-right-darken-1 {
    border-right: 1px solid #ffb300 !important; }

    .overlay-amber.overlay-darken-1 {
    background: #ffb300;
    /* The Fallback */
    background: rgba(255, 179, 0, 0.8); }

    .amber.darken-2 {
    color: #ffa000 !important; }

    .bg-amber.bg-darken-2 {
    background-color: #ffa000 !important; }
    .bg-amber.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 160, 0, 0.6); }

    .btn-amber.btn-darken-2 {
    border-color: #ffa000 !important;
    background-color: #ffa000 !important; }
    .btn-amber.btn-darken-2:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-darken-2:focus, .btn-amber.btn-darken-2:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-darken-2 {
    border-color: #ffa000 !important;
    color: #ffa000 !important; }
    .btn-outline-amber.btn-outline-darken-2:hover {
        background-color: #ffa000 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffa000 !important; }

    .border-amber.border-darken-2 {
    border: 1px solid #ffa000 !important; }

    .border-top-amber.border-top-darken-2 {
    border-top: 1px solid #ffa000 !important; }

    .border-bottom-amber.border-bottom-darken-2 {
    border-bottom: 1px solid #ffa000 !important; }

    .border-left-amber.border-left-darken-2 {
    border-left: 1px solid #ffa000 !important; }

    .border-right-amber.border-right-darken-2 {
    border-right: 1px solid #ffa000 !important; }

    .overlay-amber.overlay-darken-2 {
    background: #ffa000;
    /* The Fallback */
    background: rgba(255, 160, 0, 0.8); }

    .amber.darken-3 {
    color: #ff8f00 !important; }

    .bg-amber.bg-darken-3 {
    background-color: #ff8f00 !important; }
    .bg-amber.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 143, 0, 0.6); }

    .btn-amber.btn-darken-3 {
    border-color: #ffa000 !important;
    background-color: #ff8f00 !important; }
    .btn-amber.btn-darken-3:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-darken-3:focus, .btn-amber.btn-darken-3:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-darken-3 {
    border-color: #ff8f00 !important;
    color: #ff8f00 !important; }
    .btn-outline-amber.btn-outline-darken-3:hover {
        background-color: #ff8f00 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff8f00 !important; }

    .border-amber.border-darken-3 {
    border: 1px solid #ff8f00 !important; }

    .border-top-amber.border-top-darken-3 {
    border-top: 1px solid #ff8f00 !important; }

    .border-bottom-amber.border-bottom-darken-3 {
    border-bottom: 1px solid #ff8f00 !important; }

    .border-left-amber.border-left-darken-3 {
    border-left: 1px solid #ff8f00 !important; }

    .border-right-amber.border-right-darken-3 {
    border-right: 1px solid #ff8f00 !important; }

    .overlay-amber.overlay-darken-3 {
    background: #ff8f00;
    /* The Fallback */
    background: rgba(255, 143, 0, 0.8); }

    .amber.darken-4 {
    color: #ff6f00 !important; }

    .bg-amber.bg-darken-4 {
    background-color: #ff6f00 !important; }
    .bg-amber.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 111, 0, 0.6); }

    .btn-amber.btn-darken-4 {
    border-color: #ffa000 !important;
    background-color: #ff6f00 !important; }
    .btn-amber.btn-darken-4:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-darken-4:focus, .btn-amber.btn-darken-4:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-darken-4 {
    border-color: #ff6f00 !important;
    color: #ff6f00 !important; }
    .btn-outline-amber.btn-outline-darken-4:hover {
        background-color: #ff6f00 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff6f00 !important; }

    .border-amber.border-darken-4 {
    border: 1px solid #ff6f00 !important; }

    .border-top-amber.border-top-darken-4 {
    border-top: 1px solid #ff6f00 !important; }

    .border-bottom-amber.border-bottom-darken-4 {
    border-bottom: 1px solid #ff6f00 !important; }

    .border-left-amber.border-left-darken-4 {
    border-left: 1px solid #ff6f00 !important; }

    .border-right-amber.border-right-darken-4 {
    border-right: 1px solid #ff6f00 !important; }

    .overlay-amber.overlay-darken-4 {
    background: #ff6f00;
    /* The Fallback */
    background: rgba(255, 111, 0, 0.8); }

    .amber.accent-1 {
    color: #ffe57f !important; }

    .bg-amber.bg-accent-1 {
    background-color: #ffe57f !important; }
    .bg-amber.bg-accent-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 229, 127, 0.6); }

    .btn-amber.btn-accent-1 {
    border-color: #ffa000 !important;
    background-color: #ffe57f !important; }
    .btn-amber.btn-accent-1:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-accent-1:focus, .btn-amber.btn-accent-1:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-accent-1 {
    border-color: #ffe57f !important;
    color: #ffe57f !important; }
    .btn-outline-amber.btn-outline-accent-1:hover {
        background-color: #ffe57f !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffe57f !important; }

    .border-amber.border-accent-1 {
    border: 1px solid #ffe57f !important; }

    .border-top-amber.border-top-accent-1 {
    border-top: 1px solid #ffe57f !important; }

    .border-bottom-amber.border-bottom-accent-1 {
    border-bottom: 1px solid #ffe57f !important; }

    .border-left-amber.border-left-accent-1 {
    border-left: 1px solid #ffe57f !important; }

    .border-right-amber.border-right-accent-1 {
    border-right: 1px solid #ffe57f !important; }

    .overlay-amber.overlay-accent-1 {
    background: #ffe57f;
    /* The Fallback */
    background: rgba(255, 229, 127, 0.8); }

    .amber.accent-2 {
    color: #ffd740 !important; }

    .bg-amber.bg-accent-2 {
    background-color: #ffd740 !important; }
    .bg-amber.bg-accent-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 215, 64, 0.6); }

    .btn-amber.btn-accent-2 {
    border-color: #ffa000 !important;
    background-color: #ffd740 !important; }
    .btn-amber.btn-accent-2:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-accent-2:focus, .btn-amber.btn-accent-2:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-accent-2 {
    border-color: #ffd740 !important;
    color: #ffd740 !important; }
    .btn-outline-amber.btn-outline-accent-2:hover {
        background-color: #ffd740 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffd740 !important; }

    .border-amber.border-accent-2 {
    border: 1px solid #ffd740 !important; }

    .border-top-amber.border-top-accent-2 {
    border-top: 1px solid #ffd740 !important; }

    .border-bottom-amber.border-bottom-accent-2 {
    border-bottom: 1px solid #ffd740 !important; }

    .border-left-amber.border-left-accent-2 {
    border-left: 1px solid #ffd740 !important; }

    .border-right-amber.border-right-accent-2 {
    border-right: 1px solid #ffd740 !important; }

    .overlay-amber.overlay-accent-2 {
    background: #ffd740;
    /* The Fallback */
    background: rgba(255, 215, 64, 0.8); }

    .amber.accent-3 {
    color: #ffc400 !important; }

    .bg-amber.bg-accent-3 {
    background-color: #ffc400 !important; }
    .bg-amber.bg-accent-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 196, 0, 0.6); }

    .btn-amber.btn-accent-3 {
    border-color: #ffa000 !important;
    background-color: #ffc400 !important; }
    .btn-amber.btn-accent-3:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-accent-3:focus, .btn-amber.btn-accent-3:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-accent-3 {
    border-color: #ffc400 !important;
    color: #ffc400 !important; }
    .btn-outline-amber.btn-outline-accent-3:hover {
        background-color: #ffc400 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffc400 !important; }

    .border-amber.border-accent-3 {
    border: 1px solid #ffc400 !important; }

    .border-top-amber.border-top-accent-3 {
    border-top: 1px solid #ffc400 !important; }

    .border-bottom-amber.border-bottom-accent-3 {
    border-bottom: 1px solid #ffc400 !important; }

    .border-left-amber.border-left-accent-3 {
    border-left: 1px solid #ffc400 !important; }

    .border-right-amber.border-right-accent-3 {
    border-right: 1px solid #ffc400 !important; }

    .overlay-amber.overlay-accent-3 {
    background: #ffc400;
    /* The Fallback */
    background: rgba(255, 196, 0, 0.8); }

    .amber.accent-4 {
    color: #ffab00 !important; }

    .bg-amber.bg-accent-4 {
    background-color: #ffab00 !important; }
    .bg-amber.bg-accent-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 171, 0, 0.6); }

    .btn-amber.btn-accent-4 {
    border-color: #ffa000 !important;
    background-color: #ffab00 !important; }
    .btn-amber.btn-accent-4:hover {
        border-color: #ffa000 !important;
        background-color: #ff8f00 !important; }
    .btn-amber.btn-accent-4:focus, .btn-amber.btn-accent-4:active {
        border-color: #ff8f00 !important;
        background-color: #ff6f00 !important; }

    .btn-outline-amber.btn-outline-accent-4 {
    border-color: #ffab00 !important;
    color: #ffab00 !important; }
    .btn-outline-amber.btn-outline-accent-4:hover {
        background-color: #ffab00 !important; }

    input:focus ~ .bg-amber {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffab00 !important; }

    .border-amber.border-accent-4 {
    border: 1px solid #ffab00 !important; }

    .border-top-amber.border-top-accent-4 {
    border-top: 1px solid #ffab00 !important; }

    .border-bottom-amber.border-bottom-accent-4 {
    border-bottom: 1px solid #ffab00 !important; }

    .border-left-amber.border-left-accent-4 {
    border-left: 1px solid #ffab00 !important; }

    .border-right-amber.border-right-accent-4 {
    border-right: 1px solid #ffab00 !important; }

    .overlay-amber.overlay-accent-4 {
    background: #ffab00;
    /* The Fallback */
    background: rgba(255, 171, 0, 0.8); }

    .blue-grey.lighten-5 {
    color: #eceff1 !important; }

    .bg-blue-grey.bg-lighten-5 {
    background-color: #eceff1 !important; }
    .bg-blue-grey.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(236, 239, 241, 0.6); }

    .btn-blue-grey.btn-lighten-5 {
    border-color: #455a64 !important;
    background-color: #eceff1 !important; }
    .btn-blue-grey.btn-lighten-5:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-lighten-5:focus, .btn-blue-grey.btn-lighten-5:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-lighten-5 {
    border-color: #eceff1 !important;
    color: #eceff1 !important; }
    .btn-outline-blue-grey.btn-outline-lighten-5:hover {
        background-color: #eceff1 !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #eceff1 !important; }

    .border-blue-grey.border-lighten-5 {
    border: 1px solid #eceff1 !important; }

    .border-top-blue-grey.border-top-lighten-5 {
    border-top: 1px solid #eceff1 !important; }

    .border-bottom-blue-grey.border-bottom-lighten-5 {
    border-bottom: 1px solid #eceff1 !important; }

    .border-left-blue-grey.border-left-lighten-5 {
    border-left: 1px solid #eceff1 !important; }

    .border-right-blue-grey.border-right-lighten-5 {
    border-right: 1px solid #eceff1 !important; }

    .overlay-blue-grey.overlay-lighten-5 {
    background: #eceff1;
    /* The Fallback */
    background: rgba(236, 239, 241, 0.8); }

    .blue-grey.lighten-4 {
    color: #cfd8dc !important; }

    .bg-blue-grey.bg-lighten-4 {
    background-color: #cfd8dc !important; }
    .bg-blue-grey.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(207, 216, 220, 0.6); }

    .btn-blue-grey.btn-lighten-4 {
    border-color: #455a64 !important;
    background-color: #cfd8dc !important; }
    .btn-blue-grey.btn-lighten-4:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-lighten-4:focus, .btn-blue-grey.btn-lighten-4:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-lighten-4 {
    border-color: #cfd8dc !important;
    color: #cfd8dc !important; }
    .btn-outline-blue-grey.btn-outline-lighten-4:hover {
        background-color: #cfd8dc !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #cfd8dc !important; }

    .border-blue-grey.border-lighten-4 {
    border: 1px solid #cfd8dc !important; }

    .border-top-blue-grey.border-top-lighten-4 {
    border-top: 1px solid #cfd8dc !important; }

    .border-bottom-blue-grey.border-bottom-lighten-4 {
    border-bottom: 1px solid #cfd8dc !important; }

    .border-left-blue-grey.border-left-lighten-4 {
    border-left: 1px solid #cfd8dc !important; }

    .border-right-blue-grey.border-right-lighten-4 {
    border-right: 1px solid #cfd8dc !important; }

    .overlay-blue-grey.overlay-lighten-4 {
    background: #cfd8dc;
    /* The Fallback */
    background: rgba(207, 216, 220, 0.8); }

    .blue-grey.lighten-3 {
    color: #b0bec5 !important; }

    .bg-blue-grey.bg-lighten-3 {
    background-color: #b0bec5 !important; }
    .bg-blue-grey.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(176, 190, 197, 0.6); }

    .btn-blue-grey.btn-lighten-3 {
    border-color: #455a64 !important;
    background-color: #b0bec5 !important; }
    .btn-blue-grey.btn-lighten-3:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-lighten-3:focus, .btn-blue-grey.btn-lighten-3:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-lighten-3 {
    border-color: #b0bec5 !important;
    color: #b0bec5 !important; }
    .btn-outline-blue-grey.btn-outline-lighten-3:hover {
        background-color: #b0bec5 !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #b0bec5 !important; }

    .border-blue-grey.border-lighten-3 {
    border: 1px solid #b0bec5 !important; }

    .border-top-blue-grey.border-top-lighten-3 {
    border-top: 1px solid #b0bec5 !important; }

    .border-bottom-blue-grey.border-bottom-lighten-3 {
    border-bottom: 1px solid #b0bec5 !important; }

    .border-left-blue-grey.border-left-lighten-3 {
    border-left: 1px solid #b0bec5 !important; }

    .border-right-blue-grey.border-right-lighten-3 {
    border-right: 1px solid #b0bec5 !important; }

    .overlay-blue-grey.overlay-lighten-3 {
    background: #b0bec5;
    /* The Fallback */
    background: rgba(176, 190, 197, 0.8); }

    .blue-grey.lighten-2 {
    color: #90a4ae !important; }

    .bg-blue-grey.bg-lighten-2 {
    background-color: #90a4ae !important; }
    .bg-blue-grey.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(144, 164, 174, 0.6); }

    .btn-blue-grey.btn-lighten-2 {
    border-color: #455a64 !important;
    background-color: #90a4ae !important; }
    .btn-blue-grey.btn-lighten-2:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-lighten-2:focus, .btn-blue-grey.btn-lighten-2:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-lighten-2 {
    border-color: #90a4ae !important;
    color: #90a4ae !important; }
    .btn-outline-blue-grey.btn-outline-lighten-2:hover {
        background-color: #90a4ae !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #90a4ae !important; }

    .border-blue-grey.border-lighten-2 {
    border: 1px solid #90a4ae !important; }

    .border-top-blue-grey.border-top-lighten-2 {
    border-top: 1px solid #90a4ae !important; }

    .border-bottom-blue-grey.border-bottom-lighten-2 {
    border-bottom: 1px solid #90a4ae !important; }

    .border-left-blue-grey.border-left-lighten-2 {
    border-left: 1px solid #90a4ae !important; }

    .border-right-blue-grey.border-right-lighten-2 {
    border-right: 1px solid #90a4ae !important; }

    .overlay-blue-grey.overlay-lighten-2 {
    background: #90a4ae;
    /* The Fallback */
    background: rgba(144, 164, 174, 0.8); }

    .blue-grey.lighten-1 {
    color: #78909c !important; }

    .bg-blue-grey.bg-lighten-1 {
    background-color: #78909c !important; }
    .bg-blue-grey.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(120, 144, 156, 0.6); }

    .btn-blue-grey.btn-lighten-1 {
    border-color: #455a64 !important;
    background-color: #78909c !important; }
    .btn-blue-grey.btn-lighten-1:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-lighten-1:focus, .btn-blue-grey.btn-lighten-1:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-lighten-1 {
    border-color: #78909c !important;
    color: #78909c !important; }
    .btn-outline-blue-grey.btn-outline-lighten-1:hover {
        background-color: #78909c !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #78909c !important; }

    .border-blue-grey.border-lighten-1 {
    border: 1px solid #78909c !important; }

    .border-top-blue-grey.border-top-lighten-1 {
    border-top: 1px solid #78909c !important; }

    .border-bottom-blue-grey.border-bottom-lighten-1 {
    border-bottom: 1px solid #78909c !important; }

    .border-left-blue-grey.border-left-lighten-1 {
    border-left: 1px solid #78909c !important; }

    .border-right-blue-grey.border-right-lighten-1 {
    border-right: 1px solid #78909c !important; }

    .overlay-blue-grey.overlay-lighten-1 {
    background: #78909c;
    /* The Fallback */
    background: rgba(120, 144, 156, 0.8); }

    .blue-grey {
    color: #607d8b !important; }

    .bg-blue-grey {
    background-color: #607d8b !important; }
    .bg-blue-grey .card-header,
    .bg-blue-grey .card-footer {
        background-color: transparent; }
    .bg-blue-grey.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(96, 125, 139, 0.6); }

    .selectboxit.selectboxit-btn.bg-blue-grey {
    background-color: #607d8b !important; }

    .alert-blue-grey {
    border-color: #607d8b !important;
    background-color: #87a0ac !important;
    color: #171e21 !important; }
    .alert-blue-grey .alert-link {
        color: #060809 !important; }

    .border-blue-grey {
    border-color: #607d8b; }

    .overlay-blue-grey {
    background: #607d8b;
    /* The Fallback */
    background: rgba(96, 125, 139, 0.8); }

    .color-info.blue-grey {
    background-color: #607d8b !important; }

    .btn-blue-grey {
    border-color: #607d8b !important;
    background-color: #607d8b !important;
    color: #FFFFFF; }
    .btn-blue-grey:hover {
        border-color: #78909c !important;
        background-color: #78909c !important;
        color: #FFF !important; }
    .btn-blue-grey:focus, .btn-blue-grey:active {
        border-color: #37474f !important;
        background-color: #37474f !important;
        color: #FFF !important; }
    .btn-blue-grey.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(96, 125, 139, 0.6); }

    .btn-outline-blue-grey {
    border-color: #607d8b;
    background-color: transparent;
    color: #607d8b; }
    .btn-outline-blue-grey:hover {
        background-color: #607d8b;
        color: #FFF !important; }
    .btn-outline-blue-grey.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(96, 125, 139, 0.6); }

    input[type="checkbox"].bg-blue-grey + .custom-control-label:before, input[type="radio"].bg-blue-grey + .custom-control-label:before {
    background-color: #607d8b !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #607d8b !important; }

    .border-blue-grey {
    border: 1px solid #607d8b !important; }

    .border-top-blue-grey {
    border-top: 1px solid #607d8b; }

    .border-bottom-blue-grey {
    border-bottom: 1px solid #607d8b; }

    .border-left-blue-grey {
    border-left: 1px solid #607d8b; }

    .border-right-blue-grey {
    border-right: 1px solid #607d8b; }

    /* Bullet blue-grey */
    .bullet.bullet-blue-grey {
    background-color: #607d8b; }

    .blue-grey.darken-1 {
    color: #546e7a !important; }

    .bg-blue-grey.bg-darken-1 {
    background-color: #546e7a !important; }
    .bg-blue-grey.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(84, 110, 122, 0.6); }

    .btn-blue-grey.btn-darken-1 {
    border-color: #455a64 !important;
    background-color: #546e7a !important; }
    .btn-blue-grey.btn-darken-1:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-darken-1:focus, .btn-blue-grey.btn-darken-1:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-darken-1 {
    border-color: #546e7a !important;
    color: #546e7a !important; }
    .btn-outline-blue-grey.btn-outline-darken-1:hover {
        background-color: #546e7a !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #546e7a !important; }

    .border-blue-grey.border-darken-1 {
    border: 1px solid #546e7a !important; }

    .border-top-blue-grey.border-top-darken-1 {
    border-top: 1px solid #546e7a !important; }

    .border-bottom-blue-grey.border-bottom-darken-1 {
    border-bottom: 1px solid #546e7a !important; }

    .border-left-blue-grey.border-left-darken-1 {
    border-left: 1px solid #546e7a !important; }

    .border-right-blue-grey.border-right-darken-1 {
    border-right: 1px solid #546e7a !important; }

    .overlay-blue-grey.overlay-darken-1 {
    background: #546e7a;
    /* The Fallback */
    background: rgba(84, 110, 122, 0.8); }

    .blue-grey.darken-2 {
    color: #455a64 !important; }

    .bg-blue-grey.bg-darken-2 {
    background-color: #455a64 !important; }
    .bg-blue-grey.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(69, 90, 100, 0.6); }

    .btn-blue-grey.btn-darken-2 {
    border-color: #455a64 !important;
    background-color: #455a64 !important; }
    .btn-blue-grey.btn-darken-2:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-darken-2:focus, .btn-blue-grey.btn-darken-2:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-darken-2 {
    border-color: #455a64 !important;
    color: #455a64 !important; }
    .btn-outline-blue-grey.btn-outline-darken-2:hover {
        background-color: #455a64 !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #455a64 !important; }

    .border-blue-grey.border-darken-2 {
    border: 1px solid #455a64 !important; }

    .border-top-blue-grey.border-top-darken-2 {
    border-top: 1px solid #455a64 !important; }

    .border-bottom-blue-grey.border-bottom-darken-2 {
    border-bottom: 1px solid #455a64 !important; }

    .border-left-blue-grey.border-left-darken-2 {
    border-left: 1px solid #455a64 !important; }

    .border-right-blue-grey.border-right-darken-2 {
    border-right: 1px solid #455a64 !important; }

    .overlay-blue-grey.overlay-darken-2 {
    background: #455a64;
    /* The Fallback */
    background: rgba(69, 90, 100, 0.8); }

    .blue-grey.darken-3 {
    color: #37474f !important; }

    .bg-blue-grey.bg-darken-3 {
    background-color: #37474f !important; }
    .bg-blue-grey.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(55, 71, 79, 0.6); }

    .btn-blue-grey.btn-darken-3 {
    border-color: #455a64 !important;
    background-color: #37474f !important; }
    .btn-blue-grey.btn-darken-3:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-darken-3:focus, .btn-blue-grey.btn-darken-3:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-darken-3 {
    border-color: #37474f !important;
    color: #37474f !important; }
    .btn-outline-blue-grey.btn-outline-darken-3:hover {
        background-color: #37474f !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #37474f !important; }

    .border-blue-grey.border-darken-3 {
    border: 1px solid #37474f !important; }

    .border-top-blue-grey.border-top-darken-3 {
    border-top: 1px solid #37474f !important; }

    .border-bottom-blue-grey.border-bottom-darken-3 {
    border-bottom: 1px solid #37474f !important; }

    .border-left-blue-grey.border-left-darken-3 {
    border-left: 1px solid #37474f !important; }

    .border-right-blue-grey.border-right-darken-3 {
    border-right: 1px solid #37474f !important; }

    .overlay-blue-grey.overlay-darken-3 {
    background: #37474f;
    /* The Fallback */
    background: rgba(55, 71, 79, 0.8); }

    .blue-grey.darken-4 {
    color: #263238 !important; }

    .bg-blue-grey.bg-darken-4 {
    background-color: #263238 !important; }
    .bg-blue-grey.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(38, 50, 56, 0.6); }

    .btn-blue-grey.btn-darken-4 {
    border-color: #455a64 !important;
    background-color: #263238 !important; }
    .btn-blue-grey.btn-darken-4:hover {
        border-color: #455a64 !important;
        background-color: #37474f !important; }
    .btn-blue-grey.btn-darken-4:focus, .btn-blue-grey.btn-darken-4:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-blue-grey.btn-outline-darken-4 {
    border-color: #263238 !important;
    color: #263238 !important; }
    .btn-outline-blue-grey.btn-outline-darken-4:hover {
        background-color: #263238 !important; }

    input:focus ~ .bg-blue-grey {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #263238 !important; }

    .border-blue-grey.border-darken-4 {
    border: 1px solid #263238 !important; }

    .border-top-blue-grey.border-top-darken-4 {
    border-top: 1px solid #263238 !important; }

    .border-bottom-blue-grey.border-bottom-darken-4 {
    border-bottom: 1px solid #263238 !important; }

    .border-left-blue-grey.border-left-darken-4 {
    border-left: 1px solid #263238 !important; }

    .border-right-blue-grey.border-right-darken-4 {
    border-right: 1px solid #263238 !important; }

    .overlay-blue-grey.overlay-darken-4 {
    background: #263238;
    /* The Fallback */
    background: rgba(38, 50, 56, 0.8); }

    .grey-blue.lighten-5 {
    color: #eceff1 !important; }

    .bg-grey-blue.bg-lighten-5 {
    background-color: #eceff1 !important; }
    .bg-grey-blue.bg-lighten-5.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(236, 239, 241, 0.6); }

    .btn-grey-blue.btn-lighten-5 {
    border-color: #2c303b !important;
    background-color: #eceff1 !important; }
    .btn-grey-blue.btn-lighten-5:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-lighten-5:focus, .btn-grey-blue.btn-lighten-5:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-lighten-5 {
    border-color: #eceff1 !important;
    color: #eceff1 !important; }
    .btn-outline-grey-blue.btn-outline-lighten-5:hover {
        background-color: #eceff1 !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #eceff1 !important; }

    .border-grey-blue.border-lighten-5 {
    border: 1px solid #eceff1 !important; }

    .border-top-grey-blue.border-top-lighten-5 {
    border-top: 1px solid #eceff1 !important; }

    .border-bottom-grey-blue.border-bottom-lighten-5 {
    border-bottom: 1px solid #eceff1 !important; }

    .border-left-grey-blue.border-left-lighten-5 {
    border-left: 1px solid #eceff1 !important; }

    .border-right-grey-blue.border-right-lighten-5 {
    border-right: 1px solid #eceff1 !important; }

    .overlay-grey-blue.overlay-lighten-5 {
    background: #eceff1;
    /* The Fallback */
    background: rgba(236, 239, 241, 0.8); }

    .grey-blue.lighten-4 {
    color: #cfd8dc !important; }

    .bg-grey-blue.bg-lighten-4 {
    background-color: #cfd8dc !important; }
    .bg-grey-blue.bg-lighten-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(207, 216, 220, 0.6); }

    .btn-grey-blue.btn-lighten-4 {
    border-color: #2c303b !important;
    background-color: #cfd8dc !important; }
    .btn-grey-blue.btn-lighten-4:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-lighten-4:focus, .btn-grey-blue.btn-lighten-4:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-lighten-4 {
    border-color: #cfd8dc !important;
    color: #cfd8dc !important; }
    .btn-outline-grey-blue.btn-outline-lighten-4:hover {
        background-color: #cfd8dc !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #cfd8dc !important; }

    .border-grey-blue.border-lighten-4 {
    border: 1px solid #cfd8dc !important; }

    .border-top-grey-blue.border-top-lighten-4 {
    border-top: 1px solid #cfd8dc !important; }

    .border-bottom-grey-blue.border-bottom-lighten-4 {
    border-bottom: 1px solid #cfd8dc !important; }

    .border-left-grey-blue.border-left-lighten-4 {
    border-left: 1px solid #cfd8dc !important; }

    .border-right-grey-blue.border-right-lighten-4 {
    border-right: 1px solid #cfd8dc !important; }

    .overlay-grey-blue.overlay-lighten-4 {
    background: #cfd8dc;
    /* The Fallback */
    background: rgba(207, 216, 220, 0.8); }

    .grey-blue.lighten-3 {
    color: #b0bec5 !important; }

    .bg-grey-blue.bg-lighten-3 {
    background-color: #b0bec5 !important; }
    .bg-grey-blue.bg-lighten-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(176, 190, 197, 0.6); }

    .btn-grey-blue.btn-lighten-3 {
    border-color: #2c303b !important;
    background-color: #b0bec5 !important; }
    .btn-grey-blue.btn-lighten-3:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-lighten-3:focus, .btn-grey-blue.btn-lighten-3:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-lighten-3 {
    border-color: #b0bec5 !important;
    color: #b0bec5 !important; }
    .btn-outline-grey-blue.btn-outline-lighten-3:hover {
        background-color: #b0bec5 !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #b0bec5 !important; }

    .border-grey-blue.border-lighten-3 {
    border: 1px solid #b0bec5 !important; }

    .border-top-grey-blue.border-top-lighten-3 {
    border-top: 1px solid #b0bec5 !important; }

    .border-bottom-grey-blue.border-bottom-lighten-3 {
    border-bottom: 1px solid #b0bec5 !important; }

    .border-left-grey-blue.border-left-lighten-3 {
    border-left: 1px solid #b0bec5 !important; }

    .border-right-grey-blue.border-right-lighten-3 {
    border-right: 1px solid #b0bec5 !important; }

    .overlay-grey-blue.overlay-lighten-3 {
    background: #b0bec5;
    /* The Fallback */
    background: rgba(176, 190, 197, 0.8); }

    .grey-blue.lighten-2 {
    color: #6f85ad !important; }

    .bg-grey-blue.bg-lighten-2 {
    background-color: #6f85ad !important; }
    .bg-grey-blue.bg-lighten-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(111, 133, 173, 0.6); }

    .btn-grey-blue.btn-lighten-2 {
    border-color: #2c303b !important;
    background-color: #6f85ad !important; }
    .btn-grey-blue.btn-lighten-2:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-lighten-2:focus, .btn-grey-blue.btn-lighten-2:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-lighten-2 {
    border-color: #6f85ad !important;
    color: #6f85ad !important; }
    .btn-outline-grey-blue.btn-outline-lighten-2:hover {
        background-color: #6f85ad !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6f85ad !important; }

    .border-grey-blue.border-lighten-2 {
    border: 1px solid #6f85ad !important; }

    .border-top-grey-blue.border-top-lighten-2 {
    border-top: 1px solid #6f85ad !important; }

    .border-bottom-grey-blue.border-bottom-lighten-2 {
    border-bottom: 1px solid #6f85ad !important; }

    .border-left-grey-blue.border-left-lighten-2 {
    border-left: 1px solid #6f85ad !important; }

    .border-right-grey-blue.border-right-lighten-2 {
    border-right: 1px solid #6f85ad !important; }

    .overlay-grey-blue.overlay-lighten-2 {
    background: #6f85ad;
    /* The Fallback */
    background: rgba(111, 133, 173, 0.8); }

    .grey-blue.lighten-1 {
    color: #78909c !important; }

    .bg-grey-blue.bg-lighten-1 {
    background-color: #78909c !important; }
    .bg-grey-blue.bg-lighten-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(120, 144, 156, 0.6); }

    .btn-grey-blue.btn-lighten-1 {
    border-color: #2c303b !important;
    background-color: #78909c !important; }
    .btn-grey-blue.btn-lighten-1:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-lighten-1:focus, .btn-grey-blue.btn-lighten-1:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-lighten-1 {
    border-color: #78909c !important;
    color: #78909c !important; }
    .btn-outline-grey-blue.btn-outline-lighten-1:hover {
        background-color: #78909c !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #78909c !important; }

    .border-grey-blue.border-lighten-1 {
    border: 1px solid #78909c !important; }

    .border-top-grey-blue.border-top-lighten-1 {
    border-top: 1px solid #78909c !important; }

    .border-bottom-grey-blue.border-bottom-lighten-1 {
    border-bottom: 1px solid #78909c !important; }

    .border-left-grey-blue.border-left-lighten-1 {
    border-left: 1px solid #78909c !important; }

    .border-right-grey-blue.border-right-lighten-1 {
    border-right: 1px solid #78909c !important; }

    .overlay-grey-blue.overlay-lighten-1 {
    background: #78909c;
    /* The Fallback */
    background: rgba(120, 144, 156, 0.8); }

    .grey-blue {
    color: #1b2942 !important; }

    .bg-grey-blue {
    background-color: #1b2942 !important; }
    .bg-grey-blue .card-header,
    .bg-grey-blue .card-footer {
        background-color: transparent; }
    .bg-grey-blue.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(27, 41, 66, 0.6); }

    .selectboxit.selectboxit-btn.bg-grey-blue {
    background-color: #1b2942 !important; }

    .alert-grey-blue {
    border-color: #1b2942 !important;
    background-color: #304875 !important;
    color: black !important; }
    .alert-grey-blue .alert-link {
        color: black !important; }

    .border-grey-blue {
    border-color: #1b2942; }

    .overlay-grey-blue {
    background: #1b2942;
    /* The Fallback */
    background: rgba(27, 41, 66, 0.8); }

    .color-info.grey-blue {
    background-color: #1b2942 !important; }

    .btn-grey-blue {
    border-color: #1b2942 !important;
    background-color: #1b2942 !important;
    color: #FFFFFF; }
    .btn-grey-blue:hover {
        border-color: #78909c !important;
        background-color: #78909c !important;
        color: #FFF !important; }
    .btn-grey-blue:focus, .btn-grey-blue:active {
        border-color: #37474f !important;
        background-color: #37474f !important;
        color: #FFF !important; }
    .btn-grey-blue.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(27, 41, 66, 0.6); }

    .btn-outline-grey-blue {
    border-color: #1b2942;
    background-color: transparent;
    color: #1b2942; }
    .btn-outline-grey-blue:hover {
        background-color: #1b2942;
        color: #FFF !important; }
    .btn-outline-grey-blue.btn-glow {
        box-shadow: 0px 1px 20px 1px rgba(27, 41, 66, 0.6); }

    input[type="checkbox"].bg-grey-blue + .custom-control-label:before, input[type="radio"].bg-grey-blue + .custom-control-label:before {
    background-color: #1b2942 !important; }

    /* .custom-control-label{
            &:before{
            background-color: #ddd !important;
            }
        } */
    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1b2942 !important; }

    .border-grey-blue {
    border: 1px solid #1b2942 !important; }

    .border-top-grey-blue {
    border-top: 1px solid #1b2942; }

    .border-bottom-grey-blue {
    border-bottom: 1px solid #1b2942; }

    .border-left-grey-blue {
    border-left: 1px solid #1b2942; }

    .border-right-grey-blue {
    border-right: 1px solid #1b2942; }

    /* Bullet grey-blue */
    .bullet.bullet-grey-blue {
    background-color: #1b2942; }

    .grey-blue.darken-1 {
    color: #546e7a !important; }

    .bg-grey-blue.bg-darken-1 {
    background-color: #546e7a !important; }
    .bg-grey-blue.bg-darken-1.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(84, 110, 122, 0.6); }

    .btn-grey-blue.btn-darken-1 {
    border-color: #2c303b !important;
    background-color: #546e7a !important; }
    .btn-grey-blue.btn-darken-1:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-darken-1:focus, .btn-grey-blue.btn-darken-1:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-darken-1 {
    border-color: #546e7a !important;
    color: #546e7a !important; }
    .btn-outline-grey-blue.btn-outline-darken-1:hover {
        background-color: #546e7a !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #546e7a !important; }

    .border-grey-blue.border-darken-1 {
    border: 1px solid #546e7a !important; }

    .border-top-grey-blue.border-top-darken-1 {
    border-top: 1px solid #546e7a !important; }

    .border-bottom-grey-blue.border-bottom-darken-1 {
    border-bottom: 1px solid #546e7a !important; }

    .border-left-grey-blue.border-left-darken-1 {
    border-left: 1px solid #546e7a !important; }

    .border-right-grey-blue.border-right-darken-1 {
    border-right: 1px solid #546e7a !important; }

    .overlay-grey-blue.overlay-darken-1 {
    background: #546e7a;
    /* The Fallback */
    background: rgba(84, 110, 122, 0.8); }

    .grey-blue.darken-2 {
    color: #2c303b !important; }

    .bg-grey-blue.bg-darken-2 {
    background-color: #2c303b !important; }
    .bg-grey-blue.bg-darken-2.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(44, 48, 59, 0.6); }

    .btn-grey-blue.btn-darken-2 {
    border-color: #2c303b !important;
    background-color: #2c303b !important; }
    .btn-grey-blue.btn-darken-2:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-darken-2:focus, .btn-grey-blue.btn-darken-2:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-darken-2 {
    border-color: #2c303b !important;
    color: #2c303b !important; }
    .btn-outline-grey-blue.btn-outline-darken-2:hover {
        background-color: #2c303b !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2c303b !important; }

    .border-grey-blue.border-darken-2 {
    border: 1px solid #2c303b !important; }

    .border-top-grey-blue.border-top-darken-2 {
    border-top: 1px solid #2c303b !important; }

    .border-bottom-grey-blue.border-bottom-darken-2 {
    border-bottom: 1px solid #2c303b !important; }

    .border-left-grey-blue.border-left-darken-2 {
    border-left: 1px solid #2c303b !important; }

    .border-right-grey-blue.border-right-darken-2 {
    border-right: 1px solid #2c303b !important; }

    .overlay-grey-blue.overlay-darken-2 {
    background: #2c303b;
    /* The Fallback */
    background: rgba(44, 48, 59, 0.8); }

    .grey-blue.darken-3 {
    color: #37474f !important; }

    .bg-grey-blue.bg-darken-3 {
    background-color: #37474f !important; }
    .bg-grey-blue.bg-darken-3.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(55, 71, 79, 0.6); }

    .btn-grey-blue.btn-darken-3 {
    border-color: #2c303b !important;
    background-color: #37474f !important; }
    .btn-grey-blue.btn-darken-3:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-darken-3:focus, .btn-grey-blue.btn-darken-3:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-darken-3 {
    border-color: #37474f !important;
    color: #37474f !important; }
    .btn-outline-grey-blue.btn-outline-darken-3:hover {
        background-color: #37474f !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #37474f !important; }

    .border-grey-blue.border-darken-3 {
    border: 1px solid #37474f !important; }

    .border-top-grey-blue.border-top-darken-3 {
    border-top: 1px solid #37474f !important; }

    .border-bottom-grey-blue.border-bottom-darken-3 {
    border-bottom: 1px solid #37474f !important; }

    .border-left-grey-blue.border-left-darken-3 {
    border-left: 1px solid #37474f !important; }

    .border-right-grey-blue.border-right-darken-3 {
    border-right: 1px solid #37474f !important; }

    .overlay-grey-blue.overlay-darken-3 {
    background: #37474f;
    /* The Fallback */
    background: rgba(55, 71, 79, 0.8); }

    .grey-blue.darken-4 {
    color: #263238 !important; }

    .bg-grey-blue.bg-darken-4 {
    background-color: #263238 !important; }
    .bg-grey-blue.bg-darken-4.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(38, 50, 56, 0.6); }

    .btn-grey-blue.btn-darken-4 {
    border-color: #2c303b !important;
    background-color: #263238 !important; }
    .btn-grey-blue.btn-darken-4:hover {
        border-color: #2c303b !important;
        background-color: #37474f !important; }
    .btn-grey-blue.btn-darken-4:focus, .btn-grey-blue.btn-darken-4:active {
        border-color: #37474f !important;
        background-color: #263238 !important; }

    .btn-outline-grey-blue.btn-outline-darken-4 {
    border-color: #263238 !important;
    color: #263238 !important; }
    .btn-outline-grey-blue.btn-outline-darken-4:hover {
        background-color: #263238 !important; }

    input:focus ~ .bg-grey-blue {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #263238 !important; }

    .border-grey-blue.border-darken-4 {
    border: 1px solid #263238 !important; }

    .border-top-grey-blue.border-top-darken-4 {
    border-top: 1px solid #263238 !important; }

    .border-bottom-grey-blue.border-bottom-darken-4 {
    border-bottom: 1px solid #263238 !important; }

    .border-left-grey-blue.border-left-darken-4 {
    border-left: 1px solid #263238 !important; }

    .border-right-grey-blue.border-right-darken-4 {
    border-right: 1px solid #263238 !important; }

    .overlay-grey-blue.overlay-darken-4 {
    background: #263238;
    /* The Fallback */
    background: rgba(38, 50, 56, 0.8); }

    .shades.black {
    color: #000000 !important; }

    .bg-shades.bg-black {
    background-color: #000000 !important; }
    .bg-shades.bg-black.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    .btn-shades.btn-black {
    border-color: !important;
    background-color: #000000 !important; }
    .btn-shades.btn-black:hover {
        border-color: !important;
        background-color: !important; }
    .btn-shades.btn-black:focus, .btn-shades.btn-black:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-shades.btn-outline-black {
    border-color: #000000 !important;
    color: #000000 !important; }
    .btn-outline-shades.btn-outline-black:hover {
        background-color: #000000 !important; }

    input:focus ~ .bg-shades {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #000000 !important; }

    .border-shades.border-black {
    border: 1px solid #000000 !important; }

    .border-top-shades.border-top-black {
    border-top: 1px solid #000000 !important; }

    .border-bottom-shades.border-bottom-black {
    border-bottom: 1px solid #000000 !important; }

    .border-left-shades.border-left-black {
    border-left: 1px solid #000000 !important; }

    .border-right-shades.border-right-black {
    border-right: 1px solid #000000 !important; }

    .overlay-shades.overlay-black {
    background: #000000;
    /* The Fallback */
    background: rgba(0, 0, 0, 0.8); }

    .shades.white {
    color: #ffffff !important; }

    .bg-shades.bg-white {
    background-color: #ffffff !important; }
    .bg-shades.bg-white.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 255, 0.6); }

    .btn-shades.btn-white {
    border-color: !important;
    background-color: #ffffff !important; }
    .btn-shades.btn-white:hover {
        border-color: !important;
        background-color: !important; }
    .btn-shades.btn-white:focus, .btn-shades.btn-white:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-shades.btn-outline-white {
    border-color: #ffffff !important;
    color: #ffffff !important; }
    .btn-outline-shades.btn-outline-white:hover {
        background-color: #ffffff !important; }

    input:focus ~ .bg-shades {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffffff !important; }

    .border-shades.border-white {
    border: 1px solid #ffffff !important; }

    .border-top-shades.border-top-white {
    border-top: 1px solid #ffffff !important; }

    .border-bottom-shades.border-bottom-white {
    border-bottom: 1px solid #ffffff !important; }

    .border-left-shades.border-left-white {
    border-left: 1px solid #ffffff !important; }

    .border-right-shades.border-right-white {
    border-right: 1px solid #ffffff !important; }

    .overlay-shades.overlay-white {
    background: #ffffff;
    /* The Fallback */
    background: rgba(255, 255, 255, 0.8); }

    .shades.transparent {
    color: transparent !important; }

    .bg-shades.bg-transparent {
    background-color: transparent !important; }
    .bg-shades.bg-transparent.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    .btn-shades.btn-transparent {
    border-color: !important;
    background-color: transparent !important; }
    .btn-shades.btn-transparent:hover {
        border-color: !important;
        background-color: !important; }
    .btn-shades.btn-transparent:focus, .btn-shades.btn-transparent:active {
        border-color: !important;
        background-color: !important; }

    .btn-outline-shades.btn-outline-transparent {
    border-color: transparent !important;
    color: transparent !important; }
    .btn-outline-shades.btn-outline-transparent:hover {
        background-color: transparent !important; }

    input:focus ~ .bg-shades {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem transparent !important; }

    .border-shades.border-transparent {
    border: 1px solid transparent !important; }

    .border-top-shades.border-top-transparent {
    border-top: 1px solid transparent !important; }

    .border-bottom-shades.border-bottom-transparent {
    border-bottom: 1px solid transparent !important; }

    .border-left-shades.border-left-transparent {
    border-left: 1px solid transparent !important; }

    .border-right-shades.border-right-transparent {
    border-right: 1px solid transparent !important; }

    .overlay-shades.overlay-transparent {
    background: transparent;
    /* The Fallback */
    background: rgba(0, 0, 0, 0.8); }

    .black {
    color: #000000; }

    .bg-black {
    background-color: #000000; }
    .bg-black.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    input:focus ~ .bg-black {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #000000; }

    .border-black {
    border: 1px solid #000000; }

    .border-top-black {
    border-top: 1px solid #000000; }

    .border-bottom-black {
    border-bottom: 1px solid #000000; }

    .border-left-black {
    border-left: 1px solid #000000; }

    .border-right-black {
    border-right: 1px solid #000000; }

    .white {
    color: #ffffff; }

    .bg-white {
    background-color: #ffffff; }
    .bg-white.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(255, 255, 255, 0.6); }

    input:focus ~ .bg-white {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffffff; }

    .border-white {
    border: 1px solid #ffffff; }

    .border-top-white {
    border-top: 1px solid #ffffff; }

    .border-bottom-white {
    border-bottom: 1px solid #ffffff; }

    .border-left-white {
    border-left: 1px solid #ffffff; }

    .border-right-white {
    border-right: 1px solid #ffffff; }

    .transparent {
    color: transparent; }

    .bg-transparent {
    background-color: transparent; }
    .bg-transparent.bg-glow {
        box-shadow: 0px 1px 20px 1px rgba(0, 0, 0, 0.6); }

    input:focus ~ .bg-transparent {
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem transparent; }

    .border-transparent {
    border: 1px solid transparent; }

    .border-top-transparent {
    border-top: 1px solid transparent; }

    .border-bottom-transparent {
    border-bottom: 1px solid transparent; }

    .border-left-transparent {
    border-left: 1px solid transparent; }

    .border-right-transparent {
    border-right: 1px solid transparent; }

</style>

<style>
    html {
    font-size: 14px;
    height: 100%;
    width: 100%; }
    html body {
        height: 100%;
        background-color: #f4f5fa;
        direction: ltr; }
        html body.fixed-navbar {
        padding-top: 5rem; }
        html body.footer-fixed .app-content.content {
        margin-bottom: 3rem; }
        html body a {
        color: #1e9ff2; }
        html body a:hover {
            color: #0c84d1; }
        html body .container.app-content {
        overflow-x: hidden; }
        html body .container.app-content.show-overlay .content-overlay {
            z-index: 10;
            opacity: 1; }
        html body .container.app-content .content-overlay {
            position: fixed;
            opacity: 0;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            cursor: pointer;
            transition: all 0.7s;
            z-index: -1; }
        html body .content {
        padding: 0;
        position: relative;
        transition: 300ms ease all;
        backface-visibility: hidden;
        min-height: calc(100% - 3.2rem); }
        html body .content.app-content {
            overflow-x: hidden; }
            html body .content.app-content.show-overlay .content-overlay {
            z-index: 10;
            opacity: 1; }
            html body .content.app-content .content-overlay {
            position: fixed;
            opacity: 0;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            cursor: pointer;
            transition: all 0.7s;
            z-index: -1; }
        html body .content .content-wrapper {
            padding: 2.1rem 2rem 0; }
            html body .content .content-wrapper .content-header-title {
            font-weight: 500;
            letter-spacing: 1px;
            color: #464855; }
        html body .la {
        font-size: 1.2rem; }
        html body[data-col="1-column"]:not(.vertical-content-menu) .content,
        html body[data-col="1-column"]:not(.vertical-content-menu) .footer {
        margin-left: 0px !important; }
        html body[data-col="1-column"].horizontal-layout .content,
        html body[data-col="1-column"].horizontal-layout .footer {
        margin: 0 auto !important; }
        html body[data-col="1-column"].vertical-content-menu .content-body {
        margin-left: 0px !important; }
        html body.boxed-layout {
        padding-left: 0;
        padding-right: 0;
        background-color: #fff; }
        html body.boxed-layout .app-content {
            background-color: #f4f5fa; }
        html body.content-boxed-layout .content {
        width: 80%;
        margin: 0 auto;
        padding-left: 260px; }
        html body.bg-full-screen-image {
        background: url(../../app-assets/images/backgrounds/bg-2.jpg) no-repeat center center fixed;
        background-size: cover; }
        html body .pace .pace-progress {
        background: #ff4961; }

    /*
    * Blank page
    */
    .blank-page .content-wrapper {
    padding: 0 !important; }
    .blank-page .content-wrapper .flexbox-container {
        display: flex;
        align-items: center;
        min-height: calc(100vh - 3.2rem); }

    .app-content.center-layout {
    overflow: hidden; }

    .center-layout {
    position: relative; }

    @media (max-width: 767.98px) {
    html body footer {
        text-align: center; } }

    /*
    * Col 3 layout for detached and general type
    */
    @media (min-width: 992px) {
    body .content-right {
        width: calc(100% - 300px);
        float: right; }
    body .content-left {
        width: calc(100% - 300px);
        float: left; }
    body .content-detached {
        width: 100%; }
        body .content-detached.content-right {
        float: right;
        margin-left: -300px; }
        body .content-detached.content-right .content-body {
            margin-left: 320px; }
        body .content-detached.content-left {
        float: left;
        margin-right: -300px; }
        body .content-detached.content-left .content-body {
            margin-right: 320px; }
    .sidebar-right.sidebar-sticky {
        float: right !important;
        margin-left: -300px;
        width: 300px !important; }
    .sidebar-left.sidebar-sticky {
        float: left !important;
        margin-right: -300px;
        width: 300px !important; }
    [data-col="content-left-sidebar"] .sticky-wrapper {
        float: left; }
    .vertical-content-menu .content .sidebar-left {
        margin-left: 288px; }
    .vertical-content-menu .content .content-detached.content-right {
        float: right;
        width: calc(100% - 300px);
        margin-left: -300px; }
        .vertical-content-menu .content .content-detached.content-right .content-body {
        margin-left: 295px; }
    .vertical-content-menu .content .content-detached.content-left {
        float: left;
        width: 100%;
        margin-right: -300px; }
        .vertical-content-menu .content .content-detached.content-left .content-body {
        margin-right: 320px; } }

    /*=========================================================================================
        File Name: sidebar.scss
        Description: content sidebar specific scss.
        ----------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    .sidebar {
    position: relative;
    width: 100%; }
    @media (min-width: 992px) {
        .sidebar {
        vertical-align: top;
        width: 300px; } }

    .sidebar-fixed {
    position: fixed;
    height: 100%;
    overflow: scroll; }

    .sidenav-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 120vh;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 997;
    display: none; }

    .drag-target {
    height: 100%;
    width: 40px;
    position: fixed;
    top: 0;
    left: -20px;
    z-index: 1036; }

    @media (min-width: 992px) {
    .sidebar-left {
        float: left; }
    .sidebar-right {
        float: right; } }

    .horizontal-menu-padding .header-navbar .navbar-container {
    padding: 0; }

    .header-navbar .navbar-container {
    height: auto; }

    footer.footer {
    padding: 0.8rem; }

    footer.navbar-shadow {
    box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.1); }

    footer.navbar-border {
    border-top: 1px solid #E4E7ED; }

    footer.footer-transparent {
    border: none; }

    footer.footer-light {
    background: #fff; }

    footer.footer-dark {
    background: #2C303B; }
    footer.footer-dark span {
        color: #fff; }

    footer .ft-heart:before {
    padding-left: 0.3rem; }

    /*=========================================================================================
        File Name: navigations.scss
        Description: Common mixin for menus, contain dark and light version scss.
        ----------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    .main-menu {
    z-index: 1000;
    position: absolute;
    display: table-cell; }
    .main-menu.menu-light {
        color: #6b6f82;
        background: #fff; }
        .main-menu.menu-light .main-menu-header {
        padding: 20px; }
        .main-menu.menu-light .main-menu-header .menu-search {
            background: #e6e6e6;
            padding: 0.5rem 1rem;
            color: #545766; }
            .main-menu.menu-light .main-menu-header .menu-search:focus {
            border-color: #d9d9d9; }
        .main-menu.menu-light .navigation {
        background: #fff; }
        .main-menu.menu-light .navigation .navigation-header {
            color: #6b6f82;
            padding: 30px 20px 8px 15px; }
            .main-menu.menu-light .navigation .navigation-header span {
            font-weight: 500;
            text-transform: uppercase; }
        .main-menu.menu-light .navigation li a {
            color: #6b6f82;
            transition: all 0.2s ease; }
            .main-menu.menu-light .navigation li a i,
            .main-menu.menu-light .navigation li a span {
            transition: all 0.2s ease; }
            .main-menu.menu-light .navigation li a span.menu-sub-title {
            color: #bdbfc9; }
        .main-menu.menu-light .navigation > li {
            padding: 0; }
            .main-menu.menu-light .navigation > li > a {
            padding: 12px 30px 12px 18px; }
            .main-menu.menu-light .navigation > li > a .label {
                margin-top: 4px;
                margin-right: 5px; }
            .main-menu.menu-light .navigation > li > a i {
                position: relative;
                top: 3px; }
            .main-menu.menu-light .navigation > li.open > ul > li:hover > a {
            padding: 12px 18px 12px 58px; }
            .main-menu.menu-light .navigation > li.open > ul > li:hover.active > a {
            padding: 12px 18px 12px 40px; }
            .main-menu.menu-light .navigation > li.open > a {
            color: #545766;
            border-right: 4px solid #1e9ff2; }
            .main-menu.menu-light .navigation > li.open > li.hover > a {
            transform: translateX(12px); }
            .main-menu.menu-light .navigation > li.open > li.hover.active > a {
            transform: translateX(0px); }
            .main-menu.menu-light .navigation > li.menu-collapsed-open > a {
            color: #545766;
            border-right: 4px solid #1e9ff2; }
            .main-menu.menu-light .navigation > li:not(.open) > ul {
            display: none; }
            .main-menu.menu-light .navigation > li.hover > a, .main-menu.menu-light .navigation > li:hover > a, .main-menu.menu-light .navigation > li.active > a {
            color: #85899b; }
            .main-menu.menu-light .navigation > li.hover > a.mm-next, .main-menu.menu-light .navigation > li:hover > a.mm-next, .main-menu.menu-light .navigation > li.active > a.mm-next {
                background-color: inherit; }
            .main-menu.menu-light .navigation > li.active > a {
            font-weight: 700;
            background: whitesmoke;
            margin: 0 1rem 0 1rem;
            border-radius: 0.3rem; }
            .main-menu.menu-light .navigation > li .active {
            background: whitesmoke; }
            .main-menu.menu-light .navigation > li .active > a {
                color: #85899b;
                font-weight: 700;
                background: whitesmoke;
                margin: 0 1rem 0 1rem;
                border-radius: 0.3rem;
                padding-left: 40px; }
            .main-menu.menu-light .navigation > li .active .hover > a {
                background: whitesmoke; }
            .main-menu.menu-light .navigation > li ul {
            padding: 0;
            margin: 0;
            font-size: 1rem; }
            .main-menu.menu-light .navigation > li ul li {
                color: #6b6f82;
                background: transparent; }
                .main-menu.menu-light .navigation > li ul li > a {
                padding: 12px 18px 12px 54px; }
            .main-menu.menu-light .navigation > li ul .has-sub:not(.open) > ul {
                display: none; }
            .main-menu.menu-light .navigation > li ul .open > a {
                color: #6b6f82; }
            .main-menu.menu-light .navigation > li ul .open > ul {
                display: block; }
                .main-menu.menu-light .navigation > li ul .open > ul li.active > a {
                padding-left: 40px; }
                .main-menu.menu-light .navigation > li ul .open > ul li:not(.active):hover > a {
                padding-left: 58px; }
                .main-menu.menu-light .navigation > li ul .open > ul .open > ul {
                display: block; }
                .main-menu.menu-light .navigation > li ul .open > ul .open > ul li > a {
                    padding: 12px 18px 12px 74px; }
            .main-menu.menu-light .navigation > li ul .hover > a, .main-menu.menu-light .navigation > li ul:hover > a {
                color: #74798d; }
            .main-menu.menu-light .navigation > li ul .active {
                background: transparent; }
                .main-menu.menu-light .navigation > li ul .active > a {
                color: #85899b;
                font-weight: 700; }
                .main-menu.menu-light .navigation > li ul .active .hover > a {
                background-color: transparent; }
            .main-menu.menu-light .navigation > li > ul {
            background: #fff; }
            .main-menu.menu-light .navigation > li.hover > a {
            padding-left: 24px; }
            .main-menu.menu-light .navigation > li.active > a {
            padding: 12px 17px 12px 17px; }
        .main-menu.menu-light.expanded .navigation > li.active > a {
        margin: 0 1rem; }
        .main-menu.menu-light ul.menu-popout {
        background: #fff; }
        .main-menu.menu-light ul.menu-popout li a {
            color: #6b6f82; }
            .main-menu.menu-light ul.menu-popout li a span.menu-sub-title {
            color: #bdbfc9; }
        .main-menu.menu-light ul.menu-popout .has-sub:not(.open) > ul {
            display: none; }
        .main-menu.menu-light ul.menu-popout .has-sub.active {
            font-weight: normal; }
        .main-menu.menu-light ul.menu-popout .open > a {
            color: #6b6f82; }
        .main-menu.menu-light ul.menu-popout .open > ul {
            display: block; }
            .main-menu.menu-light ul.menu-popout .open > ul .open {
            background: #e8e8e8; }
            .main-menu.menu-light ul.menu-popout .open > ul .open > ul {
                display: block;
                background: #e8e8e8; }
        .main-menu.menu-light ul.menu-popout .hover > a, .main-menu.menu-light ul.menu-popout:hover > a {
            color: #74798d; }
        .main-menu.menu-light ul.menu-popout .active {
            font-weight: 700; }
            .main-menu.menu-light ul.menu-popout .active > a {
            color: #85899b; }
            .main-menu.menu-light ul.menu-popout .active .hover > a,
            .main-menu.menu-light ul.menu-popout .active :hover > a {
            background-color: transparent; }
    .main-menu.menu-dark {
        color: #dcdcdc;
        background: #2c343b;
        border-right: none !important; }
        .main-menu.menu-dark .main-menu-header {
        padding: 20px; }
        .main-menu.menu-dark .main-menu-header .menu-search {
            background: #161a1e;
            padding: 0.5rem 1rem;
            color: #c3c3c3; }
            .main-menu.menu-dark .main-menu-header .menu-search:focus {
            border-color: #0b0d0f; }
        .main-menu.menu-dark .navigation {
        background: #2c343b; }
        .main-menu.menu-dark .navigation .navigation-header {
            color: #dcdcdc;
            padding: 30px 20px 8px 15px; }
            .main-menu.menu-dark .navigation .navigation-header span {
            font-weight: 500;
            text-transform: uppercase; }
        .main-menu.menu-dark .navigation li a {
            color: #dcdcdc;
            transition: all 0.2s ease; }
            .main-menu.menu-dark .navigation li a i,
            .main-menu.menu-dark .navigation li a span {
            transition: all 0.2s ease; }
            .main-menu.menu-dark .navigation li a span.menu-sub-title {
            color: white; }
        .main-menu.menu-dark .navigation > li {
            padding: 0; }
            .main-menu.menu-dark .navigation > li > a {
            padding: 12px 30px 12px 18px; }
            .main-menu.menu-dark .navigation > li > a .label {
                margin-top: 4px;
                margin-right: 5px; }
            .main-menu.menu-dark .navigation > li > a i {
                position: relative;
                top: 3px; }
            .main-menu.menu-dark .navigation > li.open > ul > li:hover > a {
            padding: 12px 18px 12px 58px; }
            .main-menu.menu-dark .navigation > li.open > ul > li:hover.active > a {
            padding: 12px 18px 12px 40px; }
            .main-menu.menu-dark .navigation > li.open > a {
            color: #c3c3c3;
            border-right: 4px solid #1e9ff2; }
            .main-menu.menu-dark .navigation > li.open > li.hover > a {
            transform: translateX(12px); }
            .main-menu.menu-dark .navigation > li.open > li.hover.active > a {
            transform: translateX(0px); }
            .main-menu.menu-dark .navigation > li.menu-collapsed-open > a {
            color: #c3c3c3;
            border-right: 4px solid #1e9ff2; }
            .main-menu.menu-dark .navigation > li:not(.open) > ul {
            display: none; }
            .main-menu.menu-dark .navigation > li.hover > a, .main-menu.menu-dark .navigation > li:hover > a, .main-menu.menu-dark .navigation > li.active > a {
            color: #f6f6f6; }
            .main-menu.menu-dark .navigation > li.hover > a.mm-next, .main-menu.menu-dark .navigation > li:hover > a.mm-next, .main-menu.menu-dark .navigation > li.active > a.mm-next {
                background-color: inherit; }
            .main-menu.menu-dark .navigation > li.active > a {
            font-weight: 700;
            background: #424e58;
            margin: 0 1rem 0 1rem;
            border-radius: 0.3rem; }
            .main-menu.menu-dark .navigation > li .active {
            background: #424e58; }
            .main-menu.menu-dark .navigation > li .active > a {
                color: #f6f6f6;
                font-weight: 700;
                background: #424e58;
                margin: 0 1rem 0 1rem;
                border-radius: 0.3rem;
                padding-left: 40px; }
            .main-menu.menu-dark .navigation > li .active .hover > a {
                background: #232a2f; }
            .main-menu.menu-dark .navigation > li ul {
            padding: 0;
            margin: 0;
            font-size: 1rem; }
            .main-menu.menu-dark .navigation > li ul li {
                color: #dcdcdc;
                background: transparent; }
                .main-menu.menu-dark .navigation > li ul li > a {
                padding: 12px 18px 12px 54px; }
            .main-menu.menu-dark .navigation > li ul .has-sub:not(.open) > ul {
                display: none; }
            .main-menu.menu-dark .navigation > li ul .open > a {
                color: #dcdcdc; }
            .main-menu.menu-dark .navigation > li ul .open > ul {
                display: block; }
                .main-menu.menu-dark .navigation > li ul .open > ul li.active > a {
                padding-left: 40px; }
                .main-menu.menu-dark .navigation > li ul .open > ul li:not(.active):hover > a {
                padding-left: 58px; }
                .main-menu.menu-dark .navigation > li ul .open > ul .open > ul {
                display: block; }
                .main-menu.menu-dark .navigation > li ul .open > ul .open > ul li > a {
                    padding: 12px 18px 12px 74px; }
            .main-menu.menu-dark .navigation > li ul .hover > a, .main-menu.menu-dark .navigation > li ul:hover > a {
                color: #e6e6e6; }
            .main-menu.menu-dark .navigation > li ul .active {
                background: transparent; }
                .main-menu.menu-dark .navigation > li ul .active > a {
                color: #f6f6f6;
                font-weight: 700; }
                .main-menu.menu-dark .navigation > li ul .active .hover > a {
                background-color: transparent; }
            .main-menu.menu-dark .navigation > li > ul {
            background: #2c343b; }
            .main-menu.menu-dark .navigation > li.hover > a {
            padding-left: 24px; }
            .main-menu.menu-dark .navigation > li.active > a {
            padding: 12px 17px 12px 17px; }
        .main-menu.menu-dark.expanded .navigation > li.active > a {
        margin: 0 1rem; }
        .main-menu.menu-dark ul.menu-popout {
        background: #2c343b; }
        .main-menu.menu-dark ul.menu-popout li a {
            color: #dcdcdc; }
            .main-menu.menu-dark ul.menu-popout li a span.menu-sub-title {
            color: white; }
        .main-menu.menu-dark ul.menu-popout .has-sub:not(.open) > ul {
            display: none; }
        .main-menu.menu-dark ul.menu-popout .has-sub.active {
            font-weight: normal; }
        .main-menu.menu-dark ul.menu-popout .open > a {
            color: #dcdcdc; }
        .main-menu.menu-dark ul.menu-popout .open > ul {
            display: block; }
            .main-menu.menu-dark ul.menu-popout .open > ul .open {
            background: #181d21; }
            .main-menu.menu-dark ul.menu-popout .open > ul .open > ul {
                display: block;
                background: #181d21; }
        .main-menu.menu-dark ul.menu-popout .hover > a, .main-menu.menu-dark ul.menu-popout:hover > a {
            color: #e6e6e6; }
        .main-menu.menu-dark ul.menu-popout .active {
            font-weight: 700; }
            .main-menu.menu-dark ul.menu-popout .active > a {
            color: #f6f6f6; }
            .main-menu.menu-dark ul.menu-popout .active .hover > a,
            .main-menu.menu-dark ul.menu-popout .active :hover > a {
            background-color: transparent; }
    .main-menu.menu-fixed {
        position: fixed;
        height: 100%;
        /* fallback if needed */
        top: 5rem;
        height: calc(100% - 5rem); }
    .main-menu.menu-shadow {
        box-shadow: 10px 15px 30px 1px rgba(0, 0, 0, 0.1); }
    .main-menu.menu-native-scroll .main-menu-content {
        overflow-y: scroll; }
    .main-menu.menu-bordered.menu-light .navigation > li {
        border-top: 1px solid #e4e7ed; }
    .main-menu.menu-bordered.menu-dark .navigation > li {
        border-top: 1px solid rgba(255, 255, 255, 0.1); }
    .main-menu .main-menu-content {
        height: 100%;
        position: relative; }
    .main-menu ul {
        list-style: none;
        margin: 0;
        padding: 0; }
        .main-menu ul.navigation-main {
        overflow-x: hidden; }
    .main-menu a {
        outline: none; }
        .main-menu a:hover, .main-menu a:focus {
        text-decoration: none; }

    .navigation {
    font-size: 1.1rem;
    letter-spacing: 0.2px;
    font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
    font-weight: 400;
    overflow-y: hidden;
    padding-bottom: 20px; }
    .navigation .navigation-header {
        font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
        font-weight: 400;
        line-height: 1.2;
        padding: 12px 22px;
        font-size: 1rem; }
    .navigation li {
        position: relative;
        white-space: nowrap; }
        .navigation li a {
        display: block;
        /* white-space: nowrap; */
        text-overflow: ellipsis;
        overflow: hidden; }
        .navigation li .is-hidden {
        /* transition: all 250ms ease-in;
                transform: scale(0);
                opacity: 0; */ }
        .navigation li .is-shown {
        /* transition: all 250ms ease-in;
                transform: scale(1);
                opacity: 1; */ }
        .navigation li.disabled a {
        cursor: not-allowed; }

    .menu-popout li.disabled a {
    cursor: not-allowed; }

    .dropdown-notification .notification-text {
    margin-bottom: 0.5rem; }

    .dropdown-notification .notification-tag {
    position: relative;
    top: -28px;
    right: 20px; }

    .main-menu-header .user-content {
    padding: 20px; }
    .main-menu-header .user-content .media {
        overflow: inherit; }
    .main-menu-header .user-content .media-body {
        vertical-align: bottom;
        opacity: 1;
        width: 150px;
        white-space: nowrap;
        transition: all 0.3s ease 0.15s; }

    .vertical-layout.menu-expanded .menu-icon-right ul.navigation li > a:after,
    .vertical-layout.menu-collapsed .menu-icon-right ul.navigation li > a:after,
    .vertical-overlay-menu .menu-icon-right ul.navigation li > a:after {
    left: 8px;
    right: initial !important; }

    .vertical-layout.menu-expanded .menu-icon-right ul.navigation li > a > i,
    .vertical-layout.menu-collapsed .menu-icon-right ul.navigation li > a > i,
    .vertical-overlay-menu .menu-icon-right ul.navigation li > a > i {
    float: right !important;
    margin: 0px -12px 0px 0px !important; }

    .horizontal-layout .navbar-icon-right ul.nav > li > a:after {
    float: left;
    position: relative;
    top: 27px;
    left: -16px; }

    .horizontal-layout .navbar-icon-right ul.nav > li > a > i {
    float: right;
    margin: 0px 4px 0 8px; }

    .horizontal-layout .navbar-fixed {
    z-index: 999 !important; }

    @media (max-width: 767.98px) {
    .menu-hide .main-menu,
    .menu-open .main-menu {
        transition: transform 0.25s, top 0.35s, height 0.35s; }
    .main-menu {
        transform: translate3d(-240px, 0, 0);
        backface-visibility: hidden;
        perspective: 1000; }
    .menu-open .main-menu {
        transform: translate3d(0, 0, 0); } }

    @media (max-width: 991.98px) {
    .horizontal-layout.vertical-overlay-menu .main-menu-content {
        padding: 0; }
        .horizontal-layout.vertical-overlay-menu .main-menu-content .mega-dropdown-menu {
        margin: 0;
        width: 100%; }
        .horizontal-layout.vertical-overlay-menu .main-menu-content .mega-dropdown-menu > li {
            padding: 0; }
    .horizontal-layout.vertical-overlay-menu .navbar .navbar-container {
        margin-left: 0px;
        max-width: 100%; } }

    @media (min-width: 768px) {
    .drag-target {
        z-index: 0; } }

    .display-inline {
    display: inline !important; }

    .display-block {
    display: block !important; }

    .display-inline-block {
    display: inline-block !important; }

    .display-hidden {
    display: none !important; }

    .display-table-cell {
    display: table-cell !important; }

    .position-top-0 {
    top: 0; }

    .position-right-0 {
    right: 0; }

    .position-bottom-0 {
    bottom: 0; }

    .position-left-0 {
    left: 0; }

    .zindex-1 {
    z-index: 1 !important; }

    .zindex-2 {
    z-index: 2 !important; }

    .zindex-3 {
    z-index: 3 !important; }

    .zindex-4 {
    z-index: 4 !important; }

    .zindex-0 {
    z-index: 0 !important; }

    .zindex-minus-1 {
    z-index: -1 !important; }

    .zindex-minus-2 {
    z-index: -2 !important; }

    .zindex-minus-3 {
    z-index: -3 !important; }

    .zindex-minus-4 {
    z-index: -4 !important; }

    .no-edge-top {
    top: 0 !important; }

    .no-edge-bottom {
    bottom: 0 !important; }

    .no-edge-left {
    left: 0 !important; }

    .no-edge-right {
    right: 0 !important; }

    .cursor-pointer {
    cursor: pointer; }

    .cursor-move {
    cursor: move; }

    .cursor-default {
    cursor: default; }

    .cursor-progress {
    cursor: progress; }

    .cursor-not-allowed {
    cursor: not-allowed; }

    .overflow-hidden {
    overflow: hidden; }

    .overflow-visible {
    overflow: visible; }

    .overflow-auto {
    overflow: auto; }

    .overflow-scroll {
    overflow: scroll; }

    .overflow-x-scroll {
    overflow: scroll; }

    .overflow-y-scroll {
    overflow: scroll; }

    .bullets-inside {
    list-style: inside; }

    .list-style-circle {
    list-style: circle; }

    .list-style-square {
    list-style: square; }

    .list-style-icons {
    padding-left: 10px;
    margin-left: 0;
    list-style: none; }
    .list-style-icons > li i {
        float: left;
        width: 1em;
        margin: 0 6px 0 0; }

    .border {
    border: 1px solid; }

    .border-top {
    border-top: 1px solid; }

    .border-bottom {
    border-bottom: 1px solid; }

    .border-left {
    border-left: 1px solid; }

    .border-right {
    border-right: 1px solid; }

    .border-2 {
    border-width: 2px !important; }

    .border-top-2 {
    border-top-width: 2px !important; }

    .border-bottom-2 {
    border-bottom-width: 2px !important; }

    .border-left-2 {
    border-left-width: 2px !important; }

    .border-right-2 {
    border-right-width: 2px !important; }

    .border-3 {
    border-width: 3px !important; }

    .border-top-3 {
    border-top-width: 3px !important; }

    .border-bottom-3 {
    border-bottom-width: 3px !important; }

    .border-left-3 {
    border-left-width: 3px !important; }

    .border-right-3 {
    border-right-width: 3px !important; }

    .no-border-top-radius {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important; }

    .no-border-bottom-radius {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important; }

    .no-border-top-left-radius {
    border-top-left-radius: 0 !important; }

    .no-border-top-right-radius {
    border-top-right-radius: 0 !important; }

    .no-border-bottom-left-radius {
    border-bottom-left-radius: 0 !important; }

    .no-border-bottom-right-radius {
    border-bottom-right-radius: 0 !important; }

    .box-shadow-0 {
    box-shadow: none !important; }

    .box-shadow-1 {
    box-shadow: 0 7px 12px 0 rgba(62, 57, 107, 0.16); }

    .box-shadow-2 {
    box-shadow: 0 10px 18px 0 rgba(62, 57, 107, 0.2); }

    .box-shadow-3 {
    box-shadow: 0 14px 24px 0 rgba(62, 57, 107, 0.26); }

    .box-shadow-4 {
    box-shadow: 0 16px 28px 0 rgba(62, 57, 107, 0.3); }

    .box-shadow-5 {
    box-shadow: 0 27px 24px 0 rgba(62, 57, 107, 0.36); }

    .fit {
    max-width: 100% !important; }

    .half-width {
    width: 50% !important; }

    .full-width {
    width: 100% !important; }

    .full-height {
    height: 100% !important; }

    .width-50 {
    width: 50px !important; }

    .width-100 {
    width: 100px !important; }

    .width-150 {
    width: 150px !important; }

    .width-200 {
    width: 200px !important; }

    .width-250 {
    width: 250px !important; }

    .width-300 {
    width: 300px !important; }

    .width-350 {
    width: 350px !important; }

    .width-400 {
    width: 400px !important; }

    .width-450 {
    width: 450px !important; }

    .width-500 {
    width: 500px !important; }

    .width-550 {
    width: 550px !important; }

    .width-600 {
    width: 600px !important; }

    .width-650 {
    width: 650px !important; }

    .width-700 {
    width: 700px !important; }

    .width-750 {
    width: 750px !important; }

    .width-800 {
    width: 800px !important; }

    .width-5-per {
    width: 5% !important; }

    .width-10-per {
    width: 10% !important; }

    .width-15-per {
    width: 15% !important; }

    .width-20-per {
    width: 20% !important; }

    .width-25-per {
    width: 25% !important; }

    .width-30-per {
    width: 30% !important; }

    .width-35-per {
    width: 35% !important; }

    .width-40-per {
    width: 40% !important; }

    .width-45-per {
    width: 45% !important; }

    .width-50-per {
    width: 50% !important; }

    .width-55-per {
    width: 55% !important; }

    .width-60-per {
    width: 60% !important; }

    .width-65-per {
    width: 65% !important; }

    .width-70-per {
    width: 70% !important; }

    .width-75-per {
    width: 75% !important; }

    .width-80-per {
    width: 80% !important; }

    .width-90-per {
    width: 90% !important; }

    .width-95-per {
    width: 95% !important; }

    .height-50 {
    height: 50px !important; }

    .height-75 {
    height: 75px !important; }

    .height-100 {
    height: 100px !important; }

    .height-150 {
    height: 150px !important; }

    .height-200 {
    height: 200px !important; }

    .height-250 {
    height: 250px !important; }

    .height-300 {
    height: 300px !important; }

    .height-350 {
    height: 350px !important; }

    .height-400 {
    height: 400px !important; }

    .height-450 {
    height: 450px !important; }

    .height-500 {
    height: 500px !important; }

    .height-550 {
    height: 550px !important; }

    .height-600 {
    height: 600px !important; }

    .height-650 {
    height: 650px !important; }

    .height-700 {
    height: 700px !important; }

    .height-750 {
    height: 750px !important; }

    .height-800 {
    height: 800px !important; }

    .height-5-per {
    height: 5% !important; }

    .height-10-per {
    height: 10% !important; }

    .height-15-per {
    height: 15% !important; }

    .height-20-per {
    height: 20% !important; }

    .height-25-per {
    height: 25% !important; }

    .height-30-per {
    height: 30% !important; }

    .height-35-per {
    height: 35% !important; }

    .height-40-per {
    height: 40% !important; }

    .height-45-per {
    height: 45% !important; }

    .height-50-per {
    height: 50% !important; }

    .height-55-per {
    height: 55% !important; }

    .height-60-per {
    height: 60% !important; }

    .height-65-per {
    height: 65% !important; }

    .height-70-per {
    height: 70% !important; }

    .height-75-per {
    height: 75% !important; }

    .height-80-per {
    height: 80% !important; }

    .full-height-vh-with-nav {
    height: calc(100vh - 5rem - 4rem); }

    .full-height-vh {
    height: 100vh; }

    .line-height-1 {
    line-height: 1 !important; }

    .line-height-2 {
    line-height: 1.5 !important; }

    .line-height-3 {
    line-height: 2 !important; }

    .rotate-45 {
    transform: rotate(45deg); }

    .rotate-45-inverse {
    transform: rotate(-45deg); }

    .rotate-90 {
    transform: rotate(45deg); }

    .rotate-90-inverse {
    transform: rotate(-45deg); }

    .rotate-180 {
    transform: rotate(45deg); }

    .rotate-180-inverse {
    transform: rotate(-45deg); }

    .pull-up {
    transition: all 0.25s ease; }
    .pull-up:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0px 14px 24px rgba(62, 57, 107, 0.2);
        z-index: 30; }

    .spinner {
    display: inline-block;
    animation: spin 1s linear infinite; }

    @keyframes spin {
    0% {
        transform: rotate(0deg); }
    100% {
        transform: rotate(360deg); } }

    .spinner-reverse {
    display: inline-block;
    animation: spin-reverse 1s linear infinite; }

    @keyframes spin-reverse {
    0% {
        transform: rotate(0deg); }
    100% {
        transform: rotate(-360deg); } }

    .bg-cover {
    background-size: cover !important; }

    .background-repeat {
    background-repeat: repeat !important; }

    .background-no-repeat {
    background-repeat: no-repeat !important; }

    .img-xl {
    width: 64px !important;
    height: 64px !important; }

    .img-lg {
    width: 44px !important;
    height: 44px !important; }

    .img-sm {
    width: 36px !important;
    height: 36px !important; }

    .img-xs {
    width: 32px !important;
    height: 32px !important; }

    .bg-hexagons {
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23f7f7f7' fill-opacity='1' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }

    .bg-hexagons-danger {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23ff6576' fill-opacity='1' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }

    /* Bullets */
    .bullet {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    display: inline-block; }
    .bullet.bullet-xs {
        width: 8px;
        height: 8px;
        position: relative;
        top: -1px; }
    .bullet.bullet-sm {
        width: 10px;
        height: 10px; }
    .bullet.bullet-lg {
        width: 18px;
        height: 18rem; }

    .truncate {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; }

    .avatar {
    position: relative;
    width: 36px;
    height: 36px;
    white-space: nowrap;
    border-radius: 50%;
    cursor: pointer;
    color: #fff;
    display: inline-flex;
    font-size: 0.8rem;
    text-align: center;
    vertical-align: middle;
    justify-content: center;
    align-items: center; }
    .avatar i {
        position: absolute;
        right: -3px;
        bottom: 2px;
        width: 10px;
        height: 10px;
        border-radius: 100%;
        border: 1px solid #fff;
        z-index: 2; }
    .avatar span.text-circle {
        text-align: center;
        vertical-align: middle;
        color: #fff;
        font-size: 1.2rem;
        background: #babfc7;
        display: table-cell; }
    .avatar img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border: 0 none;
        border-radius: 50%;
        z-index: 1; }
    .avatar .badge-up {
        top: -8px;
        right: -11px; }

    .avatar-online i {
    background-color: #28d094; }

    .avatar-off i {
    background-color: #babfc7; }

    .avatar-busy i {
    background-color: #ff4961; }

    .avatar-away i {
    background-color: #ff9149; }

    .avatar-100 {
    width: 100px; }
    .avatar-100 span.text-circle {
        width: 100px;
        height: 100px; }
    .avatar-100 i {
        height: 20px;
        width: 20px; }

    .avatar-50 {
    width: 50px; }
    .avatar-50 span.text-circle {
        width: 50px;
        height: 50px; }
    .avatar-50 i {
        height: 10px;
        width: 10px; }

    .avatar-lg {
    width: 54px;
    height: 54px; }
    .avatar-lg span.text-circle {
        width: 54px;
        height: 54px; }
    .avatar-lg i {
        right: 0;
        bottom: 0;
        height: 20px;
        width: 20px; }

    .avatar-md {
    width: 40px;
    height: 40px; }
    .avatar-md span.text-circle {
        width: 40px;
        height: 40px; }
    .avatar-md i {
        right: 0;
        bottom: 0;
        height: 10px;
        width: 10px; }

    .avatar-sm {
    width: 32px;
    height: 32px; }
    .avatar-sm span.text-circle {
        width: 32px;
        height: 32px; }
    .avatar-sm i {
        height: 8px;
        width: 8px; }

    .avatar-xs {
    width: 24px;
    height: 24px; }
    .avatar-xs span.text-circle {
        width: 24px;
        height: 24px; }
    .avatar-xs i {
        height: 7px;
        width: 7px; }

    .dropdown .avatar i {
    margin-right: 0; }

    /*=========================================================================================
        File Name: search.scss
        Description: Search  functionality.
        ----------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    .navbar-container a.nav-link-search {
    float: left; }

    .navbar-container .search-input {
    position: relative;
    float: left;
    width: 0; }
    .navbar-container .search-input .input {
        width: 0;
        visibility: hidden;
        border: none;
        background: none;
        transition: all 0.2s ease-out;
        line-height: 16px;
        padding: 2.01rem 2.7rem;
        color: #000 !important; }
        .navbar-container .search-input .input::placeholder {
        color: #000 !important; }
    .navbar-container .search-input.open {
        position: absolute;
        left: 0;
        background: #fff;
        right: 0;
        top: 1px;
        width: 100%;
        z-index: 1001;
        margin-top: -1px;
        border-left: 1px solid #E4E5EC; }
        .navbar-container .search-input.open .search-input-close,
        .navbar-container .search-input.open .search-input-icon {
        display: block; }
        .navbar-container .search-input.open input {
        visibility: visible;
        width: 100%;
        outline: none;
        background: none; }
    .navbar-container .search-input .search-list {
        position: absolute !important;
        top: 100%;
        left: 0;
        background: #fff;
        width: 60rem;
        margin-top: 0.8rem;
        padding-left: 0;
        border-radius: 0.25rem;
        display: none; }
        .navbar-container .search-input .search-list.show {
        display: block;
        width: 98%;
        left: 1%;
        box-shadow: -8px 12px 18px 0 rgba(25, 42, 70, 0.13); }
        .navbar-container .search-input .search-list li a {
        padding: 1.2rem 1rem;
        color: #6b6f82; }
        .navbar-container .search-input .search-list li a span[class*="bx bx-"] {
            font-size: 1.25rem; }
        .navbar-container .search-input .search-list li:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
        .navbar-container .search-input .search-list li:last-child {
        border-bottom-left-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem; }
        .navbar-container .search-input .search-list li:hover, .navbar-container .search-input .search-list li.current_item {
        background-color: #f2f4f4; }
    .navbar-container .search-input .search-input-close {
        z-index: 1001;
        display: none;
        position: absolute;
        right: 1rem;
        top: 40%;
        cursor: pointer; }

    .navbar-light .search-input .input,
    .navbar-semi-dark .search-input .input {
    color: #2C303B; }
    .navbar-light .search-input .input::placeholder,
    .navbar-semi-dark .search-input .input::placeholder {
        color: #2C303B; }

    .navbar-light .search-input.open .input,
    .navbar-semi-dark .search-input.open .input {
    color: #2C303B; }

    .navbar-dark .search-input .input,
    .navbar-semi-light .search-input .input {
    color: #F9FAFD; }
    .navbar-dark .search-input .input::placeholder,
    .navbar-semi-light .search-input .input::placeholder {
        color: #F9FAFD; }

    .navbar-dark .search-input.open .input,
    .navbar-semi-light .search-input.open .input {
    color: #F9FAFD; }

    @media only screen and (max-width: 576px) {
    #search-results li.media {
        flex-direction: column; } }

    @media only screen and (max-width: 600px) {
    #search-results .img-fluid.rounded {
        margin-right: 1rem; } }

    .chart-container {
    position: relative;
    width: 100%; }

    @media (max-width: 768px) {
    .chart-container {
        overflow-x: scroll;
        overflow-y: visible;
        max-width: 100%; } }

    .chart {
    position: relative;
    display: block;
    width: 100%; }

    .jqstooltip {
    box-sizing: content-box; }

    [class*="bs-callout"] p {
    letter-spacing: 0.6px; }

    [class*="bs-callout"] .media {
    border-radius: 0.25rem !important; }

    [class*="bs-callout"].callout-bordered {
    border: 1px solid #ddd; }

    [class*="bs-callout"].callout-border-left {
    border-left: 5px solid; }

    [class*="bs-callout"].callout-border-right {
    border-right: 5px solid; }

    [class*="bs-callout"] .callout-arrow-left {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
    [class*="bs-callout"] .callout-arrow-left:before {
        content: "";
        display: inline-block;
        position: absolute;
        top: 50%;
        right: -11%;
        border-left: 8px solid;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        border-left-color: inherit;
        margin-top: -8px; }

    [class*="bs-callout"] .callout-arrow-right {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem; }
    [class*="bs-callout"] .callout-arrow-right:before {
        content: "";
        display: inline-block;
        position: absolute;
        top: 50%;
        left: -11%;
        border-left: 0;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        border-left-color: inherit;
        border-right: 8px solid;
        border-right-color: inherit;
        margin-top: -8px; }

    [class*="bs-callout"].callout-round {
    border-radius: 5rem !important; }
    [class*="bs-callout"].callout-round .media-left {
        border-top-left-radius: 5rem;
        border-bottom-left-radius: 5rem; }
    [class*="bs-callout"].callout-round .media-right {
        border-top-right-radius: 5rem;
        border-bottom-right-radius: 5rem; }

    [class*="bs-callout"].callout-square {
    border-radius: 0 !important; }
    [class*="bs-callout"].callout-square .media, [class*="bs-callout"].callout-square .callout-arrow-left, [class*="bs-callout"].callout-square .callout-arrow-right {
        border-radius: 0 !important; }

    .btn-social, .btn-social-icon {
    position: relative;
    padding-left: 3.95rem;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; }
    .btn-social > :first-child, .btn-social-icon > :first-child {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2.95rem;
        line-height: 2.7rem;
        font-size: 1.6em;
        text-align: center;
        border-right: 1px solid rgba(0, 0, 0, 0.2); }
    .btn-social.btn-lg, .btn-lg.btn-social-icon {
        padding-left: 3.75rem; }
        .btn-social.btn-lg > :first-child, .btn-lg.btn-social-icon > :first-child {
        line-height: 3rem;
        width: 3rem;
        font-size: 1.8em; }
    .btn-social.btn-sm, .btn-sm.btn-social-icon {
        padding-left: 3.75rem;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem; }
        .btn-social.btn-sm > :first-child, .btn-sm.btn-social-icon > :first-child {
        line-height: 2.2rem;
        width: 3rem;
        font-size: 1.4em; }
    .btn-social.btn-xs, .btn-xs.btn-social-icon {
        padding-left: 2.25rem;
        font-size: 0.75rem;
        line-height: 0.2rem; }
        .btn-social.btn-xs > :first-child, .btn-xs.btn-social-icon > :first-child {
        line-height: 2rem;
        width: 1.8rem;
        font-size: 1.2em; }

    .btn-social-icon {
    height: 2.95rem;
    width: 2.95rem;
    padding: 0; }
    .btn-social-icon > :first-child {
        border: none;
        text-align: center;
        width: 100% !important; }
    .btn-social-icon.btn-lg {
        height: 4rem;
        width: 4rem;
        padding-left: 0;
        padding-right: 0; }
    .btn-social-icon.btn-sm {
        height: 2.5rem;
        width: 2.5rem;
        padding-left: 0;
        padding-right: 0; }
    .btn-social-icon.btn-xs {
        height: 2rem;
        width: 2rem;
        padding-left: 0;
        padding-right: 0; }

    .btn-adn {
    background-color: #d87a68;
    color: #fff !important;
    color: #fff;
    background-color: #d87a68;
    border-color: #fff; }
    .btn-adn:hover {
        color: #fff;
        background-color: #d87a68;
        border-color: #d87a68; }
    .btn-adn:focus, .btn-adn.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-adn.disabled, .btn-adn:disabled {
        color: #fff;
        background-color: #d87a68;
        border-color: #fff; }
    .btn-adn:not(:disabled):not(.disabled):active, .btn-adn:not(:disabled):not(.disabled).active,
    .show > .btn-adn.dropdown-toggle {
        color: #fff;
        background-color: #ce563f;
        border-color: #dfdfdf; }
        .btn-adn:not(:disabled):not(.disabled):active:focus, .btn-adn:not(:disabled):not(.disabled).active:focus,
        .show > .btn-adn.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-bitbucket {
    background-color: #205081;
    color: #fff !important;
    color: #fff;
    background-color: #205081;
    border-color: #fff; }
    .btn-bitbucket:hover {
        color: #fff;
        background-color: #205081;
        border-color: #205081; }
    .btn-bitbucket:focus, .btn-bitbucket.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-bitbucket.disabled, .btn-bitbucket:disabled {
        color: #fff;
        background-color: #205081;
        border-color: #fff; }
    .btn-bitbucket:not(:disabled):not(.disabled):active, .btn-bitbucket:not(:disabled):not(.disabled).active,
    .show > .btn-bitbucket.dropdown-toggle {
        color: #fff;
        background-color: #163758;
        border-color: #dfdfdf; }
        .btn-bitbucket:not(:disabled):not(.disabled):active:focus, .btn-bitbucket:not(:disabled):not(.disabled).active:focus,
        .show > .btn-bitbucket.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-dropbox {
    background-color: #1087dd;
    color: #fff !important;
    color: #fff;
    background-color: #1087dd;
    border-color: #fff; }
    .btn-dropbox:hover {
        color: #fff;
        background-color: #1087dd;
        border-color: #1087dd; }
    .btn-dropbox:focus, .btn-dropbox.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-dropbox.disabled, .btn-dropbox:disabled {
        color: #fff;
        background-color: #1087dd;
        border-color: #fff; }
    .btn-dropbox:not(:disabled):not(.disabled):active, .btn-dropbox:not(:disabled):not(.disabled).active,
    .show > .btn-dropbox.dropdown-toggle {
        color: #fff;
        background-color: #0d6aad;
        border-color: #dfdfdf; }
        .btn-dropbox:not(:disabled):not(.disabled):active:focus, .btn-dropbox:not(:disabled):not(.disabled).active:focus,
        .show > .btn-dropbox.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-facebook {
    background-color: #3b5998;
    color: #fff !important;
    color: #fff;
    background-color: #3b5998;
    border-color: #fff; }
    .btn-facebook:hover {
        color: #fff;
        background-color: #3b5998;
        border-color: #3b5998; }
    .btn-facebook:focus, .btn-facebook.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-facebook.disabled, .btn-facebook:disabled {
        color: #fff;
        background-color: #3b5998;
        border-color: #fff; }
    .btn-facebook:not(:disabled):not(.disabled):active, .btn-facebook:not(:disabled):not(.disabled).active,
    .show > .btn-facebook.dropdown-toggle {
        color: #fff;
        background-color: #2d4373;
        border-color: #dfdfdf; }
        .btn-facebook:not(:disabled):not(.disabled):active:focus, .btn-facebook:not(:disabled):not(.disabled).active:focus,
        .show > .btn-facebook.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-flickr {
    background-color: #ff0084;
    color: #fff !important;
    color: #fff;
    background-color: #ff0084;
    border-color: #fff; }
    .btn-flickr:hover {
        color: #fff;
        background-color: #ff0084;
        border-color: #ff0084; }
    .btn-flickr:focus, .btn-flickr.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-flickr.disabled, .btn-flickr:disabled {
        color: #fff;
        background-color: #ff0084;
        border-color: #fff; }
    .btn-flickr:not(:disabled):not(.disabled):active, .btn-flickr:not(:disabled):not(.disabled).active,
    .show > .btn-flickr.dropdown-toggle {
        color: #fff;
        background-color: #cc006a;
        border-color: #dfdfdf; }
        .btn-flickr:not(:disabled):not(.disabled):active:focus, .btn-flickr:not(:disabled):not(.disabled).active:focus,
        .show > .btn-flickr.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-foursquare {
    background-color: #f94877;
    color: #fff !important;
    color: #fff;
    background-color: #f94877;
    border-color: #fff; }
    .btn-foursquare:hover {
        color: #fff;
        background-color: #f94877;
        border-color: #f94877; }
    .btn-foursquare:focus, .btn-foursquare.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-foursquare.disabled, .btn-foursquare:disabled {
        color: #fff;
        background-color: #f94877;
        border-color: #fff; }
    .btn-foursquare:not(:disabled):not(.disabled):active, .btn-foursquare:not(:disabled):not(.disabled).active,
    .show > .btn-foursquare.dropdown-toggle {
        color: #fff;
        background-color: #f71752;
        border-color: #dfdfdf; }
        .btn-foursquare:not(:disabled):not(.disabled):active:focus, .btn-foursquare:not(:disabled):not(.disabled).active:focus,
        .show > .btn-foursquare.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-github {
    background-color: #444444;
    color: #fff !important;
    color: #fff;
    background-color: #444444;
    border-color: #fff; }
    .btn-github:hover {
        color: #fff;
        background-color: #444444;
        border-color: #444444; }
    .btn-github:focus, .btn-github.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-github.disabled, .btn-github:disabled {
        color: #fff;
        background-color: #444444;
        border-color: #fff; }
    .btn-github:not(:disabled):not(.disabled):active, .btn-github:not(:disabled):not(.disabled).active,
    .show > .btn-github.dropdown-toggle {
        color: #fff;
        background-color: #2b2b2b;
        border-color: #dfdfdf; }
        .btn-github:not(:disabled):not(.disabled):active:focus, .btn-github:not(:disabled):not(.disabled).active:focus,
        .show > .btn-github.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-google {
    background-color: #dd4b39;
    color: #fff !important;
    color: #fff;
    background-color: #dd4b39;
    border-color: #fff; }
    .btn-google:hover {
        color: #fff;
        background-color: #dd4b39;
        border-color: #dd4b39; }
    .btn-google:focus, .btn-google.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-google.disabled, .btn-google:disabled {
        color: #fff;
        background-color: #dd4b39;
        border-color: #fff; }
    .btn-google:not(:disabled):not(.disabled):active, .btn-google:not(:disabled):not(.disabled).active,
    .show > .btn-google.dropdown-toggle {
        color: #fff;
        background-color: #c23321;
        border-color: #dfdfdf; }
        .btn-google:not(:disabled):not(.disabled):active:focus, .btn-google:not(:disabled):not(.disabled).active:focus,
        .show > .btn-google.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-instagram {
    background-color: #3f729b;
    color: #fff !important;
    color: #fff;
    background-color: #3f729b;
    border-color: #fff; }
    .btn-instagram:hover {
        color: #fff;
        background-color: #3f729b;
        border-color: #3f729b; }
    .btn-instagram:focus, .btn-instagram.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-instagram.disabled, .btn-instagram:disabled {
        color: #fff;
        background-color: #3f729b;
        border-color: #fff; }
    .btn-instagram:not(:disabled):not(.disabled):active, .btn-instagram:not(:disabled):not(.disabled).active,
    .show > .btn-instagram.dropdown-toggle {
        color: #fff;
        background-color: #305777;
        border-color: #dfdfdf; }
        .btn-instagram:not(:disabled):not(.disabled):active:focus, .btn-instagram:not(:disabled):not(.disabled).active:focus,
        .show > .btn-instagram.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-linkedin {
    background-color: #007bb6;
    color: #fff !important;
    color: #fff;
    background-color: #007bb6;
    border-color: #fff; }
    .btn-linkedin:hover {
        color: #fff;
        background-color: #007bb6;
        border-color: #007bb6; }
    .btn-linkedin:focus, .btn-linkedin.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-linkedin.disabled, .btn-linkedin:disabled {
        color: #fff;
        background-color: #007bb6;
        border-color: #fff; }
    .btn-linkedin:not(:disabled):not(.disabled):active, .btn-linkedin:not(:disabled):not(.disabled).active,
    .show > .btn-linkedin.dropdown-toggle {
        color: #fff;
        background-color: #005983;
        border-color: #dfdfdf; }
        .btn-linkedin:not(:disabled):not(.disabled):active:focus, .btn-linkedin:not(:disabled):not(.disabled).active:focus,
        .show > .btn-linkedin.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-microsoft {
    background-color: #2672ec;
    color: #fff !important;
    color: #fff;
    background-color: #2672ec;
    border-color: #fff; }
    .btn-microsoft:hover {
        color: #fff;
        background-color: #2672ec;
        border-color: #2672ec; }
    .btn-microsoft:focus, .btn-microsoft.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-microsoft.disabled, .btn-microsoft:disabled {
        color: #fff;
        background-color: #2672ec;
        border-color: #fff; }
    .btn-microsoft:not(:disabled):not(.disabled):active, .btn-microsoft:not(:disabled):not(.disabled).active,
    .show > .btn-microsoft.dropdown-toggle {
        color: #fff;
        background-color: #125acd;
        border-color: #dfdfdf; }
        .btn-microsoft:not(:disabled):not(.disabled):active:focus, .btn-microsoft:not(:disabled):not(.disabled).active:focus,
        .show > .btn-microsoft.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-odnoklassniki {
    background-color: #f4731c;
    color: #fff !important;
    color: #fff;
    background-color: #f4731c;
    border-color: #fff; }
    .btn-odnoklassniki:hover {
        color: #fff;
        background-color: #f4731c;
        border-color: #f4731c; }
    .btn-odnoklassniki:focus, .btn-odnoklassniki.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-odnoklassniki.disabled, .btn-odnoklassniki:disabled {
        color: #fff;
        background-color: #f4731c;
        border-color: #fff; }
    .btn-odnoklassniki:not(:disabled):not(.disabled):active, .btn-odnoklassniki:not(:disabled):not(.disabled).active,
    .show > .btn-odnoklassniki.dropdown-toggle {
        color: #fff;
        background-color: #d35b0a;
        border-color: #dfdfdf; }
        .btn-odnoklassniki:not(:disabled):not(.disabled):active:focus, .btn-odnoklassniki:not(:disabled):not(.disabled).active:focus,
        .show > .btn-odnoklassniki.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-openid {
    background-color: #f7931e;
    color: #fff !important;
    color: #2a2e30;
    background-color: #f7931e;
    border-color: #fff; }
    .btn-openid:hover {
        color: #2a2e30;
        background-color: #f7931e;
        border-color: #f7931e; }
    .btn-openid:focus, .btn-openid.focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }
    .btn-openid.disabled, .btn-openid:disabled {
        color: #2a2e30;
        background-color: #f7931e;
        border-color: #fff; }
    .btn-openid:not(:disabled):not(.disabled):active, .btn-openid:not(:disabled):not(.disabled).active,
    .show > .btn-openid.dropdown-toggle {
        color: #fff;
        background-color: #da7908;
        border-color: #dfdfdf; }
        .btn-openid:not(:disabled):not(.disabled):active:focus, .btn-openid:not(:disabled):not(.disabled).active:focus,
        .show > .btn-openid.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }

    .btn-pinterest {
    background-color: #cb2027;
    color: #fff !important;
    color: #fff;
    background-color: #cb2027;
    border-color: #fff; }
    .btn-pinterest:hover {
        color: #fff;
        background-color: #cb2027;
        border-color: #cb2027; }
    .btn-pinterest:focus, .btn-pinterest.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-pinterest.disabled, .btn-pinterest:disabled {
        color: #fff;
        background-color: #cb2027;
        border-color: #fff; }
    .btn-pinterest:not(:disabled):not(.disabled):active, .btn-pinterest:not(:disabled):not(.disabled).active,
    .show > .btn-pinterest.dropdown-toggle {
        color: #fff;
        background-color: #9f191f;
        border-color: #dfdfdf; }
        .btn-pinterest:not(:disabled):not(.disabled):active:focus, .btn-pinterest:not(:disabled):not(.disabled).active:focus,
        .show > .btn-pinterest.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-reddit {
    background-color: #f54504;
    color: #fff !important;
    color: #fff;
    background-color: #f54504;
    border-color: #fff; }
    .btn-reddit:hover {
        color: #fff;
        background-color: #f54504;
        border-color: #f54504; }
    .btn-reddit:focus, .btn-reddit.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-reddit.disabled, .btn-reddit:disabled {
        color: #fff;
        background-color: #f54504;
        border-color: #fff; }
    .btn-reddit:not(:disabled):not(.disabled):active, .btn-reddit:not(:disabled):not(.disabled).active,
    .show > .btn-reddit.dropdown-toggle {
        color: #fff;
        background-color: #c33703;
        border-color: #dfdfdf; }
        .btn-reddit:not(:disabled):not(.disabled):active:focus, .btn-reddit:not(:disabled):not(.disabled).active:focus,
        .show > .btn-reddit.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-soundcloud {
    background-color: #ff5500;
    color: #fff !important;
    color: #fff;
    background-color: #ff5500;
    border-color: #fff; }
    .btn-soundcloud:hover {
        color: #fff;
        background-color: #ff5500;
        border-color: #ff5500; }
    .btn-soundcloud:focus, .btn-soundcloud.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-soundcloud.disabled, .btn-soundcloud:disabled {
        color: #fff;
        background-color: #ff5500;
        border-color: #fff; }
    .btn-soundcloud:not(:disabled):not(.disabled):active, .btn-soundcloud:not(:disabled):not(.disabled).active,
    .show > .btn-soundcloud.dropdown-toggle {
        color: #fff;
        background-color: #cc4400;
        border-color: #dfdfdf; }
        .btn-soundcloud:not(:disabled):not(.disabled):active:focus, .btn-soundcloud:not(:disabled):not(.disabled).active:focus,
        .show > .btn-soundcloud.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-tumblr {
    background-color: #2c4762;
    color: #fff !important;
    color: #fff;
    background-color: #2c4762;
    border-color: #fff; }
    .btn-tumblr:hover {
        color: #fff;
        background-color: #2c4762;
        border-color: #2c4762; }
    .btn-tumblr:focus, .btn-tumblr.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-tumblr.disabled, .btn-tumblr:disabled {
        color: #fff;
        background-color: #2c4762;
        border-color: #fff; }
    .btn-tumblr:not(:disabled):not(.disabled):active, .btn-tumblr:not(:disabled):not(.disabled).active,
    .show > .btn-tumblr.dropdown-toggle {
        color: #fff;
        background-color: #1c2e3f;
        border-color: #dfdfdf; }
        .btn-tumblr:not(:disabled):not(.disabled):active:focus, .btn-tumblr:not(:disabled):not(.disabled).active:focus,
        .show > .btn-tumblr.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-twitter {
    background-color: #55acee;
    color: #fff !important;
    color: #2a2e30;
    background-color: #55acee;
    border-color: #fff; }
    .btn-twitter:hover {
        color: #2a2e30;
        background-color: #55acee;
        border-color: #55acee; }
    .btn-twitter:focus, .btn-twitter.focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }
    .btn-twitter.disabled, .btn-twitter:disabled {
        color: #2a2e30;
        background-color: #55acee;
        border-color: #fff; }
    .btn-twitter:not(:disabled):not(.disabled):active, .btn-twitter:not(:disabled):not(.disabled).active,
    .show > .btn-twitter.dropdown-toggle {
        color: #fff;
        background-color: #2795e9;
        border-color: #dfdfdf; }
        .btn-twitter:not(:disabled):not(.disabled):active:focus, .btn-twitter:not(:disabled):not(.disabled).active:focus,
        .show > .btn-twitter.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }

    .btn-vimeo {
    background-color: #1ab7ea;
    color: #fff !important;
    color: #fff;
    background-color: #1ab7ea;
    border-color: #fff; }
    .btn-vimeo:hover {
        color: #fff;
        background-color: #1ab7ea;
        border-color: #1ab7ea; }
    .btn-vimeo:focus, .btn-vimeo.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-vimeo.disabled, .btn-vimeo:disabled {
        color: #fff;
        background-color: #1ab7ea;
        border-color: #fff; }
    .btn-vimeo:not(:disabled):not(.disabled):active, .btn-vimeo:not(:disabled):not(.disabled).active,
    .show > .btn-vimeo.dropdown-toggle {
        color: #fff;
        background-color: #1295bf;
        border-color: #dfdfdf; }
        .btn-vimeo:not(:disabled):not(.disabled):active:focus, .btn-vimeo:not(:disabled):not(.disabled).active:focus,
        .show > .btn-vimeo.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-vk {
    background-color: #587ea3;
    color: #fff !important;
    color: #fff;
    background-color: #587ea3;
    border-color: #fff; }
    .btn-vk:hover {
        color: #fff;
        background-color: #587ea3;
        border-color: #587ea3; }
    .btn-vk:focus, .btn-vk.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-vk.disabled, .btn-vk:disabled {
        color: #fff;
        background-color: #587ea3;
        border-color: #fff; }
    .btn-vk:not(:disabled):not(.disabled):active, .btn-vk:not(:disabled):not(.disabled).active,
    .show > .btn-vk.dropdown-toggle {
        color: #fff;
        background-color: #466482;
        border-color: #dfdfdf; }
        .btn-vk:not(:disabled):not(.disabled):active:focus, .btn-vk:not(:disabled):not(.disabled).active:focus,
        .show > .btn-vk.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-yahoo {
    background-color: #720e9e;
    color: #fff !important;
    color: #fff;
    background-color: #720e9e;
    border-color: #fff; }
    .btn-yahoo:hover {
        color: #fff;
        background-color: #720e9e;
        border-color: #720e9e; }
    .btn-yahoo:focus, .btn-yahoo.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
    .btn-yahoo.disabled, .btn-yahoo:disabled {
        color: #fff;
        background-color: #720e9e;
        border-color: #fff; }
    .btn-yahoo:not(:disabled):not(.disabled):active, .btn-yahoo:not(:disabled):not(.disabled).active,
    .show > .btn-yahoo.dropdown-toggle {
        color: #fff;
        background-color: #500a6f;
        border-color: #dfdfdf; }
        .btn-yahoo:not(:disabled):not(.disabled):active:focus, .btn-yahoo:not(:disabled):not(.disabled).active:focus,
        .show > .btn-yahoo.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

    .btn-outline-adn {
    border: 1px solid #d87a68 !important;
    color: #d87a68; }

    .btn-outline-bitbucket {
    border: 1px solid #205081 !important;
    color: #205081; }

    .btn-outline-dropbox {
    border: 1px solid #1087dd !important;
    color: #1087dd; }

    .btn-outline-facebook {
    border: 1px solid #3b5998 !important;
    color: #3b5998; }

    .btn-outline-flickr {
    border: 1px solid #ff0084 !important;
    color: #ff0084; }

    .btn-outline-foursquare {
    border: 1px solid #f94877 !important;
    color: #f94877; }

    .btn-outline-github {
    border: 1px solid #444444 !important;
    color: #444444; }

    .btn-outline-google {
    border: 1px solid #dd4b39 !important;
    color: #dd4b39; }

    .btn-outline-instagram {
    border: 1px solid #3f729b !important;
    color: #3f729b; }

    .btn-outline-linkedin {
    border: 1px solid #007bb6 !important;
    color: #007bb6; }

    .btn-outline-microsoft {
    border: 1px solid #2672ec !important;
    color: #2672ec; }

    .btn-outline-odnoklassniki {
    border: 1px solid #f4731c !important;
    color: #f4731c; }

    .btn-outline-openid {
    border: 1px solid #f7931e !important;
    color: #f7931e; }

    .btn-outline-pinterest {
    border: 1px solid #cb2027 !important;
    color: #cb2027; }

    .btn-outline-reddit {
    border: 1px solid #ff4500 !important;
    color: #ff4500; }

    .btn-outline-soundcloud {
    border: 1px solid #ff5500 !important;
    color: #ff5500; }

    .btn-outline-tumblr {
    border: 1px solid #2c4762 !important;
    color: #2c4762; }

    .btn-outline-twitter {
    border: 1px solid #55acee !important;
    color: #55acee; }

    .btn-outline-vimeo {
    border: 1px solid #1ab7ea !important;
    color: #1ab7ea; }

    .btn-outline-vk {
    border: 1px solid #587ea3 !important;
    color: #587ea3; }

    .btn-outline-yahoo {
    border: 1px solid #720e9e !important;
    color: #720e9e; }

    .btn-outline-adn:hover {
    color: #ad412d;
    border: 1px solid #ad412d !important; }

    .btn-outline-bitbucket:hover {
    color: #0c1d2f;
    border: 1px solid #0c1d2f !important; }

    .btn-outline-dropbox:hover {
    color: #094d7e;
    border: 1px solid #094d7e !important; }

    .btn-outline-facebook:hover {
    color: #1e2e4f;
    border: 1px solid #1e2e4f !important; }

    .btn-outline-flickr:hover {
    color: #99004f;
    border: 1px solid #99004f !important; }

    .btn-outline-foursquare:hover {
    color: #d4073d;
    border: 1px solid #d4073d !important; }

    .btn-outline-github:hover {
    color: #111111;
    border: 1px solid #111111 !important; }

    .btn-outline-google:hover {
    color: #96271a;
    border: 1px solid #96271a !important; }

    .btn-outline-instagram:hover {
    color: #223d52;
    border: 1px solid #223d52 !important; }

    .btn-outline-linkedin:hover {
    color: #003650;
    border: 1px solid #003650 !important; }

    .btn-outline-microsoft:hover {
    color: #0e459e;
    border: 1px solid #0e459e !important; }

    .btn-outline-odnoklassniki:hover {
    color: #a24608;
    border: 1px solid #a24608 !important; }

    .btn-outline-openid:hover {
    color: #a95e06;
    border: 1px solid #a95e06 !important; }

    .btn-outline-pinterest:hover {
    color: #731216;
    border: 1px solid #731216 !important; }

    .btn-outline-reddit:hover {
    color: #992900;
    border: 1px solid #992900 !important; }

    .btn-outline-soundcloud:hover {
    color: #993300;
    border: 1px solid #993300 !important; }

    .btn-outline-tumblr:hover {
    color: #0c141c;
    border: 1px solid #0c141c !important; }

    .btn-outline-twitter:hover {
    color: #147bc9;
    border: 1px solid #147bc9 !important; }

    .btn-outline-vimeo:hover {
    color: #0d7091;
    border: 1px solid #0d7091 !important; }

    .btn-outline-vk:hover {
    color: #344b61;
    border: 1px solid #344b61 !important; }

    .btn-outline-yahoo:hover {
    color: #2e0640;
    border: 1px solid #2e0640 !important; }

    .bg-adn {
    background-color: #d87a68; }

    .bg-bitbucket {
    background-color: #205081; }

    .bg-dropbox {
    background-color: #1087dd; }

    .bg-facebook {
    background-color: #3b5998; }

    .bg-flickr {
    background-color: #ff0084; }

    .bg-foursquare {
    background-color: #f94877; }

    .bg-github {
    background-color: #444444; }

    .bg-google {
    background-color: #dd4b39; }

    .bg-instagram {
    background-color: #3f729b; }

    .bg-linkedin {
    background-color: #007bb6; }

    .bg-microsoft {
    background-color: #2672ec; }

    .bg-odnoklassniki {
    background-color: #f4731c; }

    .bg-openid {
    background-color: #f7931e; }

    .bg-pinterest {
    background-color: #cb2027; }

    .bg-reddit {
    background-color: #ff4500; }

    .bg-soundcloud {
    background-color: #ff5500; }

    .bg-tumblr {
    background-color: #2c4762; }

    .bg-twitter {
    background-color: #55acee; }

    .bg-vimeo {
    background-color: #1ab7ea; }

    .bg-vk {
    background-color: #587ea3; }

    .bg-yahoo {
    background-color: #720e9e; }

    .content-head-image .content .content-wrapper .content-header {
    height: 200px;
    padding: 2rem 1rem 0;
    margin: 0 0 3rem;
    position: relative; }
    .content-head-image .content .content-wrapper .content-header::before {
        content: '';
        background-color: #000;
        opacity: 0.3;
        width: 100%;
        height: 200px;
        position: absolute;
        top: 0;
        left: 0; }
    .content-head-image .content .content-wrapper .content-header .content-header-title {
        color: #fff;
        font-size: 2rem; }
    .content-head-image .content .content-wrapper .content-header .breadcrumbs-top {
        position: absolute;
        bottom: 0rem; }
        .content-head-image .content .content-wrapper .content-header .breadcrumbs-top .breadcrumb li a, .content-head-image .content .content-wrapper .content-header .breadcrumbs-top .breadcrumb li::before, .content-head-image .content .content-wrapper .content-header .breadcrumbs-top .breadcrumb li::after {
        color: #fff; }
        .content-head-image .content .content-wrapper .content-header .breadcrumbs-top .breadcrumb li.active {
        color: #fff;
        font-weight: 500; }

    /*=========================================================================================
        File Name: demo.scss
        Description: CSS used for demo purpose only. Remove this css from your project.
        ----------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    .fonticon-container > .fonticon-wrap {
    float: left;
    width: 60px;
    height: 60px;
    line-height: 4.8rem;
    text-align: center;
    border-radius: 0.1875rem;
    margin-right: 1rem;
    margin-bottom: 1.5rem; }
    .fonticon-container > .fonticon-wrap > i {
        font-size: 2.28rem;
        transition: all 0.2s ease-in-out; }
    .fonticon-container > .fonticon-wrap.youtube {
        width: 100px; }

    .fonticon-container:hover i {
    color: #666ee8;
    font-size: 2.9rem;
    transform: scale(1.3); }

    .fonticon-container > .fonticon-classname,
    .fonticon-container > .fonticon-unit {
    display: block;
    font-size: 1.5rem;
    line-height: 1.2; }

    .fonticon-container > .fonticon-unit {
    font-size: 1rem;
    font-style: italic; }

    .scroll-example {
    padding: 0.5rem;
    position: relative;
    border: 2px solid #d1d5ea;
    overflow: auto; }
    .scroll-example .horz-scroll-content {
        width: 1200px; }

    .browser {
    background: #e0e0e0;
    border: 4px solid #e0e0e0;
    width: 100%;
    height: 12rem;
    padding-top: 20px;
    margin: 0 0 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; }

    .browser iframe {
    border: 0;
    background: #fff;
    height: 100%;
    width: 100%; }

    .loader-wrapper {
    height: 8em; }

    .maintenance-icon {
    font-size: 4rem; }

    .animationIcon {
    right: 30px;
    bottom: 10px; }

    .dropdown-demo {
    width: 100%;
    float: none;
    position: static; }

    .popover-demo {
    display: block;
    position: relative;
    margin: 1rem auto;
    padding: 0;
    z-index: 100; }
    .popover-demo .arrow-left-demo {
        left: 50%; }
    .popover-demo .arrow-top-demo {
        top: 50%; }

    .tooltip-top-demo {
    top: -5px;
    left: 50%;
    margin-left: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
    position: absolute;
    border-style: solid; }

    .tooltip-bottom-demo {
    bottom: -5px;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
    position: absolute;
    border-style: solid; }

    .tooltip-left-demo {
    left: -5px;
    top: 50%;
    margin-top: -5px;
    border-width: 5px 5px 5px 0;
    border-right-color: #000;
    position: absolute;
    border-style: solid; }

    .tooltip-right-demo {
    right: -5px;
    top: 50%;
    margin-top: -5px;
    border-width: 5px 0 5px 5px;
    border-left-color: #000;
    position: absolute;
    border-style: solid; }

    /*=========================================================================================
        File Name: customizer.scss
        Description: CSS used for demo purpose only. Remove this css from your project.
        ----------------------------------------------------------------------------------------
        Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        Author: PIXINVENT
        Author URL: http://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    .customizer {
    width: 400px;
    right: -400px;
    padding: 0;
    background-color: #FFF;
    z-index: 1051;
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100vh;
    transition: right 0.4s cubic-bezier(0.05, 0.74, 0.2, 0.99);
    backface-visibility: hidden;
    border-left: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1); }
    .customizer.open {
        right: 0; }
    .customizer .customizer-content {
        position: relative;
        height: 100%; }
        .customizer .customizer-content .custom-control .custom-control-label {
        top: 0; }
    .customizer a.customizer-toggle {
        background: #FFF;
        color: #666ee8;
        display: block;
        border-radius: 15px 0 0 15px; }
    .customizer a.customizer-close {
        color: #000; }
    .customizer .customizer-close {
        position: absolute;
        right: 10px;
        top: 10px;
        padding: 7px;
        width: auto;
        z-index: 10; }
    .customizer .customizer-toggle {
        position: absolute;
        top: 35%;
        width: 54px;
        height: 50px;
        left: -54px;
        text-align: center;
        line-height: 56px;
        cursor: pointer; }
    .customizer .color-options a {
        white-space: pre; }
    .customizer .customizer-sidebar-options .active {
        background-color: #666ee8;
        border-color: #666ee8;
        color: #FFF; }

    .buy-now {
    position: fixed;
    bottom: 5%;
    right: 2%;
    z-index: 1051; }

    #scroll-top {
    width: 40px;
    height: 40px;
    z-index: 99;
    position: fixed;
    bottom: 100px;
    right: 30px;
    display: none;
    cursor: pointer;
    background: url("../../app-assets/images/slider/top.png") no-repeat; }

    .ps-container {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .ps-container {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .ps-container {
        overflow: auto !important; } }
    .ps-container.ps-active-x > .ps-scrollbar-x-rail,
    .ps-container.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transparent; }
    .ps-container.ps-in-scrolling {
        pointer-events: none; }
        .ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: #eee;
        opacity: 0.9; }
        .ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: #999; }
        .ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: #eee;
        opacity: 0.9; }
        .ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: #999; }
    .ps-container > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .ps-container > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: #aaa;
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .ps-container > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 3px;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 8px; }
        .ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: #aaa;
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 8px; }
    .ps-container:hover.ps-in-scrolling {
        pointer-events: none; }
        .ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: #eee;
        opacity: 0.9; }
        .ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: #999; }
        .ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: #eee;
        opacity: 0.9; }
        .ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: #999; }
    .ps-container:hover > .ps-scrollbar-x-rail,
    .ps-container:hover > .ps-scrollbar-y-rail {
        opacity: 0.6; }
    .ps-container:hover > .ps-scrollbar-x-rail:hover {
        background-color: #eee;
        opacity: 0.9; }
        .ps-container:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: #999; }
    .ps-container:hover > .ps-scrollbar-y-rail:hover {
        background-color: #eee;
        opacity: 0.9; }
        .ps-container:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: #999; }

    .ps-theme-dark {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .ps-theme-dark {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .ps-theme-dark {
        overflow: auto !important; } }
    .ps-theme-dark.ps-active-x > .ps-scrollbar-x-rail,
    .ps-theme-dark.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transperant; }
    .ps-theme-dark.ps-in-scrolling {
        pointer-events: none; }
        .ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .ps-theme-dark > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .ps-theme-dark > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .ps-theme-dark > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 6px; }
        .ps-theme-dark > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 6px; }
    .ps-theme-dark:hover.ps-in-scrolling {
        pointer-events: none; }
        .ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .ps-theme-dark:hover > .ps-scrollbar-x-rail,
    .ps-theme-dark:hover > .ps-scrollbar-y-rail {
        opacity: 0.6; }
    .ps-theme-dark:hover > .ps-scrollbar-x-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .ps-theme-dark:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: rgba(0, 0, 0, 0.4); }
    .ps-theme-dark:hover > .ps-scrollbar-y-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .ps-theme-dark:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: rgba(0, 0, 0, 0.4); }

    .ps-theme-light {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .ps-theme-light {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .ps-theme-light {
        overflow: auto !important; } }
    .ps-theme-light.ps-active-x > .ps-scrollbar-x-rail,
    .ps-theme-light.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transperant; }
    .ps-theme-light.ps-in-scrolling {
        pointer-events: none; }
        .ps-theme-light.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(255, 255, 255, 0.2);
        opacity: 0.9; }
        .ps-theme-light.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(255, 255, 255, 0.8); }
        .ps-theme-light.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(255, 255, 255, 0.2);
        opacity: 0.9; }
        .ps-theme-light.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(255, 255, 255, 0.8); }
    .ps-theme-light > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .ps-theme-light > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .ps-theme-light > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 6px; }
        .ps-theme-light > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 6px; }
    .ps-theme-light:hover.ps-in-scrolling {
        pointer-events: none; }
        .ps-theme-light:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(255, 255, 255, 0.2);
        opacity: 0.9; }
        .ps-theme-light:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(255, 255, 255, 0.8); }
        .ps-theme-light:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(255, 255, 255, 0.2);
        opacity: 0.9; }
        .ps-theme-light:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(255, 255, 255, 0.8); }
    .ps-theme-light:hover > .ps-scrollbar-x-rail,
    .ps-theme-light:hover > .ps-scrollbar-y-rail {
        opacity: 0.6; }
    .ps-theme-light:hover > .ps-scrollbar-x-rail:hover {
        background-color: rgba(255, 255, 255, 0.2);
        opacity: 0.9; }
        .ps-theme-light:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: rgba(255, 255, 255, 0.8); }
    .ps-theme-light:hover > .ps-scrollbar-y-rail:hover {
        background-color: rgba(255, 255, 255, 0.2);
        opacity: 0.9; }
        .ps-theme-light:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: rgba(255, 255, 255, 0.8); }

    .menu-collapsed .ps-theme-dark {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .menu-collapsed .ps-theme-dark {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .menu-collapsed .ps-theme-dark {
        overflow: auto !important; } }
    .menu-collapsed .ps-theme-dark.ps-active-x > .ps-scrollbar-x-rail,
    .menu-collapsed .ps-theme-dark.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transparent; }
    .menu-collapsed .ps-theme-dark.ps-in-scrolling {
        pointer-events: none; }
        .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: #eee;
        opacity: 0.9; }
        .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: #999; }
        .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: #eee;
        opacity: 0.9; }
        .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: #999; }
    .menu-collapsed .ps-theme-dark > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .menu-collapsed .ps-theme-dark > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: #55595c !important;
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .menu-collapsed .ps-theme-dark > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 6px; }
        .menu-collapsed .ps-theme-dark > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: #55595c !important;
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 6px; }
    .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling {
        pointer-events: none; }
        .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: #eee;
        opacity: 0.9; }
        .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: #999; }
        .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: #eee;
        opacity: 0.9; }
        .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: #999; }
    .menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-x-rail,
    .menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-y-rail {
        opacity: 0; }
    .menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-x-rail:hover {
        background-color: #eee;
        opacity: 0.9; }
        .menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: #999; }
    .menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-y-rail:hover {
        background-color: #eee;
        opacity: 0.9; }
        .menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: #999; }

    .menu-collapsed ul.ps-theme-dark {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .menu-collapsed ul.ps-theme-dark {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .menu-collapsed ul.ps-theme-dark {
        overflow: auto !important; } }
    .menu-collapsed ul.ps-theme-dark.ps-active-x > .ps-scrollbar-x-rail,
    .menu-collapsed ul.ps-theme-dark.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transperant; }
    .menu-collapsed ul.ps-theme-dark.ps-in-scrolling {
        pointer-events: none; }
        .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .menu-collapsed ul.ps-theme-dark > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .menu-collapsed ul.ps-theme-dark > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .menu-collapsed ul.ps-theme-dark > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 6px; }
        .menu-collapsed ul.ps-theme-dark > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 6px; }
    .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling {
        pointer-events: none; }
        .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-x-rail,
    .menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-y-rail {
        opacity: 0.6; }
    .menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-x-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: rgba(0, 0, 0, 0.4); }
    .menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-y-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: rgba(0, 0, 0, 0.4); }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .vertical-menu-modern.menu-collapsed .ps-theme-dark {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .vertical-menu-modern.menu-collapsed .ps-theme-dark {
        overflow: auto !important; } }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-active-x > .ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transperant; }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling {
        pointer-events: none; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 6px; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 6px; }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling {
        pointer-events: none; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-y-rail {
        opacity: 0.6; }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-x-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: rgba(0, 0, 0, 0.4); }
    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-y-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: rgba(0, 0, 0, 0.4); }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark {
    -ms-touch-action: none;
    touch-action: none;
    overflow: hidden !important;
    -ms-overflow-style: none; }
    @supports (-ms-overflow-style: none) {
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark {
        overflow: auto !important; } }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark {
        overflow: auto !important; } }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-active-x > .ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-active-y > .ps-scrollbar-y-rail {
        display: block;
        background-color: transperant; }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling {
        pointer-events: none; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark > .ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 3px;
        /* there must be 'bottom' for ps-scrollbar-x-rail */
        height: 8px; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark > .ps-scrollbar-x-rail > .ps-scrollbar-x {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        bottom: 0;
        /* there must be 'bottom' for ps-scrollbar-x */
        height: 8px; }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark > .ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        /* please don't change 'position' */
        border-radius: 4px;
        opacity: 0;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y-rail */
        width: 6px; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark > .ps-scrollbar-y-rail > .ps-scrollbar-y {
        position: absolute;
        /* please don't change 'position' */
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        transition: background-color .2s linear;
        right: 0;
        /* there must be 'right' for ps-scrollbar-y */
        width: 6px; }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling {
        pointer-events: none; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
            background-color: rgba(0, 0, 0, 0.4); }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
            background-color: rgba(0, 0, 0, 0.4); }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-y-rail {
        opacity: 0.6; }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-x-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
        background-color: rgba(0, 0, 0, 0.4); }
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-y-rail:hover {
        background-color: rgba(0, 0, 0, 0.1);
        opacity: 0.9; }
        .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
        background-color: rgba(0, 0, 0, 0.4); }

    /* to make scrollbars always visible */
    .always-visible.ps-container > .ps-scrollbar-x-rail,
    .always-visible.ps-container > .ps-scrollbar-y-rail {
    opacity: 0.6; }

    .large-margin.ps-container > .ps-scrollbar-x-rail {
    margin: 0 25%; }

    .large-margin.ps-container > .ps-scrollbar-y-rail {
    margin: 100px 0; }

    @media screen and (min-width: 0px) {
    head {
        font-family: "xs 0px"; }
    body:after {
        content: "xs - min-width: 0px"; } }

    @media screen and (min-width: 544px) {
    head {
        font-family: "sm 544px"; }
    body:after {
        content: "sm - min-width: 544px"; } }

    @media screen and (min-width: 768px) {
    head {
        font-family: "md 768px"; }
    body:after {
        content: "md - min-width: 768px"; } }

    @media screen and (min-width: 992px) {
    head {
        font-family: "lg 992px"; }
    body:after {
        content: "lg - min-width: 992px"; } }

    @media screen and (min-width: 1200px) {
    head {
        font-family: "xl 1200px"; }
    body:after {
        content: "xl - min-width: 1200px"; } }

    head {
    clear: both; }
    head title {
        font-family: "xs 0px, sm 544px, md 768px, lg 992px, xl 1200px"; }

    body:after {
    display: none; }

    *[data-usn-if] {
    display: none; }

    /* ------------------------------------------------------------------------------
    *
    *  # Editor CSS
    *
    *  Summernote, Code Mirror & ACE Editors
    *
    *
    * ---------------------------------------------------------------------------- */
    /* CKEditor Starts */
    #cke_ckeditor-inline {
    max-width: 68%; }

    /* CKEditor Ends */
    /* Summernote Style Starts */
    .note-editor.note-frame {
    border-radius: 0.3rem; }

    .note-popover.popover {
    display: none; }

    .note-toolbar.panel-heading {
    color: #333;
    background-color: #f9f9f9;
    border-bottom: 1px solid #ddd;
    padding: 0.25rem 1rem 0.55rem !important; }

    .note-toolbar button.note-btn {
    background-color: transparent;
    border: 1px solid #ccc;
    padding: 0.5rem 1rem; }

    .note-toolbar .dropdown-toggle::after {
    display: none; }

    /* Summernote Style Ends */
    .content {
    overflow: visible;
    position: relative;
    width: auto;
    margin-left: 0;
    min-height: auto;
    padding: inherit; }

    /* TinyMCE */
    .mce-tinymce-inline {
    max-width: 80% !important; }

    .mce-container-body {
    overflow: auto; }

    /* Code Mirror */
    .CodeMirror {
    border-top: 1px solid black;
    border-bottom: 1px solid black; }
    .CodeMirror .CodeMirror-selected {
        background-color: skyblue !important; }
    .CodeMirror .CodeMirror-selectedtext {
        color: white; }
    .CodeMirror .styled-background {
        background-color: #ff7; }
    .CodeMirror .cm-matchhighlight {
        background-color: lightgreen; }
    .CodeMirror .CodeMirror-selection-highlight-scrollbar {
        background-color: green; }

    #codemirror-tabs + .CodeMirror .cm-tab {
    background: url(../../app-assets/images/icons/img.png);
    background-position: right;
    background-repeat: no-repeat; }

    iframe#preview {
    height: 300px;
    border: 1px solid black;
    width: 100%; }

    /* Ace Editor */
    .ace_editor {
    position: relative;
    overflow: hidden;
    height: 320px; }

    /* Quill Editor */
    .ql-editor h1, .ql-editor h2, .ql-editor h3, .ql-editor h4, .ql-editor h5, .ql-editor h6, .ql-editor, .ql-toolbar {
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-size: 1rem; }

    .group-area {
    margin-bottom: 3rem; }

    .block {
    display: block;
    width: 100%; }

    select[multiple='multiple'] {
    overflow: auto; }

    /* Input with icon */
    .has-icon-left .form-control {
    padding-left: 2.5rem; }

    .form-control-position {
    position: absolute;
    top: 1px;
    right: 0;
    z-index: 2;
    display: block;
    width: 2.5rem;
    height: 2.5rem;
    line-height: 3.2rem;
    text-align: center; }

    select.form-control:not([size]):not([multiple]),
    input.form-control {
    /*--------------------------
            Sizing
            --------------------------*/ }
    select.form-control:not([size]):not([multiple]).input-xl,
    input.form-control.input-xl {
        height: 3.75rem;
        padding: 0.5rem 1rem;
        font-size: 1.5rem;
        line-height: 1.45;
        border-radius: 0.35rem; }
    select.form-control:not([size]):not([multiple]).form-group-xl .form-control,
    input.form-control.form-group-xl .form-control {
        height: 3.75rem;
        padding: 0.5rem 0.5rem;
        font-size: 1.5rem;
        line-height: 1.45;
        border-radius: 0.35rem; }
    select.form-control:not([size]):not([multiple]).form-group-xl .form-control-static,
    input.form-control.form-group-xl .form-control-static {
        height: 3.55rem;
        padding: 0.5rem 0.5rem;
        font-size: 1.5rem;
        line-height: 1.7; }
    select.form-control:not([size]):not([multiple]).input-lg,
    input.form-control.input-lg {
        height: 3rem;
        padding: 0.5rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1.45;
        border-radius: 0.35rem; }
    select.form-control:not([size]):not([multiple]).form-group-lg .form-control,
    input.form-control.form-group-lg .form-control {
        height: 3rem;
        padding: 1rem 1.25rem;
        font-size: 1.25rem;
        line-height: 1.25;
        border-radius: 0.35rem; }
    select.form-control:not([size]):not([multiple]).form-group-lg select.form-control,
    input.form-control.form-group-lg select.form-control {
        height: calc(1.25em + 2rem + 2px);
        line-height: calc(1.25em + 2rem + 2px); }
    select.form-control:not([size]):not([multiple]).form-group-lg textarea.form-control,
    select.form-control:not([size]):not([multiple]).form-group-lg select[multiple].form-control,
    input.form-control.form-group-lg textarea.form-control,
    input.form-control.form-group-lg select[multiple].form-control {
        height: auto; }
    select.form-control:not([size]):not([multiple]).form-group-lg .form-control-static,
    input.form-control.form-group-lg .form-control-static {
        height: calc(1.25em + 2rem + 2px);
        min-height: 2.7rem;
        padding: 2rem 1.25rem;
        font-size: 1.25rem;
        line-height: 1.25; }
    select.form-control:not([size]):not([multiple]).input-sm,
    input.form-control.input-sm {
        height: 2rem;
        padding: 0rem 0.95rem;
        font-size: 0.975rem;
        line-height: 1.45;
        border-radius: 0.21rem; }
    select.form-control:not([size]):not([multiple]).form-group-sm .form-control,
    input.form-control.form-group-sm .form-control {
        /* font-size: $font-size-sm;
                    line-height: $line-height-sm; */
        height: calc(1.875rem + 2px);
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.45;
        border-radius: 0.21rem; }
    select.form-control:not([size]):not([multiple]).form-group-sm .form-control-static,
    input.form-control.form-group-sm .form-control-static {
        font-size: 0.875rem;
        line-height: 1; }
    select.form-control:not([size]):not([multiple]).input-xs,
    input.form-control.input-xs {
        height: 1.525rem;
        padding: 0.1rem 0.525rem;
        font-size: 0.75rem;
        line-height: 1.45;
        border-radius: 0.12rem; }
    select.form-control:not([size]):not([multiple]).form-group-xs .form-control,
    input.form-control.form-group-xs .form-control {
        height: 1.525rem;
        padding: 0.2rem 0.275rem;
        font-size: 0.75rem;
        line-height: 1.45;
        border-radius: 0.12rem; }
    select.form-control:not([size]):not([multiple]).form-group-xs .form-control-static,
    input.form-control.form-group-xs .form-control-static {
        height: 1.525rem;
        padding: 0.2rem 0.275rem;
        font-size: 0.75rem;
        line-height: 1.5; }
    select.form-control:not([size]):not([multiple]).input-xl + .form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-xl > .form-control-position,
    input.form-control.input-xl + .form-control-position,
    input.form-control.form-group-xl > .form-control-position {
        width: 3.55rem;
        height: 3.55rem;
        line-height: 3.55rem;
        top: 4px; }
    select.form-control:not([size]):not([multiple]).input-lg + .form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-lg > .form-control-position,
    input.form-control.input-lg + .form-control-position,
    input.form-control.form-group-lg > .form-control-position {
        width: 3rem;
        height: 3rem;
        line-height: 3rem;
        top: 4px; }
    select.form-control:not([size]):not([multiple]).input-sm + .form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-sm > .form-control-position,
    input.form-control.input-sm + .form-control-position,
    input.form-control.form-group-sm > .form-control-position {
        width: calc(1.875rem + 2px);
        height: calc(1.875rem + 2px);
        line-height: 2rem;
        top: 2px; }
    select.form-control:not([size]):not([multiple]).input-xs + .form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-xs > .form-control-position,
    input.form-control.input-xs + .form-control-position,
    input.form-control.form-group-xs > .form-control-position {
        width: 1.525rem;
        height: 1.525rem;
        line-height: 1.525rem;
        top: 0; }

    /*---------------------------------
    Input Icon
    ---------------------------------*/
    .position-relative .form-control {
    padding-right: calc(1.25em + 1.5rem + 2px); }
    .position-relative .form-control.input-xl {
        padding-right: 3.55rem; }
    .position-relative .form-control.input-lg {
        padding-right: calc(1.25em + 2rem + 2px); }
    .position-relative .form-control.input-sm {
        padding-right: calc(1.875rem + 2px); }
    .position-relative .form-control.input-xs {
        padding-right: 1.525rem; }

    /* Input Icon left */
    .has-icon-left .form-control {
    padding-right: 1rem;
    padding-left: calc(1.25em + 1.5rem + 2px); }
    .has-icon-left .form-control.input-xl {
        padding-right: 0.5rem;
        padding-left: 3.55rem; }
    .has-icon-left .form-control.input-lg {
        padding-right: 1.25rem;
        padding-left: calc(1.25em + 2rem + 2px); }
    .has-icon-left .form-control.input-sm {
        padding-right: 0.75rem;
        padding-left: 1.7rem; }
    .has-icon-left .form-control.input-xs {
        padding-right: 0.275rem;
        padding-left: 1.525rem; }

    .has-icon-left .form-control-position {
    right: auto;
    left: inherit; }

    input[type="color"] {
    height: calc(1.25em + 1.5rem + 2px); }

    input[type="date"].form-control,
    input[type="time"].form-control,
    input[type="datetime-local"].form-control,
    input[type="month"].form-control {
    line-height: 1.45; }

    .font-size-large {
    font-size: 1.25rem; }

    .font-size-base {
    font-size: 1rem; }

    .font-size-small {
    font-size: 0.875rem; }

    .font-size-xsmall {
    font-size: 0.75rem; }

    .form-group-style {
    position: relative;
    border: 1px solid rgba(0, 0, 0, 0.07);
    padding-top: 7px;
    padding-left: 12px;
    padding-right: 12px;
    padding-bottom: 4px;
    overflow: hidden; }
    .form-group-style label {
        margin: 0;
        text-transform: uppercase;
        font-weight: 700; }
    .form-group-style .form-control {
        border: none;
        padding-left: 0;
        margin-top: -4px;
        background: none; }
    .form-group-style.focus {
        background-color: #f0f0f0; }
        .form-group-style.focus label {
        opacity: 0.5; }
    .form-group-style label.filled {
        opacity: 0.5; }

    .input-group-xs .form-control,
    .input-group-xs .input-group-addon,
    .input-group-xs .input-group-btn > button {
    padding: 0.175rem 0.5rem;
    font-size: 0.725rem;
    line-height: 1.677777;
    border-bottom-left-radius: 0.175rem;
    border-top-left-radius: 0.175rem; }

    .input-group-xs .input-group-btn > button {
    border-radius: 0.175rem; }

    /* .input-group-btn > button {
        &.dropdown-toggle::after{
            margin-top: -1.75rem;
        }
    } */
    .input-group-addon {
    padding: 0.75rem; }

    .floating-label-form-group-with-focus label,
    .floating-label-form-group-with-value label {
    color: #666ee8 !important;
    text-transform: uppercase;
    font-weight: 400; }

    .select2-container--classic:focus,
    .select2-container--default:focus {
    outline: none; }

    .select2-container--classic .img-flag,
    .select2-container--default .img-flag {
    height: 15px;
    width: 18px; }

    .select2-container--classic .select2-selection--single,
    .select2-container--default .select2-selection--single {
    height: 40px !important;
    padding: 5px;
    border-color: #D9D9D9 !important; }
    .select2-container--classic .select2-selection--single .select2-selection__rendered i,
    .select2-container--default .select2-selection--single .select2-selection__rendered i {
        margin-right: 0.5rem; }

    .select2-container--classic.select2-container--open .select2-selection--single,
    .select2-container--default.select2-container--open .select2-selection--single {
    border-color: #CCCCCC !important;
    outline: 0; }

    .select2-container--classic.select2-container--focus,
    .select2-container--default.select2-container--focus {
    outline: 0; }
    .select2-container--classic.select2-container--focus .select2-selection--multiple,
    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: #CCCCCC !important;
        outline: 0; }

    .select2-container--classic .select2-selection--multiple,
    .select2-container--default .select2-selection--multiple {
    min-height: 40px !important;
    padding: 5px 8px !important;
    border-color: #D9D9D9 !important; }
    .select2-container--classic .select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        padding: 1px 11px  !important;
        margin-top: 0px !important;
        background-color: #666ee8 !important;
        border-color: transparent !important;
        color: #fff;
        margin-right: 8px !important; }
    .select2-container--classic .select2-selection--multiple .select2-selection__rendered,
    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        display: block !important;
        padding: 0 !important; }
    .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove,
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff !important;
        float: right;
        margin-left: 0.5rem; }
    .select2-container--classic .select2-selection--multiple i,
    .select2-container--default .select2-selection--multiple i {
        position: relative;
        top: 1px;
        margin-right: 0.5rem;
        padding-left: 1px; }
    .select2-container--classic .select2-selection--multiple[class*=bg-] .select2-selection__choice,
    .select2-container--default .select2-selection--multiple[class*=bg-] .select2-selection__choice {
        background-color: rgba(0, 0, 0, 0.15) !important;
        border-color: rgba(0, 0, 0, 0.2) !important; }

    .select2-container--classic .select2-results__options .select2-results__option i,
    .select2-container--default .select2-results__options .select2-results__option i {
    margin-right: 0.5rem; }

    .select2-container--classic .select2-results__options .select2-results__option[aria-selected=true],
    .select2-container--default .select2-results__options .select2-results__option[aria-selected=true] {
    background-color: #666ee8 !important;
    color: #fff !important; }

    .select2-container--classic .select2-results__option--highlighted[aria-selected],
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #E0E0E0 !important;
    color: #424242 !important; }

    .select2-container--classic .select2-result-repository .select2-result-repository__avatar,
    .select2-container--default .select2-result-repository .select2-result-repository__avatar {
    width: 22%;
    float: left; }
    .select2-container--classic .select2-result-repository .select2-result-repository__avatar img,
    .select2-container--default .select2-result-repository .select2-result-repository__avatar img {
        width: 75px; }

    .select2-container--classic .select2-result-repository .select2-result-repository__meta,
    .select2-container--default .select2-result-repository .select2-result-repository__meta {
    width: 78%;
    float: right; }
    .select2-container--classic .select2-result-repository .select2-result-repository__meta .select2-result-repository__title,
    .select2-container--default .select2-result-repository .select2-result-repository__meta .select2-result-repository__title {
        font-size: 1.35rem;
        font-weight: 700;
        text-transform: capitalize; }
    .select2-container--classic .select2-result-repository .select2-result-repository__meta .select2-result-repository__statistics div,
    .select2-container--default .select2-result-repository .select2-result-repository__meta .select2-result-repository__statistics div {
        display: inline;
        margin-right: 1rem; }

    .select2-container--classic .select-lg,
    .select2-container--default .select-lg {
    height: calc(1.25em + 2rem + 2px)0.55 !important;
    font-size: 1.25rem;
    margin-bottom: 0 !important;
    padding: 0.75rem 0; }
    .select2-container--classic .select-lg.select2-selection--single .select2-selection__rendered,
    .select2-container--default .select-lg.select2-selection--single .select2-selection__rendered {
        padding-top: 0.1rem;
        padding-left: 1rem;
        padding-right: 5.5rem;
        line-height: 1; }
    .select2-container--classic .select-lg.select2-selection--single .select2-selection__arrow,
    .select2-container--default .select-lg.select2-selection--single .select2-selection__arrow {
        top: 0.75rem !important; }
    .select2-container--classic .select-lg.select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select-lg.select2-selection--multiple .select2-selection__choice {
        padding: 0.2rem 0.75rem !important;
        font-size: 1.25rem; }
    .select2-container--classic .select-lg.select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--default .select-lg.select2-selection--multiple .select2-search--inline .select2-search__field {
        padding: 0;
        font-size: 1.25rem; }

    .select2-container--classic .select-sm,
    .select2-container--default .select-sm {
    height: calc(calc(1.875rem + 2px) + 0.5rem) !important;
    font-size: 0.875rem;
    padding: 0.35rem 0.2rem;
    margin-bottom: 0 !important; }
    .select2-container--classic .select-sm.select2-selection--single .select2-selection__rendered,
    .select2-container--default .select-sm.select2-selection--single .select2-selection__rendered {
        padding-right: 5.5rem; }
    .select2-container--classic .select-sm.select2-selection--single .select2-selection__arrow,
    .select2-container--default .select-sm.select2-selection--single .select2-selection__arrow {
        top: 0.5rem !important; }
    .select2-container--classic .select-sm.select2-selection--multiple,
    .select2-container--default .select-sm.select2-selection--multiple {
        min-height: calc(calc(1.875rem + 2px) + 0.5rem) !important;
        padding: 0.25rem 0.5rem !important; }
        .select2-container--classic .select-sm.select2-selection--multiple .select2-selection__choice,
        .select2-container--default .select-sm.select2-selection--multiple .select2-selection__choice {
        padding: 0 0.5rem !important;
        font-size: 0.875rem; }
        .select2-container--classic .select-sm.select2-selection--multiple .select2-search--inline .select2-search__field,
        .select2-container--default .select-sm.select2-selection--multiple .select2-search--inline .select2-search__field {
        padding: 0.35rem 0;
        margin-top: 0; }

    .select2-container--classic .select-xs,
    .select2-container--default .select-xs {
    height: calc(calc(1.875rem + 2px)) !important;
    padding: 0 0.2rem;
    font-size: 0.75rem;
    margin-bottom: 0 !important;
    line-height: 1.5; }
    .select2-container--classic .select-xs.select2-selection--single .select2-selection__rendered,
    .select2-container--default .select-xs.select2-selection--single .select2-selection__rendered {
        padding-left: 0.525rem;
        padding-right: 4.55rem; }
    .select2-container--classic .select-xs.select2-selection--single .select2-selection__arrow,
    .select2-container--default .select-xs.select2-selection--single .select2-selection__arrow {
        top: 0.175rem !important; }
    .select2-container--classic .select-xs.select2-selection--multiple,
    .select2-container--default .select-xs.select2-selection--multiple {
        min-height: calc(calc(1.875rem + 2px) + 0.2rem) !important;
        padding: 4px 6px !important; }
        .select2-container--classic .select-xs.select2-selection--multiple .select2-selection__choice,
        .select2-container--default .select-xs.select2-selection--multiple .select2-selection__choice {
        padding: 0 0.4rem !important;
        font-size: 0.75rem; }
        .select2-container--classic .select-xs.select2-selection--multiple .select2-search--inline .select2-search__field,
        .select2-container--default .select-xs.select2-selection--multiple .select2-search--inline .select2-search__field {
        padding: 0;
        font-size: 0.75rem;
        margin-top: 0; }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 6px !important;
    right: 6px !important; }

    .select2-container--classic .select2-selection--single .select2-selection__arrow {
    top: 1px !important;
    right: 2px !important;
    height: 96% !important; }

    table.dataTable, .dataTables_wrapper {
    border-spacing: 0px; }
    table.dataTable thead, table.dataTable.no-footer, .dataTables_wrapper thead, .dataTables_wrapper.no-footer {
        border-bottom: transparent; }
        table.dataTable thead th, table.dataTable.no-footer th, .dataTables_wrapper thead th, .dataTables_wrapper.no-footer th {
        border-bottom: transparent; }
    table.dataTable tfoot th, .dataTables_wrapper tfoot th {
        border-top: transparent; }

    .content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, .content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
    background-color: #666ee8;
    border-radius: 0;
    top: 10px;
    left: 10px;
    box-shadow: 0 0 2px #444; }

    .content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before, .content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
    background-color: #ff4961; }

    @media (max-width: 991.98px) {
    .dataTables_wrapper table {
        display: block;
        width: 100%;
        min-height: .01%;
        overflow-x: auto; } }

    .DTFC_LeftBodyLiner {
    top: -1px !important; }

    div.dataTables_wrapper {
    width: 100%;
    margin: 0 auto; }
    div.dataTables_wrapper div.dataTables_paginate .paginate_button {
        margin-left: 0;
        padding: 0; }
        div.dataTables_wrapper div.dataTables_paginate .paginate_button:hover {
        background: none;
        border: 1px solid transparent; }
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        margin: 10px 0; }
    div.dataTables_wrapper div.dataTables_length select, div.dataTables_wrapper div.dataTables_filter input {
        width: auto;
        display: inline-block; }
    div.dataTables_wrapper div.dataTables_length select {
        background: none; }
    div.dataTables_wrapper div .dataTables_scroll .dataTables_scrollBody > .table {
        margin: 0; }
    div.dataTables_wrapper .top .dataTables_info, div.dataTables_wrapper .top .dataTables_filter, div.dataTables_wrapper .top .dataTables_length, div.dataTables_wrapper .bottom .dataTables_info, div.dataTables_wrapper .bottom .dataTables_filter, div.dataTables_wrapper .bottom .dataTables_length {
        float: none; }

    #multiple .dataTables_wrapper .dataTables_paginate {
    float: none; }
    #multiple .dataTables_wrapper .dataTables_paginate ul.pagination {
        display: block; }

    div.dt-buttons {
    margin-bottom: 1rem; }

    td.highlight {
    font-weight: bold;
    color: #666ee8;
    background-color: whitesmoke !important; }

    tr.group {
    background-color: #ededed !important; }
    tr.group:hover {
        background-color: #ededed !important; }

    th {
    white-space: nowrap; }

    .toolbar {
    float: left; }

    .no-style thead > tr > th, .no-style tfoot > tr > th {
    border-bottom: 1px solid #e3ebf3; }

    table.dataTable.compact tbody td {
    padding: 4px; }

    .table-striped tbody tr.odd.selected, .table-striped tbody tr.even.selected {
    background-color: #666ee8;
    color: #fff; }

    table.dataTable tbody > tr > .selected {
    background-color: #666ee8;
    color: #fff; }

    a.dt-button.red {
    color: red; }

    a.dt-button.orange {
    color: orange; }

    a.dt-button.green {
    color: green; }

    .dataex-css-row tr {
    height: 55px; }

    .dataex-key-customstyling td.focus {
    outline: 1px solid #ac1212;
    outline-offset: -3px;
    background-color: #e3ebf3 !important; }

    .dt-events-log {
    border: 1px solid #888;
    background: #f7f7f7;
    padding: 1em;
    margin-bottom: 1em; }

    .dataTables_wrapper tfoot input {
    width: 100%;
    box-sizing: border-box; }

    td.details-control {
    background: url("../images/datatables/resources/details_open.png") no-repeat center center;
    cursor: pointer; }

    tr.shown td.details-control {
    background: url("../images/datatables/resources/details_close.png") no-repeat center center; }

    .DTFC_LeftBodyLiner, .DTFC_RightBodyLiner {
    background: white; }

    @media screen and (max-width: 600px) {
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        justify-content: center; } }

    @media screen and (max-width: 1200px) and (min-width: 768px) {
    div.dataTables_wrapper div.row:last-child {
        justify-content: space-between; }
    div.dataTables_wrapper div.dataTables_paginate {
        float: right; }
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        justify-content: center; } }

    @media screen and (max-width: 767px) {
    div.dataTables_wrapper div.dataTables_filter#users-contacts_filter {
        text-align: right; }
    div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
        display: block;
        text-align: center; }
        div.dataTables_wrapper div.dataTables_info ul.pagination, div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        justify-content: center !important; } }

    div.table-responsive > div.dataTables_wrapper > div.row {
    margin: 0; }

    .datepaginator .pagination li, .datepaginator-sm .pagination li, .datepaginator-lg .pagination li {
    display: inline-block; }
    .datepaginator .pagination li a, .datepaginator-sm .pagination li a, .datepaginator-lg .pagination li a {
        position: relative;
        float: left;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.6;
        color: #1e9ff2;
        text-decoration: none;
        background-color: #fff;
        border: none; }
        .datepaginator .pagination li a.dp-off, .datepaginator-sm .pagination li a.dp-off, .datepaginator-lg .pagination li a.dp-off {
        background-color: #f5f5f5 !important; }
        .datepaginator .pagination li a.dp-today, .datepaginator-sm .pagination li a.dp-today, .datepaginator-lg .pagination li a.dp-today {
        background-color: #1e9ff2 !important; }
        .datepaginator .pagination li a.dp-selected, .datepaginator-sm .pagination li a.dp-selected, .datepaginator-lg .pagination li a.dp-selected {
        background-color: #1e9ff2 !important; }
        .datepaginator .pagination li a .dp-divider, .datepaginator-sm .pagination li a .dp-divider, .datepaginator-lg .pagination li a .dp-divider {
        border-left: 2px solid #ddd !important; }
        .datepaginator .pagination li a #dp-calendar, .datepaginator-sm .pagination li a #dp-calendar, .datepaginator-lg .pagination li a #dp-calendar {
        padding: 0px 5px 0 0 !important;
        margin-right: 3px;
        position: absolute;
        right: -5px;
        top: 0px;
        font-size: 1.4rem; }

    .pagination.pagination-separate li:first-child a {
    margin-left: 0; }

    .pagination.pagination-separate li a {
    margin-left: 3px; }

    .pagination.pagination-separate.pagination-sm li.active a {
    padding: 0.5rem 0.7rem; }

    .pagination li a.no-border {
    padding: 0.5rem 1rem; }

    .pagination.pagination-round.pagination-flat li.active a {
    border-width: 1px;
    border-radius: 2rem;
    padding: 0.5rem 1rem; }

    .pagination.pagination-round.pagination-flat.pagination-sm li.active a {
    padding: 0.5rem 0.7rem; }

    .pagination.pagination-round li a.page-link:hover.no-border {
    border-width: 1px;
    border-radius: 2rem; }

    .pagination.pagination-round li:first-child a {
    border-top-left-radius: 2rem !important;
    border-bottom-left-radius: 2rem !important;
    padding-left: 1.2rem; }

    .pagination.pagination-round li:last-child a {
    border-top-right-radius: 2rem !important;
    border-bottom-right-radius: 2rem !important;
    padding-right: 1.2rem; }

    .pagination.pagination-round li.active a.no-border, .pagination.pagination-round li.active a.no-border:hover {
    border-width: 1px;
    border-radius: 2rem;
    padding: 0.5rem 1rem; }

    .pagination.pagination-curved li a {
    border-radius: 0.25rem; }

    .pagination.pagination-curved.pagination-sm li.active a {
    padding: 0.5rem 0.7rem; }

    .pagination.pagination-flat li a {
    border: 0;
    border-radius: 0.25rem; }

    .pagination.pagination-flat li.active a {
    border-width: 1px;
    border-radius: 3px;
    padding: 0.5rem 1rem; }

    .pagination.pagination-flat.pagination-sm li.active a {
    padding: 0.5rem 0.7rem; }

</style>

<style>
    .bg-gradient-x-white .card-header,
    .bg-gradient-x-white .card-footer,
    .bg-gradient-y-white .card-header,
    .bg-gradient-y-white .card-footer,
    .bg-gradient-directional-white .card-header,
    .bg-gradient-directional-white .card-footer,
    .bg-gradient-radial-white .card-header,
    .bg-gradient-radial-white .card-footer,
    .bg-gradient-striped-white .card-header,
    .bg-gradient-striped-white .card-footer,
    .bg-gradient-x2-white .card-header,
    .bg-gradient-x2-white .card-footer,
    .bg-gradient-y2-white .card-header,
    .bg-gradient-y2-white .card-footer {
    background-color: transparent; }

    .bg-gradient-x-black .card-header,
    .bg-gradient-x-black .card-footer,
    .bg-gradient-y-black .card-header,
    .bg-gradient-y-black .card-footer,
    .bg-gradient-directional-black .card-header,
    .bg-gradient-directional-black .card-footer,
    .bg-gradient-radial-black .card-header,
    .bg-gradient-radial-black .card-footer,
    .bg-gradient-striped-black .card-header,
    .bg-gradient-striped-black .card-footer,
    .bg-gradient-x2-black .card-header,
    .bg-gradient-x2-black .card-footer,
    .bg-gradient-y2-black .card-header,
    .bg-gradient-y2-black .card-footer {
    background-color: transparent; }

    .bg-gradient-x-primary {
    background-image: linear-gradient(to right, #3a44e1 0%, #9298ef 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-primary {
    background-image: linear-gradient(to bottom, #3a44e1 0%, #9298ef 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-primary {
    background-image: linear-gradient(45deg, #3a44e1, #9298ef);
    background-repeat: repeat-x; }

    .bg-gradient-x2-primary {
    background-image: linear-gradient(to right, #9298ef, #666ee8 50%, #a9adf2);
    background-repeat: no-repeat; }

    .bg-gradient-y2-primary {
    background-image: linear-gradient(#9298ef, #666ee8 50%, #a9adf2);
    background-repeat: no-repeat; }

    .bg-gradient-radial-primary {
    background-image: radial-gradient(circle, #3a44e1, #9298ef);
    background-repeat: no-repeat; }

    .bg-gradient-striped-primary {
    background-image: linear-gradient(45deg, #a9adf2 25%, transparent 25%, transparent 50%, #a9adf2 50%, #a9adf2 75%, transparent 75%, transparent); }

    .bg-gradient-x-primary .card-header,
    .bg-gradient-x-primary .card-footer,
    .bg-gradient-y-primary .card-header,
    .bg-gradient-y-primary .card-footer,
    .bg-gradient-directional-primary .card-header,
    .bg-gradient-directional-primary .card-footer,
    .bg-gradient-radial-primary .card-header,
    .bg-gradient-radial-primary .card-footer,
    .bg-gradient-striped-primary .card-header,
    .bg-gradient-striped-primary .card-footer,
    .bg-gradient-x2-primary .card-header,
    .bg-gradient-x2-primary .card-footer,
    .bg-gradient-y2-primary .card-header,
    .bg-gradient-y2-primary .card-footer {
    background-color: transparent; }

    .bg-gradient-x-secondary {
    background-image: linear-gradient(to right, #545766 0%, #85899b 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-secondary {
    background-image: linear-gradient(to bottom, #545766 0%, #85899b 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-secondary {
    background-image: linear-gradient(45deg, #545766, #85899b);
    background-repeat: repeat-x; }

    .bg-gradient-x2-secondary {
    background-image: linear-gradient(to right, #85899b, #6b6f82 50%, #9397a6);
    background-repeat: no-repeat; }

    .bg-gradient-y2-secondary {
    background-image: linear-gradient(#85899b, #6b6f82 50%, #9397a6);
    background-repeat: no-repeat; }

    .bg-gradient-radial-secondary {
    background-image: radial-gradient(circle, #545766, #85899b);
    background-repeat: no-repeat; }

    .bg-gradient-striped-secondary {
    background-image: linear-gradient(45deg, #9397a6 25%, transparent 25%, transparent 50%, #9397a6 50%, #9397a6 75%, transparent 75%, transparent); }

    .bg-gradient-x-secondary .card-header,
    .bg-gradient-x-secondary .card-footer,
    .bg-gradient-y-secondary .card-header,
    .bg-gradient-y-secondary .card-footer,
    .bg-gradient-directional-secondary .card-header,
    .bg-gradient-directional-secondary .card-footer,
    .bg-gradient-radial-secondary .card-header,
    .bg-gradient-radial-secondary .card-footer,
    .bg-gradient-striped-secondary .card-header,
    .bg-gradient-striped-secondary .card-footer,
    .bg-gradient-x2-secondary .card-header,
    .bg-gradient-x2-secondary .card-footer,
    .bg-gradient-y2-secondary .card-header,
    .bg-gradient-y2-secondary .card-footer {
    background-color: transparent; }

    .bg-gradient-x-success {
    background-image: linear-gradient(to right, #20a576 0%, #4eddaa 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-success {
    background-image: linear-gradient(to bottom, #20a576 0%, #4eddaa 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-success {
    background-image: linear-gradient(45deg, #20a576, #4eddaa);
    background-repeat: repeat-x; }

    .bg-gradient-x2-success {
    background-image: linear-gradient(to right, #4eddaa, #28d094 50%, #63e1b4);
    background-repeat: no-repeat; }

    .bg-gradient-y2-success {
    background-image: linear-gradient(#4eddaa, #28d094 50%, #63e1b4);
    background-repeat: no-repeat; }

    .bg-gradient-radial-success {
    background-image: radial-gradient(circle, #20a576, #4eddaa);
    background-repeat: no-repeat; }

    .bg-gradient-striped-success {
    background-image: linear-gradient(45deg, #63e1b4 25%, transparent 25%, transparent 50%, #63e1b4 50%, #63e1b4 75%, transparent 75%, transparent); }

    .bg-gradient-x-success .card-header,
    .bg-gradient-x-success .card-footer,
    .bg-gradient-y-success .card-header,
    .bg-gradient-y-success .card-footer,
    .bg-gradient-directional-success .card-header,
    .bg-gradient-directional-success .card-footer,
    .bg-gradient-radial-success .card-header,
    .bg-gradient-radial-success .card-footer,
    .bg-gradient-striped-success .card-header,
    .bg-gradient-striped-success .card-footer,
    .bg-gradient-x2-success .card-header,
    .bg-gradient-x2-success .card-footer,
    .bg-gradient-y2-success .card-header,
    .bg-gradient-y2-success .card-footer {
    background-color: transparent; }

    .bg-gradient-x-info {
    background-image: linear-gradient(to right, #0c84d1 0%, #4eb4f5 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-info {
    background-image: linear-gradient(to bottom, #0c84d1 0%, #4eb4f5 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-info {
    background-image: linear-gradient(45deg, #0c84d1, #4eb4f5);
    background-repeat: repeat-x; }

    .bg-gradient-x2-info {
    background-image: linear-gradient(to right, #4eb4f5, #1e9ff2 50%, #66bef6);
    background-repeat: no-repeat; }

    .bg-gradient-y2-info {
    background-image: linear-gradient(#4eb4f5, #1e9ff2 50%, #66bef6);
    background-repeat: no-repeat; }

    .bg-gradient-radial-info {
    background-image: radial-gradient(circle, #0c84d1, #4eb4f5);
    background-repeat: no-repeat; }

    .bg-gradient-striped-info {
    background-image: linear-gradient(45deg, #66bef6 25%, transparent 25%, transparent 50%, #66bef6 50%, #66bef6 75%, transparent 75%, transparent); }

    .bg-gradient-x-info .card-header,
    .bg-gradient-x-info .card-footer,
    .bg-gradient-y-info .card-header,
    .bg-gradient-y-info .card-footer,
    .bg-gradient-directional-info .card-header,
    .bg-gradient-directional-info .card-footer,
    .bg-gradient-radial-info .card-header,
    .bg-gradient-radial-info .card-footer,
    .bg-gradient-striped-info .card-header,
    .bg-gradient-striped-info .card-footer,
    .bg-gradient-x2-info .card-header,
    .bg-gradient-x2-info .card-footer,
    .bg-gradient-y2-info .card-header,
    .bg-gradient-y2-info .card-footer {
    background-color: transparent; }

    .bg-gradient-x-warning {
    background-image: linear-gradient(to right, #ff7216 0%, #ffb07c 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-warning {
    background-image: linear-gradient(to bottom, #ff7216 0%, #ffb07c 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-warning {
    background-image: linear-gradient(45deg, #ff7216, #ffb07c);
    background-repeat: repeat-x; }

    .bg-gradient-x2-warning {
    background-image: linear-gradient(to right, #ffb07c, #ff9149 50%, #ffbf96);
    background-repeat: no-repeat; }

    .bg-gradient-y2-warning {
    background-image: linear-gradient(#ffb07c, #ff9149 50%, #ffbf96);
    background-repeat: no-repeat; }

    .bg-gradient-radial-warning {
    background-image: radial-gradient(circle, #ff7216, #ffb07c);
    background-repeat: no-repeat; }

    .bg-gradient-striped-warning {
    background-image: linear-gradient(45deg, #ffbf96 25%, transparent 25%, transparent 50%, #ffbf96 50%, #ffbf96 75%, transparent 75%, transparent); }

    .bg-gradient-x-warning .card-header,
    .bg-gradient-x-warning .card-footer,
    .bg-gradient-y-warning .card-header,
    .bg-gradient-y-warning .card-footer,
    .bg-gradient-directional-warning .card-header,
    .bg-gradient-directional-warning .card-footer,
    .bg-gradient-radial-warning .card-header,
    .bg-gradient-radial-warning .card-footer,
    .bg-gradient-striped-warning .card-header,
    .bg-gradient-striped-warning .card-footer,
    .bg-gradient-x2-warning .card-header,
    .bg-gradient-x2-warning .card-footer,
    .bg-gradient-y2-warning .card-header,
    .bg-gradient-y2-warning .card-footer {
    background-color: transparent; }

    .bg-gradient-x-danger {
    background-image: linear-gradient(to right, #ff1635 0%, #ff7c8d 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-danger {
    background-image: linear-gradient(to bottom, #ff1635 0%, #ff7c8d 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-danger {
    background-image: linear-gradient(45deg, #ff1635, #ff7c8d);
    background-repeat: repeat-x; }

    .bg-gradient-x2-danger {
    background-image: linear-gradient(to right, #ff7c8d, #ff4961 50%, #ff96a3);
    background-repeat: no-repeat; }

    .bg-gradient-y2-danger {
    background-image: linear-gradient(#ff7c8d, #ff4961 50%, #ff96a3);
    background-repeat: no-repeat; }

    .bg-gradient-radial-danger {
    background-image: radial-gradient(circle, #ff1635, #ff7c8d);
    background-repeat: no-repeat; }

    .bg-gradient-striped-danger {
    background-image: linear-gradient(45deg, #ff96a3 25%, transparent 25%, transparent 50%, #ff96a3 50%, #ff96a3 75%, transparent 75%, transparent); }

    .bg-gradient-x-danger .card-header,
    .bg-gradient-x-danger .card-footer,
    .bg-gradient-y-danger .card-header,
    .bg-gradient-y-danger .card-footer,
    .bg-gradient-directional-danger .card-header,
    .bg-gradient-directional-danger .card-footer,
    .bg-gradient-radial-danger .card-header,
    .bg-gradient-radial-danger .card-footer,
    .bg-gradient-striped-danger .card-header,
    .bg-gradient-striped-danger .card-footer,
    .bg-gradient-x2-danger .card-header,
    .bg-gradient-x2-danger .card-footer,
    .bg-gradient-y2-danger .card-header,
    .bg-gradient-y2-danger .card-footer {
    background-color: transparent; }

    .bg-gradient-x-light .card-header,
    .bg-gradient-x-light .card-footer,
    .bg-gradient-y-light .card-header,
    .bg-gradient-y-light .card-footer,
    .bg-gradient-directional-light .card-header,
    .bg-gradient-directional-light .card-footer,
    .bg-gradient-radial-light .card-header,
    .bg-gradient-radial-light .card-footer,
    .bg-gradient-striped-light .card-header,
    .bg-gradient-striped-light .card-footer,
    .bg-gradient-x2-light .card-header,
    .bg-gradient-x2-light .card-footer,
    .bg-gradient-y2-light .card-header,
    .bg-gradient-y2-light .card-footer {
    background-color: transparent; }

    .bg-gradient-x-dark .card-header,
    .bg-gradient-x-dark .card-footer,
    .bg-gradient-y-dark .card-header,
    .bg-gradient-y-dark .card-footer,
    .bg-gradient-directional-dark .card-header,
    .bg-gradient-directional-dark .card-footer,
    .bg-gradient-radial-dark .card-header,
    .bg-gradient-radial-dark .card-footer,
    .bg-gradient-striped-dark .card-header,
    .bg-gradient-striped-dark .card-footer,
    .bg-gradient-x2-dark .card-header,
    .bg-gradient-x2-dark .card-footer,
    .bg-gradient-y2-dark .card-header,
    .bg-gradient-y2-dark .card-footer {
    background-color: transparent; }

    .bg-gradient-x-red {
    background-image: linear-gradient(to right, #d32f2f 0%, #e57373 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-red {
    background-image: linear-gradient(to bottom, #d32f2f 0%, #e57373 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-red {
    background-image: linear-gradient(45deg, #d32f2f, #e57373);
    background-repeat: repeat-x; }

    .bg-gradient-x2-red {
    background-image: linear-gradient(to right, #e57373, #f44336 50%, #ef9a9a);
    background-repeat: no-repeat; }

    .bg-gradient-y2-red {
    background-image: linear-gradient(#e57373, #f44336 50%, #ef9a9a);
    background-repeat: no-repeat; }

    .bg-gradient-radial-red {
    background-image: radial-gradient(circle, #d32f2f, #e57373);
    background-repeat: no-repeat; }

    .bg-gradient-striped-red {
    background-image: linear-gradient(45deg, #ef9a9a 25%, transparent 25%, transparent 50%, #ef9a9a 50%, #ef9a9a 75%, transparent 75%, transparent); }

    .bg-gradient-x-red .card-header,
    .bg-gradient-x-red .card-footer,
    .bg-gradient-y-red .card-header,
    .bg-gradient-y-red .card-footer,
    .bg-gradient-directional-red .card-header,
    .bg-gradient-directional-red .card-footer,
    .bg-gradient-radial-red .card-header,
    .bg-gradient-radial-red .card-footer,
    .bg-gradient-striped-red .card-header,
    .bg-gradient-striped-red .card-footer,
    .bg-gradient-x2-red .card-header,
    .bg-gradient-x2-red .card-footer,
    .bg-gradient-y2-red .card-header,
    .bg-gradient-y2-red .card-footer {
    background-color: transparent; }

    .bg-gradient-x-pink {
    background-image: linear-gradient(to right, #c2185b 0%, #f06292 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-pink {
    background-image: linear-gradient(to bottom, #c2185b 0%, #f06292 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-pink {
    background-image: linear-gradient(45deg, #c2185b, #f06292);
    background-repeat: repeat-x; }

    .bg-gradient-x2-pink {
    background-image: linear-gradient(to right, #f06292, #e91e63 50%, #f48fb1);
    background-repeat: no-repeat; }

    .bg-gradient-y2-pink {
    background-image: linear-gradient(#f06292, #e91e63 50%, #f48fb1);
    background-repeat: no-repeat; }

    .bg-gradient-radial-pink {
    background-image: radial-gradient(circle, #c2185b, #f06292);
    background-repeat: no-repeat; }

    .bg-gradient-striped-pink {
    background-image: linear-gradient(45deg, #f48fb1 25%, transparent 25%, transparent 50%, #f48fb1 50%, #f48fb1 75%, transparent 75%, transparent); }

    .bg-gradient-x-pink .card-header,
    .bg-gradient-x-pink .card-footer,
    .bg-gradient-y-pink .card-header,
    .bg-gradient-y-pink .card-footer,
    .bg-gradient-directional-pink .card-header,
    .bg-gradient-directional-pink .card-footer,
    .bg-gradient-radial-pink .card-header,
    .bg-gradient-radial-pink .card-footer,
    .bg-gradient-striped-pink .card-header,
    .bg-gradient-striped-pink .card-footer,
    .bg-gradient-x2-pink .card-header,
    .bg-gradient-x2-pink .card-footer,
    .bg-gradient-y2-pink .card-header,
    .bg-gradient-y2-pink .card-footer {
    background-color: transparent; }

    .bg-gradient-x-purple {
    background-image: linear-gradient(to right, #7b1fa2 0%, #ba68c8 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-purple {
    background-image: linear-gradient(to bottom, #7b1fa2 0%, #ba68c8 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-purple {
    background-image: linear-gradient(45deg, #7b1fa2, #ba68c8);
    background-repeat: repeat-x; }

    .bg-gradient-x2-purple {
    background-image: linear-gradient(to right, #ba68c8, #9c27b0 50%, #ce93d8);
    background-repeat: no-repeat; }

    .bg-gradient-y2-purple {
    background-image: linear-gradient(#ba68c8, #9c27b0 50%, #ce93d8);
    background-repeat: no-repeat; }

    .bg-gradient-radial-purple {
    background-image: radial-gradient(circle, #7b1fa2, #ba68c8);
    background-repeat: no-repeat; }

    .bg-gradient-striped-purple {
    background-image: linear-gradient(45deg, #ce93d8 25%, transparent 25%, transparent 50%, #ce93d8 50%, #ce93d8 75%, transparent 75%, transparent); }

    .bg-gradient-x-purple .card-header,
    .bg-gradient-x-purple .card-footer,
    .bg-gradient-y-purple .card-header,
    .bg-gradient-y-purple .card-footer,
    .bg-gradient-directional-purple .card-header,
    .bg-gradient-directional-purple .card-footer,
    .bg-gradient-radial-purple .card-header,
    .bg-gradient-radial-purple .card-footer,
    .bg-gradient-striped-purple .card-header,
    .bg-gradient-striped-purple .card-footer,
    .bg-gradient-x2-purple .card-header,
    .bg-gradient-x2-purple .card-footer,
    .bg-gradient-y2-purple .card-header,
    .bg-gradient-y2-purple .card-footer {
    background-color: transparent; }

    .bg-gradient-x-blue {
    background-image: linear-gradient(to right, #1976d2 0%, #64b5f6 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-blue {
    background-image: linear-gradient(to bottom, #1976d2 0%, #64b5f6 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-blue {
    background-image: linear-gradient(45deg, #1976d2, #64b5f6);
    background-repeat: repeat-x; }

    .bg-gradient-x2-blue {
    background-image: linear-gradient(to right, #64b5f6, #2196f3 50%, #90caf9);
    background-repeat: no-repeat; }

    .bg-gradient-y2-blue {
    background-image: linear-gradient(#64b5f6, #2196f3 50%, #90caf9);
    background-repeat: no-repeat; }

    .bg-gradient-radial-blue {
    background-image: radial-gradient(circle, #1976d2, #64b5f6);
    background-repeat: no-repeat; }

    .bg-gradient-striped-blue {
    background-image: linear-gradient(45deg, #90caf9 25%, transparent 25%, transparent 50%, #90caf9 50%, #90caf9 75%, transparent 75%, transparent); }

    .bg-gradient-x-blue .card-header,
    .bg-gradient-x-blue .card-footer,
    .bg-gradient-y-blue .card-header,
    .bg-gradient-y-blue .card-footer,
    .bg-gradient-directional-blue .card-header,
    .bg-gradient-directional-blue .card-footer,
    .bg-gradient-radial-blue .card-header,
    .bg-gradient-radial-blue .card-footer,
    .bg-gradient-striped-blue .card-header,
    .bg-gradient-striped-blue .card-footer,
    .bg-gradient-x2-blue .card-header,
    .bg-gradient-x2-blue .card-footer,
    .bg-gradient-y2-blue .card-header,
    .bg-gradient-y2-blue .card-footer {
    background-color: transparent; }

    .bg-gradient-x-cyan {
    background-image: linear-gradient(to right, #0097a7 0%, #4dd0e1 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-cyan {
    background-image: linear-gradient(to bottom, #0097a7 0%, #4dd0e1 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-cyan {
    background-image: linear-gradient(45deg, #0097a7, #4dd0e1);
    background-repeat: repeat-x; }

    .bg-gradient-x2-cyan {
    background-image: linear-gradient(to right, #4dd0e1, #00bcd4 50%, #80deea);
    background-repeat: no-repeat; }

    .bg-gradient-y2-cyan {
    background-image: linear-gradient(#4dd0e1, #00bcd4 50%, #80deea);
    background-repeat: no-repeat; }

    .bg-gradient-radial-cyan {
    background-image: radial-gradient(circle, #0097a7, #4dd0e1);
    background-repeat: no-repeat; }

    .bg-gradient-striped-cyan {
    background-image: linear-gradient(45deg, #80deea 25%, transparent 25%, transparent 50%, #80deea 50%, #80deea 75%, transparent 75%, transparent); }

    .bg-gradient-x-cyan .card-header,
    .bg-gradient-x-cyan .card-footer,
    .bg-gradient-y-cyan .card-header,
    .bg-gradient-y-cyan .card-footer,
    .bg-gradient-directional-cyan .card-header,
    .bg-gradient-directional-cyan .card-footer,
    .bg-gradient-radial-cyan .card-header,
    .bg-gradient-radial-cyan .card-footer,
    .bg-gradient-striped-cyan .card-header,
    .bg-gradient-striped-cyan .card-footer,
    .bg-gradient-x2-cyan .card-header,
    .bg-gradient-x2-cyan .card-footer,
    .bg-gradient-y2-cyan .card-header,
    .bg-gradient-y2-cyan .card-footer {
    background-color: transparent; }

    .bg-gradient-x-teal {
    background-image: linear-gradient(to right, #00796b 0%, #4db6ac 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-teal {
    background-image: linear-gradient(to bottom, #00796b 0%, #4db6ac 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-teal {
    background-image: linear-gradient(45deg, #00796b, #4db6ac);
    background-repeat: repeat-x; }

    .bg-gradient-x2-teal {
    background-image: linear-gradient(to right, #4db6ac, #009688 50%, #80cbc4);
    background-repeat: no-repeat; }

    .bg-gradient-y2-teal {
    background-image: linear-gradient(#4db6ac, #009688 50%, #80cbc4);
    background-repeat: no-repeat; }

    .bg-gradient-radial-teal {
    background-image: radial-gradient(circle, #00796b, #4db6ac);
    background-repeat: no-repeat; }

    .bg-gradient-striped-teal {
    background-image: linear-gradient(45deg, #80cbc4 25%, transparent 25%, transparent 50%, #80cbc4 50%, #80cbc4 75%, transparent 75%, transparent); }

    .bg-gradient-x-teal .card-header,
    .bg-gradient-x-teal .card-footer,
    .bg-gradient-y-teal .card-header,
    .bg-gradient-y-teal .card-footer,
    .bg-gradient-directional-teal .card-header,
    .bg-gradient-directional-teal .card-footer,
    .bg-gradient-radial-teal .card-header,
    .bg-gradient-radial-teal .card-footer,
    .bg-gradient-striped-teal .card-header,
    .bg-gradient-striped-teal .card-footer,
    .bg-gradient-x2-teal .card-header,
    .bg-gradient-x2-teal .card-footer,
    .bg-gradient-y2-teal .card-header,
    .bg-gradient-y2-teal .card-footer {
    background-color: transparent; }

    .bg-gradient-x-yellow {
    background-image: linear-gradient(to right, #fbc02d 0%, #fff176 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-yellow {
    background-image: linear-gradient(to bottom, #fbc02d 0%, #fff176 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-yellow {
    background-image: linear-gradient(45deg, #fbc02d, #fff176);
    background-repeat: repeat-x; }

    .bg-gradient-x2-yellow {
    background-image: linear-gradient(to right, #fff176, #ffeb3b 50%, #fff59d);
    background-repeat: no-repeat; }

    .bg-gradient-y2-yellow {
    background-image: linear-gradient(#fff176, #ffeb3b 50%, #fff59d);
    background-repeat: no-repeat; }

    .bg-gradient-radial-yellow {
    background-image: radial-gradient(circle, #fbc02d, #fff176);
    background-repeat: no-repeat; }

    .bg-gradient-striped-yellow {
    background-image: linear-gradient(45deg, #fff59d 25%, transparent 25%, transparent 50%, #fff59d 50%, #fff59d 75%, transparent 75%, transparent); }

    .bg-gradient-x-yellow .card-header,
    .bg-gradient-x-yellow .card-footer,
    .bg-gradient-y-yellow .card-header,
    .bg-gradient-y-yellow .card-footer,
    .bg-gradient-directional-yellow .card-header,
    .bg-gradient-directional-yellow .card-footer,
    .bg-gradient-radial-yellow .card-header,
    .bg-gradient-radial-yellow .card-footer,
    .bg-gradient-striped-yellow .card-header,
    .bg-gradient-striped-yellow .card-footer,
    .bg-gradient-x2-yellow .card-header,
    .bg-gradient-x2-yellow .card-footer,
    .bg-gradient-y2-yellow .card-header,
    .bg-gradient-y2-yellow .card-footer {
    background-color: transparent; }

    .bg-gradient-x-amber {
    background-image: linear-gradient(to right, #ffa000 0%, #ffd54f 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-amber {
    background-image: linear-gradient(to bottom, #ffa000 0%, #ffd54f 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-amber {
    background-image: linear-gradient(45deg, #ffa000, #ffd54f);
    background-repeat: repeat-x; }

    .bg-gradient-x2-amber {
    background-image: linear-gradient(to right, #ffd54f, #ffc107 50%, #ffe082);
    background-repeat: no-repeat; }

    .bg-gradient-y2-amber {
    background-image: linear-gradient(#ffd54f, #ffc107 50%, #ffe082);
    background-repeat: no-repeat; }

    .bg-gradient-radial-amber {
    background-image: radial-gradient(circle, #ffa000, #ffd54f);
    background-repeat: no-repeat; }

    .bg-gradient-striped-amber {
    background-image: linear-gradient(45deg, #ffe082 25%, transparent 25%, transparent 50%, #ffe082 50%, #ffe082 75%, transparent 75%, transparent); }

    .bg-gradient-x-amber .card-header,
    .bg-gradient-x-amber .card-footer,
    .bg-gradient-y-amber .card-header,
    .bg-gradient-y-amber .card-footer,
    .bg-gradient-directional-amber .card-header,
    .bg-gradient-directional-amber .card-footer,
    .bg-gradient-radial-amber .card-header,
    .bg-gradient-radial-amber .card-footer,
    .bg-gradient-striped-amber .card-header,
    .bg-gradient-striped-amber .card-footer,
    .bg-gradient-x2-amber .card-header,
    .bg-gradient-x2-amber .card-footer,
    .bg-gradient-y2-amber .card-header,
    .bg-gradient-y2-amber .card-footer {
    background-color: transparent; }

    .bg-gradient-x-blue-grey {
    background-image: linear-gradient(to right, #455a64 0%, #90a4ae 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-blue-grey {
    background-image: linear-gradient(to bottom, #455a64 0%, #90a4ae 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-blue-grey {
    background-image: linear-gradient(45deg, #455a64, #90a4ae);
    background-repeat: repeat-x; }

    .bg-gradient-x2-blue-grey {
    background-image: linear-gradient(to right, #90a4ae, #607d8b 50%, #b0bec5);
    background-repeat: no-repeat; }

    .bg-gradient-y2-blue-grey {
    background-image: linear-gradient(#90a4ae, #607d8b 50%, #b0bec5);
    background-repeat: no-repeat; }

    .bg-gradient-radial-blue-grey {
    background-image: radial-gradient(circle, #455a64, #90a4ae);
    background-repeat: no-repeat; }

    .bg-gradient-striped-blue-grey {
    background-image: linear-gradient(45deg, #b0bec5 25%, transparent 25%, transparent 50%, #b0bec5 50%, #b0bec5 75%, transparent 75%, transparent); }

    .bg-gradient-x-blue-grey .card-header,
    .bg-gradient-x-blue-grey .card-footer,
    .bg-gradient-y-blue-grey .card-header,
    .bg-gradient-y-blue-grey .card-footer,
    .bg-gradient-directional-blue-grey .card-header,
    .bg-gradient-directional-blue-grey .card-footer,
    .bg-gradient-radial-blue-grey .card-header,
    .bg-gradient-radial-blue-grey .card-footer,
    .bg-gradient-striped-blue-grey .card-header,
    .bg-gradient-striped-blue-grey .card-footer,
    .bg-gradient-x2-blue-grey .card-header,
    .bg-gradient-x2-blue-grey .card-footer,
    .bg-gradient-y2-blue-grey .card-header,
    .bg-gradient-y2-blue-grey .card-footer {
    background-color: transparent; }

    .bg-gradient-x-grey-blue {
    background-image: linear-gradient(to right, #2c303b 0%, #6f85ad 100%);
    background-repeat: repeat-x; }

    .bg-gradient-y-grey-blue {
    background-image: linear-gradient(to bottom, #2c303b 0%, #6f85ad 100%);
    background-repeat: repeat-x; }

    .bg-gradient-directional-grey-blue {
    background-image: linear-gradient(45deg, #2c303b, #6f85ad);
    background-repeat: repeat-x; }

    .bg-gradient-x2-grey-blue {
    background-image: linear-gradient(to right, #6f85ad, #1b2942 50%, #b0bec5);
    background-repeat: no-repeat; }

    .bg-gradient-y2-grey-blue {
    background-image: linear-gradient(#6f85ad, #1b2942 50%, #b0bec5);
    background-repeat: no-repeat; }

    .bg-gradient-radial-grey-blue {
    background-image: radial-gradient(circle, #2c303b, #6f85ad);
    background-repeat: no-repeat; }

    .bg-gradient-striped-grey-blue {
    background-image: linear-gradient(45deg, #b0bec5 25%, transparent 25%, transparent 50%, #b0bec5 50%, #b0bec5 75%, transparent 75%, transparent); }

    .bg-gradient-x-grey-blue .card-header,
    .bg-gradient-x-grey-blue .card-footer,
    .bg-gradient-y-grey-blue .card-header,
    .bg-gradient-y-grey-blue .card-footer,
    .bg-gradient-directional-grey-blue .card-header,
    .bg-gradient-directional-grey-blue .card-footer,
    .bg-gradient-radial-grey-blue .card-header,
    .bg-gradient-radial-grey-blue .card-footer,
    .bg-gradient-striped-grey-blue .card-header,
    .bg-gradient-striped-grey-blue .card-footer,
    .bg-gradient-x2-grey-blue .card-header,
    .bg-gradient-x2-grey-blue .card-footer,
    .bg-gradient-y2-grey-blue .card-header,
    .bg-gradient-y2-grey-blue .card-footer {
    background-color: transparent; }

</style>

<style>
.page_break{
    page-break-after: always;
}
</style>

 <!-- BEGIN: Content--> 
<div class="app-content content" style="background:white; width: 100%; height:100%;">
  <div class="content-wrapper" id="invoice-template">
   
    <?php foreach($order_data as $order): ?>
        <div class="content-body page_break" id="">
            <section class="card">

                <div  class="card-body">
                    <!-- Invoice Company Details -->
                    <style>
                        .left-ul li{
                            line-height: 1.4;
                            font-size: 1rem;
                        }
                    </style>
                    <div style="width:100%" class="clearfix">
                        <table style="width:50%; float:left;">
                            <tr>
                                <td style="width: 20%;">
                                    <img style="width:130px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4EAAAJmCAYAAADinIVCAAAgAElEQVR4nO3cS5JkOXIlUN8FRZoDznoNvUCurDdWPejKYjKZEeZuhod7oThHRIcZ+oGaP4AU8usLAML+7f/85z/+iHQtAAAAPODPDz+PQAAAgGF+9ejzCAQAABjiuw+/7z4C3/n3dseu2QIAAFR46hGVftx5CAIAAPzTjgdU+mHnEQgAAFxv5wMq/bDzCAQAAK6UekClH3YegQAAwDUaHlDph51HIAAAMFrbAyr9sPMIBAAAxkk/njwCAQAAHpZ+MHkEAgAAbJB+KHkEAgAAPCz9OPIIBAAAeFj6QeQRmOll7RYBAADV0o8gj8CO81m7VQAAQJX0w8cj0CMQAADYIP3g8Qj0CAQAAB6WfuR4BHoEAgAAD0s/bNIPl3RdHoEAAMDj0o+ZpgdUuq6Vj6+WOgAAgALpB0w6Jsyl5YzXbiYAALBU+uHSEhPm03LWazcUAAD4WPqx0hgTZtVy7mu3FQAAeEv6gdIeE+bWsgNrNxcAAPi29KPkpJgww5Z9WLvFAADAS+nHyIkxYZYte7F2mwEAgL+VfoCcHhPm2rIjazcbAAD4l/SjY1JMmHHLvqzdcgAAuFz6oTE1Jsy7ZXfWbjwAAFws/ciYHBNm3rI/a7ceAAAuln5kTI4JM2/Zn7VbDwAAF0s/MibHhJm37M/arQcAgIulHxmTY8LMW/Zn7dYDAMDF0o+MyTFh5i37s3brAQDgYulHxuSYMPOW/Vm79QAAcLH0I2NyTJh5y/6s3XoAALhY+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAACOlX5kTI4JM2/Zn7bcAABwrPQjY3JMmHnL/rTlBgCAY6UfGZNjwsxb9qctNwAAHCv9yJgcE2besj9tuQEA4FjpR8bkmDDzlv1pyw0AAMdKPzImx4SZt+xPW24AADhW+pExOSbMvGV/2nIDAMCx0o+MyTFh5i3705YbAADi2i/xN8aEmbfsT1tuAADY6sRL/I0xYeYt+9OWGwAAHjPlEn9jTJh5y/605QYAgCUmX+JvjAkzb9mfttwAAPBjLRfY9CNjckyYecv+tOUGAIDfcom/MybMvGV/2nIDAMC/pC/trZf4G2PCzFv2R24AACqkL+gnXeJvjAkzb9kfuQEA2C59GT/9En9jTJh5y/7IDQDAo9IX752XyHR9k2PCzFv2R24AAJZLX7ZTl8h0fZNjwsxb9kduAACWS1+2U5fIdH2TY8LMW/ZHbgAAlktftlOXyHR9k2PCzFv2R24AAJZLX7ZTl8h0fZNjwsxb9kduAACWS1+2U5fIdH2TY8LMW/ZHbgAAlktftlOXyHR9k2PCzFv2R24AAJZLX7ZTl8h0fZNjwsxb9kduAACWS1+2U5fIdH2TY8LMW/ZHbgAAlktftlOXyHR9k2PCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwCi7Lla749a+G2LCzFv2R+6O3AAAo+y6WO2OW/tuiAkzb9kfuTtyAwCMsutitTtu7bshJsy8ZX/k7sgNADDKrovV7ri174aYMPOW/ZG7IzcAwPF2XaaSYQZ9s0/XtaKH3b3I3ZEbACBm1yVoQphl3+zTda3oYXcvcnfkBgBYatfF5rYw977Zp+ta0cPuXuTuyA0AsNSui81tYe59s0/XtaKH3b3I3ZEbAGCpXReb28Lc+2afrmtFD7t7kbsjNwDAUrsuNreFuffNPl3Xih529yJ3R24AgKV2XWxuC3Pvm326rhU97O5F7o7cAABL7brY3Bbm3jf7dF0retjdi9wduQEAltp1sbktzL1v9um6VvSwuxe5O3IDACy162JzW5h73+zTda3oYXcvcnfkBgBYatfF5rYw977Zp+ta0cPuXuTuyA0AsNSui81tYe59s0/XtaKH3b3I3ZEbAGCpXReb28Lc+2afrmtFD7t7kbsjNwDAUrsuNreFuffNPl3Xih529yJ3R24AgKV2XWxuC3Pvm326rhU97O5F7o7cAABL7brY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LzW1h7n2zT9e1oofdvcjdkXtX/ld7BwAMsetic1uYe9/s03Wt6GF3L3J35N6V/9XeAQBD7LrY3Bbm3jf7dF0retjdi9wduXflf7V3AMAQuy42t4W5980+XdeKHnb3IndH7l35X+0dADDErovNbWHufbNP17Wih929yN2Re1f+V3sHAAyx62JzW5h73+zTda3oYXcvcnfk3pX/1d4BAEPsutjcFubeN/t0XSt62N2L3B25d+V/tXcAwBC7Lja3hbn3zT5d14oedvcid0fuXflf7R0AMMSui81tYe59s0/XtaKH3b3I3ZF7V/5XewcADLHrYnNbmHvf7NN1rehhdy9yd+Telf/V3gEAQ+y62NwW5t43+3RdK3rY3YvcHbl35X+1dwDAELsuNreFuffNPl3Xih529yJ3R+5d+V/tHQAwxK6LTeJC0lx7eraTY8LMW/ZH7o7cu/K/2jsAYIhdF5vTLh9P95Oe9+SYMPOW/ZF7f/7G3ADAMLsuVS4a/11i7rfEhJm37M9tub//C96vYe8AgCFcKjJ2XaRvjAkzb9mf6bm//4vtZx4AwLe5VOXsukzfFhPm3bI703J//9c5l/kAAB9dqtK1T5F+cEyLCXNu2ZnTc3//VwgAcBGXqR7ph8eUmDDfll05Lff3f20AABdzmeqTfoCcHhPm2rIj7bm//6sCAIBy6UfIyTFhpi370ZYbAADGSz9GTowJs2zZi7bcAABwjfSj5KSYMMOWfWjLDQAA10k/Tk6ICbNr2YO23AAAcK30I6U5Jsys5fwTuT/5XQAAcLj//L//+x9PRrq/FdKPlcaYMKuWc9+Z+5Pfwan8jQMArvD0pefWi1T60dIUE2bUct5P5/5k55ul/2ZN/TsHABRLX2ZuvjilHy8NMWE2Lef8VO5PdrxF+m/PzX/nAICQ9KWkOdJn8/V11oNn1wMqXdfKR1Kyjif7apX+m9Ic6bMBAB6QvmBMiOT5pR8zTQ+odF0rH0vJOp7op036b8aESJ8hAPAD6YvDDZE41/SjpuEBla5r5aMpWcfKPlqk/ybcEOkzBgD+KX0pEPsvR+nHTfIBla5r5eMpWcentTdI/+bF/r99AHCt9AdfdFyK0g+c1AMqXdeKHnb38pPcn+zkDunftuj4+wcA46U/6KL7QpR+6Ox+QKXrWtHD7l6+k/uTHXxa+jcsuv8GAsAI6Q+2OPMylH7weASe9Qhsl/6tijP/DgLAMdIfZDHrIpR++HgEegS+K/2bFLP+FgJAnfRHV3TFEzuWfgB5BHoEfkf6tye6Ir2PALBU+sMqzonVu5d+CHkE5s9m7UZ9Lv0bE+dEelcB4MfSH09xdqzex/SDyCMw18vaTXpf+jclzo70/gLAL6U/kmJmrNzR9MPII3B/Lyv356fSvx0xM5I7DQBfX18uOWJfrNzb9APJI/D5Xlbuy0+lfyvinkjuOQCXSX/0xN2xcpfTDyWPwFkPwPRvQ9wdqb0HYLD0x02Iv8bK/U4/mDwCPf6EWBmp3wIAA6Q/YkJ8J1bufPrh5BHo8SfE6kj9PgA4SPpjJcS7seo3kH48eQT2PwDTuy7Eu5H4vQBQKv1REmJlrPpdND6g0g+7pkfgqnP+ifRuC7EyEr8hAMLSHx8hno5Vv5WmB1T6YdfwCFx1rj+R3mUhno7E7wqATdIfGSESser30/CASj/s0o/AVWf5XendFSIRu39nADwg/TERoiVW/aY8Avc/Aled3Xeld1WIltj92wPgQ+kPhxCtseo35hG45xG46ry+I72bQrTGzt8hAD+U/kgIcUqs/N15BD7zCFx5Rt+R3kkhTondv00A/kb6YyDEybHyt+gRuOYRuPJMviO9g0KcHLt/rwDXS//hF2JKrP5tegS+/whcexKvpXdPiCmx+7cLcJX0H3khJsfq36tH4Pfns3byr6V3TYjJsfv3DDBS+o+5EDfFE79hj8Au6R0T4qZI/94BjpP+wy3EzfHEb9ojMCu9U0LcHOnfP0C19B9pIcR/xVO/c4/A/dK7JIT4r0j/PQCokf6DLIT4dTzxm/cI3CO9O0KIX0f67wNARPqPrxDi+/HU3wGPwOekd0YI8f1I/70AeFz6D60Q4r148u+CR+Ba6V0RQrwXyb8bAMul/6gKIdZF8m9J+mHX/ghM74YQYl0k/oYALJX+QyqEWBupvyXph13zIzC9E0KItbH7bwjAcuk/pK1h3uLkeGp/fyf9sGt9BKZ3QdwR9nfGvAGqpP/YNoS5i9Ni976mH3aNj8D0DoizY9ee2tn83AHqpf84t4RzEKfEzr1MP+5aHoDpMxfnxI59tKv95wBwjPQf7KZIn8Vfpech+mL3DqYfev63f6Ipdu3ed6Xn0RTpswA4VvoPeGOkz+TvpGci8rF759KPPg9AkYhdu/YT6Zk0RvpMAEZJ/1FvjPSZ/Ep6LuKefbzh8ff15Td1a+zcsZ9Iz6Ux0mcCMFr6j3x7pM/nd9KzEXN3cPLj7+vLb+eW2L1XP5GeTXukzwfgGuk/+CdE+oxeSc9HzNu9aY+/ry+/k8mR2KefSM/nhEifEcC10h+AkyJ9Vr+Tno2Ys29THn9fX34XEyO1S9+Rns1JkT4rAP4p/UE4LdLn9Up6PuL8PTv58ff15TcwJZI79B3p+ZwW6fMC4G+kPw4nR/rsfic9G3H2bp32+Pv6svOnR3p/fic9m5MjfXYAvJD+UJwe6fP7nfRsxJk7dcrj7+vLjp8a6b35nfRsTo/0+QHwA+mPxpRIn+PvpGcjztul5sff15edPi3S+/I76dlMifQ5AvCm9AdkWqTP81fScxHn7E/j4+/ryw6fEuk9+ZX0XKZF+jwBWCD9MZka6XP9lfRcxJl7k5Q+E3HmzqbnMjXS5wrAYukPy+RIn+3fSc9EnLUvKemzEGftaXomkyN9tgA8KP2RuSHSZ/x30jMRZ+zJbukzEGfsZXomN0T6jAHYIP2xuSnSZ/1X6XmI3t1ISJ+B6N3H9DxuivRZA7BZ+sNzW6TP+6/S8xB9O7FTevaib//S87gt0ucNQFD6I3RrpM/9z9KzuD3S55+QnvntkT7/P0vP4tZInzsAJdIfpJsjffZ/SM/h5kif/U7pWd8c6bP/Q3oON0f67AEolP443R7p8/+z9CxujIDq6HEAAB1MSURBVPSZ75Ce8Y2RPvM/S8/i9kifPwDF0h8p0fWxTs/hpkif9Q7pGd8U6bP+Q3oOomsfACiW/liJvg93eg63RPqcn5Se7S2RPuc/pOcg+nYCgAOkP1qi80OensENkT7jJ6RnekOkz/jryzk3RnonADhU+gMmOj/s6f6nR/p8V0rPcno4X9G4FwAMkP6Yid4Pfbr/yZE+2xXSM5wczla07gYAg6Q/aqL7o5/uf2Kkz3SF9AwnhjMVzfsBwEDpj5vovgCke58YyfP8VHp2E8N5itb9AGC49EdO9F8I0n1Pi9Q5fiI9s2nhHEXrjgBwkfTHTpxxMUj3PiWSZ/iu9MymhDMU7XsCwGXSHz1xziUh3fuESJ7fT6VnNSGcnzhhVwC4VPrjJ865MKT7nhCps/uJ9IwmhLMT7bsCAC4Oh4Z9OS9SZ/YT6RmdHM5MnLAvAPAv6Y+hOO8Ske791Eie2Svp2ZwazkyctDMA8C/pD6I480KR7vvUSJ3X76Rncmo4L3HS3gDA/5D+KIpzLxXp3k+L5Fn9Snomp4WzEifuDgD8rfTHUZx7wUj3fVqkzunvpGdxWjgncdruAMBL6Y+kOPuyke77lEidz99Jz+KUcD7ixP0BgG9LfyzF2ZeOdN+nROp8/iw9g1PC+YgT9wcAfiz90RTnX0DSfbdH6lz+LD2D9nAu4tQdAoC3pD+cYsZFJN13e6TOxdn0nk26bzFjjwDgbemPp5hzIUn33Rqp83AmfWeS7lvM2SUA+Fj6IyrmXEzSfbeGs+iJxFk4j5mR2iUAWCb9MRWzLinpvtvCGeQjcQbOYW6k9gkAlkt/VMWsy0q677Yw+ztm7xzmR2qfAOAx6Y+rmHdxSffdEmY+e+bmf0ekdgoAHpX+wIqZF5h03y1h1rNmbf73RWqvAOBx6Y+smHmJSffdEOY8Z85mf1+k9goAtkl/bMXcC0267+kzT/c4fb5mfmekdgsAtkt/dMXci02676kzT/c2da5mfnekdgsAYtIfXzH7kpPue9qs071Nm6dZi9R+AUBc+iMsZl920n1PmnO6t0mzNGeR2i8AqJH+GIvZF590zxNmnO5pwgzNWCT3CwAqpT/KYv4FKN33yfNN93Ty7MxXNOwYANRKf5zF/MtQuudT55ru6dS5matI7xgA1Et/oMUdl6J0z6fNNd3LafMyV9G0ZwBwhPRHWtxzMUr3fcpM072cMiczFY27BgDHSH+sxT2XpHTPJ8wy3csJM7p9lqJv1wDgSOmPtrjnspTuuX2O6V7a53PzHEXnrgHA0dIfb3HXxSndc+MM0z00zuT2GYrufQOAEdIfcXHXBSrdc9v80j20zePm+Yn+fQOAUdIfc3HXRSrdc9Ps0j00zeLW2Ykz9g0ARkp/1MV9l6p0zw0zS/fQMIPbZibO2zkAGC39cRf3Xa7SPSdnlq7dvojTIrFzAHCF9Ede3HfJSvecmle6dnsiTorEzgHAVdIfe5EPO/f8nNK12w1xSuzeOQC4VvqjL/Jh756dUbp2+yBOiMTeAcDV0h9/kQ9798yM0jXbA3FCJPYOAPhyERP/P+zd2tmka3b2oj127x0A8Bfpy4DoCHu3bi7pmp25aI7dewcA/EL6UiB6wu59Po90zc5YtMbu3QMAviF9QRAdYe/en0e6VmcrGmP33gEAP5S+LIiOsHfvzSJdqzMVbbF77wCAN6UvDaIj7N3P55Cu1VmKpti9dwDAh9KXB9ETt+/dTfV/Kt2r6ImdewcALJS+RIieuHnvbqn9U+leRU/s3DsA4AHpy4ToiZt3b2K9K6X7FT2xe/cAgAelLxaiI27du2m1rpTuV3TE7r0DADZJXzJET9y2d5PqXCXdq+iJnXsHAASkLxuiJ27auyk1rpLuVfTEzr0DAMLSFw/REbfs3IT6VknvnOiInTsHABRJX0JER9yycyfWtVp610RH7Nw5AKBQ+jIiOuKGnTutptXSOyY6YufOAQDl0hcTkY/p+3ZSPauld0vkY+e+AQAHSV9SRD4m79wJdTwhvVMiH7t3DgA4UPrCIu66MDb01VDDE9K7JLKxe98AgAHSFxhxz+Ux2ZeZimmxe9cAgGHSlxlxzyUy1Zd5ikmR2DUAYKj0xUbccZFM9GWWYkKk9gwAuED6oiPmXyh392WO4uRI7hgAcJn0xUfMvlTu7M0cxYmR3i0A4GLpi5CYe6nc1aNZipMivUsAAP+SvhiJmRfKHf2aqTgh0nsDAPBL6YuSmHeRfHIG5us32x7p/QAA+Lb0xUnMukA+NROz/p/SOytm7RMAcKn0ZeqWSJ/z056Yk9l/T3q3b4n0OQMAPCZ90ZoQ6TNMWT07Z/G+9G9gQqTPEAAgIn0Ja4/0+TRaOVPns176N9Me6fMBAKiVvqi5FPZaOW9nt1f6t+Z3DQBwoPTFzkWww4pzcbad0r9ZewAAMIAL3kzJR2C6d37NuQIAwGCJR2C6ZwAAgKvtfASmewUAAODr5w+6d/8bAAAASjz5CEz3BgAAwN944hGY7gkAAIDfWPkITPcCAADAC+/+f/30CAQAADiUByAAAMBlPAABAAAu4wEIAABwGQ9AAACAi3gEAgAAXMYDEAAA4DIegAAAAJfxAAQAALiIRyAAAMBlPAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD4+vr6+vqPf/+3f6yMdD8w3erf7BORnhFns4/vM7PP2DtgpBsvhZN729Ffsref0uM5YTbnzfcpZvQ+M/vcbfNr7Cf1NyAZN/f+1Cx3W9bD/3qwh/ThpA9sWj+39PYOPZ4ZZtM70yekZ3PizP4sPafT5vV30rNLzq+xh/RZJM8/XceEWLWHsb1d/QhMH0jT4U3o4cbefkqf54fZ9MzyCemZnDy/9DxOmtWvpOfUMr/G2tNnkDz3dB1TYtUuRnZ21SMwfQiNh3hy7Q29Jfp6xy29pn+jzTuXrrspVu7cp9KzOHmW6d5PmdPvpOfSNr/GmtOzT553uo4psWoXEztbVUxDLDif7bNZWfPNfb1DrzPDbM7e5fQMTp9put9T5vQ76Vk0zq+x1vTMk+ecrmNSrNrHnftaVUxjnDKfjw9SX2+7qd/073F3mM2Ze5zu/+T5pntrn88NMzxlNo01nRI3975jrk+pqjc97BMO9KRab+7pXfqdH2Zzzh6n+z59vum+TpjRLTM8YT6NNZ0SN/e+Y65Pqak1PehTDvSkWm/u6V239Zz+PabCbPp3ON3z6fNN93TSrG6ZYfuMGms6JW7ufddsV6upMT3gkw7yxJqbetrRz7v0fE+YTf8Op3s+ebbpnk6b100zbJ5TY02nxM2975rtahU1pod72kGeWPNN/Xzixr7Tv8lkmE3v/qb7PXm26X5OnNltM2ydVWNNp8TNve+cb+OO1hTSHIvObdyjaVo/79L3nWE2n89ptXSvJ8813c/Js7ttjo2zaqzplLi5990zbtvPmkJaY9XBpWa2sv6pvXzq1t7Tv810mM3nc1ot3evJM033ZIZnRdu8VtSzuqZT4ubed8+4aT9rCmmORecWm9nK+qf28gm93x1m8/6M7GPPTNP9mOF50TazFfWsrumUuLn3383kqTk37GZNIU8MalWNK+pYXVNDH6lenujjUzf3f0JvU8/k9Pqf0H7WLXU8Vdeq+ptqaZ3jCXXsntmntayuaVU9kzSe90k119TS+Mdkdc0NNbTOdkofn9L/Ob1NO5PT63/CaefbUk/z367Wuk6ptbGmp+r7tJbVNa2qZ5LG895Z8yd1N9RQN5Qn60/lfSL08YzbZ3BiX1PO4/T6V5vwW0vVdMLfq/Ya1Zeva8WcVta0qp5JGs97d93v1F41t/QwVtpd0+rZpeY8oYdPmUHZH6ZAzckzObn2J0w401e97MzVOL/mWptra66xpY4nalpVzySN531C7VVzqypmoR01rZzd6X8gp+zLzXM4tacJ53Fy7U84/Tz/zo6aTvv71Fpva1076vyk1oYanqppVT2TNJ53ovaf1F83s7qCDrJ6iU7+A3nyviRnMHUOp9adOo+Ta3/C6eeZcuJvoe1vals9J9XbUMNTNa2qZ5LG826vv25epx9i0srZJeZ9ev2rpOfQMotT+5lwFifX/oTTzzPl1N9CU92ra9kxx5Z6G2p4qqZV9UzSeN6p+r/TQ+W8Kos6xOoF2j3v0+tfIT2DqbM4te7UWZxc+xNOP8+UU+fW9BtuqiVV87t1p/M/WdOqeiZpPO9kD7/ro3ZWDX84TrV6drvnfXLtq6Rn0DSPU3uZcA4n1/6ECWe628kza6q9qZbT6k7nf7KmVfVM0njerX3Uzmn1H470Ye70xOx2zTpdd8OepPufPI9T606dw8m1P2Hi7+tpp8+rpfZT59hQdzr/kzWtqmeSxvNO9/F3vdTPafUAGg51h6fmtmPG6brT+5HuffpMTqw5eQYn1/6Eqb+xJ50+p5baW+o4UePs2uqZpPG8G3upn9HK5lsP+Ak75vbEbNP1NuzE6j7MZH8fk3by9PpXu+Fv0Gqnz6al9pY6TtQ4u7Z6Jmk870880c8R81nZeFVjD1vV/+4ZNtScPPsn9nfCb+KkHlbWOmn2qfqf8NQZT53j6TNoqb2ljhM1zq6tnkkaz/sTq/+GHjWfdIONC/HKqj53z+vEmld6ak9P3//m+lfW1jb3lf2l6n/CrjOfMt/Te22pvaWOEzXOLv0346lYNZ9PTOvn66tzX65tvHVJ/rCqp52zObHmlZ7cx9N3/anf7SmRmPnq2Sd7WC29D6fN/PS+WmpvqeNEjbNL/314KlbN5xPT+vlD+mxjc0k3Wz+gB+a16t/aVfMTve/05O6dvttP/k5PiN3zfmL2yR6ekN6Jk87h9B5aam+p40SNs0v/LXgqVs3nE9P6+UP6bGNzSTd72sBW1ruj99PqXW3Hrp26y0/M56TYPeunZp/uY7X0Xpx0LifW/FT9E+o4UePs0r/9p2LVfD4xrZ8/S59vbCbppk8a4Ooan+63qdbEgu/YrdN2+MnaT4qdc35y9uk+npDejVN27ZQ6d9Q/oY4TNc4u/Xt/KlbN5xPT+vmra8843fgpQ1xd39O9NtW6e8F37tUp+/tk3SfFzhn/yqRenpDekRN27oQad9U/oY4TNc4u/Vt/KlbN5xPT+vmrq883veAnDPSJup7qc3WtrWfyZP/frfuE3d1R9wmxa7avTOvnCeldad+/5tp21z+hjhM1zi79G38qVs3nE9P6+Tu3nu3X19e8H0/jfFb/m0/VuqP3pyT2qHlvd9R8Quya63dM7OkJ6Z1p3sPWuhL1T6jjRI2zS/++n4pV8/nEtH5+5caz/W/Sy9464Cdqeaq/U+p8QmJ3Wnd2Z83NsWOePzG1r6ek96dxJ9vqSdY/oY4TNc4u/bt+KlbN5xPT+vmV2871l9JL3zbkp2pZ/W821rhr2ZO707izu+ptjh2z/KnJvT0pvUtNe9lWT7L+CXWcqHF26d/1U7FqPp+Y1s/v3HKm35Je/pZhP1XH6n+zscZdC5/cmcad3VlvYzw9w3dN7+9p6b1qOL+mWtL1T6jjRI2zS/+mn4pV8/nEtH5eueFM35L+MaQG/mQNq/7d1vp2LHzDvqTzp2pti6dn96lb+twlvW+JM2ypo6H+CXWcqHF26d/zU7FqPp+Y1s8r089zmfSPY9fQn6xh1b/bWt+OpW/Ylbad3VlrOp6c1Wo39rxbeh+fPsOWOhrqn1DHiRpnl/49PxWr5vOJaf18x9Sz3Cb9w1k5/Kfzr/i3n6ovPftXpu3JiTNLxZMzesrNvael93XVOTbU8ImW2lvqOFHj7NK/5adi1Xw+Ma2f75p4lhVO+yE9nb/5j0x69q+07MjqWp6c2+4aE3vb6ube2z21p6vPsaGGT7TU3lLHiRpn11bPJI3nvcOtfcesHHjbxyLVd0Ntn8x+59zaalpRT0ONqd1tdGvfp3pyd989x4YaPtFSe0sdJ2qcXVs9kzSe9y639h21cuFWHMKO3E/13FDXu3NvnVnT+aTn1nBWT8zoKTf2PEXL/qbzf6ql9pY6TtQ4u7Z6Jmk8711u7bvCysX75BB25F7da1Nd7869cV5t55OeXcuZPTGnJ9zW70Tp3U3n/1RL7afOsaHudP4na1pVzySN573LrX3XaFi+XblX9rqqrtblT8wqFc2zazq31XN6wk29TtWwt+n872qYXWMtp9Wdzv9kTavqmaTxvHe5te8aDcu3K/fKXptqenfuLXNKR/P8ms5u9ZyecFOvk6X3Np3/XU2/+aZaTqu5oYanalpVzySN573LrX3XaFi+nblX9ruiprbl3zmfpmidYTr/k3N6wi19Tpfe2VN/N011N9VyWs0NNTxV06p6Jmk8713G9l1b2F80LN/O3Cv7bannvaln59MWrTNsqOHJWa12Q4/vOqm/9L6e+Jtp/K231bOz1k/qbajhqZpW1TNJ43nvMrLv+gL/pGH5duZe2W9LPe9NPTeb1micY0sdT81qten9feKkPtO7etpvprXe1rra62yp44maVtUzSeN57zKu72MK/er5n9Ltzr2673QtP5t2bi4nRNscm2p5au9WmtzbJ07qt2FPT/rNNNfaXFtzjS11PFHTqnomaTzvXUb1fVLRTX/0dud+ovdkLT+bdmYmp0TbLJtqeWJWq03u7V0n9d60oyf8dtprVF++rhVzWlnTqnomaTzvXUb1fUIDU//gtczhp7WkZ79jHqdF0yzbz3ZFfStN7etdp8yhcT+b/9a01nVKrY01PVXfp7WsrmlVPZM0nvcuY/pu/EPyZG0ra03kb5lDevZPzuLUaJrnp7U8UdNTNa4wsad3tZ/3bb/lT2rdWcfq/W+pu6WO3TP7tJbVNa2qZ5LG895lRN87/7i0Rnp+Led2Su9Pz+H0aJnnp2f7VF1P1vmJaf18Iv0baggzzO9+up8T59dWz+qaTolVs9s52101r3J83+klbYiGGTac3Um9PzWDKdEy00/qeLKup2t916RePpH+/TSEWfbsfrqn02Y3vaZTYtXsds52V82rHN93ekkbomGGDWd3Uu9PzWBSNMz0k7N9urana33HpF7elf7dtIR5du19ureT5je9plNi1ex2znZXzasc3Xd6QRuiZY7pM7y599X70NJPQx0r5/NEfU3nv7K3dB/vevJsTwpzzc/sthm2zqqxplNi1ex2znZXzasc23d6ORuiaZbpc7y599X70NLPuz2l8++usWkPJvTwiSfP9ZQw256Z3TLD5jk11nRKrJrdztnuqnmVo/tOL+iUH0e6nmT+VO72nXhXQ0/p/LtrbNqF0+v/1NPn2h7m2zez6TNsn1FjTafEqtntnO2umlc5vu/0kk74YTTWtEuq9/adeFfDvp8y15P+RuzuKVX/Ck+ea3OYb+/Mps7whPk01nRKrJrdztnuqnmVMX2nl/XkH0VrXTskej9lL96V7u2kuZ72t2JXP4naV3vybNvCbPtnNm2Gp8ymsaZTYtXsds52V82rjOs7vbQn/iCaa3taovdT9uJd6d0/bbYn/s14upfddT/pyfNNh9meN7O/Ss+jcX6N9abnPvWsV892V82rjO07vbwnLdUJNT5ld+8n7sc7kj2eNtvT/3480cvOmnd5+px3R3qef5aexYkz+7P0XNrm11hzevbOu6vmVa7oO73I7UM9qdbVdvd+6o78VPL3cOJ8/S05Y69Xefq8J+zSO9KzOXFmf5aeU8v8GmtPn8Hkcz+x5lWu6zu91I2DPLXuFXb2PmVfvivV66nznfB35bR6Gzx57reeR3peJ87sr26eX2Mf6fOYvAMn1rzKrX3/yy1L/jtT+njHzt4n7s7vJPs9dcan/505rd5WT+3BjfM3t8/dNr/GntJ/ExKxanY7Z7ur5lVu7ftbTl1oAOY5+aLVxNw+Z4YAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFzgP/793/7xbqRr/7NP+tgRE3p+ooen+51WS9MM3nXq/v2d9N+VU+Y1pQ8AONbUi0f6wpWYS7qn3WfeUltyTi0z+KmT9+530r+9xvlM7QsAjnPDJSR94UrMIt3T7vNuqStZQ0P/T9Z6Un87ezxhLrf0CQD10peQnR/qdH+J/tM9Jc46XU96Jun+n6qxfe/aem2aR7rP5PkDQJ30B3n3RzrdW6L3dE+Js07Xc2L+Vbmfqu+EvWvtNz2LdI8NOwAANdIf4cTHOd1bovd0T6nzTtaSnkM6/+raTtq75p4Tc0j313D+AFAj/QFOfZzTvSV6T/d0Ut+pvKtnkM6/sq7T9u6EvnfNIN1b+twBoE76I5z6OKf7S/Sf7um0vhN5V/TbVsOKmk7dvVN6f7L/dF/pMweAOukPsMvY3hmkezqt9935nui9oYYVNZ28e7f3nu4rddYAUGvHh7T145y+gLiM7e1/dy0n9/1EHZ/Uc/rundJ/a79P5HiiVwA4Quqy0PJxvvHS0HbWu2e9q5amvlvq+KSen9a2I8eu/p+sZYfUGUyeKQB8pOFylPw4p3tPaLuM7Z71rgvp6T0/Vcu79bxb085cT9X0ZC07NMx/2kwB4CMNH+ekG3tPnHnbnj1dT9vDo6mWd+v5pKbTz+OpOnZpmj0A8NV3Odrtxr4T5922Y0/v/YR+J9XT9neupY5dmmYPAHzl/m8CW+h5T9+N+/VkTW39NtWT+ntz8gyeqmOX1JkDAL/x7gd6wof6pl7/sPuMW/fqqbqm9DqtlpNn8FQdu7z7W5vSPwBU+vQDffJHe2pfv7PzPNt36Im6GnttqqmplpTb+r/5GwMAtZ74QJ/y4d7Ze8ts0n02zWN1Xbf0OaWWlPRvKzHbaf0AwAg3XELa+p5+GTthFu/OY8e/1drjpFpS0r+v2/7u7OoRAI6TvoikPtbpfm+7jLXN4t15PPnvNPc4rZaU9O/rpN/ayf0CwBHSH+fEhzrd5+09t1zSVtTZ3GtTbU21pKR/Y6nZpnudvFMA8JH0h3n3RzrdY+JSku6zYQYrZrLyv2/vb2otKenfWXq26Z7T/QNArfSHedcHOt1f4jKS7jPd/8q5rPhv23ubXEtK+rfWMNt03w0zAIBa6Y/z0x/odG+Ji0i6z9ZL2Lt1n9BzU31NtaSkf29Ns0333zIHAKg18QOdvngkLiHpPpsvXlP7bqqxqZaU9O+udbbmAAAHOfkDnb6AJS4h6T6bL1xT+2+qsamWlPTv77TZmgUAHKb949xSx06r5t94nitMvGg21dlUS8rt/a90+m8TAK7Q9nFuqWOnlfOfeOFaeals6bupztTcTp7BU3VMdNpvEwCu0vJxbqljp5WXoxMfRK982lNjv221JuppmkFLHZM1nTcA8E8tH+eWOnZafTk69WH0O5/21NZrW62762k7r5Y6Jms6bwCoNfkCuLKWp+rY6Yn5n/o4+pVP+2nrsa3enTNsPK+mWnZqnvGkOQPAt+z+KDZ9nFvq2Omp+b972W6d6yf9tPXYVu+uObaeV1Mtu+zsr/HMAaDKzg9k44WspY6dnpx/4xm/65Ne2nprq/npmbafV1s9T9vVa/u5A0CNpy65Ky/QT36cV9d5Qt9P19HW7yeaz/HpPhprOvl3d2vvT9XV3jcA1EpfNho+zuneEr0/XUdjz+9qPcOfaqw7/dtKnle6x139p3tpO3cAiEt/cFs+zuneEr3vqKOx73dN6KW17vTvK3VW6T53zSDdS9u5A0Bc+qPb8nFO95fof1cdjb2/49Yemms75bfW3vOTc0j30XjuAFAh/fFt+Dine0zMYGcdbb2/6/Qe2muf+Dtr7nfXLNK9tJ07AFRJf4iTH+Z0r4lZ7K6jrf93nFz719c59U/5jTX2edrfnBP7BIBj3fZRTl9ETrmQ7c6X3ou/c2rdX1/nPALfrfWk/nb22DiX6f0BwPFu+CCnLySJ+STqaJzDT51W75/dMPNTevr66v67M3EWu3sCXvt/M3K/1jl8s1kAAAAASUVORK5CYII="     alt="Smart Society Services">
                                </td>
                                <td>
                                    <ul class="ml-2 px-0 list-unstyled left-ul">
                                        <li class="text-bold-800" style="font-size: 1.5rem;color: #a73737;">Smart Society Services</li>
                                        
                                        <li>Seller : <?=$order['shop_name']?>,</li>
                                        <?php if(!empty($order['seller_name'])):?>
                                        <li><?=$order['shop_name']?>,</li>
                                        <?php endif;?>
                                        <li>Mobile No : +91-<?=$order['phone']?>,</li>
                                        <li>Pincode : <?=$order['pin']?> </li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <table style="width:50%; float:right;">
                            <tr>
                                <td><h2 class="text-right">INVOICE</h2></td>
                            </tr>
                            <tr>
                                <td><p class="pb-sm-3 text-right"># INV-000<?=$order_id?></p></td>

                            </tr>
                        </table>
                    </div>
                <br>
                    
                    <b><p class="" style="color:#a73737;">Bill To</p></b>
                    

                    <div style="width:100%" class="clearfix">
                        <div style="width:50%; float:left">
                            <ul class="px-0 list-unstyled">
                                <li class="text-bold-800">Mr/Mrs. <?=$buyer_details['name']?></li>
                                <li><?=$buyer_details['address']?>,</li>
                                <li>Pin : <?=$buyer_details['pin']?>,</li>
                                <li>+91 - <?=$buyer_details['phone']?>.</li>
                            </ul>
                        </div>

                        <div style="width:50%; float:right">
                        
                            <p class="text-right"><span class="text-muted">Invoice Date :</span> <?=date_format(date_create($order_totals['create_date']),"d M Y, D H:i:s");?></p>
                            <p class="text-right"><span class="text-muted">Payment :</span> Cash/UPI payment on Delivery</p>
                        
                        </div>
                        
                    </div>

                    <!-- Invoice Items Details -->
                    <div id="invoice-items-details" class="pt-2">
                        <div class="row">
                            <div class="table-responsive col-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Details</th>
                                            <th>UOM</th>
                                            <th>Quantity</th>
                                            <th>Price(Excl. TAX)</th>
                                            <th>Discount</th>
                                            <th>Total(Inc. TAX)</th>
                                            <th>MRP</th>
                                            <th class="text-right">Tax(%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $order_item_count = 0; ?>
                                    <?php $sub_total = 0; ?>
                                    <?php $tax_total = 0; ?>
                                    <?php $total = 0; ?>

                                    <?php foreach($order['items'] as $order_item):?>

                                        <tr class="group"><td colspan="9"><h6 class="mb-0">Category - <span class="text-bold-600"><?=$order_item[0]['category_name']?></span></h6></td></tr>
                                        <?php foreach($order_item as $data) : ?>
                                            <?php $order_item_count += 1;?>

                                            <tr>
                                                <td scope="row"><?=$order_item_count?></td>

                                                <td>
                                                    <p><?=$data['name']?></p>
                                                    <p class="text-muted"><?=$data['description']?>
                                                    </p>
                                                </td>

                                                <td class="text-center"><?=$data['pieces']?></td>

                                                <td class="text-center"><?=$data['quantity']?></td>

                                                <td class="text-center">₹<?=$data['price']?></td>
                                                <?php $sub_total += doubleval($data['price']);?>


                                                <td class="text-center">₹0</td>

                                                <td class="text-center">₹<?=$data['line_item_price']?></td>
                                                <?php $total += doubleval($data['line_item_price']);?>

                                                
                                                <td class="text-center">₹<?=$data['mrp']?></td>

                                                <td class="text-center"><?=$data['tax_percentage']?>%</td>
                                                <?php $tax_total += doubleval($data['line_tax']);?>


                                            </tr>
                                        <?php endforeach;?>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br>

                        <div class="clearfix" style="width:100%">
                            <div style="width:50%; float:left"> 
                                <div class="text-center text-sm-left">
                                    <b><h6 style="font-size: 1.2rem;color: #a73737;">Terms &amp; Condition</h6></b>
                                    <p style="padding-right: 10rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus aliquid nesciunt ratione esse repudiandae tempora laudantium iste blanditiis quasi, officia incidunt ab error. Accusantium, doloribus ducimus mollitia voluptate dicta magni!</p>
                                </div>
                            </div>
                            <div style="width:50%; float:right"> 
                                
                                <p class="lead">Total due</p>
                                <div class="table-responsive">
                                        <style>
                                            .tb-total th, .tb-total td {
                                                padding: 0.75rem 2rem;
                                            }
                                        </style>
                                        <table class="tb-total" style="width: 100%; margin-bottom: 1rem; color: #6b6f82;">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-right">₹<?=$sub_total?></td>
                                                </tr>
                                                <tr>
                                                    <td>TAX</td>
                                                    <td class="text-right">₹<?=$tax_total?></td>
                                                </tr>
                                                <tr>
                                                    <td>Discount</td>
                                                    <td class="text-right">₹0</td>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Charges</td>
                                                    <td class="text-right">₹0</td>
                                                </tr>
                                                <tr class="group" style="color:#a73737;">
                                                    <td class="text-bold-800"><b>Total</b></td>
                                                    <td class="text-bold-800 text-right"><b>₹<?=$total?></b></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- END: Content-->
