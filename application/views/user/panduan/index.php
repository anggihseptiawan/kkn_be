<main>
	<div class="container-fluid mt-3 ">
		<div class="card shadow mb-4 mt-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold ">Info Layanan</h6>
			</div>

			<div id="accordion">
				<?php foreach ($panduan as $key => $value) : ?>
				<div class="card-header" id="heading<?= $value["panduan_id"]; ?>">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapse<?= $value["panduan_id"]; ?>" aria-expanded="true" aria-controls="collapse<?= $value["panduan_id"]; ?>">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text"><p class="mb-0"><?= str_replace("-", " ", $value["jenis"]); ?></p></span>
					</a>

				</div>
				

				<div id="collapse<?= $value["panduan_id"]; ?>" class="collapse " aria-labelledby="heading<?= $value["panduan_id"]; ?>" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active " id="pills-rules<?= $value["panduan_id"]; ?>-tab" data-toggle="pill" href="#pills-rules<?= $value["panduan_id"]; ?>" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pepanduan<?= $value["panduan_id"]; ?>-tab" data-toggle="pill" href="#pills-pepanduan<?= $value["panduan_id"]; ?>" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pepanduan</a>
							</li>
							
							<li class="nav-item">
								
								<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" >
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Form Pengajuan  </span>
										</a>

									
							</li>

																
						</ul>
						<div class="tab-content pt-1 pl-1 " id="pills-tabContent">
							<div class="tab-pane fade show active content counter p-2" id="pills-rules<?= $value["panduan_id"]; ?>" role="tabpanel" aria-labelledby="pills-rules<?= $value["panduan_id"]; ?>-tab">
								<div id="no-more-tables">
									<?= $value["persyaratan"]; ?>
									
								</div>
							</div>
							<div class="tab-pane fade content counter p-2" id="pills-pepanduan<?= $value["panduan_id"]; ?>" role="tabpanel" aria-labelledby="pills-pepanduan<?= $value["panduan_id"]; ?>-tab">
								<div id="no-more-tables">
									<?= $value["mekanisme"]; ?>
								</div>
							</div>
							
						</div>
					</div>
				</div>

				<?php endforeach; ?>

			</div>

		</div>


	</div>

</main>