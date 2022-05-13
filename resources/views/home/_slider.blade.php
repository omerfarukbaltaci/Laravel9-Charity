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
                            Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac
                            consequat at lectus in malesuada
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="">Donate Now</a>
                            <a class="btn btn-custom btn-play" href="{{route('content',['id'=>$rs->id])}}">Learn More</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->
