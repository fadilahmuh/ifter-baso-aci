@extends('template.appuser')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Dashboard</h1>
        </div>
        <div class="section-body">
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="card-body">
                   
                    @foreach ($logs as $log)
                    <ul>
                     <li>id : {{$log->id}}</li>
                     <li>id_user: {{$log->users_id}}</li>
                     <li>user: {{$log->users->nama_pemilik}}, {{$log->users->nama_mitra}} </li>
                     <li>id_trans :{{$log->transactions_id}}</li>
                     <li>trans :{{$log->transactions->keterangan}}</li>
                     <li>ket :{{$log->id}}</li>
                     <li>type :{{$log->id}}</li>
                    </ul>
                    @endforeach
                  
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