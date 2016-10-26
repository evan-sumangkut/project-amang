 @section('head')
 <!-- DataTables CSS -->
 <link href="{{ asset('css/admin/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

 <!-- DataTables Responsive CSS -->
 <link href="{{ asset('css/admin/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection




@section('javascript')
 <!-- DataTables JavaScript -->
    <script src="{{ asset('css/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>


     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
 @endsection