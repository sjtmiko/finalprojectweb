<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Manajemen User</h1>
	<a class="btn btn-primary mb-2" href="<?= base_url('admin/user_add') ?>">Tambah User</a>
	<table class="table bg-white">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Username</th>
				<th scope="col">Level</th>
				<th scope="col">Email</th>
				<th scope="col">Status</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($data_user as $row): ?>
			<tr class="<?php if ($row->acc == 1){echo "table-success";} elseif ($row->acc == 2){echo "table-danger";}?>">
				<th scope="row"><?php echo $i++; ?></th>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->username; ?></td>
				<td><?php echo $row->level; ?></td>
				<td><?php echo $row->Email; ?></td>
				<td>
				
				<a href="<?= base_url('admin/user_acc?id='.$row->id) ?>">Terima</a> |
				<a href="<?= base_url('admin/user_dec?id='.$row->id) ?>">Tolak</a>
				
				</td>
				
				<td>
					<a href="<?= base_url('admin/user_edit/'.$row->id) ?>">Edit</a> |
					<a href="<?= base_url('admin/user_delete/'.$row->id) ?>">Hapus</a> 
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
