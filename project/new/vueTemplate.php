<!DOCTYPE html>
<html lang="en" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Vue Workshop cool Code</title>
</head>
<body>
<div class="main">
	<table class="table">
		<thead>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Anzahl</td>
			<td>Bestellen</td>
		</tr>
		</thead>
		<tbody>
			<tr v-for="beer in beer_list">
				<td>{{beer.id}}</td>
				<td>{{beer.name}}</td>
				<td><beer-quantity v-bind:quantity="beer.quantity" v-bind:style="styleQuantity"></beer-quantity></td>
				<td><button class="btn btn-success" @click="addBeer(beer)" v-bind:disabled="beer.quantity >= 10">Add Beer + 1</button></td>
				<td><button class="btn btn-danger" @click="deleteBeer(beer)" v-bind:disabled="beer.quantity <= 0">Delete Beer - 1</button></td>
			</tr>
		</tbody>
	</table>
	<h2>Total: {{sumOfBeer}}</h2>

</div>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script>
	var beer_list = <?= json_encode($beer_list) ?>;
	
</script>
<script src="vueCode.js" type="application/javascript"></script>
</html>