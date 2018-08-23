@extends('layouts.app')

@section('content')

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
                                    <img src="{{ $profile->image }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                    </span>
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">
                                      {{ $profile->name }}
                                </span>
                                <a href="" class="m-card-profile__email m-link">
                                      {{ $profile->email }}
                                </a>
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
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                   
                                     <i class="flaticon-edit "></i>
                                        Update Profile
                                    
                                </li>
                               
                               
                            </ul>
                        </div>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_user_profile_tab_1">
                        <form class="m-form m-form--fit m-form--label-align-right" method="post" enctype="multipart/form-data" action="/profile/update/{{ $profile->id }}">
                            {{ csrf_field() }}    
                            <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                         </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">
                                                Personal Details
                                            </h3>
                                        </div>
                                    </div>
                                    
                                

                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                   
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">
                                            
                                            </h3>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group m-form__group row">
                                        
                                        <div class="col-lg-6">
                                        <label for="example-text-input" class=" col-form-label">
                                            Fullname
                                          </label>
                                        <input class="form-control m-input" type="text" name="name" value="{{ $profile->name }}">
                                        </div>
                                       
                                        <div class="col-lg-6">
                                            <label for="example-text-input" class=" col-form-label">
                                            Email
                                           </label>
                                            <input class="form-control m-input" type="text" name="email" value="{{ $profile->email }}">
                                        </div>
                                    </div>

                                     <div class="form-group m-form__group row">
                                        
                                        <div class="col-lg-6">
                                        <label for="example-text-input" class=" col-form-label">
                                            Phone
                                          </label>
                                        <input class="form-control m-input" type="text" name="phone" value="{{ $profile->phone }}">
                                        </div>
                                       
                                        <div class="col-lg-6">
                                            <label for="example-text-input" class=" col-form-label">
                                            Address
                                           </label>
                                            <input class="form-control m-input" type="text" name="address" value="{{ $profile->address }}">
                                        </div>
                                    </div>

                                     <div class="form-group m-form__group row">
                                        
                                        <div class="col-lg-6">
                                        <label for="example-text-input" class=" col-form-label">
                                            State
                                          </label>
                                        <input class="form-control m-input" type="text" name="state" value="{{ $profile->state }}">
                                        </div>
                                       
                                        <div class="col-lg-6">
                                            <label for="example-text-input" class=" col-form-label">
                                            Services (e.g. Web Developer, UI/UX Designer)
                                           </label>
                                            <input class="form-control m-input" type="text" name="service" value="{{ $profile->service }}">
                                        </div>
                                    </div>

                                     <div class="form-group m-form__group row">
                                        
                                        <div class="col-lg-6">
                                        <label for="example-text-input" class=" col-form-label">
                                            About (Tell us about you)
                                          </label>
                                        <textarea class="form-control m-input" type="textarea" cols="3" name="about" value="{{ $profile->about }}"></textarea>
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="example-text-input" class=" col-form-label">
                                            Change Avatar
                                           </label>
                                            <input class="form-control-file m-input" type="file" name="image">
                                        </div>
                                       
                                    </div>

                                    

                                   

                                </div>


                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-8 text-center">
                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                    Update
                                                </button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
 </div>
@endsection