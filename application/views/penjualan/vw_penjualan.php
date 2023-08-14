<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            <?php echo $judul; ?> </h2>
    </div>
</div>
<a href="<?= base_url('Penjualan/export') ?>" class="btn btn-info">
    <i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export
</a>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>No Pembelian</td>
                                <td>Tanggal</td>
                                <td>Pelanggan</td>
                                <td>Total</td>
                                <td>Status</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($penjualan as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['no_penjualan']; ?></td>
                                    <td><?= $us['tanggal']; ?></td>
                                    <td><?= $us['nama'] ?></td>
                                    <td><?= $us['total_bayar']; ?></td>
                                    <td><?= $us['status']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Penjualan/detail/' . $us['no_penjualan']); ?>" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>