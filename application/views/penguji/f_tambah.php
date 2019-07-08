<div class="content mt-3">
	<div class="col-12">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<strong>Form Penguji</strong> Penelitian Dosen 2020
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('adm/t_pen'); ?>">
					<div class=" row form-group">
						<div class="col col-md-2">
							<label class="form-control-label">ID Penguji</label>
						</div>
						<div class="col-12 col-md-3">
							<input type="text" name="id" class="form-control">
							<small class="form-text text-muted">ID Penguji</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">Nama Penguji</label>
						</div>
						<div class="col-md-3">
							<input type="text" name="nama" class="form-control">
							<small class="form-text text-muted">Nama Penguji</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">Jenis Kelamin</label>
						</div>
						<div class="col-md-3">
							<select class="form-control" name="jk">
								<option value="1">Laki-Laki</option>
								<option value="0">Perempuan</option>
							</select>
							<small class="form-text text-muted">Jenis Kelamin</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">No. Hp</label>
						</div>
						<div class="col-md-3">
							<input type="text" name="no_hp" class="form-control">
							<small class="form-text text-muted">Nomor Telephone aktif</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">Email</label>
						</div>
						<div class="col-md-3">
							<input type="email" name="email" class="form-control">
							<small class="form-text text-muted">Email Aktif</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">Username</label>
						</div>
						<div class="col-md-3">
							<input type="text" name="user" class="form-control">
							<small class="form-text text-muted">Username</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">Password</label>
						</div>
						<div class="col-md-3">
							<input type="text" name="pass" class="form-control">
							<small class="form-text text-muted">Password</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							<label class="form-control-label">Foto</label>
						</div>
						<div class="col-md-3">
							<input type="file" name="foto">
							<small class="form-text text-muted">Foto/gambar dengan extensi .jpg. EX: foto.jpg</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">
							
						</div>
						<div class="col-md-3">
							<button class="btn btn-success">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>