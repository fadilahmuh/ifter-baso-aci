@extends('appuser')

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
                <input type="text" name="tanggal" class="form-control datepicker">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" name="keterangan" class="form-control">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7 pl-4">
                <div class="pl-3 pr-2 custom-radio form-check-inline">
                  <input type="radio" id="customRadio1" name="is_pemasukan" class="custom-control-input" value="1">
                  <label class="custom-control-label" for="customRadio1">Pemasukan</label>
                </div>
                <div class="pl-3 custom-radio form-check-inline">
                  <input type="radio" id="customRadio2" name="is_pemasukan" class="custom-control-input"  value="0">
                  <label class="custom-control-label" for="customRadio2">Pengeluaran</label>
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
                  <input type="text" name="nominal" class="form-control currency">
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

@section('modal')
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: show;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control datemask" placeholder="DD/MM/YYYY">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Uang Masuk / Keluar</label>
            <select class="form-control">
              <option>Uang Masuk</option>
              <option>Uang Keluar</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nominal</label>
            <input type="text" class="form-control">
          </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modal tambah -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambah" style="display: show;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control datemask" placeholder="DD/MM/YYYY">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Uang Masuk / Keluar</label>
            <select class="form-control">
              <option>Uang Masuk</option>
              <option>Uang Keluar</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nominal</label>
            <input type="text" class="form-control">
          </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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