<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">UPDATE USER</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="for-group">
                    <div class="col-md-6">
                        <input type="hidden" name="id_user" class="form-control" value="<?php echo $user->id_user ?>">
                    </div>
                </div>
                <fieldset disabled>
                    <div class="for-group">
                        <div class="col-md-6">
                            <label for="disabledTextInput">ID User</label>
                            <input type="text" id="disabledTextInput" name="id_user" class="form-control"
                                value="<?php echo $user->id_user ?>">
                            <div class="text-danger"><?php echo form_error('id_user'); ?></div>
                        </div>
                    </div>
                </fieldset>
                <div class="for-group">
                    <div class="col-md-6">
                        <label class="mr-1">Nama User</label>
                        <input type="text" name="nama_user" class="form-control" value="<?php echo $user->nama_user ?>">
                        <div class="text-danger"><?php echo form_error('nama_user'); ?></div>
                    </div>
                </div>
                <div class="for-group">
                    <div class="col-md-6">
                        <label class="mr-1">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $user->username ?>">
                        <div class="text-danger"><?php echo form_error('username'); ?></div>
                    </div>
                </div>
                <div class="for-group">
                    <div class="col-md-6">
                        <label class="mr-1">Password</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $user->password ?>">
                        <div class="text-danger"><?php echo form_error('password'); ?></div>
                    </div>
                </div>
                <fieldset>
                    <div class="for-group">
                        <div class="col-md-6">
                            <label class="mr-1">User Type</label>
                            <input type="text" name="role_id" class="form-control" value="<?php echo $user->role_id ?>">
                            <div class="text-danger"><?php echo form_error('role_id'); ?></div>
                        </div>
                    </div>
                </fieldset>

                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>admin/data_user" class="btn btn-danger btn-sm mt-3">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>