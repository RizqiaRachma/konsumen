<center>
    <h3> TAMBAH KONSUMEN</h3>
    <form class="forms-sample" action="<?php echo base_url('konsumen/proses_tambah'); ?>" method="post">
        <div class="form-group">
            <select class="form-control " name="id_sales" required>
                <option hidden selected>Pilih </option>
                <?php foreach ($sales as $b) { ?>
                    <option value="<?php echo $b->id ?>"><?php echo $b->nama ?></option>
                <?php
                }
                ?>
            </select><?php echo anchor('sales', 'Tambah Sales'); ?>
        </div><br>
        <div class="form-group">
            <input type="text" name="nama" required placeholder="Nama Konsumen">
        </div><br>
        <div class="form-group">
            <input type="text" name="no_tlp" required placeholder="No Tlp Konsumen">
        </div><br>

        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
        <?php echo anchor('konsumen', 'Kembali'); ?>
    </form>
</center>