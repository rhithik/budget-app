<?php include 'bs4css.php' ?>
<!-- Input form for adding income to budget, pops up after clicking Add
	Income button -->
<!-- wondering if I should make these forms into modals -->
<form class="container">
	<div class="form-group">
		<label for="incomeForm">Income Amount</label>
		<input type="text" class="form-control" id="incomeForm">
	</div>
	<div class="form-group">
		<label for="incomeDate">Date</label>
		<input type="date" class="form-control" id="incomeDate">
	</div>
	<button type="submit" class="btn btn-primary">Add Income</button>
</form>
<?php include 'bs4js.php' ?>