<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                @foreach ($orders as $order)

                <h4 class="text-center">Order Status: <span class="text-success">Completed</span></h4>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <p>Order Type: <span class="font-weight-bold">{{ $order->paper_type }}</span></p>
                    </div>
                    <div class="col-md-3">
                        <p>Order Cost: <span class="font-weight-bold">${{ $order->order_cost }}.00</span></p>
                    </div>
                    <div class="col-md-5">
                        <p>Completed: <span class="font-weight-bold">{{ $order->updated_at }}</span></p>
                    </div>

                </div>

                @endforeach
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <div class="text-center">Reviews</div>
                <p class="text-muted text-center">No Reviews Yet</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col text-center"> <a href="{{ route('admin.completed') }}"> <span><i
                        class="fa fa-arrow-left"></i></span> Go Back
                to orders</a></div>
    </div>
</div>