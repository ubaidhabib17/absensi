<div class="container">
	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
						</div>
						<form class="user" method="POST" action="<?= base_url('auth/registration')?>">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="nama_depan"
										name="nama_depan" placeholder="Nama Depan"
										value="<?= set_value('nama_depan');?>">
									<?= form_error('nama_depan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" id="nama_belakang"
										name="nama_belakang" placeholder="Nama Belakang"
										value="<?= set_value('nama_belakang');?>">
									<?= form_error('nama_belakang', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control form-control-user" id="email" name="email"
									placeholder="Alamat Email" value="<?= set_value('email');?>">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<select name="pertanyaan" id="pertanyaaan" class="form-control">
									<option selected>Pilih Pertanyaan Dibawah Ini !</option>
									<?php foreach($pertanyaan as $p){ ?>
									<option value="<?= $p['pertanyaan']?>"><?= $p['pertanyaan'];?></option>
									<?php 
									} ?>
								</select>
								<?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="jawaban" name="jawaban"
									placeholder="Jawaban" value="<?= set_value('jawaban');?>">
								<?= form_error('no_induk', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="no_induk" name="no_induk"
									placeholder="Nomor Induk" value="<?= set_value('no_induk');?>">
								<?= form_error('no_induk', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<select name="kelas" id="kelas" class="form-control">
									<option selected>Pilih Kelas Dibawah Ini !</option>
									<?php foreach($kelas as $k){ ?>
									<option value="<?= $k['kelas']?>"><?= $k['kelas'];?></option>
									<?php 
									} ?>
								</select>
								<?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" id="password1"
										name="password1" placeholder="Password">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" id="password2"
										name="password2" placeholder="Repeat Password">
								</div>
							</div>
							<?php
									if (isset($_POST['submit'])) {
									$selected = $_POST['pertanyaan'];
									echo "<h4>$selected</h4>";
									}
								?>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Register Account
							</button>
							<hr>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="<?= base_url('auth');?>">Already have an account? Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
