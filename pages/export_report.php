<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Report</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

</head>

<body>

    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Tanggal</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query  = "SELECT tb_user.nama, tb_product.nama AS produk, format(tb_product.harga, 0) AS harga , tb_detail_transaksi.qty, format(tb_product.harga * tb_detail_transaksi.qty, 0) AS total, tb_transaksi.tanggal FROM tb_detail_transaksi INNER JOIN tb_user ON tb_user.id=tb_detail_transaksi.id_user INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product INNER JOIN tb_transaksi ON tb_transaksi.id=tb_detail_transaksi.id_transaksi";
            $result = mysqli_query($koneksi, $query);

            $no     = 1;

            while ($row = mysqli_fetch_array($result)) {
                $reportNama = $row['nama'];
                $reportProduct = $row['produk'];
                $reportHarga = $row['harga'];
                $reportQty   = $row['qty'];
                $reportTotal  = $row['total'];
                $reportTanggal  = $row['tanggal'];

            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $reportNama ?></td>
                    <td><?php echo $reportProduct ?></td>
                    <td><?php echo $reportHarga ?></td>
                    <td><?php echo $reportQty ?></td>
                    <td><?php echo $reportTotal ?></td>
                    <td><?php echo $reportTanggal ?></td>
                </tr>

            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

</body>


</html>