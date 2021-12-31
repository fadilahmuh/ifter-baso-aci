@extends('appuser')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Dashboard</h1>
    </div>
    <div class="row">
    <div class="col-12 mb-4">
        <div class="hero bg-primary text-white">
        <div class="hero-inner">
            <h2>Selamat datang, Mitra {{ Auth::user()->nama_mitra }}!</h2>
            <p class="lead">This page is a place to manage posts, categories and more.</p>
        </div>
        </div>
    </div>
    </div>
    <div class="section-body">
    </div>
</section>
</div>
@endsection