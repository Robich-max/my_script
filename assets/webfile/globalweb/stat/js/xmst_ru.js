(function(){function e(){var e=window.location.hostname,t=e.split(".");if(size=t.length,"id"===E.appLocal.name)var n="."+t[size-3]+"."+t[size-2]+"."+t[size-1];else var n="."+t[size-2]+"."+t[size-1];return n}function t(){return navigator.language||navigator.userLanguage||navigator.browserLanguage||navigator.systemLanguage}function n(){return navigator.vendor}function r(){return navigator.platform}function o(){return screen.width+"*"+screen.height}function a(e,t,n,r){var i=arguments.length;3==i?document.cookie=e+"="+t+";path=/;domain="+n:document.cookie=e+"="+t+";path=/;domain="+n+";expires="+r}function u(e){for(var t=document.cookie,n=c(t),r=n.split(";"),i=0;i<r.length;i++){var o=r[i].split("=");if(o.length>1&&o[0]==e)return o[1]}return""}function c(e){for(var t="",n=0;n<e.length;n++){var r=e.charAt(n);" "!=r&&(t+=r)}return t}function s(){return x.round(2147483647*x.random())}function m(e){var t=document.createElement("a");return t.href=e,t.hostname}function d(){var e=new Date,t=e.getTime()+"_"+Math.round(1e4*Math.random());return t}function f(){var e="";if(C==[])return"";for(var t in C)e+="&"+t+"="+encodeURIComponent(C[t]);return e}function p(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=e;var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)}function l(e){var t=document.createElement("img");t.src=e,t.style.float="left";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)}function v(){var i=document.location.href.replace(/&/g,"|"),c=document.referrer.replace(/&/g,"|");if(c=c.toLowerCase()){var f=m(c),p=u("lastsource");p&&a("lastsource",p,e()),(f.indexOf(".mi.com")<0||f.indexOf(".mi.co.id")<0||f.indexOf("s1.mi.com")>-1||f.indexOf("p.www.xiaomi.com")>-1||f.indexOf("a.union.mi.com")>-1)&&a("lastsource",f,e())}var l=u("xm_www_sid"),v=u("mstuid"),h=u("muuid"),y=u("mucid"),I=u("mutid"),A=u("mstz")||"";if(""===A||A.split("|").length<3){var S=[];S[0]="",S[1]="",S[2]=s().toString()+".0";var T="mstz",j=S.join("|");a(T,j,e())}A=u("mstz");var x=A.split("|")||[],U=(4==x.length?0:1,x[0]||""),M=x[1]||"",L=[];L=x[2].split(".");var b=L[0],O=parseInt(L[1])+1;x[2]=L[0]+"."+O.toString();var G=x[3]||"",z=x[4]||"",R=x[5]||"",k=0,N=encodeURIComponent(c);""==N&&(z="",R=""),N!=z&&i!=c?(R=z,z=N):""!=N&&(k=1),x[3]=G,x[4]=z,x[5]=R,a("mstz",x.join("|"),e());var q=u("lastsource"),B=0,H=new Date;H.setTime(H.getTime()+62208e6),""===v&&(B=1,v=d());var P=u("DEVICEID");""!==P&&(v=P),a("mstuid",v,e(),H.toGMTString());var F="",V=new Date;return void 0===C.curl||""==C.curl?C.curl=location.href:C.curl=C.curl,C.xmv=_(v),C.v=D,void 0===C.vuuid&&(C.vuuid=g(16,32)),w(),F=(parseInt(E.appLocal.isUploadGA)?"mid="+u("mUserId")+"&":"")+"phpsessid="+l+"&mstuid="+v+"&muuid="+h+"&mucid="+y+"&sessionId="+b+"&step="+O+"&new_visitor="+B+"&mstprevpid="+encodeURIComponent(U)+"&mstprev_pid_loc="+G+"&prevtarget="+M+"&lastsource="+q+"&timestamp="+V.getTime()+"&ref="+N+"&domain="+e()+"&screen="+o()+"&language="+t()+"&vendor="+n()+"&platform="+r()+"&gu="+R+"&pu="+z+"&rf="+k+"&mutid="+I}function g(e,t){var n,r="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz".split(""),i=[];if(t=t||r.length,e)for(n=0;n<e;n++)i[n]=r[0|Math.random()*t];else{var o;for(i[8]=i[13]=i[18]=i[23]="-",i[14]="4",n=0;n<36;n++)i[n]||(o=0|16*Math.random(),i[n]=r[19==n?3&o|8:o])}return i.join("")}function h(e){var t=document.createElement("a");return t.href=e,{source:e,protocol:t.protocol.replace(":",""),host:t.hostname,port:t.port,query:t.search,params:function(){for(var e,n={},r=t.search.replace(/^\?/,"").split("&"),i=r.length,o=0;o<i;o++)r[o]&&(e=r[o].split("="),n[e[0]]=e[1]);return n}(),file:(t.pathname.match(/\/([^\/?#]+)$/i)||[,""])[1],hash:t.hash.replace("#",""),path:t.pathname.replace(/^([^\/])/,"/$1"),relative:(t.href.match(/tps?:\/\/[^\/]+(.+)/)||[,""])[1],segments:t.pathname.replace(/^\//,"").split("/")}}function w(){var t=window.location;if(t.toString().indexOf("utm_source")>0)try{var n=h(t);if(void 0!=n.params.utm_source){var r=new Date;r.setTime(r.getTime()+15552e6),a("utmMiSource",n.params.utm_source,e(),r.toGMTString())}}catch(e){}}function _(t){var n=u("xm_vistor"),r=!0,i="",o=0,c=(new Date).getTime();if(""!==n){var s=n.split("-");2==s.length&&(i=s[0],o=s[1],c-o<=18e5&&(r=!1))}return r&&(i=t+"_"+c),o=c,a("xm_vistor",i+"-"+o,e()),i}function y(){var e=window.performance||window.webkitPerformance,e=e&&e.timing;if(!e)return"";var t=e.navigationStart,n=[];n.ldns=e.domainLookupEnd-e.domainLookupStart,n.con=e.connectEnd-e.connectStart,n.res=e.responseStart-e.requestStart,n.down=e.responseEnd-e.responseStart,n.redi=e.fetchStart-t;var r="";for(var i in n)r+="&"+i+"="+n[i];return r}function I(e){l(e)}function A(e){return"function"==typeof e}function S(){for(var e="",t=window.location.href,n=!0,r=0;r<O.length&&n;r++)-1!=t.indexOf(O[r])&&(n=!1);if(n){e=T();var i=new Date;p("https:"==window.location.protocol?"https://i01.appmifile.com/webfile/globalweb/stat/js/"+(parseInt(E.appLocal.isUploadGA)?"jquery.statData.min.js":"jquery.statData-eup.min.js")+"?d="+i.getFullYear()+(i.getMonth()+1)+i.getDate():"http://i01.appmifile.com/webfile/globalweb/stat/js/"+(parseInt(E.appLocal.isUploadGA)?"jquery.statData.min.js":"jquery.statData-eup.min.js")+"?d="+i.getFullYear()+(i.getMonth()+1)+i.getDate())}return C.pageid=e,C.pageid}function T(){var e=/\/(index.php|index.html|index.htm|index)$/,t=location.protocol+"//",n=location.host,r=location.pathname.replace(e,"/"),i=t+n+r;return md5("undefined"!=typeof _STAT_HASHNAME&&""!=_STAT_HASHNAME?_STAT_HASHNAME:i)}var j="prototype",x=Math,C=[],D="1.4.15",E=window.XIAOMI&&XIAOMI.GLOBAL_CONFIG||GLOBAL_CONFIG||{appLocal:{isUploadGA:!1}},U=function(){this.p=[]},M=U[j],L="http://item.mi.com/([0-9]+).html.*";L=new RegExp(L);var b=new Object;M.trackPerformance=function(e){var t=v();_mi_ti=e[0];var n=[];"undefined"!=typeof _mi_ti&&("undefined"!=typeof _mi_ti.fs&&(n.fs=_mi_ti.fs),"undefined"!=typeof _mi_ti.ws&&(n.ws=_mi_ti.ws),"undefined"!=typeof _mi_ti.ua&&(n.ua=_mi_ti.ua),"undefined"!=typeof _mi_ti.td&&(n.td=_mi_ti.td));var r=f();for(var i in n)r+="&"+i+"="+n[i];I(G+t+r+"&type=performance")},M.trackJSError=function(e){var t=v();_mi_je=e[0];var n=[];"undefined"!=typeof _mi_je&&("undefined"!=typeof _mi_je.ec&&(n.ec=_mi_je.ec),"undefined"!=typeof _mi_je.us&&(n.us=_mi_je.us));var r=f();for(var i in n)r+="&"+i+"="+n[i];I(G+t+r+"&type=jserror")},M.trackPanelShow=function(e){if(!(e.length<2)){var t=e[0],n=encodeURIComponent(e[1]),r=document.getElementById(t);if("undefined"!=typeof r&&null!=r)try{for(var i=r.getElementsByTagName("a"),o="",a=v()+f(),u=0,c=0;c<i.length;c++){var s=i[c].getAttribute("data-stat-pid"),m=i[c].getAttribute("data-stat-aid");if(null!=s&&null!=m){var d=i[c].getAttribute("href"),p=m+"+"+s;if("undefined"==typeof b[p]){if(L.test(d)){var l=L.exec(d);"object"==typeof l&&l.length>=2&&(d=l[1])}o+=m+"+"+s+"+"+d+";",u++,b[p]=1,u%20==0&&""!=o&&(I(G+a+"&type=sp&spt="+n+"&log="+encodeURIComponent(o)),o="")}}}""!=o&&I(G+a+"&type=sp&spt="+n+"&log="+encodeURIComponent(o))}catch(e){}}},M.trackPageView=function(){S();var t=v();varParam=f();var n=y();I(G+t+n+varParam);var r=new Date,i=encodeURIComponent(window.location.href);r.setTime(r.getTime()+18e4),a("msttime",i,e(),r.toGMTString()),r.setTime(r.getTime()-12e4),a("msttime1",i,e(),r.toGMTString())},M.push=function(e){return A(e[0])?void e[0](e.slice(1)):void M[e[0]](e.slice(1))},M.setDomainId=function(e){C.domain_id=e[0]},M.setUid=function(e){C.uid=e[0]},M.setVars=function(e){C[e[0]]=e[1]},M.getDomainId=function(){return C.domain_id},M.getVars=function(e){return C[e]},M.trackEvent=function(i){var c="",m="",d="",p="",l="",v=new Date,g=u("mstz").split("|")||[],h="",w="",_="",y="",A=0;g.length>=3&&(h=g[0],w=g[1],_=g[2].split(".")[0]||s().toString()+".0");var S=4==i.length?1:0;if(S)c=i[1],l=i[2],d=encodeURIComponent(i[3]),h!=l&&(g[0]=l,A=1);else{m=i[0],d=encodeURIComponent(i[1]),p=i[2],g[0]=m,y=g[3]||"",y!=p&&(g[3]=p,A=1);var T=[];T=g[2].split("."),_=T[0]}var v=new Date,j=u("xm_www_sid");w!=d&&(g[1]=d,A=1),A&&a("mstz",g.join("|"),e());var x=(parseInt(E.appLocal.isUploadGA)?"mid="+u("mUserId")+"&":"")+"phpsessid="+j+"&mstuid="+u("mstuid")+"&sessionId="+_+"&muuid="+u("muuid")+"&mucid="+u("mucid")+"&mstprevpid="+h+"&lastsource="+u("lastsource")+"&timestamp="+v.getTime()+"&domain="+e()+"&screen="+o()+"&language="+t()+"&vendor="+n()+"&platform="+r(),C="";C=S?"mstpid="+l+"&"+x+"&target="+d+"&prevtarget="+w+"&category="+c:"mstpid="+encodeURIComponent(m)+"&"+x+"&target="+d+"&prevtarget="+w+"&pid_loc="+p+"&mstprev_pid_loc="+y;var D=f();I(G+C+D)};var O=new Array("http://service.order.mi.com/cservice","http://me.mi.com");(function(e){"use strict";function t(e,t){var n=(65535&e)+(65535&t),r=(e>>16)+(t>>16)+(n>>16);return r<<16|65535&n}function n(e,t){return e<<t|e>>>32-t}function r(e,r,i,o,a,u){return t(n(t(t(r,e),t(o,u)),a),i)}function i(e,t,n,i,o,a,u){return r(t&n|~t&i,e,t,o,a,u)}function o(e,t,n,i,o,a,u){return r(t&i|n&~i,e,t,o,a,u)}function a(e,t,n,i,o,a,u){return r(t^n^i,e,t,o,a,u)}function u(e,t,n,i,o,a,u){return r(n^(t|~i),e,t,o,a,u)}function c(e,n){e[n>>5]|=128<<n%32,e[(n+64>>>9<<4)+14]=n;var r,c,s,m,d,f=1732584193,p=-271733879,l=-1732584194,v=271733878;for(r=0;r<e.length;r+=16)c=f,s=p,m=l,d=v,f=i(f,p,l,v,e[r],7,-680876936),v=i(v,f,p,l,e[r+1],12,-389564586),l=i(l,v,f,p,e[r+2],17,606105819),p=i(p,l,v,f,e[r+3],22,-1044525330),f=i(f,p,l,v,e[r+4],7,-176418897),v=i(v,f,p,l,e[r+5],12,1200080426),l=i(l,v,f,p,e[r+6],17,-1473231341),p=i(p,l,v,f,e[r+7],22,-45705983),f=i(f,p,l,v,e[r+8],7,1770035416),v=i(v,f,p,l,e[r+9],12,-1958414417),l=i(l,v,f,p,e[r+10],17,-42063),p=i(p,l,v,f,e[r+11],22,-1990404162),f=i(f,p,l,v,e[r+12],7,1804603682),v=i(v,f,p,l,e[r+13],12,-40341101),l=i(l,v,f,p,e[r+14],17,-1502002290),p=i(p,l,v,f,e[r+15],22,1236535329),f=o(f,p,l,v,e[r+1],5,-165796510),v=o(v,f,p,l,e[r+6],9,-1069501632),l=o(l,v,f,p,e[r+11],14,643717713),p=o(p,l,v,f,e[r],20,-373897302),f=o(f,p,l,v,e[r+5],5,-701558691),v=o(v,f,p,l,e[r+10],9,38016083),l=o(l,v,f,p,e[r+15],14,-660478335),p=o(p,l,v,f,e[r+4],20,-405537848),f=o(f,p,l,v,e[r+9],5,568446438),v=o(v,f,p,l,e[r+14],9,-1019803690),l=o(l,v,f,p,e[r+3],14,-187363961),p=o(p,l,v,f,e[r+8],20,1163531501),f=o(f,p,l,v,e[r+13],5,-1444681467),v=o(v,f,p,l,e[r+2],9,-51403784),l=o(l,v,f,p,e[r+7],14,1735328473),p=o(p,l,v,f,e[r+12],20,-1926607734),f=a(f,p,l,v,e[r+5],4,-378558),v=a(v,f,p,l,e[r+8],11,-2022574463),l=a(l,v,f,p,e[r+11],16,1839030562),p=a(p,l,v,f,e[r+14],23,-35309556),f=a(f,p,l,v,e[r+1],4,-1530992060),v=a(v,f,p,l,e[r+4],11,1272893353),l=a(l,v,f,p,e[r+7],16,-155497632),p=a(p,l,v,f,e[r+10],23,-1094730640),f=a(f,p,l,v,e[r+13],4,681279174),v=a(v,f,p,l,e[r],11,-358537222),l=a(l,v,f,p,e[r+3],16,-722521979),p=a(p,l,v,f,e[r+6],23,76029189),f=a(f,p,l,v,e[r+9],4,-640364487),v=a(v,f,p,l,e[r+12],11,-421815835),l=a(l,v,f,p,e[r+15],16,530742520),p=a(p,l,v,f,e[r+2],23,-995338651),f=u(f,p,l,v,e[r],6,-198630844),v=u(v,f,p,l,e[r+7],10,1126891415),l=u(l,v,f,p,e[r+14],15,-1416354905),p=u(p,l,v,f,e[r+5],21,-57434055),f=u(f,p,l,v,e[r+12],6,1700485571),v=u(v,f,p,l,e[r+3],10,-1894986606),l=u(l,v,f,p,e[r+10],15,-1051523),p=u(p,l,v,f,e[r+1],21,-2054922799),f=u(f,p,l,v,e[r+8],6,1873313359),v=u(v,f,p,l,e[r+15],10,-30611744),l=u(l,v,f,p,e[r+6],15,-1560198380),p=u(p,l,v,f,e[r+13],21,1309151649),f=u(f,p,l,v,e[r+4],6,-145523070),v=u(v,f,p,l,e[r+11],10,-1120210379),l=u(l,v,f,p,e[r+2],15,718787259),p=u(p,l,v,f,e[r+9],21,-343485551),f=t(f,c),p=t(p,s),l=t(l,m),v=t(v,d);return[p,l]}function s(e){var t,n="";for(t=0;t<32*e.length;t+=8)n+=String.fromCharCode(e[t>>5]>>>t%32&255);return n}function m(e){var t,n=[];for(n[(e.length>>2)-1]=void 0,t=0;t<n.length;t+=1)n[t]=0;for(t=0;t<8*e.length;t+=8)n[t>>5]|=(255&e.charCodeAt(t/8))<<t%32;return n}function d(e){return s(c(m(e),8*e.length))}function f(e,t){var n,r,i=m(e),o=[],a=[];for(o[15]=a[15]=void 0,i.length>16&&(i=c(i,8*e.length)),n=0;n<16;n+=1)o[n]=909522486^i[n],a[n]=1549556828^i[n];return r=c(o.concat(m(t)),512+8*t.length),s(c(a.concat(r),640))}function p(e){var t,n,r="0123456789abcdef",i="";for(n=0;n<e.length;n+=1)t=e.charCodeAt(n),i+=r.charAt(t>>>4&15)+r.charAt(15&t);return i}function l(e){return unescape(encodeURIComponent(e))}function v(e){return d(l(e))}function g(e){return p(v(e))}function h(e,t){return f(l(e),l(t))}function w(e,t){return p(h(e,t))}function _(e,t,n){return t?n?h(t,e):w(t,e):n?v(e):g(e)}window.md5=_,"function"==typeof define&&define.amd?define(function(){return _}):e.md5=_})(this);var G="//ru-a-stat.appmifile.com/mstr?",z=new U;if(z.p=window._msq,"undefined"!=typeof window._msq)for(i=0;i<z.p.length;i++)z.push(z.p[i]);window._msq=z})();