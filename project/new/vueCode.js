var beerQuantityComponent = Vue.component('beer-quantity', {
	props: ['quantity'],
	template: '<span>Anzahl: {{quantity}}</span>'
});

new Vue({
	el: '.main',
	component: {
		beerQuantityComponent,
	},
	data: {
		beer_list: beer_list,
		styleQuantity: {
			color: 'red'
		}
	},
	methods: {
		addBeer: function(beer) {
			beer.quantity += 1;
		},
		deleteBeer: function(beer) {
			beer.quantity -= 1;
		}
	},
	computed: {
		sumOfBeer: function () {
			return this.beer_list.reduce(function(total, beer) {
				return total + beer.quantity;
			}, 0);
		}
	}
});