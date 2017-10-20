<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/header.css">
<link rel="stylesheet" type="text/css" href="style/platinum_mobile.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

			<div id="header">
				<div class="logo"><a><img src="img/logo.png"></a></div>
				
				<div class="menu"><a id="toggler" href="#"><img src="img/menu.png"></a></div>
				<div id="box" style="display: none;">
				<a id="toggler_close" style="display:none" href="#"><div class="close"><img src="img/close.png"></div></a>
                    <div>
                    <ul class="box_li">
                    <li><a href="#" id="closeclose">Главная</a></li>
                    <li><a href="#" id="closeclose1">Туры</a></li>
                    <li><a href="#" id="closeclose2">О нас</a></li>
                    <li><a href="#" id="closeclose4">Контакты</a></li>
                    </ul>
                    </div>
                </div>
				<?php if(!$mailSuccess){ ?>
				
					<form id="form" name="orderform" method="post" action="index.php">
						<div class="wrap">
							<div class="block1 column">
								<div class="text">
									<a href="#header">ГЛАВНАЯ</a>
								</div>
							</div>

							<div class="block2 column">
								<div class="text">
									<a href="#about_us">О НАС</a>
								</div>
							</div>

							<div class="block2 column">
								<div class="text">
									<div class="dropdown1">
										<button class="dropbtn1">ТУРЫ</button>
										<div class="dropdown1-content">
										<ul>
											<li>Австрия </li>
											<li>Вьетнам </li>
											<li>Греция </li>
											<li>Индия </li>
											<li>Испания</li>
											<li>Италия </li>
											<li>Кипр</li>
											<li>Сейшелы</li>
											<li>Сен-Бартелеми </li>
											<li>Тайланд</li>
											<li>Франция</li>
											<li>Черногория </li>
											<li>Швейцария</li>
											<li>Хорватия</li>
											<li>Мальдивы </li>
											<li>Маврикий</li>
											<li>Шри ланка</li>
										</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="block3 column">
								<div class="text">
									<a href="#why_us">ПОЧЕМУ МЫ</a>
								</div>
							</div>

							<div class="block3 column">
								<div class="text">
									<a href="#footer">КОНТАКТЫ</a>
								</div>
							</div>
							
							<div class="block4_column column">
							
								<div class="dropdown">
									<button class="dropbtn">Оформить заказ</button>
									<div class="dropdown-content">
										<a>Name: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['name']) && $errors['name'] == 0){ echo $_POST['name']; } ?>" name="name" class="wpcf7-date" placeholder="name"></span></a>
										<?php echo ($error_message_n); ?>
										<?php echo ($error_message_n2); ?>

										<a>Phone: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['phone']) && $errors['phone'] == 0){ echo $_POST['phone']; } ?>" name="phone" class="wpcf7-date" placeholder="phone"></span></a>
										<?php echo ($error_message_pho); ?>
										<?php echo ($error_message_pho2); ?>

										<a>Email: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['email']) && $errors['email'] == 0){ echo $_POST['email']; } ?>" name="email" class="wpcf7-date" placeholder="email"></span></a>
										<?php echo ($error_message_em); ?>

										<input class="blackbutton" type="submit" id="submit" name="submit" value="Send appointment">
									</div>
								</div>
							
							</div>
						</div>
					</form>
					<?php
										
				}else{
					
					?>
						<div class = "checkmail"> <h1>Check your mail!</h1></div>
					
				<?php } ?>

			</div>