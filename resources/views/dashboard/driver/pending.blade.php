@extends('layouts.admin')

@include('plugin.table')

@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Driver {{ $header }} Pending</h1>
                </div>
                <!-- /.col-lg-12 -->
       
            @if (Session::has('pesan'))
        <h4>{{ Session::get('pesan') }}</h4>
        <br/>
        @endif
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kelola Driver
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. HP</th>
                                        <th>Email</th>
                                        <th>Jaminan</th>
                                        <th>Waktu Daftar</th>
                                        <th colspan="3" style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($driver as $d)
                                    <tr>
                                        <td width="60px" style="text-align: center" >{{ $no++ }}</td>
                                        <td>{{ $d->namalengkap }}</td>
                                        <td>{{ $d->jk }}</td>
                                        <td>{{ $d->hp }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->jaminan }}</td>
                                        <td>{{$d->created_at}}</td>
                                        <td width="50"> @if($header=="Ojek")
                                            <a type="button" href="{{ route('driver_ojek_detail', $d->id) }}" class="btn btn-info">Detail</a>
                                        @else
                                         <a type="button" href="{{ route('driver_taxi_detail', $d->id) }}" class="btn btn-info">Detail</a>
                                    
                                    @endif</td>
                                         <td width="50"><form action="{{ route('driver_aksi', $d->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="status" value="1">
                        <input type="submit" value="Active" class="btn btn-success" onclick="return confirm('Apakah peserta akan diangkat menjadi driver amang ojek?');">
                        </form></td>
                               <td width="50"><form method="POST" action="{{route('driver_delete', $d->id)}}" accept-charset="UTF-8" style="margin:0 auto">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                                        <input class="btn btn-danger" type="submit" value="Delete"  onclick="return confirm('Are you sure you want to delete this item?');">
</form>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
     
        </div>
        <!-- /#page-wrapper -->

@endsection
