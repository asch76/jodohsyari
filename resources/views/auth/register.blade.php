@extends('layouts.app')

@section('content')
<br><br>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                FORM REGISTER
            </div>
            {!! Form::open(['class' => 'form-horizontal', 'method' => 'POST']) !!}
                <div class="panel-body">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label col-sm-4">Username</label>
                        <div class="col-sm-8">
                            <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label col-sm-4">Email</label>
                        <div class="col-sm-8">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label col-sm-4">Password</label>
                        <div class="col-sm-8">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password_confirmation" class="control-label col-sm-4">Konfirmasi Password</label>
                        <div class="col-sm-8">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Konfirmasi Password">

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="foto" class="control-label col-sm-4">Foto</label>
                        <div class="col-sm-8">
                            <input type="file" name="foto" class="note-image-input form-control" placeholder="Foto">
                        </div>
                    </div>
                </div>

                <div class="panel-footer text-center">
                    <button type="sumbit" class="btn btn-primary">
                        <i class="fa fa-edit"></i> REGISTER
                    </button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<br><br>

@endsection
