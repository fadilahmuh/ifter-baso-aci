@extends('template.appuser')

@section('csslib')
<link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/responsive.dataTables.css">
<link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"> --}}
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>{{$title}} {{ Session('success') }} </h1>
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
                                    <a href="/" class="btn  btn-icon btn-warning"><i class="fas fa-edit"></i></a>
                                    <button class="del btn  btn-icon btn-danger" data-url="{{ route('transaksi.destroy', [$data->id]) }}"><i class="fas fa-trash"></i></button>
                                  </div> 
                                </td>
                                <td></td>
                              </tr>
                            @endforeach    

                          </tbody>
                        </table>  
                        
                        @else

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
                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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

<div id="modal-json"></div>
@endsection

@section('lib-script')
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
@endsection

@section('page-script')
@if( $agent->isMobile())
<script src="{{ asset('assets/js/views/mtable.js') }}"></script>
@else
<script src="{{ asset('assets/js/views/table.js') }}"></script>
@endif
@endsection

@section('line-script')
  {{-- <script>
    console.log('asd');
    $(".del").click(function (event) {
      event.preventDefault();
      console.log('del clicked');
    });
    $(".del").click(function (event) {
    // var form = $(this).closest("form");
    event.preventDefault();
    swal({
        title: `Hapus data yang dipilih?`,
        text: "Jika data ini dihapus maka tidak dapat dikembalikan lagi.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            // form.submit();
        }
    });
});
  </script> --}}
@endsection