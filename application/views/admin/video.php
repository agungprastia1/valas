<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Video</h2>
            <a href="<?php echo base_url('admin/addvideo') ?>">
                <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>Tambah Video
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
                    <th>Judul Vidio</th>
                    <th>Vidio</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach ($data as $y) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $y['nama'] ?></td>
                    <td ><?php echo $y['vidio']?></td>
                    <td >
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('admin/editvid/') . $y['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('delete/delvid/') . $y['id'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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
