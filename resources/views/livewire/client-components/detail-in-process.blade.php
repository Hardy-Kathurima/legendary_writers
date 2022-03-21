<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @forelse ($orders as $order)
                <div class="card-header text-center {{ $order->payment_status?'bg-success':'bg-danger' }}">Payment
                    Status - {{ $order->payment_status?"Paid":"Not Paid" }}</div>

                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-7">
                            <div class="text-muted">Paper Title</div>
                            <div>{{ $order->paper_title }} </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-muted">Order Number</div>
                            <div class="font-weight-bolder">{{ $order->order_id }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Order Cost</div>
                            <div class="font-weight-bolder">${{ $order->order_cost }}.00</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="text-muted">Due Date</div>
                            <div> <span class="text-danger"><i class="fa fa-calendar"></i></span> {{ $order->urgency }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-muted">Date added</div>
                            <div>{{ $order->created_at }}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Days left</div>
                            <div><span class="{{ $order->urgency?'text-success':'text-danger' }}"><i
                                        class="fas fa-hourglass-half"></i></span>
                                +{{ \Carbon\Carbon::now()->diff( \Carbon\Carbon::parse($order->urgency) )->format(' %d days') }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="text-muted">Paper Type</div>
                            <div>{{ $order->paper_type }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-muted">Language Style</div>
                            <div>{{ $order->language_style }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-muted">Paper Style</div>
                            <div>{{ $order->paper_style }}</div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Pages</div>
                            <div>{{ $order->number_pages }}</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2">
                        <div class="col-md-8">
                            <div class="text-muted">Files Uploaded</div>
                            @if ($order->paper_file == "No file uploaded")
                            <div>No files Uploaded </div>
                            @else
                            <div><a href="{{ route('client.download',$order->paper_file) }}">
                                    {{ $order->paper_file }}
                                    <span> <i class="fa fa-download"></i></a>
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="text-muted">Order Status</div>
                            <div class="{{ $order->payment_status?'text-success':'text-danger' }}">
                                {{ $order->payment_status?"onGoing":"InProcess" }}</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-muted">Talk To Us</div>
                            <div><a href="#" wire:click.prevent="startConversation({{ $admin_id }})"><i
                                        class="fa fa-comments"></i></a></div>
                        </div>
                        <div class="col-md-4">

                            <div><a class="btn btn-info" href="{{ route("inProcess") }}">Go back to orders</a>
                            </div>
                        </div>
                    </div>



                </div>
                @empty
                <div class="card-body text-center">
                    <p class="lead">You currently dont have any ongoing orders</p>
                    <p><a class="btn btn-primary" href="{{ route('inProcess') }}">Go to InProcess</a></p>
                </div>

                @endforelse
            </div>
        </div>
    </div>
</div>