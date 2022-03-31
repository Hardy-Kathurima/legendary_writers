<div>
    @include("livewire.admin-components.modals.deleteOrder")
    <div class="card">
        <div class="card-body">

            <table id="orderProcess" class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Paper Type</th>
                        <th>Deadline</th>
                        <th>Days Left</th>
                        <th>Order cost</th>
                        <th>Payment Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->order_id }}</td>
                        <td>{{ $order->paper_type}}</td>
                        <td>{{ $order->urgency }}</td>
                        <td class="text-danger font-weight-bolder">
                            {{ \Carbon\Carbon::now()->diff( \Carbon\Carbon::parse($order->urgency) )->format(' %d days') }}
                        </td>
                        <td class="font-weight-bolder text-center">${{ $order->order_cost }}</td>
                        <td
                            class="{{ $order->payment_status?"text-success font-weight-bolder":"text-danger font-weight-bolder"}}">
                            {{ $order->payment_status?"Paid":"Not Paid" }}</td>
                        <td>
                            <a class="btn btn-info btn-sm"
                                href="{{ route("detail.process",encrypt($order->id)) }}">Details</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#deleteOrder"
                                wire:click.prevent="showOrder({{ $order->id}})">Delete</button>
                        </td>


                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>