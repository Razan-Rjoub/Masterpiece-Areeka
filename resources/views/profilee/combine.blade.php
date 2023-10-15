@extends('layout.master')
@section('title', 'single-Product')

@section('content')
<link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/rtl/core.css') }}"
    class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/rtl/theme-default.css') }}"
    class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('Web/csssingle/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Web/csssingle/single.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Web/stylecart/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Web/stylecart/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Web/stylecart/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/css/main.css') }}">
    
    <section class="product_description_area">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <div class="container">
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
    </section>
 
    

@endsection