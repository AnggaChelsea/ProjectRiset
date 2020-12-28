<section class="breadcrumb breadcrumb_bg2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb_iner text-center">
          <div class="breadcrumb_iner_item">
            <h2>Mapping School Register</h2>
            <p>
              <div class="country"> <img style="display: inline" src="<?= base_url() ?>template/ico/mapping.svg" width="240" alt="flag"></div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container container-fluid1" style="margin-top:80px;">

 <p class="text-justify">
  <h2>silahkan baca terlebih dahulu</h2>
  <p>
  Mapping sekolah ini bertujuan untuk membantu beberapa sekolah di kabupaten sukabumi yang terisolasi
  atau bisa juga keberadaannya yang sangat terpelosok, dengan system mapping sekolah ini sudah di buatkan sebisa mungkin untuk membantu masyarakat dalam hal pendidikan
</p>
  <br/>
   <iframe width="100%" height="250" style="border-radius:20px;" src="https://www.youtube.com/embed/0v3ogV5Y8L4?controls=0">
    </iframe>
    <br />
    <p>
    <p>
    Saya sangat berharap dengan adanya system ini bisa membantu beberapa sekolah di ketahui warga agar bisa menyekolahkan anak anaknya
  </p>
 </p>
 <p> <b> Daftarkan sekolah anda dengan data yang sebenernya </b> </p>
 <br />

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Daftar
</button>
<span><?= $this->session->flashdata('pesan'); ?></span>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Dengan Benar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('home/registerinput'); ?>" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <span><?= $this->session->flashdata('pesan'); ?></span>
        </div>
      
    </div>

     <div class="form-group">
      <label for="inputAddress">NPSN</label>
      <input type="text" name="npsn" class="form-control" placeholder="2010****">
    </div>

    <div class="form-group">
      <label for="inputAddress">Nama Sekolah</label>
      <input type="text" name="nama_sekolah" class="form-control" id="inputAddress" placeholder="SMKN1 CIBAJA">
    </div>

     <div class="form-group">
      <label for="inputAddress">alamat</label>
      <input type="text" name="alamat" class="form-control" placeholder="Jl.Kp.Contoh Rt 00 Rw 00">
    </div>

    <div class="form-group">
      <label for="inputAddress2">kelurahan</label>
      <input type="text" name="kelurahan" class="form-control" id="inputAddress2" placeholder="DUYUH">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" id="CITAYEUM">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip">Jumlah Siswa</label>
        <input type="text" name="jumlah_siswa" class="form-control" >
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip">Jumlah guru</label>
        <input type="text" name="jumlah_guru" class="form-control" >
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip">Kepala Sekolah</label>
        <input type="text" name="kepala_sekolah" class="form-control" >
      </div>
    </div>

    <!-- <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip">telpn Sekolah</label>
        <input type="text" name="telp_sekolah" class="form-control" >
      </div>
    </div> -->

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip">Akreditasi</label>
        <input type="text" name="akreditasi" class="form-control" >
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip" >latitude</label>
        <input type="text" name="latitude" class="form-control" >
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputZip" >longitude</label>
        <input type="text" name="longitude"  class="form-control" >
      </div>
    </div>
    <b class="align-content-center"> coordinate lokasi anda saat ini </b>
    <br />
    <i>Apakah anda sekarang berada di tempat sekolah</i>
    <br />
    <strong onclick="locationNow()" ><a> Iya! </a> </strong>
    <div class="coordinateNow">Coordinate Posisi Saat Ini <br />
    <b> Latitude </b> = <span id="latitude"></span>
    <br />
    <b> longitude </b> = <span id="longitude"></span>
    <br />
    <span id="demo"></span>

    <br /><i>copy dan pastekan ke Form latitude dan longitude</i>
   </div>

    <button type="submit" class="genric-btn success-border text-dark">Daftar</button> <br> <a href="<?= base_url('home/logintemplate'); ?>" style="float: right; margin-top:-30px;">Sudah terdafar?</a>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">
            if('geolocation' in navigator){
                navigator.geolocation.getCurrentPosition(position =>{
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    document.getElementById('latitude').textContent = lat;
                    document.getElementById('longitude').textContent = lon;
                })
            }
            else {
              console.log('notfound');
                document.getElementById('geolocation not found').textContent = 'Location Tidak terdetksi';
            }
</script>
