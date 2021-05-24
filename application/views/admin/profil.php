<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Profil</h2>
            <a href="<?php echo base_url('admin/addakun') ?>">
                <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>Tambah Akun
                </button>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <br>
        <h3 >Akun</h3> <br>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Passowd</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach ($data as $y) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="<?php echo base_url('asset/img/').$y['gambar'] ?>" class="img-flluid"></td>
                    <td><?php echo $y['email'] ?></td>
                    <td ><?php echo $y['username']?></td>
                    <td ><?php echo md5($y['pass'])?></td>
                    <td >
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-sm" >
                                    <a href="<?= site_url('admin/editakun/') . $y['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-sm">
                                    <a href="<?= site_url('delete/delakun/') . $y['id'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
             <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <br>
        <h3 >Profil</h3> <br>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach ($profil as $y) { ?>
                <tr>
                    <td><?php echo $y['nama'] ?></td>
                    <td ><img src="<?php echo base_url('asset/img/'). $y['logo']?>" class="img-fluid" width="65%"></td>
                    <td class="text-center">
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('admin/editprofil/') . $y['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
             <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
