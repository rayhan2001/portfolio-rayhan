<div class="modal fade" id="showCategoryModal{{ $category->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Name</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ $category->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
