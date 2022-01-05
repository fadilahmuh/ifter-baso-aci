@extends('appuser')


{{-- @section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
        <h1>Halaman Admin Web Almu'awanah</h1>
    </div>
    <div class="alert alert-danger alert-has-icon">
        <div class="alert-body">
            <i class="fas fa-exclamation-triangle mr-1"></i> This is a danger alert.
        </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Dashboard</h2>
      
      <div class="row">
        <div class="col-12 mb-4">
          <div class="hero bg-primary text-white">
            <div class="hero-inner text-center">
              <h1>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>
              <br>
              <h4 class="lead">Selamat datang, Mitra {{ Auth::user()->nama_mitra }}!!</h4>
              <div class="mt-4">
                <h4>Current Time: <span id="datetime"></span></h4>
              </div>
            </div>
          </div>         
        </div>
      </div>            
    </div>
  </section>
</div>
@endsection --}}

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Dashboard</h1>
        </div>
        <div class="section-body">
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
        </div>
    </section>
</div>
@endsection