<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/platinum.css">
		<link rel="stylesheet" type="text/css" href="style/platinum_mobile.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700" rel="stylesheet">
		
		<script src="js/jquery-3.2.1.min.js"></script> 

    	<title>platinum travel</title>	
	</head>
	
	<body>

		<?php include 'assets/header.php'; ?>
		
		<div id="main">
			<div id="content">
			
				<div class="colormain-"><h3></h3></div>
				
				<div class="move flex">
					<button>to begin</button>
					<button>to get</button>
					<button>to stay</button>
					<button>to eat</button>
					<button>to do</button>
					<button>to spa</button>
					<button>to the kids</button>
				</div>
				
				<script>
					$(document).ready(function(){
						$('.move button').click(function(){
							id = $(this).index()
							$('.about-country .this').css('display','none')
								$('.about-country .this:eq('+id+')').fadeIn(300)
						})
					});
				</script>
				
				<div class="hotel-images">
					<img class="logo-image" src="img/clogos/">
					<img src="img/clogos/">
				</div>
				
				<div class="about-country">
					
					<div class="this count1">
						<p>
						
						
						</p>
						
						<table width="100%">
						<tr>
							<td>
								<p>
							
								</p> 
							</td>
							<td>
								<p>
								
								</p>
							</td>
						</tr>
						</table>
					</div>
					
					<div class="this count2">
					
					<p>
					<b> </b>  
					</p>
					<p>
					<b>Расположение отеля:</b> 
					</p>
					<p>
					
					
					
					
					</p>
					<p>
					<b>Трансферы:</b><br>

					
					
					
					
					</p>
					
					</div>
					
					<div class="this count3">
						<p>
						<b>TO STAY </b>
						</p>
						<p>
						
						
						
						
						</p>
						
						<p>
						<b> </b>
						</p>
						
						<p>
						
						
						
						
						</p>
						

					</div>
					
					<div class="this count4">
						<p>
							<b>TO EAT </b>  
						</p>
						<p>

						
						</p>
						<p>
							<b>    </b>
						</p>
						<p>						
							
							
							
						</p>
					</div>
					
					<div class="this count5">
					
					<p>
					<b>TO DO</b>
					</p>
					
					<p>

					</p>
					
					<p><b>   </b></p>

					<p>
					
					
					
					
					
					</p>
	
					
					</div>
					
					<div class="this count6">
					
					<p>
					

					</p>
					
					</div>
					
					<div class="this count7">
					
					<p>
					

					</p>
					
					</div>
				
				</div>

				
			</div>
		</div>

		<?php include 'assets/footer.php'; ?>
		
		</div>
	</body>
</html>