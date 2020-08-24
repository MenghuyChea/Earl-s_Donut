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
                    <th scope="col">Address</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($orders)>0)
                    @foreach($orders->all() as $order)
                        <tr class="table-active">
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->created_at->format('H:i A')}}</td>
                            <td>
                                <a href='{{url("/read_order/{$order->id}")}}'  class="btn btn-primary">Read</a>
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
