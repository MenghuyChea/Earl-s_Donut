@include('inc.header1')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/edit_feed', array($feed->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Update Chief</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="Name" class="form-control" id="Name" name="feedback_name" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$feed->feedback_name}}">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" class="form-control" id="Email" name="feedback_email" placeholder="Enter Email" value="{{$feed->feedback_email}}">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control" id="description" name="description" value="{{$feed->description}}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/FeedBack')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer1')
