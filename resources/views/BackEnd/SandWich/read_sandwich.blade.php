@include('Inc.header1')
<div class="container" id="content">
    <legend>Read SandWich</legend>
    <div class="row">
        <p class="lead">SandWich Number : {{$sandwich->item_name}}</p>
    </div>
    <div class="row">
        <p>Price : {{$sandwich->price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$sandwich->description}}</p>
    </div>
</div>
@include('Inc.footer1')
