<section class="feature_part  mt-5">
    <div class="container mt-5"> <span class="our-stores ">Featured Category</span>
        <div class="row align-items-center justify-content-between">
            @foreach ($category as $index => $feature)
            <div class="col-lg-{{ $index % 2 === 0 ? '7' : '5' }} col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h2>{{ $feature['name'] }}</h2>
                    <a href="{{route('productcat',  ['id' => $feature->id])}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{ asset($feature['image']) }}" alt="" >
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>
