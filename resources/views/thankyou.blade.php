@extends('layout.master')
@section('title','Thankyou')

	@section('content')

<div class="content mb-5" >
    <div class="wrapper-1">
      <div class="wrapper-2">
        <h1>Thank you !</h1>
        <p>Your Order has been Successful </p>
        <p> </p>
        <a href="{{route('home')}}"> <button class="go-home">
       go home
        </button></a>
      </div>

  </div>
  </div>

  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
  @endsection
