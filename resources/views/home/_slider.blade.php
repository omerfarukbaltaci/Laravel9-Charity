<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            @foreach($sliderdata as $rs)
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{Storage::url($rs->image)}}" style="width: 1366px; height: 800px">
                    </div>
                    <div class="carousel-text">
                        <h1>{{$rs->title}}</h1>
                        <p>
                           {{$rs->description}}
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom btn-play" href="{{route('content',['id'=>$rs->id])}}">Learn More</a>
                            <a class="btn btn-custom" href="{{route('payment.index')}}">Donate Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->
