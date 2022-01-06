@extends('appuser')

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
        <h1>{{$title}}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    {{-- <div class="card-header">
                      <div class="dt-length"></div>
                      <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                          View All
                        </a>
                      </div>
                    </div> --}}
                    {{-- <div class="card-footer text-right">
                      <a href="#" class="btn btn-primary">
                        <i class="fas fa-filter"></i>
                      </a>
                    </div> --}}

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

                                  {{-- <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                  <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}

                                  <div class="btn-table justify-content-right" role="group">
                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                  </div> 

                                </td>
                                <td></td>
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
@endsection

@section('lib-script')
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
@endsection

@section('page-script')
{{-- <script src="assets/js/page/modules-datatables.js"></script> --}}
@if( $agent->isMobile())
<script src="{{ asset('assets/js/views/mtable.js') }}"></script>
@else
<script src="{{ asset('assets/js/views/table.js') }}"></script>
@endif
@endsection