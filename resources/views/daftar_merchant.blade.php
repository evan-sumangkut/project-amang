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
                    <form role="form" action="{{ route('daftar_merchant') }}" method="POST" enctype="multipart/form-data">
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
                            <Label>Profil Usaha:</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama Usaha" name="namausaha" type="text" autofocus>
                            </div>
                          
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama Pemilik" name="namapemilik" type="text" value="">
                            </div>

                            <div class="form-group">
                                    <select class="form-control" name="paket">
                                    <option value="">Pilih Paket</option>
                                    <option value="free">Free Promote</option>
                                    <option value="small">Small Business</option>
                                    <option value="stand">Standart Business</option>
                                    <option value="prof">Professional Business</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <select class="form-control" name="kontrak">
                                    <option value="">Lama Kontrak</option>
                                    <option value="1">1 Bulan</option>
                                    <option value="3">3 Bulan</option>
                                    <option value="6">6 Bulan</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Alamat Usaha" name="alamat" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="No HP Aktif" name="hp" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Email Aktif" name="email" type="email" value="">
                            </div>

                            <label>Jam Operasional</label>
                            <div class="form-group">
                                 <select class="form-control" name="dari">
                                    <option value="">Dari Jam</option>
                                    <option value="00:00">00:00</option>
                                    <option value="01:00">01:00</option>
                                    <option value="02:00">02:00</option>
                                    <option value="03:00">03:00</option>
                                    <option value="04:00">04:00</option>
                                    <option value="05:00">05:00</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="sampai">
                                    <option value="">Sampai Jam</option>
                                    <option value="00:00">00:00</option>
                                    <option value="01:00">01:00</option>
                                    <option value="02:00">02:00</option>
                                    <option value="03:00">03:00</option>
                                    <option value="04:00">04:00</option>
                                    <option value="05:00">05:00</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                    </select>
                            </div>
<Label>Upload Logo</label>
    <div class="form-group">
        <h5>-Mohon rename logo anda sesuai dengan nama usaha anda</h5>
        <h5>-Max Size 2MB</h5>
    <input type="file" name="logo"></input>
</div>
<Label>Hati-hati penipuan:</label>
                            <p>Pastikan anda menerima telpon/email dari nomor yang tertera:<br/>
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
