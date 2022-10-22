<center>
    <h3> EDIT SALES</h3>
    <?php foreach ($sales as $i) { ?>
        <form class="forms-sample" action="<?php echo base_url('sales/update'); ?>" method="post">
            <input type="text" hidden name="id" value="<?php echo $i->id ?>">

            <div class="form-group">
                <input type="text" name="nama" required value="<?= $i->nama ?>">
            </div><br>


            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            <?php echo anchor('sales/data', 'Kembali'); ?>
        </form>
    <?php } ?>
</center>