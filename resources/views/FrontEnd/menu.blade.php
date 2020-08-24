@include('inc.front_menu_header')
    <div class="menu-tittle">
        <h1>Explore Our Menu</h1>
    </div>
    <div class="menu-link">
        <ul class="link">  <!--Table of Contents-->
            <li><a href="#sec1">Donut</a></li>
            <li><a href="#sec2">Fancy Donut</a></li>
            <li><a href="#sec3">Croissant/Bagels</a></li>
            <li><a href="#sec4">Pastries</a></li>
            <li><a href="#sec5">Drinks</a></li>
            <li><a href="#sec6">Sandwich</a></li>
        </ul>
    </div>

<section>
    <div class="donut-tittle" id="sec1">
        <h1>Donuts</h1>
    </div>
    @if(Session::has('success'))
    <div class="row" style="margin:auto;display:grid;place-items: center;">
        <div id="charge-message" class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
    @endif
    <div class="donut-parent">
        @if(count($donuts)>0)
            @foreach($donuts->all() as $donut)
                <div class="donut-card">
                    <img src="{{asset('uploads/items/'.$donut->image)}}">
                    <p>{{ $donut->item_name }}</p>
                    <p>${{ $donut->price }}</p>
                    <a href="{{url("/add_to_cart/{$donut->id}")}}" class="btn btn-primary addCart">Add To Cart</a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="fancy-donut-tittle" id="sec2">
        <h1>Fancy Donuts</h1>
    </div>
    <div class="donut-parent">
        @if(count($fancy_donuts)>0)
            @foreach($fancy_donuts->all() as $fancy_donut)
                <div class="donut-card">
                    <img src="{{asset('uploads/items/'.$fancy_donut->image)}}">
                    <p>{{ $fancy_donut->item_name }}</p>
                    <p>${{ $fancy_donut->price }}</p>
                    <a href="{{url("/add_to_cart/{$fancy_donut->id}")}}" class="btn btn-primary">Add To Cart</a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="croissant-tittle" id="sec3">
        <h1>Croissant & Bagels</h1>
    </div>
    <div class="donut-parent">
        @if(count($croissants)>0)
            @foreach($croissants->all() as $croissant)
                <div class="donut-card">
                    <img src="{{asset('uploads/items/'.$croissant->image)}}">
                    <p>{{ $croissant->item_name }}</p>
                    <p>${{ $croissant->price }}</p>
                    <a href="{{url("/add_to_cart/{$croissant->id}")}}" class="btn btn-primary ">Add To Cart</a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="pastries-tittle" id="sec4">
        <h1>Pastries</h1>
    </div>
    <div class="donut-parent">
        @if(count($pastries)>0)
            @foreach($pastries->all() as $pastrie)
                <div class="donut-card">
                    <img src="{{asset('uploads/items/'.$pastrie->image)}}">
                    <p>{{ $pastrie->item_name }}</p>
                    <p>${{ $pastrie->price }}</p>
                    <a href="{{url("/add_to_cart/{$pastrie->id}")}}" class="btn btn-primary ">Add To Cart</a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="drink-tittle" id="sec5">
        <h1>Drinks</h1>
    </div>
</section>
@include('inc.front_footer')
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function () {--}}
{{--        $('.addCart').on('click',function () {--}}
{{--            var id=$(this).data('id');--}}
{{--            if(id){--}}
{{--                $.ajax({--}}
{{--                    url: "{{ url('/add_to_cart/') }}"+id,--}}
{{--                    type:"GET",--}}
{{--                    dataType:"json",--}}
{{--                    success:function (data) {--}}
{{--                        if($.isEmptyObject(data.error)){--}}
{{--                            return true;--}}
{{--                        }else{--}}
{{--                            return false;--}}
{{--                        }--}}
{{--                    }--}}
{{--                })--}}
{{--            }else{--}}
{{--                alert('Not Working')--}}
{{--            }--}}
{{--            e.preventDefault();--}}
{{--        })--}}
{{--    });--}}
{{--</script>--}}

