@extends('appuser')

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
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row justify-content-center mb-4">
             
                <div class="col-3">
                  <a type="button" class="btn bg-white btn-outline-primary btn-sq-responsive" href="{{ route('transaksi') }}"><i class="fas fa-hand-holding-usd" ></i></a>
                </div>

                <div class="col-3">
                  <a type="button" class="btn bg-white btn-outline-primary btn-sq-responsive" href="{{ route('masuk') }}"><i class="fas fa-sign-in-alt"></i></a>
                </div>

                <div class="col-3">
                  <a type="button" class="btn bg-white btn-outline-primary btn-sq-responsive" href="{{ route('keluar') }}"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>

            <div id="row-table" class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header justify-content-center">
                    <h4>Statistik Harian</h4>
                  </div>
                  <div id="stat" class="card-body" data-url="{{ route('data-ds') }}">
                    <canvas id="myChart2"></canvas>
                  </div>
                </div>
              </div>
            </div>

            
        </div>
    </section>
</div>
@endsection

@section('lib-script')
    <script src="assets/modules/chart.min.js"></script>
@endsection

@section('page-script')
<script src="{{ asset('assets/js/views/dashboard.js') }}"></script>
@endsection


@section('line-script')

@endsection