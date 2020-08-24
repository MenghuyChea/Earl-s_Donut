@include('Inc.header1')
<div style="text-align: center;width: 100%;" id="content">
    <h1>Table Donut</h1>
    <a href="{{url('/create_donut')}}" class="btn btn-success">Insert</a>
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
                    <th scope="col">Image</th>
                    <th scope="col">DonutName</th>
                    <th scope="col">price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($donuts)>0)
                    @foreach($donuts->all() as $donut)
                        <tr class="table-active">
                            <td style="padding-top: 45px">{{ $donut->id }}</td>
                            <td><img src="{{asset('uploads/items/'.$donut->image)}}" height="100" width="150"></td>
                            <td style="padding-top: 45px">{{ $donut->item_name }}</td>
                            <td style="padding-top: 45px">${{ $donut->price }}</td>
                            <td style="padding-top: 40px">
                                <a href='{{url("/read_donut/{$donut->id}")}}'  class="btn btn-primary">Read</a> |
                                <a href='{{url("/update_donut/{$donut->id}")}}'  class="btn btn-success">Update</a> |
                                <a href='{{url("/delete_donut/{$donut->id}")}}'  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('Inc.footer1')
