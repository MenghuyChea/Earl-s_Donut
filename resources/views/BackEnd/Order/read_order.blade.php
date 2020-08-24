@include('inc.header1')
<div class="container" id="content">
    <legend>Read Order</legend>
    <div class="row">
        <p class="lead">Name : {{$order->name}}</p>
    </div>
    <div class="row">
        <p>Email : {{$order->email}}</p>
    </div>
    <div class="row">
        <p>Address: {{$order->address}}</p>
    </div>
    <div class="row">
        <p>Payment ID: {{$order->payment_id}}</p>
    </div>
    <h2>Order Lists</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">QTY</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $product)
                <tr class="table-active">
                    <th scope="row">{{ $product['item']['item_name'] }}</th>
                    <td>{{ $product['price'] }} $</td>
                    <td>x{{ $product['qty'] }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
    <div class="panel-footer">
        <strong>Total Price: ${{ $totalPrice }}</strong>
    </div>
</div>
@include('inc.footer1')
