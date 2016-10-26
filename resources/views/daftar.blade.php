@extends('layouts.login')

@include('plugin.datepicker')

@section('login')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        	<br/>
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center"\>
                    <h3 class="panel-title">Pilih pendaftaran</h3>
                </div>
                <div class="panel-body">
                   <a href="{{ url('/daftar/ojek')}}" class="btn btn-lg btn-warning btn-block">Daftar Driver</a>
                   <a href="{{ url('/daftar/merchant')}}" class="btn btn-lg btn-info btn-block">Daftar Merchant</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection