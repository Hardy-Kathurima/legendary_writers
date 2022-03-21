<div>
    @include("livewire.admin-components.modals.showUser")
    @include("livewire.admin-components.modals.showConfirm")
    @include("livewire.admin-components.modals.showAdd")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manage users
                <button class="btn btn-primary" data-toggle="modal" data-target="#showAdd">Add User</button>
            </h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session('deleteUser'))
            <div class="alert alert-danger">{{ session("deleteUser") }}</div>

            @endif
            @if (session()->has("message"))

            <div class="alert alert-success">{{ session("message") }}</div>

            @endif
            @if (session()->has("user-added"))

            <div class="alert alert-success">{{ session("user-added") }}</div>

            @endif
            <table id="manageUsers" class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>User Name</th>
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
        <!-- /.card-body -->
    </div>


</div>