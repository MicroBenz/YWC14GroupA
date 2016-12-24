@extends('layout')

@section('content')
<div class="test-sheet test-sheet-1">
    <h1 class="test-number">ข้อที่ 1</h1>
    <h1 class="test-name">คุณชอบที่ได้ลองคิดสิ่งใหม่ๆ หรือไม่</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goNext()">ใช่</button>
        <button class="btn btn-success" onclick="goNext()">ไม่ใช่</button>
        <button class="btn btn-info" onclick="goNext()">ไม่มั่นใจ</button>
    </div>
</div>
<div class="test-sheet test-sheet-2">
    <h1 class="test-number">ข้อที่ 2</h1>
    <h1 class="test-name">คุณชอบที่ได้ลองคิดสิ่งใหม่ๆ หรือไม่</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goNext()">ใช่</button>
        <button class="btn btn-success" onclick="goNext()">ไม่ใช่</button>
        <button class="btn btn-info" onclick="goNext()">ไม่มั่นใจ</button>
    </div>
</div>
<div class="test-sheet test-sheet-3">
    <h1 class="test-number">ข้อที่ 3</h1>
    <h1 class="test-name">คุณชอบที่ได้ลองคิดสิ่งใหม่ๆ หรือไม่</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goNext()">ใช่</button>
        <button class="btn btn-success" onclick="goNext()">ไม่ใช่</button>
        <button class="btn btn-info" onclick="goNext()">ไม่มั่นใจ</button>
    </div>
</div>
<div class="test-sheet test-sheet-4">
    <h1 class="test-number">ข้อที่ 4</h1>
    <h1 class="test-name">คุณชอบที่ได้ลองคิดสิ่งใหม่ๆ หรือไม่</h1>    
    <div class="button-group">
        <button class="btn btn-primary" onclick="goLast()">ใช่</button>
        <button class="btn btn-success" onclick="goLast()">ไม่ใช่</button>
        <button class="btn btn-info" onclick="goLast()">ไม่มั่นใจ</button>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/do.test.css')}}">
@endsection

@section('script')
<script>
    var currentQuestion = 1;
    showQuestion(currentQuestion);

    function goNext() {
        currentQuestion += 1;
        showQuestion(currentQuestion);
    }

    function goLast() {
        console.log('navigate to content');
    }

    function showQuestion(number) {
        $('.test-sheet').hide();
        $('.test-sheet-' + number).show();
    }

</script>
@endsection