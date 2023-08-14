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
					<input type="hidden" name="id" value="<?= $pelanggan['id']; ?>">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" value="<?= $pelanggan['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
						<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
							<option value="Laki-laki" <?php if ($pelanggan['jenis_kelamin'] == "Laki-laki") {
															echo "selected";
														} ?>>Laki-laki</option>
							<option value="Perempuan" <?php if ($pelanggan['jenis_kelamin'] == "Perempuan") {
															echo "selected";
														} ?>>Perempuan</option>
						</select>
						<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" value="<?= $pelanggan['email']; ?>" class="form-control" id="email" placeholder="Email">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" value="<?= $pelanggan['password']; ?>" class="form-control" id="password" placeholder="password">
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="no_hp">Nomor Hp</label>
						<input type="text" name="no_hp" value="<?= $pelanggan['no_hp']; ?>" class="form-control" id="no_hp" placeholder="no_hp">
						<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" value="<?= $pelanggan['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
						<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<a href="<?= base_url('pelanggan') ?>" class="btn btn-danger">Tutup</a>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah pelanggan</button>
				</form>
			</div>
		</div>

	</div>
</div>
</div>
</div>