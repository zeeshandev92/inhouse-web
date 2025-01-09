<div class="modal fade" id="editDriverModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title">Edit Driver</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form autocomplete="off" method="post" action="{{ route('drivers.update', $driver->id) }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="driverName" class="form-label">Driver Name</label>
                        <input type="text" class="form-control" id="driverName" name="name"
                            value="{{ $driver->name }}" required placeholder="Enter driver name">
                    </div>
                    <div class="mb-3">
                        <label for="status-field" class="form-label">License Type</label>
                        <select class="form-control" data-choices data-choices-search-false
                            id="status-field" name="license_type" required>
                            <option value="">Type</option>
                            <option value="License" @selected($driver->license_type == 'License')>Driver License</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="licenseNumber" class="form-label">License Number</label>
                        <input type="text" class="form-control" id="licenseNumber" placeholder="Enter License Number"
                            name="license_no" value="{{ $driver->license_no }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="licenseExpiration" class="form-label">License Expiration
                            Date</label>
                        <input type="text" class="form-control" id="datepicker-range" data-provider="flatpickr"
                            data-date-format="d M, Y" data-range-date="true" placeholder="Select date"
                            name="license_expiry_date" value="{{ $driver->license_expiry_date }}" required>
                    </div>
                    <div>
                        <label for="status-field" class="form-label">Status</label>
                        <select class="form-control" data-choices data-choices-search-false
                            id="status-field" name="status" required>
                            <option value="">Status</option>
                            <option value="Active" @selected($driver->license_type == 'Active')>Active</option>
                            <option value="Inactive" @selected($driver->license_type == 'Inactive')>Inactive</option>
                            <option value="Block" @selected($driver->license_type == 'Block')>Block</option>
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
