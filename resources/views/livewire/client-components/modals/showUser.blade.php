<!-- Modal -->
<div wire:ignore.self class="modal fade" id="showUser" tabindex="-1" role="dialog" aria-labelledby="showUserLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showUserLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body p-3">


                        <form wire:submit.prevent="updateUser()">
                            <input type="hidden" name="user_id" wire:model="user_id">
                            <div class="mb-3">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" wire:model="name">
                                <p>@error('name')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" wire:model="email">
                                <p>@error('email')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror</p>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </div>
                        </form>






                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>