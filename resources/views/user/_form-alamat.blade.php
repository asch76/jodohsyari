<!-- Modal -->
<div class="modal fade" id="alamatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM ALAMAT & KONTAK</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" value="" class="form-control" placeholder="Alamat" rows="4" required></textarea>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" value="" class="form-control" placeholder="Email" required>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="telepon">Telepon</label>
                      <input type="text" name="telepon" value="" class="form-control" placeholder="Telepon">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="hp">HP</label>
                      <input type="text" name="hp" value="" class="form-control" placeholder="HP">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="facebook">Facebook</label>
                      <input type="text" name="facebook" value="" class="form-control" placeholder="Facebook">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="twitter">Twitter</label>
                      <input type="text" name="twitter" value="" class="form-control" placeholder="Twitter">
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
