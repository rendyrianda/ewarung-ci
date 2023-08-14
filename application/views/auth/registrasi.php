<div class="container">
	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
						</div>
						<form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
								<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-users"></span></div>
								<select name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>" id="jenis_kelamin" class="form-control">
									<option value="">Jenis Kelamin</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
								<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-address-card"></span></div>
								<input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
								</div>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
								<input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control form-control-user" id="no_hp" placeholder="Nomor HP">
								<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-home"></span></div>

								<input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control form-control-user" id="alamat" placeholder="Alamat">
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Daftar Akun
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="<?= base_url(); ?>auth">Sudah Punya akun? Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>