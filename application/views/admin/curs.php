<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">curs</h2>
            <a href="<?php echo base_url('admin/addcurs') ?>">
                <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>Tambah Curs
                </button>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <br>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>IMG</th>
                        <th>Mata Uang</th>
                        <th class="text-right">Beli</th>
                        <th class="text-right">Jual</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach ($data as $y) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img src="<?php echo base_url('asset/img/').$y['gambar'] ?>" class="img-fluid"></td>
                        <td><?php echo $y['nama'] ?></td>
                        <td class="text-right"><?php echo $y['beli']?></td>
                        <td class="text-right"><?php echo $y['jual']?></td>
                        <td class="text-right">
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-sm" >
                                        <a href="<?= site_url('admin/editcurs/') . $y['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-sm">
                                        <a href="<?= site_url('delete/delcurs/') . $y['id'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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
