{!! Form::model($biodata, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> BIODATA </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" v-model="nama_lengkap" name="nama_lengkap" value="{{ $biodata->nama_lengkap }}" class="form-control" placeholder="Nama Lengkap" required>
                    @if ($errors->has('nama_lengkap'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_lengkap') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nama_panggilan') ? ' has-error' : '' }}">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text" name="nama_panggilan" value="{{ $biodata->nama_panggilan }}" class="form-control" placeholder="Nama Panggilan" required>
                    @if ($errors->has('nama_panggilan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_panggilan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('jenis_identitas') ? ' has-error' : '' }}">
                    <label for="jenis_identitas">Jenis Identitas</label>
                    <input type="text" name="jenis_identitas" value="{{ $biodata->jenis_identitas }}" class="form-control" placeholder="Jenis Identitas" required>
                    @if ($errors->has('jenis_identitas'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jenis_identitas') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('nomor_identitas') ? ' has-error' : '' }}">
                    <label for="nomor_identitas">Nomor Identitas</label>
                    <input type="text" name="nomor_identitas" value="{{ $biodata->nomor_identitas }}" class="form-control" placeholder="Nomor Identitas" required>
                    @if ($errors->has('nomor_identitas'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nomor_identitas') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="{{ $biodata->tempat_lahir }}" class="form-control" placeholder="Tempat Lahir" required>
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ $biodata->tanggal_lahir }}" class="form-control" placeholder="Tanggal Lahir" required>
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('negara_asal') ? ' has-error' : '' }}">
                    <label for="negara_asal">Negara Asal</label>
                    <input type="text" name="negara_asal" value="{{ $biodata->negara_asal }}" class="form-control" placeholder="Negara Asal" required>
                    @if ($errors->has('negara_asal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('negara_asal') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('suku') ? ' has-error' : '' }}">
                    <label for="suku">Suku</label>
                    <input type="text" name="suku" value="{{ $biodata->suku }}" class="form-control" placeholder="Suku" required>
                    @if ($errors->has('suku'))
                        <span class="help-block">
                            <strong>{{ $errors->first('suku') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('pendidikan_terakhir') ? ' has-error' : '' }}">
                    <label for="pendidikan_terakhir">Pendidikan Terkahir</label>
                    <input type="text" name="pendidikan_terakhir" value="{{ $biodata->pendidikan_terakhir }}" class="form-control" placeholder="Pendidikan Terkahir" required>
                    @if ($errors->has('pendidikan_terakhir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pendidikan_terakhir') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" value="{{ $biodata->pekerjaan }}" class="form-control" placeholder="Pekerjaan" required>
                    @if ($errors->has('pekerjaan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pekerjaan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('status_pernikahan') ? ' has-error' : '' }}">
                    <label for="status_pernikahan">Status Pernikahan</label>
                    {!! Form::select('status_pernikahan', \App\Biodata::statusPernikahanList(), $biodata->status_pernikahan, ['class' => 'form-control', 'placeholder' => '-- Pilih Status Pernikahan --']) !!}
                    @if ($errors->has('status_pernikahan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('status_pernikahan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
                    <label for="jumlah_anak">Jumlah Anak</label>
                    <input type="number" name="jumlah_anak" value="{{ $biodata->jumlah_anak }}" class="form-control" placeholder="Jumlah Anak">
                    @if ($errors->has('jumlah_anak'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jumlah_anak') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('jumlah_istri') ? ' has-error' : '' }}">
                    <label for="jumlah_istri">Jumlah Istri</label>
                    <input type="number" name="jumlah_istri" value="{{ $biodata->jumlah_istri }}" class="form-control" placeholder="Jumlah Istri">
                    @if ($errors->has('jumlah_istri'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jumlah_istri') }}</strong>
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
