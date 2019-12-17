<table>
	<form action="<?= base_url().'index.php/belajar_crud/update'?>" method="POST">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td><input type="hidden" name="id" value="<?=$r['id']?>"><?=$r['id']?></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?= $r['nama']?>"></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</form>
</table>