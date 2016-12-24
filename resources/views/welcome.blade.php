@extends('layout')

@section('content')
<div class="welcoming-intro">
    <h1 class="answer-text">ANSWER IS</h1>
    <h1 class="here-text">HERE</h1>
    <p class="slogan-text">If you finding your future will be your way</p>
    <div class="row"><a href="#" class="pill-button">TEST</a></div>
    
    <div class="row select-topic"><a href="#" class="pill-button">เลือกเรื่องที่สนใจ</a></div>
</div>
<div class="form-group form-inline search-faculty">
	<div class="container">
	    <i class="glyphicon glyphicon-search"></i>
	    <input type="text" class="form-control transparent-input input-lg" placeholder="Search Faculty" size="50"/>
	</div>
</div>
<div class="container">
	<div class="recommended-article">
		<h2>RECOMMENDED</h2>
		<h1>BLOG</h1>
		<div class="row">
		  <div class="col-md-7"><img src="{{ asset('assets/img/recommend-blog.jpg') }}" height="430"></div>
		  <div class="col-md-5">
		  	<div class="sub-recommend">
		  		แชร์ประสบการณ์หมอศิริราศ นอนวันละ 3 ชั่วโมง 45 วัน ทำได้อย่างไร ด
		  		<a href="#" class="pill-button">READ <i class="glyphicon glyphicon-arrow-right"></i></a>
		  	</div>
		  </div>
		</div>
		<div class="second-recommend">
			<div class="row">
			  <div class="col-md-4">
			  	<div class="sub-recommend">
			  	ประสบการณ์ทำงานค่าย นอนวันละ 3 ชั่วโมง 45 วัน ทำได้อย่างไร
			  		<a href="#" class="pill-button">Read more</a>
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="sub-recommend">
			  		<a href="#" class="pill-button">Read more</a>
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="sub-recommend">
			  		<a href="#" class="pill-button">Read more</a>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</div>
<br><br>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/welcome.css')}}">
@endsection