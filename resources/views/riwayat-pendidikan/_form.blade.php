{!! Form::model($pendidikan, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> RIWAYAT PENDIDIKAN </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('nama_sekolah') ? ' has-error' : '' }}">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" value="{{ $pendidikan->nama_sekolah }}" class="form-control" placeholder="Nama Sekolah" required>
            @if ($errors->has('nama_sekolah'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama_sekolah') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" value="{{ $pendidikan->jurusan }}" class="form-control" placeholder="Jurusan">
            @if ($errors->has('jurusan'))
                <span class="help-block">
                    <strong>{{ $errors->first('jurusan') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('tahun_lulus') ? ' has-error' : '' }}">
            <label for="tahun_lulus">Tahun Lulus</label>
            <input type="number" name="tahun_lulus" value="{{ $pendidikan->tahun_lulus }}" class="form-control" placeholder="Tahun Lulus" required>
            @if ($errors->has('tahun_lulus'))
                <span class="help-block">
                    <strong>{{ $errors->first('tahun_lulus') }}</strong>
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
