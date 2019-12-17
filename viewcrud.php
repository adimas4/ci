<a href="<?= base_url().'index.php/belajar_crud/insert'?>">
Tambah Data </a>
</br>

<table border="1">
	<tr>
		<th>no</th>
		<th>id</th>
		<th>Nama</th>
		<th>Aksi</th>

	</tr>

	<?php
	$no=1;
	foreach ($data as $r) {
	
	?>

	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r['id'] ?></td>
		<td><?php echo $r['nama'] ?></td>
		<td><a href="<?= base_url().'index.php/belajar_crud/update/'.$r['id']?>"> Ubah Data</a> || <a href="<?= base_url().'index.php/belajar_crud/delete/'.$r['id']?>"> Hapus Data </a> </td>
	</tr>
	<?php
	
	$no++;

	}

	?>
</table>