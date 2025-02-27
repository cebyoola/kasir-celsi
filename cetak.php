<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
// Kode PHP lainnya
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Struk Pembelian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya cetak untuk struk */
        @media print {
            body {
                font-size: 12px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            .no-print {
                display: none;
            }
        }

        .struk-container {
            max-width: 400px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }

        .title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .divider {
            border-top: 1px dashed #999;
            margin: 10px 0;
        }

        .table th, .table td {
            text-align: left;
            padding: 8px;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .table td {
            padding: 5px 10px;
        }

        .table .total-row td {
            font-weight: bold;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="struk-container">
        <h4 class="title">Orlando Network</h4>
        <p class="text-center">Jl. Klotok, Jombok, Ngoro </p>
        <div class="divider"></div>
        <p>
            <strong>Kasir:</strong> <?php echo htmlspecialchars($_SESSION['nama'], ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Tanggal:</strong> <?php echo date("Y-m-d H:i:s"); ?>
        </p>
        <div class="divider"></div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../koneksi.php";
                $no = 1;
                $penjualanid = $_GET['id'];

                $query2 = mysqli_query(
                    $koneksi,
                    "SELECT *, p.namaproduk, d.jumlahproduk, d.subtotal
                     FROM detailpenjualan d
                     JOIN produk p ON d.produkid = p.produkid
                     WHERE d.penjualanid = '$penjualanid'
                     GROUP BY p.namaproduk, d.jumlahproduk"
                );

                while ($row = mysqli_fetch_array($query2)) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . htmlspecialchars($row['namaproduk'], ENT_QUOTES, 'UTF-8') . "</td>
                            <td>" . htmlspecialchars($row['jumlahproduk'], ENT_QUOTES, 'UTF-8') . "</td>
                            <td>Rp " . number_format($row['subtotal'], 0, ',', '.') . "</td>
                          </tr>";
                }

                // Query untuk total harga
                $sql2 = mysqli_query(
                    $koneksi,
                    "SELECT SUM(subtotal) AS total 
                     FROM detailpenjualan 
                     WHERE penjualanid = '$penjualanid'"
                );

                $dt = mysqli_fetch_array($sql2);
                if ($sql2) {
                    $total = $dt['total'];
                    mysqli_query(
                        $koneksi,
                        "UPDATE penjualan 
                         SET totalharga = '$total' 
                         WHERE penjualanid = '$penjualanid'"
                    );
                }
                ?>
            </tbody>
        </table>
        <div class="divider"></div>
        
        <!-- Total Harga dan Kembalian -->
        <p><strong>Total Bayar:</strong> Rp <?php echo number_format($dt['total'], 0, ',', '.'); ?></p>
        <p><strong>Bayar:</strong> Rp <?php echo isset($_GET['uangDibayar']) ? number_format($_GET['uangDibayar'], 0, ',', '.') : '0'; ?></p>
        <p class="bold">Kembalian: Rp <?php echo isset($_GET['kembalian']) ? number_format($_GET['kembalian'], 0, ',', '.') : '0'; ?></p>

        <div class="divider"></div>
        <p class="footer-text">Terima kasih telah berbelanja di Orlando Network!</p>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
