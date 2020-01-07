<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">KRS</h1>
	<a class="btn btn-primary mb-2" href="<?= base_url('krs/krs_add') ?>">Tambah Data</a>
	<table class="table bg-white">
		<thead>
			<tr>
				<th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Semester</th>
                <th scope="col">Konsentrasi</th>
                <th scope="col">Mata Kuliah Wajib</th>
                <th scope="col">Mata Kuliah Konsentrasi</th>
                <th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		foreach($data_krs as $row){ 
		?>
			<tr>
				<!-- <th scope="row"><?php echo $id_krs++; ?></th> -->
				<td><?php echo $no++; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->nama_mhs; ?></td>
                <td><?php echo $row->semester; ?></td>
                <td><?php echo $row->konsentrasi; ?></td>
                <td><?php echo $row->matkul_wajib; ?></td>
                <td><?php echo $row->matkul_konsentrasi; ?></td>
				<td>
					<a href="<?= base_url('krs/krs_edit/'.$row->id_krs) ?>">Edit</a> |
					<a href="<?= base_url('krs/krs_delete/'.$row->id_krs) ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
