var genesisMenuParams="undefined"==typeof genesis_responsive_menu?"":genesis_responsive_menu,genesisMenusUnchecked=genesisMenuParams.menuClasses,genesisMenus={},menusToCombine=[];!function(e,n,s){"use strict";n.each(genesisMenusUnchecked,function(e){genesisMenus[e]=[],n.each(this,function(s,i){var a=i,u=n(i);u.length>1?n.each(u,function(s,i){var u=a+"-"+s;n(this).addClass(u.replace(".","")),genesisMenus[e].push(u),"combine"===e&&menusToCombine.push(u)}):1==u.length&&(genesisMenus[e].push(a),"combine"===e&&menusToCombine.push(a))})}),void 0===genesisMenus.others&&(genesisMenus.others=[]),1==menusToCombine.length&&(genesisMenus.others.push(menusToCombine[0]),genesisMenus.combine=null,menusToCombine=null);var i={},a="menu-toggle",u="sub-menu-toggle",t="genesis-responsive-menu";function o(){var e=n('button[id^="genesis-mobile-"]').attr("id");void 0!==e&&(function(e){if("none"!==c(e))return!0;n("."+a+", ."+t+" .sub-menu-toggle").removeClass("activated").attr("aria-expanded",!1).attr("aria-pressed",!1),n("."+t+", "+t+" .sub-menu").attr("style","")}(e),function(e){var s=n("."+t+" .js-superfish"),i="destroy";if("function"!=typeof s.superfish)return;"none"===c(e)&&(i={delay:100,animation:{opacity:"show",height:"show"},dropShadows:!1,speed:"fast"});s.superfish(i)}(e),function(e){var s=f();if(!n(s).length>0)return;n.each(s,function(s,i){var a=i.replace(".",""),u="genesis-"+a,t="genesis-mobile-"+a;"none"==c(e)&&(u="genesis-mobile-"+a,t="genesis-"+a);var o=n('.genesis-skip-link a[href="#'+u+'"]');if(null!==menusToCombine&&i!==menusToCombine[0]&&o.toggleClass("skip-link-hidden"),o.length>0){var r=o.attr("href");r=r.replace(u,t),o.attr("href",r)}})}(e),function(e){if(null==menusToCombine)return;var s=menusToCombine[0],i=n(menusToCombine).filter(function(e){if(e>0)return e});"none"!==c(e)?(n.each(i,function(e,i){n(i).find(".menu > li").addClass("moved-item-"+i.replace(".","")).appendTo(s+" ul.genesis-nav-menu")}),n(g(i)).hide()):(n(g(i)).show(),n.each(i,function(e,s){n(".moved-item-"+s.replace(".","")).appendTo(s+" ul.genesis-nav-menu").removeClass("moved-item-"+s.replace(".",""))}))}(e))}function r(){var e=n(this),s=e.next("nav");e.attr("id","genesis-mobile-"+n(s).attr("class").match(/nav-\w*\b/))}function l(){var e=n(this);d(e,"aria-pressed"),d(e,"aria-expanded"),e.toggleClass("activated"),e.next("nav").slideToggle("fast")}function m(){var e=n(this),s=e.closest(".menu-item").siblings();d(e,"aria-pressed"),d(e,"aria-expanded"),e.toggleClass("activated"),e.next(".sub-menu").slideToggle("fast"),s.find("."+u).removeClass("activated").attr("aria-pressed","false"),s.find(".sub-menu").slideUp("fast")}function c(n){var s=e.getElementById(n);return window.getComputedStyle(s).getPropertyValue("display")}function d(e,n){e.attr(n,function(e,n){return"false"===n})}function g(e){return n.map(e,function(e,n){return e}).join(",")}function f(){var e=[];return null!==menusToCombine&&n.each(menusToCombine,function(n,s){e.push(s.valueOf())}),n.each(genesisMenus.others,function(n,s){e.push(s.valueOf())}),e.length>0?e:null}i.init=function(){if(0!=n(f()).length){var e=void 0!==genesisMenuParams.menuIconClass?genesisMenuParams.menuIconClass:"dashicons-before dashicons-menu",s=void 0!==genesisMenuParams.subMenuIconClass?genesisMenuParams.subMenuIconClass:"dashicons-before dashicons-arrow-down-alt2",i={menu:n("<button />",{class:a,"aria-expanded":!1,"aria-pressed":!1,role:"button"}).append(genesisMenuParams.mainMenu),submenu:n("<button />",{class:u,"aria-expanded":!1,"aria-pressed":!1,role:"button"}).append(n("<span />",{class:"screen-reader-text",text:genesisMenuParams.subMenu}))};n(g(genesisMenus)).addClass(t),function(e){if(n(g(genesisMenus)).find(".sub-menu").before(e.submenu),null!==menusToCombine){var s=genesisMenus.others.concat(menusToCombine[0]);n(g(s)).before(e.menu)}else n(g(genesisMenus.others)).before(e.menu)}(i),n("."+a).addClass(e),n("."+u).addClass(s),n("."+a).on("click.genesisMenu-mainbutton",l).each(r),n("."+u).on("click.genesisMenu-subbutton",m),n(window).on("resize.genesisMenu",o).triggerHandler("resize.genesisMenu")}},n(e).ready(function(){null!==f()&&i.init()})}(document,jQuery);