{!! Form::model($fisik, ['class' => 'form-vertical', 'method' => $method, 'url' => $url]) !!}

<div class="panel panel-default">
    <div class="panel-heading"> FISIK & KESEHATAN </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('berat_badan') ? ' has-error' : '' }}">
                    <label for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" name="berat_badan" value="{{ $fisik->berat_badan }}" class="form-control" placeholder="Berat Badan">
                    @if ($errors->has('berat_badan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('berat_badan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('tinggi_badan') ? ' has-error' : '' }}">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" name="tinggi_badan" value="{{ $fisik->tinggi_badan }}" class="form-control" placeholder="Tinggi Badan">
                    @if ($errors->has('tinggi_badan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tinggi_badan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('golongan_darah') ? ' has-error' : '' }}">
                    <label for="golongan_darah">Golongan Darah</label>
                    {!! Form::select('golongan_darah', \App\Fisik::golonganDarahList(), $fisik->golongan_darah, ['class' => 'form-control', 'placeholder' => 'Golongan Darah']) !!}
                    @if ($errors->has('golongan_darah'))
                        <span class="help-block">
                            <strong>{{ $errors->first('golongan_darah') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('warna_kulit') ? ' has-error' : '' }}">
                    <label for="warna_kulit">Warna Kulit</label>
                    {!! Form::select('warna_kulit', \App\Fisik::golonganDarahList(), $fisik->warna_kulit, ['class' => 'form-control', 'placeholder' => 'Warna Kulit']) !!}
                    @if ($errors->has('warna_kulit'))
                        <span class="help-block">
                            <strong>{{ $errors->first('warna_kulit') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group{{ $errors->has('riwayat_penyakit') ? ' has-error' : '' }}">
            <label for="alamat">Riwayat Penyakit</label>
            <textarea name="alamat" value="{{ $fisik->riwayat_penyakit }}" class="form-control" placeholder="Riwayat Penyakit" rows="3"></textarea>
            @if ($errors->has('riwayat_penyakit'))
                <span class="help-block">
                    <strong>{{ $errors->first('riwayat_penyakit') }}</strong>
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
