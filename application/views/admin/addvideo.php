<div class="row">
	<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Video</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?php echo base_url('add/addvideo') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul Video</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="judul" placeholder="masukkan Judul video" class="form-control">
                        <!-- <small class="text-danger"><?php echo form_error('judul'); ?></small> -->
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-multiple-input" class=" form-control-label">Pilih Pideo</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-multiple-input" name="video" multiple="" class="form-control-file">
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