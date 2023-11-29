@extends('layout.master')
@section('title', 'single-Product')

@section('content')
    
    <section class="product_description_area">
   
<br>
<br>
        <div class="container mt-5" >
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Order</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                @include('profilee.profile')

                @include('profilee.orderitem')
            </div>
        </div>
    </section>
 
    

@endsection