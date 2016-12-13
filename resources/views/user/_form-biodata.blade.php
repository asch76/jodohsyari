<!-- Modal -->
<div class="modal fade" id="biodataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM BIODATA</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" value="" class="form-control" placeholder="Nama Lengkap" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nama_panggilan">Nama Panggilan</label>
                      <input type="text" name="nama_panggilan" value="" class="form-control" placeholder="Nama Panggilan" required>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="jenis_identitas">Jenis Identitas</label>
                      <input type="text" name="jenis_identitas" value="" class="form-control" placeholder="Jenis Identitas" required>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="nomor_identitas">Nomor Identitas</label>
                      <input type="text" name="nomor_identitas" value="" class="form-control" placeholder="Nomor Identitas" required>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" value="" class="form-control" placeholder="Tempat Lahir" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" value="" class="form-control" placeholder="Tanggal Lahir" required>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="negara_asal">Negara Asal</label>
                      <input type="text" name="negara_asal" value="" class="form-control" placeholder="Negara Asal" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="suku">Suku</label>
                      <input type="text" name="suku" value="" class="form-control" placeholder="Suku" required>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="pendidikan_terakhir">Pendidikan Terkahir</label>
                      <input type="text" name="pendidikan_terakhir" value="" class="form-control" placeholder="Pendidikan Terkahir" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" name="pekerjaan" value="" class="form-control" placeholder="Pekerjaan" required>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="status_pernikahan">Status Pernikahan</label>
                      {!! Form::select('status_pernikahan', \App\User::statusPernikahan(), '', ['class' => 'form-control', 'placeholder' => '-Status Pernikahan-', 'required' => 'required']) !!}
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="jumlah_anak">Jumlah Anak</label>
                      <input type="number" name="jumlah_anak" value="" class="form-control" placeholder="Jumlah Anak">
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
