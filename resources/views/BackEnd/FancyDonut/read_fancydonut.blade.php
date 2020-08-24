@include('Inc.header1')
<div class="container" id="content">
    <legend>Read Fancy Donut</legend>
    <div class="row">
        <p class="lead">Donut name : {{$fancy_donut->item_namee}}</p>
    </div>
    <div class="row">
        <p>Price : {{$fancy_donut->price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$fancy_donut->description}}</p>
    </div>
</div>
@include('Inc.footer1')
