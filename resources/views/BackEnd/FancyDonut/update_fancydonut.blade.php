@include('Inc.header1')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/edit_fancy_donut', array($fancy_donut->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Update Fancy Donut</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Donut">Donut Name</label>
                        <input type="Donut" class="form-control" id="Donut" name="item_name" aria-describedby="emailHelp" placeholder="Enter Donut Name" value="{{$fancy_donut->item_name}}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option>Donuts</option>
                            <option>Fancy Donuts</option>
                            <option>Croissant</option>
                            <option>Pastries</option>
                            <option>Drink</option>
                            <option>Sandwich</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Large</label>
                        <input type="price" class="form-control" id="price" name="price" placeholder="Price" value="{{$fancy_donut->price}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="description" class="form-control" id="description" name="description" value="{{$fancy_donut->description}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/FancyDonut')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('Inc.footer1')
