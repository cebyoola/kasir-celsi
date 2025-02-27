<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <?php
    include "../koneksi.php"; // Pastikan file koneksi ada dan berfungsi

    // Ambil ID dari parameter URL dan pastikan aman
    $id = isset($_GET['id']) ? intval($_GET['id']) : null;

    // Periksa apakah ID valid
    if (!$id) {
        die("ID transaksi tidak ditemukan.");
    }

    // Ambil data transaksi
    $query2 = mysqli_query($koneksi, "SELECT pr.namaproduk, p.tanggalpenjualan, (d.jumlahproduk * pr.harga) AS subtotal
                                      FROM penjualan p 
                                      JOIN detailpenjualan d ON p.penjualanid = d.penjualanid
                                      JOIN produk pr ON pr.produkid = d.produkid 
                                      WHERE d.penjualanid = $id");

    // Validasi jika query gagal
    if (!$query2) {
        die("Query gagal: " . mysqli_error($koneksi));
    }
    ?>

    <style>
        /* Style dasar */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
        }

        /* Card styling */
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: 0.3s;
        }
        .card:hover {
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        /* Table Styling */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        .table thead {
            background: #343a40;
            color: white;
        }
        .table tbody tr:nth-child(odd) {
            background: #f2f2f2;
        }
        .table tbody tr:hover {
            background: #e0e0e0;
            transition: 0.3s;
        }

        /* Badge styling */
        .badge {
            display: inline-block;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            font-weight: bold;
        }
        .badge-success {
            background:#0056b3;
            color: white;
        }

        /* Ikon styling */
        .icon {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-receipt"></i> Detail Penjualan
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Penjualan</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($query2)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($data['namaproduk']) . "</td>";
                        echo "<td>" . date("d M Y", strtotime($data['tanggalpenjualan'])) . "</td>";
                        echo "<td><span class='badge badge-success'>Rp" . number_format($data['subtotal'], 0, ',', '.') . "</span></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    </div> 
</div>

</body>
</html>