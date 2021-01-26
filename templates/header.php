<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget App</title>
	<?php include 'bs4css.php' ?>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a href="#" class="navbar-brand">Budget App</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
		        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Budgets</a></li>
				<li class="nav-item"><a href="#" class="nav-link">About</a></li>
			</ul>
		</div>

	</nav>
	<div class="container">
		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-success rounded-pill">Add Income</button>
			</div>
			<div class="col">
				<button type="button" class="btn btn-danger rounded-pill">Add Expenses</button>
			</div>
		</div>


	</div>
</div>
<?php include 'bs4js.php' ?>
