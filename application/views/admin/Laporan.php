<div class="container-fluid">

    <a href="<?php echo base_url(); ?>admin/report/pdf" class="btn btn-primary mb-3">
        <i class="fas fa-file-pdf"></i></a>
    <a href="<?php echo base_url(); ?>admin/data_laporan/laporan_excel" class="btn btn-success mb-3">
        <i class="fas fa-file-excel"></i></a>
    <a href="<?php echo base_url(); ?>admin/transaksi_admin/print" class="btn btn-danger mb-3">
        <i class="fas fa-print"></i></a>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Report History</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>ID TRANSAKSI</th>
                            <th>TANGGAL TRANSAKSI</th>
                            <th>GRAND TOTAL</th>
                            <th>ID USER</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach ($transaksi as $trs): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $trs->id_transaksi ?></td>
                            <td><?php echo $trs->tgl_transaksi ?></td>
                            <td><?php echo $trs->grand_total ?></td>
                            <td><?php echo $trs->id_user ?></td>
                            <td class="text-center">
                                <a href="<?php echo base_url(); ?>admin/data_laporan/detail/<?php echo $trs->id_transaksi ?>"
                                    class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> |
                                <a href="<?php echo base_url(); ?>admin/transaksi_admin/print/<?php echo $trs->id_transaksi ?>"
                                    class="btn btn-primary btn-sm"><i class="fas fa-save"></i></a>
                            </td>
                        </tr>

                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>