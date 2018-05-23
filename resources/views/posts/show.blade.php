@extends('layouts.app')

@section('title', '| View Post')

@section('content')

<div class="container">

    <div class="row">
							<div class="col-sm-8">
								<!--begin:: Widgets/Blog-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
									<div class="m-portlet__head m-portlet__head--fit">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-action">
												
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget19">
											<div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
												<img src="../../assets/app/media/img//blog/blog1.jpg" alt="">
												<h3 class="m-widget19__title m--font-light">
													{{ $post->title }}
												</h3>
												<div class="m-widget19__shadow"></div>
											</div>
											<div class="m-widget19__content">
												<div class="m-widget19__header">
													<div class="m-widget19__user-img">
														<img class="m-widget19__img" src="../../assets/app/media/img//users/user1.jpg" alt="">
													</div>
													<div class="m-widget19__info">
														<span class="m-widget19__username">
															Anna Krox
														</span>
														<br>
														<span class="m-widget19__time">
															UX/UI Designer, Google
														</span>
													</div>
													
												</div>
												<div class="m-widget19__body">
													{{ $post->body }} 
												</div>
											</div>
											<div class="m-widget19__action">
												<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
													{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                                                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                                                    @can('Edit Post')
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
                                                    @endcan
                                                    @can('Delete Post')
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                    @endcan
                                                    {!! Form::close() !!}
												</button>
											</div>
										</div>
									</div>
								</div>
								<!--end:: Widgets/Blog-->
							</div>
                                
                            <div class="col-sm-4">
		                          <div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Featured Posts
												</h3>
											</div>
										</div>
									</div>
									
										<!--begin::Section-->
										
                                           <div class="m-portlet__body" style="padding:1.0rem;">
										<div class="m-widget4">
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="../../assets/app/media/img/client-logos/logo5.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Trump Themes
													</span>
													<br>
													<span class="m-widget4__sub">
														Make Metronic Great Again
													</span>
												</div>
												<span class="m-widget4__ext">
													<i class="flaticon-m"></i>
												</span>
                                            </div>
                                            
                                            <div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="../../assets/app/media/img/client-logos/logo5.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Trump Themes
													</span>
													<br>
													<span class="m-widget4__sub">
														Make Metronic Great Again
													</span>
												</div>
												<span class="m-widget4__ext">
													<i class="flaticon-left-arrow"></i>
												</span>
                                            </div>
                                            
                                            <div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="../../assets/app/media/img/client-logos/logo5.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Trump Themes
													</span>
													<br>
													<span class="m-widget4__sub">
														Make Metronic Great Again
													</span>
												</div>
												<span class="m-widget4__ext">
													<i class="flaticon-left-arrow"></i>
												</span>
                                            </div>
                                            
                                            <div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="../../assets/app/media/img/client-logos/logo5.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Trump Themes
													</span>
													<br>
													<span class="m-widget4__sub">
														Make Metronic Great Again
													</span>
												</div>
												<span class="m-widget4__ext">
													<i class="flaticon-left-arrow"></i>
												</span>
											</div>
											
										</div>
									</div>

                                    
										<!--end::Section-->
										<div class="m-separator m-separator--dashed"></div>
									</div>
								</div>
	</div>
							
							</div>

   

</div>

@endsection