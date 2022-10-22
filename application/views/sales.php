<html>

<body>
    <center>
        <?php echo anchor('sales/', 'Tambah Data'); ?>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nama Sales</td>
                <td>#</td>
            </tr>
            <?php $no = 1;
            foreach ($sales as $u) { ?>
                <tr>
                    <td><?php echo $u->id ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo anchor('sales/edit/' . $u->id, 'Edit'); ?> |
                        <?php echo anchor('sales/delete/' . $u->id, 'Delete'); ?> </td>
                </tr>
            <?php $no++;
            } ?>
        </table>
        <?php echo anchor('konsumen', 'Data Konsumen'); ?>
    </center>
</body>

</html>