<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			
				<strong>Daftar Admin</strong> Penelitian Dosen 2020
			
			<div class="float-right">
				<li class="nav-item">
					<a href="<?php echo base_url('index.php/adm/f_penguji'); ?>"><button class="btn btn-sm btn-primary"><i></i>Tambah</button></a>
				</li>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>Foto</th>
						<th>No. Id</th>
						<th>Nama Admin</th>
						<th>Jenis Kelamin</th>
						<th>No. WA/Telephone</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1; foreach($adm as $x) {?>
							<td><?php echo $no; $no++ ?></td>
							<td><img src="<?php echo base_url(); ?>tmp/foto/<? echo $x->id_admin; ?>.jpg" width="200"></td>
							<td><?php echo $x->id_admin; ?></td>
							<td><?php echo $x->nama_adm; ?></td>
							<td><?php echo $x->jk; ?></td>
							<td><?php echo $x->no_wa; ?></td>
							<td>
								<a href="<?php echo base_url(); ?>index.php/adm/f_edit_pen/<?php echo $x->id_admin; ?>"><button class="btn btn-primary btn-sm">Edit</button></a>&nbsp;&nbsp;
								<a href="<?php echo base_url(); ?>index.php/adm/h_pen/<?php echo $x->id_admin; ?>"><button class="btn btn-sm btn-danger">Hapus</button></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>		
		</div>
	</div>
</div>