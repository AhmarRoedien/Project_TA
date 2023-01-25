<div class="container-fluid">

    <div class="row">
        <div class="col-xl-7 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger">DATA KATEGORI BARANG</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>ID KATEGORI</th>
                                    <th>NAMA KATEGORI</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no = 1;foreach ($kategori as $ktg) : ?>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $ktg->id_kategori; ?></td>
                                    <td><?php echo $ktg->nama_kategori; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>admin/kategori_barang/edit_aksi/<?php echo $ktg->id_kategori ?>"
                                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> |
                                        <a href="<?php echo base_url(); ?>admin/kategori_barang/hapus_aksi/<?php echo $ktg->id_kategori ?>"
                                            class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-danger">ADD NEW CATEGORY<h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?php echo base_url(). 'admin/kategori_barang/tambah_aksi' ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" name="id_kategori" class="form-control" placeholder="ID">
                                <div class="text-danger"><?php echo form_error('id_kategori'); ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" name="nama_kategori" class="form-control" placeholder="New Category">
                                <div class="text-danger"><?php echo form_error('nama_kategori'); ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>