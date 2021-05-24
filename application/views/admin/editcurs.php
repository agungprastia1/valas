<div class="row">
	<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit Curs</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?php echo base_url('edit/editcurs') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            	<?php foreach ($data as $y) { ?>
            		<input type="hidden" name="id"  value="<?= $y['id']?>">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mata Uang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="nama" placeholder="Kode" class="form-control" value="<?= $y["nama"] ?>">
                        <small><?php echo form_error('nama'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Nilai Beli</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="beli" placeholder="Harga Beli" class="form-control" value="<?= $y["beli"] ?>">
                        <small class="text-danger"><?php echo form_error('beli'); ?></small>
                        <small class="help-block form-text">Masukkan Angka saja</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Nilai Jual</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="jual" placeholder="Harga Jual" class="form-control" value="<?= $y["jual"] ?>">
                        <small class="text-danger"><?php echo form_error('jual'); ?></small>
                        <small class="help-block form-text">Masukkan Angka saja</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-multiple-input" class=" form-control-label">Bendera</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" name="bg" value="<?= $y['gambar']?>">
                        <input type="file" id="file-multiple-input" name="foto" multiple="" class="form-control-file">
                        <small class="text-danger"><?php echo form_error('foto'); ?></small>
                    </div>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary btn-sm"> Submit </button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>
</div>