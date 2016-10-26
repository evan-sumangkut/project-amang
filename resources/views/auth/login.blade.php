@extends('layouts.login')
@section('login')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            
                <div class="login-panel panel panel-default">
                <div style="text-align:center">
                <img src="{{ asset('file/images/amangojek.jpg')}}" width="150"  >
                </div>
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">


 <fieldset>
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="ID Driver" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                        </div>
    

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                                <input id="password" type="password"  placeholder="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    
                        </div>

                       
                                        <input type="checkbox" name="remember"> Remember Me
                               <br/>     
                               <br/>
                        <div class="form-group">
             
                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    Login
                                </button>

{{--                                 <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> --}}
                          
                        </div>
                            <div class="form-group" style="text-align:center">
                                    Ingin menjadi mitra ? <a href={{ url('/daftar') }}>Klik Register</a>
                            </div>
                    </form>
</fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection