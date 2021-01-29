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

	<div class="container row">
		<div class="col">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#incomeForm">Add
				Income
			</button>
		</div>

		<div class="col">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#expenseForm">Add
				Expenses
			</button>
		</div>
		<?php include 'templates/income-form.php' ?>
		<?php include 'templates/expense-form.php' ?>
	</div>


</div>
<?php include 'bs4js.php' ?>
