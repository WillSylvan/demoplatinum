<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/platinum.css">
		<link rel="stylesheet" type="text/css" href="style/platinum_mobile.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700" rel="stylesheet">
		
		<script src="js/jquery-3.2.1.min.js"></script> 

    	<title>platinum travel</title>
		
		<style>
		#header{
			height: 30vw !important;
			background-image: url(img/countries/austria.jpg) !important;
			background-size: cover !important;
			background-repeat: no-repeat !important;
			background-position-y: 75% !important;
		}
		.colormain h3, .colormain- h3 {
			font-size: 1.7vw;
			opacity: 1;
			background: rgba(32, 30, 30, 0.7);
			width: 20%;
			margin: auto;
			padding-top: 1vw;
			padding-bottom: 1vw;
		}
		@media screen and (max-width: 900px){
		#header{background-image:none !important}
		.colormain h3, .colormain- h3{
			width: unset;
			background:none !important;
			padding: unset;
		}
		}
		</style>
		
		
	</head>
	
	<body>

		<?php include 'assets/header.php'; ?>
		
		<div id="main">
			<div id="content">
			
				<div class="colormain-"><h3>Австрия</h3></div>
				
				<div class="map">
					
					<div>
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
				
				
					<div><img src="img/clogos/austria.png"></div>
				
				
				</div>
				
				<div class="flex countries">
					<div>
						<h1>Зальцбург - <span>Hotel Sacher Salzburg</span></h1>
						<a href="salzburg.php"><img src="img/clogos/1.gif"></a>
					</div>
					<div>
						<h1>Вена - <span>Hotel Sachar Wien</span></h1>
						<a href="wien.php"><img src="img/clogos/1.gif"></a>
					</div>
				</div>
				
			</div>
		</div>

		<?php include 'assets/footer.php'; ?>
		
		</div>
	</body>
</html>