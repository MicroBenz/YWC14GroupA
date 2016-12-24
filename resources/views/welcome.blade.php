@extends('layout')

@section('content')
<div class="welcoming-intro">
    <h1 class="answer-text">ANSWER IS</h1>
    <h1 class="here-text">HERE</h1>
    <p class="slogan-text">If you finding your future will be your way</p>
    <a href="#" class="pill-button">Go Test -></a>
</div>
<div class="container">
	<div class="recomended-article">
		<h1>Recommended Blog</h1>
		<div class="row">
		  <div class="col-md-6" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.001), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 0 0"><img src="{{ asset('assets/pics/Nurse-Practitioner-3.jpg') }}"></div>
		  <div class="col-md-6">
		  	<div class="sub-recommend">
		  		Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย
		  		<a href="#" class="pill-button">Read more</a>
		  	</div>
		  </div>
		</div>
		<div class="second-recommend">
			<div class="row">
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