<?php

	$error_message_p = "";
	$error_message_p2 = "";
	$error_message_p3 = "";
	$error_message_df = "";
	$error_message_dt = "";
	$error_message_no = "";
	$error_message_peo = "";
	$error_message_peo2 = "";
	$error_message_n = "";
	$error_message_n2 = "";
	$error_message_pho = "";
	$error_message_pho2 = "";
	$error_message_em = "";
	$mailSuccess = false;


	if(isset($_POST['submit'])) {
		$to = 'my.worktest94@gmail.com';

		$place = $_POST["place"];
		$datefrom = $_POST["datefrom"];
		$dateto = $_POST["dateto"];
		$people = $_POST["people"];

		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];

		$error_message_p = "";
		$error_message_p2 = "";
		$error_message_p3 = "";
		$error_message_df = "";
		$error_message_dt = "";
		$error_message_no = "";
		$error_message_peo = "";
		$error_message_peo2 = "";
		$error_message_n = "";
		$error_message_n2 = "";
		$error_message_pho = "";
		$error_message_pho2 = "";
		$error_message_em = "";

		$errors = ['place'=>0,'datefrom'=>0,'dateto'=>0, 'people'=>0, 'name'=>0, 'phone'=>0, 'email'=>0];


		// Place
		if(empty($place)) {
			$error_message_p .= '<p class="red">Please enter place.</p>';
			$errors['place'] = 1;
		}

		$email_exp_a = "/[^A-Za-z]/";
		
		if(preg_match($email_exp_a,$_POST["place"])) {
			$error_message_p3 .= '<p class="red">only alphabet!</p>';
			$errors['place'] = 1;
		}

		if(strlen($place) < 2){
			$error_message_p2 .= '<p class="red">Name of place is too short.</p>';
			$errors['place'] = 1;
			
		}
		
		// Date
		if(empty($datefrom)) {
        	$error_message_df .= '<p class="red">Please enter place.</p>';
			$errors['datefrom'] = 1;
		}

		if(empty($dateto)) {
        	$error_message_dt .= '<p class="red">Please enter place.</p>';
			$errors['dateto'] = 1;
		}

		if($datefrom > $dateto ){
			$error_message_no .= '<p class="red">Going back in time impossible.</p>';
			$errors['datefrom'] = 1;
			$errors['dateto'] = 1;
		}

		// People

		if(strlen($people) < 1){
			$error_message_peo .= '<p class="red">Enter number of peoples.</p>';
			$errors['people'] = 1;
		}

		$error_message = "";
    	$email_exp_n = "/[^0-9]/";
 
    	if(preg_match($email_exp_n,$_POST["people"])) {
        	$error_message_peo2 .= '<p class="red_2">only numbers!</p>';
			$errors['people'] = 1;
		}
		
		// Name
		if(strlen($name) < 2) {
        	$error_message_n .= '<p class="red_1">Name too short.</p>';
			$errors['name'] = 1;
		}
		
		if(preg_match($email_exp_a,$_POST["name"])) {
			$error_message_n2 .= '<p class="red_1">only alphabet!</p>';
			$errors['name'] = 1;
		}

		// Phone

		if(strlen($phone) < 7) {
        	$error_message_pho .= '<p class="red_1">phonenumber too short.</p>';
			$errors['phone'] = 1;
		}

		$email_exp_n = "/[^0-9]/";
		
		if(preg_match($email_exp_n,$_POST["phone"])) {
			$error_message_pho2 .= '<p class="red_1">only numbers!</p>';
			$errors['phone'] = 1;
		}

		// EMAIL 
		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    	if(!preg_match($email_exp,$email)) {
        	$error_message_em .= '<p class="red_1">Please enter email!</p>';
			$errors['email'] = 1;
    	}

		if( empty($error_message_p) && empty($error_message_p2) && empty($error_message_p3) && empty($error_message_df) && empty($error_message_dt)
			&& empty($error_message_no) && empty($error_message_peo) && empty($error_message_peo2) && empty($error_message_n) && empty($error_message_n2)
			&& empty($error_message_pho) && empty($error_message_pho2) && empty($error_message_em) ) 
		{
			$subject = 'the subject';
			$message = "Направление:" . " " . $place . "\r\n" . "С:" . " " . $datefrom . "\r\n" . "Do:" . " " . $dateto . "\r\n" . "Сколько людей:" . " " . $people . "\r\n" . "\r\n" . "Name:" . " " . $name . "\r\n" . "Phone:" . " " . $phone . "\r\n" . "Email" . " " . $email;
			'Reply-To:' . " " . $mail . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

			if(mail($to, $subject, $message, $headers)){
				
				$mailSuccess = true;

			}
		}
	}
?>
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500,600,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/header.css">
<link rel="stylesheet" type="text/css" href="style/platinum_mobile.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script> 
		<script type="" src="js/content.js"></script>
		
      	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
      	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script>
			$(document).ready(function(){
				$("#toggler").click(function () {
					$("#box").css("display","block");
					$("#toggler_close").css("display","block");
			});
			$("#toggler_close").click(function () {
					$("#box").css("display","none");
					$("#toggler_close").css("display","none");
			});
			$("#closeclose").click(function () {
					$("#box").css("display","none");
					$("#toggler_close").css("display","none");
			});
			$("#closeclose1").click(function () {
					$("#box").css("display","none");
					$("#toggler_close").css("display","none");
			});
			$("#closeclose2").click(function () {
					$("#box").css("display","none");
					$("#toggler_close").css("display","none");
			});
			$("#closeclose3").click(function () {
					$("#box").css("display","none");
					$("#toggler_close").css("display","none");
			});
			$("#closeclose4").click(function () {
					$("#box").css("display","none");
					$("#toggler_close").css("display","none");
			});
			});
		</script>
		<script>
			$(document).ready(function(){
			$("#toggler_box").click(function () {
				$( "#info" ).slideToggle( "slow", function() {
			});
			});
			});
		</script>
		<!--for time  -->
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
		<script>
         	$(function() {
            	$( "#datepicker-11" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1]
            	});
         	});
      	</script>
		<script>
         	$(function() {
            	$( "#datepicker-12" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1]
            	});
         	});
      	</script>
		<script>
         	$(function() {
            	$( "#datepicker-13" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1]
            	});
         	});
      	</script>

			<div id="header">
				<a href="index.php"><div class="logo"><img src="img/logo.png"></div></a>
				
				<div class="menu"><a id="toggler" href="#"><img src="img/menu.png"></a></div>
				<div id="box" style="display: none;">
				<a id="toggler_close" style="display:none" href="#"><div class="close"><img src="img/close.png"></div></a>
                    <div>
                    <ul class="box_li">
                    <li><a href="index.php" id="closeclose">Главная</a></li>
                    <li><a href="strani.php" id="closeclose1">Страны</a></li>
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
									<a href="index.php">ГЛАВНАЯ</a>
								</div>
							</div>

							<div class="block2 column">
								<div class="text">
									<a href="index.php#about_us">О НАС</a>
								</div>
							</div>

							<div class="block2 column">
								<div class="text">
									<div class="dropdown1">
										<button class="dropbtn1">СТРАНЫ</button>
										<div class="dropdown1-content">
										<ul>
											<li><a href="austria.php">Австрия</a></li>
											<li><a href="azerbaijan.php">Азербайджан</a></li>
											<li><a href="brazil.php">Бразилия</a></li>
											<li><a href="kingdom.php">Великобритания</a></li>
											<li><a href="germany.php">Германия</a></li>
											<li><a href="greece.php">Греция</a></li>
											<li><a href="india.php">Индия</a></li>
											<li><a href="spain.php">Испания</a></li>
											<li><a href="italy.php">Италия</a></li>
											<li><a href="kipr.php">Кипр</a></li>
											<li><a href="seychelles.php">Сейшелы</a></li>
											<li><a href="caribs.php">Карибы</a></li>
											<li><a href="thailand.php">Тайланд</a></li>
											<li><a href="france.php">Франция</a></li>
											<li><a href="montenegro.php">Черногория</a></li>
											<li><a href="switzerland.php">Швейцария</a></li>
										</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="block3 column">
								<div class="text">
									<a href="hotel_collection.php">КОЛЛЕКЦИЯ ОТЕЛЕЙ</a>
								</div>
							</div>

							<div class="block3 column">
								<div class="text">
									<a href="index.php#footer">КОНТАКТЫ</a>
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