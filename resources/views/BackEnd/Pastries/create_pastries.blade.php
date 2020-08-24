@include('Inc.header1')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{url('insert_pastries')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset>
                    <legend>Create Pastries</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Pastries">Pastries Name</label>
                        <input type="Pastries" class="form-control" id="Pastries" name="item_name" aria-describedby="emailHelp" placeholder="Enter Pastries Name">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="Price" name="type">
                            <option>Donuts</option>
                            <option>Fancy Donuts</option>
                            <option>Croissant</option>
                            <option>Pastries</option>
                            <option>Drink</option>
                            <option>Sandwich</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="input-group" style="margin-bottom: 10px">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/Pastries')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('Inc.footer1')
