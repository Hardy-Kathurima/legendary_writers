<div>
    @include("livewire.admin-components.modals.showPayment")
    @include("livewire.admin-components.modals.showCard")
    <div class="mb-5">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Paid with paypal
                    <p class="lead font-weight-bolder">Total Paid : ${{ $total_paypal }}.00</p>
                </h3>
                <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <table id="paypal" class="table table-sm table-bordered">
                        <thead>
                            <tr>

                                <th>Paper Type</th>
                                <th>Deadline</th>
                                <th>Order Number</th>
                                <th>Order Cost</th>
                                <th>Payer Email</th>
                                <th>Amount Paid</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($paypal_payments as $payment)
                            <tr>

                                <td>{{ $payment->order->paper_type }}</td>
                                <td>{{ $payment->order->urgency }}</td>
                                <td>{{ $payment->order->order_id }}</td>
                                <td class="font-weight-bold text-center">${{ $payment->order->order_cost }}</td>
                                <td>{{ $payment->payer_email }}</td>
                                <td class="text-success font-weight-bolder text-center">${{ $payment->amount }}</td>
                                <td class="text-success font-weight-bolder">{{ $payment->payment_status }}</td>
                                <td class="d-flex justify-content-between">
                                    <button class="btn btn-primary  btn-sm" data-toggle="modal"
                                        data-target="#showPayment"
                                        wire:click.prevent="showPayment({{$payment->id}})">View</button>
                                    <button class="btn btn-danger btn-sm  ">Delete</button>
                                </td>

                            </tr>

                            @empty
                            <div>No records available</div>

                            @endforelse

                        </tbody>

                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>


    </div>
    <div class="mb-3">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Paid with Card
                    <p class="lead font-weight-bolder">Total Paid : ${{ $total_card }}.00</p>

                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <table id="showCard" class="table table-sm table-bordered">
                        <thead>
                            <tr>

                                <th>Paper Type</th>
                                <th>Deadline</th>
                                <th>Order Number</th>
                                <th>Order Cost</th>
                                <th>Order Name</th>
                                <th>Amount Paid</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($cards as $card)
                            <tr>
                                <td>{{ $card->order->paper_type }}</td>
                                <td>{{ $card->order->urgency }}</td>
                                <td>{{ $card->order->order_id }}</td>
                                <td class="text-center font-weight-bold">${{ $card->order->order_cost }}</td>
                                <td>{{ $card->order_name }}</td>
                                <td class="text-success text-center font-weight-bolder">${{ $card->amount }}</td>
                                <td class="text-success font-weight-bolder text-center">{{ $card->payment_status }}</td>
                                <td>
                                    <button class="btn btn-primary  btn-sm" data-toggle="modal"
                                        data-target="#showCard">View</button>
                                    <button class="btn btn-danger btn-sm  ">Delete</button>
                                </td>

                            </tr>

                            @empty
                            <div>No records available</div>

                            @endforelse

                        </tbody>


                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>


    </div>

</div>