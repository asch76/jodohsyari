<!-- Modal -->
<div class="modal fade" id="kepribadianModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      {!! Form::open() !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">FORM KEPRIBADIAN</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="profile">Profil Singkat</label>
              <textarea name="profile" value="" class="form-control" placeholder="Profil Singkat" rows="4" required></textarea>
          </div>
          <div class="form-group">
              <label for="karakter_positif">Karakter Positif</label>
              <textarea name="karakter_positif" value="" class="form-control" placeholder="Karakter Positif" rows="4"></textarea>
          </div>
          <div class="form-group">
              <label for="karakter_negatif">Karakter Negatif</label>
              <textarea name="karakter_negatif" value="" class="form-control" placeholder="Karakter Negatif" rows="4"></textarea>
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
