<!-- Modal -->
<div class="modal fade" id="fisikModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM FISIK & KESEHATAN</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="berat_badan">Berat Badan (kg)</label>
                      <input type="number" name="berat_badan" value="" class="form-control" placeholder="Berat Badan">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="tinggi_badan">Tinggi Badan (cm)</label>
                      <input type="number" name="tinggi_badan" value="" class="form-control" placeholder="Tinggi Badan">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="golongan_darah">Golongan Darah</label>
                      {!! Form::select('golongan_darah', \App\User::golonganDarahList(), '', ['class' => 'form-control', 'placeholder' => '-Golongan Darah-']) !!}
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="warna_kulit">Warna Kulit</label>
                      {!! Form::select('warna_kulit', \App\User::warnaKulitList(), '', ['class' => 'form-control', 'placeholder' => '-Warna Kulit-']) !!}
                  </div>
              </div>
          </div>

          <div class="form-group">
              <label for="alamat">Riwayat Penyakit</label>
              <textarea name="alamat" value="" class="form-control" placeholder="Riwayat Penyakit" rows="3"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="sumbit" class="btn btn-primary">Simpan</button>
      </div>

    </div>
    {!! Form::close() !!}
  </div>
</div>
