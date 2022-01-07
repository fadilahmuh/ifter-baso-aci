@extends('template.appuser')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Activities</h1>
      </div>
          <div class="section-body">          
            <div class="row">
              <div class="col-12">
                <div class="activities">

                  @foreach ($logs as $log)
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="@if($log->type == 'C')
                        fas fa-plus
                      @elseif ($log->type == 'U')
                        fas fa-pen-alt
                      @elseif ($log->type == 'D')
                        fas fa-trash
                      @endif
                      "></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">{{Carbon::parse($log->created_at)->diffForHumans()}}</span>
                        <span class="bullet"></span>
                        {{-- <a class="text-job" href="#">View</a> --}}
                      </div>
                      <p>{{$log->keterangan}}@if(!is_null($log->transactions_id)) @if($log->transactions->is_pemasukan == True)pemasukan @else pengeluaran @endif @endif</p>
                    </div>                    
                  </div>
                  @endforeach  

                </div>
              </div>
            </div> 
            
            <div class="row justify-content-center text-center">
                {{$logs ->links()}}
            </div>

          </div>
        </section>
      </div>
@endsection