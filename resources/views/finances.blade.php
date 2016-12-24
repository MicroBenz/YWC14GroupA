@extends('layout')

@section('content')
<div class="container">
    <img src="{{ asset('assets/img/content1.png') }}" style="width: 100%">
    <img src="{{ asset('assets/img/content2.png') }}" style="width: 100%">    
    <img src="{{ asset('assets/img/content4.png') }}" style="width: 100%;padding-bottom: 20px;"> 
</div>
@endsection

@section('css')
<style>
    body {
        background-color: #efefef;
    }
</style>
@endsection
