@extends('appuser')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Transaksi</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Data Transaksi</h4>
          </div>
          <div class="card-body">
            
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah</button></td>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Berikut Rincian Transaksi dan Total Saldo</h4>
          </div>
            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <tbody><tr>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Uang Masuk</th>
                  <th>Uang Keluar</th>
                  <th>Action</th>
                </tr>
                        <tr>
                           <td>31/12/2021</td>
                          <td>Pemasukan Modal Awal</td>
                          <td>Rp. 1.000.000</td>
                          <td>Rp. 0</td>
                          <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
                        </tr>                
                        <tr>
                           <td>31/12/2021</td>
                          <td>Pemasukan Modal Awal</td>
                          <td>Rp. 1.000.000</td>
                          <td>Rp. 0</td>
                          <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
                        </tr>
                        <tr>
                          <td>31/12/2021</td>
                         <td>Pemasukan Modal Awal</td>
                         <td>Rp. 1.000.000</td>
                         <td>Rp. 0</td>
                         <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
                       </tr>  
                       <tr>
                        <td>31/12/2021</td>
                       <td>Pemasukan Modal Awal</td>
                       <td>Rp. 1.000.000</td>
                       <td>Rp. 0</td>
                       <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
                     </tr>       
                     <tr>
                       <td>Total</td>
                       <td>Rp.0</td>
                     </tr>                        
              </tbody></table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>                
        </div>
      </div>            
    <div class="section-body">
    </div>
  </section>
</div>
<footer class="main-footer">
</footer>
</div>
@endsection

@section('page-script')
  <!-- Page Specific JS File -->
  <script src="assets/js/page/bootstrap-modal.js"></script>
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