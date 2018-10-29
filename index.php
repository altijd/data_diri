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
					<th colspan="17" style="text-align: left;"><h3>A. Data Pribadi</h3></th>
				</tr>
				<tr class="tr1 tr3">
					<td class="td1">A1.</td>
					<td style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px;">Nama Lengkap</td>
					<td style="padding-top: 10px; padding-bottom: 10px;"> : </td>
					<td style="padding-top: 10px; padding-bottom: 10px;" colspan="14"><input type="text" name="nama"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="3">A2.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Jenis Kelamin</td>
					<td colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16"><input type="radio" name="jk" value="lakilaki">1. Laki-laki</td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;" colspan="16"><input type="radio" name="jk" value="perempuan">2. Perempuan</td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A3.</td>
					<td>Asal SMU</td>
					<td> : </td>
					<td><input type="text" name="asalSmu"></td>
					<td></td>
					<td colspan="4">Kabupaten/Kota</td>
					<td> : </td>
					<td colspan="7"><input type="text" name="kabupatenKota"></td>
				</tr>
				<tr class="tr3">
					<td>Propinsi</td>
					<td> : </td>
					<td><input type="text" name="propinsi"></td>
					<td style="width: 30px;"></td>
					<td colspan="4">Kode Pos</td>
					<td> : </td>
					<td colspan="7"><input type="text" name="kodepos"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A4.</td>
					<td>Tempat/Tanggal lahir</td>
					<td> : </td>
					<td class="A4" >Tempat</td>
					<td></td>
					<td class="A4" colspan="2">Tanggal</td>
					<td style="width: 30px;"></td>
					<td class="A4" colspan="2">Bulan</td>
					<td style="width: 30px;"></td>
					<td class="A4" colspan="4">Tahun</td>
					<td colspan="2"></td>
				</tr>
				<tr class="tr3">
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
					<td colspan="2"></td>
				</tr>
				<tr>
					<td class="td1" rowspan="3">A5.</td>
					<td>Alamat kantor</td>
					<td colspan="15"> : </td>
				</tr>
				<tr>
					<td colspan="16">
						<textarea name="alamatKantor" rows="3" cols="40"></textarea>
					</td>
				</tr>
				<tr>
					<td>No telp</td>
					<td> : </td>
					<td><input type="text" name="noTelp1"></td>
					<td></td>
					<td colspan="2">Kode pos</td>
					<td> : </td>
					<td><input class="number" type="text" name="kodePos11"></td>
					<td><input class="number" type="text" name="kodePos12"></td>
					<td><input class="number" type="text" name="kodePos13"></td>
					<td colspan="6"><input class="number" type="text" name="kodePos14"></td>
				</tr>
				<tr>
					<td class="td1" rowspan="6">A6.</td>
					<td>Alamat rumah/kontak</td>
					<td colspan="15"> : </td>
				</tr>
				<tr>
					<td colspan="16">
						<input type="text" name="alamatRumah"style="width: 300px">
					</td>
				</tr>
				<tr>
					<td>kelurahan</td>
					<td> : </td>
					<td><input type="text" name="kelurahan" ></td>
					<td></td>
					<td colspan="2">kecamatan</td>
					<td> : </td>
					<td colspan="5"><input type="text" name="kecamatan"></td>
					<td colspan="2">kabupaten</td>
					<td> : </td>
					<td><input type="text" name="kabupaten"></td>
				</tr>
				<tr>
					<td>Propinsi</td>
					<td> : </td>
					<td colspan="14"><input type="text" name="propinsi" ></td>
				</tr>
				<tr>
					<td>No telp</td>
					<td> : </td>
					<td><input type="text" name="noTelp2"></td>
					<td></td>
					<td colspan="2">Kode pos</td>
					<td> : </td>
					<td><input class="number" type="text" name="kodePos21"></td>
					<td><input class="number" type="text" name="kodePos22"></td>
					<td><input class="number" type="text" name="kodePos23"></td>
					<td colspan="6"><input class="number" type="text" name="kodePos24"></td>
				</tr>
				<tr>
					<td>No HP(mobile phone)</td>
					<td> : </td>
					<td colspan="15"><input type="text" name="noHP"></td>
				</tr>
				<tr>
					<td class="td1" rowspan="2">A7.</td>
					<td>Alamat Email</td>
					<td colspan="15"> : </td>
				</tr>
				<tr>
					<td colspan="16"><input type="text" name="email" style="width: 300px"></td>
				</tr>
			</table>
		</form>
	</body>
</html>