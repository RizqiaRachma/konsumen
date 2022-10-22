<center>
    <h3> TAMBAH SALES</h3>
    <form class="forms-sample" action="<?php echo base_url('sales/proses_tambah'); ?>" method="post">

        <div class="form-group">
            <input type="text" name="nama" required placeholder="Nama Konsumen">
        </div><br>

        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
        <?php echo anchor('konsumen/tambah', 'Kembali'); ?>
    </form>
</center>