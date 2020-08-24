@include('inc.header1')
<div style="text-align: center;width: 100%" id="content">
    <h1>Table FeedBack</h1>
    <a href="{{url('/create_feed')}}" class="btn btn-success">Insert</a>
    <div class="container">
        <div class="row">
            @if(session('info1'))
                <div class="col-mg-6 alert alert-success">
                    {{session('info1')}}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($feeds)>0)
                    @foreach($feeds->all() as $feed)
                        <tr class="table-active">
                            <th scope="row">{{$feed->id}}</th>
                            <td>{{$feed->feedback_name}}</td>
                            <td>{{$feed->feedback_email}}</td>
                            <td>
                                <a href='{{url("/read_feed/{$feed->id}")}}'  class="btn btn-primary">Read</a> |
                                <a href='{{url("/update_feed/{$feed->id}")}}'  class="btn btn-success">Update</a> |
                                <a href='{{url("/delete_feed/{$feed->id}")}}'  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('inc.footer1')
