<?php ?>
<!-- Expense form for adding income to budget, pops up after clicking Add
	expense button -->
<form class="container">
	<div class="form-group">
		<label for="expenseForm">Description</label>
		<input type="text" class="form-control" id="expenseForm">
		<label for="expenseForm">Amount</label>
		<input type="text" class="form-control" id="expenseForm">
		<label for="expenseDate">Date Due</label>
		<input type="date" class="form-control" id="expenseDate">
	</div>
	<button type="submit" class="btn btn-primary">Add Expense</button>
</form>