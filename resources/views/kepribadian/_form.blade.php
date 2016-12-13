{!! Form::model($kepribadian, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> KEPRIBADIAN </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('profil') ? ' has-error' : '' }}">
            <label for="profil">Profil Singkat</label>
            <textarea name="profil" class="form-control" placeholder="Profil Singkat" rows="4" required>{{ $kepribadian->profil }}</textarea>
            @if ($errors->has('profil'))
                <span class="help-block">
                    <strong>{{ $errors->first('profil') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('karakter_positif') ? ' has-error' : '' }}">
            <label for="karakter_positif">Karakter Positif</label>
            <textarea name="karakter_positif" class="form-control" placeholder="Karakter Positif" rows="4">{{ $kepribadian->karakter_positif }}</textarea>
            @if ($errors->has('karakter_positif'))
                <span class="help-block">
                    <strong>{{ $errors->first('karakter_positif') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('karakter_negatif') ? ' has-error' : '' }}">
            <label for="karakter_negatif">Karakter Negatif</label>
            <textarea name="karakter_negatif" class="form-control" placeholder="Karakter Negatif" rows="4">{{ $kepribadian->karakter_negatif }}</textarea>
            @if ($errors->has('karakter_negatif'))
                <span class="help-block">
                    <strong>{{ $errors->first('karakter_negatif') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="panel-footer text-right">
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-save"></i> SIMPAN
        </button>
    </div>
</div>

{!! Form::close() !!}
