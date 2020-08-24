@include('Inc.header1')
<div class="container" id="content">
    <legend>Read Drink</legend>
    <div class="row">
        <p class="lead">Drink name : {{$drink->item_name}}</p>
    </div>
    <div class="row">
        <p>Price : {{$drink->price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$drink->description}}</p>
    </div>
</div>
@include('Inc.footer1')
