$(document).ready(function() {
	
    var thisItem = 1, nextItem = 0, range = 0,
    $counter = $('#item_count'), $body = $('body');    
	
	/* Modulus Bug Fix */
	function mod(n, m) {
		return ((n % m) + m) % m;
	}
	
	/* Syncing Carousel Functions */
	function addCarousel(){
		var id = "#" + thisItem;
		if ($(id).find('.carousel')){
			$(id + " .carousel > .comp").addClass('currentSlides');
			$(id + " .carousel .dot-layout > .dot").addClass('dot-active');
			$(id + " .carousel .dot-layout > .dot").addClass('dot-active');
		}
	}
	function removeCarousel(index){
		var id = "#" + index;
		if ($(id).find('.carousel')){
			$(id + " .carousel > .comp").removeClass('currentSlides');
			$(id + " .carousel .dot-layout > .dot").removeClass('dot-active');
		}
	}
	
	function prepCarousel(direction) {
		switch (direction) {
			
			case 'next':
				/* Add Carousel to Current Slide, remove previous*/
				addCarousel();
				removeCarousel( (mod(((thisItem-2) - range),range)+1) );
				break;
				
			case 'previous':
				/* Add Carousel to Current Slide, remove next*/
				addCarousel();
				removeCarousel( (mod((thisItem - range), range)+1) );
				break;
				
			default:
				/* Display All First Carousel images if None Present*/
				$('.carousel').each(function(i) {
					$flag = false;										
					$(this).children('.comp').each(function() {													
							if($(this).css('display') == 'none'){
								$flag = true;
							}
					});
					if(!$flag){
						$(this).find('div.comp:eq(0)').css({display: "block"});
					}
					
					for(var j = 0; j < $(this).find('div.comp').length; j++){
						$("<span class='dot'></span>").appendTo(".carousel .dot-layout:eq("+i+")");
					}
					
					if($(this).find('.dot .active').length === 0 ){
						$(this).find('.dot:eq(0)').addClass("active");
					}
				});
				addCarousel();
		}
	}
	
	function nextCycle() {
		prevItem = thisItem;
        //update counter
        $counter.html(nextItem + ' / ' + range);
		$body.focus();
		var ref = 0;
		/*z-index switch*/
		$('#' + thisItem).css("z-index", 0);
		$('#' + nextItem).css('z-index', 1);
		
        /*Animation of left and right fields*/
        /*Left Animation*/
			if($('#' + thisItem).find('.left').hasClass('transition-up')){
				$('#' + thisItem).find('.left').removeClass('transition-up');
			} else if ($('#' + nextItem).find('.left').hasClass('transition-up')){
				$('#' + nextItem).find('.left').removeClass('transition-up');
			} else if ($('#' + prevItem).find('.left').hasClass('transition-up')){
				$('#' + nextItem).find('.left').removeClass('transition-up');
			} else if ($('#' + nextItem).find('.left').hasClass('transition-up')){
				$('#' + nextItem).find('.left').removeClass('transition-up');
			} else if ($('#' + thisItem).find('.left').hasClass('transition-down')){
				$('#' + thisItem).find('.left').removeClass('transition-down');
			}
			$('#' + nextItem).find('.left').addClass('transition-up');
		/*Right Animation*/
			if($('#' + thisItem).find('.right').hasClass('transition-right')){
				$('#' + thisItem).find('.right').removeClass('transition-right');
			} else if ($('#' + nextItem).find('.right').hasClass('transition-right')){
				$('#' + nextItem).find('.right').removeClass('transition-right');
			} else if ($('#' + prevItem).find('.right').hasClass('transition-right')){
				$('#' + nextItem).find('.right').removeClass('transition-right');
			} else if ($('#' + nextItem).find('.right').hasClass('transition-right')){
				$('#' + nextItem).find('.right').removeClass('transition-right');
			} else if ($('#' + thisItem).find('.right').hasClass('transition-left')){
				$('#' + thisItem).find('.right').removeClass('transition-left');
			}
			$('#' + nextItem).find('.right').addClass('transition-right');
			
			//z-index trailing hide
			$('#' + nextItem).show();
			if(prevItem - 1 < 1){
				$('#' + range).hide();
			} else $('#' + (prevItem -1)).hide();
	
		/*Animate individual divs*/
        //loop to first item if range reached
        if (thisItem == range) {
			thisItem = 1;
            nextItem = 2;prevItem=range;
        } else if (thisItem > range) {
			prevItem = thisItem;
            thisItem = 1; nextItem = 2;
        } else {
			thisItem = nextItem;
			if ( nextItem + 1 > range ){
				nextItem = 1;
			} else {
				nextItem++; prevItem=thisItem-1;
			}
		}
		prepCarousel("next");
	}
	
	function previousCycle() {        
        //If end range, the next item item #1
        if(nextItem == 1){
            thisItem = range;
        } else thisItem = nextItem - 1;

        //update counter
        $counter.html(prevItem + ' / ' + range);
		$body.focus();
		
        //hide old content item
        $('#' + thisItem).css("z-index", 0);
        $('#' + prevItem).css('z-index', 1);
     
		/*Animation of left and right fields*/
		if($('#' + thisItem).find('.left').hasClass('transition-down')){
			$('#' + thisItem).find('.left').removeClass('transition-down');
		
		} else if ($('#' + nextItem).find('.left').hasClass('transition-down')){
			$('#' + nextItem).find('.left').removeClass('transition-down');
		} else if ($('#' + prevItem).find('.left').hasClass('transition-down')){
			$('#' + nextItem).find('.left').removeClass('transition-down');
		} else if ($('#' + nextItem).find('.left').hasClass('transition-down')){
			$('#' + nextItem).find('.left').removeClass('transition-down');
		} else if ($('#' + thisItem).find('.left').hasClass('transition-up')){
			$('#' + thisItem).find('.left').removeClass('transition-up');
		}
		$('#' + prevItem).find('.left').addClass('transition-down');
		
		/*Animation left*/
		if($('#' + thisItem).find('.right').hasClass('transition-left')){
			$('#' + thisItem).find('.right').removeClass('transition-left');
		} else if ($('#' + nextItem).find('.right').hasClass('transition-left')){
			$('#' + nextItem).find('.right').removeClass('transition-left');
		} else if ($('#' + prevItem).find('.right').hasClass('transition-left')){
			$('#' + nextItem).find('.right').removeClass('transition-left');
		} else if ($('#' + nextItem).find('.right').hasClass('transition-left')){
			$('#' + nextItem).find('.right').removeClass('transition-left');
		} else if ($('#' + thisItem).find('.right').hasClass('transition-right')){
			$('#' + thisItem).find('.right').removeClass('transition-right');
		}
		$('#' + prevItem).find('.right').addClass('transition-left');
			
			//z-index trailing hide
			$('#' + prevItem ).show();
			$('#' + nextItem ).hide();
        //set next content item to current item
        nextItem = thisItem;
                
        if (prevItem >= range) {//if at end of items
            nextItem = 1;//first
            prevItem = range - 1;
            thisItem = range;
        } else if (prevItem <=1){//if at start of items
            prevItem = range;
            thisItem = 1;
            nextItem = 2;
        } else {//if in the middle of items
            prevItem--;
            thisItem--;
        }
        prepCarousel("previous");
	}
    //for each content item, set an id, and hide.
    $('.content-item').each(function() {
		nextItem++;
        $(this).attr('id',  nextItem);
        $(this).parent().css("position","relative");
        $(this).css("position","absolute");
        $(this).css('z-index', 0);
    });

    //range contains how many content items exist
    range = nextItem, nextItem = 2, prevItem = range;
    prepCarousel();
	
    //display the first content item
    $('#' + thisItem).css('z-index', 1);
	$('#' + thisItem).show();
    $counter.html(thisItem + ' / ' + range);
    
    //Prevent only This page from sliding away on slider action
    $('html').css('overflow','hidden');
    $('body').css('overflow','hidden');
    
    //hide old content item, show next item, resize content container
    $('#nextButton').click(function() {
		nextCycle();
	});
       
    //hide current content item, resize content container, show previous item 
    $('#prevButton').click(function() {
		previousCycle();
    });
    
    /*Arrow Keys operations*/
	$(window).keydown(function(e){
		var key = e.which | e.keyCode;
		if (key === 38){
			previousCycle();
		} else if (key === 40){
			nextCycle();
		}
	});
});
