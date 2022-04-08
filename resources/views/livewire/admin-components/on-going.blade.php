<div>
    @include("livewire.admin-components.modals.deleteOrder")
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
                    <input wire:model.debounce.300ms="search" type="text" class="form-control"
                        placeholder="Search orders...">
                </div>
            </div>

            <div class="table-responsive">
                <table id="orderOngoing" class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th wire:click="sortBy('order_id')" style="cursor: pointer;">Order Id
                                <span class="ml-3"><i class="fa fa-sort"></i></span>
                            </th>
                            <th wire:click="sortBy('paper_type')" style="cursor: pointer;">Paper Type
                                <span class="ml-3"><i class="fa fa-sort"></i></span>
                            </th>
                            <th wire:click="sortBy('urgency')" style="cursor: pointer;">Deadline
                                <span class="ml-3"><i class="fa fa-sort"></i></span>
                            </th>
                            <th>Days Left</th>
                            <th wire:click="sortBy('order_cost')" style="cursor: pointer;">Order cost
                                <span class="ml-3"><i class="fa fa-sort"></i></span>
                            </th>
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
                                    href="{{ route('detail.ongoing',encrypt($order->id)) }}">Details</a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteOrder"
                                    wire:click.prevent="showOrder({{ $order->id }})" href="#">Delete</button>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            {{ $orders->links() }}
        </div>
        <!-- /.card-body -->
    </div>
</div>