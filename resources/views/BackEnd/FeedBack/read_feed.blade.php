@include('inc.header1')
<div class="container" id="content">
    <legend>Read FeedBack</legend>
    <div class="row">
        <p class="lead">Name : {{$feed->feedback_name}}</p>
    </div>
    <div class="row">
        <p>Email : {{$feed->feedback_email}}</p>
    </div>
    <div class="row">
        <p>Description: {{$feed->description}}</p>
    </div>
</div>
@include('inc.footer1')
