@include('inc.front_menu_header')
    <div class="contact-tittle">
        <h1>Contact</h1>
    </div>
    <div class="contact-form">
        <div class="contact-inside">
            <div class="form">
                <form method="POST" action="{{url('add_feedback')}}">
                    {{csrf_field()}}
                    <fieldset>
                        @if(count($errors)>0)
                            @foreach($errors->all() as $errors)
                                <div class="alert alert-danger">
                                    {{$errors}}
                                </div>
                            @endforeach
                        @endif
                        @if(session('info1'))
                            <div class="col-mg-6 alert alert-success">
                                {{session('info1')}}
                            </div>
                        @endif
                        <legend>Give Us FeedBack</legend>
                        <div class="form-group">
                            <label for="Name" style="color:white;">Name</label>
                            <input type="Name" class="form-control" id="Name" name="feedback_name" aria-describedby="emailHelp" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="Email" style="color:white;">Email</label>
                            <input type="Email" class="form-control" id="Email" name="feedback_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="description" style="color:white;">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btn-send">SEND US</button>
                    </fieldset>
                </form>
            </div>
            <div class="map">
                <div class="talk">
                    <h1>Talk To Us</h1>
                    <p>Tel: (818) 341-2869</p>
                </div>
                <div class="visit">
                    <h1>Visit us</h1>
                    <p>20429 Devonshire St,</p>
                    <p>Chatsworth,</p>
                    <p>CA 91311</p>
                </div>
                <div id="the-map">

                </div>
            </div>
        </div>
    </div>
<script>
    function initMap() {
        var location = {lat: 34.257800, lng: -118.578700};
        var map = new google.maps.Map(document.getElementById("the-map"),{
            zoom:15,
            center:location
        });
        var marker = new google.maps.Marker({
            position:location,
            map:map
        })
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ8beVuEB5jB1dHduwQ8bB6u-0iqsxJZk&callback=initMap">
</script>
@include('inc.front_footer')
