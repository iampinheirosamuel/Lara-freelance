@extends('layouts.app')

@section('content')
 
      <!-- Main jumbotron for a primary marketing message or call to action -->
      
         @if(Auth::user())
            @if( Auth::user()->roles()->pluck('name')->implode('') != 'Active')
              <div class="container">      
              <div class="alert alert-info"><em>Hi {{ Auth::user()->name }}, update your profile to get hired quickly </em><a href=" {{ Route('profile.edit', Auth::user()->id) }}">here</a>

              </div>
              </div>
            @endif
          @endif
           

       
             
            
            

<div class="container-fluid">
  <div class="row ">
                <div class="col">
                <h3 class="text-left text-title">Found {{ count($results)}} search results</h3>
                </div> 
              </div>
              <div class="row">
               <div class="owl-carousel owl-theme">
                        @foreach ($results as $profile)

                        @if( $profile->user->roles()->pluck('name')->implode('') === 'Active')

                              <div class="item" style="box-shadow: 0px 1px 16px 2px #e6e6e6; margin: 30px;">
                                <div class="m-widget4">
                                <a href="{{ Route('profile.show',  $profile->user->id) }}" >	
                                  <img src="{{ $profile->image }}" alt="{{ $profile->name }}" style="padding:15px" class=" img-round" >
                                <div class="m-widget4__item">                                 
                                  <br>
                                  <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                      {{ $profile->user->name }}
                                    </span>
                                    
                                    <br>
                                    <span class="m-widget4__sub" >
                                    <i class="flaticon-suitcase" style="font-size: 12px;"></i>	{{ $profile->service }}
                                    </span>
                                    
                                    <span class="m-widget4__sub" >
                                    <i class="la la-map-marker" style="font-size: 12px;"></i> {{ $profile->state }}
                                    </span>
                             
                                  </div>
                                  
                                </div>                                 
                                  </a>
                                </div>
                              </div>
                        @endif
												@endforeach
                    </div>
          
  </div>
  <div class="row ">
                <div class="col">
                   <div class="m-separator m-separator--dashed"></div>
                </div>
               </div>

  </div>

 
  
            
            <div class="container-fluid">
              <div class="row">
                <div class=" col action">

                  

                  <div class="text-center">
                    <h3>Join us now</h3>
                    <hr>
                    <p>Meet other professionals on FaceWork. It is a platform for the right collaborations.</p>
                    <br>
                    <a href="{{ url('/register') }}" class="btn btn-secondary ">Get Started</a>
                  </div>
                 
                </div>
              </div>
            </div>

          
           

              
            
@endsection