<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Tambah Akun</div>
            <div class="card-body">
                <form action="<?php echo base_url('add/addakun') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Username</label>
                        <input id="cc-pament" name="user" type="text" class="form-control" aria-required="true" aria-invalid="false">
                        <small class="text-danger"><?php echo form_error('user'); ?></small>
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Email</label>
                        <input id="cc-name" name="email" type="text" class="form-control"  aria-required="true" aria-invalid="false">
                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Password</label>
                        <input id="cc-number" name="pass" type="password" class="form-control" >
                        <small class="text-danger"><?php echo form_error('pass'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Confir Password</label>
                        <input id="cc-number" name="repass" type="password" class="form-control" >
                        <small class="text-danger"><?php echo form_error('repass'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Gambar</label>
                        <input type="file" id="file-multiple-input" name="foto" multiple="" class="form-control-file">
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Summit</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>