<!-- Modal -->
<div wire:ignore.self class="modal fade" id="showAdd" tabindex="-1" role="dialog" aria-labelledby="showAddLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showAddLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-body">

                    <form wire:submit.prevent="addUser()">

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
                            <label for="role">Role:</label>
                            <select name="role" id="role" class="form-control" wire:model="role">
                                <option value="" selected>Select Role</option>

                                <option value="1">Admin</option>
                                <option value="0">Normal User</option>
                            </select>
                            <p>@error('role')
                                <span class="text-danger">{{ $message }}</span>

                                @enderror</p>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Add user</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>