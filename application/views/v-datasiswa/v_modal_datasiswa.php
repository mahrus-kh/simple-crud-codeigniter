<!--Awal Modal Tambah Siswa-->
        <div class="modal fade" id="modal-datasiswa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Tambah Siswa</h3>                  
              </div>
              <div class="modal-body">
                <form action="#" class="form-horizontal" id="form-datasiswa">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">NIS</label>
                        <div class="col-sm-3">
                        <input type="number" class="form-control" name="nis">
                        <div class="error"></div>
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Lengkap</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
                          <div class="col-sm-7">
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="L" id="L">Laki - Laki
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="jk" value="P" id="P">Perempuan
                              </label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="tmpt_lahir">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
                          <div class="col-sm-4">
                                <input type="text" class="form-control picker_tgl_lahir" id="picker_tgl_lahir" name="tgl_lahir" readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Alamat Lengkap</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Ayah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_ayah">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Ibu</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_ibu">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act" onclick="save()">SIMPAN</button>
              </div>
            </div>
          </div>
        </div>
    <!--Akhir Modal Tambah Siswa-->
