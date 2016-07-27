<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Pendaftaran</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nama lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label>No Telp</label>
            <input type="tel" class="form-control" name="notelp" placeholder="No Telepon" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat" required rows="3"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Masuk Member</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
        </div>
      </form>
    </div>
  </div>
</div>