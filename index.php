<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="Website_DataDiri.css">
	</head>
	<body>
		<form action="" method="POST">
			<table>
				<tr>
					<th colspan="13" style="text-align: left;"><h3>A. Data Pribadi</h3></th>
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
					<td><input type="radio" name="jk" value="lakilaki">1. Laki-laki</td>
				</tr>
				<tr>
					<td><input type="radio" name="jk" value="perempuan">2. Perempuan</td>
				</tr>
				<tr>
					<td rowspan="2">A3.</td>
					<td>Asal SMU</td>
					<td> : </td>
					<td><input type="text" name="asalSmu"></td>
					<td></td>
					<td colspan="4">Kabupaten/Kota</td>
					<td> : </td>
					<td colspan="5"><input type="text" name="kabupatenKota"></td>
				</tr>
				<tr>
					<td>Propinsi</td>
					<td> : </td>
					<td><input type="text" name="propinsi"></td>
					<td style="width: 20px;"></td>
					<td colspan="4">Kode Pos</td>
					<td> : </td>
					<td colspan="5"><input type="text" name="kodepos"></td>
				</tr>
				<tr>
					<td rowspan="2">A4.</td>
					<td>Tempat/Tanggal lahir</td>
					<td> : </td>
					<td class="A4" >Tempat</td>
					<td></td>
					<td class="A4" colspan="2">Tanggal</td>
					<td style="width: 20px;"></td>
					<td class="A4" colspan="2">Bulan</td>
					<td style="width: 20px;"></td>
					<td class="A4" colspan="4">Tahun</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td><input type="text" name="tempatLahir"></td>
					<td></td>
					<td><input class="number" type="text" name="tanggal1"></td>
					<td><input class="number" type="text" name="tanggal2"></td>
					<td></td>
					<td><input class="number" type="text" name="bulan1"></td>
					<td><input class="number" type="text" name="bulan2"></td>
					<td></td>
					<td><input class="number" type="text" name="tahun1"></td>
					<td><input class="number" type="text" name="tahun2"></td>
					<td><input class="number" type="text" name="tahun3"></td>
					<td><input class="number" type="text" name="tahun4"></td>
				</tr>
			</table>
		</form>
	</body>
</html>