@include('Inc.header1')
<div style="text-align: center;width: 100%;" id="content">
    <h1>Table Drink</h1>
    <a href="{{url('/create_drink')}}" class="btn btn-success">Insert</a>
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
                    <th scope="col">DrinkName</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($drinks)>0)
                    @foreach($drinks->all() as $drink)
                <tr class="table-active">
                    <td style="padding-top: 45px">{{ $drink->id }}</td>
                    <td><img src="{{asset('uploads/items/'.$drink->image)}}" height="100" width="150"></td>
                    <td style="padding-top: 45px">{{ $drink->item_name }}</td>
                    <td style="padding-top: 45px">${{ $drink->price }}</td>
                    <td style="padding-top: 40px">
                        <a href='{{url("/read_drink/{$drink->id}")}}'  class="btn btn-primary">Read</a> |
                        <a href='{{url("/update_drink/{$drink->id}")}}'  class="btn btn-success">Update</a> |
                        <a href='{{url("/delete_drink/{$drink->id}")}}'  class="btn btn-danger">Delete</a>
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
