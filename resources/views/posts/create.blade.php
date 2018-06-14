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
							
                                 {{ Form::open(array('route' => 'posts.store' , 'enctype' => 'multipart/form-data', 'class' => 'm-form m-form--fit m-form--label-align-right')) }}
								 {{ csrf_field() }}
								 <div class="m-portlet__body">
									<div class="form-group m-form__group  row">
                                        {{ Form::label('title', 'Title', array('style'=> 'padding-left:0px','class' => 'col-form-label text-left col-lg-2-offset-1 col-sm-12')) }}
                                       {{ Form::text('title', null, array('class' => 'form-control col-lg-6 col-sm-12')) }}       
										
									<input type="hidden" value="{{ Auth::user()->profile->id }}" name="profile_id" >
									</div>

									<div class="form-group m-form__group row">
                                        {{ Form::label('featured', 'Featured Image', array('style'=> 'padding-left:0px','class' => 'col-form-label text-left col-lg-2-offset-1 col-sm-12')) }}

										{{ Form::file('featured', array('class' => 'form-control-file col-lg-6 col-sm-12')) }}  
										
										
									</div>
									<div class="form-group m-form__group row">
                                         {{ Form::label('body', 'Post Body', array('style'=> 'padding-left:0px','class' => 'col-form-label text-left col-lg-2-offset-1 col-sm-12')) }}
                                         {{ Form::textarea('body', null, array('class' => 'form-control col-lg-6')) }}
            
										
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
											@foreach($posts as $singlePost)
										<a href="{{ route('posts.show', $singlePost->id ) }}">
											<div class="m-widget4__item" style="border-bottom: 0.07rem dashed #ebedf2;">
												<div class="m-widget4__img m-widget4__img--logo">
												<img  style="border-radius:5%" src="{{ $singlePost->featured }}" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														{{ $singlePost->title }}
													</span>
													<br>
													<span class="m-widget4__sub">
														{{ str_limit( $singlePost->body, 40) }}
													</span>
												</div>
												<span class="m-widget4__ext">
													<i class="flaticon-m"></i>
												</span>
											</div>
										</a>
											@endforeach
											
										</div>
									</div>
										<div class="m-separator m-separator--dashed"></div>
									</div>
								</div>
	</div>


@endsection