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
				<a href="<?= base_url(); ?>produk/tambah" class="btn btn-info btn-sm">Tambah Produk</a>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<td>No</td>
								<td>Gambar</td>
								<td>Nama Produk</td>
								<td>Harga Produk</td>
								<td>Kategori Produk</td>
								<td>Stok</td>
								<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($produk as $us) : ?>
								<tr>
									<td> <?= $i; ?>.</td>
									<td><img src="<?= base_url('assets/img/produk/') . $us['img_product']; ?>" style="width:100px" class="img-thumbnail"></td>
									<td><?= $us['nama_product']; ?></td>
									<td><?= $us['harga_product']; ?></td>
									<td><?= $us['ktgr_product']; ?></td>
									<td><?= $us['stok']; ?></td>
									<td>
										<a href="<?= base_url('produk/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
										<a href="<?= base_url('produk/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
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