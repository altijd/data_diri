<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="Website_DataDiri.css">
	</head>
	<body>
		<form style="margin-left: 15%;" action="aksi.php" method="POST">
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
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16"><input type="radio" name="jk" value="Laki-laki">1. Laki-laki</td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;" colspan="16"><input type="radio" name="jk" value="Perempuan">2. Perempuan</td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A3.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Asal SMU</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;"><input type="text" name="asalSmu"></td>
					<td></td>
					<td style="padding-top: 10px;" colspan="4">Kabupaten/Kota</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" colspan="7"><input type="text" name="kabupatenKota"></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">Propinsi</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"><input type="text" name="propinsi1"></td>
					<td style="padding-bottom: 10px; width: 30px;"></td>
					<td style="padding-bottom: 10px;" colspan="4">Kode Pos</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="7"><input type="text" name="kodepos"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A4.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Tempat/Tanggal lahir</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" class="A4" >Tempat</td>
					<td></td>
					<td style="padding-top: 10px;" class="A4" colspan="2">Tanggal</td>
					<td style="padding-top: 10px; width: 30px;"></td>
					<td style="padding-top: 10px;" class="A4" colspan="2">Bulan</td>
					<td style="padding-top: 10px; width: 30px;"></td>
					<td style="padding-top: 10px;" class="A4" colspan="4">Tahun</td>
					<td style="padding-top: 10px;" colspan="2"></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;" colspan="2"></td>
					<td style="padding-bottom: 10px;"><input type="text" name="tempatLahir"></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="tanggal1"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="tanggal2"></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="bulan1"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="bulan2"></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="tahun1"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="tahun2"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="tahun3"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="tahun4"></td>
					<td style="padding-bottom: 10px;" colspan="2"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="3">A5.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Alamat kantor</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16">
						<textarea name="alamatKantor" rows="3" cols="40"></textarea>
					</td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">No telp</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"><input type="text" name="noTelp1"></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" colspan="2">Kode pos</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="kodePos11"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="kodePos12"></td>
					<td style="padding-bottom: 10px;"><input class="number" type="text" name="kodePos13"></td>
					<td style="padding-bottom: 10px;" colspan="6"><input class="number" type="text" name="kodePos14"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="6">A6.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Alamat rumah/kontak</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16">
						<input type="text" name="alamatRumah"style="width: 300px">
					</td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">kelurahan</td>
					<td> : </td>
					<td><input type="text" name="kelurahan" ></td>
					<td></td>
					<td colspan="2">kecamatan</td>
					<td> : </td>
					<td colspan="5"><input type="text" name="kecamatan"></td>
					<td colspan="2">kabupaten</td>
					<td> : </td>
					<td style="padding-right: 10px"><input type="text" name="kabupaten"></td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">Propinsi</td>
					<td> : </td>
					<td colspan="14"><input type="text" name="propinsi2" ></td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">No telp</td>
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
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">No HP(mobile phone)</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="15"><input type="text" name="noHP"></td>
				</tr>
				<tr class="tr1">
					<td style="border-bottom-left-radius: 20px; padding-top: 10px; padding-left: 10px;" class="td1" rowspan="2">A7.</td>
					<td style="padding-top: 10px;">Alamat Email</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr3">
					<td style="border-bottom-right-radius: 20px; padding-left: 10px; padding-bottom: 10px;" colspan="16"><input type="text" name="email" style="width: 300px"></td>
				</tr>
			</table>
			<center>
				<input type="submit" value="kirim">
			</center>
		</form>
	</body>
</html>