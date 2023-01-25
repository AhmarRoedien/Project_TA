<div class="container-fluid">
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row">
                            <input type="hidden" value="<?php echo $barang->id_brg ?>" name="id_brg">
                            <div class="form-group col-md-6">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_brg" class="form-control"
                                    value="<?php echo $barang->kode_brg ?>">
                                <div class="text-danger"><?php echo form_error('id_brg'); ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" name="nama_brg" class="form-control"
                                    value="<?php echo $barang->nama_brg ?>">
                                <div class="text-danger"><?php echo form_error('nama_brg'); ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <input type="text" name="keterangan" class="form-control"
                                    value="<?php echo $barang->keterangan ?>">
                                <div class="text-danger"><?php echo form_error('keterangan'); ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <select class="custom-select" name="id_kategori">
                                    <option value="">Pilih</option>
                                    <?php foreach($kategori as $ktg):?>
                                    <?php if ($ktg->id_kategori == $barang->id_kategori) : ?>
                                    <option selected value="<?php echo $ktg-> id_kategori ?>">
                                        <?php echo $ktg-> nama_kategori ?>
                                    </option>
                                    <?php else : ?>
                                    <option value="<?php echo $ktg-> id_kategori ?>">
                                        <?php echo $ktg-> nama_kategori ?>
                                    </option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class="text-danger"><?php echo form_error('id_kategori'); ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Stock</label>
                                <input type="text" name="stok" class="form-control" value="<?php echo $barang->stok ?>">
                                <div class="text-danger"><?php echo form_error('stok'); ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <input type="text" name="harga" class="form-control" placeholder="Rp. 10,000"
                                    value="<?php echo $barang->harga ?>">
                                <div class="text-danger"><?php echo form_error('harga'); ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="<?php echo base_url(); ?>admin/data_barang" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Content Row -->
</div>