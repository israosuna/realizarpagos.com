<?php
header("Cache-Control: no-cache");

require_once('./postmarkapp/vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;
$client = new PostmarkClient("");
//$d = strtotime(time, now)
date_default_timezone_set("America/Caracas");

include "prices.php";
$preciosApiApp= getLastPriceNew();
  $precioVentaAmazonGC= $preciosApiApp[1];
  $precioVentaPayoneer= $preciosApiApp[5];
  $precioVentaPayPal= $preciosApiApp[7];
  $precioCompraPayPal= $preciosApiApp[8];
  $precioCompraBTC= $preciosApiApp[9];
  $precioCompraPayoneer= $preciosApiApp[10];
  $precioCompraBOFA= $preciosApiApp[11];
  $precioCompraUphold= $preciosApiApp[12];
  $precioVerfPayPal= $preciosApiApp[14];
  $precioCompraAirtm=$preciosApiApp[17];
  $precioCompraPayeer=$preciosApiApp[18];
  //PESOS COLOMBIANOS
  $venta_BSCOL= $preciosApiApp[3];//BOLIVARES
  $compra_COLBS=$preciosApiApp[19];//BOLIVARES
  $venta_USDCOL= $preciosApiApp[4];//DOLARES
  $compra_COLUSD= $preciosApiApp[20];//DOLARES
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>RealizarPagos.com - Canjes a Bolívares y otras monedas. Dinero virtual, Dinero real.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Realizarpagos.com es una plataforma de Appbb.co con la que puedas canjear tus monedas digitales a Bolívares u otra moneda física en tu país de forma rápida y segura" />
        <meta name="keywords" content="realizarpagos,canjes a bolivares,paypal a bolivares, payoneer a bolivares, gift cards de amazon, intercambio de monedas, remesas, venezuela, monedas digitales, criptomonedas" />
        <meta name="author" content="Appbb Services LLC" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="theme-color" content="#ff8c1a">

		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />        
        <link rel="shortcut icon" href="images/favicon.ico" />    
        <link href='https://fonts.googleapis.com/css?family=Rubik:400,700,700i' rel='stylesheet' type='text/css'>		
        <link rel="stylesheet" type="text/css"  href='style.css' />
        <!-- RECAPTCHA DE GOOGLE -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>            
                <script src="js/respond.min.js"></script>                   
        <![endif]-->
<!-- GOOGLE ANALYTICS - Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151246848-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151246848-1');
</script>
<!-- Política de Cookies -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1699889206838198');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1699889206838198&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    </head>

    <body class="page-template-onepage">

        <div class="site-wrapper">           
<!-- LOADER DESACTIVADO -->
    <!--        <div class="doc-loader">
                <img src="images/preloader.gif" alt="realizarpagos.com">
            </div>       -->

            <header class="header-holder">             
                <div class="menu-wrapper center-relative relative">             
                    <div class="header-logo">
                        <a href="#">
                            <img src="images/logo.png" alt="realizarpagos.com">
                        </a>               
                    </div>

                    <div class="toggle-holder">
                        <div id="toggle">
                            <div class="first-menu-line"></div>
                            <div class="second-menu-line"></div>
                            <div class="third-menu-line"></div>
                        </div>
                    </div>

                    <div class="menu-holder">
                        <nav id="header-main-menu">
                            <ul class="main-menu sm sm-clean">
                                <li>
                                    <a href="#home">Inicio</a>
                                </li>
                                <li>
                                    <a href="#services">Instrucciones</a>
                                </li>
                                <li>
                                    <a href="#eligetucanje">Canjes a Bolívares</a>
                                </li>
                                <li>
                                    <a href="#about">Acerca de nosotros</a>
                                </li>                                 
                                <li>
                                    <a href="https://www.appbb.co/shop/SERVICIOS-Y-COBROS-Verf-PayPal-Otros-c28852371" target="_blank">Verificación PayPal</a>
                                </li>                                <li>
                                    <a href="#contact">Contacto</a>
                                </li>                                     

                            </ul>

                        </nav>                       
                    </div>
                 
                    <div class="clear"></div>   
                </div>
            </header>                  

            <div id="content" class="site-content center-relative">        

                <!-- Home Section -->
                <!-- Home Section -->
                <div id="tasas" class="section">
                        <ul class="main-menu-tasa sm sm-clean">
                                        <li><i style="color:white" class="fa fa-paypal"></i>: <?php echo $precioCompraPayPal ?></li>
                                        <li><i style="color:white" class="fa fa-usd">Payoneer</i>: <?php echo $precioCompraPayoneer ?></li>
                                        <li><i style="color:white" class="fa fa-usd">UPHOLD</i>: <?php echo $precioCompraUphold ?></li>
                                        <li><i style="color:white" class="fa fa-btc"> y Zinli</i>: <?php echo $precioCompraBTC ?></li>
                                        <li><i style="color:white" class="fa fa-usd ">AirTM</i>: <?php echo $precioCompraAirtm ?></li>
                                        <li><i style="color:white" class="fa fa-usd">Pesos COP a Bs:</i> Compra <?php echo $compra_COLBS ?> Bs | Venta <?php echo $venta_BSCOL ?> Bs</li>
                                        <li><i style="color:white" class="fa fa-usd">Pesos COP a USD:</i> Compra <?php echo $compra_COLUSD ?> COP | Venta <?php echo $venta_USDCOL ?> COP</li><br>
                                        <li><i style="color:white" class="fa fa-usd">Payeer</i>: <?php echo $precioCompraPayeer ?></li>
                                        <li><i style="color:white" class="fa fa-usd">Wise, Zelle y ACH Transfer</i>: <?php echo $precioCompraBOFA ?></li>
                                        <li><i style="color:white" class="fa fa-usd">Banesco Panamá y PiPol Pay</i>: <?php echo $precioCompraBOFA ?></li>
                                        <li><i style="color:white" class="fa fa-usd">Verificación PP</i>: <?php echo $precioVerfPayPal ?></li>
                                        <li><i style="color:white" class="fa fa-usd">Recargas en Bs</i>: <?php echo $precioVentaAmazonGC ?></li><br>
   										<li ><i class="fa fa-calendar"> Tasas del día:</i> <?php echo date("d-m-Y h:i")  ?> - Horario de atención: Lunes a Viernes 8:00am a 5:00pm y Sábados 8:00am a 1:00pm</li>
                            </ul>
                </div> 
              <!--  <div id="home" class="section no-page-title">      
                    <div class="section-wrapper block content-1170 center-relative">                                                
                    </div>
                </div> -->

                <!-- Services Section -->
                <div id="services" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            REALIZA TU PEDIDO             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">

                            <div class="one_fourth ">
                                <div class="service-holder">
                                    <p class="service-num">1</p>
                                    <div class="service-txt">
                                        <h4>Regístrate!</h4>
                                        <p>
                                            Si es la primera vez que realizas un pedido con nosotros, debes llenar de forma digital el siguiente documento, guardar una copia en digital y envíarlo con una foto de tu Cédula o Pasaporte junto a tu número de pedido a este correo <a href="mailto:vys@appbb.co">vys@appbb.co</a>. Por favor primero realiza tu pedido abajo.
                                       		<div class="button">
                                        		<a href="https://www.appbb.co/legal" class="button scroll" target="_blank">Clíc para ver archivo!</a>
                                        	</div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="one_fourth ">
                                <div class="service-holder">
                                    <p class="service-num">2</p>
                                    <div class="service-txt">
                                        <h4>Elíge tu canje</h4>
                                        <p>
                                            A continuación selecciona el tipo de canje que deseas realizar e ingresa el monto de tu operación. Luego haz clíc en "Compre ahora". Abajo podrás realizar tu pedido.
                                       		<div class="button">
                                        		<a href="#eligetucanje" class="button scroll">Clíc aquí para elegir!</a>
                                        	</div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="one_fourth ">
                                <div class="service-holder">
                                    <p class="service-num">3</p>
                                    <div class="service-txt">
                                        <h4>Revisa tu email</h4>
                                        <p>
                                            Una vez realizado el pedido, enviaremos la cotización a tu correo. Lee detenidamente y sigue las intrucciones para hacer el pago. Completa tu pedido!
                                        </p>
                                        <div class="button-holder text-left">
                                            <a href="#news" class="button-dot">
                                                <span>MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="one_fourth last">
                                <div class="service-holder">
                                    <p class="service-num">4</p>
                                    <div class="service-txt">
                                        <h4>Envía tu pago</h4>
                                        <p>
                                            Por último, responde el correo que te enviamos; con tu comprobante de pago y los detalles de tu cuenta bancaria. Procesaremos y enviaremos los bolívares a tu cuenta en el menor tiempo posible. 
                                        </p>

                                    </div>
                                </div>
                            </div>    
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div>
                <!-- Services Section -->
                <div id="eligetucanje" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            ELÍGE TU CANJE             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">


                <!-- Zelle (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-202151486" itemtype="http://schema.org/Product" data-single-product-id="202151486"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Zelle"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- PipolPay (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-216015037" itemtype="http://schema.org/Product" data-single-product-id="216015037"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Pipol Pay"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Binance (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-383269023" itemtype="http://schema.org/Product" data-single-product-id="383269023"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Binance"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Criptomonedas (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-88380864" itemtype="http://schema.org/Product" data-single-product-id="88380864"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- PayPal (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-77617495" itemtype="http://schema.org/Product" data-single-product-id="77617495"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Zinli"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Payoneer Tarjeta (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-84643757" itemtype="http://schema.org/Product" data-single-product-id="84643757"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Payoneer Transferencia (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-225222538" itemtype="http://schema.org/Product" data-single-product-id="225222538"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Banesco Panama (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-404979256" itemtype="http://schema.org/Product" data-single-product-id="404979256"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Banesco Panama"></div><div customprop="options"></div><div customprop="addtobag"></div></div>
                        
                <!-- COP A BS (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-202166449" itemtype="http://schema.org/Product" data-single-product-id="202166449"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- BS A COP (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-202166463" itemtype="http://schema.org/Product" data-single-product-id="202166463"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- AIRTM (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-109020351" itemtype="http://schema.org/Product" data-single-product-id="109020351"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Uphold (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-141595003" itemtype="http://schema.org/Product" data-single-product-id="141595003"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Reserve"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Zinli (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-383266536" itemtype="http://schema.org/Product" data-single-product-id="383266536"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Reserve (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-383291090" itemtype="http://schema.org/Product" data-single-product-id="383291090"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de Reserve"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- ACH Transfer (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-91033727" itemtype="http://schema.org/Product" data-single-product-id="91033727"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- WISE (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-383269018" itemtype="http://schema.org/Product" data-single-product-id="383269018"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

                <!-- Payeer (Nuevo Formato) -->
                        <div style="margin: 0 2em 4em 1.5em;" class="ecsp ecsp-SingleProduct-v2 ecsp-SingleProduct-v2-bordered ecsp-SingleProduct ecsp-Product ec-Product-109020352" itemtype="http://schema.org/Product" data-single-product-id="109020352"><div itemprop="image"></div><div class="ecsp-title" itemprop="name" style="display:none;" content="Cambio de PayPal"></div><div customprop="options"></div><div customprop="addtobag"></div></div>

	                <!-- Script para procesar pedido -->
  						<script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?7571385&data_platform=singleproduct_v2" charset="utf-8"></script><script type="text/javascript">xProduct()</script>

                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div>

                <!-- About Section -->
                <div id="about" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            ACERCA DE NOSOTOROS             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">

                            <div class="one_half">
                                <p class="title-description-up">
                                    RealizarPagos.com un servicio de Appbb.co
                                </p>
                                <h2 class="entry-title medium-text">
                                    Acercando el Mundo<br> 
                                    a Venezuela.
                                </h2>
                                <p>
                                    Appbb.co y RealizarPagos.com son plataformas que ofrecen a sus clientes fluidez y herramientas de pago a través de diversas monedas, facilitando el poder realizar compras de productos y mercancia en cualquier parte del mundo desde Venezuela (o desde cualquier otro país con dificultades de acceso al mercado global), permitiendo cambiar tu saldo virtual a moneda local y muchos otros servicios de gran utilidad!
                                    <br>
                                    Nos caracterizamos por nuestra responsabilidad y por ofrecer operaciones seguras. Realizamos nuestra labor desde hace 10 años apoyados por más de 27.000 fieles clientes que lo avalan.
                                </p>
                                <br>
                                <div class="button-holder text-left">
                                    <a href="https://www.appbb.co" class="button">
                                        Visita Appbb.co
                                    </a>
                                </div>
                            </div>

                            <div class="one_half last" data-threshold="0 0" data-jarallax-element="120 0">
                                <img src="images/about_01-compressor.jpg" alt="realizarpagos.com" />                     
                            </div>
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div> 

                
                <!-- Millstones Section -->
                <div id="millstones" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            GENERAMOS SEGURIDAD Y CONFIANZA             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <ul class="milestones-holder">

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">27k+</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Clientes en Venezuela y el mundo!</h5>
                                        <p class="milestone-text">
                        
                                        </p>
                                    </div>
                                </li>

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">101<br>K+</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Pedidos completados</h5>
                                        <p class="milestone-text">
                                            
                                        </p>
                                    </div>
                                </li>

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">10 años</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Superando, creciendo y avanzando</h5>
                                        <p class="milestone-text">
                                            
                                        </p>
                                    </div>
                                </li>

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">10+</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Monedas de intercambio y servicios disponibles!</h5>
                                        <p class="milestone-text">
                    
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>                        
                    </div>
                </div> 

                <!-- Contact Section -->
                <div id="contact" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            CONTACTO             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <div class="one_half ">
                                <p class="title-description-up">¿Alguna duda?</p>
                                <h2 class="entry-title medium-text">
                                    Escríbenos, estamos <br>
                                    para atenderte.
                                </h2>
                                <p>
                                    Porque sabemos lo mucho que te esfuerzas por conseguir tu dinero, nos tomamos muy en serio nuestro trabajo y la atención a nuestros clientes. ¿Tienes alguna duda? Estamos para guiarte en todo el proceso. 
                                </p>
                                <br>
                                <div class="social">
                                    <a href="https://facebook.com/appbb.co" target="_blank">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="https://twitter.com/app_bb" target="_blank">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="https://www.instagram.com/appbbinc/" target="_blank">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="javascript:void(Tawk_API.toggle())">
                                        <span class="fa fa-user"></span> Chat en vivo
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="https://wa.me/+17865692858">
                                        <span class="fa fa-whatsapp"></span> +1 (786) 5692858
                                    </a>
                                </div>
                            </div>
                        
                        </div>                        
                    </div>
                </div> 
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-content center-relative">
                    <div class="footer-logo">
                        <img src="images/logo.png" alt="realizarpagos.com" />
                    </div>        
                    <div class="footer-logo-divider"></div>
                    <div class="footer-mail">            
                        <a href="mailto:vys@appbb.co">Soporte: vys@appbb.co</a>
                    </div>
                    <div class="footer-social-divider"></div>
                    <div class="social-holder">
                        <a href="https://twitter.com/app_bb">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a href="https://facebook.com/appbb.co">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a href="https://www.instagram.com/appbbinc/">
                            <span class="fa fa-instagram"></span>
                        </a>

                    </div>

                    <div class="copyright-holder">
                        <a href="https://www.appbb.co">© 2020 Appbb Services LLC.</a>            
                    </div>
                </div>
            </footer>
        </div>

        <!--Load JavaScript-->
        <script src="js/jquery.js"></script>			                                       
        <script src="js/jquery.sticky.js"></script>			                                       
        <script src="js/tipper.js"></script>			                                       
        <script src="js/jarallax.js"></script>			                                       
        <script src="js/jarallax-element.min.js"></script>			                                       
        <script src='js/imagesloaded.pkgd.js'></script>                
        <script src='js/jquery.fitvids.js'></script>                
        <script src='js/jquery.smartmenus.min.js'></script>                                 
        <script src='js/isotope.pkgd.js'></script>                                                 
        <script src='js/owl.carousel.min.js'></script>                          
        <script src='js/jquery.sticky-kit.min.js'></script>                          
        <script src='js/main.js'></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/578d0089e05c19c163656b8c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--Funcion para Recaptcha-->
<script>

</script>
<!-- Política de Cookies -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#eaf7f7",
      "text": "#5c7291"
    },
    "button": {
      "background": "#e87725",
      "text": "#ffffff"
    }
  },
  "theme": "edgeless",
  "position": "bottom-left",
  "content": {
    "message": "Este sitio web utiliza cookies para garantizarle la mejor experiencia de navegación.",
    "dismiss": "Seguir navegando!",
    "link": "Leer más",
    "href": "https://www.appbb.co/politica-de-cookies/"
  }
});
</script>
    </body>
</html>