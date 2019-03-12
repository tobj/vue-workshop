<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Vue Workshop old Code</title>
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
		<?php $sumOfBeer = 0 ?>
		<?php foreach ($beer_list as $beer): ?>
			<?php $sumOfBeer  += (int) $beer['quantity'] ?>
			<tr>
				<td><?= htmlentities($beer['id']) ?></td>
				<td><?= htmlentities($beer['name']) ?></td>
				<td class="beerQuantity" data-quantity="<?= (int) $beer['quantity'] ?>">
					Anzahl: <span><?= htmlentities($beer['quantity']) ?></span>
				</td>
				<td><button class="btn btn-success orderBeer" <?= ($beer['quantity'] > 10) ? 'disabled' : '' ?>>Add Beer +1</button></td>
				<td><button class="btn btn-danger deleteBeer" <?= ($beer['quantity'] <= 0) ? 'disabled' : '' ?>>Delete Beer -1</button></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<h2>Total: <span class="beerTotal" data-beer-total="<?= $sumOfBeer ?>"><?= $sumOfBeer ?></span></h2>

</div>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="oldCode.js" type="application/javascript"></script>
</html>