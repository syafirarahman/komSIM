@extends('layouts.app')

@section('content')
<div class="container">
        <div class="login-box logon">
            <!-- /.login-logo -->
            <div class="login-box-body logon">
                <p class="login-box-msg">
                    <img src="{{asset('asset/dist/img/resetPass.png')}}" alt="">
                </p>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control logon" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat logon">
                                    Sent Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
