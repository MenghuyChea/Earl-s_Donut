@include('Inc.header1')
<div class="container" id="content">
    <legend>Read Donut</legend>
    <div class="row">
        <p class="lead">Donut name : {{$donut->item_name}}</p>
    </div>
    <div class="row">
        <p>Price : {{$donut->price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$donut->description}}</p>
    </div>
</div>
@include('Inc.footer1')
