<div>
    @include("livewire.client-components.modals.showConfirm")
    @if (Session::has('deleteOrder'))
    <div class="alert alert-danger">{{ Session('deleteOrder') }}</div>

    @endif
    @if ($orders->count()>0)
    <div class="row justify-contend-end ">
        <div class="col-md-6">
            <div class="mb-3"><input type="text" name="search" id="search" class="form-control"
                    placeholder="search an order" wire:model="search"></div>
        </div>
    </div>

    @endif
    @forelse ($orders as $order)
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="text-muted">Paper Title</div>
                    <div>{{ $order->paper_title }}</div>
                </div>
                <div class="col-md-2">
                    <div class="text-muted">Due By</div>
                    <div>{{ $order->urgency}}</div>
                </div>
                <div class="col-md-2">
                    <div class="text-muted">Status</div>
                    <div class="{{ $order->payment_status?'text-success':'text-danger' }}">
                        {{ $order->payment_status? "Paid":"Not Paid"}}</div>
                </div>
                <div class="col-md-4">
                    <div class="text-muted">Action</div>
                    <div>
                        <a class="btn btn-primary btn-sm" href="{{ route('detailInProcess',encrypt($order->id)) }}">
                            Details</a>
                        <a class="btn btn-success btn-sm"
                            href="{{ route('client.payment',encrypt($order->order_id)) }}">
                            Pay now</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#confirmDelete"
                            wire:click.prevent="showConfirm({{ $order->id}})">Delete</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @empty
    <p class="lead">You dont have any orders in process</p>
    <a href="{{ route('create.order') }}">Add a new order</a>
    @endforelse
    {{ $orders->links() }}

</div>