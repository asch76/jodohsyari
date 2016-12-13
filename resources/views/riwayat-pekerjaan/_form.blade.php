{!! Form::model($pekerjaan, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> RIWAYAT PEKERJAAN </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('perusahaan') ? ' has-error' : '' }}">
            <label for="perusahaan">Perusahaan</label>
            <input type="text" name="perusahaan" value="{{ $pekerjaan->perusahaan }}" class="form-control" placeholder="Perusahaan" required>
            @if ($errors->has('perusahaan'))
                <span class="help-block">
                    <strong>{{ $errors->first('perusahaan') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" value="{{ $pekerjaan->jabatan }}" class="form-control" placeholder="Jabatan" required>
            @if ($errors->has('jabatan'))
                <span class="help-block">
                    <strong>{{ $errors->first('jabatan') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('dari_tahun') ? ' has-error' : '' }}">
            <label for="dari_tahun">Dari Tahun</label>
            <input type="number" name="dari_tahun" value="{{ $pekerjaan->dari_tahun }}" class="form-control" placeholder="Dari Tahun" required>
            @if ($errors->has('dari_tahun'))
                <span class="help-block">
                    <strong>{{ $errors->first('dari_tahun') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('sampai_tahun') ? ' has-error' : '' }}">
            <label for="sampai_tahun">Sampai Tahun</label>
            <input type="number" name="sampai_tahun" value="{{ $pekerjaan->sampai_tahun }}" class="form-control" placeholder="Sampai Tahun" required>
            @if ($errors->has('sampai_tahun'))
                <span class="help-block">
                    <strong>{{ $errors->first('sampai_tahun') }}</strong>
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
