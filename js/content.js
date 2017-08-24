$(function(){

	$('.book_a_tour').click(function(){

		dir = $(this).attr('dir')
		console.log(dir)
		if (dir=='left') {
			$(this).parent().siblings('.hiden_form').animate({'left':100+'%'},600)
		}else{
			$(this).parent().siblings('.hiden_form').animate({'right':100+'%'},600)
		}
	})

	$('.hidde').click(function(){
		console.log(dir)
		
		dir = $(this).attr('dir')
		if (dir=='left') {
			$(this).parent().animate({'left':0+'%'},600)
		}else{
			$(this).parent().animate({'right':0+'%'},600)
		}
	})

})