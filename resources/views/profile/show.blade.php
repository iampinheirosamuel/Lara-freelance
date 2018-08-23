@extends('layouts.app')

@section('content')

  {{-- <div class="m-content"> --}}
    
        {{-- <div class="row"> --}}
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                
                                <div class="m-card-profile__pic-wrapper">
                                    <span class="m-topbar__userpic">
                                        <img src=" {{ $profile->image }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                    </span>
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">
                                      {{ $profile->name }}
                                </span>
                                <a href="" class="m-card-profile__email m-link">
                                     {{ $profile->service }}
                                </a>
                            </div>
                            <div class="m-card-profile__details">
                                <h5>
                                    
                                </h5>
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
                                                 <input type="hidden" name="user_id" value="{{  Auth::user()->profile->id }}" class="form-control" id="recipient-name">
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
                                            <input type="hidden" name="user_id" value="{{  $profile->id }}" class="form-control" id="recipient-name">

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