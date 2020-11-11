
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container " style="margin-top:120px;">
  <h1>Data School</h1>
  <br />
 <div class="table-responsive">
  <table class="table">
    <thead class="head-table">
      <tr>
      <th>Nama Sekolah</th>
      <th>Alamat</th>
      <th>photo</th>
      <th>luas bangunan</th>
      <th>Jml Siswa</th>
      <th>hapus</th>
    </tr>
    </thead>
    <tbody class="boy-table">
      <?php foreach ($datapeta as $keys) { ?>
      <tr>
        <td><?= $keys['nama_sekolah'] ?></td>
        <td><?= $keys['alamat'] ?></td>   
        <td>SUkabumi</td>     
        <td><?= $keys['luas_bangunan'] ?></td>
        <td><?= $keys['jml_siswa'] ?></td>
       <td class="text-center text-danger">
        <button type="button" class="btn btn-danger btn-rounded btn-icon">
          <a class="text-light" href="<?= base_url() . 'home/hapusdata/' . $keys['id']; ?>"><i class="mdi mdi-delete-forever">
          </i></a>
        </button>
      </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
 </div>

</div>