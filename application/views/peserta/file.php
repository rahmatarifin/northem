<div class="content mt-3">
	<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<strong>Daftar Peserta Penelitian Dosen 2020</strong>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>Tanggal Upload</th>
						<th>Files</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1; foreach($files as $f) {?>
							<td><?php echo $no; $no++ ?></td>
							<td><?php echo $f->id_pes; ?></td>
							<td>
								
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>		
		</div>
	</div>
</div>
</div>