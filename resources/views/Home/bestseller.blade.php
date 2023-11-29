<section class="product_list best_seller ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @foreach ($highestProducts as $item)
                        
                    
                    <div class="single_product_item">
                        <a href="{{ route('singleproduct', ['id' => $item->id]) }}"><img src="{{$item->image}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>{{$item->name}}</h4>
                            <h3>{{$item->price}}JOD</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
<hr>
