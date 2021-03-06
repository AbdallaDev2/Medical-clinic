@extends('front.layout.app')

@section('title')
Welcome To Our Clinic
@stop

@section('content')
<!-- ? Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
    <div class="preloader-circle"></div>
    <div class="preloader-img pere-text">
        <img src="{{asset('front-design/img/logo/loder.png')}}" alt="">
    </div>
</div>
</div>
</div>
<!-- Preloader Start -->
@include('front.layout.header')
<main>
<!--? slider Area Start-->
@include('front.layout.slider')
<!-- slider Area End-->

<!--? department_area_start  -->
@include('front.layout.department')
<!--? department_area_end  -->
<!--? Gallery Area Start -->
@include('front.layout.gallery')
<!-- Gallery Area End -->
<!--? Team Start -->
@include('front.layout.team-work')
<!-- Team End -->
<!--? Blog start -->
@include('front.layout.blog')
<!-- Blog End -->
</main>
@endsection
