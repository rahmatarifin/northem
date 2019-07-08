<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<strong>Form Upload Proposal</strong>
		</div>
		<div class="card-body">
			<? foreach($account as $ac) { ?>
			<form action="<?php echo base_url('peserta/do_upload'); ?>" method="post" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-md-2">
						<label class="form-control-label">ID Peserta</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="id_pes" value="<?php echo $ac->id_pes; ?>" class="form-control">
						<small class="form-text text-muted">Id Peserta</small>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-2">
						<label class="form-control-label">Nama Peserta</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="nama" class="form-control" value="<?php echo $ac->nama_pes; ?>">
						<small class="form-text text-muted">Nama Peserta Penelitian</small>
					</div>
				</div>
				<? } ?>
				<div class="row form-group">
					<div class="col-md-2">
						<label class="form-control-label">File Proposal</label>
					</div>
					<div class="col-md-3">
						<input type="file" name="file">
						<small class="form-text text-muted">File Proposal Penelitian</small>
					</div>
				</div>
				<div class="row form-group footer">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<button class="btn btn-success" type="submit">Upload</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>