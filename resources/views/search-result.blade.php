@extends('layout')

@section('content')
<div class="container">
    <div class="search-results">
        <div class="result-card">
            <div class="result-image">
                <img src="{{ asset('/assets/img/people1.jpg') }}">
            </div>
            <div class="result-content">
                <h1 class="result-title">Lorem Ipsum</h1>
                <p class="result-description">"Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem"</p>
                <div class="bottom-group">
                    <div class="tags-group">
                        <a class="pill-button tag">architech</a>
                        <a class="pill-button tag">Cyber</a>
                        <a class="pill-button tag">ICT</a>
                        <a class="pill-button tag">engineer</a>
                    </div>
                    <a class="pill-button read-more">See more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/search.result.css')}}">
@endsection