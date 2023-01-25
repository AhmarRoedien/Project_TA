<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>AKSI</th>
                                <th>NO</th>
                                <th>NAMA BARANG</th>
                                <th>JUMLAH</th>
                                <th>HARGA</th>
                                <th>SUB TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;foreach ($this->cart->contents() as $items): ?>
                            <tr>
                                <td></td>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $items['name'] ?></td>
                                <td><?php echo $items['qty'] ?></td>
                                <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                                <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                            </tr>
                            <?php endforeach;?>
                            <tr>
                                <td colspan="4"></td>
                                <td align="center">Total</td>
                                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td align="center">Bayar</td>
                                <td align="center"><input type="text" name="bayar" class="form-control"></td>
                            </tr>

                        </tbody>
                    </table>
                    <div align="right">
                        <a href="<?php echo base_url(); ?>transaksi/hapus_keranjang">
                            <div class="btn btn-danger"><i class="fas fa-trash-alt"></i></div>
                        </a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-file-invoice"></i></button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Total Amount (Rp)</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Receive Amount (Rp)</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"><i class="fas fa-print"></i></button>
                <button type="button" class="btn btn-outline-success"><i class="fas fa-save"></i></button>
            </div>
        </div>
    </div>
</div>