<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/header.css">
<link rel="stylesheet" type="text/css" href="style/platinum_mobile.css">

			<div id="header">
				<div class="logo"><a><img src="img/logo.png"></a></div>
				
				<div class="navigation">
					<ul>
						<li><a href="#header">home</a></li>
						<li><a href="#about_us">about</a></li>
						<li><a href="#tours">tours</a></li>
						<li><a href="#why_us">why us</a></li>
						<li><a href="#footer">contacts</a></li>
					</ul>
				</div>
				
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
									<label>C:</label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_POST['datefrom']) && $errors['datefrom'] == 0 ){ echo $_POST['datefrom']; } ?>" name="datefrom" type = "text" readonly="readonly" id = "datepicker-10"></spam>
								</div>

								<?php echo ($error_message_df); ?>
								<?php echo ($error_message_no); ?>
							</div>

							<div class="block2 column">
								<div class="text">
									<label>Do:</label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_POST['dateto']) && $errors['dateto'] == 0){ echo $_POST['dateto']; } ?>" name="dateto" type = "text" readonly="readonly" id = "datepicker-11"></spam>
								</div>

								<?php echo ($error_message_dt); ?>
								<?php echo ($error_message_no); ?>
							</div>

							<div class="block3 column">
								<div class="text">
									<a>Сколько людей: <span class="inputs"><input type="text" value = "<?php if(isset($_POST['people']) && $errors['people'] == 0){ echo $_POST['people']; } ?>" name="people" class="wpcf7-date" placeholder="people" style="width: 4.5vw;"></span></a>
								</div>

								<?php echo ($error_message_peo); ?>
								<?php echo ($error_message_peo2); ?>
							</div>

							<div class="block4 block4_column">
								

								<div class="dropdown">
									<button class="dropbtn">continue</button>
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