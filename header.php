<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<!--head start -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<!-- head end -->

<!-- body start -->
<body>
	
	<!-- header start -->
	<header>
        
        <ol id="button-menu-ol-list">
                            <li>
                                <a>        
                                    <div class = "menu-button">
                                        <div class = "menu-stripe"></div>
                                        <div class = "menu-stripe"></div>
                                        <div class = "menu-stripe"></div>
                                    </div>
                                </a>
                                  <ul>
                                    <li><a href="http://marenty.cba.pl">Home</a></li>
                                    <li><a href="http://marenty.cba.pl/o-mnie">O mnie</a></li>
                                    <li><a>Natura</a>
                                        <ol>
                                            <li><a href="http://marenty.cba.pl/galeria/galeria-natura/galeria-lasow">Lasy</a></li>
                                        </ol>
                                      </li>
                                    <li><a>Narzędzia</a>
                                        <ol>
                                            <li><a href="http://marenty.cba.pl/galeria/galeria-narzedzi/26-2">Piły</a></li>
                                            <li><a href="http://marenty.cba.pl/galeria/galeria-narzedzi/38-2">Siekiery</a></li>
                                        </ol>
                                    </li>
                                  </ul>
                            </li>
                        </ol>
        

		
		<!-- logo image and blog title -->
		<div id="logo-box">
            <a href="<?php echo get_option('home'); ?>">
                <div id = "logo"><img src="/wp-content/themes/dw-szablon/img/siekierki.png" alt="Mountain View"></div>
                <div id = "blogtitle">
                    <h1 id="title"><?php bloginfo('name'); ?></h1>
                    <h2 id="description"><?php bloginfo('description'); ?></h2>
                </div>
            </a>
        </div>
		
        <!-- logo image and blog title end -->

		
		<!-- top menu start -->
		<nav id="menu-top" role="navigation">
            <div class = "grid-nav">
                    <div id="link-a"><a href="http://marenty.cba.pl/">Strona główna</a></div>
                    <div id ="link-b">
                        <ol id="menu-ol-list">
                            <li>
                                <a>Galeria</a>
                                  <ul>
                                    <li><a>Natura</a>
                                        <ol>
                                            <li><a href="http://marenty.cba.pl/galeria/galeria-natura/galeria-lasow">Lasy</a></li>
                                        </ol>
                                      </li>
                                    <li><a>Narzędzia</a>
                                        <ol>
                                            <li><a href="http://marenty.cba.pl/galeria/galeria-narzedzi/26-2">Piły</a></li>
                                            <li><a href="http://marenty.cba.pl/galeria/galeria-narzedzi/38-2">Siekiery</a></li>
                                        </ol>
                                    </li>
                                  </ul>
                            </li>
                        </ol>
                    </div>
                    <div id="link-c"><a href=http://marenty.cba.pl/o-mnie/>O mnie</a></div>

            </div>
		</nav>
		<!-- top menu end -->
		
	</header>
	<!-- header end -->