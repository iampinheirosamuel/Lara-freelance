@extends('layouts.app')

@section('content')
   
            <div class="col-lg-7">

                <div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Your Task Requests
												</h3>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
										<div class="m-widget3">
                                             @foreach ($tasks as $task)
                                           
											<div class="m-widget3__item" style="border-bottom: 0.07rem dashed #ebedf2;">
												<div class="m-widget3__header">
													<div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" style="width:4.2rem; height:4.0rem" src="\uploads\userprofile\1527438963welcome-aebcdc.png" alt="">
													</div>
													<div class="m-widget3__info">
														<span class="m-widget3__username">
															{{ $task->client_name }}
														</span>
														<br>
														<span style="color:#222" class="m-widget3__time">
															{{ $task->phone }}
														</span>
													</div>
													<span class="m-widget3__status m--font-info">
														  {{ $task->created_at->diffForHumans() }}
													</span>
												</div>
												<div class="m-widget3__body">
                                                    <p class="m-widget3__text">
                                                       <b>{{ $task->title }}</b>
                                                    </p>
													<p class="m-widget3__text">
                                                         
														 {{  $task->description }} {{-- Limit teaser to 100 characters --}}
                                                    </p>
                                                    <p class="m-widget3__text">
                                                        Timeline: {{ $task->date }}

                                                    </p>
                                                    <p class="m-widget3__text">
                                                        Address: {{ $task->location }}
                                                    </p>
												</div>
                                            </div>
                                           </a>
                                           <br>
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
																		{{-- {{ count($posts) }} News Feeds --}}
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
