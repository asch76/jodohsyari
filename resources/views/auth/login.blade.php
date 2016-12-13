@extends('layouts.app')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="panel panel-default text-center">
                    <div class="panel-heading">FORM LOGIN</div>
                    <div class="panel-body">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Username/Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <input type="hidden" name="remember" value="1">

                        <!-- <div class="form-group">
                            <div class="checkbox">
                                <label> <input type="checkbox" name="remember"> Ingat Saya </label>
                            </div>
                        </div> -->
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary form-control">
                            <i class="fa fa-sign-in"></i> LOGIN
                        </button>
                        <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa Password?</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
