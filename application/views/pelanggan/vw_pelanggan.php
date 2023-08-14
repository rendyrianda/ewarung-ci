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
				<a href="<?= base_url(); ?>pelanggan/tambah" class="btn btn-info btn-sm">Tambah Pelanggan</a>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama</td>
								<td>Jenis Kelamin</td>
								<td>Email</td>
								<td>Password</td>
								<td>No HP</td>
								<td>Alamat</td>
								<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($pelanggan as $us) : ?>
								<tr>
									<td> <?= $i; ?>.</td>
									<td><?= $us['nama']; ?></td>
									<td><?= $us['jenis_kelamin']; ?></td>
									<td><?= $us['email']; ?></td>
									<td><?= $us['password']; ?></td>
									<td><?= $us['no_hp']; ?></td>
									<td><?= $us['alamat']; ?></td>

									<td>
										<a href="<?= base_url('pelanggan/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
										<a href="<?= base_url('pelanggan/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
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