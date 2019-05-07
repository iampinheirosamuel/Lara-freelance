@extends('layouts.app')

@section('content')
   
            <div class="col-lg-12">

                <div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													All recent posts
												</h3>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
										<div class="row">
                                              @foreach ($posts as $post)

												<div class="col-md-3" style="box-shadow: 0px 1px 16px 2px #e6e6e6; margin: 30px;">
													<a href="{{ route('posts.show', $post->id ) }}">

													<div class="card">
													<div class="card-img-top img-fluid" style="height: 200px; background: url({{ $post->featured }}) no-repeat;     background-size: cover;" >
														
														</div>
														
														<div class="card-body">
														<h6 class="text-dark">	{{ $post->title }}</h6>
														<p class="card-text"> </p>
														<div class="full row">
															<div class="col-2 pr-0"><img src="{{ $post->profile->image }}" class="img-rounded" alt="" srcset=""></div>
															<div class="col-7 pl-2 mb-0"><p class="card-text"><small class="text-dark">{{ $post->profile->name }}</small></p>
														</div>
															<div class="col-3"><p class="card-text"><small class="text-muted"><i class="fa fa-thumbs-up pl-2"></i> <strong>{{ $post->likes->count() }}</strong></small></p></div>
													</div>
														
														</div>
													</div>

													</a>
												</div>

												@endforeach
											
										</div>
									</div>
                                </div>
                             </div>
                
                <div class="col-lg-5">
                    <div class="m-portlet">
                    <div class="m-portlet__body">
                     <div class="m-demo__preview">
														<div class="m-nav-grid">
															<div class="m-nav-grid__row">
																<a href="#" class="m-nav-grid__item">
																	<i class="m-nav-grid__icon flaticon-file"></i>
																	<span class="m-nav-grid__text">
																		{{ count($posts) }} News Feeds
																	</span>
																</a>
																<a href="#" class="m-nav-grid__item">
																	<i class="m-nav-grid__icon flaticon-time"></i>
																	<span class="m-nav-grid__text">
																		60 Collaborations
																	</span>
																</a>
																<a href="#" class="m-nav-grid__item">
																	<i class="m-nav-grid__icon flaticon-user"></i>
																	<span class="m-nav-grid__text">
																		{{-- {{ $posts->profile->count() }} Members --}}
																	</span>
																</a>
															</div>
															<div class="m-nav-grid__row">
																<a href="#" class="m-nav-grid__item">
																	<i class="m-nav-grid__icon flaticon-folder"></i>
																	<span class="m-nav-grid__text">
																		50 Gigs
																	</span>
																</a>
																<a href="#" class="m-nav-grid__item">
																	<i class="m-nav-grid__icon flaticon-clipboard"></i>
																	<span class="m-nav-grid__text">
																		20 Completed Tasks
																	</span>
																</a>
																
															</div>
														</div>
                                                    </div>
                    </div>
                    </div>
                </div>
         
@endsection
