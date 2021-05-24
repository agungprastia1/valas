<div class="row">
	<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Curs</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?php echo base_url('add/addcurs') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mata Uang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="nama" placeholder="Kode" class="form-control">
                        <small class="text-danger"><?php echo form_error('nama'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Nilai Beli</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="beli" placeholder="Harga Beli" class="form-control">
                        <small class="text-danger"><?php echo form_error('beli'); ?></small>
                        <small class="help-block form-text">Masukkan Angka saja</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Nilai Jual</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="jual" placeholder="Harga Jual" class="form-control">
                        <small class="text-danger"><?php echo form_error('jual'); ?></small>
                        <small class="help-block form-text">Masukkan Angka saja</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-multiple-input" class=" form-control-label">Bendera</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-multiple-input" name="foto" multiple="" class="form-control-file">
                        <small class="text-danger"><?php echo form_error('foto'); ?></small>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary btn-sm"> Submit </button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>
</div>