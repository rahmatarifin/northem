
	<div class="container-fluid">
		<div class="container">
		<form action="<?php echo base_url(); ?>log/a/" method="post">
			<div class="row form-group">
				<div class="col col-md-3">
					<label class="form-control-label">Username</label>
				</div>
				<div class="col-12 col-md-3">
					<input class="form-control" type="text" name="user">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3"> 
					<label class="form-control-label">Password</label>
				</div>
				<div class="col-12 col-md-3">
					<input type="text" name="pass" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label class="form-control-label">Level</label>
				</div>
				<div class="col-12 col-md-3">
					<select class="form-control" name="lv">
						<option value="0">Admin</option>
						<option value="1">Peserta</option>
						<option value="0">Penguji</option>
					</select>
				</div>
			</div>
			<div class="footer">
				<button type="submit" class="btn btn-primary">Log In</button>
			</div>
		</form>
		</div>
	</div>