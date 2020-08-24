@include('Inc.header1')
<div class="container" id="content">
    <legend>Read Pastries</legend>
    <div class="row">
        <p class="lead">Pastries name : {{$pastrie->item_name}}</p>
    </div>
    <div class="row">
        <p>Price : {{$pastrie->price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$pastrie->description}}</p>
    </div>
</div>
@include('Inc.footer1')
