@extends('layouts.admin')

@section('title', '| Add Role')

@section('content')
<div class="row">
    <div class="col-sm-6">
       <div class="m-portlet m-portlet--tab">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<span class="m-portlet__head-icon m--hide">
												<i class="la la-gear"></i>
											</span>
											<h3 class="m-portlet__head-text">
												<i class='fa fa-key'></i> Add Roles
											</h3>
										</div>
									</div>
								</div>
								<!--begin::Form-->
								
									<div class="m-portlet__body">

                                        {{ Form::open(array('url' => 'roles')) }}
                                         {{ csrf_field() }}
                                            <div class="form-group m-form__group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                {{ Form::label('name', 'Name') }}
                                                {{ Form::text('name', '', array('class' => 'form-control m-input m-input--solid')) }}
                                                 @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                @endif
                                            </div>


                                            <div class='form-group m-form__group'>
                                                 {{ Form::label('role', 'Assign Role') }}<br>
                                                 @foreach ($permissions as $permission)
                                                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                                @endforeach
                                            </div>

                                            

                                            {{ Form::submit('Add Role', array('class' => 'btn btn-primary btn-block')) }}

                                            {{ Form::close() }}
										
									
								<!--end::Form-->
                            </div>
            </div>
    </div>
</div>



@endsection