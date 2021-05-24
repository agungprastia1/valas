<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Edit Akun</div>
            <div class="card-body">
                <form action="<?php echo base_url('edit/editakun') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach ($data as $y) { ?>
                        <input type="hidden" name="id" value="<?= $y['id'] ?>">
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Username</label>
                        <input id="cc-pament" name="user" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $y['username'] ?>">
                        <small class="text-danger"><?php echo form_error('user'); ?></small>
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Email</label>
                        <input id="cc-name" name="email" type="text" class="form-control"  aria-required="true" aria-invalid="false" value="<?= $y['email'] ?>">
                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Password</label>
                        <input id="cc-number" name="pass" type="password" class="form-control" value="<?= $y['pass'] ?>">
                        <small class="text-danger"><?php echo form_error('pass'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Confir Password</label>
                        <input id="cc-number" name="repass" type="password" class="form-control" value="<?= $y['pass'] ?>">
                        <small class="text-danger"><?php echo form_error('repass'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Gambar</label>
                        <input type="hidden" name="bg" value="<?= $y['gambar']?>">
                        <input type="file" id="file-multiple-input" name="foto" multiple="" class="form-control-file">
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Summit</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>