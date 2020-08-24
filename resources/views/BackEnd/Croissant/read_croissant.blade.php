@include('Inc.header1')
<div class="container" id="content">
    <legend>Read Croissant</legend>
    <div class="row">
        <p class="lead">Croissant name : {{$croissant->item_name}}</p>
    </div>
    <div class="row">
        <p>Price : {{$croissant->price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$croissant->description}}</p>
    </div>
</div>
@include('Inc.footer1')
