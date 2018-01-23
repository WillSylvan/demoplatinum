
<!DOCTYPE html>
<html>
<head>
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
		

		@media screen and (min-width: 900px){
			#mobile_form,.mobile_form{
				display:flex;
				display:-webkit-flex;
				width: 100%;

			}
			#mobile_form form {
				margin: auto;
				display: flex;
				display: -webkit-flex;
				flex-direction: column;
				-webkit-flex-direction: column;
				width: 30%;
			}
			#mobile_form .column {
				width: 100%;
			}
			#mobile_form .text label{
				color: #fff;
			}
		}
		</style>


	</head>
</head>
<body>
	<div id="class-container">
 <?php include"assets/header.php" ?> 
		<div id="mobile_form" style="display: block">
			
				<div class="mobile_form" >
				
					<form id="form" name="orderform" method="post" action="contact.php">
						<div class="block1 column">
							<div class="text">
								 <a> Направление: <span class="inputs"><!--<input type="text" value = "<?php if(isset($_POST['place']) && $errors['place'] == 0){ echo $_POST['place']; } ?>" name="place" size="40" required="required" placeholder="Place" style=""> -->
								<select class="wpcf7-date" required="required" name="place">
									<option>-</option>
									<option>Австрия</option>
									<option>Азербайджан</option>
									<option>Бразилия</option>
									<option>Великобритания</option>
									<option>Германия</option>
									<option>Греция</option>
									<option>Индия</option>
									<option>Испания</option>
									<option>Италия</option>
									<option>Кипр</option>
									<option>Сейшелы</option>
									<option>Карибы</option>
									<option>Тайланд</option>
									<option>Франция</option>
									<option>Черногория</option>
									<option>Швейцария</option>
								</select></span></a>
							</div>

							<!--ERRROR  -->
							<?php echo ($error_message_p); ?>
							<?php echo ($error_message_p2); ?>
							<?php echo ($error_message_p3); ?>
							<!--END-->
						</div>
								
					<div class="block2 column" style="margin-left: 0">
						<div class="text">
							<label>C: </label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_POST['datefrom']) && $errors['datefrom'] == 0 ){ echo $_POST['datefrom']; } ?>" name="datefrom" type = "text" readonly="readonly" id = "datepicker-12"></spam>
						</div>

						<?php echo ($error_message_df); ?>
						<?php echo ($error_message_no); ?>
					</div>

					<div class="block2 column" style="margin-left: 0">
						<div class="text">
							<label>До: </label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_POST['dateto']) && $errors['dateto'] == 0){ echo $_POST['dateto']; } ?>" name="dateto" type = "text" readonly="readonly" id = "datepicker-13"></spam>
						</div>

						<?php echo ($error_message_dt); ?>
						<?php echo ($error_message_no); ?>
					</div>

						<div class="block3 column" style="margin-left: 0">
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
<?php include"assets/footer.php" ?>
	</div>



</body>
</html>