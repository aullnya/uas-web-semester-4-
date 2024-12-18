<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "uas_bunga";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error . " (Error Code: " . $conn->connect_errno . ")");
}

$produk = "";
$harga  = "75000"; // Set harga default
$qty    = "";
$total  = "";

$sukses = "";
$error  = "";

// Tambahkan logika untuk menghapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql1 = "DELETE FROM keranjang WHERE id = $id";
    if ($conn->query($sql1) === TRUE) {
        $sukses = "Berhasil menghapus data";
    } else {
        $error = "Gagal menghapus data: " . $conn->error;
    }
}

// Tambahkan logika untuk mengedit data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql1 = "SELECT * FROM keranjang WHERE id = $id";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $produk = $row['produk'];
        $qty = $row['qty'];
        $total = $row['total'];
    }
}

// Logika untuk menyimpan atau mengedit data
if (isset($_POST['simpan'])) {
    $produk = $_POST['produk'];
    $harga = "75000";
    $qty = $_POST['qty'];
    $total = $harga * $qty;

    // Validasi input
    if ($produk && $harga && $qty && $total) {
        if (isset($_POST['id']) && $_POST['id'] != "") {
            // Update data
            $id = $_POST['id'];
            $sql1 = "UPDATE keranjang SET produk='$produk', harga='$harga', qty='$qty', total='$total' WHERE id=$id";
        } else {
            // Insert data baru
            $sql1 = "INSERT INTO keranjang (produk, harga, qty, total) VALUES ('$produk', '$harga', '$qty', '$total')";
        }

        // Eksekusi query
        if ($conn->query($sql1) === TRUE) {
            // Redirect setelah berhasil menyimpan data
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $error = "Gagal menambah atau mengedit data: " . $conn->error;
        }
    } else {
        $error = "Harap isi semua kolom dengan benar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keranjang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo L.jpg">
    <!-- Custom Styles -->
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Custom Script -->
    <script>
        // Function to calculate total
        function hitungTotal() {
            var harga = document.getElementById('harga').value;
            var qty = document.getElementById('qty').value;
            var total = harga * qty;
            document.getElementById('total').value = total;
        }

        // Event listener for input changes
        $(document).ready(function() {
            $('#qty').on('input', function() {
                hitungTotal();
            });
        });
    </script>
</head>

<body>
    <div class="mx-auto">
        <!-- Form untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php if ($error) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <?php if ($sukses) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses; ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="hidden" name="id" value="<?php if (isset($_GET['edit'])) echo $_GET['edit']; ?>">
                    <div class="mb-3 row">
                        <label for="produk" class="col-sm-2 col-form-label">Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="produk" name="produk" value="<?php echo $produk; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga" name="harga" value="75000" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="qty" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="qty" name="qty" value="<?php echo $qty; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="total" name="total" value="<?php echo $total; ?>" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                        </div>
                        <div class="col-6 text-right">
                            <a href="cart.php" class="btn btn-secondary">Kembali ke Cart</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel untuk menampilkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Keranjang
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2 = "SELECT * FROM keranjang ORDER BY id DESC";
                        $result = $conn->query($sql2);
                        $urut = 1;

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $produk = $row['produk'];
                                $harga = $row['harga'];
                                $qty = $row['qty'];
                                $total = $row['total'];
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $urut++; ?></th>
                                    <td><?php echo $produk; ?></td>
                                    <td><?php echo $harga; ?></td>
                                    <td><?php echo $qty; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td>
                                        <a href="?edit=<?php echo $id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?hapus=<?php echo $id; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>