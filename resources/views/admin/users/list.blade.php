@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div style="display: flex; align-items:center; justify-content: space-between; padding:20px 0">
                <h4 class="mt-0 header-title float-left">{{ trans('admin.users') }}</h4>

                <a  href="/{{ app()->getLocale() }}/admin/users/add" type="button" class="float-right btn btn-info waves-effect width-md waves-light">{{ trans('admin.add_user') }}</a>

            </div>
         
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered">
             <tr>
               <th>No</th>
               <th>{{ trans('admin.name') }}</th>
               <th>{{ trans('admin.email') }}</th>
               <th>{{ trans('admin.role') }}</th>
               <th width="280px">{{ trans('admin.action') }}</th>
             </tr>
             @foreach ($users as $kay => $user)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                       <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                  @endif
                </td>
                <td>
                    <a href="/{{ app()->getLocale() }}/admin/users/show/{{ $user->id }}" type="button" class="btn btn-info waves-effect  waves-light">{{ trans('admin.show') }}</a>
                  
                   <a href="/{{ app()->getLocale() }}/admin/users/edit/{{ $user->id }}" type="button" class="btn btn-info waves-effect waves-light">{{ trans('admin.edit') }}</a>
                   @if($user->id !=1)
                   <a href="/{{ app()->getLocale() }}/admin/users/destroy/{{ $user->id }}" onclick="return confirm(trans('admin.sure_to_delete_user'));" style="@if($user->id == auth()->user()->id) display:none @endif"  class=" btn btn-danger waves-effect  waves-light" id="buttondelete">{{ trans('admin.delete') }}</a>
                   @endif
                </td>
              </tr>
             @endforeach
            </table>
            
            
            {!! $users->render() !!}
         
        </div>
    </div>
</div>

<style>
    .dtr-title{
        display: none !important;
    }
</style>

@endsection

@push('styles')
    <!-- third party css -->
        <link href="{{ asset('/admin/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endpush

@push('scripts')
    <!-- third party js -->
    <script src="{{ asset('/admin/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->
    <!-- Datatables init -->
    <script src="{{ asset('/admin/js/pages/datatables.init.js') }}"></script>
@endpush
