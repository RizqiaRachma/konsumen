<center>
    <h3> EDIT KONSUMEN</h3>
    <?php foreach ($konsumen as $i) { ?>
        <form class="forms-sample" action="<?php echo base_url('konsumen/update'); ?>" method="post">
            <input type="text" hidden name="id" value="<?php echo $i->id ?>">
            <div class="form-group">
                <select class="form-control " name="id_sales" required>
                    <?php foreach ($sales as $b) { ?>
                        <option <?php if ($i->id_sales == $b->id) {
                                    echo 'selected';
                                } ?> value="<?php echo $b->id ?>"><?php echo $b->nama ?></option>
                    <?php
                    }
                    ?>
                </select><?php echo anchor('sales', 'Tambah Sales'); ?>
            </div><br>
            <div class="form-group">
                <input type="text" name="nama" required value="<?= $i->nama ?>">
            </div><br>
            <div class="form-group">
                <input type="text" name="no_tlp" required value="<?= $i->no_tlp ?>">
            </div><br>

            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            <?php echo anchor('konsumen', 'Kembali'); ?>
        </form>
    <?php } ?>
</center>