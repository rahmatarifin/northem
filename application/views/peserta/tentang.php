<div class="col-12">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<strong>Your Account</strong>
			</div>
			<div class="card-body">
				<? foreach ($account as $ac) { ?>
				<div class="row">
						<div class="col-md-6">
							<div class="row form-group">
								<div class="col-md-3">
									<label class="form-control-label">ID Peserta</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="id_pen" class="form-control" value="<? echo $ac->id_pes; ?>">
									<small class="form-text text-muted">Id Peserta</small>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label class="form-control-label">Nama Peserta</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="nama" class="form-control" value="<? echo $ac->nama_pes; ?>">
									<small class="form-text text-muted">Nama Peserta Penelitian</small>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label class="form-control-label">Jenis Kelamin</label>
								</div>
								<div class="col-md-7">
									<input type="text" value="<? echo $ac->jk; ?>" class="form-control">
									<small class="form-text text-muted">Jenis Kelamin</small>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<img src="<? echo base_url(); ?>tmp/foto/<?php echo $ac->id_pes; ?>.png" class="justify-content-center">
						</div>
				</div>
			<? }?>
			</div>
		</div>
	</div>
</div>