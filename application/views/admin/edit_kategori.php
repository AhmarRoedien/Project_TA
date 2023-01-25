<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Category</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="for-group">
                    <div class="col-md-6">
                        <input type="hidden" name="id_kategori" class="form-control"
                            value="<?php echo $kategori->id_kategori ?>">
                    </div>
                </div>
                <div class="for-group">
                    <div class="col-md-6">
                        <label class="mr-1">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control"
                            value="<?php echo $kategori->nama_kategori ?>">
                        <div class="text-danger"><?php echo form_error('nama_kategori'); ?></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>