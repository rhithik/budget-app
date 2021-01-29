<?php ?>
<!-- Input form for adding income to budget, pops up after clicking Add
	Income button -->
<!--<form class="container">-->
<!--	<div class="form-group">-->
<!--		<label for="incomeForm">Income Amount</label>-->
<!--		<input type="text" class="form-control" id="incomeForm">-->
<!--	</div>-->
<!--	<div class="form-group">-->
<!--		<label for="incomeDate">Date</label>-->
<!--		<input type="date" class="form-control" id="incomeDate">-->
<!--	</div>-->
<!--	<button type="submit" class="btn btn-primary">Add Income</button>-->
<!--</form>-->
<!-- Modal -->
<div class="modal fade" id="incomeForm" tabindex="-1" aria-labelledby="incomeForm" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="incomeFormTitle">Add Income</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<label for="incomeTitle">Income Type</label>
				<input type="text" class="form-control" id="incomeTitle">
				<label for="incomeAmt">Income Amount</label>
				<input type="text" class="form-control" id="incomeAmt">
				<label for="incomeDate">Date</label>
				<input type="date" class="form-control" id="incomeDate">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Add Income</button>
			</div>
