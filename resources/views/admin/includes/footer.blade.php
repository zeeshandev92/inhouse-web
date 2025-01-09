<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<script>document.write(new Date().getFullYear())</script> © InHouse.
				</div>

			</div>
		</div>
</footer>


<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
			</div>
			<div class="modal-body">
				<div class="mt-2 text-center">
					<i class="mdi mdi-trash-can fs-36"></i>
					<div class="mt-2 pt-2 fs-15 mx-4 mx-sm-5">
						<h4>Are you sure ?</h4>
						<p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
					</div>
				</div>
				<div class="d-flex gap-2 justify-content-center mt-4 mb-2">
					<button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
				</div>
			</div>
		</div>
	</div>
</div>
