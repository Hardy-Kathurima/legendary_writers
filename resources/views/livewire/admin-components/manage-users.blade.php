<div>
    @include("livewire.admin-components.modals.showUser")
    @include("livewire.admin-components.modals.showConfirm")
    @include("livewire.admin-components.modals.showAdd")
    <div class="card">

        <div class="card-body">
            <div class="row mb-4">
                <div class="col form-inline">
                    <select wire:model="perPage" class="form-control">
                        <option>2</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="col">
                    <span>Manage Users</span>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#showAdd">Add User</button>
                </div>
                <div class="col">
                    <input wire:model.debounce.300ms="search" type="text" class="form-control"
                        placeholder="Search orders...">
                </div>
            </div>
            <div class="table-responsive">
                <table id="manageUsers" class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th wire:click="sortBy('name')" style="cursor: pointer;">User Name
                                <span class="ml-3"><i class="fa fa-sort"></i></span>
                            </th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td><span class="mr-2">{{ $user->name }}</span>
                                <a href="#" wire:click.prevent="startConversation({{ $user->id }})"
                                    class="text-secondary"><i class="fa fa-comments"></i></a>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_admin? 'Admin':'Normal user' }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#showUser" wire:click.prevent="editUser({{ $user->id }})">
                                    Edit user
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#showConfirm"
                                    wire:click.prevent="showConfirm({{ $user->id}})">Delete</button>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            {{ $users->links() }}
        </div>

    </div>


</div>