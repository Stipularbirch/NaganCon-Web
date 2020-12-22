$(window).on( 'load' , function() {	
	
	var counter = $('#item_count').text(), counterArr, index, range,
	$body = $('body');
										 
	var slideIndex = 1;
	showSlides(slideIndex);

	function updateCount(){
		counter = $('#item_count').text(), counterArr = counter.split('/');
		index = parseInt(counterArr[0].trim()), range = parseInt(counterArr[1].trim());
	}
	
	function traverse(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("currentSlides");
		var dots = document.getElementsByClassName("dot-active");
		
		if (n > slides.length) {slideIndex = 1} 
		
		if (n < 1) {slideIndex = slides.length}
		
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		if ( slides.length > 1 ){
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
		}
	}
	$('.carousel').on('click','.prev',function(e){
		e.preventDefault();
		traverse(-1);
	});
	$('.carousel').on('click','.next',function(e){
		e.preventDefault();
		traverse(1);
	});
	$('.carousel').each(function(index){
		$(" .dot-layout:eq("+index+") .dot ").click(function(){
			currentSlide($(this).index()+1);
		});
	});
	

	$(window).keydown(function(e){
		var key = e.which | e.keyCode;
		if (key === 37){
			traverse(-1);
		}
		else if (key === 39){
			traverse(1);
		}
	});
});
