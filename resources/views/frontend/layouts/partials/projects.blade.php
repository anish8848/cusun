@extends('frontend.layouts.app')



@section('content')
<!-- page-title -->
<section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">Projects</div>
            <ul class="bread-crumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Pages</li>
            </ul>
        </div>
    </div>
</section>
<br>
<div class="container">
  <div class="row">
  <h2 style="color:#e5191a">Relevant work experience relevant to project:</h2>
<br>
<img src="{{asset('images/table.png')}}" alt="project">
</div>
  </div>




@endsection
