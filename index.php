<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action="" method="POST">
			<table>
				<tr>
					<th colspan="4"><h3>A. Data Pribadi</h3></th>
				</tr>
				<tr>
					<td>A1.</td>
					<td>Nama Lengkap</td>
					<td> : </td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td rowspan="3">A2.</td>
					<td>Jenis Kelamin</td>
					<td colspan="2"> : </td>
				</tr>
				<tr>
					<td><input type="radio" name="jk" value="Laki-laki">1. Laki-laki</td>
				</tr>
				<tr>
					<td><input type="radio" name="jk" value="Perempuan">2. Perempuan</td>
				</tr>
				<tr>
					<td rowspan="2">A3.</td>
					<td>Asal SMU</td>
					<td> : </td>
					<td><input type="text" name="asalSmu"></td>
					<td>Kabupaten/Kota</td>
					<td> : </td>
					<td><input type="text" name="kabupatenKota"></td>
				</tr>
				<tr>
					<td>Asal SMU</td>
					<td> : </td>
					<td><input type="text" name="asalSmu"></td>
					<td>Kabupaten/Kota</td>
					<td> : </td>
					<td><input type="text" name="kabupatenKota"></td>
				</tr>
			</table>
		</form>
	</body>
</html>