<?php
/**
 * Created by PhpStorm.
 * User: Benji
 * Date: 21/12/17
 * Time: 15:52
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1059.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />

		<meta name="keywords" content="ppk" />
		<meta name="description" content="El presidente Pedro Pablo Kuczynski logró en una agónica votación en el Congreso permanecer en el cargo en medio del escándalo Lava Jato. Pero los desafíos políticos continúan" />
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
		<title>Convoca.pe - La crisis de PPK</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="canonical" href="http://www.elpais.com.co/elpais/especiales/rio-cali/" />
        <link href='https://cdn.knightlab.com/libs/soundcite/latest/css/player.css' rel='stylesheet' type='text/css'>
        <script type='text/javascript' src='https://cdn.knightlab.com/libs/soundcite/latest/js/soundcite.min.js'></script>
		<!-- FB OG META -->
		<meta property="og:site_name" content="CONVOCA.PE"/>
		<meta property="og:title" content="La crisis de PPK"/>
		<meta property="og:description" content="El presidente Pedro Pablo Kuczynski logró en una agónica votación en el Congreso permanecer en el cargo en medio del escándalo Lava Jato. Pero los desafíos políticos continúan"/>
					<meta property="og:type" content="website"/>
			<meta property="og:url"  content="http://www.convoce.pe/"/>
			<meta property="og:image" content="http://convoca.pe/especiales/crisis-presidencial/img/ppk_uno.jpg" />
        <link rel="icon" type="image/png" href="http://convoca.pe/especiales/lava-jato-y-castillo-de-arena/favicon.png">
				<!-- END FB OG META -->

		<link rel="stylesheet" tyepe="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/css/icons.min.css" />
					<link rel="stylesheet" tyepe="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/classes/emoji/emoji.css" />
				<link rel="stylesheet" type="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/css/owl.theme.css" />
		<link rel="stylesheet" type="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/css/owl.transitions.css" />
		<link rel="stylesheet" type="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/css/owl.carousel.css" />
		<link rel="stylesheet" type="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/js/magnific-popup/magnific-popup.css" />
		<!--link rel="stylesheet" type="text/css" href="/elpais/especiales/rio-cali/css/elpaistv.riocali.css" /-->
		<!-- <link rel="stylesheet" type="text/css" href="css/elpaistv.riocali.css" /> -->
		<link rel="stylesheet" type="text/css" href="http://www.elpais.com.co/elpais/especiales/rio-cali/css/elpaistv.riocali.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/bootstrap.min.js"></script>
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/jquery.retina.js"></script>
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/jquery.lazyload.min.js"></script>
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/masonry.pkgd.min.js"></script>
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/owl.carousel.min.js"></script>
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!--script src="/elpais/especiales/rio-cali/js/elpaisriocali.min.js"></script-->
		<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/elpaisriocali.min.js"></script>
					<script src="http://www.elpais.com.co/elpais/especiales/rio-cali/js/desktop.min.js"></script>
				<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
		<script type="text/javascript" src="http://admin.brightcove.com/js/api/SmartPlayerAPI.js"></script>
		<!-- FONT -->
		<script type="text/javascript">
    (function(d) {
        var config = {
            kitId: 'iyu3kvu',
		      scriptTimeout: 3000
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>

		<!-- Cxense script begin -->
		<script type="text/javascript">
		var cX = cX || {}; cX.callQueue = cX.callQueue || [];
		cX.callQueue.push(['setSiteId', '9222263900732340971']);
		cX.callQueue.push(['sendPageViewEvent']);
		</script>
		<script type="text/javascript">
    (function() { try { var scriptEl = document.createElement('script'); scriptEl.type = 'text/javascript'; scriptEl.async = 'async';
        scriptEl.src = ('https:' == location.protocol) ? 'https://scdn.cxense.com/cx.js' : 'http://cdn.cxense.com/cx.js';
        var targetEl = document.getElementsByTagName('script')[0]; targetEl.parentNode.insertBefore(scriptEl, targetEl); } catch (e) {};} ());
		</script>
		<!-- Cxense script end -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-54366281-5', 'auto');
            ga('send', 'pageview');

        </script>
	</head>
	<body class="desktop" data-home="http://www.elpais.com.co/elpais/especiales/rio-cali">

		<!-- Begin Digital Analytix Tag -->
		<script type="text/javascript">
		// <![CDATA[
		function udm_(a){var b="comScore=",c=document,d=c.cookie,e="",f="indexOf",g="substring",h="length",i=2048,j,k="&ns_",l="&",m,n,o,p,q=window,r=q.encodeURIComponent||escape;if(d[f](b)+1)for(o=0,n=d.split(";"),p=n[h];o<p;o++)m=n[o][f](b),m+1&&(e=l+unescape(n[o][g](m+b[h])));a+=k+"_t="+ +(new Date)+k+"c="+(c.characterSet||c.defaultCharset||"")+"&c8="+r(c.title)+e+"&c7="+r(c.URL)+"&c9="+r(c.referrer),a[h]>i&&a[f](l)>0&&(j=a[g](0,i-8).lastIndexOf(l),a=(a[g](0,j)+k+"cut="+r(a[g](j+1)))[g](0,i)),c.images?(m=new Image,q.ns_p||(ns_p=m),m.src=a):c.write("<","p","><",'img src="',a,'" height="1" width="1" alt="*"',"><","/p",">")}
		udm_('http'+(document.location.href.charAt(4)=='s'?'s://sb':'://b')+'.scorecardresearch.com/b?c1=2&c2=6035166&ns_site=el-pais&name=especiales.rio-cali');
		// ]]>
		</script>
		<noscript><p><img src="http://b.scorecardresearch.com/p?c1=2&c2=6035166&ns_site=el-pais&name=especiales.rio-cali" height="1" width="1" alt="*"></p></noscript>
		<!-- End Digital Analytix Tag -->

		<!-- Begin DAx ct.js import -->
		<script type="text/javascript" language="JavaScript1.3" src="http://b.scorecardresearch.com/c2/6035166/cs.js"></script>
		<!-- End DAx ct.js import -->


		<header>
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed menu" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-menu"></span>
                        </button>
                        <a class="navbar-brand" href="http://convoca.pe/" target="_blank"><img src="img/Convoca Logo Blanco-01.png" alt="Convoca"></a>
                        <ul class="nav navbar-nav navbar-s">
                            <li><a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.open('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'','ventana','width=600,height=400,left=50,top=50,toolbar=yes');void 0"><span class="icon-facebook"></span></a></li>
                            <li><a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.open('http://twitter.com/?status='+tit2+'%20'+dir+'','ventana','width=600,height=400,left=50,top=50,toolbar=yes');void 0"><span class="icon-twitter"></span></a></li>
                        </ul>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <!-- <li><a href="#ultimo"><span class="icon-pencil"></span> Seccion</a></li>
                            <li><a href="#ultimo"><span class="icon-pencil"></span> Seccion</a></li>  -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href=" https://docs.google.com/forms/d/e/1FAIpQLScIbS5f6rKV95YuypcDnpPDQUZ4UwL8o8WN-bkT5mx0AGUslQ/viewform" target="_blank" class="suscribete">Suscríbete</a></li>
                            <li><a href="#inicio"><span class="icon-home"></span></a></li>
                            <li><a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.open('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'','ventana','width=600,height=400,left=50,top=50,toolbar=yes');void 0"><span class="icon-facebook"></span></a></li>
                            <li><a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.open('http://twitter.com/?status='+tit2+'%20'+dir+'','ventana','width=600,height=400,left=50,top=50,toolbar=yes');void 0"><span class="icon-twitter"></span></a></li>
                        </ul>

                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
</header>
<section id="intro" class="desktop " data-speed="4" data-type="background">
			<video id="background_video" loop>
			<source src="images/riverBG.mp4" type="video/mp4">
			<source src="images/riverBG.ogv" type="video/ogg">
    Your browser does not support the video tag.
		</video>
		<div class="overlay"></div>
	<div class="title col-xs-12 col-sm-10 col-md-7 col-lg-6 col-sm-offset-1 desktop">
        <div class="wow bounceOutDown nombre col-xs-12 desktop" data-wow-delay="1s">
            La crisis de PPK <br>
            <span style="font-size: 15px !important;">
                <h5>
                    Con una votación agónica en el Congreso, Kuczynski logró permanecer en el cargo en medio del escándalo Lava Jato. Pero los desafíos políticos continúan                </h5>
                </span>
        </div>
        </a>
					</div>
    </div>
    <span class="col-xs-12 col-sm-10 col-md-7 col-lg-6 col-sm-offset-1 explorer">
        <img class="img-portada" data-wow-duration="3s" src="img/ppkportada.png" alt="PPK" class="img-responsive retina" />
		<span class="tag explore">Explora</span>
		<i class="ico-arrow_down_thin i1 explore"></i><i class="explore ico-arrow_down_thin i2"></i>
	</span>
</section>
<section id="sub-intro">
    <img src="img/ppk_uno.jpg" height="700" width="100%" class="curl retina" />

    <!-- <article class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
	<h2 class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
El río Cali<span>Gritos de un sobreviviente</span>
		</h2>
	<p class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
Ese que dejó su huella sobre la ciudad antes que el primero de nosotros. Ese que nos ha acompañado desde antes de nacer. Ese que ha sido testigo de nuestras alegrías y tristezas. Ese, hoy lucha en silencio para no morir ante nuestra mirada indiferente. El País te invita a este viaje virtual para recuperar el amor por nuestro querido río Cali.
		</p>
	</article> -->
</section><section id="part-one">
	<div class="map-title-parent col-xs-12 desktop">
		<div class="row">
            <article class="text-convoca col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                <h2 style="font-weight: bold">Presidente Kuczynski se mantiene en el cargo por ocho votos</h2>
                <span>Por Convoca<br>
                    Publicado el 22 de diciembre de 2017
                </span><br><br>
                <p>
                    Por apenas ocho votos, el mandatario Pedro Pablo Kuczynski no fue vacado este jueves por el Congreso, de mayoría fujimorista, tras una maratónica sesión de alrededor de 11 horas. <br><br>

                    Se requería que 87 congresistas votaran a favor del pedido de vacancia presidencial por “permanente incapacidad moral”, pero solo 79 votaron a favor, 19 en contra y 21 se abstuvieron. <br><br>

                    En la bancada de Fuerza Popular, el partido de Keiko Fujimori, gran parte de los legisladores votó a favor. No obstante, se abstuvieron nueve parlamentarios, a parte de Kenji Fujimori, entre los cuales están Guillermo Bocángel, Bienvenido Ramírez, Estelita Bustos, Marvin Palma y Cleyton Galván.  <br><br>

                    Los 18 congresistas del oficialista Peruanos por el Kambio emitieron su voto en contra de la vacancia de Kuczynski. <br><br>

                    En el grupo parlamentario del Frente Amplio, liderados por Marco Arana, los diez legisladores votaron a favor del cese del cargo del presidente. <br><br>

                    En tanto, los congresistas de Nuevo Perú se retiraron antes de la votación, en señal de protesta. <br><br>

                    Durante el debate, que se inició luego de la exposición de Kuczynski ante el pleno del Congreso, la mayoría de los parlamentarios de todas las bancadas no llegaron a incorporar nuevos elementos a la discusión ni demostraron flexibilidad para cambiar de opinión. <br><br>

                    Antes del procedimiento de vacancia, la Comisión Lava Jato había sesionado de forma inesperada y reservada a las 8 de la mañana. Después, el legislador Víctor Andrés García Belaúnde, miembro titular de dicho grupo investigador, en su alocución se refirió a “nuevas transferencias” de Westfield Capital, pero esto fue negado por la premier Mercedes Aráoz. <br><br>

                    Kenji Fujimori decidió abstenerse, y trascendió que había intentado persuadir a congresistas indecisos de su partido para que no votaran a favor de la vacancia. Luego se vio a su compañero de bancada Miguel Torres increpándolo con fastidio en un video difundido en redes sociales. Otras imágenes también mostraron a Alberto de Belaunde dialogando con Marvin Palma, congresista fujimorista cercano al hijo menor del exmandatario preso. <br><br>

                    Todo indica que la votación final se decidió en los pasillos del Congreso y en intercambios informales.
                </p>
                <br><br>
                <h4>La defensa del presidente</h4>
                <p>“Vengo a su solicitud para enfrentar, dando la cara al país, una acusación falsa
                    y ominosa que solo puede ser entendida por un deseo
                    <!-- <span class="text-color-text-default">
                    <span data-url="https://www.ivoox.com/ppk-1-audios-mp3_rf_22802216_1.html" data-start="0" data-end="50420" data-plays="1" class="soundcite soundcite-loaded soundcite-play">
                        <font style="vertical-align: inherit; font-size: 21px;">
                            <font style="vertical-align: inherit;">inconstitucional</font>
                        </font>
                    </span>
                    </span> -->
                    inconstitucional de
                    apartarme del poder”, empezó diciendo Kuczynski a las 9 y 40 de la mañana,
                    en el Hemiciclo del Congreso, frente a 108 legisladores</p>
                <p>La noche anterior, el presidente ya había dado un golpe de timón a su
                    estrategia política, hasta entonces pasiva frente a la oposición fujimorista.
                    Lamentó no haber reaccionado antes y advirtió que sus vicepresidentes no
                    participarían de un gobierno surgido de “una maniobra injusta y
                    antidemocrática”.</p>
                <p>Sentado al lado de Luis Galarreta, presidente del Legislativo, hoy PPK basó su
                    defensa en la versión que ya había dado a medios de prensa desde el domingo
                    anterior: él era el accionista que se había alejado de la gestión de Westfield
                    Capital mientras Sepúlveda la manejaba.</p>
                <p>Las pruebas presentadas fueron un contrato de asesoría entre su compañía,
                    Odebrecht y el BCP (firmado por su exsocio), un acuerdo con Total SA
                    (también suscrito por el chileno) y la carta que la compañía brasileña envío el
                    martes último a La República, que aseguró que las coordinaciones se
                    realizaron con Sepúlveda. <br><br>
                    “Nunca participé de las asesorías ni realicé ningún tipo de gestión de intereses
                    mientras fui ministro”, señaló. <br><br>
                    Ver: Caso PPK: de la puerta giratoria al portazo del Congreso <br><br>
                    Kuczynski también aseguró que le había exigido a Sepúlveda que no le
                    comunicara las actividades del negocio, lo que en el mundo de los negocios se
                    conoce como “muralla china”. Sin embargo, no pudo acreditarla. <br><br>
                    “Comprendo que esta situación [de alejamiento] debió haber venido
                    acompañada de documentos”, dijo.
                    <span class="text-color-text-default">
                    <span onClick="togglePlay()" id="audioCustom" class="soundcite soundcite-loaded soundcite-play">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; font-size: 21px;">“Lamento</font>
                        </font>
                    </span>
                    </span>
                    <audio id="myAudio" src="ppk_constitucion_atacada_mezcla.mp3" preload="auto">
                    </audio>
                    “Lamento no haber sido lo suficientemente
                    prolijo”, agregó. <br><br>
                    Pero los documentos que guarda la División de Corporaciones del Estado de
                    Florida, EE.UU., sobre Westfield Capital, contradicen la versión de la “muralla
                    china” de PPK. <br><br>
                    En 2004, 2005 y 2006, años en que ejerció como ministro de Alejandro Toledo,
                    el político presentó reportes anuales a la autoridad estadounidense que lo
                    presentaban como directivo de su compañía. Eso no es todo: cada uno de
                    estos documentos oficiales dejan constancia de la firma electrónica del propio
                    Kuczynski.</p>
                <div class="col-xs-12 col-md-8 img-parent pull-left ppk">
                    <img data-original="img/dos.jpg" alt="PPK" data-title="Paso por La Leonera" class="img-zoom lazyload img-responsive" height="360" width="100%" />
                    <p class="caption">
                        Pedro Pablo Kuczynski
                    </p>
                </div>
                <br>
                <p>El presidente, cuya vacancia se decidía con un mínimo de 87 votos, insistió en
                    que no había mentido en todas sus explicaciones anteriores. Como se
                    recuerda, el procedimiento al que se le sometió hoy se sustentó en las
                    explicaciones contradictorias que dio en las últimas semanas. <br><br>
                    “No soy ni he sido socio de First Capital. No he tenido una relación directa con
                    H2Olmos [de Odebrecht]. Presté una asesoría a First Capital [para ese
                    proyecto] en 2012, cuando no era funcionario”, aseguró. <br><br>
                    Además, reiteró que no tuvo relación con empresas brasileñas o consorciadas.
                    “El vínculo profesional lo tuvo una empresa [Westfield Capital] que no
                    gestionaba”, puntualizó.</p>
                <br><br><br>
                <input type="hidden">
                <!-- <blockquote>Sin embargo, en 2 de los 17 monitoreos realizados entre julio y septiembre de ese año “en la bocatoma del acueducto se excedió el valor límite de mercurio en agua”.</blockquote> -->
                <h4>El abogado entra al ruedo</h4>
                <p>
                    La defensa jurídica de Kuczynski fue asumida por el abogado y exsenador
                    Alberto Borea Odría. Su discurso no sólo estuvo cargado de argumentos
                    constitucionales, que cuestionaron la legitimidad del proceso de vacancia, sino
                    también de referencias históricas sobre el fujimorismo, fuerza política que
                    gobernó de facto el Perú entre los años 1992 y 2000.<br><br>
                    “Se está diciendo que esto es un juicio político, [pero] no es verdad”, apuntó
                    Borea. “Cuando deciden sobre el honor de una persona, están ejerciendo
                    función jurisdiccional y [estamos ante] un juicio que exige prueba”, añadió.<br><br>

                    En este sentido, el abogado argumentó que el debido proceso había sido
                    violado porque se estaba “desviando al presidente del juicio que le
                    corresponde: uno que recoge pruebas, que permite testigos”, aseveró.
                    Por otro lado, criticó que la moción de vacancia partía del presupuesto de que
                    el presidente había mentido sin haberlo demostrado. “Ustedes están saltado
                    directamente de la afirmación a la sanción”, dijo. <br><br>
                    En la última entrevista que ofreció a los medios, PPK había llamado “vacancia
                    express” el proceso al que lo sometía el Congreso. <br><br>
                    Kuczynski solicitó al Parlamento, el último martes, los documentos que
                    acreditaban la moción que lo destituiría por “incapacidad moral permanente” y
                    que no habían sido adjuntados. Además, pidió a la Organización de Estados
                    Americanos la asistencia de observadores internacionales. <br><br>
                    “¿Ustedes creen que un plazo de tres días es un plazo razonable para
                    presentar una defensa, para discutir hechos?”, inquirió. Borea también comparó
                    el procedimiento de vacancia para alcaldes, que dura 30 días, con el que venía
                    afrontando el presidente de la República. <br><br>
                    Asimismo, advirtió una “indisciplina en las ambiciones” del fujimorismo, que ya
                    en el pasado había generado el control del Ministerio Público, del Poder
                    Judicial y del Tribunal Constitucional. <br><br>
                    “Es inexacto hablar de una mayoría parlamentaria como si fuera la mayoría del
                    país. Ustedes representan al 55% del Congreso, pero eso es una distorsión del
                    sistema [electoral] preferencial. Ustedes representan realmente el 39%”,
                    señaló. <br><br>
                    Cabe anotar que durante la exposición del abogado de Pedro Pablo Kuczynski,
                    en las redes sociales empezó a circular un supuesto documento de una junta
                    médica que recomendaba el indulto humanitario para el recluido expresidente
                    Alberto Fujimori. El ministerio de Justicia negó la existencia de un trámite al
                    respecto. Esto fue ratificado por la premier Mercedes Aráoz en conferencia de
                    prensa.</p><br>
            </article>
		</div>
	</div>
	<div class="clearfix"></div>
</section><section id="part-two">
            <div class="video video1 col-xs-12" id="v1">
                <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1dY2RVaYYanMKL4O2Ho24bPOg_elMe8wKXzve91u7b4Q&font=Default&lang=es&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
            </div>
	<div class="clearfix"></div>
</section>
<section id="part-three">
	<!-- <div class="map-title-parent col-xs-12 desktop">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-offset-3 intro desktop">
				<h2 class="col-xs-12">
					<span class="s1">Tercera parte</span>
					<span class="s2">El triste final de un río</span>
				</h2>
				<p class="col-xs-12 col-sm-10">
Después de entregarle casi todo su caudal a los caleños, en sus últimos siete kilómetros el río Cali pierde casi toda la vida que nace en El Alto del Buey. El abandono, y ante todo, la indiferencia ciudadana, le clavan una puñalada en el corazón. Aún así, hay esperanza...
				</p>
			</div>
			<div class="mapa col-xs-12 desktop">
									<div class="tags col-xs-12 desktop"></div>
					<a href="http://www.elpais.com.co/elpais/especiales/rio-cali/map/" title="Radiografía del río Cali: Mapa interactivo - Diario El País" class="open_map"><i class="glyphicon glyphicon-zoom-in"></i> Vea la radiografía del río Cali</a>
							</div>
		</div>
	</div> -->

<div class="row">
    <a href="http://investigalavajato.convoca.pe" target="_blank">
        <div class="col-md-6">
            <img class="img-two" src="img/bloque1.jpg">
            <span><h1 class="title-block-two">Investiga Lava Jato</h1></span>
        </div>
    </a>
    <a href="http://convoca.pe/especiales/lava-jato-y-castillo-de-arena/" target="_blank">
        <div class="col-md-6">
            <img class="img-two" src="img/bloque2.jpg">
            <span><h1 class="title-block-two">Lava Jato y Castillo de Arena en Perú</h1></span>
        </div>
    </a>
</div>

	<div class="clearfix"></div>
</section>

<!-- Footer -->
        <footer class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-center">
                                <br><br class="hidden-xs"><br class="hidden-xs">
                                <a href="http://convoca.pe/">
                                    <img src="http://paradisepapers.convoca.pe/images/logo-pie.jpg" alt="" class="img-responsive">
                                </a>
                            </p>

                        </div>
                    </div>
                    <p class="text-center hidden-sm">
                        <br><br><br>
                        Convoca © 2017 Todos los derechos reservados
                    </p>
                </div>
                <div class="col-md-6 publicado">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-12">
                            <p>
                                <br class="hidden-xs">
                                <span>Responsable del proyecto: Milagros Salazar. <br>
                  Reporteros: Óscar Libón<br>
                  Gonzalo Torrico.<br>
                  Miguel Gutiérrez, Aramís Castro. <br>
                  Diseño, ilustraciones y vídeos: Orlando Tapia <br>
                  Podcast: Karla Velezomoro, Sonia Tello, Michelle Mogollón y Walter Dávila. <br>
                  Desarrollo web: Benji Santos.
                </span>
                                <br><br><br class="hidden-xs"><br class="hidden-xs">
                                <span>
                  Si tienes alguna denuncia o quieres contactarte<br> con nosotros búscanos en info@convoca.pe
                </span>
                                <br clear="visible-xs"><br clear="visible-xs">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <br class="hidden-xs">
                                    <font color="red">
                                    </font><p class="menu"><font color="red">
                                            <a href="http://convoca.pe/investigaciones" target="_blank"><font color="#EEA031">Investigaciones</font></a><br>
                                            <a href="http://convoca.pe/agenda-propia" target="_blank"><font color="#EEA031">Agenda Propia</font></a><br>
                                            <a href="http://convoca.pe/mapea" target="_blank"><font color="#EEA031">Apps</font></a><br>
                                            <a href="http://convoca.pe/opiniones" target="_blank"><font color="#EEA031">Opinión</font></a><br>
                                            <a href="http://convoca.pe/convoca-radio" target="_blank"><font color="#EEA031">Convoca Radio</font></a></font>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <br class="hidden-xs">
                                        Convoca es miembro de:
                                        <img src="http://paradisepapers.convoca.pe/images/logo-global.jpg" alt="" class="img-responsive memberof">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center visible-xs visible-sm publicado">
                        Convoca © 2017 Todos los derechos reservados
                    </p>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            var myAudio = document.getElementById("myAudio");
            var isPlaying = false;
            var elemento = document.getElementById("audioCustom");

            function togglePlay() {
                if (isPlaying) {
                    myAudio.pause()
                    elemento.className = "soundcite soundcite-loaded soundcite-play";
                } else {
                    myAudio.play();
                    elemento.className += "soundcite soundcite-loaded soundcite-pause";
                }
            };
            myAudio.onplaying = function() {
                isPlaying = true;
            };
            myAudio.onpause = function() {
                isPlaying = false;
            };
        </script>
		<!-- Adon Scripts -->
			<!-- Disquss -->
			    <script type="text/javascript">
				    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				    var disqus_shortname = 'riocalielpais'; // required: replace example with your forum shortname
				    var disqus_identifier = 'riocalielpais_comments';

				    /* * * DON'T EDIT BELOW THIS LINE * * */
				    (function () {
                        var s = document.createElement('script'); s.async = true;
                        s.type = 'text/javascript';
                        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
                    }());
				    </script>

		<script type="text/javascript">brightcove.createExperiences();</script>

		<!-- cXense script begin -->
		<div id="cX-root" style="display:none"></div>
		<script type="text/javascript">
nvg21360.makeCustomSegment = function (){ var res = {}; this.cokCache = {}; var nvg_parms = new Array('gender', 'age', 'education', 'interest', 'product', 'income', 'marital', 'prolook'); for (nvg_i in nvg_parms) { var nvg_tmp_arr = ''; var nvg_tmp_nme = nvg_parms[nvg_i]; var nvg_tmp = this.getSegment(nvg_parms[nvg_i]); if (nvg_tmp.search(',') != -1) { res[ nvg_tmp_nme ] = nvg_tmp.split(','); } else if (nvg_tmp.search('-') != -1) { res[ nvg_tmp_nme ] = nvg_tmp.split('-'); } else if (nvg_tmp != '') { res[ nvg_tmp_nme ] = nvg_tmp; } } return res; }
		  var cX = cX || {}; cX.callQueue = cX.callQueue || [];
		  cX.callQueue.push(['setAccountId', '9222263900732340917']);
		  cX.callQueue.push(['setSiteId', '9222263900732340971']);
		  cX.callQueue.push(['setUserProfileParameters', nvg21360.makeCustomSegment() ]);
		  cX.callQueue.push(['sendPageViewEvent']);
		</script>
		<script type="text/javascript">
    (function() { try { var scriptEl = document.createElement('script'); scriptEl.type = 'text/javascript'; scriptEl.async = 'async';
        scriptEl.src = ('https:' == document.location.protocol) ? 'https://scdn.cxense.com/cx.js' : 'http://cdn.cxense.com/cx.js';
        var targetEl = document.getElementsByTagName('script')[0]; targetEl.parentNode.insertBefore(scriptEl, targetEl); } catch (e) {};} ());
		</script>
		<!-- cXense script end -->

	<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"35d44bf9f7","applicationID":"31948335","transactionName":"MlNaMhZUW0BXVkNcDgsZbRQNGlBfRlReRk4ARUgDB1xUX1NGGEcIChtbBwhcGlpYUVJNTxVeSA==","queueTime":0,"applicationTime":270,"atts":"HhRZRF5OSE4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>