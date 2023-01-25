<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th>NO</th>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>KETERANGAN</th>
                <th>KATEGORI</th>
                <th>STOK</th>
                <th>HARGA</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;foreach ($barang as $brg): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->kode_brg ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->nama_kategori ?></td>
                <td class="text-center"><?php echo $brg->stok ?></td>
                <td>Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></td>
            </tr>

            <?php endforeach;?>
        </tbody>
    </table>
    <script type="text/javascript">
    window.print();
    </script>
</body>

</html>