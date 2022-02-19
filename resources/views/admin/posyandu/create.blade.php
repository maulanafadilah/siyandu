
<div class="modal fade" id="addPosyandu">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Posyandu</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/posyandu/" enctype="multipart/form-data">
            @csrf
                    <div class="form-group">
                      <label class="text-black font-w500">Nama Posyandu</label>
                      <input type="text" class="form-control" name="posyandu" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Kode Registrasi</label>
                      <input type="text" class="form-control" name="kode" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
          </form>
        </div>
      </div>
    </div>
</div>