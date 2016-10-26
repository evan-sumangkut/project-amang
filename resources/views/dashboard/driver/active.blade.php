@extends('layouts.admin')

@include('plugin.table')

@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Driver {{ $header }} Active</h1>
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
                                        <th>NID</th>
                                        <th>Nama</th>
                                        <th>No. HP</th>
                                        <th>Email</th>
                                        <th>Saldo</th>
                                        <th style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($driver as $d)
                                    <tr>
                                        <td width="60px" style="text-align: center" >{{ $no++ }}</td>
                                     <td>{{$d->userid}}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->phone}}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->ke_ExtDriverIncome->credit}}</td>
                                        <td width="50">
                                            @if($header=="Ojek")
                                            <a type="button" href="{{ route('driver_ojek_detail', $d->userid) }}" class="btn btn-info">Detail</a>
                                        @else
                                         <a type="button" href="{{ route('driver_taxi_detail', $d->userid) }}" class="btn btn-info">Detail</a>
                                    
                                    @endif</td>
                                        
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
