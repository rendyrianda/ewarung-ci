<!-- Begin Page Content -->
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            <?php echo $judul; ?> </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for=" nama">Nama</label>
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" value="<?= set_value('email'); ?>" name="email" class="form-control" id="email" placeholder="Email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="<?= set_value('password'); ?>" name="password" class="form-control" id="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('Admin') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Admin</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>