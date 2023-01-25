<div class="container-fluid">
    <a href="<?php echo base_url(); ?>admin/data_user/tambah_aksi" class="btn btn-sm btn-danger mb-3">
        <i class="fas fa-plus fa-sm"></i> TAMBAH USER</a>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">DATA TABLE USER</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>ID USER</th>
                            <th>NAMA USER</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>LEVEL</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1;foreach ($user as $usr): ?>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $usr->id_user; ?></td>
                            <td><?php echo $usr->nama_user; ?></td>
                            <td><?php echo $usr->username; ?></td>
                            <td><?php echo $usr->password; ?></td>
                            <td class="text-center"><?php echo $usr->role_id; ?></td>
                            <td class="text-center">
                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                    href="<?php echo base_url(); ?>admin/data_user/edit_aksi/<?php echo $usr->id_user ?>"
                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> |
                                <a data-toggle="tooltip" data-placement="top" title="Hapus"
                                    href="<?php echo base_url(); ?>admin/data_user/hapus_aksi/<?php echo $usr->id_user ?>"
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