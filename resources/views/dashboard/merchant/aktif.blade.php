@extends('layouts.admin')

@include('plugin.table')

@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Merchant Aktif</h1>
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
                            Kelola Merchant
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                        <th>Nama Usaha</th>
                                        <th>Paket</th>
                                        <th>Lama Kontrak</th>
                                        <th>No. HP</th>
                                        <th>Email</th>
                                        <th colspan="3" style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($merchant as $m)
                                    <tr>
                                        <td width="60px" style="text-align: center" >{{ $no++ }}</td>
                                        <td>dummy</td>
                                        <td>{{ $m->namausaha }}</td>
                                        <td>{{ $m->paket }}</td>
                                        <td>{{ $m->kontrak }} Bulan</td>
                                        <td>{{ $m->hp }}</td>
                                        <td>{{ $m->email }}</td>
                                        <td width="50"><a type="button" href="{{ route('merchant_detail', $m->id) }}" class="btn btn-info">Detail</a>
                                       </td>
                                         <td width="50"><form action="{{ route('merchant_aksi', $m->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="status" value="0">
                        <input type="submit" value="Pending" class="btn btn-warning">
                        </form></td>
                               <td width="50"><form action="{{ route('merchant_aksi', $m->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="status" value="2">
                        <input type="submit" value="Non Aktif" class="btn btn-danger">
                        </form></td>
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
