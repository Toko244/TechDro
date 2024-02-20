@extends('admin.layouts.app')
@push('name')
@endpush
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a class="btn btn-primary table-header-btn" href="/{{ app()->getLocale() }}/admin/forms/create">
                    <i class="mdi mdi-plus"></i> {{ trans('admin.Add_Forms') }}
                </a>

            </div>
            <div class="table-responsive mt-3">
                <table class="table table-striped d-table">
                    <thead>
                        <tr>
                            <th>
                                {{ trans('admin.name') }}
                            </th>
                            <th>
                                {{ trans('admin.edit') }}
                            </th>
                            <th>
                                {{ trans('admin.delete') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                        <tr>
                            <td class="py-1">
                                <span>{{ $form->title }}</span>
                            </td>
                            <td>
                                <a href="/{{ app()->getlocale() }}/admin/forms/edit/{{ $form->id }}"
                                    class="btn btn-primary table-header-btn uppercase">
                                    <i class="mdi mdi-pencil"></i> {{ trans('admin.edit') }}
                                </a>

                            </td>
                            <td>
                                <form method="POST" class="swal-form" style="display: inline"
                                    action="/{{ app()->getlocale() }}/admin/forms/destroy/{{ $form->id }}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" onclick="return confirm('Do You Want To Delete This Form?');"
                                        class="swal-confirm btn btn-danger uppercase"><i class="mdi mdi-delete"></i>
                                        {{ trans('admin.delete') }}</button>
                                </form>
                                @error('delete') <small class="error danger">{{ $errors->first('delete') }}</small>
                                @enderror
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>


            </div>
        </div>
    </div>
</div>



@endsection
<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Section?");
    }
</script>
