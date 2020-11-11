 <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Data List Sekolah</h2>
                            <p>Logo<span>-&-</span>Nama Sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
<div class="section-top-border">
				<h3 class="mb-30">Table</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Nama Sekolah</div>
							<div class="country">Alamat</div>
							<div class="country">Kelurahan</div>
							<div class="country">kecamatan</div>
							<div class="country">jumlah_siswa</div>
							<div class="country">jumlah_guru</div>
							<div class="country">kepala_sekolah</div>
							<div class="visit">telp_sekolah</div>
							<div class="percentage">akreditasi</div>
						</div>
						<?php foreach ($datapeta as $key){?>
						<div class="table-row">
							<div class="serial"><?=$key['npsn']  ?></div>
							<div class="country"> <img src="<?= base_url()?>template/img/elements/f1.jpg" alt="flag"><?= $key['nama_sekolah'] ?></div>
							<div class="visit"><?= $key['alamat'] ?></div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>