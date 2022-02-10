
<div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Secari</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/kehadiran/" enctype="multipart/form-data">
            @csrf
                    <input type="hidden" name="posyandu" value="{{auth()->user()->posyandu}}">
                    <div class="form-group">
                      <label class="text-black font-w500">NIK</label>
                      <input type="text" class="form-control" name="nik" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Usia (BL)</label>
                      <input type="text" class="form-control" name="usia" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Tinggi (CM)</label>
                      <input type="text" class="form-control" name="tinggi" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Berat (KG)</label>
                      <input type="text" class="form-control" name="berat" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">NTOB</label>
                      <input type="text" class="form-control" name="ntob">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Imunisasi</label>
                      <input type="text" class="form-control" name="imunisasi">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Ket</label>
                      <input type="text" class="form-control" name="keterangan">
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
          </form>
        </div>
      </div>
    </div>
</div>