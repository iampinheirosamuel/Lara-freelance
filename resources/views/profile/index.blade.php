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
                       
                         <div class="m-card-profile-details">
                          <ul class="m-nav m-nav--skin-light">
                            <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">
                                    Section
                                </span>
                                  </li>
                                  <li class="m-nav__item">
                                      <a href="{{ route('profile.index', Auth::user()->id ) }}" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                        <span class="m-nav__link-title">
                                          <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">
                                               Dashboard
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
                                    
                                    <li class="m-nav__item">
                                        
                                        <a href=" {{ route('profile.edit', Auth::user()->id ) }}" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                            <span class="m-nav__link-title">
                                                <span class="m-nav__link-wrap">
                                                    <span class="m-nav__link-text">
                                                        Edit Profile
                                                    </span>
                                                    
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                   <li class="m-nav__separator m-nav__separator--fit"></li>
                                    <li class="m-nav__item">
                                        
                                        <a href="  {{ route('posts.create') }}" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                            <span class="m-nav__link-title">
                                                <span class="m-nav__link-wrap">
                                                    <span class="m-nav__link-text">
                                                        Upload Work
                                                    </span>
                                                    
                                                </span>
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
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                   
                    <div class="m-portlet__head">

                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                   
                                     <i class="flaticon-edit "></i>
                                        Dashboard   
                                </li>                      
                            </ul>
                        </div>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_user_profile_tab_1">
                        
                            <div class="m-portlet__body">
										<div class="m-widget3">
                                             @foreach ($posts as $post)
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
											
										</div>
									</div>
                            
                        </div>
                    </div>

                    
                </div>
            </div>
 
@endsection