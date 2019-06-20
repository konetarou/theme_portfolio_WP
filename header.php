<?php
wp_deregister_script( 'jquery' );
wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
wp_head();

?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --><!-- bootstrap CDN -->
		<link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory'); ?>/bootstrap.min.css" type="text/css" /><!-- use custom bootstrap -->
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --><!-- ※プラグインでjqueryを呼び出しているので不要 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

		<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
		
	</HEAD>

	<BODY>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">Portfolio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu(array(
					'menu' => 'headerMenu',
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarNav',
					'menu_class' => 'navbar-nav'
				));
			?>
			
		</nav>
	
	<div class="container-fluid">

<br /><br /><br /><br />