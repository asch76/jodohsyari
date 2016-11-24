<!-- Modal -->
<div class="modal fade" id="pendidikanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM RIWAYAT PENDIDIKAN</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="nama_sekolah">Nama Sekolah</label>
              <input type="text" name="nama_sekolah" value="" class="form-control" placeholder="Nama Sekolah" required>
          </div>
          <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" name="jurusan" value="" class="form-control" placeholder="Jurusan">
          </div>
          <div class="form-group">
              <label for="tahun_lulus">Tahun Lulus</label>
              <input type="number" name="tahun_lulus" value="" class="form-control" placeholder="Tahun Lulus" required>
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
