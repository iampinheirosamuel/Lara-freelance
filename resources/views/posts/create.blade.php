@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')

       <div class="col-lg-8">

        <div class="m-portlet">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Create A Post
										</h3>
									</div>
								</div>
							</div>
							<!--begin::Form-->
							
                                 {{ Form::open(array('route' => 'posts.store' , 'class' => 'm-form m-form--fit m-form--label-align-right')) }}
								<div class="m-portlet__body">
									<div class="form-group m-form__group row">
                                        {{ Form::label('title', 'Title', array('class' => 'col-form-label col-lg-3 col-sm-12')) }}
                                       {{ Form::text('title', null, array('class' => 'form-control col-lg-3 col-sm-12')) }}       
										
										
									</div>
									<div class="form-group m-form__group row">
                                         {{ Form::label('body', 'Post Body', array('class' => 'col-form-label col-lg-3 col-sm-12')) }}
                                          {{ Form::textarea('body', null, array('class' => 'form-control','id' =>'summernote')) }}
            
										
									</div>
								</div>
								<div class="m-portlet__foot m-portlet__foot--fit">
									<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12">
                                                 {{ Form::submit('Create Post', array('class' => 'btn btn-brand')) }}
                                              {{ Form::close() }}
												
												
											</div>
										</div>
									</div>
								</div>
							</form>
							<!--end::Form-->
                        </div>
                    
	</div>
	
	<div class="col-lg-4">
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
										<div class="m-separator m-separator--dashed"></div>
									</div>
								</div>
	</div>


@endsection