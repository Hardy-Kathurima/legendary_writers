<!-- Modal -->
<div wire:ignore.self class="modal fade" id="showConfirm" tabindex="-1" role="dialog" aria-labelledby="showConfirmLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showConfirmLabel">Order details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5>Are You sure you want to delete this user ?</h5>
                        <p>This action cannot be undone</p>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click.prevent="deleteUser">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>