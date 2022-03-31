<div>
    @if (Session::has('message'))
    <div class="alert alert-success">{{ Session('message') }}</div>
    @endif
    @include("livewire.admin-components.modals.showProfile")
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary">Profile page</div>

                @foreach ($users as $user)
                <div class="card-body">
                    <h5>{{ $user->name }}</h5>
                    <p>{{ $user->created_at }}</p>
                    <p>{{ $user->email }}</p>
                    <p>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#edit-profile" wire:click.prevent="editProfile({{ $user->id }})">
                            Edit Profile
                        </button>
                    </p>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>