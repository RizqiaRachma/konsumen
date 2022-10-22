<html>

<body>
    <center>
        <?php echo anchor('konsumen/tambah/', 'Tambah Data'); ?>
        <table border="1">
            <tr>
                <td>ID Konsumen</td>
                <td>Nama Konsumen</td>
                <td>No Tlp</td>
                <td>Nama Sales</td>
                <td>#</td>
            </tr>
            <?php $no = 1;
            foreach ($konsumen as $u) { ?>
                <tr>
                    <td><?php echo $u->id ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->no_tlp ?></td>
                    <td><?php echo $u->nama_sales ?></td>
                    <td><?php echo anchor('konsumen/edit/' . $u->id, 'Edit'); ?> |
                        <?php echo anchor('konsumen/delete/' . $u->id, 'Delete'); ?> </td>
                </tr>
            <?php $no++;
            } ?>
        </table>
        <?php echo anchor('sales/data', 'Data Sales'); ?>
    </center>
</body>

</html>