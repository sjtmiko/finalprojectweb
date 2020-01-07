<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Wisuda</h1>
	<a class="btn btn-primary mb-2" href="<?= base_url('wisuda/wisuda_add') ?>">Tambah Data</a>
	<table class="table bg-white">
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Jadwal</th>
                
			</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		foreach($data_wisuda as $row){ 
		?>
			<tr>
				<!-- <th scope="row"><?php echo $id_wisuda++; ?></th> -->
				<td><?php echo $no++; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jurusan; ?></td>
                <td><?php echo $row->jadwal; ?></td>
				<td>
					<a href="<?= base_url('wisuda/wisuda_edit/'.$row->id_wisuda) ?>">Edit</a> |
					<a href="<?= base_url('wisuda/wisuda_delete/'.$row->id_wisuda) ?>">Hapus</a> 
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
