@extends('layout')

@section('content')
<div class="container">
    <img src="{{ asset('assets/img/1.png') }}" style="width: 100%">
    <img src="{{ asset('assets/img/2.png') }}" style="width: 100%">    
    <img src="{{ asset('assets/img/doctor - 3.png') }}" style="width: 100%;padding-bottom: 20px;""> 
</div>
@endsection

@section('css')
<style>
    body {
        background-color: #efefef;
    }
</style>
@endsection
