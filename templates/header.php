<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget App</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
	<nav class="navbar">
		<a href="#" class="logo">Budget App</a>
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
</div>

<div class="btn-container">
	<div>
		<button type="button" class="income-btn" data-toggle-modal="#income_modal">Add
			Income
		</button>
		<div class="modal" id="income_modal">
			<div class="backdrop">
				<div class="content">
					<form action="">
						<h2>Add Income</h2>
						<p>Type: <input type="text"></p>
						<p>Amount: <input type="text"></p>
						<p>Date: <input type="date"></p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div>
		<button type="button" class="income-btn" data-toggle-modal="#expense_modal">Add
			Expenses
		</button>
		<div class="modal" id="expense_modal">
			<div class="backdrop">
				<div class="content">
					<form action="">
						<h2>Add Expense</h2>
						<p>Type: <input type="text"></p>
						<p>Amount: <input type="text"></p>
						<p>Date: <input type="date"></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--		--><?php //include 'templates/income-form.php' ?>
	<!--		--><?php //include 'templates/expense-form.php' ?>
</div>


