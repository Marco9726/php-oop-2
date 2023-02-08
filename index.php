<?php
include __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<header class="mb-5">
		<div class="container w-75">
			<h1>Boolshop</h1>
		</div>
	</header>
	<main>
		<div class="container w-75">
			<h2>I Nostri Prodotti</h2>
			<div class="d-flex flex-wrap">
				<?php
				foreach ($products as $product) {	?>
					<div class="card mb-4 p-3">
						<?php echo $product->getImgHtml();
						echo $product->getNameHtml();
						echo $product->getIconAndName() ?>
					</div>

				<?php } ?>
			</div>
		</div>
	</main>
</body>

</html>