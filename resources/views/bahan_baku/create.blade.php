<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bahan Baku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Tambah Bahan Baku</h1>
        
        <!-- Form Tambah Bahan Baku -->
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('bahan_baku.store') }}" method="POST">
                    @csrf
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama bahan baku" required>
                    </div>
                    
                    <!-- Jumlah -->
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Masukkan jumlah bahan baku" required>
                    </div>
                    
                    <!-- Satuan -->
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan:</label>
                        <input type="text" id="satuan" name="satuan" class="form-control" placeholder="Masukkan satuan bahan baku" required>
                    </div>
                    
                    <!-- Tombol Simpan -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('bahan_baku.index') }}" class="btn btn-secondary me-2">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
