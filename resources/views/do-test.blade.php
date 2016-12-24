@extends('layout')

@section('content')
<div class="progress-wrapper">
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
</div>
<div class="test-sheet test-sheet-1">
    <h1 class="test-number">ข้อที่ 1</h1>
    <h1 class="test-name">การทำความรู้จักกับคนแปลกหน้าทำให้ฉัน?</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goNext()">รู้สึกมีชีวิตชีวา</button>
        <button class="btn btn-success" onclick="goNext()">รู้สึกว่าต้องใช้พลังงานเยอะ</button>
    </div>
</div>
<div class="test-sheet test-sheet-2">
    <h1 class="test-number">ข้อที่ 2</h1>
    <h1 class="test-name">ฉันเป็นคน?</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goNext()">ชอบสังเกตมากกว่าการครุ่นคิด</button>
        <button class="btn btn-success" onclick="goNext()">ชอบครุ่นคิดไตร่ตรองมากกว่าสังเกต</button>
    </div>
</div>
<div class="test-sheet test-sheet-3">
    <h1 class="test-number">ข้อที่ 3</h1>
    <h1 class="test-name">เมื่ออยู่กับคนอื่น ๆ ฉันมักจะรู้สึกว่าฉัน?</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goNext()">มีความหนักแน่นมากกว่าความอ่อนโยน</button>
        <button class="btn btn-success" onclick="goNext()">มีความอ่อนโยนมากกว่าความหนักแน่น</button>
    </div>
</div>
<div class="test-sheet test-sheet-4">
    <h1 class="test-number">ข้อที่ 4</h1>
    <h1 class="test-name">เป็นวิธีของฉันที่จะ?</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goLast()">ตัดสินใจอย่างรวดเร็ว</button>
        <button class="btn btn-success" onclick="goLast()">ใช้เวลาในการเลือกและตัดสินใจพอสมควร</button>
    </div>
</div>
<div class="result">
    <h1>ทำแบบสอบถามครบแล้ว</h1>
    <button class="btn btn-info" onclick="navigateToBlog()">ดูผลลัพธ์กัน!</button>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/do.test.css')}}">
@endsection

@section('script')
<script>
    var currentQuestion = 1;
    $('.result').hide();
    setProgressBar(currentQuestion - 1);
    showQuestion(currentQuestion);

    function goNext() {
        currentQuestion += 1;
        showQuestion(currentQuestion);
        setProgressBar(currentQuestion - 1);        
    }

    function goLast() {
        $('.test-sheet').hide();
        $('.result').show();
        currentQuestion += 1;
        setProgressBar(currentQuestion - 1);
    }

    function navigateToBlog() {
        window.location.href = '{{ URL::to('blog-suggestion/1') }}';
    }
    function setProgressBar(questionNumber) {
        $('.progress-bar').text(questionNumber + '/4');
        $('.progress-bar').attr('aria-valuenow', questionNumber * 25);
        $('.progress-bar').css('width', (questionNumber * 25) + '%');
    }
    function showQuestion(number) {
        $('.test-sheet').hide();
        $('.test-sheet-' + number).show();
    }

</script>
@endsection