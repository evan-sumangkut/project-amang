@section('head')
 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"></link>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet"></link>
@endsection


@section('javascript')
 <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('#datetimepicker').datetimepicker({
   format: 'DD MMMM YYYY HH:mm',
  });
  
  $('#datepicker').datetimepicker({
   format: 'DD MMMM YYYY',
  });
  
  $('#timepicker').datetimepicker({
   format: 'HH:mm'
  });
 });
</script>
@endsection