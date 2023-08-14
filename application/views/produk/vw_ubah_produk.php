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
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $produk['id']; ?>">
					<div class="form-group">
						<label for="nama_product">Nama</label>
						<input value="<?= $produk['nama_product']; ?>" name="nama_product" type="text" class="form-control" id="nama_product" placeholder="Nama Produk">
						<?= form_error('nama_product', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="harga_product">Harga</label>
						<input value="<?= $produk['harga_product']; ?>" name="harga_product" type="text" class="form-control" id="harga_product" placeholder="Harga Produk">
						<?= form_error('harga_product', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="ktgr_product">Kategori Produk</label>
						<select name="ktgr_product" value="<?= $produk['ktgr_product']; ?>" id="ktgr_product" class="form-control">
							<option value="">Kategori produk</option>
							<option value="Minuman" <?php if ($produk['ktgr_product'] == "Minuman") {
														echo "selected";
													} ?>>Minuman</option>
							<option value="Makanan" <?php if ($produk['ktgr_product'] == "Makanan") {
														echo "selected";
													} ?>>Makanan</option>
						</select>
						<?= form_error('ktgr_product', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="form-group">
						<label for="stok">Stok</label>
						<input value="<?= $produk['stok']; ?>" name="stok" type="text" class="form-control" id="stok" placeholder="Stok">
						<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>


					<div class="form-group">
						<img src="<?= base_url('assets/img/produk/') . $produk['img_product']; ?>" style="width:100px" class="img-thumbnail">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="img_product" id="img_product">
							<label for="img_product" class="custom-file-label">Choose File</label>
						</div>
					</div>

					<a href="<?= base_url('produk') ?>" class="btn btn-danger">Tutup</a>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah produk</button>
				</form>
			</div>
		</div>

	</div>
</div>
</div>
</div>