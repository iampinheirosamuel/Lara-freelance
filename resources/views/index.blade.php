@extends('layouts.app')

@section('content')
 <div class="" style="margin-top: -15px">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      
         @if(Auth::user())
            @if( Auth::user()->roles()->pluck('name')->implode('') != 'Active')
              <div class="container">      
              <div class="alert alert-info"><em>Hi {{ Auth::user()->name }}, update your profile to get hired quickly </em><a href=" {{ Route('profile.edit', Auth::user()->profile->id) }}">here</a>

                        </div>
              </div>
            @endif
          @endif
            <div class="">
                <div class="">
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" height="453px">
    <div class="carousel-item active">
      <img class="d-block w-100" height="453px" src="{{ asset('images/slider1.png') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height="453px" src="{{ asset('images/slider2.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height="453px" src="/images/slider5.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" height="453px" src="/images/slider4.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" height="453px" src="/images/slider5.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
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
  <div class="row">
  <div class="col-lg-5">
    <h3></h3>
  
    <!--begin:: Widgets/Blog-->
								<div class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force">
									<div class="m-portlet__head m-portlet__head--fit">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text m--font-light">
												Freelancers on Facework
												</h3>
											</div>
                    </div>
                  </div>
                  
                  <div class="m-portlet__body">
										<div class="m-widget28">
											<div class="m-widget28__pic m-widget28__pic--primary m-portlet-fit--sides"></div>
											<div class="m-widget28__container" >
												<!-- begin::Nav pills -->
												<ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
													<li class="m-widget28__nav-item nav-item">
														<a class="nav-link active" data-toggle="pill" href="#menu11">
															<span>
																<i class="fa flaticon-rocket"></i>
															</span>
															<span>
																Available
															</span>
														</a>
													</li>
													<li class="m-widget28__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#menu21">
															<span>
																<i class="fa flaticon-clipboard"></i>
															</span>
															<span>
																Secure
															</span>
														</a>
													</li>
													<li class="m-widget28__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#menu31">
															<span>
																<i class="fa flaticon-clipboard"></i>
															</span>
															<span>
																Reliant
															</span>
														</a>
													</li>
                        </ul>
                      </div>
                      
                    </div>
                  </div>
								</div>
    
   

  </div>

 
     <div class="col-xl-7">
								<!--begin:: Widgets/User Progress -->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Find the best FaceWorka
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
											
											</ul>
										</div>
									</div>
									<div class="m-portlet__body" style="padding:10px">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget4_tab1_content">
												<div class="m-widget4 m-widget4--progress">
                        
                       @foreach ($users as $user)
                        @if( $user->roles()->pluck('name')->implode('') === 'Active')
													<div class="m-widget4__item" style="padding-top:10px">
													<div class="m-widget4__img m-widget4__img--pic">
															<img style="height:3.4rem" src="{{ $user->profile->image }}" alt="{{ $user->profile->name }}">
														</div>
														<div class="m-widget4__info" style="padding:10px">
															<span class="m-widget4__title">
																{{ $user->name }}
															</span>
															<br>
															<span class="m-widget4__sub">
																{{ $user->profile->service }}
															</span>
														</div>
														{{-- <div class="m-widget4__progress hidden-sm-up">
															<div class="m-widget4__progress-wrapper">
																<span class="m-widget17__progress-number">
																	93%
																</span>
																<span class="m-widget17__progress-label">
																	{{ $user->profile->state }}
																</span>
																 <div class="progress m-progress--sm">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="63"></div>
																</div>
															</div>
                            </div> --}}
                            <div class="m-widget4__progress hidden-md-down">
                              {{ $user->profile->state }}
                            </div>
														<div class="m-widget4__ext">
															<a href="{{ route('profile.show', $user->profile->id ) }} " class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
																view
															</a>
														</div>
                          </div>
                          @endif
													@endforeach
												</div>
											</div>
										
										</div>
									</div>
								</div>
								<!--end:: Widgets/User Progress -->
							</div>
  </div>
</div>
            
            <div class="container-fluid">
              <div class="row">
                <div class=" col action">

                  <h1 class="float-left">Join us now</h1>

                  <div class="float-right">
                    <a href="{{ url('/register') }}" class="btn btn-secondary btn-large"><h4>GET STARTED</h4></a>
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