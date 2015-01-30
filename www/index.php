<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!— Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- Cycle2 - Слайдер-баннер -->
		<script type="text/javascript" src="/js/jquery.cycle2.js"></script>

	</head>
	<body>
		<header>
			<div class="bg_header">
				<div class="bg_top_header">
					<a href="/" id="logo"></a>
					<div class="personal_cabinet">
						<div class="top_menu"><a href="#">О компании</a><a href="#">Контакты</a></div>
						<div class="phone"><span>+7 495</span> 642-24-24</div>
						<div class="clear_div">&nbsp;</div>
						<div class="personal_form">
							<form class="form_personal" method="post" action="#">
								<input type="text" name="USER_NAME" maxlength="30" placeholder="логин" size="30" required="required" value="" />
								<input type="text" name="PASSWORD" maxlength="30" placeholder="пароль" size="30" required="required" value="" />
								<button name="Exit" value="" type="submit">вход</button>
								<a class="registration" href="#">регистрация</a>
							</form>
						</div>
					</div>
					<div class="clear_div" style="height: 0px;">&nbsp;</div>
					<div class="header-info">
						<div class="box_info">Доставка по Москве и в регионы</div>
						<div class="box_info">Отгрузка самовывозом с единого склада</div>
						<div class="box_info">Приём и обслуживание заказов</div>
					</div>
					<form class="form_search" autocomplete="on" method="get" action="/" >
						<input class='search' name="name" type="text" value="" />
						<input class="button_search" type="submit" value="найти" />
					</form>
				</div>
				<div class="block-slider">
					<div class="slider_header">
						<div class="cycle-slideshow" data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-fx="scrollHorz" data-cycle-slides="> div" data-cycle-timeout=3000 >
							<div>
								<a href="#"><img src="/images/slide-1.png"></a>
							</div>
							<div>
								<a href="#"><img src="/images/slide-1.png"></a>
							</div>
						</div>
						<div class="slider_navigate">
							<a href="#" class="prev"></a>
							<a href="#" class="next"></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="clear_div">&nbsp;</div>
		<main>
			<div class="wrap_catalog-block">
				<div class="catalog-block">
					<h1><a href="#">Каталог</a></h1>
					<ul>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog1.png" />
								<div>Керамическая плитка</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog2.png" />
								<div>Керамический гранит</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog3.png" />
								<div>Клинкер</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog4.png" />
								<div>Мозаика</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog5.png" />
								<div>Сантехника</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog6.png" />
								<div>Мебель для ванных комнат</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog7.png" />
								<div>Напольные покрытия</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog8.png" />
								<div>Сопутствующие товары</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog9.png" />
								<div>Наливные полы 3D</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog10.png" />
								<div>Сухие смеси</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog11.png" />
								<div>Душевые кабины</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog12.png" />
								<div>Аксессуары для ванных комнат</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog13.png" />
								<div>Обои</div>
							</a>
						</li>
						<li class="box">
							<a href="#">
								<img src="/images/img_group-catalog14.png" />
								<div>Лакокрасочная продукция</div>
							</a>
						</li>
						<li class="box">
							<img style="margin: -8px;" src="/images/img_group-catalog15.png" />
						</li>
					</ul>
				</div>
			</div>
			
			<div class="catalog_pdf">
				<h1>Каталоги в PDF <a href="#">скачать</a></h1>
			</div>
			
			<div class="clear_div" style="background-color: #f0f0f0; height: 15px;">&nbsp;</div>
			
			<div class="novinki_news-block">
				<div class="novinki_block">
					<h1>Новинки</h1>
					<p><a class="pdf" href="#" target="_blank">2014г.  ноябрь-декабрь</a><br />
					<a class="pdf" href="#" target="_blank">2014г. сентябрь-октябрь</a><br />
					<a class="pdf" href="#" target="_blank">2014г. август-сентябрь</a></p>
					<p><a class="all" href="#">все новинки</a></p>
				</div>
				
				<div class="news_block">
					<h1>Новости</h1>
					<div class="news">
						<div class="time">05.12.2014</div>
						<div class="description">Уважаемые партнеры, сообщаем вам об изменении цен: с 05.12.14 Изменение продажных цен -
Нефрит с 08.12.14 Изменение продажных цен - Китай, Испания, Италия Изменение цен на Paradyz-
Rixos Beige Керамогранит глазурованный 40x40 и Rixos Brown Керамогранит глазурованный 40x40</div>
					</div>
					<div class="news">
						<div class="time">05.12.2014</div>
						<div class="description">Уважаемые партнеры, сообщаем вам об изменении цен: С 06.12: Konskie Paradyz</div>
					</div>
					<p><a class="all" href="#">все новости</a></p>
				</div>
				
			</div>
		</main>

		<footer>
			<div class="footer_block">
				<div class="bottom_menu">MOSKERAMICA.RU © 2014 <a href="#">О компании</a><a href="#">Контакты</a> <b>+7 495 642-24-24</b></div>
				<div class="copyright"><a target="_blank" href="http://www.divier.ru/">Создание сайта</a> ДиВиЕР</div>
			</div>
		</footer>
	</body>
</html>