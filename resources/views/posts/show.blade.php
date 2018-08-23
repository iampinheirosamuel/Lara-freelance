@extends('layouts.app')

@section('title', '| View Post')

@section('content')


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
											<img src="{{ $post->featured }}" alt="">
												<h2 class="m-widget19__title m--font-light">
													{{ $post->title }}
												</h2>
												<div class="m-widget19__shadow"></div>
											</div>
											<div class="m-widget19__content">
												<div class="m-widget19__header">
												<a href="{{ route('profile.show', $post->profile->id ) }}">
													<div class="m-widget19__user-img">
													<img style="width:4.2rem; height:4.0rem" class="m-widget19__img" src="{{ $post->profile->image }}" alt="">
													</div>
													<div class="m-widget19__info">
														<span class="m-widget19__username">
															{{ $post->profile->name }}
														</span>
														<br>
														<span class="m-widget19__time">
															{{ $post->profile->service }}, {{ $post->profile->state }}
														</span>
													</div>
												</a>
													
												</div>
												<div class="m-widget19__body">
													{{ $post->body }} 
												</div>
											</div>
											<div class="m-widget19__action">
												
													{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                                                    <a href="{{ url()->previous() }}" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Back</a>
                                                    @can('Edit Post')
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom" role="button">Edit</a>
                                                    @endcan
                                                    @can('Delete Post')
                                                    {!! Form::submit('Delete', ['class' => 'btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom ']) !!}
                                                    @endcan
                                                    {!! Form::close() !!}
												
											</div>
										</div>
									</div>
									<div class="disqus">
									<div id="disqus_thread"></div>
										<script>

										/**
										*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
										*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
										/*
										var disqus_config = function () {
										this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
										this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
										};
										*/
										(function() { // DON'T EDIT BELOW THIS LINE
										var d = document, s = d.createElement('script');
										s.src = 'https://facework-com-ng.disqus.com/embed.js';
										s.setAttribute('data-timestamp', +new Date());
										(d.head || d.body).appendChild(s);
										})();
										</script>
										<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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
											@foreach($posts as $singlePost)
										<a href="{{ route('posts.show', $singlePost->id ) }}">
											<div class="m-widget4__item" style="border-bottom: 0.07rem dashed #ebedf2;">
												<div class="m-widget4__img m-widget4__img--logo">
												<img style="border-radius:5%" src="{{ $singlePost->featured }}" alt="">
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

                                    
										<!--end::Section-->
										<div class="m-separator m-separator--dashed"></div>
									</div>
								</div>

							
		

@endsection