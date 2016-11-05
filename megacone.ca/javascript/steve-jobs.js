/* Steve jobs' book */

function updateDepth(book, newPage) {

	var page = book.turn('page'),
		pages = book.turn('pages'),
		depthWidth = 16*Math.min(1, page*2/pages);

		newPage = newPage || page;

	if (newPage>3)
		$('.sj-book .p2 .depth').css({
			width: depthWidth,
			left: 20 - depthWidth
		});
	else
		$('.sj-book .p2 .depth').css({width: 0});

		depthWidth = 16*Math.min(1, (pages-page)*2/pages);

	if (newPage<pages-3)
		$('.sj-book .p91 .depth').css({
			width: depthWidth,
			right: 20 - depthWidth
		});
	else
		$('.sj-book .p91 .depth').css({width: 0});

/***************************Tabs Visual Manipulation**************************************/

	$('#tabLeft10').css({
		display: "none"
	});
	$('#tabRight10').css({
		display: "block"
	});
	$('#tabLeft11').css({
		display: "none"
	});
	$('#tabRight11').css({
		display: "block"
	});
	
	//Contents Tab - pages: 4-5
	if (newPage<4)
	{
		$('#tabRight1').css({
			marginTop: "9px"
		});
		$('#tabRight2').css({
			marginTop: "57.2px"
		});
		$('#tabRight3').css({
			marginTop: "105.4px"
		});
		$('#tabRight4').css({
			marginTop: "153.6px"
		});
		$('#tabRight5').css({
			marginTop: "201.8px"
		});
		$('#tabRight6').css({
			marginTop: "250px"
		});
		$('#tabRight7').css({
			marginTop: "298.2px"
		});
		$('#tabRight8').css({
			marginTop: "346.4px"
		});
		$('#tabRight9').css({
			marginTop: "394.6px"
		});
		$('#tabRight10').css({
			marginTop: "442.8px"
		});
		$('#tabRight11').css({
			marginTop: "491px"
		});
		$('#tabLeft1').css({
			display: "none"
		});
		$('#tabRight1').css({
			display: "block"
		});
	}
	else if (newPage>=4 && newPage<=5)
	{
		$('#tabRight2').css({
			marginTop: "9px"
		});
		$('#tabRight3').css({
			marginTop: "62.6px"
		});
		$('#tabRight4').css({
			marginTop: "116.1px"
		});
		$('#tabRight5').css({
			marginTop: "169.7px"
		});
		$('#tabRight6').css({
			marginTop: "223.2px"
		});
		$('#tabRight7').css({
			marginTop: "276.8px"
		});
		$('#tabRight8').css({
			marginTop: "330.3px"
		});
		$('#tabRight9').css({
			marginTop: "383.9px"
		});
		$('#tabRight10').css({
			marginTop: "437.4px"
		});
		$('#tabRight11').css({

			marginTop: "491px"
		});
		$('#tabLeft1').css({
			display: "none"
		});
		$('#tabRight1').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft1').css({
			display: "block"
		});
		$('#tabRight1').css({
			display: "none"
		});
	}
	
	//About Us Tab - pages: 6-7
	if (newPage<6)
	{
		$('#tabLeft2').css({
			display: "none"
		});
		$('#tabRight2').css({
			display: "block"
		});
	}
	else if (newPage>=6 && newPage<=7)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabRight3').css({
			marginTop: "9px"
		});
		$('#tabRight4').css({
			marginTop: "69.3px"
		});
		$('#tabRight5').css({
			marginTop: "129.5px"
		});
		$('#tabRight6').css({
			marginTop: "189.8px"
		});
		$('#tabRight7').css({
			marginTop: "250px"
		});
		$('#tabRight8').css({
			marginTop: "310.3px"
		});
		$('#tabRight9').css({
			marginTop: "370.5px"
		});
		$('#tabRight10').css({
			marginTop: "430.8px"
		});
		$('#tabRight11').css({

			marginTop: "491px"
		});
		$('#tabLeft2').css({
			display: "none"
		});
		$('#tabRight2').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft2').css({
			display: "block"
		});
		$('#tabRight2').css({
			display: "none"
		});
	}
	
	//Menu Tab - pages: 8-9
	if (newPage<8)
	{
		$('#tabLeft3').css({
			display: "none"
		});
		$('#tabRight3').css({
			display: "block"
		});
	}
	else if (newPage>=8 && newPage<=9)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "109px"
		});
		$('#tabRight4').css({
			marginTop: "9px"
		});
		$('#tabRight5').css({
			marginTop: "77.9px"
		});
		$('#tabRight6').css({
			marginTop: "146.7px"
		});
		$('#tabRight7').css({
			marginTop: "215.6px"
		});
		$('#tabRight8').css({
			marginTop: "284.4px"
		});
		$('#tabRight9').css({
			marginTop: "353.3px"
		});
		$('#tabRight10').css({
			marginTop: "422.1px"
		});
		$('#tabRight11').css({

			marginTop: "491px"
		});
		$('#tabLeft3').css({
			display: "none"
		});
		$('#tabRight3').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft3').css({
			display: "block"
		});
		$('#tabRight3').css({
			display: "none"
		});
	}
	
	//Corporate Menu Tab - pages: 10-11
	if (newPage<10)
	{
		$('#tabLeft4').css({
			display: "none"
		});
		$('#tabRight4').css({
			display: "block"
		});
	}
	else if (newPage>=10 && newPage<=11)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "109px"
		});
		$('#tabLeft3').css({
			marginTop: "209px"
		});
		$('#tabRight5').css({
			marginTop: "9px"
		});
		$('#tabRight6').css({
			marginTop: "89.3px"
		});
		$('#tabRight7').css({
			marginTop: "169.7px"
		});
		$('#tabRight8').css({
			marginTop: "250px"
		});
		$('#tabRight9').css({
			marginTop: "330.3px"
		});
		$('#tabRight10').css({
			marginTop: "410.7px"
		});
		$('#tabRight11').css({

			marginTop: "491px"
		});
		$('#tabLeft4').css({
			display: "none"
		});
		$('#tabRight4').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft4').css({
			display: "block"
		});
		$('#tabRight4').css({
			display: "none"
		});
	}
	
	//Ice Cream Menu Tab - pages: 12-37
	if (newPage<12)
	{
		$('#tabLeft5').css({
			display: "none"
		});
		$('#tabRight5').css({
			display: "block"
		});
	}
	else if (newPage>=12 && newPage<=37)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "109px"
		});
		$('#tabLeft3').css({
			marginTop: "209px"
		});
		$('#tabLeft4').css({
			marginTop: "309px"
		});
		$('#tabRight6').css({
			marginTop: "9px"
		});
		$('#tabRight7').css({
			marginTop: "105.4px"
		});
		$('#tabRight8').css({
			marginTop: "201.8px"
		});
		$('#tabRight9').css({
			marginTop: "298.2px"
		});
		$('#tabRight10').css({
			marginTop: "394.6px"
		});
		$('#tabRight11').css({

			marginTop: "491px"
		});
		$('#tabLeft5').css({
			display: "none"
		});
		$('#tabRight5').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft5').css({
			display: "block"
		});
		$('#tabRight5').css({
			display: "none"
		});
	}
		
	//Ice Cream Menu Tab - pages: 38-39
	if (newPage<38)
	{
		$('#tabLeft6').css({
			display: "none"
		});
		$('#tabRight6').css({
			display: "block"
		});
	}
	else if (newPage>=38 && newPage<=39)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "109px"
		});
		$('#tabLeft3').css({
			marginTop: "209px"
		});
		$('#tabLeft4').css({
			marginTop: "309px"
		});
		$('#tabLeft5').css({
			marginTop: "409px"
		});
		$('#tabRight7').css({
			marginTop: "9px"
		});
		$('#tabRight8').css({
			marginTop: "109px"
		});
		$('#tabRight9').css({
			marginTop: "209px"
		});
		$('#tabRight10').css({
			marginTop: "309px"
		});
		$('#tabRight11').css({

			marginTop: "409px"
		});
		$('#tabLeft6').css({
			display: "none"
		});
		$('#tabRight6').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft6').css({
			display: "block"
		});
		$('#tabRight6').css({
			display: "none"
		});
	}
	
	//Gallery Tab - pages: 38-39
	if (newPage<40)
	{
		$('#tabLeft7').css({
			display: "none"
		});
		$('#tabRight7').css({
			display: "block"
		});
	}
	else if (newPage>=40 && newPage<=85)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "105.4px"
		});
		$('#tabLeft3').css({
			marginTop: "201.8px"
		});
		$('#tabLeft4').css({
			marginTop: "298.2px"
		});
		$('#tabLeft5').css({
			marginTop: "394.6px"
		});
		$('#tabLeft6').css({
			marginTop: "491px"
		});
		$('#tabRight8').css({
			marginTop: "9px"
		});
		$('#tabRight9').css({
			marginTop: "109px"
		});
		$('#tabRight10').css({
			marginTop: "209px"
		});
		$('#tabRight11').css({

			marginTop: "309px"
		});
		$('#tabLeft7').css({
			display: "none"
		});
		$('#tabRight7').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft7').css({
			display: "block"
		});
		$('#tabRight7').css({
			display: "none"
		});
	}
		
	//Events Tab - pages: 86-87
	if (newPage<86)
	{
		$('#tabLeft8').css({
			display: "none"
		});
		$('#tabRight8').css({
			display: "block"
		});
	}
	else if (newPage>=86 && newPage<=87)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "89.3px"
		});
		$('#tabLeft3').css({
			marginTop: "169.7px"
		});
		$('#tabLeft4').css({
			marginTop: "250px"
		});
		$('#tabLeft5').css({
			marginTop: "330.3px"
		});
		$('#tabLeft6').css({
			marginTop: "410.7px"
		});
		$('#tabLeft7').css({
			marginTop: "491px"
		});
		$('#tabRight9').css({
			marginTop: "9px"
		});
		$('#tabRight10').css({
			marginTop: "109px"
		});
		$('#tabRight11').css({

			marginTop: "209px"
		});
		$('#tabLeft8').css({
			display: "none"
		});
		$('#tabRight8').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft8').css({
			display: "block"
		});
		$('#tabRight8').css({
			display: "none"
		});
	}
			
	//Connect With Us Tab - pages: 88-89
	if (newPage<88)
	{
		$('#tabLeft9').css({
			display: "none"
		});
		$('#tabRight9').css({
			display: "block"
		});
	}
	else if (newPage>=88 && newPage<=89)
	{		
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "77.9px"
		});
		$('#tabLeft3').css({
			marginTop: "146.7px"
		});
		$('#tabLeft4').css({
			marginTop: "215.6px"
		});
		$('#tabLeft5').css({
			marginTop: "284.4px"
		});
		$('#tabLeft6').css({
			marginTop: "353.3px"
		});
		$('#tabLeft7').css({
			marginTop: "422.1px"
		});
		$('#tabLeft8').css({
			marginTop: "491px"
		});
		$('#tabRight10').css({
			marginTop: "9px"
		});
		$('#tabRight11').css({

			marginTop: "109px"
		});
		$('#tabLeft9').css({
			display: "none"
		});
		$('#tabRight9').css({
			display: "none"
		});
	}
	else
	{
		$('#tabLeft9').css({
			display: "block"
		});
		$('#tabRight9').css({
			display: "none"
		});
	}
	
	//Front Page
	if (newPage<2)
	{
		$('#tabLeft1').css({
			display: "none"
		});
		$('#tabLeft2').css({
			display: "none"
		});
		$('#tabLeft3').css({
			display: "none"
		});
		$('#tabLeft4').css({
			display: "none"
		});
		$('#tabLeft5').css({
			display: "none"
		});
		$('#tabLeft6').css({
			display: "none"
		});
		$('#tabLeft7').css({
			display: "none"
		});
		$('#tabLeft8').css({
			display: "none"
		});
		$('#tabLeft9').css({
			display: "none"
		});
		$('#tabLeft10').css({
			display: "none"
		});
		$('#tabLeft11').css({
			display: "none"
		});
		$('#tabRight1').css({
			display: "none"
		});
		$('#tabRight2').css({
			display: "none"
		});
		$('#tabRight3').css({
			display: "none"
		});
		$('#tabRight4').css({
			display: "none"
		});
		$('#tabRight5').css({
			display: "none"
		});
		$('#tabRight6').css({
			display: "none"
		});
		$('#tabRight7').css({
			display: "none"
		});
		$('#tabRight8').css({
			display: "none"
		});
		$('#tabRight9').css({
			display: "none"
		});
		$('#tabRight10').css({
			display: "none"
		});
		$('#tabRight11').css({
			display: "none"
		});
	}
	
	
	//End Page
	if (newPage>=90 && newPage<=91)
	{
		$('#tabLeft1').css({
			marginTop: "9px"
		});
		$('#tabLeft2').css({
			marginTop: "57.2px"
		});
		$('#tabLeft3').css({
			marginTop: "105.4px"
		});
		$('#tabLeft4').css({
			marginTop: "153.6px"
		});
		$('#tabLeft5').css({
			marginTop: "201.8px"
		});
		$('#tabLeft6').css({
			marginTop: "250px"
		});
		$('#tabLeft7').css({
			marginTop: "298.2px"
		});
		$('#tabLeft8').css({
			marginTop: "346.4px"
		});
		$('#tabLeft9').css({
			marginTop: "394.6px"
		});
		$('#tabLeft10').css({
			display: "block",
			marginTop: "442.8px"
		});
		$('#tabRight10').css({
			display: "none"
		});
		$('#tabLeft11').css({
			display: "block",
			marginTop: "491px"
		});
		$('#tabRight11').css({
			display: "none"
		});
	}
	
	
	//Back Page
	if (newPage>91)
	{
		$('#tabLeft1').css({
			display: "none"
		});
		$('#tabLeft2').css({
			display: "none"
		});
		$('#tabLeft3').css({
			display: "none"
		});
		$('#tabLeft4').css({
			display: "none"
		});
		$('#tabLeft5').css({
			display: "none"
		});
		$('#tabLeft6').css({
			display: "none"
		});
		$('#tabLeft7').css({
			display: "none"
		});
		$('#tabLeft8').css({
			display: "none"
		});
		$('#tabLeft9').css({
			display: "none"
		});
		$('#tabLeft10').css({
			display: "none"
		});
		$('#tabLeft11').css({
			display: "none"
		});
		$('#tabRight1').css({
			display: "none"
		});
		$('#tabRight2').css({
			display: "none"
		});
		$('#tabRight3').css({
			display: "none"
		});
		$('#tabRight4').css({
			display: "none"
		});
		$('#tabRight5').css({
			display: "none"
		});
		$('#tabRight6').css({
			display: "none"
		});
		$('#tabRight7').css({
			display: "none"
		});
		$('#tabRight8').css({
			display: "none"
		});
		$('#tabRight9').css({
			display: "none"
		});
		$('#tabRight10').css({
			display: "none"
		});
		$('#tabRight11').css({
			display: "none"
		});
	}	
}

function loadPage(page) {

	$.ajax({url: 'pages/page' + page + '.html'}).
		done(function(pageHtml) {
			$('.sj-book .p' + page).html(pageHtml.replace('samples/steve-jobs/', ''));
		});

}

function addPage(page, book) {

	var id, pages = book.turn('pages');

	if (!book.turn('hasPage', page)) {

		var element = $('<div />',
			{'class': 'own-size',
				css: {width: 460, height: 582}
			}).
			html('<div class="loader"></div>');

		if (book.turn('addPage', element, page)) {
			loadPage(page);
		}

	}
}

function numberOfViews(book) {

	return book.turn('pages') / 2 + 1;

}

function getViewNumber(book, page) {

	return parseInt((page || book.turn('page'))/2 + 1, 10);

}

function zoomHandle(e) {

	if ($('.sj-book').data().zoomIn)
		zoomOut();
	else if (e.target && $(e.target).hasClass('zoom-this')) {
		zoomThis($(e.target));
	}

}

function zoomThis(pic) {

	var	position, translate,
		tmpContainer = $('<div />', {'class': 'zoom-pic'}),
		transitionEnd = $.cssTransitionEnd(),
		tmpPic = $('<img />'),
		zCenterX = $('#book-zoom').width()/2,
		zCenterY = $('#book-zoom').height()/2,
		bookPos = $('#book-zoom').offset(),
		picPos = {
			left: pic.offset().left - bookPos.left,
			top: pic.offset().top - bookPos.top
		},
		completeTransition = function() {
			$('#book-zoom').unbind(transitionEnd);

			if ($('.sj-book').data().zoomIn) {
				tmpContainer.appendTo($('body'));

				$('body').css({'overflow': 'hidden'});
				
				tmpPic.css({
					margin: position.top + 'px ' + position.left+'px'
				}).
				appendTo(tmpContainer).
				fadeOut(0).
				fadeIn(500);
			}
		};

		$('.sj-book').data().zoomIn = true;

		$('.sj-book').turn('disable', true);

		$(window).resize(zoomOut);
		
		tmpContainer.click(zoomOut);

		tmpPic.load(function() {
			var realWidth = $(this)[0].width,
				realHeight = $(this)[0].height,
				zoomFactor = realWidth/pic.width(),
				picPosition = {
					top:  (picPos.top - zCenterY)*zoomFactor + zCenterY + bookPos.top,
					left: (picPos.left - zCenterX)*zoomFactor + zCenterX + bookPos.left
				};


			position = {
				top: ($(window).height()-realHeight)/2,
				left: ($(window).width()-realWidth)/2
			};

			translate = {
				top: position.top-picPosition.top,
				left: position.left-picPosition.left
			};

			$('.samples .bar').css({visibility: 'hidden'});
			$('#slider-bar').hide();
			
		
			$('#book-zoom').transform(
				'translate('+translate.left+'px, '+translate.top+'px)' +
				'scale('+zoomFactor+', '+zoomFactor+')');

			if (transitionEnd)
				$('#book-zoom').bind(transitionEnd, completeTransition);
			else
				setTimeout(completeTransition, 1000);

		});

		tmpPic.attr('src', pic.attr('src'));

}

function zoomOut() {

	var transitionEnd = $.cssTransitionEnd(),
		completeTransition = function(e) {
			$('#book-zoom').unbind(transitionEnd);
			$('.sj-book').turn('disable', false);
			$('body').css({'overflow': 'auto'});
			moveBar(false);
		};

	$('.sj-book').data().zoomIn = false;

	$(window).unbind('resize', zoomOut);

	moveBar(true);

	$('.zoom-pic').remove();
	$('#book-zoom').transform('scale(1, 1)');
	$('.samples .bar').css({visibility: 'visible'});
	$('#slider-bar').show();

	if (transitionEnd)
		$('#book-zoom').bind(transitionEnd, completeTransition);
	else
		setTimeout(completeTransition, 1000);
}


function moveBar(yes) {
	if (Modernizr && Modernizr.csstransforms) {
		$('#slider .ui-slider-handle').css({zIndex: yes ? -1 : 10000});
	}
}

function setPreview(view) {

	var previewWidth = 115,
		previewHeight = 75,
		previewSrc = 'pages/preview.jpg',
		preview = $(_thumbPreview.children(':first')),
		numPages = (view==1 || view==$('#slider').slider('option', 'max')) ? 1 : 2,
		width = (numPages==1) ? previewWidth/2 : previewWidth;

	_thumbPreview.
		addClass('no-transition').
		css({width: width + 15,
			height: previewHeight + 15,
			top: -previewHeight - 30,
			left: ($($('#slider').children(':first')).width() - width - 15)/2
		});

	preview.css({
		width: width,
		height: previewHeight
	});

	if (preview.css('background-image')==='' ||
		preview.css('background-image')=='none') {

		preview.css({backgroundImage: 'url(' + previewSrc + ')'});

		setTimeout(function(){
			_thumbPreview.removeClass('no-transition');
		}, 0);

	}

	preview.css({backgroundPosition:
		'0px -'+((view-1)*previewHeight)+'px'
	});
}

function isChrome() {

	// Chrome's unsolved bug
	// http://code.google.com/p/chromium/issues/detail?id=128488

	return navigator.userAgent.indexOf('Chrome')!=-1;

}