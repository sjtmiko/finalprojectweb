<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Yudisium</h1>
	<a class="btn btn-primary mb-2" href="<?= base_url('yudisium/yudisium_add') ?>">Tambah Data</a>
	<table class="table bg-white">
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">IPK</th>
                <th scope="col">Jumlah SKS</th>
				<th scope="col">Nilai D</th>
				<th scope="col">Nilai E</th>
				<th scope="col">Status</th>
				<th scope="col">Ket</th>
                
			</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		foreach($data_yudisium as $row){ 
		?>
			<tr>
				<!-- <th scope="row"><?php echo $id_yudisium++; ?></th> -->
				<td><?php echo $no++; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->ipk; ?></td>
                <td><?php echo $row->jumlah_sks; ?></td>
				<td><?php echo $row->nilai_d; ?></td>
				<td><?php echo $row->nilai_e; ?></td>
				<td><?php echo $row->status; ?></td>
				<td><?php echo $row->ket; ?></td>
				<td>
					<a href="<?= base_url('yudisium/yudisium_edit/'.$row->id_yudisium) ?>">Edit</a> |
					<a href="<?= base_url('yudisium/yudisium_delete/'.$row->id_yudisium) ?>">Hapus</a> 
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
