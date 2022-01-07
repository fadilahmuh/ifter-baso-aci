@extends('template.appuser')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Transaksi</h1>
    </div>
    @if($errors->any())
    @foreach($errors->getMessages() as $this_error)
    <div class="alert alert-danger alert-has-icon">
        <div class="alert-body">
            <i class="fas fa-exclamation-triangle mr-1"></i> {{$this_error[0]}}
        </div>
    </div>
    @endforeach
    @endif 
    @if(Session::has('success'))
    <div class="alert alert-success alert-has-icon">
        <div class="alert-body">
            <i class="fas fa-check mr-1"></i> {{ Session('success') }} 
        </div>
    </div>    
    @endif    
    <div class="section-body">
      <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Data Transaksi</h4>
          </div>
          <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
          <div class="card-body">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" name="tanggal" class="form-control datepicker" value="{{old('tanggal')}}">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" name="keterangan" class="form-control" value="{{old('keterangan')}}">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{old('is_pemasukan')}}</label>
              <div class="col-sm-12 col-md-7 pl-4">
                <div class="selectgroup w-100">
                  <label class="selectgroup-item">
                    <input type="radio" name="is_pemasukan" value="1" class="selectgroup-input" @if(old('is_pemasukan') == 1) checked @endif>
                    <span class="selectgroup-button">Pemasukan</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="is_pemasukan" value="0" class="selectgroup-input" @if(old('is_pemasukan') == 0 && old('is_pemasukan') != null) checked @endif>
                    <span class="selectgroup-button">Pengeluaran</span>
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nominal</label>
              <div class="col-sm-12 col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      Rp
                    </div>
                  </div>
                  <input type="text" name="nominal" class="form-control currency" value="{{old('nominal')}}">
                </div>
              </div>
            </div>             
            <div class="card-footer text-right pr-0">
              <button type="submit" class="btn btn-primary">Simpan</button></div>         
            </div>
          </form>  
        </div>
      </div>            

    </div>
  </section>
</div>
<footer class="main-footer">
</footer>
</div>
@endsection

@section('lib-script')
<script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('assets/js/views/transaksi.js') }}"></script>
<script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
@endsection