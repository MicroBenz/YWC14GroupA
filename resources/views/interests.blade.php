@extends('layout')

@section('content')
<div class="container">
    <a href="{{ URL::to('finances') }}"><img src="{{ asset('assets/img/catagory1.jpg') }}" style="width: 65%;"></a>
    <a href="{{ URL::to('health') }}"><img src="{{ asset('assets/img/catagory2.jpg') }}" style="width: 33%;"></a>  
</div>
@endsection

@section('css')
<style>
    body {
        background-color: #efefef;
    }
</style>
@endsection
