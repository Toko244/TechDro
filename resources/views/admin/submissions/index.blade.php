
@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <table id="datatable" class="table table-bordered nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('admin.section') }}</th>
                        <th>{{ trans('admin.post') }}</th>
                        <th>{{ trans('admin.name') }}</th>
                        <th>{{ trans('admin.email') }}</th>
                        <th>{{ trans('admin.more') }}</th>
                        <th>{{ trans('admin.delete') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submissions as $key => $submission)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th>{{$submission->post->parent->title}}</th>
                            <th>{{str_limit($submission->post->translate(app()->getlocale())->title, 20)}}</th>
                            <td>{{ $submission->name }}</td>
                            <td>{{ $submission->email }}</td>
                            <td><a href="/{{ app()->getLocale() }}/admin/submission/{{ $submission->id }}" type="button" class="btn btn-info waves-effect width-md waves-light">{{ trans('admin.more') }}</a></td>
                            <td><a href="/{{ app()->getLocale() }}/admin/submission/destroy/{{ $submission->id }}" onclick="return confirm('დარწმნებლი ხართ რომ გსურთ შეტყობინების წაშლა ?');" type="button" class=" btn btn-danger waves-effect width-md waves-light">{{ trans('admin.delete') }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
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
