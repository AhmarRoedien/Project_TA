<div class="container-fluid">

    <a href="<?php echo base_url(); ?>admin/data_barang/print_barang" class="btn btn-primary mb-3" target="_blank">
        <i class="fas fa-file-pdf"></i></a>
    <a href="<?php echo base_url(); ?>admin/data_laporan/laporan_excel" class="btn btn-success mb-3">
        <i class="fas fa-file-excel"></i></a>
    <a href="<?php echo base_url(); ?>admin//data_barang/print_barang_pdf" class="btn btn-danger mb-3" target="_blank">
        <i class="fas fa-print"></i></a>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>KETERANGAN</th>
                            <th>KATEGORI</th>
                            <th>STOK</th>
                            <th>HARGA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach ($barang as $brg): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $brg->kode_brg ?></td>
                            <td><?php echo $brg->nama_brg ?></td>
                            <td><?php echo $brg->keterangan ?></td>
                            <td><?php echo $brg->nama_kategori ?></td>
                            <td class="text-center"><?php echo $brg->stok ?></td>
                            <td>Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></td>
                            <td class="text-center">
                                <a href="<?php echo base_url(); ?>admin/data_barang/edit_aksi/<?php echo $brg->id_brg ?>"
                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> |
                                <a href="<?php echo base_url(); ?>admin/data_barang/hapus_aksi/<?php echo $brg->id_brg ?>"
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