@extends('frontend.layouts.app')
@section('content')
<!-- page-title -->
<section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">Company Profile</div>
            <ul class="bread-crumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
  <h2 style="color:#e5191a;">Oragnization Details</h2>
<hr>
<img src="{{asset('images/table1.png')}}" alt="project">
<div class="inner-content">
    <div class="content-style-one">
        <div class="inner-title">Legal Status</div>
        <div class="text">
            <p>-Not-profit making and non-governmental organization established in 2010 AD. </p>
        </div>
    </div>
  </div>
</div>
  </div>
  <div>
  </section>



@endsection
