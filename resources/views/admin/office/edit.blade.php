<div class="modal fade" id="editOfficeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title">Edit Office</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form autocomplete="off" method="post" action="{{ route('offices.update', $office->id) }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Office
                            Name</label>
                        <input type="text" id="customername-field" class="form-control" placeholder="Enter name"
                            name="name" value="{{ $office->name }}" required />
                        <div class="invalid-feedback">Please enter a Office name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email-field" class="form-label">Email</label>
                        <input type="email" id="email-field" class="form-control" name="email"
                            placeholder="Enter email" value="{{ $office->email }}" readonly />
                        <div class="invalid-feedback">Please enter an email.</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone-field" class="form-label">Phone</label>
                        <input type="text" id="phone-field" class="form-control" name="phone_no"
                            placeholder="Enter phone no." required value="{{ $office->phone_no }}" />
                        <div class="invalid-feedback">Please enter a phone.</div>
                    </div>


                    <div>
                        <label for="status-field" class="form-label">Status</label>
                        <select class="form-control" data-choices data-choices-search-false id="status-field"
                            name="status" required>
                            <option value="">Status</option>
                            <option value="Active" @selected($office->license_type == 'Active')>Active</option>
                            <option value="Inactive" @selected($office->license_type == 'Inactive')>Inactive</option>
                            <option value="Block" @selected($office->license_type == 'Block')>Block</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-success">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
