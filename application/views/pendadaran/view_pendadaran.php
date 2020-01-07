<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pendadaran</h1>
	<a class="btn btn-primary mb-2" href="<?= base_url('pendadaran/pendadaran_add') ?>">Tambah Data</a>
	<table class="table bg-white">
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">Hari / Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Ruang</th>
                <th scope="col">NIM</th>
				<th scope="col">Nilai</th>
                <th scope="col">Status</th>
				<th scope="col">Dosen Pendamping</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		foreach($data_pendadaran as $row){ 
		?>
			<tr>
				<!-- <th scope="row"><?php echo $id_pendadaran++; ?></th> -->
				<td><?php echo $no++; ?></td>
                <td><?php echo $row->hari_tanggal; ?></td>
                <td><?php echo $row->jam; ?></td>
                <td><?php echo $row->ruang; ?></td>
                <td><?php echo $row->nim; ?></td>
				<td><?php echo $row->nilai; ?></td>
				<td><?php echo $row->status; ?></td>
				<td><?php echo $row->dosen_pendamping; ?></td>
				<td>
					<a href="<?= base_url('pendadaran/pendadaran_edit/'.$row->id_pendadaran) ?>">Edit</a> |
					<a href="<?= base_url('pendadaran/pendadaran_delete/'.$row->id_pendadaran) ?>">Hapus</a> 
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
