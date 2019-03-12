$(function() {
	console.log('ready');

	$('.main').on('click', 'button.orderBeer', function (event) {
		event.preventDefault();
		var beerQuantityElement = $(this).parents('tr').find('.beerQuantity');
		var beerQuantity = beerQuantityElement.data('quantity');
		
		var sumOfBeerElement = $('.main').find('.beerTotal');
		var sumOfBeer = sumOfBeerElement.data('beer-total');
		
		beerQuantity = beerQuantity + 1;
		if (beerQuantity >= 10) {
			$(this).attr('disabled','disabled');
		}
		
		if (beerQuantity >= 0) {
			$(this).parents('tr').find('.deleteBeer').attr('disabled', false);
		}
		
		beerQuantityElement.find('span').text(beerQuantity);
		beerQuantityElement.data('quantity', beerQuantity);
		
		sumOfBeerElement.text(sumOfBeer+1);
		sumOfBeerElement.data('beer-total', sumOfBeer+1);
	});
	
	$('.main').on('click', '.deleteBeer', function (event) {
		event.preventDefault();
		var beerQuantityElement = $(this).parents('tr').find('.beerQuantity');
		var beerQuantity = beerQuantityElement.data('quantity');
		
		var sumOfBeerElement = $('.main').find('.beerTotal');
		var sumOfBeer = sumOfBeerElement.data('beer-total');
		
		beerQuantity = beerQuantity - 1;
		if (beerQuantity <= 0) {
			$(this).attr('disabled','disabled');
		}
		
		if (beerQuantity > 0 && beerQuantity <= 10) {
			$(this).parents('tr').find('.orderBeer').attr('disabled', false);
		}
		
		beerQuantityElement.find('span').text(beerQuantity);
		beerQuantityElement.data('quantity', beerQuantity);
		
		sumOfBeerElement.text(sumOfBeer-1);
		sumOfBeerElement.data('beer-total', sumOfBeer-1);
	});
});