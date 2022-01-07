@extends('template.appuser')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Laba - Rugi</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">Laporan</h2>
          <p class="section-lead">Tanggal {{$tanggal[0]}} - {{$tanggal[1]}}</p>
            <div class="row">
              <div class="col-12 mb-4">
                <div class="hero align-items-center bg-success text-white">
                  <div class="hero-inner text-center">
                    <p class="lead">Total Pemasukan</p>
                    <h2>Rp. {{number_format($pemasukan)}}</h2>                    
                  </div>
                </div>
              </div>   
              
              <div class="col-12 mb-4">
                <div class="hero align-items-center bg-warning text-white mb-4">
                  <div class="hero-inner text-center">
                    <p class="lead">Total Pengeluaran</p>
                    <h2>Rp. {{number_format($pengeluaran)}}</h2>                    
                  </div>
                </div>

                <div class="card @if($total > 0) card-success @else card-danger @endif">
                  <div class="card-body text-center">
                    <h6>@if($total > 0) Laba @else Rugi @endif</h6>
                    <h4>Rp. @if($total > 0) {{number_format($total)}} @else {{number_format($total*-1)}} @endif</h4>
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