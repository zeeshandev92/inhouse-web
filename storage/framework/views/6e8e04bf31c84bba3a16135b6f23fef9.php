<div class="modal fade" id="addOfficeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title">Add Office </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form autocomplete="off" method="post" action="<?php echo e(route('offices.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Office
                            Name</label>
                        <input type="text" id="customername-field" class="form-control" placeholder="Enter name"
                            name="name" required />
                        <div class="invalid-feedback">Please enter a Office name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email-field" class="form-label">Email</label>
                        <input type="email" id="email-field" class="form-control" name="email"
                            placeholder="Enter email" required />
                        <div class="invalid-feedback">Please enter an email.</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone-field" class="form-label">Phone</label>
                        <input type="text" id="phone-field" class="form-control" name="phone_no"
                            placeholder="Enter phone no." required />
                        <div class="invalid-feedback">Please enter a phone.</div>
                    </div>


                    <div>
                        <label for="status-field" class="form-label">Status</label>
                        <select class="form-control" data-choices data-choices-search-false name="status"
                            id="status-field" required>
                            <option value="">Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Block">Block</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-success">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\personal\InHouse-web\resources\views/admin/office/create.blade.php ENDPATH**/ ?>