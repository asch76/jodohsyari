<!-- Modal -->
<div class="modal fade" id="keluargaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM KELUARGA</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nama_ayah">Nama Ayah</label>
                      <input type="text" name="nama_ayah" value="" class="form-control" placeholder="Nama Ayah" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nama_ibu">Nama Ibu</label>
                      <input type="text" name="nama_ibu" value="" class="form-control" placeholder="Nama Ibu" required>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="jumlah_saudara">Jumlah Saudara</label>
                      <input type="number" name="jumlah_saudara" value="" class="form-control" placeholder="Jumlah Saudara" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="anak_ke">Anak Ke</label>
                      <input type="number" name="anak_ke" value="" class="form-control" placeholder="Anak Ke" required>
                  </div>
              </div>
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
