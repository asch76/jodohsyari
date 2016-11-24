<!-- Modal -->
<div class="modal fade" id="pekerjaanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM RIWAYAT PEKERJAAN</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="perusahaan">Perusahaan</label>
              <input type="text" name="perusahaan" value="" class="form-control" placeholder="Perusahaan" required>
          </div>
          <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" name="jabatan" value="" class="form-control" placeholder="Jabatan" required>
          </div>
          <div class="form-group">
              <label for="dari_tahun">Dari Tahun</label>
              <input type="number" name="dari_tahun" value="" class="form-control" placeholder="Dari Tahun" required>
          </div>
          <div class="form-group">
              <label for="sampai_tahun">Sampai Tahun</label>
              <input type="number" name="sampai_tahun" value="" class="form-control" placeholder="Sampai Tahun" required>
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
