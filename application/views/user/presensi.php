		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<h1 class="h3 mb-4 text-gray-800"><?= $title ;?></h1>
			<div class="row">
				<div class="col-lg-8">
					<?= $this->session->flashdata('message'); ?>
					<form action="<?= base_url('user/presensi')?>" method="POST" id="presensi">
						<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label">Pertanyaan</label>
							<div class="col-sm-10">
								<select name="pertanyaan" id="pertanyaaan" class="form-control">
									<option selected>Pilih Pertanyaan Dibawah Ini !</option>
									<?php foreach($pertanyaan as $p){ ?>
									<option value="<?= $p['pertanyaan']?>"><?= $p['pertanyaan'];?></option>
									<?php 
									} ?>
								</select>
								<?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="jawaban" class="col-sm-2 col-form-label">Jawaban</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="jawaban" name="jawaban" autocomplete="off">
								<?= form_error('jawaban', '<small class="text-danger pl-3">', '</small>'); ?>

								<input type="hidden" class="form-control form-control-user" id="email" name="email"
									value="<?= $user['email'];?>">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

								<input type="hidden" class="form-control form-control-user" id="id_user" name="id_user"
									value="<?= $user['id'];?>">
								<?= form_error('id_user', '<small class="text-danger pl-3">', '</small>'); ?>

							</div>
						</div>
						<!-- <div class="form-group row">
							<label for="nama_belakang" class="col-sm-2 col-form-label">Status</label>
							<div class="col-sm-10">
								<div class="radio mt-2">
									<label><input type="radio" name="status" class="ml-2" value="Hadir"> Hadir</label>
									<label><input type="radio" name="status" class="ml-5" value="Izin"> Izin</label>
									<label><input type="radio" name="status" class="ml-5" value="Alfa"> Alfa</label>
								</div>
							</div>
						</div> -->
						<!-- <div id="my_camera"></div>
						<input type="hidden" id="image" name="image" value="">
						<input type=button value="Take Snapshot" onClick="take_snapshot()"> -->
						<!-- <input type=button value="Save Snapshot" onClick="saveSnap()"> -->
						<!-- <div id="results"></div> -->
						<div class="form-group row">
							<div class="col-sm-10">
								<p class="lead">NB : Wajib direload setelah submit gagal !</p>
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="submit" onclick="document.location.reload(true)"
									class="btn btn-warning">Reload</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
			integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
			integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
		<script language="JavaScript">
			Webcam.set({
				width: 320,
				height: 240,
				image_format: 'jpeg',
				jpeg_quality: 90
			});
			Webcam.attach('#my_camera');

			function take_snapshot() {
				// take snapshot and get image data
				Webcam.snap( function(data_uri) {
					var raw_image_data = data_uri.replace(/^data\:image\/w+\;base64\,/, '');

					document.getElementById('image').value = raw_image_data;
					document.getElementById('presensi').submit();
				// display results in page
				document.getElementById('results').innerHTML = 
				'<img id="imageprev" src="'+data_uri+'"/>';
				} );
			}

			function saveSnap(){
				// Get base64 value from <img id='imageprev'> source
				var base64image = document.getElementById("imageprev").src;

				Webcam.upload( base64image, 'User.php', function(code, text) {
				console.log('Save successfully');
				//console.log(text);
				});

			}

		</script> -->
