<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="/wp-content/themes/twentytwentyone/stylesheet/main.min.css" rel="stylesheet" type="text/css">
	<script
		src="https://code.jquery.com/jquery-3.6.1.min.js"
		integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
		crossorigin="anonymous">
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<div class="home-big-banner big-banner">
				<div class="big-banner__item big-banner-slide">
					<div class="big-banner-slide__img">
						<img src="wp-content/themes/twentytwentyone/image/design/banners/banner-1.jpg" alt="">
					</div>
					<div class="big-banner-slide__text">
						<span class="big-banner-slide__header">Альцест - це справжній інструмент!</span>
						<p class="big-banner-slide__description">Приносити користь клієнтам - краще, що ми можемо зробити! Інструменти, витратні матеріали, верстати та обладнання, все для саду.</p>
						<a class="btn btn_primary big-banner-slide__btn" href="/">Обрати інструмент</a>
					</div>
				</div>
			</div>
			
			<div id="about-us" class="home-about-us about-us container">
				<div class="about-us__text">
					<div class="decorated-title about-us__title">
						<h1 class="decorated-title__text">ПРО КОМПАНІЮ</h1>
					</div>
					<p class="about-us__description">Компанія «Альцест» заснована в 1991 році, а сьогодні - одна з найбільших
						національних операторів професійного інструменту, обладнання і садово-паркової техніки в Україні. В
						асортименті інтернет-магазину тільки найнадійніші торгові марки, такі як Bosch, Makita, Metabo, DeWalt,
						Gruntek, Gardena, Husqvarna, Karcher, Masalta, Stark, S &amp; R, AL-KO, Oleo-Mac і безліч інших.</p>
					<p class="about-us__description">Купуючи в інтернет-магазині «Альцест», Ви можете бути впевнені в якості
						продукції - весь товар поставляється безпосередньо від провідних виробників світу.</p>
				</div>
				<div class="about-us__img">
					<img src="wp-content/themes/twentytwentyone/image/design/decor/decor1.jpg" alt="">
				</div>
			</div>

			<div id="our-benefits" class="home-our-benefits our-benefits">
				<div class="container">
					<div class="decorated-title our-benefits__title">
						<h1 class="decorated-title__text">ЧОМУ ОБИРАЮТЬ АЛЬЦЕСТ?</h1>
					</div>
					<div class="our-benefits__box">
						<div class="our-benefits__item">
							<div class="our-benefits__item-icon"><i class="benefit1"></i></div>
							<p class="our-benefits__item-header">30 років успішної роботи</p>
							<p class="our-benefits__item-description">За три десятилітя ми працювали з відлмими брендами та випустили а ринок чимало власних торгових марок</p>
						</div>
						<div class="our-benefits__item">
							<div class="our-benefits__item-icon"><i class="icon icon-0004-benefit2"></i></div>
							<p class="our-benefits__item-header">Оригінальні інструменти</p>
							<p class="our-benefits__item-description">За три десятилітя ми працювали з відлмими брендами та випустили а ринок чимало власних торгових марок</p>
						</div>
						<div class="our-benefits__item">
							<div class="our-benefits__item-icon"><i class="icon icon-0005-benefit3"></i></div>
							<p class="our-benefits__item-header">100% наявність товару</p>
							<p class="our-benefits__item-description">За три десятилітя ми працювали з відлмими брендами та випустили а ринок чимало власних торгових марок</p>
						</div>
						<div class="our-benefits__item">
							<div class="our-benefits__item-icon"><i class="benefit4"></i></div>
							<p class="our-benefits__item-header">Гарантійний ремонт</p>
							<p class="our-benefits__item-description">За три десятилітя ми працювали з відлмими брендами та випустили а ринок чимало власних торгових марок</p>
						</div>
						<div class="our-benefits__item">
							<div class="our-benefits__item-icon"><i class="icon icon-0007-benefit5"></i></div>
							<p class="our-benefits__item-header">Чесна ціна</p>
							<p class="our-benefits__item-description">За три десятилітя ми працювали з відлмими брендами та випустили а ринок чимало власних торгових марок</p>
						</div>
						<div class="our-benefits__item">
							<div class="our-benefits__item-icon"><i class="icon icon-0008-benefit6"></i></div>
							<p class="our-benefits__item-header">Зручні форми оплати</p>
							<p class="our-benefits__item-description">За три десятилітя ми працювали з відлмими брендами та випустили а ринок чимало власних торгових марок</p>
						</div>
					</div>
				</div>
			</div>

			<div class="our-trademarks home-our-trademarks container">
				<div class="our-trademarks__title decorated-title decorated-title_center">
					<h1 class="decorated-title__text">наші торгові марки</h1>
				</div>
				<div class="our-trademarks__box">
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark1.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark2.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark3.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark4.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark5.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark6.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark7.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark8.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark9.png" alt=""></div>
					<div class="our-trademarks__item"><img src="wp-content/themes/twentytwentyone/image/design/trademarks/trademark10.png" alt=""></div>
				</div>
			</div>

			<div class="home-our-directions our-directions">
				<div class="container">
					<div class="our-directions__title decorated-title decorated-title_center">
						<h1 class="decorated-title__text">наші направлення</h1>
					</div>
					<div class="our-directions__description">
						<p class="our-directions__description-text">Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
					</div>
					<div class="our-directions__box">
						<div class="our-directions__item">
							<div class="our-directions__item-img">
								<img src="wp-content/themes/twentytwentyone/image/design/decor/direction1.jpg" alt="">
							</div>
							<div class="our-directions__item-text">
								<h4 class="our-directions__item-title">Електричні та акумуляторні інструменти</h4>
								<div class="our-directions__item-description">
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
								</div>
							</div>
						</div>
						<div class="our-directions__item">
							<div class="our-directions__item-img">
								<img src="wp-content/themes/twentytwentyone/image/design/decor/direction2.jpg" alt="">
							</div>
							<div class="our-directions__item-text">
								<h4 class="our-directions__item-title">Ручні інструменти та витратні матеріали</h4>
								<div class="our-directions__item-description">
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
								</div>
							</div>
						</div>
						<div class="our-directions__item">
							<div class="our-directions__item-img">
								<img src="wp-content/themes/twentytwentyone/image/design/decor/direction3.jpg" alt="">
							</div>
							<div class="our-directions__item-text">
								<h4 class="our-directions__item-title">Будівельна техніка та обладнання</h4>
								<div class="our-directions__item-description">
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
								</div>
							</div>
						</div>
						<div class="our-directions__item">
							<div class="our-directions__item-img">
								<img src="wp-content/themes/twentytwentyone/image/design/decor/direction4.jpg" alt="">
							</div>
							<div class="our-directions__item-text">
								<h4 class="our-directions__item-title">Все для лісу, саду та газону</h4>
								<div class="our-directions__item-description">
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
									<p>Ми пропонуємо виключно якісні інструменти з офіційною гарантією. Якщо ви не знайдете потрібній товар, ми завжди готові привезти його під замовлення</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="home-mini-banner mini-banner">
				<div class="container mini-banner__box mini-banner__box_right">
					<div class="mini-banner__img mini-banner__img_right"><img src="wp-content/themes/twentytwentyone/image/design/decor/decor3.png" alt=""></div>
					<div class="mini-banner__text mini-banner__text_flex-direction-row">
						<h3 class="mini-banner__header">Зв’яжіться з нами<br><span class="text-color_orange">зручним для вас</span><br>способом.</h3>
						<div class="mini-banner__contacts">
							<div class="header__contacts">
								<div class="header__phones">
									<a class="text-color_orange" href="tel:0800403000">0 800 403 000</a>
									<span class="text-color_white">Безкоштовно по Україні</span>
								</div>
								<div class="header__socials">
									<a href="#"><i class="icon icon-0001-facebook"></i></a>
									<a href="#"><i class="icon icon-0002-youtube"></i></a>
								</div>
								<div class="header__emails">
									<a class="text-color_white" href="mailto:info@altsest.com">info@altsest.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
