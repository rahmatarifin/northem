<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<strong>Form </strong>Pendaftaran
		</div>
		<div class="card-body">
			<form action="<?php echo base_url('index.php/home/x'); ?>" method="post">
		<div class="row form-group">
			<div class="col-md-2">
				<label>Id Peserta</label>
			</div>
			<div class="col-md-3">
				<input type="text" name="id_pes" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-2">
				<label>Nama Peserta</label>
			</div>
			<div class="col-md-3">
				<input type="text" name="nama_pes" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-2">
				<label>Jenis Kelamin</label>
			</div>
			<div class="col-md-3">
				<select name="jk" class="form-control">
					<option>Pilih</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col col-md-2">
				<label>No. Wa</label>
			</div>
			<div class="col-12 col-md-3">
				<input type="text" name="no_wa" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<div class="col col-md-2">
				<label>Email</label>
			</div>
			<div class="col-12 col-md-3">
				<input type="email" name="email" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-2">
				<label>Foto</label>
			</div>
			<div class="col-md-3">
				<input type="file" name="foto">
			</div>
		</div>
		<hr>
		<div class="row form-group">
			<div class="col-md-2">
				<label>Username</label>
			</div>
			<div class="col-md-3">
				<input name="user" type="text" class="form-control">*
				<small></small>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-2">
				<label>Password</label>
			</div>
			<div class="col-md-3">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<hr>
		<div class="row form-group">
			<div class="col-md-2"></div>
			<div class="col-md-3">
				<button type="submit">Daftar</button>
			</div>
		</div></form>
		</div>
	</div>
</div>