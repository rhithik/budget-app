<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget App</title>
</head>
<body>
<div class="top-banner">
	<div class="title">
		<h2>Budget App</h2>
	</div>
	<div class="menu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Budgets</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</div>
	<div class="main">
		<button>Add Income</button>
		<button>Add Expenses</button>
	</div>
	<!-- Input form for adding income to budget, pops up after clicking Add
	Income button -->
	<form title="Add Income" action="">
		<p>Amount: <input type="text"></p>
		<p>Date: <input type="date"></p>
	</form>
	<!-- Expenses form for adding expenses to budget, pops up after clicking Add
	Expenses button -->
	<form title="Add Expenses" action="">
		<p>Amount: <input type="text"></p>
		<p>Date Due: <input type="date"></p>
	</form>
</div>
</body>
</html>