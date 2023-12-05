@extends('layout.master')
@section('title', 'store')

@section('content')

<link rel="stylesheet" href="{{asset('Web/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('Web/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('Web/cssstore/style.css')}}">
<link rel="stylesheet" href="{{asset('Web/stores.css')}}">
  <br><br>
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Stores</h2>
              <p><a href="/" style="color:#777777">Home</a> <span>-</span>Stores</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<br><br><br>

  <section class="Stores container">
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