

<div id="map" style="width: 100%; height: 700px; margin-top:70px;"></div>



  <!-- ================ contact section start ================= -->

        <script type="text/javascript">

     var map = L.map('map').setView([-6.912835, 106.921238], 15);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      <?php foreach ($datapeta as $keys) { ?>
            L.marker([<?= $keys['latitude'] ?>, <?= $keys['longitude'] ?>]).addTo(map)
                  .bindPopup("<b> nsp <?= $keys['npsn'] ?></b><br/>name school: <b> <?= $keys['nama_sekolah'] ?> </b><br />alamat: <?= $keys['alamat'] ?><br> kelurahan <b><?= $keys['kelurahan'] ?></b><br/> Kecamatan <b><?= $keys['kecamatan'] ?></b> <br /> Jumlah Siswa <b> <?= $keys['jumlah_siswa'] ?></b><br /> Jumlah Guru <b> <?= $keys['jumlah_guru'] ?></b>
                  <br /> Akreditasi <b> <?= $keys['akreditasi'] ?></b> <br />Nama Kepala Sekolah: <b> <?= $keys['kepala_sekolah'] ?></b>").openPopup();

      <?php } ?>
      </script>
