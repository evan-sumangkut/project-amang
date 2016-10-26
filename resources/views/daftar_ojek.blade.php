@extends('layouts.login')

@include('plugin.datepicker')

@section('login')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        	<br/>
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center"\>
                    <h3 class="panel-title">Mohon lengkapi formulir untuk menjadi mitra kami</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{ route('daftar_ojek') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <fieldset>
                        	@if(Session::has('error'))
<h3>{{Session::get('error') }}</h3>

@endif
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
 @if (Session::has('pesan'))
        <h4 style="color:green;font-weight:bold">{{ Session::get('pesan') }}</h4>
        <br/>
        @endif
                        	<Label>Biodata diri:</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama lengkap" name="namalengkap" type="text" autofocus>
                            </div>
                          
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama panggilan" name="namapanggilan" type="text" value="">
                            </div>

                            <div class="form-group">
									<select class="form-control" name="driver">
									<option value="">Jenis Driver</option>
									<option value="ojek">Ojek</option>
									<option value="taxi">Taxi</option>
									</select>
                            </div>
                            <div class="form-group">
							&nbsp&nbsp<input type="radio" name="jk" value="Laki-laki"/>Laki-laki &nbsp&nbsp&nbsp
							<input type="radio" name="jk" value="Perempuan"/>Perempuan<br/>
                            </div>
                            <div class="form-group">
                            	<input class="form-control" placeholder="Tempat Lahir" name="tempatlahir" type="text" value="">
                            </div>
                            <div class="form-group">
									<div class='input-group date' id='datepicker' >
									<input type='text' class="form-control" placeholder="Tanggal Lahir" name="tanggallahir"/>
									<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
									</span>
									</div>
                            </div>

							<div class="form-group">
								<input class="form-control" placeholder="No KTP" name="ktp" type="text" value="">
							</div>

							<div class="form-group">
                                <input class="form-control" placeholder="No SIM" name="sim" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Alamat sesuai KTP" name="alamat" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="No. HP aktif" name="hp" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Email aktif" name="email" type="email" value="">
                            </div>

                            <Label>Data BANK:</label>

                            	<div class="form-group">
									<select class="form-control" name="bank" value="Jenis Driver">
									<option value="">Nama BANK</option>
									<option value="bca">BCA</option>
									<option value="bni">BNI</option>
									<option value="bri">BRI</option>
									<option value="mandiri">Mandiri</option>
									<option value="bpd">BPD Bank Kalsel</option>
									</select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="No. Rekening" name="norekening" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama pemilik rekening" name="namarekening" type="text" value="">
                            </div>

                            <Label>Dokumen Jaminan:</label>
                            	<div class="form-group">
									<select class="form-control" name="jaminan">
									<option value="">Jenis Jaminan</option>
									<option value="bk">Buku Nikah</option>
									<option value="ijazah">Ijazah Terakhir</option>
									<option value="akta">Akta Lahir</option>
									<option value="kk">Kartu Keluarga</option>
									<option value="lainnya">Dokumen Lainnya</option>
									</select>
                            </div>
<Label>Hati-hati penipuan:</label>
                        	<p>PT. Berkah Kreasi Anak Banua tidak memungut biaya pendaftaran dan pastikan anda menerima telpon/email dari nomor yang tertera:<br/>
                        		Email : info@amangojek.co.id<br/>
                        		Nomor Hp: 082255816611</p>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Daftar</button>
                        <br/>
                        <Label>Keterangan:</label>
                        <p>1.Panggilan interview akan dihubungi melalui telpon/email
                        	<br/>
                        	2.Lokasi interview di kantor amang ojek Jl. Padat Karya komplek darma bakti lestari 1 no.2 kelurahan sungai andai kota Banjarmasin
                        	<br/>
                        	3.Dokumen yang harus dibawa saat interview adalah dokumen jaminan asli yang telah dipilih di form pendaftaran (pilih salah satu)
                        	</p>
                        </div>
                        
                            </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection