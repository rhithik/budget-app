<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budget App</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
		<p>Amount: <input type="text" aria-label="Enter income amount"></p>
		<p>Date: <input type="date" aria-label="Enter date of income"></p>
		<submit>
			<button>Add Income</button>
		</submit>
	</form>
	<!-- Expenses form for adding expenses to budget, pops up after clicking Add
	Expenses button -->
	<form title="Add Expenses" action="">
		<p>Amount: <input type="text" aria-label="Enter amount of expense"></p>
		<p>Date Due: <input type="date" aria-label="Enter when expense is due"></p>
		<submit>
			<button>Add Expense</button>
		</submit>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>