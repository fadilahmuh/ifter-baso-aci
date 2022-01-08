@extends('template.appuser')

@section('csslib')
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/responsive.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"> --}}
@endsection

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
        <h1>{{$title}}</h1>
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

                    <div class="card-body">

                      @if(($agent = new \Jenssegers\Agent\Agent())->isMobile())
{{-- Mobile View --}}
                        <table class="table table-striped nowrap" id="table-1">
                          <thead>                                 
                            <tr>                             
                              <th>Keterangan</th>
                              <th>Nominal</th>
                              <th>Tanggal</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>    
                            
                            @foreach ($datas as $data)
                              <tr>
                                <td>{{$data->keterangan}}</td>
                                <td>{{$data->nominal}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td class="align-right">
                                  <div class="btn-table justify-content-right" role="group">
                                    <button class="edit btn btn-icon btn-warning" data-url="{{ route('transaksi.edit', [$data->id]) }}"><i class="fas fa-edit"></i></button>
                                    <button class="del btn  btn-icon btn-danger" data-url="{{ route('transaksi.destroy', [$data->id]) }}"><i class="fas fa-trash"></i></button>
                                  </div> 
                                </td>
                                <td></td>
                              </tr>
                            @endforeach    

                          </tbody>
                        </table>  
                        
                        @else
{{-- Desktop View --}}
                        <table class="table table-striped" id="table-1">
                          <thead>                                 
                            <tr>                             
                              <th>Keterangan</th>
                              <th>Nominal</th>
                              <th>Tanggal</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>    
                            
                            @foreach ($datas as $data)
                              <tr>
                                <td class="align-middle">{{$data->keterangan}}</td>
                                <td class="align-middle">{{$data->nominal}}</td>
                                <td class="align-middle">{{$data->tanggal}}</td>
                                <td class="align-middle">

                                  <div class="btn-table justify-content-center" role="group">
                                    <button class="edit btn btn-icon btn-warning" data-url="{{ route('transaksi.edit', [$data->id]) }}"><i class="fas fa-edit"></i></button>
                                    <button class="del btn  btn-icon btn-danger" data-url="{{ route('transaksi.destroy', [$data->id]) }}"><i class="fas fa-trash"></i></button>
                                  </div> 

                                </td>
                              </tr>
                            @endforeach    

                          </tbody>
                        </table>  

                        @endif

                        
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

  </div>
<form id="del-form" method="POST">
  @csrf
  @method('delete')
</form>

@endsection

@section('modal')
<div class="modal fade" tabindex="-1" role="dialog" id="modal-json" style="display: show;">
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: show; padding-right: 16px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Filter Tanggal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="@if(url()->current()==route('masuk') or url()->current()==route('masuk2')){{ route('masuk2') }} @else {{ route('keluar2') }}@endif" action="GET">
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
<script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
@if( $agent->isMobile())
<script src="{{ asset('assets/js/views/mtable.js') }}"></script>
@else
<script src="{{ asset('assets/js/views/table.js') }}"></script>
@endif
@endsection
