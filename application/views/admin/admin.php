<div class="container " style="margin-top:120px;">
  <h1>Input Data Mapping</h1>
  <br />
  <span><?= $this->session->flashdata('pesan'); ?></span>
  <?= form_open_multipart('home/inputdatapeta'); ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">latitude</label>
      <input type="text" name="lat" class="form-control" id="inputlatitude4" placeholder="-083211123,">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Longitude</label>
      <input type="text" name="lng" class="form-control" id="inputPassword4" placeholder="32423243223">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nama Sekolah</label>
    <input type="text" name="nama_sekolah" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Photo</label>
      <input type="file" name="photo" class="form-control">
    </div>
   
    <div class="form-group col-md-2">
      <label for="inputZip">luas Bangunan</label>
      <input type="text" name="luas_bangunan" class="form-control" id="inputZip">
    </div>
     <div class="form-group col-md-2">
      <label for="inputZip">Jumlah siswa</label>
      <input type="text" name="jml_siswa" class="form-control" id="inputZip">
    </div>
    </div>
    <div class="form-group">
    <label for="inputAddress2">Detail</label>
    <textarea type="text" name="detail" class="form-control" id="inputAddress2" placeholder="Type......."></textarea>
  </div>
     
  
  <button type="submit" class="btn btn-outline-primary">Simpan</button>
<?= form_close(); ?>
</div>