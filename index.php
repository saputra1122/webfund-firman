<?php 
	include "webcounter.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>UTS Web Fund Firman</title>
	<link rel="shortcut icon" href="assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">	
	<!-- HEADER -->
	<ul>
	  <li><img src="assets/img/logo.png" class="img-logo"></li>
	  <li><a href="https://ssbteamofficial.com/firmansaputra" target="_blank">PT. Bandung Eco Sinergy Teknologi</a></li>
	</ul>

	<!-- CONTENT -->
	<h4><b>Selamat Datang :</b></h4>
	<marquee class="marq"><b>Nama	: </b>Firman Nurdiansah Saputra <b>Prodi	: </b>Manajemen Informatika 20 A</marquee>

	<div class="row">
	  	<div class="column side">
	  		<h4 style="text-align: center;">
	  			<hr style="width: 100%; border-width: 3px; background-color: #974063;">
			 		Pengunjung ke- <br>
			 			<?php 
			 				echo "$visitor";
			 			?>
			 	<hr style="width: 100%; border-width: 3px; background-color: #974063;">
			</h4>
	  		
	    <img src="assets/img/produk.jpg">
	    	<h6 align="justify">Larangan & Sanksi atas Penjualan Produk Sinergy di bawah harga yang telah ditetapkan!

			Kepada Para Mitra Sinergy,

			Kami beritahukan, bahwa telah kami temukan pelanggaran-pelanggaran agen yang menjual produk dibawah harga yang telah ditetapkan.

			Dengan surat ini kami mempertegas bahwa :

			<h6>1. Dilarang mempromosikan dan menjual Produk-produk Sinergy dibawah harga bandrol baik secara langsung maupun online.</h6>
			<h6>2. Dilarang menjual produk-produk Sinergy melalui media promosi Toko Online (Marketplace) dibawah harga bandrol.</h6>
			<h6>Apabila ditemukan pelanggaran-pelanggaran pada peraturan nomor 1 dan nomor 2 baik ditemukan secara langsung oleh tim manajemen maupun berdasarkan laporan member/agen/leader dilengkapi bukti maka perusahaan akan memberikan tindakan tegas pada member/agen/Leader yang melakukan pelanggaran.</h6>
			Tindakan tegas dari perusahaan berupa :</h6>
			<h6>- Memberikan peringatan baik secara langsung, telepon maupun tertulis.</h6>
			<h6>- Menahan Bonus dan royalti sampai batas waktu tertentu.</h6>
			<h6>- Tidak mencairkan Semua Reward Sinergy jika tercapai.</h6>
			<h6>- Menonaktifkan ID keagenan Sinergy sementara dengan syarat dan tenggang waktu tertentu.</h6>
			<h6>- Menonaktifkan ID keagenan Sinergy secara permanen.</h6>
	  	</div>
	  
		<div class="column middle">
			<!-- FORM -->
		    <h2 align="center">Pendaftaran Mitra PT BEST</h2>
		    <form>
		    	<label>NIK</label>
		    	<input type="number" name="nik" class="form-control" placeholder="NIK">
		    	<label>Nama</label>
		    	<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
		    	<label>Email</label>
		    	<input type="email" name="email" class="form-control" placeholder="Email">
		    	<label>Tempat Lahir</label>
		    	<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
		    	<label>Tanggal Lahir</label>
		    	<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
		    	<label>Jenis Kelamin</label>
					<select name="jk" class="form-control" required>
						<option>-- Pilih --</option>
						<option value="laki_laki">Laki - laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
					<label>Agama</label>
					<select name="agama" class="form-control" required>
						<option>-- Pilih --</option>
						<option value="islam">Islam</option>
						<option value="kristen">Kristen</option>
						<option value="hindu">Hindu</option>
						<option value="buddha">Buddha</option>
						<option value="konghucu">Konghucu</option>
					</select>
					<label>Status</label>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="nikah">
						<label class="custom-control-label" for="nikah">Nikah</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="belum_menikah">
						<label class="custom-control-label" for="belum_menikah">Belum Menikah</label>
					</div>
					<label>Alamat</label>
					<textarea name="komentar3" cols="40" rows="5" class="form-control"></textarea>
					<br>
					<button type="reset" class="btn btn-danger btn-md">Hapus</button>
					<button type="submit" class="btn btn-success btn-md">Simpan</button>
		    </form><br>

		    <!-- PARAGRAF -->
		    <div class="paragraf">
		    	<!-- TENTANG -->
		    	<h2 align="center">Tentang Perusahaan</h2>
		    	<p class="tentang">PT. BEST merupakan perusahaan yang bergerak dibidang perdagangan yang memasarkan berbagai produk kebutuhan masyarakat. Beberapa produk di antaranya yaitu :</p>
		    	<div class="produk">
			    	<p>Eco Racing</p>
			    	<p>Eco Farming</p>
			    	<p>Econaxx Coffee</p>
			    	<p>Habspro</p>
			    	<p>LVN Collagen</p>
			    	<p>LVN Slim</p>
			    	<p>LVN Calcium</p>
			    	<p>LVN Lipmate</p>
			    	<p>LVN Skincare</p>
			    </div>

		    	<!-- VISI MISI -->
		    	<h2 align="center">Visi Misi Perusahaan</h2>
		    	<div class="visimisi">
			    	<p><b>Visi :</b></p>
			    	<p>1. Menjadi perusahaan bebas riba yang membantu umat terbebas dari hutang dan riba.</p>
					<p>2. Menjadi perusahaan Penjualan Langsung  Berjenjang Syariah Indonesia terbesar di  Asia Tenggara</p>
					<p><b>Misi :</b></p>
					<p>1. Menciptakan 1000 peraih Mobil dan rumah Cash setiap tahun</p>
					<p>2. Menjadi penggerak gerakan Umat bebas Riba</p>
					<p>3. Memberikan produk yang berkualitas karya putra bangsa</p>
					<p><b>Moto :</b></p>
					<p>"Sinergy Go Berkah No Riba</p>
				</div>
		    </div>
		</div>
  	</div>

  	<!-- GALLERY -->
  	<div class="col-md-12">
  		<!-- 01 -->
  		<div class="gallery">
		  <a target="_blank" href="https://ssbteamofficial.com/firmansaputra">
		    <img src="assets/img/gallery-1.png" alt="Gambar Tidak Sesuai" title="Eco Racing">
		  </a>
		  <div class="desc"><b>Eco Racing</b>
		  </div>
		</div>

		<!-- 02 -->
  		<div class="gallery">
		  <a target="_blank" href="https://ssbteamofficial.com/firmansaputra">
		    <img src="assets/img/gallery-2.png" alt="Gambar Tidak Sesuai" title="Eco Farming">
		  </a>
		  <div class="desc"><b>Eco Farming</b>
		  </div>
		</div>

		<!-- 03 -->
  		<div class="gallery">
		  <a target="_blank" href="https://ssbteamofficial.com/firmansaputra">
		    <img src="assets/img/gallery-3.png" alt="Gambar Tidak Sesuai" title="Habspro">
		  </a>
		  <div class="desc"><b>Habspro</b>
		  </div>
		</div>

		<!-- 04 -->
  		<div class="gallery">
		  <a target="_blank" href="https://ssbteamofficial.com/firmansaputra">
		    <img src="assets/img/gallery-4.png" alt="Gambar Tidak Sesuai" title="Econaxx Coffee">
		  </a>
		  <div class="desc"><b>Econaxx Coffee</b>
		  </div>
		</div>

		<!-- 05 -->
  		<div class="gallery">
		  <a target="_blank" href="https://ssbteamofficial.com/firmansaputra">
		    <img src="assets/img/gallery-5.png" alt="Gambar Tidak Sesuai" title="LVN Collagen">
		  </a>
		  <div class="desc"><b>LVN Collagen</b>
		  </div>
		</div>

		<!-- 06 -->
  		<div class="gallery">
		  <a target="_blank" href="https://ssbteamofficial.com/firmansaputra">
		    <img src="assets/img/gallery-6.png" alt="Gambar Tidak Sesuai" title="Evitgo">
		  </a>
		  <div class="desc"><b>Evitgo</b>
		  </div>
		</div>
  	</div><br><br>

  	<!-- RUMUS JAVASCRIPT -->
  	<div class="col-md-12" align="center">
  		<h3 align="center">Rumus Java Script</h3>
  		<p>Hasil Dari A = B / 2 * C - (D+E) = </p>
		<p id="uts"></p>

		<script>
		var b = 2;
		var c = 4;
		var d = 5;
		var e = 5;
		var a = b / 2 * c - (d+e);
		document.getElementById("uts").innerHTML =
		"Adalah = " + a;
		</script>
  	</div>
</div>
</body>
</html>