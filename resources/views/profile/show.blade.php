@extends('layouts.app')

@section('content')

<div class="col-lg-12">
           <div class="m-portlet m-portlet--full-height" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.75) 0%, rgba(22, 22, 22, 0.75) 75%, rgba(22, 22, 22, 0.75) 100%), url('{{ $profile->coverImage}}');background-position: center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover; !important">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                
                                <div class="m-card-profile__pic-wrapper">
                                    <span class="m-topbar__userpic">
                                    <img src="{{ $profile->image }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                    </span>
                                </div>
                            </div>
                            <div class="m-card-profile__details text-white">
                                <span class="m-card-profile__name text-white">
                                      {{ $profile->name }}
                                </span>
                                <a href="" class="m-card-profile__email m-link text-white">
                                      {{ $profile->email }}
                                </a>
                            </div>
                        </div>

                      
                         
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            
                            <div class="m-card-profile__details">
                              <ul class="m-nav m-nav--skin-light">
                            <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">
                                    Section
                                </span>
                                  </li>
                                  <li class="m-nav__item">
                                      <a href="/" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                        <span class="m-nav__link-title">
                                          <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">
                                               My Portfolio
                                            </span>
                                            <span class="m-nav__link-badge">
                                             
                                            </span>
                                          </span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit"></li>
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
                                    
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="m-portlet__body-separator"></div>

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                   
                    <div class="m-portlet__head">

                        <div class="m-portlet__head-tools">
                            
                          

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_user_profile_tab_1">
                            <form class="m-form m-form--fit m-form--label-align-right">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                           
                                         </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-6">
                                            <h3 class="">
                                                Personal Details
                                            </h3>
                                        </div>
                                        <div class="col-6">
                                             <button type="button" class="btn btn-focus float-right" data-toggle="modal" data-target="#m_modal_4">
												Send me a Task
											</button>
                                        </div>
                                    </div>
                                      <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                    
                                    <div class="form-group m-form__group row">
                                        
                                        <div class="col-lg-6">
                                        <label for="example-text-input" class=" col-form-label">
                                            Fullname
                                          </label>
                                            <h6 class="">
                                                {{ $profile->name }}
                                            </h6>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                           
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        
                                        <div class="col-lg-6">
                                        <label for="example-text-input" class=" col-form-label">
                                            Skill sets
                                          </label>
                                            <h6 class="">
                                                {{ $profile->service }}
                                            </h6>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                            <label for="example-text-input" class=" col-form-label">
                                            City
                                           </label>
                                            <h6 class="">
                                                {{ $profile->state }}
                                            </h6>
                                        </div>
                                    </div>

                                   

                                    <div class="form-group m-form__group row">
                                         <div class="col-lg-12">
                                            <label for="example-text-input" class=" col-form-label">
                                            Bio
                                           </label>
                                            <h6 class="">
                                                {{ $profile->about }}
                                            </h6>
                                        </div>
                                    </div>

                                  
                                    
                                   
                                    
                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                   
                                    <div class="m-widget3">
                                            @if(count($profile->post) !== 0)
                                            <h4 class="text-left">{{$profile->user->name}} recent job</h4>
                                            <br>
                                             @foreach ($profile->post as $post)
                                             
                                           <a href="{{ route('posts.show', $post->id ) }}">
											<div class="m-widget3__item" style="border-bottom: 0.07rem dashed #ebedf2;">
												<div class="m-widget3__header">
													<div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" style="width:4.2rem; height:4.0rem" src="{{ $post->profile->image }}" alt="">
													</div>
													<div class="m-widget3__info">
														<span class="m-widget3__username">
															{{ $post->profile->name }}
														</span>
														<br>
														<span style="color:#222" class="m-widget3__time">
															{{ $post->created_at->diffForHumans() }}
														</span>
													</div>
													<span class="m-widget3__status m--font-info">
														
													</span>
												</div>
												<div class="m-widget3__body">
													<p class="m-widget3__text">
                                                         
														 {{ str_limit($post->body, 200) }} {{-- Limit teaser to 100 characters --}}
													</p>
												</div>
                                            </div>
                                           </a>
                                           <br>
                                             @endforeach
                                             @else
                                              <h6 class="text-center">{{$profile->user->name}} no recent work to show case</h6>
											 @endif
										</div>

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
         </div>
   
 </div>

 <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">
											Request a New Task
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												×
											</span>
										</button>
									</div>
									<div class="modal-body">
                                    <form method="post" action="{{ route('task.store') }}">
                                          {{ csrf_field() }} 
                                          @if(Auth::user()) 
                                           <div class="form-group">
												<label for="recipient-name" class="form-control-label">
													Your name:
												</label>
                                            <input type="text" name="client_name" value="{{ Auth::user()->name }}" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
												<label for="recipient-name" class="form-control-label">
													Your phone:
												</label>
												<input type="text" name="phone" value="{{ Auth::user()->profile->phone }}" class="form-control" id="recipient-name">
                                                 <input type="hidden" name="user_id" value="{{  Auth::user()->id }}" class="form-control" id="recipient-name">
                                            </div>
                                            @else
                                            
                                            <div class="form-group">
												<label for="recipient-name" class="form-control-label">
													Your name:
												</label>
												<input type="text" name="client_name" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
												<label for="recipient-name" class="form-control-label">
													Your phone:
												</label>
												<input type="text" name="phone" class="form-control" id="recipient-name">
                                            <input type="hidden" name="user_id" value="{{  $profile->user->id }}" class="form-control" id="recipient-name">

                                            </div>
                                            @endif


                                            <div class="form-group">
												<label for="recipient-name" class="form-control-label">
													Your request:
												</label>
                                                <input type="text" name="title" class="form-control" id="recipient-name">
                                                <small class="form-helper">Give it a title or short description</small>
											</div>
											<div class="form-group">
												<label for="message-text" class="form-control-label">
													Give more details about your request:
												</label>
												<textarea class="form-control" name="description" id="message-text"></textarea>
                                            </div>
                                            <div class="form-group">
                                            <div class="form-group row">
                                                <div class="col-6">
                                                   <label for="recipient-name" class="form-control-label">
													Your timeline:
                                                  </label>
                                                  
                                                    <div class="input-group date">
                                                        <input type="text" name="date" class="form-control m-input" readonly="" placeholder="Select date" id="m_datepicker_2">
                                                       
                                                    </div>
                                                			 
                                                </div>
												<div class="col-6">
                                                   <label for="recipient-name" class="form-control-label">
													Your location?
												  </label>
												  <input type="text" name="location" class="form-control" id="recipient-name">
                                                </div>
												
											</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">
											Cancel
										</button>
										<button type="submit" class="btn btn-primary">
											Create Tasks
										</button>
                                    </div>
                                 </form>
								</div>
							</div>
						</div>
@endsection