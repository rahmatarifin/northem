<div class="content mt-3"><div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<strong>Daftar Peserta Penelitian Dosen 2020</strong>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>Foto</th>
						<th>ID Peserta</th>
						<th>Nama Peserta</th>
						<th>Jenis Kelamin</th>
						<th>No. WA/Telephone</th>
			<th>Email</th>
			
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody align="center">
		<tr>

			<?php $no = 1; foreach($peserta as $x) {?>
				<td><?php echo $no; $no++ ?></td>
				<td><img width="200" src="<?php echo base_url(); ?>tmp/foto/<?php echo $x->id_pes;?>.png" class="img rounded"></td>
				<td><?php echo $x->id_pes; ?></td>
				<td><?php echo $x->nama_pes; ?></td>
				<td><?php echo $x->jk; ?></td>
				<td><?php echo $x->no_wa; ?></td>
				<td><?php echo $x->email; ?></td>
				<td>
					<a href="<?php echo base_url(); ?>index.php/adm/"><button class="btn btn-sm btn-primary">Edit</button></a>
					<a href="<?php echo base_url(); ?>index.php/adm/"><button class="btn btn-sm btn-danger">Hapus</button></a>
				</td>
		</tr>
	<?php } ?>
	</tbody>
</table>		
		</div>
	</div>
</div>
</div>