<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Stores <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($store as $item)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <a href="{{ route('product', ['id' => $item->id]) }}"> <img
                                            src="{{ $item->image }}" alt="" style="border-radius:160px;border:1px solid black"></a>
                                        <div class="single_product_text">
                                            <h4 style="text-align: center">{{ $item->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($store as $item)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <a href="{{ route('product', ['id' => $item->id]) }}"> <img
                                                src="{{ $item->image }}" alt=""  style="border-radius:160px; border:1px solid black"></a>
                                        <div class="single_product_text">
                                            <h4 style="text-align: center">{{ $item->name }}</h4>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>