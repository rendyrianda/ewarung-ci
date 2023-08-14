<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            <?php echo $judul; ?> </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="<?= base_url(); ?>admin/tambah" class="btn btn-info btn-sm">Tambah Admin</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Password</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($admin as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td><?= $us['password']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                        <a href="<?= base_url('admin/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->