<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/js/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('admin/js/tinycolor-min.js') }}"></script>
<script src="{{ asset('admin/js/config.js') }}"></script>
<script src="{{ asset('admin/js/apps.js') }}"></script>
<script src='{{ asset('admin/js/jquery.dataTables.min.js') }}'></script>
<script src='{{ asset('admin/js/dataTables.bootstrap4.min.js') }}'></script>
<script src="{{ asset('admin/js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js')}}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.js') }}"></script>
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script src="{{ asset('js/uppy.min.js') }}"></script>
<script src="{{ asset('js/quill.min.js') }}"></script>
{{-- /* -------------------------------- datatable ------------------------------- */ --}}
<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ]
    });
</script>
{{-- /* -------------------------------- datatable ------------------------------- */ --}}
@include('components.admin-editor')
