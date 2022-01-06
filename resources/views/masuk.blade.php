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
        <h1>Uang Masuk</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Basic DataTables</h4>
                    </div>
                    <div class="card-body">
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
<script src="assets/js/page/modules-datatables.js"></script>
@endsection