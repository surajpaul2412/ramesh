@extends('layouts.frontend')

@section('main')
<div class="container">
    <h2>Complete Your Payment</h2>
    
    <button id="pay-btn" class="btn btn-primary">Pay Now</button>

    <form id="razorpay-form" action="{{ route('razorpay.payment') }}" method="POST">
        @csrf
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    </form>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{ env('RAZORPAY_KEY') }}",
        "amount": "{{ $order->amount }}",
        "currency": "INR",
        "name": "SwarnSilva",
        "description": "Order Payment",
        "order_id": "{{ $order->id }}",
        "handler": function (response){
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    
    var rzp1 = new Razorpay(options);
    
    document.getElementById('pay-btn').onclick = function(e){
        rzp1.open();
        e.preventDefault();
    };
</script>
@endsection
