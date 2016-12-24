@extends('layout')

@section('content')
<div class="welcoming-intro">
    <h1 class="answer-text">ANSWER IS</h1>
    <h1 class="here-text">HERE</h1>
    <p class="slogan-text">If you finding your future will be your way</p>
    <div class="row"><a href="#" class="pill-button">GO TEST</a></div>
    
    <div class="row select-topic"><a href="#" class="pill-button" style="font-size">เลือกเรื่องที่สนใจ</a></div>
</div>
<div class="form-group form-inline search-faculty">
	<div class="container">
	    <i class="glyphicon glyphicon-search"></i>
	    <input type="text" class="form-control transparent-input input-lg" placeholder="Search Faculty" size="50"/>
	</div>
</div>
<!-- <div class="container">
	<div class="recommended-article">
		<h2>RECOMMENDED</h2>
		<h1>BLOG</h1>
		<div class="row">
		  <div class="col-md-7"><img src="{{ asset('assets/img/recommend-blog.jpg') }}" height="430"></div>
		  <div class="col-md-5">
		  	<div class="form-group form-inline">
			  	<i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;
			  	<h3>EDUCATION</h3>
			</div>
		  	<div class="sub-recommend">
		  		<h4>เรียน 7 ตัวกับ 7 วัน แต่จบเกียรตินิยม!</h4>
		  		<div class="row" style="display: inline-flex;"> 
		  			<a href="#" class="pill-button">READ <i class="glyphicon glyphicon-arrow-right"></i></a>
		  			<a href="#" style="color:grey; margin-top: 16px; margin-left: 5px;">SHARE&nbsp;&nbsp;<i class="glyphicon glyphicon-retweet"></i></a>
		  		</div>	
		  	</div>
		  </div>
		</div>
		<div class="second-recommend">
			<div class="row">
			  <div class="col-md-4">
			  	<div class="sub-recommend">
			  		<i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;
			  		<h6>EDUCATION</h6>
			  		<h5>5 คณะยอดนิยม</h5>
			  		<div class="row" style="display: inline-flex;"> 
				  		<a href="#" class="pill-button">READ <i class="glyphicon glyphicon-arrow-right"></i></a>
				  		<a href="#" style="color:grey; margin-top: 16px; margin-left: 5px;">SHARE&nbsp;&nbsp;<i class="glyphicon glyphicon-retweet"></i></a>
				  	</div>
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="sub-recommend">
			  		<i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;
			  		<h6>EDUCATION</h6>
			  		<h5>นิเทศไม่ได้ยืนแค่ถือกล้องสวย ๆ</h5>
			  		<div class="row" style="display: inline-flex;"> 
				  		<a href="#" class="pill-button">READ <i class="glyphicon glyphicon-arrow-right"></i></a>
				  		<a href="#" style="color:grey; margin-top: 16px; margin-left: 5px;">SHARE&nbsp;&nbsp;<i class="glyphicon glyphicon-retweet"></i></a>
				  	</div>
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="sub-recommend">
			  		<i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;
			  		<h6>EDUCATION</h6>
			  		<h5>ร้านข้าวข้างม.ฬ เด็ดเด็ด</h5>
			  		<div class="row" style="display: inline-flex;"> 
				  		<a href="#" class="pill-button">READ <i class="glyphicon glyphicon-arrow-right"></i></a>
				  		<a href="#" style="color:grey; margin-top: 16px; margin-left: 5px;">SHARE&nbsp;&nbsp;<i class="glyphicon glyphicon-retweet"></i></a>
				  	</div>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</div>
<br><br> -->
<div class="container">
	<div style="margin-left: -55px;">
		<img src="{{ asset('assets/img/recommend-blog.png') }}">
	</div>
	<div style="margin-left: -55px;">
		<img src="{{ asset('assets/img/popular-blog.png') }}">
	</div>
	<div style="margin-left: -55px;margin-bottom: 50px;">
		<a href="https://www.youtube.com/watch?v=xeGuOw_Auck" target="_blank"><img src="{{ asset('assets/img/talk-senior.png') }}"></a>
	</div>
</div>
<div style="background-color: #29d2ff;margin-left: -115px;">
	<div class="container">
		<img src="{{ asset('assets/img/footer.png') }}">
	</div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/welcome.css')}}">
@endsection