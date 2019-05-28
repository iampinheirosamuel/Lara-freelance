 @extends('layouts.app')

@section('content')
 <div class="container-fluid">
             <div class="row pt-2 pb-5">
               <div class="col-sm-12 text-center">
                     <h1 class="">Looking for your next Job?</h1>
                    <h4 class="lead">We've got some for you!</h4>
                    <br>
                    <hr>
               </div>
             </div>
            
              <div class="row pb-5">
                     
                     @foreach ($jobs as $job)

                        <div class="col-md-3 mt-3 mb-3">
                            <div class="card" style="    border-left: 2px solid #3e3d93;" >
                                <div class="card-body">
                                    <a href="{{ $job->job_type }}" target="_blank" class="card-link"> <h5 class="card-title text-dark"> {{$job->title}}</h5>
                                    
                                    <a href="#" class="card-text text-muted pr-3"><i class="ion-ios-time-outline pr-1"></i> <small><b>Posted</b> {{ $job->created_at->diffForHumans() }} </small></a>

                                    <a href="#" class="card-text text-muted pr-3"><i class="ion-ios-location-outline pr-1"></i> <small> {{ $job->location }}</small></a><br>
                                    
                                    <a href="#" class="card-text text-muted pr-3"><i class="ion-ios-time-outline pr-1"></i> <small><b>Deadline:</b> {{ $job->deadline_date }}</small></a>
                                
                                    </a>
                                </div>
                                </div>
                            </div>
                     @endforeach
                
             
              </div>
        </div>
                
@endsection
             