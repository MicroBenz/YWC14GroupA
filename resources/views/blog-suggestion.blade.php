@extends('layout')

@section('content')
<div class="intro">
    <div class="container">
        <h1>U-STORY</h1>        
    </div>
</div>

<div class="container">
    <div class="popular-blog">
        <div class="popular-header">
            <h1 class="popular-text">POPULAR</h1>
            <h1 class="blog-text">BLOG</h1>        
        </div>
        <div class="popular-content">
            <div class="img-wrapper">
                <img src="{{ asset('assets/img/recommend-blog.jpg')}}">
            </div>
            <div class="popular-content-box">
                <h1 style="color: #9f9f9f;font-size: 25px;">EDUCATION</h1>
                <h1 class="content-title">สอบปลายภาคมัธยมกับมหา'ลัย</h1>
                <a class="pill-button">READ <i class="glyphicon glyphicon-arrow-right"></i></a>
                <div class="author">
                    <img class="img-circle"></img>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/ustory.jpg') }}" class="post-content">
    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/blog.suggestion.css')}}">
@endsection
