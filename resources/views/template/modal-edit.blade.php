
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
                </button>
            </div>
            <form action="{{ route('transaksi.update',[$data->id]) }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="tanggal" class="form-control datepicker" value="{{$data->tanggal}}" disabled>
                    <p class="text-muted">(Tanggal tidak dapat diubah)</p>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="{{$data->keterangan}}">
                </div>
                <div class="form-group">
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="is_pemasukan" value="1" class="selectgroup-input" @if($data->is_pemasukan == 1) checked @endif disabled>
                          <span class="selectgroup-button">Pemasukan</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="is_pemasukan" value="0" class="selectgroup-input"  @if($data->is_pemasukan == 0) checked @endif disabled>
                          <span class="selectgroup-button">Pengeluaran</span>
                        </label>
                      </div>
                      <p class="text-muted">(Pilihan tidak dapat diubah)</p>
                </div>
                <div class="form-group">
                    <label>Nominal</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            Rp
                          </div>
                        </div>
                        <input type="text" name="nominal" class="form-control currency" value="{{$data->nominal}}">
                      </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>  
        </div>
    </div>
</div>

<script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
{{-- <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script> --}}

<script src="{{ asset('assets/js/views/transaksi.js') }}"></script>
{{-- <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script> --}}