@extends('template.appuser')

@section('custom-css')
<style>
  .daterangepicker {
    z-index: 1600 !important; /* has to be larger than 1050 */
  }
</style>
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header"> 

          <h1>Laba - Rugi</h1>
          <div class="card-header-action">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-filter"></i></button>
          </div>

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

@section('modal')
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: show; padding-right: 16px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Filter Tanggal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('laporan2') }}" action="GET">
      <div class="modal-body">
        <div class="form-group">
          <div class="row">
            <div class="col-6">
              <label for="awal">Awal</label>
              <input type="text" class="form-control datepicker" name="awal">
            </div>
            <div class="col-6">
              <label for="akhir">Akhir</label>
              <input type="text" class="form-control datepicker" name="akhir">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Terapkan</button>
      </div>
    </form>
    </div>
  </div>
</div>  
@endsection

@section('lib-script')
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>  
@endsection

@section('page-script')
<script src="{{ asset('assets/js/views/dashboard.js') }}"></script>
@endsection


@section('line-script')

@endsection