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
               <div class="col-12 jumbotron"  style="height:400px; background: linear-gradient(to bottom, rgba(22, 22, 22, 0.75) 0%, rgba(22, 22, 22, 0.75) 75%, rgba(22, 22, 22, 0.75) 100%), url('../../images/slider5.png');background-position: center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover; !important">
                <br> 
                <h1 class="text-left text-white">Discover and get quick job done</h1>
                 <h4 class="text-left text-white">Your one number freelance platform</h4>
                 <br>
                 <div class="row">
                   <div class="col-md-12 text-center" style="display:inline-flex; ">

                    <div class="form-group m-form__group" style="padding-right:10px;">
										
											<div class="m-input-icon m-input-icon--left">
												<input type="text" class="form-control form-control-lg m-input" placeholder="Profession e.g UI Designer">
												<span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="flaticon-suitcase"></i>
													</span>
												</span>
											</div>
                    </div>
                    
                      <div class="form-group m-form__group">
                      
                        <div class="m-input-icon m-input-icon--left">
                          <input type="text" class="form-control form-control-lg m-input" placeholder="Location e.g Lagos">
                          <span class="m-input-icon__icon m-input-icon__icon--left">
                            <span>
                              <i class="la la-map-marker"></i>
                            </span>
                          </span>
                        </div>
                      </div>

                      <div class="form-group m-form__group">
                        <button type="button" class="btn m-btn m-btn--air  btn-primary btn-lg">
                          Search
                        </button>
                      </div>

                      
                   </div>
                 </div>
               </div>
             </div>
           </div>

        <div class="container-fluid">
             <div class="row ">
                <div class="col">
                    <h1 class="text-center text-title">Recent Works</h1>
                </div> 
              </div>
              <div class="row">
               <div class="owl-carousel owl-theme">
                  @foreach ($posts as $post)
                  
                  <div class="item" style="box-shadow: 0px 1px 16px 2px #e6e6e6; margin: 30px;">
                    <a href="{{ route('posts.show', $post->id ) }}">
                     	<div class="m-portlet__body">
										<div class="m-widget19">
											<div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="max-height: 286px">
											<img src="{{ $post->featured }}" alt="">
												<h6 class="m-widget19__title m--font-light" style="padding-left:0.8rem !important; padding-bottom:0 !important;">
													{{ $post->title }}
												</h6>
												<div class="m-widget19__shadow"></div>
											</div>
											<div class="m-widget19__content">
												<div class="m-widget19__header" style="margin-top:0.5rem !important; margin-bottom:0rem !important; padding: 0 7px">
												<a href="{{ route('profile.show', $post->profile->id ) }}">
													<div class="m-widget19__user-img">
													<img style="width:3.2rem; height:3.0rem" class="m-widget19__img" src="{{ $post->profile->image }}" alt="">
													</div>
													<div class="m-widget19__info">
														<span class="m-widget19__username" style="color:#222; margin-bottom:1.0rem;">
															{{ $post->profile->name }}
														</span>
														<br>
														<span class="m-widget19__time" >
														<i class="flaticon-suitcase" style="font-size: 12px;"></i>	{{ $post->profile->service }}
                            </span>
                            
                            <span class="m-widget19__time" >
                             <i class="la la-map-marker" style="font-size: 12px;"></i> {{ $post->profile->state }}
                            </span>
                             
                          </div>
                         
												</a>
													
												</div>
											</div>
											
										</div>
                  </div> 
                  </a>
               </div>
                
                  @endforeach 
                
                    
                </div>
              </div>
        </div>
                
             
            <div class="container-fluid">
              <div class="row ">
                <div class="col">
                    <h1 class="text-center text-title">How It Works</h1>
                </div> 
              </div>
              
              <div class="row ">
                <div class="col">
                   <div class="m-separator m-separator--dashed"></div>
                </div>
               </div>
              <section class="row text-center placeholders-counter">
                <div class="col-12 col-sm-4 placeholder">
                  <div class="svg">
                    <i style="font-size:60px;" class="flaticon-rocket"></i>
                  </div>

                    
                  <h4>Launch with an Account</h4>
                  <br>
                  <p>Create an account to start your journey! </p> </div>
                <div class="col-12 col-sm-4 placeholder">
                  <div class="svg">
                    <i style="font-size:60px;" class="flaticon-cogwheel-1"></i>
                  </div>

                  <h4>Find a Service</h4><br>
                  <p>Find competent professionals and send your request. </p>
                 </div>

                <div class="col-12 col-sm-4 placeholder">
                  <div class="svg">
                    
                  <i style="font-size:60px;" class="flaticon-network"></i>
                  </div>
                  <h4>Network</h4><br>
                  <p>Meet other professionals on FaceWork. It is a platform for the right collaborations.</p>    </div>
              </section>
               <div class="row ">
                <div class="col">
                   <div class="m-separator m-separator--dashed"></div>
                </div>
               </div>
            </div>
            

<div class="container-fluid">
  <div class="row ">
                <div class="col">
                    <h3 class="text-left text-title">Talents on FaceWork</h3>
                </div> 
              </div>
              <div class="row">
               <div class="owl-carousel owl-theme">
                        @foreach ($users as $user)

                        @if( $user->roles()->pluck('name')->implode('') === 'Active')

                              <div class="item" style="box-shadow: 0px 1px 16px 2px #e6e6e6; margin: 30px;">
                                <div class="m-widget4">
                                <a href="{{ route('profile.show',  Auth::user()->id ) }}" >	
                                  <img src="{{ $user->profile->image }}" alt="{{ $user->profile->name }}" class="img-fluid img-rounded" >
                                <div class="m-widget4__item">
                                   
                                 
                                  <br>
                                  <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                      {{ $user->name }}
                                    </span>
                                    <br>
                                    <span class="m-widget4__sub">
                                     {{ $user->profile->service }}
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

              {{-- <div class="loan-bg">
              <div class="container-fluid ">
              
                <div class="row ">
                  <div class="col">
                    <h1 class="text-center text-title">Our Loan Plans</h1>
                  </div>
                </div>

                <section class="row placeholders-counter">

                  <div class="col-lg-4  col-sm-6 ">
                    <div class="card">
                      <div class="card-img-top card-bg pink">
                        <h3 class="text-center">One Time Loan</h3>
                      </div>
                      <div class="card-body">
                        <br>
                        <h6 class="card-title text-left" style="font-weight:bold;"> Get a One Time Loan now </h6>

                        <p class="card-text text-left" style="font-size:14px; color:#222;"> This loan comes with a loan term of 3 Months @3% interest rate </p>
                          <br><br><br><br><hr>
                        <button class="btn  pink" >Get Started</button>
                      </div>
                    </div>
                    
                  </div>

                  <div class="col-lg-4  col-sm-6 ">
                    <div class="card">
                      <div class="card-bg green">
                        <h3 class="text-center">Normal Loan</h3>
                      </div>
                      <div class="card-body">
                        <br>
                        <h6 class="card-title text-left" style="font-weight:bold;">Get a Normal Loan of 18 Months </h6>

                        <p class="card-text text-left" style="font-size:14px; color:#222;">This loan comes with a loan term of 18 Months 10.5% interest rate </p>
                        <br>
                        <h6 class="card-title text-left" style="font-weight:bold;">Get a Normal Loan of 12 Months </h6>

                        <p class="card-text text-left" style="font-size:14px; color:#222;">This loan comes with a loan term of 12 Months 7% interest rate </p>
                        <hr>
                        <button class="btn  green">Get Started</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4  col-sm-6 ">
                    <div class="card">
                      <div class="card-bg orange">
                        <h3 class="text-center">Appliance Loan</h3>
                      </div>
                      <div class="card-body">
                        <br>
                        <h6 class="card-title text-left" style="font-weight:bold;"> Get an Appliance Loan </h6>

                        <p class="card-text text-left" style="font-size:14px; color:#222;"> This loan comes with a loan term of 6 Months 5% interest rate  </p>
                        <br> <br> <br><br><hr>
                        <button class="btn  orange">Get Started</button>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
             
            </div>
             --}}

           

              <div class="container-fluid">
                  
                    <section class="row text-center placeholders">

                      
                      <div class="col-12 col-sm-4 placeholder">
                        
                        <div class="text-center">
                          <div class="counter rounded-circle"
                            alt="Generic placeholder thumbnail">

                            <h1 class="counter-text "><span class="count">400</span></h1>
                          
                          </div>
                          <h4>Tasks Completed</h4>
                        </div>
                      </div>

                      <div class="col-12 col-sm-4 placeholder">
                        <div class="text-center">
                          <div class="counter rounded-circle" alt="Generic placeholder thumbnail">

                            <h1 class="counter-text"><span class="count">143</span></h1>

                          </div>
                          <h4>Active Professionals</h4>
                        </div>
                      </div>

                      <div class="col-12 col-sm-4 placeholder">
                        <div class="text-center">
                          <div class="counter rounded-circle" alt="Generic placeholder thumbnail">

                            <h1 class="counter-text"><span class="count">543</span></h1>

                          </div>
                          <h4>Social Feeds</h4>
                        </div>
                      </div>
                      
                    
                    </section>
                
              </div>
            
@endsection