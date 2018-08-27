<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.png">
    <link href="../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../../assets/demo/default/media/img/logo/favicon.ico" />

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.10/dist/summernote.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">

    <!-- Animate CSS -->
    <link rel="stylesheeet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
      crossorigin="anonymous">
    <link rel="stylesheeet" href="css/fontawesome-all.css">
    <link rel="stylesheeet" href="../../css/resCarousel.css">
    
    <!-- Custom styles for this template -->
    <link href="../../css/cover.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102627835-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-102627835-1');
</script>

     <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-102627835-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->   
    
  </head>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/9712be8772.js"></script>
</head>

  <body>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      
          <a class="navbar-brand" href="{{ url('/') }}"><img src="../../images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
        aria-expanded="false" aria-label="Toggle navigation">
        <i style=" color: #222;" class="flaticon-grid-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
  
          
            <li class="nav-item"><a href="{{ url('/') }}">Home</a></li>
           
                <li class="nav-item"><a href="{{ route('posts.index') }}">News Feed</a></li>
          
          
           @if (Auth::guest())
                            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                            {{-- <li class="nav-item"><a class="btn btn-secondary" href="{{ route('register') }}">Register</a></li> --}}
                        @else
                        @role('Active')
                             <li class="nav-item"><a href="{{ route('posts.create') }}">Create Post</a></li>
                         @endrole
                  <li style="margin-top: 10px; " class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
                        <img style="margin-top:10px;     border: 1px solid rgba(16, 224, 64, 0.78); height: 40px; width:42px;" alt="click_me" src="{{ Auth::user()->profile->image }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-topbar__username m--hide">
													
                        </span>
                      
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
                              <img src="" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span style="color:#fff; font-size:12px;" class="m-card-user__name m--font-weight-500">
																	 {{ Auth::user()->name }} 
																</span>
																<a style="color:#fff; font-size:10px;" href="" class="m-card-user__email m--font-weight-300 m-link">
																	 {{ Auth::user()->email }} 
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
                                  </li>
                                    @role('Admin') {{-- Laravel-permission blade helper --}}
                                    <li class="m-nav__item">
                                      <a href="/users" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                        <span class="m-nav__link-title">
                                          <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">
                                              Visit Admin Dashboard
                                            </span>
                                            <span class="m-nav__link-badge">
                                              <span class="m-badge m-badge--success">
                                                
                                              </span>
                                            </span>
                                          </span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                    @endrole
                                                                
																<li class="m-nav__item">
                                                                    
																	<a href=" {{ route('profile.edit', Auth::user()->id ) }}" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				
																			</span>
																		</span>
																	</a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Activity
																		</span>
																	</a>
                                    </li>
                                  <li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
                                <a href="{{ route('task.show', Auth::user()->profile->id) }}" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																		<span class="m-nav__link-text">
																			Messages
                                    </span>
                                    <span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						{{-- {{ Auth::user()->task->count() }} --}}
																					</span>
                                        </span>
                                      </span>
                                    </span>
																	</a>
                                                                </li>
                                                                
                                                                
															
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-logout"></i>
																		<span class="m-nav__link-text">
																			Log out
																		</span>
                                                                    </a>
                                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
                        @endif
                    </ul>
                    
                </div>
      
    </nav>
   </div> 
        

       
         <div  style="padding-top: 90px;">
          
               @if(Session::has('flash_message'))
                    <div class="container">      
                        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                        </div>
                    </div>
                @endif  
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">              
                            @include ('errors.list') {{-- Including error file --}}
                        </div>
                    </div>
                </div>     
           </div>
              @yield('content')
             <div class="container-fluid support">
                <div class="row">
                  <div class="col-md-4  col-sm-4 ">
                    <h6>Contact Us</h6>
                    <br>
                    <ul class="">
                       <li class=""><i class="fa fa-phone"></i>
                        <a href="{{ $settings->contact_number }}"> {{ $settings->contact_number }}</a></li>
                      <li class=""><i class="fa fa-envelope"></i>
                        <a href="mailto:{{ $settings->contact_email }}"> {{ $settings->contact_email }}</a></li>                
                    </ul>
                    
                  </div>
                  <div class="col-md-4  col-sm-4 ">
                  <h6>Follow us</h6>
                   <br>
                    <ul class="" style="display:inline-flex; padding-right:10px;">
                       <li class=""><a href="{{ $settings->facebook }}"><i class="fa fa-facebook fa-3x"></i></a></li><br>
                       <li class=""><a href="{{ $settings->twitter }}"><i class="fa fa-twitter fa-3x"></i></a></li><br>
                       <li class=""><a href="{{ $settings->instagram }}"><i class="fa fa-instagram fa-3x"></i></a></li><br>
                      
                       
                    </ul>
                    </div>
                  <div class="col-md-4  col-sm-4 ">
                      <h6>Support</h6>
                      <br>
                    <ul class="">
                       <li class=""><a href="#">How it Works</a></li>
                       <li class=""><a href="/register">Join Us</a></li>
                     
                       
                    </ul>
                  </div>
                </div>
              </div>

           
              <div class="footer"> <p>
                2018 © Designed & Supported by <a class="m-link" href="https://">
                                Evolve Tech
                            </a></p>
              </div>




              <!-- Button trigger modal -->
         
              <!-- Modal -->
              {{-- <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                      <div class="container">

                        <form class="form-signin">
                          <h2 class="form-signin-heading">Please sign in</h2>
                          <label for="inputEmail" class="sr-only">Email address</label>
                          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                          <label for="inputPassword" class="sr-only">Password</label>
                          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                          <div class="checkbox">
                            <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>

                      </div>
                    </div>
                   
                  </div>
                </div>
              </div> --}}
    
              
          

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>
    <script src="js/lem_counter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.10/dist/summernote.min.js"></script>
   


      <script>
        // $('.count').lemCounter({

        //   locale: false, // e.g. 'en-US'

        //   value_to_from_content: true,

        //   animate_duration: 2

        // });


       
    

        
      </script>
      <!--begin::Base Scripts -->
		<script src="../../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <script src="../../../assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--end::Base Scripts -->   
    <script src="../../js/resCarousel.js"></script>
        <!--begin::Page Snippets -->
		<script src="../../assets/app/js/dashboard.js" type="text/javascript"></script>
    <!--end::Page Snippets -->
    <script id="dsq-count-scr" src="//facework-com-ng.disqus.com/count.js" async></script>
  </body>
</html>
