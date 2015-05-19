<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php if (is_front_page () ) echo 'Душ Алексеева'; else wp_title('', true, 'right'); ?></title>
	<link rel="shortcut icon" href="http://dushalekseeva1.ru/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/css-reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_head(); ?>
</head>
<body>
<header>
	<h1>Душ Алексеева</h1>
	<strong>Официальный интернет-магазин</strong>
	<div class="top-label label">
		<strong>БЕСПЛАТНАЯ ДОСТАВКА</strong><br>
		по всей России
	</div>
	<nav>
		<ul>
			<li><a href="" class="active">Душ Алексеева</a></li>
			<li><a href="">Статьи</a></li>
			<li><a href="">Каталог</a></li>
			<li><a href="">Вопросы</a></li>
			<li><a href="">Отзывы</a></li>
			<li><a href="">Оформить заказ</a></li>
		</ul>
	</nav>
</header>
<div id="content">
	<div class="content-wrapper">