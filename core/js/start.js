$(function(){

  var sliderUL = $('div.slider').children('ul'),
  	screens = sliderUL.find('li'),
		screenWidth = screens.width(),
		screenLength = screens.length,
		current = 1,
		totalScreenWidth = screenLength * screenWidth;

	var h1 = $('div.header').children('h1');

	$('#screen-nav').find('button').on('click', function() {
		var direction = $(this).data('dir'),
			loc = screenWidth;

		(direction === 'next') ? ++current : --current;

		if(current === 0) {
			current = screenLength;
			loc = totalScreenWidth - screenWidth;
			direction = 'next';
		} else if (current - 1 === screenLength) {
			current = 1;
			loc = 0;
		}

		transition(sliderUL, loc, direction);

	});

	function transition(container, loc, direction) {
		var unit;

		if(direction && loc !== 0) {
			unit = (direction === 'next') ? '-=' : '+=';
		}

		container.animate({
			'margin-left': unit ? (unit + loc) : loc
		});
	}

})();