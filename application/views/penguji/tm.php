<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			
				<strong>Daftar Penguji</strong> Penelitian Dosen 2020
			
			<div class="float-right">
				<a href="<?php echo base_url('index.php/adm/f_penguji'); ?>"><button class="btn btn-sm btn-primary"><i></i>Tambah</button></a>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>Foto</th>
						<th>No. Id</th>
						<th>Nama Penguji</th>
						<th>Jenis Kelamin</th>
						<th>No. WA/Telephone</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1; foreach($penguji as $x) {?>
							<td><?php echo $no; $no++ ?></td>
							<td><img src="<?php echo base_url(); ?>tmp/foto/<? echo $x->id_pen; ?>" width="200"></td>
							<td><?php echo $x->id_pen; ?></td>
							<td><?php echo $x->nama_pen; ?></td>
							<td><?php echo $x->jk; ?></td>
							<td><?php echo $x->email; ?></td>
							<td><?php echo $x->no_wa; ?></td>
							<td>
								<a href="<?php echo base_url(); ?>index.php/adm/f_edit_pen/<?php echo $x->id_pen; ?>">Edit</a>&nbsp;&nbsp;
								<a href="<?php echo base_url(); ?>index.php/adm/h_pen/<?php echo $x->id_pen; ?>">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>		
		</div>
	</div>
</div>