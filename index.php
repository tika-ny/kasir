<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body>
<style>
.bodoamat{
    max-width: 400px;
}
</style>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
<div class="container p-4 bg-white shadow rounded bodoamat"> 
    <h2 class="text-center mb-4">Form Kasir</h2>
    <form id="kasirForm" action="proses_kasir.php" method="POST"  onsubmit="return validateForm()">
     <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <label class="form-label">Sartika</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Nim</label>
        <label class="form-label">23050916</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Pelanggan</label>
        <input type="text" class="form-control" name="nama_pelanggan" id="namaPelanggan" placeholder="Masukan Nama Pelanggan" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email Pelanggan</label>
        <input type="email" class="form-control" name="email_pelanggan" id="emailPelanggan" placeholder="Masukan email Pelanggan" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password" required>
        <div class="form-check d-flex align-items-center mb-3">
          <input class="form-check-input me-2 barang" type="checkbox" name="barang[]" value="10000" id="sabun">
          <label class="form-check-label me-auto">Sabun - Rp10.000</label>
          <input type="number" name="jumlah[]" class="form-control ms-2" placeholder="jumlah" min="1" style="width: 80px;">
        </div>
         <div class="form-check d-flex align-items-center mb-3">
          <input class="form-check-input me-2 barang" type="checkbox" name="barang[]" value="10000" id="shampo">
          <label class="form-check-label me-auto">Shampoo - Rp15.000</label>
          <input type="number" name="jumlah[]" class="form-control ms-2" placeholder="jumlah" min="1" style="width: 80px;">
        </div>
        <div class="form-check d-flex align-items-center mb-3">
          <input class="form-check-input me-2 barang" type="checkbox" name="barang[]" value="10000" id="odol">
          <label class="form-check-label me-auto">Odol - Rp20.000</label>
          <input type="number" name="jumlah[]" class="form-control ms-2" placeholder="jumlah" min="1" style="width: 80px;">
        </div>
    
<button type="submit" class="btn btn-success w-100 mt-3">Proses Transaksi</button>
</div>
<script>
        function validateForm() {
            var password = document.getElementById("password").value; if (password.length < 6) {
                alert("Password harus memliki minimal 6 karakter"); return false; //Mencegah formulir disubmit
            }
            return true; // Mengizinkan formulir disubmit
        }
</script>
</body>
</html>