@extends('layout.master')
@section('title', 'product')

@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Product</h2>
              <p><a href="/" style="color:#777777">Home</a><span>-</span>Product</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section class="cat_product_area">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    @foreach ($product->unique('category_id') as $item)
                                    <li>
                                        <a href="{{ route('fillter', ['id' => $store->id, 'price' => $item->category->id]) }}">
                                            {{ $item->category->name }}
                                        </a>
                                    </li>
                                @endforeach
                                
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Price filters</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a
                                            href="{{ route('fillter', ['id' => $store->id, 'price' => '0-299',]) }}">0JD-299JD</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('fillter', ['id' => $store->id, 'price' => '300-599']) }}">300JD-600JD</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('fillter', ['id' => $store->id, 'price' => '600-1000']) }}">600JD-1000JD</a>
                                    </li>
                                </ul>

                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Sort by</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="{{ route('fillter', ['id' => $store->id, 'price' => 'Low']) }}">Low to
                                            High</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('fillter', ['id' => $store->id, 'price' => 'High']) }}">High to
                                            Low</a>
                                    </li>
                                </ul>

                            </div>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-9">
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span>10000 </span> Prodict Found</p>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select>
                                        <option data-display="Select">name</option>
                                        <option value="1">price</option>
                                        <option value="2">product</option>
                                    </select>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>show :</h5>
                                    <div class="top_pageniation">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row align-items-center latest_product_inner">
                        @if (count($product) > 0)
                            @foreach ($product as $item)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single_product_item">
                                        <a href="{{ route('singleproduct', ['id' => $item->id]) }}"> <img style="height: 300px"
                                                src="{{ asset($item->image) }}" alt=""></a>
                                        <div class="single_product_text">
                                            <h4>{{ $item->name }}</h4>
                                            <h3>{{ $item->price }}JOD</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
