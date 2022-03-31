<div>
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

                <div class="col-md-6">
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
                        {{ $order->payment_status? "Ongoing":"In Process"}}</div>
                </div>
                <div class="col-md-2">
                    <div class="text-muted">Action</div>
                    <div>
                        <a class="btn btn-primary btn-sm" href="{{ route('detailOngoing',encrypt($order->id)) }}">View
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @empty
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-body text-center">
                <p class="lead">You dont have any orders ongoing</p>
                <a href="{{ route('create.order') }}">Add a new order</a>
            </div>
        </div>
    </div>
    @endforelse
    {{ $orders->links() }}


</div>