<?php ?>
<!-- Expense form for adding income to budget, pops up after clicking Add
	expense button -->
<!--	<form class="container">-->
<!--		<div class="form-group">-->
<!--			<label for="expenseForm">Expense Amount</label>-->
<!--			<input type="text" class="form-control" id="expenseForm">-->
<!--		</div>-->
<!--		<div class="form-group">-->
<!--			<label for="expenseDate">Date Due</label>-->
<!--			<input type="date" class="form-control" id="expenseDate">-->
<!--		</div>-->
<!--		<button type="submit" class="btn btn-primary">Add Expense</button>-->
<!--	</form>-->
<!-- Modal -->
<div class="modal fade" id="expenseForm" tabindex="-1" aria-labelledby="expenseForm" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="expenseFormTitle">Add Expense</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<label for="expenseTitle">Name</label>
				<input type="text" class="form-control" id="expenseTitle">
				<label for="expenseAmt">Expense Amount</label>
				<input type="text" class="form-control" id="expenseAmt">
				<label for="expenseDate">Date Due</label>
				<input type="date" class="form-control" id="expenseDate">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Add Expense</button>
			</div>
        </div>
    </div>
</div>