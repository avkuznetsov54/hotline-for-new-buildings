<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Горячая линия по новостройкам!</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#fff">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="header__top-logo">
							<img class="header__top-logo-img" src="img/logo-matr-dvor.png" alt="">
							<img class="header__top-logo-img" src="img/logo-kva-black-bg-none.png" alt="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="header__top-phone">
							<a class="header__top-phone-top" href="tel:+73832588444">
								<div class="animation-icon-box"><i class="fas fa-phone"></i></div> +7 (383) 258-84-44
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="header__top-button">
							<div class="button-move" data-toggle="modal" data-target="#myModal-ekskur">
								Записаться на экскурсию
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__body">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-7">
						<div class="header__body-text">
							<div>
								<h1 class="h1">Квартиры в<br>ЖК «Матрешкин Двор»</h1>
								<p class="fz2rem">от 9 630 руб./мес.*</p>
								<p class="fz2rem">Оформление ипотеки без комиссий</p>
								<p class="fz08rem">*Платеж по ипотечной программе от ПАО "Банк ВТБ", ставка 9,3 % годовых с первоначальным взносом 15 % на 20 лет</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5 col-lg-5">
						<div class="header__body-form">
							<div>
								<form class="transparent form-zayvka gform">
									<div class="form-title">Мы расскажем, как выгодно купить квартиру!</div>

									<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
									<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
									<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
									<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
									<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

									<div><input type="hidden" name="field2" value="Заказать звонок"></div>
									<div><input type="hidden" name="field3" value="header"></div>

									<div class="field">
										<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
										<i class="fas fa-user"></i>
									</div>
									<div class="field">
										<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
										<i class="fas fa-phone"></i>
									</div>
									<div class="field">
										<button class="button-move" type="submit">Отправить</button>
									</div>
									<p class="declaration">Нажимая на кнопку «ОТПРАВИТЬ», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
										target="_blank">персональных данных</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header__body-downtext">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/0procent.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											Без комисии, без переплат!
										</div>
										<div class="header__body-downtext-block-anons">
											При покупке квартиры в ЖК «Матрешкин Двор», Вы не платитите комиссию агентству недвижимости.
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/clipboards.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											ИПОТЕКА
										</div>
										<div class="header__body-downtext-block-anons">
											Помощь в подготовке пакета документации, чтобы купить квартиру на выгодных условиях ипотеки.
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/family.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											Доступные цены
										</div>
										<div class="header__body-downtext-block-anons">
											Цены, не превышающают среднерыночные показатели. Наличие различных акций или скидок.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div style="height:1000px;"></div>

		<div class="request">
			<div class="request__bg"></div>
			<div class="request__body">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
							<div class="request__body-title">
								<h2>Сопровождение сделки бесплатно!</h2>
								<p>От выбора квартиры до регистрации договора.</p>
							</div>
						</div>
						<div class="col-md-10 offset-md-1">
							<div class="request__body-form">
								<form class="transparent form-zayvka gform">

									<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
									<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
									<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
									<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
									<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

									<div><input type="hidden" name="field2" value="Заказать экскурсию"></div>
									<div><input type="hidden" name="field3" value="топ меню"></div>

									<div class="field">
										<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
										<i class="fas fa-user"></i>
									</div>
									<div class="field phone">
										<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
										<i class="fas fa-phone"></i>
									</div>
									<div class="field">
										<button class="button-move" type="submit">Отправить</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-8 offset-md-2">
							<span class="request__body-declaration">Нажимая на кнопку «отправить»,<br> Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/" target="_blank">персональных данных</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>





		<footer class="footer">
			<div class="container">
				<div class="footer__body">
					<div class="row">
						<div class="col-md-7">
							<div class="footer__body-text">
								<p>1994–2018 © Агентство недвижимости КВАДРОТЕКА™ <span>(OOO "Сибакадемстрой Недвижимость")</span></p>
								<a href="http://www.sasn.ru/about/personaldata/" target="_blank">Положения об обработке персональных данных</a>
							</div>
						</div>
						<div class="col-md-5">
							<ul class="footer__body-social">
								<li><a href="http://vk.com/sasn_nsk" target="_blank"><i class="fab fa-vk"></i></a></li>
								<li><a href="https://www.facebook.com/groups/kvadroteka/" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/kvadroteka/" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="http://www.youtube.com/user/wwwwSASNru" target="_blank"><i class="fab fa-youtube"></i></a></li>
								<li><a href="https://ok.ru/kvadroteka" target="_blank"><i class="fab fa-odnoklassniki"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="footer__desc">
								Информационные материалы и цены размещенные на сайте носят исключительно информационный характер, не являются публичной офертой, не могут рассматриваться, как публичное предложение к заключению сделки.
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>



		<!-- Modal заказать экскурсию топ меню-->

		<div class="modal" id="myModal-ekskur" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
			<div class="modal-dialog modal-dialog-centered" role="dialog">
				<div class="modal-content">
					<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<div class="modal-body-title">
							Отправить заявку
						</div>
						<form class="transparent form-zayvka gform">

							<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
							<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
							<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
							<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
							<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

							<div><input type="hidden" name="field2" value="Заказать экскурсию"></div>
							<div><input type="hidden" name="field3" value="топ меню"></div>

							<div class="field">
								<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
								<i class="fas fa-user"></i>
							</div>
							<div class="field phone">
								<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
								<i class="fas fa-phone"></i>
							</div>
							<div class="field">
								<button class="button-move" type="submit">Отправить</button>
							</div>
							<p class="declaration">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
								target="_blank">персональных данных</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal END заказать экскурсию топ меню-->

				<div class="top-move-bt">
					<i class="fas fa-angle-double-up"></i>
				</div>


				<script src="js/scripts.min.js"></script>

			</body>

			</html>