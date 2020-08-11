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
						<span class="text">Surat Keterangan Tidak Mampu</span>
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
									if ($value['jenis'] == 'Surat-Keterangan-Tidak-Mampu') : ?>
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
									<?php foreach ($persyaratan as $key => $value) :
										if ($value['layanan_id'] == 4) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan" role="tabpanel" aria-labelledby="pills-pelayanan-tab">
								<div id="no-more-tables">
									<?php foreach ($mekanisme as $key => $value) :
										if ($value['layanan_id'] == 4) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
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
									if ($value['jenis'] == 'Surat-Keterangan-Kartu-Keluarga') : ?>
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
									<?php foreach ($persyaratan as $key => $value) :
										if ($value['layanan_id'] == 6) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan6" role="tabpanel" aria-labelledby="pills-pelayanan6-tab">
								<div id="no-more-tables">
									<?php foreach ($mekanisme as $key => $value) :
										if ($value['layanan_id'] == 6) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
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
									<?php foreach ($persyaratan as $key => $value) :
										if ($value['layanan_id'] == 1) : ?>

											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan2" role="tabpanel" aria-labelledby="pills-pelayanan2-tab">
								<div id="no-more-tables">
									<?php foreach ($mekanisme as $key => $value) :
										if ($value['layanan_id'] == 1) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
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
									<?php foreach ($persyaratan as $key => $value) :
										if ($value['layanan_id'] == 2) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan3" role="tabpanel" aria-labelledby="pills-pelayanan3-tab">
								<div id="no-more-tables">
									<?php foreach ($mekanisme as $key => $value) :
										if ($value['layanan_id'] == 2) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
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
									<?php foreach ($persyaratan as $key => $value) :
										if ($value['layanan_id'] == 2) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan4" role="tabpanel" aria-labelledby="pills-pelayanan4-tab4">
								<div id="no-more-tables">
									<?php foreach ($mekanisme as $key => $value) :
										if ($value['layanan_id'] == 2) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
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
									<?php foreach ($persyaratan as $key => $value) :
										if ($value['layanan_id'] == 3) : ?>

											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan5" role="tabpanel" aria-labelledby="pills-pelayanan5-tab">
								<div id="no-more-tables">
									<?php foreach ($mekanisme as $key => $value) :
										if ($value['layanan_id'] == 3) : ?>
											<?= $value['deskripsi']; ?>

									<?php endif;
									endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>


	</div>

</main>