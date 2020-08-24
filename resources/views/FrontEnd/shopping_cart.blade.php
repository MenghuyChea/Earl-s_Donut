@include('inc.front_menu_header')
<div class="menu-tittle">
    <h1>Shopping Cart</h1>
</div>
<section class="container content-section">
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
    </div>
    @if(Session::has('cart'))
        @foreach($donuts as $donut)
        <div class="cart-items">
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <span class="cart-item-title">{{ $donut['item']['item_name'] }}</span>
                </div>
                <span class="cart-price cart-column">{{ $donut['price'] }}$</span>
                <div class="cart-quantity cart-column">
                    <span class="cart-quantity">x{{ $donut['qty'] }}</span>
                    <a href='{{url("/reduce/{$donut['item']['id']}")}}'  class="btn-danger1" style="text-decoration: none;">Reduce</a>
                    <a href='{{url("/remove/{$donut['item']['id']}")}}'  class="btn-danger1" style="text-decoration: none;">Remove</a>
                </div>
            </div>
        </div>
        @endforeach
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">{{ $totalPrice }}$</span>
            </div>
            <a href="{{ url("/checkout") }}" class="btn btn-primary btn-purchase" type="button" id="btn-pur">Check Out</a>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" id="no-item">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
</section>
@include('inc.front_footer')
