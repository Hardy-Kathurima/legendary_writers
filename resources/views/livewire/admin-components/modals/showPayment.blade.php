<!-- Modal -->
<div wire:ignore.self class="modal fade" id="showPayment" tabindex="-1" role="dialog" aria-labelledby="showPaymentLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showPaymentLabel">Payment Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">


                        <hr>

                        @foreach ($payPals as $paypal )
                        <p class="lead">Payment Id : {{ $paypal->payment_id }}</p>
                        <p class="lead">Payment Date: {{$paypal->created_at  }}</p>
                        <p class="lead font-weight-bolder">Total amount Paid: ${{ $paypal->amount }}</p>
                        <p class="lead">Currency: {{ $paypal->currency }}</p>

                        @endforeach



                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>