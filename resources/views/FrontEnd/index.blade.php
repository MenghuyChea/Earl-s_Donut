@include('inc.front_header')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('uploads/2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">Welcome to Earl's Donut</h5>
                    <p class="animated bounceInRight" style="animation-delay: 2s;">One Of The Good Donut Shop In Town.We Sell All Good Donuts.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('uploads/1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated slideInDown" style="animation-delay: 1s;">Buy One Dozen Get 2 Donuts Free!</h5>
                    <p class="animated fadeInUp" style="animation-delay: 2s;">One Dozen You Can Get 14 Donuts Total.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('uploads/3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated zoomIn" style="animation-delay: 1s;">Buy Half Dozen Get 1 Donut Free!</h5>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">Half Dozen You Can Get 7 Donut Total.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section>
        <div class="donut-review">
            <div class="review-top">
                <h1>There Is No Sincerer Love Than The Love Of Food</h1>
                <h5>Quality Of Donut Made With Love</h5>
                <hr style="width: 30%;background-color: black;height: 1px;border-width:1px">
            </div>
            <div class="review-bottom">

                    <div class="card" style="width: 22rem;" id="card-card">
                        <img class="card-img-top" src="{{asset('uploads/Smal-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">TO YOUR DOORSTEP</h5>
                            <p class="card-text">100 Years Ago Dough Nuts was Only Available To Wealthy Individuals Or Royalty, At That Time Spun Sugar Was An Expensive, Labor-Intensive Endeavor And Was Not Generally Available To The Average Person.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <div class="card" style="width: 22rem;" id="card-card">
                        <img class="card-img-top" src="{{asset('uploads/Smal-2.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">FOOD HEALTH & SAFETY</h5>
                            <p class="card-text">You Can Rest Assured That We Adhere To Stringent Health And Safety Guidelines When Producing Our Products. We Make Use Of Commercial Facilities And We Do Not Produce In Someone Backyard Or Garage.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <div class="card" style="width: 22rem;" id="card-card">
                        <img class="card-img-top" src="{{asset('uploads/Smal-3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">IT IMPROVES OVERALL WELL BEING</h5>
                            <p class="card-text">It Is No Secret That Eating Donut Will Make You Happy And Feel Better About Everything.It Only Takes About 30 Grams Of Sugar To Make A Typical Serving.Which Is About 10 Grams Less Than A Regular 330Ml Soft drink.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

            </div>
        </div>

        <div class="comment">
            <div class="comment-inside">
                <h3 style="font-weight: bold;color: white;padding-top: 5%">WHAT OUR CUSTOMERS SAY</h3>
                <div class="custom-card">
                   <div class="card-top">
                        <img src="{{asset('uploads/Testimonial-8.jpg')}}" alt="Card image cap" style="border-radius: 100%">
                        <p style="color: white;font-weight: bold;padding-top: 1%;">CLOVIS</p>
                        <i style="color: white;">Stylist</i>
                        <hr style="background-color:white;width:30%;border-width: 1px;height: 1px">
                   </div>
                   <div class="card-bottom">
                        <p style="color: white;">Donut Pros Not Only Deliver Local Fresh Donuts But Also [Local Shop's] Famous Banh Mi Sandwiches And Boba'Lius Too! On-Demand Delivery Service In Merced! Just Place My Order 30Min Ago Online.</p>
                   </div>
                </div>
                <div class="custom-card">
                    <div class="card-top">
                        <img src="{{asset('uploads/Testimonial-9.jpg')}}" alt="Card image cap" style="border-radius: 100%">
                        <p style="color: white;font-weight: bold;padding-top: 1%;">TOMMY</p>
                        <i style="color: white;">Student</i>
                        <hr style="background-color:white;width:30%;border-width: 1px;height: 1px">
                    </div>
                    <div class="card-bottom">
                        <p style="color: white;">We Went On Donut Pros' Facebook Page Click "Shop Now" Request On-Demand Delivery Service For A Special Dozen Donut Mix. And, 30Min Later On Saturday 8Am The Deliver.</p>
                    </div>
                </div>
                <div class="custom-card option">
                    <div class="card-top">
                        <img src="{{asset('uploads/Testimonial-7.jpg')}}" alt="Card image cap" style="border-radius: 100%">
                        <p style="color: white;font-weight: bold;padding-top: 1%;">KRISTY</p>
                        <i style="color: white;">Model</i>
                        <hr style="background-color:white;width:30%;border-width: 1px;height: 1px">
                    </div>
                    <div class="card-bottom">
                        <p style="color: white;">Sometimes A Few Minutes Earlier Than Scheduled And Has Offered Our Client Donuts With Donut Pros' Napkins. Now, That'S Awesome Services Both Ways. Thank You Our Familia Enjoy It.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="video">
            <div class="container" style="padding-top: 3%;">
                <div class="video-left">
                    <h4>DONUT MAKING PROCESS</h4>
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/ZiXAmHzZPqc#action=share" frameborder="0" allowfullscreen style="padding-top: 2%;">
                    </iframe>
                </div>
                <div class="video-right">
                    <h4>Who Put the Hole in the Donut?</h4>
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/BMgB9Jg9Z3g" frameborder="0" allowfullscreen style="padding-top: 2%;">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="delivery">
            <div class="delivery-inside">
                <h1>For Delivery or Pick Up</h1>
                <div class="delivery-card">
                    <div class="delivery-card1">
                        <a href="https://www.grubhub.com/restaurant/earls-donuts-house-20429-devonshire-st-los-angeles/1711931"><img src="{{asset('uploads/logo-grubhub.png')}}"></a>
                        <p>(from 9:30AM-11PM)</p>
                    </div>
                    <div class="delivery-card1">
                        <a href="https://www.ubereats.com/los-angeles/food-delivery/earls-donut-house/DAyfdLALQzS9jINa9EgRow"><img src="{{asset('uploads/uber-eats.jpg')}}"></a>
                        <p>24 hour delivery</p>
                    </div>
                    <div class="delivery-card1">
                        <a href="https://postmates.com/merchant/earls-donuts-chatsworth"><img src="{{asset('uploads/postmates-better.png')}}"></a>
                        <p>24 hour delivery</p>
                    </div>
                    <div class="delivery-card1">
                        <a href="https://www.doordash.com/store/earl-s-donut-los-angeles-762595/en-AU"><img src="{{asset('uploads/logo-doordash-large.png')}}"></a>
                        <p>(from 7AM-11PM)</p>
                    </div>
                </div>
            </div>
            <div class="delivery-caption">
                <p>We’ll carefully pack your donuts as best we can and send them your way!</p>
            </div>
        </div>

        <div class="pick-up">
            <div class="pick-up-inside">
                <h1>For Pick Up Only</h1>
                <a href="{{url("/menu")}}" class="btn btn-primary">Place Order</a>
                <p>We cannot guarantee that donuts will not be damaged during transport, but will pack them as best as we can.</p>
            </div>
        </div>
    </section>
@include('inc.front_footer')
