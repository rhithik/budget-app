<?php include 'bs4css.php' ?>
	<!-- Expense form for adding income to budget, pops up after clicking Add
		expense button -->
	<form class="container">
		<div class="form-group">
			<label for="expenseForm">Expense Amount</label>
			<input type="text" class="form-control" id="expenseForm">
		</div>
		<div class="form-group">
			<label for="expenseDate">Date Due</label>
			<input type="date" class="form-control" id="expenseDate">
		</div>
		<button type="submit" class="btn btn-primary">Add Expense</button>
	</form>
<?php include 'bs4js.php' ?>