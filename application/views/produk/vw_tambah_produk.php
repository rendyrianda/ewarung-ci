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
					<div class="form-group">
						<label for="nama_product">Nama</label>
						<input name="nama_product" type="text" value="<?= set_value('nama_product'); ?>" class="form-control" id="nama_product" placeholder="Nama Product">
						<?= form_error('nama_product', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="harga_product">Harga</label>
						<input name="harga_product" type="text" value="<?= set_value('harga_product'); ?>" class="form-control" id="harga_product" placeholder="Harga Product">
						<?= form_error('harga_product', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="form-group">
						<label for="ktgr_product">Kategori Produk</label>
						<select name="ktgr_product" value="<?= set_value('ktgr_product'); ?>" id="ktgr_product" class="form-control">
							<option value="">Kategori produk</option>
							<option value="Minuman">Minuman</option>
							<option value="Makanan">Makanan</option>
						</select>
						<?= form_error('ktgr_product', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="form-group">
						<label for="stok">Stok</label>
						<input name="stok" value="<?= set_value('stok'); ?>" type="text" class="form-control" id="stok" placeholder="Stok">
						<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="form-group">
						<label for="gambar">Gambar</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="img_product" id="img_product">
						</div>
					</div>

					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Produk</button>
				</form>
			</div>
		</div>

	</div>
</div>
</div>
</div>