<main>
	<div class="container-fluid mt-3 ">
		<div class="card shadow mb-4 mt-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold ">Surat Keterangan</h6>
			</div>
			<div id="accordion">
				<div class="card-header" id="headingOne">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Penduduk</span>
					</a>
				</div>
				<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan-tab" data-toggle="pill" href="#pills-pelayanan" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Penduduk') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules" role="tabpanel" aria-labelledby="pills-rules-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Berusia 17 tahun</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat pengantar dari pihak Rukun Tetangga (RT) dan Rukun Warga (RW)</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Fotokopi Kartu Keluarga (KK)</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat keterangan pindah dari kota asal, jika anda sudah bukan asli warga setempat</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Persyaratan">Surat keterangan pindah dari luar negeri, dan surat ini harus diterbitkan oleh Instansi Pelaksana bagi Warga Negara Indonesia(WNI) yang datang dari luar negeri karena pindah</td>
											</tr>
											<tr>
												<td data-title="No">6</td>
												<td data-title="Persyaratan">Datang langsung ke kantor keluarahan disini pula anda akan diambil fotonya dan melakukan sidik jari</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan" role="tabpanel" aria-labelledby="pills-pelayanan-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Fotokopi dokumen yang dibutuhkan</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Pertama setelah mendapatkan semua dokumen yang dibutuhkan. Anda harus menggandakan Pihak kelurahan hanya membutuhkan selembar salinan untuk tiap dokumen, namun sebaiknya Anda memliki dua atau tiga lembar Salinan untuk tiap dokumen</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Pelayanan">Datang ke kelurahan</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Anda harus datang sendiri ke Kantor Kelurahan, tidak dapat diwakilkan. Disini anda akan mengambil nomor antrian untuk menunggu dilayani. Biasanya pihak kelurahan membuka layanannya pada jam 08:00 sampai jam 15:00</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Penyerahan Dokumen</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Setelah giliran anda tiba, anda akan menyerahkan salinan dokumen asli. Petugas hanya minta untuk ditunjukkan, tapi mereka akan mengambil salinannya</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Pelayanan">Foto dan sidik jari</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Setelah penyerahan dokumen, anda akan dipanggil untuk pas foto dan pegambilan sidik jari. Jika semua proses sudah selesaim abda ajab diberikan surat pengantar untuk ditunjukan saat mengambil KTP nanti, Surat ini juga bisa menjadi pengganti kartu identitas sementara selama menunggu pengambilan KTP</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card-header" id="headingSix">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Pembuatan Kartu Keluaraga</span>
					</a>
				</div>
				<div id="collapseSix" class="collapse " aria-labelledby="headingSix" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules6" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan6-tab" data-toggle="pill" href="#pills-pelayanan6" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Pembuatan-Kartu-Keluarga') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules6" role="tabpanel" aria-labelledby="pills-rules6-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><strong>Persyaratan Kartu Keluarga Bagi Pasangan Baru</strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat pengantar dari RT yang sudah ditempel RW</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Fotokopi buku nikah atau akta perkawinan</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Surat keterangan pindah (khusus untuk anggota keluarga pendatang)</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><strong>Persyaratan kartu keluarga penambahan anggota</strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat pengantar dari RT atau RW setempat</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat kartu keluarga (KK) yang lama</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Surat keterangan kelahiran anggota keluarga baru yang akan ditambahkan</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><Strong>Penambahan Anggota Keluarga (Numpang KK) penambahan Anggota Keluarga (Numpang KK)</Strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat pengantar RT atau RW daerah setempat</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Kartu Keluarga (KK) yang lama atau kartu keluarga yang akan ditumpangi</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Surat keterangan pindah datang (jika tidak satu daerah)</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat keterangan datang dari luar negeri (Bagi WNI dari luar negeri)</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Persyaratan">Paspor, izin tinggal tetap, dan surat keterangan catatan kepolisian (SKCK) atau surat tanda lapor diri (bagi WNA)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan6" role="tabpanel" aria-labelledby="pills-pelayanan6-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Meminta surat pengantar pembuatan kartu keluarga baru di Ketua RT setempat</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Membawa surat pengantar tersebut ke Ketua RW dan meminta stempel RW.</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Membawa surat pengantar tersebut dan persyaratan lainnya ke kantor kelurahan, lalu mengisi formulir permohonan pembuatan KK abru yang tersedia di kantor keluranahan</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Pelayanan">Petugas kelurahan akan mengecek kelengkapan berkas-berkas yang menjadi syarat pembuatan KK baru</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Pelayanan">Jika sudah lengkap, Lurah akan menandatangani formulir permohonan pembuatan KK baru tersebut</td>
											</tr>
											<tr>
												<td data-title="No">6</td>
												<td data-title="Pelayanan">Berkas yang sudah ditandatangan Lurah kemudian kamu teruskan ke Kecamatan</td>
											</tr>
											<tr>
												<td data-title="No">7</td>
												<td data-title="Pelayanan">7. Petugas melakukan verifikasi dan validasi data penduduk.</td>
											</tr>
											<tr>
												<td data-title="No">8</td>
												<td data-title="Pelayanan">kecamatan akan menandatangani formulir permohonan KK baru.</td>
											</tr>
											<tr>
												<td data-title="No">9</td>
												<td data-title="Pelayanan">Setelah itu, berkas yang sudah ditandatangani tadi kamu bawa ke Dinas Kependudukan dan Pencatatan Sipil.</td>
											</tr>
											<tr>
												<td data-title="No">10</td>
												<td data-title="Pelayanan">Petugas melakukan perekaman data ke database kependudukan.</td>
											</tr>
											<tr>
												<td data-title="No">11</td>
												<td data-title="Pelayanan">Kepala Dinas Kependudukan dan Pencatatan Sipil kemudian mengesahkan KK baru yang diterbitkan.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card-header" id="headingTwo">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Usaha</span>
					</a>
				</div>
				<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules2" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan2-tab" data-toggle="pill" href="#pills-pelayanan2" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Usaha') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules2" role="tabpanel" aria-labelledby="pills-rules2-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Kartu Tanda Penduduk (KTP) yang masih berlaku (Asli dan fotokopi)</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Fotokopi Kartu Keluarga (KK)</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat Persyaratan atau Permohonan</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan2" role="tabpanel" aria-labelledby="pills-pelayanan2-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Dapatkan surat pengantar dari RT RW setempat, Mendatangi RT RW Setempat untuk minta dibuatkan surat pengantar</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Pelayanan">Mendatangi kantor kelurahan (Kepala Desa), Setelah Mendapatkan surat Pengantar RT RW, kemudian bawalah Surat Pengantar RT RW serta dengan berkas yang lainnya ke kantor kelurahan atau kepala desa. Di sana anda akan diminta untuk mengisi formulir pembuatan surat keterangan usaha. Setelah semua persyaratan anda serahkan maka anda tinggal menunggu SKU jadi.</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Bawa berkas ke kantor kecamatan, Setelah Surat Keterangan Usaha jadi maka langkah selanjutnya anda tinggal membawanya ke kantor kecamatan. SKU tersebut nantinya akan ditandatangani oleh camat dan distempel.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-header" id="headingThree">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Pindah</span>
					</a>
				</div>
				<div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules3-tab" data-toggle="pill" href="#pills-rules3" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan3-tab" data-toggle="pill" href="#pills-pelayanan3" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Pindah') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules3" role="tabpanel" aria-labelledby="pills-rules3-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><Strong>Persyaratan Pindah Datang Anatarkeluarahan</Strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW tujuan</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat keterangan pindah dari Keluarahan asli</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">KK dan KTP-el (asli dan fotokopi)</td>
											</tr>

											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><Strong>Persyaratan Pindah Datang Antarkecamatan</Strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW tujuan</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat Keterangan pindah dari Kelurahan Asal
												</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Surat Keterangan Pindah dari Kecamatan asal</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat KK dan KTP-el (asli dan fotocopy)</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><strong>Persyaratan Pindah Datang Antarkota/Provinsi</strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW tujuan</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat Keterangan Pindah dari daerah asal</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">KTP-el (asli dan fotokopi)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan3" role="tabpanel" aria-labelledby="pills-pelayanan3-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-header" id="headingFour">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Kematian</span>
					</a>
				</div>
				<div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules4-tab" data-toggle="pill" href="#pills-rules4" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan4-tab" data-toggle="pill" href="#pills-pelayanan4" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Kematian') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules4" role="tabpanel" aria-labelledby="pills-rules4-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Bukti kematian : Surat Kematian dari Rumah Sakit</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Kartu Keluarga Asli</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">KTP Asli yang meninggal</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Persyaratan">Fotocopy KTP yang meninggal 2 lembar</td>
											</tr>
											<tr>
												<td data-title="No">6</td>
												<td data-title="Persyaratan">Fotocopy KTP Pelapor 2 lembar</td>
											</tr>
											<tr>
												<td data-title="No">7</td>
												<td data-title="Persyaratan">Fotocopy KTP 2 orang saksi kematian masing - masing 2 lembar</td>
											</tr>
											<tr>
												<td data-title="No">8</td>
												<td data-title="Persyaratan">Fotocopy KARIP (PNS/Pensiuanan) 2 lembar</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan4" role="tabpanel" aria-labelledby="pills-pelayanan4-tab4">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Pemohon diminta surat keterangan kepada ketua RT</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Pelayanan">Pemohon membawa surat pengantar (dari RT) kepada ketua RW untuk di tanda tangani/ di sahkan</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Pemohon mendatangi kantor Keluarahan membawa berkas sessuai persyaratan dan mendapatkan surat kemantian</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Pelayanan">Pemohon mendatangi Kecamatan membawa berkas sesuai persyaratan dan surat kematian dari keluarahan</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Pelayanan">Pemohon membawa berkas sesuai persyaratan yang sudah ditandatangani ke Dinas kependudukan dan Pencatatan Sipil</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-header" id="headingFive">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Domisili</span>
					</a>
				</div>
				<div id="collapseFive" class="collapse " aria-labelledby="headingFour" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules5-tab" data-toggle="pill" href="#pills-rules5" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan5-tab" data-toggle="pill" href="#pills-pelayanan5" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Domisili') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules5" role="tabpanel" aria-labelledby="pills-rules5-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan5" role="tabpanel" aria-labelledby="pills-pelayanan5-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Jika dikuasakan (Surat kuasa di atas kertas bermaterai RP 6.000,KTP orang yang diberi kuasa)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>


	</div>

</main>