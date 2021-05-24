<div class="row">
	<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit Profil</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?php echo base_url('edit/editprof') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <?php foreach ($data as $y) { ?>
                    <input type="hidden" name="id" value="<?php echo $y['id'] ?>">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="judul" placeholder="masukkan Judul video" class="form-control" value="<?php echo $y['nama'] ?>">
                        <small class="text-danger"><?php echo form_error('judul'); ?></small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-multiple-input" class=" form-control-label">Pilih Gambar</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" name="bg" value="<?= $y['logo']?>">
                        <input type="file" id="file-multiple-input" name="foto" multiple="" class="form-control-file">
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