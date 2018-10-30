<?php
	$nama=$_POST["nama"];
	$jk=$_POST["jk"];
	$asalSmu=$_POST["asalSmu"];
	$kabupatenKota=$_POST["kabupatenKota"];
	$propinsi1=$_POST["propinsi1"];
	$kodepos=$_POST["kodepos"];
	$tempatLahir=$_POST["tempatLahir"];
	$tanggal="{$_POST["tanggal1"]}{$_POST["tanggal2"]}";
	$bulan="{$_POST["bulan1"]}{$_POST["bulan2"]}";
	$tahun="{$_POST["tahun1"]}{$_POST["tahun2"]}{$_POST["tahun3"]}{$_POST["tahun4"]}";
	$alamatKantor=$_POST["alamatKantor"];
	$noTelp1=$_POST["noTelp1"];
	$kodePos1="{$_POST["kodePos11"]}{$_POST["kodePos12"]}{$_POST["kodePos13"]}{$_POST["kodePos14"]}{$_POST["kodePos15"]}";
	$alamatRumah=$_POST["alamatRumah"];
	$kelurahan=$_POST["kelurahan"];
	$kecamatan=$_POST["kecamatan"];
	$kabupaten=$_POST["kabupaten"];
	$propinsi2=$_POST["propinsi2"];
	$noTelp2=$_POST["noTelp2"];
	$kodePos2="{$_POST["kodePos21"]}{$_POST["kodePos22"]}{$_POST["kodePos23"]}{$_POST["kodePos24"]}{$_POST["kodePos25"]}";
	$noHP=$_POST["noHP"];
	$email=$_POST["email"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hasil</title>
		<link rel="stylesheet" type="text/css" href="Website_DataDiri.css">
	</head>
	<body onload="animasi2();">
		<script src="script.js"></script>
		<div id="form1" style="margin-left: 30%; height: 0px;">
			<table>
				<tr>
					<th colspan="17" style="text-align: left;"><h3>A. Data Pribadi</h3></th>
				</tr>
				<tr class="tr1 tr3">
					<td class="td1">A1.</td>
					<td style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px;">Nama Lengkap</td>
					<td style="padding-top: 10px; padding-bottom: 10px;"> : </td>
					<td style="padding-top: 10px; padding-bottom: 10px;" colspan="14"><?php echo $nama ?></td>
				</tr>
				<tr class="tr1 tr3">
					<td class="td1">A2.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Jenis Kelamin</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" colspan="14"><?php echo $jk ?></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A3.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Asal SMU</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;"><?php echo $asalSmu ?></td>
					<td></td>
					<td style="padding-top: 10px;" colspan="4">Kabupaten/Kota</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" colspan="7"><?php echo $kabupatenKota ?></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">Propinsi</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"><?php echo $propinsi1 ?></td>
					<td style="padding-bottom: 10px; width: 30px;"></td>
					<td style="padding-bottom: 10px;" colspan="4">Kode Pos</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="7"><?php echo $kodepos ?></td>
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
					<td style="padding-bottom: 10px;" class="A4"><?php echo $tempatLahir ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" class="A4" colspan="2"><?php echo $tanggal ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" class="A4" colspan="2"><?php echo $bulan ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" class="A4" colspan="4"><?php echo $tahun ?></td>
					<td style="padding-bottom: 10px;" colspan="2"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="3">A5.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Alamat kantor</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16">
						<?php echo $alamatKantor ?>
					</td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">No telp</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"><?php echo $noTelp1 ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" colspan="2">Kode pos</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="10"><?php echo $kodePos1 ?></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="6">A6.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Alamat rumah/kontak</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16">
						<?php echo $alamatRumah ?>
					</td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">kelurahan</td>
					<td> : </td>
					<td><?php echo $kelurahan ?></td>
					<td></td>
					<td colspan="2">kecamatan</td>
					<td> : </td>
					<td colspan="5"><?php echo $kecamatan ?></td>
					<td colspan="2">kabupaten</td>
					<td> : </td>
					<td style="padding-right: 10px"><?php echo $kabupaten ?></td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">Propinsi</td>
					<td> : </td>
					<td colspan="14"><?php echo $propinsi2 ?></td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">No telp</td>
					<td> : </td>
					<td><?php echo $noTelp2 ?></td>
					<td></td>
					<td colspan="2">Kode pos</td>
					<td> : </td>
					<td colspan="10"><?php echo $kodePos2 ?></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">No HP(mobile phone)</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="15"><?php echo $noHP ?></td>
				</tr>
				<tr class="tr1 tr3">
					<td style="border-bottom-left-radius: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 10px;" class="td1">A7.</td>
					<td style="padding-top: 10px; padding-bottom: 10px;">Alamat Email</td>
					<td style="padding-top: 10px; padding-bottom: 10px;"> : </td>
					<td style="border-bottom-right-radius: 20px; padding-top: 10px; padding-left: 10px; padding-bottom: 10px;" colspan="14"><?php echo $email ?></td>
				</tr>
			</table>
		</div>
	</body>
</html>