<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/platinum.css">
		<link rel="stylesheet" type="text/css" href="style/platinum_mobile.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script> 
		<script type="" src="js/content.js"></script>
		
      	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
      	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    	<title>platinum travel</title>
		<style>
		#header{
			background-image: url(img/background-1.jpg) !important;
			    background-size: 111%;
			    background-repeat: no-repeat !important;
			    height: 45vw !important;
			    position: relative;
			    background-position-y: 2% !important;
			    background-position-x: 1%;
		}
		</style>


	</head>
	
	<body>
		<div id="class_container">
			
			<?php include 'assets/header.php'; ?>
		
			<div id="mobile_form">
			
				<div class="mobile_form">
				
					<form id="form" name="orderform" method="post" action="index.php">
						<div class="block1 column">
							<div class="text">
								<a> Направление: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['place']) && $errors['place'] == 0){ echo $_POST['place']; } ?>" name="place" size="40" required="required" placeholder="Place" style="width: 15vw;"></span></a>
							</div>

							<!--ERRROR  -->
							<?php echo ($error_message_p); ?>
							<?php echo ($error_message_p2); ?>
							<?php echo ($error_message_p3); ?>
							<!--END-->
						</div>
								
					<div class="block2 column">
						<div class="text">
							<label>C: </label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_POST['datefrom']) && $errors['datefrom'] == 0 ){ echo $_POST['datefrom']; } ?>" name="datefrom" type = "text" readonly="readonly" id = "datepicker-12"></spam>
						</div>

						<?php echo ($error_message_df); ?>
						<?php echo ($error_message_no); ?>
					</div>

					<div class="block2 column">
						<div class="text">
							<label>До: </label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_POST['dateto']) && $errors['dateto'] == 0){ echo $_POST['dateto']; } ?>" name="dateto" type = "text" readonly="readonly" id = "datepicker-13"></spam>
						</div>

						<?php echo ($error_message_dt); ?>
						<?php echo ($error_message_no); ?>
					</div>

						<div class="block3 column">
							<div class="text">
								<a>Количество человек: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['people']) && $errors['people'] == 0){ echo $_POST['people']; } ?>" name="people" class="wpcf7-date" placeholder="0" style="width: 4.5vw;"></span></a>
							</div><br>

							<?php echo ($error_message_peo); ?>
							<?php echo ($error_message_peo2); ?>
						</div>
						
						<div class="block1 column">
							<div class="text">
								<a>Name: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['name']) && $errors['name'] == 0){ echo $_POST['name']; } ?>" name="name" class="wpcf7-date" placeholder="name"></span></a>
								<?php echo ($error_message_n); ?>
								<?php echo ($error_message_n2); ?>
							</div>
						</div>
						
						<div class="block1 column">
							<div class="text">
								<a>Phone: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['phone']) && $errors['phone'] == 0){ echo $_POST['phone']; } ?>" name="phone" class="wpcf7-date" placeholder="phone"></span></a>
								<?php echo ($error_message_pho); ?>
								<?php echo ($error_message_pho2); ?>
							</div>
						</div>
						
						<div class="block1 column">
							<div class="text">
								<a>Email: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['email']) && $errors['email'] == 0){ echo $_POST['email']; } ?>" name="email" class="wpcf7-date" placeholder="email"></span></a>
								<?php echo ($error_message_em); ?>
							</div>
						</div>
						
							<input class="blackbutton" type="submit" id="submit" name="submit" value="Заказать">
					</form>

				
				</div>
		
			</div>
		
			<div id="main">
				<div id="content">
					<div id="about_us" class="info">
						<img src="img/logo_2.png">
						<h1>Small luxury travel</h1>
						<p>Туристическая компания класса люкс, которая не оставит вас без
						впечатлений об отдыхе на высшем уровне. <b>Platinum Travel</b> уважает личность и ее
						статус - мы знаем всех своих клиентов в лицо и  для нас конфиденциальность
						превыше всего!</p><br>
						
						<button id="toggler_box" class="about_us">О нас</button>
					</div>
					
					<div id="info" style="display:none">
						<h1>Что такое Platinum Travel </h1>
						<p>Platinum travel - представительство отелей категории de luxe. 
						В настоящее время в нашей коллекции 42 отеля категории de luxe, 
						расположенных в Европе, Азии и Африке. тоит особо отметить, что 
						коллекция отелей создавалась нами путем тщательного отбора, поэтому 
						каждый из отелей, представляемых Platinum Travel является лучшим в 
						своем городе, регионе или стране. 34 из них располагают прекрасно 
						оборудованными SPA-центрами, в большинстве гостиниц есть отличные 
						возможности для MICE (организация выездных мероприятий для групп). 
						В нашей коллекции Вы также найдете отели, находящиеся на морских 
						курортах (Греция, Италия, Кипр, Карибские острова, Сейшельские острова, 
						Таиланд, Франция), или на озерах (Италия, Швейцария) горнолыжные отели - 
						в Куршевеле, Санкт-Морице и Гштааде, городские отели - в Лондоне, Париже, Вене, Цюрихе…
						</p>
					</div>

					<div class="wrap_2">
							<div class="blocks_logos">
								<img src="img/aman.png">
							</div>
							<div class="blocks_logos">
								<img src="img/belmond.png">
							</div>
							<div class="blocks_logos">
								<img src="img/seasons.png">
							</div>
							<div class="blocks_logos">
								<img src="img/mansour.png">
							</div>
					</div>
					
					<div class="wrap_2">
							<a href="poezda.php">
								<div class="blocks" id="first">
									<div class="content_info"><h1>Поезд</h1></div>
								</div>
							</a>
							<a href="golf.php">
								<div class="blocks" id="second">
									<div class="content_info"><h1>Гольф</h1>
									</div>
								</div>
							</a>
							<a href="auverda.php">
								<div class="blocks" id="third">
									<div class="content_info"><h1>Аюрведа</h1>
									</div>
								</div>
							</a>
					</div>
					
					<div id="why_us" class="block_why_us">
						<!--<div class="whyus"><h3>Почему мы?</h3></div>-->		
						
						<div class="round_buttons_why_us">
							<button id="flip_1"></button>
							<button id="flip_2"></button>
							<button id="flip_3"></button>
						</div>
						
						<script>
							$(document).ready(function(){
								$('.round_buttons_why_us button').click(function(){
									id = $(this).index()
									$('.wrap_2 .blocks').css('display','none')
										$('.wrap_2 .blocks:eq('+id+')').fadeIn(300)
								})
							});
						</script>
					</div>
					
					<div id="tours" class="wrap_1">
						<div class="photo photo_4"><div id="trim_3"></div></div>
						<div class="photo photo_2"></div>
						<div class="photo photo_1">
							<div class="text_on_photo">
								<h2>Япония</h2>
								<p>Страна восходящего солнца<br>
								Япония — кладезь утонченной<br>
								экзотики. Суперсовременный<br>
								Токио и живописная провин-<br>
								ция, снежная шапка Фудзи и<br>
								сакура в цвету, великолепные<br>
								пляжи островов Окинава и<br>
								древние памятники синтоизма<br></p>
								<a href="http://testplatinum.tk/contact.php"><button class="book_a_tour" dir="left">Оформить заказ</button></a>
							</div>
							<div class="hiden_form ">
								<div class="hidde" dir="left"></div>
								<form class="flex">
									<input type="text" name="name" placeholder="NAME:">
									<input type="text" name="phone" placeholder="TEL.">
									<input type="text" name="email" placeholder="EMAIL:">
									<input type="hidden" name="datefrom" value="-">
									<input type="hidden" name="dateto" value="-">
									<input type="hidden" name="place" value="Japan">

									<input type="submit" value="Send" name="submit" >
								</form>
							</div>
						</div>
						<div class="photo photo_3"><div id="trim"></div></div>
						<div class="photo photo_5">
							<div class="text_on_photo">
								<h2><span>Марокко</span></h2>
								<p><span>Марокко манит туристов араб-<br>
								ской и африканской экзотикой,<br>
								отличными пляжами Атлантики<br>
								и бескрайней пустыней Сахара.<br>
								Древний Фес и белоснежная Ка-<br>
								сабланка, отдых в Эс-Сувейре и<br>
								Агадире, колоритные базары и<br>
								восхитительная кухня</span><br></p>
								<a href="http://testplatinum.tk/contact.php"><button class="book_a_tour" dir="left">Оформить заказ</button></a>
							</div>
							<div class="hiden_form ">
								<div class="hidde" dir="left"></div>
								<form class="flex">
									<input type="text" name="name" placeholder="NAME:">
									<input type="text" name="phone" placeholder="TEL.">
									<input type="text" name="email" placeholder="EMAIL:">
									<input type="hidden" name="datefrom" value="-">
									<input type="hidden" name="dateto" value="-">
									<input type="hidden" name="place" value="Morocco">

									<input type="submit" value="Send" name="submit" >
								</form>
							</div>
							<div id="trim_4"></div>
						</div>
						<div class="photo photo_6"></div>
						
					</div>
					
					<!--<div id="why_us" class="block_why_us">
						<div class="whyus"><h3>Почему мы?</h3></div>
					
						<div class="wrap_2">
							<div class="blocks content" id="first">
								<table class="table">
								<tr><td><div class="image"><img src="img/1.png"></div></td></tr>
								<tr><td><div class="content_info"><h1>Лучший сервис</h1></div></td></tr>
								</table>
							</div>
							<div class="blocks content" id="second">
								<table class="table">
								<tr><td><div class="image"><img src="img/2.png"></div></td></tr>
								<tr><td><div class="content_info"><h1>Бронирование</h1><br>
								<h2>отелей и авиабилетов</h2></div></td></tr>
								</table>
							</div>
							<div class="blocks content" id="third">
								<table class="table">
								<tr><td><div class="image"><img src="img/3.png"></div></td></tr>
								<tr><td><div class="content_info"><h1>Трансфер</h1><br>
								<h2>Услуги консьержа</h2></div></td></tr>
								</table>
							</div>
						</div>
						
						<div class="round_buttons_why_us">
							<button id="flip_1"></button>
							<button id="flip_2"></button>
							<button id="flip_3"></button>
						</div>
						
						<script>
							$(document).ready(function(){
								$('.round_buttons_why_us button').click(function(){
									id = $(this).index()
									$('.wrap_2 .blocks').css('display','none')
										$('.wrap_2 .blocks:eq('+id+')').fadeIn(300)
								})
							});
						</script>
					</div>-->
					
					<div id="tours_info">
					
						<div class="wrap_3" id="flip_tour_1">
							<div class="cell1 background1"><div id="trim_2"></div></div>
							<div class="cell2 background2">
							<div class="text_block">
							<h3>Orient-Express</h3>
							<div class="text_border"></div>
							<p>Более 100 лет Orient-Express продолжает свой путь по железным дорогам разных стран, неизменный в стремительном потоке времени. Выдающиеся личности этого столетия, писатели, государственные деятели, звезды кино, просто влюбленные и настоящие эстеты путешествовали поездом, всякий раз попадая под его очарование, все они привносили что-то новое в его характер.</p>
								<a href="http://testplatinum.tk/contact.php"><button class="book_a_tour" dir="left">Оформить заказ</button></a>

							<!--<p class="signature">-Martin</p>-->
							</div>
							</div>	
						</div>
						
						<div class="wrap_3" id="flip_tour_2" style="display: none;">
							<div class="cell1 background3"><div id="trim_2"></div></div>
							<div class="cell2 background2">
							<div class="text_block">
							<h3>Тур в Японию</h3>
							<div class="text_border"></div>
							<p>Страна восходящего солнца
							Япония — кладезь утонченной
							экзотики. Суперсовременный
							Токио и живописная провин-
							ция, снежная шапка Фудзи и
							сакура в цвету, великолепные
							пляжи островов Окинава и
							древние памятники синтоизма
							</p>
								<a href="http://testplatinum.tk/contact.php"><button class="book_a_tour" dir="left">Оформить заказ</button></a>

							<!--<p class="signature">-Martin</p>-->
							</div>
							</div>	
						</div>
						
						<div class="wrap_3" id="flip_tour_3" style="display: none;">
							<div class="cell1 background4"><div id="trim_2"></div></div>
							<div class="cell2 background2">
							<div class="text_block">
							<h3>Другие туры</h3>
							<div class="text_border"></div>
							<p>В нашей коллекции Вы также найдете отели, находящиеся на морских курортах (Греция, Италия, Кипр, Карибские острова, Сейшельские острова, Таиланд, Франция), или на озерах (Италия, Швейцария) горнолыжные отели - в Куршевеле, Санкт-Морице и Гштааде, городские отели - в Лондоне, Париже, Вене, Цюрихе…
							</p>
								<a href="http://testplatinum.tk/contact.php"><button class="book_a_tour" dir="left">Оформить заказ</button></a>
							
							<!--<p class="signature">-Martin</p>-->
							</div>
							</div>	
						</div>
					
					</div>
						<div class="round_buttons_web">
							<button id="flip_111"></button>
							<button id="flip_222"></button>
							<button id="flip_333"></button>
						</div>
						
						<script>
						$(document).ready(function(){
							$("#flip_111").click(function () {
								$("#flip_tour_1").css("display","flex");
								$("#flip_tour_2").css("display","none");
								$("#flip_tour_3").css("display","none");
							});
							$("#flip_222").click(function () {
								$("#flip_tour_2").css("display","flex");
								$("#flip_tour_1").css("display","none");
								$("#flip_tour_3").css("display","none");
							});
							$("#flip_333").click(function () {
								$("#flip_tour_3").css("display","flex");
								$("#flip_tour_2").css("display","none");
								$("#flip_tour_1").css("display","none");
							});
						});
						</script>	
					
					<div class="slogan">
					<h4>Всегда к Вашим услугам!</h4>
					<div class="text_border_slogan_top"></div>
					<p>Позвоните <b>+371  26131343</b> или напишите нам,<br> и мы поможем вам сделать ваш отдых самым незабываемым!</p>
					<div class="text_border_slogan_bottom"></div>
					</div>
					
				</div>
			</div>
			
			<?php include 'assets/footer.php'; ?>
		</div>
	</body>
</html>