@extends('layouts.admin')

@include('plugin.table')

@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Merchant Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Biodata Driver
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <table>
                           	<tr>
                           		<td>Nama Usaha</td>
                           		<td>&nbsp: {{$merchant->namausaha}}</td>
                           	</tr>
                           	<tr>
                           		<td>Jenis Paket</td>
                           		<td>&nbsp: {{$merchant->paket}}</td>
                           	</tr>
                           	<tr>
                           		<td>Lama Kontrak</td>
                           		<td>&nbsp: {{$merchant->kontrak}}</td>
                           	</tr>
                           	<tr>
                           		<td>Alamat Usaha</td>
                           		<td>&nbsp: {{$merchant->alamat}}</td>
                           	</tr>
                           	<tr>
                           		<td>No. HP</td>
                           		<td>&nbsp: {{$merchant->hp}}</td>
                           	</tr>
                           	<tr>
                           		<td>Email</td>
                           		<td>&nbsp: {{$merchant->email}}</td>
                           	</tr>
                           	<tr>
                           		<td>Jam Beroperasi</td>
                           		<td>&nbsp: {{$merchant->dari}}-{{$merchant->sampai}}</td>
                           	</tr>
                           	<tr>
                           		<td>Logo</td>
                           		<td>&nbsp: <img src="{{ asset($merchant->logo)}}" width="150"/></td>
                           	</tr>
                           	<tr>
                           		<td>Download Logo</td>
                           		<td>&nbsp: <a href="{{ asset($merchant->logo)}}" class="btn btn-info">Klik here</a></td>
                           	</tr>

                           
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            </div>

 @endsection
