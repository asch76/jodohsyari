{!! Form::model($biodata, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> KONTAK & SOSIAL MEDIA </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" required>{{ $kontak->twitter }}</textarea>
            @if ($errors->has('alamat'))
                <span class="help-block">
                    <strong>{{ $errors->first('alamat') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $kontak->email }}" class="form-control" placeholder="Email" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" value="{{ $kontak->telepon }}" class="form-control" placeholder="Telepon">
                    @if ($errors->has('telepon'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telepon') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                    <label for="hp">HP</label>
                    <input type="text" name="hp" value="{{ $kontak->hp }}" class="form-control" placeholder="HP">
                    @if ($errors->has('hp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hp') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('fb') ? ' has-error' : '' }}">
                    <label for="fb">Facebook</label>
                    <input type="text" name="fb" value="{{ $kontak->fb }}" class="form-control" placeholder="Facebook">
                    @if ($errors->has('fb'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fb') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" value="{{ $kontak->twitter }}" class="form-control" placeholder="Twitter">
                    @if ($errors->has('twitter'))
                        <span class="help-block">
                            <strong>{{ $errors->first('twitter') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer text-right">
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-save"></i> SIMPAN
        </button>
    </div>
</div>

{!! Form::close() !!}
