@extends('layout')

@section('content')
<div class="container">
    <div style="margin-left: -50px">
        <img src="{{ asset('/assets/img/exam-pop1.png') }}">
    </div>
    <div style="margin-left: 18px;margin-top: -20px;">
        <img src="{{ asset('/assets/img/exam-pop2.png') }}">
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/search.result.css')}}">
@endsection