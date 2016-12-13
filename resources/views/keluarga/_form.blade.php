{!! Form::model($keluarga, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> INFORMASI KELUARGA </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nama_ayah') ? ' has-error' : '' }}">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" name="nama_ayah" value="{{ $keluarga->nama_ayah }}" class="form-control" placeholder="Nama Ayah" required>
                    @if ($errors->has('nama_ayah'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_ayah') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nama_ibu') ? ' has-error' : '' }}">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" name="nama_ibu" value="{{ $keluarga->nama_ibu }}" class="form-control" placeholder="Nama Ibu" required>
                    @if ($errors->has('nama_ibu'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_ibu') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('julah_saudara') ? ' has-error' : '' }}">
                    <label for="jumlah_saudara">Jumlah Saudara</label>
                    <input type="number" name="jumlah_saudara" value="{{ $keluarga->jumlah_saudara }}" class="form-control" placeholder="Jumlah Saudara" required>
                    @if ($errors->has('jumlah_saudara'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jumlah_saudara') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('anak_ke') ? ' has-error' : '' }}">
                    <label for="anak_ke">Anak Ke</label>
                    <input type="number" name="anak_ke" value="{{ $keluarga->anak_ke }}" class="form-control" placeholder="Anak Ke" required>
                    @if ($errors->has('anak_ke'))
                        <span class="help-block">
                            <strong>{{ $errors->first('anak_ke') }}</strong>
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
