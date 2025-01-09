<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form autocomplete="off" method="post" action="{{ route('category.update', $category->id) }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-category-name" class="form-label">Category Name</label>
                        <input type="text" id="edit-category-name" class="form-control"
                            placeholder="Enter category name" value="{{ $category->title }}" name="title" required>
                        <div class="invalid-feedback">Please enter a category name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" data-plugin="choices" data-choices data-choices-search-false
                            name="status" id="idStatus">
                            <option value="" selected>Status</option>
                            <option value="1" @selected($category->status)>Active</option>
                            <option value="0" @selected(!$category->status)>Inactive</option>
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
