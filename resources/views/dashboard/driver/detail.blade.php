@extends('layouts.admin')

@include('plugin.table')

@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Driver {{ $header }} Detail</h1>
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
                           		<td>Nama Lengkap</td>
                           		<td>&nbsp: {{$driver->namalengkap}}</td>
                           	</tr>
                           	<tr>
                           		<td>Nama Panggilan</td>
                           		<td>&nbsp: {{$driver->namapanggilan}}</td>
                           	</tr>
                           	<tr>
                           		<td>Driver</td>
                           		<td>&nbsp: {{$driver->driver}}</td>
                           	</tr>
                           	<tr>
                           		<td>Jenis Kelamin</td>
                           		<td>&nbsp: {{$driver->jk}}</td>
                           	</tr>
                           	<tr>
                           		<td>Tempat, Tanggal Lahir</td>
                           		<td>&nbsp: {{$driver->tempatlahir}}, {{$driver->tanggallahir}}</td>
                           	</tr>
                           	<tr>
                           		<td>No. KTP</td>
                           		<td>&nbsp: {{$driver->ktp}}</td>
                           	</tr>
                           	<tr>
                           		<td>No. SIM</td>
                           		<td>&nbsp: {{$driver->sim}}</td>
                           	</tr>
                           	<tr>
                           		<td>Alamat</td>
                           		<td>&nbsp: {{$driver->alamat}}</td>
                           	</tr>
                           	<tr>
                           		<td>No. HP</td>
                           		<td>&nbsp: {{$driver->hp}}</td>
                           	</tr>
                           	<tr>
                           		<td>Email</td>
                           		<td>&nbsp: {{$driver->email}}</td>
                           	</tr>
                           	<tr>
                           		<td>Bank</td>
                           		<td>&nbsp: {{$driver->bank}}</td>
                           	</tr>
                           	<tr>
                           		<td>No. Rekening</td>
                           		<td>&nbsp: {{$driver->norekening}}</td>
                           	</tr>
                           	<tr>
                           		<td>Nama Rekening</td>
                           		<td>&nbsp: {{$driver->namarekening}}</td>
                           	</tr>
                           	<tr>
                           		<td>Jaminan</td>
                           		<td>&nbsp: {{$driver->jaminan}}</td>
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
