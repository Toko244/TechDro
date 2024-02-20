@extends('admin.layouts.app')

@push('name')
    {{ trans('admin.users') }}
@endpush
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card-box">
            <h4 class="header-title mt-0 mb-3">{{ trans('admin.edit_user') }}</h4>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
              </ul>
            </div>
          @endif
            <form action="/{{ app()->getLocale() }}/admin/users/edit/{{ $user->id }}" method="post" data-parsley-validate novalidate>
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ trans('admin.username') }}:</strong>
                            {!! Form::text('name', null, array('placeholder' => trans('admin.username'),'class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ trans('admin.email') }}:</strong>
                            {!! Form::text('email', null, array('placeholder' => trans('admin.email'),'class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">  
                            <strong>{{ trans('admin.role') }}:</strong>
                            <select class="select2-multiple" name="roles[]" multiple="multiple">
                               @foreach($roles as $role)
                                <option value="{{$userRole}}">{{ $role }}</option>
                                @endforeach
                              </select>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ trans('admin.password') }}:</strong>
                            {!! Form::password('password', array('placeholder' =>  trans('admin.password') ,'class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ trans('admin.re_password') }}:</strong>
                            {!! Form::password('confirm-password', array('placeholder' => trans('admin.re_password'),'class' => 'form-control')) !!}
                        </div>
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .danger{
            border: 1px solid rgb(239, 83, 80) !important;
        }
    </style>
@endpush

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
      <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                theme: "classic",
                placeholder: "Select an role",
                allowClear: true
            });

        });

    </script>
    <script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
@endpush
