@extends('layout.master')
@section('title', 'store')

@section('content')

<link rel="stylesheet" href="{{asset('Web/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('Web/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('Web/cssstore/style.css')}}">
<link rel="stylesheet" href="{{asset('Web/stores.css')}}">
  </div> 
  <div class="  hero-header w-100 " style="width: 100%;">
      <div class=" ">
        <div class="row  ">

          <div class="col-lg-12 text-center text-lg-start w-100"style="padding-right:0px">
            <div class="featured-carousel owl-carousel w-100">
              <div class="item w-100">
                <div class="work w-100">
                  <a href="../Products/Products.html">
                    <img src="../images/sofaGurgaty.jpg" alt="" style="width: 100%">

                  </a>

                </div>
              </div>
              <div class="item">
                <div class="work">
                  <a href="../Products/Products.html">
                    <img src="../images/adlacasa.jpg" alt="">

                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <br><br><br><br><br>

  <section class="Stores">
    <div class="row">
      @foreach ($store as $item)
      <div class="col-lg-4 col-md-6  img-text">
        <a href="{{route('product',  ['id' => $item->id])}}"><img src="{{$item->image}}" alt="{{$item->name}}" class="stores-img"></a>
        <p class="Stores-name">{{$item->name}} </p>
      </div>
@endforeach
    </div>
  </section>
@endsection