<?php

	if(isset($_POST['submit'])) {
		$to = 'my.worktest94@gmail.com';

		$place = $_POST["place"];
		$datefrom = $_POST["datefrom"];
		$dateto = $_POST["dateto"];
		$people = $_POST["people"];

		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];

		

		$subject = 'the subject';
		$message = "Направление:" . " " . $place . "\r\n" . "С:" . " " . $datefrom . "\r\n" . "Do:" . " " . $dateto . "\r\n" . "Сколько людей:" . " " . $people . "\r\n" . "Name:" . " " . $name . "\r\n" . "\r\n" . "Phone:" . " " . $phone . "\r\n" . "Email" . " " . $email;
		'Reply-To:' . " " . $mail . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);

	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
		<link rel="stylesheet" type="text/css" href="platinum.css">
    	<title>platinum travel</title>




		<!--Calendar.  -->

		<meta charset = "utf-8">
      	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      	<!-- Javascript -->
      	<script>
         	$(function() {
            	$( "#datepicker-10" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1]
            	});
         	});
      	</script>
	</head>
	
	<body>
		<div id="class_container">
			
			<div id="header">
				<div class="logo"><a><img src="img/logo.png"></a></div>
				
				<div class="navigation">
					<ul>
						<li><a href="#">home</a></li>
						<li><a href="#">about</a></li>
						<li><a href="#">tours</a></li>
						<li><a href="#">why us</a></li>
						<li><a href="#">contacts</a></li>
					</ul>
				</div>

				<form id="form" name="orderform" method="post" action="index.php">
					<div class="wrap">
						<div class="block1 column">
							<div class="text">
								<a> Направление: <span class="inputs"><input type="text" name="place" size="40" required="required" placeholder="Place"></span></a>
							</div>
						</div>
							
						<div class="block2 column">
							<div class="text">
								<!-- <a> C: <span class="inputs"><input type="date" name="datefrom" class="wpcf7-date" placeholder="dd/mm/yyyy"></span></a> -->

								<a> C: <span class="inputs"><input class="wpcf7-date" name="datefrom" type = "text" readonly="readonly" id = "datepicker-10"></spam></a>


							</div>
						</div>

						<div class="block2 column">
							<div class="text">
								<!-- <a> Do: <span class="inputs"><input type="date" name="dateto" class="wpcf7-date" placeholder="dd/mm/yyyy"></span></a> -->
								<a>Do: <span class="inputs"><input class="wpcf7-date" name="datefrom" type = "text" readonly="readonly" id = "datepicker-10"></spam></a>
							</div>
						</div>

						<div class="block3 column">
							<div class="text">
								<a>Сколько людей: <span class="inputs"><input type="text" name="people" class="wpcf7-date" placeholder="people"></span></a>
							</div>
						</div>

						<div class="block4 block4_column">
							

							<div class="dropdown">
								<button class="dropbtn">continue</button>
								<div class="dropdown-content">
									<a>Name: <span class="inputs"><input type="text" name="name" class="wpcf7-date" placeholder="name"></span></a>
									<a>Phone: <span class="inputs"><input type="text" name="phone" class="wpcf7-date" placeholder="phone"></span></a>
									<a>Email: <span class="inputs"><input type="text" name="email" class="wpcf7-date" placeholder="email"></span></a>
									<input class="blackbutton" type="submit" id="submit" name="submit" value="Send appointment">
								</div>
							</div>
						
						</div>
					</div>
				</form>
			
			</div>
			
			<div id="main">
				<div id="content">
					<div class="info">
						<img src="img/logo_2.png">
						<h1>Small luxury travel</h1>
						<p>Туристическая компания класса люкс, которая не оставит вас без<br>
						впечатлений об отдыхе на высшем уровне. <b>Platinum Travel</b> уважает личность и ее<br>
						статус - мы знаем всех своих клиентов в лицо.</p>
						<button class="about_us">О нас</button>
					</div>	
					
					<div class="wrap_1">
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
							<button class="book_a_tour">book a tour</button>
						</div>
					</div>
					<div class="photo photo_2"></div>
					<div class="photo photo_3"></div>
					<div class="photo photo_4"></div>
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
							<button class="book_a_tour">book a tour</button>
						</div>
					</div>
					<div class="photo photo_6"></div>
					</div>
					
					<div class="block_why_us">
					<div class="whyus"><h3>Почему мы?</h3></div>
					
					<div class="wrap_2">
						<div class="blocks content">
							<table class="table">
							<tr><td><div class="image"><img src="img/1.png"></div></td></tr>
							<tr><td><div class="content_info"><h1>Лучший сервис</h1></div></td></tr>
							</table>
						</div>
						<div class="blocks content">
							<table class="table">
							<tr><td><div class="image"><img src="img/2.png"></div></td></tr>
							<tr><td><div class="content_info"><h1>Бронирование</h1><br>
							<h2>отелей и авиабилетов</h2></div></td></tr>
							</table>
						</div>
						<div class="blocks content">
							<table class="table">
							<tr><td><div class="image"><img src="img/3.png"></div></td></tr>
							<tr><td><div class="content_info"><h1>Трансфер</h1><br>
							<h2>Услуги консьержа</h2></div></td></tr>
							</table>
						</div>
					</div>
					</div>
					
					<div class="wrap_3">
					<div class="cell1 background1"></div>
					<div class="cell2 background2">
					<div class="text_block">
					<h3>Morocco tour</h3>
					<div class="text_border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
					<p class="signature">-Martin</p>
					</div>
					</div>
					</div>
					
					<div class="slogan">
					<h4>Готовы обсудить всё лично или при встрече?</h4>
					<div class="text_border_slogan_top"></div>
					<p>Позвоните или напишите нам и мы поможем вам сделать ваш отдых самым<br> незабываемым</p>
					<div class="text_border_slogan_bottom"></div>
					</div>
					
				</div>
			</div>
			
			<div id="footer">
				<div class="flex" id="footer_info">
				<div class="footer_block" style="width: 6%"><img src="img/logo.png" width="100%;" style="padding-top: 2vw;"></div>
					<div class="footer_block">
					<h1>Travel with us!</h1>
					<p>Туристическая компания класса<br> 
					люкс, которая не оставит вас без<br> 
					впечатлений об отдыхе на высшем<br> 
					уровне. Platinum Travel уважает<br> 
					личность и ее статус - мы знаем<br> 
					всех своих клиентов в лицо.</p>
					</div>
					
					<div class="footer_block">
					<h1>Contact us</h1>
					<p>Gertrudes iela 20, entrance<br>
					from Akas iela, Riga, Latvia<br>
					info@platinumtravel.lv<br>
					Tel: +371 6729 0016 / 17<br>
					Mobile: +371 2913 5343<br></p>
					</div>
					
					<div class="footer_block">
						<h1>Content</h1>
					<ul>
						<li>home</li>
						<li>tours</li>
						<li>about us</li>
						<li>contacts</li>
					</ul>
					</div>
					
					<div class="footer_block">
						<h1>Tours</h1>
					<ul>
						<li>Japan</li>
						<li>Morocco</li>
					</ul>
					</div>
					
					<div class="footer_block"><h1>Tags</h1></div>
					
					<div class="footer_block" style="text-align: center;"><h1>Follow</h1>
					<div class="footer_links"><a><img src="img/socials/facebook.png" width="15%"></a></div>
					<div class="footer_links"><a><img src="img/socials/twitter.png" width="25%"></a></div>
					<div class="footer_links"><a><img src="img/socials/instagram.png" width="25%"></a></div>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>