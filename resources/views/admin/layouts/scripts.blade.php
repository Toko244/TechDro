<script src="{{ asset('/admin/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Vendor js -->
<script src="{{ asset('/admin/js/vendor.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{ asset('/admin/libs/morris-js/morris.min.js')}}"></script>
<script src="{{ asset('/admin/libs/raphael/raphael.min.js')}}"></script>

<!-- knob plugin -->
<script src="{{ asset('/admin/js/dropupload.js') }}"></script>

<script src="{{ asset('admin/js/form.js') }}"></script>
<!-- App js -->
<script src="{{ asset('/admin/js/app.min.js')}}"></script>
<script src="{{ asset('/admin/js/script.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<script>
    var allEditors = document.querySelectorAll('.ckeditor');
    for (var i = 0; i < allEditors.length; ++i) {
      ClassicEditor.create(allEditors[i]);
    }
</script>

@stack('scripts')

<!-- Dashboard init js-->
{{-- <script src="{{ asset('/admin/js/pages/dashboard.init.js')}}"></script> --}}
