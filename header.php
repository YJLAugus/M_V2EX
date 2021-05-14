<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="user-scalable=yes">
	
	<title><?php if ( is_tag() ) { echo wp_title('Tag:');if($paged > 1) printf(' - 第%s页',$paged);echo ' | '; bloginfo( 'name' );} elseif ( is_archive() ) {echo wp_title('');  if($paged > 1) printf(' - 第%s页',$paged);    echo ' | ';    bloginfo( 'name' );} elseif ( is_search() ) {echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );} elseif ( is_home() ) {bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);}  elseif ( is_404() ) {echo '404错误 页面不存在！ | '; bloginfo( 'name' );} else {echo wp_title( ' | ', false, right )  ; bloginfo( 'name' );} ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--link rel="stylesheet" type="text/css" href="style.css" media="screen"-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<script src="https://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js?v=1.8.3&type=1"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<body class="<?php echo($_COOKIE['night'] == '1' ? 'night' : ''); ?>">
<header id="header">
	<section id="head-wrapper" role="banner">
		<div id="logo">
			<h1 id="site-url">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			
			
		</div>
		<div id="top-search-box">
			
			<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" placeholder="" title="Search" name="s" id="s" x-webkit-speech="x-webkit-speech"/>
				   

			</form>
			
		</div>
		
		
		<a id="theme-light" class="theme-btn" data-index="0" href="javascript:switchNightMode();" title="night" style="display: inline;">
  <svg viewBox="0 0 512 512" class="svg fill-current">
    <path opacity=".4" d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"></path><path d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7-47.066 26.719-76.133 76.679-76.1 130.8 0 94 85.4 165.4 178.5 147.7z"></path>
  </svg>
</a>
		<nav id="top-nav" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>	
		</nav>
		<div class="clearfix"></div>
	</section>
</header>
<div id="shadow"></div>
