@extends('layouts.client')

@section('content')
<div class="container-lg">
  <div class="row justify-content-center">

    <div class="col-md-6">
      @if (session('msg'))
      <p class="text-success text-center p-3 lead">{{ session("msg") }}</p>
      @endif
      @if (session('error'))
      <p class="text-danger text-center p-3 lead">{{ session("error") }}</p>
      @endif
      @if (session('transaction_error'))
      <p class="text-danger text-center p-3 lead">{{ session("transaction_error") }}</p>
      @endif
      <form action="{{ route("process",encrypt($id)) }}" method="POST" id="form">

        @csrf
        <input id="nonce" name="payment_method_nonce" type="hidden" />

        <div id="dropin-container"></div>
        <button id="submit-button" type="submit" class="button button--small button--green">Purchase</button>
      </form>

    </div>
  </div>
</div>
<script>
  braintree.dropin.create({
  authorization: '{{ $token }}',
  container: '#dropin-container'
}, function (createErr, instance) {

  var form = document.querySelector('#form');
form.addEventListener('submit', function (event) {
   event.preventDefault();
   instance.requestPaymentMethod(function (err, payload) {
      document.querySelector('input[name="payment_method_nonce"]').value = payload.nonce;
      form.submit();
   });
}, false);

 

});
</script>
</script>



@endsection