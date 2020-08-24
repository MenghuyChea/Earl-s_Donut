@include('inc.front_menu_header')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<div class="col-md-4 container bg-default" id="checkout">

    <h1 class="my-4">
        Check Out
    </h1>
    <h4>Your Total: ${{$total}}</h4>
    @if(Session::has('error'))
    <div id="charge-error" class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
    @endif
    <form action="{{ url('/checkout') }}" method="post" id="checkout-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main Street" required>
        </div>

        <div class="form-group">
            <label for="card-name">Card Holder Name</label>
            <input type="text" class="form-control" id="card-name" placeholder required>
        </div>
        <div class="form-group">
            <label for="card-number">Credit Card Number</label>
            <input type="number" class="form-control" id="card-number" placeholder="4242 4242 4242 4242" required>
        </div>

        <div class="row mt-2">
            <div class="col-md-6 form-group">
                <label for="card-expiry-month">Expire Month</label>
                <input type="number" class="form-control" id="card-expiry-month" placeholder="MM" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="card-expiry-year">Expire Year</label>
                <input type="number" class="form-control" id="card-expiry-year" placeholder="YYYY" required>
            </div>
        </div>
        <div class="form-group">
            <label for="card-cvc">Security Number</label>
            <input type="number" class="form-control" id="card-cvc" placeholder="000" required>
        </div>

        <hr class="mb-4">

        <button class="btn btn-primary bt-lg btn-block" type="submit">Continue to Checkout</button>
        {{ csrf_field() }}
    </form>
</div>

@include('inc.front_footer')
<script type="text/javascript" src="{{ asset('/js/checkout.js') }}"></script>
