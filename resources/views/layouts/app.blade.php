<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Freelance job work freelance artisans NIgeria freelence oppportunities"/>
<link rel="canonical" href="http://facework.com.ng/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Facework - freelance platform" />
<meta property="og:description" content="Freelance job work freelance artisans NIgeria freelence oppportunities" />
<meta property="og:url" content="http://facework.com.ng/" />
<meta property="og:site_name" content="Facework - freeelance Nigeria Jobs" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Freelance job work freelance artisans NIgeria freelence oppportunities" />
<meta name="twitter:title" content="Facework - freeelance Nigeria Jobs" />
<meta name="twitter:site" content="@Facework10" />
<meta name="twitter:image" content="../../images/favicon.png" />
<meta name="twitter:creator" content="@Facework10" />
    <meta name="google-site-verification" content="I0a4goaZ-BtjG8BJv6BODcOhaKRixSpEMVGbYscahpw" />
    <link rel="icon" href="../../images/favicon.png">
 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../images/favicon.png" />

    <title>FaceWork </title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.10/dist/summernote.min.css"> --}}
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
   
    <!-- Ioninc Awesome CSS -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" >
    {{-- <link rel="stylesheeet" href="css/fontawesome-all.css"> --}}
     <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
   
    
    <!-- Custom styles for this template -->
    <link href="../../build/css/cover.css" rel="stylesheet">
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

{{-- Facework comments --}}
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=861102744055300&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
  <div id="app" class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      
          <a class="navbar-brand" href="{{ url('/') }}"><img src="../../images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
        aria-expanded="false" aria-label="Toggle navigation">
        <i style=" color: #222;" class="ion-navicon"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
  
            <li class="nav-item"><a href="{{ url('/') }}">Home</a></li>
           
                <li class="nav-item"><a href="{{ route('posts.index') }}">Show Case</a></li>
          
               
                  @if (Auth::guest())
                  <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                  {{-- <li class="nav-item"><a class="btn btn-secondary" href="{{ route('register') }}">Register</a></li> --}}
                    @else

                    @role('Active')
                     <li class="nav-item"><a href="{{ route('profile.create') }}">Upload Work</a></li>
                    @endrole

                   <li class="nav-item">
                      <div class="dropdown ">
                        <i class="ion-ios-bell-outline dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="badge badge-light">{{ auth()->user()->unreadNotifications->count() }}</span>
                        </i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          @if(auth()->user()->unreadNotifications->count() )
                          @foreach (auth()->user()->unreadNotifications as $notification)
                               <div>
                                  <div class="post_img ">
                                      <a class="dropdown-item m-0 p-1" href="/posts/{{ $notification->data['notifs']['id'] }}" ><img src="{{ $notification->data['notifs']['featured'] }}" style="width:2.0rem; height:2.0rem; border-radius: 50%;
                                    
                                  " alt="" class="img-rounded" srcset="">
                                 <small class="text-muted">  {{ $notification->data['notifs']['title'] }} </small><br>
                                 {{-- <small class="text-muted">  {{ $notification->data['notifs']['created_at']->diffForHumans() }} </small> --}}
                                  </a>
                                  </div>
                                 
                              </div>  
                          @endforeach      
                          @else
                          <a class="dropdown-item m-0" href="#">No notifications</a>
                          @endif
                          
                        </div>
                      </div>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown dropleft">
                            <a href="#" class="m-nav__link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="m-topbar__userpic">
                                <img alt="user profile picture" src="{{ Auth::user()->profile->image }}" class="profile_img_user img-rounded m--marginless img-centered" />
                                </span>                   
                              </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              @role('Admin') {{-- Laravel-permission blade helper --}}

                                <a href="/users" class="dropdown-item m-0">
                                  
                                        Visit Admin Dashboard
                                </a>
                              @endrole
                               
                              <a href="{{ route('profile.index', Auth::user()->id ) }}" class="dropdown-item m-0">
                                 
                                         Dashboard
                              </a>

                              <a href="{{ route('task.show', Auth::user()->id) }}" class="dropdown-item m-0">
                                  
                                    Messages
                                  <span class="badge">
                                        <span class="badge badge-success">
                                          {{ Auth::user()->task->count() }} 
                                        </span>
                                      </span>
                                </a>

                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item m-0">
																		
																		<span class="">
                                      	Log out
																		</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                          </div>
                        </div>
                      </li>
                       
                   
                        @endif
                    </ul>
                    
                </div>
      
    </nav>
   </div> 
        

       
         <div  style="padding-top: 70px;">
          
                
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">              
                            @include ('errors.list') {{-- Including error file --}}
                        </div>
                    </div>
                </div>     
           
           <div class="container-fluid" >
             <div class="row">
               @if(Session::has('flash_message'))
                  <div class="container-fluid">  
                    <div class="alert alert-success"><em> {!! session('flash_message') !!} </em>
                    </div>
                  </div>
              
                @endif 
                @yield('content')
             </div>
           </div>
            
           
           <div class="container-fluid support">
                <div class="row  pt-4 pb-3">
                  <div class="col-md-4  col-sm-4 ">
                    <h6>Contact Us</h6>
                    <br>
                     <ul class="">
                       <li class=""><i class="fa fa-phone"></i>
                        <a href="tel:08022790906"> 08022790906</a></li>
                      <li class=""><i class="fa fa-envelope"></i>
                        <a href="mailto:contact@facework.com.ng"> contact@facework.com.ng</a></li>                
                    </ul>
                    
                  </div>
                  <div class="col-md-4  col-sm-4 ">
                  <h6>Follow us</h6>
                   <br>
                    <ul class="" style="display:inline-flex; padding-right:10px;">
                       <li class="" style="padding-right: 15px;"><a href=""><i class="ion-social-facebook-outline"></i></a></li><br>
                       <li class="" style="padding-right: 15px;"><a href=""><i class="ion-social-twitter-outline"></i></a></li><br>
                       <li class="" style="padding-right: 15px;"><a href=""><i class="ion-social-instagram-outline"></i></a></li><br>       
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
                <script>document.write(new Date().getFullYear())</script> © made with <i class="ion-ios-heart-outline text-danger"></i> by <a class="m-link" href="https://github.com/devPinheiro/">
                                ET
                            </a></p>
              </div>
              </div>




             
          

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>

     <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
      <!--<script>-->
      <!--$('#summernote').summernote({-->
      <!--      placeholder: 'Hello stand alone ui',-->
      <!--      tabsize: 2,-->
      <!--      height: 100-->
      <!--    });-->
      <!--  </script>-->

      <!--begin::Base Scripts -->

    
    <!--end::Base Scripts -->  
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
    <script src="../../js/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:false,
                        loop:false
                    }
                }
              });
            
            });        
      </script>
    
        <!--begin::Page Snippets -->
    <!-- jQuery CDN -->
		<script src="../../build/js/typeahead.js" type="text/javascript"></script>
		<script src="../../build/js/script.js" type="text/javascript"></script>
	 <!--end::Page Snippets -->
    <script id="dsq-count-scr" src="//facework-com-ng.disqus.com/count.js" async></script>
  </body>
</html>
