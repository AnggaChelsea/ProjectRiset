



    <style type="text/css">
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    .container{
    position:relative;
    }
    </style>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nspn</th>
                <th>Nama Sekolah</th>
                <th>alamat</th>
                <th>kecamatan</th>
                <th>kelurahan</th>
                <th>jumlah_guru</th>
                <th>jumlah_siswa</th>
                <th>kepala_sekolah</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($datapeta as $key){?>
            <tr>
                <td><?=$key['npsn']  ?></td>
                <td><?= $key['nama_sekolah'] ?></td>
                <td><?= $key['alamat'] ?></td>
                <td><?= $key['kecamatan'] ?></td>
                <td><?= $key['desa'] ?></td>
                <td><?= $key['jumlah_guru'] ?></td>
                <td><?= $key['jumlah_siswa'] ?></td>
                <td><?= $key['kepala_sekolah'] ?></td>
            </tr>
	<?php } ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );

</script>
