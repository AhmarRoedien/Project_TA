<div class="container-fluid">
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>ID Product</label>
                                <input type="text" name="id_brg" class="form-control">
                                <div class="text-danger"><?php echo form_error('id_brg'); ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_brg" class="form-control">
                                <div class="text-danger"><?php echo form_error('kode_brg'); ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" name="nama_brg" class="form-control" placeholder="">
                                <div class="text-danger"><?php echo form_error('nama_brg'); ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <select class="custom-select" name="id_kategori">
                                    <option value="">Pilih</option>
                                    <?php foreach ($kategori as $ktg) : ?>
                                    <option value="<?php echo $ktg-> id_kategori ?>"><?php echo $ktg-> nama_kategori ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Stock</label>
                                <input type="text" name="stok" class="form-control">
                                <div class="text-danger"><?php echo form_error('stok'); ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <input type="text" name="harga" class="form-control" placeholder="Rp. 10,000">
                                <div class="text-danger"><?php echo form_error('harga'); ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" name="keterangan"
                                    id="exampleFormControlTextarea1"></textarea>
                                <div class="text-danger"><?php echo form_error('keterangan'); ?></div>
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
</div>