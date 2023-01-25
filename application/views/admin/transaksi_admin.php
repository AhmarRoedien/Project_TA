<div class="container-fluid">
    <div class="row">

        <!-- data produk -->
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger">All Product</h6>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash_barang') ?>">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;foreach ($barang as $brg): ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $brg->nama_brg ?></td>
                                    <td class="text-center"><?php echo $brg->stok ?></td>
                                    <td>Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>transaksi_admin/tambah_keranjang/<?php echo $brg->id_brg ?>"
                                            class="btn btn-sm btn-primary"><i class="fas fa-cart-arrow-down"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>