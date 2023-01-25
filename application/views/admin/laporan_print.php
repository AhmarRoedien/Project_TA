<!DOCTYPE html>
<html>

<head>
    <title>Report Table</title>
    <style type="text/css">
    #outtable {
        padding: 20px;
        border: 1px solid #e3e3e3;
        width: 600px;
        border-radius: 5px;
    }

    .short {
        width: 50px;
    }

    .normal {
        width: 150px;
    }

    table {
        border-collapse: collapse;
        font-family: Arial;
        color: #5E5B5C;
    }

    thead th {
        text-align: left;
        padding: 10px;
    }

    tbody td {
        border-top: 1px solid #e3e3e3;
        padding: 10px;
    }

    tbody tr:nth-child(even) {
        background: #F6F5FA;
    }

    tbody tr:hover {
        background: #EAE9F5
    }
    </style>
</head>

<body>
    <div id="outtable">
        <table>
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>ID TRANSAKSI</th>
                    <th>TANGGAL TRANSAKSI</th>
                    <th>GRAND TOTAL</th>
                    <th>ID USER</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;foreach ($transaksi as $trs): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $trs->id_transaksi ?></td>
                    <td><?php echo $trs->tgl_transaksi ?></td>
                    <td><?php echo $trs->grand_total ?></td>
                    <td><?php echo $trs->id_user ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <script type="text/javascript">
        window.print();
        </script>
    </div>
</body>

</html>