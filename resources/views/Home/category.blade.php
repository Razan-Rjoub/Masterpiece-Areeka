<section class="feature_part ">
    <div class="container ">  <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="section_tittle text-center">
                <h2>Featured Category</h2>
            </div>
        </div>
    </div>
        <div class="row align-items-center justify-content-between">
            @foreach ($category as $index => $feature)
            <div class="col-lg-{{ $index % 2 === 0 ? '7' : '5' }} col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>{{ $feature['name'] }}</h3>
                    <a href="{{route('productcat',  ['id' => $feature->id,'store_id'=>$feature->store_id])}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{ asset($feature['image']) }}" alt="" >
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>
